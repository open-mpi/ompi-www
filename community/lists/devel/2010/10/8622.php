<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 25 22:50:16 2010" -->
<!-- isoreceived="20101026025016" -->
<!-- sent="Mon, 25 Oct 2010 20:50:07 -0600" -->
<!-- isosent="20101026025007" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936" -->
<!-- id="815A0E35-65CF-49D3-B7CB-410D2F926F25_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="741E5671-AE8F-461D-A427-36AEB179A998_at_eecs.utk.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-25 22:50:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8623.php">Ralph Castain: "Re: [OMPI devel] orte does not compile on XT5 (pgcc)"</a>
<li><strong>Previous message:</strong> <a href="8621.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>In reply to:</strong> <a href="8621.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8624.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm....comparing the &quot;new&quot; code with the &quot;old&quot; one, I see some thread locking in the &quot;old&quot; code that didn't make it across. Is it possible this could be affecting shared memory?
<br>
<p>There were other hand edits in the event code - hard to tell sometimes what was put in by us vs already there, and with all the libevent threading code now in place, it isn't entirely clear what they may have already fixed. Also, note that their thread safety may well be &quot;on&quot;, which could account for some of the performance change. We may need to consider that as it isn't controllable as a function of event base (it is a compile-time option).
<br>
<p>Might be worth having the folks who did the prior hand edits review the code to see what changed, what may need to be edited again. If possible, it would really help to avoid hand editing their code this time so we don't have to keep reviewing it.
<br>
<p><p>On Oct 25, 2010, at 7:29 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 25, 2010, at 20:22 , Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I dug into this a bit.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem is in the SM BTL init where it's waiting for all of the peers to set seg_inited in shared memory (so that it knows everyone has hit that point).  We loop on calling opal_progress while waiting.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that opal_progress() is not returning (!).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It appears that libevent's poll_dispatch() function is somehow getting an infinite timeout -- it *looks* like libevent is determining that there are no timers active, so it decides to set an infinite timeout (i.e., block) when it calls poll().  Specifically, event.c:1524 calls timeout_next(), which sees that there are no timer events active and resets tv_p to NULL.  We then call the underlying fd-checking backend with an infinite timeout.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Bonk.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Anyone more familiar with libevent's internals know why this is happening / if this is a change since the old version?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did some digging too. My conclusion is somehow [slightly] different.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Not all processes deadlock in btl_sm_add_procs. The process that setup the shared memory area, is going forward, and block later in a barrier. Why do we have a barrier in MPI_Init, it's another question, but is not related to the problem at hand here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. All other processes, loop around the opal_progress, until they got a message from all other processes. The variable used for counting is somehow updated correctly, but we still call opal_progress. I couldn't figure out is we loop more that we should, or if opal_progress doesn't return. However, both of these possibilities look very unlikely to me: the loop in the sm_add_procs is pretty straightforward, and I couldn't find any loops in opal_progress. I wonder if some of the messages get lost on the exchange.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. If I unblock the situation by hand, everything goes back to normal. NetPIPE runs to completion but the performances are __really__ bad. On my test machine I get around 2000Mbs, when the expected value is at least 10 times more. Similar finding on the latency side, we're now at 1.65 micro-sec up from the usual 0.35 we had before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 25, 2010, at 6:07 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 25, 2010, at 3:21 PM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So now we're in good shape, at least for compiling. IB and TCP seem to work, but SM deadlock.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ugh.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are you debugging this, or are we? (i.e., me/Ralph)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="8623.php">Ralph Castain: "Re: [OMPI devel] orte does not compile on XT5 (pgcc)"</a>
<li><strong>Previous message:</strong> <a href="8621.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>In reply to:</strong> <a href="8621.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8624.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
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
