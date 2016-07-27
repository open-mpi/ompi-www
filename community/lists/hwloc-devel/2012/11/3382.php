<?
$subject_val = "Re: [hwloc-devel] CPU affinity of OS Devices?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 19:02:24 2012" -->
<!-- isoreceived="20121108000224" -->
<!-- sent="Thu, 08 Nov 2012 01:02:13 +0100" -->
<!-- isosent="20121108000213" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] CPU affinity of OS Devices?" -->
<!-- id="509AF685.1040000_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="509A84AF.6020909_at_redhat.com" -->
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
<strong>Date:</strong> 2012-11-07 19:02:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3383.php">Brice Goglin: "Re: [hwloc-devel] plugins update"</a>
<li><strong>Previous message:</strong> <a href="3381.php">Guy Streeter: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>In reply to:</strong> <a href="3381.php">Guy Streeter: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3378.php">Samuel Thibault: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 07/11/2012 16:56, Guy Streeter a &#233;crit :
<br>
<span class="quotelev1">&gt; On 11/06/2012 05:20 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Le 06/11/2012 23:55, Guy Streeter a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 11/06/2012 03:53 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello Guy,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't think OS devices ever had a cpuset. All objects that are not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; things where you can bind processes usually have NULL cpusets. So when
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you have a PCI or OS device, you walk up the obj-&gt;parent pointer until
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you find an object with a non-NULL cpuset. That's the affinity you're
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; looking for.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You can use hwloc_get_non_io_ancestor_obj() (in hwloc/helper.h) to find
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the first parent with non-NULL cpuset.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I didn't mean to imply that they had gone away. My question is how do I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specify a binding like &quot;not on the same CPU that is handling the Ethernet
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interrupts&quot;?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Assuming you have the OS device for this interrupt, find the parent
</span><br>
<span class="quotelev2">&gt;&gt; object whose cpuset field isn't NULL, reverse this cpuset with
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_bitmap_not() and bind to some object that is inside the resulting
</span><br>
<span class="quotelev2">&gt;&gt; cpuset.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; The problem with that is that it will exclude all of the CPUs associated with
</span><br>
<span class="quotelev1">&gt; the node, or all of the CPUs on the machine if it isn't NUMA. The CPU affinity
</span><br>
<span class="quotelev1">&gt; of the IRQ can be set independent of the bounding object of the PCI bridge the
</span><br>
<span class="quotelev1">&gt; device is below.
</span><br>
<span class="quotelev1">&gt; On my machine, the ahci device uses IRQ 90, and the affinity of that IRQ is
</span><br>
<span class="quotelev1">&gt; CPU 3. The first parent with a cpuset above the OSDev block object for my disk
</span><br>
<span class="quotelev1">&gt; drive is the machine itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>That's exactly why I started my reply with &quot;assuming you have the OS
<br>
device for this interrupt&quot;. I meant something like &quot;irq23&quot; that we don't
<br>
support (that's what you requested earlier, right).
<br>
<p>Indeed OSDev &quot;eth3&quot; instead of &quot;irq23&quot; wouldn't help at all. Not only
<br>
because the affinity of the NIC is usually at least an entire socket
<br>
instead of a single PU, but also because the interrupt can be configured
<br>
to go somewhere else, not even close to the NIC (if the administrator or
<br>
the irqbalance daemon decides to do so).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3383.php">Brice Goglin: "Re: [hwloc-devel] plugins update"</a>
<li><strong>Previous message:</strong> <a href="3381.php">Guy Streeter: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>In reply to:</strong> <a href="3381.php">Guy Streeter: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3378.php">Samuel Thibault: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
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
