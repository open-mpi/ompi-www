<?
$subject_val = "Re: [OMPI devel] thread-tests hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 10:41:59 2014" -->
<!-- isoreceived="20141105154159" -->
<!-- sent="Wed, 5 Nov 2014 15:41:58 +0000" -->
<!-- isosent="20141105154158" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] thread-tests hang" -->
<!-- id="3907E84C-2141-4792-8EAC-F3C087401D83_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KyZM4B-34SVvd3Rkbf0mNd8r0m49pJdQ6j+1PuwrYfk0fA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-11-05 10:41:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16201.php">Joshua Ladd: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>Previous message:</strong> <a href="16199.php">twurgl_at_[hidden]: "[OMPI devel] mpirun does not honor rankfile"</a>
<li><strong>In reply to:</strong> <a href="16197.php">Mike Dubman: "Re: [OMPI devel] thread-tests hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16205.php">Mike Dubman: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16205.php">Mike Dubman: "Re: [OMPI devel] thread-tests hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 5, 2014, at 9:42 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hey Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; now we use only this &quot;--enable-mpi-thread-multiple&quot; and it worked.
</span><br>
<span class="quotelev1">&gt; does it mean that now we need to pass &quot;--enable-mpi-thread-multiple --enable-opal-multi-threads&quot; to get it working again?
</span><br>
<span class="quotelev1">&gt; Maybe if one of the params used it should enable another one as well?
</span><br>
<p>I believe that that is the case.
<br>
<p>Keep in mind: this mess is cleaned up on the trunk; the threading options are simpler.  This is &quot;legacy&quot; now, on the v1.8 branch, and likely won't be updated.
<br>
<p>The change that happened recently was that THREAD_MULTIPLE support was accidentally enabled by default on the v1.8 branch (which wasn't intended).  The change a few days ago was to turn THREAD_MULTIPLE support off by default.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16201.php">Joshua Ladd: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>Previous message:</strong> <a href="16199.php">twurgl_at_[hidden]: "[OMPI devel] mpirun does not honor rankfile"</a>
<li><strong>In reply to:</strong> <a href="16197.php">Mike Dubman: "Re: [OMPI devel] thread-tests hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16205.php">Mike Dubman: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16205.php">Mike Dubman: "Re: [OMPI devel] thread-tests hang"</a>
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
