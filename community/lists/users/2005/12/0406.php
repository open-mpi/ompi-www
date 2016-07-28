<?
$subject_val = "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  1 06:58:08 2005" -->
<!-- isoreceived="20051201115808" -->
<!-- sent="Thu, 01 Dec 2005 12:57:54 +0100" -->
<!-- isosent="20051201115754" -->
<!-- name="Eugen Wintersberger" -->
<!-- email="eugen.wintersberger_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin" -->
<!-- id="1133438274.18297.3.camel_at_hubbard.hlphys.uni-linz.ac.at" -->
<!-- inreplyto="5D3712F8-1B8B-4D14-9669-487A6A6D41D3_at_open-mpi.org" -->
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
<strong>From:</strong> Eugen Wintersberger (<em>eugen.wintersberger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-01 06:57:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0407.php">Eugen Wintersberger: "[O-MPI users] Compiler problems on SGI Origin"</a>
<li><strong>Previous message:</strong> <a href="0405.php">Dries Kimpe: "Re: [O-MPI users] pathscale 2.1/2.3 build problem"</a>
<li><strong>In reply to:</strong> <a href="../../2005/10/0239.php">Brian Barrett: "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brain
<br>
&nbsp;If the problems with Alphas is still present and you can fix this if 
<br>
you have access to such machines, I can give you an account one one of
<br>
my alpha stations (they are 24h online ;). Are you interested?
<br>
<p>cu 
<br>
&nbsp;Eugen
<br>
<p>On Fri, 2005-10-28 at 09:10 -0500, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Oct 27, 2005, at 8:22 AM, Eugen Wintersberger wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Second we have an SGI Origin at our university. After unpacking, the
</span><br>
<span class="quotelev2">&gt; &gt; configure command runs without any problems. But a subsequent make  
</span><br>
<span class="quotelev2">&gt; &gt; gives
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;         /bin/sh ../../libtool --mode=compile gcc   -O3 -DNDEBUG - 
</span><br>
<span class="quotelev2">&gt; &gt; fno-strict-aliasing -c -o atomic-asm.lo atomic-asm.s
</span><br>
<span class="quotelev2">&gt; &gt;  gcc -O3 -DNDEBUG -fno-strict-aliasing -c atomic-asm.s  -DPIC - 
</span><br>
<span class="quotelev2">&gt; &gt; o .libs/atomic-asm.o
</span><br>
<span class="quotelev2">&gt; &gt; as: Error: /atomic-asm.s, line 146: Not all branch-label symbols  
</span><br>
<span class="quotelev2">&gt; &gt; were defined
</span><br>
<span class="quotelev2">&gt; &gt; as: Error: /atomic-asm.s, line 41: Label referenced but not  
</span><br>
<span class="quotelev2">&gt; &gt; defined: Lretry1
</span><br>
<span class="quotelev2">&gt; &gt; *** Error code 1 (bu21)
</span><br>
<span class="quotelev2">&gt; &gt; *** Error code 1 (bu21)
</span><br>
<span class="quotelev2">&gt; &gt; *** Error code 1 (bu21)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any idea why make breaks?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This has been fixed in the subversion trunk.  It should be in the  
</span><br>
<span class="quotelev1">&gt; nightly snapshots for both the trunk and the 1.0  branch tonight.  It  
</span><br>
<span class="quotelev1">&gt; will be part of RC5 when that is rolled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the bug report!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0407.php">Eugen Wintersberger: "[O-MPI users] Compiler problems on SGI Origin"</a>
<li><strong>Previous message:</strong> <a href="0405.php">Dries Kimpe: "Re: [O-MPI users] pathscale 2.1/2.3 build problem"</a>
<li><strong>In reply to:</strong> <a href="../../2005/10/0239.php">Brian Barrett: "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
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
