<?
$subject_val = "Re: [hwloc-devel] 1.3.2rc1 has escaped";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 16:26:15 2012" -->
<!-- isoreceived="20120220212615" -->
<!-- sent="Mon, 20 Feb 2012 22:26:09 +0100" -->
<!-- isosent="20120220212609" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.2rc1 has escaped" -->
<!-- id="4F42BA71.4090201_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F32EA21.5070008_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.3.2rc1 has escaped<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-20 16:26:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2889.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2887.php">Brice Goglin: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2821.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2889.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2889.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 08/02/2012 22:33, Paul H. Hargrove a &#233;crit :
<br>
<span class="quotelev1">&gt; Tests on the virtual node I have access to where that problem report
</span><br>
<span class="quotelev1">&gt; originated is still not quite right.
</span><br>
<span class="quotelev1">&gt; There is now a different assertion failing than I had seen before:
</span><br>
<span class="quotelev2">&gt;&gt; lt-linux-libnuma:
</span><br>
<span class="quotelev2">&gt;&gt; /users/phh1/OMPI/hwloc-1.3.2rc1-linux-ppc64-gcc//hwloc-1.3.2rc1/tests/linux-libnuma.c:83:
</span><br>
<span class="quotelev2">&gt;&gt; main: Assertion `!memcmp(&amp;nodemask, &amp;numa_all_nodes,
</span><br>
<span class="quotelev2">&gt;&gt; sizeof(nodemask_t))' failed.
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh: line 5: 19416 Aborted                 ${dir}$tst
</span><br>
<span class="quotelev2">&gt;&gt; FAIL: linux-libnuma
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't have any clue if that represents forward or backward progress.
</span><br>
<p>Can you try the attached patch?
<br>
<p>It removes nodemask checks (this deprecated interface is too
<br>
buggy/strange in libnuma, no way to assert its behavior reliably).
<br>
Then, it fixes the libnuma helpers to properly use os_index instead
<br>
logical_index (important on your machine because node ids are sparse).
<br>
And finally it makes sure the test actually checks what we want
<br>
(shouldn't matter in your case).
<br>
<p>I've tested this on your topology, a 8-node machine with out-of-order
<br>
numa node ids, and some basic nodes, with a recent and a less recent
<br>
libnuma release.
<br>
<p>My current plan is to apply all these in all branches and then remove
<br>
the nodemask conversion helpers from trunk.
<br>
<p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2888/fix-libnuma.patch">fix-libnuma.patch</a>
</ul>
<!-- attachment="fix-libnuma.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2889.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2887.php">Brice Goglin: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2821.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2889.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2889.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
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
