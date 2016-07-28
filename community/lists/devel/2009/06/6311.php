<?
$subject_val = "Re: [OMPI devel] trac ticket 1944 and pending sends";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 13:22:59 2009" -->
<!-- isoreceived="20090623172259" -->
<!-- sent="Tue, 23 Jun 2009 10:23:02 -0700" -->
<!-- isosent="20090623172302" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac ticket 1944 and pending sends" -->
<!-- id="4A410F76.8080605_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="26D06CFD-D3C0-464B-803D-DD35CA06C8CD_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trac ticket 1944 and pending sends<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-23 13:23:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6312.php">Eugene Loh: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Previous message:</strong> <a href="6310.php">Brian W. Barrett: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>In reply to:</strong> <a href="6309.php">George Bosilca: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6310.php">Brian W. Barrett: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 23, 2009, at 11:04 , Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The sm BTL used to have two mechanisms for dealing with congested  
</span><br>
<span class="quotelev2">&gt;&gt; FIFOs.  One was to grow the FIFOs.  Another was to queue pending  
</span><br>
<span class="quotelev2">&gt;&gt; sends locally (on the sender's side).  I think the grow-FIFO  
</span><br>
<span class="quotelev2">&gt;&gt; mechanism was typically invoked and the pending-send mechanism used  
</span><br>
<span class="quotelev2">&gt;&gt; only under extreme circumstances (no more memory).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With the sm makeover of 1.3.2, we dropped the ability to grow  
</span><br>
<span class="quotelev2">&gt;&gt; FIFOs.  The code added complexity and there seemed to be no need to  
</span><br>
<span class="quotelev2">&gt;&gt; have two mechanisms to deal with congested FIFOs.  In ticket 1944,  
</span><br>
<span class="quotelev2">&gt;&gt; however, we see that repeated collectives can produce hangs, and  
</span><br>
<span class="quotelev2">&gt;&gt; this seems to be due to the pending-send code not adequately dealing  
</span><br>
<span class="quotelev2">&gt;&gt; with congested FIFOs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Today, when a process tries to write to a remote FIFO and fails, it  
</span><br>
<span class="quotelev2">&gt;&gt; queues the write as a pending send.  The only condition under which  
</span><br>
<span class="quotelev2">&gt;&gt; it retries pending sends is when it gets a fragment back from a  
</span><br>
<span class="quotelev2">&gt;&gt; remote process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think the logic must have been that the FIFO got congested because  
</span><br>
<span class="quotelev2">&gt;&gt; we issued too many sends.  Getting a fragment back indicates that  
</span><br>
<span class="quotelev2">&gt;&gt; the remote process has made progress digesting those sends.  In  
</span><br>
<span class="quotelev2">&gt;&gt; ticket 1944, we see that a FIFO can also get congested from too many  
</span><br>
<span class="quotelev2">&gt;&gt; returning fragments.  Further, with shared FIFOs, a FIFO could  
</span><br>
<span class="quotelev2">&gt;&gt; become congested due to the activity of a third-party process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In sum, getting a fragment back from a remote process is a poor  
</span><br>
<span class="quotelev2">&gt;&gt; indicator that it's time to retry pending sends.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe the real way to know when to retry pending sends is just to  
</span><br>
<span class="quotelev2">&gt;&gt; check if there's room on the FIFO.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why this is different than &quot;getting a fragment back&quot;?
</span><br>
<p>I'm not sure I understand your question.
<br>
<p>Say we have two processes, A and B.  Each one has a receive queue/FIFO 
<br>
that can be written by its peer.  Let's say A sends lots of messages to 
<br>
B.  B keeps on returning fragments to A.  So, although we're saying that 
<br>
A sends lots of messages to B, it is A's in-bound queue that fills up.  
<br>
Kind of counterintuitive.  Anyhow, B keeps getting more fragments to 
<br>
return to A.  Since A's queue is full, what this means is that B adds 
<br>
these fragments to its (B's) own pending-send list.
<br>
<p>So, now the question is when B should retry items on its pending-send 
<br>
list.  Presumably, it should retry when there is room on A's 
<br>
queue/FIFO.  But OMPI (to date) has B retry *only* when B itself gets a 
<br>
fragment back.  What's the logic?  I assume the logic was that A's queue 
<br>
was filled with fragments that B had sent, so getting a fragment back 
<br>
would be an indication of A's queue opening up.
<br>
<p>Why is this a poor indication?  (I'm assuming this is what your question 
<br>
was.)  Two possible reasons:
<br>
<p>1)  A's queue might have been filled with fragments that B was returning 
<br>
to A.  So, B would get no acknowledgements back from A that progress was 
<br>
being made depleting the queue.
<br>
<p>2)  (New with OMPI 1.3.2, now that we have shared queues):  A's queue 
<br>
might have been filled with activity from third party processes.
<br>
<p>In either case, the only way B now knows whether there is room on A's 
<br>
queue is... to check the queue if there's room!  Nothing is coming back 
<br>
from A to indicate that the queue is being drained.
<br>
<p><span class="quotelev1">&gt; As far as I  remember the code, when we get a fragment back we add it 
</span><br>
<span class="quotelev1">&gt; back in the LIFO, and therefore it become the next available fragment 
</span><br>
<span class="quotelev1">&gt; for a send.
</span><br>
<p>Yes, indeed, but I don't understand how this is relevent.  The LIFOs 
<br>
(the private free lists where processes maintain unused fragments) don't 
<br>
really enter this discussion.
<br>
<p><span class="quotelev2">&gt;&gt; So, I'll try modifying MCA_BTL_SM_FIFO_WRITE.  It'll start by  
</span><br>
<span class="quotelev2">&gt;&gt; checking if there are pending sends.  If so, it'll retry them before  
</span><br>
<span class="quotelev2">&gt;&gt; performing the requested write.  This should also help preserve  
</span><br>
<span class="quotelev2">&gt;&gt; ordering a little better.  I'm guessing this will not hurt our  
</span><br>
<span class="quotelev2">&gt;&gt; message latency in any meaningful way, but I'll check this out.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Meanwhile, I wanted to check in with y'all for any guidance you  
</span><br>
<span class="quotelev2">&gt;&gt; might have.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6312.php">Eugene Loh: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Previous message:</strong> <a href="6310.php">Brian W. Barrett: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>In reply to:</strong> <a href="6309.php">George Bosilca: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6310.php">Brian W. Barrett: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
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
