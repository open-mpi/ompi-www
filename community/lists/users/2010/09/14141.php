<?
$subject_val = "Re: [OMPI users] compilation error using pgf90 ver 9.0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  1 11:47:46 2010" -->
<!-- isoreceived="20100901154746" -->
<!-- sent="Wed, 01 Sep 2010 11:47:29 -0400" -->
<!-- isosent="20100901154729" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation error using pgf90 ver 9.0" -->
<!-- id="4C7E7591.4090506_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F9541B61-AB0B-47DC-B640-9BA2C78E452D_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-01 11:47:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14142.php">David Zhang: "Re: [OMPI users] MPI_Bcast() Vs paired MPI_Send() &amp; MPI_Recv()"</a>
<li><strong>Previous message:</strong> <a href="14140.php">ananda.mudar_at_[hidden]: "[OMPI users] MPI_Bcast() Vs paired MPI_Send() &amp; MPI_Recv()"</a>
<li><strong>In reply to:</strong> <a href="14138.php">Reuti: "Re: [OMPI users] compilation error using pgf90 ver 9.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Mohamed, Reuti, list
<br>
<p>That issue with the pthread flag and PGI has been there for a while.
<br>
Actually, if I remember right, it is a glitch in libtool
<br>
(probably version dependent), not in OpenMPI.
<br>
<p>The simplest workaround, pointed out by Orion Poplawski
<br>
here some time ago, is to configure OpenMPI
<br>
with the PGI switch -noswitcherror.
<br>
Worth giving it a try.
<br>
<p>My $0.02
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p>Reuti wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 01.09.2010 um 00:40 schrieb mohamed makhyoun:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear opem-mpi users:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I have got the following error while compiling openmpi using pgf90 ver 9 and CC=gcc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  How I can run make and avoiding the -pthread flag ?. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; pgf90-Error-Unknown switch: -pthread
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** [libmpi_f90.la] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Leaving directory `/home/mohamed/bin/openmpi-1.4.1/build/ompi/mpi/f90'
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/home/mohamed/bin/openmpi-1.4.1/build/ompi/mpi/f90'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [all] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/mohamed/bin/openmpi-1.4.1/build/ompi/mpi/f90'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/mohamed/bin/openmpi-1.4.1/build/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; you don't have the workstation package with pgcc/pgCC too (then it succeeds for me)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Although I think it's a bug, I tend to stay inside one and the same compile process with only one compiler vendor anyway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NB: Latest version is 1.4.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I appreciate if any one can help me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best Regard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; M. Makhyoun
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
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14142.php">David Zhang: "Re: [OMPI users] MPI_Bcast() Vs paired MPI_Send() &amp; MPI_Recv()"</a>
<li><strong>Previous message:</strong> <a href="14140.php">ananda.mudar_at_[hidden]: "[OMPI users] MPI_Bcast() Vs paired MPI_Send() &amp; MPI_Recv()"</a>
<li><strong>In reply to:</strong> <a href="14138.php">Reuti: "Re: [OMPI users] compilation error using pgf90 ver 9.0"</a>
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
