<?
$subject_val = "Re: [OMPI devel] ofi/mtl causing problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 16:10:12 2014" -->
<!-- isoreceived="20141217211012" -->
<!-- sent="Wed, 17 Dec 2014 14:10:12 -0700" -->
<!-- isosent="20141217211012" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ofi/mtl causing problems" -->
<!-- id="CAF1Cqj67hmSKmoadPatAYa1n9thfGq6LDBwJ2HvKwxOrdZQ7pg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="01C7477B-8C6F-4CC2-883A-E218C0317C84_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ofi/mtl causing problems<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 16:10:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16655.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Previous message:</strong> <a href="16653.php">Paul Hargrove: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<li><strong>In reply to:</strong> <a href="16649.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16655.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Reply:</strong> <a href="16655.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm fixing the libfabric m4 file.  It just says its happy if
<br>
infiniband/verbs.h is there, then goes check some specific providers, but
<br>
doesn't go back and check whether the specific providers are actually
<br>
available.
<br>
<p><p>2014-12-17 12:53 GMT-07:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 17, 2014, at 2:19 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I did another mtt run with --disable-libfabric included on the configure
</span><br>
<span class="quotelev1">&gt; line and still failed with the same problem, mtl/ofi thinks its okay to
</span><br>
<span class="quotelev1">&gt; build...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  FWIW: this problem is because the switch is --without-libfabric, not
</span><br>
<span class="quotelev1">&gt; --disable-libfabric.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you use --disable-libfabric, configure immediately warns you that that
</span><br>
<span class="quotelev1">&gt; is an unrecognized switch, but it keeps going (just like any other
</span><br>
<span class="quotelev1">&gt; unrecognized switch).
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16649.php">http://www.open-mpi.org/community/lists/devel/2014/12/16649.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16654/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16655.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Previous message:</strong> <a href="16653.php">Paul Hargrove: "Re: [OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<li><strong>In reply to:</strong> <a href="16649.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16655.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Reply:</strong> <a href="16655.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
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
