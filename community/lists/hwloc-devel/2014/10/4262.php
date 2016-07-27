<?
$subject_val = "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 01:32:03 2014" -->
<!-- isoreceived="20141008053203" -->
<!-- sent="Wed, 08 Oct 2014 07:32:01 +0200" -->
<!-- isosent="20141008053201" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros" -->
<!-- id="5434CC51.2090507_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1412745879-21058-1-git-send-email-jcuster_at_sgi.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-08 01:32:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4263.php">James Custer: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<li><strong>Previous message:</strong> <a href="4261.php">James Custer: "[hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<li><strong>In reply to:</strong> <a href="4261.php">James Custer: "[hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4263.php">James Custer: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<li><strong>Reply:</strong> <a href="4263.php">James Custer: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Applied thanks.
<br>
Interesting to see somebody who cares about PCi domains :)
<br>
Brice
<br>
<p><p>Le 08/10/2014 07:24, James Custer a &#233;crit :
<br>
<span class="quotelev1">&gt; Commit 1e57af5 removed macros HWLOC_HAVE_PCI_FIND_CAP,
</span><br>
<span class="quotelev1">&gt; HWLOC_HAVE_PCIDEV_DOMAIN, and HWLOC_HAVE_LIBPCIACCESS.
</span><br>
<span class="quotelev1">&gt; However, these are still referenced in src/topology-pci.c.
</span><br>
<span class="quotelev1">&gt; Specifically, the check to see if HWLOC_HAVE_LIBPCIACCESS or
</span><br>
<span class="quotelev1">&gt; HWLOC_HAVE_PCIDEV_DOMAIN will always be false, resulting in
</span><br>
<span class="quotelev1">&gt; domain being set to zero, rather than always being pcidev-&gt;domain.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The other change is not a bug, just removal of dead code.
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;  src/topology-pci.c | 12 ------------
</span><br>
<span class="quotelev1">&gt;  1 file changed, 12 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --git a/src/topology-pci.c b/src/topology-pci.c
</span><br>
<span class="quotelev1">&gt; index f8a3cec..1382025 100644
</span><br>
<span class="quotelev1">&gt; --- a/src/topology-pci.c
</span><br>
<span class="quotelev1">&gt; +++ b/src/topology-pci.c
</span><br>
<span class="quotelev1">&gt; @@ -117,9 +117,6 @@ hwloc_look_pci(struct hwloc_backend *backend)
</span><br>
<span class="quotelev1">&gt;      unsigned short tmp16;
</span><br>
<span class="quotelev1">&gt;      char name[128];
</span><br>
<span class="quotelev1">&gt;      unsigned offset;
</span><br>
<span class="quotelev1">&gt; -#ifdef HWLOC_HAVE_PCI_FIND_CAP
</span><br>
<span class="quotelev1">&gt; -    struct pci_cap *cap;
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      /* initialize the config space in case we fail to read it (missing permissions, etc). */
</span><br>
<span class="quotelev1">&gt;      memset(config_space_cache, 0xff, CONFIG_SPACE_CACHESIZE);
</span><br>
<span class="quotelev1">&gt; @@ -127,11 +124,7 @@ hwloc_look_pci(struct hwloc_backend *backend)
</span><br>
<span class="quotelev1">&gt;      pci_device_cfg_read(pcidev, config_space_cache, 0, CONFIG_SPACE_CACHESIZE, NULL);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      /* try to read the domain */
</span><br>
<span class="quotelev1">&gt; -#if (defined HWLOC_HAVE_LIBPCIACCESS) || (defined HWLOC_HAVE_PCIDEV_DOMAIN)
</span><br>
<span class="quotelev1">&gt;      domain = pcidev-&gt;domain;
</span><br>
<span class="quotelev1">&gt; -#else
</span><br>
<span class="quotelev1">&gt; -    domain = 0; /* default domain number */
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      /* try to read the device_class */
</span><br>
<span class="quotelev1">&gt;      device_class = pcidev-&gt;device_class &gt;&gt; 8;
</span><br>
<span class="quotelev1">&gt; @@ -150,12 +143,7 @@ hwloc_look_pci(struct hwloc_backend *backend)
</span><br>
<span class="quotelev1">&gt;      obj-&gt;attr-&gt;pcidev.revision = config_space_cache[PCI_REVISION_ID];
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      obj-&gt;attr-&gt;pcidev.linkspeed = 0; /* unknown */
</span><br>
<span class="quotelev1">&gt; -#ifdef HWLOC_HAVE_PCI_FIND_CAP
</span><br>
<span class="quotelev1">&gt; -    cap = pci_find_cap(pcidev, PCI_CAP_ID_EXP, PCI_CAP_NORMAL);
</span><br>
<span class="quotelev1">&gt; -    offset = cap ? cap-&gt;addr : 0;
</span><br>
<span class="quotelev1">&gt; -#else
</span><br>
<span class="quotelev1">&gt;      offset = hwloc_pci_find_cap(config_space_cache, PCI_CAP_ID_EXP);
</span><br>
<span class="quotelev1">&gt; -#endif /* HWLOC_HAVE_PCI_FIND_CAP */
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      if (0xffff == pcidev-&gt;vendor_id &amp;&amp; 0xffff == pcidev-&gt;device_id) {
</span><br>
<span class="quotelev1">&gt;        /* SR-IOV puts ffff:ffff in Virtual Function config space.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4263.php">James Custer: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<li><strong>Previous message:</strong> <a href="4261.php">James Custer: "[hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<li><strong>In reply to:</strong> <a href="4261.php">James Custer: "[hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4263.php">James Custer: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<li><strong>Reply:</strong> <a href="4263.php">James Custer: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
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
