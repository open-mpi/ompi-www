<?
$subject_val = "Re: [OMPI devel] Nearly unlimited growth of pml free list";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 30 10:54:23 2013" -->
<!-- isoreceived="20130930145423" -->
<!-- sent="Mon, 30 Sep 2013 17:09:22 +0200" -->
<!-- isosent="20130930150922" -->
<!-- name="Max Staufer" -->
<!-- email="max.staufer_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Nearly unlimited growth of pml free list" -->
<!-- id="52499422.6040404_at_gmx.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F36006A29A28_at_HQMAIL02.nvidia.com" -->
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
<strong>Date:</strong> 2013-09-30 11:09:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13014.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Previous message:</strong> <a href="13012.php">Jeff Squyres (jsquyres): "[OMPI devel] Intel compiler builds broken"</a>
<li><strong>In reply to:</strong> <a href="12891.php">Rolf vandeVaart: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13020.php">George Bosilca: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
<li><strong>Reply:</strong> <a href="13020.php">George Bosilca: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, havent tryed 1.7.2 yet, but too elaborate the problem a little bit 
<br>
more,
<br>
<p>&nbsp;&nbsp;&nbsp;the groth happens if we use an MPI_ALLREDUCE in a recursive 
<br>
subroutine call, that means in FORTRAN90 speech the
<br>
subroutine calls itself again, and  is specially marked in order to work 
<br>
properly. Apart from that nothing is special
<br>
with this routine. Is it possible that the F77 interface in Openmpi is 
<br>
not able to cope with recursions ?
<br>
<p>MAX
<br>
<p><p><p>Am 13.09.13 17:18, schrieb Rolf vandeVaart:
<br>
<span class="quotelev1">&gt; Yes, it appears the send_requests list is the one that is growing.  This list holds the send request structures that are in use.  After a send is completed, a send request is supposed to be returned to this list and then get re-used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With 7 processes, it had reached a size of 16,324 send requests in use.  With the 8 processes, it had reached a size of 16,708.  Each send request is 720 bytes (in debug build it is 872) and if we do the math we have consumed about 12 Mbytes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Setting some type of bound will not fix this issue.  There is something else going on here that is causing this problem.   I know you described the problem earlier on, but maybe you can explain again?  How many processes?  What type of cluster?    One other thought is perhaps trying Open MPI 1.7.2 to see if you still see the problem.   Maybe someone else has suggestions too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: For those who missed a private email, I had Max add some instrumentation so we could see which list was growing.  We now know it is the mca_pml_base_send_requests list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: Max Staufer [mailto:max.staufer_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, September 13, 2013 7:06 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Rolf vandeVaart;devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] Nearly unlimited growth of pml free list
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Rolf,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I applied your patch, the full output is rather big, even gzip &gt; 10Mb, which is
</span><br>
<span class="quotelev2">&gt;&gt; not good for the mailinglist, but the head and tail are below for a 7 and 8
</span><br>
<span class="quotelev2">&gt;&gt; processor run.
</span><br>
<span class="quotelev2">&gt;&gt; Seem that the send requests are growing fast 4000 times in just 10 min.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you now of a method to bound the list such that it is not growing excessivly
</span><br>
<span class="quotelev2">&gt;&gt; ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Max
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 7 Processor run
</span><br>
<span class="quotelev2">&gt;&gt; ------------------
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11236] Iteration = 0 sleeping [gpu207.dev-env.lan:11236]
</span><br>
<span class="quotelev2">&gt;&gt; Freelist=rdma_frags, numAlloc=4, maxAlloc=-1 [gpu207.dev-env.lan:11236]
</span><br>
<span class="quotelev2">&gt;&gt; Freelist=recv_frags, numAlloc=4, maxAlloc=-1 [gpu207.dev-env.lan:11236]
</span><br>
<span class="quotelev2">&gt;&gt; Freelist=pending_pckts, numAlloc=4, maxAlloc=-1 [gpu207.dev-
</span><br>
<span class="quotelev2">&gt;&gt; env.lan:11236] Freelist=send_ranges_pckts, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11236] Freelist=send_requests, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11236] Freelist=recv_requests, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1 [gpu207.dev-env.lan:11236] rdma_pending=0, pckt_pending=0,
</span><br>
<span class="quotelev2">&gt;&gt; recv_pending=0, send_pending=0, comm_pending=0 [gpu207.dev-
</span><br>
<span class="quotelev2">&gt;&gt; env.lan:11236] [gpu207.dev-env.lan:11236] Iteration = 0 sleeping
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11236] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11236] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11236] Freelist=pending_pckts, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11236] Freelist=send_ranges_pckts, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11236] Freelist=send_requests, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11236] Freelist=recv_requests, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1 [gpu207.dev-env.lan:11236] rdma_pending=0, pckt_pending=0,
</span><br>
<span class="quotelev2">&gt;&gt; recv_pending=0, send_pending=0, comm_pending=0 [gpu207.dev-
</span><br>
<span class="quotelev2">&gt;&gt; env.lan:11236] [gpu207.dev-env.lan:11236] Iteration = 0 sleeping
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11236] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11236] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11236] Freelist=pending_pckts, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11236] Freelist=send_ranges_pckts, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11236] Freelist=send_requests, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11236] Freelist=recv_requests, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1 [gpu207.dev-env.lan:11236] rdma_pending=0, pckt_pending=0,
</span><br>
<span class="quotelev2">&gt;&gt; recv_pending=0, send_pending=0, comm_pending=0 [gpu207.dev-
</span><br>
<span class="quotelev2">&gt;&gt; env.lan:11236] [gpu207.dev-env.lan:11236] Iteration = 0 sleeping
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11236] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11236] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11236] Freelist=pending_pckts, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11236] Freelist=send_ranges_pckts, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11236] Freelist=send_requests, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11236] Freelist=recv_requests, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1 [gpu207.dev-env.lan:11236] rdma_pending=0, pckt_pending=0,
</span><br>
<span class="quotelev2">&gt;&gt; recv_pending=0, send_pending=0, comm_pending=0 [gpu207.dev-
</span><br>
<span class="quotelev2">&gt;&gt; env.lan:11236] [gpu207.dev-env.lan:11236] Iteration = 0 sleeping
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11236] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11236] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11236] Freelist=pending_pckts, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11236] Freelist=send_ranges_pckts, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11236] Freelist=send_requests, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11236] Freelist=recv_requests, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1 [gpu207.dev-env.lan:11236] rdma_pending=0, pckt_pending=0,
</span><br>
<span class="quotelev2">&gt;&gt; recv_pending=0, send_pending=0, comm_pending=0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ......
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=send_ranges_pckts, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=send_requests, numAlloc=16324,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=recv_requests, numAlloc=68, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11243] rdma_pending=0, pckt_pending=0,
</span><br>
<span class="quotelev2">&gt;&gt; recv_pending=0, send_pending=0, comm_pending=0 [gpu207.dev-
</span><br>
<span class="quotelev2">&gt;&gt; env.lan:11243] [gpu207.dev-env.lan:11243] Iteration = 0 sleeping
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=pending_pckts, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11243] Freelist=send_ranges_pckts, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=send_requests, numAlloc=16324,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=recv_requests, numAlloc=68, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11243] rdma_pending=0, pckt_pending=0,
</span><br>
<span class="quotelev2">&gt;&gt; recv_pending=0, send_pending=0, comm_pending=0 [gpu207.dev-
</span><br>
<span class="quotelev2">&gt;&gt; env.lan:11243] [gpu207.dev-env.lan:11243] Iteration = 0 sleeping
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=pending_pckts, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11243] Freelist=send_ranges_pckts, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=send_requests, numAlloc=16324,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=recv_requests, numAlloc=68, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11243] rdma_pending=0, pckt_pending=0,
</span><br>
<span class="quotelev2">&gt;&gt; recv_pending=0, send_pending=0, comm_pending=0 [gpu207.dev-
</span><br>
<span class="quotelev2">&gt;&gt; env.lan:11243] [gpu207.dev-env.lan:11243] Iteration = 0 sleeping
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=pending_pckts, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11243] Freelist=send_ranges_pckts, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=send_requests, numAlloc=16324,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=recv_requests, numAlloc=68, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11243] rdma_pending=0, pckt_pending=0,
</span><br>
<span class="quotelev2">&gt;&gt; recv_pending=0, send_pending=0, comm_pending=0 [gpu207.dev-
</span><br>
<span class="quotelev2">&gt;&gt; env.lan:11243] [gpu207.dev-env.lan:11243] Iteration = 0 sleeping
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=pending_pckts, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11243] Freelist=send_ranges_pckts, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=send_requests, numAlloc=16324,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=recv_requests, numAlloc=68, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11243] rdma_pending=0, pckt_pending=0,
</span><br>
<span class="quotelev2">&gt;&gt; recv_pending=0, send_pending=0, comm_pending=0 [gpu207.dev-
</span><br>
<span class="quotelev2">&gt;&gt; env.lan:11243] [gpu207.dev-env.lan:11243] Iteration = 0 sleeping
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=pending_pckts, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11243] Freelist=send_ranges_pckts, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=send_requests, numAlloc=16324,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11243] Freelist=recv_requests, numAlloc=68, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11243] rdma_pending=0, pckt_pending=0,
</span><br>
<span class="quotelev2">&gt;&gt; recv_pending=0, send_pending=0, comm_pending=0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 8 Processor run
</span><br>
<span class="quotelev2">&gt;&gt; --------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11315] Iteration = 0 sleeping [gpu207.dev-env.lan:11315]
</span><br>
<span class="quotelev2">&gt;&gt; Freelist=rdma_frags, numAlloc=4, maxAlloc=-1 [gpu207.dev-env.lan:11315]
</span><br>
<span class="quotelev2">&gt;&gt; Freelist=recv_frags, numAlloc=4, maxAlloc=-1 [gpu207.dev-env.lan:11315]
</span><br>
<span class="quotelev2">&gt;&gt; Freelist=pending_pckts, numAlloc=4, maxAlloc=-1 [gpu207.dev-
</span><br>
<span class="quotelev2">&gt;&gt; env.lan:11315] Freelist=send_ranges_pckts, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11315] Freelist=send_requests, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11315] Freelist=recv_requests, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1 [gpu207.dev-env.lan:11315] rdma_pending=0, pckt_pending=0,
</span><br>
<span class="quotelev2">&gt;&gt; recv_pending=0, send_pending=0, comm_pending=0 [gpu207.dev-
</span><br>
<span class="quotelev2">&gt;&gt; env.lan:11315] [gpu207.dev-env.lan:11315] Iteration = 0 sleeping
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11315] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11315] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11315] Freelist=pending_pckts, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11315] Freelist=send_ranges_pckts, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11315] Freelist=send_requests, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11315] Freelist=recv_requests, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1 [gpu207.dev-env.lan:11315] rdma_pending=0, pckt_pending=0,
</span><br>
<span class="quotelev2">&gt;&gt; recv_pending=0, send_pending=0, comm_pending=0 [gpu207.dev-
</span><br>
<span class="quotelev2">&gt;&gt; env.lan:11315] [gpu207.dev-env.lan:11315] Iteration = 0 sleeping
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11315] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11315] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11315] Freelist=pending_pckts, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11315] Freelist=send_ranges_pckts, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11315] Freelist=send_requests, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11315] Freelist=recv_requests, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1 [gpu207.dev-env.lan:11315] rdma_pending=0, pckt_pending=0,
</span><br>
<span class="quotelev2">&gt;&gt; recv_pending=0, send_pending=0, comm_pending=0 [gpu207.dev-
</span><br>
<span class="quotelev2">&gt;&gt; env.lan:11315] [gpu207.dev-env.lan:11315] Iteration = 0 sleeping
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11315] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11315] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11315] Freelist=pending_pckts, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11315] Freelist=send_ranges_pckts, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11315] Freelist=send_requests, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11315] Freelist=recv_requests, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1 [gpu207.dev-env.lan:11315] rdma_pending=0, pckt_pending=0,
</span><br>
<span class="quotelev2">&gt;&gt; recv_pending=0, send_pending=0, comm_pending=0 [gpu207.dev-
</span><br>
<span class="quotelev2">&gt;&gt; env.lan:11315] [gpu207.dev-env.lan:11315] Iteration = 0 sleeping
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11315] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11315] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11315] Freelist=pending_pckts, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11315] Freelist=send_ranges_pckts, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11315] Freelist=send_requests, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11315] Freelist=recv_requests, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1 [gpu207.dev-env.lan:11315] rdma_pending=0, pckt_pending=0,
</span><br>
<span class="quotelev2">&gt;&gt; recv_pending=0, send_pending=0, comm_pending=0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11322] Iteration = 0 sleeping [gpu207.dev-env.lan:11322]
</span><br>
<span class="quotelev2">&gt;&gt; Freelist=rdma_frags, numAlloc=4, maxAlloc=-1 [gpu207.dev-env.lan:11322]
</span><br>
<span class="quotelev2">&gt;&gt; Freelist=recv_frags, numAlloc=4, maxAlloc=-1 [gpu207.dev-env.lan:11322]
</span><br>
<span class="quotelev2">&gt;&gt; Freelist=pending_pckts, numAlloc=4, maxAlloc=-1 [gpu207.dev-
</span><br>
<span class="quotelev2">&gt;&gt; env.lan:11322] Freelist=send_ranges_pckts, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11322] Freelist=send_requests, numAlloc=16708,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11322] Freelist=recv_requests, numAlloc=68, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11322] rdma_pending=0, pckt_pending=0,
</span><br>
<span class="quotelev2">&gt;&gt; recv_pending=0, send_pending=0, comm_pending=0 [gpu207.dev-
</span><br>
<span class="quotelev2">&gt;&gt; env.lan:11322] [gpu207.dev-env.lan:11322] Iteration = 0 sleeping
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11322] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11322] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11322] Freelist=pending_pckts, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11322] Freelist=send_ranges_pckts, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11322] Freelist=send_requests, numAlloc=16708,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11322] Freelist=recv_requests, numAlloc=68, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11322] rdma_pending=0, pckt_pending=0,
</span><br>
<span class="quotelev2">&gt;&gt; recv_pending=0, send_pending=0, comm_pending=0 [gpu207.dev-
</span><br>
<span class="quotelev2">&gt;&gt; env.lan:11322] [gpu207.dev-env.lan:11322] Iteration = 0 sleeping
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11322] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11322] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11322] Freelist=pending_pckts, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11322] Freelist=send_ranges_pckts, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11322] Freelist=send_requests, numAlloc=16708,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11322] Freelist=recv_requests, numAlloc=68, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11322] rdma_pending=0, pckt_pending=0,
</span><br>
<span class="quotelev2">&gt;&gt; recv_pending=0, send_pending=0, comm_pending=0 [gpu207.dev-
</span><br>
<span class="quotelev2">&gt;&gt; env.lan:11322] [gpu207.dev-env.lan:11322] Iteration = 0 sleeping
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11322] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11322] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11322] Freelist=pending_pckts, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11322] Freelist=send_ranges_pckts, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11322] Freelist=send_requests, numAlloc=16708,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11322] Freelist=recv_requests, numAlloc=68, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11322] rdma_pending=0, pckt_pending=0,
</span><br>
<span class="quotelev2">&gt;&gt; recv_pending=0, send_pending=0, comm_pending=0 [gpu207.dev-
</span><br>
<span class="quotelev2">&gt;&gt; env.lan:11322] [gpu207.dev-env.lan:11322] Iteration = 0 sleeping
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11322] Freelist=rdma_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11322] Freelist=recv_frags, numAlloc=4, maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11322] Freelist=pending_pckts, numAlloc=4, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11322] Freelist=send_ranges_pckts, numAlloc=4,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11322] Freelist=send_requests, numAlloc=16708,
</span><br>
<span class="quotelev2">&gt;&gt; maxAlloc=-1
</span><br>
<span class="quotelev2">&gt;&gt; [gpu207.dev-env.lan:11322] Freelist=recv_requests, numAlloc=68, maxAlloc=-
</span><br>
<span class="quotelev2">&gt;&gt; 1 [gpu207.dev-env.lan:11322] rdma_pending=0, pckt_pending=0,
</span><br>
<span class="quotelev2">&gt;&gt; recv_pending=0, send_pending=0, comm_pending=0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 12.09.2013 17:04, schrieb Rolf vandeVaart:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you apply this patch and try again?  It will print out the sizes of the free
</span><br>
<span class="quotelev2">&gt;&gt; lists after every 100 calls into the mca_pml_ob1_send.  It would be interesting
</span><br>
<span class="quotelev2">&gt;&gt; to see which one is growing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This might give us some clues.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: Max Staufer [mailto:max.staufer_at_[hidden]]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Thursday, September 12, 2013 3:53 AM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Rolf vandeVaart
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI devel] Nearly unlimited growth of pml free list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Rolf,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      the heap snapshots I do tell me where and when the memory has
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; been allocated, and a simple source trace of the in tells me that the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; calling
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; routine was mca_pml_ob1_send  and that all of the ~100000 single
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allocations during the run were called because of an MPI_ALLREDUCE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; command called in exactly one place of the code.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The tool I use for doing that is MemorySCAPE but I thing Valgrind can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tell you the same thing. However, I was not able to reproduce the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem in a simpler program yet, but I suspect it has something to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; do with the locking mechanism of the list elements. I dont know
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; enough about OMPI to comment on that, but it looks like that the list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is growing because all elements are locked.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; really any help is appreciated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Max
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PS:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; IF I MIMICK ALLREDUCE with 2*Nproc SEND and RECV commands
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (aggregating on proc 0 and then sending out to all Proc) I get the same kind
</span><br>
<span class="quotelev2">&gt;&gt; of behaviour.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Am 11.09.2013 17:12, schrieb Rolf vandeVaart:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Max:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You say that that the function keeps &quot;allocating memory in the pml free
</span><br>
<span class="quotelev2">&gt;&gt; list.&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How do you know that is happening?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Do you know which free list it is happening on?  There are something
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; like 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; free lists associated with the pml ob1 so it would be interesting to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; know which one you observe is growing.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Max
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Staufer
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sent: Wednesday, September 11, 2013 10:23 AM
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To:devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subject: [OMPI devel] Nearly unlimited growth of pml free list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;        as I already asked in the users list, I was told thats not
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the right place to ask, I came across a &quot;missbehaviour&quot; of openmpi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.4.5 and 1.6.5 alike.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the mca_pml_ob1_send function keeps allocating memory in the pml
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; free
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; list.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It does that indefinitly. In my case the list grew to about 100Gb.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I can controll the maximum using the pml_ob1_free_list_max
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; parameter, but then the application just stops working when this
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; number of entries in the list is reached.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The interesting part is that the growth only happens in a single
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; place in the code, which is RECURSIVE SUBROUTINE.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; And the called function is an MPI_ALLREDUCE(... MPI_SUM)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Apparently its not easy to create a test program that shows the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; same behaviour, just recursion is not enought.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Is there a mca parameter that allows to limit the total list size
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; without making the app. stop ?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; or is there a way to enforce the lock on the free list entries ?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks for all the help
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Max
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------- This email message is for the sole use of the intended
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; recipient(s) and may contain confidential information.  Any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; unauthorized review, use, disclosure or distribution is prohibited.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -------------
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13014.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Previous message:</strong> <a href="13012.php">Jeff Squyres (jsquyres): "[OMPI devel] Intel compiler builds broken"</a>
<li><strong>In reply to:</strong> <a href="12891.php">Rolf vandeVaart: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13020.php">George Bosilca: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
<li><strong>Reply:</strong> <a href="13020.php">George Bosilca: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
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
