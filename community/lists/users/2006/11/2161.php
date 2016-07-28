<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov  8 13:51:33 2006" -->
<!-- isoreceived="20061108185133" -->
<!-- sent="Wed, 8 Nov 2006 10:51:29 -0800" -->
<!-- isosent="20061108185129" -->
<!-- name="Greg Lindahl" -->
<!-- email="greg.lindahl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] efficient memory to memory transfer" -->
<!-- id="20061108185129.GG3735_at_greglaptop.internal.keyresearch.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="f058a9c30611080425o70f499a9r6dc174d51f926d4_at_mail.gmail.com" -->
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
<strong>From:</strong> Greg Lindahl (<em>greg.lindahl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-08 13:51:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2162.php">Chevchenkovic Chevchenkovic: "[OMPI users] MPI_Alloc_Mem Error"</a>
<li><strong>Previous message:</strong> <a href="2160.php">Greg Lindahl: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>In reply to:</strong> <a href="2152.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Nov 08, 2006 at 12:25:20PM +0000, Miguel Figueiredo Mascarenhas Sousa Filipe wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Unless sharing data repeatedly leads you to false sharing and a loss
</span><br>
<span class="quotelev2">&gt; &gt; in performance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; what does that mean.. I did not understand that.
</span><br>
<p>Google indexes a bunch of good webpages on &quot;false sharing&quot;.
<br>
<p><span class="quotelev2">&gt; &gt; For many programs with both MPI and shared memory implementations, the
</span><br>
<span class="quotelev2">&gt; &gt; MPI version runs faster on SMPs and numa-CCs. Why? See the previous
</span><br>
<span class="quotelev2">&gt; &gt; paragraph...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course it does..its faster to copy data in main memory than it is
</span><br>
<span class="quotelev1">&gt; to do it thought any kind of network interface.
</span><br>
<p>MPI implementations typically copy data in main memory when it is
<br>
talking on the same node. If it's faster to use the network interface,
<br>
and sometimes it is due to DMA engines, then your friendly MPI
<br>
implementer is likely to be taking advantage of it.
<br>
<p><span class="quotelev1">&gt; But, for instance.. try to benchmark real applications with a MPI and
</span><br>
<span class="quotelev1">&gt; posix threads implementations in the same numa-cc or big SMP machine..
</span><br>
<span class="quotelev1">&gt; my bet is that posix threads implementation is going to be faster..
</span><br>
<p>And your bet is often wrong.
<br>
<p>-- greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2162.php">Chevchenkovic Chevchenkovic: "[OMPI users] MPI_Alloc_Mem Error"</a>
<li><strong>Previous message:</strong> <a href="2160.php">Greg Lindahl: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>In reply to:</strong> <a href="2152.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] efficient memory to memory transfer"</a>
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
