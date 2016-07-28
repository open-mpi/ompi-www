<?
$subject_val = "Re: [OMPI devel] Threaded progress for CPCs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 19 15:12:28 2008" -->
<!-- isoreceived="20080519191228" -->
<!-- sent="Mon, 19 May 2008 22:12:19 +0300" -->
<!-- isosent="20080519191219" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Threaded progress for CPCs" -->
<!-- id="20080519191219.GC24344_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20080519185222.GA27773_at_opengridcomputing.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-19 15:12:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3938.php">Jon Mason: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3936.php">Jon Mason: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3935.php">Jon Mason: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3938.php">Jon Mason: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3938.php">Jon Mason: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, May 19, 2008 at 01:52:22PM -0500, Jon Mason wrote:
<br>
<span class="quotelev1">&gt; On Mon, May 19, 2008 at 05:17:57PM +0300, Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, May 19, 2008 at 05:08:17PM +0300, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; 5. ...?
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;     
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; What about moving posting of receive buffers into main thread. With
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SRQ it is easy: don't post anything in CPC thread. Main thread will
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; prepost buffers automatically after first fragment received on the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; endpoint (in btl_openib_handle_incoming()). 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It still doesn't guaranty that we will not see RNR (as I understand we 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; trying to resolve this problem  for iwarp?!)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I don't think that iwarp has SRQ at all. And if it has then it should
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While Chelsio does not currently have an adapter that has SRQs, there are
</span><br>
<span class="quotelev1">&gt; some other iWARP vendors that do have them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; have HW flow control for it too. I don't see what advantage SRQ without
</span><br>
<span class="quotelev2">&gt; &gt; flow control can provide over PPRQ.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Technically, this is not flow control, it is a retransmit.  iWARP can use
</span><br>
<span class="quotelev1">&gt; the HW TCP stack to retransmit, but it will not have the &quot;retransmit
</span><br>
<span class="quotelev1">&gt; forever&quot; ability that setting rnr_retry to 7 has for IB.
</span><br>
For how long will it try to retransmit before dropping connection.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; So this solution will cost 1 buffer on each srq ... sounds acceptable 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; for me. But I don't see too much
</span><br>
<span class="quotelev3">&gt; &gt; &gt; difference compared to #1, as I understand  we anyway will be need the 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; pipe for communication with main thread.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; so why don't use #1 ?
</span><br>
<span class="quotelev2">&gt; &gt; What communication? No communication at all. Just don't prepost buffers
</span><br>
<span class="quotelev2">&gt; &gt; to SRQ during connection establishment. Problem solved (only for SRQ of
</span><br>
<span class="quotelev2">&gt; &gt; cause).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iWARP needs preposted recv buffers (or it will drop the connection).  So
</span><br>
<span class="quotelev1">&gt; this isn't a good option.
</span><br>
I was talking about SRQ only. You said above that iwarp does retransmit for SRQ.
<br>
openib BTL relies on HW retransmit when using SRQ, so if iwarp doesn't do it
<br>
reliably enough it can not be used with SRQ anyway.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3938.php">Jon Mason: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3936.php">Jon Mason: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3935.php">Jon Mason: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3938.php">Jon Mason: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3938.php">Jon Mason: "Re: [OMPI devel] Threaded progress for CPCs"</a>
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
