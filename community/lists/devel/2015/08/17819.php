<?
$subject_val = "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 10:32:42 2015" -->
<!-- isoreceived="20150824143242" -->
<!-- sent="Mon, 24 Aug 2015 14:32:37 +0000" -->
<!-- isosent="20150824143237" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] reachable_netlink mca, libnl and libnl3" -->
<!-- id="CD3B2295-7D13-4178-9133-E6A99C663BDE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5tNQFbwrmbdVaESmjmj0N35EHoHj6sSBZom7N7AHxTEFQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-08-24 10:32:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17820.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>Previous message:</strong> <a href="17818.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<li><strong>In reply to:</strong> <a href="17816.php">Gilles Gouaillardet: "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17818.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a losing battle.  We can't keep an up-to-date table in our configury of what downstream packages were compiled with what versions of libnl, not only because it would quickly become out of date, but also because the downstream package may be variable (e.g., libfabric, as I cited in <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17818.php">http://www.open-mpi.org/community/lists/devel/2015/08/17818.php</a>).
<br>
<p>The best we might be able to hope for is a utility routine:
<br>
<p>&nbsp;&nbsp;bool opal_libnl_conflicts_present(void);
<br>
<p>Anyone using libnl services (or using services that use libnl) should call this function before invoking any libel-specific functionality.  This function will opal_dl_open(NULL) and look for libnl-specific and libnl3-specific symbols.  If found, show_help() an error, and return &quot;true&quot;.  If the caller gets &quot;true&quot; back, it will know that it cannot call its libnl functionality, and then decide whether it wants to continue or not.
<br>
<p>This is *not* foolproof; there are likely cases where this will not work.  But it may be sufficient / may work in some cases...?  (disclaimer: I have not tested this myself)
<br>
<p><p><p><p><span class="quotelev1">&gt; On Aug 24, 2015, at 9:42 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a first step could be adding a --disable-libnl3 option to configure, which means components should not even try to use libnl3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; makes sense ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Monday, August 24, 2015, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; iirc, librdmacm uses libnl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not sure if handling this at run time is even possible
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; why not handle this at configure time ?
</span><br>
<span class="quotelev1">&gt; e.g. if a component known to use libnl is built, then make sure no component uses libnl3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Monday, August 24, 2015, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; It is definitely true that if both libnl v1 and libnl v3 (also known as &quot;libnl3&quot;, even though libnl v1 is known as &quot;libnl&quot;) are present in the same process, Random Bad Things will happen.  This is due to unfortunate choices that the netlink library authors and/or packagers made.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From what I have heard, the world is moving to libnl3, but this is a change that will take time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The usnic BTL uses libfabric; the usnic provider in libfabric can use either libnl or libnl3.  I don't know what else in OFED uses libnl -- perhaps IBoIP (aka RoCE)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We've talked about this internally.  But sadly, we haven't come up with a good+reliable way to run-time detect if both libnl and libnl3 are present in the same process (e.g., if some of OMPI's dependent libraries pull them both in).  We could try to opal_dl_open() NULL and them look for symbols that are unique to libnl and libnl3, but a) when to do that, and b) it's not guaranteed to work in all cases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 24, 2015, at 7:36 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Folks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I recently installed libnl3-devel rpm on my centos 7 box, reconfigured and recompiled ompi, and ompi_info now crashes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; it seems the root cause is an obscure conflict between libnl and libnl3.
</span><br>
<span class="quotelev2">&gt; &gt; libnl is indirectly required by the common_verbs mac (OFED libraries do need it) and libnl3 is required by reachable_netlink mca when available.
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
<span class="quotelev2">&gt; &gt; right now, my best bet would be not to use libnl3 when configure'd with --verbs and OFED is available.
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
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17812.php">http://www.open-mpi.org/community/lists/devel/2015/08/17812.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17813.php">http://www.open-mpi.org/community/lists/devel/2015/08/17813.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17816.php">http://www.open-mpi.org/community/lists/devel/2015/08/17816.php</a>
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
<li><strong>Next message:</strong> <a href="17820.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>Previous message:</strong> <a href="17818.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<li><strong>In reply to:</strong> <a href="17816.php">Gilles Gouaillardet: "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17818.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
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
