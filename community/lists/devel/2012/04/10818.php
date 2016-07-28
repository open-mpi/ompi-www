<?
$subject_val = "[OMPI devel] mca_btl_tcp_alloc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  4 09:23:00 2012" -->
<!-- isoreceived="20120404132300" -->
<!-- sent="Wed, 04 Apr 2012 16:22:52 +0300" -->
<!-- isosent="20120404132252" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="[OMPI devel] mca_btl_tcp_alloc" -->
<!-- id="4F7C4B2C.6010300_at_mail.huji.ac.il" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] mca_btl_tcp_alloc<br>
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-04 09:22:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10819.php">Rolf vandeVaart: "Re: [OMPI devel] mca_btl_tcp_alloc"</a>
<li><strong>Previous message:</strong> <a href="10817.php">Josh Hursey: "Re: [OMPI devel] [EXTERNAL] Re: Developers Meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10819.php">Rolf vandeVaart: "Re: [OMPI devel] mca_btl_tcp_alloc"</a>
<li><strong>Reply:</strong> <a href="10819.php">Rolf vandeVaart: "Re: [OMPI devel] mca_btl_tcp_alloc"</a>
<li><strong>Reply:</strong> <a href="10821.php">Shamis, Pavel: "Re: [OMPI devel] mca_btl_tcp_alloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>As I'm working out the bugs in my component I used TCP as reference and 
<br>
came across the following:
<br>
In mca_btl_tcp_alloc (openmpi-trunk/ompi/mca/btl/tcp/btl_tcp.c:188) the 
<br>
first segment is initialized to point to &quot;frag + 1&quot;.
<br>
I don't get it... how/when is this location allocated? Isn't it just 
<br>
after the mca_btl_tcp_frag_t structure ends?
<br>
<p>Thanks,
<br>
Alex
<br>
<p>mca_btl_base_descriptor_t* mca_btl_tcp_alloc(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_module_t* btl,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_endpoint_t* endpoint,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint8_t order,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t size,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint32_t flags)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_tcp_frag_t* frag = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rc;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(size &lt;= btl-&gt;btl_eager_limit) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BTL_TCP_FRAG_ALLOC_EAGER(frag, rc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (size &lt;= btl-&gt;btl_max_send_size) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BTL_TCP_FRAG_ALLOC_MAX(frag, rc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( OPAL_UNLIKELY(NULL == frag) ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;segments[0].seg_len = size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;segments[0].seg_addr.pval = frag+1;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;base.des_src = frag-&gt;segments;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;base.des_src_cnt = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;base.des_dst = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;base.des_dst_cnt = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;base.des_flags = flags;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;base.order = MCA_BTL_NO_ORDER;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;btl = (mca_btl_tcp_module_t*)btl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return (mca_btl_base_descriptor_t*)frag;
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10819.php">Rolf vandeVaart: "Re: [OMPI devel] mca_btl_tcp_alloc"</a>
<li><strong>Previous message:</strong> <a href="10817.php">Josh Hursey: "Re: [OMPI devel] [EXTERNAL] Re: Developers Meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10819.php">Rolf vandeVaart: "Re: [OMPI devel] mca_btl_tcp_alloc"</a>
<li><strong>Reply:</strong> <a href="10819.php">Rolf vandeVaart: "Re: [OMPI devel] mca_btl_tcp_alloc"</a>
<li><strong>Reply:</strong> <a href="10821.php">Shamis, Pavel: "Re: [OMPI devel] mca_btl_tcp_alloc"</a>
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
