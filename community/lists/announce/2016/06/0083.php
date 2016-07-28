<?
$subject_val = "[Open MPI Announce] OMPI v1.10.3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 12:57:14 2016" -->
<!-- isoreceived="20160615165714" -->
<!-- sent="Wed, 15 Jun 2016 09:57:10 -0700" -->
<!-- isosent="20160615165710" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[Open MPI Announce] OMPI v1.10.3 released" -->
<!-- id="9148F9FA-377C-4B27-8627-B470497F0C85_at_open-mpi.org" -->
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
<strong>Subject:</strong> [Open MPI Announce] OMPI v1.10.3 released<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-15 12:57:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0084.php">Ralph Castain: "[Open MPI Announce] Fwd: Open MPI v2.0.0rc3 now available"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2016/01/0082.php">Ralph Castain: "[Open MPI Announce] Open MPI v1.10.2 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to announce the release of Open MPI version 1.10.3.
<br>
<p>v1.10.3 is a bug fix release. All users are encouraged to upgrade to v1.10.3 when possible.  
<br>
<p>Version 1.10.3 can be downloaded from the main Open MPI web site or any of its mirrors  (mirrors will be updating shortly).
<br>
<p>1.10.3 - 15 June 2016
<br>
------
<br>
<p>- Fix zero-length datatypes.  Thanks to Wei-keng Liao for reporting
<br>
&nbsp;&nbsp;the issue.
<br>
- Minor manpage cleanups
<br>
- Implement atomic support in OSHMEM/UCX
<br>
- Fix support of MPI_COMBINER_RESIZED. Thanks to James Ramsey
<br>
&nbsp;&nbsp;for the report
<br>
- Fix computation of #cpus when --use-hwthread-cpus is used
<br>
- Add entry points for Allgatherv, iAllgatherv, Reduce, and iReduce
<br>
&nbsp;&nbsp;for the HCOLL library
<br>
- Fix an HCOLL integration bug that could signal completion of request
<br>
&nbsp;&nbsp;while still being worked
<br>
- Fix computation of cores when SMT is enabled. Thanks to Ben Menadue
<br>
&nbsp;&nbsp;for the report
<br>
- Various USNIC fixes
<br>
- Create a datafile in the per-proc directory in order to make it
<br>
&nbsp;&nbsp;unique per communicator. Thanks to Peter Wind for the report
<br>
- Fix zero-size malloc in one-sided pt-to-pt code. Thanks to Lisandro
<br>
&nbsp;&nbsp;Dalcin for the report
<br>
- Fix MPI_Get_address when passed MPI_BOTTOM to not return an error.
<br>
&nbsp;&nbsp;Thanks to Lisandro Dalcin for the report
<br>
- Fix MPI_TYPE_SET_ATTR with NULL value. Thanks to Lisandro Dalcin for
<br>
&nbsp;&nbsp;the report
<br>
- Fix various Fortran08 binding issues
<br>
- Fix memchecker no-data case. Thanks to Clinton Stimpson for the report
<br>
- Fix CUDA support under OS-X
<br>
- Fix various OFI/MTL integration issues
<br>
- Add MPI_T man pages
<br>
- Fix one-sided pt-to-pt issue by preventing communication from happening
<br>
&nbsp;&nbsp;before a target enters a fence, even in the no-precede case
<br>
- Fix a bug that disabled Totalview for MPMD use-case
<br>
- Correctly support MPI_UNWEIGHTED in topo-graph-neighbors. Thanks to
<br>
&nbsp;&nbsp;Jun Kudo for the report
<br>
- Fix singleton operations under SLURM when PMI2 is enabled
<br>
- Do not use MPI_IN_PLACE in neighborhood collectives for non-blocking
<br>
&nbsp;&nbsp;collectives (libnbc). Thanks to Jun Kudo for the report
<br>
- Silence autogen deprecation warnings for newer versions of Perl
<br>
- Do not return MPI_ERR_PENDING from collectives
<br>
- Use type int* for MPI_WIN_DISP_UNIT, MPI_WIN_CREATE_FLAVOR, and MPI_WIN_MODEL.
<br>
&nbsp;&nbsp;Thanks to Alastair McKinstry for the report
<br>
- Fix register_datarep stub function in IO/OMPIO. Thanks to Eric
<br>
&nbsp;&nbsp;Chamberland for the report
<br>
- Fix a bus error on MPI_WIN_[POST,START] in the shared memory one-sided component
<br>
- Add several missing MPI_WIN_FLAVOR constants to the Fortran support
<br>
- Enable connecting processes from different subnets using the openib BTL
<br>
- Fix bug in basic/barrier algorithm in OSHMEM
<br>
- Correct process binding for the --map-by node case
<br>
- Include support for subnet-to-subnet routing over InfiniBand networks
<br>
- Fix usnic resource check
<br>
- AUTHORS: Fix an errant reference to Subversion IDs
<br>
- Fix affinity for MPMD jobs running under LSF
<br>
- Fix many Fortran binding bugs
<br>
- Fix `MPI_IN_PLACE`-related bugs
<br>
- Fix PSM/PSM2 support for singleton operations
<br>
- Ensure MPI transports continue to progress during RTE barriers
<br>
- Update HWLOC to 1.9.1 end-of-series
<br>
- Fix a bug in the Java command line parser when the
<br>
&nbsp;&nbsp;-Djava.library.path options was given by the user
<br>
- Update the MTL/OFI provider selection behavior
<br>
- Add support for clock_gettime on Linux.
<br>
- Correctly detect and configure for Solaris Studio 12.5
<br>
&nbsp;&nbsp;beta compilers
<br>
- Correctly compute #slots when -host is used for MPMD case
<br>
- Fix a bug in the hcoll collectives due to an uninitialized field
<br>
- Do not set a binding policy when oversubscribing a node
<br>
- Fix hang in intercommunicator operations when oversubscribed
<br>
- Speed up process termination during MPI_Abort
<br>
- Disable backtrace support by default in the PSM/PSM2 libraries to
<br>
&nbsp;&nbsp;prevent unintentional conflicting behavior.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0084.php">Ralph Castain: "[Open MPI Announce] Fwd: Open MPI v2.0.0rc3 now available"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2016/01/0082.php">Ralph Castain: "[Open MPI Announce] Open MPI v1.10.2 released"</a>
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
