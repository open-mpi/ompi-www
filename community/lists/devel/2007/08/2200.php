<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 21 14:27:52 2007" -->
<!-- isoreceived="20070821182752" -->
<!-- sent="Tue, 21 Aug 2007 14:28:00 -0400" -->
<!-- isosent="20070821182800" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer" -->
<!-- id="46CB2EB0.3040601_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46C97819.1050608_at_sun.com" -->
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
<strong>Date:</strong> 2007-08-21 14:28:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2201.php">Terry D. Dontje: "[OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
<li><strong>Previous message:</strong> <a href="2199.php">Tim Prins: "Re: [OMPI devel] [RFC] Runtime Services Layer"</a>
<li><strong>Maybe in reply to:</strong> <a href="2180.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2198.php">Terry D. Dontje: "Re: [OMPI devel] [RFC] Runtime Services Layer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, ABI is something that has been on many people's &quot;it would be nice 
<br>
to have this someday&quot; list, but I agree with Terry in that if this is 
<br>
something we want, MPI is the place to start.
<br>
<p>I assume that the RSL will have the same ABI problems as every other 
<br>
framework.
<br>
<p>Tim
<br>
<p>Terry D. Dontje wrote:
<br>
<span class="quotelev1">&gt; Matthias Mueller wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tim, all, 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe that such an effort also would be an opportunity to come up
</span><br>
<span class="quotelev2">&gt;&gt; with a strategy regarding upwards and downwards compatibility (will a
</span><br>
<span class="quotelev2">&gt;&gt; binary compiled with one version work within the runtime of a different
</span><br>
<span class="quotelev2">&gt;&gt; version?). IMHO this is what is needed by ISV when they ship binaries,
</span><br>
<span class="quotelev2">&gt;&gt; it is alo needed by any user who doesn't want to recompile after any
</span><br>
<span class="quotelev2">&gt;&gt; (minor) upgrade by the sysadmins. 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; This seems like a lot wider topic than just the ORTE.  I really think that
</span><br>
<span class="quotelev1">&gt; if the community was going to attack the ABI compatibiltiy we really
</span><br>
<span class="quotelev1">&gt; should start at the MPI interface area.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; AFAIK Open MPI does not have a (strong or advertised) commitment
</span><br>
<span class="quotelev2">&gt;&gt; regarding compatibility.  It would be nice to have such a commitment and
</span><br>
<span class="quotelev2">&gt;&gt; also proper error messages when someone tries to run a binary in an
</span><br>
<span class="quotelev2">&gt;&gt; environment that is not compatible.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Matthias
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, 2007-08-16 at 21:47 -0400, Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT: Solicitation of feedback on the possibility of adding a runtime 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; services layer to Open MPI to abstract out the runtime.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY: To solidify the interface between OMPI and the runtime environment, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and to allow the use of different runtime systems, including different 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; versions of ORTE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE: Addition of a new framework to OMPI, and changes to many of the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; files in OMPI to funnel all runtime request through this framework. Few 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; changes should be required in OPAL and ORTE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHEN: Development has started in tmp/rsl, but is still in its infancy. We hope 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to have a working system in the next month.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TIMEOUT: 8/29/07
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Short version:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am working on creating an interface between OMPI and the runtime system. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This would make a RSL framework in OMPI which all runtime services would be 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; accessed from. Attached is a graphic depicting this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This change would be invasive to the OMPI layer. Few (if any) changes 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will be required of the ORTE and OPAL layers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At this point I am soliciting feedback as to whether people are 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supportive or not of this change both in general and for v1.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Long version:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The current model used in Open MPI assumes that one runtime system is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the best for all environments. However, in many environments it may be 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; beneficial to have specialized runtime systems. With our current system this 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is not easy to do.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With this in mind, the idea of creating a 'runtime services layer' was 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hatched. This would take the form of a framework within OMPI, through which 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all runtime functionality would be accessed. This would allow new or 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different runtime systems to be used with Open MPI. Additionally, with such a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system it would be possible to have multiple versions of open rte coexisting,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which may facilitate development and testing. Finally, this would solidify the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interface between OMPI and the runtime system, as well as provide 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; documentation and side effects of each interface function.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, such a change would be fairly invasive to the OMPI layer, and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; needs a buy-in from everyone for it to be possible.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is a summary of the changes required for the RSL (at least how it is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; currently envisioned):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. Add a framework to ompi for the rsl, and a component to support orte.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Change ompi so that it uses the new interface. This involves:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         a. Moving runtime specific code into the orte rsl component.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         b. Changing the process names in ompi to an opaque object.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         c. change all references to orte in ompi to be to the rsl.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. Change the configuration code so that open-rte is only linked where needed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Of course, all this would happen on a tmp branch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The design of the rsl is not solidified. I have been playing in a tmp branch 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (located at <a href="https://svn.open-mpi.org/svn/ompi/tmp/rsl">https://svn.open-mpi.org/svn/ompi/tmp/rsl</a>) which everyone is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; welcome to look at and comment on, but be advised that things here are 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; subject to change (I don't think it even compiles right now). There are 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some fairly large open questions on this, including:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. How to handle mpirun (that is, when a user types 'mpirun', do they 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; always get ORTE, or do they sometimes get a system specific runtime). Most 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely mpirun will always use ORTE, and alternative launching programs would 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be used for other runtimes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Whether there will be any performance implications. My guess is not, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but am not quite sure of this yet.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Again, I am interested in people's comments on whether they think adding 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; such abstraction is good or not, and whether it is reasonable to do such a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thing for v1.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim Prins
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel-core mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="2201.php">Terry D. Dontje: "[OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
<li><strong>Previous message:</strong> <a href="2199.php">Tim Prins: "Re: [OMPI devel] [RFC] Runtime Services Layer"</a>
<li><strong>Maybe in reply to:</strong> <a href="2180.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2198.php">Terry D. Dontje: "Re: [OMPI devel] [RFC] Runtime Services Layer"</a>
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
