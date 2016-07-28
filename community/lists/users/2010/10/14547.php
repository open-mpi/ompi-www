<?
$subject_val = "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 22 08:30:44 2010" -->
<!-- isoreceived="20101022123044" -->
<!-- sent="Fri, 22 Oct 2010 08:30:34 -0400" -->
<!-- isosent="20101022123034" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults" -->
<!-- id="F25D60A5-B11B-4FDA-8E4D-773C0E194385_at_myri.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CBF9AD0.6000406_at_aem.umn.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-22 08:30:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14548.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Previous message:</strong> <a href="14546.php">Vasiliy G Tolstov: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>In reply to:</strong> <a href="14518.php">Raymond Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14533.php">Raymond Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 20, 2010, at 9:43 PM, Raymond Muno wrote:
<br>
<p><span class="quotelev1">&gt; On 10/20/2010 8:30 PM, Scott Atchley wrote
</span><br>
<span class="quotelev2">&gt;&gt; Are you building OMPI with support for both MX and IB? If not and you only want MX support, try configuring OMPI using --disable-memory-manager (check configure for the exact option).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have fixed this bug in the most recent 1.4.x and 1.5.x releases.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Scott
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmmm, not sure which configure option you want me to try.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ./configure --help | grep memory
</span><br>
<span class="quotelev1">&gt;  --enable-mem-debug      enable memory debugging (debugging only) (default:
</span><br>
<span class="quotelev1">&gt;  --enable-mem-profile    enable memory profiling (debugging only) (default:
</span><br>
<span class="quotelev1">&gt;  --enable-memchecker     Enable memory and buffer checks. Note that disabling
</span><br>
<span class="quotelev1">&gt;  --with-memory-manager=TYPE
</span><br>
<span class="quotelev1">&gt;                          Use TYPE for intercepting memory management calls to
</span><br>
<span class="quotelev1">&gt;                          control memory pinning.
</span><br>
<p>Use --without-memory-manager
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14548.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Previous message:</strong> <a href="14546.php">Vasiliy G Tolstov: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>In reply to:</strong> <a href="14518.php">Raymond Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14533.php">Raymond Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
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
