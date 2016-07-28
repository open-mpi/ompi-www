<?
$subject_val = "Re: [hwloc-devel] Merging the PCI branch?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 31 12:06:39 2011" -->
<!-- isoreceived="20110331160639" -->
<!-- sent="Thu, 31 Mar 2011 12:06:33 -0400" -->
<!-- isosent="20110331160633" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Merging the PCI branch?" -->
<!-- id="4D82FB4A-FC02-4406-8199-6D325F06C83C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D90FCF9.6080500_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Merging the PCI branch?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-31 12:06:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2079.php">Samuel Thibault: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>Previous message:</strong> <a href="2077.php">Christopher Samuel: "Re: [hwloc-devel] upcoming releases"</a>
<li><strong>In reply to:</strong> <a href="2070.php">Brice Goglin: "[hwloc-devel] Merging the PCI branch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2082.php">Brice Goglin: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>Reply:</strong> <a href="2082.php">Brice Goglin: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/04/2099.php">Brice Goglin: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 28, 2011, at 5:26 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; First, to avoid breaking existing applications, I/O devices are not
</span><br>
<span class="quotelev1">&gt; added to the topology unless a new topology flag is set. Only lstopo
</span><br>
<span class="quotelev1">&gt; enables PCI devices by default.
</span><br>
<p>Good.  Although I think we should plan to make this the default in some future version (i.e., say that in the docs).
<br>
<p><span class="quotelev1">&gt; We have 3 new object types:
</span><br>
<span class="quotelev1">&gt; * PCI devices, with usual PCI bus IDs and link speed attributes
</span><br>
<span class="quotelev1">&gt; * Bridges, with attributes for both sides, either host-&gt;pci or pci-&gt;pci
</span><br>
<span class="quotelev1">&gt; bridges for now.
</span><br>
<span class="quotelev1">&gt; * OS devices, which tell you which &quot;ethX&quot; interface, &quot;sdX&quot; block device,
</span><br>
<span class="quotelev1">&gt; &quot;mlx4_0&quot; IB NIC or &quot;dma0chan1&quot; DMA engine channel corresponds to a PCI
</span><br>
<span class="quotelev1">&gt; device.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As shown on the attached picture, the usual I/O subtree is, from top to
</span><br>
<span class="quotelev1">&gt; bottom:
</span><br>
<span class="quotelev1">&gt; * some hostbridge object are attached to some &quot;normal&quot; object (machine
</span><br>
<span class="quotelev1">&gt; or node)
</span><br>
<span class="quotelev1">&gt; * a tree of bridges may be behind the hostbridge
</span><br>
<span class="quotelev1">&gt; * pci devices are attached behind bridges
</span><br>
<span class="quotelev1">&gt; * some pci devices contain some OS device.
</span><br>
<p>How / where do these new devices show up in the tree that is returned from hwloc?  For example, are PCI busses children of NUMA nodes, or siblings?
<br>
<p><span class="quotelev1">&gt; These new objects are special:
</span><br>
<span class="quotelev1">&gt; * They have no cpusets
</span><br>
<span class="quotelev1">&gt; * They may appear at random places in the topology, with very different
</span><br>
<span class="quotelev1">&gt; numbers of bridges above them. So we don't associate a &quot;level&quot; or a
</span><br>
<span class="quotelev1">&gt; &quot;depth&quot; to these new types. If you ever need to enumerate them, use the
</span><br>
<span class="quotelev1">&gt; new get_next_osdev() or get_next_pcidev() functions. This may need a bit
</span><br>
<span class="quotelev1">&gt; more of documentation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libpci is needed to make this work. And only Linux gives you OS devices
</span><br>
<span class="quotelev1">&gt; for now (we use sysfs to translate between pci devs and os devs).
</span><br>
<p>Is libpci available on all platforms?  Or is it only needed on Linux?
<br>
<p>(do you need any assistance with the configury?)
<br>
<p><span class="quotelev1">&gt; I also added some GPU-related OS devices by looking at DRM objects
</span><br>
<span class="quotelev1">&gt; (card0 and controlD64 in the attached picture). This only works with
</span><br>
<span class="quotelev1">&gt; free graphics drivers. Ideally we would have some Cuda or OpenCL device
</span><br>
<span class="quotelev1">&gt; ID there, but we'll likely need some specific plugins to do so. I don't
</span><br>
<span class="quotelev1">&gt; know if the current DRM objects are useful, we'll be able to remove them
</span><br>
<span class="quotelev1">&gt; later if needed.
</span><br>
<p>We should ping Intel, NVIDIA, ... others for assistance with this.
<br>
<p><span class="quotelev1">&gt; --- a/include/hwloc.h
</span><br>
<span class="quotelev1">&gt; +++ b/include/hwloc.h
</span><br>
<span class="quotelev1">&gt; @@ -191,6 +191,17 @@ typedef enum {
</span><br>
<span class="quotelev1">&gt; 			  * Objects without particular meaning, that can e.g. be
</span><br>
<span class="quotelev1">&gt; 			  * added by the application for its own use.
</span><br>
<span class="quotelev1">&gt; 			  */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  HWLOC_OBJ_BRIDGE,	/**&lt; \brief Bridge.
</span><br>
<span class="quotelev1">&gt; +			  * Any bridge that connects the host or an I/O bus,
</span><br>
<span class="quotelev1">&gt; +			  * to another I/O bus.
</span><br>
<span class="quotelev1">&gt; +			  */
</span><br>
<span class="quotelev1">&gt; +  HWLOC_OBJ_PCI_DEVICE,	/**&lt; \brief PCI device.
</span><br>
<span class="quotelev1">&gt; +			  */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  HWLOC_OBJ_OS_DEVICE,	/**&lt; \brief Operating system device.
</span><br>
<span class="quotelev1">&gt; +			 */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;   HWLOC_OBJ_MAX         /**&lt; \private Sentinel value */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* ***************************************************************
</span><br>
<span class="quotelev1">&gt; @@ -226,6 +237,20 @@ enum hwloc_compare_types_e {
</span><br>
<span class="quotelev1">&gt;     HWLOC_TYPE_UNORDERED = INT_MAX	/**&lt; \brief Value returned by hwloc_compare_types when types can not be compared. \hideinitializer */
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +typedef enum hwloc_obj_bridge_type_e {
</span><br>
<span class="quotelev1">&gt; +  HWLOC_OBJ_BRIDGE_HOST,	/**&lt; \brief Host-side of a bridge, only possible upstream. */
</span><br>
<span class="quotelev1">&gt; +  HWLOC_OBJ_BRIDGE_PCI		/**&lt; \brief PCI-side of a bridge. */
</span><br>
<span class="quotelev1">&gt; +} hwloc_obj_bridge_type_t;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +typedef enum hwloc_obj_osdev_type_e {
</span><br>
<span class="quotelev1">&gt; +  HWLOC_OBJ_OSDEV_BLOCK,	/**&lt; \brief Operating system block device. */
</span><br>
<span class="quotelev1">&gt; +  HWLOC_OBJ_OSDEV_GPU,		/**&lt; \brief Operating system GPU device. */
</span><br>
<span class="quotelev1">&gt; +  HWLOC_OBJ_OSDEV_NETWORK,	/**&lt; \brief Operating system network device. */
</span><br>
<span class="quotelev1">&gt; +  HWLOC_OBJ_OSDEV_INFINIBAND,	/**&lt; \brief Operating system infiniband device. */
</span><br>
<span class="quotelev1">&gt; +  HWLOC_OBJ_OSDEV_DMA		/**&lt; \brief Operating system dma device. */
</span><br>
<span class="quotelev1">&gt; +} hwloc_obj_osdev_type_t;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; /** @} */
</span><br>
<p>Do iWARP and RoCE devices show up, too?  I.e., should it be &quot;INFINIBAND&quot; or &quot;OPENFABRICS&quot;?
<br>
<p><span class="quotelev1">&gt; @@ -403,6 +428,34 @@ union hwloc_obj_attr_u {
</span><br>
<span class="quotelev1">&gt;   struct hwloc_group_attr_s {
</span><br>
<span class="quotelev1">&gt;     unsigned depth;			  /**&lt; \brief Depth of group object */
</span><br>
<span class="quotelev1">&gt;   } group;
</span><br>
<span class="quotelev1">&gt; +  /** \brief PCI Device specific Object Attributes */
</span><br>
<span class="quotelev1">&gt; +  struct hwloc_pcidev_attr_u {
</span><br>
<span class="quotelev1">&gt; +    unsigned short domain;
</span><br>
<span class="quotelev1">&gt; +    unsigned char bus, dev, func;
</span><br>
<span class="quotelev1">&gt; +    unsigned short class_id;
</span><br>
<span class="quotelev1">&gt; +    unsigned short vendor_id, device_id, subvendor_id, subdevice_id;
</span><br>
<span class="quotelev1">&gt; +    unsigned char revision;
</span><br>
<span class="quotelev1">&gt; +    float linkspeed; /* in GB/s */
</span><br>
<span class="quotelev1">&gt; +  } pcidev;
</span><br>
<span class="quotelev1">&gt; +  /** \brief Bridge specific Object Attribues */
</span><br>
<span class="quotelev1">&gt; +  struct hwloc_bridge_attr_u {
</span><br>
<span class="quotelev1">&gt; +    union hwloc_bridge_upstream_attr_u {
</span><br>
<span class="quotelev1">&gt; +      struct hwloc_pcidev_attr_u pci;
</span><br>
<span class="quotelev1">&gt; +    } upstream;
</span><br>
<span class="quotelev1">&gt; +    hwloc_obj_bridge_type_t upstream_type;
</span><br>
<span class="quotelev1">&gt; +    union hwloc_bridge_downstream_attr_u {
</span><br>
<span class="quotelev1">&gt; +      struct hwloc_bridge_downstream_pci_attr_u {
</span><br>
<span class="quotelev1">&gt; +	unsigned short domain;
</span><br>
<span class="quotelev1">&gt; +	unsigned char secondary_bus, subordinate_bus;
</span><br>
<span class="quotelev1">&gt; +      } pci;
</span><br>
<span class="quotelev1">&gt; +    } downstream;
</span><br>
<span class="quotelev1">&gt; +    hwloc_obj_bridge_type_t downstream_type;
</span><br>
<span class="quotelev1">&gt; +    unsigned depth;
</span><br>
<span class="quotelev1">&gt; +  } bridge;
</span><br>
<span class="quotelev1">&gt; +  /** \brief OS Device specific Object Attributes */
</span><br>
<span class="quotelev1">&gt; +  struct hwloc_osdev_attr_u {
</span><br>
<span class="quotelev1">&gt; +    hwloc_obj_osdev_type_t type;
</span><br>
<span class="quotelev1">&gt; +  } osdev;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /** \brief Distances between objects
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /** \brief Restrict the topology to the given CPU set.
</span><br>
<span class="quotelev1">&gt; @@ -1675,6 +1770,27 @@ HWLOC_DECLSPEC int hwloc_free(hwloc_topology_t topology, void *addr, size_t len)
</span><br>
<span class="quotelev1">&gt; /** @} */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/** \defgroup hwlocality_iodev Basic I/O Device Management
</span><br>
<span class="quotelev1">&gt; + * @{
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/** \brief Get the next PCI device in the system.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * \return the first PCI device if \p prev is \c NULL.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +HWLOC_DECLSPEC struct hwloc_obj * hwloc_get_next_pcidev(struct hwloc_topology *topology, struct hwloc_obj *prev);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/** \brief Get the next OS device in the system.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * \return the first OS device if \p prev is \c NULL.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +HWLOC_DECLSPEC struct hwloc_obj * hwloc_get_next_osdev(struct hwloc_topology *topology, struct hwloc_obj *prev);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/** @} */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; #ifdef __cplusplus
</span><br>
<span class="quotelev1">&gt; } /* extern &quot;C&quot; */
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;pci.png&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="2079.php">Samuel Thibault: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>Previous message:</strong> <a href="2077.php">Christopher Samuel: "Re: [hwloc-devel] upcoming releases"</a>
<li><strong>In reply to:</strong> <a href="2070.php">Brice Goglin: "[hwloc-devel] Merging the PCI branch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2082.php">Brice Goglin: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>Reply:</strong> <a href="2082.php">Brice Goglin: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/04/2099.php">Brice Goglin: "Re: [hwloc-devel] Merging the PCI branch?"</a>
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
