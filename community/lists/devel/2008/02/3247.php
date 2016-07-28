<?
$subject_val = "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 14 10:37:46 2008" -->
<!-- isoreceived="20080214153746" -->
<!-- sent="Thu, 14 Feb 2008 08:37:36 -0700" -->
<!-- isosent="20080214153736" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk" -->
<!-- id="C3D9AE50.C3C0%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C3D7A101.4626%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-14 10:37:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3248.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Previous message:</strong> <a href="3246.php">Jeff Squyres: "[OMPI devel] rhc-step2b compile failures"</a>
<li><strong>In reply to:</strong> <a href="3228.php">Ralph Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3221.php">Doug Tody: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Update on this plan...
<br>
<p>I am going to delay merging the branch over to the trunk for awhile, perhaps
<br>
several weeks, for several reasons:
<br>
<p>1. the trunk is somewhat unstable at the moment. Things are going in and
<br>
being backed out, errors in recent commits being found and corrected, etc.
<br>
at a pace I simply cannot track during a merge
<br>
<p>2. I am still waiting for Galen's commit of the CNL code
<br>
<p>3. we are about to hit a long weekend, and I need to get moving again on
<br>
development
<br>
<p>I had no major conflicts when sync'ing the branch with the trunk, so I don't
<br>
think the eventual merge will be a problem. For now, though, perhaps it is
<br>
better to let the trunk settle down a little before introducing another
<br>
major perturbation.
<br>
<p>We can revisit this during Tues telecon and see where we go from here.
<br>
<p>Ralph
<br>
<p><p><p>On 2/12/08 7:16 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Well....best laid plans of mice and men, as they say.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We were just having -way- too much fun here at IBM today going over the new
</span><br>
<span class="quotelev1">&gt; ORTE design, planning for future scalability changes, etc., so American
</span><br>
<span class="quotelev1">&gt; decided to cancel my flight back home! So thoughtful!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will be spending my Wed (hopefully!) enroute back home. It looks like it
</span><br>
<span class="quotelev1">&gt; will be Thurs before I can do the merge. My apologies to all - but I would
</span><br>
<span class="quotelev1">&gt; really rather not try to do it from a notebook computer in an airline
</span><br>
<span class="quotelev1">&gt; terminal!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/12/08 9:54 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We talked about this on the OMPI con call today and everyone agrees
</span><br>
<span class="quotelev2">&gt;&gt; that this seems to be a good plan.  Just as a safety net: if the merge
</span><br>
<span class="quotelev2">&gt;&gt; goes disastrously wrong and you're unavailable Thu/Fri this week, we
</span><br>
<span class="quotelev2">&gt;&gt; can just back it out and try again later.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 11, 2008, at 11:37 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Per last week's telecon, we planned the merge of the latest ORTE devel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; branch to the OMPI trunk for after Sun had committed its C++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; changes. That
</span><br>
<span class="quotelev3">&gt;&gt;&gt; happened over the weekend.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Therefore, based on the requests at the telecon, I will be merging the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; current ORTE devel branch to the trunk on Wed 2/13. I'll make the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; around 4:30pm Eastern time - will send out warning shortly before
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the commit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to let you know it is coming. I'll advise of any delays.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This will be a snapshot of that devel branch - it will include the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; upgraded
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launch system, remove the GPR, add the new tool communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt; library, allow
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arbitrary mpiruns to interconnect, supports the revamped hostfile and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dash-host behaviors per the wiki, etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, it is incomplete and contains some known flaws. For example,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; totalview support has not been enabled yet. Comm_spawn, which is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; currently
</span><br>
<span class="quotelev3">&gt;&gt;&gt; broken on the OMPI trunk, is fixed - but singleton comm_spawn remains
</span><br>
<span class="quotelev3">&gt;&gt;&gt; broken. I am in the process of establishing support for direct and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; standalone launch capabilities, but those won't be in the merge. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; updated all of the launchers, but can only certify the SLURM, TM,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and RSH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ones to work - the Xgrid launcher is known to not compile, so if you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Xgrid on your Mac, you need to tell the build system to not build that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; component.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This will give you a chance to look over the new arch, though, and I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; understand that people would like to begin having a chance to test and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; review the revised code. Hopefully, you will find most of the bugs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; minor.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please advise of any concerns about this merge. The schedule is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; totally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; driven by the requests of the MPI team members (delaying the merge
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; impact on ORTE development), so requests to shift the schedule
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; discussed amongst the community.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3248.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Previous message:</strong> <a href="3246.php">Jeff Squyres: "[OMPI devel] rhc-step2b compile failures"</a>
<li><strong>In reply to:</strong> <a href="3228.php">Ralph Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3221.php">Doug Tody: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
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
