<?
$subject_val = "Re: [OMPI devel] Nearly unlimited growth of pml free list";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 13 06:52:59 2013" -->
<!-- isoreceived="20130913105259" -->
<!-- sent="Fri, 13 Sep 2013 13:06:23 +0200" -->
<!-- isosent="20130913110623" -->
<!-- name="Max Staufer" -->
<!-- email="max.staufer_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Nearly unlimited growth of pml free list" -->
<!-- id="5232F1AF.600_at_gmx.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F360068DEDD3_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Nearly unlimited growth of pml free list<br>
<strong>From:</strong> Max Staufer (<em>max.staufer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-13 07:06:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12889.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem fortran interface"</a>
<li><strong>Previous message:</strong> <a href="12887.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: === CREATE FAILURE (trunk) ==="</a>
<li><strong>Maybe in reply to:</strong> <a href="12883.php">Max Staufer: "[OMPI devel] Nearly unlimited growth of pml free list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12891.php">Rolf vandeVaart: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
<li><strong>Reply:</strong> <a href="12891.php">Rolf vandeVaart: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rolf,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;I applied your patch, the full output is rather big, even gzip &gt; 
<br>
10Mb, which is not good for the mailinglist, but the head and tail are 
<br>
below for a 7 and 8 processor run.
<br>
Seem that the send requests are growing fast 4000 times in just 10 min.
<br>
<p>Do you now of a method to bound the list such that it is not growing 
<br>
excessivly ?
<br>
<p>thanks
<br>
<p>Max
<br>
<p>7 Processor run
<br>
------------------
<br>
[gpu207.dev-env.lan:11236] Iteration = 0 sleeping
<br>
[gpu207.dev-env.lan:11236] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] Freelist=pending_pckts, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] Freelist=send_ranges_pckts, numAlloc=4, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] Freelist=send_requests, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] Freelist=recv_requests, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] rdma_pending=0, pckt_pending=0, 
<br>
recv_pending=0, send_pending=0, comm_pending=0
<br>
[gpu207.dev-env.lan:11236]
<br>
[gpu207.dev-env.lan:11236] Iteration = 0 sleeping
<br>
[gpu207.dev-env.lan:11236] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] Freelist=pending_pckts, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] Freelist=send_ranges_pckts, numAlloc=4, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] Freelist=send_requests, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] Freelist=recv_requests, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] rdma_pending=0, pckt_pending=0, 
<br>
recv_pending=0, send_pending=0, comm_pending=0
<br>
[gpu207.dev-env.lan:11236]
<br>
[gpu207.dev-env.lan:11236] Iteration = 0 sleeping
<br>
[gpu207.dev-env.lan:11236] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] Freelist=pending_pckts, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] Freelist=send_ranges_pckts, numAlloc=4, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] Freelist=send_requests, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] Freelist=recv_requests, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] rdma_pending=0, pckt_pending=0, 
<br>
recv_pending=0, send_pending=0, comm_pending=0
<br>
[gpu207.dev-env.lan:11236]
<br>
[gpu207.dev-env.lan:11236] Iteration = 0 sleeping
<br>
[gpu207.dev-env.lan:11236] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] Freelist=pending_pckts, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] Freelist=send_ranges_pckts, numAlloc=4, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] Freelist=send_requests, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] Freelist=recv_requests, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] rdma_pending=0, pckt_pending=0, 
<br>
recv_pending=0, send_pending=0, comm_pending=0
<br>
[gpu207.dev-env.lan:11236]
<br>
[gpu207.dev-env.lan:11236] Iteration = 0 sleeping
<br>
[gpu207.dev-env.lan:11236] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] Freelist=pending_pckts, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] Freelist=send_ranges_pckts, numAlloc=4, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] Freelist=send_requests, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] Freelist=recv_requests, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11236] rdma_pending=0, pckt_pending=0, 
<br>
recv_pending=0, send_pending=0, comm_pending=0
<br>
<p>......
<br>
<p>[gpu207.dev-env.lan:11243] Freelist=send_ranges_pckts, numAlloc=4, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=send_requests, numAlloc=16324, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=recv_requests, numAlloc=68, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] rdma_pending=0, pckt_pending=0, 
<br>
recv_pending=0, send_pending=0, comm_pending=0
<br>
[gpu207.dev-env.lan:11243]
<br>
[gpu207.dev-env.lan:11243] Iteration = 0 sleeping
<br>
[gpu207.dev-env.lan:11243] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=pending_pckts, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=send_ranges_pckts, numAlloc=4, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=send_requests, numAlloc=16324, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=recv_requests, numAlloc=68, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] rdma_pending=0, pckt_pending=0, 
<br>
recv_pending=0, send_pending=0, comm_pending=0
<br>
[gpu207.dev-env.lan:11243]
<br>
[gpu207.dev-env.lan:11243] Iteration = 0 sleeping
<br>
[gpu207.dev-env.lan:11243] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=pending_pckts, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=send_ranges_pckts, numAlloc=4, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=send_requests, numAlloc=16324, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=recv_requests, numAlloc=68, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] rdma_pending=0, pckt_pending=0, 
<br>
recv_pending=0, send_pending=0, comm_pending=0
<br>
[gpu207.dev-env.lan:11243]
<br>
[gpu207.dev-env.lan:11243] Iteration = 0 sleeping
<br>
[gpu207.dev-env.lan:11243] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=pending_pckts, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=send_ranges_pckts, numAlloc=4, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=send_requests, numAlloc=16324, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=recv_requests, numAlloc=68, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] rdma_pending=0, pckt_pending=0, 
<br>
recv_pending=0, send_pending=0, comm_pending=0
<br>
[gpu207.dev-env.lan:11243]
<br>
[gpu207.dev-env.lan:11243] Iteration = 0 sleeping
<br>
[gpu207.dev-env.lan:11243] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=pending_pckts, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=send_ranges_pckts, numAlloc=4, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=send_requests, numAlloc=16324, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=recv_requests, numAlloc=68, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] rdma_pending=0, pckt_pending=0, 
<br>
recv_pending=0, send_pending=0, comm_pending=0
<br>
[gpu207.dev-env.lan:11243]
<br>
[gpu207.dev-env.lan:11243] Iteration = 0 sleeping
<br>
[gpu207.dev-env.lan:11243] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=pending_pckts, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=send_ranges_pckts, numAlloc=4, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=send_requests, numAlloc=16324, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] Freelist=recv_requests, numAlloc=68, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11243] rdma_pending=0, pckt_pending=0, 
<br>
recv_pending=0, send_pending=0, comm_pending=0
<br>
<p><p>8 Processor run
<br>
--------------------
<br>
<p>[gpu207.dev-env.lan:11315] Iteration = 0 sleeping
<br>
[gpu207.dev-env.lan:11315] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] Freelist=pending_pckts, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] Freelist=send_ranges_pckts, numAlloc=4, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] Freelist=send_requests, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] Freelist=recv_requests, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] rdma_pending=0, pckt_pending=0, 
<br>
recv_pending=0, send_pending=0, comm_pending=0
<br>
[gpu207.dev-env.lan:11315]
<br>
[gpu207.dev-env.lan:11315] Iteration = 0 sleeping
<br>
[gpu207.dev-env.lan:11315] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] Freelist=pending_pckts, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] Freelist=send_ranges_pckts, numAlloc=4, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] Freelist=send_requests, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] Freelist=recv_requests, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] rdma_pending=0, pckt_pending=0, 
<br>
recv_pending=0, send_pending=0, comm_pending=0
<br>
[gpu207.dev-env.lan:11315]
<br>
[gpu207.dev-env.lan:11315] Iteration = 0 sleeping
<br>
[gpu207.dev-env.lan:11315] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] Freelist=pending_pckts, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] Freelist=send_ranges_pckts, numAlloc=4, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] Freelist=send_requests, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] Freelist=recv_requests, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] rdma_pending=0, pckt_pending=0, 
<br>
recv_pending=0, send_pending=0, comm_pending=0
<br>
[gpu207.dev-env.lan:11315]
<br>
[gpu207.dev-env.lan:11315] Iteration = 0 sleeping
<br>
[gpu207.dev-env.lan:11315] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] Freelist=pending_pckts, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] Freelist=send_ranges_pckts, numAlloc=4, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] Freelist=send_requests, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] Freelist=recv_requests, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] rdma_pending=0, pckt_pending=0, 
<br>
recv_pending=0, send_pending=0, comm_pending=0
<br>
[gpu207.dev-env.lan:11315]
<br>
[gpu207.dev-env.lan:11315] Iteration = 0 sleeping
<br>
[gpu207.dev-env.lan:11315] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] Freelist=pending_pckts, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] Freelist=send_ranges_pckts, numAlloc=4, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] Freelist=send_requests, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] Freelist=recv_requests, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11315] rdma_pending=0, pckt_pending=0, 
<br>
recv_pending=0, send_pending=0, comm_pending=0
<br>
<p>...
<br>
<p>[gpu207.dev-env.lan:11322] Iteration = 0 sleeping
<br>
[gpu207.dev-env.lan:11322] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] Freelist=pending_pckts, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] Freelist=send_ranges_pckts, numAlloc=4, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] Freelist=send_requests, numAlloc=16708, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] Freelist=recv_requests, numAlloc=68, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] rdma_pending=0, pckt_pending=0, 
<br>
recv_pending=0, send_pending=0, comm_pending=0
<br>
[gpu207.dev-env.lan:11322]
<br>
[gpu207.dev-env.lan:11322] Iteration = 0 sleeping
<br>
[gpu207.dev-env.lan:11322] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] Freelist=pending_pckts, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] Freelist=send_ranges_pckts, numAlloc=4, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] Freelist=send_requests, numAlloc=16708, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] Freelist=recv_requests, numAlloc=68, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] rdma_pending=0, pckt_pending=0, 
<br>
recv_pending=0, send_pending=0, comm_pending=0
<br>
[gpu207.dev-env.lan:11322]
<br>
[gpu207.dev-env.lan:11322] Iteration = 0 sleeping
<br>
[gpu207.dev-env.lan:11322] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] Freelist=pending_pckts, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] Freelist=send_ranges_pckts, numAlloc=4, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] Freelist=send_requests, numAlloc=16708, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] Freelist=recv_requests, numAlloc=68, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] rdma_pending=0, pckt_pending=0, 
<br>
recv_pending=0, send_pending=0, comm_pending=0
<br>
[gpu207.dev-env.lan:11322]
<br>
[gpu207.dev-env.lan:11322] Iteration = 0 sleeping
<br>
[gpu207.dev-env.lan:11322] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] Freelist=pending_pckts, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] Freelist=send_ranges_pckts, numAlloc=4, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] Freelist=send_requests, numAlloc=16708, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] Freelist=recv_requests, numAlloc=68, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] rdma_pending=0, pckt_pending=0, 
<br>
recv_pending=0, send_pending=0, comm_pending=0
<br>
[gpu207.dev-env.lan:11322]
<br>
[gpu207.dev-env.lan:11322] Iteration = 0 sleeping
<br>
[gpu207.dev-env.lan:11322] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] Freelist=pending_pckts, numAlloc=4, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] Freelist=send_ranges_pckts, numAlloc=4, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] Freelist=send_requests, numAlloc=16708, 
<br>
maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] Freelist=recv_requests, numAlloc=68, maxAlloc=-1
<br>
[gpu207.dev-env.lan:11322] rdma_pending=0, pckt_pending=0, 
<br>
recv_pending=0, send_pending=0, comm_pending=0
<br>
<p><p><p>Am 12.09.2013 17:04, schrieb Rolf vandeVaart:
<br>
<span class="quotelev1">&gt; Can you apply this patch and try again?  It will print out the sizes of the free lists after every 100 calls into the mca_pml_ob1_send.  It would be interesting to see which one is growing.
</span><br>
<span class="quotelev1">&gt; This might give us some clues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: Max Staufer [mailto:max.staufer_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, September 12, 2013 3:53 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Rolf vandeVaart
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] Nearly unlimited growth of pml free list
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Rolf,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     the heap snapshots I do tell me where and when the memory has been
</span><br>
<span class="quotelev2">&gt;&gt; allocated, and a simple source trace of the in tells me that the calling
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; routine was mca_pml_ob1_send  and that all of the ~100000 single allocations
</span><br>
<span class="quotelev2">&gt;&gt; during the run were called because of an MPI_ALLREDUCE command called in
</span><br>
<span class="quotelev2">&gt;&gt; exactly one place of the code.
</span><br>
<span class="quotelev2">&gt;&gt; The tool I use for doing that is MemorySCAPE but I thing Valgrind can tell you
</span><br>
<span class="quotelev2">&gt;&gt; the same thing. However, I was not able to reproduce the problem in a
</span><br>
<span class="quotelev2">&gt;&gt; simpler program yet, but I suspect it has something to do with the locking
</span><br>
<span class="quotelev2">&gt;&gt; mechanism of the list elements. I dont know enough about OMPI to comment
</span><br>
<span class="quotelev2">&gt;&gt; on that, but it looks like that the list is growing because all elements are
</span><br>
<span class="quotelev2">&gt;&gt; locked.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; really any help is appreciated
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Max
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IF I MIMICK ALLREDUCE with 2*Nproc SEND and RECV commands (aggregating
</span><br>
<span class="quotelev2">&gt;&gt; on proc 0 and then sending out to all Proc) I get the same kind of behaviour.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 11.09.2013 17:12, schrieb Rolf vandeVaart:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Max:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You say that that the function keeps &quot;allocating memory in the pml free list.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; How do you know that is happening?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you know which free list it is happening on?  There are something like 8
</span><br>
<span class="quotelev2">&gt;&gt; free lists associated with the pml ob1 so it would be interesting to know which
</span><br>
<span class="quotelev2">&gt;&gt; one you observe is growing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Max
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Staufer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Wednesday, September 11, 2013 10:23 AM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: [OMPI devel] Nearly unlimited growth of pml free list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       as I already asked in the users list, I was told thats not the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; right place to ask, I came across a &quot;missbehaviour&quot; of openmpi version
</span><br>
<span class="quotelev2">&gt;&gt; 1.4.5 and 1.6.5 alike.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the mca_pml_ob1_send function keeps allocating memory in the pml free
</span><br>
<span class="quotelev2">&gt;&gt; list.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It does that indefinitly. In my case the list grew to about 100Gb.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I can controll the maximum using the pml_ob1_free_list_max parameter,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but then the application just stops working when this number of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; entries in the list is reached.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The interesting part is that the growth only happens in a single
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; place in the code, which is RECURSIVE SUBROUTINE.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And the called function is an MPI_ALLREDUCE(... MPI_SUM)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Apparently its not easy to create a test program that shows the same
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; behaviour, just recursion is not enought.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there a mca parameter that allows to limit the total list size
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; without making the app. stop ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or is there a way to enforce the lock on the free list entries ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for all the help
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Max
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------- This email message is for the sole use of the intended
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recipient(s) and may contain confidential information.  Any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unauthorized review, use, disclosure or distribution is prohibited.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12889.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem fortran interface"</a>
<li><strong>Previous message:</strong> <a href="12887.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: === CREATE FAILURE (trunk) ==="</a>
<li><strong>Maybe in reply to:</strong> <a href="12883.php">Max Staufer: "[OMPI devel] Nearly unlimited growth of pml free list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12891.php">Rolf vandeVaart: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
<li><strong>Reply:</strong> <a href="12891.php">Rolf vandeVaart: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
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
