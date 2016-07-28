<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 25 21:29:53 2010" -->
<!-- isoreceived="20101026012953" -->
<!-- sent="Mon, 25 Oct 2010 21:29:47 -0400" -->
<!-- isosent="20101026012947" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936" -->
<!-- id="741E5671-AE8F-461D-A427-36AEB179A998_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="49D95930-5168-4238-8E70-E39D7101699F_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-25 21:29:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8622.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>Previous message:</strong> <a href="8620.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>In reply to:</strong> <a href="8620.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8622.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>Reply:</strong> <a href="8622.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>Reply:</strong> <a href="8624.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 25, 2010, at 20:22 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I dug into this a bit.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is in the SM BTL init where it's waiting for all of the peers to set seg_inited in shared memory (so that it knows everyone has hit that point).  We loop on calling opal_progress while waiting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that opal_progress() is not returning (!).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It appears that libevent's poll_dispatch() function is somehow getting an infinite timeout -- it *looks* like libevent is determining that there are no timers active, so it decides to set an infinite timeout (i.e., block) when it calls poll().  Specifically, event.c:1524 calls timeout_next(), which sees that there are no timer events active and resets tv_p to NULL.  We then call the underlying fd-checking backend with an infinite timeout.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bonk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyone more familiar with libevent's internals know why this is happening / if this is a change since the old version?
</span><br>
<p>I did some digging too. My conclusion is somehow [slightly] different.
<br>
<p>1. Not all processes deadlock in btl_sm_add_procs. The process that setup the shared memory area, is going forward, and block later in a barrier. Why do we have a barrier in MPI_Init, it's another question, but is not related to the problem at hand here.
<br>
<p>2. All other processes, loop around the opal_progress, until they got a message from all other processes. The variable used for counting is somehow updated correctly, but we still call opal_progress. I couldn't figure out is we loop more that we should, or if opal_progress doesn't return. However, both of these possibilities look very unlikely to me: the loop in the sm_add_procs is pretty straightforward, and I couldn't find any loops in opal_progress. I wonder if some of the messages get lost on the exchange.
<br>
<p>3. If I unblock the situation by hand, everything goes back to normal. NetPIPE runs to completion but the performances are __really__ bad. On my test machine I get around 2000Mbs, when the expected value is at least 10 times more. Similar finding on the latency side, we're now at 1.65 micro-sec up from the usual 0.35 we had before.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p><span class="quotelev1">&gt; On Oct 25, 2010, at 6:07 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 25, 2010, at 3:21 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So now we're in good shape, at least for compiling. IB and TCP seem to work, but SM deadlock.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ugh.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are you debugging this, or are we? (i.e., me/Ralph)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8622.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>Previous message:</strong> <a href="8620.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>In reply to:</strong> <a href="8620.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8622.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>Reply:</strong> <a href="8622.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>Reply:</strong> <a href="8624.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
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
