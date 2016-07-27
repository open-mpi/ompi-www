<?
$subject_val = "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 01:38:43 2014" -->
<!-- isoreceived="20141008053843" -->
<!-- sent="Wed, 08 Oct 2014 07:38:42 +0200" -->
<!-- isosent="20141008053842" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros" -->
<!-- id="5434CDE2.9090009_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E0FB9EDDBE1AAD4EA62C90D3B6E4783B739D8ED3_at_P-EXMB2-DC21.corp.sgi.com" -->
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
<strong>Date:</strong> 2014-10-08 01:38:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4265.php">James Custer: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<li><strong>Previous message:</strong> <a href="4263.php">James Custer: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<li><strong>In reply to:</strong> <a href="4263.php">James Custer: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4265.php">James Custer: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<li><strong>Reply:</strong> <a href="4265.php">James Custer: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using Itanium ?
<br>
Or do you guys have PCI domains on Altix UV ?
<br>
<p>Brice
<br>
<p><p><p>Le 08/10/2014 07:37, James Custer a &#233;crit :
<br>
<span class="quotelev1">&gt; Well, I just started looking at hwloc today as a potential replacement for SGI's custom topology command and ran into a problem where when I run lstopo I get the following:
</span><br>
<span class="quotelev1">&gt; lstopo: pci-common.c:121: hwloc_pci_compare_busids: Assertion `0' failed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I looked into it and tracked it down to this change. It was pretty easy to fix so I thought I'd pass it along. :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; James
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: hwloc-devel [hwloc-devel-bounces_at_[hidden]] on behalf of Brice Goglin [Brice.Goglin_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, October 08, 2014 12:32 AM
</span><br>
<span class="quotelev1">&gt; To: hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Applied thanks.
</span><br>
<span class="quotelev1">&gt; Interesting to see somebody who cares about PCi domains :)
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 08/10/2014 07:24, James Custer a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Commit 1e57af5 removed macros HWLOC_HAVE_PCI_FIND_CAP,
</span><br>
<span class="quotelev2">&gt;&gt; HWLOC_HAVE_PCIDEV_DOMAIN, and HWLOC_HAVE_LIBPCIACCESS.
</span><br>
<span class="quotelev2">&gt;&gt; However, these are still referenced in src/topology-pci.c.
</span><br>
<span class="quotelev2">&gt;&gt; Specifically, the check to see if HWLOC_HAVE_LIBPCIACCESS or
</span><br>
<span class="quotelev2">&gt;&gt; HWLOC_HAVE_PCIDEV_DOMAIN will always be false, resulting in
</span><br>
<span class="quotelev2">&gt;&gt; domain being set to zero, rather than always being pcidev-&gt;domain.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The other change is not a bug, just removal of dead code.
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt;  src/topology-pci.c | 12 ------------
</span><br>
<span class="quotelev2">&gt;&gt;  1 file changed, 12 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/src/topology-pci.c b/src/topology-pci.c
</span><br>
<span class="quotelev2">&gt;&gt; index f8a3cec..1382025 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/src/topology-pci.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/src/topology-pci.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -117,9 +117,6 @@ hwloc_look_pci(struct hwloc_backend *backend)
</span><br>
<span class="quotelev2">&gt;&gt;      unsigned short tmp16;
</span><br>
<span class="quotelev2">&gt;&gt;      char name[128];
</span><br>
<span class="quotelev2">&gt;&gt;      unsigned offset;
</span><br>
<span class="quotelev2">&gt;&gt; -#ifdef HWLOC_HAVE_PCI_FIND_CAP
</span><br>
<span class="quotelev2">&gt;&gt; -    struct pci_cap *cap;
</span><br>
<span class="quotelev2">&gt;&gt; -#endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      /* initialize the config space in case we fail to read it (missing permissions, etc). */
</span><br>
<span class="quotelev2">&gt;&gt;      memset(config_space_cache, 0xff, CONFIG_SPACE_CACHESIZE);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -127,11 +124,7 @@ hwloc_look_pci(struct hwloc_backend *backend)
</span><br>
<span class="quotelev2">&gt;&gt;      pci_device_cfg_read(pcidev, config_space_cache, 0, CONFIG_SPACE_CACHESIZE, NULL);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      /* try to read the domain */
</span><br>
<span class="quotelev2">&gt;&gt; -#if (defined HWLOC_HAVE_LIBPCIACCESS) || (defined HWLOC_HAVE_PCIDEV_DOMAIN)
</span><br>
<span class="quotelev2">&gt;&gt;      domain = pcidev-&gt;domain;
</span><br>
<span class="quotelev2">&gt;&gt; -#else
</span><br>
<span class="quotelev2">&gt;&gt; -    domain = 0; /* default domain number */
</span><br>
<span class="quotelev2">&gt;&gt; -#endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      /* try to read the device_class */
</span><br>
<span class="quotelev2">&gt;&gt;      device_class = pcidev-&gt;device_class &gt;&gt; 8;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -150,12 +143,7 @@ hwloc_look_pci(struct hwloc_backend *backend)
</span><br>
<span class="quotelev2">&gt;&gt;      obj-&gt;attr-&gt;pcidev.revision = config_space_cache[PCI_REVISION_ID];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      obj-&gt;attr-&gt;pcidev.linkspeed = 0; /* unknown */
</span><br>
<span class="quotelev2">&gt;&gt; -#ifdef HWLOC_HAVE_PCI_FIND_CAP
</span><br>
<span class="quotelev2">&gt;&gt; -    cap = pci_find_cap(pcidev, PCI_CAP_ID_EXP, PCI_CAP_NORMAL);
</span><br>
<span class="quotelev2">&gt;&gt; -    offset = cap ? cap-&gt;addr : 0;
</span><br>
<span class="quotelev2">&gt;&gt; -#else
</span><br>
<span class="quotelev2">&gt;&gt;      offset = hwloc_pci_find_cap(config_space_cache, PCI_CAP_ID_EXP);
</span><br>
<span class="quotelev2">&gt;&gt; -#endif /* HWLOC_HAVE_PCI_FIND_CAP */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      if (0xffff == pcidev-&gt;vendor_id &amp;&amp; 0xffff == pcidev-&gt;device_id) {
</span><br>
<span class="quotelev2">&gt;&gt;        /* SR-IOV puts ffff:ffff in Virtual Function config space.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/10/4263.php">http://www.open-mpi.org/community/lists/hwloc-devel/2014/10/4263.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/10/4263.php">http://www.open-mpi.org/community/lists/hwloc-devel/2014/10/4263.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4265.php">James Custer: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<li><strong>Previous message:</strong> <a href="4263.php">James Custer: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<li><strong>In reply to:</strong> <a href="4263.php">James Custer: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4265.php">James Custer: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<li><strong>Reply:</strong> <a href="4265.php">James Custer: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
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
