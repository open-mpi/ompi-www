<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan  5 14:21:20 2006" -->
<!-- isoreceived="20060105192120" -->
<!-- sent="Thu, 5 Jan 2006 14:21:12 -0500" -->
<!-- isosent="20060105192112" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Open MPI and gfortran" -->
<!-- id="D23AEF0E-C212-481C-8D8B-644A04FA8E94_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BB69FA6E-4941-4285-9AA9-C03A585B7EE0_at_absoft.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-05 14:21:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0487.php">Jyh-Shyong Ho: "Re: [O-MPI users] Open MPI and gfortran"</a>
<li><strong>Previous message:</strong> <a href="0485.php">rod mach: "[O-MPI users] Open MPI and gfortran"</a>
<li><strong>In reply to:</strong> <a href="0485.php">rod mach: "[O-MPI users] Open MPI and gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0487.php">Jyh-Shyong Ho: "Re: [O-MPI users] Open MPI and gfortran"</a>
<li><strong>Reply:</strong> <a href="0487.php">Jyh-Shyong Ho: "Re: [O-MPI users] Open MPI and gfortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What concerns me, though, is that Open MPI shouldn't have tried to  
<br>
compile support for real(16) in the first place -- our configure  
<br>
script should have detected that the compiler didn't support real(16)  
<br>
(which, it at least partially did, because the constants seem to have  
<br>
a value of -1) and then the generated F90 bindings should not have  
<br>
included support for it.
<br>
<p>This is why I'd like to see the configure output (etc.) and see what  
<br>
happened.
<br>
<p><p>On Jan 5, 2006, at 12:59 PM, rod mach wrote:
<br>
<p><span class="quotelev1">&gt; Hi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To my knowledge you must be using gfortran 4.1 not 4.0 to get access
</span><br>
<span class="quotelev1">&gt; to large kind support like real(16)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can verify by trying to compile the following code with gfortran.
</span><br>
<span class="quotelev1">&gt; This compiles under gfortran 4.1, but I don't
</span><br>
<span class="quotelev1">&gt; believe it will work under 4.0 since this support was added in 4.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; program test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; real(16) :: x, y
</span><br>
<span class="quotelev1">&gt;    y = 4.0_16
</span><br>
<span class="quotelev1">&gt;    x = sqrt(y)
</span><br>
<span class="quotelev1">&gt;    print *, x
</span><br>
<span class="quotelev1">&gt; end
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Rod
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; Rod Mach
</span><br>
<span class="quotelev1">&gt; Absoft HPC Technical Director
</span><br>
<span class="quotelev1">&gt; www.absoft.com
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Error: Kind -1 not supported for type REAL at (1)
</span><br>
<span class="quotelev2">&gt;&gt;  In file mpi_address_f90.f90:331
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/work/source/openmpi-1.0.1/ompi/mpi'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/work/source/openmpi-1.0.1/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I used the following variables:
</span><br>
<span class="quotelev2">&gt;&gt; FC=gfortran
</span><br>
<span class="quotelev2">&gt;&gt; CC=gcc
</span><br>
<span class="quotelev2">&gt;&gt; CXX=g++
</span><br>
<span class="quotelev2">&gt;&gt; F77=gfortran
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any hint on how to solve this problem?  Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jyh-Shyong Ho, Ph.D.
</span><br>
<span class="quotelev2">&gt;&gt; Research Scientist
</span><br>
<span class="quotelev2">&gt;&gt; National Center for High Performance Computing
</span><br>
<span class="quotelev2">&gt;&gt; Hsinchu, Taiwan, ROC
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
--
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0487.php">Jyh-Shyong Ho: "Re: [O-MPI users] Open MPI and gfortran"</a>
<li><strong>Previous message:</strong> <a href="0485.php">rod mach: "[O-MPI users] Open MPI and gfortran"</a>
<li><strong>In reply to:</strong> <a href="0485.php">rod mach: "[O-MPI users] Open MPI and gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0487.php">Jyh-Shyong Ho: "Re: [O-MPI users] Open MPI and gfortran"</a>
<li><strong>Reply:</strong> <a href="0487.php">Jyh-Shyong Ho: "Re: [O-MPI users] Open MPI and gfortran"</a>
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
