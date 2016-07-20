<?
$subject_val = "Re: [hwloc-users] PCI devices topology";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 12:39:06 2015" -->
<!-- isoreceived="20150108173906" -->
<!-- sent="Thu, 08 Jan 2015 18:39:02 +0100" -->
<!-- isosent="20150108173902" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] PCI devices topology" -->
<!-- id="54AEC0B6.50904_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAJ2SuLk3aphciD-+Paw=ADc87UBEH7k7snEQeLmhfmn0o=rCng_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] PCI devices topology<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-08 12:39:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1147.php">Pradeep Kiruvale: "Re: [hwloc-users] PCI devices topology"</a>
<li><strong>Previous message:</strong> <a href="1145.php">Pradeep Kiruvale: "[hwloc-users] PCI devices topology"</a>
<li><strong>In reply to:</strong> <a href="1145.php">Pradeep Kiruvale: "[hwloc-users] PCI devices topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1147.php">Pradeep Kiruvale: "Re: [hwloc-users] PCI devices topology"</a>
<li><strong>Reply:</strong> <a href="1147.php">Pradeep Kiruvale: "Re: [hwloc-users] PCI devices topology"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>hwloc_topology_init(&amp;topology);
<br>
hwloc_topology_set_flags(topology, HWLOC_TOPOLOGY_FLAG_IO_DEVICES);
<br>
hwloc_topology_load(topology);
<br>
<p>Then you can use hwloc_get_next_pcidev() to iterate over the entire list
<br>
PCI devices. If you want to know whether it's connected to a specific
<br>
NUMA node, start from the PCI hwloc_obj_t and walk up the -&gt;parent
<br>
pointer until you find a NUMA node object (not guaranteed, could be
<br>
connected to something else, even something that is not a child of a
<br>
NUMA node, for instance the entire machine object).
<br>
<p>Otherwise, you can start at the NUMA node object, walk its children
<br>
until you find some object of type Bridge, then recursively walk
<br>
children to find all PCI objects (it's often organized as a imbalanced
<br>
tree, there can other bridges in the middle).
<br>
<p>Brice
<br>
<p><p><p><p>Le 08/01/2015 17:19, Pradeep Kiruvale a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am looking for a sample application which can provide me the list of
</span><br>
<span class="quotelev1">&gt; PCI devices connected
</span><br>
<span class="quotelev1">&gt; to each NUMA node. Please let me know how can access the information
</span><br>
<span class="quotelev1">&gt; programmatically on 
</span><br>
<span class="quotelev1">&gt; a Linux system using hwloc APIs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Pradeep
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/01/1145.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/01/1145.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1146/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1147.php">Pradeep Kiruvale: "Re: [hwloc-users] PCI devices topology"</a>
<li><strong>Previous message:</strong> <a href="1145.php">Pradeep Kiruvale: "[hwloc-users] PCI devices topology"</a>
<li><strong>In reply to:</strong> <a href="1145.php">Pradeep Kiruvale: "[hwloc-users] PCI devices topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1147.php">Pradeep Kiruvale: "Re: [hwloc-users] PCI devices topology"</a>
<li><strong>Reply:</strong> <a href="1147.php">Pradeep Kiruvale: "Re: [hwloc-users] PCI devices topology"</a>
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
