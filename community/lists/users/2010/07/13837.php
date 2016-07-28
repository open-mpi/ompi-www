<?
$subject_val = "Re: [OMPI users] MPI_Allreduce on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 11:48:55 2010" -->
<!-- isoreceived="20100728154855" -->
<!-- sent="Wed, 28 Jul 2010 11:48:46 -0400" -->
<!-- isosent="20100728154846" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce on local machine" -->
<!-- id="4C50515E.7090909_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1280324024.9679.1387158251_at_webmail.messagingengine.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allreduce on local machine<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 11:48:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13838.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13836.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13830.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13841.php">흆e Sandgren: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13841.php">흆e Sandgren: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Hugo, Jeff, list
<br>
<p>Hugo: I think David Zhang's suggestion was to use
<br>
MPI_REAL8 not MPI_REAL, instead of MPI_DOUBLE_PRECISION in your
<br>
MPI_Allreduce call.
<br>
<p>Still, to me it looks like OpenMPI is making double precision 4-byte 
<br>
long, which shorter than I expected it be (8 bytes),
<br>
at least when looking at the output of ompi_info --all.
<br>
<p>I always get get a size 4 for dbl prec in my x86_64 machine,
<br>
from ompi_info --all.
<br>
I confirmed this in six builds of OpenMPI 1.4.2:  gcc+gfortran,
<br>
gcc+pgf90, gcc+ifort, icc+ifort, pgcc+pgf90, and opencc+openf95.
<br>
Although the output of ompi_info never says this is actually the size
<br>
of MPI_DOUBLE_PRECISION, just of &quot;dbl prec&quot;, which is a bit ambiguous.
<br>
<p>FWIW, I include the output below.  Note that alignment for gcc+ifort
<br>
is 1, all others are 4.
<br>
<p>Jeff:  Is this correct?
<br>
<p>Thanks,
<br>
Gus Correa
<br>
<p><p>$ openmpi/1.4.2/open64-4.2.3-0/bin/ompi_info --all | grep -i dbl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl prec size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl cplx size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl prec align: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl cplx align: 4
<br>
$ openmpi/1.4.2/gnu-4.1.2/bin/ompi_info --all | grep -i dbl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl prec size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl cplx size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl prec align: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl cplx align: 4
<br>
$ openmpi/1.4.2/gnu-4.1.2-intel-10.1.017/bin/ompi_info --all | grep -i dbl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl prec size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl cplx size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl prec align: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl cplx align: 1
<br>
$ openmpi/1.4.2/gnu-4.1.2-pgi-8.0-4/bin/ompi_info --all | grep -i dbl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl prec size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl cplx size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl prec align: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl cplx align: 4
<br>
$ openmpi/1.4.2/pgi-8.0-4/bin/ompi_info --all | grep -i dbl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl prec size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl cplx size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl prec align: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl cplx align: 4
<br>
<p>Hugo Gagnon wrote:
<br>
<span class="quotelev1">&gt; And how do I know how big my data buffer is? I ran MPI_TYPE_EXTENT of
</span><br>
<span class="quotelev1">&gt; And how do I know how big my data buffer is? I ran MPI_TYPE_EXTENT of
</span><br>
<span class="quotelev1">&gt; MPI_DOUBLE_PRECISION and the result was 8. So I changed my program to:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   1 program test
</span><br>
<span class="quotelev1">&gt;   2 
</span><br>
<span class="quotelev1">&gt;   3         use mpi
</span><br>
<span class="quotelev1">&gt;   4 
</span><br>
<span class="quotelev1">&gt;   5         implicit none
</span><br>
<span class="quotelev1">&gt;   6 
</span><br>
<span class="quotelev1">&gt;   7         integer :: ierr, nproc, myrank
</span><br>
<span class="quotelev1">&gt;   8         !integer, parameter :: dp = kind(1.d0)
</span><br>
<span class="quotelev1">&gt;   9         real(kind=8) :: inside(5), outside(5)
</span><br>
<span class="quotelev1">&gt;  10 
</span><br>
<span class="quotelev1">&gt;  11         call mpi_init(ierr)
</span><br>
<span class="quotelev1">&gt;  12         call mpi_comm_size(mpi_comm_world, nproc, ierr)
</span><br>
<span class="quotelev1">&gt;  13         call mpi_comm_rank(mpi_comm_world, myrank, ierr)
</span><br>
<span class="quotelev1">&gt;  14 
</span><br>
<span class="quotelev1">&gt;  15         inside = (/ 1., 2., 3., 4., 5. /)
</span><br>
<span class="quotelev1">&gt;  16         call mpi_allreduce(inside, outside, 5, mpi_real, mpi_sum,
</span><br>
<span class="quotelev1">&gt;  mpi_comm_world, ierr)
</span><br>
<span class="quotelev1">&gt;  17 
</span><br>
<span class="quotelev1">&gt;  18         if (myrank == 0) then
</span><br>
<span class="quotelev1">&gt;  19                 print*, outside
</span><br>
<span class="quotelev1">&gt;  20         end if
</span><br>
<span class="quotelev1">&gt;  21 
</span><br>
<span class="quotelev1">&gt;  22         call mpi_finalize(ierr)
</span><br>
<span class="quotelev1">&gt;  23 
</span><br>
<span class="quotelev1">&gt;  24 end program test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but I still get a SIGSEGV fault:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; forrtl: severe (174): SIGSEGV, segmentation fault occurred
</span><br>
<span class="quotelev1">&gt; Image              PC                Routine            Line       
</span><br>
<span class="quotelev1">&gt; Source             
</span><br>
<span class="quotelev1">&gt; libmpi.0.dylib     00000001001BB4B7  Unknown               Unknown 
</span><br>
<span class="quotelev1">&gt; Unknown
</span><br>
<span class="quotelev1">&gt; libmpi_f77.0.dyli  00000001000AF046  Unknown               Unknown 
</span><br>
<span class="quotelev1">&gt; Unknown
</span><br>
<span class="quotelev1">&gt; a.out              0000000100000D87  _MAIN__                    16 
</span><br>
<span class="quotelev1">&gt; test.f90
</span><br>
<span class="quotelev1">&gt; a.out              0000000100000C9C  Unknown               Unknown 
</span><br>
<span class="quotelev1">&gt; Unknown
</span><br>
<span class="quotelev1">&gt; a.out              0000000100000C34  Unknown               Unknown 
</span><br>
<span class="quotelev1">&gt; Unknown
</span><br>
<span class="quotelev1">&gt; forrtl: severe (174): SIGSEGV, segmentation fault occurred
</span><br>
<span class="quotelev1">&gt; Image              PC                Routine            Line       
</span><br>
<span class="quotelev1">&gt; Source             
</span><br>
<span class="quotelev1">&gt; libmpi.0.dylib     00000001001BB4B7  Unknown               Unknown 
</span><br>
<span class="quotelev1">&gt; Unknown
</span><br>
<span class="quotelev1">&gt; libmpi_f77.0.dyli  00000001000AF046  Unknown               Unknown 
</span><br>
<span class="quotelev1">&gt; Unknown
</span><br>
<span class="quotelev1">&gt; a.out              0000000100000D87  _MAIN__                    16 
</span><br>
<span class="quotelev1">&gt; test.f90
</span><br>
<span class="quotelev1">&gt; a.out              0000000100000C9C  Unknown               Unknown 
</span><br>
<span class="quotelev1">&gt; Unknown
</span><br>
<span class="quotelev1">&gt; a.out              0000000100000C34  Unknown               Unknown 
</span><br>
<span class="quotelev1">&gt; Unknown
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is wrong now?
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13838.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13836.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13830.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13841.php">흆e Sandgren: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13841.php">흆e Sandgren: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
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
