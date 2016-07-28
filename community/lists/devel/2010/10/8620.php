<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 25 20:22:25 2010" -->
<!-- isoreceived="20101026002225" -->
<!-- sent="Mon, 25 Oct 2010 20:22:21 -0400" -->
<!-- isosent="20101026002221" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936" -->
<!-- id="49D95930-5168-4238-8E70-E39D7101699F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="222405FC-B572-4937-9E9D-5D30A45B8A68_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-25 20:22:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8621.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>Previous message:</strong> <a href="8619.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>In reply to:</strong> <a href="8619.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8621.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>Reply:</strong> <a href="8621.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I dug into this a bit.  
<br>
<p>The problem is in the SM BTL init where it's waiting for all of the peers to set seg_inited in shared memory (so that it knows everyone has hit that point).  We loop on calling opal_progress while waiting.
<br>
<p>The problem is that opal_progress() is not returning (!).
<br>
<p>It appears that libevent's poll_dispatch() function is somehow getting an infinite timeout -- it *looks* like libevent is determining that there are no timers active, so it decides to set an infinite timeout (i.e., block) when it calls poll().  Specifically, event.c:1524 calls timeout_next(), which sees that there are no timer events active and resets tv_p to NULL.  We then call the underlying fd-checking backend with an infinite timeout.  
<br>
<p>Bonk.
<br>
<p>Anyone more familiar with libevent's internals know why this is happening / if this is a change since the old version?
<br>
<p><p><p>On Oct 25, 2010, at 6:07 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 25, 2010, at 3:21 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So now we're in good shape, at least for compiling. IB and TCP seem to work, but SM deadlock.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ugh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you debugging this, or are we? (i.e., me/Ralph)
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8621.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>Previous message:</strong> <a href="8619.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>In reply to:</strong> <a href="8619.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8621.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>Reply:</strong> <a href="8621.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
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
