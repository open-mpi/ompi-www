<?
$subject_val = "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 22:36:58 2008" -->
<!-- isoreceived="20080213033658" -->
<!-- sent="Tue, 12 Feb 2008 20:36:43 -0700" -->
<!-- isosent="20080213033643" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk" -->
<!-- id="C3D7B3DB.4631%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0802121342220.4575_at_localhost.localdomain" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-12 22:36:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3231.php">Gleb Natapov: "Re: [OMPI devel] btl_openib_rnr_retry MCA param"</a>
<li><strong>Previous message:</strong> <a href="3229.php">George Bosilca: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>In reply to:</strong> <a href="3221.php">Doug Tody: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3244.php">Doug Tody: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>Reply:</strong> <a href="3244.php">Doug Tody: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Doug
<br>
<p>The changes are rather far-reaching. We essentially revamped the entire RTE
<br>
to switch from an event-driven architecture to one based on sequential
<br>
logic. This had large benefits, but the GPR was the casualty. Remember, the
<br>
aim for the past year has been to create a dedicated &quot;lean, mean OMPI
<br>
machine&quot;!
<br>
<p>That said, it would be relatively simple to add an extension that provided a
<br>
level of data storage that user-level programs could access. It would not
<br>
provide any subscription or trigger capabilities, however - we need to leave
<br>
those out of the system to avoid reintroducing the event-driven problems
<br>
again. But if you just wanted to store and retrieve data for sharing it
<br>
across processes, that could be provided with minimal effort or impact.
<br>
Probably best done as a compile-time optional module, though, to avoid
<br>
adding to the memory footprint for everyone.
<br>
<p>Another alternative: there is a separate &quot;ORTE&quot; project in Europe that is
<br>
building extensions to our ORTE - they are tracking these code changes, but
<br>
adding &quot;bolt-ons&quot; such as a GPR-like central data store, hooks for workflow
<br>
management and the grid, multi-cluster operations, etc. I'm working with
<br>
them on those efforts - if there is interest in such capabilities, I can
<br>
probably look into architecting things so that some of the &quot;bolt-ons&quot; could
<br>
be dynamically picked up by OMPI as binary modules or something.
<br>
<p>For now, though, there will be no GPR-like storage in the new system.
<br>
Ralph
<br>
<p><p><p>On 2/12/08 1:43 PM, &quot;Doug Tody&quot; &lt;dtody_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How extensive are the changes involved in removing the GPR?  How hard would
</span><br>
<span class="quotelev1">&gt; it be for someone to maintain an enhanced version of this as an addon or
</span><br>
<span class="quotelev1">&gt; compile-time optional module?  Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Doug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, 11 Feb 2008, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello all
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Per last week's telecon, we planned the merge of the latest ORTE devel
</span><br>
<span class="quotelev2">&gt;&gt; branch to the OMPI trunk for after Sun had committed its C++ changes. That
</span><br>
<span class="quotelev2">&gt;&gt; happened over the weekend.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Therefore, based on the requests at the telecon, I will be merging the
</span><br>
<span class="quotelev2">&gt;&gt; current ORTE devel branch to the trunk on Wed 2/13. I'll make the commit
</span><br>
<span class="quotelev2">&gt;&gt; around 4:30pm Eastern time - will send out warning shortly before the commit
</span><br>
<span class="quotelev2">&gt;&gt; to let you know it is coming. I'll advise of any delays.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This will be a snapshot of that devel branch - it will include the upgraded
</span><br>
<span class="quotelev2">&gt;&gt; launch system, remove the GPR, add the new tool communication library, allow
</span><br>
<span class="quotelev2">&gt;&gt; arbitrary mpiruns to interconnect, supports the revamped hostfile and
</span><br>
<span class="quotelev2">&gt;&gt; dash-host behaviors per the wiki, etc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, it is incomplete and contains some known flaws. For example,
</span><br>
<span class="quotelev2">&gt;&gt; totalview support has not been enabled yet. Comm_spawn, which is currently
</span><br>
<span class="quotelev2">&gt;&gt; broken on the OMPI trunk, is fixed - but singleton comm_spawn remains
</span><br>
<span class="quotelev2">&gt;&gt; broken. I am in the process of establishing support for direct and
</span><br>
<span class="quotelev2">&gt;&gt; standalone launch capabilities, but those won't be in the merge. I have
</span><br>
<span class="quotelev2">&gt;&gt; updated all of the launchers, but can only certify the SLURM, TM, and RSH
</span><br>
<span class="quotelev2">&gt;&gt; ones to work - the Xgrid launcher is known to not compile, so if you have
</span><br>
<span class="quotelev2">&gt;&gt; Xgrid on your Mac, you need to tell the build system to not build that
</span><br>
<span class="quotelev2">&gt;&gt; component.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This will give you a chance to look over the new arch, though, and I
</span><br>
<span class="quotelev2">&gt;&gt; understand that people would like to begin having a chance to test and
</span><br>
<span class="quotelev2">&gt;&gt; review the revised code. Hopefully, you will find most of the bugs to be
</span><br>
<span class="quotelev2">&gt;&gt; minor.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please advise of any concerns about this merge. The schedule is totally
</span><br>
<span class="quotelev2">&gt;&gt; driven by the requests of the MPI team members (delaying the merge has no
</span><br>
<span class="quotelev2">&gt;&gt; impact on ORTE development), so requests to shift the schedule should be
</span><br>
<span class="quotelev2">&gt;&gt; discussed amongst the community.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="3231.php">Gleb Natapov: "Re: [OMPI devel] btl_openib_rnr_retry MCA param"</a>
<li><strong>Previous message:</strong> <a href="3229.php">George Bosilca: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>In reply to:</strong> <a href="3221.php">Doug Tody: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3244.php">Doug Tody: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>Reply:</strong> <a href="3244.php">Doug Tody: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
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
