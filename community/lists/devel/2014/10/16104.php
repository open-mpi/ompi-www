<?
$subject_val = "[OMPI devel] fixing a bug in 1.8 that's not in master";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 18:22:36 2014" -->
<!-- isoreceived="20141027222236" -->
<!-- sent="Mon, 27 Oct 2014 16:22:36 -0600" -->
<!-- isosent="20141027222236" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] fixing a bug in 1.8 that's not in master" -->
<!-- id="CAF1Cqj4KQRjCBuHfdvQiae337PMCZ3K+2xYuUOb6+GSV=OU4aA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] fixing a bug in 1.8 that's not in master<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-27 18:22:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16105.php">Ralph Castain: "Re: [OMPI devel] fixing a bug in 1.8 that's not in master"</a>
<li><strong>Previous message:</strong> <a href="16103.php">Friedley, Andrew: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16105.php">Ralph Castain: "Re: [OMPI devel] fixing a bug in 1.8 that's not in master"</a>
<li><strong>Reply:</strong> <a href="16105.php">Ralph Castain: "Re: [OMPI devel] fixing a bug in 1.8 that's not in master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>A cut and past error seems to have happened with
<br>
plm_alps_modules.c in 1.8 which causes a compile failure
<br>
when building for cray.  So right now, there's no building
<br>
ompi 1.8 for crays.
<br>
<p>The problem is not present in master.
<br>
<p>For these kinds of problems, are we suppose to bypass
<br>
all the &quot;has to be in master, need commit, etc.&quot; stuff described in
<br>
<p><a href="https://github.com/open-mpi/ompi/wiki/SubmittingPullRequests">https://github.com/open-mpi/ompi/wiki/SubmittingPullRequests</a>
<br>
<p>and just go straight to pushing to a fork of ompi-release, etc.
<br>
as per the rest of the instructions on submitting pull requests?
<br>
<p>Just want to make sure I'm doing the right thing here.
<br>
<p>Howard
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16104/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16105.php">Ralph Castain: "Re: [OMPI devel] fixing a bug in 1.8 that's not in master"</a>
<li><strong>Previous message:</strong> <a href="16103.php">Friedley, Andrew: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16105.php">Ralph Castain: "Re: [OMPI devel] fixing a bug in 1.8 that's not in master"</a>
<li><strong>Reply:</strong> <a href="16105.php">Ralph Castain: "Re: [OMPI devel] fixing a bug in 1.8 that's not in master"</a>
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
