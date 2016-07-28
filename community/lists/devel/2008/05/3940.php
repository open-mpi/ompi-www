<?
$subject_val = "Re: [OMPI devel] Threaded progress for CPCs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 19 16:44:12 2008" -->
<!-- isoreceived="20080519204412" -->
<!-- sent="Mon, 19 May 2008 15:44:04 -0500" -->
<!-- isosent="20080519204404" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Threaded progress for CPCs" -->
<!-- id="4831E694.5000408_at_opengridcomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1FD91C60-37A3-4DD7-B077-81D0379F25C2_at_cisco.com" -->
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
<strong>Date:</strong> 2008-05-19 16:44:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3941.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3939.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3939.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3941.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3941.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 19, 2008, at 3:40 PM, Jon Mason wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; iWARP needs preposted recv buffers (or it will drop the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; connection).  So
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this isn't a good option.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was talking about SRQ only. You said above that iwarp does  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; retransmit for SRQ.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openib BTL relies on HW retransmit when using SRQ, so if iwarp  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't do it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reliably enough it can not be used with SRQ anyway.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; How iWARP adapters behave with respect to SRQ retransmit is 100% HW  
</span><br>
<span class="quotelev2">&gt;&gt; dependent.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It was my understanding that it's at least the same as how TCP handles  
</span><br>
<span class="quotelev1">&gt; a dropped packet.  The HW may do better than that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; The HW can queue some of the receives internally or use the HW TCP  
</span><br>
<span class="quotelev2">&gt;&gt; stack to have
</span><br>
<span class="quotelev2">&gt;&gt; it retransmit.  Of course, this is a BAD thing to do.  The SRQ &quot;low- 
</span><br>
<span class="quotelev2">&gt;&gt; water marker&quot;
</span><br>
<span class="quotelev2">&gt;&gt; event is the best way to handle these cases.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I disagree.  I even think that the IB-retry-forever approach is bad.   
</span><br>
<span class="quotelev1">&gt; Here's why:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Posting more at low watermark can lead to DoS-like behavior when  
</span><br>
<span class="quotelev1">&gt; you have a fast sender and a slow receiver.  This is exactly the  
</span><br>
<span class="quotelev1">&gt; resource-exhaustion kind of behavior that a high quality MPI  
</span><br>
<span class="quotelev1">&gt; implementation is supposed to avoid -- we really should to throttle  
</span><br>
<span class="quotelev1">&gt; the sender somehow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Resending ad infinitum simply eats up more bandwidth and takes away  
</span><br>
<span class="quotelev1">&gt; network resources (e.g., switch resources) that other, legitimate  
</span><br>
<span class="quotelev1">&gt; traffic.  Particularly if the receiver doesn't dip into the MPI layer  
</span><br>
<span class="quotelev1">&gt; for many hours.  So yes, it *works*, but it's definitely sub-optimal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
The SRQ low water mark is simply an API method to allow applications to 
<br>
try and never hit the &quot;we're totally out recv bufs&quot; problem.  That's a 
<br>
tool that I think is needed for srq users no matter what flow control 
<br>
method you use to try and avoid jeff's #1 item above.
<br>
<p>And if you don't like RNR retry/TCP retrans approach, which is bad for 
<br>
reason #2 (and because TCP will eventually give up and reset the 
<br>
connection),  then I think there needs to be some OMPI layer protocol to 
<br>
stop senders that are abusing the SRQ pool for whatever reason (too fast 
<br>
of a sender, sleeping beauty receiver never entering OMPI layer, whtaever).
<br>
<p>my 1/2 cent...
<br>
<p><p>Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3941.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3939.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3939.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3941.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3941.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
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
