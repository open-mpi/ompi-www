<?
$subject_val = "[OMPI users] Open MPI v1.3.1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 19 09:37:45 2009" -->
<!-- isoreceived="20090319133745" -->
<!-- sent="Thu, 19 Mar 2009 07:37:37 -0600" -->
<!-- isosent="20090319133737" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI v1.3.1 released" -->
<!-- id="722495CC-BE2B-4077-BD20-C4E78BAF4671_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="96D49847-F0B7-446B-98AA-CC24098927BC_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI v1.3.1 released<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-19 09:37:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8510.php">Dave Love: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Previous message:</strong> <a href="8508.php">Nysal Jan: "Re: [OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
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
version 1.3.1. This release is mainly a bug fix release over the v1.3.0
<br>
release, but there are few new features.  We strongly recommend
<br>
that all users upgrade to version 1.3.1 if possible.
<br>
<p>Version 1.3.1 can be downloaded from the main Open MPI web site or
<br>
any of its mirrors (mirrors will be updating shortly).
<br>
<p>Here is a list of changes in v1.3.1 as compared to v1.3.0:
<br>
<p>- Added &quot;sync&quot; coll component to allow users to synchronize every N
<br>
&nbsp;&nbsp;collective operations on a given communicator.
<br>
- Increased the default values of the IB and RNR timeout MCA parameters.
<br>
- Fix a compiler error noted by Mostyn Lewis with the PGI 8.0 compiler.
<br>
- Fix an error that prevented stdin from being forwarded if the
<br>
&nbsp;&nbsp;rsh launcher was in use.  Thanks to Branden Moore for pointing out
<br>
&nbsp;&nbsp;the problem.
<br>
- Correct a case where the added datatype is considered as contiguous  
<br>
but
<br>
&nbsp;&nbsp;has gaps in the beginning.
<br>
- Fix an error that limited the number of comm_spawns that could
<br>
&nbsp;&nbsp;simultaneously be running in some environments
<br>
- Correct a corner case in OB1's GET protocol for long messages; the
<br>
&nbsp;&nbsp;error could sometimes cause MPI jobs using the openib BTL to hang.
<br>
- Fix a bunch of bugs in the IO forwarding (IOF) subsystem and add some
<br>
&nbsp;&nbsp;new options to output to files and redirect output to xterm.  Thanks  
<br>
to
<br>
&nbsp;&nbsp;Jody Weissmann for helping test out many of the new fixes and
<br>
&nbsp;&nbsp;features.
<br>
- Fix SLURM race condition.
<br>
- Fix MPI_File_c2f(MPI_FILE_NULL) to return 0, not -1.  Thanks to
<br>
&nbsp;&nbsp;Lisandro Dalcin for the bug report.
<br>
- Fix the DSO build of tm PLM.
<br>
- Various fixes for size disparity between C int's and Fortran
<br>
&nbsp;&nbsp;INTEGER's.  Thanks to Christoph van Wullen for the bug report.
<br>
- Ensure that mpirun exits with a non-zero exit status when daemons or
<br>
&nbsp;&nbsp;processes abort or fail to launch.
<br>
- Various fixes to work around Intel (NetEffect) RNIC behavior.
<br>
- Various fixes for mpirun's --preload-files and --preload-binary
<br>
&nbsp;&nbsp;options.
<br>
- Fix the string name in MPI::ERRORS_THROW_EXCEPTIONS.
<br>
- Add ability to forward SIFTSTP and SIGCONT to MPI processes if you
<br>
&nbsp;&nbsp;set the MCA parameter orte_forward_job_control to 1.
<br>
- Allow the sm BTL to allocate larger amounts of shared memory if
<br>
&nbsp;&nbsp;desired (helpful for very large multi-core boxen).
<br>
- Fix a few places where we used PATH_MAX instead of OMPI_PATH_MAX,
<br>
&nbsp;&nbsp;leading to compile problems on some platforms.  Thanks to Andrea Iob
<br>
&nbsp;&nbsp;for the bug report.
<br>
- Fix mca_btl_openib_warn_no_device_params_found MCA parameter; it
<br>
&nbsp;&nbsp;was accidentally being ignored.
<br>
- Fix some run-time issues with the sctp BTL.
<br>
- Ensure that RTLD_NEXT exists before trying to use it (e.g., it
<br>
&nbsp;&nbsp;doesn't exist on Cygwin).  Thanks to Gustavo Seabra for reporting
<br>
&nbsp;&nbsp;the issue.
<br>
- Various fixes to VampirTrace, including fixing compile errors on
<br>
&nbsp;&nbsp;some platforms.
<br>
- Fixed missing MPI_Comm_accept.3 man page; fixed minor issue in
<br>
&nbsp;&nbsp;orterun.1 man page.  Thanks to Dirk Eddelbuettel for identifying the
<br>
&nbsp;&nbsp;problem and submitting a patch.
<br>
- Implement the XML formatted output of stdout/stderr/stddiag.
<br>
- Fixed mpirun's -wdir switch to ensure that working directories for
<br>
&nbsp;&nbsp;multiple app contexts are properly handled.  Thanks to Geoffroy
<br>
&nbsp;&nbsp;Pignot for reporting the problem.
<br>
- Improvements to the MPI C++ integer constants:
<br>
&nbsp;&nbsp;- Allow MPI::SEEK_* constants to be used as constants
<br>
&nbsp;&nbsp;- Allow other MPI C++ constants to be used as array sizes
<br>
- Fix minor problem with orte-restart's command line options.  See
<br>
&nbsp;&nbsp;ticket #1761 for details.  Thanks to Gregor Dschung for reporting
<br>
&nbsp;&nbsp;the problem.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8510.php">Dave Love: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Previous message:</strong> <a href="8508.php">Nysal Jan: "Re: [OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
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
