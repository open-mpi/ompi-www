<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  9 10:04:40 2007" -->
<!-- isoreceived="20070709140440" -->
<!-- sent="Mon, 9 Jul 2007 17:04:34 +0300" -->
<!-- isosent="20070709140434" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Ob1 segfault" -->
<!-- id="20070709140434.GI8064_at_minantech.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="200707081241.58906.tprins_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-07-09 10:04:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1813.php">Don Kerr: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
<li><strong>Previous message:</strong> <a href="1811.php">Jeff Squyres: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
<li><strong>In reply to:</strong> <a href="1806.php">Tim Prins: "Re: [OMPI devel] Ob1 segfault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1814.php">Tim Prins: "Re: [OMPI devel] Ob1 segfault"</a>
<li><strong>Reply:</strong> <a href="1814.php">Tim Prins: "Re: [OMPI devel] Ob1 segfault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, Jul 08, 2007 at 12:41:58PM -0400, Tim Prins wrote:
<br>
<span class="quotelev1">&gt; On Sunday 08 July 2007 08:32:27 am Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Jul 06, 2007 at 06:36:13PM -0400, Tim Prins wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; While looking into another problem I ran into an issue which made ob1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; segfault on me. Using gm, and running the test test_dan1 in the onesided
</span><br>
<span class="quotelev3">&gt; &gt; &gt; test suite, if I limit the gm freelist by too much, I get a segfault.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; That is,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun -np 2 -mca btl gm,self -mca btl_gm_free_list_max 1024 test_dan1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; works fine, but
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun -np 2 -mca btl gm,self -mca btl_gm_free_list_max 512 test_dan1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I cannot, unfortunately, reproduce this with openib BTL.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; segfaults. Here is the relevant output from gdb:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [Switching to Thread 1077541088 (LWP 15600)]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 0x404d81c1 in mca_pml_ob1_send_fin (proc=0x9bd9490, bml_btl=0xd323580,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     hdr_des=0x9e54e78, order=255 '&#239;&#191;&#189;', status=1) at pml_ob1.c:267
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 267         MCA_PML_OB1_DES_ALLOC(bml_btl, fin, order,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; sizeof(mca_pml_ob1_fin_hdr_t));
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; can you send me what's inside bml_btl?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It turns out that the order of arguments to mca_pml_ob1_send_fin was wrong. I 
</span><br>
<span class="quotelev1">&gt; fixed this in r15304. But now we hang instead of segfault, and have both 
</span><br>
<span class="quotelev1">&gt; processes just looping through opal_progress. I really don't what to look 
</span><br>
<span class="quotelev1">&gt; for. Any hints?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Can you look in gdb at mca_pml_ob1.rdma_pending?
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1813.php">Don Kerr: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
<li><strong>Previous message:</strong> <a href="1811.php">Jeff Squyres: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
<li><strong>In reply to:</strong> <a href="1806.php">Tim Prins: "Re: [OMPI devel] Ob1 segfault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1814.php">Tim Prins: "Re: [OMPI devel] Ob1 segfault"</a>
<li><strong>Reply:</strong> <a href="1814.php">Tim Prins: "Re: [OMPI devel] Ob1 segfault"</a>
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
