<?
$subject_val = "Re: [OMPI users] Open MPI 1.4.3 - Mac OS X 10.6.7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 21:09:02 2011" -->
<!-- isoreceived="20110504010902" -->
<!-- sent="Tue, 3 May 2011 21:08:56 -0400" -->
<!-- isosent="20110504010856" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.4.3 - Mac OS X 10.6.7" -->
<!-- id="163AB080-3EE5-4BCE-8333-889A08CE9FC9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3C4A5033-2A0C-4F35-B0FF-8A2E3236A107_at_tamu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.4.3 - Mac OS X 10.6.7<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-03 21:08:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16438.php">Jeff Squyres: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<li><strong>Previous message:</strong> <a href="16436.php">Jeff Squyres: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<li><strong>In reply to:</strong> <a href="16434.php">Paul Cizmas: "[OMPI users] Open MPI 1.4.3 - Mac OS X 10.6.7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 3, 2011, at 5:29 PM, Paul Cizmas wrote:
<br>
<p><span class="quotelev1">&gt; I have installed Gfortran GCC 4.4.4 and Absoft11.0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It appears that I have i686-apple-darwin10-gcc-4.2.1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi1.4.3 F77=/Applications/Absoft11.0/bin/f77
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi1.4.3GF F77=/sw/bin/gfortran
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in both cases I get the message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; It appears that your Fortran 77 compiler is unable to link against
</span><br>
<span class="quotelev1">&gt; object files created by your C compiler.  This typically indicates
</span><br>
<span class="quotelev1">&gt; one of a few possibilities:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - A conflict between CFLAGS and FFLAGS
</span><br>
<span class="quotelev1">&gt;  - A problem with your compiler installation(s)
</span><br>
<span class="quotelev1">&gt;  - Different default build options between compilers (e.g., C
</span><br>
<span class="quotelev1">&gt;    building for 32 bit and Fortran building for 64 bit)
</span><br>
<span class="quotelev1">&gt;  - Incompatible compilers
</span><br>
<p>The problem is exactly what Open MPI is telling you -- the C compiler is not compatible with the Fortran compilers that you have specified.
<br>
<p>If you have /sw/bin/gfortran, I'm guessing you have it installed via fink...?  If so, you might also have a fink-installed gcc that is compatible with that gfortran.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="16438.php">Jeff Squyres: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<li><strong>Previous message:</strong> <a href="16436.php">Jeff Squyres: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<li><strong>In reply to:</strong> <a href="16434.php">Paul Cizmas: "[OMPI users] Open MPI 1.4.3 - Mac OS X 10.6.7"</a>
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
