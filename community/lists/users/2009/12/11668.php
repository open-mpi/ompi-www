<?
$subject_val = "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 31 11:15:44 2009" -->
<!-- isoreceived="20091231161544" -->
<!-- sent="Thu, 31 Dec 2009 08:17:22 -0800" -->
<!-- isosent="20091231161722" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding Fortran 90 subroutines with MPI" -->
<!-- id="4B3CCE92.6010603_at_sun.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-31 11:17:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11669.php">ETHAN DENEAULT: "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<li><strong>Previous message:</strong> <a href="11667.php">Arunkumar C R: "[OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<li><strong>In reply to:</strong> <a href="11667.php">Arunkumar C R: "[OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11670.php">Eugene Loh: "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<li><strong>Reply:</strong> <a href="11670.php">Eugene Loh: "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It would help if you would include the error messages you encounter.
<br>
<p>You need to call MPI_Init(ierr) before you can call (just about) any 
<br>
other MPI call.  E.g., add &quot;call MPI_Init(ierr)&quot; as the first executable 
<br>
statement of your &quot;program  prog&quot;.
<br>
<p>The error I get with your program is
<br>
<p>*** An error occurred in MPI_Comm_f2c
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
<p>I suppose that message could be clearer.
<br>
<p>If I add the MPI_Init call, things work fine.
<br>
<p>Arunkumar C R wrote:
<br>
<p><span class="quotelev1">&gt; I have encountered some run time errors in the general purpose program 
</span><br>
<span class="quotelev1">&gt; given below. Could you please assist me  in correcting this.
</span><br>
<span class="quotelev1">&gt; The MPI code is written in Fortran 90. The concept of subroutine is 
</span><br>
<span class="quotelev1">&gt; used because I want to write program for another scientific problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module data
</span><br>
<span class="quotelev1">&gt;         use mpi
</span><br>
<span class="quotelev1">&gt;         implicit none
</span><br>
<span class="quotelev1">&gt;         integer::np, ierr, irank
</span><br>
<span class="quotelev1">&gt; end module
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; program prog
</span><br>
<span class="quotelev1">&gt;         use data
</span><br>
<span class="quotelev1">&gt;         implicit none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         integer::trial, ntrials
</span><br>
<p>insert &quot;call mpi_init(ierr)&quot; here
<br>
<p><span class="quotelev1">&gt;         ntrials=10
</span><br>
<span class="quotelev1">&gt;        
</span><br>
<span class="quotelev1">&gt;         do trial=1, ntrials
</span><br>
<span class="quotelev1">&gt;                call mpi_comm_rank(mpi_comm_world, irank, ierr)
</span><br>
<span class="quotelev1">&gt;                call mpi_comm_size(mpi_comm_world,    np, ierr)
</span><br>
<span class="quotelev1">&gt;                write(1, *) 'trial no=', trial
</span><br>
<span class="quotelev1">&gt;                write(1, *) 'irank      np'
</span><br>
<span class="quotelev1">&gt;                call 
</span><br>
<span class="quotelev1">&gt; process                                                                          
</span><br>
<span class="quotelev1">&gt; !subroutine call
</span><br>
<span class="quotelev1">&gt;         end do
</span><br>
<span class="quotelev1">&gt;         print*,'Program completed!'
</span><br>
<span class="quotelev1">&gt;         call mpi_finalize(ierr)
</span><br>
<span class="quotelev1">&gt; end
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; subroutine 
</span><br>
<span class="quotelev1">&gt; process                                                                            
</span><br>
<span class="quotelev1">&gt; !subroutine
</span><br>
<span class="quotelev1">&gt;         use data
</span><br>
<span class="quotelev1">&gt;         implicit none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         if(irank.eq.0) then
</span><br>
<span class="quotelev1">&gt;                 write(10, *) irank, np
</span><br>
<span class="quotelev1">&gt;         end if
</span><br>
<span class="quotelev1">&gt; end subroutine process
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you please run the program and let e know the error?
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11669.php">ETHAN DENEAULT: "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<li><strong>Previous message:</strong> <a href="11667.php">Arunkumar C R: "[OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<li><strong>In reply to:</strong> <a href="11667.php">Arunkumar C R: "[OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11670.php">Eugene Loh: "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
<li><strong>Reply:</strong> <a href="11670.php">Eugene Loh: "Re: [OMPI users] Regarding Fortran 90 subroutines with MPI"</a>
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
