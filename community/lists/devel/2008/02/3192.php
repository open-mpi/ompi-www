<?
$subject_val = "[OMPI devel] Scheduled merge of ORTE devel branch to trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 23:37:55 2008" -->
<!-- isoreceived="20080212043755" -->
<!-- sent="Mon, 11 Feb 2008 21:37:45 -0700" -->
<!-- isosent="20080212043745" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Scheduled merge of ORTE devel branch to trunk" -->
<!-- id="C3D670A9.45C5%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Scheduled merge of ORTE devel branch to trunk<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-11 23:37:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3193.php">Rainer Keller: "Re: [OMPI devel] 1.3 Release schedule and contents"</a>
<li><strong>Previous message:</strong> <a href="3191.php">Ralph Castain: "Re: [OMPI devel] status of LSF integration work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3212.php">Jeff Squyres: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>Reply:</strong> <a href="3212.php">Jeff Squyres: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>Reply:</strong> <a href="3221.php">Doug Tody: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>Per last week's telecon, we planned the merge of the latest ORTE devel
<br>
branch to the OMPI trunk for after Sun had committed its C++ changes. That
<br>
happened over the weekend.
<br>
<p>Therefore, based on the requests at the telecon, I will be merging the
<br>
current ORTE devel branch to the trunk on Wed 2/13. I'll make the commit
<br>
around 4:30pm Eastern time - will send out warning shortly before the commit
<br>
to let you know it is coming. I'll advise of any delays.
<br>
<p>This will be a snapshot of that devel branch - it will include the upgraded
<br>
launch system, remove the GPR, add the new tool communication library, allow
<br>
arbitrary mpiruns to interconnect, supports the revamped hostfile and
<br>
dash-host behaviors per the wiki, etc.
<br>
<p>However, it is incomplete and contains some known flaws. For example,
<br>
totalview support has not been enabled yet. Comm_spawn, which is currently
<br>
broken on the OMPI trunk, is fixed - but singleton comm_spawn remains
<br>
broken. I am in the process of establishing support for direct and
<br>
standalone launch capabilities, but those won't be in the merge. I have
<br>
updated all of the launchers, but can only certify the SLURM, TM, and RSH
<br>
ones to work - the Xgrid launcher is known to not compile, so if you have
<br>
Xgrid on your Mac, you need to tell the build system to not build that
<br>
component.
<br>
<p>This will give you a chance to look over the new arch, though, and I
<br>
understand that people would like to begin having a chance to test and
<br>
review the revised code. Hopefully, you will find most of the bugs to be
<br>
minor.
<br>
<p>Please advise of any concerns about this merge. The schedule is totally
<br>
driven by the requests of the MPI team members (delaying the merge has no
<br>
impact on ORTE development), so requests to shift the schedule should be
<br>
discussed amongst the community.
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3193.php">Rainer Keller: "Re: [OMPI devel] 1.3 Release schedule and contents"</a>
<li><strong>Previous message:</strong> <a href="3191.php">Ralph Castain: "Re: [OMPI devel] status of LSF integration work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3212.php">Jeff Squyres: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>Reply:</strong> <a href="3212.php">Jeff Squyres: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>Reply:</strong> <a href="3221.php">Doug Tody: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
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
