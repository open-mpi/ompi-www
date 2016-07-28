<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 16 21:47:23 2007" -->
<!-- isoreceived="20070817014723" -->
<!-- sent="Thu, 16 Aug 2007 21:47:09 -0400" -->
<!-- isosent="20070817014709" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="[OMPI devel] [RFC] Runtime Services Layer" -->
<!-- id="200708162147.10145.tprins_at_cs.indiana.edu" -->
<!-- charset="iso-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-16 21:47:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2171.php">Doug Tody: "Re: [OMPI devel] [RFC] Runtime Services Layer"</a>
<li><strong>Previous message:</strong> <a href="2169.php">Uwe Hermann: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2171.php">Doug Tody: "Re: [OMPI devel] [RFC] Runtime Services Layer"</a>
<li><strong>Reply:</strong> <a href="2171.php">Doug Tody: "Re: [OMPI devel] [RFC] Runtime Services Layer"</a>
<li><strong>Reply:</strong> <a href="2180.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>Reply:</strong> <a href="2198.php">Terry D. Dontje: "Re: [OMPI devel] [RFC] Runtime Services Layer"</a>
<li><strong>Reply:</strong> <a href="2202.php">Ralph H Castain: "Re: [OMPI devel] [RFC] Runtime Services Layer"</a>
<li><strong>Reply:</strong> <a href="2208.php">George Bosilca: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Solicitation of feedback on the possibility of adding a runtime 
<br>
services layer to Open MPI to abstract out the runtime.
<br>
<p>WHY: To solidify the interface between OMPI and the runtime environment, 
<br>
and to allow the use of different runtime systems, including different 
<br>
versions of ORTE.
<br>
<p>WHERE: Addition of a new framework to OMPI, and changes to many of the 
<br>
files in OMPI to funnel all runtime request through this framework. Few 
<br>
changes should be required in OPAL and ORTE.
<br>
<p>WHEN: Development has started in tmp/rsl, but is still in its infancy. We hope 
<br>
to have a working system in the next month.
<br>
<p>TIMEOUT: 8/29/07
<br>
<p>------
<br>
Short version:
<br>
<p>I am working on creating an interface between OMPI and the runtime system. 
<br>
This would make a RSL framework in OMPI which all runtime services would be 
<br>
accessed from. Attached is a graphic depicting this.
<br>
<p>This change would be invasive to the OMPI layer. Few (if any) changes 
<br>
will be required of the ORTE and OPAL layers.
<br>
<p>At this point I am soliciting feedback as to whether people are 
<br>
supportive or not of this change both in general and for v1.3.
<br>
<p><p>Long version:
<br>
<p>The current model used in Open MPI assumes that one runtime system is 
<br>
the best for all environments. However, in many environments it may be 
<br>
beneficial to have specialized runtime systems. With our current system this 
<br>
is not easy to do.
<br>
<p>With this in mind, the idea of creating a 'runtime services layer' was 
<br>
hatched. This would take the form of a framework within OMPI, through which 
<br>
all runtime functionality would be accessed. This would allow new or 
<br>
different runtime systems to be used with Open MPI. Additionally, with such a
<br>
system it would be possible to have multiple versions of open rte coexisting,
<br>
which may facilitate development and testing. Finally, this would solidify the 
<br>
interface between OMPI and the runtime system, as well as provide 
<br>
documentation and side effects of each interface function.
<br>
<p>However, such a change would be fairly invasive to the OMPI layer, and 
<br>
needs a buy-in from everyone for it to be possible.
<br>
<p>Here is a summary of the changes required for the RSL (at least how it is 
<br>
currently envisioned):
<br>
<p>1. Add a framework to ompi for the rsl, and a component to support orte.
<br>
2. Change ompi so that it uses the new interface. This involves:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Moving runtime specific code into the orte rsl component.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Changing the process names in ompi to an opaque object.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c. change all references to orte in ompi to be to the rsl.
<br>
3. Change the configuration code so that open-rte is only linked where needed.
<br>
<p>Of course, all this would happen on a tmp branch.
<br>
<p>The design of the rsl is not solidified. I have been playing in a tmp branch 
<br>
(located at <a href="https://svn.open-mpi.org/svn/ompi/tmp/rsl">https://svn.open-mpi.org/svn/ompi/tmp/rsl</a>) which everyone is 
<br>
welcome to look at and comment on, but be advised that things here are 
<br>
subject to change (I don't think it even compiles right now). There are 
<br>
some fairly large open questions on this, including:
<br>
<p>1. How to handle mpirun (that is, when a user types 'mpirun', do they 
<br>
always get ORTE, or do they sometimes get a system specific runtime). Most 
<br>
likely mpirun will always use ORTE, and alternative launching programs would 
<br>
be used for other runtimes.
<br>
2. Whether there will be any performance implications. My guess is not, 
<br>
but am not quite sure of this yet.
<br>
<p>Again, I am interested in people's comments on whether they think adding 
<br>
such abstraction is good or not, and whether it is reasonable to do such a 
<br>
thing for v1.3.
<br>
<p>Thanks,
<br>
<p>Tim Prins
<br>
<p>
<br><p>
<p><hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2170/RSL-Diagram.pdf">RSL-Diagram.pdf</a>
</ul>
<!-- attachment="RSL-Diagram.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2171.php">Doug Tody: "Re: [OMPI devel] [RFC] Runtime Services Layer"</a>
<li><strong>Previous message:</strong> <a href="2169.php">Uwe Hermann: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2171.php">Doug Tody: "Re: [OMPI devel] [RFC] Runtime Services Layer"</a>
<li><strong>Reply:</strong> <a href="2171.php">Doug Tody: "Re: [OMPI devel] [RFC] Runtime Services Layer"</a>
<li><strong>Reply:</strong> <a href="2180.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>Reply:</strong> <a href="2198.php">Terry D. Dontje: "Re: [OMPI devel] [RFC] Runtime Services Layer"</a>
<li><strong>Reply:</strong> <a href="2202.php">Ralph H Castain: "Re: [OMPI devel] [RFC] Runtime Services Layer"</a>
<li><strong>Reply:</strong> <a href="2208.php">George Bosilca: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
