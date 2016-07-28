<?
$subject_val = "[Open MPI Announce] Open MPI v1.3.3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 14 14:10:56 2009" -->
<!-- isoreceived="20090714181056" -->
<!-- sent="Tue, 14 Jul 2009 12:10:42 -0600" -->
<!-- isosent="20090714181042" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.3.3 released" -->
<!-- id="A865BD43-1B47-44EA-9918-48B4CC50CE9D_at_open-mpi.org" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI v1.3.3 released<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-14 14:10:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2009/11/0032.php">Jeff Squyres: "[Open MPI Announce] Come see us at SC09!"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2009/04/0030.php">Ralph Castain: "[Open MPI Announce] Open MPI v1.3.2 released"</a>
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
version 1.3.3. This release is mainly a bug fix release over the v1.3.3
<br>
release, but there are few new features, including support for Microsoft
<br>
Windows.  We strongly recommend that all users upgrade to version 1.3.3
<br>
if possible.
<br>
<p>Version 1.3.3 can be downloaded from the main Open MPI web site or
<br>
any of its mirrors (mirrors will be updating shortly).
<br>
<p>Here is a list of changes in v1.3.3 as compared to v1.3.2:
<br>
<p>- Fix a number of issues with the openib BTL (OpenFabrics) RDMA CM,
<br>
&nbsp;&nbsp;&nbsp;including a memory corruption bug, a shutdown deadlock, and a route
<br>
&nbsp;&nbsp;&nbsp;timeout.  Thanks to David McMillen and Hal Rosenstock for help in
<br>
&nbsp;&nbsp;&nbsp;tracking down the issues.
<br>
- Change the behavior of the EXTRA_STATE parameter that is passed to
<br>
&nbsp;&nbsp;&nbsp;Fortran attribute callback functions: this value is now stored
<br>
&nbsp;&nbsp;&nbsp;internally in MPI -- it no longer references the original value
<br>
&nbsp;&nbsp;&nbsp;passed by MPI_*_CREATE_KEYVAL.
<br>
- Allow the overriding RFC1918 and RFC3330 for the specification of
<br>
&nbsp;&nbsp;&nbsp;&quot;private&quot; networks, thereby influencing Open MPI's TCP
<br>
&nbsp;&nbsp;&nbsp;&quot;reachability&quot; computations.
<br>
- Improve flow control issues in the sm btl, by both tweaking the
<br>
&nbsp;&nbsp;&nbsp;shared memory progression rules and by enabling the &quot;sync&quot; collective
<br>
&nbsp;&nbsp;&nbsp;to barrier every 1,000th collective.
<br>
- Various fixes for the IBM XL C/C++ v10.1 compiler.
<br>
- Allow explicit disabling of ptmalloc2 hooks at runtime (e.g., enable
<br>
&nbsp;&nbsp;&nbsp;support for Debain's builtroot system).  Thanks to Manuel Prinz and
<br>
&nbsp;&nbsp;&nbsp;the rest of the Debian crew for helping identify and fix this issue.
<br>
- Various minor fixes for the I/O forwarding subsystem.
<br>
- Big endian iWARP fixes in the Open Fabrics RDMA CM support.
<br>
- Update support for various OpenFabrics devices in the openib BTL's
<br>
&nbsp;&nbsp;&nbsp;.ini file.
<br>
- Fixed undefined symbol issue with Open MPI's parallel debugger
<br>
&nbsp;&nbsp;&nbsp;message queue support so it can be compiled by Sun Studio compilers.
<br>
- Update MPI_SUBVERSION to 1 in the Fortran bindings.
<br>
- Fix MPI_GRAPH_CREATE Fortran 90 binding.
<br>
- Fix MPI_GROUP_COMPARE behavior with regards to MPI_IDENT.  Thanks to
<br>
&nbsp;&nbsp;&nbsp;Geoffrey Irving for identifying the problem and supplying the fix.
<br>
- Silence gcc 4.1 compiler warnings about type punning.  Thanks to
<br>
&nbsp;&nbsp;&nbsp;Number Cruncher for the fix.
<br>
- Added more Valgrind and other memory-cleanup fixes.  Thanks to
<br>
&nbsp;&nbsp;&nbsp;various Open MPI users for help with these issues.
<br>
- Miscellaneous VampirTrace fixes.
<br>
- More fixes for openib credits in heavy-congestion scenarios.
<br>
- Slightly decrease the latency in the openib BTL in some conditions
<br>
&nbsp;&nbsp;&nbsp;(add &quot;send immediate&quot; support to the openib BTL).
<br>
- Ensure to allow MPI_REQUEST_GET_STATUS to accept an
<br>
&nbsp;&nbsp;&nbsp;MPI_STATUS_IGNORE parameter.  Thanks to Shaun Jackman for the bug
<br>
&nbsp;&nbsp;&nbsp;report.
<br>
- Added Microsoft Windows support.  See README.WINDOWS file for
<br>
&nbsp;&nbsp;&nbsp;details.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2009/11/0032.php">Jeff Squyres: "[Open MPI Announce] Come see us at SC09!"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2009/04/0030.php">Ralph Castain: "[Open MPI Announce] Open MPI v1.3.2 released"</a>
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
