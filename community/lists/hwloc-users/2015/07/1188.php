<?
$subject_val = "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 13:54:20 2015" -->
<!-- isoreceived="20150709175420" -->
<!-- sent="Thu, 09 Jul 2015 19:54:17 +0200" -->
<!-- isosent="20150709175417" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer" -->
<!-- id="559EB549.7000409_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="559E8496.1030401_at_hpc2n.umu.se" -->
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
<strong>Date:</strong> 2015-07-09 13:54:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1189.php">흆e Sandgren: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<li><strong>Previous message:</strong> <a href="1187.php">&#197;ke Sandgren: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<li><strong>In reply to:</strong> <a href="1187.php">&#197;ke Sandgren: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1189.php">흆e Sandgren: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<li><strong>Reply:</strong> <a href="1189.php">흆e Sandgren: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send the output of this command on both nodes?
<br>
cat /sys/devices/system/cpu/cpu{?,??}/cache/index3/shared_cpu_map | uniq -c
<br>
<p>And send the XML output of lstopo on both nodes too (lstopo foo.xml and
<br>
send foo.xml).
<br>
<p>I want to check that this is indeed a kernel regression.
<br>
<p>Thanks
<br>
Brice
<br>
<p><p><p><p>Le 09/07/2015 16:26, &#197;ke Sandgren a &#233;crit :
<br>
<span class="quotelev1">&gt; Yes the BIOS is the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anything else i should check?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 07/09/2015 04:10 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The 3.13 kernel reports invalid L3 cache information in sysfs. 0x3f0 is
</span><br>
<span class="quotelev2">&gt;&gt; not possible on this processor, it should be either 0x3f or 0xfc
</span><br>
<span class="quotelev2">&gt;&gt; (there's exactly one L3 per NUMA node, with the same 6 cores in them).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you check whether the BIOS is also the same on these machines? (see
</span><br>
<span class="quotelev2">&gt;&gt; files in /sys/class/dmi/id/)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the machine and BIOS are the same, then it's a regression in Ubuntu's
</span><br>
<span class="quotelev2">&gt;&gt; 3.13 kernel. However that would be surprising since these AMD processors
</span><br>
<span class="quotelev2">&gt;&gt; have been properly supported by Linux for several years already.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1189.php">흆e Sandgren: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<li><strong>Previous message:</strong> <a href="1187.php">&#197;ke Sandgren: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<li><strong>In reply to:</strong> <a href="1187.php">&#197;ke Sandgren: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1189.php">흆e Sandgren: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<li><strong>Reply:</strong> <a href="1189.php">흆e Sandgren: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
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
