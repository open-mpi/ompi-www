<?
$subject_val = "Re: [OMPI devel] Threaded progress for CPCs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 19 16:06:32 2008" -->
<!-- isoreceived="20080519200632" -->
<!-- sent="Mon, 19 May 2008 16:06:21 -0400" -->
<!-- isosent="20080519200621" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Threaded progress for CPCs" -->
<!-- id="1FD91C60-37A3-4DD7-B077-81D0379F25C2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080519194046.GD27773_at_opengridcomputing.com" -->
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
<strong>Date:</strong> 2008-05-19 16:06:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3940.php">Steve Wise: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3938.php">Jon Mason: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3938.php">Jon Mason: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3940.php">Steve Wise: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3940.php">Steve Wise: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 19, 2008, at 3:40 PM, Jon Mason wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; iWARP needs preposted recv buffers (or it will drop the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connection).  So
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this isn't a good option.
</span><br>
<span class="quotelev2">&gt;&gt; I was talking about SRQ only. You said above that iwarp does  
</span><br>
<span class="quotelev2">&gt;&gt; retransmit for SRQ.
</span><br>
<span class="quotelev2">&gt;&gt; openib BTL relies on HW retransmit when using SRQ, so if iwarp  
</span><br>
<span class="quotelev2">&gt;&gt; doesn't do it
</span><br>
<span class="quotelev2">&gt;&gt; reliably enough it can not be used with SRQ anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How iWARP adapters behave with respect to SRQ retransmit is 100% HW  
</span><br>
<span class="quotelev1">&gt; dependent.
</span><br>
<p>It was my understanding that it's at least the same as how TCP handles  
<br>
a dropped packet.  The HW may do better than that.
<br>
<p><span class="quotelev1">&gt; The HW can queue some of the receives internally or use the HW TCP  
</span><br>
<span class="quotelev1">&gt; stack to have
</span><br>
<span class="quotelev1">&gt; it retransmit.  Of course, this is a BAD thing to do.  The SRQ &quot;low- 
</span><br>
<span class="quotelev1">&gt; water marker&quot;
</span><br>
<span class="quotelev1">&gt; event is the best way to handle these cases.
</span><br>
<p><p>I disagree.  I even think that the IB-retry-forever approach is bad.   
<br>
Here's why:
<br>
<p>1. Posting more at low watermark can lead to DoS-like behavior when  
<br>
you have a fast sender and a slow receiver.  This is exactly the  
<br>
resource-exhaustion kind of behavior that a high quality MPI  
<br>
implementation is supposed to avoid -- we really should to throttle  
<br>
the sender somehow.
<br>
<p>2. Resending ad infinitum simply eats up more bandwidth and takes away  
<br>
network resources (e.g., switch resources) that other, legitimate  
<br>
traffic.  Particularly if the receiver doesn't dip into the MPI layer  
<br>
for many hours.  So yes, it *works*, but it's definitely sub-optimal.
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
<li><strong>Next message:</strong> <a href="3940.php">Steve Wise: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3938.php">Jon Mason: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3938.php">Jon Mason: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3940.php">Steve Wise: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3940.php">Steve Wise: "Re: [OMPI devel] Threaded progress for CPCs"</a>
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
