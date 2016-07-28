<?
$subject_val = "[Open MPI Announce] Open MPI 1.8.8 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  5 11:53:26 2015" -->
<!-- isoreceived="20150805155326" -->
<!-- sent="Wed, 5 Aug 2015 08:53:23 -0700" -->
<!-- isosent="20150805155323" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI 1.8.8 released" -->
<!-- id="CAMD57ocR38=0ZgoWJ2Ocv1WA0hfRFzSHTZWrh4duFnKqrzxGmw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI 1.8.8 released<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-05 11:53:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0072.php">Ralph Castain: "[Open MPI Announce] Open MPI 1.10.0 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2015/07/0070.php">Ralph Castain: "[Open MPI Announce] Open MPI 1.8.7 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and
<br>
industry partners, is pleased to announce the release of Open MPI version
<br>
1.8.8.
<br>
<p>v1.8.8 is a bug fix release, primarily driven by a recent change to PSM
<br>
that uncovered a bug in Open MPI's finalize routine and some missing
<br>
commits in the prior 1.8.7 tarball. All users are encouraged to upgrade to
<br>
v1.8.8 when possible.
<br>
<p>Version 1.8.8 can be downloaded from the main Open MPI web site or any of
<br>
its mirrors (mirrors will be updating shortly).
<br>
<p>Here is a list of changes in v1.8.8 as compared to v1.8.7:
<br>
<p>1.8.8
<br>
<p>-----
<br>
<p><p>- Fix a segfault in MPI_FINALIZE with the PSM MTL.
<br>
<p>- Fix mpi_f08 sentinels (e.g., MPI_STATUS_IGNORE) handling.
<br>
<p>- Set some additional MXM default values for OSHMEM.
<br>
<p>- Fix an invalid memory access in MPI_MRECV and MPI_IMRECV.
<br>
<p>- Include two fixes that were mistakenly left out of the official
<br>
<p>&nbsp;&nbsp;v1.8.7 tarball:
<br>
<p>&nbsp;&nbsp;- Fixed MPI_WIN_POST and MPI_WIN_START for zero-size messages
<br>
<p>&nbsp;&nbsp;- Protect the OOB TCP ports from segfaulting when accessed by port
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;scanners
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/announce/att-0071/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0072.php">Ralph Castain: "[Open MPI Announce] Open MPI 1.10.0 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2015/07/0070.php">Ralph Castain: "[Open MPI Announce] Open MPI 1.8.7 released"</a>
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
