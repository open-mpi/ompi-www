<?
$subject_val = "Re: [hwloc-users] howloc with scalemp";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  7 16:53:55 2010" -->
<!-- isoreceived="20100407205355" -->
<!-- sent="Wed, 7 Apr 2010 16:53:49 -0400" -->
<!-- isosent="20100407205349" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] howloc with scalemp" -->
<!-- id="00CE007A-4E9D-4933-88F4-0FE4BA4281A6_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4BBCF057.3050909_at_inria.fr" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-07 16:53:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0051.php">Samuel Thibault: "Re: [hwloc-users] howloc with scalemp"</a>
<li><strong>Previous message:</strong> <a href="0049.php">Brice Goglin: "Re: [hwloc-users] howloc with scalemp"</a>
<li><strong>In reply to:</strong> <a href="0049.php">Brice Goglin: "Re: [hwloc-users] howloc with scalemp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0052.php">Samuel Thibault: "Re: [hwloc-users] howloc with scalemp"</a>
<li><strong>Reply:</strong> <a href="0052.php">Samuel Thibault: "Re: [hwloc-users] howloc with scalemp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Apr 7, 2010, at 4:51 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt; [brockp_at_nyx0809 INTEL]$ lstopo -
</span><br>
<span class="quotelev2">&gt;&gt; System(79GB)
</span><br>
<span class="quotelev2">&gt;&gt;  Misc0
</span><br>
<span class="quotelev2">&gt;&gt;    Node#0(10GB) + Socket#1 + L3(8192KB)
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#0 + P#0
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#1 + P#1
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#2 + P#2
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#3 + P#3
</span><br>
<span class="quotelev2">&gt;&gt;    Node#1(10GB) + Socket#0 + L3(8192KB)
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#0 + P#4
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#1 + P#5
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#2 + P#6
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#3 + P#7
</span><br>
<span class="quotelev2">&gt;&gt;  Misc0
</span><br>
<span class="quotelev2">&gt;&gt;    Node#2(10GB) + Socket#3 + L3(8192KB)
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#0 + P#8
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#1 + P#9
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#2 + P#10
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#3 + P#11
</span><br>
<span class="quotelev2">&gt;&gt;    Node#3(10GB) + Socket#2 + L3(8192KB)
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#0 + P#12
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#1 + P#13
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#2 + P#14
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#3 + P#15
</span><br>
<span class="quotelev2">&gt;&gt;  Misc0
</span><br>
<span class="quotelev2">&gt;&gt;    Node#4(10GB) + Socket#5 + L3(8192KB)
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#0 + P#16
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#1 + P#17
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#2 + P#18
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#3 + P#19
</span><br>
<span class="quotelev2">&gt;&gt;    Node#5(10GB) + Socket#4 + L3(8192KB)
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#0 + P#20
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#1 + P#21
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#2 + P#22
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#3 + P#23
</span><br>
<span class="quotelev2">&gt;&gt;  Misc0
</span><br>
<span class="quotelev2">&gt;&gt;    Node#6(10GB) + Socket#7 + L3(8192KB)
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#0 + P#24
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#1 + P#25
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#2 + P#26
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#3 + P#27
</span><br>
<span class="quotelev2">&gt;&gt;    Node#7(10GB) + Socket#6 + L3(8192KB)
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#0 + P#28
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#1 + P#29
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#2 + P#30
</span><br>
<span class="quotelev2">&gt;&gt;      L2(256KB) + L1(32KB) + Core#3 + P#31
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know why they are all labeled Misc0  but it does see the  
</span><br>
<span class="quotelev2">&gt;&gt; extra
</span><br>
<span class="quotelev2">&gt;&gt; layer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you want other information let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Great, there are probably some distance information in sysfs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send the output of
</span><br>
<span class="quotelev1">&gt;    cat /sys/devices/system/node/node*/distance
</span><br>
<p>Sure:
<br>
[root_at_nyx0809 ~]# cat /sys/devices/system/node/node*/distance
<br>
10 20 254 254 254 254 254 254
<br>
20 10 254 254 254 254 254 254
<br>
254 254 10 20 254 254 254 254
<br>
254 254 20 10 254 254 254 254
<br>
254 254 254 254 10 20 254 254
<br>
254 254 254 254 20 10 254 254
<br>
254 254 254 254 254 254 10 20
<br>
254 254 254 254 254 254 20 10
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="0051.php">Samuel Thibault: "Re: [hwloc-users] howloc with scalemp"</a>
<li><strong>Previous message:</strong> <a href="0049.php">Brice Goglin: "Re: [hwloc-users] howloc with scalemp"</a>
<li><strong>In reply to:</strong> <a href="0049.php">Brice Goglin: "Re: [hwloc-users] howloc with scalemp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0052.php">Samuel Thibault: "Re: [hwloc-users] howloc with scalemp"</a>
<li><strong>Reply:</strong> <a href="0052.php">Samuel Thibault: "Re: [hwloc-users] howloc with scalemp"</a>
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
