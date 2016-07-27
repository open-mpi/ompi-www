<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3971";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 25 08:59:48 2011" -->
<!-- isoreceived="20111125135948" -->
<!-- sent="Fri, 25 Nov 2011 14:59:43 +0100" -->
<!-- isosent="20111125135943" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3971" -->
<!-- id="4ECF9F4F.5090008_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201111250756.pAP7ushG022343_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3971<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-25 08:59:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2547.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3971"</a>
<li><strong>Previous message:</strong> <a href="2545.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3971"</a>
<li><strong>Maybe in reply to:</strong> <a href="2544.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3971"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2547.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3971"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 25/11/2011 08:56, sthibaul_at_[hidden] a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; +static hwloc_obj_t hwloc_topology_get_pcidev(hwloc_topology_t topology, hwloc_obj_t parent, int domain, int bus, int dev)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +  hwloc_obj_t child;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  if (parent-&gt;type == HWLOC_OBJ_PCI_DEVICE
</span><br>
<span class="quotelev1">&gt; +      &amp;&amp; parent-&gt;attr-&gt;pcidev.domain == domain
</span><br>
<span class="quotelev1">&gt; +      &amp;&amp; parent-&gt;attr-&gt;pcidev.bus == bus
</span><br>
<span class="quotelev1">&gt; +      &amp;&amp; parent-&gt;attr-&gt;pcidev.dev == dev)
</span><br>
<span class="quotelev1">&gt; +    return parent;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  for (child = parent-&gt;first_child; child; child = child-&gt;next_sibling) {
</span><br>
<span class="quotelev1">&gt; +    hwloc_obj_t found;
</span><br>
<span class="quotelev1">&gt; +    found = hwloc_topology_get_pcidev(topology, child, domain, bus, dev);
</span><br>
<span class="quotelev1">&gt; +    if (found)
</span><br>
<span class="quotelev1">&gt; +      return found;
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +    pci_card = hwloc_topology_get_pcidev(topology, topology-&gt;levels[0][0], domain, bus, dev);
</span><br>
<span class="quotelev1">&gt; +    if (!pci_card)
</span><br>
<span class="quotelev1">&gt; +      return;
</span><br>
<p>hwloc_get_pcidev_by_busid(topology, domain, bus, dev, 0) should work
<br>
here (hwloc/helper.h). Unless you have some complex plans with the
<br>
&quot;parent&quot; parameter?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2547.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3971"</a>
<li><strong>Previous message:</strong> <a href="2545.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3971"</a>
<li><strong>Maybe in reply to:</strong> <a href="2544.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3971"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2547.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3971"</a>
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
