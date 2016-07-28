<?
$subject_val = "Re: [OMPI users] error building openmpi-1.7.3a1r29213 on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 21 03:00:24 2013" -->
<!-- isoreceived="20130921070024" -->
<!-- sent="Sat, 21 Sep 2013 08:53:34 +0200 (CEST)" -->
<!-- isosent="20130921065334" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error building openmpi-1.7.3a1r29213 on Solaris" -->
<!-- id="201309210653.r8L6rYOx023733_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] error building openmpi-1.7.3a1r29213 on Solaris" -->
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
<strong>Subject:</strong> Re: [OMPI users] error building openmpi-1.7.3a1r29213 on Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-21 02:53:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22707.php">Siegmar Gross: "[OMPI users] Error with &quot;make check&quot; in openmpi-1.7.3a1r29220"</a>
<li><strong>Previous message:</strong> <a href="22705.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>Maybe in reply to:</strong> <a href="22685.php">Siegmar Gross: "[OMPI users] error building openmpi-1.7.3a1r29213 on Solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>thank you very much for fixing the bug so fast. I can compile
<br>
openmpi-1.7.3a1r29220 and it seems that it works. I will do some more
<br>
tests on Monday.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><span class="quotelev1">&gt; I tried to install openmpi-1.7.3a1r29213 on &quot;openSuSE Linux 12.1&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;Solaris 10 x86_64&quot;, and &quot;Solaris 10 sparc&quot; with &quot;Sun C 5.12&quot; and
</span><br>
<span class="quotelev1">&gt; gcc-4.8.0 in 64-bit mode. Unfortunately &quot;make&quot; breaks with the same
</span><br>
<span class="quotelev1">&gt; error for both compilers on both Solaris platforms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.7.3a1r29213-SunOS.sparc.64_cc 126 tail -10 \
</span><br>
<span class="quotelev1">&gt;   log.make.SunOS.sparc.64_cc
</span><br>
<span class="quotelev1">&gt; Making all in mca/if/posix_ipv4
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `.../opal/mca/if/posix_ipv4'
</span><br>
<span class="quotelev1">&gt;   CC       if_posix.lo
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.7.3a1r29213/opal/mca/if/posix_ipv4/if_posix.c&quot;,
</span><br>
<span class="quotelev1">&gt;   line 277: undefined struct/union member: ifr_mtu
</span><br>
<span class="quotelev1">&gt; cc: acomp failed for
</span><br>
<span class="quotelev1">&gt;   ../../../../../openmpi-1.7.3a1r29213/opal/mca/if/posix_ipv4/if_posix.c
</span><br>
<span class="quotelev1">&gt; make[2]: *** [if_posix.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `.../opal/mca/if/posix_ipv4'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `.../opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22707.php">Siegmar Gross: "[OMPI users] Error with &quot;make check&quot; in openmpi-1.7.3a1r29220"</a>
<li><strong>Previous message:</strong> <a href="22705.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>Maybe in reply to:</strong> <a href="22685.php">Siegmar Gross: "[OMPI users] error building openmpi-1.7.3a1r29213 on Solaris"</a>
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
