<?
$subject_val = "Re: [OMPI devel] Threaded progress for CPCs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 19 17:25:05 2008" -->
<!-- isoreceived="20080519212505" -->
<!-- sent="Mon, 19 May 2008 16:24:59 -0500" -->
<!-- isosent="20080519212459" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Threaded progress for CPCs" -->
<!-- id="4831F02B.8040505_at_opengridcomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FEB054BA-18A9-4217-BA44-26F6A5EB743F_at_cisco.com" -->
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
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-19 17:24:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3943.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3941.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3941.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3934.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 19, 2008, at 4:44 PM, Steve Wise wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. Posting more at low watermark can lead to DoS-like behavior when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you have a fast sender and a slow receiver.  This is exactly the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; resource-exhaustion kind of behavior that a high quality MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementation is supposed to avoid -- we really should to throttle
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the sender somehow.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Resending ad infinitum simply eats up more bandwidth and takes  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; away
</span><br>
<span class="quotelev3">&gt;&gt;&gt; network resources (e.g., switch resources) that other, legitimate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; traffic.  Particularly if the receiver doesn't dip into the MPI layer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for many hours.  So yes, it *works*, but it's definitely sub-optimal.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; The SRQ low water mark is simply an API method to allow applications  
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; try and never hit the &quot;we're totally out recv bufs&quot; problem.  That's a
</span><br>
<span class="quotelev2">&gt;&gt; tool that I think is needed for srq users no matter what flow control
</span><br>
<span class="quotelev2">&gt;&gt; method you use to try and avoid jeff's #1 item above.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you had these buffers available, why didn't you post them when the  
</span><br>
<span class="quotelev1">&gt; QP was created / this sender was added?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Because you're trying to reduce memory requirements at the expense of 
<br>
under-provisioning the SRQ.  If you don't want the transport to drop and 
<br>
retransmit, then you might want an algorithm to increase the low water 
<br>
mark during bursty periods.
<br>
<span class="quotelev1">&gt; This mechanism *might* make sense if there was a sensible approach to  
</span><br>
<span class="quotelev1">&gt; know when to remove the &quot;additional&quot; buffers posted to an SRQ due to  
</span><br>
<span class="quotelev1">&gt; bursty traffic.  But how do you know when that is?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Thinking out loud: 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- keep the SRQ up to the low water mark as a normal course of events
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- increase the low water mark value as you get more and more &quot;low 
<br>
water mark exceeded&quot; events
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- decrease the low water mark as these events become less frequent.
<br>
<p>Dunno if this is worth the effort.
<br>
<p><p><span class="quotelev2">&gt;&gt; And if you don't like RNR retry/TCP retrans approach, which is bad for
</span><br>
<span class="quotelev2">&gt;&gt; reason #2 (and because TCP will eventually give up and reset the
</span><br>
<span class="quotelev2">&gt;&gt; connection),  then I think there needs to be some OMPI layer  
</span><br>
<span class="quotelev2">&gt;&gt; protocol to
</span><br>
<span class="quotelev2">&gt;&gt; stop senders that are abusing the SRQ pool for whatever reason (too  
</span><br>
<span class="quotelev2">&gt;&gt; fast
</span><br>
<span class="quotelev2">&gt;&gt; of a sender, sleeping beauty receiver never entering OMPI layer,  
</span><br>
<span class="quotelev2">&gt;&gt; whtaever).
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That implies a progress thread.  If/when we add a progress thread, it  
</span><br>
<span class="quotelev1">&gt; will likely be for progressing long messages.  Myricom and MVAPICH  
</span><br>
<span class="quotelev1">&gt; have shown that rapidly firing progress threads and problematic to  
</span><br>
<span class="quotelev1">&gt; performance.  But even if you have that progress thread *only* wake up  
</span><br>
<span class="quotelev1">&gt; on the low watermark for the SRQ, you have two problems:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - there still could be many inbound messages that will overflow the  
</span><br>
<span class="quotelev1">&gt; SRQ and/or even more could be inbound by the time your STOP message  
</span><br>
<span class="quotelev1">&gt; gets to everyone (gets even worse as the MPI job scales up in total  
</span><br>
<span class="quotelev1">&gt; number of processes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - in the case of a very large MPI job, sending the STOP message has  
</span><br>
<span class="quotelev1">&gt; obvious scalability problems (have to send it to everyone, which  
</span><br>
<span class="quotelev1">&gt; requires its own set of send buffers and WQEs/CQEs)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Ok, STOP messages won't scale...dumb idea.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3943.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3941.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3941.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3934.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
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
