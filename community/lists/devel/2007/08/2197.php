<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Aug 19 18:59:18 2007" -->
<!-- isoreceived="20070819225918" -->
<!-- sent="Sun, 19 Aug 2007 18:59:04 -0400" -->
<!-- isosent="20070819225904" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer" -->
<!-- id="200708191859.04242.tprins_at_cs.indiana.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C2EB2EB5.A3A0%rlgraham_at_ornl.gov" -->
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
<strong>Date:</strong> 2007-08-19 18:59:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2198.php">Terry D. Dontje: "Re: [OMPI devel] [RFC] Runtime Services Layer"</a>
<li><strong>Previous message:</strong> <a href="2196.php">Tim Prins: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>Maybe in reply to:</strong> <a href="2180.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2200.php">Tim Prins: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Friday 17 August 2007 10:53:41 am Richard Graham wrote:
<br>
<span class="quotelev1">&gt; Tim,
</span><br>
<span class="quotelev1">&gt;   This looks like a good idea, and is a good step toward componentizing the
</span><br>
<span class="quotelev1">&gt; run-time services the are available from the MPI's perspective.
</span><br>
<span class="quotelev1">&gt;   A few comments:
</span><br>
<span class="quotelev1">&gt;  - It is a good idea to play around in a sandbox to see what may or may not
</span><br>
<span class="quotelev1">&gt; work - otherwise we are just guessing.  However, this is driven by the
</span><br>
<span class="quotelev1">&gt; current code structure, and may or may not align with longer term plans.
</span><br>
<span class="quotelev1">&gt; What is needed here, I believe, is a deliberate design - i.e. figure out
</span><br>
<span class="quotelev1">&gt; where we want to go, and then see if anything in the implementation needs
</span><br>
<span class="quotelev1">&gt; to change before it is moved over to the trunk.
</span><br>
This is a good point. I have tried to make the design reflect exactly what we 
<br>
need from a generic runtime system, and not just copying how we currently use 
<br>
orte. However, there are some things currently in the RSL which are somewhat 
<br>
orte specific (i.e. multiple init 'stages'), but should not interfer with 
<br>
other runtimes being used (since the runtimes can just use no-ops for 
<br>
unneeded stages).
<br>
<p><span class="quotelev1">&gt;  - We are where we are, and can't just throw it away (it could even be
</span><br>
<span class="quotelev1">&gt; exactly what we want), so even if our &quot;ideal&quot; is different than our current
</span><br>
<span class="quotelev1">&gt; state, I believe incremental change is the way to go, to preserve an
</span><br>
<span class="quotelev1">&gt; operating code base.
</span><br>
Agreed. I think the implementation of the rsl can be done with minimal risk of 
<br>
breaking things, since it requires little (if any) change in opal and orte, 
<br>
and mostly minor changes in ompi.
<br>
<p><span class="quotelev1">&gt;   - I think it is way too early to talk about moving things over to the
</span><br>
<span class="quotelev1">&gt; trunk in the next month or so, unless there sufficient evaluation can be
</span><br>
<span class="quotelev1">&gt; done in a month or so.  This is not to discourage you at all, but just to
</span><br>
<span class="quotelev1">&gt; caution against moving too fast, and then having to redo things.
</span><br>
<span class="quotelev1">&gt;   I am very supportive if this, I do believe this is the right way to go,
</span><br>
<span class="quotelev1">&gt; unless someone else can come up with a better idea, and time to implement.
</span><br>
<p>Thanks for the comments,
<br>
<p>Tim
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/16/07 9:47 PM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; WHAT: Solicitation of feedback on the possibility of adding a runtime
</span><br>
<span class="quotelev2">&gt; &gt; services layer to Open MPI to abstract out the runtime.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; WHY: To solidify the interface between OMPI and the runtime environment,
</span><br>
<span class="quotelev2">&gt; &gt; and to allow the use of different runtime systems, including different
</span><br>
<span class="quotelev2">&gt; &gt; versions of ORTE.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; WHERE: Addition of a new framework to OMPI, and changes to many of the
</span><br>
<span class="quotelev2">&gt; &gt; files in OMPI to funnel all runtime request through this framework. Few
</span><br>
<span class="quotelev2">&gt; &gt; changes should be required in OPAL and ORTE.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; WHEN: Development has started in tmp/rsl, but is still in its infancy. We
</span><br>
<span class="quotelev2">&gt; &gt; hope to have a working system in the next month.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; TIMEOUT: 8/29/07
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------
</span><br>
<span class="quotelev2">&gt; &gt; Short version:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am working on creating an interface between OMPI and the runtime
</span><br>
<span class="quotelev2">&gt; &gt; system. This would make a RSL framework in OMPI which all runtime
</span><br>
<span class="quotelev2">&gt; &gt; services would be accessed from. Attached is a graphic depicting this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This change would be invasive to the OMPI layer. Few (if any) changes
</span><br>
<span class="quotelev2">&gt; &gt; will be required of the ORTE and OPAL layers.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; At this point I am soliciting feedback as to whether people are
</span><br>
<span class="quotelev2">&gt; &gt; supportive or not of this change both in general and for v1.3.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Long version:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The current model used in Open MPI assumes that one runtime system is
</span><br>
<span class="quotelev2">&gt; &gt; the best for all environments. However, in many environments it may be
</span><br>
<span class="quotelev2">&gt; &gt; beneficial to have specialized runtime systems. With our current system
</span><br>
<span class="quotelev2">&gt; &gt; this is not easy to do.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; With this in mind, the idea of creating a 'runtime services layer' was
</span><br>
<span class="quotelev2">&gt; &gt; hatched. This would take the form of a framework within OMPI, through
</span><br>
<span class="quotelev2">&gt; &gt; which all runtime functionality would be accessed. This would allow new
</span><br>
<span class="quotelev2">&gt; &gt; or different runtime systems to be used with Open MPI. Additionally, with
</span><br>
<span class="quotelev2">&gt; &gt; such a system it would be possible to have multiple versions of open rte
</span><br>
<span class="quotelev2">&gt; &gt; coexisting, which may facilitate development and testing. Finally, this
</span><br>
<span class="quotelev2">&gt; &gt; would solidify the interface between OMPI and the runtime system, as well
</span><br>
<span class="quotelev2">&gt; &gt; as provide documentation and side effects of each interface function.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, such a change would be fairly invasive to the OMPI layer, and
</span><br>
<span class="quotelev2">&gt; &gt; needs a buy-in from everyone for it to be possible.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is a summary of the changes required for the RSL (at least how it is
</span><br>
<span class="quotelev2">&gt; &gt; currently envisioned):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. Add a framework to ompi for the rsl, and a component to support orte.
</span><br>
<span class="quotelev2">&gt; &gt; 2. Change ompi so that it uses the new interface. This involves:
</span><br>
<span class="quotelev2">&gt; &gt;          a. Moving runtime specific code into the orte rsl component.
</span><br>
<span class="quotelev2">&gt; &gt;          b. Changing the process names in ompi to an opaque object.
</span><br>
<span class="quotelev2">&gt; &gt;          c. change all references to orte in ompi to be to the rsl.
</span><br>
<span class="quotelev2">&gt; &gt; 3. Change the configuration code so that open-rte is only linked where
</span><br>
<span class="quotelev2">&gt; &gt; needed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Of course, all this would happen on a tmp branch.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The design of the rsl is not solidified. I have been playing in a tmp
</span><br>
<span class="quotelev2">&gt; &gt; branch (located at <a href="https://svn.open-mpi.org/svn/ompi/tmp/rsl">https://svn.open-mpi.org/svn/ompi/tmp/rsl</a>) which
</span><br>
<span class="quotelev2">&gt; &gt; everyone is welcome to look at and comment on, but be advised that things
</span><br>
<span class="quotelev2">&gt; &gt; here are subject to change (I don't think it even compiles right now).
</span><br>
<span class="quotelev2">&gt; &gt; There are some fairly large open questions on this, including:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. How to handle mpirun (that is, when a user types 'mpirun', do they
</span><br>
<span class="quotelev2">&gt; &gt; always get ORTE, or do they sometimes get a system specific runtime).
</span><br>
<span class="quotelev2">&gt; &gt; Most likely mpirun will always use ORTE, and alternative launching
</span><br>
<span class="quotelev2">&gt; &gt; programs would be used for other runtimes.
</span><br>
<span class="quotelev2">&gt; &gt; 2. Whether there will be any performance implications. My guess is not,
</span><br>
<span class="quotelev2">&gt; &gt; but am not quite sure of this yet.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Again, I am interested in people's comments on whether they think adding
</span><br>
<span class="quotelev2">&gt; &gt; such abstraction is good or not, and whether it is reasonable to do such
</span><br>
<span class="quotelev2">&gt; &gt; a thing for v1.3.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tim Prins
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel-core mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
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
<li><strong>Next message:</strong> <a href="2198.php">Terry D. Dontje: "Re: [OMPI devel] [RFC] Runtime Services Layer"</a>
<li><strong>Previous message:</strong> <a href="2196.php">Tim Prins: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>Maybe in reply to:</strong> <a href="2180.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2200.php">Tim Prins: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
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
