<?
$subject_val = "Re: [OMPI devel] New BTL parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 13 01:37:52 2007" -->
<!-- isoreceived="20071213063752" -->
<!-- sent="Thu, 13 Dec 2007 08:37:35 +0200" -->
<!-- isosent="20071213063735" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New BTL parameter" -->
<!-- id="20071213063735.GU3360_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="47605012.80809_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New BTL parameter<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-13 01:37:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2841.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2839.php">Brad Penoff: "Re: [OMPI devel] SCTP noisy failure"</a>
<li><strong>In reply to:</strong> <a href="2830.php">Paul H. Hargrove: "Re: [OMPI devel] New BTL parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2856.php">Gleb Natapov: "Re: [OMPI devel] New BTL parameter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Dec 12, 2007 at 01:18:10PM -0800, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Dec 12, 2007 at 02:03:02PM -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Dec 9, 2007, at 10:34 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  Currently BTL has parameter btl_min_send_size that is no longer used.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I want to change it to be btl_rndv_eager_limit. This new parameter  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; will
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; determine a size of a first fragment of rendezvous protocol. Now we  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; use
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; btl_eager_limit to set its size. btl_rndv_eager_limit will have to be
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; smaller or equal to btl_eager_limit. By default it will be equal to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; btl_eager_limit so no behavior change will be observed if default is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; used.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can you describe why it would be better to have the value less than  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the eager limit?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt; It is just one more knob to tune OB1 algorithm. I sometimes don't want
</span><br>
<span class="quotelev2">&gt; &gt; to send any data by copy in/out at all. This is not possible right now.
</span><br>
<span class="quotelev2">&gt; &gt; With this new param I will be able to control this.
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  From my experience tuning RDMA-rendezvous for the GASNet communications 
</span><br>
<span class="quotelev1">&gt; library, I know that it was beneficial to piggyback some portion of the 
</span><br>
<span class="quotelev1">&gt; payload on the rendezvous request.  However, the best [insert your 
</span><br>
<span class="quotelev1">&gt; favorite performance metric here] was not always achieved by 
</span><br>
<span class="quotelev1">&gt; piggybacking the maximum that could be buffered at the receiver 
</span><br>
<span class="quotelev1">&gt; (equivalent of blt_eager_limit).  If I understand correctly, Gleb's 
</span><br>
<span class="quotelev1">&gt; btl_rndv_eager_limit parameter would allow tuning for this behavior in OMPI.
</span><br>
Exactly. You explained it better than me.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An artificial/simplified example would be if the eager limit is 32K and 
</span><br>
<span class="quotelev1">&gt; you have a 64K xfer.  Is it better to send 32K copy in/out plus 32K by 
</span><br>
<span class="quotelev1">&gt; RDMA, or to send 8K copy in/out plus 56K by RDMA?  If the memcpy() 
</span><br>
<span class="quotelev1">&gt; overhead for 32K of eager payload exceeds what can be overlapped with 
</span><br>
<span class="quotelev1">&gt; the rendezvous setup then the second may be the better choice (higher 
</span><br>
<span class="quotelev1">&gt; bandwidth, lower latency, and lower CPU overheads on both sender and 
</span><br>
<span class="quotelev1">&gt; receiver).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2841.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2839.php">Brad Penoff: "Re: [OMPI devel] SCTP noisy failure"</a>
<li><strong>In reply to:</strong> <a href="2830.php">Paul H. Hargrove: "Re: [OMPI devel] New BTL parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2856.php">Gleb Natapov: "Re: [OMPI devel] New BTL parameter"</a>
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
