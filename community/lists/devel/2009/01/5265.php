<?
$subject_val = "Re: [OMPI devel] RFC: sm Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 18:48:07 2009" -->
<!-- isoreceived="20090121234807" -->
<!-- sent="Wed, 21 Jan 2009 18:47:58 -0500" -->
<!-- isosent="20090121234758" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: sm Latency" -->
<!-- id="4977B42E.3090309_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49775E4F.8040203_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: sm Latency<br>
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-21 18:47:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5266.php">Ron Brightwell: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5264.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>In reply to:</strong> <a href="5258.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5267.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5267.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Possibly, you meant to ask how one does directed polling with a wildcard 
</span><br>
<span class="quotelev1">&gt; source MPI_ANY_SOURCE.  If that was your question, the answer is we 
</span><br>
<span class="quotelev1">&gt; punt.  We report failure to the ULP, which reverts to the standard code 
</span><br>
<span class="quotelev1">&gt; path.
</span><br>
<p>Sorry, I meant ANY_SOURCE. If you poll only the queue that correspond to 
<br>
a posted receive, you only optimize micro-benchmarks, until they start 
<br>
using ANY_SOURCE. So, does recvi() is a one-time shot ? Ie do you poll 
<br>
the right queue only once and if it fails then you fall back on polling 
<br>
all queues ? If yes, then it's unobtrusive but I don't think it would 
<br>
help much. If you poll the right queue many times, then you have to 
<br>
decide when to fall back on polling all queues, and it's not trivial.
<br>
<p><span class="quotelev2">&gt;&gt; How do you ensure you check all incoming queues from time to time to prevent flow control (specially if the queues are small for scaling) ?
</span><br>
<span class="quotelev1">&gt; There are a variety of choices here.  Further, I'm afraid we ultimately 
</span><br>
<span class="quotelev1">&gt; have to expose some of those choices to the user (MCA parameters or 
</span><br>
<span class="quotelev1">&gt; something).
</span><br>
<p>In the vast majority of cases, users don't know how to turn the knobs. 
<br>
The problem is that with local np going up, queue sizes will go down 
<br>
fast (square root), and you will have to poll all queues more often. 
<br>
Using more memory for queues just pushed the scalability wall a little 
<br>
bit further.
<br>
<p><span class="quotelev1">&gt; congestion.  What if then the user code posts a rather specific request 
</span><br>
<span class="quotelev1">&gt; (receive a message with a particular tag on a particular communicator 
</span><br>
<span class="quotelev1">&gt; from a particular source) and with high urgency (blocking request... &quot;I 
</span><br>
<span class="quotelev1">&gt; ain't going anywhere until you give me what I'm asking for&quot;).  A good 
</span><br>
<span class="quotelev1">&gt; servant would drop whatever else s/he is doing to oblige the boss.
</span><br>
<p>If you poll only one queue, then stuff can pile up on another and a 
<br>
sender is now blocked. At best, you have a synchronization point. At 
<br>
worst, a deadlock.
<br>
<p><span class="quotelev1">&gt; So, let's say there's a standard MPI_Recv.  Let's say there's also some 
</span><br>
<span class="quotelev1">&gt; congestion starting to build.  What should the MPI implementation do?  
</span><br>
<p>The MPI implementation cannot trust the user/app to indicates where the 
<br>
messages will come from. So, if you have N incoming queues, you need to 
<br>
poll them all eventually. If you do, polling time increase linearly. If 
<br>
you try to limit the polling space with whatever heuristic (like the 
<br>
queue corresponding to the current blocking receive), then you take the 
<br>
risk of not consuming fast enough another queue. And usually, the 
<br>
heuristics quickly fall apart (ANY_SOURCE, multiple asynchronous 
<br>
receives, etc).
<br>
<p>Really, only single-queue solves that.
<br>
<p><span class="quotelev1">&gt; Yes, and you could toss the receive-side optimizations as well.  So, one 
</span><br>
<span class="quotelev1">&gt; could say, &quot;Our np=2 latency remains 2x slower than Scali's, but at 
</span><br>
<span class="quotelev1">&gt; least we no longer have that hideous scaling with large np.&quot;  Maybe 
</span><br>
<span class="quotelev1">&gt; that's where we want to end up.
</span><br>
<p>I think all optimizations except recvi() are fine and worth using. I am 
<br>
just saying that the recvi() optimization is dubious as it is, and the 
<br>
single-queue is potentially a larger hanging fruit on the recv side: it 
<br>
could still be fast (spinlock or atomic to manage shared receive queue) 
<br>
to have lower np=2 latency, and it would scale well with large np. No 
<br>
tuning needed, no special cases, smaller memory footprint.
<br>
<p>I will leave it at that, just some inputs.
<br>
<p>Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5266.php">Ron Brightwell: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5264.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>In reply to:</strong> <a href="5258.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5267.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5267.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
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
