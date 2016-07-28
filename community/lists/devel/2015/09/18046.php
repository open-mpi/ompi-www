<?
$subject_val = "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 12:02:31 2015" -->
<!-- isoreceived="20150916160231" -->
<!-- sent="Wed, 16 Sep 2015 12:02:29 -0400" -->
<!-- isosent="20150916160229" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()" -->
<!-- id="CAMJJpkXSo+zp2vM946NGUMA42s7dYZtptAs1=NUg6Q_uL4bPBA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkWmnceHVfKNcmoO6xQKkr87Yk4iDbZFxuwwBjR8UkqyZw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-09-16 12:02:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18047.php">Howard Pritchard: "[OMPI devel] edison/hopper jenkins nodes back on line"</a>
<li><strong>Previous message:</strong> <a href="18045.php">George Bosilca: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>In reply to:</strong> <a href="18045.php">George Bosilca: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18048.php">Nathan Hjelm: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Reply:</strong> <a href="18048.php">Nathan Hjelm: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Reply:</strong> <a href="18063.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While looking into a possible fix for this problem we should also cleanup
<br>
in the trunk the leftover from the OMPI_FREE_LIST.
<br>
<p>$find . -name &quot;*.[ch]&quot; -exec grep -Hn OMPI_FREE_LIST_GET_MT {} +
<br>
./opal/mca/btl/usnic/btl_usnic_compat.h:161:    OMPI_FREE_LIST_GET_MT(list,
<br>
(item))
<br>
./ompi/mca/pml/bfo/pml_bfo_recvreq.h:89:
<br>
OMPI_FREE_LIST_GET_MT(&amp;mca_pml_base_recv_requests, item);          \
<br>
./ompi/mca/bcol/iboffload/bcol_iboffload_task.h:149:
<br>
&nbsp;OMPI_FREE_LIST_GET_MT(&amp;cm-&gt;tasks_free, item);
<br>
./ompi/mca/bcol/iboffload/bcol_iboffload_task.h:206:
<br>
&nbsp;OMPI_FREE_LIST_GET_MT(task_list, item);
<br>
./ompi/mca/bcol/iboffload/bcol_iboffload_frag.c:107:
<br>
&nbsp;OMPI_FREE_LIST_GET_MT(&amp;device-&gt;frags_free[qp_index], item);
<br>
./ompi/mca/bcol/iboffload/bcol_iboffload_frag.c:146:
<br>
&nbsp;OMPI_FREE_LIST_GET_MT(&amp;device-&gt;frags_free[qp_index], item);
<br>
./ompi/mca/bcol/iboffload/bcol_iboffload_frag.c:208:
<br>
&nbsp;OMPI_FREE_LIST_GET_MT(&amp;iboffload-&gt;device-&gt;frags_free[qp_index], item);
<br>
./ompi/mca/bcol/iboffload/bcol_iboffload_qp_info.c:156:
<br>
&nbsp;OMPI_FREE_LIST_GET_MT(&amp;device-&gt;frags_free[qp_index], item);
<br>
./ompi/mca/bcol/iboffload/bcol_iboffload_collfrag.h:130:
<br>
&nbsp;OMPI_FREE_LIST_GET_MT(&amp;cm-&gt;collfrags_free, item);
<br>
./ompi/mca/bcol/iboffload/bcol_iboffload_frag.h:115:
<br>
&nbsp;OMPI_FREE_LIST_GET_MT(&amp;cm-&gt;ml_frags_free, item);
<br>
<p>I wonder how these are even compiling ...
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Wed, Sep 16, 2015 at 11:59 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Alexey,
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
<span class="quotelev1">&gt; It is also possible that I misunderstood your problem. IF the solution
</span><br>
<span class="quotelev1">&gt; above doesn't work can you describe exactly where the NULL return of the
</span><br>
<span class="quotelev1">&gt; OMPI_FREE_LIST_GET_MT is creating an issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George.
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
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We experimented with MPI+OpenMP hybrid application (MPI_THREAD_MULTIPLE
</span><br>
<span class="quotelev2">&gt;&gt; support level)  where several threads submits a lot of MPI_Irecv() requests
</span><br>
<span class="quotelev2">&gt;&gt; simultaneously and encountered an intermittent bug
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_ERR_TEMP_OUT_OF_RESOURCE after MCA_PML_OB1_RECV_REQUEST_ALLOC()
</span><br>
<span class="quotelev2">&gt;&gt; because  OMPI_FREE_LIST_GET_MT()  returned NULL.  Investigating this bug we
</span><br>
<span class="quotelev2">&gt;&gt; found that sometimes the thread calling ompi_free_list_grow()  don&#226;&#128;&#153;t have
</span><br>
<span class="quotelev2">&gt;&gt; any free items in LIFO list at exit because other threads  retrieved  all
</span><br>
<span class="quotelev2">&gt;&gt; new items at opal_atomic_lifo_pop()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So we suggest to change OMPI_FREE_LIST_GET_MT() as below:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #define OMPI_FREE_LIST_GET_MT(fl, item)
</span><br>
<span class="quotelev2">&gt;&gt;                                \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     {
</span><br>
<span class="quotelev2">&gt;&gt;                           \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         item = (ompi_free_list_item_t*)
</span><br>
<span class="quotelev2">&gt;&gt; opal_atomic_lifo_pop(&amp;((fl)-&gt;super));             \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         if( OPAL_UNLIKELY(NULL == item) )
</span><br>
<span class="quotelev2">&gt;&gt; {                                               \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             if(opal_using_threads())
</span><br>
<span class="quotelev2">&gt;&gt; {                                                    \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 int rc;
</span><br>
<span class="quotelev2">&gt;&gt;                           \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; opal_mutex_lock(&amp;((fl)-&gt;fl_lock));                                        \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; do                                                                        \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 {
</span><br>
<span class="quotelev2">&gt;&gt;                                               \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     rc = ompi_free_list_grow((fl),
</span><br>
<span class="quotelev2">&gt;&gt; (fl)-&gt;fl_num_per_alloc);               \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     if( OPAL_UNLIKELY(rc != OMPI_SUCCESS))
</span><br>
<span class="quotelev2">&gt;&gt; break;                         \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                                   \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     item = (ompi_free_list_item_t*)
</span><br>
<span class="quotelev2">&gt;&gt; opal_atomic_lifo_pop(&amp;((fl)-&gt;super)); \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 } while
</span><br>
<span class="quotelev2">&gt;&gt; (!item);                                                          \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; opal_mutex_unlock(&amp;((fl)-&gt;fl_lock));                                      \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             } else
</span><br>
<span class="quotelev2">&gt;&gt; {                                                                      \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 ompi_free_list_grow((fl),
</span><br>
<span class="quotelev2">&gt;&gt; (fl)-&gt;fl_num_per_alloc);                        \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 item = (ompi_free_list_item_t*)
</span><br>
<span class="quotelev2">&gt;&gt; opal_atomic_lifo_pop(&amp;((fl)-&gt;super));     \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             } /* opal_using_threads() */
</span><br>
<span class="quotelev2">&gt;&gt;                                   \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         } /* NULL == item
</span><br>
<span class="quotelev2">&gt;&gt; */                                                              \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another workaround is to increase the value of  pml_ob1_free_list_inc
</span><br>
<span class="quotelev2">&gt;&gt; parameter.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Alexey
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18039.php">http://www.open-mpi.org/community/lists/devel/2015/09/18039.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18046/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18047.php">Howard Pritchard: "[OMPI devel] edison/hopper jenkins nodes back on line"</a>
<li><strong>Previous message:</strong> <a href="18045.php">George Bosilca: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>In reply to:</strong> <a href="18045.php">George Bosilca: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18048.php">Nathan Hjelm: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Reply:</strong> <a href="18048.php">Nathan Hjelm: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Reply:</strong> <a href="18063.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
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
