<?
$subject_val = "Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 23 14:22:23 2010" -->
<!-- isoreceived="20100123192223" -->
<!-- sent="Sat, 23 Jan 2010 20:22:17 +0100" -->
<!-- isosent="20100123192217" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?" -->
<!-- id="20100123192217.GD4738_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="54A93C83-FF28-436A-9782-7E650F7D5D4F_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-23 14:22:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0007.php">Brock Palen: "Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<li><strong>Previous message:</strong> <a href="0005.php">Brock Palen: "[hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<li><strong>In reply to:</strong> <a href="0005.php">Brock Palen: "[hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0007.php">Brock Palen: "Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<li><strong>Reply:</strong> <a href="0007.php">Brock Palen: "Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Brock Palen, le Sat 23 Jan 2010 13:51:09 -0500, a &#233;crit :
<br>
<span class="quotelev1">&gt; System(7870MB)
</span><br>
<span class="quotelev1">&gt;   Node#0(3906MB) + Socket#0
</span><br>
<span class="quotelev1">&gt;     L2(1024KB) + L1(1024KB) + Core#0 + P#0
</span><br>
<span class="quotelev1">&gt;     L2(1024KB) + L1(1024KB) + Core#1 + P#1
</span><br>
<span class="quotelev1">&gt;   Node#1(4040MB) + Socket#1
</span><br>
<span class="quotelev1">&gt;     L2(1024KB) + L1(1024KB) + Core#0 + P#2
</span><br>
<span class="quotelev1">&gt;     L2(1024KB) + L1(1024KB) + Core#1 + P#3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I am reading the AMD docs right, the L1 cache for each core should  
</span><br>
<span class="quotelev1">&gt; be smaller, and in two parts, (data and instruction cache)
</span><br>
<span class="quotelev1">&gt; Also appears that L2 should be shared, as far as I can tell, it is not  
</span><br>
<span class="quotelev1">&gt; shared in this case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am I looking at this wrong?
</span><br>
<p>No, that's the right interpretation of lstopo's output.
<br>
<p>However, the bug probably lies into your kernel's code. Could you check 
<br>
<p>/sys/devices/system/cpu/cpu*/cache/index*/size
<br>
<p>?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0007.php">Brock Palen: "Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<li><strong>Previous message:</strong> <a href="0005.php">Brock Palen: "[hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<li><strong>In reply to:</strong> <a href="0005.php">Brock Palen: "[hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0007.php">Brock Palen: "Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<li><strong>Reply:</strong> <a href="0007.php">Brock Palen: "Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
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
