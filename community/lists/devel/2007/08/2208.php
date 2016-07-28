<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 24 00:05:59 2007" -->
<!-- isoreceived="20070824040559" -->
<!-- sent="Fri, 24 Aug 2007 00:05:49 -0400" -->
<!-- isosent="20070824040549" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer" -->
<!-- id="4B4958D7-7C2E-491F-8D17-B20CA1CD3F5F_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200708162147.10145.tprins_at_cs.indiana.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-24 00:05:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2209.php">Terry D. Dontje: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>Previous message:</strong> <a href="2207.php">Terry D. Dontje: "Re: [OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
<li><strong>In reply to:</strong> <a href="2170.php">Tim Prins: "[OMPI devel] [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2209.php">Terry D. Dontje: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>Reply:</strong> <a href="2209.php">Terry D. Dontje: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>Reply:</strong> <a href="2210.php">Tim Prins: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like I'm the only one barely excited about this idea. The  
<br>
system that you described, is well known. It been around for around  
<br>
10 years, and it's called PMI. The interface you have in the tmp  
<br>
branch as well as the description you gave in your email are more  
<br>
than similar with what they sketch in the following two documents:
<br>
<p><a href="http://www-unix.mcs.anl.gov/mpi/mpich/developer/design/pmiv2draft.htm">http://www-unix.mcs.anl.gov/mpi/mpich/developer/design/pmiv2draft.htm</a>
<br>
<a href="http://www-unix.mcs.anl.gov/mpi/mpich/developer/design/pmiv2.htm">http://www-unix.mcs.anl.gov/mpi/mpich/developer/design/pmiv2.htm</a>
<br>
<p>Now, there is something wrong with reinventing the wheel if there are  
<br>
no improvements. And so far I'm unable to notice any major  
<br>
improvement neither compared with PMI nor with what we have today  
<br>
(except maybe being able to use PMI inside Open MPI).
<br>
<p>Again, my main concern is about fault tolerance. There is nothing in  
<br>
PMI (and nothing in RSL so far) that allow any kind of fault  
<br>
tolerance [And believe me re-writing the MPICH mpirun to allow  
<br>
checkpoint/restart is a hassle]. Moreover, your approach seems to  
<br>
open the possibility of having heterogeneous RTE (in terms of  
<br>
features) which in my view is definitively the wrong approach.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 16, 2007, at 9:47 PM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Solicitation of feedback on the possibility of adding a runtime
</span><br>
<span class="quotelev1">&gt; services layer to Open MPI to abstract out the runtime.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: To solidify the interface between OMPI and the runtime  
</span><br>
<span class="quotelev1">&gt; environment,
</span><br>
<span class="quotelev1">&gt; and to allow the use of different runtime systems, including different
</span><br>
<span class="quotelev1">&gt; versions of ORTE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: Addition of a new framework to OMPI, and changes to many of the
</span><br>
<span class="quotelev1">&gt; files in OMPI to funnel all runtime request through this framework.  
</span><br>
<span class="quotelev1">&gt; Few
</span><br>
<span class="quotelev1">&gt; changes should be required in OPAL and ORTE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHEN: Development has started in tmp/rsl, but is still in its  
</span><br>
<span class="quotelev1">&gt; infancy. We hope
</span><br>
<span class="quotelev1">&gt; to have a working system in the next month.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: 8/29/07
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; Short version:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am working on creating an interface between OMPI and the runtime  
</span><br>
<span class="quotelev1">&gt; system.
</span><br>
<span class="quotelev1">&gt; This would make a RSL framework in OMPI which all runtime services  
</span><br>
<span class="quotelev1">&gt; would be
</span><br>
<span class="quotelev1">&gt; accessed from. Attached is a graphic depicting this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This change would be invasive to the OMPI layer. Few (if any) changes
</span><br>
<span class="quotelev1">&gt; will be required of the ORTE and OPAL layers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At this point I am soliciting feedback as to whether people are
</span><br>
<span class="quotelev1">&gt; supportive or not of this change both in general and for v1.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Long version:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The current model used in Open MPI assumes that one runtime system is
</span><br>
<span class="quotelev1">&gt; the best for all environments. However, in many environments it may be
</span><br>
<span class="quotelev1">&gt; beneficial to have specialized runtime systems. With our current  
</span><br>
<span class="quotelev1">&gt; system this
</span><br>
<span class="quotelev1">&gt; is not easy to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With this in mind, the idea of creating a 'runtime services layer' was
</span><br>
<span class="quotelev1">&gt; hatched. This would take the form of a framework within OMPI,  
</span><br>
<span class="quotelev1">&gt; through which
</span><br>
<span class="quotelev1">&gt; all runtime functionality would be accessed. This would allow new or
</span><br>
<span class="quotelev1">&gt; different runtime systems to be used with Open MPI. Additionally,  
</span><br>
<span class="quotelev1">&gt; with such a
</span><br>
<span class="quotelev1">&gt; system it would be possible to have multiple versions of open rte  
</span><br>
<span class="quotelev1">&gt; coexisting,
</span><br>
<span class="quotelev1">&gt; which may facilitate development and testing. Finally, this would  
</span><br>
<span class="quotelev1">&gt; solidify the
</span><br>
<span class="quotelev1">&gt; interface between OMPI and the runtime system, as well as provide
</span><br>
<span class="quotelev1">&gt; documentation and side effects of each interface function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, such a change would be fairly invasive to the OMPI layer, and
</span><br>
<span class="quotelev1">&gt; needs a buy-in from everyone for it to be possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is a summary of the changes required for the RSL (at least how  
</span><br>
<span class="quotelev1">&gt; it is
</span><br>
<span class="quotelev1">&gt; currently envisioned):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Add a framework to ompi for the rsl, and a component to support  
</span><br>
<span class="quotelev1">&gt; orte.
</span><br>
<span class="quotelev1">&gt; 2. Change ompi so that it uses the new interface. This involves:
</span><br>
<span class="quotelev1">&gt;          a. Moving runtime specific code into the orte rsl component.
</span><br>
<span class="quotelev1">&gt;          b. Changing the process names in ompi to an opaque object.
</span><br>
<span class="quotelev1">&gt;          c. change all references to orte in ompi to be to the rsl.
</span><br>
<span class="quotelev1">&gt; 3. Change the configuration code so that open-rte is only linked  
</span><br>
<span class="quotelev1">&gt; where needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course, all this would happen on a tmp branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The design of the rsl is not solidified. I have been playing in a  
</span><br>
<span class="quotelev1">&gt; tmp branch
</span><br>
<span class="quotelev1">&gt; (located at <a href="https://svn.open-mpi.org/svn/ompi/tmp/rsl">https://svn.open-mpi.org/svn/ompi/tmp/rsl</a>) which  
</span><br>
<span class="quotelev1">&gt; everyone is
</span><br>
<span class="quotelev1">&gt; welcome to look at and comment on, but be advised that things here are
</span><br>
<span class="quotelev1">&gt; subject to change (I don't think it even compiles right now). There  
</span><br>
<span class="quotelev1">&gt; are
</span><br>
<span class="quotelev1">&gt; some fairly large open questions on this, including:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. How to handle mpirun (that is, when a user types 'mpirun', do they
</span><br>
<span class="quotelev1">&gt; always get ORTE, or do they sometimes get a system specific  
</span><br>
<span class="quotelev1">&gt; runtime). Most
</span><br>
<span class="quotelev1">&gt; likely mpirun will always use ORTE, and alternative launching  
</span><br>
<span class="quotelev1">&gt; programs would
</span><br>
<span class="quotelev1">&gt; be used for other runtimes.
</span><br>
<span class="quotelev1">&gt; 2. Whether there will be any performance implications. My guess is  
</span><br>
<span class="quotelev1">&gt; not,
</span><br>
<span class="quotelev1">&gt; but am not quite sure of this yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, I am interested in people's comments on whether they think  
</span><br>
<span class="quotelev1">&gt; adding
</span><br>
<span class="quotelev1">&gt; such abstraction is good or not, and whether it is reasonable to do  
</span><br>
<span class="quotelev1">&gt; such a
</span><br>
<span class="quotelev1">&gt; thing for v1.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim Prins&lt;RSL- 
</span><br>
<span class="quotelev1">&gt; Diagram.pdf&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel-core mailing list
</span><br>
<span class="quotelev1">&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2209.php">Terry D. Dontje: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>Previous message:</strong> <a href="2207.php">Terry D. Dontje: "Re: [OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
<li><strong>In reply to:</strong> <a href="2170.php">Tim Prins: "[OMPI devel] [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2209.php">Terry D. Dontje: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>Reply:</strong> <a href="2209.php">Terry D. Dontje: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>Reply:</strong> <a href="2210.php">Tim Prins: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
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
