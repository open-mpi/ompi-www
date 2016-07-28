<?
$subject_val = "[OMPI users] Strange behaviour OpenMPI in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 22 09:37:58 2016" -->
<!-- isoreceived="20160122143758" -->
<!-- sent="Fri, 22 Jan 2016 15:37:49 +0100" -->
<!-- isosent="20160122143749" -->
<!-- name="Pawe&#197;&#130; Jarz&#196;&#153;bski" -->
<!-- email="pjarz_at_[hidden]" -->
<!-- subject="[OMPI users] Strange behaviour OpenMPI in Fortran" -->
<!-- id="56A23EBD.6000004_at_ippt.pan.pl" -->
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
<strong>Subject:</strong> [OMPI users] Strange behaviour OpenMPI in Fortran<br>
<strong>From:</strong> Pawe&#197;&#130; Jarz&#196;&#153;bski (<em>pjarz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-22 09:37:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28335.php">Kuhl, Spencer J: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>Previous message:</strong> <a href="28333.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28336.php">Nick Papior: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>Reply:</strong> <a href="28336.php">Nick Papior: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>Reply:</strong> <a href="28347.php">Gilles Gouaillardet: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I wrote this code:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program hello
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: rank, dest, source, tag, ierr, stat
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: n
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: taskinfo, ptr
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(rank.eq.0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'Hello'
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n = 20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dest = 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tag = 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;taskinfo = n
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_SEND(taskinfo, 1, MPI_INTEGER, dest, tag,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1       MPI_COMM_WORLD, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tag = tag + 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_SEND(ptr, 1, MPI_INTEGER, dest, tag,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1       MPI_COMM_WORLD, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;source = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tag = 1
<br>
<p>!        n = 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_RECV(taskinfo, 1, MPI_INTEGER, source, tag,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1       MPI_COMM_WORLD, stat, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n = taskinfo
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tag = tag + 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'n1 ', n
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'taskinfo1 ', taskinfo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_RECV(ptr, 1, MPI_INTEGER, source, tag,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1       MPI_COMM_WORLD, stat, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'n2 ', n
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'taskinfo2 ', taskinfo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FINALIZE(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
<p><p>I supposed that it should produce this:
<br>
&nbsp;&nbsp;Hello
<br>
&nbsp;&nbsp;n1           20
<br>
&nbsp;&nbsp;taskinfo1           20
<br>
&nbsp;&nbsp;n2            20
<br>
&nbsp;&nbsp;taskinfo2           20
<br>
<p>But in fact it produces this:
<br>
&nbsp;&nbsp;Hello
<br>
&nbsp;&nbsp;n1           20
<br>
&nbsp;&nbsp;taskinfo1           20
<br>
&nbsp;&nbsp;n2            2
<br>
&nbsp;&nbsp;taskinfo2           20
<br>
<p>It's strange to me that variable &quot;n&quot; is changed after call to MPI 
<br>
subroutine, but I dont even put it in calls to MPI.
<br>
If I comment line 13 with &quot; write(*,*) 'Hello' &quot; everything is ok. If I 
<br>
uncomment line 30 with &quot;n = 1&quot;, everything is ok as well.
<br>
<p>Could anybody explain me what is happening?
<br>
<p>I tested it on:
<br>
&nbsp;&nbsp;&nbsp;1) intel fortran compiler 14.0 and openmpi 1.6.5
<br>
&nbsp;&nbsp;&nbsp;1) intel fortran compiler 13.1.3 and openmpi 1.8.4
<br>
<p>Best regards,
<br>
Pawel J.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28335.php">Kuhl, Spencer J: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>Previous message:</strong> <a href="28333.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28336.php">Nick Papior: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>Reply:</strong> <a href="28336.php">Nick Papior: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>Reply:</strong> <a href="28347.php">Gilles Gouaillardet: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
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
