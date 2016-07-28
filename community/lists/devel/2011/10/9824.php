<?
$subject_val = "[OMPI devel] [Open MPI Announce] Open MPI 1.4.4 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 13 12:07:44 2011" -->
<!-- isoreceived="20111013160744" -->
<!-- sent="Thu, 13 Oct 2011 12:07:39 -0400" -->
<!-- isosent="20111013160739" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] [Open MPI Announce] Open MPI 1.4.4 released" -->
<!-- id="363C19E7-8ED8-43F7-85DC-C1F42C729347_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> [OMPI devel] [Open MPI Announce] Open MPI 1.4.4 released<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-13 12:07:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9825.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25270"</a>
<li><strong>Previous message:</strong> <a href="9823.php">Ralph Castain: "Re: [OMPI devel] running OpenMPI examples on two hosts"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to announce the release of Open MPI version 1.4.4. This release is mainly a bug fix release over the v1.4.3 release. We strongly recommend that all users upgrade to version 1.4.4 if possible. 
<br>
<p>Version 1.4.4 can be downloaded from the main Open MPI web site or any of its mirrors (mirrors will be updating shortly). 
<br>
<p>Here is a list of changes in v1.4.4 as compared to v1.4.3 
<br>
<p>- Modified a memcpy() call in the openib btl connection setup to use
<br>
&nbsp;&nbsp;memmove() instead because of the possibility of an overlapping
<br>
&nbsp;&nbsp;copy (as identified by valgrind).
<br>
- Changed use of sys_timer_get_cycles() to the more appropriate
<br>
&nbsp;&nbsp;wrapper: opal_timer_base_get_cycles().  Thanks to Jani Monoses
<br>
&nbsp;&nbsp;for this fix.
<br>
- Corrected the reported default value of btl_openib_ib_timeout
<br>
&nbsp;&nbsp;in the &quot;IB retries exceeded&quot; error message.  Thanks to Kevin Buckley
<br>
&nbsp;&nbsp;for this correction.
<br>
- Increase rdmacm adress resolution timeout from 1s to 30s &amp; 
<br>
&nbsp;&nbsp;update Chelsio T4 openib BTL defaults.  Thanks to Steve Wise
<br>
&nbsp;&nbsp;for these updates.
<br>
&nbsp;&nbsp;(** also to appear in 1.5.5)
<br>
- Ensure that MPI_Accumulate error return in 1.4 is consistent with
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
George Bosilca
Research Assistant Professor
Innovative Computing Laboratory
Department of Electrical Engineering and Computer Science
University of Tennessee, Knoxville
<a href="http://web.eecs.utk.edu/~bosilca/">http://web.eecs.utk.edu/~bosilca/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9825.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25270"</a>
<li><strong>Previous message:</strong> <a href="9823.php">Ralph Castain: "Re: [OMPI devel] running OpenMPI examples on two hosts"</a>
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
