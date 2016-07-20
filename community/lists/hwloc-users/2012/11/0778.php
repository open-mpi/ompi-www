<?
$subject_val = "Re: [hwloc-users] GPU devices appear as PCI devices";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 20 10:31:05 2012" -->
<!-- isoreceived="20121120153105" -->
<!-- sent="Tue, 20 Nov 2012 16:30:19 +0100" -->
<!-- isosent="20121120153019" -->
<!-- name="Brice Goglin" -->
<!-- email="brice.goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] GPU devices appear as PCI devices" -->
<!-- id="85d0dea8-da3c-40e5-b687-9e22caeb2a67_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="50ABA054.7000303_at_bsc.es" -->
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
<strong>Subject:</strong> Re: [hwloc-users] GPU devices appear as PCI devices<br>
<strong>From:</strong> Brice Goglin (<em>brice.goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-20 10:30:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0779.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Previous message:</strong> <a href="0777.php">Guillermo Miranda: "[hwloc-users] GPU devices appear as PCI devices"</a>
<li><strong>In reply to:</strong> <a href="0777.php">Guillermo Miranda: "[hwloc-users] GPU devices appear as PCI devices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0785.php">Guillermo Miranda: "Re: [hwloc-users] GPU devices appear as PCI devices"</a>
<li><strong>Reply:</strong> <a href="0785.php">Guillermo Miranda: "Re: [hwloc-users] GPU devices appear as PCI devices"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ask nvidia to make their cuda driver free, and to add them to sysfs :)
<br>
<p>There's a cuda hwloc branch that will solve this. In the meantime, there are no nvidia osdevs.
<br>
Maybe look at hwloc/cuda.h and cudart.h, they give cuda device affinity without osdevs.
<br>
<p>Brice
<br>
<p><p><p>Guillermo Miranda &lt;guillermo.miranda_at_[hidden]&gt; a &#195;&#169;crit&#194;&#160;:
<br>
<p><span class="quotelev1">&gt;Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am trying to detect GPus when traversing through the topology tree,
</span><br>
<span class="quotelev1">&gt;but they appear as PCI devices instead of OS devices, so I can't
</span><br>
<span class="quotelev1">&gt;compare
</span><br>
<span class="quotelev1">&gt;the OS type against HWLOC_OBJ_OSDEV_GPU.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I have enabled IO device discovery (HWLOC_TOPOLOGY_FLAG_IO_DEVICES) and
</span><br>
<span class="quotelev1">&gt;made sure that hwloc's configure properly recognised Cuda (4.1).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Here's what lstopo prints:
</span><br>
<span class="quotelev1">&gt;          &lt;object type=&quot;PCIDev&quot; os_index=&quot;536576&quot;
</span><br>
<span class="quotelev1">&gt;pci_busid=&quot;0000:83:00.0&quot; pci_type=&quot;0302 [10de:1091] [00de:0042] a1&quot;
</span><br>
<span class="quotelev1">&gt;pci_link_speed=&quot;0.000000&quot;&gt;
</span><br>
<span class="quotelev1">&gt;            &lt;info name=&quot;PCIVendor&quot; value=&quot;nVidia Corporation&quot;/&gt;
</span><br>
<span class="quotelev1">&gt;          &lt;/object&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Is this the expected behaviour? What can I do to make that GPU be
</span><br>
<span class="quotelev1">&gt;marked
</span><br>
<span class="quotelev1">&gt;as an OSDEV GPU object?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;WARNING / LEGAL TEXT: This message is intended only for the use of the
</span><br>
<span class="quotelev1">&gt;individual or entity to which it is addressed and may contain
</span><br>
<span class="quotelev1">&gt;information which is privileged, confidential, proprietary, or exempt
</span><br>
<span class="quotelev1">&gt;from disclosure under applicable law. If you are not the intended
</span><br>
<span class="quotelev1">&gt;recipient or the person responsible for delivering the message to the
</span><br>
<span class="quotelev1">&gt;intended recipient, you are strictly prohibited from disclosing,
</span><br>
<span class="quotelev1">&gt;distributing, copying, or in any way using this message. If you have
</span><br>
<span class="quotelev1">&gt;received this communication in error, please notify the sender and
</span><br>
<span class="quotelev1">&gt;destroy and delete any copies you may have received.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;<a href="http://www.bsc.es/disclaimer">http://www.bsc.es/disclaimer</a>
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt;hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0778/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0779.php">Samuel Thibault: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Previous message:</strong> <a href="0777.php">Guillermo Miranda: "[hwloc-users] GPU devices appear as PCI devices"</a>
<li><strong>In reply to:</strong> <a href="0777.php">Guillermo Miranda: "[hwloc-users] GPU devices appear as PCI devices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0785.php">Guillermo Miranda: "Re: [hwloc-users] GPU devices appear as PCI devices"</a>
<li><strong>Reply:</strong> <a href="0785.php">Guillermo Miranda: "Re: [hwloc-users] GPU devices appear as PCI devices"</a>
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
