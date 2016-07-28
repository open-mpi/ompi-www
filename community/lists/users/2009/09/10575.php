<?
$subject_val = "Re: [OMPI users] Problem specifying compiler (pgi)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 11:40:39 2009" -->
<!-- isoreceived="20090904154039" -->
<!-- sent="Fri, 4 Sep 2009 09:40:33 -0600" -->
<!-- isosent="20090904154033" -->
<!-- name="Ben Mayer" -->
<!-- email="bmayer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem specifying compiler (pgi)" -->
<!-- id="AFDF30C2-1851-4D2F-A9BB-FFCA6CC08E6B_at_ucar.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AA1334D.5090707_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Ben Mayer (<em>bmayer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 11:40:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10576.php">Jeff Squyres: "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intel compilersuite 11.1 on Linux"</a>
<li><strong>Previous message:</strong> <a href="10574.php">Gus Correa: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>In reply to:</strong> <a href="10574.php">Gus Correa: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10573.php">Gus Correa: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good idea. I have tried it twice.
<br>
<p><p>On Sep 4, 2009, at 9:33 AM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ben
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My recollection is that similar problems were reported here
</span><br>
<span class="quotelev1">&gt; when there was some residual of a previous build
</span><br>
<span class="quotelev1">&gt; (perhaps with gfortran), which was not completely
</span><br>
<span class="quotelev1">&gt; cleaned up, when the current build was compiled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you tried to start fresh from the tarball using PGI only?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ben Mayer wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I have received two private emails saying to check my PATH and  
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH. The path is OK and I am using the full pathname to  
</span><br>
<span class="quotelev2">&gt;&gt; make sure I get the right exe. I also checked the LD_LIBRARY_PATH  
</span><br>
<span class="quotelev2">&gt;&gt; and that appears to be OK.
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 4, 2009, at 7:28 AM, Ben Mayer wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using PGI 9.0-1 to compile OpenMPI 1.3.3. I use the following  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command to configure OpenMPI:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure CC=pgcc CXX=pgCC FC=pgf90 F90=pgf90 --prefix=/shared/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ben/openmpi-1.3.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The PGI compilers are in the path. The make and make install  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; complete successfully. The problem that I am having is that why I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; actually run mpif90 (or any of other mpi* executables) it returns  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a message like &quot;gfortran: no input files&quot;. When I compiler when  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; those files it is calling gcc compilers. There is also some vt*  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; files (vtf90, etc) which appear to be for VampirTrace integration.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; They point to the proper pgi compilers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any idea what is going on here and how to fix it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ben Mayer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="10576.php">Jeff Squyres: "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intel compilersuite 11.1 on Linux"</a>
<li><strong>Previous message:</strong> <a href="10574.php">Gus Correa: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>In reply to:</strong> <a href="10574.php">Gus Correa: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10573.php">Gus Correa: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
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
