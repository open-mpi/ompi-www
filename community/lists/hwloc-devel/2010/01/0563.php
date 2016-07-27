<?
$subject_val = "Re: [hwloc-devel] #23: network topology support and v1.0 semantic fixes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  7 13:52:56 2010" -->
<!-- isoreceived="20100107185256" -->
<!-- sent="Thu, 07 Jan 2010 19:52:51 +0100" -->
<!-- isosent="20100107185251" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] #23: network topology support and v1.0 semantic fixes" -->
<!-- id="4B462D83.7000509_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20100107183534.GE4848_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] #23: network topology support and v1.0 semantic fixes<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-07 13:52:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0564.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support and v1.0 semantic fixes"</a>
<li><strong>Previous message:</strong> <a href="0562.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support and v1.0 semantic fixes"</a>
<li><strong>In reply to:</strong> <a href="0562.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support and v1.0 semantic fixes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0564.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support and v1.0 semantic fixes"</a>
<li><strong>Reply:</strong> <a href="0564.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support and v1.0 semantic fixes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Now, coming to semantic changes:
</span><br>
<span class="quotelev1">&gt; - The top node of the tree wouldn't necessarily be a system object.
</span><br>
<span class="quotelev1">&gt;   Actually, having always the top object having the system type is not
</span><br>
<span class="quotelev1">&gt;   providing any useful information :)
</span><br>
<p>And having the root object type vary from machine to system or switch
<br>
provides useful information about what kind of topology we're working on.
<br>
<p><span class="quotelev1">&gt; - Objects of network trees may not have cpusets defined  (Trees obtained
</span><br>
<span class="quotelev1">&gt;   directly from hwloc with defaults parameter would still have cpusets
</span><br>
<span class="quotelev1">&gt;   on every node however).  It does not make sense to merge cpusets of
</span><br>
<span class="quotelev1">&gt;   different machines (they will conflict), and things like shifting
</span><br>
<span class="quotelev1">&gt;   cpusets to be able to merge them would probably only bring issues.
</span><br>
<span class="quotelev1">&gt;   That being said, that does not prevent from writing a transparency
</span><br>
<span class="quotelev1">&gt;   plugin that automatically discovers the network topology, shifts
</span><br>
<span class="quotelev1">&gt;   cpusets, and when requested for binding, automatically migrates to
</span><br>
<span class="quotelev1">&gt;   the machine according to the shift, and uses the underlying OS hooks
</span><br>
<span class="quotelev1">&gt;   to perform the binding.  My point is that the hwloc combining operation
</span><br>
<span class="quotelev1">&gt;   wouldn't fix cpusets itself and leave them NULL. The caller of the
</span><br>
<span class="quotelev1">&gt;   combining operation will be responsible for that.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>By the way, I thought about making cpuset NULL in PCI objects. But it
<br>
wasn't strictly required there so I just kept using empty cpusets
<br>
instead of changing everything else to support NULL.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0564.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support and v1.0 semantic fixes"</a>
<li><strong>Previous message:</strong> <a href="0562.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support and v1.0 semantic fixes"</a>
<li><strong>In reply to:</strong> <a href="0562.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support and v1.0 semantic fixes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0564.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support and v1.0 semantic fixes"</a>
<li><strong>Reply:</strong> <a href="0564.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support and v1.0 semantic fixes"</a>
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
