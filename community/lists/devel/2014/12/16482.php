<?
$subject_val = "Re: [OMPI devel] Update to usnic BTL / libfabric";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 16:59:36 2014" -->
<!-- isoreceived="20141209215936" -->
<!-- sent="Tue, 9 Dec 2014 13:59:35 -0800" -->
<!-- isosent="20141209215935" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Update to usnic BTL / libfabric" -->
<!-- id="CAF1Cqj4P=PZhQnqPoz5yqHzY2=o+v75cMe02bRZ3V0PTuOoWaw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E4D5DBA5-2137-43AE-B9AF-E2BC9C859E00_at_open-mpi.org" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-09 16:59:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16483.php">Ralph Castain: "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<li><strong>Previous message:</strong> <a href="16481.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<li><strong>In reply to:</strong> <a href="16480.php">Ralph Castain: "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16483.php">Ralph Castain: "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<li><strong>Reply:</strong> <a href="16483.php">Ralph Castain: "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI Ralph,
<br>
<p>Jeff fixed this in c40fd09.  That's the problem I hit, in addition to
<br>
later not having psm_infinipath.  After that commit,and commit cd0a54d
<br>
you should be able to config and make again.
<br>
<p>Howard
<br>
<p><p><p><p><p><p>2014-12-09 13:45 GMT-08:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Just as an FYI: we discovered that libfabric requires libnl, and that the
</span><br>
<span class="quotelev1">&gt; configure logic doesn&#226;&#128;&#153;t kick you out if libnl isn&#226;&#128;&#153;t found - you just fail
</span><br>
<span class="quotelev1">&gt; during compile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 9, 2014, at 6:29 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As I mentioned on the call a week ago, the usnic BTL has been updated to
</span><br>
<span class="quotelev1">&gt; use libfabric (instead of verbs).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What is libfabric?
</span><br>
<span class="quotelev2">&gt; &gt; --&gt; Think of it as a &quot;next generation verbs&quot; -- it's OS-bypass
</span><br>
<span class="quotelev1">&gt; networking for a wide range of network hardware, and libfabric contains
</span><br>
<span class="quotelev1">&gt; many more capabilities than the verbs API.  libfabric is being developed by
</span><br>
<span class="quotelev1">&gt; most the same people who initially developed verbs; it's not in competition
</span><br>
<span class="quotelev1">&gt; with verbs -- it's a true &quot;next generation&quot; effort.  See
</span><br>
<span class="quotelev1">&gt; <a href="http://ofiwg.github.io/libfabric/">http://ofiwg.github.io/libfabric/</a> for more detail.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Why should anyone care?
</span><br>
<span class="quotelev2">&gt; &gt; --&gt; The usnic BTL has been updated to use libfabric.  I have therefore
</span><br>
<span class="quotelev1">&gt; removed all usnic-specific code from the verbs parts of the OMPI code base
</span><br>
<span class="quotelev1">&gt; (e.g., opal/mca/common).  Additionally, there will shortly be another
</span><br>
<span class="quotelev1">&gt; commit that introduces another OMPI network device that uses libfabric.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Did you really just embed libfabric in opal/common/libfabric?
</span><br>
<span class="quotelev2">&gt; &gt; --&gt; Yes -- but this is temporary.  libfabric isn't v1.0 yet -- there
</span><br>
<span class="quotelev1">&gt; aren't libfabric tarballs being distributed.  Hence, other than git-cloning
</span><br>
<span class="quotelev1">&gt; the libfabric github repo, you can't easily build OMPI against libfabric.
</span><br>
<span class="quotelev1">&gt; So we are temporarily embedding a copy of libfabric in OMPI, partly for
</span><br>
<span class="quotelev1">&gt; convenience, and partly because the libfabric API is still changing
</span><br>
<span class="quotelev1">&gt; slightly -- we need a stable libfabric stake in the ground against which to
</span><br>
<span class="quotelev1">&gt; build the usnic and other components.  We'll update the embedded libfabric
</span><br>
<span class="quotelev1">&gt; periodically to keep up with its development (e.g., I just did, earlier
</span><br>
<span class="quotelev1">&gt; this morning).  We anticipate removing the embedded copy of libfabric at
</span><br>
<span class="quotelev1">&gt; some point in the future.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Whoa; I'm getting a slew of -pedantic warnings when compiling libfabric!
</span><br>
<span class="quotelev2">&gt; &gt; --&gt; Yeah, sorry about that.  :-(  I added a pragma this morning that
</span><br>
<span class="quotelev1">&gt; should remove some of them, but there's still a bunch of -pedantic warnings
</span><br>
<span class="quotelev1">&gt; when you compile opal/mca/common/libfabric.  We're working with libfabric
</span><br>
<span class="quotelev1">&gt; upstream to get them fixed.  Stay tuned.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16468.php">http://www.open-mpi.org/community/lists/devel/2014/12/16468.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16480.php">http://www.open-mpi.org/community/lists/devel/2014/12/16480.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16482/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16483.php">Ralph Castain: "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<li><strong>Previous message:</strong> <a href="16481.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<li><strong>In reply to:</strong> <a href="16480.php">Ralph Castain: "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16483.php">Ralph Castain: "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<li><strong>Reply:</strong> <a href="16483.php">Ralph Castain: "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
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
