<?
$subject_val = "Re: [OMPI devel] Threaded progress for CPCs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 19 12:39:24 2008" -->
<!-- isoreceived="20080519163924" -->
<!-- sent="Mon, 19 May 2008 19:39:13 +0300" -->
<!-- isosent="20080519163913" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Threaded progress for CPCs" -->
<!-- id="4831AD31.6060002_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48319070.5020805_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-19 12:39:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3933.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3931.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Maybe in reply to:</strong> <a href="3928.php">Jeff Squyres: "[OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3933.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3933.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What about moving posting of receive buffers into main thread. With
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SRQ it is easy: don't post anything in CPC thread. Main thread will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; prepost buffers automatically after first fragment received on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; endpoint (in btl_openib_handle_incoming()).       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It still doesn't guaranty that we will not see RNR (as I understand 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we trying to resolve this problem  for iwarp?!)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; I don't think that iwarp has SRQ at all. And if it has then it should
</span><br>
<span class="quotelev2">&gt;&gt; have HW flow control for it too. I don't see what advantage SRQ without
</span><br>
<span class="quotelev2">&gt;&gt; flow control can provide over PPRQ.   
</span><br>
I'm agree that HW flow it is no reason for SRQ.
<br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So this solution will cost 1 buffer on each srq ... sounds 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; acceptable for me. But I don't see too much
</span><br>
<span class="quotelev3">&gt;&gt;&gt; difference compared to #1, as I understand  we anyway will be need 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the pipe for communication with main thread.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so why don't use #1 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; What communication? No communication at all. Just don't prepost buffers
</span><br>
<span class="quotelev2">&gt;&gt; to SRQ during connection establishment. Problem solved (only for SRQ of
</span><br>
<span class="quotelev2">&gt;&gt; cause).  
</span><br>
As i know Jeff use the pipe for some status update (Jeff, please correct 
<br>
me if  I wrong).
<br>
If we still need pipe for communication , I prefer #1.
<br>
If we don't have the pipe , I prefer your solution
<br>
<p>Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3933.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3931.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Maybe in reply to:</strong> <a href="3928.php">Jeff Squyres: "[OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3933.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3933.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
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
