<?
$subject_val = "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 21 10:11:53 2016" -->
<!-- isoreceived="20160421141153" -->
<!-- sent="Thu, 21 Apr 2016 08:11:51 -0600" -->
<!-- isosent="20160421141151" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')" -->
<!-- id="CAF1Cqj5HqdJyehATX+epR5yArJxbmZpi9G2s3cFeKXDyPAMa+Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA14rNGetppq3Pg0kht=kZY9XCELR_rMF9S+P_nYdPAdZSA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-04-21 10:11:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18803.php">Howard Pritchard: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>Previous message:</strong> <a href="18801.php">Alina Sklarevich: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>In reply to:</strong> <a href="18799.php">Paul Hargrove: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am Mittwoch, 20. April 2016 schrieb Paul Hargrove :
<br>
<p><span class="quotelev1">&gt; Not sure if Howard wants the check to be OFF by default in tarballs, or
</span><br>
<span class="quotelev1">&gt; absent completely.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
I meant the former.
<br>
<p><p><p><span class="quotelev1">&gt; I test almost exclusively from RC tarballs, and have access to many
</span><br>
<span class="quotelev1">&gt; uncommon platforms.
</span><br>
<span class="quotelev1">&gt; So, if you think it is useful for my testing to help look for these
</span><br>
<span class="quotelev1">&gt; warnings, then there should be some way to enable it from a tarball build.
</span><br>
<span class="quotelev1">&gt; That could be a configure option, or even something as obscure as &quot;mkdir
</span><br>
<span class="quotelev1">&gt; .git&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yet another option is to default the check ON in all RC tarballs, but OFF
</span><br>
<span class="quotelev1">&gt; in the release tarballs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Personally, the only thing I feel strongly about is not producing
</span><br>
<span class="quotelev1">&gt; developer-oriented warnings for the end-user who uses the normal configure
</span><br>
<span class="quotelev1">&gt; options.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 20, 2016 at 2:44 PM, Howard Pritchard &lt;hppritcha_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','hppritcha_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I also think this symbol checker should not be in the tarball.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Howard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2016-04-20 13:08 GMT-06:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','jsquyres_at_[hidden]');&gt;&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 20, 2016, at 2:08 PM, dpchoudh . &lt;dpchoudh_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','dpchoudh_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Just to clarify, I was doing a build (after adding code to support a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; new transport) from code pulled from git (a 'git clone') when I came across
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this warning, so I suppose this would be a 'developer build'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No worries.  I only brought it up because this is currently on master
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (and not v2.x), but it will eventually end up in a release branch -- even
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if it's v3.0.0.  So it's something we'd want figure out before it hits the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; release branch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I know I am not a real MPI developer (I am doing OMPI internal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; development for the second time in my whole career), but if my vote counts,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd vote for leaving the warning in.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't know why you keep pretending that you're not an OMPI developer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You're developing a BTL and asking all kinds of good questions about the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code, and that's good enough for all of us.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; It, in my opinion, encourages good coding practice, that should matter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to everyone, not just 'core developers'. However, I agree that the phrasing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the warning is confusing, and adding a URL there to an appropriate page
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should be enough to prevent future questions like this in the support forum.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW: I think I agree with Ralph on this one.  Yes, we should make those
</span><br>
<span class="quotelev3">&gt;&gt;&gt; common symbols zero.  But a user seeing this warning will likely be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; concerned, and there's nothing they can do about it.  So I think it should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be a &quot;developer only&quot; kind of warning.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My $0.02.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','jsquyres_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18797.php">http://www.open-mpi.org/community/lists/devel/2016/04/18797.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18798.php">http://www.open-mpi.org/community/lists/devel/2016/04/18798.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','PHHargrove_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18802/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18803.php">Howard Pritchard: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>Previous message:</strong> <a href="18801.php">Alina Sklarevich: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>In reply to:</strong> <a href="18799.php">Paul Hargrove: "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
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
