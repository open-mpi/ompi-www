<?
$subject_val = "[Open MPI Announce] Open MPI v1.8.2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 25 13:36:57 2014" -->
<!-- isoreceived="20140825173657" -->
<!-- sent="Mon, 25 Aug 2014 10:36:23 -0700" -->
<!-- isosent="20140825173623" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.8.2 released" -->
<!-- id="71E6A34F-37FE-4590-809F-25F479108F2A_at_open-mpi.org" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI v1.8.2 released<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-25 13:36:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2014/09/0064.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI 1.8.3 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2014/04/0062.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI v1.8.1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
he Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to announce the release of Open MPI version 1.8.2:
<br>
<p>1.8.2
<br>
-----
<br>
<p>- Fix auto-wireup of OOB, allowing ORTE to automatically
<br>
&nbsp;&nbsp;test all available NICs
<br>
- &quot;Un-deprecate&quot; pernode, npernode, and npersocket options
<br>
&nbsp;&nbsp;by popular demand
<br>
- Add missing Fortran bindings for MPI_WIN_LOCK_ALL,
<br>
&nbsp;&nbsp;MPI_WIN_UNLOCK_ALL, and MPI_WIN_SYNC.
<br>
- Fix cascading/over-quoting in some cases with the rsh/ssh-based
<br>
&nbsp;&nbsp;launcher.  Thanks to multiple users for raising the issue.
<br>
- Properly add support for gfortran 4.9 ignore TKR pragma (it was
<br>
&nbsp;&nbsp;erroneously only partially added in v1.7.5).  Thanks to Marcus
<br>
&nbsp;&nbsp;Daniels for raising the issue.
<br>
- Update/improve help messages in the usnic BTL.
<br>
- Resolve a race condition in MPI_Abort.
<br>
- Fix obscure cases where static linking from wrapper compilers would
<br>
&nbsp;&nbsp;fail.
<br>
- Clarify the configure --help message about when OpenSHMEM is
<br>
&nbsp;&nbsp;enabled/disabled by default.  Thanks to Paul Hargrove for the
<br>
&nbsp;&nbsp;suggestion.
<br>
- Align pages properly where relevant.  Thanks to Paul Hargrove for
<br>
&nbsp;&nbsp;identifying the issue.
<br>
- Various compiler warning and minor fixes for OpenBSD, FreeBSD, and
<br>
&nbsp;&nbsp;Solaris/SPARC.  Thanks to Paul Hargrove for the patches.
<br>
- Properly pass function pointers from Fortran to C in the mpi_f08
<br>
&nbsp;&nbsp;module, thereby now supporting gfortran 4.9.  Thanks to Tobias
<br>
&nbsp;&nbsp;Burnus for assistance and testing with this issue.
<br>
- Improve support for Cray CLE 5.
<br>
- Fix mpirun regression: ensure exit status is non-zero if mpirun is
<br>
&nbsp;&nbsp;terminated due to signal.
<br>
- Improved CUDA efficiency of asynchronous copies.
<br>
- Fix to parameter type in MPI_Type_indexed.3.  Thanks to Bastian
<br>
&nbsp;&nbsp;Beischer for reporting the mistake.
<br>
- Fix NUMA distance calculations in the openib BTL.
<br>
- Decrease time required to shut down mpirun at the end of a job.
<br>
- More RMA fixes.
<br>
- More hostfile fixes from Tetsuya Mishima.
<br>
- Fix darray issue where UB was not computed correctly.
<br>
- Fix mpi_f08 parameter name for MPI_GET_LIBRARY_VERSION.  Thanks to
<br>
&nbsp;&nbsp;Junchao Zhang for pointing out the issue.
<br>
- Ensure mpirun aborts properly when unable to map processes in
<br>
&nbsp;&nbsp;scheduled environments.
<br>
- Ensure that MPI RMA error codes show up properly.  Thanks to
<br>
&nbsp;&nbsp;Lisandro Dalcin for reporting the issue.
<br>
- Minor bug fixes and improvements to the bash and zsh mpirun
<br>
&nbsp;&nbsp;autocompletion scripts.
<br>
- Fix sequential mpirun process mapper.  Thanks to Bill Chen for
<br>
&nbsp;&nbsp;reporting the issue.
<br>
- Correct SLURM stdout/stderr redirection.
<br>
- Added missing portals 4 files.
<br>
- Performance improvements for blocking sends and receives.
<br>
- Lots of cleanup to the ml collective component
<br>
- Added new Java methods to provide full MPI coverage
<br>
- Many OSHMEM cleanups
<br>
- Prevent comm_spawn from automatically launching a VM across
<br>
&nbsp;&nbsp;all available nodes
<br>
- Close many memory leaks to achieve valgrind-clean operation
<br>
- Better handling of TCP connection discovery for mismatched networks
<br>
&nbsp;&nbsp;where we don't have a direct 1:1 subnet match between nodes
<br>
- Prevent segfault when OMPI info tools are used in pipes and user
<br>
&nbsp;&nbsp;exits one step of that pipe before completing output
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/announce/att-0063/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2014/09/0064.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI 1.8.3 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2014/04/0062.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI v1.8.1 released"</a>
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
