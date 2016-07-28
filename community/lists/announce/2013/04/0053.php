<?
$subject_val = "[Open MPI Announce] Open MPI v1.7 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  2 00:39:14 2013" -->
<!-- isoreceived="20130402043914" -->
<!-- sent="Mon, 1 Apr 2013 21:39:06 -0700" -->
<!-- isosent="20130402043906" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.7 released" -->
<!-- id="5FD7F078-2CDB-4A07-BBF4-CFBFA14A0EFC_at_open-mpi.org" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI v1.7 released<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-02 00:39:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0054.php">Ralph Castain: "[Open MPI Announce] v1.7.1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2013/02/0052.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI v1.6.4 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to announce the release of Open MPI version 1.7.  This release represents over a year of research, development, and testing.  
<br>
<p>Although the version 1.7 release marks the advent of a new &quot;feature release&quot; series for Open MPI, the v1.6 series remains relevant as the &quot;super stable&quot; series. The v1.7 series will eventually morph into the next &quot;super stable&quot; series, v1.8 -- at which time, we'll start a new &quot;feature&quot; series (v1.9).
<br>
<p>Version 1.7 can be downloaded from the main Open MPI web site or any of its mirrors (mirrors will be updating shortly). 
<br>
<p>The following is an abbreviated list of changes in v1.7 (note that countless other smaller improvements and enhancements are not shown below):
<br>
<p>- Added MPI-3 functionality: 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- MPI_GET_LIBRARY_VERSION
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Matched probe
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- MPI_TYPE_CREATE_HINDEXED_BLOCK
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Non-blocking collectives
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- MPI_INFO_ENV support
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Fortran '08 bindings (see below)
<br>
- Dropped support for checkpoint/restart due to loss of maintainer :-(
<br>
- Enabled compile-time warning of deprecated MPI functions by default
<br>
&nbsp;&nbsp;(in supported compilers).
<br>
- Revamped Fortran MPI bindings (see the README for details):
<br>
&nbsp;&nbsp;- &quot;mpifort&quot; is now the preferred wrapper compiler for Fortran
<br>
&nbsp;&nbsp;- Added &quot;use mpi_f08&quot; bindings (for compilers that support it)
<br>
&nbsp;&nbsp;- Added better &quot;use mpi&quot; support (for compilers that support it)
<br>
&nbsp;&nbsp;- Removed incorrect MPI_SCATTERV interface from &quot;mpi&quot; module that
<br>
&nbsp;&nbsp;&nbsp;&nbsp;was added in the 1.5.x series for ABI reasons.
<br>
- Lots of VampirTrace upgrades and fixes; upgrade to v5.14.3.
<br>
- Modified process affinity system to provide warning when bindings
<br>
&nbsp;&nbsp;result in being &quot;bound to all&quot;, which is equivalent to not being
<br>
&nbsp;&nbsp;bound.
<br>
- Removed maffinity, paffinity, and carto frameworks (and associated
<br>
&nbsp;&nbsp;MCA params).
<br>
- Upgraded to hwloc v1.5.1.
<br>
- Added performance improvements to the OpenIB (OpenFabrics) BTL.
<br>
- Made malloc hooks more friendly to IO interprosers.  Thanks to the
<br>
&nbsp;&nbsp;bug report and suggested fix from Darshan maintainer Phil Carns.
<br>
- Added support for the DMTCP checkpoint/restart system.
<br>
- Added support for the Cray uGNI interconnect.
<br>
- Fixed header file problems on OpenBSD.
<br>
- Fixed issue with MPI_TYPE_CREATE_F90_REAL.
<br>
- Wrapper compilers now explicitly list/link all Open MPI libraries if
<br>
&nbsp;&nbsp;they detect static linking CLI arguments.
<br>
- Open MPI now requires a C99 compiler to build.  Please upgrade your
<br>
&nbsp;&nbsp;C compiler if you do not have a C99-compliant compiler.
<br>
- Fix MPI_GET_PROCESSOR_NAME Fortran binding to set ierr properly.
<br>
&nbsp;&nbsp;Thanks to LANL for spotting the error.
<br>
- Many MXM and FCA updates.
<br>
- Fixed erroneous free of putenv'ed string that showed up in Valgrind
<br>
&nbsp;&nbsp;reports.
<br>
- Fixed MPI_IN_PLACE case for MPI_ALLGATHER.
<br>
- Fixed a bug that prevented MCA params from being forwarded to
<br>
&nbsp;&nbsp;daemons upon launch.
<br>
- Fixed issues with VT and CUDA --with-cuda[-libdir] configuration CLI
<br>
&nbsp;&nbsp;parameters.
<br>
- Entirely new implementation of many MPI collective routines focused
<br>
&nbsp;&nbsp;on better performance.
<br>
- Revamped autogen / build system.
<br>
- Add new sensor framework to ORTE that includes modules for detecting
<br>
&nbsp;&nbsp;stalled applications and processes that consume too much memory.
<br>
- Added new state machine framework to ORTE that converts ORTE into an
<br>
&nbsp;&nbsp;event-driven state machine using the event library.
<br>
- Added a new MCA parameter (ess_base_stream_buffering) that allows the user
<br>
&nbsp;&nbsp;to override the system default for buffering of stdout/stderr streams
<br>
&nbsp;&nbsp;(via setvbuf). Parameter is not visible via ompi_info.
<br>
- Revamped the launch system to allow consideration of node hardware
<br>
&nbsp;&nbsp;in assigning process locations and bindings.
<br>
- Added the -novm option to preserve the prior launch behavior.
<br>
- Revamped the process mapping system to utilize node hardware by adding
<br>
&nbsp;&nbsp;new map-by, rank-by, and bind-to cmd line options.
<br>
- Added new MCA parameter to provide protection against IO forwarding
<br>
&nbsp;&nbsp;backlog.
<br>
- Dropped support for native Windows due to loss of maintainers. :-(
<br>
- Added a new parallel I/O component and multiple new frameworks to 
<br>
&nbsp;&nbsp;support parallel I/O operations.
<br>
- Fix typo in orte_setup_hadoop.m4. Thanks to Aleksej Saushev for
<br>
&nbsp;&nbsp;reporting it
<br>
- Fix a very old error in opal_path_access(). Thanks to Marco Atzeri
<br>
&nbsp;&nbsp;for chasing it down.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0054.php">Ralph Castain: "[Open MPI Announce] v1.7.1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2013/02/0052.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI v1.6.4 released"</a>
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
