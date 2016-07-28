<?
$subject_val = "[OMPI devel] 1.5.4 and 1.4.4 NEWS items";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 18 09:11:11 2011" -->
<!-- isoreceived="20110818131111" -->
<!-- sent="Thu, 18 Aug 2011 09:11:02 -0400" -->
<!-- isosent="20110818131102" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.5.4 and 1.4.4 NEWS items" -->
<!-- id="10648E22-E22E-4881-B351-854EE5A94A99_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.5.4 and 1.4.4 NEWS items<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-18 09:11:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9670.php">TERRY DONTJE: "[OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>Previous message:</strong> <a href="9668.php">Matthew Russell: "Re: [OMPI devel] Building Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9679.php">Christopher Samuel: "Re: [OMPI devel] 1.5.4 and 1.4.4 NEWS items"</a>
<li><strong>Reply:</strong> <a href="9679.php">Christopher Samuel: "Re: [OMPI devel] 1.5.4 and 1.4.4 NEWS items"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please check through these; thanks!
<br>
<p>1.5.4
<br>
-----
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
<p><p>1.4.4
<br>
-----
<br>
<p>- Ensure that MPI_Accumulate error return in 1.4 is consistent with
<br>
&nbsp;&nbsp;1.5.x and trunk.
<br>
- Allow the word &quot;slots&quot; in rankfiles (i.e., not just &quot;slot&quot;).
<br>
&nbsp;&nbsp;(** also appeared in 1.5.4)
<br>
- Add Mellanox ConnectX 3 device IDs to the openib BTL defaults.
<br>
&nbsp;&nbsp;(** also appeared in 1.5.4)
<br>
- Update description of btl_openib_cq_size to be more accurate.
<br>
- Ensure mpirun's --xterm options leaves sessions attached.
<br>
&nbsp;&nbsp;(** also appeared in 1.5.4)
<br>
- Update to allow more than 128 entries in an appfile.
<br>
&nbsp;&nbsp;(** also appeared in 1.5.4)
<br>
- Update description of btl_openib_cq_size to be more accurate.
<br>
&nbsp;&nbsp;(** also appeared in 1.5.4)
<br>
- Fix for deadlock when handling recursive attribute keyval deletions
<br>
&nbsp;&nbsp;(e.g., when using ROMIO with MPI_THREAD_MULTIPLE).
<br>
- Fix indexed datatype leaks.  Thanks to Pascal Deveze for supplying
<br>
&nbsp;&nbsp;the initial patch.  (** also appeared in 1.5.4)
<br>
- Fixed the F90 types of the sendcounts and displs parameters to
<br>
&nbsp;&nbsp;MPI_SCATTERV.  Thanks to Stanislav Sazykin for identifying the issue.
<br>
&nbsp;&nbsp;(** also appeared in 1.5.4)
<br>
- Exclude opal/libltdl from &quot;make distclean&quot; when --disable-dlopen is
<br>
&nbsp;&nbsp;used.  Thanks to David Gunter for reporting the issue.
<br>
- Fixed a segv in MPI_Comm_create when called with GROUP_EMPTY.
<br>
&nbsp;&nbsp;Thanks to Dominik Goeddeke for finding this.
<br>
&nbsp;&nbsp;(** also appeared in 1.5.4)
<br>
- Fixed return codes from MPI_PROBE and MPI_IPROBE.
<br>
&nbsp;&nbsp;(** also appeared in 1.5.4)
<br>
- Fixed undefined symbol error when using the vtf90 profiling tool.
<br>
- Fix for referencing an uninitialized variable in DPM ORTE.  Thanks
<br>
&nbsp;&nbsp;to Avinash Malik for reporting the issue.
<br>
- Fix for correctly handling multi-token args when using debuggers.
<br>
- Eliminated the unneeded u_int*_t datatype definitions.
<br>
- Change in ORTE DPM to get around gcc 4.[45].x compiler wanrings
<br>
&nbsp;&nbsp;about possibly calling free() on a non-heap variable, even though it
<br>
&nbsp;&nbsp;will never happen because the refcount will never go to zero.
<br>
- Fixed incorrect text in MPI_File_set_view man page.
<br>
- Fix in MPI_Init_thread for checkpoint/restart.
<br>
- Fix for libtool issue when using pgcc to compile ompi in conjunction
<br>
&nbsp;&nbsp;with the -tp option.
<br>
- Fixed a race condition in osc_rdma_sync.  Thanks to Guillaume
<br>
&nbsp;&nbsp;Thouvenin for finding this issue.
<br>
- Clarification of MPI_Init_thread man page.
<br>
- Fixed an indexing problem in precondition_transports.
<br>
- Fixed a problem in which duplicated libs were being specified for
<br>
&nbsp;&nbsp;linking.  Thanks to Hicham Mouline for noticing it.
<br>
- Various autogen.sh fixes.
<br>
- Fix for memchecking buffers during MPI_*INIT.
<br>
- Man page cleanups.  Thanks to Jeremiah Willcock and Jed Brown.
<br>
- Fix for VT rpmbuild on RHEL5.
<br>
- Support Solaris legacy munmap prototype changes.
<br>
&nbsp;&nbsp;(** also appeared in 1.5.4)
<br>
- Expands app_idx to int32_t to allow more than 127 app_contexts.
<br>
- Guard the inclusion of execinfo.h since not all platforms have it.  Thanks
<br>
&nbsp;&nbsp;to Aleksej Saushev for identifying this issue.
<br>
&nbsp;&nbsp;(** also appeared in 1.5.4)
<br>
- Fix to avoid possible environment corruption.  Thanks to Peter Thompson
<br>
&nbsp;&nbsp;for identifying the issue and supplying a patch.
<br>
&nbsp;&nbsp;(** also appeared in 1.5.4)
<br>
- Fixed paffinity base MCA duplicate registrations.  Thanks to Gus
<br>
&nbsp;&nbsp;Correa for bringing this to our attention.
<br>
- Fix recursive locking bug when MPI-IO was used with
<br>
&nbsp;&nbsp;MPI_THREAD_MULTIPLE.  (** also appeared in 1.5.4)
<br>
- F90 MPI API fixes.
<br>
- Fixed a misleading MPI_Bcast error message.  Thanks to Jeremiah
<br>
&nbsp;&nbsp;Willcock for reporting this.
<br>
- Added &lt;sys/stat.h&gt; to ptmalloc's hooks.c (it's not always included
<br>
&nbsp;&nbsp;by default on some systems).
<br>
- Libtool patch to get around a build problem when using the IBM XL
<br>
&nbsp;&nbsp;compilers.
<br>
- Fix to detect and avoid overlapping memcpy().  Thanks to
<br>
&nbsp;&nbsp;Francis Pellegrini for identifying the issue.
<br>
- Fix to allow ompi to work on top of RoCE vLANs.
<br>
- Restored a missing debugger flag to support TotalView.  Thanks to
<br>
&nbsp;&nbsp;David Turner and the TV folks for supplying the fix.
<br>
- Updated SLURM support to 1.5.1.
<br>
- Removed an extraneous #include from the TCP BTL.
<br>
- When specifying OOB ports, fix to convert the ports into network
<br>
&nbsp;&nbsp;byte order before binding.
<br>
- Fixed use of memory barriers in the SM BTL.  This fixed segv's when
<br>
&nbsp;&nbsp;compiling with Intel 10.0.025 or PGI 9.0-3.
<br>
- Fix to prevent the SM BTL from creating its mmap'd file in
<br>
&nbsp;&nbsp;directories that are remotely mounted.
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
<li><strong>Next message:</strong> <a href="9670.php">TERRY DONTJE: "[OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>Previous message:</strong> <a href="9668.php">Matthew Russell: "Re: [OMPI devel] Building Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9679.php">Christopher Samuel: "Re: [OMPI devel] 1.5.4 and 1.4.4 NEWS items"</a>
<li><strong>Reply:</strong> <a href="9679.php">Christopher Samuel: "Re: [OMPI devel] 1.5.4 and 1.4.4 NEWS items"</a>
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
