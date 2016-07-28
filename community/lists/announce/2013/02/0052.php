<?
$subject_val = "[Open MPI Announce] Open MPI v1.6.4 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 12:39:31 2013" -->
<!-- isoreceived="20130221173931" -->
<!-- sent="Thu, 21 Feb 2013 17:39:20 +0000" -->
<!-- isosent="20130221173920" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.6.4 released" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F50EE6_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI v1.6.4 released<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-21 12:39:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2013/04/0053.php">Ralph Castain: "[Open MPI Announce] Open MPI v1.7 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2012/10/0051.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.6.3 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to the next release in the stable release series: Open MPI version 1.6.4. 
<br>
<p>Version 1.6.4 is a minor bugfix release.  All users are encouraged to upgrade to v1.6.4 when possible. 
<br>
<p>Note that v1.6.4 is ABI compatible with the entire v1.5.x and v1.6.x series, but is not ABI compatible with the v1.4.x series. See <a href="http://www.open-mpi.org/software/ompi/versions/">http://www.open-mpi.org/software/ompi/versions/</a> for a description of Open MPI's release methodology. 
<br>
<p>Version 1.6.4 can be downloaded from the main Open MPI web site or any of its mirrors (Windows binaries may be available eventually; Open MPI needs a new Windows maintainer -- let us know on the developers' list if you're interested in helping out). 
<br>
<p>Here is a list of changes in v1.6.4 as compared to v1.6.3: 
<br>
<p>- Fix Cygwin shared memory and debugger plugin support.  Thanks to
<br>
&nbsp;&nbsp;Marco Atzeri for reporting the issue and providing initial patches.
<br>
- Fix to obtaining the correct available nodes when a rankfile is
<br>
&nbsp;&nbsp;providing the allocation.  Thanks to Siegmar Gross for reporting the
<br>
&nbsp;&nbsp;problem.
<br>
- Fix process binding issue on Solaris.  Thanks to Siegmar Gross for
<br>
&nbsp;&nbsp;reporting the problem.
<br>
- Updates for MXM 2.0.
<br>
- Major VT update to 5.14.2.3.
<br>
- Fixed F77 constants for Cygwin/Cmake build.
<br>
- Fix a linker error when configuring --without-hwloc.
<br>
- Automatically provide compiler flags that compile properly on some
<br>
&nbsp;&nbsp;types of ARM systems.
<br>
- Fix slot_list behavior when multiple sockets are specified.  Thanks
<br>
&nbsp;&nbsp;to Siegmar Gross for reporting the problem.
<br>
- Fixed memory leak in one-sided operations.  Thanks to Victor
<br>
&nbsp;&nbsp;Vysotskiy for letting us know about this one.
<br>
- Added performance improvements to the OpenIB (OpenFabrics) BTL.
<br>
- Improved error message when process affinity fails.
<br>
- Fixed MPI_MINLOC on man pages for MPI_REDUCE(_LOCAL).  Thanks to Jed
<br>
&nbsp;&nbsp;Brown for noticing the problem and supplying a fix.
<br>
- Made malloc hooks more friendly to IO interprosers.  Thanks to the
<br>
&nbsp;&nbsp;bug report and suggested fix from Darshan maintainer Phil Carns.
<br>
- Restored ability to direct launch under SLURM without PMI support.
<br>
- Fixed MPI datatype issues on OpenBSD.
<br>
- Major VT update to 5.14.2.3.
<br>
- Support FCA v3.0+.
<br>
- Fixed header file problems on OpenBSD.
<br>
- Fixed issue with MPI_TYPE_CREATE_F90_REAL.
<br>
- Fix an issue with using external libltdl installations.  Thanks to
<br>
&nbsp;&nbsp;opolawski for identifying the problem.
<br>
- Fixed MPI_IN_PLACE case for MPI_ALLGATHER for FCA.
<br>
- Allow SLURM PMI support to look in lib64 directories.  Thanks to
<br>
&nbsp;&nbsp;Guillaume Papaure for the patch.
<br>
- Restore &quot;use mpi&quot; ABI compatibility with the rest of the 1.5/1.6
<br>
&nbsp;&nbsp;series (except for v1.6.3, where it was accidentally broken).
<br>
- Fix a very old error in opal_path_access(). Thanks to Marco Atzeri
<br>
&nbsp;&nbsp;for chasing it down.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2013/04/0053.php">Ralph Castain: "[Open MPI Announce] Open MPI v1.7 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2012/10/0051.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.6.3 released"</a>
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
