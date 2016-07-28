<?
$subject_val = "Re: [OMPI devel] mca_btl_tcp_alloc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  4 11:21:33 2012" -->
<!-- isoreceived="20120404152133" -->
<!-- sent="Wed, 4 Apr 2012 11:21:28 -0400" -->
<!-- isosent="20120404152128" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_btl_tcp_alloc" -->
<!-- id="3C6D6AB7-0CC4-4265-B2B3-3747CF3E2107_at_ornl.gov" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-04 11:21:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10822.php">Jeffrey Squyres: "Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its bridge implementation"</a>
<li><strong>Previous message:</strong> <a href="10820.php">Jeffrey Squyres: "Re: [OMPI devel] mca_btl_tcp_alloc"</a>
<li><strong>In reply to:</strong> <a href="10818.php">Alex Margolin: "[OMPI devel] mca_btl_tcp_alloc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; In mca_btl_tcp_alloc (openmpi-trunk/ompi/mca/btl/tcp/btl_tcp.c:188) the 
</span><br>
<span class="quotelev1">&gt; first segment is initialized to point to &quot;frag + 1&quot;.
</span><br>
<span class="quotelev1">&gt; I don't get it... how/when is this location allocated? Isn't it just 
</span><br>
<span class="quotelev1">&gt; after the mca_btl_tcp_frag_t structure ends?
</span><br>
<p>Alex,
<br>
The frag allocation macros take the fragments from the free lists.
<br>
The free lists are created in function mca_btl_tcp_component_init().
<br>
As you will see there fragment size is mca_btl_tcp_frag_t + some_size.
<br>
frag + 1 , means skip the frag structure and jump to payload.
<br>
<p>Bahazlaha ;-)
<br>
<p>Pasha.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca_btl_base_descriptor_t* mca_btl_tcp_alloc(
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
<span class="quotelev1">&gt; {
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
<span class="quotelev1">&gt;     return (mca_btl_base_descriptor_t*)frag;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10822.php">Jeffrey Squyres: "Re: [OMPI devel] [patch] Bugs in mpi-f90-interfaces.h and its bridge implementation"</a>
<li><strong>Previous message:</strong> <a href="10820.php">Jeffrey Squyres: "Re: [OMPI devel] mca_btl_tcp_alloc"</a>
<li><strong>In reply to:</strong> <a href="10818.php">Alex Margolin: "[OMPI devel] mca_btl_tcp_alloc"</a>
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
