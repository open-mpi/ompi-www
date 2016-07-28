<?
$subject_val = "Re: [OMPI devel] Threaded progress for CPCs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 19 12:43:15 2008" -->
<!-- isoreceived="20080519164315" -->
<!-- sent="Mon, 19 May 2008 19:43:05 +0300" -->
<!-- isosent="20080519164305" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Threaded progress for CPCs" -->
<!-- id="20080519164305.GA24344_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4831AD31.6060002_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2008-05-19 12:43:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3934.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3932.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3932.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, May 19, 2008 at 07:39:13PM +0300, Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So this solution will cost 1 buffer on each srq ... sounds  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; acceptable for me. But I don't see too much
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; difference compared to #1, as I understand  we anyway will be need  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the pipe for communication with main thread.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so why don't use #1 ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What communication? No communication at all. Just don't prepost buffers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to SRQ during connection establishment. Problem solved (only for SRQ of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cause).  
</span><br>
<span class="quotelev1">&gt; As i know Jeff use the pipe for some status update (Jeff, please correct  
</span><br>
<span class="quotelev1">&gt; me if  I wrong).
</span><br>
<span class="quotelev1">&gt; If we still need pipe for communication , I prefer #1.
</span><br>
<span class="quotelev1">&gt; If we don't have the pipe , I prefer your solution
</span><br>
<span class="quotelev1">&gt;
</span><br>
The pipe will still be there. The pipe itself is not the problem. The
<br>
problem is that currently initial post_receives are done in the CPC
<br>
thread. post_receives involves access to some data structures that are
<br>
used in the main thread too (free lists, mpool, SRQ) so it has to be
<br>
either protected or eliminated. I think that eliminating it is a better
<br>
solution for now. For SRQ case it is also easy to do. PPRQ is more
<br>
complicated but IMHO possible.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3934.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3932.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3932.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
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
