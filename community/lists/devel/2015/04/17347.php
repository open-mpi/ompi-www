<?
$subject_val = "Re: [OMPI devel] Suggested README changes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 16:06:53 2015" -->
<!-- isoreceived="20150423200653" -->
<!-- sent="Thu, 23 Apr 2015 14:06:52 -0600" -->
<!-- isosent="20150423200652" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Suggested README changes" -->
<!-- id="CAF1Cqj4v3XaxX5M2y8wKxa+EWoBBCsX4=UsL0RUZv=6TfuZBBg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA178KEL9spFD_-SxTP-7zcHG9iSvew5HokzcJyS2JKsKaQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Suggested README changes<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-23 16:06:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17348.php">Jeff Squyres (jsquyres): "[OMPI devel] OMPI 1.8.5rc3"</a>
<li><strong>Previous message:</strong> <a href="17346.php">Paul Hargrove: "[OMPI devel] Suggested README changes"</a>
<li><strong>In reply to:</strong> <a href="17346.php">Paul Hargrove: "[OMPI devel] Suggested README changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17349.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Suggested README changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Paul,
<br>
<p>Portals4 may be able to work  on cray XE/XC on top of IAA (ibverbs
<br>
simulation), but
<br>
it absolutely is not the support library for Cray interconnects since XE
<br>
days.  Never was
<br>
on Cray XT either, as you point out that was portals 3.X.
<br>
<p>Howard
<br>
<p><p>2015-04-23 12:29 GMT-06:00 Paul Hargrove &lt;phhargrove_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; I have attached a patch (against master) that fixes some typos and makes
</span><br>
<span class="quotelev1">&gt; an update.
</span><br>
<span class="quotelev1">&gt; It applies *almost* cleanly to v1.8, requiring &quot;-C2&quot; if applying with
</span><br>
<span class="quotelev1">&gt; &quot;git apply&quot; due to context changes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also noted the following which I believe is just plain false, but don't
</span><br>
<span class="quotelev1">&gt; have an alternative for.
</span><br>
<span class="quotelev1">&gt;   Portals4 is the support library for Cray interconnects, but is also
</span><br>
<span class="quotelev1">&gt;   available on other platforms (e.g., there is a Portals4 library
</span><br>
<span class="quotelev1">&gt;   implemented over regular TCP).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems to be based on a dated description of Portals3.3.  Cray does not
</span><br>
<span class="quotelev1">&gt; (to the best of my knowledge) have an implementation of Portals4, and the
</span><br>
<span class="quotelev1">&gt; reference implementation of Portals4 is over IB rather than over TCP.
</span><br>
<span class="quotelev1">&gt; Perhaps @regrant can offer a re-write?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul [generating more work for @jsquyres since 1999]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17346.php">http://www.open-mpi.org/community/lists/devel/2015/04/17346.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17347/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17348.php">Jeff Squyres (jsquyres): "[OMPI devel] OMPI 1.8.5rc3"</a>
<li><strong>Previous message:</strong> <a href="17346.php">Paul Hargrove: "[OMPI devel] Suggested README changes"</a>
<li><strong>In reply to:</strong> <a href="17346.php">Paul Hargrove: "[OMPI devel] Suggested README changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17349.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Suggested README changes"</a>
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
