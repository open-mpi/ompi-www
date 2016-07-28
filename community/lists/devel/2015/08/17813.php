<?
$subject_val = "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 08:57:53 2015" -->
<!-- isoreceived="20150824125753" -->
<!-- sent="Mon, 24 Aug 2015 12:57:51 +0000" -->
<!-- isosent="20150824125751" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] reachable_netlink mca, libnl and libnl3" -->
<!-- id="2B1DD44F-2774-4645-B8D3-61DDE30C9CF3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5tKAvBjQjO2b2QCDWAi9TWxaw-QjRasG0tQxqRxiZCU4Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] reachable_netlink mca, libnl and libnl3<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-24 08:57:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17814.php">Gilles Gouaillardet: "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<li><strong>Previous message:</strong> <a href="17812.php">Gilles Gouaillardet: "[OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<li><strong>In reply to:</strong> <a href="17812.php">Gilles Gouaillardet: "[OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17814.php">Gilles Gouaillardet: "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<li><strong>Reply:</strong> <a href="17814.php">Gilles Gouaillardet: "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<li><strong>Reply:</strong> <a href="17815.php">Gilles Gouaillardet: "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is definitely true that if both libnl v1 and libnl v3 (also known as &quot;libnl3&quot;, even though libnl v1 is known as &quot;libnl&quot;) are present in the same process, Random Bad Things will happen.  This is due to unfortunate choices that the netlink library authors and/or packagers made.
<br>
<p><span class="quotelev1">&gt;From what I have heard, the world is moving to libnl3, but this is a change that will take time.
</span><br>
<p>The usnic BTL uses libfabric; the usnic provider in libfabric can use either libnl or libnl3.  I don't know what else in OFED uses libnl -- perhaps IBoIP (aka RoCE)?
<br>
<p>We've talked about this internally.  But sadly, we haven't come up with a good+reliable way to run-time detect if both libnl and libnl3 are present in the same process (e.g., if some of OMPI's dependent libraries pull them both in).  We could try to opal_dl_open() NULL and them look for symbols that are unique to libnl and libnl3, but a) when to do that, and b) it's not guaranteed to work in all cases.
<br>
<p><p><p><p><span class="quotelev1">&gt; On Aug 24, 2015, at 7:36 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I recently installed libnl3-devel rpm on my centos 7 box, reconfigured and recompiled ompi, and ompi_info now crashes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it seems the root cause is an obscure conflict between libnl and libnl3.
</span><br>
<span class="quotelev1">&gt; libnl is indirectly required by the common_verbs mac (OFED libraries do need it) and libnl3 is required by reachable_netlink mca when available.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; currently, there are two workarounds available
</span><br>
<span class="quotelev1">&gt; 1. uninstall libln3-devel rpm, so reachable_netlink mca uses libnl
</span><br>
<span class="quotelev1">&gt; 2. configure with --without-verbs so no mac requires libnl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; right now, my best bet would be not to use libnl3 when configure'd with --verbs and OFED is available.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; any thoughts ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17812.php">http://www.open-mpi.org/community/lists/devel/2015/08/17812.php</a>
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
<li><strong>Next message:</strong> <a href="17814.php">Gilles Gouaillardet: "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<li><strong>Previous message:</strong> <a href="17812.php">Gilles Gouaillardet: "[OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<li><strong>In reply to:</strong> <a href="17812.php">Gilles Gouaillardet: "[OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17814.php">Gilles Gouaillardet: "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<li><strong>Reply:</strong> <a href="17814.php">Gilles Gouaillardet: "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<li><strong>Reply:</strong> <a href="17815.php">Gilles Gouaillardet: "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
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
