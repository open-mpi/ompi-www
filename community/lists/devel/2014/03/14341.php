<?
$subject_val = "Re: [OMPI devel] autoconf warnings: openib BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 13 04:59:18 2014" -->
<!-- isoreceived="20140313085918" -->
<!-- sent="Thu, 13 Mar 2014 10:59:17 +0200" -->
<!-- isosent="20140313085917" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autoconf warnings: openib BTL" -->
<!-- id="CAAO1Kyb1kjPMK6tv8XLihET7FTpYvR2MBi9YfyYLR=6COSGY-Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A4316D66-F028-4E40-8F68-87C0DCB7A74B_at_cisco.com" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-13 04:59:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14342.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14340.php">Ralph Castain: "Re: [OMPI devel] orte-restart and PATH"</a>
<li><strong>In reply to:</strong> <a href="14327.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14342.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="14342.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev3">&gt;&gt;&gt;Right?  If so, I don't see why you need the AC_TRY_RUN -- if RDMACM is
</span><br>
easily detectable as to which way it is compiled (because it has, for
<br>
example, different fields), then AC_CHECK_DECLS should be enough, right?
<br>
<p>RDMACM API has different implementation requirements for its providers:
<br>
tcp, af_ib (different structs/fields should be used/passed. different
<br>
APIs/hooks should be called for bring-up).
<br>
<p>Currently, the RDMACM provider can be selected at compile time only and
<br>
mpirun becomes incompatible to other RDMACM providers.
<br>
<p>AC_TRY_RUN is a protection that selected provider will be able to
<br>
run,otherwise no fallback to other provider will be available for user at
<br>
runtime.
<br>
<p><p><p><p><p><p>On Wed, Mar 12, 2014 at 12:08 AM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 6, 2014, at 12:00 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; but AF_IB is always declared, regardless of actual presence in the
</span><br>
<span class="quotelev1">&gt; kernel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right, which is why I don't understand the original comments that you
</span><br>
<span class="quotelev1">&gt; can't do a run-time test for it...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Mar 6, 2014 at 5:56 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Let me see if I can help translate. I think the problem here is Jeff's
</span><br>
<span class="quotelev1">&gt; comment about a &quot;run time check&quot;, which wasn't actually what he is
</span><br>
<span class="quotelev1">&gt; proposing here.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If you look at Jeff's proposed code, what he is saying is that you don't
</span><br>
<span class="quotelev1">&gt; need to use AC_TRY_RUN - you can just build based on whether or not AF_IB
</span><br>
<span class="quotelev1">&gt; is declared, and so AC_CHECK_DECLS is adequate. If the resulting code
</span><br>
<span class="quotelev1">&gt; fails, then that's an error anyway. So you can just protect the code as he
</span><br>
<span class="quotelev1">&gt; shows and be done with it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This would avoid all the warnings we are now receiving on the trunk, and
</span><br>
<span class="quotelev1">&gt; do what you need. Make sense?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Mar 6, 2014 at 7:26 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 6, 2014, at 4:08 AM, Vasily Filipov &lt;vasily_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #if HAVE_DECL_AF_IB
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;    rc = try_using_af_ib();
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;    if (OMPI_ERR_NOT_AVAILABLE == rc) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;        rc = try_the_other_way();
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;    }
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #else
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;    rc = try_the_other_way();
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    I mean I cannot  use &quot;another way&quot; if func call for
</span><br>
<span class="quotelev1">&gt; &quot;try_using_af_ib&quot; fails (call for &quot;try_the_other_way()&quot;) because RDMACM was
</span><br>
<span class="quotelev1">&gt; compiled for AF_IB   usage (different fields in structs, different
</span><br>
<span class="quotelev1">&gt; functions prototypes).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ok, that means the implementation is reduced to:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #if HAVE_DECL_AF_IB
</span><br>
<span class="quotelev2">&gt; &gt;    rc = try_using_af_ib();
</span><br>
<span class="quotelev2">&gt; &gt; #else
</span><br>
<span class="quotelev2">&gt; &gt;    rc = try_the_other_way();
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Right?  If so, I don't see why you need the AC_TRY_RUN -- if RDMACM is
</span><br>
<span class="quotelev1">&gt; easily detectable as to which way it is compiled (because it has, for
</span><br>
<span class="quotelev1">&gt; example, different fields), then AC_CHECK_DECLS should be enough, right?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I must be missing something...?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14306.php">http://www.open-mpi.org/community/lists/devel/2014/03/14306.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14307.php">http://www.open-mpi.org/community/lists/devel/2014/03/14307.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14308.php">http://www.open-mpi.org/community/lists/devel/2014/03/14308.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14327.php">http://www.open-mpi.org/community/lists/devel/2014/03/14327.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14341/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14342.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14340.php">Ralph Castain: "Re: [OMPI devel] orte-restart and PATH"</a>
<li><strong>In reply to:</strong> <a href="14327.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14342.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="14342.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
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
