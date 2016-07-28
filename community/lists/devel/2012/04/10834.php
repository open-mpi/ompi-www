<?
$subject_val = "[OMPI devel] Using opal_convertor_t for In-place send buffers in a BTL component";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  5 20:31:17 2012" -->
<!-- isoreceived="20120406003117" -->
<!-- sent="Fri, 06 Apr 2012 03:30:37 +0300" -->
<!-- isosent="20120406003037" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="[OMPI devel] Using opal_convertor_t for In-place send buffers in a BTL component" -->
<!-- id="4F7E392D.7000505_at_mail.huji.ac.il" -->
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
<strong>Subject:</strong> [OMPI devel] Using opal_convertor_t for In-place send buffers in a BTL component<br>
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-05 20:30:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10835.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>Previous message:</strong> <a href="10833.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10836.php">George Bosilca: "Re: [OMPI devel] Using opal_convertor_t for In-place send buffers in a BTL component"</a>
<li><strong>Reply:</strong> <a href="10836.php">George Bosilca: "Re: [OMPI devel] Using opal_convertor_t for In-place send buffers in a BTL component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>First, I'm glad to say my MOSIX component is working and giving good 
<br>
initial result. Thanks for all your help!
<br>
I'm not sure how (I know I should fill in some license agreement docs), 
<br>
but I would like to contribute the code to the Open-MPI project.
<br>
Is there an official code-review process? anything else other then test 
<br>
it on some machines and commit it if/when I get the permissions?
<br>
<p>Second, I have a question about In-place send buffers. My 
<br>
mca_btl_mosix_prepare_src() currently works like this:
<br>
<p>mca_btl_base_descriptor_t*
<br>
mca_btl_mosix_prepare_src(struct mca_btl_base_module_t* btl,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_endpoint_t* endpoint,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct mca_mpool_base_registration_t* 
<br>
registration,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct opal_convertor_t* convertor,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint8_t order,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t reserve,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t* size,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint32_t flags)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_mosix_frag_t* frag;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct iovec iov;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint32_t iov_count = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t result;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rc;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Enforce upper message length limit */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( OPAL_UNLIKELY((reserve + *size) &gt; btl-&gt;btl_max_send_size) ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*size = btl-&gt;btl_max_send_size - reserve;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Fetch a fragment to work on */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( *size + reserve &lt;= btl-&gt;btl_eager_limit ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BTL_MOSIX_FRAG_ALLOC_EAGER(frag, rc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BTL_MOSIX_FRAG_ALLOC_MAX(frag, rc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( OPAL_UNLIKELY(NULL == frag) ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;segments[0].seg_addr.pval = (void*)(frag + 1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;segments[0].seg_len = reserve;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Fill it with outgoing data */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iov.iov_len = frag-&gt;size - reserve;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/**************** if( opal_convertor_need_buffers(convertor) ) { 
<br>
****************/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( 0 != reserve ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Use existing buffer at the end of the fragment */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iov.iov_base = (unsigned char*)frag-&gt;segments[0].seg_addr.pval 
<br>
+ reserve;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = opal_convertor_pack( convertor, &amp;iov, &amp;iov_count, &amp;result );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( 0 &gt; rc ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BTL_MOSIX_FRAG_RETURN(frag);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;segments[0].seg_len += result;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;base.des_src_cnt = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iov.iov_base = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Read the iovec for the buffer to be transfered */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = opal_convertor_pack( convertor, &amp;iov, &amp;iov_count, &amp;result );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( rc &lt; 0 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BTL_MOSIX_FRAG_RETURN(frag);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;segments[1].seg_addr.pval = iov.iov_base;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;segments[1].seg_len = result;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;base.des_src_cnt = 2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;base.des_src = frag-&gt;segments;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;base.order = MCA_BTL_NO_ORDER;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;base.des_dst = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;base.des_dst_cnt = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;base.des_flags = flags;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return &amp;frag-&gt;base;
<br>
}
<br>
<p>- Notice that the condition line on the convertor I tried to copy from 
<br>
the TCP equivalent is commented out. If I switch the condition I get:
<br>
<p>[singularity:3774] *** An error occurred in MPI_Barrier
<br>
[singularity:3774] *** reported by process [3220963329,0]
<br>
[singularity:3774] *** on communicator MPI_COMM_WORLD
<br>
[singularity:3774] *** MPI_ERR_TRUNCATE: message truncated
<br>
[singularity:3774] *** MPI_ERRORS_ARE_FATAL (processes in this 
<br>
communicator will now abort,
<br>
[singularity:3774] ***    and potentially your MPI job)
<br>
[singularity:03773] 1 more process has sent help message 
<br>
help-mpi-errors.txt / mpi_errors_are_fatal
<br>
[singularity:03773] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to 
<br>
see all help / error messages
<br>
alex_at_singularity:~/huji/benchmarks/simple$
<br>
<p>I understand that at the moment the buffer sent by the user is copied to 
<br>
(void*)(frag+1) even if it would be best for it to be left in its place, 
<br>
with the reserved data at frag-&gt;segments[0] and the user buffer at 
<br>
frag-&gt;segments[1]. Does anyone have an idea as to what would cause that? 
<br>
Maybe a problem on the receiver-side function?
<br>
<p>Thanks,
<br>
Alex
<br>
<p>P.S. I know this problem happens with 8-byte messages but 4-byte pass 
<br>
OK. I don't know if it helps.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10835.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>Previous message:</strong> <a href="10833.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10836.php">George Bosilca: "Re: [OMPI devel] Using opal_convertor_t for In-place send buffers in a BTL component"</a>
<li><strong>Reply:</strong> <a href="10836.php">George Bosilca: "Re: [OMPI devel] Using opal_convertor_t for In-place send buffers in a BTL component"</a>
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
