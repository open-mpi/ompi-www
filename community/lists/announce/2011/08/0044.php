<?
$subject_val = "[Open MPI Announce] Open MPI v1.5.4 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 18 15:17:01 2011" -->
<!-- isoreceived="20110818191701" -->
<!-- sent="Thu, 18 Aug 2011 15:16:56 -0400" -->
<!-- isosent="20110818191656" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.5.4 released" -->
<!-- id="155A8675-D980-40DD-B3C1-6B750C8A6E71_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI v1.5.4 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-18 15:16:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2011/10/0045.php">George Bosilca: "[Open MPI Announce] Open MPI 1.4.4 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2011/03/0043.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.5.3 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to announce the release of Open MPI version 1.5.4.  
<br>
<p>As the v1.5 series matures, this release contains a lot of stability fixes and a few new features. 
<br>
<p>*** Note that the &quot;v1.5.x&quot; series is the &quot;feature development&quot; series for Open MPI.  We consider it fairly stable, but it not quite as time-tested as the mature v1.4.x series (although it's getting there).  Production sites may wish to stay with v1.4.x until the v1.5 series transitions to its &quot;mature&quot; counterpart (i.e., the v1.6 series). 
<br>
<p>Version 1.5.4 can be downloaded from the main Open MPI web site or any of its mirrors (Windows binaries will be available shortly; mirrors will also be updating shortly).
<br>
<p>Here is a list of changes in v1.5.4 as compared to v1.5.3:
<br>
<p>- Add support for the (as yet unreleased) Mellanox MXM transport.
<br>
- Add support for dynamic service levels (SLs) in the openib BTL.
<br>
- Fixed C++ bindings cosmetic/warnings issue with
<br>
&nbsp;&nbsp;MPI::Comm::NULL_COPY_FN and MPI::Comm::NULL_DELETE_FN.  Thanks to
<br>
&nbsp;&nbsp;J&#250;lio Hoffimann for identifying the issues.
<br>
- Also allow the word &quot;slots&quot; in rankfiles (i.e., not just &quot;slot&quot;).
<br>
&nbsp;&nbsp;(** also to appear in 1.4.4)
<br>
- Add Mellanox ConnectX 3 device IDs to the openib BTL defaults.
<br>
&nbsp;&nbsp;(** also to appear in 1.4.4)
<br>
- Various FCA updates.
<br>
- Fix 32 bit SIGBUS errors on Solaris SPARC platforms.
<br>
- Add missing ARM assembly code files.
<br>
- Update to allow more than 128 entries in an appfile.
<br>
&nbsp;&nbsp;(** also to appear in 1.4.4)
<br>
- Various VT updates and bug fixes.
<br>
- Update description of btl_openib_cq_size to be more accurate.
<br>
&nbsp;&nbsp;(** also to appear in 1.4.4)
<br>
- Various assembly &quot;clobber&quot; fixes.
<br>
- Fix a hang in carto selection in obscure situations.
<br>
- Guard the inclusion of execinfo.h since not all platforms have it.  Thanks
<br>
&nbsp;&nbsp;to Aleksej Saushev for identifying this issue.
<br>
&nbsp;&nbsp;(** also to appear in 1.4.4)
<br>
- Support Solaris legacy munmap prototype changes.
<br>
&nbsp;&nbsp;(** also to appear in 1.4.4)
<br>
- Updated to Automake 1.11.1 per
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2011/07/9492.php">http://www.open-mpi.org/community/lists/devel/2011/07/9492.php</a>.
<br>
- Fix compilation of LSF support.
<br>
- Update MPI_Comm_spawn_multiple.3 man page to reflect what it
<br>
&nbsp;&nbsp;actually does.
<br>
- Fix for possible corruption of the environment.  Thanks to Peter
<br>
&nbsp;&nbsp;Thompson for the suggestion.  (** also to appear in 1.4.4)
<br>
- Enable use of PSM on direct-launch SLURM jobs.
<br>
- Update paffinity hwloc to v1.2, and to fix minor bugs affinity
<br>
&nbsp;&nbsp;assignment bugs on PPC64/Linux platforms.
<br>
- Let the openib BTL auto-detect its bandwidth.
<br>
- Support new MPI-2.2 datatypes.
<br>
- Updates to support more datatypes in MPI one-sided communication.
<br>
- Fix recursive locking bug when MPI-IO was used with
<br>
&nbsp;&nbsp;MPI_THREAD_MULTIPLE.  (** also to appear in 1.4.4)
<br>
- Fix mpirun handling of prefix conflicts.
<br>
- Ensure mpirun's --xterm options leaves sessions attached.
<br>
&nbsp;&nbsp;(** also to appear in 1.4.4)
<br>
- Fixed type of sendcounts and displs in the &quot;use mpi&quot; F90 module.
<br>
&nbsp;&nbsp;ABI is preserved, but applications may well be broken.  See the
<br>
&nbsp;&nbsp;README for more details.  Thanks to Stanislav Sazykin for
<br>
&nbsp;&nbsp;identifying the issue.  (** also to appear in 1.4.4)
<br>
- Fix indexed datatype leaks.  Thanks to Pascal Deveze for supplying
<br>
&nbsp;&nbsp;the initial patch.  (** also to appear in 1.4.4)
<br>
- Fix debugger mapping when mpirun's -npernode option is used.
<br>
- Fixed support for configure's --disable-dlopen option when used with
<br>
&nbsp;&nbsp;&quot;make distclean&quot;.
<br>
- Fix segv associated with MPI_Comm_create with MPI_GROUP_EMPTY.
<br>
&nbsp;&nbsp;Thanks to Dominik Goeddeke for finding this.
<br>
&nbsp;&nbsp;(** also to appear in 1.4.4)
<br>
- Improved LoadLeveler ORTE support.
<br>
- Add new WindVerbs BTL plugin, supporting native OpenFabrics verbs on 
<br>
&nbsp;&nbsp;Windows (the &quot;wv&quot; BTL).
<br>
- Add new btl_openib_gid_index MCA parameter to allow selecting which
<br>
&nbsp;&nbsp;GID to use on an OpenFabrics device's GID table.
<br>
- Add support for PCI relaxed ordering in the OpenFabrics BTL (when
<br>
&nbsp;&nbsp;available).
<br>
- Update rsh logic to allow correct SGE operation.
<br>
- Ensure that the mca_paffinity_alone MCA parameter only appears once
<br>
&nbsp;&nbsp;in the ompi_info output.  Thanks to Gus Correa for identifying the
<br>
&nbsp;&nbsp;issue.
<br>
- Fixed return codes from MPI_PROBE and MPI_IPROBE.
<br>
&nbsp;&nbsp;(** also to appear in 1.4.4)
<br>
- Remove --enable-progress-thread configure option; it doesn't work on
<br>
&nbsp;&nbsp;the v1.5 branch.  Rename --enable-mpi-threads to
<br>
&nbsp;&nbsp;--enable-mpi-thread-multiple.  Add new --enable-opal-multi-threads
<br>
&nbsp;&nbsp;option.
<br>
- Updates for Intel Fortran compiler version 12.
<br>
- Remove bproc support.  Farewell bproc!
<br>
- If something goes wrong during MPI_INIT, fix the error
<br>
&nbsp;&nbsp;message to say that it's illegal to invoke MPI_INIT before
<br>
&nbsp;&nbsp;MPI_INIT.
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2011/10/0045.php">George Bosilca: "[Open MPI Announce] Open MPI 1.4.4 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2011/03/0043.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.5.3 released"</a>
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
