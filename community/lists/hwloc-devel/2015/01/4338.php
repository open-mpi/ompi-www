<?
$subject_val = "Re: [hwloc-devel] Git: open-mpi/hwloc branch master updated.	85ea6e4acc456d398fa995d671960ccc0dff0d42";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 10 10:24:48 2015" -->
<!-- isoreceived="20150110152448" -->
<!-- sent="Sat, 10 Jan 2015 15:24:45 +0000" -->
<!-- isosent="20150110152445" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Git: open-mpi/hwloc branch master updated.	85ea6e4acc456d398fa995d671960ccc0dff0d42" -->
<!-- id="A24C8E9C-1500-43C3-A728-B10E2D6078C9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150110104246.722A326023F_at_lion.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Git: open-mpi/hwloc branch master updated.	85ea6e4acc456d398fa995d671960ccc0dff0d42<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-10 10:24:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4339.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-333-g85ea6e4)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/12/4337.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.10.0-37-g40c723e)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, here's the difference between a root and non-root run on a system with a Cisco VIC:
<br>
<p>Root XML contains additional PCI data:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIProductSerial&quot; value=&quot;FCH1623V1W4&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIProductUUID&quot; value=&quot;2BF24625-07B1-4990-B642-1F4C70056CC7&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardSerial&quot; value=&quot;FCH16207CF1&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisSerial&quot; value=&quot;FCH1623V1W4&quot;/&gt;
<br>
<p>And the usNIC VFs have a link speed:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;17&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 1b&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[02-03]&quot; pci_busid=&quot;0000:00:01.1&quot; pci_type=&quot;0604 [8086:3c03] [0000:0000] 07&quot; pci_link_speed=&quot;2.000000&quot;&gt;
<br>
<p>(the non-root run has &quot;0.0&quot; for the link speed:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;17&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 1b&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[02-03]&quot; pci_busid=&quot;0000:00:01.1&quot; pci_type=&quot;0604 [8086:3c03] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
<p><p><p><span class="quotelev1">&gt; On Jan 10, 2015, at 5:42 AM, gitdub_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev1">&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev1">&gt; the project &quot;open-mpi/hwloc&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The branch, master has been updated
</span><br>
<span class="quotelev1">&gt;       via  85ea6e4acc456d398fa995d671960ccc0dff0d42 (commit)
</span><br>
<span class="quotelev1">&gt;      from  d7cf79327ae6b87ac451b95be88380d0266bbc4a (commit)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev1">&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev1">&gt; revisions in full, below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/hwloc/commit/85ea6e4acc456d398fa995d671960ccc0dff0d42">https://github.com/open-mpi/hwloc/commit/85ea6e4acc456d398fa995d671960ccc0dff0d42</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit 85ea6e4acc456d398fa995d671960ccc0dff0d42
</span><br>
<span class="quotelev1">&gt; Author: Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Sat Jan 10 10:56:25 2015 +0100
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    pci: fix SR-IOV VF vendor/device names
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Commit 626129d2818693e62b83c1cfa2ba6e058e5bed66 fixed the hwloc
</span><br>
<span class="quotelev1">&gt;    device/vendor numbers obtained from libpciaccess.
</span><br>
<span class="quotelev1">&gt;    But the corresponding names are still retrieved from pciaccess numbers,
</span><br>
<span class="quotelev1">&gt;    so fix these numbers inside pciaccess structures before retrieving the names.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/hwloc/topology-pci.c b/hwloc/topology-pci.c
</span><br>
<span class="quotelev1">&gt; index c069d86..3a3ad6b 100644
</span><br>
<span class="quotelev1">&gt; --- a/hwloc/topology-pci.c
</span><br>
<span class="quotelev1">&gt; +++ b/hwloc/topology-pci.c
</span><br>
<span class="quotelev1">&gt; @@ -135,22 +135,7 @@ hwloc_look_pci(struct hwloc_backend *backend)
</span><br>
<span class="quotelev1">&gt;     /* try to read the device_class */
</span><br>
<span class="quotelev1">&gt;     device_class = pcidev-&gt;device_class &gt;&gt; 8;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    /* might be useful for debugging (note that domain might be truncated) */
</span><br>
<span class="quotelev1">&gt; -    os_index = (domain &lt;&lt; 20) + (pcidev-&gt;bus &lt;&lt; 12) + (pcidev-&gt;dev &lt;&lt; 4) + pcidev-&gt;func;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    obj = hwloc_alloc_setup_object(HWLOC_OBJ_PCI_DEVICE, os_index);
</span><br>
<span class="quotelev1">&gt; -    obj-&gt;attr-&gt;pcidev.domain = domain;
</span><br>
<span class="quotelev1">&gt; -    obj-&gt;attr-&gt;pcidev.bus = pcidev-&gt;bus;
</span><br>
<span class="quotelev1">&gt; -    obj-&gt;attr-&gt;pcidev.dev = pcidev-&gt;dev;
</span><br>
<span class="quotelev1">&gt; -    obj-&gt;attr-&gt;pcidev.func = pcidev-&gt;func;
</span><br>
<span class="quotelev1">&gt; -    obj-&gt;attr-&gt;pcidev.vendor_id = pcidev-&gt;vendor_id;
</span><br>
<span class="quotelev1">&gt; -    obj-&gt;attr-&gt;pcidev.device_id = pcidev-&gt;device_id;
</span><br>
<span class="quotelev1">&gt; -    obj-&gt;attr-&gt;pcidev.class_id = device_class;
</span><br>
<span class="quotelev1">&gt; -    obj-&gt;attr-&gt;pcidev.revision = config_space_cache[PCI_REVISION_ID];
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    obj-&gt;attr-&gt;pcidev.linkspeed = 0; /* unknown */
</span><br>
<span class="quotelev1">&gt; -    offset = hwloc_pci_find_cap(config_space_cache, PCI_CAP_ID_EXP);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +    /* fixup SR-IOV buggy VF device/vendor IDs */
</span><br>
<span class="quotelev1">&gt;     if (0xffff == pcidev-&gt;vendor_id &amp;&amp; 0xffff == pcidev-&gt;device_id) {
</span><br>
<span class="quotelev1">&gt;       /* SR-IOV puts ffff:ffff in Virtual Function config space.
</span><br>
<span class="quotelev1">&gt;        * The actual VF device ID is stored at a special (dynamic) location in the Physical Function config space.
</span><br>
<span class="quotelev1">&gt; @@ -158,7 +143,7 @@ hwloc_look_pci(struct hwloc_backend *backend)
</span><br>
<span class="quotelev1">&gt;        *
</span><br>
<span class="quotelev1">&gt;        * libpciaccess just returns ffff:ffff, needs to be fixed.
</span><br>
<span class="quotelev1">&gt;        * linuxpci is OK because sysfs files are already fixed the kernel.
</span><br>
<span class="quotelev1">&gt; -       * pciutils is OK when it uses those Linux sysfs files.
</span><br>
<span class="quotelev1">&gt; +       * (pciutils is OK when it uses those Linux sysfs files.)
</span><br>
<span class="quotelev1">&gt;        *
</span><br>
<span class="quotelev1">&gt;        * Reading these files is an easy way to work around the libpciaccess issue on Linux,
</span><br>
<span class="quotelev1">&gt;        * but we have no way to know if this is caused by SR-IOV or not.
</span><br>
<span class="quotelev1">&gt; @@ -185,7 +170,8 @@ hwloc_look_pci(struct hwloc_backend *backend)
</span><br>
<span class="quotelev1">&gt; 	read = fread(value, 1, sizeof(value), file);
</span><br>
<span class="quotelev1">&gt; 	fclose(file);
</span><br>
<span class="quotelev1">&gt; 	if (read)
</span><br>
<span class="quotelev1">&gt; -	  obj-&gt;attr-&gt;pcidev.vendor_id = strtoul(value, NULL, 16);
</span><br>
<span class="quotelev1">&gt; +	  /* fixup the pciaccess struct so that pci_device_get_vendor_name() is correct later. */
</span><br>
<span class="quotelev1">&gt; +          pcidev-&gt;vendor_id = strtoul(value, NULL, 16);
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       snprintf(path, sizeof(path), &quot;/sys/bus/pci/devices/%04x:%02x:%02x.%01x/device&quot;,
</span><br>
<span class="quotelev1">&gt; @@ -195,11 +181,28 @@ hwloc_look_pci(struct hwloc_backend *backend)
</span><br>
<span class="quotelev1">&gt; 	read = fread(value, 1, sizeof(value), file);
</span><br>
<span class="quotelev1">&gt; 	fclose(file);
</span><br>
<span class="quotelev1">&gt; 	if (read)
</span><br>
<span class="quotelev1">&gt; -	  obj-&gt;attr-&gt;pcidev.device_id = strtoul(value, NULL, 16);
</span><br>
<span class="quotelev1">&gt; +	  /* fixup the pciaccess struct so that pci_device_get_device_name() is correct later. */
</span><br>
<span class="quotelev1">&gt; +          pcidev-&gt;device_id = strtoul(value, NULL, 16);
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    /* might be useful for debugging (note that domain might be truncated) */
</span><br>
<span class="quotelev1">&gt; +    os_index = (domain &lt;&lt; 20) + (pcidev-&gt;bus &lt;&lt; 12) + (pcidev-&gt;dev &lt;&lt; 4) + pcidev-&gt;func;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    obj = hwloc_alloc_setup_object(HWLOC_OBJ_PCI_DEVICE, os_index);
</span><br>
<span class="quotelev1">&gt; +    obj-&gt;attr-&gt;pcidev.domain = domain;
</span><br>
<span class="quotelev1">&gt; +    obj-&gt;attr-&gt;pcidev.bus = pcidev-&gt;bus;
</span><br>
<span class="quotelev1">&gt; +    obj-&gt;attr-&gt;pcidev.dev = pcidev-&gt;dev;
</span><br>
<span class="quotelev1">&gt; +    obj-&gt;attr-&gt;pcidev.func = pcidev-&gt;func;
</span><br>
<span class="quotelev1">&gt; +    obj-&gt;attr-&gt;pcidev.vendor_id = pcidev-&gt;vendor_id;
</span><br>
<span class="quotelev1">&gt; +    obj-&gt;attr-&gt;pcidev.device_id = pcidev-&gt;device_id;
</span><br>
<span class="quotelev1">&gt; +    obj-&gt;attr-&gt;pcidev.class_id = device_class;
</span><br>
<span class="quotelev1">&gt; +    obj-&gt;attr-&gt;pcidev.revision = config_space_cache[PCI_REVISION_ID];
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    obj-&gt;attr-&gt;pcidev.linkspeed = 0; /* unknown */
</span><br>
<span class="quotelev1">&gt; +    offset = hwloc_pci_find_cap(config_space_cache, PCI_CAP_ID_EXP);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     if (offset &gt; 0 &amp;&amp; offset + 20 /* size of PCI express block up to link status */ &lt;= CONFIG_SPACE_CACHESIZE)
</span><br>
<span class="quotelev1">&gt;       hwloc_pci_find_linkspeed(config_space_cache, offset, &amp;obj-&gt;attr-&gt;pcidev.linkspeed);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Summary of changes:
</span><br>
<span class="quotelev1">&gt; hwloc/topology-pci.c | 41 ++++++++++++++++++++++-------------------
</span><br>
<span class="quotelev1">&gt; 1 file changed, 22 insertions(+), 19 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hooks/post-receive
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; open-mpi/hwloc
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-commits mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-commits_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-commits">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-commits</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4339.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-333-g85ea6e4)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/12/4337.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.10.0-37-g40c723e)"</a>
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
