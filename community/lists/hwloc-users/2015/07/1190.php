<?
$subject_val = "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 14:23:43 2015" -->
<!-- isoreceived="20150709182343" -->
<!-- sent="Thu, 09 Jul 2015 20:23:32 +0200" -->
<!-- isosent="20150709182332" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer" -->
<!-- id="559EBC24.1090009_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="559EB9FB.9090700_at_hpc2n.umu.se" -->
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
<strong>Date:</strong> 2015-07-09 14:23:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1191.php">Riesen, Lee Ann: "[hwloc-users] Finding hwloc'c HWLOC_OBJ_MISC objects"</a>
<li><strong>Previous message:</strong> <a href="1189.php">&#197;ke Sandgren: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<li><strong>In reply to:</strong> <a href="1189.php">&#197;ke Sandgren: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1193.php">Bill Broadley: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Indeed everything is correct on the 3.2 kernel, and only the L3 sysfs
<br>
information is wrong on 3.13.
<br>
So you can report a bug to Ubuntu saying that this 3.13 kernel has a
<br>
regression compared to the 3.2, and attach the output of both cat
<br>
commands to show the difference.
<br>
<p>Brice
<br>
<p><p><p>Le 09/07/2015 20:14, &#197;ke Sandgren a &#233;crit :
<br>
<span class="quotelev1">&gt; Attached tar file with data from both systems. See Readme file for
</span><br>
<span class="quotelev1">&gt; kernel versions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 07/09/2015 07:54 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Can you send the output of this command on both nodes?
</span><br>
<span class="quotelev2">&gt;&gt; cat /sys/devices/system/cpu/cpu{?,??}/cache/index3/shared_cpu_map |
</span><br>
<span class="quotelev2">&gt;&gt; uniq -c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And send the XML output of lstopo on both nodes too (lstopo foo.xml and
</span><br>
<span class="quotelev2">&gt;&gt; send foo.xml).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I want to check that this is indeed a kernel regression.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/07/1189.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/07/1189.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1190/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1191.php">Riesen, Lee Ann: "[hwloc-users] Finding hwloc'c HWLOC_OBJ_MISC objects"</a>
<li><strong>Previous message:</strong> <a href="1189.php">&#197;ke Sandgren: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<li><strong>In reply to:</strong> <a href="1189.php">&#197;ke Sandgren: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1193.php">Bill Broadley: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
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
