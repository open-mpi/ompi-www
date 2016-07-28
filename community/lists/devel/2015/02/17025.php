<?
$subject_val = "Re: [OMPI devel] RFC: DL / DSO functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 13:55:03 2015" -->
<!-- isoreceived="20150224185503" -->
<!-- sent="Tue, 24 Feb 2015 10:55:01 -0800" -->
<!-- isosent="20150224185501" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: DL / DSO functionality" -->
<!-- id="CAAvDA141fs9Qf8gGpN79wg1vzEzakoXw_ApRWkHgbdjwBiqx9g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5A8C7981-E041-4302-8D5A-9E54333585C8_at_cisco.com" -->
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
<strong>Date:</strong> 2015-02-24 13:55:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17026.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Previous message:</strong> <a href="17024.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>In reply to:</strong> <a href="17024.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17026.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17026.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>+0.95
<br>
<p>Read the new PR yesterday and agree it makes sense to bypass libltdl where
<br>
it would add little or nothing to a &quot;dlopen-lovin' platform&quot;.
<br>
<p>Forgive me for asking a question I am sure I could answer by reading the
<br>
.m4:
<br>
How are you planning to distinguish which platforms support dlopen()?
<br>
<p>And the question you should have seen coming:
<br>
May I have a tarball please?
<br>
<p>If I get a tarball, I will &quot;smoke test&quot; Solaris-10, Solaris-11 and the BSDs
<br>
before tomorrow's planned merge.  I also have access to Mac OS X back to
<br>
the oldest OMPI supports (10.6 if I recall, but I have back as far as 10.4).
<br>
<p>-Paul
<br>
<p>On Tue, Feb 24, 2015 at 9:36 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Short version
</span><br>
<span class="quotelev1">&gt; =============
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think I have a PR that now solves the libltdl issue.  See
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/pull/410">https://github.com/open-mpi/ompi/pull/410</a> if you care.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If not one has any objections, I'll merge this tomorrow (Wed 25 Feb 2015).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More detail
</span><br>
<span class="quotelev1">&gt; ===========
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Original problem (can't upgrade Libtool beyond 2.4.2): see
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/issues/311">https://github.com/open-mpi/ompi/issues/311</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Solution that we didn't like: remove libltdl from OMPI code base (
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/pull/366">https://github.com/open-mpi/ompi/pull/366</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Solution that ended up not working: manually embedding libltdl in OMPI
</span><br>
<span class="quotelev1">&gt; code base (<a href="https://github.com/open-mpi/ompi/pull/390">https://github.com/open-mpi/ompi/pull/390</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This new solution: OPAL DL framework with 2 components (
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/pull/410">https://github.com/open-mpi/ompi/pull/410</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Feel free to ask for more info.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17024.php">http://www.open-mpi.org/community/lists/devel/2015/02/17024.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17025/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17026.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Previous message:</strong> <a href="17024.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>In reply to:</strong> <a href="17024.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17026.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17026.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
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
