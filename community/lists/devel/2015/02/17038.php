<?
$subject_val = "Re: [OMPI devel] RFC: DL / DSO functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 13:17:08 2015" -->
<!-- isoreceived="20150225181708" -->
<!-- sent="Wed, 25 Feb 2015 10:17:06 -0800" -->
<!-- isosent="20150225181706" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: DL / DSO functionality" -->
<!-- id="CAAvDA14HhEZfmeKkeh2EFtZgbGP+7A2mZgdUcrs51VKsFmdcgg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C8844A29-E1F1-464D-B630-1AE00754AB73_at_cisco.com" -->
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
<strong>Date:</strong> 2015-02-25 13:17:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17039.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Previous message:</strong> <a href="17037.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>In reply to:</strong> <a href="17037.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17039.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17039.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17040.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Feb 25, 2015 at 9:56 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Feb 25, 2015, at 11:51 AM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This is a good question: what should we do here?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1. Abort the configure (e.g., insist that the user install libltdl or
</span><br>
<span class="quotelev1">&gt; --disable-dlopen)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'd do this.  A clear message should make this no big deal for users,
</span><br>
<span class="quotelev1">&gt; and in some cases it improves our odds of getting a (much welcome) report
</span><br>
<span class="quotelev1">&gt; about some buggy dl component (or build system) logic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did that and just shipped a tarball to get Hargroved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Tests have been dispatched...  I will report complete results later today.
<br>
The first of the BSD results should be in soon, and I'll plan to report
<br>
go/nogo.
<br>
<p><p><p><span class="quotelev1">&gt; However, I'm a bit uneasy about it -- this is different than most other
</span><br>
<span class="quotelev1">&gt; OMPI configure CLI options.  Most others are &quot;if unspecified, try it and
</span><br>
<span class="quotelev1">&gt; use it if we can, and skip it if we can't&quot;.  This would be a departure from
</span><br>
<span class="quotelev1">&gt; that.  :-\
</span><br>
<p><p><p>Assuming that the new tarball finds dlopen() support in libc on the BSDs
<br>
then I am not going to encounter the new behavior unless I manually disable
<br>
(something like &quot;--enable-mca-no-build=dl-dlopen&quot;, right?).  To be honest,
<br>
any platform that does reach this point is going to be rare (in the absence
<br>
of the bugs that Dave refers to).  So, this &quot;departure&quot; seems to be pretty
<br>
minor (IMHO).
<br>
<p>It really comes down to:
<br>
&quot;Sorry, but we can't fix the situation without your help - you must chose
<br>
to either (1) install libltdl for dynamically linked components or (2)
<br>
--disable-dlopen for statically linked components&quot;.
<br>
<p>-Paul
<br>
<pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17038/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17039.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Previous message:</strong> <a href="17037.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>In reply to:</strong> <a href="17037.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17039.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17039.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17040.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
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
