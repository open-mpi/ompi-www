<?
$subject_val = "Re: [OMPI devel] RFC: DL / DSO functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 12:56:02 2015" -->
<!-- isoreceived="20150225175602" -->
<!-- sent="Wed, 25 Feb 2015 17:56:00 +0000" -->
<!-- isosent="20150225175600" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: DL / DSO functionality" -->
<!-- id="C8844A29-E1F1-464D-B630-1AE00754AB73_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5225C637-D192-420B-B676-F88AB525420E_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-25 12:56:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17038.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Previous message:</strong> <a href="17036.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>In reply to:</strong> <a href="17034.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17038.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17038.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 25, 2015, at 11:51 AM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is a good question: what should we do here?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. Abort the configure (e.g., insist that the user install libltdl or --disable-dlopen)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd do this.  A clear message should make this no big deal for users, and in some cases it improves our odds of getting a (much welcome) report about some buggy dl component (or build system) logic.
</span><br>
<p>I did that and just shipped a tarball to get Hargroved.
<br>
<p>However, I'm a bit uneasy about it -- this is different than most other OMPI configure CLI options.  Most others are &quot;if unspecified, try it and use it if we can, and skip it if we can't&quot;.  This would be a departure from that.  :-\
<br>
<p><span class="quotelev2">&gt;&gt; 2. Fall back to a --disable-dlopen build
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; I looked into #2; at first blush, it looks kinda hard to do.  :-\  I.e., by the time we figure out that neither dl component will build, all the &quot;whether dl functionality will be available or not&quot; decisions have been made (and are difficult to un-make).  It would require some re-structuring -- e.g., deferring the &quot;whether dl functionality will be available or not&quot; decisions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah, sounds like a real pain, plus it could mask legitimate issues while we iron the kinks out of the new dl framework.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dave
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17034.php">http://www.open-mpi.org/community/lists/devel/2015/02/17034.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17038.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Previous message:</strong> <a href="17036.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>In reply to:</strong> <a href="17034.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17038.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17038.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
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
