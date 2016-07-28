<?
$subject_val = "[OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 07:33:30 2016" -->
<!-- isoreceived="20160202123330" -->
<!-- sent="Tue, 2 Feb 2016 21:33:29 +0900" -->
<!-- isosent="20160202123329" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?" -->
<!-- id="CAAkFZ5t95sJ8dxMSpnftskyrYfk6j0t7B1qCO6z7RWJXiDZ0rw_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1397268221.14232118.1454408268047.JavaMail.zimbra_at_met.no" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-02 07:33:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18536.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>Previous message:</strong> <a href="18534.php">Gilles Gouaillardet: "Re: [OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18536.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>Reply:</strong> <a href="18536.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>the sm osc component uses communicator CID to name the file that will be
<br>
used to create shared memory segments.
<br>
if I understand and correctly, two different communicators coming from the
<br>
same MPI_Comm_split might share the same CID, so CID (alone) cannot be used
<br>
to generate a unique per communicator file name
<br>
<p>Makes sense ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>---------- Forwarded message ----------
<br>
From: *Peter Wind* &lt;peter.wind_at_[hidden]&gt;
<br>
Date: Tuesday, February 2, 2016
<br>
Subject: [OMPI users] shared memory under fortran, bug?
<br>
To: users_at_[hidden]
<br>
<p><p>Enclosed is a short (&lt; 100 lines) fortran code example that uses shared
<br>
memory.
<br>
It seems to me it behaves wrongly if openmpi is used.
<br>
Compiled with SGI/mpt , it gives the right result.
<br>
<p>To fail, the code must be run on a single node.
<br>
It creates two groups of 2 processes each. Within each group memory is
<br>
shared.
<br>
The error is that the two groups get the same memory allocated, but they
<br>
should not.
<br>
<p>Tested with openmpi 1.8.4, 1.8.5, 1.10.2 and gfortran, intel 13.0, intel
<br>
14.0
<br>
all fail.
<br>
<p>The call:
<br>
&nbsp;&nbsp;&nbsp;call MPI_Win_allocate_shared(win_size, disp_unit, MPI_INFO_NULL,
<br>
comm_group, cp1, win, ierr)
<br>
<p>Should allocate memory only within the group. But when the other group
<br>
allocates memory, the pointers from the two groups point to the same
<br>
address in memory.
<br>
<p>Could you please confirm that this is the wrong behaviour?
<br>
<p>Best regards,
<br>
Peter Wind
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18535/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-fortran attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18535/mpi_share.f90">mpi_share.f90</a>
</ul>
<!-- attachment="mpi_share.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18536.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>Previous message:</strong> <a href="18534.php">Gilles Gouaillardet: "Re: [OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18536.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?"</a>
<li><strong>Reply:</strong> <a href="18536.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: [OMPI users] shared memory under fortran, bug?"</a>
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
