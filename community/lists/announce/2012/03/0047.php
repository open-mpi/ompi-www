<?
$subject_val = "[Open MPI Announce] Open MPI v1.5.5 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 27 10:32:11 2012" -->
<!-- isoreceived="20120327143211" -->
<!-- sent="Tue, 27 Mar 2012 10:32:06 -0400" -->
<!-- isosent="20120327143206" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.5.5 released" -->
<!-- id="88F8B638-B0B5-44DE-A8BE-ADAAF2FB8418_at_cisco.com" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI v1.5.5 released<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-27 10:32:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2012/05/0048.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.6 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2012/02/0046.php">Brad Benton: "[Open MPI Announce] Open MPI v1.4.5 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to announce the release of Open MPI version 1.5.5.
<br>
<p>This release contains a lot of stability fixes and a few new features.  It is likely to be the last release of the v1.5 series.  The v1.5 series will shortly be renamed to be the v1.6 series, thereby becoming the recommended series for production sites (replacing the v1.4 series).
<br>
<p>Version 1.5.5 can be downloaded from the main Open MPI web site or any of its mirrors (Windows binaries will be available shortly; mirrors will also be updating soon). 
<br>
<p>Here is a list of changes in v1.5.5 as compared to v1.5.4: 
<br>
<p>- Many, many portability configure/build fixes courtesy of Paul
<br>
&nbsp;&nbsp;Hargrove.  Thanks, Paul!
<br>
- Fixed shared memory fault tolerance support compiler errors.
<br>
- Removed not-production-quality rshd and tmd PLM launchers.
<br>
- Minor updates to the Open MPI SRPM spec file.
<br>
- Fixed mpirun's --bind-to-socket option.
<br>
- A few MPI_THREAD_MULTIPLE fixes in the shared memory BTL.
<br>
- Upgrade the GNU Autotools used to bootstrap the 1.5/1.6 series to
<br>
&nbsp;&nbsp;all the latest versions at the time of this release.
<br>
- Categorically state in the README that if you're having a problem
<br>
&nbsp;&nbsp;with Open MPI with the Linux Intel 12.1 compilers, *upgrade your
<br>
&nbsp;&nbsp;Intel Compiler Suite to the latest patch version*, and the problems
<br>
&nbsp;&nbsp;will go away. :-)
<br>
- Fix the --without-memory-manager configure option.
<br>
- Fixes for Totalview/DDT MPI-capable debuggers.
<br>
- Update rsh/ssh support to properly handle the Mac OS X library path
<br>
&nbsp;&nbsp;(i.e., DYLD_LIBRARY_PATH).
<br>
- Make warning about shared memory backing files on a networked file
<br>
&nbsp;&nbsp;system be optional (i.e., can be disabled via MCA parameter).
<br>
- Several fixes to processor and memory affinity.
<br>
- Various shared memory infrastructure improvements.
<br>
- Various checkpoint/restart fixes.
<br>
- Fix MPI_IN_PLACE (and other MPI sentinel values) on OS X.  Thanks to
<br>
&nbsp;&nbsp;Dave Goodell for providing the magic OS X gcc linker flags necessary.
<br>
- Various man page corrections and typo fixes.  Thanks to Fujitsu for
<br>
&nbsp;&nbsp;the patch.
<br>
- Updated wrapper compiler man pages to list the various --showme
<br>
&nbsp;&nbsp;options that are available.
<br>
- Add PMI direct-launch support (e.g., &quot;srun mpi_application&quot; under
<br>
&nbsp;&nbsp;SLURM).
<br>
- Correctly compute the aligned address when packing the
<br>
&nbsp;&nbsp;datatype description. Thanks to Fujitsu for the patch.
<br>
- Fix MPI obscure corner case handling in packing MPI datatypes.
<br>
&nbsp;&nbsp;Thanks to Fujitsu for providing the patch.
<br>
- Workaround an Intel compiler v12.1.0 2011.6.233 vector optimization
<br>
&nbsp;&nbsp;bug.
<br>
- Output the MPI API in ompi_info output.
<br>
- Major VT update to 5.12.1.4.
<br>
- Rankfile 'P'hysical mapping is no longer available.
<br>
- Upgrade embedded Hardware Locality (hwloc) v1.3.2, plus some
<br>
&nbsp;&nbsp;post-1.3.2-release bug fixes.  All processor and memory binding is
<br>
&nbsp;&nbsp;now done through hwloc.  Woo hoo!  Note that this fixes core binding
<br>
&nbsp;&nbsp;on AMD Opteron 6200 and 4200 series-based systems (sometimes known
<br>
&nbsp;&nbsp;as Interlagos, Valencia, or other Bulldozer-based chips).
<br>
- New MCA parameters to control process-wide memory binding policy:
<br>
&nbsp;&nbsp;hwloc_base_mem_alloc_policy, hwloc_base_mem_bind_failure_action (see
<br>
&nbsp;&nbsp;ompi_info --param hwloc base).
<br>
- Removed direct support for libnuma.  Libnuma support may now be
<br>
&nbsp;&nbsp;picked up through hwloc.
<br>
- Added MPI_IN_PLACE support to MPI_EXSCAN.
<br>
- Various fixes for building on Windows, including MinGW support.
<br>
- Removed support for the OpenFabrics IBCM connection manager.
<br>
- Updated Chelsio T4 and Intel NE OpenFabrics default buffer settings.
<br>
- Increased the default RDMA CM timeout to 30 seconds.
<br>
- Issue a warning if both btl_tcp_if_include and btl_tcp_if_exclude
<br>
&nbsp;&nbsp;are specified.
<br>
- Many fixes to the Mellanox MXM transport.
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2012/05/0048.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.6 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2012/02/0046.php">Brad Benton: "[Open MPI Announce] Open MPI v1.4.5 released"</a>
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
