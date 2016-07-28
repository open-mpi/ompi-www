<?
$subject_val = "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 13 12:33:11 2008" -->
<!-- isoreceived="20080213173311" -->
<!-- sent="Wed, 13 Feb 2008 10:32:30 -0700 (MST)" -->
<!-- isosent="20080213173230" -->
<!-- name="Doug Tody" -->
<!-- email="dtody_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk" -->
<!-- id="Pine.LNX.4.64.0802131014290.10777_at_oak" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C3D7B3DB.4631%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk<br>
<strong>From:</strong> Doug Tody (<em>dtody_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-13 12:32:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3245.php">Jeff Squyres: "[OMPI devel] --with-visibility"</a>
<li><strong>Previous message:</strong> <a href="3243.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Remove explicit call to progress() from ob1."</a>
<li><strong>In reply to:</strong> <a href="3230.php">Ralph Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph -
<br>
<p>Eliminating the dependence of OMPI on the GPR is in some ways
<br>
actually a plus, as it should make it much easier to enhance the GPR
<br>
as an optional advanced capability.  In general, it would be great
<br>
if OMPI/ORTE could make it easier to support this sort of extension
<br>
mechanism, for example by evolving the framework mechanism to a general
<br>
plugin mechanism supporting dynamic components as well as statically
<br>
compiled in ones.  Probably this is what you meant by dynamic binary
<br>
modules below.
<br>
<p><span class="quotelev1">&gt; That said, it would be relatively simple to add an extension that provided a
</span><br>
<span class="quotelev1">&gt; level of data storage that user-level programs could access. It would not
</span><br>
<span class="quotelev1">&gt; provide any subscription or trigger capabilities, however - we need to leave
</span><br>
<span class="quotelev1">&gt; those out of the system to avoid reintroducing the event-driven problems
</span><br>
<span class="quotelev1">&gt; again. But if you just wanted to store and retrieve data for sharing it
</span><br>
<span class="quotelev1">&gt; across processes, that could be provided with minimal effort or impact.
</span><br>
<p>Yes, this is what I had in mind.  I do not understand the problem with
<br>
event-driven capabilities however; so long as these are only used in
<br>
some applications and not used for OMPI they should not compromise
<br>
OMPI.  Even given a storage-only GPR, it should be possible for an
<br>
application to use the RML to accomplish much the same thing.  Also,
<br>
whether there are problems (such as deadlock) with asynchronous,
<br>
event driven interactions is largely an issue of the interaction
<br>
patterns employed, and can be managed by careful design of the higher
<br>
level applications and their interactions.
<br>
<p><span class="quotelev1">&gt; Another alternative: there is a separate &quot;ORTE&quot; project in Europe that is
</span><br>
<span class="quotelev1">&gt; building extensions to our ORTE - they are tracking these code changes,
</span><br>
<p>Sounds interesting - how would one find out more about this?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Doug
<br>
<p><p>On Tue, 12 Feb 2008, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hi Doug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The changes are rather far-reaching. We essentially revamped the entire RTE
</span><br>
<span class="quotelev1">&gt; to switch from an event-driven architecture to one based on sequential
</span><br>
<span class="quotelev1">&gt; logic. This had large benefits, but the GPR was the casualty. Remember, the
</span><br>
<span class="quotelev1">&gt; aim for the past year has been to create a dedicated &quot;lean, mean OMPI
</span><br>
<span class="quotelev1">&gt; machine&quot;!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That said, it would be relatively simple to add an extension that provided a
</span><br>
<span class="quotelev1">&gt; level of data storage that user-level programs could access. It would not
</span><br>
<span class="quotelev1">&gt; provide any subscription or trigger capabilities, however - we need to leave
</span><br>
<span class="quotelev1">&gt; those out of the system to avoid reintroducing the event-driven problems
</span><br>
<span class="quotelev1">&gt; again. But if you just wanted to store and retrieve data for sharing it
</span><br>
<span class="quotelev1">&gt; across processes, that could be provided with minimal effort or impact.
</span><br>
<span class="quotelev1">&gt; Probably best done as a compile-time optional module, though, to avoid
</span><br>
<span class="quotelev1">&gt; adding to the memory footprint for everyone.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another alternative: there is a separate &quot;ORTE&quot; project in Europe that is
</span><br>
<span class="quotelev1">&gt; building extensions to our ORTE - they are tracking these code changes, but
</span><br>
<span class="quotelev1">&gt; adding &quot;bolt-ons&quot; such as a GPR-like central data store, hooks for workflow
</span><br>
<span class="quotelev1">&gt; management and the grid, multi-cluster operations, etc. I'm working with
</span><br>
<span class="quotelev1">&gt; them on those efforts - if there is interest in such capabilities, I can
</span><br>
<span class="quotelev1">&gt; probably look into architecting things so that some of the &quot;bolt-ons&quot; could
</span><br>
<span class="quotelev1">&gt; be dynamically picked up by OMPI as binary modules or something.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For now, though, there will be no GPR-like storage in the new system.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/12/08 1:43 PM, &quot;Doug Tody&quot; &lt;dtody_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph -
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; How extensive are the changes involved in removing the GPR?  How hard would
</span><br>
<span class="quotelev2">&gt; &gt; it be for someone to maintain an enhanced version of this as an addon or
</span><br>
<span class="quotelev2">&gt; &gt; compile-time optional module?  Thanks.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; - Doug
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, 11 Feb 2008, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello all
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Per last week's telecon, we planned the merge of the latest ORTE devel
</span><br>
<span class="quotelev3">&gt; &gt;&gt; branch to the OMPI trunk for after Sun had committed its C++ changes. That
</span><br>
<span class="quotelev3">&gt; &gt;&gt; happened over the weekend.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Therefore, based on the requests at the telecon, I will be merging the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; current ORTE devel branch to the trunk on Wed 2/13. I'll make the commit
</span><br>
<span class="quotelev3">&gt; &gt;&gt; around 4:30pm Eastern time - will send out warning shortly before the commit
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to let you know it is coming. I'll advise of any delays.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This will be a snapshot of that devel branch - it will include the upgraded
</span><br>
<span class="quotelev3">&gt; &gt;&gt; launch system, remove the GPR, add the new tool communication library, allow
</span><br>
<span class="quotelev3">&gt; &gt;&gt; arbitrary mpiruns to interconnect, supports the revamped hostfile and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; dash-host behaviors per the wiki, etc.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However, it is incomplete and contains some known flaws. For example,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; totalview support has not been enabled yet. Comm_spawn, which is currently
</span><br>
<span class="quotelev3">&gt; &gt;&gt; broken on the OMPI trunk, is fixed - but singleton comm_spawn remains
</span><br>
<span class="quotelev3">&gt; &gt;&gt; broken. I am in the process of establishing support for direct and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; standalone launch capabilities, but those won't be in the merge. I have
</span><br>
<span class="quotelev3">&gt; &gt;&gt; updated all of the launchers, but can only certify the SLURM, TM, and RSH
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ones to work - the Xgrid launcher is known to not compile, so if you have
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Xgrid on your Mac, you need to tell the build system to not build that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; component.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This will give you a chance to look over the new arch, though, and I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; understand that people would like to begin having a chance to test and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; review the revised code. Hopefully, you will find most of the bugs to be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; minor.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Please advise of any concerns about this merge. The schedule is totally
</span><br>
<span class="quotelev3">&gt; &gt;&gt; driven by the requests of the MPI team members (delaying the merge has no
</span><br>
<span class="quotelev3">&gt; &gt;&gt; impact on ORTE development), so requests to shift the schedule should be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; discussed amongst the community.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3245.php">Jeff Squyres: "[OMPI devel] --with-visibility"</a>
<li><strong>Previous message:</strong> <a href="3243.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Remove explicit call to progress() from ob1."</a>
<li><strong>In reply to:</strong> <a href="3230.php">Ralph Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<!-- nextthread="start" -->
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
