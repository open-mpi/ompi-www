<?
$subject_val = "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 15:36:12 2015" -->
<!-- isoreceived="20150917193612" -->
<!-- sent="Thu, 17 Sep 2015 15:36:10 -0400" -->
<!-- isosent="20150917193610" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()" -->
<!-- id="CAMJJpkWA2VdKt+RBaXhT_-HXE_Fc9j3YD9UoxhX=r5X--kbnNg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="a2c7088e0d5308da4a23722eb87cc660_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-09-17 15:36:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18072.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm and orte_max_vm_size"</a>
<li><strong>Previous message:</strong> <a href="18070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Interaction between orterun and user program"</a>
<li><strong>In reply to:</strong> <a href="18061.php">&#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#181;&#208;&#185; &#208;&#160;&#209;&#139;&#208;&#182;&#208;&#184;&#209;&#133;: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18073.php">Алексей Рыжих: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Reply:</strong> <a href="18073.php">Алексей Рыжих: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alexey,
<br>
<p>There is a conceptual different between GET and WAIT: one can return NULL
<br>
while the other cannot. If you want a solution with do {} while, I think
<br>
the best place is specifically in the PML OB1 recv functions (around the
<br>
OMPI_FREE_LIST_GET_MT) and not inside the OMPI_FREE_LIST_GET_MT  macro
<br>
itself.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Thu, Sep 17, 2015 at 2:35 AM, &#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#181;&#208;&#185; &#208;&#160;&#209;&#139;&#208;&#182;&#208;&#184;&#209;&#133; &lt;avryzhikh_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for response.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my opinion our solution with do/while() loop  in  OMPI_FREE_LIST_GET_MT
</span><br>
<span class="quotelev1">&gt; is better for our MPI+OpenMP hybrid application than using
</span><br>
<span class="quotelev1">&gt; OMPI_FREE_LIST_WAIT_MT.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Because in case OMPI_FREE_LIST_WAIT_MT MPI_Irecv()  will be suspended in
</span><br>
<span class="quotelev1">&gt; opal_progress() until one of MPI_Irecv() requests  from other thread is
</span><br>
<span class="quotelev1">&gt; completed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And it is not the case when the list reached   free_list_max_num  limit.
</span><br>
<span class="quotelev1">&gt; The situation is that the threads consumed   all items from free list
</span><br>
<span class="quotelev1">&gt;   before one other thread completed ompi_free_list_grow() and that thread
</span><br>
<span class="quotelev1">&gt; executing  ompi_free_list_grow() got NULL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for my poor English.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alexey.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* devel [mailto:devel-bounces_at_[hidden]] *On Behalf Of *George
</span><br>
<span class="quotelev1">&gt; Bosilca
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, September 16, 2015 10:18 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Developers
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Sep 16, 2015 at 3:11 PM, &#208;&#146;&#208;&#187;&#208;&#176;&#208;&#180;&#208;&#184;&#208;&#188;&#208;&#184;&#209;&#128; &#208;&#162;&#209;&#128;&#209;&#131;&#209;&#137;&#208;&#184;&#208;&#189; &lt;
</span><br>
<span class="quotelev1">&gt; vdtruschin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, &#226;&#128;&#156;We saw the following problem in OMPI_FREE_LIST_GET_MT&#226;&#128;&#166;&#226;&#128;&#157;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's exactly what the WAIT macro is supposed to solve, wait (grow the
</span><br>
<span class="quotelev1">&gt; freelist and call opal_progress) until an item become available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* &#208;&#146;&#208;&#187;&#208;&#176;&#208;&#180;&#208;&#184;&#208;&#188;&#208;&#184;&#209;&#128; &#208;&#162;&#209;&#128;&#209;&#131;&#209;&#137;&#208;&#184;&#208;&#189; [mailto:vdtruschin_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, September 16, 2015 10:09 PM
</span><br>
<span class="quotelev1">&gt; *To:* 'Open MPI Developers'
</span><br>
<span class="quotelev1">&gt; *Subject:* RE: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You are right. The sequence of calls in our test is MPI_Irecv -&gt;
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_irecv -&gt; MCA_PML_OB1_RECV_REQUEST_ALLOC. We will try to use
</span><br>
<span class="quotelev1">&gt; OMPI_FREE_LIST_WAIT_MT.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We saw the following problem in OMPI_FREE_LIST_WAIT_MT. It returned NULL
</span><br>
<span class="quotelev1">&gt; in case when thread A was suspended after the call of  ompi_free_list_grow.
</span><br>
<span class="quotelev1">&gt; At this time others threads took all items from free list at the first call
</span><br>
<span class="quotelev1">&gt; of opal_atomic_lifo_pop in macro. So, when thread A was unsuspended and
</span><br>
<span class="quotelev1">&gt; call the second opal_atomic_lifo_pop in macro - it returned NULL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vladimir.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* devel [mailto:devel-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;devel-bounces_at_[hidden]&gt;] *On Behalf Of *George Bosilca
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, September 16, 2015 7:00 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Developers
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alexey,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is not necessarily the fix for all cases. Most of the internal uses
</span><br>
<span class="quotelev1">&gt; of the free_list can easily accommodate to the fact that no more elements
</span><br>
<span class="quotelev1">&gt; are available. Based on your description of the problem I would assume you
</span><br>
<span class="quotelev1">&gt; encounter this problem once the MCA_PML_OB1_RECV_REQUEST_ALLOC is called.
</span><br>
<span class="quotelev1">&gt; In this particular case the problem is that fact that we call
</span><br>
<span class="quotelev1">&gt; OMPI_FREE_LIST_GET_MT and that the upper level is unable to correctly deal
</span><br>
<span class="quotelev1">&gt; with the case where the returned item is NULL. In this particular case the
</span><br>
<span class="quotelev1">&gt; real fix is to use the blocking version of the free_list accessor (similar
</span><br>
<span class="quotelev1">&gt; to the case for send) OMPI_FREE_LIST_WAIT_MT.
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
<span class="quotelev1">&gt; It is also possible that I misunderstood your problem. IF the solution
</span><br>
<span class="quotelev1">&gt; above doesn't work can you describe exactly where the NULL return of the
</span><br>
<span class="quotelev1">&gt; OMPI_FREE_LIST_GET_MT is creating an issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George.
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
<span class="quotelev1">&gt; On Wed, Sep 16, 2015 at 9:03 AM, &#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#181;&#208;&#185; &#208;&#160;&#209;&#139;&#208;&#182;&#208;&#184;&#209;&#133; &lt;avryzhikh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18054.php">http://www.open-mpi.org/community/lists/devel/2015/09/18054.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18061.php">http://www.open-mpi.org/community/lists/devel/2015/09/18061.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18071/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18072.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm and orte_max_vm_size"</a>
<li><strong>Previous message:</strong> <a href="18070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Interaction between orterun and user program"</a>
<li><strong>In reply to:</strong> <a href="18061.php">&#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#181;&#208;&#185; &#208;&#160;&#209;&#139;&#208;&#182;&#208;&#184;&#209;&#133;: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18073.php">Алексей Рыжих: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Reply:</strong> <a href="18073.php">Алексей Рыжих: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
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
