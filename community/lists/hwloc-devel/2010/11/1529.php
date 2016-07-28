<?
$subject_val = "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 21 15:13:10 2010" -->
<!-- isoreceived="20101121201310" -->
<!-- sent="Sun, 21 Nov 2010 21:13:09 +0100" -->
<!-- isosent="20101121201309" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64" -->
<!-- id="4CE97D55.1070905_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CE97BEE.9040603_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-21 15:13:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1530.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1528.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1528.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1530.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1530.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 21/11/2010 21:07, Christopher Samuel a &#233;crit :
<br>
<span class="quotelev1">&gt; On 22/11/10 06:51, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here's the patch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK, so that makes lstopo do the right thing in both
</span><br>
<span class="quotelev1">&gt; cases, brilliant!
</span><br>
<p>Great! Thanks a lot for debugging this!
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But make check fails still though, I'm now seeing an error
</span><br>
<span class="quotelev1">&gt; when it gathers the topology:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Saving current system topology to a tarball...
</span><br>
<span class="quotelev1">&gt; /tmp/hwloc/hwloc-1.1rc2/tests/linux/hwloc-gather-topology.sh: line 54:
</span><br>
<span class="quotelev1">&gt; /tmp/tmp.WPnBao1790/save//proc/cpuinfo: No such file or directory
</span><br>
<span class="quotelev1">&gt; /tmp/hwloc/hwloc-1.1rc2/tests/linux/hwloc-gather-topology.sh: line 54:
</span><br>
<span class="quotelev1">&gt; /tmp/tmp.WPnBao1790/save//proc/meminfo: No such file or directory
</span><br>
<span class="quotelev1">&gt; /tmp/hwloc/hwloc-1.1rc2/tests/linux/hwloc-gather-topology.sh: line 54:
</span><br>
<span class="quotelev1">&gt; /tmp/tmp.WPnBao1790/save//proc/stat: No such file or directory
</span><br>
<p>Ok, I'll fix those.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1530.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1528.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1528.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1530.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1530.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
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
