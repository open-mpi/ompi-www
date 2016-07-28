<?
$subject_val = "Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 16:22:28 2012" -->
<!-- isoreceived="20121212212228" -->
<!-- sent="Wed, 12 Dec 2012 16:22:23 -0500" -->
<!-- isosent="20121212212223" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux" -->
<!-- id="33C004FE-9B94-412F-B17E-041D283D59A2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201212121533.qBCFXBKR009466_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2012-12-12 16:22:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20933.php">Ralph Castain: "[OMPI users] Open MPI videos"</a>
<li><strong>Previous message:</strong> <a href="20931.php">Ifeanyi: "Re: [OMPI users] Live process migration"</a>
<li><strong>In reply to:</strong> <a href="20927.php">Siegmar Gross: "[OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20938.php">Siegmar Gross: "Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send the config.log for the platform where it failed?
<br>
<p>I'd like to see the specific compiler error that occurred.
<br>
<p><p>On Dec 12, 2012, at 10:33 AM, Siegmar Gross wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to build openmpi-1.6.4a1r27643 on several platforms
</span><br>
<span class="quotelev1">&gt; (Solaris Sparc, Solaris x86_64, and Linux x86_64) with Solaris
</span><br>
<span class="quotelev1">&gt; Studio C (Sun C 5.12) in 32 and 64 bit mode. &quot;configure&quot; broke
</span><br>
<span class="quotelev1">&gt; on Linux (openSuSE Linux 12.1) for the 32 bit version with the
</span><br>
<span class="quotelev1">&gt; following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 compiler supports INTEGER*16... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran 77 INTEGER*16... configure: error:
</span><br>
<span class="quotelev1">&gt;  Could not determine size of INTEGER*16
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi-1.6.4-Linux.x86_64.32_cc 144 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I could compile a 32 bit version of openmpi-1.9a1r27668 on the
</span><br>
<span class="quotelev1">&gt; machine without problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi-1.9-Linux.x86_64.32_cc 148 grep &quot;INTEGER\*16&quot; 
</span><br>
<span class="quotelev1">&gt; log.configure.Linux.x86_64.32_cc
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports INTEGER*16... no
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi-1.9-Linux.x86_64.32_cc 149 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anybody have an idea why &quot;configure&quot; broke for
</span><br>
<span class="quotelev1">&gt; openmpi-1.6.4a1r27643 and how I can fix the problem? Thank you
</span><br>
<span class="quotelev1">&gt; very much for any help in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
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
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20933.php">Ralph Castain: "[OMPI users] Open MPI videos"</a>
<li><strong>Previous message:</strong> <a href="20931.php">Ifeanyi: "Re: [OMPI users] Live process migration"</a>
<li><strong>In reply to:</strong> <a href="20927.php">Siegmar Gross: "[OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20938.php">Siegmar Gross: "Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
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
