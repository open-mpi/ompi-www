<?
$subject_val = "Re: [hwloc-devel] understanding PCI device to NUMA node connection";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 28 17:16:19 2011" -->
<!-- isoreceived="20111128221619" -->
<!-- sent="Mon, 28 Nov 2011 23:16:13 +0100" -->
<!-- isosent="20111128221613" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] understanding PCI device to NUMA node connection" -->
<!-- id="4ED4082D.8040507_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4ED40639.6010304_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] understanding PCI device to NUMA node connection<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-28 17:16:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2558.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>Previous message:</strong> <a href="2556.php">Brice Goglin: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>In reply to:</strong> <a href="2555.php">Guy Streeter: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/11/2011 23:07, Guy Streeter a &#233;crit :
<br>
<span class="quotelev1">&gt; On 11/28/2011 03:45 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; Current Intel platforms have 2 QPI links going to I/O hubs. Most servers
</span><br>
<span class="quotelev2">&gt;&gt; with many sockets (4 or more) thus have each I/O hub connected to only 2
</span><br>
<span class="quotelev2">&gt;&gt; processors directly, so their distance is &quot;equal&quot; as you say.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, some BIOS report invalid I/O locality information. I've never
</span><br>
<span class="quotelev2">&gt;&gt; seen anything correct on any server like the above actually.
</span><br>
<span class="quotelev1">&gt; If the BIOS correctly reported the locality, how would the devices show up in
</span><br>
<span class="quotelev1">&gt; hwloc-info and lstopo? Would there be a Group containing the 2 NUMA Nodes and
</span><br>
<span class="quotelev1">&gt; the PCI devices?
</span><br>
<p>Yes
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2558.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>Previous message:</strong> <a href="2556.php">Brice Goglin: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>In reply to:</strong> <a href="2555.php">Guy Streeter: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
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
