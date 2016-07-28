<?
$subject_val = "[Open MPI Announce] Open MPI 1.10.0 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 11:38:23 2015" -->
<!-- isoreceived="20150825153823" -->
<!-- sent="Tue, 25 Aug 2015 08:38:19 -0700" -->
<!-- isosent="20150825153819" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI 1.10.0 released" -->
<!-- id="05E2DF3B-44DD-4078-8819-F590347CC8B4_at_open-mpi.org" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI 1.10.0 released<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-25 11:38:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2015/10/0073.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI v1.10.1rc1 release"</a>
<li><strong>Previous message:</strong> <a href="0071.php">Ralph Castain: "[Open MPI Announce] Open MPI 1.8.8 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to announce the release of Open MPI version 1.10.0.
<br>
<p>v1.10.0 is the start of a new release series. However, it is based on the v1.8 series (instead of a new branch off of the OMPI master) with a few added features to go along with the usual bug fixes.  Accordingly, the v1.8 series is now considered complete and all related bug fixes will be posted to the v1.10 series. All users are therefore encouraged to upgrade to v1.10.0 when possible. 
<br>
<p>Version 1.10.0 can be downloaded from the main Open MPI web site or any of its mirrors  (mirrors will be updating shortly).
<br>
<p>1.10.0
<br>
------
<br>
** NOTE: The v1.10.0 release marks the transition to Open MPI's new
<br>
** version numbering scheme.  The v1.10.x release series is based on
<br>
** the v1.8.x series, but with a few new features.  v2.x will be the
<br>
** next series after the v1.10.x series, and complete the transition
<br>
** to the new version numbering scheme.  See README for more details.
<br>
<p>- Added libfabric support (see README for more details):
<br>
&nbsp;&nbsp;- usNIC BTL updated to use libfabric.
<br>
&nbsp;&nbsp;- Added OFI MTL (usable with PSM in libfabric v1.1.0).
<br>
- Added Intel Omni-Path support via new PSM2 MTL.
<br>
- Added &quot;yalla&quot; PML for faster MXM support.
<br>
- Removed support for MX
<br>
- Added persistent distributed virtual machine (pDVM) support for fast
<br>
&nbsp;&nbsp;workflow executions.
<br>
- Fixed typo in GCC inline assembly introduced in Open MPI v1.8.8.
<br>
&nbsp;&nbsp;Thanks to Paul Hargrove for pointing out the issue.
<br>
- Add missing man pages for MPI_Win_get|set_info(3).
<br>
- Ensure that session directories are cleaned up at the end of a run.
<br>
- Fixed linking issues on some OSs where symbols of dependent
<br>
&nbsp;&nbsp;libraries are not automatically publicly available.
<br>
- Improve hcoll and fca configury library detection.  Thanks to David
<br>
&nbsp;&nbsp;Shrader for helping track down the issue.
<br>
- Removed the LAMA mapper (for use in setting affinity).  Its
<br>
&nbsp;&nbsp;functionality has been largely superseded by other mpirun CLI
<br>
&nbsp;&nbsp;options.
<br>
- CUDA: Made the asynchronous copy mode be the default.
<br>
- Fix a malloc(0) warning in MPI_IREDUCE_SCATTER_BLOCK.  Thanks to
<br>
&nbsp;&nbsp;Lisandro Dalcin for reporting the issue.
<br>
- Fix typo in MPI_Scatter(3) man page.  Thanks to Akshay Venkatesh for
<br>
&nbsp;&nbsp;noticing the mistake.
<br>
- Add rudimentary protection from TCP port scanners.
<br>
- Fix typo in Open MPI error handling.  Thanks to &#195;&#133;ke Sandgren for
<br>
&nbsp;&nbsp;pointing out the error.
<br>
- Increased the performance of the CM PML (i.e., the Portals, PSM,
<br>
&nbsp;&nbsp;PSM2, MXM, and OFI transports).
<br>
- Restored visibility of blocking send requests in message queue
<br>
&nbsp;&nbsp;debuggers (e.g., TotalView, DDT).
<br>
- Fixed obscure IPv6-related bug in the TCP BTL.
<br>
- Add support for the &quot;no_locks&quot; MPI_Info key for one-sided
<br>
&nbsp;&nbsp;functionality.
<br>
- Fixed ibv_fork support for verbs-based networks.
<br>
- Fixed a variety of small bugs in OpenSHMEM.
<br>
- Fixed MXM configure with additional CPPFLAGS and LDFLAGS.  Thanks to
<br>
&nbsp;&nbsp;David Shrader for the patch.
<br>
- Fixed incorrect memalign threshhold in the openib BTL.  Thanks to
<br>
&nbsp;&nbsp;Xavier Besseron for pointing out the issue.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2015/10/0073.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI v1.10.1rc1 release"</a>
<li><strong>Previous message:</strong> <a href="0071.php">Ralph Castain: "[Open MPI Announce] Open MPI 1.8.8 released"</a>
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
