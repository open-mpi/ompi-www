<?
$subject_val = "Re: [OMPI devel] anyone built master on qlogic system today?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 14:23:48 2015" -->
<!-- isoreceived="20150722182348" -->
<!-- sent="Wed, 22 Jul 2015 12:23:46 -0600" -->
<!-- isosent="20150722182346" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] anyone built master on qlogic system today?" -->
<!-- id="CAF1Cqj7UjbkDyp5qNrGjVY_mhSS1DreH_hWAvjz-4NJmmKrXgg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="0499508D-1AA6-458A-B4C7-B0EA8418693D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] anyone built master on qlogic system today?<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-22 14:23:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17685.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Previous message:</strong> <a href="17683.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] anyone built master on qlogic system today?"</a>
<li><strong>In reply to:</strong> <a href="17683.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] anyone built master on qlogic system today?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>Found the problem, had to do a hard reset to origin/master for some reason
<br>
to get missing files back.
<br>
<p>Howard
<br>
<p><p>2015-07-22 12:17 GMT-06:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; On Jul 22, 2015, at 1:46 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello Folks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I&quot;m investigating a psm/ofi mtl problem on one of our qlogic systems and
</span><br>
<span class="quotelev1">&gt; ended up investigating something else.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There seem to be a bunch of missing config.h.in files if I of current
</span><br>
<span class="quotelev1">&gt; master head.
</span><br>
<span class="quotelev2">&gt; &gt; If I go back to bd60ce16 things seem to be okay.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many config.h.in files are not stored in git.  They are generated when
</span><br>
<span class="quotelev1">&gt; you run autogen.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which config.h.in files are you referring to?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; The upshot is that one doesn't get past  configure.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Not sure if this is specific to systems with psm installed yet.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anyone else seen this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nope -- I can build from master tip (dev-2119-gf7f1fc9).
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17683.php">http://www.open-mpi.org/community/lists/devel/2015/07/17683.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17684/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17685.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Previous message:</strong> <a href="17683.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] anyone built master on qlogic system today?"</a>
<li><strong>In reply to:</strong> <a href="17683.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] anyone built master on qlogic system today?"</a>
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
