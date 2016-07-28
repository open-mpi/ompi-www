<?
$subject_val = "Re: [hwloc-users] PCI devices in the topology";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 10 15:48:27 2012" -->
<!-- isoreceived="20120210204827" -->
<!-- sent="Fri, 10 Feb 2012 21:48:22 +0100" -->
<!-- isosent="20120210204822" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] PCI devices in the topology" -->
<!-- id="4F358296.5090306_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A35AA538-2116-4D97-A962-2604CC843E91_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] PCI devices in the topology<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-10 15:48:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0548.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.4 released"</a>
<li><strong>Previous message:</strong> <a href="0546.php">Jeff Squyres: "Re: [hwloc-users] PCI devices in the topology"</a>
<li><strong>In reply to:</strong> <a href="0546.php">Jeff Squyres: "Re: [hwloc-users] PCI devices in the topology"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 10/02/2012 21:46, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Feb 10, 2012, at 3:37 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All objects of the same type are *always* at the same depth (for caches
</span><br>
<span class="quotelev2">&gt;&gt; and groups, replace &quot;same type&quot; with &quot;same type and same level&quot; so that
</span><br>
<span class="quotelev2">&gt;&gt; L1 is not at the same depth as L3). That works even if your topology is
</span><br>
<span class="quotelev2">&gt;&gt; not symmetric at all, because a children can have a depth that is
</span><br>
<span class="quotelev2">&gt;&gt; different from its parent depth plus one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PCI objects are not placed in levels are other regular objects do. There
</span><br>
<span class="quotelev2">&gt;&gt; are in specific list. However, to make the API more uniform, we have
</span><br>
<span class="quotelev2">&gt;&gt; some fake depth values that let us identify and walk in the list of
</span><br>
<span class="quotelev2">&gt;&gt; bridges, PCI devices or OS devices.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the above case, the NUMA node P#0 should be at depth 1, it has two
</span><br>
<span class="quotelev2">&gt;&gt; children. The first one is Socket P#1 at depth 2. The second one is a
</span><br>
<span class="quotelev2">&gt;&gt; hostbridge at depth -3 (fake depth for bridges iirc).
</span><br>
<span class="quotelev1">&gt; Ok.  But in terms of walking down the hwloc tree, PCI devices will show up in someone's children[] array, right?  I.e., they're not in a separate list somewhere, right?
</span><br>
<p>Yes, they are children as any other object. There are usually at the
<br>
very end of the children array (because objects with no cpusets go there).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0548.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.4 released"</a>
<li><strong>Previous message:</strong> <a href="0546.php">Jeff Squyres: "Re: [hwloc-users] PCI devices in the topology"</a>
<li><strong>In reply to:</strong> <a href="0546.php">Jeff Squyres: "Re: [hwloc-users] PCI devices in the topology"</a>
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
