<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  9 17:56:49 2007" -->
<!-- isoreceived="20070709215649" -->
<!-- sent="Mon, 9 Jul 2007 17:56:45 -0400" -->
<!-- isosent="20070709215645" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Ob1 segfault" -->
<!-- id="200707091756.45389.tprins_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20070709180432.GC19334_at_minantech.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-09 17:56:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1820.php">Glendenning, Lisa: "Re: [OMPI devel] One-sided operations with Portals"</a>
<li><strong>Previous message:</strong> <a href="1818.php">Brian Barrett: "[OMPI devel] fake rdma flag again?"</a>
<li><strong>In reply to:</strong> <a href="1815.php">Gleb Natapov: "Re: [OMPI devel] Ob1 segfault"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Monday 09 July 2007 02:04:33 pm Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; On Mon, Jul 09, 2007 at 10:41:52AM -0400, Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Gleb Natapov wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Sun, Jul 08, 2007 at 12:41:58PM -0400, Tim Prins wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On Sunday 08 July 2007 08:32:27 am Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; On Fri, Jul 06, 2007 at 06:36:13PM -0400, Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; While looking into another problem I ran into an issue which made
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; ob1 segfault on me. Using gm, and running the test test_dan1 in the
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; onesided test suite, if I limit the gm freelist by too much, I get a
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; segfault. That is,
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; mpirun -np 2 -mca btl gm,self -mca btl_gm_free_list_max 1024
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; test_dan1
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; works fine, but
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; mpirun -np 2 -mca btl gm,self -mca btl_gm_free_list_max 512
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; test_dan1
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; I cannot, unfortunately, reproduce this with openib BTL.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; segfaults. Here is the relevant output from gdb:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; [Switching to Thread 1077541088 (LWP 15600)]
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 0x404d81c1 in mca_pml_ob1_send_fin (proc=0x9bd9490,
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; bml_btl=0xd323580, hdr_des=0x9e54e78, order=255 '&#239;&#191;&#189;', status=1) at
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; pml_ob1.c:267 267         MCA_PML_OB1_DES_ALLOC(bml_btl, fin, order,
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; sizeof(mca_pml_ob1_fin_hdr_t));
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; can you send me what's inside bml_btl?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; It turns out that the order of arguments to mca_pml_ob1_send_fin was
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; wrong. I fixed this in r15304. But now we hang instead of segfault,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; and have both processes just looping through opal_progress. I really
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; don't what to look for. Any hints?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Can you look in gdb at mca_pml_ob1.rdma_pending?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yeah, rank 0 has nothing on the list, and rank 1 has 48 things.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you run both ranks on the same node? Can you try to run them on
</span><br>
<span class="quotelev1">&gt; different node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
I was running on one node, but running on different nodes leads to the same 
<br>
result.
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1820.php">Glendenning, Lisa: "Re: [OMPI devel] One-sided operations with Portals"</a>
<li><strong>Previous message:</strong> <a href="1818.php">Brian Barrett: "[OMPI devel] fake rdma flag again?"</a>
<li><strong>In reply to:</strong> <a href="1815.php">Gleb Natapov: "Re: [OMPI devel] Ob1 segfault"</a>
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
