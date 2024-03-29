<?
$subject_val = "Re: [OMPI devel] thread-tests hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 11:39:26 2014" -->
<!-- isoreceived="20141105163926" -->
<!-- sent="Wed, 5 Nov 2014 16:39:25 +0000" -->
<!-- isosent="20141105163925" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] thread-tests hang" -->
<!-- id="F53C5B32-1E00-447A-AD5A-78626C2E588D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KyaJxTjKEhXm-sfnCeM6h29uEV=yXF=GLzOtDNY=R=3RNg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] thread-tests hang<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-05 11:39:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16207.php">Mike Dubman: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Previous message:</strong> <a href="16205.php">Mike Dubman: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>In reply to:</strong> <a href="16205.php">Mike Dubman: "Re: [OMPI devel] thread-tests hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16207.php">Mike Dubman: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16207.php">Mike Dubman: "Re: [OMPI devel] thread-tests hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I thought you said passing only --enable-mpi-thread-multiple made it work...?
<br>
<p>On Nov 5, 2014, at 11:37 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; the problem is that now the behavior is changed.
</span><br>
<span class="quotelev1">&gt; Before: user provided single flag and could use MT support.
</span><br>
<span class="quotelev1">&gt; Now same method will not work starting from v1.8.4 which is production branch and will live for a long time with it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is that possible that some1 familiar with this configure kung-fu will fix it to keep old behave by enabling both flags if one of them is ON?
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Nov 5, 2014 at 5:41 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Nov 5, 2014, at 9:42 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hey Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; now we use only this &quot;--enable-mpi-thread-multiple&quot; and it worked.
</span><br>
<span class="quotelev2">&gt; &gt; does it mean that now we need to pass &quot;--enable-mpi-thread-multiple --enable-opal-multi-threads&quot; to get it working again?
</span><br>
<span class="quotelev2">&gt; &gt; Maybe if one of the params used it should enable another one as well?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe that that is the case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Keep in mind: this mess is cleaned up on the trunk; the threading options are simpler.  This is &quot;legacy&quot; now, on the v1.8 branch, and likely won't be updated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The change that happened recently was that THREAD_MULTIPLE support was accidentally enabled by default on the v1.8 branch (which wasn't intended).  The change a few days ago was to turn THREAD_MULTIPLE support off by default.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16200.php">http://www.open-mpi.org/community/lists/devel/2014/11/16200.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16205.php">http://www.open-mpi.org/community/lists/devel/2014/11/16205.php</a>
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
<li><strong>Next message:</strong> <a href="16207.php">Mike Dubman: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Previous message:</strong> <a href="16205.php">Mike Dubman: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>In reply to:</strong> <a href="16205.php">Mike Dubman: "Re: [OMPI devel] thread-tests hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16207.php">Mike Dubman: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16207.php">Mike Dubman: "Re: [OMPI devel] thread-tests hang"</a>
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
