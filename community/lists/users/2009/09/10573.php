<?
$subject_val = "Re: [OMPI users] Problem specifying compiler (pgi)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 11:05:48 2009" -->
<!-- isoreceived="20090904150548" -->
<!-- sent="Fri, 04 Sep 2009 11:05:39 -0400" -->
<!-- isosent="20090904150539" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem specifying compiler (pgi)" -->
<!-- id="4AA12CC3.9080105_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="66F175CD-450F-45F8-A1BE-21E7FE32CBD2_at_ucar.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem specifying compiler (pgi)<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 11:05:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10574.php">Gus Correa: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>Previous message:</strong> <a href="10572.php">Ben Mayer: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>In reply to:</strong> <a href="10570.php">Ben Mayer: "[OMPI users] Problem specifying compiler (pgi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10578.php">St Druid: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>Reply:</strong> <a href="10578.php">St Druid: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ben
<br>
<p>Is it a possible problem with your PATH?
<br>
<p>Very often Linux distributions (I suppose it is Linux, but maybe not)
<br>
have several MPI versions, plus others that may come with compilers,
<br>
etc, and their order on your path may not be what you want.
<br>
<p>What do &quot;which mpif90&quot; and &quot;which mpiexec&quot; tell?
<br>
<p>Have you tried to use full path names to mpif90
<br>
*and* to mpiexec/mpirun ?
<br>
<p>/shared/ben/openmpi-1.3.3/bin/mpif90,
<br>
/shared/ben/openmpi-1.3.3/bin/mpiexec
<br>
<p>My $0.02
<br>
<p>Gus Correa
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
<p>Ben Mayer wrote:
<br>
<span class="quotelev1">&gt; I am using PGI 9.0-1 to compile OpenMPI 1.3.3. I use the following 
</span><br>
<span class="quotelev1">&gt; command to configure OpenMPI:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure CC=pgcc CXX=pgCC FC=pgf90 F90=pgf90 
</span><br>
<span class="quotelev1">&gt; --prefix=/shared/ben/openmpi-1.3.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The PGI compilers are in the path. The make and make install complete 
</span><br>
<span class="quotelev1">&gt; successfully. The problem that I am having is that why I actually run 
</span><br>
<span class="quotelev1">&gt; mpif90 (or any of other mpi* executables) it returns a message like 
</span><br>
<span class="quotelev1">&gt; &quot;gfortran: no input files&quot;. When I compiler when those files it is 
</span><br>
<span class="quotelev1">&gt; calling gcc compilers. There is also some vt* files (vtf90, etc) which 
</span><br>
<span class="quotelev1">&gt; appear to be for VampirTrace integration. They point to the proper pgi 
</span><br>
<span class="quotelev1">&gt; compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea what is going on here and how to fix it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ben Mayer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="10574.php">Gus Correa: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>Previous message:</strong> <a href="10572.php">Ben Mayer: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>In reply to:</strong> <a href="10570.php">Ben Mayer: "[OMPI users] Problem specifying compiler (pgi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10578.php">St Druid: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>Reply:</strong> <a href="10578.php">St Druid: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
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
