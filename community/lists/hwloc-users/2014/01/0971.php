<?
$subject_val = "Re: [hwloc-users] Finding closest host bridge";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 28 17:29:47 2014" -->
<!-- isoreceived="20140128222947" -->
<!-- sent="Tue, 28 Jan 2014 23:29:43 +0100" -->
<!-- isosent="20140128222943" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Finding closest host bridge" -->
<!-- id="52E82F57.4090700_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F3601917D34A_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Finding closest host bridge<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-28 17:29:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0972.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Previous message:</strong> <a href="0970.php">Rolf vandeVaart: "[hwloc-users] Finding closest host bridge"</a>
<li><strong>In reply to:</strong> <a href="0970.php">Rolf vandeVaart: "[hwloc-users] Finding closest host bridge"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The bridge cannot be &quot;not connected to anything&quot;. All objects have a
<br>
parent (and are a child of that parent) except the very-top root object.
<br>
Theoretically, the bridge could be connected anywhere. In practice it's
<br>
connected to a NUMA node, a root object, or (rarely) a group of numa nodes.
<br>
<p>The problem with your code is that it cannot work on machines where some
<br>
cores have no PCI bus nearby (and this happens for real). Ideally, you
<br>
would walk up until you find a bridge, but sometimes you will never find
<br>
any of them. For instance, the closest bridge could be attached to
<br>
another NUMA node close to yours on a large NUMA machine.
<br>
<p>I assume you're not looking for a bridge in the end, but rather for PCI
<br>
devices such as GPUs or network interface? I would suggest reverting the
<br>
logic: Traverse the list of PCI devices (or bridges if you really care
<br>
about bridges), check if they are what you want, and check if your core
<br>
is near them. The locality of the PCI device (or bridge, or os device)
<br>
can be retrieved with hwloc_get_nonio_ancestor_obj() which returns the
<br>
object where the corresponding bus/bridge is attached.
<br>
<p>Does that help?
<br>
<p>Brice
<br>
<p><p><p>Le 28/01/2014 23:12, Rolf vandeVaart a &#233;crit :
<br>
<span class="quotelev1">&gt; I cam up with this snippet of code so I could find the PCI devices closest to where a process was running.  This works fine on a NUMA node.  However, on a non-NUMA node, it appears that the HWLOC bridge is not connected to anything.  Therefore, I believe I just need to do something like hwloc_get_obj_by_type(topology, HWLOC_OBJ_BRIDGE, 0) when running on a non-NUMA node.  Does that seem correct?  Should I special case where I do not find a HWLOC_OBJ_NODE object?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     retval = hwloc_topology_init(&amp;topology);
</span><br>
<span class="quotelev1">&gt;     retval = hwloc_topology_set_flags(topology, flags);
</span><br>
<span class="quotelev1">&gt;     retval = hwloc_topology_load(topology);
</span><br>
<span class="quotelev1">&gt;     newset = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev1">&gt;     retval = hwloc_get_last_cpu_location(topology, newset, 0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* Get the object that contains the cpuset */
</span><br>
<span class="quotelev1">&gt;     node = hwloc_get_first_largest_obj_inside_cpuset(topology, newset);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* Climb up from that object until we find HWLOC_OBJ_NODE */
</span><br>
<span class="quotelev1">&gt;     while (node-&gt;type != HWLOC_OBJ_NODE) {
</span><br>
<span class="quotelev1">&gt;         node = node-&gt;parent;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* Now look for the HWLOC_OBJ_BRIDGE.  All PCI busses hanging off the
</span><br>
<span class="quotelev1">&gt;      * node will have one of these */
</span><br>
<span class="quotelev1">&gt;     bridge = hwloc_get_next_child(topology, node, NULL);
</span><br>
<span class="quotelev1">&gt;     while (bridge != NULL &amp;&amp; bridge-&gt;type != HWLOC_OBJ_BRIDGE) {
</span><br>
<span class="quotelev1">&gt;         bridge = hwloc_get_next_child(topology, node, bridge);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0972.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Previous message:</strong> <a href="0970.php">Rolf vandeVaart: "[hwloc-users] Finding closest host bridge"</a>
<li><strong>In reply to:</strong> <a href="0970.php">Rolf vandeVaart: "[hwloc-users] Finding closest host bridge"</a>
<!-- nextthread="start" -->
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
