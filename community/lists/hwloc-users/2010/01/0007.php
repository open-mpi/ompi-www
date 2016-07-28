<?
$subject_val = "Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 14:30:43 2010" -->
<!-- isoreceived="20100125193043" -->
<!-- sent="Mon, 25 Jan 2010 14:30:37 -0500" -->
<!-- isosent="20100125193037" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?" -->
<!-- id="1100EDCD-BC5D-4DC9-844F-5AD3BF248DF8_at_umich.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100123192217.GD4738_at_const.famille.thibault.fr" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-25 14:30:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0008.php">Samuel Thibault: "Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<li><strong>Previous message:</strong> <a href="0006.php">Samuel Thibault: "Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<li><strong>In reply to:</strong> <a href="0006.php">Samuel Thibault: "Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0008.php">Samuel Thibault: "Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<li><strong>Reply:</strong> <a href="0008.php">Samuel Thibault: "Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yes they all show up as 1024K
<br>
<p>cat /sys/devices/system/cpu/cpu*/cache/index*/size
<br>
1024K
<br>
1024K
<br>
1024K
<br>
1024K
<br>
1024K
<br>
1024K
<br>
1024K
<br>
1024K
<br>
1024K
<br>
1024K
<br>
1024K
<br>
1024K
<br>
<p>Thanks for the input.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Jan 23, 2010, at 2:22 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen, le Sat 23 Jan 2010 13:51:09 -0500, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; System(7870MB)
</span><br>
<span class="quotelev2">&gt;&gt;  Node#0(3906MB) + Socket#0
</span><br>
<span class="quotelev2">&gt;&gt;    L2(1024KB) + L1(1024KB) + Core#0 + P#0
</span><br>
<span class="quotelev2">&gt;&gt;    L2(1024KB) + L1(1024KB) + Core#1 + P#1
</span><br>
<span class="quotelev2">&gt;&gt;  Node#1(4040MB) + Socket#1
</span><br>
<span class="quotelev2">&gt;&gt;    L2(1024KB) + L1(1024KB) + Core#0 + P#2
</span><br>
<span class="quotelev2">&gt;&gt;    L2(1024KB) + L1(1024KB) + Core#1 + P#3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I am reading the AMD docs right, the L1 cache for each core should
</span><br>
<span class="quotelev2">&gt;&gt; be smaller, and in two parts, (data and instruction cache)
</span><br>
<span class="quotelev2">&gt;&gt; Also appears that L2 should be shared, as far as I can tell, it is  
</span><br>
<span class="quotelev2">&gt;&gt; not
</span><br>
<span class="quotelev2">&gt;&gt; shared in this case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am I looking at this wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, that's the right interpretation of lstopo's output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, the bug probably lies into your kernel's code. Could you  
</span><br>
<span class="quotelev1">&gt; check
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /sys/devices/system/cpu/cpu*/cache/index*/size
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0008.php">Samuel Thibault: "Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<li><strong>Previous message:</strong> <a href="0006.php">Samuel Thibault: "Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<li><strong>In reply to:</strong> <a href="0006.php">Samuel Thibault: "Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0008.php">Samuel Thibault: "Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<li><strong>Reply:</strong> <a href="0008.php">Samuel Thibault: "Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
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
