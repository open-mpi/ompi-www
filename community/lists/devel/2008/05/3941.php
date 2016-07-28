<?
$subject_val = "Re: [OMPI devel] Threaded progress for CPCs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 19 16:59:20 2008" -->
<!-- isoreceived="20080519205920" -->
<!-- sent="Mon, 19 May 2008 16:59:07 -0400" -->
<!-- isosent="20080519205907" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Threaded progress for CPCs" -->
<!-- id="FEB054BA-18A9-4217-BA44-26F6A5EB743F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4831E694.5000408_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Threaded progress for CPCs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-19 16:59:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3942.php">Steve Wise: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3940.php">Steve Wise: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3940.php">Steve Wise: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3942.php">Steve Wise: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3942.php">Steve Wise: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 19, 2008, at 4:44 PM, Steve Wise wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 1. Posting more at low watermark can lead to DoS-like behavior when
</span><br>
<span class="quotelev2">&gt;&gt; you have a fast sender and a slow receiver.  This is exactly the
</span><br>
<span class="quotelev2">&gt;&gt; resource-exhaustion kind of behavior that a high quality MPI
</span><br>
<span class="quotelev2">&gt;&gt; implementation is supposed to avoid -- we really should to throttle
</span><br>
<span class="quotelev2">&gt;&gt; the sender somehow.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Resending ad infinitum simply eats up more bandwidth and takes  
</span><br>
<span class="quotelev2">&gt;&gt; away
</span><br>
<span class="quotelev2">&gt;&gt; network resources (e.g., switch resources) that other, legitimate
</span><br>
<span class="quotelev2">&gt;&gt; traffic.  Particularly if the receiver doesn't dip into the MPI layer
</span><br>
<span class="quotelev2">&gt;&gt; for many hours.  So yes, it *works*, but it's definitely sub-optimal.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; The SRQ low water mark is simply an API method to allow applications  
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; try and never hit the &quot;we're totally out recv bufs&quot; problem.  That's a
</span><br>
<span class="quotelev1">&gt; tool that I think is needed for srq users no matter what flow control
</span><br>
<span class="quotelev1">&gt; method you use to try and avoid jeff's #1 item above.
</span><br>
<p>If you had these buffers available, why didn't you post them when the  
<br>
QP was created / this sender was added?
<br>
<p>This mechanism *might* make sense if there was a sensible approach to  
<br>
know when to remove the &quot;additional&quot; buffers posted to an SRQ due to  
<br>
bursty traffic.  But how do you know when that is?
<br>
<p><span class="quotelev1">&gt; And if you don't like RNR retry/TCP retrans approach, which is bad for
</span><br>
<span class="quotelev1">&gt; reason #2 (and because TCP will eventually give up and reset the
</span><br>
<span class="quotelev1">&gt; connection),  then I think there needs to be some OMPI layer  
</span><br>
<span class="quotelev1">&gt; protocol to
</span><br>
<span class="quotelev1">&gt; stop senders that are abusing the SRQ pool for whatever reason (too  
</span><br>
<span class="quotelev1">&gt; fast
</span><br>
<span class="quotelev1">&gt; of a sender, sleeping beauty receiver never entering OMPI layer,  
</span><br>
<span class="quotelev1">&gt; whtaever).
</span><br>
<p><p>That implies a progress thread.  If/when we add a progress thread, it  
<br>
will likely be for progressing long messages.  Myricom and MVAPICH  
<br>
have shown that rapidly firing progress threads and problematic to  
<br>
performance.  But even if you have that progress thread *only* wake up  
<br>
on the low watermark for the SRQ, you have two problems:
<br>
<p>- there still could be many inbound messages that will overflow the  
<br>
SRQ and/or even more could be inbound by the time your STOP message  
<br>
gets to everyone (gets even worse as the MPI job scales up in total  
<br>
number of processes)
<br>
<p>- in the case of a very large MPI job, sending the STOP message has  
<br>
obvious scalability problems (have to send it to everyone, which  
<br>
requires its own set of send buffers and WQEs/CQEs)
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3942.php">Steve Wise: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3940.php">Steve Wise: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3940.php">Steve Wise: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3942.php">Steve Wise: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3942.php">Steve Wise: "Re: [OMPI devel] Threaded progress for CPCs"</a>
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
