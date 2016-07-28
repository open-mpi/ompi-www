<?
$subject_val = "Re: [OMPI devel] RFC: DL / DSO functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 16:45:18 2015" -->
<!-- isoreceived="20150224214518" -->
<!-- sent="Tue, 24 Feb 2015 13:45:14 -0800" -->
<!-- isosent="20150224214514" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: DL / DSO functionality" -->
<!-- id="CAAvDA17WJTsLYLf8fwrntsA64cGhRpJx4iBrrmkBYGRTH5iLiA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E8573551-C432-4923-9EA9-012CB5B77EC5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: DL / DSO functionality<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-24 16:45:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17028.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Previous message:</strong> <a href="17026.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>In reply to:</strong> <a href="17026.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17028.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17028.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17030.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See two responses inline below.
<br>
<p><p>On Tue, Feb 24, 2015 at 1:08 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Feb 24, 2015, at 1:55 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Forgive me for asking a question I am sure I could answer by reading the
</span><br>
<span class="quotelev1">&gt; .m4:
</span><br>
<span class="quotelev2">&gt; &gt; How are you planning to distinguish which platforms support dlopen()?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check for dlfcn.h and the dlopen symbol in -ldl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Then the paranoid part of me wants to note that since you don't try using
<br>
dlopen() in the configure tests you risk encountering platforms with
<br>
non-functional/non-conforming implementations.  For instance stubs that
<br>
return w/ errno=ENOSYS or which don't support some flags you want/need to
<br>
pass.  I suppose one can safely ignore that possibility unless/until one
<br>
encounters such a beast.
<br>
<p>On a related note: if dlopen() does fail at runtime, will things just
<br>
&quot;magically&quot; fallback to libltdl (assuming both were found at configure
<br>
time).
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; And the question you should have seen coming:
</span><br>
<span class="quotelev2">&gt; &gt; May I have a tarball please?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If I get a tarball, I will &quot;smoke test&quot; Solaris-10, Solaris-11 and the
</span><br>
<span class="quotelev1">&gt; BSDs before tomorrow's planned merge.  I also have access to Mac OS X back
</span><br>
<span class="quotelev1">&gt; to the oldest OMPI supports (10.6 if I recall, but I have back as far as
</span><br>
<span class="quotelev1">&gt; 10.4).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Awesome; thanks.  Making a distcheck tarball now... done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/~jsquyres/unofficial/">http://www.open-mpi.org/~jsquyres/unofficial/</a>
</span><br>
<p><p><p>Smoke testing will begin momentarily...
<br>
<p><p><p><span class="quotelev1">&gt; I can certainly hold off on merging until your smoke testing is done /
</span><br>
<span class="quotelev1">&gt; we've worked out any kinks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The Solaris-10/SPARC builds will take a couple hours, but I should have
<br>
results well before I quit for the day.  So, you should certainly have
<br>
email about any &quot;kinks&quot; I find before you start any merge on Wed.
<br>
<p>-Paul
<br>
<p><p><p><span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17026.php">http://www.open-mpi.org/community/lists/devel/2015/02/17026.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17027/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17028.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Previous message:</strong> <a href="17026.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>In reply to:</strong> <a href="17026.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17028.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17028.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17030.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
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
