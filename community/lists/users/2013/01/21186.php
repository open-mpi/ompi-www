<?
$subject_val = "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 22 11:45:07 2013" -->
<!-- isoreceived="20130122164507" -->
<!-- sent="Tue, 22 Jan 2013 16:45:02 +0000" -->
<!-- isosent="20130122164502" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC3E08BE4A_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAOJJ1ZpAiqJipFozxEhCmObJ091dLxTrdC_B0o9MENnFCFJe+A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-22 11:45:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21187.php">Jure Pečar: "Re: [OMPI users] help me understand these error msgs"</a>
<li><strong>Previous message:</strong> <a href="21185.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>In reply to:</strong> <a href="21163.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 19, 2013, at 1:05 PM, Lee Eric &lt;openlinuxsource_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; However, I hit another issue about fortran as configure running.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Fortran 90/95 compiler
</span><br>
<span class="quotelev1">&gt; checking for armv6-rpi-linux-gnueabi-gfortran...
</span><br>
<span class="quotelev1">&gt; armv6-rpi-linux-gnueabi-gfortran
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU Fortran compiler... yes
</span><br>
<span class="quotelev1">&gt; checking whether armv6-rpi-linux-gnueabi-gfortran accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 compiler works... links (cross compiling)
</span><br>
<span class="quotelev1">&gt; checking armv6-rpi-linux-gnueabi-gfortran external symbol
</span><br>
<span class="quotelev1">&gt; convention... single underscore
</span><br>
<span class="quotelev1">&gt; checking if C and Fortran 77 are link compatible... yes
</span><br>
<span class="quotelev1">&gt; checking to see if F77 compiler likes the C++ exception flags...
</span><br>
<span class="quotelev1">&gt; skipped (no C++ exceptions flags)
</span><br>
<span class="quotelev1">&gt; checking to see if mpif77/mpif90 compilers need additional linker flags... none
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 compiler supports CHARACTER... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran 77 CHARACTER... configure: error: Can not
</span><br>
<span class="quotelev1">&gt; determine size of CHARACTER when cross-compiling
</span><br>
<p><p>Just to follow up on this point -- cross compiling with Open MPI is a known issue.
<br>
<p>The specific problem you're running in to here is that configure is trying to compile *and run* some Fortran tests.  Which obviously doesn't work in a cross-compiling environment.
<br>
<p>You can work around this, however, either by disabling Fortran (which you did), or you can pre-populate configure's answers to the Fortran tests (so that it doesn't actually have to run anything).  However, we have never fully documented the procedure on how to do this (it's not straightforward, and definitely not for the weak of heart).  
<br>
<p>If you don't need Fortran, simply disabling Fortran is probably your best bet.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21187.php">Jure Pečar: "Re: [OMPI users] help me understand these error msgs"</a>
<li><strong>Previous message:</strong> <a href="21185.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>In reply to:</strong> <a href="21163.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
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
