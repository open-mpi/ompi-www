<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 22 16:53:08 2007" -->
<!-- isoreceived="20070622205308" -->
<!-- sent="Fri, 22 Jun 2007 16:52:45 -0400" -->
<!-- isosent="20070622205245" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PML/BTL MCA params review" -->
<!-- id="E2ADCB91-1D81-4075-8B88-D41623FEF413_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8DEFA3A2-50C4-4E73-8F09-D349DF5986CF_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-22 16:52:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1754.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1752.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1734.php">Jeff Squyres: "[OMPI devel] PML/BTL MCA params review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1767.php">Gleb Natapov: "Re: [OMPI devel] PML/BTL MCA params review"</a>
<li><strong>Reply:</strong> <a href="1767.php">Gleb Natapov: "Re: [OMPI devel] PML/BTL MCA params review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 20, 2007, at 8:29 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; 1. btl_*_min_send_size is used to decide when to stop striping a  
</span><br>
<span class="quotelev1">&gt; message across multiple BTL's.  Is there a reason that we don't  
</span><br>
<span class="quotelev1">&gt; just use eager_limit for this value?  It seems weird to say &quot;this  
</span><br>
<span class="quotelev1">&gt; message is short enough to go across 1 BTL, even though it'll take  
</span><br>
<span class="quotelev1">&gt; multiple sends if min_send_size &gt; eager_limit&quot;.  If no one has any  
</span><br>
<span class="quotelev1">&gt; objections, we suggest eliminating this MCA parameter (!!) and  
</span><br>
<span class="quotelev1">&gt; corresponding value and just using the BTL's eager limit for this  
</span><br>
<span class="quotelev1">&gt; value (this value is set by every BTL, but only used in exactly 1  
</span><br>
<span class="quotelev1">&gt; place in OB1).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Len: please put this on the agenda for next Tuesday (just so that  
</span><br>
<span class="quotelev1">&gt; there's a deadline to ensure progress).
</span><br>
<p>No one has commented on this, so I assume we'll discuss on Tuesday.  :-)
<br>
<p><span class="quotelev1">&gt; 2. rdma_pipeline_offset is bad name; it is not an accurate  
</span><br>
<span class="quotelev1">&gt; description of what this value represents.  See the attached figure  
</span><br>
<span class="quotelev1">&gt; for what this value is: it is the length that is sent/received  
</span><br>
<span class="quotelev1">&gt; after the eager match before the RDMA (it happens to be at the end  
</span><br>
<span class="quotelev1">&gt; of the message, but that's irrelevant).  Specifically: it is a  
</span><br>
<span class="quotelev1">&gt; length, not an offset.  We should change this name.  Here's some  
</span><br>
<span class="quotelev1">&gt; suggestions we came up with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     rdma_pipeline_send_length (this is our favorite)
</span><br>
<p>Gleb made this change in the code.  I've attached a new slide showing  
<br>
the new name.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems


</pre>
<p>
<p><p><hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1753/pml-btl-values.pdf">pml-btl-values.pdf</a>
</ul>
<!-- attachment="pml-btl-values.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1754.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1752.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1734.php">Jeff Squyres: "[OMPI devel] PML/BTL MCA params review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1767.php">Gleb Natapov: "Re: [OMPI devel] PML/BTL MCA params review"</a>
<li><strong>Reply:</strong> <a href="1767.php">Gleb Natapov: "Re: [OMPI devel] PML/BTL MCA params review"</a>
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
