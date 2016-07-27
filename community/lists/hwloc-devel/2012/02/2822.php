<?
$subject_val = "Re: [hwloc-devel] 1.3.2rc1 has escaped";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  8 16:37:47 2012" -->
<!-- isoreceived="20120208213747" -->
<!-- sent="Wed, 08 Feb 2012 22:37:39 +0100" -->
<!-- isosent="20120208213739" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.2rc1 has escaped" -->
<!-- id="4F32EB23.5080607_at_inria.fr" -->
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
<strong>Date:</strong> 2012-02-08 16:37:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2823.php">Brice Goglin: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2821.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2821.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2825.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2825.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
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
<span class="quotelev1">&gt; Maybe the sanity check is just different between 1.3 and trunk?
</span><br>
<span class="quotelev1">&gt; So, I figured I had better report it.
</span><br>
<p>Let's ignore this for 1.3.2. libnuma sucks, we're wasting way too much
<br>
time trying to make it sane. I'll look later if I find an easy way to
<br>
reproduce.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2823.php">Brice Goglin: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2821.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2821.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2825.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2825.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
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
