<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan  5 13:00:08 2006" -->
<!-- isoreceived="20060105180008" -->
<!-- sent="Thu, 5 Jan 2006 12:59:56 -0500" -->
<!-- isosent="20060105175956" -->
<!-- name="rod mach" -->
<!-- email="rwm_at_[hidden]" -->
<!-- subject="[O-MPI users] Open MPI and gfortran" -->
<!-- id="BB69FA6E-4941-4285-9AA9-C03A585B7EE0_at_absoft.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.17.1136480430.27764.users_at_open-mpi.org" -->
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
<strong>From:</strong> rod mach (<em>rwm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-05 12:59:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0486.php">Jeff Squyres: "Re: [O-MPI users] Open MPI and gfortran"</a>
<li><strong>Previous message:</strong> <a href="0484.php">Joachim Worringen: "[O-MPI users] 1st Call for Papers: EuroPVM/MPI 2006"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0486.php">Jeff Squyres: "Re: [O-MPI users] Open MPI and gfortran"</a>
<li><strong>Reply:</strong> <a href="0486.php">Jeff Squyres: "Re: [O-MPI users] Open MPI and gfortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi.
<br>
<p>To my knowledge you must be using gfortran 4.1 not 4.0 to get access  
<br>
to large kind support like real(16)
<br>
<p>You can verify by trying to compile the following code with gfortran.  
<br>
This compiles under gfortran 4.1, but I don't
<br>
believe it will work under 4.0 since this support was added in 4.1.
<br>
<p>program test
<br>
<p>real(16) :: x, y
<br>
&nbsp;&nbsp;&nbsp;y = 4.0_16
<br>
&nbsp;&nbsp;&nbsp;x = sqrt(y)
<br>
&nbsp;&nbsp;&nbsp;print *, x
<br>
end
<br>
<p><p>--Rod
<br>
<p>------
<br>
Rod Mach
<br>
Absoft HPC Technical Director
<br>
www.absoft.com
<br>
<p><p><span class="quotelev1">&gt; Error: Kind -1 not supported for type REAL at (1)
</span><br>
<span class="quotelev1">&gt;  In file mpi_address_f90.f90:331
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/work/source/openmpi-1.0.1/ompi/mpi'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/work/source/openmpi-1.0.1/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used the following variables:
</span><br>
<span class="quotelev1">&gt; FC=gfortran
</span><br>
<span class="quotelev1">&gt; CC=gcc
</span><br>
<span class="quotelev1">&gt; CXX=g++
</span><br>
<span class="quotelev1">&gt; F77=gfortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any hint on how to solve this problem?  Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jyh-Shyong Ho, Ph.D.
</span><br>
<span class="quotelev1">&gt; Research Scientist
</span><br>
<span class="quotelev1">&gt; National Center for High Performance Computing
</span><br>
<span class="quotelev1">&gt; Hsinchu, Taiwan, ROC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0486.php">Jeff Squyres: "Re: [O-MPI users] Open MPI and gfortran"</a>
<li><strong>Previous message:</strong> <a href="0484.php">Joachim Worringen: "[O-MPI users] 1st Call for Papers: EuroPVM/MPI 2006"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0486.php">Jeff Squyres: "Re: [O-MPI users] Open MPI and gfortran"</a>
<li><strong>Reply:</strong> <a href="0486.php">Jeff Squyres: "Re: [O-MPI users] Open MPI and gfortran"</a>
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
