<?
$subject_val = "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 13:51:37 2015" -->
<!-- isoreceived="20150916175137" -->
<!-- sent="Wed, 16 Sep 2015 17:51:34 +0000" -->
<!-- isosent="20150916175134" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()" -->
<!-- id="ade105af14724268a394dfc9e3cc8419_at_HQMAIL102.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150916174254.GI98529_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-16 13:51:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18053.php">Владимир Трущин: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Previous message:</strong> <a href="18051.php">Nathan Hjelm: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>In reply to:</strong> <a href="18051.php">Nathan Hjelm: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18063.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The bfo was my creation many years ago.  Can we keep it around for a little longer?  If we blow it away, then we should probably clean up all the code I also have in the openib BTL for supporting failover.  There is also some configure code that would have to go as well.
<br>
<p>Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Nathan
</span><br>
<span class="quotelev1">&gt;Hjelm
</span><br>
<span class="quotelev1">&gt;Sent: Wednesday, September 16, 2015 1:43 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;* PGP Signed by an unknown key
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Not sure. I give a +1 for blowing them away. We can bring them back later if
</span><br>
<span class="quotelev1">&gt;needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Wed, Sep 16, 2015 at 01:19:24PM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;    As they don't even compile why are we keeping them around?
</span><br>
<span class="quotelev2">&gt;&gt;      George.
</span><br>
<span class="quotelev2">&gt;&gt;    On Wed, Sep 16, 2015 at 12:05 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      iboffload and bfo are opal ignored by default. Neither exists in the
</span><br>
<span class="quotelev2">&gt;&gt;      release branch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      -Nathan
</span><br>
<span class="quotelev2">&gt;&gt;      On Wed, Sep 16, 2015 at 12:02:29PM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;    While looking into a possible fix for this problem we should also
</span><br>
<span class="quotelev2">&gt;&gt;      cleanup
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;    in the trunk the leftover from the OMPI_FREE_LIST.
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;    $find . -name &quot;*.[ch]&quot; -exec grep -Hn OMPI_FREE_LIST_GET_MT {} +
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;    ./opal/mca/btl/usnic/btl_usnic_compat.h:161:
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;     OMPI_FREE_LIST_GET_MT(list, (item))
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;    ./ompi/mca/pml/bfo/pml_bfo_recvreq.h:89:
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;    OMPI_FREE_LIST_GET_MT(&amp;mca_pml_base_recv_requests, item);
</span><br>
<span class="quotelev2">&gt;&gt;      \
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;    ./ompi/mca/bcol/iboffload/bcol_iboffload_task.h:149:
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;     OMPI_FREE_LIST_GET_MT(&amp;cm-&gt;tasks_free, item);
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;    ./ompi/mca/bcol/iboffload/bcol_iboffload_task.h:206:
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;     OMPI_FREE_LIST_GET_MT(task_list, item);
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;    ./ompi/mca/bcol/iboffload/bcol_iboffload_frag.c:107:
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;     OMPI_FREE_LIST_GET_MT(&amp;device-&gt;frags_free[qp_index], item);
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;    ./ompi/mca/bcol/iboffload/bcol_iboffload_frag.c:146:
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;     OMPI_FREE_LIST_GET_MT(&amp;device-&gt;frags_free[qp_index], item);
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;    ./ompi/mca/bcol/iboffload/bcol_iboffload_frag.c:208:
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;     OMPI_FREE_LIST_GET_MT(&amp;iboffload-&gt;device-
</span><br>
<span class="quotelev2">&gt;&gt;frags_free[qp_index],
</span><br>
<span class="quotelev2">&gt;&gt;      item);
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;    ./ompi/mca/bcol/iboffload/bcol_iboffload_qp_info.c:156:
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;     OMPI_FREE_LIST_GET_MT(&amp;device-&gt;frags_free[qp_index], item);
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;    ./ompi/mca/bcol/iboffload/bcol_iboffload_collfrag.h:130:
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;     OMPI_FREE_LIST_GET_MT(&amp;cm-&gt;collfrags_free, item);
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;    ./ompi/mca/bcol/iboffload/bcol_iboffload_frag.h:115:
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;     OMPI_FREE_LIST_GET_MT(&amp;cm-&gt;ml_frags_free, item);
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;    I wonder how these are even compiling ...
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;      George.
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;    On Wed, Sep 16, 2015 at 11:59 AM, George Bosilca
</span><br>
<span class="quotelev2">&gt;&gt;      &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;    wrote:
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;      Alexey,
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;      This is not necessarily the fix for all cases. Most of the
</span><br>
<span class="quotelev2">&gt;&gt;      internal uses
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;      of the free_list can easily accommodate to the fact that no more
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;      elements are available. Based on your description of the problem
</span><br>
<span class="quotelev2">&gt;&gt;      I would
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;      assume you encounter this problem once the
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;      MCA_PML_OB1_RECV_REQUEST_ALLOC is called. In this particular
</span><br>
<span class="quotelev1">&gt;case
</span><br>
<span class="quotelev2">&gt;&gt;      the
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;      problem is that fact that we call OMPI_FREE_LIST_GET_MT and that
</span><br>
<span class="quotelev2">&gt;&gt;      the
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;      upper level is unable to correctly deal with the case where the
</span><br>
<span class="quotelev2">&gt;&gt;      returned
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;      item is NULL. In this particular case the real fix is to use the
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;      blocking version of the free_list accessor (similar to the case
</span><br>
<span class="quotelev2">&gt;&gt;      for
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;      send) OMPI_FREE_LIST_WAIT_MT.
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;      It is also possible that I misunderstood your problem. IF the
</span><br>
<span class="quotelev2">&gt;&gt;      solution
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;      above doesn't work can you describe exactly where the NULL return
</span><br>
<span class="quotelev2">&gt;&gt;      of the
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;      OMPI_FREE_LIST_GET_MT is creating an issue?
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;      George.
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;      On Wed, Sep 16, 2015 at 9:03 AM, Aleksej Ryzhih
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;      &lt;avryzhikh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        We experimented with MPI+OpenMP hybrid application
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        (MPI_THREAD_MULTIPLE support level)  where several threads
</span><br>
<span class="quotelev2">&gt;&gt;      submits a
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        lot of MPI_Irecv() requests simultaneously and encountered an
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        intermittent bug OMPI_ERR_TEMP_OUT_OF_RESOURCE after
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        MCA_PML_OB1_RECV_REQUEST_ALLOC()  because
</span><br>
<span class="quotelev2">&gt;&gt;      OMPI_FREE_LIST_GET_MT()
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;         returned NULL.  Investigating this bug we found that sometimes
</span><br>
<span class="quotelev2">&gt;&gt;      the
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        thread calling ompi_free_list_grow()  don't have any free items
</span><br>
<span class="quotelev2">&gt;&gt;      in
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        LIFO list at exit because other threads  retrieved  all new
</span><br>
<span class="quotelev2">&gt;&gt;      items at
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        opal_atomic_lifo_pop()
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        So we suggest to change OMPI_FREE_LIST_GET_MT() as below:
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        #define OMPI_FREE_LIST_GET_MT(fl,
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        item)
</span><br>
<span class="quotelev2">&gt;&gt;            \
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        {
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;                                  \
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;                item = (ompi_free_list_item_t*)
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        opal_atomic_lifo_pop(&amp;((fl)-&gt;super));             \
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;                if( OPAL_UNLIKELY(NULL == item) )
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        {                                               \
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;                    if(opal_using_threads())
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        {                                                    \
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;                        int rc;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;                                  \
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        opal_mutex_lock(&amp;((fl)-&gt;fl_lock));
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        \
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        do
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        \
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;                        {
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;                                                      \
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;                            rc = ompi_free_list_grow((fl),
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        (fl)-&gt;fl_num_per_alloc);               \
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;                            if( OPAL_UNLIKELY(rc != OMPI_SUCCESS))
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        break;                         \
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;&gt;        \
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;                            item = (ompi_free_list_item_t*)
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        opal_atomic_lifo_pop(&amp;((fl)-&gt;super)); \
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        \
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;                        } while
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        (!item);
</span><br>
<span class="quotelev2">&gt;&gt;        \
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        opal_mutex_unlock(&amp;((fl)-&gt;fl_lock));
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        \
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;                    } else
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        {
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;                      \
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;                        ompi_free_list_grow((fl),
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        (fl)-&gt;fl_num_per_alloc);                        \
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;                        item = (ompi_free_list_item_t*)
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        opal_atomic_lifo_pop(&amp;((fl)-&gt;super));     \
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;                    } /* opal_using_threads() */
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;                                          \
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;                } /* NULL == item
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        */
</span><br>
<span class="quotelev2">&gt;&gt;      \
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;            }
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        Another workaround is to increase the value of
</span><br>
<span class="quotelev2">&gt;&gt;      pml_ob1_free_list_inc
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        parameter.
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        Regards,
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        Alexey
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;      <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;        <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev1">&gt;mpi.org/community/lists/devel/2015/09/18039.php
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;      &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;      &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;      &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;      &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18046.php">http://www.open-mpi.org/community/lists/devel/2015/09/18046.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;      devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;      devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;      Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18048.php">http://www.open-mpi.org/community/lists/devel/2015/09/18048.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18050.php">http://www.open-mpi.org/community/lists/devel/2015/09/18050.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;* Unknown Key
</span><br>
<span class="quotelev1">&gt;* 0x9AC22B15
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
<li><strong>Next message:</strong> <a href="18053.php">Владимир Трущин: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Previous message:</strong> <a href="18051.php">Nathan Hjelm: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>In reply to:</strong> <a href="18051.php">Nathan Hjelm: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18063.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
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
