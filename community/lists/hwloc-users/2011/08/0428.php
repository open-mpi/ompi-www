<?
$subject_val = "Re: [hwloc-users] Numa availability";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 28 07:54:08 2011" -->
<!-- isoreceived="20110828115408" -->
<!-- sent="Sun, 28 Aug 2011 13:54:01 +0200" -->
<!-- isosent="20110828115401" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Numa availability" -->
<!-- id="20110828115401.GD5238_at_type" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1237838939.2107528.1314527791281.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Numa availability<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-28 07:54:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0429.php">Gabriele Fatigati: "Re: [hwloc-users] Numa availability"</a>
<li><strong>Previous message:</strong> <a href="0427.php">Brice Goglin: "Re: [hwloc-users] Numa availability"</a>
<li><strong>Maybe in reply to:</strong> <a href="0426.php">Gabriele Fatigati: "[hwloc-users] Numa availability"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0429.php">Gabriele Fatigati: "Re: [hwloc-users] Numa availability"</a>
<li><strong>Reply:</strong> <a href="0429.php">Gabriele Fatigati: "Re: [hwloc-users] Numa availability"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Sun 28 Aug 2011 12:36:31 +0200, a &#233;crit :
<br>
<span class="quotelev2">&gt; &gt;  Is there a hwloc routine to check this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; get_nbobjs_by_type(topology, HWLOC_OBJ_NODE) tells how many NUMA node
</span><br>
<span class="quotelev1">&gt; objects exist.
</span><br>
<span class="quotelev1">&gt; If you get &gt;1, the machine is NUMA.
</span><br>
<span class="quotelev1">&gt; If the non-NUMA case, I think you can get 0 or 1 depending on whether
</span><br>
<span class="quotelev1">&gt; the OS is NUMA-aware or not (not sure we should remove this possible
</span><br>
<span class="quotelev1">&gt; difference).
</span><br>
<p>The useful difference is that 0 means we don't know, while 1 means we do
<br>
know there is only one node.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0429.php">Gabriele Fatigati: "Re: [hwloc-users] Numa availability"</a>
<li><strong>Previous message:</strong> <a href="0427.php">Brice Goglin: "Re: [hwloc-users] Numa availability"</a>
<li><strong>Maybe in reply to:</strong> <a href="0426.php">Gabriele Fatigati: "[hwloc-users] Numa availability"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0429.php">Gabriele Fatigati: "Re: [hwloc-users] Numa availability"</a>
<li><strong>Reply:</strong> <a href="0429.php">Gabriele Fatigati: "Re: [hwloc-users] Numa availability"</a>
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
