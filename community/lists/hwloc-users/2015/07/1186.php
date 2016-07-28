<?
$subject_val = "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 10:10:39 2015" -->
<!-- isoreceived="20150709141039" -->
<!-- sent="Thu, 09 Jul 2015 16:10:37 +0200" -->
<!-- isosent="20150709141037" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer" -->
<!-- id="559E80DD.6020104_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="559E765E.40108_at_hpc2n.umu.se" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-09 10:10:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1187.php">흆e Sandgren: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<li><strong>Previous message:</strong> <a href="1185.php">&#195;&#133;ke Sandgren: "[hwloc-users] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<li><strong>In reply to:</strong> <a href="1185.php">&#195;&#133;ke Sandgren: "[hwloc-users] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1187.php">흆e Sandgren: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<li><strong>Reply:</strong> <a href="1187.php">흆e Sandgren: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<li><strong>Maybe reply:</strong> <a href="1193.php">Bill Broadley: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>The 3.13 kernel reports invalid L3 cache information in sysfs. 0x3f0 is
<br>
not possible on this processor, it should be either 0x3f or 0xfc
<br>
(there's exactly one L3 per NUMA node, with the same 6 cores in them).
<br>
<p>Can you check whether the BIOS is also the same on these machines? (see
<br>
files in /sys/class/dmi/id/)
<br>
<p>If the machine and BIOS are the same, then it's a regression in Ubuntu's
<br>
3.13 kernel. However that would be surprising since these AMD processors
<br>
have been properly supported by Linux for several years already.
<br>
<p>Brice
<br>
<p><p><p>Le 09/07/2015 15:25, &#197;ke Sandgren a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On a 48 core AMD bulldozer node with Ubuntu kernel 3.13.0-57-generic i
</span><br>
<span class="quotelev1">&gt; get this with hwloc 1.11.0
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * hwloc 1.11.0 has encountered what looks like an error from the
</span><br>
<span class="quotelev1">&gt; operating system.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * L3 (cpuset 0x000003f0) intersects with NUMANode (P#0 cpuset
</span><br>
<span class="quotelev1">&gt; 0x0000003f) without inclusion!
</span><br>
<span class="quotelev1">&gt; * Error occurred in topology.c line 983
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An identical node with kernel 3.2.0-87-generic and hwloc 1.11.0 shows
</span><br>
<span class="quotelev1">&gt; no problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (The hwloc version in openmpi 1.8.6 also shows the same type of
</span><br>
<span class="quotelev1">&gt; problem but with a slightly shorter message)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached tar file from hwloc-gather-topology
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/07/1186.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/07/1186.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1186/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1187.php">흆e Sandgren: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<li><strong>Previous message:</strong> <a href="1185.php">&#195;&#133;ke Sandgren: "[hwloc-users] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<li><strong>In reply to:</strong> <a href="1185.php">&#195;&#133;ke Sandgren: "[hwloc-users] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1187.php">흆e Sandgren: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<li><strong>Reply:</strong> <a href="1187.php">흆e Sandgren: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<li><strong>Maybe reply:</strong> <a href="1193.php">Bill Broadley: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
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
