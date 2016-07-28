<?
$subject_val = "Re: [OMPI devel] Using opal_convertor_t for In-place send buffers in a BTL component";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  5 22:05:38 2012" -->
<!-- isoreceived="20120406020538" -->
<!-- sent="Thu, 5 Apr 2012 22:05:32 -0400" -->
<!-- isosent="20120406020532" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Using opal_convertor_t for In-place send buffers in a BTL component" -->
<!-- id="687AA61D-D48E-4DD1-A50C-A29BFF86B74F_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F7E392D.7000505_at_mail.huji.ac.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Using opal_convertor_t for In-place send buffers in a BTL component<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-05 22:05:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10837.php">TERRY DONTJE: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>Previous message:</strong> <a href="10835.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>In reply to:</strong> <a href="10834.php">Alex Margolin: "[OMPI devel] Using opal_convertor_t for In-place send buffers in a BTL component"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alex,
<br>
<p>This is indeed quite strange. You're receiving an error about truncated data during a barrier. The MPI_Barrier is the only MPI function that has a synchronization meaning, and does not move data around, so I can hardly see how this can generate a truncation.
<br>
<p>You should put a breakpoint in the function recv_request_pml_complete at line 171 (the only place where we set the truncate error), and try to understand how this happens. If you can send the stack trace we might be able to help a little more.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Apr 5, 2012, at 20:30 , Alex Margolin wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First, I'm glad to say my MOSIX component is working and giving good initial result. Thanks for all your help!
</span><br>
<span class="quotelev1">&gt; I'm not sure how (I know I should fill in some license agreement docs), but I would like to contribute the code to the Open-MPI project.
</span><br>
<span class="quotelev1">&gt; Is there an official code-review process? anything else other then test it on some machines and commit it if/when I get the permissions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Second, I have a question about In-place send buffers. My mca_btl_mosix_prepare_src() currently works like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca_btl_base_descriptor_t*
</span><br>
<span class="quotelev1">&gt; mca_btl_mosix_prepare_src(struct mca_btl_base_module_t* btl,
</span><br>
<span class="quotelev1">&gt;                          struct mca_btl_base_endpoint_t* endpoint,
</span><br>
<span class="quotelev1">&gt;                          struct mca_mpool_base_registration_t* registration,
</span><br>
<span class="quotelev1">&gt;                          struct opal_convertor_t* convertor,
</span><br>
<span class="quotelev1">&gt;                          uint8_t order,
</span><br>
<span class="quotelev1">&gt;                          size_t reserve,
</span><br>
<span class="quotelev1">&gt;                          size_t* size,
</span><br>
<span class="quotelev1">&gt;                          uint32_t flags)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    mca_btl_mosix_frag_t* frag;
</span><br>
<span class="quotelev1">&gt;    struct iovec iov;
</span><br>
<span class="quotelev1">&gt;    uint32_t iov_count = 1;
</span><br>
<span class="quotelev1">&gt;    size_t result;
</span><br>
<span class="quotelev1">&gt;    int rc;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    /* Enforce upper message length limit */
</span><br>
<span class="quotelev1">&gt;    if( OPAL_UNLIKELY((reserve + *size) &gt; btl-&gt;btl_max_send_size) ) {
</span><br>
<span class="quotelev1">&gt;        *size = btl-&gt;btl_max_send_size - reserve;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    /* Fetch a fragment to work on */
</span><br>
<span class="quotelev1">&gt;    if( *size + reserve &lt;= btl-&gt;btl_eager_limit ) {
</span><br>
<span class="quotelev1">&gt;        MCA_BTL_MOSIX_FRAG_ALLOC_EAGER(frag, rc);
</span><br>
<span class="quotelev1">&gt;    } else {
</span><br>
<span class="quotelev1">&gt;        MCA_BTL_MOSIX_FRAG_ALLOC_MAX(frag, rc);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    if( OPAL_UNLIKELY(NULL == frag) ) {
</span><br>
<span class="quotelev1">&gt;        return NULL;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    frag-&gt;segments[0].seg_addr.pval = (void*)(frag + 1);
</span><br>
<span class="quotelev1">&gt;    frag-&gt;segments[0].seg_len = reserve;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    /* Fill it with outgoing data */
</span><br>
<span class="quotelev1">&gt;    iov.iov_len = frag-&gt;size - reserve;
</span><br>
<span class="quotelev1">&gt;    /**************** if( opal_convertor_need_buffers(convertor) ) { ****************/
</span><br>
<span class="quotelev1">&gt;    if( 0 != reserve ) {
</span><br>
<span class="quotelev1">&gt;        /* Use existing buffer at the end of the fragment */
</span><br>
<span class="quotelev1">&gt;        iov.iov_base = (unsigned char*)frag-&gt;segments[0].seg_addr.pval + reserve;
</span><br>
<span class="quotelev1">&gt;        rc = opal_convertor_pack( convertor, &amp;iov, &amp;iov_count, &amp;result );
</span><br>
<span class="quotelev1">&gt;        if( 0 &gt; rc ) {
</span><br>
<span class="quotelev1">&gt;            MCA_BTL_MOSIX_FRAG_RETURN(frag);
</span><br>
<span class="quotelev1">&gt;            return NULL;
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;        frag-&gt;segments[0].seg_len += result;
</span><br>
<span class="quotelev1">&gt;        frag-&gt;base.des_src_cnt = 1;
</span><br>
<span class="quotelev1">&gt;    } else {
</span><br>
<span class="quotelev1">&gt;        iov.iov_base = NULL;
</span><br>
<span class="quotelev1">&gt;        /* Read the iovec for the buffer to be transfered */
</span><br>
<span class="quotelev1">&gt;        rc = opal_convertor_pack( convertor, &amp;iov, &amp;iov_count, &amp;result );
</span><br>
<span class="quotelev1">&gt;        if( rc &lt; 0 ) {
</span><br>
<span class="quotelev1">&gt;            MCA_BTL_MOSIX_FRAG_RETURN(frag);
</span><br>
<span class="quotelev1">&gt;            return NULL;
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;        frag-&gt;segments[1].seg_addr.pval = iov.iov_base;
</span><br>
<span class="quotelev1">&gt;        frag-&gt;segments[1].seg_len = result;
</span><br>
<span class="quotelev1">&gt;        frag-&gt;base.des_src_cnt = 2;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    frag-&gt;base.des_src = frag-&gt;segments;
</span><br>
<span class="quotelev1">&gt;    frag-&gt;base.order = MCA_BTL_NO_ORDER;
</span><br>
<span class="quotelev1">&gt;    frag-&gt;base.des_dst = NULL;
</span><br>
<span class="quotelev1">&gt;    frag-&gt;base.des_dst_cnt = 0;
</span><br>
<span class="quotelev1">&gt;    frag-&gt;base.des_flags = flags;
</span><br>
<span class="quotelev1">&gt;    return &amp;frag-&gt;base;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Notice that the condition line on the convertor I tried to copy from the TCP equivalent is commented out. If I switch the condition I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [singularity:3774] *** An error occurred in MPI_Barrier
</span><br>
<span class="quotelev1">&gt; [singularity:3774] *** reported by process [3220963329,0]
</span><br>
<span class="quotelev1">&gt; [singularity:3774] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [singularity:3774] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; [singularity:3774] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [singularity:3774] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [singularity:03773] 1 more process has sent help message help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt; [singularity:03773] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/benchmarks/simple$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand that at the moment the buffer sent by the user is copied to (void*)(frag+1) even if it would be best for it to be left in its place, with the reserved data at frag-&gt;segments[0] and the user buffer at frag-&gt;segments[1]. Does anyone have an idea as to what would cause that? Maybe a problem on the receiver-side function?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S. I know this problem happens with 8-byte messages but 4-byte pass OK. I don't know if it helps.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10837.php">TERRY DONTJE: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>Previous message:</strong> <a href="10835.php">Benedict Holland: "Re: [OMPI devel] OpenMPI and R"</a>
<li><strong>In reply to:</strong> <a href="10834.php">Alex Margolin: "[OMPI devel] Using opal_convertor_t for In-place send buffers in a BTL component"</a>
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
