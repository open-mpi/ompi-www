<?
$subject_val = "Re: [OMPI users] Problem specifying compiler (pgi)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 11:33:42 2009" -->
<!-- isoreceived="20090904153342" -->
<!-- sent="Fri, 04 Sep 2009 11:33:33 -0400" -->
<!-- isosent="20090904153333" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem specifying compiler (pgi)" -->
<!-- id="4AA1334D.5090707_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="23557971-6DFD-4CA9-A58F-8C08B916581C_at_ucar.edu" -->
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
<strong>Date:</strong> 2009-09-04 11:33:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10575.php">Ben Mayer: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>Previous message:</strong> <a href="10573.php">Gus Correa: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>In reply to:</strong> <a href="10572.php">Ben Mayer: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10575.php">Ben Mayer: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>Reply:</strong> <a href="10575.php">Ben Mayer: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ben
<br>
<p>My recollection is that similar problems were reported here
<br>
when there was some residual of a previous build
<br>
(perhaps with gfortran), which was not completely
<br>
cleaned up, when the current build was compiled.
<br>
<p>Have you tried to start fresh from the tarball using PGI only?
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
<p><p>Ben Mayer wrote:
<br>
<span class="quotelev1">&gt; I have received two private emails saying to check my PATH and 
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The path is OK and I am using the full pathname to make sure I get the 
</span><br>
<span class="quotelev1">&gt; right exe. I also checked the LD_LIBRARY_PATH and that appears to be OK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 4, 2009, at 7:28 AM, Ben Mayer wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am using PGI 9.0-1 to compile OpenMPI 1.3.3. I use the following 
</span><br>
<span class="quotelev2">&gt;&gt; command to configure OpenMPI:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure CC=pgcc CXX=pgCC FC=pgf90 F90=pgf90 
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/shared/ben/openmpi-1.3.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The PGI compilers are in the path. The make and make install complete 
</span><br>
<span class="quotelev2">&gt;&gt; successfully. The problem that I am having is that why I actually run 
</span><br>
<span class="quotelev2">&gt;&gt; mpif90 (or any of other mpi* executables) it returns a message like 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;gfortran: no input files&quot;. When I compiler when those files it is 
</span><br>
<span class="quotelev2">&gt;&gt; calling gcc compilers. There is also some vt* files (vtf90, etc) which 
</span><br>
<span class="quotelev2">&gt;&gt; appear to be for VampirTrace integration. They point to the proper pgi 
</span><br>
<span class="quotelev2">&gt;&gt; compilers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any idea what is going on here and how to fix it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ben Mayer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="10575.php">Ben Mayer: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>Previous message:</strong> <a href="10573.php">Gus Correa: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>In reply to:</strong> <a href="10572.php">Ben Mayer: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10575.php">Ben Mayer: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>Reply:</strong> <a href="10575.php">Ben Mayer: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
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
