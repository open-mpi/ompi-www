<?
$subject_val = "[Open MPI Announce]  Open MPI 1.8.4 released";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 19 22:26:44 2014" -->
<!-- isoreceived="20141220032644" -->
<!-- sent="Fri, 19 Dec 2014 19:26:40 -0800" -->
<!-- isosent="20141220032640" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[Open MPI Announce]  Open MPI 1.8.4 released" -->
<!-- id="990923DB-9265-4C21-B0B1-C0775140167C_at_open-mpi.org" -->
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
<strong>Subject:</strong> [Open MPI Announce]  Open MPI 1.8.4 released<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-19 22:26:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2015/05/0067.php">Ralph Castain: "[Open MPI Announce] OMPI 1.8.5 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2014/10/0065.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI at SC14"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to announce the release of Open MPI version 1.8.4.
<br>
<p>v1.8.4 is a bug fix release.  All users are encouraged to upgrade to v1.8.4 when possible. 
<br>
<p>Version 1.8.4 can be downloaded from the main Open MPI web site or any of its mirrors  (mirrors will be updating shortly).
<br>
<p>Here is a list of changes in v1.8.4 as compared to v1.8.3:
<br>
<p>- Fix MPI_SIZEOF; now available in mpif.h for modern Fortran compilers
<br>
&nbsp;&nbsp;(see README for more details).  Also fixed various compiler/linker
<br>
&nbsp;&nbsp;errors.
<br>
- Fixed inadvertant Fortran ABI break between v1.8.1 and v1.8.2 in the
<br>
&nbsp;&nbsp;mpi interface module when compiled with gfortran &gt;= v4.9.
<br>
- Fix various MPI_THREAD_MULTIPLE issues in the TCP BTL.
<br>
- mpirun no longer requires the --hetero-nodes switch; it will
<br>
&nbsp;&nbsp;automatically detect when running in heterogeneous scenarios.
<br>
- Update LSF support, to include revamped affinity functionality.
<br>
- Update embedded hwloc to v1.9.1.
<br>
- Fixed max registerable memory computation in the openib BTL.
<br>
- Updated error message when debuggers are unable to find various
<br>
&nbsp;&nbsp;symbols/types to be more clear.  Thanks to Dave Love for raising the
<br>
&nbsp;&nbsp;issue.
<br>
- Added proper support for LSF and PBS/Torque libraries in static builds.
<br>
- Rankfiles now support physical processor IDs.
<br>
- Fixed potential hang in MPI_ABORT.
<br>
- Fixed problems with the PSM MTL and &quot;re-connect&quot; scenarios, such as
<br>
&nbsp;&nbsp;MPI_INTERCOMM_CREATE.
<br>
- Fix MPI_IREDUCE_SCATTER with a single process.
<br>
- Fix (rare) race condition in stdout/stderr funneling to mpirun where
<br>
&nbsp;&nbsp;some trailing output could get lost when a process terminated.
<br>
- Removed inadvertent change that set --enable-mpi-thread-multiple &quot;on&quot;
<br>
&nbsp;&nbsp;by default, thus impacting performance for non-threaded apps.
<br>
- Significantly reduced startup time by optimizing internal hash table
<br>
&nbsp;&nbsp;implementation.
<br>
- Fixed OS X linking with the Fortran mpi module when used with
<br>
&nbsp;&nbsp;gfortran &gt;= 4.9.  Thanks to Github user yafshar for raising the
<br>
&nbsp;&nbsp;issue.
<br>
- Fixed memory leak on Cygwin platforms.  Thanks for Marco Atzeri for
<br>
&nbsp;&nbsp;reporting the issue.
<br>
- Fixed seg fault in neighborhood collectives when the degree of the
<br>
&nbsp;&nbsp;topology is higher than the communicator size.  Thanks to Lisandro
<br>
&nbsp;&nbsp;Dalcin for reporting the issue.
<br>
- Fixed segfault in neighborhood collectives under certain use-cases.
<br>
- Fixed various issues regarding Solaris support.  Thanks to Siegmar
<br>
&nbsp;&nbsp;Gross for patiently identifying all the issues.
<br>
- Fixed PMI configure tests for certain Slurm installation patterns.
<br>
- Fixed param registration issue in Java bindings.  Thanks to Takahiro
<br>
&nbsp;&nbsp;Kawashima and Siegmar Gross for identifying the issue.
<br>
- Several man page fixes.
<br>
- Silence several warnings and close some memory leaks (more remain,
<br>
&nbsp;&nbsp;but it's better than it was).
<br>
- Re-enabled the use of CMA and knem in the shared memory BTL.
<br>
- Updated mpirun manpage to correctly explain new map/rank/binding options.
<br>
- Fixed MPI_IALLGATHER problem with intercommunicators.  Thanks for
<br>
&nbsp;&nbsp;Takahiro Kawashima for the patch.
<br>
- Numerous updates and performance improvements to OpenSHMEM.
<br>
- Turned off message coalescing in the openib BTL until a proper fix
<br>
&nbsp;&nbsp;for that capability can be provided (tentatively expected for 1.8.5)
<br>
- Fix a bug in iof output that dates back to the dinosaurs which would
<br>
&nbsp;&nbsp;output extra bytes if the system was very heavily loaded
<br>
- Fix a bug where specifying mca_component_show_load_errors=0 could
<br>
&nbsp;&nbsp;cause ompi_info to segfault
<br>
- Updated valgrind suppression file
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2015/05/0067.php">Ralph Castain: "[Open MPI Announce] OMPI 1.8.5 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2014/10/0065.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI at SC14"</a>
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
