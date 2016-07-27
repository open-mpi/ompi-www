<?
$subject_val = "[hwloc-devel] [PATCH] Fix code relying on nonexistent macros";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 01:24:41 2014" -->
<!-- isoreceived="20141008052441" -->
<!-- sent="Wed,  8 Oct 2014 00:24:39 -0500" -->
<!-- isosent="20141008052439" -->
<!-- name="James Custer" -->
<!-- email="jcuster_at_[hidden]" -->
<!-- subject="[hwloc-devel] [PATCH] Fix code relying on nonexistent macros" -->
<!-- id="1412745879-21058-1-git-send-email-jcuster_at_sgi.com" -->
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
<strong>Subject:</strong> [hwloc-devel] [PATCH] Fix code relying on nonexistent macros<br>
<strong>From:</strong> James Custer (<em>jcuster_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-08 01:24:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4262.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<li><strong>Previous message:</strong> <a href="4260.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.10.0-1-g6456487)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4262.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<li><strong>Reply:</strong> <a href="4262.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Commit 1e57af5 removed macros HWLOC_HAVE_PCI_FIND_CAP,
<br>
HWLOC_HAVE_PCIDEV_DOMAIN, and HWLOC_HAVE_LIBPCIACCESS.
<br>
However, these are still referenced in src/topology-pci.c.
<br>
Specifically, the check to see if HWLOC_HAVE_LIBPCIACCESS or
<br>
HWLOC_HAVE_PCIDEV_DOMAIN will always be false, resulting in
<br>
domain being set to zero, rather than always being pcidev-&gt;domain.
<br>
<p>The other change is not a bug, just removal of dead code.
<br>
<pre>
---
 src/topology-pci.c | 12 ------------
 1 file changed, 12 deletions(-)
diff --git a/src/topology-pci.c b/src/topology-pci.c
index f8a3cec..1382025 100644
--- a/src/topology-pci.c
+++ b/src/topology-pci.c
@@ -117,9 +117,6 @@ hwloc_look_pci(struct hwloc_backend *backend)
     unsigned short tmp16;
     char name[128];
     unsigned offset;
-#ifdef HWLOC_HAVE_PCI_FIND_CAP
-    struct pci_cap *cap;
-#endif
 
     /* initialize the config space in case we fail to read it (missing permissions, etc). */
     memset(config_space_cache, 0xff, CONFIG_SPACE_CACHESIZE);
@@ -127,11 +124,7 @@ hwloc_look_pci(struct hwloc_backend *backend)
     pci_device_cfg_read(pcidev, config_space_cache, 0, CONFIG_SPACE_CACHESIZE, NULL);
 
     /* try to read the domain */
-#if (defined HWLOC_HAVE_LIBPCIACCESS) || (defined HWLOC_HAVE_PCIDEV_DOMAIN)
     domain = pcidev-&gt;domain;
-#else
-    domain = 0; /* default domain number */
-#endif
 
     /* try to read the device_class */
     device_class = pcidev-&gt;device_class &gt;&gt; 8;
@@ -150,12 +143,7 @@ hwloc_look_pci(struct hwloc_backend *backend)
     obj-&gt;attr-&gt;pcidev.revision = config_space_cache[PCI_REVISION_ID];
 
     obj-&gt;attr-&gt;pcidev.linkspeed = 0; /* unknown */
-#ifdef HWLOC_HAVE_PCI_FIND_CAP
-    cap = pci_find_cap(pcidev, PCI_CAP_ID_EXP, PCI_CAP_NORMAL);
-    offset = cap ? cap-&gt;addr : 0;
-#else
     offset = hwloc_pci_find_cap(config_space_cache, PCI_CAP_ID_EXP);
-#endif /* HWLOC_HAVE_PCI_FIND_CAP */
 
     if (0xffff == pcidev-&gt;vendor_id &amp;&amp; 0xffff == pcidev-&gt;device_id) {
       /* SR-IOV puts ffff:ffff in Virtual Function config space.
-- 
1.7.12.4
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4262.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<li><strong>Previous message:</strong> <a href="4260.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.10.0-1-g6456487)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4262.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<li><strong>Reply:</strong> <a href="4262.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
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
