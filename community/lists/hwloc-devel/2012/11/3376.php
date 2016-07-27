<?
$subject_val = "Re: [hwloc-devel] CPU affinity of OS Devices?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  6 17:56:07 2012" -->
<!-- isoreceived="20121106225607" -->
<!-- sent="Tue, 06 Nov 2012 16:55:58 -0600" -->
<!-- isosent="20121106225558" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] CPU affinity of OS Devices?" -->
<!-- id="5099957E.4060708_at_redhat.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="509986D9.3050006_at_inria.fr" -->
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
<strong>Date:</strong> 2012-11-06 17:55:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3377.php">Brice Goglin: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>Previous message:</strong> <a href="3375.php">Brice Goglin: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>In reply to:</strong> <a href="3375.php">Brice Goglin: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3377.php">Brice Goglin: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>Reply:</strong> <a href="3377.php">Brice Goglin: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>Reply:</strong> <a href="3378.php">Samuel Thibault: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/06/2012 03:53 PM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Hello Guy,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think OS devices ever had a cpuset. All objects that are not
</span><br>
<span class="quotelev1">&gt; things where you can bind processes usually have NULL cpusets. So when
</span><br>
<span class="quotelev1">&gt; you have a PCI or OS device, you walk up the obj-&gt;parent pointer until
</span><br>
<span class="quotelev1">&gt; you find an object with a non-NULL cpuset. That's the affinity you're
</span><br>
<span class="quotelev1">&gt; looking for.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can use hwloc_get_non_io_ancestor_obj() (in hwloc/helper.h) to find
</span><br>
<span class="quotelev1">&gt; the first parent with non-NULL cpuset.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I didn't mean to imply that they had gone away. My question is how do I
<br>
specify a binding like &quot;not on the same CPU that is handling the Ethernet
<br>
interrupts&quot;?
<br>
<p>thanks,
<br>
--Guy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3377.php">Brice Goglin: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>Previous message:</strong> <a href="3375.php">Brice Goglin: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>In reply to:</strong> <a href="3375.php">Brice Goglin: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3377.php">Brice Goglin: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>Reply:</strong> <a href="3377.php">Brice Goglin: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>Reply:</strong> <a href="3378.php">Samuel Thibault: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
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
