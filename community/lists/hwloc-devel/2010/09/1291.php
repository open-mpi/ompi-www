<?
$subject_val = "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 16 01:41:20 2010" -->
<!-- isoreceived="20100916054120" -->
<!-- sent="Thu, 16 Sep 2010 07:41:21 +0200" -->
<!-- isosent="20100916054121" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch" -->
<!-- id="4C91AE01.2030902_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C9198A0.90309_at_au1.ibm.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-16 01:41:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1292.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Previous message:</strong> <a href="1290.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>In reply to:</strong> <a href="1289.php">Alexey Kardashevskiy: "[hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1293.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1293.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 16/09/2010 06:10, Alexey Kardashevskiy a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are 2 problems with the current HWLOC code. The questions are at
</span><br>
<span class="quotelev1">&gt; the bottom.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Old kernels (RHEL5.*) do expose some numa nodes via sysfs but there
</span><br>
<span class="quotelev1">&gt; is no information regarting cache (L1/L2/L3) and CPU threads. RHEL6
</span><br>
<span class="quotelev1">&gt; does that. The proposed patch parses PowerPC's /proc/device-tree and
</span><br>
<span class="quotelev1">&gt; add necessary information into the topology.
</span><br>
<p>Great !
<br>
<p><span class="quotelev1">&gt; 2. The HWLOC expects numa nodes to be numbered consecutively, like
</span><br>
<span class="quotelev1">&gt; 1-2-3-4-5.... However this is not necessary true for PowerPC with
</span><br>
<span class="quotelev1">&gt; LPARs or on systems with numa hotswap (do they exist? don't know).
</span><br>
<p>Yes, I've never implemented any sparse-aware code since I haven't ever
<br>
seen sparse-numbered system :)
<br>
<p><span class="quotelev1">&gt; This was before the patch:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt; os node 0 has cpuset 0xffffffff
</span><br>
<span class="quotelev1">&gt; os node 1 has cpuset 0xffffffff,0x0
</span><br>
<span class="quotelev1">&gt; os node 4 has cpuset 0xffffffff,,0x0
</span><br>
<span class="quotelev1">&gt; os node 5 has cpuset 0xffffffff,,,0x0
</span><br>
<span class="quotelev1">&gt; os node 8 has cpuset 0xffffffff,,,,0x0
</span><br>
<span class="quotelev1">&gt; os node 9 has cpuset 0xffffffff,,,,,0x0
</span><br>
<span class="quotelev1">&gt; os node 12 has cpuset 0xffffffff,,,,,,0x0
</span><br>
<span class="quotelev1">&gt; os node 13 has cpuset 0xffffffff,,,,,,,0x0
</span><br>
<span class="quotelev1">&gt; node distance matrix:
</span><br>
<span class="quotelev1">&gt;       0   1   2   3   4   5   6   7   8   9  10  11  12  13
</span><br>
<span class="quotelev1">&gt;   0  10  20  40  40  40  40  40  40   0   1 128 3596701896   0   1
</span><br>
<span class="quotelev1">&gt;   1  20  10  40  40  40  40  40  40 4095 3642405872 4095 3642406288  
</span><br>
<span class="quotelev1">&gt; 0 65536
</span><br>
<span class="quotelev1">&gt;   2 128 3596490848 4095 3642406160 4095 3642406048   0   0 128
</span><br>
<span class="quotelev1">&gt; 3597792932   0   0   0   0
</span><br>
<span class="quotelev1">&gt;   3 128 3598856792   0   0   0   0   0   1   0 218840   0   1   0   0
</span><br>
<span class="quotelev1">&gt;   4  40  40  10  20  40  40  40  40 128 3596902928 128 3596700232 4095
</span><br>
<span class="quotelev1">&gt; 3642406320
</span><br>
<span class="quotelev1">&gt;   5  40  40  20  10  40  40  40  40   0   5 4095 3642406432   0   0
</span><br>
<span class="quotelev1">&gt;   6 4095 3642406256   0   0 128 3596923832 256 276108416 4095
</span><br>
<span class="quotelev1">&gt; 3642406272   0   0   0   0
</span><br>
<span class="quotelev1">&gt;   7   0   0   0   0 256 276173984 128 3598846040   0 191376 128
</span><br>
<span class="quotelev1">&gt; 3598846016 256 276108400
</span><br>
<span class="quotelev1">&gt;   8  40  40  40  40  10  20  40  40 4095 2587230208 4095 2587260160  
</span><br>
<span class="quotelev1">&gt; 0   0
</span><br>
<span class="quotelev1">&gt;   9  40  40  40  40  20  10  40  40 4095 3642406320 4095 3642406464  
</span><br>
<span class="quotelev1">&gt; 0   0
</span><br>
<span class="quotelev1">&gt;  10   0   0   0   0   0   0   0   0   0   0   0   0   0   0
</span><br>
<span class="quotelev1">&gt;  11   0   0   0   0   0   0   0   0 128 3596680064 128 3596687552 128
</span><br>
<span class="quotelev1">&gt; 3596679872
</span><br>
<span class="quotelev1">&gt;  12  40  40  40  40  40  40  10  20 128 3597793376 128 3598856792 128
</span><br>
<span class="quotelev1">&gt; 3597315568
</span><br>
<span class="quotelev1">&gt;  13  40  40  40  40  40  40  20  10   0   0 128 3598779600 429496729
</span><br>
<span class="quotelev1">&gt; 2576980377
</span><br>
<span class="quotelev1">&gt; distance matrix asymmetric ([0,2]=40 != [2,0]=128), aborting
</span><br>
<p>Hmmm :)
<br>
<p><span class="quotelev1">&gt; - where do I put IBM-specific code?
</span><br>
<p>Is the device tree linux-specific ? If so, it can stay in linux file as
<br>
long as it's not 30k lines :) We already have both sysfs and
<br>
/proc/cpuinfo  code there anyway.
<br>
<p><span class="quotelev1">&gt; - may be there is a better way to detect that no cache info was
</span><br>
<span class="quotelev1">&gt; fetched from sysfs
</span><br>
<p>That's something that's not clear to me yet. There will likely be other
<br>
cases in the future where we will fetch some info from different
<br>
backends, and merging them may not be easy. Do you think the device tree
<br>
generally contains more information than sysfs? If so, we could start by
<br>
disabling cache info from sysfs when a device-tree is found, and maybe
<br>
have a way to change that default (we already have a hidden en variable
<br>
to use cpuinfo when sysfs is available).
<br>
<p><span class="quotelev1">&gt; - is the coding style ok? :-)
</span><br>
<p>It doesn't look bad.
<br>
<p><p>One question though: Is the device tree completely save-able for
<br>
external reuse? We like being able to save /proc and /sys so as to debug
<br>
distant machines locally. Doing the same for the device tree would be
<br>
great. If so, could you send a tarball of a machine with sparse-numa
<br>
numbers? And we'll likely make gather-topology.sh store it too.
<br>
<p><span class="quotelev1">&gt; 2. Do not I miss something in my patch in order to solve the problems
</span><br>
<span class="quotelev1">&gt; mentioned in the beginning of this mail?
</span><br>
<p>We'll see :)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1292.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Previous message:</strong> <a href="1290.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>In reply to:</strong> <a href="1289.php">Alexey Kardashevskiy: "[hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1293.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1293.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
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
