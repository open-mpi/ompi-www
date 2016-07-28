<?
$subject_val = "[OMPI devel] Open MPI v1.4.3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  5 22:01:41 2010" -->
<!-- isoreceived="20101006020141" -->
<!-- sent="Tue, 5 Oct 2010 20:01:32 -0600" -->
<!-- isosent="20101006020132" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI v1.4.3 released" -->
<!-- id="3A2B0B62-3F16-41FB-AE0C-5757B7749794_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Open MPI v1.4.3 released<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-05 22:01:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8577.php">Mouhamed.GUEYE: "Re: [OMPI devel] 1.5: does pml DR work?"</a>
<li><strong>Previous message:</strong> <a href="8575.php">Ralph Castain: "Re: [OMPI devel] 1.5: does pml DR work?"</a>
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
version 1.4.3. This release is a bug fix release over the v1.4.2
<br>
release. We strongly recommend that all users upgrade to version 1.4.3
<br>
if possible.
<br>
<p>Version 1.4.3 can be downloaded from the main Open MPI web site or
<br>
any of its mirrors (mirrors will be updating shortly).
<br>
<p>Here is a list of changes in v1.4.3 as compared to v1.4.2:
<br>
<p>- Fixed handling of the array_of_argv parameter in the Fortran
<br>
&nbsp;&nbsp;binding of MPI_COMM_SPAWN_MULTIPLE.
<br>
- Fixed a problem with the Fortran binding for
<br>
&nbsp;&nbsp;MPI_FILE_CREATE_ERRHANDLER.  Thanks to Secretan Yves for identifying
<br>
&nbsp;&nbsp;the issue.
<br>
- Updates to the LSF PLM to ensure that the path is correctly passed.
<br>
&nbsp;&nbsp;Thanks to Teng Lin for the patch.
<br>
- Fixes for the F90 MPI_COMM_SET_ERRHANDLER and MPI_WIN_SET_ERRHANDLER
<br>
&nbsp;&nbsp;bindings.  Thanks to Paul Kapinos for pointing out the issue.
<br>
- Fixed various MPI_THREAD_MULTIPLE race conditions.
<br>
- Fixed an issue with an undeclared variable from ptmalloc2 munmap on
<br>
&nbsp;&nbsp;BSD systems.
<br>
- Fixes for BSD interface detection.
<br>
- Various other BSD fixes.  Thanks to Kevin Buckley helping to track.
<br>
&nbsp;&nbsp;all of this down.
<br>
- Fixed issues with the use of the -nper* mpirun command line arguments.
<br>
- Fixed an issue with coll tuned dynamic rules.
<br>
- Fixed an issue with the use of OPAL_DESTDIR being applied too aggressively.
<br>
- Fixed an issue with one-sided xfers when the displacement exceeds 2GBytes.
<br>
- Change to ensure TotalView works properly on Darwin.
<br>
- Added support for Visual Studio 2010.
<br>
- Fix to ensure proper placement of VampirTrace header files.
<br>
- Needed to add volatile keyword to a varialbe used in debugging
<br>
&nbsp;&nbsp;(MPIR_being_debugged).
<br>
- Fixed a bug in inter-allgather.
<br>
- Fixed malloc(0) warnings.
<br>
- Corrected a typo the MPI_Comm_size man page (intra -&gt; inter).  Thanks
<br>
&nbsp;&nbsp;to Simon number.cruncher for pointing this out.
<br>
- Fixed a SegV in orted when given more than 127 app_contexts.
<br>
- Removed xgrid source code from the 1.4 branch since it is no longer
<br>
&nbsp;&nbsp;supported in the 1.4 series.
<br>
- Removed the --enable-opal-progress-threads config option since
<br>
&nbsp;&nbsp;opal progress thread support does not work in 1.4.x.
<br>
- Fixed a defect in VampirTrace's vtfilter.
<br>
- Fixed wrong Windows path in hnp_contact.
<br>
- Removed the requirement for a paffinity component.
<br>
- Removed a hardcoded limit of 64 interconnected jobs.
<br>
- Fix to allow singletons to use ompi-server for rendezvous.
<br>
- Fixed bug in output-filename option.
<br>
- Fix to correctly handle failures in mx_init().
<br>
- Fixed a potential Fortran memory leak.
<br>
- Fixed an incorrect branch in some ppc32 assembly code.  Thanks
<br>
&nbsp;&nbsp;to Matthew Clark for this fix.
<br>
- Remove use of undocumented AS_VAR_GET macro during configuration.
<br>
- Fixed an issue with VampirTrace's wrapper for MPI_init_thread.
<br>
- Updated mca-btl-openib-device-params.ini file with various new vendor id's.
<br>
- Configuration fixes to ensure CPPFLAGS in handled properly if a non-standard
<br>
&nbsp;&nbsp;valgrind location was specified.
<br>
- Various man page updates
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8577.php">Mouhamed.GUEYE: "Re: [OMPI devel] 1.5: does pml DR work?"</a>
<li><strong>Previous message:</strong> <a href="8575.php">Ralph Castain: "Re: [OMPI devel] 1.5: does pml DR work?"</a>
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
