<?
$subject_val = "Re: [OMPI users] MPI_Allreduce on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 27 12:06:12 2010" -->
<!-- isoreceived="20100727160612" -->
<!-- sent="Tue, 27 Jul 2010 09:06:06 -0700" -->
<!-- isosent="20100727160606" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce on local machine" -->
<!-- id="AANLkTimtr4Ak-3xSARf49sAn+Otd1Wee0ckMYSULJuu2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1280199962.9101.1386888855_at_webmail.messagingengine.com" -->
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
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-27 12:06:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13803.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13801.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13785.php">Hugo Gagnon: "[OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13807.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13807.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13814.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try mpi_real8 for the type in allreduce
<br>
<p>On 7/26/10, Hugo Gagnon &lt;sourceforge.openmpi_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I compile and run this code snippet:
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
<span class="quotelev1">&gt;   8         integer, parameter :: dp = kind(1.d0)
</span><br>
<span class="quotelev1">&gt;   9         real(kind=dp) :: inside(5), outside(5)
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
<span class="quotelev1">&gt;  15         inside = (/ 1, 2, 3, 4, 5 /)
</span><br>
<span class="quotelev1">&gt;  16         call mpi_allreduce(inside, outside, 5, mpi_double_precision,
</span><br>
<span class="quotelev1">&gt;  mpi_sum, mpi_comm_world, ierr)
</span><br>
<span class="quotelev1">&gt;  17
</span><br>
<span class="quotelev1">&gt;  18         print*, myrank, inside
</span><br>
<span class="quotelev1">&gt;  19         print*, outside
</span><br>
<span class="quotelev1">&gt;  20
</span><br>
<span class="quotelev1">&gt;  21         call mpi_finalize(ierr)
</span><br>
<span class="quotelev1">&gt;  22
</span><br>
<span class="quotelev1">&gt;  23 end program test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the following error, with say 2 processors:
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
<span class="quotelev1">&gt; a.out              0000000100000CE2  _MAIN__                    16
</span><br>
<span class="quotelev1">&gt; test.f90
</span><br>
<span class="quotelev1">&gt; a.out              0000000100000BDC  Unknown               Unknown
</span><br>
<span class="quotelev1">&gt; Unknown
</span><br>
<span class="quotelev1">&gt; a.out              0000000100000B74  Unknown               Unknown
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
<span class="quotelev1">&gt; a.out              0000000100000CE2  _MAIN__                    16
</span><br>
<span class="quotelev1">&gt; test.f90
</span><br>
<span class="quotelev1">&gt; a.out              0000000100000BDC  Unknown               Unknown
</span><br>
<span class="quotelev1">&gt; Unknown
</span><br>
<span class="quotelev1">&gt; a.out              0000000100000B74  Unknown               Unknown
</span><br>
<span class="quotelev1">&gt; Unknown
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on my iMac having compiled OpenMPI with ifort according to:
</span><br>
<span class="quotelev1">&gt; <a href="http://software.intel.com/en-us/articles/performance-tools-for-software-developers-building-open-mpi-with-the-intel-compilers/">http://software.intel.com/en-us/articles/performance-tools-for-software-developers-building-open-mpi-with-the-intel-compilers/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that the above code snippet runs fine on my school parallel cluster
</span><br>
<span class="quotelev1">&gt; where ifort+intelmpi is installed.
</span><br>
<span class="quotelev1">&gt; Is there something special about OpenMPI's MPI_Allreduce function call
</span><br>
<span class="quotelev1">&gt; that I should be aware of?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   Hugo Gagnon
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Sent from my mobile device
David Zhang
University of California, San Diego
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13803.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13801.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13785.php">Hugo Gagnon: "[OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13807.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13807.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13814.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
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
