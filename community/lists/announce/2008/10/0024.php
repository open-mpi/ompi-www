<?
$subject_val = "[Open MPI Announce] Open MPI v1.2.8 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 14 15:14:48 2008" -->
<!-- isoreceived="20081014191448" -->
<!-- sent="Tue, 14 Oct 2008 15:14:43 -0400" -->
<!-- isosent="20081014191443" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.2.8 released" -->
<!-- id="ea86ce220810141214k3f9ef295ib619f3438eb89428_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI v1.2.8 released<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-14 15:14:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2009/01/0025.php">Tim Mattox: "[Open MPI Announce] Announcing the release of Open MPI version 1.3"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2008/08/0023.php">Tim Mattox: "[Open MPI Announce] [OMPI users] Open MPI v1.2.7 released"</a>
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
version 1.2.8. This release is mainly a bug fix release over the v1.2.7
<br>
release, but there are few new features.  We strongly recommend
<br>
that all users upgrade to version 1.2.8 if possible.
<br>
<p>Version 1.2.8 can be downloaded from the main Open MPI web site or
<br>
any of its mirrors (mirrors will be updating shortly).
<br>
<p>Here is a list of changes in v1.2.8 as compared to v1.2.7:
<br>
<p>- Tweaked one memory barrier in the openib component to be more conservative.
<br>
&nbsp;&nbsp;May fix a problem observed on PPC machines.  See ticket #1532.
<br>
- Fix OpenFabrics IB partition support. See ticket #1557.
<br>
- Restore v1.1 feature that sourced .profile on remote nodes if the default
<br>
&nbsp;&nbsp;shell will not do so (e.g. /bin/sh and /bin/ksh).  See ticket #1560.
<br>
- Fix segfault in MPI_Init_thread() if ompi_mpi_init() fails. See ticket #1562.
<br>
- Adjust SLURM support to first look for $SLURM_JOB_CPUS_PER_NODE instead of
<br>
&nbsp;&nbsp;the deprecated $SLURM_TASKS_PER_NODE environment variable.  This change
<br>
&nbsp;&nbsp;may be *required* when using SLURM v1.2 and above.  See ticket #1536.
<br>
- Fix the MPIR_Proctable to be in process rank order. See ticket #1529.
<br>
- Fix a regression introduced in 1.2.6 for the IBM eHCA. See ticket #1526.
<br>
<p><pre>
-- 
Tim Mattox, Ph.D.
Open Systems Lab
Indiana University
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2009/01/0025.php">Tim Mattox: "[Open MPI Announce] Announcing the release of Open MPI version 1.3"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2008/08/0023.php">Tim Mattox: "[Open MPI Announce] [OMPI users] Open MPI v1.2.7 released"</a>
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
