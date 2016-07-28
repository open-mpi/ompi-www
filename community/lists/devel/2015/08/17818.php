<?
$subject_val = "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 10:27:32 2015" -->
<!-- isoreceived="20150824142732" -->
<!-- sent="Mon, 24 Aug 2015 14:27:29 +0000" -->
<!-- isosent="20150824142729" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] reachable_netlink mca, libnl and libnl3" -->
<!-- id="45CF9893-410B-4078-B7E9-CF8DBCF92A3E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5s75iMZjtwjswTxdAN2azxBYvr-ADOj+TMzpFO8OidVbQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-08-24 10:27:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17819.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<li><strong>Previous message:</strong> <a href="17817.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>In reply to:</strong> <a href="17814.php">Gilles Gouaillardet: "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17815.php">Gilles Gouaillardet: "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 24, 2015, at 9:31 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
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
<p>How can we know which version of libnl a downstream package chooses to use?
<br>
<p>E.g., libfabric can be built with either libnl or libnl3: it depends on either the default or the packager's choice.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17819.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<li><strong>Previous message:</strong> <a href="17817.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>In reply to:</strong> <a href="17814.php">Gilles Gouaillardet: "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17815.php">Gilles Gouaillardet: "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
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
