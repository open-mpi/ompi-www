<?
$subject_val = "[Open MPI Announce] Open MPI 1.8.7 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 11:24:57 2015" -->
<!-- isoreceived="20150715152457" -->
<!-- sent="Wed, 15 Jul 2015 08:24:52 -0700" -->
<!-- isosent="20150715152452" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI 1.8.7 released" -->
<!-- id="39C6ACBD-F29F-4235-BBB8-E7103F62583F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI 1.8.7 released<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-15 11:24:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2015/08/0071.php">Ralph Castain: "[Open MPI Announce] Open MPI 1.8.8 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2015/06/0069.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Update to Open MPI version number scheme"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to announce the release of Open MPI version 1.8.7.
<br>
<p>v1.8.7 is a bug fix release, primarily driven by discovery of a significant memory leak.  All users are encouraged to upgrade to v1.8.7 when possible. 
<br>
<p>Version 1.8.7 can be downloaded from the main Open MPI web site or any of its mirrors  (mirrors will be updating shortly).
<br>
<p>Here is a list of changes in v1.8.7 as compared to v1.8.6:
<br>
<p>1.8.7
<br>
<pre>
----
** NOTE: v1.8.7 technically breaks ABI with prior versions
** in the 1.8 series because it repairs two incorrect API
** signatures. However, users will only need to recompile
** if they were using those functions - which they couldn't
** have been, because the signatures were wrong :-)
- Plugged a memory leak that impacted blocking sends
- Fixed incorrect declaration for MPI_T_pvar_get_index and added
  missing return code MPI_T_INVALID_NAME.
- Fixed an uninitialized variable in PMI2 support
- Added new vendor part id for Mellanox ConnectX4-LX
- Fixed NBC_Copy for legitimate zero-size messages
- Fixed MPI_Win_post and MPI_Win_start for zero-size messages
- Protect the OOB ports from segfaulting when accessed by port scanners
- Fixed several Fortran typos
- Fixed configure detection of XRC support
- Fixed support for highly heterogeneous systems to avoid
  memory corruption when printing out the bindings
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2015/08/0071.php">Ralph Castain: "[Open MPI Announce] Open MPI 1.8.8 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2015/06/0069.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Update to Open MPI version number scheme"</a>
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
