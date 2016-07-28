<?
$subject_val = "[OMPI users] Doubt regarding MPI_GATHER";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 23 02:06:53 2009" -->
<!-- isoreceived="20091123070653" -->
<!-- sent="Mon, 23 Nov 2009 12:36:29 +0530" -->
<!-- isosent="20091123070629" -->
<!-- name="Arunkumar C R" -->
<!-- email="arunkumar.cr_at_[hidden]" -->
<!-- subject="[OMPI users] Doubt regarding MPI_GATHER" -->
<!-- id="5fe0e7a40911222306l5db5048du8538f0db91ed48ce_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Doubt regarding MPI_GATHER<br>
<strong>From:</strong> Arunkumar C R (<em>arunkumar.cr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-23 02:06:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11249.php">Christoph Rackwitz: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Previous message:</strong> <a href="11247.php">Jiaye Li: "[OMPI users] Program hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11252.php">Eugene Loh: "Re: [OMPI users] Doubt regarding MPI_GATHER"</a>
<li><strong>Reply:</strong> <a href="11252.php">Eugene Loh: "Re: [OMPI users] Doubt regarding MPI_GATHER"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have written an MPI code to find acceleration (a = F/m) of a system of
<br>
particles. I would like to know how to perform MPI_GATHER of all the output
<br>
data at the root process and print the whole array (in the present case,
<br>
f(1:n) ) and reuse it  for some other purpose in the serial part of the same
<br>
code.  Please check the program given below and give me a solution.
<br>
<p>program g
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real(kind(1d0)),allocatable,dimension(:)::a, f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real(kind(1d0))::m
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer::i, n, true, ierr, np, irank, istart, iend, var, nprocs
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nprocs= 4                !no: of processors used
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n = 100                  !no: of array elements
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m = 12.0d0               !mass of the moving particle
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var = n / nprocs         !no: of array elements per process
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocate(a(n), f(n), stat=true)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(true.ne.0)  print*,'mem err'
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_init(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_comm_size(mpi_comm_world,    np, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_comm_rank(mpi_comm_world, irank, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;istart= irank * var + 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iend  = (irank + 1) * var
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do i= istart, iend
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f(i) = dble(i)           !the magnitude of force is taken
<br>
as  continuous (real) numbers !!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a(i) = f(i) / m
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(irank.eq.0) then          !root process
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do i=1,n
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print*,i,a(i)              !here, all the root elements are
<br>
printed correctly and the other elements as zeroes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
&nbsp;&nbsp;call mpi_finalize(ierr)
<br>
end
<br>
<p><p>Thanks in Advance
<br>
arun
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11248/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11249.php">Christoph Rackwitz: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Previous message:</strong> <a href="11247.php">Jiaye Li: "[OMPI users] Program hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11252.php">Eugene Loh: "Re: [OMPI users] Doubt regarding MPI_GATHER"</a>
<li><strong>Reply:</strong> <a href="11252.php">Eugene Loh: "Re: [OMPI users] Doubt regarding MPI_GATHER"</a>
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
