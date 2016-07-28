<?
$subject_val = "Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 08:40:10 2012" -->
<!-- isoreceived="20121218134010" -->
<!-- sent="Tue, 18 Dec 2012 08:40:01 -0500" -->
<!-- isosent="20121218134001" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux" -->
<!-- id="9DE1203B-A8AE-4AC8-BA54-570FA927E546_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201212130739.qBD7dRu4011021_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-18 08:40:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20988.php">JR Cary: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Previous message:</strong> <a href="20986.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>In reply to:</strong> <a href="20938.php">Siegmar Gross: "Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 13, 2012, at 2:39 AM, Siegmar Gross wrote:
<br>
<p><span class="quotelev1">&gt; I found the error with your hint. For Open MPI 1.6.x I must also
</span><br>
<span class="quotelev1">&gt; specify &quot;F77&quot; and &quot;FFLAGS&quot; for the Fortran 77 compiler. Otherwise
</span><br>
<span class="quotelev1">&gt; it uses &quot;gfortran&quot; from the GNU package. &quot;gfortran&quot; worked for the
</span><br>
<span class="quotelev1">&gt; 64 bit version and didn't work for the 32 bit version. (that's the
</span><br>
<span class="quotelev1">&gt; reason why I got only an error for the 32 bit version).
</span><br>
<p>Yep, sorry about that -- we revamped the Fortran support in v1.7 and beyond such that the following are used with configure:
<br>
<p>v1.6.x and earlier: F77, FFLAGS, FC, FCFLAGS
<br>
v1.7.0 and later: FC, FCFLAGS
<br>
<p>I.e., we consolidated down to one Fortran compiler for v1.7.0 and later (and similarly deprecated mpif77 and mpif90 -- mpifort is now preferred in v1.7.0 and layer).
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
<li><strong>Next message:</strong> <a href="20988.php">JR Cary: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Previous message:</strong> <a href="20986.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>In reply to:</strong> <a href="20938.php">Siegmar Gross: "Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
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
