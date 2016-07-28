<?
$subject_val = "Re: [hwloc-devel] Cache size/sharing errors on 8x4 Opteron system";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 10:44:20 2009" -->
<!-- isoreceived="20090922144420" -->
<!-- sent="Tue, 22 Sep 2009 16:44:11 +0200" -->
<!-- isosent="20090922144411" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Cache size/sharing errors on 8x4 Opteron system" -->
<!-- id="20090922144411.GO6084_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4AB8E0F7.3050509_at_uibk.ac.at" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Cache size/sharing errors on 8x4 Opteron system<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-22 10:44:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0070.php">Samuel Thibault: "Re: [hwloc-devel] Cache size/sharing errors on 8x4 Opteron system"</a>
<li><strong>Previous message:</strong> <a href="0068.php">Peter Thoman: "[hwloc-devel] Cache size/sharing errors on 8x4 Opteron system"</a>
<li><strong>In reply to:</strong> <a href="0068.php">Peter Thoman: "[hwloc-devel] Cache size/sharing errors on 8x4 Opteron system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0070.php">Samuel Thibault: "Re: [hwloc-devel] Cache size/sharing errors on 8x4 Opteron system"</a>
<li><strong>Reply:</strong> <a href="0070.php">Samuel Thibault: "Re: [hwloc-devel] Cache size/sharing errors on 8x4 Opteron system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Peter Thoman, le Tue 22 Sep 2009 16:36:39 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; However, the L1 cache size is wrong
</span><br>
<p>512K is quite big indeed :)
<br>
<p>hwloc gets it from /sys/devices/system/cpu/cpu0/cache/index*/size
<br>
<p><span class="quotelev1">&gt; and the L3 cache is in fact shared between each set of 4 cores
</span><br>
<span class="quotelev1">&gt; (its size is correct though).
</span><br>
<p>hwloc gets it from /sys/devices/system/cpu/cpu0/cache/index*/shared_cpu_map
<br>
<p>I'm afraid the bug is most probably in the kernel, you can send the
<br>
result of tests/linux/gather-topology.sh to make sure.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0070.php">Samuel Thibault: "Re: [hwloc-devel] Cache size/sharing errors on 8x4 Opteron system"</a>
<li><strong>Previous message:</strong> <a href="0068.php">Peter Thoman: "[hwloc-devel] Cache size/sharing errors on 8x4 Opteron system"</a>
<li><strong>In reply to:</strong> <a href="0068.php">Peter Thoman: "[hwloc-devel] Cache size/sharing errors on 8x4 Opteron system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0070.php">Samuel Thibault: "Re: [hwloc-devel] Cache size/sharing errors on 8x4 Opteron system"</a>
<li><strong>Reply:</strong> <a href="0070.php">Samuel Thibault: "Re: [hwloc-devel] Cache size/sharing errors on 8x4 Opteron system"</a>
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
