<?
$subject_val = "[OMPI devel] Jenkins and coverity logs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 25 02:02:42 2015" -->
<!-- isoreceived="20150525060242" -->
<!-- sent="Mon, 25 May 2015 15:02:32 +0900" -->
<!-- isosent="20150525060232" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="[OMPI devel] Jenkins and coverity logs" -->
<!-- id="5562BAF8.1040501_at_rist.or.jp" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] Jenkins and coverity logs<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-25 02:02:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17452.php">Mike Dubman: "Re: [OMPI devel] Jenkins and coverity logs"</a>
<li><strong>Previous message:</strong> <a href="17450.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17452.php">Mike Dubman: "Re: [OMPI devel] Jenkins and coverity logs"</a>
<li><strong>Reply:</strong> <a href="17452.php">Mike Dubman: "Re: [OMPI devel] Jenkins and coverity logs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike,
<br>
<p>most coverity links reported by Jenkins are invalid
<br>
for example <a href="https://github.com/open-mpi/ompi/pull/593">https://github.com/open-mpi/ompi/pull/593</a> points to 
<br>
<a href="http://bgate.mellanox.com:8888/jenkins/job/gh-ompi-master-pr//ws/cov_build/all_535/output/errors/index.html">http://bgate.mellanox.com:8888/jenkins/job/gh-ompi-master-pr//ws/cov_build/all_535/output/errors/index.html</a> 
<br>
which does not exist (any more)
<br>
<p>only the link of the most recently ran PR is available.
<br>
<p>from an external point of view (and without any knowledge of how Jenkins 
<br>
is configured), the root cause could be the coverity directory is inside 
<br>
the workspace directory ( e.g. 
<br>
<a href="http://bgate.mellanox.com:8888/jenkins/job/gh-ompi-master-pr//ws">http://bgate.mellanox.com:8888/jenkins/job/gh-ompi-master-pr//ws</a> ) and 
<br>
it seems this directory is recreated each time jenkins runs.
<br>
<p>possible options could be to move ws/cov_build/all_&lt;pr&gt; to a permanent 
<br>
location (and have jenkins report the new link) or not to remove 
<br>
/jenkins/job/gh-ompi-master-pr//ws/cov_build when Jenkins starts a new job
<br>
<p>could you please have a look ?
<br>
<p><p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17452.php">Mike Dubman: "Re: [OMPI devel] Jenkins and coverity logs"</a>
<li><strong>Previous message:</strong> <a href="17450.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17452.php">Mike Dubman: "Re: [OMPI devel] Jenkins and coverity logs"</a>
<li><strong>Reply:</strong> <a href="17452.php">Mike Dubman: "Re: [OMPI devel] Jenkins and coverity logs"</a>
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
