<?
$subject_val = "Re: [OMPI users] MPI_Allreduce on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 08:56:34 2010" -->
<!-- isoreceived="20100728125634" -->
<!-- sent="Wed, 28 Jul 2010 08:57:21 -0400" -->
<!-- isosent="20100728125721" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce on local machine" -->
<!-- id="DBB98B7A-E762-4BC4-843F-1CF0040CED92_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1280284533.3124.1387081373_at_webmail.messagingengine.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 08:57:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13829.php">Yves Caniou: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>Previous message:</strong> <a href="13827.php">Edgar Gabriel: "Re: [OMPI users] Dynamic processes connection and segfault on	MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13814.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13831.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13831.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't have the intel compilers on my Mac, but I'm unable to replicate this issue on Linux with the intel compilers v11.0.
<br>
<p>Can you get a corefile to see a backtrace where it died in Open MPI's allreduce?
<br>
<p>How exactly did you configure your Open MPI, and how exactly did you compile / run your sample application?
<br>
<p><p>On Jul 27, 2010, at 10:35 PM, Hugo Gagnon wrote:
<br>
<p><span class="quotelev1">&gt; I did and it runs now, but the result is wrong: outside is still 1.d0,
</span><br>
<span class="quotelev1">&gt; 2.d0, 3.d0, 4.d0, 5.d0
</span><br>
<span class="quotelev1">&gt; How can I make sure to compile OpenMPI so that datatypes such as
</span><br>
<span class="quotelev1">&gt; mpi_double_precision behave as they &quot;should&quot;?
</span><br>
<span class="quotelev1">&gt; Are there flags during the OpenMPI building process or something?
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   Hugo Gagnon
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, 27 Jul 2010 09:06 -0700, &quot;David Zhang&quot; &lt;solarbikedz_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Try mpi_real8 for the type in allreduce
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 7/26/10, Hugo Gagnon &lt;sourceforge.openmpi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; When I compile and run this code snippet:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   1 program test
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   2
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   3         use mpi
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   4
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   5         implicit none
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   6
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   7         integer :: ierr, nproc, myrank
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   8         integer, parameter :: dp = kind(1.d0)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   9         real(kind=dp) :: inside(5), outside(5)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  10
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  11         call mpi_init(ierr)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  12         call mpi_comm_size(mpi_comm_world, nproc, ierr)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  13         call mpi_comm_rank(mpi_comm_world, myrank, ierr)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  14
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  15         inside = (/ 1, 2, 3, 4, 5 /)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  16         call mpi_allreduce(inside, outside, 5, mpi_double_precision,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  mpi_sum, mpi_comm_world, ierr)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  17
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  18         print*, myrank, inside
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  19         print*, outside
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  20
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  21         call mpi_finalize(ierr)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  22
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  23 end program test
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I get the following error, with say 2 processors:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; forrtl: severe (174): SIGSEGV, segmentation fault occurred
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Image              PC                Routine            Line
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Source
</span><br>
<span class="quotelev3">&gt; &gt; &gt; libmpi.0.dylib     00000001001BB4B7  Unknown               Unknown
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Unknown
</span><br>
<span class="quotelev3">&gt; &gt; &gt; libmpi_f77.0.dyli  00000001000AF046  Unknown               Unknown
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Unknown
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a.out              0000000100000CE2  _MAIN__                    16
</span><br>
<span class="quotelev3">&gt; &gt; &gt; test.f90
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a.out              0000000100000BDC  Unknown               Unknown
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Unknown
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a.out              0000000100000B74  Unknown               Unknown
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Unknown
</span><br>
<span class="quotelev3">&gt; &gt; &gt; forrtl: severe (174): SIGSEGV, segmentation fault occurred
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Image              PC                Routine            Line
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Source
</span><br>
<span class="quotelev3">&gt; &gt; &gt; libmpi.0.dylib     00000001001BB4B7  Unknown               Unknown
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Unknown
</span><br>
<span class="quotelev3">&gt; &gt; &gt; libmpi_f77.0.dyli  00000001000AF046  Unknown               Unknown
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Unknown
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a.out              0000000100000CE2  _MAIN__                    16
</span><br>
<span class="quotelev3">&gt; &gt; &gt; test.f90
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a.out              0000000100000BDC  Unknown               Unknown
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Unknown
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a.out              0000000100000B74  Unknown               Unknown
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Unknown
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; on my iMac having compiled OpenMPI with ifort according to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://software.intel.com/en-us/articles/performance-tools-for-software-developers-building-open-mpi-with-the-intel-compilers/">http://software.intel.com/en-us/articles/performance-tools-for-software-developers-building-open-mpi-with-the-intel-compilers/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Note that the above code snippet runs fine on my school parallel cluster
</span><br>
<span class="quotelev3">&gt; &gt; &gt; where ifort+intelmpi is installed.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Is there something special about OpenMPI's MPI_Allreduce function call
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that I should be aware of?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Hugo Gagnon
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Sent from my mobile device
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; David Zhang
</span><br>
<span class="quotelev2">&gt; &gt; University of California, San Diego
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13829.php">Yves Caniou: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>Previous message:</strong> <a href="13827.php">Edgar Gabriel: "Re: [OMPI users] Dynamic processes connection and segfault on	MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13814.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13831.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13831.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
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
