<?
$subject_val = "Re: [OMPI users] MPI_Allreduce on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 27 16:19:46 2010" -->
<!-- isoreceived="20100727201946" -->
<!-- sent="Tue, 27 Jul 2010 16:19:36 -0400" -->
<!-- isosent="20100727201936" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce on local machine" -->
<!-- id="4C4F3F58.2040300_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimtr4Ak-3xSARf49sAn+Otd1Wee0ckMYSULJuu2_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-07-27 16:19:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13808.php">Terry Dontje: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="13806.php">Brian Smith: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="13802.php">David Zhang: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13817.php">Terry Frankcombe: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13817.php">Terry Frankcombe: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13825.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Hugo, David, Jeff, Terry, Anton, list
<br>
<p>I suppose maybe we're guessing that somehow on Hugo's iMac 
<br>
MPI_DOUBLE_PRECISION may not have as many bytes as dp = kind(1.d0),
<br>
hence the segmentation fault on MPI_Allreduce.
<br>
<p>Question:
<br>
<p>Is there a simple way to check the number of bytes associated to each
<br>
MPI basic type of OpenMPI on a specific machine (or machine+compiler)?
<br>
<p>Something that would come out easily, say, from ompi_info?
<br>
<p>The information I get is C-centered:  :(
<br>
<p>$ ompi_info --all |grep -i double
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C double size: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C double align: 8
<br>
<p>If not possible yet, please consider it a feature request ...  :)
<br>
(Or is this perhaps against the &quot;opacity&quot; in the MPI standard?)
<br>
<p>I poked around on the OpenMPI include directory to no avail.
<br>
MPI_DOUBLE_PRECISION is defined as a constant (it is 17 here)
<br>
which doesn't seem to be related to the actual size in bytes.
<br>
<p>I found some stuff on my OpenMPI config.log, though:
<br>
<p>$ grep -i double_precision config.log
<br>
... (tons of lines)
<br>
ompi_cv_f77_alignment_DOUBLE_PRECISION=8
<br>
ompi_cv_f77_have_DOUBLE_PRECISION=yes
<br>
ompi_cv_f77_sizeof_DOUBLE_PRECISION=8
<br>
ompi_cv_f90_have_DOUBLE_PRECISION=yes
<br>
ompi_cv_f90_sizeof_DOUBLE_PRECISION=8
<br>
ompi_cv_find_type_DOUBLE_PRECISION=double
<br>
OMPI_SIZEOF_F90_DOUBLE_PRECISION='8'
<br>
#define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
#define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
#define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
#define ompi_fortran_double_precision_t double
<br>
#define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
<p>Thank you,
<br>
Gus Correa
<br>
<p><p><p>David Zhang wrote:
<br>
<span class="quotelev1">&gt; Try mpi_real8 for the type in allreduce
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 7/26/10, Hugo Gagnon &lt;sourceforge.openmpi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I compile and run this code snippet:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   1 program test
</span><br>
<span class="quotelev2">&gt;&gt;   2
</span><br>
<span class="quotelev2">&gt;&gt;   3         use mpi
</span><br>
<span class="quotelev2">&gt;&gt;   4
</span><br>
<span class="quotelev2">&gt;&gt;   5         implicit none
</span><br>
<span class="quotelev2">&gt;&gt;   6
</span><br>
<span class="quotelev2">&gt;&gt;   7         integer :: ierr, nproc, myrank
</span><br>
<span class="quotelev2">&gt;&gt;   8         integer, parameter :: dp = kind(1.d0)
</span><br>
<span class="quotelev2">&gt;&gt;   9         real(kind=dp) :: inside(5), outside(5)
</span><br>
<span class="quotelev2">&gt;&gt;  10
</span><br>
<span class="quotelev2">&gt;&gt;  11         call mpi_init(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;  12         call mpi_comm_size(mpi_comm_world, nproc, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;  13         call mpi_comm_rank(mpi_comm_world, myrank, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;  14
</span><br>
<span class="quotelev2">&gt;&gt;  15         inside = (/ 1, 2, 3, 4, 5 /)
</span><br>
<span class="quotelev2">&gt;&gt;  16         call mpi_allreduce(inside, outside, 5, mpi_double_precision,
</span><br>
<span class="quotelev2">&gt;&gt;  mpi_sum, mpi_comm_world, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;  17
</span><br>
<span class="quotelev2">&gt;&gt;  18         print*, myrank, inside
</span><br>
<span class="quotelev2">&gt;&gt;  19         print*, outside
</span><br>
<span class="quotelev2">&gt;&gt;  20
</span><br>
<span class="quotelev2">&gt;&gt;  21         call mpi_finalize(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;  22
</span><br>
<span class="quotelev2">&gt;&gt;  23 end program test
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get the following error, with say 2 processors:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; forrtl: severe (174): SIGSEGV, segmentation fault occurred
</span><br>
<span class="quotelev2">&gt;&gt; Image              PC                Routine            Line
</span><br>
<span class="quotelev2">&gt;&gt; Source
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.0.dylib     00000001001BB4B7  Unknown               Unknown
</span><br>
<span class="quotelev2">&gt;&gt; Unknown
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_f77.0.dyli  00000001000AF046  Unknown               Unknown
</span><br>
<span class="quotelev2">&gt;&gt; Unknown
</span><br>
<span class="quotelev2">&gt;&gt; a.out              0000000100000CE2  _MAIN__                    16
</span><br>
<span class="quotelev2">&gt;&gt; test.f90
</span><br>
<span class="quotelev2">&gt;&gt; a.out              0000000100000BDC  Unknown               Unknown
</span><br>
<span class="quotelev2">&gt;&gt; Unknown
</span><br>
<span class="quotelev2">&gt;&gt; a.out              0000000100000B74  Unknown               Unknown
</span><br>
<span class="quotelev2">&gt;&gt; Unknown
</span><br>
<span class="quotelev2">&gt;&gt; forrtl: severe (174): SIGSEGV, segmentation fault occurred
</span><br>
<span class="quotelev2">&gt;&gt; Image              PC                Routine            Line
</span><br>
<span class="quotelev2">&gt;&gt; Source
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.0.dylib     00000001001BB4B7  Unknown               Unknown
</span><br>
<span class="quotelev2">&gt;&gt; Unknown
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_f77.0.dyli  00000001000AF046  Unknown               Unknown
</span><br>
<span class="quotelev2">&gt;&gt; Unknown
</span><br>
<span class="quotelev2">&gt;&gt; a.out              0000000100000CE2  _MAIN__                    16
</span><br>
<span class="quotelev2">&gt;&gt; test.f90
</span><br>
<span class="quotelev2">&gt;&gt; a.out              0000000100000BDC  Unknown               Unknown
</span><br>
<span class="quotelev2">&gt;&gt; Unknown
</span><br>
<span class="quotelev2">&gt;&gt; a.out              0000000100000B74  Unknown               Unknown
</span><br>
<span class="quotelev2">&gt;&gt; Unknown
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; on my iMac having compiled OpenMPI with ifort according to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://software.intel.com/en-us/articles/performance-tools-for-software-developers-building-open-mpi-with-the-intel-compilers/">http://software.intel.com/en-us/articles/performance-tools-for-software-developers-building-open-mpi-with-the-intel-compilers/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that the above code snippet runs fine on my school parallel cluster
</span><br>
<span class="quotelev2">&gt;&gt; where ifort+intelmpi is installed.
</span><br>
<span class="quotelev2">&gt;&gt; Is there something special about OpenMPI's MPI_Allreduce function call
</span><br>
<span class="quotelev2">&gt;&gt; that I should be aware of?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;   Hugo Gagnon
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13808.php">Terry Dontje: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="13806.php">Brian Smith: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="13802.php">David Zhang: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13817.php">Terry Frankcombe: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13817.php">Terry Frankcombe: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13825.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
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
