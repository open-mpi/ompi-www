<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  2 14:56:51 2006" -->
<!-- isoreceived="20061102195651" -->
<!-- sent="Thu, 2 Nov 2006 21:56:42 +0200" -->
<!-- isosent="20061102195642" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dma using infiniband protocol" -->
<!-- id="20061102195642.GA3825_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5b7094580611021037v419b586cwab4ce7a7bb602416_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-11-02 14:56:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2121.php">Brian Budge: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>Previous message:</strong> <a href="2119.php">Brian W Barrett: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>In reply to:</strong> <a href="2116.php">Brian Budge: "[OMPI users] dma using infiniband protocol"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Nov 02, 2006 at 10:37:24AM -0800, Brian Budge wrote:
<br>
<span class="quotelev1">&gt; Hi all -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm wondering how DMA is handled in OpenMPI when using the infiniband
</span><br>
<span class="quotelev1">&gt; protocol.  In particular, will I get a speed gain if my read/write buffers
</span><br>
<span class="quotelev1">&gt; are already pinned via mlock?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
No you will not. mlock has nothing to do with memory registration that
<br>
is needed for RDMA. If you'll allocate your read/write buffers with
<br>
MPI_Alloc_mem() that will help because this function register memory
<br>
for you.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2121.php">Brian Budge: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>Previous message:</strong> <a href="2119.php">Brian W Barrett: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>In reply to:</strong> <a href="2116.php">Brian Budge: "[OMPI users] dma using infiniband protocol"</a>
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
