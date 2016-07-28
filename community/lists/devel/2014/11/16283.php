<?
$subject_val = "[OMPI devel] Jenkins vs master (and v1.8)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 00:01:49 2014" -->
<!-- isoreceived="20141111050149" -->
<!-- sent="Tue, 11 Nov 2014 14:02:02 +0900" -->
<!-- isosent="20141111050202" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] Jenkins vs master (and v1.8)" -->
<!-- id="5461984A.5010606_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Jenkins vs master (and v1.8)<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-11 00:02:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16284.php">Mike Dubman: "Re: [OMPI devel] Jenkins vs master (and v1.8)"</a>
<li><strong>Previous message:</strong> <a href="16282.php">Friedley, Andrew: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16284.php">Mike Dubman: "Re: [OMPI devel] Jenkins vs master (and v1.8)"</a>
<li><strong>Reply:</strong> <a href="16284.php">Mike Dubman: "Re: [OMPI devel] Jenkins vs master (and v1.8)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike,
<br>
<p>Jenkins runs automated tests on each pull request, and i think this is a
<br>
good thing.
<br>
<p>recently, it reported a bunch of failure but i could not find anything
<br>
to blame in the PR itself.
<br>
<p>so i created a dummy PR <a href="https://github.com/open-mpi/ompi/pull/264">https://github.com/open-mpi/ompi/pull/264</a> with
<br>
git commit --allow-empty
<br>
and waited for Jenkins to do its job.
<br>
<p>the test failed, which means there is an issue in the master.
<br>
from the master point of view, it is good to know there is an issue.
<br>
from the PR point of view, this is a false positive since the PR does
<br>
nothing wrong.
<br>
<p>i was unable to find anything on github that indicates the master does
<br>
not pass the automated tests.
<br>
is such automated test running vs the master ? if yes, where can we find
<br>
the results ?
<br>
in order to avoid dealing with false positive, is there any possibility
<br>
to disable automated tests on the PR
<br>
if the master does not pass the tests ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16284.php">Mike Dubman: "Re: [OMPI devel] Jenkins vs master (and v1.8)"</a>
<li><strong>Previous message:</strong> <a href="16282.php">Friedley, Andrew: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16284.php">Mike Dubman: "Re: [OMPI devel] Jenkins vs master (and v1.8)"</a>
<li><strong>Reply:</strong> <a href="16284.php">Mike Dubman: "Re: [OMPI devel] Jenkins vs master (and v1.8)"</a>
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
