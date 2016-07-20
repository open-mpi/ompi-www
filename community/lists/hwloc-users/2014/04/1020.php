<?
$subject_val = "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  1 09:11:11 2014" -->
<!-- isoreceived="20140401131111" -->
<!-- sent="Tue, 01 Apr 2014 15:11:10 +0200" -->
<!-- isosent="20140401131110" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] misleading cache size on AMD Opteron 6348?" -->
<!-- id="533ABAEE.4040100_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CANmgRRB4CCP6YEb72YwYpZLBUmPTMxN3Yf6WTfjv0ure5xTXcw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-04-01 09:11:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1021.php">Yury Vorobyov: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<li><strong>Previous message:</strong> <a href="1019.php">Yury Vorobyov: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<li><strong>In reply to:</strong> <a href="1019.php">Yury Vorobyov: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1021.php">Yury Vorobyov: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Before we talk about the BIOS again, try
<br>
&nbsp;&nbsp;&nbsp;&nbsp;export HWLOC_COMPONENTS=-linux
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lstopo
<br>
This will query topology information from the processor cpuid
<br>
instruction instead of from Linux (in case your kernel is too old)
<br>
<p>Brice
<br>
<p><p><p>Le 01/04/2014 14:59, Yury Vorobyov a &#233;crit :
<br>
<span class="quotelev1">&gt; The BIOS has latest version. If I should check some BIOS information,
</span><br>
<span class="quotelev1">&gt; I have access to hardware. Tell me what variables from SMBIOS you want
</span><br>
<span class="quotelev1">&gt; to see?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 31, 2014 at 1:07 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Your BIOS reports invalid L3 cache information. On these
</span><br>
<span class="quotelev1">&gt;     processors, the L3 is shared by 6 cores, it covers 6 cores of an
</span><br>
<span class="quotelev1">&gt;     entire half-socket NUMA node. But the BIOS says that some L3 are
</span><br>
<span class="quotelev1">&gt;     shared between 4 cores, others by 6 cores. And worse it says that
</span><br>
<span class="quotelev1">&gt;     some L3 is shared by some cores from a NUMA node and others from
</span><br>
<span class="quotelev1">&gt;     another NUMA nodes, which causes the error message (and these L3
</span><br>
<span class="quotelev1">&gt;     cannot be inserted in the topology).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I see &quot;AMD Eng Sample, ZS268145TCG54_32/26/20_2/16&quot; in the
</span><br>
<span class="quotelev1">&gt;     processor type, so it might explain why your BIOS is somehow
</span><br>
<span class="quotelev1">&gt;     experimental. See if you can upgrade it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Also make sure your kernel isn't too old in case it misses L3 info
</span><br>
<span class="quotelev1">&gt;     for these processors. At least 3.3 should be OK iirc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     NUMA node sharing info:
</span><br>
<span class="quotelev1">&gt;     $ cat sys/devices/system/node/node*/cpumap
</span><br>
<span class="quotelev1">&gt;     00000000,0000003f
</span><br>
<span class="quotelev1">&gt;     00000000,00000fc0
</span><br>
<span class="quotelev1">&gt;     00000000,0003f000
</span><br>
<span class="quotelev1">&gt;     00000000,00fc0000
</span><br>
<span class="quotelev1">&gt;     $ cat sys/devices/system/cpu/cpu{?,??}/cache/index3/shared_cpu_map
</span><br>
<span class="quotelev1">&gt;     00000000,0000000f &lt;&lt; wrong, should be 003f
</span><br>
<span class="quotelev1">&gt;     00000000,0000000f &lt;&lt; wrong, should be 003f
</span><br>
<span class="quotelev1">&gt;     00000000,0000000f &lt;&lt; wrong, should be 003f
</span><br>
<span class="quotelev1">&gt;     00000000,0000000f &lt;&lt; wrong, should be 003f
</span><br>
<span class="quotelev1">&gt;     00000000,000003f0 &lt;&lt;impossible, should be 003f
</span><br>
<span class="quotelev1">&gt;     00000000,000003f0 &lt;&lt;impossible, should be 003f
</span><br>
<span class="quotelev1">&gt;     00000000,000003f0 &lt;&lt;impossible, should be 0fc0
</span><br>
<span class="quotelev1">&gt;     00000000,000003f0 &lt;&lt;impossible, should be 0fc0
</span><br>
<span class="quotelev1">&gt;     00000000,000003f0 &lt;&lt;impossible, should be 0fc0
</span><br>
<span class="quotelev1">&gt;     00000000,000003f0 &lt;&lt;impossible, should be 0fc0
</span><br>
<span class="quotelev1">&gt;     00000000,00000c00 &lt;&lt;wrong, should be 0fc0
</span><br>
<span class="quotelev1">&gt;     00000000,00000c00 &lt;&lt;wrong, should be 0fc0
</span><br>
<span class="quotelev1">&gt;     00000000,00003000 &lt;&lt;wrong, should be 003f000
</span><br>
<span class="quotelev1">&gt;     00000000,00003000 &lt;&lt;wrong, should be 003f000
</span><br>
<span class="quotelev1">&gt;     00000000,000fc000 &lt;&lt;impossible, should be 003f000
</span><br>
<span class="quotelev1">&gt;     00000000,000fc000 &lt;&lt;impossible, should be 003f000
</span><br>
<span class="quotelev1">&gt;     00000000,000fc000 &lt;&lt;impossible, should be 003f000
</span><br>
<span class="quotelev1">&gt;     00000000,000fc000 &lt;&lt;impossible, should be 003f000
</span><br>
<span class="quotelev1">&gt;     00000000,000fc000 &lt;&lt;impossible, should be 0fc0000
</span><br>
<span class="quotelev1">&gt;     00000000,000fc000 &lt;&lt;impossible, should be 0fc0000
</span><br>
<span class="quotelev1">&gt;     00000000,00f00000 &lt;&lt;wrong, should be 0fc0000
</span><br>
<span class="quotelev1">&gt;     00000000,00f00000 &lt;&lt;wrong, should be 0fc0000
</span><br>
<span class="quotelev1">&gt;     00000000,00f00000 &lt;&lt;wrong, should be 0fc0000
</span><br>
<span class="quotelev1">&gt;     00000000,00f00000 &lt;&lt;wrong, should be 0fc0000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Le 31/01/2014 03:46, Yury Vorobyov a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     I have got error about &quot;intersecting caches&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Info from hwloc in attachments.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I never got this before. I use &quot;live&quot; builds of OpenMPI directly
</span><br>
<span class="quotelev2">&gt;&gt;     from repo.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt;     hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1020/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1021.php">Yury Vorobyov: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<li><strong>Previous message:</strong> <a href="1019.php">Yury Vorobyov: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<li><strong>In reply to:</strong> <a href="1019.php">Yury Vorobyov: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1021.php">Yury Vorobyov: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
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
