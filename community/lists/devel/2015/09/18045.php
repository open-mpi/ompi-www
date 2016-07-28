<?
$subject_val = "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 12:00:39 2015" -->
<!-- isoreceived="20150916160039" -->
<!-- sent="Wed, 16 Sep 2015 11:59:39 -0400" -->
<!-- isosent="20150916155939" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()" -->
<!-- id="CAMJJpkWmnceHVfKNcmoO6xQKkr87Yk4iDbZFxuwwBjR8UkqyZw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-16 11:59:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18046.php">George Bosilca: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Previous message:</strong> <a href="18044.php">Nathan Hjelm: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<li><strong>In reply to:</strong> <a href="18039.php">&#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#181;&#208;&#185; &#208;&#160;&#209;&#139;&#208;&#182;&#208;&#184;&#209;&#133;: "[OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18046.php">George Bosilca: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Reply:</strong> <a href="18046.php">George Bosilca: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Reply:</strong> <a href="18053.php">Владимир Трущин: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alexey,
<br>
<p>This is not necessarily the fix for all cases. Most of the internal uses of
<br>
the free_list can easily accommodate to the fact that no more elements are
<br>
available. Based on your description of the problem I would assume you
<br>
encounter this problem once the MCA_PML_OB1_RECV_REQUEST_ALLOC is called.
<br>
In this particular case the problem is that fact that we call
<br>
OMPI_FREE_LIST_GET_MT and that the upper level is unable to correctly deal
<br>
with the case where the returned item is NULL. In this particular case the
<br>
real fix is to use the blocking version of the free_list accessor (similar
<br>
to the case for send) OMPI_FREE_LIST_WAIT_MT.
<br>
<p><p>It is also possible that I misunderstood your problem. IF the solution
<br>
above doesn't work can you describe exactly where the NULL return of the
<br>
OMPI_FREE_LIST_GET_MT is creating an issue?
<br>
<p>George.
<br>
<p><p>On Wed, Sep 16, 2015 at 9:03 AM, &#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#181;&#208;&#185; &#208;&#160;&#209;&#139;&#208;&#182;&#208;&#184;&#209;&#133; &lt;avryzhikh_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We experimented with MPI+OpenMP hybrid application (MPI_THREAD_MULTIPLE
</span><br>
<span class="quotelev1">&gt; support level)  where several threads submits a lot of MPI_Irecv() requests
</span><br>
<span class="quotelev1">&gt; simultaneously and encountered an intermittent bug
</span><br>
<span class="quotelev1">&gt; OMPI_ERR_TEMP_OUT_OF_RESOURCE after MCA_PML_OB1_RECV_REQUEST_ALLOC()
</span><br>
<span class="quotelev1">&gt; because  OMPI_FREE_LIST_GET_MT()  returned NULL.  Investigating this bug we
</span><br>
<span class="quotelev1">&gt; found that sometimes the thread calling ompi_free_list_grow()  don&#226;&#128;&#153;t have
</span><br>
<span class="quotelev1">&gt; any free items in LIFO list at exit because other threads  retrieved  all
</span><br>
<span class="quotelev1">&gt; new items at opal_atomic_lifo_pop()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So we suggest to change OMPI_FREE_LIST_GET_MT() as below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define OMPI_FREE_LIST_GET_MT(fl, item)
</span><br>
<span class="quotelev1">&gt;                                \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;                           \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         item = (ompi_free_list_item_t*)
</span><br>
<span class="quotelev1">&gt; opal_atomic_lifo_pop(&amp;((fl)-&gt;super));             \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         if( OPAL_UNLIKELY(NULL == item) )
</span><br>
<span class="quotelev1">&gt; {                                               \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             if(opal_using_threads())
</span><br>
<span class="quotelev1">&gt; {                                                    \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 int rc;
</span><br>
<span class="quotelev1">&gt;                           \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_mutex_lock(&amp;((fl)-&gt;fl_lock));                                        \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; do                                                                        \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 {
</span><br>
<span class="quotelev1">&gt;                                               \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     rc = ompi_free_list_grow((fl),
</span><br>
<span class="quotelev1">&gt; (fl)-&gt;fl_num_per_alloc);               \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     if( OPAL_UNLIKELY(rc != OMPI_SUCCESS))
</span><br>
<span class="quotelev1">&gt; break;                         \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                                                   \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     item = (ompi_free_list_item_t*)
</span><br>
<span class="quotelev1">&gt; opal_atomic_lifo_pop(&amp;((fl)-&gt;super)); \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 } while
</span><br>
<span class="quotelev1">&gt; (!item);                                                          \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_mutex_unlock(&amp;((fl)-&gt;fl_lock));                                      \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             } else
</span><br>
<span class="quotelev1">&gt; {                                                                      \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 ompi_free_list_grow((fl),
</span><br>
<span class="quotelev1">&gt; (fl)-&gt;fl_num_per_alloc);                        \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 item = (ompi_free_list_item_t*)
</span><br>
<span class="quotelev1">&gt; opal_atomic_lifo_pop(&amp;((fl)-&gt;super));     \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             } /* opal_using_threads() */
</span><br>
<span class="quotelev1">&gt;                                   \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         } /* NULL == item
</span><br>
<span class="quotelev1">&gt; */                                                              \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     }
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
<span class="quotelev1">&gt; Another workaround is to increase the value of  pml_ob1_free_list_inc
</span><br>
<span class="quotelev1">&gt; parameter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alexey
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18039.php">http://www.open-mpi.org/community/lists/devel/2015/09/18039.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18045/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18046.php">George Bosilca: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Previous message:</strong> <a href="18044.php">Nathan Hjelm: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<li><strong>In reply to:</strong> <a href="18039.php">&#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#181;&#208;&#185; &#208;&#160;&#209;&#139;&#208;&#182;&#208;&#184;&#209;&#133;: "[OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18046.php">George Bosilca: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Reply:</strong> <a href="18046.php">George Bosilca: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Reply:</strong> <a href="18053.php">Владимир Трущин: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
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
