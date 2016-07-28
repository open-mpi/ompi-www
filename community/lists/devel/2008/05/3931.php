<?
$subject_val = "Re: [OMPI devel] Threaded progress for CPCs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 19 10:18:13 2008" -->
<!-- isoreceived="20080519141813" -->
<!-- sent="Mon, 19 May 2008 17:17:57 +0300" -->
<!-- isosent="20080519141757" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Threaded progress for CPCs" -->
<!-- id="20080519141756.GU21806_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="483189D1.40402_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2008-05-19 10:17:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3932.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3930.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3930.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3935.php">Jon Mason: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3935.php">Jon Mason: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, May 19, 2008 at 05:08:17PM +0300, Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev3">&gt; &gt;&gt; 5. ...?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt; What about moving posting of receive buffers into main thread. With
</span><br>
<span class="quotelev2">&gt; &gt; SRQ it is easy: don't post anything in CPC thread. Main thread will
</span><br>
<span class="quotelev2">&gt; &gt; prepost buffers automatically after first fragment received on the
</span><br>
<span class="quotelev2">&gt; &gt; endpoint (in btl_openib_handle_incoming()). 
</span><br>
<span class="quotelev1">&gt; It still doesn't guaranty that we will not see RNR (as I understand we 
</span><br>
<span class="quotelev1">&gt; trying to resolve this problem  for iwarp?!)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
I don't think that iwarp has SRQ at all. And if it has then it should
<br>
have HW flow control for it too. I don't see what advantage SRQ without
<br>
flow control can provide over PPRQ.
<br>
<p><span class="quotelev1">&gt; So this solution will cost 1 buffer on each srq ... sounds acceptable 
</span><br>
<span class="quotelev1">&gt; for me. But I don't see too much
</span><br>
<span class="quotelev1">&gt; difference compared to #1, as I understand  we anyway will be need the 
</span><br>
<span class="quotelev1">&gt; pipe for communication with main thread.
</span><br>
<span class="quotelev1">&gt; so why don't use #1 ?
</span><br>
What communication? No communication at all. Just don't prepost buffers
<br>
to SRQ during connection establishment. Problem solved (only for SRQ of
<br>
cause).
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3932.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3930.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3930.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3935.php">Jon Mason: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3935.php">Jon Mason: "Re: [OMPI devel] Threaded progress for CPCs"</a>
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
