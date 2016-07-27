<?
$subject_val = "Re: [hwloc-devel] 1.3.2rc1 has escaped";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 09:21:13 2012" -->
<!-- isoreceived="20120220142113" -->
<!-- sent="Mon, 20 Feb 2012 15:21:08 +0100" -->
<!-- isosent="20120220142108" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.2rc1 has escaped" -->
<!-- id="4F4256D4.8050801_at_inria.fr" -->
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
<strong>Date:</strong> 2012-02-20 09:21:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2888.php">Brice Goglin: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2886.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.3a1r4325)"</a>
<li><strong>In reply to:</strong> <a href="2821.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2888.php">Brice Goglin: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 08/02/2012 22:33, Paul H. Hargrove a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/8/2012 8:58 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; * Fix conversion from/to Linux libnuma when some NUMA nodes have no
</span><br>
<span class="quotelev2">&gt;&gt; memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<p>For the record, I am debugging this offline and of course this is again
<br>
libnuma's fault. The old nodemask API seems to be broken on machines
<br>
with sparse node ids. And the actual behavior in such cases changed in
<br>
2.0.6 (Paul has 2.0.3, I have 2.0.8). I think I will disable most
<br>
nodemask tests when node ids are sparse.
<br>
<p>I am also complaining on the numa devel list about their crappy
<br>
interface and doc... If they confirm that the nodemask API is totally
<br>
deprecated, I'll mark our nodemask helpers as deprecated and we'll
<br>
remove them as soon as possible. Way too much time wasted already.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2888.php">Brice Goglin: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2886.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.3a1r4325)"</a>
<li><strong>In reply to:</strong> <a href="2821.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2888.php">Brice Goglin: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
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
