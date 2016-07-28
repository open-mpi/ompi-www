<?
$subject_val = "Re: [OMPI devel] ofi/mtl causing problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 16:22:06 2014" -->
<!-- isoreceived="20141217212206" -->
<!-- sent="Wed, 17 Dec 2014 21:22:00 +0000" -->
<!-- isosent="20141217212200" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ofi/mtl causing problems" -->
<!-- id="5F965B93-B696-4162-818D-2B86C47B7A8A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj67hmSKmoadPatAYa1n9thfGq6LDBwJ2HvKwxOrdZQ7pg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ofi/mtl causing problems<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 16:22:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16656.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-564-g6c468b8"</a>
<li><strong>Previous message:</strong> <a href="16654.php">Howard Pritchard: "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>In reply to:</strong> <a href="16654.php">Howard Pritchard: "Re: [OMPI devel] ofi/mtl causing problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16659.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Reply:</strong> <a href="16659.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 17, 2014, at 4:10 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm fixing the libfabric m4 file.  It just says its happy if infiniband/verbs.h is there, then goes check some specific providers, but
</span><br>
<span class="quotelev1">&gt; doesn't go back and check whether the specific providers are actually available.
</span><br>
<p>That's the intended behavior; please don't change it.
<br>
<p>It reflects the case where libfabric is installed externally and has no providers that you expect.  Hence, the btls/mtls that use lbifabric should be able to handle the case where fi_getinfo() doesn't return anything that they want.
<br>
<p>You're seeing a linking problem which I'm still digging in to.  I have a few other minor updates which I'll push shortly, but I haven't figured out your specific problem yet.
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
<li><strong>Next message:</strong> <a href="16656.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-564-g6c468b8"</a>
<li><strong>Previous message:</strong> <a href="16654.php">Howard Pritchard: "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>In reply to:</strong> <a href="16654.php">Howard Pritchard: "Re: [OMPI devel] ofi/mtl causing problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16659.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Reply:</strong> <a href="16659.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
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
