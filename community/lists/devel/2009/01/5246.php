<?
$subject_val = "Re: [OMPI devel] RFC: sm Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 19:59:54 2009" -->
<!-- isoreceived="20090121005954" -->
<!-- sent="Tue, 20 Jan 2009 17:04:11 -0800" -->
<!-- isosent="20090121010411" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: sm Latency" -->
<!-- id="4976748B.2050105_at_sun.com" -->
<!-- charset="Big5" -->
<!-- inreplyto="49762DF6.7020700_at_myri.com" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-20 20:04:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5247.php">Jeff Squyres: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5245.php">Jeff Squyres: "[OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks"</a>
<li><strong>In reply to:</strong> <a href="5243.php">Patrick Geoffray: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5247.php">Jeff Squyres: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5247.php">Jeff Squyres: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5252.php">Patrick Geoffray: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Patrick Geoffray wrote:
<br>
<p><span class="quotelev1">&gt;Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;replace the fifo&#161;&#166;s with a single link list per process in shared 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;memory, with senders to this process adding match envelopes 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;atomically, with each process reading its own link list (multiple 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;*) Doesn't strike me as a &quot;simple&quot; change.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;Actually, it's much simpler than trying to optimize/scale the N^2
</span><br>
<span class="quotelev1">&gt;implementation, IMHO.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
1) The version I talk about is already done. Check my putbacks. &quot;Already
<br>
done&quot; is easier! :^)
<br>
<p>2) The two ideas are largely orthogonal. The RFC talks about a variety
<br>
of things: cleaning up the sendi function, moving the sendi call up
<br>
higher in the PML, bypassing the PML receive-request structure (similar
<br>
to sendi), and stream-lining the data convertors in common cases. Only
<br>
one part of the RFC (directed polling) overlaps with having a single
<br>
FIFO per receiver.
<br>
<p><span class="quotelev2">&gt;&gt;*) Not sure this addresses all-to-all well.  E.g., let's say you post a 
</span><br>
<span class="quotelev2">&gt;&gt;receive for a particular source.  Do you then wade through a long FIFO 
</span><br>
<span class="quotelev2">&gt;&gt;to look for your match?
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;The tradeoff is between demultiplexing by the sender, which cost in time
</span><br>
<span class="quotelev1">&gt;and in space, or by the receiver, which cost an atomic inc. ANY_TAG
</span><br>
<span class="quotelev1">&gt;forces you to demultiplex on the receive side anyway. Regarding
</span><br>
<span class="quotelev1">&gt;all-to-all, it won't be more expensive if the receives are pre-posted,
</span><br>
<span class="quotelev1">&gt;and they should be.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Not sure I understand this paragraph. I do, however, think there are
<br>
great benefits to the single-receiver-queue model. It implies congestion
<br>
on the receiver side in the many-to-one case, but if a single receiver
<br>
is reading all those messages anyhow, message-processing is already
<br>
going to throttle the message rate. The extra &quot;bottleneck&quot; at the FIFO
<br>
might never be seen.
<br>
<p><span class="quotelev2">&gt;&gt;What the RFC talks about is not the last SM development we'll ever 
</span><br>
<span class="quotelev2">&gt;&gt;need.  It's only supposed to be one step forward from where we are 
</span><br>
<span class="quotelev2">&gt;&gt;today.  The &quot;single queue per receiver&quot; approach has many advantages, 
</span><br>
<span class="quotelev2">&gt;&gt;but I think it's a different topic.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;But is this intermediate step worth it or should we (well, you :-) ) go
</span><br>
<span class="quotelev1">&gt;directly for the single queue model ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
To recap:
<br>
1) The work is already done.
<br>
2) The single-queue model addresses only one of the RFC's issues.
<br>
3) I'm a fan of the single-queue model, but it's just a separate discussion.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5247.php">Jeff Squyres: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5245.php">Jeff Squyres: "[OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks"</a>
<li><strong>In reply to:</strong> <a href="5243.php">Patrick Geoffray: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5247.php">Jeff Squyres: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5247.php">Jeff Squyres: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5252.php">Patrick Geoffray: "Re: [OMPI devel] RFC: sm Latency"</a>
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
