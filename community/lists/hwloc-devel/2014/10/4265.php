<?
$subject_val = "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 01:40:52 2014" -->
<!-- isoreceived="20141008054052" -->
<!-- sent="Wed, 8 Oct 2014 05:40:51 +0000" -->
<!-- isosent="20141008054051" -->
<!-- name="James Custer" -->
<!-- email="jcuster_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros" -->
<!-- id="E0FB9EDDBE1AAD4EA62C90D3B6E4783B739D8EE5_at_P-EXMB2-DC21.corp.sgi.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5434CDE2.9090009_at_inria.fr" -->
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
<strong>From:</strong> James Custer (<em>jcuster_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-08 01:40:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4266.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<li><strong>Previous message:</strong> <a href="4264.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<li><strong>In reply to:</strong> <a href="4264.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4266.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<li><strong>Reply:</strong> <a href="4266.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is on our UV machines (specifically UV2 that I was testing on).
________________________________________
From: hwloc-devel [hwloc-devel-bounces_at_[hidden]] on behalf of Brice Goglin [Brice.Goglin_at_[hidden]]
Sent: Wednesday, October 08, 2014 12:38 AM
To: Hardware locality development list
Subject: Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros

Using Itanium ?
Or do you guys have PCI domains on Altix UV ?

Brice



Le 08/10/2014 07:37, James Custer a &#233;crit :
&gt; Well, I just started looking at hwloc today as a potential replacement for SGI's custom topology command and ran into a problem where when I run lstopo I get the following:
&gt; lstopo: pci-common.c:121: hwloc_pci_compare_busids: Assertion `0' failed.
&gt;
&gt; So I looked into it and tracked it down to this change. It was pretty easy to fix so I thought I'd pass it along. :)
&gt;
&gt; Regards,
&gt; James
&gt; ________________________________________
&gt; From: hwloc-devel [hwloc-devel-bounces_at_[hidden]] on behalf of Brice Goglin [Brice.Goglin_at_[hidden]]
&gt; Sent: Wednesday, October 08, 2014 12:32 AM
&gt; To: hwloc-devel_at_[hidden]
&gt; Subject: Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros
&gt;
&gt; Applied thanks.
&gt; Interesting to see somebody who cares about PCi domains :)
&gt; Brice
&gt;
&gt;
&gt; Le 08/10/2014 07:24, James Custer a &#233;crit :
&gt;&gt; Commit 1e57af5 removed macros HWLOC_HAVE_PCI_FIND_CAP,
&gt;&gt; HWLOC_HAVE_PCIDEV_DOMAIN, and HWLOC_HAVE_LIBPCIACCESS.
&gt;&gt; However, these are still referenced in src/topology-pci.c.
&gt;&gt; Specifically, the check to see if HWLOC_HAVE_LIBPCIACCESS or
&gt;&gt; HWLOC_HAVE_PCIDEV_DOMAIN will always be false, resulting in
&gt;&gt; domain being set to zero, rather than always being pcidev-&gt;domain.
&gt;&gt;
&gt;&gt; The other change is not a bug, just removal of dead code.
&gt;&gt; ---
&gt;&gt;  src/topology-pci.c | 12 ------------
&gt;&gt;  1 file changed, 12 deletions(-)
&gt;&gt;
&gt;&gt; diff --git a/src/topology-pci.c b/src/topology-pci.c
&gt;&gt; index f8a3cec..1382025 100644
&gt;&gt; --- a/src/topology-pci.c
&gt;&gt; +++ b/src/topology-pci.c
&gt;&gt; @@ -117,9 +117,6 @@ hwloc_look_pci(struct hwloc_backend *backend)
&gt;&gt;      unsigned short tmp16;
&gt;&gt;      char name[128];
&gt;&gt;      unsigned offset;
&gt;&gt; -#ifdef HWLOC_HAVE_PCI_FIND_CAP
&gt;&gt; -    struct pci_cap *cap;
&gt;&gt; -#endif
&gt;&gt;
&gt;&gt;      /* initialize the config space in case we fail to read it (missing permissions, etc). */
&gt;&gt;      memset(config_space_cache, 0xff, CONFIG_SPACE_CACHESIZE);
&gt;&gt; @@ -127,11 +124,7 @@ hwloc_look_pci(struct hwloc_backend *backend)
&gt;&gt;      pci_device_cfg_read(pcidev, config_space_cache, 0, CONFIG_SPACE_CACHESIZE, NULL);
&gt;&gt;
&gt;&gt;      /* try to read the domain */
&gt;&gt; -#if (defined HWLOC_HAVE_LIBPCIACCESS) || (defined HWLOC_HAVE_PCIDEV_DOMAIN)
&gt;&gt;      domain = pcidev-&gt;domain;
&gt;&gt; -#else
&gt;&gt; -    domain = 0; /* default domain number */
&gt;&gt; -#endif
&gt;&gt;
&gt;&gt;      /* try to read the device_class */
&gt;&gt;      device_class = pcidev-&gt;device_class &gt;&gt; 8;
&gt;&gt; @@ -150,12 +143,7 @@ hwloc_look_pci(struct hwloc_backend *backend)
&gt;&gt;      obj-&gt;attr-&gt;pcidev.revision = config_space_cache[PCI_REVISION_ID];
&gt;&gt;
&gt;&gt;      obj-&gt;attr-&gt;pcidev.linkspeed = 0; /* unknown */
&gt;&gt; -#ifdef HWLOC_HAVE_PCI_FIND_CAP
&gt;&gt; -    cap = pci_find_cap(pcidev, PCI_CAP_ID_EXP, PCI_CAP_NORMAL);
&gt;&gt; -    offset = cap ? cap-&gt;addr : 0;
&gt;&gt; -#else
&gt;&gt;      offset = hwloc_pci_find_cap(config_space_cache, PCI_CAP_ID_EXP);
&gt;&gt; -#endif /* HWLOC_HAVE_PCI_FIND_CAP */
&gt;&gt;
&gt;&gt;      if (0xffff == pcidev-&gt;vendor_id &amp;&amp; 0xffff == pcidev-&gt;device_id) {
&gt;&gt;        /* SR-IOV puts ffff:ffff in Virtual Function config space.
&gt; _______________________________________________
&gt; hwloc-devel mailing list
&gt; hwloc-devel_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/10/4263.php">http://www.open-mpi.org/community/lists/hwloc-devel/2014/10/4263.php</a>
&gt; _______________________________________________
&gt; hwloc-devel mailing list
&gt; hwloc-devel_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/10/4263.php">http://www.open-mpi.org/community/lists/hwloc-devel/2014/10/4263.php</a>

_______________________________________________
hwloc-devel mailing list
hwloc-devel_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/10/4264.php">http://www.open-mpi.org/community/lists/hwloc-devel/2014/10/4264.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4266.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<li><strong>Previous message:</strong> <a href="4264.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<li><strong>In reply to:</strong> <a href="4264.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4266.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
<li><strong>Reply:</strong> <a href="4266.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Fix code relying on nonexistent macros"</a>
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
