<?
$subject_val = "Re: [hwloc-users] howloc with scalemp";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  7 16:51:41 2010" -->
<!-- isoreceived="20100407205141" -->
<!-- sent="Wed, 07 Apr 2010 22:51:35 +0200" -->
<!-- isosent="20100407205135" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] howloc with scalemp" -->
<!-- id="4BBCF057.3050909_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E7C3B0D-CA77-47AD-97F2-319DAB36C406_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-users] howloc with scalemp<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-07 16:51:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0050.php">Brock Palen: "Re: [hwloc-users] howloc with scalemp"</a>
<li><strong>Previous message:</strong> <a href="0048.php">Brock Palen: "Re: [hwloc-users] howloc with scalemp"</a>
<li><strong>In reply to:</strong> <a href="0048.php">Brock Palen: "Re: [hwloc-users] howloc with scalemp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0050.php">Brock Palen: "Re: [hwloc-users] howloc with scalemp"</a>
<li><strong>Reply:</strong> <a href="0050.php">Brock Palen: "Re: [hwloc-users] howloc with scalemp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brock Palen wrote:
<br>
<span class="quotelev1">&gt; [brockp_at_nyx0809 INTEL]$ lstopo -
</span><br>
<span class="quotelev1">&gt; System(79GB)
</span><br>
<span class="quotelev1">&gt;   Misc0
</span><br>
<span class="quotelev1">&gt;     Node#0(10GB) + Socket#1 + L3(8192KB)
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#0 + P#0
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#1 + P#1
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#2 + P#2
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#3 + P#3
</span><br>
<span class="quotelev1">&gt;     Node#1(10GB) + Socket#0 + L3(8192KB)
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#0 + P#4
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#1 + P#5
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#2 + P#6
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#3 + P#7
</span><br>
<span class="quotelev1">&gt;   Misc0
</span><br>
<span class="quotelev1">&gt;     Node#2(10GB) + Socket#3 + L3(8192KB)
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#0 + P#8
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#1 + P#9
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#2 + P#10
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#3 + P#11
</span><br>
<span class="quotelev1">&gt;     Node#3(10GB) + Socket#2 + L3(8192KB)
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#0 + P#12
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#1 + P#13
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#2 + P#14
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#3 + P#15
</span><br>
<span class="quotelev1">&gt;   Misc0
</span><br>
<span class="quotelev1">&gt;     Node#4(10GB) + Socket#5 + L3(8192KB)
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#0 + P#16
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#1 + P#17
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#2 + P#18
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#3 + P#19
</span><br>
<span class="quotelev1">&gt;     Node#5(10GB) + Socket#4 + L3(8192KB)
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#0 + P#20
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#1 + P#21
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#2 + P#22
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#3 + P#23
</span><br>
<span class="quotelev1">&gt;   Misc0
</span><br>
<span class="quotelev1">&gt;     Node#6(10GB) + Socket#7 + L3(8192KB)
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#0 + P#24
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#1 + P#25
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#2 + P#26
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#3 + P#27
</span><br>
<span class="quotelev1">&gt;     Node#7(10GB) + Socket#6 + L3(8192KB)
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#0 + P#28
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#1 + P#29
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#2 + P#30
</span><br>
<span class="quotelev1">&gt;       L2(256KB) + L1(32KB) + Core#3 + P#31
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know why they are all labeled Misc0  but it does see the extra
</span><br>
<span class="quotelev1">&gt; layer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want other information let me know.
</span><br>
<p>Great, there are probably some distance information in sysfs.
<br>
<p>Can you send the output of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cat /sys/devices/system/node/node*/distance
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0050.php">Brock Palen: "Re: [hwloc-users] howloc with scalemp"</a>
<li><strong>Previous message:</strong> <a href="0048.php">Brock Palen: "Re: [hwloc-users] howloc with scalemp"</a>
<li><strong>In reply to:</strong> <a href="0048.php">Brock Palen: "Re: [hwloc-users] howloc with scalemp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0050.php">Brock Palen: "Re: [hwloc-users] howloc with scalemp"</a>
<li><strong>Reply:</strong> <a href="0050.php">Brock Palen: "Re: [hwloc-users] howloc with scalemp"</a>
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
