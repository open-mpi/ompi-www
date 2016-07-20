<?
$subject_val = "Re: [hwloc-users] PCI devices topology";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  9 04:42:46 2015" -->
<!-- isoreceived="20150109094246" -->
<!-- sent="Fri, 09 Jan 2015 10:42:43 +0100" -->
<!-- isosent="20150109094243" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] PCI devices topology" -->
<!-- id="54AFA293.1010907_at_inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAJ2SuL=j=R3hfvSvAM-iQDi7UkURy2DRMSHo-48McVtjpkurow_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-01-09 04:42:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1149.php">Pradeep Kiruvale: "Re: [hwloc-users] PCI devices topology"</a>
<li><strong>Previous message:</strong> <a href="1147.php">Pradeep Kiruvale: "Re: [hwloc-users] PCI devices topology"</a>
<li><strong>In reply to:</strong> <a href="1147.php">Pradeep Kiruvale: "Re: [hwloc-users] PCI devices topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1149.php">Pradeep Kiruvale: "Re: [hwloc-users] PCI devices topology"</a>
<li><strong>Reply:</strong> <a href="1149.php">Pradeep Kiruvale: "Re: [hwloc-users] PCI devices topology"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>Assuming the NUMA distance matrix is available, the distance between a
<br>
CPU and a PCI device is basically the distance between the NUMA node
<br>
that contains this CPU and the NUMA node close to the PCI device.
<br>
<p>In theory, you would have
<br>
1) CPU to local NUMA node = constant
<br>
2) NUMA node to other NUMA node = the significant part when looking at
<br>
I/O affinity
<br>
3) other NUMA node to local PCI device = constant when you switch
<br>
between CPUs, and pretty-much constant when you switch between PCI devices
<br>
<p>Keep in mind that (2) is a &quot;relative latency&quot;, not an actual physical
<br>
distance, but it's enough for &quot;comparing distances&quot;.
<br>
<p>Brice
<br>
<p><p><p>Le 09/01/2015 10:30, Pradeep Kiruvale a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the reply. Is it possible to get the distance matrix for
</span><br>
<span class="quotelev1">&gt; each cpu and the pci device from these hwloc apis?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Pradeep
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8 January 2015 at 18:39, Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     hwloc_topology_init(&amp;topology);
</span><br>
<span class="quotelev1">&gt;     hwloc_topology_set_flags(topology, HWLOC_TOPOLOGY_FLAG_IO_DEVICES);
</span><br>
<span class="quotelev1">&gt;     hwloc_topology_load(topology);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Then you can use hwloc_get_next_pcidev() to iterate over the
</span><br>
<span class="quotelev1">&gt;     entire list PCI devices. If you want to know whether it's
</span><br>
<span class="quotelev1">&gt;     connected to a specific NUMA node, start from the PCI hwloc_obj_t
</span><br>
<span class="quotelev1">&gt;     and walk up the -&gt;parent pointer until you find a NUMA node object
</span><br>
<span class="quotelev1">&gt;     (not guaranteed, could be connected to something else, even
</span><br>
<span class="quotelev1">&gt;     something that is not a child of a NUMA node, for instance the
</span><br>
<span class="quotelev1">&gt;     entire machine object).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Otherwise, you can start at the NUMA node object, walk its
</span><br>
<span class="quotelev1">&gt;     children until you find some object of type Bridge, then
</span><br>
<span class="quotelev1">&gt;     recursively walk children to find all PCI objects (it's often
</span><br>
<span class="quotelev1">&gt;     organized as a imbalanced tree, there can other bridges in the
</span><br>
<span class="quotelev1">&gt;     middle).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Le 08/01/2015 17:19, Pradeep Kiruvale a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I am looking for a sample application which can provide me the
</span><br>
<span class="quotelev2">&gt;&gt;     list of PCI devices connected
</span><br>
<span class="quotelev2">&gt;&gt;     to each NUMA node. Please let me know how can access the
</span><br>
<span class="quotelev2">&gt;&gt;     information programmatically on 
</span><br>
<span class="quotelev2">&gt;&gt;     a Linux system using hwloc APIs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Regards,
</span><br>
<span class="quotelev2">&gt;&gt;     Pradeep
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/01/1145.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/01/1145.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt;     hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/01/1147.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/01/1147.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1148/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1149.php">Pradeep Kiruvale: "Re: [hwloc-users] PCI devices topology"</a>
<li><strong>Previous message:</strong> <a href="1147.php">Pradeep Kiruvale: "Re: [hwloc-users] PCI devices topology"</a>
<li><strong>In reply to:</strong> <a href="1147.php">Pradeep Kiruvale: "Re: [hwloc-users] PCI devices topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1149.php">Pradeep Kiruvale: "Re: [hwloc-users] PCI devices topology"</a>
<li><strong>Reply:</strong> <a href="1149.php">Pradeep Kiruvale: "Re: [hwloc-users] PCI devices topology"</a>
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
