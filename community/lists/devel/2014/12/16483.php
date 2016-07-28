<?
$subject_val = "Re: [OMPI devel] Update to usnic BTL / libfabric";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 18:08:45 2014" -->
<!-- isoreceived="20141209230845" -->
<!-- sent="Tue, 9 Dec 2014 15:08:41 -0800" -->
<!-- isosent="20141209230841" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Update to usnic BTL / libfabric" -->
<!-- id="05BC54C2-097E-4277-9F04-A9F372040064_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAF1Cqj4P=PZhQnqPoz5yqHzY2=o+v75cMe02bRZ3V0PTuOoWaw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-12-09 18:08:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16484.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<li><strong>Previous message:</strong> <a href="16482.php">Howard Pritchard: "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<li><strong>In reply to:</strong> <a href="16482.php">Howard Pritchard: "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16484.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<li><strong>Reply:</strong> <a href="16484.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh I can configure and make just fine - I have nl installed on my machines. The problem was hit by our folks at Intel, who didn&#226;&#128;&#153;t have libnl and it didn&#226;&#128;&#153;t kick out. So far as they tell me (as of 2 minutes ago), it still doesn&#226;&#128;&#153;t, though I&#226;&#128;&#153;ll double-check with them.
<br>
<p><p><span class="quotelev1">&gt; On Dec 9, 2014, at 1:59 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HI Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff fixed this in c40fd09.  That's the problem I hit, in addition to
</span><br>
<span class="quotelev1">&gt; later not having psm_infinipath.  After that commit,and commit cd0a54d
</span><br>
<span class="quotelev1">&gt; you should be able to config and make again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2014-12-09 13:45 GMT-08:00 Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt; Just as an FYI: we discovered that libfabric requires libnl, and that the configure logic doesn&#226;&#128;&#153;t kick you out if libnl isn&#226;&#128;&#153;t found - you just fail during compile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 9, 2014, at 6:29 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As I mentioned on the call a week ago, the usnic BTL has been updated to use libfabric (instead of verbs).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What is libfabric?
</span><br>
<span class="quotelev2">&gt; &gt; --&gt; Think of it as a &quot;next generation verbs&quot; -- it's OS-bypass networking for a wide range of network hardware, and libfabric contains many more capabilities than the verbs API.  libfabric is being developed by most the same people who initially developed verbs; it's not in competition with verbs -- it's a true &quot;next generation&quot; effort.  See <a href="http://ofiwg.github.io/libfabric/">http://ofiwg.github.io/libfabric/</a> &lt;<a href="http://ofiwg.github.io/libfabric/">http://ofiwg.github.io/libfabric/</a>&gt; for more detail.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Why should anyone care?
</span><br>
<span class="quotelev2">&gt; &gt; --&gt; The usnic BTL has been updated to use libfabric.  I have therefore removed all usnic-specific code from the verbs parts of the OMPI code base (e.g., opal/mca/common).  Additionally, there will shortly be another commit that introduces another OMPI network device that uses libfabric.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Did you really just embed libfabric in opal/common/libfabric?
</span><br>
<span class="quotelev2">&gt; &gt; --&gt; Yes -- but this is temporary.  libfabric isn't v1.0 yet -- there aren't libfabric tarballs being distributed.  Hence, other than git-cloning the libfabric github repo, you can't easily build OMPI against libfabric.  So we are temporarily embedding a copy of libfabric in OMPI, partly for convenience, and partly because the libfabric API is still changing slightly -- we need a stable libfabric stake in the ground against which to build the usnic and other components.  We'll update the embedded libfabric periodically to keep up with its development (e.g., I just did, earlier this morning).  We anticipate removing the embedded copy of libfabric at some point in the future.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Whoa; I'm getting a slew of -pedantic warnings when compiling libfabric!
</span><br>
<span class="quotelev2">&gt; &gt; --&gt; Yeah, sorry about that.  :-(  I added a pragma this morning that should remove some of them, but there's still a bunch of -pedantic warnings when you compile opal/mca/common/libfabric.  We're working with libfabric upstream to get them fixed.  Stay tuned.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16468.php">http://www.open-mpi.org/community/lists/devel/2014/12/16468.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16468.php">http://www.open-mpi.org/community/lists/devel/2014/12/16468.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16480.php">http://www.open-mpi.org/community/lists/devel/2014/12/16480.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16480.php">http://www.open-mpi.org/community/lists/devel/2014/12/16480.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16482.php">http://www.open-mpi.org/community/lists/devel/2014/12/16482.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16483/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16484.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<li><strong>Previous message:</strong> <a href="16482.php">Howard Pritchard: "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<li><strong>In reply to:</strong> <a href="16482.php">Howard Pritchard: "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16484.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<li><strong>Reply:</strong> <a href="16484.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
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
