<?
$subject_val = "[Open MPI Announce] Open MPI 1.4.4 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 13 12:38:30 2011" -->
<!-- isoreceived="20111013163830" -->
<!-- sent="Thu, 13 Oct 2011 12:38:18 -0400" -->
<!-- isosent="20111013163818" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI 1.4.4 released" -->
<!-- id="2C6C9AD5-B8B8-4E20-BD69-B8B5D38FD232_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI 1.4.4 released<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-13 12:38:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2012/02/0046.php">Brad Benton: "[Open MPI Announce] Open MPI v1.4.5 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2011/08/0044.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.5.4 released"</a>
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
memmove() instead because of the possibility of an overlapping
<br>
copy (as identified by valgrind).
<br>
- Changed use of sys_timer_get_cycles() to the more appropriate
<br>
wrapper: opal_timer_base_get_cycles().  Thanks to Jani Monoses
<br>
for this fix.
<br>
- Corrected the reported default value of btl_openib_ib_timeout
<br>
in the &quot;IB retries exceeded&quot; error message.  Thanks to Kevin Buckley
<br>
for this correction.
<br>
- Increase rdmacm adress resolution timeout from 1s to 30s &amp; 
<br>
update Chelsio T4 openib BTL defaults.  Thanks to Steve Wise
<br>
for these updates.
<br>
(** also to appear in 1.5.5)
<br>
- Ensure that MPI_Accumulate error return in 1.4 is consistent with
<br>
1.5.x and trunk.
<br>
- Allow the word &quot;slots&quot; in rankfiles (i.e., not just &quot;slot&quot;).
<br>
(** also appeared in 1.5.4)
<br>
- Add Mellanox ConnectX 3 device IDs to the openib BTL defaults.
<br>
(** also appeared in 1.5.4)
<br>
- Update description of btl_openib_cq_size to be more accurate.
<br>
- Ensure mpirun's --xterm options leaves sessions attached.
<br>
(** also appeared in 1.5.4)
<br>
- Update to allow more than 128 entries in an appfile.
<br>
(** also appeared in 1.5.4)
<br>
- Update description of btl_openib_cq_size to be more accurate.
<br>
(** also appeared in 1.5.4)
<br>
- Fix for deadlock when handling recursive attribute keyval deletions
<br>
(e.g., when using ROMIO with MPI_THREAD_MULTIPLE).
<br>
- Fix indexed datatype leaks.  Thanks to Pascal Deveze for supplying
<br>
the initial patch.  (** also appeared in 1.5.4)
<br>
- Fixed the F90 types of the sendcounts and displs parameters to
<br>
MPI_SCATTERV.  Thanks to Stanislav Sazykin for identifying the issue.
<br>
(** also appeared in 1.5.4)
<br>
- Exclude opal/libltdl from &quot;make distclean&quot; when --disable-dlopen is
<br>
used.  Thanks to David Gunter for reporting the issue.
<br>
- Fixed a segv in MPI_Comm_create when called with GROUP_EMPTY.
<br>
Thanks to Dominik Goeddeke for finding this.
<br>
(** also appeared in 1.5.4)
<br>
- Fixed return codes from MPI_PROBE and MPI_IPROBE.
<br>
(** also appeared in 1.5.4)
<br>
- Fixed undefined symbol error when using the vtf90 profiling tool.
<br>
- Fix for referencing an uninitialized variable in DPM ORTE.  Thanks
<br>
to Avinash Malik for reporting the issue.
<br>
- Fix for correctly handling multi-token args when using debuggers.
<br>
- Eliminated the unneeded u_int*_t datatype definitions.
<br>
- Change in ORTE DPM to get around gcc 4.[45].x compiler wanrings
<br>
about possibly calling free() on a non-heap variable, even though it
<br>
will never happen because the refcount will never go to zero.
<br>
- Fixed incorrect text in MPI_File_set_view man page.
<br>
- Fix in MPI_Init_thread for checkpoint/restart.
<br>
- Fix for libtool issue when using pgcc to compile ompi in conjunction
<br>
with the -tp option.
<br>
- Fixed a race condition in osc_rdma_sync.  Thanks to Guillaume
<br>
Thouvenin for finding this issue.
<br>
- Clarification of MPI_Init_thread man page.
<br>
- Fixed an indexing problem in precondition_transports.
<br>
- Fixed a problem in which duplicated libs were being specified for
<br>
linking.  Thanks to Hicham Mouline for noticing it.
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
(** also appeared in 1.5.4)
<br>
- Expands app_idx to int32_t to allow more than 127 app_contexts.
<br>
- Guard the inclusion of execinfo.h since not all platforms have it.  Thanks
<br>
to Aleksej Saushev for identifying this issue.
<br>
(** also appeared in 1.5.4)
<br>
- Fix to avoid possible environment corruption.  Thanks to Peter Thompson
<br>
for identifying the issue and supplying a patch.
<br>
(** also appeared in 1.5.4)
<br>
- Fixed paffinity base MCA duplicate registrations.  Thanks to Gus
<br>
Correa for bringing this to our attention.
<br>
- Fix recursive locking bug when MPI-IO was used with
<br>
MPI_THREAD_MULTIPLE.  (** also appeared in 1.5.4)
<br>
- F90 MPI API fixes.
<br>
- Fixed a misleading MPI_Bcast error message.  Thanks to Jeremiah
<br>
Willcock for reporting this.
<br>
- Added &lt;sys/stat.h&gt; to ptmalloc's hooks.c (it's not always included
<br>
by default on some systems).
<br>
- Libtool patch to get around a build problem when using the IBM XL
<br>
compilers.
<br>
- Fix to detect and avoid overlapping memcpy().  Thanks to
<br>
Francis Pellegrini for identifying the issue.
<br>
- Fix to allow ompi to work on top of RoCE vLANs.
<br>
- Restored a missing debugger flag to support TotalView.  Thanks to
<br>
David Turner and the TV folks for supplying the fix.
<br>
- Updated SLURM support to 1.5.1.
<br>
- Removed an extraneous #include from the TCP BTL.
<br>
- When specifying OOB ports, fix to convert the ports into network
<br>
byte order before binding.
<br>
- Fixed use of memory barriers in the SM BTL.  This fixed segv's when
<br>
compiling with Intel 10.0.025 or PGI 9.0-3.
<br>
- Fix to prevent the SM BTL from creating its mmap'd file in
<br>
directories that are remotely mounted.
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2012/02/0046.php">Brad Benton: "[Open MPI Announce] Open MPI v1.4.5 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2011/08/0044.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.5.4 released"</a>
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
