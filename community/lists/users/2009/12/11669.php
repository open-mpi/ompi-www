<?
$subject_val = "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 31 11:21:23 2009" -->
<!-- isoreceived="20091231162123" -->
<!-- sent="Thu, 31 Dec 2009 11:17:50 -0500" -->
<!-- isosent="20091231161750" -->
<!-- name="ETHAN DENEAULT" -->
<!-- email="EDENEAULT_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding Fortran 90 subroutines with MPI" -->
<!-- id="B3661B00B8C67248BE7B2314008AA50730972B_at_tia2003.spartans.ut" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5fe0e7a40912302229g7984e9c8v6a49920c57f7fa3c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Regarding Fortran 90 subroutines with MPI<br>
<strong>From:</strong> ETHAN DENEAULT (<em>EDENEAULT_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-31 11:17:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11670.php">Eugene Loh: "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<li><strong>Previous message:</strong> <a href="11668.php">Eugene Loh: "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<li><strong>In reply to:</strong> <a href="11667.php">Arunkumar C R: "[OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Arun, 
<br>
<p>Before you call any MPI subroutines, you have to call MPI_Init(ierr) first. Once you put that line in, it should work.
<br>
<p>Cheers, 
<br>
Ethan
<br>
<p><pre>
--
Dr. Ethan Deneault
Assistant Professor of Physics
SC 234
University of Tampa
Tampa, FL 33606
-----Original Message-----
From: users-bounces_at_[hidden] on behalf of Arunkumar C R
Sent: Thu 12/31/2009 1:29 AM
To: users_at_[hidden]
Subject: [OMPI users] Regarding Fortran 90 subroutines with MPI
 
Hi,
I have encountered some run time errors in the general purpose program given
below. Could you please assist me  in correcting this.
The MPI code is written in Fortran 90. The concept of subroutine is used
because I want to write program for another scientific problem.
module data
        use mpi
        implicit none
        integer::np, ierr, irank
end module
program prog
        use data
        implicit none
        integer::trial, ntrials
        ntrials=10
        do trial=1, ntrials
               call mpi_comm_rank(mpi_comm_world, irank, ierr)
               call mpi_comm_size(mpi_comm_world,    np, ierr)
               write(1, *) 'trial no=', trial
               write(1, *) 'irank      np'
               call
process
!subroutine call
        end do
        print*,'Program completed!'
        call mpi_finalize(ierr)
end
subroutine
process
!subroutine
        use data
        implicit none
        if(irank.eq.0) then
                write(10, *) irank, np
        end if
end subroutine process
Could you please run the program and let e know the error?
Thanking you
Sincerely,
Arun
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
<li>application/ms-tnef attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11669/winmail.dat">winmail.dat</a>
</ul>
<!-- attachment="winmail.dat" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11670.php">Eugene Loh: "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<li><strong>Previous message:</strong> <a href="11668.php">Eugene Loh: "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<li><strong>In reply to:</strong> <a href="11667.php">Arunkumar C R: "[OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
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
