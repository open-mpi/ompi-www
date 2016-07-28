<?
$subject_val = "[OMPI users] shared memory under fortran, bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 05:17:50 2016" -->
<!-- isoreceived="20160202101750" -->
<!-- sent="Tue, 2 Feb 2016 10:17:48 +0000 (UTC)" -->
<!-- isosent="20160202101748" -->
<!-- name="Peter Wind" -->
<!-- email="peter.wind_at_[hidden]" -->
<!-- subject="[OMPI users] shared memory under fortran, bug?" -->
<!-- id="1397268221.14232118.1454408268047.JavaMail.zimbra_at_met.no" -->
<!-- charset="utf-8" -->
<!-- inreplyto="2021513638.14229265.1454407521577.JavaMail.zimbra_at_met.no" -->
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
<strong>Subject:</strong> [OMPI users] shared memory under fortran, bug?<br>
<strong>From:</strong> Peter Wind (<em>peter.wind_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-02 05:17:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28429.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>Previous message:</strong> <a href="28427.php">Gilles Gouaillardet: "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28429.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>Reply:</strong> <a href="28429.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Enclosed is a short (&lt; 100 lines) fortran code example that uses shared memory.
<br>
It seems to me it behaves wrongly if openmpi is used. 
<br>
Compiled with SGI/mpt , it gives the right result.
<br>
<p>To fail, the code must be run on a single node.
<br>
It creates two groups of 2 processes each. Within each group memory is shared.
<br>
The error is that the two groups get the same memory allocated, but they should not.
<br>
<p>Tested with openmpi 1.8.4, 1.8.5, 1.10.2 and gfortran, intel 13.0, intel 14.0
<br>
all fail.
<br>
<p>The call:
<br>
&nbsp;&nbsp;&nbsp;call MPI_Win_allocate_shared(win_size, disp_unit, MPI_INFO_NULL, comm_group, cp1, win, ierr)
<br>
<p>Should allocate memory only within the group. But when the other group allocates memory, the pointers from the two groups point to the same address in memory.
<br>
<p>Could you please confirm that this is the wrong behaviour? 
<br>
<p>Best regards,
<br>
Peter Wind
<br>

<br><hr>
<ul>
<li>text/x-fortran attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28428/mpi_share.f90">mpi_share.f90</a>
</ul>
<!-- attachment="mpi_share.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28429.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>Previous message:</strong> <a href="28427.php">Gilles Gouaillardet: "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28429.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>Reply:</strong> <a href="28429.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory under fortran, bug?"</a>
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
