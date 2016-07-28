<?
$subject_val = "Re: [OMPI users] program with MPI enabled subroutine";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 22 18:38:54 2010" -->
<!-- isoreceived="20100422223854" -->
<!-- sent="Thu, 22 Apr 2010 15:40:35 -0700" -->
<!-- isosent="20100422224035" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] program with MPI enabled subroutine" -->
<!-- id="4BD0D063.8000600_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="z2g5fe0e7a41004221514g33a76286qb284236fb208aa4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] program with MPI enabled subroutine<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-22 18:40:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12742.php">Price, Brian M (N-KCI): "[OMPI users] Not getting mpi.mod file from openmpi build and install"</a>
<li><strong>Previous message:</strong> <a href="12740.php">Arunkumar C R: "[OMPI users] program with MPI enabled subroutine"</a>
<li><strong>In reply to:</strong> <a href="12740.php">Arunkumar C R: "[OMPI users] program with MPI enabled subroutine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Arunkumar C R wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A fortran  90 code having  MPI enabled subroutine is written. The 
</span><br>
<span class="quotelev1">&gt; subroutine part is given below,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; program abc
</span><br>
<span class="quotelev1">&gt;         ..................                   !usual statements
</span><br>
<span class="quotelev1">&gt;        open(20, file='sum.20', action='write')
</span><br>
<span class="quotelev1">&gt;        open(30, file='sum.40', action='write')
</span><br>
<span class="quotelev1">&gt;        n2= 100;    nstep=50
</span><br>
<span class="quotelev1">&gt;        do step=1, nstep
</span><br>
<span class="quotelev1">&gt;               n1 = step
</span><br>
<span class="quotelev1">&gt;               sum2 = (n2 - n1 + 1) * (2*n1 + (n2 - n1 )) / 
</span><br>
<span class="quotelev1">&gt; 2                     !from arithmetic progression
</span><br>
<span class="quotelev1">&gt;               call routine
</span><br>
<span class="quotelev1">&gt;               write(20, *) step, sum1, sum2
</span><br>
<span class="quotelev1">&gt;         end do
</span><br>
<span class="quotelev1">&gt; end program abc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; subroutine routine
</span><br>
<span class="quotelev1">&gt;         use 
</span><br>
<span class="quotelev1">&gt; dat                                                                                        
</span><br>
<span class="quotelev1">&gt; !module 'dat' with common variables for both program &amp; subroutine
</span><br>
<span class="quotelev1">&gt;         use mpi
</span><br>
<span class="quotelev1">&gt;         implicit none
</span><br>
<span class="quotelev1">&gt;         integer::ivar, istart, iend, sumt, i
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         if(step.eq.1) call mpi_init(ierr)
</span><br>
<span class="quotelev1">&gt;         call mpi_comm_rank(mpi_comm_world, irank, ierr)
</span><br>
<span class="quotelev1">&gt;         call mpi_comm_size(mpi_comm_world,    np, ierr)
</span><br>
<span class="quotelev1">&gt;         ivar  = (n2 - n1)  /  np + 1
</span><br>
<span class="quotelev1">&gt;         istart= min(irank  * ivar + 1,   n2 + 1)
</span><br>
<span class="quotelev1">&gt;         iend  = min(istart + ivar - 1,   n2)
</span><br>
<span class="quotelev1">&gt;         sum1  = 0
</span><br>
<span class="quotelev1">&gt;         do i=istart, iend
</span><br>
<span class="quotelev1">&gt;                 sum1= sum1 + i
</span><br>
<span class="quotelev1">&gt;         end do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         call mpi_reduce(sum1, sumt, 1, mpi_integer, mpi_sum, 0, 
</span><br>
<span class="quotelev1">&gt; mpi_comm_world, ierr)
</span><br>
<span class="quotelev1">&gt;         sum1  = sumt
</span><br>
<span class="quotelev1">&gt;         if(irank.eq.0) then
</span><br>
<span class="quotelev1">&gt;               write(30, *) step, sum1, sum2
</span><br>
<span class="quotelev1">&gt;         end if
</span><br>
<span class="quotelev1">&gt;         if(step.eq.nstep) call mpi_finalize(ierr)
</span><br>
<span class="quotelev1">&gt; end subroutine routine
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The current problem is that once the subroutine is called the data 
</span><br>
<span class="quotelev1">&gt; written to sum.30 and sum.20 are not matching.
</span><br>
<span class="quotelev1">&gt; If there's no mistake with the calculation part, how shall it be 
</span><br>
<span class="quotelev1">&gt; possible to get the same data in both the files. I could
</span><br>
<span class="quotelev1">&gt; see some of the 'sum1' values in sum.20 are not correct.
</span><br>
<p>First, can you confirm that sum.30 is correct?  You should be able to 
<br>
judge each output file independently, and not simply compare the two to 
<br>
each other.
<br>
<p>One of the problems with sum.20 is that it is being (over?)written by 
<br>
multiple processes.  When you launch the (multi-process MPI) job with 
<br>
mpirun, you start multiple copies of the executable.  So, multiple 
<br>
processes are opening the files and writing to sum.20.  You need a 
<br>
statement in the main program like the &quot;if(irank.eq.0)&quot; conditional in 
<br>
the subroutine.
<br>
<p>I don't know what errors, exactly, you're seeing.  So, I don't know if 
<br>
that addresses all of your problems.  But this is certainly one of them.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12742.php">Price, Brian M (N-KCI): "[OMPI users] Not getting mpi.mod file from openmpi build and install"</a>
<li><strong>Previous message:</strong> <a href="12740.php">Arunkumar C R: "[OMPI users] program with MPI enabled subroutine"</a>
<li><strong>In reply to:</strong> <a href="12740.php">Arunkumar C R: "[OMPI users] program with MPI enabled subroutine"</a>
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
