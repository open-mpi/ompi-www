<?
$subject_val = "Re: [OMPI devel] autoconf warnings: openib BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 10:56:29 2014" -->
<!-- isoreceived="20140306155629" -->
<!-- sent="Thu, 6 Mar 2014 07:56:28 -0800" -->
<!-- isosent="20140306155628" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autoconf warnings: openib BTL" -->
<!-- id="CAMD57ocZ1M4mLMuqmu3qVE-ZoNp5GNgDkdpzdbdH1jhL-h0+BA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="63FA0C10-C902-40E0-8333-39EDF792CF79_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] autoconf warnings: openib BTL<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-06 10:56:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14308.php">Mike Dubman: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14306.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>In reply to:</strong> <a href="14306.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14308.php">Mike Dubman: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="14308.php">Mike Dubman: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me see if I can help translate. I think the problem here is Jeff's
<br>
comment about a &quot;run time check&quot;, which wasn't actually what he is
<br>
proposing here.
<br>
<p>If you look at Jeff's proposed code, what he is saying is that you don't
<br>
need to use AC_TRY_RUN - you can just build based on whether or not AF_IB
<br>
is declared, and so AC_CHECK_DECLS is adequate. If the resulting code
<br>
fails, then that's an error anyway. So you can just protect the code as he
<br>
shows and be done with it.
<br>
<p>This would avoid all the warnings we are now receiving on the trunk, and do
<br>
what you need. Make sense?
<br>
<p><p><p><p><p>On Thu, Mar 6, 2014 at 7:26 AM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 6, 2014, at 4:08 AM, Vasily Filipov &lt;vasily_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #if HAVE_DECL_AF_IB
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    rc = try_using_af_ib();
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    if (OMPI_ERR_NOT_AVAILABLE == rc) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        rc = try_the_other_way();
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    }
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #else
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    rc = try_the_other_way();
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt;    I mean I cannot  use &quot;another way&quot; if func call for &quot;try_using_af_ib&quot;
</span><br>
<span class="quotelev1">&gt; fails (call for &quot;try_the_other_way()&quot;) because RDMACM was compiled for
</span><br>
<span class="quotelev1">&gt; AF_IB   usage (different fields in structs, different functions prototypes).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, that means the implementation is reduced to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #if HAVE_DECL_AF_IB
</span><br>
<span class="quotelev1">&gt;    rc = try_using_af_ib();
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;    rc = try_the_other_way();
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right?  If so, I don't see why you need the AC_TRY_RUN -- if RDMACM is
</span><br>
<span class="quotelev1">&gt; easily detectable as to which way it is compiled (because it has, for
</span><br>
<span class="quotelev1">&gt; example, different fields), then AC_CHECK_DECLS should be enough, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I must be missing something...?
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14306.php">http://www.open-mpi.org/community/lists/devel/2014/03/14306.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14307/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14308.php">Mike Dubman: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14306.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>In reply to:</strong> <a href="14306.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14308.php">Mike Dubman: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="14308.php">Mike Dubman: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
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
