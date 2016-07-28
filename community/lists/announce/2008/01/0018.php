<?
$subject_val = "[Open MPI Announce] Open MPI v1.2.5 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  8 14:48:59 2008" -->
<!-- isoreceived="20080108194859" -->
<!-- sent="Tue, 8 Jan 2008 14:48:51 -0500" -->
<!-- isosent="20080108194851" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.2.5 released" -->
<!-- id="ea86ce220801081148n154a93f6p8ac84d0e7a6bcd2b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI v1.2.5 released<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-08 14:48:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2008/04/0019.php">Tim Mattox: "[Open MPI Announce] Open MPI v1.2.6 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2007/11/0017.php">Jeff Squyres: "[Open MPI Announce] MPI-2.1: Getting the band back together"</a>
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
version 1.2.5. This release is mainly a bug fix release over the v1.2.4
<br>
release, but there are few new features.  We strongly recommend
<br>
that all users upgrade to version 1.2.5 if possible.
<br>
<p>Version 1.2.5 can be downloaded from the main Open MPI web site or
<br>
any of its mirrors (mirrors will be updating shortly).
<br>
<p>Here are a list of changes in v1.2.5 as compared to v1.2.4:
<br>
<p>- Fixed compile issue with open() on Fedora 8 (and newer) platforms.
<br>
&nbsp;&nbsp;Thanks to Sebastian Schmitzdorff for noticing the problem.
<br>
- Added run-time warnings during MPI_INIT when MPI_THREAD_MULTIPLE
<br>
&nbsp;&nbsp;and/or progression threads are used (the OMPI v1.2 series does not
<br>
&nbsp;&nbsp;support these well at all).
<br>
- Better handling of ECONNABORTED from connect on Linux.  Thanks to
<br>
&nbsp;&nbsp;Bob Soliday for noticing the problem; thanks to Brian Barrett for
<br>
&nbsp;&nbsp;submitting a patch.
<br>
- Reduce extraneous output from OOB when TCP connections must
<br>
&nbsp;&nbsp;be retried.  Thanks to Brian Barrett for submitting a patch.
<br>
- Fix for ConnectX devices and OFED 1.3.  See ticket #1190.
<br>
- Fixed a configure problem for Fortran 90 on Cray systems.  Ticket #1189.
<br>
- Fix an uninitialized variable in the error case in opal_init.c.
<br>
&nbsp;&nbsp;Thanks to Ake Sandgren for pointing out the mistake.
<br>
- Fixed a hang in configure if $USER was not defined.  Thanks to
<br>
&nbsp;&nbsp;Darrell Kresge for noticing the problem.  See ticket #900.
<br>
- Added support for parallel debuggers even when we have an optimized build.
<br>
&nbsp;&nbsp;See ticket #1178.
<br>
- Worked around a bus error in the Mac OS X 10.5.X (Leopard) linker when
<br>
&nbsp;&nbsp;compiling Open MPI with -g.  See ticket #1179.
<br>
- Removed some warnings about 'rm' from Mac OS X 10.5 (Leopard) builds.
<br>
- Fix the handling of mx_finalize().  See ticket #1177.
<br>
&nbsp;&nbsp;Thanks to Ake Sandgren for bringing this issue to our attention.
<br>
- Fixed minor file descriptor leak in the Altix timer code.  Thanks to
<br>
&nbsp;&nbsp;Paul Hargrove for noticing the problem and supplying the fix.
<br>
- Fix a problem when using a different compiler for C and Objective C.
<br>
&nbsp;&nbsp;See ticket #1153.
<br>
- Fix segfault in MPI_COMM_SPAWN when the user specified a working
<br>
&nbsp;&nbsp;directory.  Thanks to Murat Knecht for reporting this and suggesting
<br>
&nbsp;&nbsp;a fix.
<br>
- A few manpage fixes from the Debian Open MPI maintainers.  Thanks to
<br>
&nbsp;&nbsp;Tilman Koschnick, Sylvestre Ledru, and Dirk Eddelbuettel.
<br>
- Fixed issue with pthread detection when compilers are not all
<br>
&nbsp;&nbsp;from the same vendor.  Thanks to Ake Sandgren for the bug
<br>
&nbsp;&nbsp;report.  See ticket #1150.
<br>
- Fixed vector collectives in the self module.  See ticket #1166.
<br>
- Fixed some data-type engine bugs: an indexing bug, and an alignment bug.
<br>
&nbsp;&nbsp;See ticket #1165.
<br>
- Only set the MPI_APPNUM attribute if it is defined.  See ticket
<br>
&nbsp;&nbsp;#1164.
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2008/04/0019.php">Tim Mattox: "[Open MPI Announce] Open MPI v1.2.6 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2007/11/0017.php">Jeff Squyres: "[Open MPI Announce] MPI-2.1: Getting the band back together"</a>
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
