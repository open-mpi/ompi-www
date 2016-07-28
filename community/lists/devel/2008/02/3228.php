<?
$subject_val = "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 21:16:30 2008" -->
<!-- isoreceived="20080213021630" -->
<!-- sent="Tue, 12 Feb 2008 19:16:17 -0700" -->
<!-- isosent="20080213021617" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk" -->
<!-- id="C3D7A101.4626%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C6D35CEE-40E4-4178-8BC8-CAB76DD52E39_at_cisco.com" -->
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
<strong>Date:</strong> 2008-02-12 21:16:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3229.php">George Bosilca: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="3227.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Remove explicit call to progress() from ob1."</a>
<li><strong>In reply to:</strong> <a href="3212.php">Jeff Squyres: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3247.php">Ralph H Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>Reply:</strong> <a href="3247.php">Ralph H Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well....best laid plans of mice and men, as they say.
<br>
<p>We were just having -way- too much fun here at IBM today going over the new
<br>
ORTE design, planning for future scalability changes, etc., so American
<br>
decided to cancel my flight back home! So thoughtful!
<br>
<p>I will be spending my Wed (hopefully!) enroute back home. It looks like it
<br>
will be Thurs before I can do the merge. My apologies to all - but I would
<br>
really rather not try to do it from a notebook computer in an airline
<br>
terminal!
<br>
<p>Ralph
<br>
<p><p>On 2/12/08 9:54 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We talked about this on the OMPI con call today and everyone agrees
</span><br>
<span class="quotelev1">&gt; that this seems to be a good plan.  Just as a safety net: if the merge
</span><br>
<span class="quotelev1">&gt; goes disastrously wrong and you're unavailable Thu/Fri this week, we
</span><br>
<span class="quotelev1">&gt; can just back it out and try again later.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 11, 2008, at 11:37 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello all
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Per last week's telecon, we planned the merge of the latest ORTE devel
</span><br>
<span class="quotelev2">&gt;&gt; branch to the OMPI trunk for after Sun had committed its C++
</span><br>
<span class="quotelev2">&gt;&gt; changes. That
</span><br>
<span class="quotelev2">&gt;&gt; happened over the weekend.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Therefore, based on the requests at the telecon, I will be merging the
</span><br>
<span class="quotelev2">&gt;&gt; current ORTE devel branch to the trunk on Wed 2/13. I'll make the
</span><br>
<span class="quotelev2">&gt;&gt; commit
</span><br>
<span class="quotelev2">&gt;&gt; around 4:30pm Eastern time - will send out warning shortly before
</span><br>
<span class="quotelev2">&gt;&gt; the commit
</span><br>
<span class="quotelev2">&gt;&gt; to let you know it is coming. I'll advise of any delays.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This will be a snapshot of that devel branch - it will include the
</span><br>
<span class="quotelev2">&gt;&gt; upgraded
</span><br>
<span class="quotelev2">&gt;&gt; launch system, remove the GPR, add the new tool communication
</span><br>
<span class="quotelev2">&gt;&gt; library, allow
</span><br>
<span class="quotelev2">&gt;&gt; arbitrary mpiruns to interconnect, supports the revamped hostfile and
</span><br>
<span class="quotelev2">&gt;&gt; dash-host behaviors per the wiki, etc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, it is incomplete and contains some known flaws. For example,
</span><br>
<span class="quotelev2">&gt;&gt; totalview support has not been enabled yet. Comm_spawn, which is
</span><br>
<span class="quotelev2">&gt;&gt; currently
</span><br>
<span class="quotelev2">&gt;&gt; broken on the OMPI trunk, is fixed - but singleton comm_spawn remains
</span><br>
<span class="quotelev2">&gt;&gt; broken. I am in the process of establishing support for direct and
</span><br>
<span class="quotelev2">&gt;&gt; standalone launch capabilities, but those won't be in the merge. I
</span><br>
<span class="quotelev2">&gt;&gt; have
</span><br>
<span class="quotelev2">&gt;&gt; updated all of the launchers, but can only certify the SLURM, TM,
</span><br>
<span class="quotelev2">&gt;&gt; and RSH
</span><br>
<span class="quotelev2">&gt;&gt; ones to work - the Xgrid launcher is known to not compile, so if you
</span><br>
<span class="quotelev2">&gt;&gt; have
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
<span class="quotelev2">&gt;&gt; review the revised code. Hopefully, you will find most of the bugs
</span><br>
<span class="quotelev2">&gt;&gt; to be
</span><br>
<span class="quotelev2">&gt;&gt; minor.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please advise of any concerns about this merge. The schedule is
</span><br>
<span class="quotelev2">&gt;&gt; totally
</span><br>
<span class="quotelev2">&gt;&gt; driven by the requests of the MPI team members (delaying the merge
</span><br>
<span class="quotelev2">&gt;&gt; has no
</span><br>
<span class="quotelev2">&gt;&gt; impact on ORTE development), so requests to shift the schedule
</span><br>
<span class="quotelev2">&gt;&gt; should be
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3229.php">George Bosilca: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="3227.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Remove explicit call to progress() from ob1."</a>
<li><strong>In reply to:</strong> <a href="3212.php">Jeff Squyres: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3247.php">Ralph H Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>Reply:</strong> <a href="3247.php">Ralph H Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
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
