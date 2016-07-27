<?
$subject_val = "[hwloc-devel] Merging the PCI branch?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 28 17:26:28 2011" -->
<!-- isoreceived="20110328212628" -->
<!-- sent="Mon, 28 Mar 2011 16:26:17 -0500" -->
<!-- isosent="20110328212617" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] Merging the PCI branch?" -->
<!-- id="4D90FCF9.6080500_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110314101946.GG6903_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] Merging the PCI branch?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-28 17:26:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2071.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3327)"</a>
<li><strong>Previous message:</strong> <a href="2069.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3316)"</a>
<li><strong>In reply to:</strong> <a href="2056.php">Samuel Thibault: "Re: [hwloc-devel] restrict and PCI branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2078.php">Jeff Squyres: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>Reply:</strong> <a href="2078.php">Jeff Squyres: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>Maybe reply:</strong> <a href="2079.php">Samuel Thibault: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/04/2101.php">Samuel Thibault: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 14/03/2011 05:19, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; I was wondering about merging the I/O branch:
</span><br>
<span class="quotelev1">&gt; - people have not expressed what they want so much,
</span><br>
<span class="quotelev1">&gt; - but people will probably not until it's exposed more,
</span><br>
<span class="quotelev1">&gt; - it's really a useful thing, and works fine in our tests,
</span><br>
<span class="quotelev1">&gt; - I'd like to see it out :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe the key issue could have been that applications may not expect
</span><br>
<span class="quotelev1">&gt; to have objects with an empty cpuset, but since by default I/O objects
</span><br>
<span class="quotelev1">&gt; are not added this is not an issue.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I worked on preparing the libpci branch for possible merge. Here are the
<br>
changes in the API for wider review.
<br>
<p>Brice
<br>
<p><p><p>First, to avoid breaking existing applications, I/O devices are not
<br>
added to the topology unless a new topology flag is set. Only lstopo
<br>
enables PCI devices by default.
<br>
<p>We have 3 new object types:
<br>
* PCI devices, with usual PCI bus IDs and link speed attributes
<br>
* Bridges, with attributes for both sides, either host-&gt;pci or pci-&gt;pci
<br>
bridges for now.
<br>
* OS devices, which tell you which &quot;ethX&quot; interface, &quot;sdX&quot; block device,
<br>
&quot;mlx4_0&quot; IB NIC or &quot;dma0chan1&quot; DMA engine channel corresponds to a PCI
<br>
device.
<br>
<p>As shown on the attached picture, the usual I/O subtree is, from top to
<br>
bottom:
<br>
* some hostbridge object are attached to some &quot;normal&quot; object (machine
<br>
or node)
<br>
* a tree of bridges may be behind the hostbridge
<br>
* pci devices are attached behind bridges
<br>
* some pci devices contain some OS device.
<br>
<p>These new objects are special:
<br>
* They have no cpusets
<br>
* They may appear at random places in the topology, with very different
<br>
numbers of bridges above them. So we don't associate a &quot;level&quot; or a
<br>
&quot;depth&quot; to these new types. If you ever need to enumerate them, use the
<br>
new get_next_osdev() or get_next_pcidev() functions. This may need a bit
<br>
more of documentation.
<br>
<p>libpci is needed to make this work. And only Linux gives you OS devices
<br>
for now (we use sysfs to translate between pci devs and os devs).
<br>
<p>I also added some GPU-related OS devices by looking at DRM objects
<br>
(card0 and controlD64 in the attached picture). This only works with
<br>
free graphics drivers. Ideally we would have some Cuda or OpenCL device
<br>
ID there, but we'll likely need some specific plugins to do so. I don't
<br>
know if the current DRM objects are useful, we'll be able to remove them
<br>
later if needed.
<br>
<p>--- a/include/hwloc.h
<br>
+++ b/include/hwloc.h
<br>
@@ -191,6 +191,17 @@ typedef enum {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Objects without particular meaning, that can e.g. be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* added by the application for its own use.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
+
<br>
+  HWLOC_OBJ_BRIDGE,	/**&lt; \brief Bridge.
<br>
+			  * Any bridge that connects the host or an I/O bus,
<br>
+			  * to another I/O bus.
<br>
+			  */
<br>
+  HWLOC_OBJ_PCI_DEVICE,	/**&lt; \brief PCI device.
<br>
+			  */
<br>
+
<br>
+  HWLOC_OBJ_OS_DEVICE,	/**&lt; \brief Operating system device.
<br>
+			 */
<br>
+
<br>
&nbsp;&nbsp;&nbsp;HWLOC_OBJ_MAX         /**&lt; \private Sentinel value */
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* ***************************************************************
<br>
@@ -226,6 +237,20 @@ enum hwloc_compare_types_e {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_TYPE_UNORDERED = INT_MAX	/**&lt; \brief Value returned by hwloc_compare_types when types can not be compared. \hideinitializer */
<br>
&nbsp;};
<br>
&nbsp;
<br>
+
<br>
+typedef enum hwloc_obj_bridge_type_e {
<br>
+  HWLOC_OBJ_BRIDGE_HOST,	/**&lt; \brief Host-side of a bridge, only possible upstream. */
<br>
+  HWLOC_OBJ_BRIDGE_PCI		/**&lt; \brief PCI-side of a bridge. */
<br>
+} hwloc_obj_bridge_type_t;
<br>
+
<br>
+typedef enum hwloc_obj_osdev_type_e {
<br>
+  HWLOC_OBJ_OSDEV_BLOCK,	/**&lt; \brief Operating system block device. */
<br>
+  HWLOC_OBJ_OSDEV_GPU,		/**&lt; \brief Operating system GPU device. */
<br>
+  HWLOC_OBJ_OSDEV_NETWORK,	/**&lt; \brief Operating system network device. */
<br>
+  HWLOC_OBJ_OSDEV_INFINIBAND,	/**&lt; \brief Operating system infiniband device. */
<br>
+  HWLOC_OBJ_OSDEV_DMA		/**&lt; \brief Operating system dma device. */
<br>
+} hwloc_obj_osdev_type_t;
<br>
+
<br>
&nbsp;/** @} */
<br>
&nbsp;
<br>
<p>@@ -403,6 +428,34 @@ union hwloc_obj_attr_u {
<br>
&nbsp;&nbsp;&nbsp;struct hwloc_group_attr_s {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned depth;			  /**&lt; \brief Depth of group object */
<br>
&nbsp;&nbsp;&nbsp;} group;
<br>
+  /** \brief PCI Device specific Object Attributes */
<br>
+  struct hwloc_pcidev_attr_u {
<br>
+    unsigned short domain;
<br>
+    unsigned char bus, dev, func;
<br>
+    unsigned short class_id;
<br>
+    unsigned short vendor_id, device_id, subvendor_id, subdevice_id;
<br>
+    unsigned char revision;
<br>
+    float linkspeed; /* in GB/s */
<br>
+  } pcidev;
<br>
+  /** \brief Bridge specific Object Attribues */
<br>
+  struct hwloc_bridge_attr_u {
<br>
+    union hwloc_bridge_upstream_attr_u {
<br>
+      struct hwloc_pcidev_attr_u pci;
<br>
+    } upstream;
<br>
+    hwloc_obj_bridge_type_t upstream_type;
<br>
+    union hwloc_bridge_downstream_attr_u {
<br>
+      struct hwloc_bridge_downstream_pci_attr_u {
<br>
+	unsigned short domain;
<br>
+	unsigned char secondary_bus, subordinate_bus;
<br>
+      } pci;
<br>
+    } downstream;
<br>
+    hwloc_obj_bridge_type_t downstream_type;
<br>
+    unsigned depth;
<br>
+  } bridge;
<br>
+  /** \brief OS Device specific Object Attributes */
<br>
+  struct hwloc_osdev_attr_u {
<br>
+    hwloc_obj_osdev_type_t type;
<br>
+  } osdev;
<br>
&nbsp;};
<br>
&nbsp;
<br>
&nbsp;/** \brief Distances between objects
<br>
&nbsp;
<br>
&nbsp;/** \brief Restrict the topology to the given CPU set.
<br>
@@ -1675,6 +1770,27 @@ HWLOC_DECLSPEC int hwloc_free(hwloc_topology_t topology, void *addr, size_t len)
<br>
&nbsp;/** @} */
<br>
&nbsp;
<br>
&nbsp;
<br>
+
<br>
+/** \defgroup hwlocality_iodev Basic I/O Device Management
<br>
+ * @{
<br>
+ */
<br>
+
<br>
+/** \brief Get the next PCI device in the system.
<br>
+ *
<br>
+ * \return the first PCI device if \p prev is \c NULL.
<br>
+ */
<br>
+HWLOC_DECLSPEC struct hwloc_obj * hwloc_get_next_pcidev(struct hwloc_topology *topology, struct hwloc_obj *prev);
<br>
+
<br>
+/** \brief Get the next OS device in the system.
<br>
+ *
<br>
+ * \return the first OS device if \p prev is \c NULL.
<br>
+ */
<br>
+HWLOC_DECLSPEC struct hwloc_obj * hwloc_get_next_osdev(struct hwloc_topology *topology, struct hwloc_obj *prev);
<br>
+
<br>
+/** @} */
<br>
+
<br>
+
<br>
+
<br>
&nbsp;#ifdef __cplusplus
<br>
&nbsp;} /* extern &quot;C&quot; */
<br>
&nbsp;#endif
<br>
<p><p><p>
<br><hr>
<img src="http://www.open-mpi.org/community/lists/hwloc-devel/att-2070/pci.png" alt="pci.png">
<!-- attachment="pci.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2071.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3327)"</a>
<li><strong>Previous message:</strong> <a href="2069.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3316)"</a>
<li><strong>In reply to:</strong> <a href="2056.php">Samuel Thibault: "Re: [hwloc-devel] restrict and PCI branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2078.php">Jeff Squyres: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>Reply:</strong> <a href="2078.php">Jeff Squyres: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>Maybe reply:</strong> <a href="2079.php">Samuel Thibault: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/04/2101.php">Samuel Thibault: "Re: [hwloc-devel] Merging the PCI branch?"</a>
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
