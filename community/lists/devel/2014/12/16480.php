<?
$subject_val = "Re: [OMPI devel] Update to usnic BTL / libfabric";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 16:45:49 2014" -->
<!-- isoreceived="20141209214549" -->
<!-- sent="Tue, 9 Dec 2014 13:45:46 -0800" -->
<!-- isosent="20141209214546" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Update to usnic BTL / libfabric" -->
<!-- id="E4D5DBA5-2137-43AE-B9AF-E2BC9C859E00_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="0D8CC2FA-1123-478C-9F0F-785918662FE7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Update to usnic BTL / libfabric<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-09 16:45:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16481.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<li><strong>Previous message:</strong> <a href="16479.php">Nick Papior Andersen: "Re: [OMPI devel] autogen broken"</a>
<li><strong>In reply to:</strong> <a href="16468.php">Jeff Squyres (jsquyres): "[OMPI devel] Update to usnic BTL / libfabric"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16481.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<li><strong>Reply:</strong> <a href="16481.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<li><strong>Reply:</strong> <a href="16482.php">Howard Pritchard: "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just as an FYI: we discovered that libfabric requires libnl, and that the configure logic doesn&#226;&#128;&#153;t kick you out if libnl isn&#226;&#128;&#153;t found - you just fail during compile.
<br>
<p><p><span class="quotelev1">&gt; On Dec 9, 2014, at 6:29 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I mentioned on the call a week ago, the usnic BTL has been updated to use libfabric (instead of verbs).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is libfabric?
</span><br>
<span class="quotelev1">&gt; --&gt; Think of it as a &quot;next generation verbs&quot; -- it's OS-bypass networking for a wide range of network hardware, and libfabric contains many more capabilities than the verbs API.  libfabric is being developed by most the same people who initially developed verbs; it's not in competition with verbs -- it's a true &quot;next generation&quot; effort.  See <a href="http://ofiwg.github.io/libfabric/">http://ofiwg.github.io/libfabric/</a> for more detail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why should anyone care?
</span><br>
<span class="quotelev1">&gt; --&gt; The usnic BTL has been updated to use libfabric.  I have therefore removed all usnic-specific code from the verbs parts of the OMPI code base (e.g., opal/mca/common).  Additionally, there will shortly be another commit that introduces another OMPI network device that uses libfabric.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you really just embed libfabric in opal/common/libfabric?
</span><br>
<span class="quotelev1">&gt; --&gt; Yes -- but this is temporary.  libfabric isn't v1.0 yet -- there aren't libfabric tarballs being distributed.  Hence, other than git-cloning the libfabric github repo, you can't easily build OMPI against libfabric.  So we are temporarily embedding a copy of libfabric in OMPI, partly for convenience, and partly because the libfabric API is still changing slightly -- we need a stable libfabric stake in the ground against which to build the usnic and other components.  We'll update the embedded libfabric periodically to keep up with its development (e.g., I just did, earlier this morning).  We anticipate removing the embedded copy of libfabric at some point in the future.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Whoa; I'm getting a slew of -pedantic warnings when compiling libfabric!
</span><br>
<span class="quotelev1">&gt; --&gt; Yeah, sorry about that.  :-(  I added a pragma this morning that should remove some of them, but there's still a bunch of -pedantic warnings when you compile opal/mca/common/libfabric.  We're working with libfabric upstream to get them fixed.  Stay tuned.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16468.php">http://www.open-mpi.org/community/lists/devel/2014/12/16468.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16481.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<li><strong>Previous message:</strong> <a href="16479.php">Nick Papior Andersen: "Re: [OMPI devel] autogen broken"</a>
<li><strong>In reply to:</strong> <a href="16468.php">Jeff Squyres (jsquyres): "[OMPI devel] Update to usnic BTL / libfabric"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16481.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<li><strong>Reply:</strong> <a href="16481.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<li><strong>Reply:</strong> <a href="16482.php">Howard Pritchard: "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
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
