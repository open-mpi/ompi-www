<?
$subject_val = "Re: [OMPI devel] clang alignment warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 10 16:41:28 2014" -->
<!-- isoreceived="20140910204128" -->
<!-- sent="Thu, 11 Sep 2014 05:41:27 +0900" -->
<!-- isosent="20140910204127" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] clang alignment warnings" -->
<!-- id="CAMJJpkVAJr5AeUwgeuSspTMoRvr399DY330D02WT8FGs390yBg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9D0D1BB4-2E20-4E08-9629-4C68AC50D092_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] clang alignment warnings<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-10 16:41:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15801.php">Edgar Gabriel: "Re: [OMPI devel] Need to know your Github ID"</a>
<li><strong>Previous message:</strong> <a href="15799.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] clang alignment warnings"</a>
<li><strong>In reply to:</strong> <a href="15799.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] clang alignment warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15808.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] clang alignment warnings"</a>
<li><strong>Reply:</strong> <a href="15808.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] clang alignment warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It complains about 0x2aaaab1b1ed9 being misaligned which seems as a valid
<br>
complaint. What is the dst value when this trigger? What is
<br>
var-&gt;mbv_storage?
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Thu, Sep 11, 2014 at 5:29 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Sep 10, 2014, at 4:23 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regardless, what do we do about this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To answer my own question, I guess we can replace:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    dst-&gt;intval = int_value
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    int *bogus = (int*) dst;
</span><br>
<span class="quotelev1">&gt;    *bogus = int_value;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and do a similar thing for the bool.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Seems kludgey, and kinda defeats the point of having a union, though.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15799.php">http://www.open-mpi.org/community/lists/devel/2014/09/15799.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15800/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15801.php">Edgar Gabriel: "Re: [OMPI devel] Need to know your Github ID"</a>
<li><strong>Previous message:</strong> <a href="15799.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] clang alignment warnings"</a>
<li><strong>In reply to:</strong> <a href="15799.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] clang alignment warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15808.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] clang alignment warnings"</a>
<li><strong>Reply:</strong> <a href="15808.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] clang alignment warnings"</a>
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
