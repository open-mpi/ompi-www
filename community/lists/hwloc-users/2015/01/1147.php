<?
$subject_val = "Re: [hwloc-users] PCI devices topology";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  9 04:30:32 2015" -->
<!-- isoreceived="20150109093032" -->
<!-- sent="Fri, 9 Jan 2015 10:30:31 +0100" -->
<!-- isosent="20150109093031" -->
<!-- name="Pradeep Kiruvale" -->
<!-- email="pradeepkiruvale_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] PCI devices topology" -->
<!-- id="CAJ2SuL=j=R3hfvSvAM-iQDi7UkURy2DRMSHo-48McVtjpkurow_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="54AEC0B6.50904_at_inria.fr" -->
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
<strong>From:</strong> Pradeep Kiruvale (<em>pradeepkiruvale_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-09 04:30:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1148.php">Brice Goglin: "Re: [hwloc-users] PCI devices topology"</a>
<li><strong>Previous message:</strong> <a href="1146.php">Brice Goglin: "Re: [hwloc-users] PCI devices topology"</a>
<li><strong>In reply to:</strong> <a href="1146.php">Brice Goglin: "Re: [hwloc-users] PCI devices topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1148.php">Brice Goglin: "Re: [hwloc-users] PCI devices topology"</a>
<li><strong>Reply:</strong> <a href="1148.php">Brice Goglin: "Re: [hwloc-users] PCI devices topology"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>Thanks for the reply. Is it possible to get the distance matrix for each
<br>
cpu and the pci device from these hwloc apis?
<br>
<p>Regards,
<br>
Pradeep
<br>
<p>On 8 January 2015 at 18:39, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_topology_init(&amp;topology);
</span><br>
<span class="quotelev1">&gt; hwloc_topology_set_flags(topology, HWLOC_TOPOLOGY_FLAG_IO_DEVICES);
</span><br>
<span class="quotelev1">&gt; hwloc_topology_load(topology);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then you can use hwloc_get_next_pcidev() to iterate over the entire list
</span><br>
<span class="quotelev1">&gt; PCI devices. If you want to know whether it's connected to a specific NUMA
</span><br>
<span class="quotelev1">&gt; node, start from the PCI hwloc_obj_t and walk up the -&gt;parent pointer until
</span><br>
<span class="quotelev1">&gt; you find a NUMA node object (not guaranteed, could be connected to
</span><br>
<span class="quotelev1">&gt; something else, even something that is not a child of a NUMA node, for
</span><br>
<span class="quotelev1">&gt; instance the entire machine object).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Otherwise, you can start at the NUMA node object, walk its children until
</span><br>
<span class="quotelev1">&gt; you find some object of type Bridge, then recursively walk children to find
</span><br>
<span class="quotelev1">&gt; all PCI objects (it's often organized as a imbalanced tree, there can other
</span><br>
<span class="quotelev1">&gt; bridges in the middle).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 08/01/2015 17:19, Pradeep Kiruvale a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I am looking for a sample application which can provide me the list of
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
<span class="quotelev1">&gt;  Regards,
</span><br>
<span class="quotelev1">&gt;  Pradeep
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
<span class="quotelev1">&gt; hwloc-users mailing listhwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/01/1145.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/01/1145.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/01/1147.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/01/1147.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1147/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1148.php">Brice Goglin: "Re: [hwloc-users] PCI devices topology"</a>
<li><strong>Previous message:</strong> <a href="1146.php">Brice Goglin: "Re: [hwloc-users] PCI devices topology"</a>
<li><strong>In reply to:</strong> <a href="1146.php">Brice Goglin: "Re: [hwloc-users] PCI devices topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1148.php">Brice Goglin: "Re: [hwloc-users] PCI devices topology"</a>
<li><strong>Reply:</strong> <a href="1148.php">Brice Goglin: "Re: [hwloc-users] PCI devices topology"</a>
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
