<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 26 13:39:27 2007" -->
<!-- isoreceived="20070626173927" -->
<!-- sent="Tue, 26 Jun 2007 20:39:20 +0300" -->
<!-- isosent="20070626173920" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PML/BTL MCA params review" -->
<!-- id="20070626173920.GD26637_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E2ADCB91-1D81-4075-8B88-D41623FEF413_at_cisco.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-26 13:39:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1768.php">Karol Mroz: "[OMPI devel] SCTP BTL Development for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="1766.php">Georg Wassen: "[OMPI devel]  problem with openib, was: send/recv during initialization"</a>
<li><strong>In reply to:</strong> <a href="1753.php">Jeff Squyres: "Re: [OMPI devel] PML/BTL MCA params review"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jun 22, 2007 at 04:52:45PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 20, 2007, at 8:29 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;1. btl_*_min_send_size is used to decide when to stop striping a  
</span><br>
<span class="quotelev2">&gt; &gt;message across multiple BTL's.  Is there a reason that we don't  
</span><br>
<span class="quotelev2">&gt; &gt;just use eager_limit for this value?  It seems weird to say &quot;this  
</span><br>
<span class="quotelev2">&gt; &gt;message is short enough to go across 1 BTL, even though it'll take  
</span><br>
<span class="quotelev2">&gt; &gt;multiple sends if min_send_size &gt; eager_limit&quot;.  If no one has any  
</span><br>
<span class="quotelev2">&gt; &gt;objections, we suggest eliminating this MCA parameter (!!) and  
</span><br>
<span class="quotelev2">&gt; &gt;corresponding value and just using the BTL's eager limit for this  
</span><br>
<span class="quotelev2">&gt; &gt;value (this value is set by every BTL, but only used in exactly 1  
</span><br>
<span class="quotelev2">&gt; &gt;place in OB1).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Len: please put this on the agenda for next Tuesday (just so that  
</span><br>
<span class="quotelev2">&gt; &gt;there's a deadline to ensure progress).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No one has commented on this, so I assume we'll discuss on Tuesday.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
I've just realised we forgot to talk about this :(
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1768.php">Karol Mroz: "[OMPI devel] SCTP BTL Development for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="1766.php">Georg Wassen: "[OMPI devel]  problem with openib, was: send/recv during initialization"</a>
<li><strong>In reply to:</strong> <a href="1753.php">Jeff Squyres: "Re: [OMPI devel] PML/BTL MCA params review"</a>
<!-- nextthread="start" -->
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
