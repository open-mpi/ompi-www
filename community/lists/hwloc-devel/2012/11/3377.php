<?
$subject_val = "Re: [hwloc-devel] CPU affinity of OS Devices?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  6 18:20:53 2012" -->
<!-- isoreceived="20121106232053" -->
<!-- sent="Wed, 07 Nov 2012 00:20:46 +0100" -->
<!-- isosent="20121106232046" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] CPU affinity of OS Devices?" -->
<!-- id="50999B4E.5000001_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5099957E.4060708_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] CPU affinity of OS Devices?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-06 18:20:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3378.php">Samuel Thibault: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>Previous message:</strong> <a href="3376.php">Guy Streeter: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>In reply to:</strong> <a href="3376.php">Guy Streeter: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3381.php">Guy Streeter: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>Reply:</strong> <a href="3381.php">Guy Streeter: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 06/11/2012 23:55, Guy Streeter a &#233;crit :
<br>
<span class="quotelev1">&gt; On 11/06/2012 03:53 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello Guy,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't think OS devices ever had a cpuset. All objects that are not
</span><br>
<span class="quotelev2">&gt;&gt; things where you can bind processes usually have NULL cpusets. So when
</span><br>
<span class="quotelev2">&gt;&gt; you have a PCI or OS device, you walk up the obj-&gt;parent pointer until
</span><br>
<span class="quotelev2">&gt;&gt; you find an object with a non-NULL cpuset. That's the affinity you're
</span><br>
<span class="quotelev2">&gt;&gt; looking for.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can use hwloc_get_non_io_ancestor_obj() (in hwloc/helper.h) to find
</span><br>
<span class="quotelev2">&gt;&gt; the first parent with non-NULL cpuset.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I didn't mean to imply that they had gone away. My question is how do I
</span><br>
<span class="quotelev1">&gt; specify a binding like &quot;not on the same CPU that is handling the Ethernet
</span><br>
<span class="quotelev1">&gt; interrupts&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Assuming you have the OS device for this interrupt, find the parent
<br>
object whose cpuset field isn't NULL, reverse this cpuset with
<br>
hwloc_bitmap_not() and bind to some object that is inside the resulting
<br>
cpuset.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3378.php">Samuel Thibault: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>Previous message:</strong> <a href="3376.php">Guy Streeter: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>In reply to:</strong> <a href="3376.php">Guy Streeter: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3381.php">Guy Streeter: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>Reply:</strong> <a href="3381.php">Guy Streeter: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
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
