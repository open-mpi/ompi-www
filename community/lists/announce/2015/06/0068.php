<?
$subject_val = "[Open MPI Announce] Open MPI 1.8.6 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 17 18:23:23 2015" -->
<!-- isoreceived="20150617222323" -->
<!-- sent="Wed, 17 Jun 2015 15:23:19 -0700" -->
<!-- isosent="20150617222319" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI 1.8.6 released" -->
<!-- id="4753094E-42DB-4E9D-9FB7-E3A26A430289_at_open-mpi.org" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI 1.8.6 released<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-17 18:23:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0069.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Update to Open MPI version number scheme"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2015/05/0067.php">Ralph Castain: "[Open MPI Announce] OMPI 1.8.5 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to announce the release of Open MPI version 1.8.6.
<br>
<p>v1.8.6 is a bug fix release.  All users are encouraged to upgrade to v1.8.6 when possible. 
<br>
<p>Version 1.8.6 can be downloaded from the main Open MPI web site or any of its mirrors  (mirrors will be updating shortly).
<br>
<p>Here is a list of changes in v1.8.6 as compared to v1.8.5:
<br>
<p>1.8.6
<br>
-----
<br>
<p>- Fixed memory leak on Mac OS-X exposed by TCP keepalive
<br>
- Fixed keepalive support to ensure that daemon/node failure
<br>
&nbsp;&nbsp;results in complete job cleanup
<br>
- Update Java binding support
<br>
- Fixed MPI_THREAD_MULTIPLE bug in vader shared memory BTL
<br>
- Fixed issue during shutdown when CUDA initialization wasn't complete
<br>
- Fixed orted environment when no prefix given
<br>
- Fixed trivial typo in MPI_Neighbor_allgather manpage
<br>
- Fixed tree-spawn support for sh and ksh shells
<br>
- Several data type fixes
<br>
- Fixed IPv6 support bug
<br>
- Cleaned up an unlikely build issue
<br>
- Fixed PMI2 process map parsing for cyclic mappings
<br>
- Fixed memalign threshold in openib BTL
<br>
- Fixed debugger access to message queues for blocking send/recv
<br>
<p><p>&#226;&#128;&#148;&#226;&#128;&#148;
<br>
Ralph Castain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0069.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Update to Open MPI version number scheme"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2015/05/0067.php">Ralph Castain: "[Open MPI Announce] OMPI 1.8.5 released"</a>
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
