<?
$subject_val = "Re: [OMPI users] OpenMPI locking up only on IB";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  3 08:38:35 2008" -->
<!-- isoreceived="20080703123835" -->
<!-- sent="Thu, 3 Jul 2008 05:38:27 -0700" -->
<!-- isosent="20080703123827" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI locking up only on IB" -->
<!-- id="37C7A3FD-692F-4C6A-A06D-7791E480D88A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="486C76F7.4030603_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI locking up only on IB<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-03 08:38:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6022.php">Brock Palen: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>Previous message:</strong> <a href="6020.php">Jeff Squyres: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
<li><strong>In reply to:</strong> <a href="6018.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6022.php">Brock Palen: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>Reply:</strong> <a href="6022.php">Brock Palen: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 2, 2008, at 11:51 PM, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev2">&gt;&gt; In trying to build 1.2.6 with the pgi compilers it makes an MPI  
</span><br>
<span class="quotelev2">&gt;&gt; library that works with tcp, sm.  But it segfaults on openib.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Both our intel compiler version and pgi version of 1.2.6 blow up  
</span><br>
<span class="quotelev2">&gt;&gt; like this when we force IB.  So this is a new issue.
</span><br>
<span class="quotelev1">&gt; I have ompi 1.2.6 installed on my machines with Intel compiler  
</span><br>
<span class="quotelev1">&gt; (version 10.1) and Pgi compiler (version 7.1-5), both of them works
</span><br>
<span class="quotelev1">&gt; with IB without any problem. BTW Mellanox provides Mellanox OFED  
</span><br>
<span class="quotelev1">&gt; binary distribution that include Intel and Pgi Open MPI 1.2.6 build.
</span><br>
<span class="quotelev1">&gt; You can download it from here <a href="http://www.mellanox.com/products/">http://www.mellanox.com/products/</a> 
</span><br>
<span class="quotelev1">&gt; ofed.php
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to shut off early completion in 1.2.3?
</span><br>
<span class="quotelev1">&gt; Sure, just add &quot;--mca |pml_ob1_use_early_completion 0&quot; to your  
</span><br>
<span class="quotelev1">&gt; command line.| ||
</span><br>
<p>Note that this flag was not added until v1.2.6; it has no effect in  
<br>
v1.2.3.
<br>
<p><span class="quotelev2">&gt;&gt; Or the the above a known issues and i should use 1.2.7-pre  or grab  
</span><br>
<span class="quotelev2">&gt;&gt; a 1.3 snap shot?
</span><br>
<span class="quotelev1">&gt; 1.2.6 should be ok.
</span><br>
<p><p>The upcoming v1.3 series works a little differently; there's no need  
<br>
to use this flag in the v1.3 series (i.e., this flag only exists in  
<br>
the v1.2 series starting with v1.2.6).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6022.php">Brock Palen: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>Previous message:</strong> <a href="6020.php">Jeff Squyres: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
<li><strong>In reply to:</strong> <a href="6018.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6022.php">Brock Palen: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>Reply:</strong> <a href="6022.php">Brock Palen: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
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
