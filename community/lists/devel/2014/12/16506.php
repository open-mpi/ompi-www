<?
$subject_val = "Re: [OMPI devel] still supporting pgi?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 12:58:44 2014" -->
<!-- isoreceived="20141211175844" -->
<!-- sent="Thu, 11 Dec 2014 09:58:43 -0800" -->
<!-- isosent="20141211175843" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] still supporting pgi?" -->
<!-- id="CAF1Cqj7bfYcEGHey++hmYFagXUNKTo++BSWF+2xdgBi0hn=9TQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2D822D08-DDCB-4F07-90E0-271D2879935A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] still supporting pgi?<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-11 12:58:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16507.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>Previous message:</strong> <a href="16505.php">Nathan Hjelm: "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>In reply to:</strong> <a href="16504.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] still supporting pgi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16507.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>Reply:</strong> <a href="16507.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] still supporting pgi?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, I'll try to fix things.  problem in opal_datatype_internal.h, then a
<br>
meltdown with libfabric owing to the fact that its probably
<br>
only been used in a gnu env.  I'll open an issue on that one and assign it
<br>
to Jeff.
<br>
<p>I think we should be turning this libfabric build off unless one asks for
<br>
it.
<br>
<p>Howard
<br>
<p><p>2014-12-11 7:42 GMT-08:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 11, 2014, at 7:40 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I&#226;&#128;&#153;m unaware of any conscious decision to cut pgi off - I think it has
</span><br>
<span class="quotelev1">&gt; been more a case of nobody having a license to use for testing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +1
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16504.php">http://www.open-mpi.org/community/lists/devel/2014/12/16504.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16506/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16507.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>Previous message:</strong> <a href="16505.php">Nathan Hjelm: "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>In reply to:</strong> <a href="16504.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] still supporting pgi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16507.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>Reply:</strong> <a href="16507.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] still supporting pgi?"</a>
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
