<?
$subject_val = "Re: [OMPI devel] autoconf warnings: openib BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 18:08:59 2014" -->
<!-- isoreceived="20140311220859" -->
<!-- sent="Tue, 11 Mar 2014 22:08:57 +0000" -->
<!-- isosent="20140311220857" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autoconf warnings: openib BTL" -->
<!-- id="A4316D66-F028-4E40-8F68-87C0DCB7A74B_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1KyYQpzk4nJ4wn+GdcthZSy9oUV+8fdMH-e9+2_iLLLoc2Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-11 18:08:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14328.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31005 - trunk/ompi/mca/bcol/basesmuma"</a>
<li><strong>Previous message:</strong> <a href="14326.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31005 - trunk/ompi/mca/bcol/basesmuma"</a>
<li><strong>In reply to:</strong> <a href="14308.php">Mike Dubman: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14341.php">Mike Dubman: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="14341.php">Mike Dubman: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 6, 2014, at 12:00 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; but AF_IB is always declared, regardless of actual presence in the kernel.
</span><br>
<p>Right, which is why I don't understand the original comments that you can't do a run-time test for it...
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 6, 2014 at 5:56 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Let me see if I can help translate. I think the problem here is Jeff's comment about a &quot;run time check&quot;, which wasn't actually what he is proposing here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you look at Jeff's proposed code, what he is saying is that you don't need to use AC_TRY_RUN - you can just build based on whether or not AF_IB is declared, and so AC_CHECK_DECLS is adequate. If the resulting code fails, then that's an error anyway. So you can just protect the code as he shows and be done with it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This would avoid all the warnings we are now receiving on the trunk, and do what you need. Make sense?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 6, 2014 at 7:26 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Mar 6, 2014, at 4:08 AM, Vasily Filipov &lt;vasily_at_[hidden]&gt; wrote:
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
<span class="quotelev2">&gt; &gt;    I mean I cannot  use &quot;another way&quot; if func call for &quot;try_using_af_ib&quot; fails (call for &quot;try_the_other_way()&quot;) because RDMACM was compiled for AF_IB   usage (different fields in structs, different functions prototypes).
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
<span class="quotelev1">&gt; Right?  If so, I don't see why you need the AC_TRY_RUN -- if RDMACM is easily detectable as to which way it is compiled (because it has, for example, different fields), then AC_CHECK_DECLS should be enough, right?
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14306.php">http://www.open-mpi.org/community/lists/devel/2014/03/14306.php</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14307.php">http://www.open-mpi.org/community/lists/devel/2014/03/14307.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14308.php">http://www.open-mpi.org/community/lists/devel/2014/03/14308.php</a>
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
<li><strong>Next message:</strong> <a href="14328.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31005 - trunk/ompi/mca/bcol/basesmuma"</a>
<li><strong>Previous message:</strong> <a href="14326.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31005 - trunk/ompi/mca/bcol/basesmuma"</a>
<li><strong>In reply to:</strong> <a href="14308.php">Mike Dubman: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14341.php">Mike Dubman: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="14341.php">Mike Dubman: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
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
