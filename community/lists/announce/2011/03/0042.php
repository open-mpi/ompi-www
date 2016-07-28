<?
$subject_val = "[Open MPI Announce] Open MPI v1.5.2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  9 11:05:30 2011" -->
<!-- isoreceived="20110309160530" -->
<!-- sent="Wed, 9 Mar 2011 11:05:25 -0500" -->
<!-- isosent="20110309160525" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.5.2 released" -->
<!-- id="3C248C65-E518-48AB-AD67-1B6DB13F9477_at_cisco.com" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI v1.5.2 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-09 11:05:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0043.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.5.3 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2011/02/0041.php">Shiqing Fan: "[Open MPI Announce] Open MPI v1.5.1 Windows Installer with Fortran 77 bindings released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to announce the release of Open MPI version 1.5.2.  This release adds more features and some bug fixes over the v1.5.1 release.  We recommend that all v1.5.x users upgrade to version 1.5.2 when possible. 
<br>
<p>*** Note that the &quot;v1.5.x&quot; series is the &quot;feature development&quot; series for Open MPI.  We consider it fairly stable, but it has not been as time-tested as the mature v1.4.x series.  Production sites may wish to stay with v1.4.x until the v1.5 series transitions to its &quot;mature&quot; counterpart (i.e., the v1.6 series).
<br>
<p>Version 1.5.2 can be downloaded from the main Open MPI web site or any of its mirrors (mirrors will be updating shortly). 
<br>
<p>Here is a list of changes in v1.5.2 as compared to v1.5.1: 
<br>
<p>1.5.2
<br>
-----
<br>
<p>- Replaced all custom topology / affinity code with initial support
<br>
&nbsp;&nbsp;for hwloc v1.1.1 (PLPA has been removed -- long live hwloc!).  Note
<br>
&nbsp;&nbsp;that hwloc is bundled with Open MPI, but an external hwloc can be
<br>
&nbsp;&nbsp;used, if desired.  See README for more details.
<br>
- Many CMake updates for Windows builds.
<br>
- Updated opal_cr_thread_sleep_wait MCA param default value to make it
<br>
&nbsp;&nbsp;less aggressive.
<br>
- Updated debugger support to allow Totalview attaching from jobs
<br>
&nbsp;&nbsp;launched directly via srun (not mpirun).  Thanks to Nikolay Piskun
<br>
&nbsp;&nbsp;for the patch.
<br>
- Added more FTB/CIFTS support.
<br>
- Fixed compile error with the PGI compiler.
<br>
- Portability fixes to allow the openib BTL to run on the Solaris
<br>
&nbsp;&nbsp;verbs stack.
<br>
- Fixed multi-token command-line issues when using the mpirun
<br>
&nbsp;&nbsp;--debug switch.  For example:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --debug -np 2 a.out &quot;foo bar&quot;
<br>
&nbsp;&nbsp;Thanks to Gabriele Fatigati for reporting the issue.
<br>
- Added ARM support.
<br>
- Added the MPI_ROOT environment variable in the Open MPI Linux SRPM
<br>
&nbsp;&nbsp;for customers who use the BPS and LSF batch managers.
<br>
- Updated ROMIO from MPICH v1.3.1 (plus one additional patch).
<br>
- Fixed some deprecated MPI API function notification messages.
<br>
- Added new &quot;bfo&quot; PML that provides failover on OpenFabrics networks.
<br>
- Fixed some buffer memcheck issues in MPI_*_init.
<br>
- Added Solaris-specific chip detection and performance improvements.
<br>
- Fix some compile errors on Solaris.
<br>
- Updated the &quot;rmcast&quot; framework with bug fixes, new functionality.
<br>
- Updated the Voltaire FCA component with bug fixes, new
<br>
&nbsp;&nbsp;functionality.  Support for FCA version 2.1.
<br>
- Fix gcc 4.4.x and 4.5.x over-aggressive warning notifications on
<br>
&nbsp;&nbsp;possibly freeing stack variables.  Thanks to the Gentoo packagers
<br>
&nbsp;&nbsp;for reporting the issue.
<br>
- Make the openib component be verbose when it disqualifies itself due
<br>
&nbsp;&nbsp;to MPI_THREAD_MULTIPLE.
<br>
- Minor man page fixes.
<br>
- Various checkpoint / restart fixes.
<br>
- Fix race condition in the one-sided unlock code.  Thanks to
<br>
&nbsp;&nbsp;Guillaume Thouvenin for finding the issue.
<br>
- Improve help message aggregation.
<br>
- Add OMPI_Affinity_str() optional user-level API function (i.e., the
<br>
&nbsp;&nbsp;&quot;affinity&quot; MPI extension).  See README for more details.
<br>
- Added btl_tcp_if_seq MCA parameter to select a different ethernet
<br>
&nbsp;&nbsp;interface for each MPI process on a node.  This parameter is only
<br>
&nbsp;&nbsp;useful when used with virtual ethernet interfaces on a single
<br>
&nbsp;&nbsp;network card (e.g., when using virtual interfaces give dedicated
<br>
&nbsp;&nbsp;hardware resources on the NIC to each process).
<br>
- Changed behavior of mpirun to terminate if it receives 10 (or more)
<br>
&nbsp;&nbsp;SIGPIPEs.
<br>
- Fixed oversubscription detection.
<br>
- Added new mtl_mx_board and mtl_mx_endpoint MCA parameters.
<br>
- Added ummunotify support for OpenFabrics-based transports.  See the
<br>
&nbsp;&nbsp;README for more details.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0043.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.5.3 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2011/02/0041.php">Shiqing Fan: "[Open MPI Announce] Open MPI v1.5.1 Windows Installer with Fortran 77 bindings released"</a>
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
