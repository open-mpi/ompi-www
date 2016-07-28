<?
$subject_val = "[OMPI users] Regarding Fortran 90 subroutines with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 31 01:30:14 2009" -->
<!-- isoreceived="20091231063014" -->
<!-- sent="Thu, 31 Dec 2009 11:59:50 +0530" -->
<!-- isosent="20091231062950" -->
<!-- name="Arunkumar C R" -->
<!-- email="arunkumar.cr_at_[hidden]" -->
<!-- subject="[OMPI users] Regarding Fortran 90 subroutines with MPI" -->
<!-- id="5fe0e7a40912302229g7984e9c8v6a49920c57f7fa3c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Regarding Fortran 90 subroutines with MPI<br>
<strong>From:</strong> Arunkumar C R (<em>arunkumar.cr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-31 01:29:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11668.php">Eugene Loh: "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<li><strong>Previous message:</strong> <a href="11666.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11668.php">Eugene Loh: "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<li><strong>Reply:</strong> <a href="11668.php">Eugene Loh: "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<li><strong>Reply:</strong> <a href="11669.php">ETHAN DENEAULT: "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have encountered some run time errors in the general purpose program given
<br>
below. Could you please assist me  in correcting this.
<br>
The MPI code is written in Fortran 90. The concept of subroutine is used
<br>
because I want to write program for another scientific problem.
<br>
<p><p>module data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer::np, ierr, irank
<br>
end module
<br>
<p>program prog
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer::trial, ntrials
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ntrials=10
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do trial=1, ntrials
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_comm_rank(mpi_comm_world, irank, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_comm_size(mpi_comm_world,    np, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(1, *) 'trial no=', trial
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(1, *) 'irank      np'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call
<br>
process
<br>
!subroutine call
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print*,'Program completed!'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_finalize(ierr)
<br>
end
<br>
<p>subroutine
<br>
process
<br>
!subroutine
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(irank.eq.0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(10, *) irank, np
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
end subroutine process
<br>
<p>Could you please run the program and let e know the error?
<br>
<p>Thanking you
<br>
Sincerely,
<br>
Arun
<br>
<p><p><pre>
-- 
******************************************************
Arunkumar C R
Research Assistant
Solid State &amp; Structural Chemistry Unit
Indian Institute of Science
Bangalore -12, INDIA
arunkumar.cr_at_[hidden]
Mob: +91- 9900 549 059
******************************************************
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11667/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11668.php">Eugene Loh: "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<li><strong>Previous message:</strong> <a href="11666.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11668.php">Eugene Loh: "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<li><strong>Reply:</strong> <a href="11668.php">Eugene Loh: "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<li><strong>Reply:</strong> <a href="11669.php">ETHAN DENEAULT: "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
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
