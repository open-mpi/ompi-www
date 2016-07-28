<?
$subject_val = "Re: [OMPI users] MPI_Allreduce on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 27 22:35:37 2010" -->
<!-- isoreceived="20100728023537" -->
<!-- sent="Tue, 27 Jul 2010 22:35:33 -0400" -->
<!-- isosent="20100728023533" -->
<!-- name="Hugo Gagnon" -->
<!-- email="sourceforge.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce on local machine" -->
<!-- id="1280284533.3124.1387081373_at_webmail.messagingengine.com" -->
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
<strong>From:</strong> Hugo Gagnon (<em>sourceforge.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-27 22:35:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13815.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13813.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>In reply to:</strong> <a href="13802.php">David Zhang: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13828.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13828.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I did and it runs now, but the result is wrong: outside is still 1.d0,
<br>
2.d0, 3.d0, 4.d0, 5.d0
<br>
How can I make sure to compile OpenMPI so that datatypes such as
<br>
mpi_double_precision behave as they &quot;should&quot;?
<br>
Are there flags during the OpenMPI building process or something?
<br>
Thanks,
<br>
<pre>
-- 
  Hugo Gagnon
On Tue, 27 Jul 2010 09:06 -0700, &quot;David Zhang&quot; &lt;solarbikedz_at_[hidden]&gt;
wrote:
&gt; Try mpi_real8 for the type in allreduce
&gt; 
&gt; On 7/26/10, Hugo Gagnon &lt;sourceforge.openmpi_at_[hidden]&gt; wrote:
&gt; &gt; Hello,
&gt; &gt;
&gt; &gt; When I compile and run this code snippet:
&gt; &gt;
&gt; &gt;   1 program test
&gt; &gt;   2
&gt; &gt;   3         use mpi
&gt; &gt;   4
&gt; &gt;   5         implicit none
&gt; &gt;   6
&gt; &gt;   7         integer :: ierr, nproc, myrank
&gt; &gt;   8         integer, parameter :: dp = kind(1.d0)
&gt; &gt;   9         real(kind=dp) :: inside(5), outside(5)
&gt; &gt;  10
&gt; &gt;  11         call mpi_init(ierr)
&gt; &gt;  12         call mpi_comm_size(mpi_comm_world, nproc, ierr)
&gt; &gt;  13         call mpi_comm_rank(mpi_comm_world, myrank, ierr)
&gt; &gt;  14
&gt; &gt;  15         inside = (/ 1, 2, 3, 4, 5 /)
&gt; &gt;  16         call mpi_allreduce(inside, outside, 5, mpi_double_precision,
&gt; &gt;  mpi_sum, mpi_comm_world, ierr)
&gt; &gt;  17
&gt; &gt;  18         print*, myrank, inside
&gt; &gt;  19         print*, outside
&gt; &gt;  20
&gt; &gt;  21         call mpi_finalize(ierr)
&gt; &gt;  22
&gt; &gt;  23 end program test
&gt; &gt;
&gt; &gt; I get the following error, with say 2 processors:
&gt; &gt;
&gt; &gt; forrtl: severe (174): SIGSEGV, segmentation fault occurred
&gt; &gt; Image              PC                Routine            Line
&gt; &gt; Source
&gt; &gt; libmpi.0.dylib     00000001001BB4B7  Unknown               Unknown
&gt; &gt; Unknown
&gt; &gt; libmpi_f77.0.dyli  00000001000AF046  Unknown               Unknown
&gt; &gt; Unknown
&gt; &gt; a.out              0000000100000CE2  _MAIN__                    16
&gt; &gt; test.f90
&gt; &gt; a.out              0000000100000BDC  Unknown               Unknown
&gt; &gt; Unknown
&gt; &gt; a.out              0000000100000B74  Unknown               Unknown
&gt; &gt; Unknown
&gt; &gt; forrtl: severe (174): SIGSEGV, segmentation fault occurred
&gt; &gt; Image              PC                Routine            Line
&gt; &gt; Source
&gt; &gt; libmpi.0.dylib     00000001001BB4B7  Unknown               Unknown
&gt; &gt; Unknown
&gt; &gt; libmpi_f77.0.dyli  00000001000AF046  Unknown               Unknown
&gt; &gt; Unknown
&gt; &gt; a.out              0000000100000CE2  _MAIN__                    16
&gt; &gt; test.f90
&gt; &gt; a.out              0000000100000BDC  Unknown               Unknown
&gt; &gt; Unknown
&gt; &gt; a.out              0000000100000B74  Unknown               Unknown
&gt; &gt; Unknown
&gt; &gt;
&gt; &gt; on my iMac having compiled OpenMPI with ifort according to:
&gt; &gt; <a href="http://software.intel.com/en-us/articles/performance-tools-for-software-developers-building-open-mpi-with-the-intel-compilers/">http://software.intel.com/en-us/articles/performance-tools-for-software-developers-building-open-mpi-with-the-intel-compilers/</a>
&gt; &gt;
&gt; &gt; Note that the above code snippet runs fine on my school parallel cluster
&gt; &gt; where ifort+intelmpi is installed.
&gt; &gt; Is there something special about OpenMPI's MPI_Allreduce function call
&gt; &gt; that I should be aware of?
&gt; &gt;
&gt; &gt; Thanks,
&gt; &gt; --
&gt; &gt;   Hugo Gagnon
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;
&gt; 
&gt; -- 
&gt; Sent from my mobile device
&gt; 
&gt; David Zhang
&gt; University of California, San Diego
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
-- 
  Hugo Gagnon
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13815.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13813.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>In reply to:</strong> <a href="13802.php">David Zhang: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13828.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13828.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
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
