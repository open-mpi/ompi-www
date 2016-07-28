<?
$subject_val = "[Open MPI Announce] Open MPI v1.3.4 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 13:17:15 2009" -->
<!-- isoreceived="20091201181715" -->
<!-- sent="Tue, 1 Dec 2009 13:17:09 -0500" -->
<!-- isosent="20091201181709" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.3.4 released" -->
<!-- id="608A2545-B729-415C-A565-F726EBBD4974_at_cisco.com" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI v1.3.4 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 13:17:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0034.php">Ralph Castain: "[Open MPI Announce] New subproject: Open Resilient Cluster Manager"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2009/11/0032.php">Jeff Squyres: "[Open MPI Announce] Come see us at SC09!"</a>
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
version 1.3.4.  This release is mainly a bug fix release over the  
<br>
v1.3.4 release, but there are few new features, including support for  
<br>
new processor affinity options from mpirun(1) (see the man page for  
<br>
details). We strongly recommend that all users upgrade to version  
<br>
1.3.4 if possible.
<br>
<p>Version 1.3.4 can be downloaded from the main Open MPI web site or any  
<br>
of its mirrors (mirrors will be updating shortly).
<br>
<p>Here is a list of changes in v1.3.4 as compared to v1.3.3
<br>
<p>- Fix some issues in OMPI's SRPM with regard to shell_scripts_basename
<br>
&nbsp;&nbsp;&nbsp;and its use with mpi-selector.  Thanks to Bill Johnstone for
<br>
&nbsp;&nbsp;&nbsp;pointing out the problem.
<br>
- Added many new MPI job process affinity options to mpirun.  See the
<br>
&nbsp;&nbsp;&nbsp;newly-updated mpirun(1) man page for details.
<br>
- Several updates to mpirun's XML output.
<br>
- Update to fix a few Valgrind warnings with regards to the ptmalloc2
<br>
&nbsp;&nbsp;&nbsp;allocator and Open MPI's use of PLPA.
<br>
- Many updates and fixes to the (non-default) &quot;sm&quot; collective
<br>
&nbsp;&nbsp;&nbsp;component (i.e., native shared memory MPI collective operations).
<br>
- Updates and fixes to some MPI_COMM_SPAWN_MULTIPLE corner cases.
<br>
- Fix some internal copying functions in Open MPI's use of PLPA.
<br>
- Correct some SLURM nodelist parsing logic that may have interfered
<br>
&nbsp;&nbsp;&nbsp;with large jobs.  Additionally, per advice from the SLURM team,
<br>
&nbsp;&nbsp;&nbsp;change the environment variable that we use for obtaining the job's
<br>
&nbsp;&nbsp;&nbsp;allocation.
<br>
- Revert to an older, safer (but slower) communicator ID allocation
<br>
&nbsp;&nbsp;&nbsp;algorithm.
<br>
- Fixed minimum distance finding for OpenFabrics devices in the openib
<br>
&nbsp;&nbsp;&nbsp;BTL.
<br>
- Relax the parameter checking MPI_CART_CREATE a bit.
<br>
- Fix MPI_COMM_SPAWN[_MULTIPLE] to only error-check the info arguments
<br>
&nbsp;&nbsp;&nbsp;on the root process.  Thanks to Federico Golfre Andreasi for
<br>
&nbsp;&nbsp;&nbsp;reporting the problem.
<br>
- Fixed some BLCR configure issues.
<br>
- Fixed a potential deadlock when the openib BTL was used with
<br>
&nbsp;&nbsp;&nbsp;MPI_THREAD_MULTIPLE.
<br>
- Fixed dynamic rules selection for the &quot;tuned&quot; coll component.
<br>
- Added a launch progress meter to mpirun (useful for large jobs; set
<br>
&nbsp;&nbsp;&nbsp;the orte_report_launch_progress MCA parameter to 1 to see it).
<br>
- Reduced the number of file descriptors consumed by each MPI process.
<br>
- Add new device IDs for Chelsio T3 RNICs to the openib BTL config file.
<br>
- Fix some CRS self component issues.
<br>
- Added some MCA parameters to the PSM MTL to tune its run-time
<br>
&nbsp;&nbsp;&nbsp;behavior.
<br>
- Fix some VT issues with MPI_BOTTOM/MPI_IN_PLACE.
<br>
- Man page updates from the Debain Open MPI package maintainers.
<br>
- Add cycle counter support for the Alpha and Sparc platforms.
<br>
- Pass visibility flags to libltdl's configure script, resulting in
<br>
&nbsp;&nbsp;&nbsp;those symbols being hidden.  This appears to mainly solve the
<br>
&nbsp;&nbsp;&nbsp;problem of applications attempting to use different versions of
<br>
&nbsp;&nbsp;&nbsp;libltdl from that used to build Open MPI.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0034.php">Ralph Castain: "[Open MPI Announce] New subproject: Open Resilient Cluster Manager"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2009/11/0032.php">Jeff Squyres: "[Open MPI Announce] Come see us at SC09!"</a>
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
