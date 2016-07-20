<?
$subject_val = "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 31 02:07:15 2014" -->
<!-- isoreceived="20140131070715" -->
<!-- sent="Fri, 31 Jan 2014 08:07:11 +0100" -->
<!-- isosent="20140131070711" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] misleading cache size on AMD Opteron 6348?" -->
<!-- id="52EB4B9F.5030906_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CANmgRRCqeYp-f2hTBLtqYWyCWgWRsxSoneZmm3TErD1deiALvQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] misleading cache size on AMD Opteron 6348?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-31 02:07:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/02/0975.php">Brock Palen: "[hwloc-users] Using hwloc to map GPU layout on system"</a>
<li><strong>Previous message:</strong> <a href="0973.php">Yury Vorobyov: "[hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<li><strong>In reply to:</strong> <a href="0973.php">Yury Vorobyov: "[hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/04/1019.php">Yury Vorobyov: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/04/1019.php">Yury Vorobyov: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Your BIOS reports invalid L3 cache information. On these processors, the
<br>
L3 is shared by 6 cores, it covers 6 cores of an entire half-socket NUMA
<br>
node. But the BIOS says that some L3 are shared between 4 cores, others
<br>
by 6 cores. And worse it says that some L3 is shared by some cores from
<br>
a NUMA node and others from another NUMA nodes, which causes the error
<br>
message (and these L3 cannot be inserted in the topology).
<br>
<p>I see &quot;AMD Eng Sample, ZS268145TCG54_32/26/20_2/16&quot; in the processor
<br>
type, so it might explain why your BIOS is somehow experimental. See if
<br>
you can upgrade it.
<br>
<p>Also make sure your kernel isn't too old in case it misses L3 info for
<br>
these processors. At least 3.3 should be OK iirc.
<br>
<p>NUMA node sharing info:
<br>
$ cat sys/devices/system/node/node*/cpumap
<br>
00000000,0000003f
<br>
00000000,00000fc0
<br>
00000000,0003f000
<br>
00000000,00fc0000
<br>
$ cat sys/devices/system/cpu/cpu{?,??}/cache/index3/shared_cpu_map
<br>
00000000,0000000f &lt;&lt; wrong, should be 003f
<br>
00000000,0000000f &lt;&lt; wrong, should be 003f
<br>
00000000,0000000f &lt;&lt; wrong, should be 003f
<br>
00000000,0000000f &lt;&lt; wrong, should be 003f
<br>
00000000,000003f0 &lt;&lt;impossible, should be 003f
<br>
00000000,000003f0 &lt;&lt;impossible, should be 003f
<br>
00000000,000003f0 &lt;&lt;impossible, should be 0fc0
<br>
00000000,000003f0 &lt;&lt;impossible, should be 0fc0
<br>
00000000,000003f0 &lt;&lt;impossible, should be 0fc0
<br>
00000000,000003f0 &lt;&lt;impossible, should be 0fc0
<br>
00000000,00000c00 &lt;&lt;wrong, should be 0fc0
<br>
00000000,00000c00 &lt;&lt;wrong, should be 0fc0
<br>
00000000,00003000 &lt;&lt;wrong, should be 003f000
<br>
00000000,00003000 &lt;&lt;wrong, should be 003f000
<br>
00000000,000fc000 &lt;&lt;impossible, should be 003f000
<br>
00000000,000fc000 &lt;&lt;impossible, should be 003f000
<br>
00000000,000fc000 &lt;&lt;impossible, should be 003f000
<br>
00000000,000fc000 &lt;&lt;impossible, should be 003f000
<br>
00000000,000fc000 &lt;&lt;impossible, should be 0fc0000
<br>
00000000,000fc000 &lt;&lt;impossible, should be 0fc0000
<br>
00000000,00f00000 &lt;&lt;wrong, should be 0fc0000
<br>
00000000,00f00000 &lt;&lt;wrong, should be 0fc0000
<br>
00000000,00f00000 &lt;&lt;wrong, should be 0fc0000
<br>
00000000,00f00000 &lt;&lt;wrong, should be 0fc0000
<br>
<p>Brice
<br>
<p><p><p>Le 31/01/2014 03:46, Yury Vorobyov a &#233;crit :
<br>
<span class="quotelev1">&gt; I have got error about &quot;intersecting caches&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Info from hwloc in attachments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I never got this before. I use &quot;live&quot; builds of OpenMPI directly from
</span><br>
<span class="quotelev1">&gt; repo.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0974/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/02/0975.php">Brock Palen: "[hwloc-users] Using hwloc to map GPU layout on system"</a>
<li><strong>Previous message:</strong> <a href="0973.php">Yury Vorobyov: "[hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<li><strong>In reply to:</strong> <a href="0973.php">Yury Vorobyov: "[hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/04/1019.php">Yury Vorobyov: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/04/1019.php">Yury Vorobyov: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
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
