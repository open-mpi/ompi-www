<?
$subject_val = "Re: [hwloc-devel] memory size attributes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 19 03:20:56 2010" -->
<!-- isoreceived="20100119082056" -->
<!-- sent="Tue, 19 Jan 2010 09:20:50 +0100" -->
<!-- isosent="20100119082050" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] memory size attributes" -->
<!-- id="4B556B62.4040106_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="58D723FE08DC6A4398E6596E38F3FA1705669E_at_XMB-RCD-205.cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] memory size attributes<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-19 03:20:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0616.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Previous message:</strong> <a href="0614.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1654)"</a>
<li><strong>In reply to:</strong> <a href="0611.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] memory size attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0617.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0617.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I propose the following changes to the object attributes. struct
<br>
hwloc_obj now contains a struct hwloc_memory pointer:
<br>
<p><p>struct hwloc_memory {
<br>
&nbsp;&nbsp;unsigned long total_kB; /* Total memory in this object and its children */
<br>
&nbsp;&nbsp;unsigned long local_kB; /* Local memory in this object */
<br>
&nbsp;&nbsp;struct hwloc_memory_pages {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unsigned long size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unsigned long count;
<br>
&nbsp;&nbsp;} * local_pages; /* 0-terminated array of pages or hugepages sizes and counts */
<br>
}
<br>
&nbsp;
<br>
<p>This obj-&gt;memory could be NULL except for Node, Machine and maybe
<br>
System. Cache attributes are still specifically in
<br>
obj-&gt;attr.cache.{size,depth} since they are different from the above
<br>
semantics.
<br>
<p><span class="quotelev1">&gt; I'd say it can be valuable to support key=value pairs on any object so
</span><br>
<span class="quotelev1">&gt; that future object types can be extensible (e.g., vendor pci devices).
</span><br>
<span class="quotelev1">&gt; But common stuff should be accessible as struct members so that
</span><br>
<span class="quotelev1">&gt; there's no string parsing needed (I'm no doubt just voicing what we
</span><br>
<span class="quotelev1">&gt; all already think). I.e., esoteric stuff can start as a key=value
</span><br>
<span class="quotelev1">&gt; strings but as they get mature / popular, they can &quot;graduate&quot; to
</span><br>
<span class="quotelev1">&gt; become a struct member.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>If we do the above, Node and System won't have any specific attribute
<br>
anymore. Machine will still have DMI infos. But I am not sure they are
<br>
common enough and deserve an actual struct field, they could stay in the
<br>
array of stringified info.
<br>
<p>Actually, maybe obj-&gt;name should go there as well before it mixes to
<br>
many meanings. It's mostly unused in trunk, except to store &quot;Kerrighed&quot;
<br>
since very recently. We talked about using it to store the hostname of
<br>
Machine objects. And the libpci branch uses it to store the PCI
<br>
vendor/model string and OS device names. Maybe all these shouldn't be in
<br>
obj-&gt;name and rather in the array of strings as OSName=Kerrighed,
<br>
Hostname=foobar, PCIVendor=foo, PCIModel=bar, OSDevice=eth2, ...
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0616.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Previous message:</strong> <a href="0614.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1654)"</a>
<li><strong>In reply to:</strong> <a href="0611.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] memory size attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0617.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0617.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
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
