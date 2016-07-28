<?
$subject_val = "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 20 17:44:12 2016" -->
<!-- isoreceived="20160420214412" -->
<!-- sent="Wed, 20 Apr 2016 15:44:10 -0600" -->
<!-- isosent="20160420214410" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')" -->
<!-- id="CAF1Cqj5CsmA4usJbKW6vFxdHj1oivggvg831Qsowh7ziFTT6Lg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F5FA7E0B-4BEF-444E-8353-9F483899A1E0_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-20 17:44:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18799.php">Paul Hargrove: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>Previous message:</strong> <a href="18797.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>In reply to:</strong> <a href="18797.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18799.php">Paul Hargrove: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>Reply:</strong> <a href="18799.php">Paul Hargrove: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I also think this symbol checker should not be in the tarball.
<br>
<p>Howard
<br>
<p><p>2016-04-20 13:08 GMT-06:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; On Apr 20, 2016, at 2:08 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just to clarify, I was doing a build (after adding code to support a new
</span><br>
<span class="quotelev1">&gt; transport) from code pulled from git (a 'git clone') when I came across
</span><br>
<span class="quotelev1">&gt; this warning, so I suppose this would be a 'developer build'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No worries.  I only brought it up because this is currently on master (and
</span><br>
<span class="quotelev1">&gt; not v2.x), but it will eventually end up in a release branch -- even if
</span><br>
<span class="quotelev1">&gt; it's v3.0.0.  So it's something we'd want figure out before it hits the
</span><br>
<span class="quotelev1">&gt; release branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I know I am not a real MPI developer (I am doing OMPI internal
</span><br>
<span class="quotelev1">&gt; development for the second time in my whole career), but if my vote counts,
</span><br>
<span class="quotelev1">&gt; I'd vote for leaving the warning in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know why you keep pretending that you're not an OMPI developer.
</span><br>
<span class="quotelev1">&gt; :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You're developing a BTL and asking all kinds of good questions about the
</span><br>
<span class="quotelev1">&gt; code, and that's good enough for all of us.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; It, in my opinion, encourages good coding practice, that should matter
</span><br>
<span class="quotelev1">&gt; to everyone, not just 'core developers'. However, I agree that the phrasing
</span><br>
<span class="quotelev1">&gt; of the warning is confusing, and adding a URL there to an appropriate page
</span><br>
<span class="quotelev1">&gt; should be enough to prevent future questions like this in the support forum.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: I think I agree with Ralph on this one.  Yes, we should make those
</span><br>
<span class="quotelev1">&gt; common symbols zero.  But a user seeing this warning will likely be
</span><br>
<span class="quotelev1">&gt; concerned, and there's nothing they can do about it.  So I think it should
</span><br>
<span class="quotelev1">&gt; be a &quot;developer only&quot; kind of warning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My $0.02.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18797.php">http://www.open-mpi.org/community/lists/devel/2016/04/18797.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18798/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18799.php">Paul Hargrove: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>Previous message:</strong> <a href="18797.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>In reply to:</strong> <a href="18797.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18799.php">Paul Hargrove: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>Reply:</strong> <a href="18799.php">Paul Hargrove: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
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
