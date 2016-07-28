<?
$subject_val = "[Open MPI Announce] Open MPI v1.2.6 released";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 12:42:41 2008" -->
<!-- isoreceived="20080407164241" -->
<!-- sent="Mon, 7 Apr 2008 12:42:31 -0400" -->
<!-- isosent="20080407164231" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.2.6 released" -->
<!-- id="ea86ce220804070942x2996dd64g957e6e45f7fa8ad5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI v1.2.6 released<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-07 12:42:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2008/05/0020.php">Jeff Squyres: "[Open MPI Announce] Open MPI instructional videos"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2008/01/0018.php">Tim Mattox: "[Open MPI Announce] Open MPI v1.2.5 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic,
<br>
and industry partners, is pleased to announce the release of Open MPI
<br>
version 1.2.6. This release is mainly a bug fix release over the v1.2.5
<br>
release, but there are few new features.  We strongly recommend
<br>
that all users upgrade to version 1.2.6 if possible.
<br>
<p>Version 1.2.6 can be downloaded from the main Open MPI web site or
<br>
any of its mirrors (mirrors will be updating shortly).
<br>
<p>Here is a list of changes in v1.2.6 as compared to v1.2.5:
<br>
<p>- Fix a bug in the inter-allgather for asymmetric inter-communicators.
<br>
&nbsp;&nbsp;Thanks to Martin Audet fro the bug report. See ticket #1247.
<br>
- Fix a bug in the openib BTL when setting the CQ depth.  Thanks
<br>
&nbsp;&nbsp;to Jon Mason for the bug report and fix.  See ticket #1245.
<br>
- On Mac OS X Leopard, the execinfo component will be used for
<br>
&nbsp;&nbsp;backtraces, making for a more durable solution.  See ticket #1246.
<br>
- Added vendor IDs for some QLogic DDR openib HCAs. See ticket #1227.
<br>
- Updated the URL to get the latest config.guess and config.sub files.
<br>
&nbsp;&nbsp;Thanks to Ralf Wildenhues for the bug report. See ticket #1226.
<br>
- Added shared contexts support to PSM MTL.  See ticket #1225.
<br>
- Added pml_ob1_use_early_completion MCA parameter to allow users
<br>
&nbsp;&nbsp;to turn off the OB1 early completion semantic and avoid &quot;stall&quot;
<br>
&nbsp;&nbsp;problems seen on InfiniBand in some cases.  See ticket #1224.
<br>
- Sanitized some #define macros used in mpi.h to avoid compiler warnings
<br>
&nbsp;&nbsp;caused by MPI programs built with different autoconf versions.
<br>
&nbsp;&nbsp;Thanks to Ben Allan for reporting the problem, and thanks to
<br>
&nbsp;&nbsp;Brian Barrett for the fix. See ticket #1220.
<br>
- Some man page fixes from the Debian maintainers. See ticket #1219.
<br>
- Made the openib BTL a bit more resilient in the face of driver
<br>
&nbsp;&nbsp;errors.  See ticket #1217.
<br>
- Fixed F90 interface for MPI_CART_CREATE.  See ticket #1208.
<br>
&nbsp;&nbsp;Thanks to Michal Charemza for reporting the problem.
<br>
- Fixed some C++ compiler warnings. See ticket #1203.
<br>
- Fixed formatting of the orterun man page.  See ticket #1202.
<br>
&nbsp;&nbsp;Thanks to Peter Breitenlohner for the patch.
<br>
<p><pre>
-- 
Tim Mattox
Open Systems Lab
Indiana University
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2008/05/0020.php">Jeff Squyres: "[Open MPI Announce] Open MPI instructional videos"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2008/01/0018.php">Tim Mattox: "[Open MPI Announce] Open MPI v1.2.5 released"</a>
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
