<?
$subject_val = "[OMPI devel] NEWS file for 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 16:02:28 2009" -->
<!-- isoreceived="20091028200228" -->
<!-- sent="Wed, 28 Oct 2009 16:02:24 -0400" -->
<!-- isosent="20091028200224" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] NEWS file for 1.3.4" -->
<!-- id="B1F8A86B-251D-4A78-889D-D1FA0DE37968_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] NEWS file for 1.3.4<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-28 16:02:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7047.php">Jeff Squyres: "[OMPI devel] 1.3.4rc2 posted"</a>
<li><strong>Previous message:</strong> <a href="7045.php">Jeff Squyres: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7048.php">Eugene Loh: "Re: [OMPI devel] NEWS file for 1.3.4"</a>
<li><strong>Reply:</strong> <a href="7048.php">Eugene Loh: "Re: [OMPI devel] NEWS file for 1.3.4"</a>
<li><strong>Reply:</strong> <a href="7050.php">Ralph Castain: "Re: [OMPI devel] NEWS file for 1.3.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks -- here's what I put in the NEWS section for 1.3.4rc2.  Please  
<br>
send me any corrections / additions / etc. for 1.3.4 final ASAP:
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7047.php">Jeff Squyres: "[OMPI devel] 1.3.4rc2 posted"</a>
<li><strong>Previous message:</strong> <a href="7045.php">Jeff Squyres: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7048.php">Eugene Loh: "Re: [OMPI devel] NEWS file for 1.3.4"</a>
<li><strong>Reply:</strong> <a href="7048.php">Eugene Loh: "Re: [OMPI devel] NEWS file for 1.3.4"</a>
<li><strong>Reply:</strong> <a href="7050.php">Ralph Castain: "Re: [OMPI devel] NEWS file for 1.3.4"</a>
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
