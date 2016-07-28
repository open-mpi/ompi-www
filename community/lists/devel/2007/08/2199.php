<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 21 14:25:33 2007" -->
<!-- isoreceived="20070821182533" -->
<!-- sent="Tue, 21 Aug 2007 14:25:40 -0400" -->
<!-- isosent="20070821182540" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Runtime Services Layer" -->
<!-- id="46CB2E24.4000302_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46C9772C.2050705_at_sun.com" -->
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
<strong>Date:</strong> 2007-08-21 14:25:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2200.php">Tim Prins: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>Previous message:</strong> <a href="2198.php">Terry D. Dontje: "Re: [OMPI devel] [RFC] Runtime Services Layer"</a>
<li><strong>In reply to:</strong> <a href="2198.php">Terry D. Dontje: "Re: [OMPI devel] [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2202.php">Ralph H Castain: "Re: [OMPI devel] [RFC] Runtime Services Layer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry,
<br>
<p>Thanks for the comments. Responses below.
<br>
<p>Terry D. Dontje wrote:
<br>
<span class="quotelev1">&gt; I think the concept is a good idea.  A few questions that come to mind:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.  Do you have a set of APIs you plan on supporting? 
</span><br>
Do you mean the RSL API? Or do you mean the APIs of alternative runtime 
<br>
systems?
<br>
<p>The rsl API is in 
<br>
<a href="https://svn.open-mpi.org/svn/ompi/tmp/rsl/ompi/mca/rsl/rsl.h">https://svn.open-mpi.org/svn/ompi/tmp/rsl/ompi/mca/rsl/rsl.h</a>
<br>
<p>As far as other runtime systems, I have not looked too much at what 
<br>
others support. However, I am trying to make the APIs in the RSL as 
<br>
generic as possible.
<br>
<p><span class="quotelev1">&gt; 2.  Are you planning on adding new APIs (not currently supported by ORTE)?
</span><br>
Not in the sense of new functionality, but some of the APIs are quite 
<br>
different then ORTE is currently using.
<br>
<p><span class="quotelev1">&gt; 3.  Do any of the ORTE replacement APIs differ in how they work?
</span><br>
Well, every runtime does things differently.
<br>
<p>For instance, looking at the MPICH PMI interface (which is sort-of their 
<br>
version of the RSL), they make heavy use of a key-value space. For the 
<br>
RSL, I am using process attributes which are similar in concept to this, 
<br>
but do work slightly differently.
<br>
<p>Another difference is that the RSL exposes a out of band communication 
<br>
interface, which is not provided by the PMI. So if we used a runtime 
<br>
that was based on the PMI, then we would have to do our own out-of-band 
<br>
communication within the RSL component.
<br>
<p><span class="quotelev1">&gt; 4.  Will RSL change in how we access information from the GPR?  If not
</span><br>
<span class="quotelev1">&gt;      how does this layer really separate us from ORTE?
</span><br>
Yes, although there is already a layer of abstraction here since the GPR 
<br>
usage in OMPI all goes through the modex code.
<br>
<p>So what would happen with the RSL would be that the modex send/recv 
<br>
would be called, which would then call the process attribute send/recv 
<br>
code. Alternatively, the process attribute system could be called directly.
<br>
<p>The process attribute system in the RSL would then use whatever 
<br>
implementation specific system it wants to exchange the data.
<br>
<p><span class="quotelev1">&gt; 5.  How will RSL handle OOB functionality (routing of messages)?
</span><br>
That is up to the rsl implementation. An out-of-band interface is 
<br>
provided, and it is the components job to make sure the message is 
<br>
delivered.
<br>
<p><span class="quotelev1">&gt; 6.  How does making the process names opaque differ from how ORTE
</span><br>
<span class="quotelev1">&gt;      names processes?  Do you still need a global namespace for a 
</span><br>
<span class="quotelev1">&gt; &quot;universe&quot;?
</span><br>
Again, it is up to the implementation. OMPI assumes that all process 
<br>
names it sees uniquely identify a remote process. In this sense, a 
<br>
global process namespace would need be needed. But if the rsl wanted to 
<br>
do some trickery to avoid the need for a global namespace, it probably 
<br>
could.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I like the idea but I really wonder if this will even be half-baked in 
</span><br>
<span class="quotelev1">&gt; time for
</span><br>
<span class="quotelev1">&gt; 1.3  (same concern as Jeff's).
</span><br>
Understood.
<br>
<p>Tim
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Solicitation of feedback on the possibility of adding a runtime 
</span><br>
<span class="quotelev2">&gt;&gt; services layer to Open MPI to abstract out the runtime.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHY: To solidify the interface between OMPI and the runtime environment, 
</span><br>
<span class="quotelev2">&gt;&gt; and to allow the use of different runtime systems, including different 
</span><br>
<span class="quotelev2">&gt;&gt; versions of ORTE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: Addition of a new framework to OMPI, and changes to many of the 
</span><br>
<span class="quotelev2">&gt;&gt; files in OMPI to funnel all runtime request through this framework. Few 
</span><br>
<span class="quotelev2">&gt;&gt; changes should be required in OPAL and ORTE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHEN: Development has started in tmp/rsl, but is still in its infancy. We hope 
</span><br>
<span class="quotelev2">&gt;&gt; to have a working system in the next month.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: 8/29/07
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt; Short version:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am working on creating an interface between OMPI and the runtime system. 
</span><br>
<span class="quotelev2">&gt;&gt; This would make a RSL framework in OMPI which all runtime services would be 
</span><br>
<span class="quotelev2">&gt;&gt; accessed from. Attached is a graphic depicting this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This change would be invasive to the OMPI layer. Few (if any) changes 
</span><br>
<span class="quotelev2">&gt;&gt; will be required of the ORTE and OPAL layers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At this point I am soliciting feedback as to whether people are 
</span><br>
<span class="quotelev2">&gt;&gt; supportive or not of this change both in general and for v1.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Long version:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The current model used in Open MPI assumes that one runtime system is 
</span><br>
<span class="quotelev2">&gt;&gt; the best for all environments. However, in many environments it may be 
</span><br>
<span class="quotelev2">&gt;&gt; beneficial to have specialized runtime systems. With our current system this 
</span><br>
<span class="quotelev2">&gt;&gt; is not easy to do.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With this in mind, the idea of creating a 'runtime services layer' was 
</span><br>
<span class="quotelev2">&gt;&gt; hatched. This would take the form of a framework within OMPI, through which 
</span><br>
<span class="quotelev2">&gt;&gt; all runtime functionality would be accessed. This would allow new or 
</span><br>
<span class="quotelev2">&gt;&gt; different runtime systems to be used with Open MPI. Additionally, with such a
</span><br>
<span class="quotelev2">&gt;&gt; system it would be possible to have multiple versions of open rte coexisting,
</span><br>
<span class="quotelev2">&gt;&gt; which may facilitate development and testing. Finally, this would solidify the 
</span><br>
<span class="quotelev2">&gt;&gt; interface between OMPI and the runtime system, as well as provide 
</span><br>
<span class="quotelev2">&gt;&gt; documentation and side effects of each interface function.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, such a change would be fairly invasive to the OMPI layer, and 
</span><br>
<span class="quotelev2">&gt;&gt; needs a buy-in from everyone for it to be possible.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is a summary of the changes required for the RSL (at least how it is 
</span><br>
<span class="quotelev2">&gt;&gt; currently envisioned):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Add a framework to ompi for the rsl, and a component to support orte.
</span><br>
<span class="quotelev2">&gt;&gt; 2. Change ompi so that it uses the new interface. This involves:
</span><br>
<span class="quotelev2">&gt;&gt;         a. Moving runtime specific code into the orte rsl component.
</span><br>
<span class="quotelev2">&gt;&gt;         b. Changing the process names in ompi to an opaque object.
</span><br>
<span class="quotelev2">&gt;&gt;         c. change all references to orte in ompi to be to the rsl.
</span><br>
<span class="quotelev2">&gt;&gt; 3. Change the configuration code so that open-rte is only linked where needed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Of course, all this would happen on a tmp branch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The design of the rsl is not solidified. I have been playing in a tmp branch 
</span><br>
<span class="quotelev2">&gt;&gt; (located at <a href="https://svn.open-mpi.org/svn/ompi/tmp/rsl">https://svn.open-mpi.org/svn/ompi/tmp/rsl</a>) which everyone is 
</span><br>
<span class="quotelev2">&gt;&gt; welcome to look at and comment on, but be advised that things here are 
</span><br>
<span class="quotelev2">&gt;&gt; subject to change (I don't think it even compiles right now). There are 
</span><br>
<span class="quotelev2">&gt;&gt; some fairly large open questions on this, including:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. How to handle mpirun (that is, when a user types 'mpirun', do they 
</span><br>
<span class="quotelev2">&gt;&gt; always get ORTE, or do they sometimes get a system specific runtime). Most 
</span><br>
<span class="quotelev2">&gt;&gt; likely mpirun will always use ORTE, and alternative launching programs would 
</span><br>
<span class="quotelev2">&gt;&gt; be used for other runtimes.
</span><br>
<span class="quotelev2">&gt;&gt; 2. Whether there will be any performance implications. My guess is not, 
</span><br>
<span class="quotelev2">&gt;&gt; but am not quite sure of this yet.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Again, I am interested in people's comments on whether they think adding 
</span><br>
<span class="quotelev2">&gt;&gt; such abstraction is good or not, and whether it is reasonable to do such a 
</span><br>
<span class="quotelev2">&gt;&gt; thing for v1.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim Prins
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2200.php">Tim Prins: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>Previous message:</strong> <a href="2198.php">Terry D. Dontje: "Re: [OMPI devel] [RFC] Runtime Services Layer"</a>
<li><strong>In reply to:</strong> <a href="2198.php">Terry D. Dontje: "Re: [OMPI devel] [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2202.php">Ralph H Castain: "Re: [OMPI devel] [RFC] Runtime Services Layer"</a>
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
