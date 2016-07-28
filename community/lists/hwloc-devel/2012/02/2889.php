<?
$subject_val = "Re: [hwloc-devel] 1.3.2rc1 has escaped";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 16:45:29 2012" -->
<!-- isoreceived="20120220214529" -->
<!-- sent="Mon, 20 Feb 2012 13:45:18 -0800" -->
<!-- isosent="20120220214518" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.2rc1 has escaped" -->
<!-- id="4F42BEEE.5000308_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F42BA71.4090201_at_inria.fr" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-20 16:45:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2890.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4330)"</a>
<li><strong>Previous message:</strong> <a href="2888.php">Brice Goglin: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2888.php">Brice Goglin: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2828.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/20/2012 1:26 PM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 08/02/2012 22:33, Paul H. Hargrove a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Tests on the virtual node I have access to where that problem report
</span><br>
<span class="quotelev2">&gt;&gt; originated is still not quite right.
</span><br>
<span class="quotelev2">&gt;&gt; There is now a different assertion failing than I had seen before:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lt-linux-libnuma:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /users/phh1/OMPI/hwloc-1.3.2rc1-linux-ppc64-gcc//hwloc-1.3.2rc1/tests/linux-libnuma.c:83:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; main: Assertion `!memcmp(&amp;nodemask,&amp;numa_all_nodes,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sizeof(nodemask_t))' failed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sh: line 5: 19416 Aborted                 ${dir}$tst
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FAIL: linux-libnuma
</span><br>
<span class="quotelev2">&gt;&gt; I don't have any clue if that represents forward or backward progress.
</span><br>
<span class="quotelev1">&gt; Can you try the attached patch?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It removes nodemask checks (this deprecated interface is too
</span><br>
<span class="quotelev1">&gt; buggy/strange in libnuma, no way to assert its behavior reliably).
</span><br>
<span class="quotelev1">&gt; Then, it fixes the libnuma helpers to properly use os_index instead
</span><br>
<span class="quotelev1">&gt; logical_index (important on your machine because node ids are sparse).
</span><br>
<span class="quotelev1">&gt; And finally it makes sure the test actually checks what we want
</span><br>
<span class="quotelev1">&gt; (shouldn't matter in your case).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tested this on your topology, a 8-node machine with out-of-order
</span><br>
<span class="quotelev1">&gt; numa node ids, and some basic nodes, with a recent and a less recent
</span><br>
<span class="quotelev1">&gt; libnuma release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My current plan is to apply all these in all branches and then remove
</span><br>
<span class="quotelev1">&gt; the nodemask conversion helpers from trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I applied to the svn trunk and can now PASS &quot;make check&quot; on my odd 
<br>
virtual node.
<br>
Thanks, Brice.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2890.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4330)"</a>
<li><strong>Previous message:</strong> <a href="2888.php">Brice Goglin: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2888.php">Brice Goglin: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2828.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
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
