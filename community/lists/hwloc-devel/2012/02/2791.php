<?
$subject_val = "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  2 07:47:19 2012" -->
<!-- isoreceived="20120202124719" -->
<!-- sent="Thu, 02 Feb 2012 13:47:15 +0100" -->
<!-- isosent="20120202124715" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7" -->
<!-- id="4F2A85D3.5090100_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F2A5D0A.6030608_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-02 07:47:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2792.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Previous message:</strong> <a href="2790.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>In reply to:</strong> <a href="2786.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2787.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 02/02/2012 10:53, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 01/02/2012 04:12, Paul H. Hargrove a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; The problem I reported below also exists in hwloc-1.4.1.
</span><br>
<span class="quotelev2">&gt;&gt; Additionally, I can reproduce the SEGVs with xlc which Chris Samuel
</span><br>
<span class="quotelev2">&gt;&gt; reported in
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2738.php">http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2738.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 1/31/2012 5:56 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When running &quot;make check&quot; in hwloc-1.3.1 on a Linux/POWER7 system I see:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lt-linux-libnuma:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /users/phh1/OMPI/hwloc-1.3.1-linux-ppc64-gcc//hwloc-1.3.1/tests/linux-libnuma.c:53:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; main: Assertion `hwloc_bitmap_isequal(set, set2)' failed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/sh: line 5: 21415 Aborted                 ${dir}$tst
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FAIL: linux-libnuma
</span><br>
<span class="quotelev1">&gt; I don't think I will be able to reproduce this one here unfortunately.
</span><br>
<span class="quotelev1">&gt; This machine has three NUMA nodes: #0 has many CPUs. #1 doesn't exist.
</span><br>
<span class="quotelev1">&gt; #2 and #3 have memory with CPUs. I can't emulate libnuma in such an
</span><br>
<span class="quotelev1">&gt; environment. So debugging the linux-libnuma tests is hard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you the following code just above this assert in
</span><br>
<span class="quotelev1">&gt; tests/linux-libnuma.c:53 and report what it says ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; { char *a, *b;
</span><br>
<span class="quotelev1">&gt;   hwloc_bitmap_asprintf(&amp;a, set);
</span><br>
<span class="quotelev1">&gt;   hwloc_bitmap_asprintf(&amp;b, set2);
</span><br>
<span class="quotelev1">&gt;   printf(&quot;got %s instead of %s\n&quot;, b, a);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<p>I just pushed 3 fixes to trunk. Please try again with next nightly build
<br>
and report the failures. I am not very confident about the result
<br>
because libnuma may have yet another crazy behavior when it sees your
<br>
missing NUMA node #1 (it exists but it's empty in my setup). Let's hope
<br>
I can fix anything but this test, at least.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2792.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Previous message:</strong> <a href="2790.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>In reply to:</strong> <a href="2786.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2787.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
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
