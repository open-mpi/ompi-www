<?
$subject_val = "[OMPI devel] 1.10.1 overnight failures - Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 11:19:00 2015" -->
<!-- isoreceived="20151022151900" -->
<!-- sent="Thu, 22 Oct 2015 08:18:54 -0700" -->
<!-- isosent="20151022151854" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.10.1 overnight failures - Fortran" -->
<!-- id="53C2D723-5F1B-49FB-A520-D7DEB09C75BE_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] 1.10.1 overnight failures - Fortran<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-22 11:18:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18244.php">Howard Pritchard: "[OMPI devel] Fwd: mtt-submit, etc."</a>
<li><strong>Previous message:</strong> <a href="18242.php">Gilles Gouaillardet: "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18246.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.1 overnight failures - Fortran"</a>
<li><strong>Reply:</strong> <a href="18246.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.1 overnight failures - Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I&#226;&#128;&#153;m seeing a bunch of build failures in the overnight tests with this signature:
<br>
<p>aint_mpifh.o: In function `do_the_test_':
<br>
aint_mpifh.f90:(.text+0x138): undefined reference to `mpi_win_create_dynamic_'
<br>
aint_mpifh.f90:(.text+0x16b): undefined reference to `mpi_win_attach_'
<br>
aint_mpifh.f90:(.text+0x34c): undefined reference to `mpi_win_detach_'
<br>
collect2: error: ld returned 1 exit status
<br>
<p><p>Looks to me like something got left out of the prior PRs?
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18244.php">Howard Pritchard: "[OMPI devel] Fwd: mtt-submit, etc."</a>
<li><strong>Previous message:</strong> <a href="18242.php">Gilles Gouaillardet: "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18246.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.1 overnight failures - Fortran"</a>
<li><strong>Reply:</strong> <a href="18246.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.1 overnight failures - Fortran"</a>
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
