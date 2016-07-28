<?
$subject_val = "[OMPI users] program with MPI enabled subroutine";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 22 18:15:12 2010" -->
<!-- isoreceived="20100422221512" -->
<!-- sent="Fri, 23 Apr 2010 03:44:48 +0530" -->
<!-- isosent="20100422221448" -->
<!-- name="Arunkumar C R" -->
<!-- email="arunkumar.cr_at_[hidden]" -->
<!-- subject="[OMPI users] program with MPI enabled subroutine" -->
<!-- id="z2g5fe0e7a41004221514g33a76286qb284236fb208aa4_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] program with MPI enabled subroutine<br>
<strong>From:</strong> Arunkumar C R (<em>arunkumar.cr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-22 18:14:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12741.php">Eugene Loh: "Re: [OMPI users] program with MPI enabled subroutine"</a>
<li><strong>Previous message:</strong> <a href="12739.php">Ralph Castain: "Re: [OMPI users] Treatment of SIGHUP by mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12741.php">Eugene Loh: "Re: [OMPI users] program with MPI enabled subroutine"</a>
<li><strong>Reply:</strong> <a href="12741.php">Eugene Loh: "Re: [OMPI users] program with MPI enabled subroutine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>A fortran  90 code having  MPI enabled subroutine is written. The subroutine
<br>
part is given below,
<br>
<p>program abc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;..................                   !usual statements
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;open(20, file='sum.20', action='write')
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;open(30, file='sum.40', action='write')
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n2= 100;    nstep=50
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do step=1, nstep
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n1 = step
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sum2 = (n2 - n1 + 1) * (2*n1 + (n2 - n1 )) /
<br>
2                     !from arithmetic progression
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call routine
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(20, *) step, sum1, sum2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
end program abc
<br>
<p><p>subroutine routine
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use
<br>
dat
<br>
!module 'dat' with common variables for both program &amp; subroutine
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer::ivar, istart, iend, sumt, i
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(step.eq.1) call mpi_init(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_comm_rank(mpi_comm_world, irank, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_comm_size(mpi_comm_world,    np, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ivar  = (n2 - n1)  /  np + 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;istart= min(irank  * ivar + 1,   n2 + 1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iend  = min(istart + ivar - 1,   n2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sum1  = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do i=istart, iend
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sum1= sum1 + i
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_reduce(sum1, sumt, 1, mpi_integer, mpi_sum, 0,
<br>
mpi_comm_world, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sum1  = sumt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(irank.eq.0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(30, *) step, sum1, sum2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(step.eq.nstep) call mpi_finalize(ierr)
<br>
end subroutine routine
<br>
<p>The current problem is that once the subroutine is called the data written
<br>
to sum.30 and sum.20 are not matching.
<br>
If there's no mistake with the calculation part, how shall it be possible to
<br>
get the same data in both the files. I could
<br>
see some of the 'sum1' values in sum.20 are not correct.
<br>
<p>I expect some good replies.
<br>
<p>Thanks in advance.
<br>
<p>Arunkumar
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12740/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12741.php">Eugene Loh: "Re: [OMPI users] program with MPI enabled subroutine"</a>
<li><strong>Previous message:</strong> <a href="12739.php">Ralph Castain: "Re: [OMPI users] Treatment of SIGHUP by mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12741.php">Eugene Loh: "Re: [OMPI users] program with MPI enabled subroutine"</a>
<li><strong>Reply:</strong> <a href="12741.php">Eugene Loh: "Re: [OMPI users] program with MPI enabled subroutine"</a>
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
