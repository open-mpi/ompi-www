<?
$subject_val = "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 09:37:22 2015" -->
<!-- isoreceived="20150824133722" -->
<!-- sent="Mon, 24 Aug 2015 22:37:20 +0900" -->
<!-- isosent="20150824133720" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] reachable_netlink mca, libnl and libnl3" -->
<!-- id="CAAkFZ5uQN6TMHgznBw2xFZGBiDio83Uo0j45AMXDkinEO0u_AQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2B1DD44F-2774-4645-B8D3-61DDE30C9CF3_at_cisco.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-24 09:37:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17816.php">Gilles Gouaillardet: "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<li><strong>Previous message:</strong> <a href="17814.php">Gilles Gouaillardet: "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<li><strong>In reply to:</strong> <a href="17813.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
fwiw, in my environment, libnl is loaded before libnl3
<br>
the crash occurs in libnl3 initializer, which is invoked when dlopen'ing
<br>
mca_reachable_netlink.so
<br>
it is very strange since some initialized static structs (same name,
<br>
different type and value in both libraries) are incorrectly initialized (or
<br>
already corrupted when the blackhole_init initializer is invoked
<br>
<p>On Monday, August 24, 2015, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; It is definitely true that if both libnl v1 and libnl v3 (also known as
</span><br>
<span class="quotelev1">&gt; &quot;libnl3&quot;, even though libnl v1 is known as &quot;libnl&quot;) are present in the same
</span><br>
<span class="quotelev1">&gt; process, Random Bad Things will happen.  This is due to unfortunate choices
</span><br>
<span class="quotelev1">&gt; that the netlink library authors and/or packagers made.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From what I have heard, the world is moving to libnl3, but this is a
</span><br>
<span class="quotelev1">&gt; change that will take time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The usnic BTL uses libfabric; the usnic provider in libfabric can use
</span><br>
<span class="quotelev1">&gt; either libnl or libnl3.  I don't know what else in OFED uses libnl --
</span><br>
<span class="quotelev1">&gt; perhaps IBoIP (aka RoCE)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've talked about this internally.  But sadly, we haven't come up with a
</span><br>
<span class="quotelev1">&gt; good+reliable way to run-time detect if both libnl and libnl3 are present
</span><br>
<span class="quotelev1">&gt; in the same process (e.g., if some of OMPI's dependent libraries pull them
</span><br>
<span class="quotelev1">&gt; both in).  We could try to opal_dl_open() NULL and them look for symbols
</span><br>
<span class="quotelev1">&gt; that are unique to libnl and libnl3, but a) when to do that, and b) it's
</span><br>
<span class="quotelev1">&gt; not guaranteed to work in all cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 24, 2015, at 7:36 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Folks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I recently installed libnl3-devel rpm on my centos 7 box, reconfigured
</span><br>
<span class="quotelev1">&gt; and recompiled ompi, and ompi_info now crashes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; it seems the root cause is an obscure conflict between libnl and libnl3.
</span><br>
<span class="quotelev2">&gt; &gt; libnl is indirectly required by the common_verbs mac (OFED libraries do
</span><br>
<span class="quotelev1">&gt; need it) and libnl3 is required by reachable_netlink mca when available.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; currently, there are two workarounds available
</span><br>
<span class="quotelev2">&gt; &gt; 1. uninstall libln3-devel rpm, so reachable_netlink mca uses libnl
</span><br>
<span class="quotelev2">&gt; &gt; 2. configure with --without-verbs so no mac requires libnl
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; right now, my best bet would be not to use libnl3 when configure'd with
</span><br>
<span class="quotelev1">&gt; --verbs and OFED is available.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; any thoughts ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17812.php">http://www.open-mpi.org/community/lists/devel/2015/08/17812.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17813.php">http://www.open-mpi.org/community/lists/devel/2015/08/17813.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17815/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17816.php">Gilles Gouaillardet: "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<li><strong>Previous message:</strong> <a href="17814.php">Gilles Gouaillardet: "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<li><strong>In reply to:</strong> <a href="17813.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
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
