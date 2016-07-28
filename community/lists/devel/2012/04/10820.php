<?
$subject_val = "Re: [OMPI devel] mca_btl_tcp_alloc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  4 10:40:49 2012" -->
<!-- isoreceived="20120404144049" -->
<!-- sent="Wed, 4 Apr 2012 10:40:44 -0400" -->
<!-- isosent="20120404144044" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_btl_tcp_alloc" -->
<!-- id="A223B104-7DC7-4303-B800-96DE70E7367B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F35E83D2AB6A_at_HQMAIL02.nvidia.com" -->
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
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-04 10:40:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10821.php">Shamis, Pavel: "Re: [OMPI devel] mca_btl_tcp_alloc"</a>
<li><strong>Previous message:</strong> <a href="10819.php">Rolf vandeVaart: "Re: [OMPI devel] mca_btl_tcp_alloc"</a>
<li><strong>In reply to:</strong> <a href="10819.php">Rolf vandeVaart: "Re: [OMPI devel] mca_btl_tcp_alloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10821.php">Shamis, Pavel: "Re: [OMPI devel] mca_btl_tcp_alloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1 on Rolf's explanation.
<br>
<p>Additionally, note that you don't have to do it this way.  You can implement yours in whatever style you want; this is just the style we used for the TCP BTL.
<br>
<p><p>On Apr 4, 2012, at 10:18 AM, Rolf vandeVaart wrote:
<br>
<p><span class="quotelev1">&gt; Here is my explanation.  The call to MCA_BTL_TCP_FRAG_ALLOC_EAGER or MCA_BTL_TCP_FRAG_ALLOC_MAX allocate a chunk of memory that has space for both the fragment as well as any payload.  So, when we do the frag+1, we are setting the pointer in the frag to point where the payload of the message lives.  This payload contains the PML header information and potentially the user's buffer.   So, that allocation is actually returning something like 64K for the eager allocation and 128K for the max allocation.  If you look at btl_tcp_component.c in the function mca_btl_tcp_component_init() you can see where the eager and max free lists are initialized.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the case of TCP, there are two segments.  The first segment will contain the PML header information.   If the buffer being sent (or received) is contiguous, then the rest of the space allocated is not used.  Rather, the second segment will point to the user's buffer as there is no need to first copy it into a buffer.  If the buffer being sent (or received) is non-contiguous, then the data is first copied into the allocated space as it needs to be packed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does that make sense?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of Alex Margolin
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, April 04, 2012 9:23 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI devel] mca_btl_tcp_alloc
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As I'm working out the bugs in my component I used TCP as reference and
</span><br>
<span class="quotelev2">&gt;&gt; came across the following:
</span><br>
<span class="quotelev2">&gt;&gt; In mca_btl_tcp_alloc (openmpi-trunk/ompi/mca/btl/tcp/btl_tcp.c:188) the
</span><br>
<span class="quotelev2">&gt;&gt; first segment is initialized to point to &quot;frag + 1&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; I don't get it... how/when is this location allocated? Isn't it just after the
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_tcp_frag_t structure ends?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Alex
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_base_descriptor_t* mca_btl_tcp_alloc(
</span><br>
<span class="quotelev2">&gt;&gt;    struct mca_btl_base_module_t* btl,
</span><br>
<span class="quotelev2">&gt;&gt;    struct mca_btl_base_endpoint_t* endpoint,
</span><br>
<span class="quotelev2">&gt;&gt;    uint8_t order,
</span><br>
<span class="quotelev2">&gt;&gt;    size_t size,
</span><br>
<span class="quotelev2">&gt;&gt;    uint32_t flags)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    mca_btl_tcp_frag_t* frag = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;    int rc;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if(size &lt;= btl-&gt;btl_eager_limit) {
</span><br>
<span class="quotelev2">&gt;&gt;        MCA_BTL_TCP_FRAG_ALLOC_EAGER(frag, rc);
</span><br>
<span class="quotelev2">&gt;&gt;    } else if (size &lt;= btl-&gt;btl_max_send_size) {
</span><br>
<span class="quotelev2">&gt;&gt;        MCA_BTL_TCP_FRAG_ALLOC_MAX(frag, rc);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    if( OPAL_UNLIKELY(NULL == frag) ) {
</span><br>
<span class="quotelev2">&gt;&gt;        return NULL;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    frag-&gt;segments[0].seg_len = size;
</span><br>
<span class="quotelev2">&gt;&gt;    frag-&gt;segments[0].seg_addr.pval = frag+1;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    frag-&gt;base.des_src = frag-&gt;segments;
</span><br>
<span class="quotelev2">&gt;&gt;    frag-&gt;base.des_src_cnt = 1;
</span><br>
<span class="quotelev2">&gt;&gt;    frag-&gt;base.des_dst = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;    frag-&gt;base.des_dst_cnt = 0;
</span><br>
<span class="quotelev2">&gt;&gt;    frag-&gt;base.des_flags = flags;
</span><br>
<span class="quotelev2">&gt;&gt;    frag-&gt;base.order = MCA_BTL_NO_ORDER;
</span><br>
<span class="quotelev2">&gt;&gt;    frag-&gt;btl = (mca_btl_tcp_module_t*)btl;
</span><br>
<span class="quotelev2">&gt;&gt;    return (mca_btl_base_descriptor_t*)frag; }
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10821.php">Shamis, Pavel: "Re: [OMPI devel] mca_btl_tcp_alloc"</a>
<li><strong>Previous message:</strong> <a href="10819.php">Rolf vandeVaart: "Re: [OMPI devel] mca_btl_tcp_alloc"</a>
<li><strong>In reply to:</strong> <a href="10819.php">Rolf vandeVaart: "Re: [OMPI devel] mca_btl_tcp_alloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10821.php">Shamis, Pavel: "Re: [OMPI devel] mca_btl_tcp_alloc"</a>
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
