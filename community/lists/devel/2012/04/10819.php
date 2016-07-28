<?
$subject_val = "Re: [OMPI devel] mca_btl_tcp_alloc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  4 10:18:50 2012" -->
<!-- isoreceived="20120404141850" -->
<!-- sent="Wed, 4 Apr 2012 07:18:43 -0700" -->
<!-- isosent="20120404141843" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_btl_tcp_alloc" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E83D2AB6A_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F7C4B2C.6010300_at_mail.huji.ac.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mca_btl_tcp_alloc<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-04 10:18:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10820.php">Jeffrey Squyres: "Re: [OMPI devel] mca_btl_tcp_alloc"</a>
<li><strong>Previous message:</strong> <a href="10818.php">Alex Margolin: "[OMPI devel] mca_btl_tcp_alloc"</a>
<li><strong>In reply to:</strong> <a href="10818.php">Alex Margolin: "[OMPI devel] mca_btl_tcp_alloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10820.php">Jeffrey Squyres: "Re: [OMPI devel] mca_btl_tcp_alloc"</a>
<li><strong>Reply:</strong> <a href="10820.php">Jeffrey Squyres: "Re: [OMPI devel] mca_btl_tcp_alloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is my explanation.  The call to MCA_BTL_TCP_FRAG_ALLOC_EAGER or MCA_BTL_TCP_FRAG_ALLOC_MAX allocate a chunk of memory that has space for both the fragment as well as any payload.  So, when we do the frag+1, we are setting the pointer in the frag to point where the payload of the message lives.  This payload contains the PML header information and potentially the user's buffer.   So, that allocation is actually returning something like 64K for the eager allocation and 128K for the max allocation.  If you look at btl_tcp_component.c in the function mca_btl_tcp_component_init() you can see where the eager and max free lists are initialized.
<br>
<p>In the case of TCP, there are two segments.  The first segment will contain the PML header information.   If the buffer being sent (or received) is contiguous, then the rest of the space allocated is not used.  Rather, the second segment will point to the user's buffer as there is no need to first copy it into a buffer.  If the buffer being sent (or received) is non-contiguous, then the data is first copied into the allocated space as it needs to be packed.
<br>
<p>Does that make sense?
<br>
<p><p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;On Behalf Of Alex Margolin
</span><br>
<span class="quotelev1">&gt;Sent: Wednesday, April 04, 2012 9:23 AM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI devel] mca_btl_tcp_alloc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;As I'm working out the bugs in my component I used TCP as reference and
</span><br>
<span class="quotelev1">&gt;came across the following:
</span><br>
<span class="quotelev1">&gt;In mca_btl_tcp_alloc (openmpi-trunk/ompi/mca/btl/tcp/btl_tcp.c:188) the
</span><br>
<span class="quotelev1">&gt;first segment is initialized to point to &quot;frag + 1&quot;.
</span><br>
<span class="quotelev1">&gt;I don't get it... how/when is this location allocated? Isn't it just after the
</span><br>
<span class="quotelev1">&gt;mca_btl_tcp_frag_t structure ends?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks,
</span><br>
<span class="quotelev1">&gt;Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;mca_btl_base_descriptor_t* mca_btl_tcp_alloc(
</span><br>
<span class="quotelev1">&gt;     struct mca_btl_base_module_t* btl,
</span><br>
<span class="quotelev1">&gt;     struct mca_btl_base_endpoint_t* endpoint,
</span><br>
<span class="quotelev1">&gt;     uint8_t order,
</span><br>
<span class="quotelev1">&gt;     size_t size,
</span><br>
<span class="quotelev1">&gt;     uint32_t flags)
</span><br>
<span class="quotelev1">&gt;{
</span><br>
<span class="quotelev1">&gt;     mca_btl_tcp_frag_t* frag = NULL;
</span><br>
<span class="quotelev1">&gt;     int rc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if(size &lt;= btl-&gt;btl_eager_limit) {
</span><br>
<span class="quotelev1">&gt;         MCA_BTL_TCP_FRAG_ALLOC_EAGER(frag, rc);
</span><br>
<span class="quotelev1">&gt;     } else if (size &lt;= btl-&gt;btl_max_send_size) {
</span><br>
<span class="quotelev1">&gt;         MCA_BTL_TCP_FRAG_ALLOC_MAX(frag, rc);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     if( OPAL_UNLIKELY(NULL == frag) ) {
</span><br>
<span class="quotelev1">&gt;         return NULL;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     frag-&gt;segments[0].seg_len = size;
</span><br>
<span class="quotelev1">&gt;     frag-&gt;segments[0].seg_addr.pval = frag+1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     frag-&gt;base.des_src = frag-&gt;segments;
</span><br>
<span class="quotelev1">&gt;     frag-&gt;base.des_src_cnt = 1;
</span><br>
<span class="quotelev1">&gt;     frag-&gt;base.des_dst = NULL;
</span><br>
<span class="quotelev1">&gt;     frag-&gt;base.des_dst_cnt = 0;
</span><br>
<span class="quotelev1">&gt;     frag-&gt;base.des_flags = flags;
</span><br>
<span class="quotelev1">&gt;     frag-&gt;base.order = MCA_BTL_NO_ORDER;
</span><br>
<span class="quotelev1">&gt;     frag-&gt;btl = (mca_btl_tcp_module_t*)btl;
</span><br>
<span class="quotelev1">&gt;     return (mca_btl_base_descriptor_t*)frag; }
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10820.php">Jeffrey Squyres: "Re: [OMPI devel] mca_btl_tcp_alloc"</a>
<li><strong>Previous message:</strong> <a href="10818.php">Alex Margolin: "[OMPI devel] mca_btl_tcp_alloc"</a>
<li><strong>In reply to:</strong> <a href="10818.php">Alex Margolin: "[OMPI devel] mca_btl_tcp_alloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10820.php">Jeffrey Squyres: "Re: [OMPI devel] mca_btl_tcp_alloc"</a>
<li><strong>Reply:</strong> <a href="10820.php">Jeffrey Squyres: "Re: [OMPI devel] mca_btl_tcp_alloc"</a>
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
