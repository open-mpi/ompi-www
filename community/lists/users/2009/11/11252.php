<?
$subject_val = "Re: [OMPI users] Doubt regarding MPI_GATHER";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 23 12:36:02 2009" -->
<!-- isoreceived="20091123173602" -->
<!-- sent="Mon, 23 Nov 2009 09:37:21 -0800" -->
<!-- isosent="20091123173721" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Doubt regarding MPI_GATHER" -->
<!-- id="4B0AC851.40707_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5fe0e7a40911222306l5db5048du8538f0db91ed48ce_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Doubt regarding MPI_GATHER<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-23 12:37:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11253.php">Jurgen Heymann: "[OMPI users] configuration settings for Mac OSX"</a>
<li><strong>Previous message:</strong> <a href="11251.php">Rob Latham: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>In reply to:</strong> <a href="11248.php">Arunkumar C R: "[OMPI users] Doubt regarding MPI_GATHER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11255.php">George Bosilca: "Re: [OMPI users] Doubt regarding MPI_GATHER"</a>
<li><strong>Reply:</strong> <a href="11255.php">George Bosilca: "Re: [OMPI users] Doubt regarding MPI_GATHER"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Arunkumar C R wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have written an MPI code to find acceleration (a = F/m) of a system 
</span><br>
<span class="quotelev1">&gt; of particles. I would like to know how to perform MPI_GATHER of all 
</span><br>
<span class="quotelev1">&gt; the output data at the root process and print the whole array (in the 
</span><br>
<span class="quotelev1">&gt; present case, f(1:n) ) and reuse it  for some other purpose in the 
</span><br>
<span class="quotelev1">&gt; serial part of the same code.  Please check the program given below 
</span><br>
<span class="quotelev1">&gt; and give me a solution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; program g
</span><br>
<span class="quotelev1">&gt;         use mpi
</span><br>
<span class="quotelev1">&gt;         implicit none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         real(kind(1d0)),allocatable,dimension(:)::a, f
</span><br>
<span class="quotelev1">&gt;         real(kind(1d0))::m
</span><br>
<span class="quotelev1">&gt;         integer::i, n, true, ierr, np, irank, istart, iend, var, nprocs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         nprocs= 4                !no: of processors used
</span><br>
<span class="quotelev1">&gt;         n = 100                  !no: of array elements
</span><br>
<span class="quotelev1">&gt;         m = 12.0d0               !mass of the moving particle
</span><br>
<span class="quotelev1">&gt;         var = n / nprocs         !no: of array elements per process
</span><br>
<p>What is n is not a multiple of nprocs?  E.g., on the last process, will 
<br>
you write out of bounds?
<br>
<p><span class="quotelev1">&gt;         allocate(a(n), f(n), stat=true)
</span><br>
<span class="quotelev1">&gt;         if(true.ne.0)  print*,'mem err'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         call mpi_init(ierr)
</span><br>
<span class="quotelev1">&gt;         call mpi_comm_size(mpi_comm_world,    np, ierr)
</span><br>
<p>Should you check that np==nprocs?
<br>
<p><span class="quotelev1">&gt;         call mpi_comm_rank(mpi_comm_world, irank, ierr)
</span><br>
<span class="quotelev1">&gt;         istart= irank * var + 1
</span><br>
<span class="quotelev1">&gt;         iend  = (irank + 1) * var
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         do i= istart, iend
</span><br>
<span class="quotelev1">&gt;                 f(i) = dble(i)           !the magnitude of force is 
</span><br>
<span class="quotelev1">&gt; taken  as  continuous (real) numbers !!
</span><br>
<span class="quotelev1">&gt;                 a(i) = f(i) / m
</span><br>
<span class="quotelev1">&gt;         end do
</span><br>
<p>You're allocating a full-size array on each process.  I guess that's 
<br>
okay, but it isn't necessary.
<br>
<p>Anyhow, you can try:
<br>
<p>call 
<br>
MPI_Gather(a(istart),var,MPI_REAL8,a,var,MPI_REAL8,0,MPI_COMM_WORLD,ierr)
<br>
<p>Strictly speaking, this is not correct since the send and receive 
<br>
buffers overlap.  So, the real thing to do is to declare a full array 
<br>
a(1:n) (only necessary on the root rank 0) and a &quot;local&quot; array 
<br>
a_local(istart:iend) on each process.
<br>
<p><span class="quotelev1">&gt;         if(irank.eq.0) then          !root process
</span><br>
<span class="quotelev1">&gt;             do i=1,n
</span><br>
<span class="quotelev1">&gt;                 print*,i,a(i)              !here, all the root 
</span><br>
<span class="quotelev1">&gt; elements are printed correctly and the other elements as zeroes
</span><br>
<span class="quotelev1">&gt;             end do
</span><br>
<span class="quotelev1">&gt;         end if
</span><br>
<span class="quotelev1">&gt;   call mpi_finalize(ierr)
</span><br>
<span class="quotelev1">&gt; end
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11253.php">Jurgen Heymann: "[OMPI users] configuration settings for Mac OSX"</a>
<li><strong>Previous message:</strong> <a href="11251.php">Rob Latham: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>In reply to:</strong> <a href="11248.php">Arunkumar C R: "[OMPI users] Doubt regarding MPI_GATHER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11255.php">George Bosilca: "Re: [OMPI users] Doubt regarding MPI_GATHER"</a>
<li><strong>Reply:</strong> <a href="11255.php">George Bosilca: "Re: [OMPI users] Doubt regarding MPI_GATHER"</a>
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
