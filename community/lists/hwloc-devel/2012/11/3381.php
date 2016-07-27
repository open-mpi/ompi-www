<?
$subject_val = "Re: [hwloc-devel] CPU affinity of OS Devices?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 10:56:39 2012" -->
<!-- isoreceived="20121107155639" -->
<!-- sent="Wed, 07 Nov 2012 09:56:31 -0600" -->
<!-- isosent="20121107155631" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] CPU affinity of OS Devices?" -->
<!-- id="509A84AF.6020909_at_redhat.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50999B4E.5000001_at_inria.fr" -->
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
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-07 10:56:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3382.php">Brice Goglin: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>Previous message:</strong> <a href="3380.php">Brice Goglin: "[hwloc-devel] hwloc@SC12"</a>
<li><strong>In reply to:</strong> <a href="3377.php">Brice Goglin: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3382.php">Brice Goglin: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>Reply:</strong> <a href="3382.php">Brice Goglin: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/06/2012 05:20 PM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 06/11/2012 23:55, Guy Streeter a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On 11/06/2012 03:53 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Guy,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't think OS devices ever had a cpuset. All objects that are not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; things where you can bind processes usually have NULL cpusets. So when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you have a PCI or OS device, you walk up the obj-&gt;parent pointer until
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you find an object with a non-NULL cpuset. That's the affinity you're
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looking for.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can use hwloc_get_non_io_ancestor_obj() (in hwloc/helper.h) to find
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the first parent with non-NULL cpuset.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I didn't mean to imply that they had gone away. My question is how do I
</span><br>
<span class="quotelev2">&gt;&gt; specify a binding like &quot;not on the same CPU that is handling the Ethernet
</span><br>
<span class="quotelev2">&gt;&gt; interrupts&quot;?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Assuming you have the OS device for this interrupt, find the parent
</span><br>
<span class="quotelev1">&gt; object whose cpuset field isn't NULL, reverse this cpuset with
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_not() and bind to some object that is inside the resulting
</span><br>
<span class="quotelev1">&gt; cpuset.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
The problem with that is that it will exclude all of the CPUs associated with
<br>
the node, or all of the CPUs on the machine if it isn't NUMA. The CPU affinity
<br>
of the IRQ can be set independent of the bounding object of the PCI bridge the
<br>
device is below.
<br>
On my machine, the ahci device uses IRQ 90, and the affinity of that IRQ is
<br>
CPU 3. The first parent with a cpuset above the OSDev block object for my disk
<br>
drive is the machine itself.
<br>
<p>--Guy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3382.php">Brice Goglin: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>Previous message:</strong> <a href="3380.php">Brice Goglin: "[hwloc-devel] hwloc@SC12"</a>
<li><strong>In reply to:</strong> <a href="3377.php">Brice Goglin: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3382.php">Brice Goglin: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>Reply:</strong> <a href="3382.php">Brice Goglin: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
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
