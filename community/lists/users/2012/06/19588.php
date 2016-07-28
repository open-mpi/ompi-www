<?
$subject_val = "Re: [OMPI users] How to enable progress threads in 1.6?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 15 07:17:56 2012" -->
<!-- isoreceived="20120615111756" -->
<!-- sent="Fri, 15 Jun 2012 07:17:51 -0400" -->
<!-- isosent="20120615111751" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to enable progress threads in 1.6?" -->
<!-- id="078B2BCC-E184-4AA8-A54B-D8CB9761EB34_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E33B0810F4165748B761641D5721AC19011F3493EC91_at_MAILBOX2.ad.liu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to enable progress threads in 1.6?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-15 07:17:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19589.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Previous message:</strong> <a href="19587.php">Jeff Squyres: "Re: [OMPI users] An idea about a semi-automatic optimized	parallel	I/O with Open MPI"</a>
<li><strong>In reply to:</strong> <a href="19532.php">Filippo Donida: "Re: [OMPI users] How to enable progress threads in 1.6?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 13, 2012, at 10:35 AM, Filippo Donida wrote:
<br>
<p><span class="quotelev1">&gt; My idea is to have a thread to be launched just after the MPI_Isend call with a fake MPI_Test function call, just to make the sending operation progressing. 
</span><br>
<p>Sorry for jumping in late (usual disclaimer about my INBOX being a disaster...).
<br>
<p>As is usual in engineering, the answer is: &quot;it depends&quot;.  :-)
<br>
<p>Short version: balance your overheads vs. the delivered performance.
<br>
<p>For example, the cost of launching a new thread (and reaping it when it is done) vs. claiming a thread from a pool of existing/waiting threads may be significant -- especially for transports where latency is already very low (e.g., shared memory, InfiniBand, etc.).  
<br>
<p>In general, prior research has shown that threaded MPI progress is *generally* best for long messages.  I.e., have a thread going in the background that processes incoming and outgoing long messages.  But keep the progress of short messages in the foreground thread, because the overhead of passing short messages to a background thread quickly overwhelms the performance benefit of asynchronous progress (unless there's a backlog of short messages, ...etc.).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19589.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Previous message:</strong> <a href="19587.php">Jeff Squyres: "Re: [OMPI users] An idea about a semi-automatic optimized	parallel	I/O with Open MPI"</a>
<li><strong>In reply to:</strong> <a href="19532.php">Filippo Donida: "Re: [OMPI users] How to enable progress threads in 1.6?"</a>
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
