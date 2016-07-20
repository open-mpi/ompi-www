<?
$subject_val = "Re: [hwloc-users] PCI devices in the topology";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 10 15:47:03 2012" -->
<!-- isoreceived="20120210204703" -->
<!-- sent="Fri, 10 Feb 2012 15:46:56 -0500" -->
<!-- isosent="20120210204656" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] PCI devices in the topology" -->
<!-- id="A35AA538-2116-4D97-A962-2604CC843E91_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F358019.4020605_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-10 15:46:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0547.php">Brice Goglin: "Re: [hwloc-users] PCI devices in the topology"</a>
<li><strong>Previous message:</strong> <a href="0545.php">Brice Goglin: "Re: [hwloc-users] PCI devices in the topology"</a>
<li><strong>In reply to:</strong> <a href="0545.php">Brice Goglin: "Re: [hwloc-users] PCI devices in the topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0547.php">Brice Goglin: "Re: [hwloc-users] PCI devices in the topology"</a>
<li><strong>Reply:</strong> <a href="0547.php">Brice Goglin: "Re: [hwloc-users] PCI devices in the topology"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 10, 2012, at 3:37 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; All objects of the same type are *always* at the same depth (for caches
</span><br>
<span class="quotelev1">&gt; and groups, replace &quot;same type&quot; with &quot;same type and same level&quot; so that
</span><br>
<span class="quotelev1">&gt; L1 is not at the same depth as L3). That works even if your topology is
</span><br>
<span class="quotelev1">&gt; not symmetric at all, because a children can have a depth that is
</span><br>
<span class="quotelev1">&gt; different from its parent depth plus one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PCI objects are not placed in levels are other regular objects do. There
</span><br>
<span class="quotelev1">&gt; are in specific list. However, to make the API more uniform, we have
</span><br>
<span class="quotelev1">&gt; some fake depth values that let us identify and walk in the list of
</span><br>
<span class="quotelev1">&gt; bridges, PCI devices or OS devices.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the above case, the NUMA node P#0 should be at depth 1, it has two
</span><br>
<span class="quotelev1">&gt; children. The first one is Socket P#1 at depth 2. The second one is a
</span><br>
<span class="quotelev1">&gt; hostbridge at depth -3 (fake depth for bridges iirc).
</span><br>
<p>Ok.  But in terms of walking down the hwloc tree, PCI devices will show up in someone's children[] array, right?  I.e., they're not in a separate list somewhere, right?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0547.php">Brice Goglin: "Re: [hwloc-users] PCI devices in the topology"</a>
<li><strong>Previous message:</strong> <a href="0545.php">Brice Goglin: "Re: [hwloc-users] PCI devices in the topology"</a>
<li><strong>In reply to:</strong> <a href="0545.php">Brice Goglin: "Re: [hwloc-users] PCI devices in the topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0547.php">Brice Goglin: "Re: [hwloc-users] PCI devices in the topology"</a>
<li><strong>Reply:</strong> <a href="0547.php">Brice Goglin: "Re: [hwloc-users] PCI devices in the topology"</a>
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
