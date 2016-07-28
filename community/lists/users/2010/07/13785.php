<?
$subject_val = "[OMPI users] MPI_Allreduce on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 26 23:06:08 2010" -->
<!-- isoreceived="20100727030608" -->
<!-- sent="Mon, 26 Jul 2010 23:06:02 -0400" -->
<!-- isosent="20100727030602" -->
<!-- name="Hugo Gagnon" -->
<!-- email="sourceforge.openmpi_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Allreduce on local machine" -->
<!-- id="1280199962.9101.1386888855_at_webmail.messagingengine.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Allreduce on local machine<br>
<strong>From:</strong> Hugo Gagnon (<em>sourceforge.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-26 23:06:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13786.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="13784.php">Brian Smith: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13792.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13792.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13802.php">David Zhang: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Maybe reply:</strong> <a href="13835.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>When I compile and run this code snippet:
<br>
<p>&nbsp;&nbsp;1 program test
<br>
&nbsp;&nbsp;2 
<br>
&nbsp;&nbsp;3         use mpi
<br>
&nbsp;&nbsp;4 
<br>
&nbsp;&nbsp;5         implicit none
<br>
&nbsp;&nbsp;6 
<br>
&nbsp;&nbsp;7         integer :: ierr, nproc, myrank
<br>
&nbsp;&nbsp;8         integer, parameter :: dp = kind(1.d0)
<br>
&nbsp;&nbsp;9         real(kind=dp) :: inside(5), outside(5)
<br>
&nbsp;10 
<br>
&nbsp;11         call mpi_init(ierr)
<br>
&nbsp;12         call mpi_comm_size(mpi_comm_world, nproc, ierr)
<br>
&nbsp;13         call mpi_comm_rank(mpi_comm_world, myrank, ierr)
<br>
&nbsp;14 
<br>
&nbsp;15         inside = (/ 1, 2, 3, 4, 5 /)
<br>
&nbsp;16         call mpi_allreduce(inside, outside, 5, mpi_double_precision,
<br>
&nbsp;mpi_sum, mpi_comm_world, ierr)
<br>
&nbsp;17 
<br>
&nbsp;18         print*, myrank, inside
<br>
&nbsp;19         print*, outside
<br>
&nbsp;20 
<br>
&nbsp;21         call mpi_finalize(ierr)
<br>
&nbsp;22 
<br>
&nbsp;23 end program test
<br>
<p>I get the following error, with say 2 processors:
<br>
<p>forrtl: severe (174): SIGSEGV, segmentation fault occurred
<br>
Image              PC                Routine            Line       
<br>
Source             
<br>
libmpi.0.dylib     00000001001BB4B7  Unknown               Unknown 
<br>
Unknown
<br>
libmpi_f77.0.dyli  00000001000AF046  Unknown               Unknown 
<br>
Unknown
<br>
a.out              0000000100000CE2  _MAIN__                    16 
<br>
test.f90
<br>
a.out              0000000100000BDC  Unknown               Unknown 
<br>
Unknown
<br>
a.out              0000000100000B74  Unknown               Unknown 
<br>
Unknown
<br>
forrtl: severe (174): SIGSEGV, segmentation fault occurred
<br>
Image              PC                Routine            Line       
<br>
Source             
<br>
libmpi.0.dylib     00000001001BB4B7  Unknown               Unknown 
<br>
Unknown
<br>
libmpi_f77.0.dyli  00000001000AF046  Unknown               Unknown 
<br>
Unknown
<br>
a.out              0000000100000CE2  _MAIN__                    16 
<br>
test.f90
<br>
a.out              0000000100000BDC  Unknown               Unknown 
<br>
Unknown
<br>
a.out              0000000100000B74  Unknown               Unknown 
<br>
Unknown
<br>
<p>on my iMac having compiled OpenMPI with ifort according to:
<br>
<a href="http://software.intel.com/en-us/articles/performance-tools-for-software-developers-building-open-mpi-with-the-intel-compilers/">http://software.intel.com/en-us/articles/performance-tools-for-software-developers-building-open-mpi-with-the-intel-compilers/</a>
<br>
<p>Note that the above code snippet runs fine on my school parallel cluster
<br>
where ifort+intelmpi is installed.
<br>
Is there something special about OpenMPI's MPI_Allreduce function call
<br>
that I should be aware of?
<br>
<p>Thanks,
<br>
<pre>
-- 
  Hugo Gagnon
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13786.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="13784.php">Brian Smith: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13792.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13792.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13802.php">David Zhang: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Maybe reply:</strong> <a href="13835.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
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
