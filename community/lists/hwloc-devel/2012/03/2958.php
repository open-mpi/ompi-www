<?
$subject_val = "Re: [hwloc-devel] PCI device name question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 17:05:16 2012" -->
<!-- isoreceived="20120320210516" -->
<!-- sent="Tue, 20 Mar 2012 22:05:11 +0100" -->
<!-- isosent="20120320210511" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PCI device name question" -->
<!-- id="4F68F107.3080202_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F45D4A7A-1167-4FE1-829E-28703A65C6F6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] PCI device name question<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-20 17:05:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2959.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Previous message:</strong> <a href="2957.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>In reply to:</strong> <a href="2957.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2959.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 20/03/2012 21:48, Jeffrey Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Mar 20, 2012, at 3:45 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That looks good to me, as long as starting port numbers to 1 for
</span><br>
<span class="quotelev2">&gt;&gt; non-IB/OFED is OK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm.  Not sure about that.  I always thought it was strange that IB devices started with port 1.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are *we* (hwloc) supplying the port number, or are you getting it from /sys somewhere?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (/me reads the patch and ibdev2netdev...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, I see -- we're effectively doing the same thing as the ibdev2netdev script:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; port=$(cat /sys/class/net/$eth/dev_id)
</span><br>
<span class="quotelev1">&gt; port=$(printf &quot;%d&quot; $port)
</span><br>
<span class="quotelev1">&gt; port=$(( port + 1 ))
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hrm.  I don't know if the +1 is a good assumption to make in general.
</span><br>
<p>Yeah the kernel code tells me that this +1 is really IB specific. dev_id
<br>
was initially added for shared NIC, each client gets a different dev_id
<br>
(starting at 0). It was later used by IB guys to identify ports 1 and 2
<br>
(each port gets a netdevice and they all share the same hardware device,
<br>
so they used dev_id as well).
<br>
<p><p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2959.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Previous message:</strong> <a href="2957.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>In reply to:</strong> <a href="2957.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2959.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
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
