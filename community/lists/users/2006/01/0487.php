<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan  5 19:46:06 2006" -->
<!-- isoreceived="20060106004606" -->
<!-- sent="Fri, 06 Jan 2006 08:49:12 +0800" -->
<!-- isosent="20060106004912" -->
<!-- name="Jyh-Shyong Ho" -->
<!-- email="c00jsh00_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Open MPI and gfortran" -->
<!-- id="43BDBE88.5050306_at_nchc.org.tw" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D23AEF0E-C212-481C-8D8B-644A04FA8E94_at_open-mpi.org" -->
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
<strong>From:</strong> Jyh-Shyong Ho (<em>c00jsh00_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-05 19:49:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0488.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0486.php">Jeff Squyres: "Re: [O-MPI users] Open MPI and gfortran"</a>
<li><strong>In reply to:</strong> <a href="0486.php">Jeff Squyres: "Re: [O-MPI users] Open MPI and gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0492.php">Jeff Squyres: "Re: [O-MPI users] Open MPI and gfortran"</a>
<li><strong>Reply:</strong> <a href="0492.php">Jeff Squyres: "Re: [O-MPI users] Open MPI and gfortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff,
<br>
<p>Thanks for yor reply. I checked and confirmed that my gfortran is 
<br>
version 4.0.2, so the
<br>
test program failed since it does not support real(16).
<br>
The log files for configure and make are attached.
<br>
It is strange since I am able to use the same configuration and build 
<br>
OpenMPI successfully
<br>
on another SuSE10/AMD 64 computer. Something must be missing.
<br>
<p>Best regards
<br>
<p>Jyh-Shyong Ho, Ph.D.
<br>
Research Scientist
<br>
National Center for  High Performance Computing
<br>
Hsinchu, Taiwan, ROC
<br>
<p>Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;What concerns me, though, is that Open MPI shouldn't have tried to  
</span><br>
<span class="quotelev1">&gt;compile support for real(16) in the first place -- our configure  
</span><br>
<span class="quotelev1">&gt;script should have detected that the compiler didn't support real(16)  
</span><br>
<span class="quotelev1">&gt;(which, it at least partially did, because the constants seem to have  
</span><br>
<span class="quotelev1">&gt;a value of -1) and then the generated F90 bindings should not have  
</span><br>
<span class="quotelev1">&gt;included support for it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This is why I'd like to see the configure output (etc.) and see what  
</span><br>
<span class="quotelev1">&gt;happened.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Jan 5, 2006, at 12:59 PM, rod mach wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Hi.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;To my knowledge you must be using gfortran 4.1 not 4.0 to get access
</span><br>
<span class="quotelev2">&gt;&gt;to large kind support like real(16)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;You can verify by trying to compile the following code with gfortran.
</span><br>
<span class="quotelev2">&gt;&gt;This compiles under gfortran 4.1, but I don't
</span><br>
<span class="quotelev2">&gt;&gt;believe it will work under 4.0 since this support was added in 4.1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;program test
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;real(16) :: x, y
</span><br>
<span class="quotelev2">&gt;&gt;   y = 4.0_16
</span><br>
<span class="quotelev2">&gt;&gt;   x = sqrt(y)
</span><br>
<span class="quotelev2">&gt;&gt;   print *, x
</span><br>
<span class="quotelev2">&gt;&gt;end
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;--Rod
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;------
</span><br>
<span class="quotelev2">&gt;&gt;Rod Mach
</span><br>
<span class="quotelev2">&gt;&gt;Absoft HPC Technical Director
</span><br>
<span class="quotelev2">&gt;&gt;www.absoft.com
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Error: Kind -1 not supported for type REAL at (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In file mpi_address_f90.f90:331
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;make[2]: Leaving directory `/work/source/openmpi-1.0.1/ompi/mpi'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;make[1]: Leaving directory `/work/source/openmpi-1.0.1/ompi'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;I used the following variables:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;FC=gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt;CC=gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;CXX=g++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;F77=gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Any hint on how to solve this problem?  Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Jyh-Shyong Ho, Ph.D.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Research Scientist
</span><br>
<span class="quotelev3">&gt;&gt;&gt;National Center for High Performance Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Hsinchu, Taiwan, ROC
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;{+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt;{+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt;{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p>
<p>

<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0487/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0487/config.log.tgz">config.log.tgz</a>
</ul>
<!-- attachment="config.log.tgz" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0487/make.log.tgz">make.log.tgz</a>
</ul>
<!-- attachment="make.log.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0488.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0486.php">Jeff Squyres: "Re: [O-MPI users] Open MPI and gfortran"</a>
<li><strong>In reply to:</strong> <a href="0486.php">Jeff Squyres: "Re: [O-MPI users] Open MPI and gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0492.php">Jeff Squyres: "Re: [O-MPI users] Open MPI and gfortran"</a>
<li><strong>Reply:</strong> <a href="0492.php">Jeff Squyres: "Re: [O-MPI users] Open MPI and gfortran"</a>
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
