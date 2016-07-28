<?
$subject_val = "Re: [hwloc-users] PCI devices topology";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 12 10:46:16 2015" -->
<!-- isoreceived="20150112154616" -->
<!-- sent="Mon, 12 Jan 2015 16:46:15 +0100" -->
<!-- isosent="20150112154615" -->
<!-- name="Pradeep Kiruvale" -->
<!-- email="pradeepkiruvale_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] PCI devices topology" -->
<!-- id="CAJ2SuL=3qCF8fgDzDuyxX9p_f3w+LKC7d_0r0mUsAYphA+_f=A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="54AFA293.1010907_at_inria.fr" -->
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
<strong>Date:</strong> 2015-01-12 10:46:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1150.php">Joseph Mingrone: "[hwloc-users] hwloc error when starting slurmd on 48 core FreeBSD 10.1 system"</a>
<li><strong>Previous message:</strong> <a href="1148.php">Brice Goglin: "Re: [hwloc-users] PCI devices topology"</a>
<li><strong>In reply to:</strong> <a href="1148.php">Brice Goglin: "Re: [hwloc-users] PCI devices topology"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>Thanks for your reply. I will look into it.
<br>
<p>Regards,
<br>
Pradeep
<br>
<p>On 9 January 2015 at 10:42, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Assuming the NUMA distance matrix is available, the distance between a CPU
</span><br>
<span class="quotelev1">&gt; and a PCI device is basically the distance between the NUMA node that
</span><br>
<span class="quotelev1">&gt; contains this CPU and the NUMA node close to the PCI device.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In theory, you would have
</span><br>
<span class="quotelev1">&gt; 1) CPU to local NUMA node = constant
</span><br>
<span class="quotelev1">&gt; 2) NUMA node to other NUMA node = the significant part when looking at I/O
</span><br>
<span class="quotelev1">&gt; affinity
</span><br>
<span class="quotelev1">&gt; 3) other NUMA node to local PCI device = constant when you switch between
</span><br>
<span class="quotelev1">&gt; CPUs, and pretty-much constant when you switch between PCI devices
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Keep in mind that (2) is a &quot;relative latency&quot;, not an actual physical
</span><br>
<span class="quotelev1">&gt; distance, but it's enough for &quot;comparing distances&quot;.
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
<span class="quotelev1">&gt; Le 09/01/2015 10:30, Pradeep Kiruvale a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks for the reply. Is it possible to get the distance matrix for each
</span><br>
<span class="quotelev1">&gt; cpu and the pci device from these hwloc apis?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Regards,
</span><br>
<span class="quotelev1">&gt; Pradeep
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8 January 2015 at 18:39, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_topology_init(&amp;topology);
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_topology_set_flags(topology, HWLOC_TOPOLOGY_FLAG_IO_DEVICES);
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_topology_load(topology);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then you can use hwloc_get_next_pcidev() to iterate over the entire list
</span><br>
<span class="quotelev2">&gt;&gt; PCI devices. If you want to know whether it's connected to a specific NUMA
</span><br>
<span class="quotelev2">&gt;&gt; node, start from the PCI hwloc_obj_t and walk up the -&gt;parent pointer until
</span><br>
<span class="quotelev2">&gt;&gt; you find a NUMA node object (not guaranteed, could be connected to
</span><br>
<span class="quotelev2">&gt;&gt; something else, even something that is not a child of a NUMA node, for
</span><br>
<span class="quotelev2">&gt;&gt; instance the entire machine object).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Otherwise, you can start at the NUMA node object, walk its children until
</span><br>
<span class="quotelev2">&gt;&gt; you find some object of type Bridge, then recursively walk children to find
</span><br>
<span class="quotelev2">&gt;&gt; all PCI objects (it's often organized as a imbalanced tree, there can other
</span><br>
<span class="quotelev2">&gt;&gt; bridges in the middle).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 08/01/2015 17:19, Pradeep Kiruvale a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I am looking for a sample application which can provide me the list of
</span><br>
<span class="quotelev2">&gt;&gt; PCI devices connected
</span><br>
<span class="quotelev2">&gt;&gt; to each NUMA node. Please let me know how can access the information
</span><br>
<span class="quotelev2">&gt;&gt; programmatically on
</span><br>
<span class="quotelev2">&gt;&gt; a Linux system using hwloc APIs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Regards,
</span><br>
<span class="quotelev2">&gt;&gt;  Pradeep
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing listhwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/01/1145.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/01/1145.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/01/1147.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/01/1147.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1149/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1150.php">Joseph Mingrone: "[hwloc-users] hwloc error when starting slurmd on 48 core FreeBSD 10.1 system"</a>
<li><strong>Previous message:</strong> <a href="1148.php">Brice Goglin: "Re: [hwloc-users] PCI devices topology"</a>
<li><strong>In reply to:</strong> <a href="1148.php">Brice Goglin: "Re: [hwloc-users] PCI devices topology"</a>
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
