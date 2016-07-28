<?
$subject_val = "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 11:35:13 2015" -->
<!-- isoreceived="20150916153513" -->
<!-- sent="Wed, 16 Sep 2015 09:35:11 -0600" -->
<!-- isosent="20150916153511" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()" -->
<!-- id="20150916153511.GB98529_at_pn1246003.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1b69bcf3e14811f65642cabb5030db42_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-16 11:35:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18042.php">Nathan Hjelm: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<li><strong>Previous message:</strong> <a href="18040.php">Edgar Gabriel: "[OMPI devel] inter vs. intra communicator problem on master"</a>
<li><strong>In reply to:</strong> <a href="18039.php">&#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#181;&#208;&#185; &#208;&#160;&#209;&#139;&#208;&#182;&#208;&#184;&#209;&#133;: "[OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18045.php">George Bosilca: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The formatting of the code got all messed up. Please send a diff and I
<br>
will take a look. ompi free list no longer exists in master or the next
<br>
release branch but the change may be worthwhile for the opal free list
<br>
code.
<br>
<p>-Nathan
<br>
<p>On Wed, Sep 16, 2015 at 04:03:44PM +0300, &#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#181;&#208;&#185; &#208;&#160;&#209;&#139;&#208;&#182;&#208;&#184;&#209;&#133; wrote:
<br>
<span class="quotelev1">&gt;    Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    We experimented with MPI+OpenMP hybrid application (MPI_THREAD_MULTIPLE
</span><br>
<span class="quotelev1">&gt;    support level)  where several threads submits a lot of MPI_Irecv()
</span><br>
<span class="quotelev1">&gt;    requests simultaneously and encountered an intermittent bug
</span><br>
<span class="quotelev1">&gt;    OMPI_ERR_TEMP_OUT_OF_RESOURCE after MCA_PML_OB1_RECV_REQUEST_ALLOC() 
</span><br>
<span class="quotelev1">&gt;    because  OMPI_FREE_LIST_GET_MT()  returned NULL.  Investigating this bug
</span><br>
<span class="quotelev1">&gt;    we found that sometimes the thread calling ompi_free_list_grow()  don't
</span><br>
<span class="quotelev1">&gt;    have any free items in LIFO list at exit because other threads  retrieved
</span><br>
<span class="quotelev1">&gt;     all new items at opal_atomic_lifo_pop() 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    So we suggest to change OMPI_FREE_LIST_GET_MT() as below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    #define OMPI_FREE_LIST_GET_MT(fl, item)                                
</span><br>
<span class="quotelev1">&gt;                                   \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        {                                                                  
</span><br>
<span class="quotelev1">&gt;                              \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            item = (ompi_free_list_item_t*)
</span><br>
<span class="quotelev1">&gt;    opal_atomic_lifo_pop(&amp;((fl)-&gt;super));             \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            if( OPAL_UNLIKELY(NULL == item) )
</span><br>
<span class="quotelev1">&gt;    {                                               \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                if(opal_using_threads())
</span><br>
<span class="quotelev1">&gt;    {                                                    \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    int rc;                                        
</span><br>
<span class="quotelev1">&gt;                              \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                   
</span><br>
<span class="quotelev1">&gt;    opal_mutex_lock(&amp;((fl)-&gt;fl_lock));                                       
</span><br>
<span class="quotelev1">&gt;    \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                   
</span><br>
<span class="quotelev1">&gt;    do                                                                       
</span><br>
<span class="quotelev1">&gt;    \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    {                          
</span><br>
<span class="quotelev1">&gt;                                                  \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                        rc = ompi_free_list_grow((fl),
</span><br>
<span class="quotelev1">&gt;    (fl)-&gt;fl_num_per_alloc);               \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                        if( OPAL_UNLIKELY(rc != OMPI_SUCCESS))
</span><br>
<span class="quotelev1">&gt;    break;                         \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                           
</span><br>
<span class="quotelev1">&gt;                                                                      \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                        item = (ompi_free_list_item_t*)
</span><br>
<span class="quotelev1">&gt;    opal_atomic_lifo_pop(&amp;((fl)-&gt;super)); \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                                                                             
</span><br>
<span class="quotelev1">&gt;    \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    } while
</span><br>
<span class="quotelev1">&gt;    (!item);                                                          \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                   
</span><br>
<span class="quotelev1">&gt;    opal_mutex_unlock(&amp;((fl)-&gt;fl_lock));                                     
</span><br>
<span class="quotelev1">&gt;    \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                } else
</span><br>
<span class="quotelev1">&gt;    {                                                                      \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    ompi_free_list_grow((fl),
</span><br>
<span class="quotelev1">&gt;    (fl)-&gt;fl_num_per_alloc);                        \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                    item = (ompi_free_list_item_t*)
</span><br>
<span class="quotelev1">&gt;    opal_atomic_lifo_pop(&amp;((fl)-&gt;super));     \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                } /* opal_using_threads() */               
</span><br>
<span class="quotelev1">&gt;                                      \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            } /* NULL == item
</span><br>
<span class="quotelev1">&gt;    */                                                              \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Another workaround is to increase the value of  pml_ob1_free_list_inc
</span><br>
<span class="quotelev1">&gt;    parameter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Alexey
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18039.php">http://www.open-mpi.org/community/lists/devel/2015/09/18039.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18041/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18042.php">Nathan Hjelm: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<li><strong>Previous message:</strong> <a href="18040.php">Edgar Gabriel: "[OMPI devel] inter vs. intra communicator problem on master"</a>
<li><strong>In reply to:</strong> <a href="18039.php">&#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#181;&#208;&#185; &#208;&#160;&#209;&#139;&#208;&#182;&#208;&#184;&#209;&#133;: "[OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18045.php">George Bosilca: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
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
