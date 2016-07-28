<?
$subject_val = "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 21 15:33:22 2010" -->
<!-- isoreceived="20101121203322" -->
<!-- sent="Sun, 21 Nov 2010 21:33:21 +0100" -->
<!-- isosent="20101121203321" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64" -->
<!-- id="4CE98211.5020300_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CE97D55.1070905_at_inria.fr" -->
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
<strong>Date:</strong> 2010-11-21 15:33:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1531.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1529.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1529.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1531.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1531.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
But make check fails still though, I'm now seeing an error
<br>
<span class="quotelev2">&gt;&gt; when it gathers the topology:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Saving current system topology to a tarball...
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/hwloc/hwloc-1.1rc2/tests/linux/hwloc-gather-topology.sh: line 54:
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/tmp.WPnBao1790/save//proc/cpuinfo: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/hwloc/hwloc-1.1rc2/tests/linux/hwloc-gather-topology.sh: line 54:
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/tmp.WPnBao1790/save//proc/meminfo: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/hwloc/hwloc-1.1rc2/tests/linux/hwloc-gather-topology.sh: line 54:
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/tmp.WPnBao1790/save//proc/stat: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Ok, I'll fix those.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>This patch (on top of the previous patch) should make
<br>
hwloc-gather-topology.sh work again (and make check too, hopefully).
<br>
<p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1530/fix_gather.patch">fix_gather.patch</a>
</ul>
<!-- attachment="fix_gather.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1531.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1529.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1529.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1531.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1531.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
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
