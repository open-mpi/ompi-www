<?
$subject_val = "Re: [OMPI devel] [PATCH] Not optimal SRQ resource allocation";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  6 07:00:06 2009" -->
<!-- isoreceived="20091206120006" -->
<!-- sent="Sun, 06 Dec 2009 13:57:56 +0200" -->
<!-- isosent="20091206115756" -->
<!-- name="Vasily Philipov" -->
<!-- email="vasily_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Not optimal SRQ resource allocation" -->
<!-- id="4B1B9C44.50602_at_dev.mellanox.co.il" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="EBC54B14-FA36-483A-BD31-ACBDE7428BB0_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] Not optimal SRQ resource allocation<br>
<strong>From:</strong> Vasily Philipov (<em>vasily_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-06 06:57:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7189.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] Not optimal SRQ resource allocation"</a>
<li><strong>Previous message:</strong> <a href="7187.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Not optimal SRQ resource allocation"</a>
<li><strong>In reply to:</strong> <a href="7187.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Not optimal SRQ resource allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7189.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] Not optimal SRQ resource allocation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all.
<br>
Jeff - thank you for your comments.
<br>
I answer you below and if you want you can see the changes in the new patch.
<br>
<span class="quotelev1">&gt; SRQ hardware vendors -- please review and reply...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 2, 2009, at 10:20 AM, Vasily Philipov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; diff -r a5938d9dcada ompi/mca/btl/openib/btl_openib.c
</span><br>
<span class="quotelev2">&gt;&gt; --- a/ompi/mca/btl/openib/btl_openib.c	Mon Nov 23 19:00:16 2009 -0800
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/ompi/mca/btl/openib/btl_openib.c	Wed Dec 02 16:24:55 2009 +0200
</span><br>
<span class="quotelev2">&gt;&gt; @@ -214,6 +214,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; static int create_srq(mca_btl_openib_module_t *openib_btl)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     int qp;
</span><br>
<span class="quotelev2">&gt;&gt; +    int32_t rd_num, rd_curr_num; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     /* create the SRQ's */
</span><br>
<span class="quotelev2">&gt;&gt;     for(qp = 0; qp &lt; mca_btl_openib_component.num_qps; qp++) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -242,6 +243,24 @@
</span><br>
<span class="quotelev2">&gt;&gt;                                                ibv_get_device_name(openib_btl-&gt;device-&gt;ib_dev));
</span><br>
<span class="quotelev2">&gt;&gt;                 return OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt;&gt;             }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +            rd_num = mca_btl_openib_component.qp_infos[qp].rd_num;
</span><br>
<span class="quotelev2">&gt;&gt; +            rd_curr_num = openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num = mca_btl_openib_component.qp_infos[qp].u.srq_qp.rd_init;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +            if(true == mca_btl_openib_component.enable_srq_resize) {
</span><br>
<span class="quotelev2">&gt;&gt; +                if(0 == rd_curr_num) {
</span><br>
<span class="quotelev2">&gt;&gt; +                    openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num = 1;
</span><br>
<span class="quotelev2">&gt;&gt; +                }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +                openib_btl-&gt;qps[qp].u.srq_qp.rd_low_local = rd_curr_num - (rd_curr_num &gt;&gt; 2);
</span><br>
<span class="quotelev2">&gt;&gt; +                openib_btl-&gt;qps[qp].u.srq_qp.srq_limit_event_flag = true;
</span><br>
<span class="quotelev2">&gt;&gt; +            } else {
</span><br>
<span class="quotelev2">&gt;&gt; +                openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num = rd_num;
</span><br>
<span class="quotelev2">&gt;&gt; +                openib_btl-&gt;qps[qp].u.srq_qp.rd_low_local = mca_btl_openib_component.qp_infos[qp].rd_low;
</span><br>
<span class="quotelev2">&gt;&gt; +                /* Not used in this case, but we don't need a garbage */
</span><br>
<span class="quotelev2">&gt;&gt; +                mca_btl_openib_component.qp_infos[qp].u.srq_qp.srq_limit = 0;
</span><br>
<span class="quotelev2">&gt;&gt; +                openib_btl-&gt;qps[qp].u.srq_qp.srq_limit_event_flag = false;
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; diff -r a5938d9dcada ompi/mca/btl/openib/btl_openib.h
</span><br>
<span class="quotelev2">&gt;&gt; --- a/ompi/mca/btl/openib/btl_openib.h	Mon Nov 23 19:00:16 2009 -0800
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/ompi/mca/btl/openib/btl_openib.h	Wed Dec 02 16:24:55 2009 +0200
</span><br>
<span class="quotelev2">&gt;&gt; @@ -87,6 +87,12 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; struct mca_btl_openib_srq_qp_info_t {
</span><br>
<span class="quotelev2">&gt;&gt;     int32_t sd_max;
</span><br>
<span class="quotelev2">&gt;&gt; +    /* The init value for rd_curr_num variables of all SRQs */
</span><br>
<span class="quotelev2">&gt;&gt; +    int32_t rd_init;
</span><br>
<span class="quotelev2">&gt;&gt; +    /* The watermark, threshold - if the number of WQEs in SRQ is less then this value =&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +       the SRQ limit event (IBV_EVENT_SRQ_LIMIT_REACHED) will be generated on corresponding SRQ.
</span><br>
<span class="quotelev2">&gt;&gt; +       As result the maximal number of pre-posted WQEs on the SRQ will be increased */
</span><br>
<span class="quotelev2">&gt;&gt; +    int32_t srq_limit;
</span><br>
<span class="quotelev2">&gt;&gt; }; typedef struct mca_btl_openib_srq_qp_info_t mca_btl_openib_srq_qp_info_t;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; struct mca_btl_openib_qp_info_t {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -254,6 +260,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;     ompi_free_list_t recv_user_free;
</span><br>
<span class="quotelev2">&gt;&gt;     /**&lt; frags for coalesced massages */
</span><br>
<span class="quotelev2">&gt;&gt;     ompi_free_list_t send_free_coalesced;
</span><br>
<span class="quotelev2">&gt;&gt; +    /**&lt; Whether we want a dynamically resizing srq, enabled by default */
</span><br>
<span class="quotelev2">&gt;&gt; +    bool enable_srq_resize;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /**&lt; means that the comment refers to the field above.  I think you mean /* or /** here (although we haven't used doxygen for a long, long time).  I see that other fields are incorrectly marked /**&lt;, but please don't propagate the badness. ;-)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Thanks, all /**&lt; &#133; */ comment types were changed to /** &#133; */.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; }; typedef struct mca_btl_openib_component_t mca_btl_openib_component_t;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MODULE_DECLSPEC extern mca_btl_openib_component_t mca_btl_openib_component;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -348,6 +356,16 @@
</span><br>
<span class="quotelev2">&gt;&gt;     int32_t sd_credits;  /* the max number of outstanding sends on a QP when using SRQ */
</span><br>
<span class="quotelev2">&gt;&gt;                          /*  i.e. the number of frags that  can be outstanding (down counter) */
</span><br>
<span class="quotelev2">&gt;&gt;     opal_list_t pending_frags[2];    /**&lt; list of high/low prio frags */
</span><br>
<span class="quotelev2">&gt;&gt; +    /**&lt; The number of max rd that we can post in the current time.
</span><br>
<span class="quotelev2">&gt;&gt; +         The value may be increased in the IBV_EVENT_SRQ_LIMIT_REACHED
</span><br>
<span class="quotelev2">&gt;&gt; +         event handler. The value starts from (rd_num / 4) and increased up to rd_num */
</span><br>
<span class="quotelev2">&gt;&gt; +    int32_t rd_curr_num;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The comment says &quot;max&quot;, but the field name is &quot;curr&quot;[ent]?  Seems a little odd.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Thanks,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The comment was changed to : /** The number of receive buffers that can be post in the current time.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The value may be increased in the IBV_EVENT_SRQ_LIMIT_REACHED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;event handler. The value starts from (rd_num / 4) and increased up to rd_num */
<br>
<p><span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; +    /**&lt; We post additional WQEs only if a number of WQEs (in specific SRQ) is less of this value.
</span><br>
<span class="quotelev2">&gt;&gt; +         The value increased together with rd_curr_num. The value is unique for every SRQ. */
</span><br>
<span class="quotelev2">&gt;&gt; +    int32_t rd_low_local;
</span><br>
<span class="quotelev2">&gt;&gt; +    /**&lt; The flag points if we want to get the 
</span><br>
<span class="quotelev2">&gt;&gt; +         IBV_EVENT_SRQ_LIMIT_REACHED events for dynamically resizing SRQ */
</span><br>
<span class="quotelev2">&gt;&gt; +    bool srq_limit_event_flag;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you explain how this is different than enable_srq_resize?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>The explanation &#150; The enable_srq_resize parameter is parameter that says, if we want(or no) to start 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;with small num of pre-posted receive buffers (rd_curr_num) and to increase this number by needs (the max of this value is rd_num &#150; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the whole size of SRQ). The srq_limit_event_flag says if we want to get limit event from device if the defined srq limit was reached 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(signal to the main thread) &#150; we put off this flag if the rd_curr_num was increased up to rd_num. 
<br>
<p><span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; }; typedef struct mca_btl_openib_module_srq_qp_t mca_btl_openib_module_srq_qp_t;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; struct mca_btl_openib_module_qp_t {
</span><br>
<span class="quotelev2">&gt;&gt; diff -r a5938d9dcada ompi/mca/btl/openib/btl_openib_async.c
</span><br>
<span class="quotelev2">&gt;&gt; --- a/ompi/mca/btl/openib/btl_openib_async.c	Mon Nov 23 19:00:16 2009 -0800
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/ompi/mca/btl/openib/btl_openib_async.c	Wed Dec 02 16:24:55 2009 +0200
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1,5 +1,5 @@
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt; - * Copyright (c) 2008 Mellanox Technologies. All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2008-2009 Mellanox Technologies. All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2007-2009 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2006-2007 Voltaire All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt; @@ -226,10 +226,51 @@
</span><br>
<span class="quotelev2">&gt;&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +/* The main idea of resizing SRQ algorithm - 
</span><br>
<span class="quotelev2">&gt;&gt; +   We create a SRQ with size = rd_num, but for efficient usage of resources
</span><br>
<span class="quotelev2">&gt;&gt; +   the number of WQEs that we post = rd_curr_num &lt; rd_num and this value is
</span><br>
<span class="quotelev2">&gt;&gt; +   increased (by needs) in IBV_EVENT_SRQ_LIMIT_REACHED event handler (i.e. in this function),
</span><br>
<span class="quotelev2">&gt;&gt; +   the event will thrown by device if number of WQEs in SRQ will be less than srq_limit */
</span><br>
<span class="quotelev2">&gt;&gt; +static int btl_openib_async_srq_limit_event(struct ibv_srq* srq, 
</span><br>
<span class="quotelev2">&gt;&gt; +                                              mca_btl_openib_module_t *openib_btl)
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +    int qp;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    for(qp = 0; qp &lt; mca_btl_openib_component.num_qps; qp++) {
</span><br>
<span class="quotelev2">&gt;&gt; +        if (!BTL_OPENIB_QP_TYPE_PP(qp)) {
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it not PP, or is it SRQ?  What if it's XRC -- is that ok?  Or is this check a meaningless optimization -- the qp.u.srq_sp.srq is either going to == srq or not?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Yes, we support this feature for XRC_SRQs too.
<br>
<p><span class="quotelev2">&gt;&gt; +            if(openib_btl-&gt;qps[qp].u.srq_qp.srq == srq) {
</span><br>
<span class="quotelev2">&gt;&gt; +                break;
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    if(qp &gt;= mca_btl_openib_component.num_qps) {
</span><br>
<span class="quotelev2">&gt;&gt; +        BTL_ERROR((&quot;The srq doesn't found on %s.&quot;, ibv_get_device_name(openib_btl-&gt;device-&gt;ib_dev)));
</span><br>
<span class="quotelev2">&gt;&gt; +        return OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please use orte_show_help().
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Thanks, fixed - see in the patch.
<br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* dynamically re-size the SRQ to be larger */
</span><br>
<span class="quotelev2">&gt;&gt; +    openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num &lt;&lt;= 1;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    if(openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num &gt;= mca_btl_openib_component.qp_infos[qp].rd_num) {
</span><br>
<span class="quotelev2">&gt;&gt; +        openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num = mca_btl_openib_component.qp_infos[qp].rd_num;
</span><br>
<span class="quotelev2">&gt;&gt; +        openib_btl-&gt;qps[qp].u.srq_qp.rd_low_local = mca_btl_openib_component.qp_infos[qp].rd_low;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        openib_btl-&gt;qps[qp].u.srq_qp.srq_limit_event_flag = false;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    openib_btl-&gt;qps[qp].u.srq_qp.rd_low_local &lt;&lt;= 1;
</span><br>
<span class="quotelev2">&gt;&gt; +    openib_btl-&gt;qps[qp].u.srq_qp.srq_limit_event_flag = true;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; /* Function handle async device events */
</span><br>
<span class="quotelev2">&gt;&gt; static int btl_openib_async_deviceh(struct mca_btl_openib_async_poll *devices_poll, int index)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; -    int j;
</span><br>
<span class="quotelev2">&gt;&gt; +    int j, btl_index = 0;
</span><br>
<span class="quotelev2">&gt;&gt;     mca_btl_openib_device_t *device = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;     struct ibv_async_event event;
</span><br>
<span class="quotelev2">&gt;&gt;     bool xrc_event = false;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -240,6 +281,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;         if (mca_btl_openib_component.openib_btls[j]-&gt;device-&gt;ib_dev_context-&gt;async_fd ==
</span><br>
<span class="quotelev2">&gt;&gt;                 devices_poll-&gt;async_pollfd[index].fd ) {
</span><br>
<span class="quotelev2">&gt;&gt;             device = mca_btl_openib_component.openib_btls[j]-&gt;device;
</span><br>
<span class="quotelev2">&gt;&gt; +            btl_index = j;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;             break;
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a check for if the device/btl_index is not found?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
The code in line 291 (the line number in the version with this patch) 
<br>
already check this case.
<br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; @@ -306,7 +349,15 @@
</span><br>
<span class="quotelev2">&gt;&gt; #if HAVE_DECL_IBV_EVENT_CLIENT_REREGISTER
</span><br>
<span class="quotelev2">&gt;&gt;             case IBV_EVENT_CLIENT_REREGISTER:
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; +                break;
</span><br>
<span class="quotelev2">&gt;&gt; +            /* The event is signaled when number of prepost receive WQEs is going
</span><br>
<span class="quotelev2">&gt;&gt; +                                            under predefined threshold - srq_limit */
</span><br>
<span class="quotelev2">&gt;&gt;             case IBV_EVENT_SRQ_LIMIT_REACHED:
</span><br>
<span class="quotelev2">&gt;&gt; +                if(OMPI_SUCCESS != btl_openib_async_srq_limit_event(event.element.srq, 
</span><br>
<span class="quotelev2">&gt;&gt; +                                     mca_btl_openib_component.openib_btls[btl_index])) {
</span><br>
<span class="quotelev2">&gt;&gt; +                    return OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt;&gt; +                }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;                 break;
</span><br>
<span class="quotelev2">&gt;&gt;             default:
</span><br>
<span class="quotelev2">&gt;&gt;                 orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;of unknown event&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; diff -r a5938d9dcada ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev2">&gt;&gt; --- a/ompi/mca/btl/openib/btl_openib_component.c	Mon Nov 23 19:00:16 2009 -0800
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/ompi/mca/btl/openib/btl_openib_component.c	Wed Dec 02 16:24:55 2009 +0200
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1361,8 +1361,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;                         true, rd_win, rd_num - rd_low);
</span><br>
<span class="quotelev2">&gt;&gt;             }
</span><br>
<span class="quotelev2">&gt;&gt;         } else {
</span><br>
<span class="quotelev2">&gt;&gt; -            int32_t sd_max;
</span><br>
<span class="quotelev2">&gt;&gt; -            if (count &lt; 3 || count &gt; 5) {
</span><br>
<span class="quotelev2">&gt;&gt; +            int32_t sd_max, rd_init, srq_limit;
</span><br>
<span class="quotelev2">&gt;&gt; +            if (count &lt; 3 || count &gt; 7) {
</span><br>
<span class="quotelev2">&gt;&gt;                 orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                                &quot;invalid srq specification&quot;, true,
</span><br>
<span class="quotelev2">&gt;&gt;                                orte_process_info.nodename, queues[qp]);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1376,15 +1376,47 @@
</span><br>
<span class="quotelev2">&gt;&gt;             /* by default set rd_low to be 3/4 of rd_num */
</span><br>
<span class="quotelev2">&gt;&gt;             rd_low = atoi_param(P(3), rd_num - (rd_num / 4));
</span><br>
<span class="quotelev2">&gt;&gt;             sd_max = atoi_param(P(4), rd_low / 4);
</span><br>
<span class="quotelev2">&gt;&gt; -            BTL_VERBOSE((&quot;srq: rd_num is %d rd_low is %d sd_max is %d&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                         rd_num, rd_low, sd_max));
</span><br>
<span class="quotelev2">&gt;&gt; +            /* rd_init is initial value for rd_curr_num of all SRQs, 1/4 of rd_num by default */
</span><br>
<span class="quotelev2">&gt;&gt; +            rd_init = atoi_param(P(5), rd_num / 4);
</span><br>
<span class="quotelev2">&gt;&gt; +            /* by default set srq_limit to be 3/16 of rd_init (it's 1/4 of rd_low_local,
</span><br>
<span class="quotelev2">&gt;&gt; +               the value of rd_low_local we calculate in create_srq function) */
</span><br>
<span class="quotelev2">&gt;&gt; +            srq_limit = atoi_param(P(6), (rd_init - (rd_init / 4)) / 4);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +            /* If we set srq_limit less or greater than rd_init
</span><br>
<span class="quotelev2">&gt;&gt; +               (init value for rd_curr_num) =&gt; we receive the IBV_EVENT_SRQ_LIMIT_REACHED
</span><br>
<span class="quotelev2">&gt;&gt; +               event immediately and the value of rd_curr_num will be increased */
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +            /* If we set srq_limit to zero, but size of SRQ greater than 1 and
</span><br>
<span class="quotelev2">&gt;&gt; +               it is not a user request (param number 6 in --mca btl_openib_receive_queues) =&gt; set it to be 1 */
</span><br>
<span class="quotelev2">&gt;&gt; +            if((0 == srq_limit) &amp;&amp; (1 &lt; rd_num) &amp;&amp; (0 != P(6))) {
</span><br>
<span class="quotelev2">&gt;&gt; +                srq_limit = 1;
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +            BTL_VERBOSE((&quot;srq: rd_num is %d rd_low is %d sd_max is %d rd_max is %d srq_limit is %d&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                         rd_num, rd_low, sd_max, rd_init, srq_limit));
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             /* Calculate the smallest freelist size that can be allowed */
</span><br>
<span class="quotelev2">&gt;&gt;             if (rd_num &gt; min_freelist_size) {
</span><br>
<span class="quotelev2">&gt;&gt;                 min_freelist_size = rd_num;
</span><br>
<span class="quotelev2">&gt;&gt;             }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +            if (rd_num &lt; rd_init) {
</span><br>
<span class="quotelev2">&gt;&gt; +                orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;rd_num must be &gt;= rd_init&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                        true, orte_process_info.nodename, queues[qp]);
</span><br>
<span class="quotelev2">&gt;&gt; +                ret = OMPI_ERR_BAD_PARAM;
</span><br>
<span class="quotelev2">&gt;&gt; +                goto error;
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +            if (rd_num &lt; srq_limit) {
</span><br>
<span class="quotelev2">&gt;&gt; +                orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;srq_limit must be &gt; rd_num&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                        true, orte_process_info.nodename, queues[qp]);
</span><br>
<span class="quotelev2">&gt;&gt; +                ret = OMPI_ERR_BAD_PARAM;
</span><br>
<span class="quotelev2">&gt;&gt; +                goto error;
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;             mca_btl_openib_component.qp_infos[qp].u.srq_qp.sd_max = sd_max;
</span><br>
<span class="quotelev2">&gt;&gt; +            mca_btl_openib_component.qp_infos[qp].u.srq_qp.rd_init = rd_init;
</span><br>
<span class="quotelev2">&gt;&gt; +            mca_btl_openib_component.qp_infos[qp].u.srq_qp.srq_limit = srq_limit;
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         if (rd_num &lt;= rd_low) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -3185,19 +3217,19 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int mca_btl_openib_post_srr(mca_btl_openib_module_t* openib_btl, const int qp)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; -    int rd_low = mca_btl_openib_component.qp_infos[qp].rd_low;
</span><br>
<span class="quotelev2">&gt;&gt; -    int rd_num = mca_btl_openib_component.qp_infos[qp].rd_num;
</span><br>
<span class="quotelev2">&gt;&gt; +    int rd_low_local = openib_btl-&gt;qps[qp].u.srq_qp.rd_low_local;
</span><br>
<span class="quotelev2">&gt;&gt; +    int rd_curr_num = openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num;
</span><br>
<span class="quotelev2">&gt;&gt;     int num_post, i, rc;
</span><br>
<span class="quotelev2">&gt;&gt;     struct ibv_recv_wr *bad_wr, *wr_list = NULL, *wr = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     assert(!BTL_OPENIB_QP_TYPE_PP(qp));
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     OPAL_THREAD_LOCK(&amp;openib_btl-&gt;ib_lock);
</span><br>
<span class="quotelev2">&gt;&gt; -    if(openib_btl-&gt;qps[qp].u.srq_qp.rd_posted &gt; rd_low) {
</span><br>
<span class="quotelev2">&gt;&gt; +    if(openib_btl-&gt;qps[qp].u.srq_qp.rd_posted &gt; rd_low_local) {
</span><br>
<span class="quotelev2">&gt;&gt;         OPAL_THREAD_UNLOCK(&amp;openib_btl-&gt;ib_lock);
</span><br>
<span class="quotelev2">&gt;&gt;         return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; -    num_post = rd_num - openib_btl-&gt;qps[qp].u.srq_qp.rd_posted;
</span><br>
<span class="quotelev2">&gt;&gt; +    num_post = rd_curr_num - openib_btl-&gt;qps[qp].u.srq_qp.rd_posted;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     for(i = 0; i &lt; num_post; i++) {
</span><br>
<span class="quotelev2">&gt;&gt;         ompi_free_list_item_t* item;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -3214,7 +3246,26 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     rc = ibv_post_srq_recv(openib_btl-&gt;qps[qp].u.srq_qp.srq, wr_list, &amp;bad_wr);
</span><br>
<span class="quotelev2">&gt;&gt;     if(OPAL_LIKELY(0 == rc)) {
</span><br>
<span class="quotelev2">&gt;&gt; +        struct ibv_srq_attr srq_attr;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;         OPAL_THREAD_ADD32(&amp;openib_btl-&gt;qps[qp].u.srq_qp.rd_posted, num_post);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        if(true == openib_btl-&gt;qps[qp].u.srq_qp.srq_limit_event_flag) {
</span><br>
<span class="quotelev2">&gt;&gt; +            srq_attr.max_wr = openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num;
</span><br>
<span class="quotelev2">&gt;&gt; +            srq_attr.max_sge = 1;
</span><br>
<span class="quotelev2">&gt;&gt; +            srq_attr.srq_limit = mca_btl_openib_component.qp_infos[qp].u.srq_qp.srq_limit;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +            openib_btl-&gt;qps[qp].u.srq_qp.srq_limit_event_flag = false;
</span><br>
<span class="quotelev2">&gt;&gt; +            if(ibv_modify_srq(openib_btl-&gt;qps[qp].u.srq_qp.srq, &amp;srq_attr, IBV_SRQ_LIMIT)) {
</span><br>
<span class="quotelev2">&gt;&gt; +                BTL_ERROR((&quot;Failed to request limit event for srq on  %s.  &quot;
</span><br>
<span class="quotelev2">&gt;&gt; +                   &quot;Fatal error, stoping asynch event thread&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                   ibv_get_device_name(openib_btl-&gt;device-&gt;ib_dev)));
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +                OPAL_THREAD_UNLOCK(&amp;openib_btl-&gt;ib_lock);
</span><br>
<span class="quotelev2">&gt;&gt; +                return OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When is this code activated?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't get all the context from the patch, but it looks like when the limit event comes in, you simply set new values and then twonk a flag to true indicating that at some point later, the code above is triggered and sees that the flag is true.  It then does the actual resizing of the srq.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that accurate?  If so, why not resize at the time of the limit event -- are there restrictions on what you can do inside an event handler, or some other restriction(s) that must be obeyed?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Explanation: - In order to prevent lock/unlock operation in the critical 
<br>
path we prefer only put-on the srq_limit_event_flag in asynchronous thread,
<br>
because in this way we post receive buffers in the main thread only and 
<br>
only after posting we set (if srq_limit_event_flag is true)
<br>
the limit for IBV_EVENT_SRQ_LIMIT_REACHED event.
<br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;         OPAL_THREAD_UNLOCK(&amp;openib_btl-&gt;ib_lock);
</span><br>
<span class="quotelev2">&gt;&gt;         return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; diff -r a5938d9dcada ompi/mca/btl/openib/btl_openib_mca.c
</span><br>
<span class="quotelev2">&gt;&gt; --- a/ompi/mca/btl/openib/btl_openib_mca.c	Mon Nov 23 19:00:16 2009 -0800
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/ompi/mca/btl/openib/btl_openib_mca.c	Wed Dec 02 16:24:55 2009 +0200
</span><br>
<span class="quotelev2">&gt;&gt; @@ -10,7 +10,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt;&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; - * Copyright (c) 2006-2008 Mellanox Technologies. All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2006-2009 Mellanox Technologies. All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2006-2007 Los Alamos National Security, LLC.  All rights
</span><br>
<span class="quotelev2">&gt;&gt;  *                         reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2006-2007 Voltaire All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; @@ -163,6 +163,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;                   1, &amp;ival, 0));
</span><br>
<span class="quotelev2">&gt;&gt;     mca_btl_openib_component.warn_nonexistent_if = (0 != ival);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +    CHECK(reg_int(&quot;enable_srq_resize&quot;, NULL,
</span><br>
<span class="quotelev2">&gt;&gt; +                  &quot;Enable/Disable on demand SRQ resize. &quot;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Minor quibble on the wording: &quot;Enable/disable on-demand SRQ resizing.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; +                  &quot;(0 = without resizing, nonzero = with resizing)&quot;, 1, &amp;ival, 0));
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;(0 = no SRQ resizing, nonzero = SRQ resizing)&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; +    mca_btl_openib_component.enable_srq_resize = (0 != ival);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;     if (OMPI_HAVE_IBV_FORK_INIT) {
</span><br>
<span class="quotelev2">&gt;&gt;         ival2 = -1;
</span><br>
<span class="quotelev2">&gt;&gt;     } else {
</span><br>
<span class="quotelev2">&gt;&gt; diff -r a5938d9dcada ompi/mca/btl/openib/help-mpi-btl-openib.txt
</span><br>
<span class="quotelev2">&gt;&gt; --- a/ompi/mca/btl/openib/help-mpi-btl-openib.txt	Mon Nov 23 19:00:16 2009 -0800
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/ompi/mca/btl/openib/help-mpi-btl-openib.txt	Wed Dec 02 16:24:55 2009 +0200
</span><br>
<span class="quotelev2">&gt;&gt; @@ -11,7 +11,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; # Copyright (c) 2004-2006 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt;&gt; #                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; # Copyright (c) 2006-2009 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; -# Copyright (c) 2007-2008 Mellanox Technologies. All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; +# Copyright (c) 2007-2009 Mellanox Technologies. All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; # Copyright (c) 2009      Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; # $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt; # 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -414,6 +414,24 @@
</span><br>
<span class="quotelev2">&gt;&gt;   Local host: %s
</span><br>
<span class="quotelev2">&gt;&gt;   Bad queue specification: %s
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; +[rd_num must be &gt;= rd_init]
</span><br>
<span class="quotelev2">&gt;&gt; +WARNING: The number of buffers for a queue pair specified via the
</span><br>
<span class="quotelev2">&gt;&gt; +btl_openib_receive_queues MCA parameter (parametr #2) must be
</span><br>
<span class="quotelev2">&gt;&gt; +greater or equal to the init srq size (parametr #5).
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Misspelled &quot;parameter&quot; twice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;init srq size&quot; -&gt; &quot;initial SRQ size&quot;.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Thanks, fixed.
<br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; +The OpenFabrics (openib) BTL will therefore be deactivated for this run.
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +  Local host: %s
</span><br>
<span class="quotelev2">&gt;&gt; +  Bad queue specification: %s
</span><br>
<span class="quotelev2">&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt; +[srq_limit must be &gt; rd_num]
</span><br>
<span class="quotelev2">&gt;&gt; +WARNING: The number of buffers for a queue pair specified via the
</span><br>
<span class="quotelev2">&gt;&gt; +btl_openib_receive_queues MCA parameter (parametr #2) must be greater than the limit
</span><br>
<span class="quotelev2">&gt;&gt; +buffer count (parametr #6).  The OpenFabrics (openib) BTL will therefore
</span><br>
<span class="quotelev2">&gt;&gt; +be deactivated for this run.
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +  Local host: %s
</span><br>
<span class="quotelev2">&gt;&gt; +  Bad queue specification: %s
</span><br>
<span class="quotelev2">&gt;&gt; +#
</span><br>
<span class="quotelev2">&gt;&gt; [biggest qp size is too small]
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: The largest queue pair buffer size specified in the
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_receive_queues MCA parameter is smaller than the maximum
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe that there are show_help messages that detail the receive_queues parameter.  It looks like you changed the value sequence for the srq parameters in receive_queues -- these help messages, at a minimum, will need to be updated.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Yes, of cause &#150; see in the patch.
<br>
<p><span class="quotelev1">&gt; It looks like you did this in the code above, but I'll ask just to be sure: users who are currently setting btl_openib_receive_queues with srq values right now will not be incompatible with this new stuff, right?  I.e., the new receive_queues SRQ sub-params are optional, right?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Yes, sure &#150; the parameters are optional
<br>
<p>P.S. the suporting for this feature is ON by default, i.e. if user not 
<br>
used the &quot;--mca enable_srq_resize&quot; =&gt; we enable this feature with 
<br>
automatically parameters calculation.
<br>
<p>Thank you for your time.
<br>
<p><p>
<p>
diff -r a5938d9dcada ompi/mca/btl/openib/btl_openib.c
<br>
--- a/ompi/mca/btl/openib/btl_openib.c	Mon Nov 23 19:00:16 2009 -0800
<br>
+++ b/ompi/mca/btl/openib/btl_openib.c	Sun Dec 06 13:41:29 2009 +0200
<br>
@@ -214,6 +214,7 @@
<br>
&nbsp;static int create_srq(mca_btl_openib_module_t *openib_btl)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int qp;
<br>
+    int32_t rd_num, rd_curr_num; 
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* create the SRQ's */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(qp = 0; qp &lt; mca_btl_openib_component.num_qps; qp++) {
<br>
@@ -242,6 +243,24 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibv_get_device_name(openib_btl-&gt;device-&gt;ib_dev));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
+
<br>
+            rd_num = mca_btl_openib_component.qp_infos[qp].rd_num;
<br>
+            rd_curr_num = openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num = mca_btl_openib_component.qp_infos[qp].u.srq_qp.rd_init;
<br>
+
<br>
+            if(true == mca_btl_openib_component.enable_srq_resize) {
<br>
+                if(0 == rd_curr_num) {
<br>
+                    openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num = 1;
<br>
+                }
<br>
+
<br>
+                openib_btl-&gt;qps[qp].u.srq_qp.rd_low_local = rd_curr_num - (rd_curr_num &gt;&gt; 2);
<br>
+                openib_btl-&gt;qps[qp].u.srq_qp.srq_limit_event_flag = true;
<br>
+            } else {
<br>
+                openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num = rd_num;
<br>
+                openib_btl-&gt;qps[qp].u.srq_qp.rd_low_local = mca_btl_openib_component.qp_infos[qp].rd_low;
<br>
+                /* Not used in this case, but we don't need a garbage */
<br>
+                mca_btl_openib_component.qp_infos[qp].u.srq_qp.srq_limit = 0;
<br>
+                openib_btl-&gt;qps[qp].u.srq_qp.srq_limit_event_flag = false;
<br>
+            }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
diff -r a5938d9dcada ompi/mca/btl/openib/btl_openib.h
<br>
--- a/ompi/mca/btl/openib/btl_openib.h	Mon Nov 23 19:00:16 2009 -0800
<br>
+++ b/ompi/mca/btl/openib/btl_openib.h	Sun Dec 06 13:41:29 2009 +0200
<br>
@@ -87,6 +87,12 @@
<br>
&nbsp;
<br>
&nbsp;struct mca_btl_openib_srq_qp_info_t {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int32_t sd_max;
<br>
+    /* The init value for rd_curr_num variables of all SRQs */
<br>
+    int32_t rd_init;
<br>
+    /* The watermark, threshold - if the number of WQEs in SRQ is less then this value =&gt;
<br>
+       the SRQ limit event (IBV_EVENT_SRQ_LIMIT_REACHED) will be generated on corresponding SRQ.
<br>
+       As result the maximal number of pre-posted WQEs on the SRQ will be increased */
<br>
+    int32_t srq_limit;
<br>
&nbsp;}; typedef struct mca_btl_openib_srq_qp_info_t mca_btl_openib_srq_qp_info_t;
<br>
&nbsp;
<br>
&nbsp;struct mca_btl_openib_qp_info_t {
<br>
@@ -254,6 +260,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_free_list_t recv_user_free;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/**&lt; frags for coalesced massages */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_free_list_t send_free_coalesced;
<br>
+    /** Whether we want a dynamically resizing srq, enabled by default */
<br>
+    bool enable_srq_resize;
<br>
&nbsp;}; typedef struct mca_btl_openib_component_t mca_btl_openib_component_t;
<br>
&nbsp;
<br>
&nbsp;OMPI_MODULE_DECLSPEC extern mca_btl_openib_component_t mca_btl_openib_component;
<br>
@@ -348,6 +356,16 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int32_t sd_credits;  /* the max number of outstanding sends on a QP when using SRQ */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*  i.e. the number of frags that  can be outstanding (down counter) */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_t pending_frags[2];    /**&lt; list of high/low prio frags */
<br>
+    /** The number of receive buffers that can be post in the current time.
<br>
+        The value may be increased in the IBV_EVENT_SRQ_LIMIT_REACHED
<br>
+        event handler. The value starts from (rd_num / 4) and increased up to rd_num */
<br>
+    int32_t rd_curr_num;
<br>
+    /** We post additional WQEs only if a number of WQEs (in specific SRQ) is less of this value.
<br>
+         The value increased together with rd_curr_num. The value is unique for every SRQ. */
<br>
+    int32_t rd_low_local;
<br>
+    /** The flag points if we want to get the 
<br>
+         IBV_EVENT_SRQ_LIMIT_REACHED events for dynamically resizing SRQ */
<br>
+    bool srq_limit_event_flag;
<br>
&nbsp;}; typedef struct mca_btl_openib_module_srq_qp_t mca_btl_openib_module_srq_qp_t;
<br>
&nbsp;
<br>
&nbsp;struct mca_btl_openib_module_qp_t {
<br>
diff -r a5938d9dcada ompi/mca/btl/openib/btl_openib_async.c
<br>
--- a/ompi/mca/btl/openib/btl_openib_async.c	Mon Nov 23 19:00:16 2009 -0800
<br>
+++ b/ompi/mca/btl/openib/btl_openib_async.c	Sun Dec 06 13:41:29 2009 +0200
<br>
@@ -1,5 +1,5 @@
<br>
&nbsp;/*
<br>
- * Copyright (c) 2008 Mellanox Technologies. All rights reserved.
<br>
+ * Copyright (c) 2008-2009 Mellanox Technologies. All rights reserved.
<br>
&nbsp;&nbsp;* Copyright (c) 2007-2009 Cisco Systems, Inc.  All rights reserved.
<br>
&nbsp;&nbsp;* Copyright (c) 2006-2007 Voltaire All rights reserved.
<br>
&nbsp;&nbsp;* $COPYRIGHT$
<br>
@@ -226,10 +226,53 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
&nbsp;}
<br>
&nbsp;
<br>
+/* The main idea of resizing SRQ algorithm - 
<br>
+   We create a SRQ with size = rd_num, but for efficient usage of resources
<br>
+   the number of WQEs that we post = rd_curr_num &lt; rd_num and this value is
<br>
+   increased (by needs) in IBV_EVENT_SRQ_LIMIT_REACHED event handler (i.e. in this function),
<br>
+   the event will thrown by device if number of WQEs in SRQ will be less than srq_limit */
<br>
+static int btl_openib_async_srq_limit_event(struct ibv_srq* srq, 
<br>
+                                              mca_btl_openib_module_t *openib_btl)
<br>
+{
<br>
+    int qp;
<br>
+
<br>
+    for(qp = 0; qp &lt; mca_btl_openib_component.num_qps; qp++) {
<br>
+        if (!BTL_OPENIB_QP_TYPE_PP(qp)) {
<br>
+            if(openib_btl-&gt;qps[qp].u.srq_qp.srq == srq) {
<br>
+                break;
<br>
+            }
<br>
+        }
<br>
+    }
<br>
+
<br>
+    if(qp &gt;= mca_btl_openib_component.num_qps) {
<br>
+        orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;SRQ doesn't found&quot;,
<br>
+            true,orte_process_info.nodename,
<br>
+            ibv_get_device_name(openib_btl-&gt;device-&gt;ib_dev));
<br>
+        return OMPI_ERROR;
<br>
+    }
<br>
+
<br>
+    /* dynamically re-size the SRQ to be larger */
<br>
+    openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num &lt;&lt;= 1;
<br>
+
<br>
+    if(openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num &gt;= mca_btl_openib_component.qp_infos[qp].rd_num) {
<br>
+        openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num = mca_btl_openib_component.qp_infos[qp].rd_num;
<br>
+        openib_btl-&gt;qps[qp].u.srq_qp.rd_low_local = mca_btl_openib_component.qp_infos[qp].rd_low;
<br>
+
<br>
+        openib_btl-&gt;qps[qp].u.srq_qp.srq_limit_event_flag = false;
<br>
+
<br>
+        return OMPI_SUCCESS;
<br>
+    }
<br>
+
<br>
+    openib_btl-&gt;qps[qp].u.srq_qp.rd_low_local &lt;&lt;= 1;
<br>
+    openib_btl-&gt;qps[qp].u.srq_qp.srq_limit_event_flag = true;
<br>
+
<br>
+    return OMPI_SUCCESS;
<br>
+}
<br>
+
<br>
&nbsp;/* Function handle async device events */
<br>
&nbsp;static int btl_openib_async_deviceh(struct mca_btl_openib_async_poll *devices_poll, int index)
<br>
&nbsp;{
<br>
-    int j;
<br>
+    int j, btl_index = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_device_t *device = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct ibv_async_event event;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool xrc_event = false;
<br>
@@ -240,6 +283,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (mca_btl_openib_component.openib_btls[j]-&gt;device-&gt;ib_dev_context-&gt;async_fd ==
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;devices_poll-&gt;async_pollfd[index].fd ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;device = mca_btl_openib_component.openib_btls[j]-&gt;device;
<br>
+            btl_index = j;
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
@@ -306,7 +351,15 @@
<br>
&nbsp;#if HAVE_DECL_IBV_EVENT_CLIENT_REREGISTER
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case IBV_EVENT_CLIENT_REREGISTER:
<br>
&nbsp;#endif
<br>
+                break;
<br>
+            /* The event is signaled when number of prepost receive WQEs is going
<br>
+                                            under predefined threshold - srq_limit */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case IBV_EVENT_SRQ_LIMIT_REACHED:
<br>
+                if(OMPI_SUCCESS != btl_openib_async_srq_limit_event(event.element.srq, 
<br>
+                                     mca_btl_openib_component.openib_btls[btl_index])) {
<br>
+                    return OMPI_ERROR;
<br>
+                }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;of unknown event&quot;,
<br>
diff -r a5938d9dcada ompi/mca/btl/openib/btl_openib_component.c
<br>
--- a/ompi/mca/btl/openib/btl_openib_component.c	Mon Nov 23 19:00:16 2009 -0800
<br>
+++ b/ompi/mca/btl/openib/btl_openib_component.c	Sun Dec 06 13:41:29 2009 +0200
<br>
@@ -1361,8 +1361,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;true, rd_win, rd_num - rd_low);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
-            int32_t sd_max;
<br>
-            if (count &lt; 3 || count &gt; 5) {
<br>
+            int32_t sd_max, rd_init, srq_limit;
<br>
+            if (count &lt; 3 || count &gt; 7) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;invalid srq specification&quot;, true,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_process_info.nodename, queues[qp]);
<br>
@@ -1376,15 +1376,47 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* by default set rd_low to be 3/4 of rd_num */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rd_low = atoi_param(P(3), rd_num - (rd_num / 4));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sd_max = atoi_param(P(4), rd_low / 4);
<br>
-            BTL_VERBOSE((&quot;srq: rd_num is %d rd_low is %d sd_max is %d&quot;,
<br>
-                         rd_num, rd_low, sd_max));
<br>
+            /* rd_init is initial value for rd_curr_num of all SRQs, 1/4 of rd_num by default */
<br>
+            rd_init = atoi_param(P(5), rd_num / 4);
<br>
+            /* by default set srq_limit to be 3/16 of rd_init (it's 1/4 of rd_low_local,
<br>
+               the value of rd_low_local we calculate in create_srq function) */
<br>
+            srq_limit = atoi_param(P(6), (rd_init - (rd_init / 4)) / 4);
<br>
+
<br>
+            /* If we set srq_limit less or greater than rd_init
<br>
+               (init value for rd_curr_num) =&gt; we receive the IBV_EVENT_SRQ_LIMIT_REACHED
<br>
+               event immediately and the value of rd_curr_num will be increased */
<br>
+
<br>
+            /* If we set srq_limit to zero, but size of SRQ greater than 1 and
<br>
+               it is not a user request (param number 6 in --mca btl_openib_receive_queues) =&gt; set it to be 1 */
<br>
+            if((0 == srq_limit) &amp;&amp; (1 &lt; rd_num) &amp;&amp; (0 != P(6))) {
<br>
+                srq_limit = 1;
<br>
+            }
<br>
+
<br>
+            BTL_VERBOSE((&quot;srq: rd_num is %d rd_low is %d sd_max is %d rd_max is %d srq_limit is %d&quot;,
<br>
+                         rd_num, rd_low, sd_max, rd_init, srq_limit));
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Calculate the smallest freelist size that can be allowed */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rd_num &gt; min_freelist_size) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;min_freelist_size = rd_num;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
+            if (rd_num &lt; rd_init) {
<br>
+                orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;rd_num must be &gt;= rd_init&quot;,
<br>
+                        true, orte_process_info.nodename, queues[qp]);
<br>
+                ret = OMPI_ERR_BAD_PARAM;
<br>
+                goto error;
<br>
+            }
<br>
+
<br>
+            if (rd_num &lt; srq_limit) {
<br>
+                orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;srq_limit must be &gt; rd_num&quot;,
<br>
+                        true, orte_process_info.nodename, queues[qp]);
<br>
+                ret = OMPI_ERR_BAD_PARAM;
<br>
+                goto error;
<br>
+            }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_component.qp_infos[qp].u.srq_qp.sd_max = sd_max;
<br>
+            mca_btl_openib_component.qp_infos[qp].u.srq_qp.rd_init = rd_init;
<br>
+            mca_btl_openib_component.qp_infos[qp].u.srq_qp.srq_limit = srq_limit;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rd_num &lt;= rd_low) {
<br>
@@ -3185,19 +3217,19 @@
<br>
&nbsp;
<br>
&nbsp;int mca_btl_openib_post_srr(mca_btl_openib_module_t* openib_btl, const int qp)
<br>
&nbsp;{
<br>
-    int rd_low = mca_btl_openib_component.qp_infos[qp].rd_low;
<br>
-    int rd_num = mca_btl_openib_component.qp_infos[qp].rd_num;
<br>
+    int rd_low_local = openib_btl-&gt;qps[qp].u.srq_qp.rd_low_local;
<br>
+    int rd_curr_num = openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int num_post, i, rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct ibv_recv_wr *bad_wr, *wr_list = NULL, *wr = NULL;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert(!BTL_OPENIB_QP_TYPE_PP(qp));
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_LOCK(&amp;openib_btl-&gt;ib_lock);
<br>
-    if(openib_btl-&gt;qps[qp].u.srq_qp.rd_posted &gt; rd_low) {
<br>
+    if(openib_btl-&gt;qps[qp].u.srq_qp.rd_posted &gt; rd_low_local) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;openib_btl-&gt;ib_lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-    num_post = rd_num - openib_btl-&gt;qps[qp].u.srq_qp.rd_posted;
<br>
+    num_post = rd_curr_num - openib_btl-&gt;qps[qp].u.srq_qp.rd_posted;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i = 0; i &lt; num_post; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_free_list_item_t* item;
<br>
@@ -3214,7 +3246,26 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = ibv_post_srq_recv(openib_btl-&gt;qps[qp].u.srq_qp.srq, wr_list, &amp;bad_wr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(OPAL_LIKELY(0 == rc)) {
<br>
+        struct ibv_srq_attr srq_attr;
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_ADD32(&amp;openib_btl-&gt;qps[qp].u.srq_qp.rd_posted, num_post);
<br>
+
<br>
+        if(true == openib_btl-&gt;qps[qp].u.srq_qp.srq_limit_event_flag) {
<br>
+            srq_attr.max_wr = openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num;
<br>
+            srq_attr.max_sge = 1;
<br>
+            srq_attr.srq_limit = mca_btl_openib_component.qp_infos[qp].u.srq_qp.srq_limit;
<br>
+
<br>
+            openib_btl-&gt;qps[qp].u.srq_qp.srq_limit_event_flag = false;
<br>
+            if(ibv_modify_srq(openib_btl-&gt;qps[qp].u.srq_qp.srq, &amp;srq_attr, IBV_SRQ_LIMIT)) {
<br>
+                BTL_ERROR((&quot;Failed to request limit event for srq on  %s.  &quot;
<br>
+                   &quot;Fatal error, stoping asynch event thread&quot;,
<br>
+                   ibv_get_device_name(openib_btl-&gt;device-&gt;ib_dev)));
<br>
+
<br>
+                OPAL_THREAD_UNLOCK(&amp;openib_btl-&gt;ib_lock);
<br>
+                return OMPI_ERROR;
<br>
+            }
<br>
+        }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;openib_btl-&gt;ib_lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
diff -r a5938d9dcada ompi/mca/btl/openib/btl_openib_mca.c
<br>
--- a/ompi/mca/btl/openib/btl_openib_mca.c	Mon Nov 23 19:00:16 2009 -0800
<br>
+++ b/ompi/mca/btl/openib/btl_openib_mca.c	Sun Dec 06 13:41:29 2009 +0200
<br>
@@ -10,7 +10,7 @@
<br>
&nbsp;&nbsp;* Copyright (c) 2004-2005 The Regents of the University of California.
<br>
&nbsp;&nbsp;*                         All rights reserved.
<br>
&nbsp;&nbsp;* Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
<br>
- * Copyright (c) 2006-2008 Mellanox Technologies. All rights reserved.
<br>
+ * Copyright (c) 2006-2009 Mellanox Technologies. All rights reserved.
<br>
&nbsp;&nbsp;* Copyright (c) 2006-2007 Los Alamos National Security, LLC.  All rights
<br>
&nbsp;&nbsp;*                         reserved.
<br>
&nbsp;&nbsp;* Copyright (c) 2006-2007 Voltaire All rights reserved.
<br>
@@ -163,6 +163,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1, &amp;ival, 0));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_component.warn_nonexistent_if = (0 != ival);
<br>
&nbsp;
<br>
+    CHECK(reg_int(&quot;enable_srq_resize&quot;, NULL,
<br>
+                  &quot;Enable/Disable on demand SRQ resize. &quot;
<br>
+                  &quot;(0 = without resizing, nonzero = with resizing)&quot;, 1, &amp;ival, 0));
<br>
+    mca_btl_openib_component.enable_srq_resize = (0 != ival);
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OMPI_HAVE_IBV_FORK_INIT) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ival2 = -1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
diff -r a5938d9dcada ompi/mca/btl/openib/help-mpi-btl-openib.txt
<br>
--- a/ompi/mca/btl/openib/help-mpi-btl-openib.txt	Mon Nov 23 19:00:16 2009 -0800
<br>
+++ b/ompi/mca/btl/openib/help-mpi-btl-openib.txt	Sun Dec 06 13:41:29 2009 +0200
<br>
@@ -11,7 +11,7 @@
<br>
&nbsp;# Copyright (c) 2004-2006 The Regents of the University of California.
<br>
&nbsp;#                         All rights reserved.
<br>
&nbsp;# Copyright (c) 2006-2009 Cisco Systems, Inc.  All rights reserved.
<br>
-# Copyright (c) 2007-2008 Mellanox Technologies. All rights reserved.
<br>
+# Copyright (c) 2007-2009 Mellanox Technologies. All rights reserved.
<br>
&nbsp;# Copyright (c) 2009      Sun Microsystems, Inc.  All rights reserved.
<br>
&nbsp;# $COPYRIGHT$
<br>
&nbsp;# 
<br>
@@ -168,6 +168,13 @@
<br>
&nbsp;You may need to consult with your system administrator to get this
<br>
&nbsp;problem fixed.
<br>
&nbsp;#
<br>
+[SRQ doesn't found]
<br>
+The srq doesn't found.
<br>
+Below is some information about the host that raised the error:
<br>
+
<br>
+    Local host:   %s
<br>
+    Local device: %s
<br>
+#
<br>
&nbsp;[srq rnr retry exceeded]
<br>
&nbsp;The OpenFabrics &quot;receiver not ready&quot; retry count on a shared receive
<br>
&nbsp;queue or XRC receive queue has been exceeded.  This error can occur if
<br>
@@ -386,21 +393,27 @@
<br>
&nbsp;part of the btl_openib_receive_queues MCA parameter.  The OpenFabrics
<br>
&nbsp;(openib) BTL will therefore be deactivated for this run.
<br>
&nbsp;
<br>
-Shared receive queues can take between 2 and 4 parameters:
<br>
+Shared receive queues can take between 2 and 6 parameters:
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;1. Buffer size in bytes (mandatory)
<br>
&nbsp;&nbsp;&nbsp;2. Number of buffers (mandatory)
<br>
&nbsp;&nbsp;&nbsp;3. Low buffer count watermark (optional; defaults to (num_buffers / 2))
<br>
&nbsp;&nbsp;&nbsp;4. Maximum number of outstanding sends a sender can have (optional;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;defaults to (low_watermark / 4)
<br>
+  5. Start value of number of receive buffers that will be pre-posted (optional; defaults to (num_buffers / 4))
<br>
+  6. Event limit buffer count watermark (optional; defaults to (3/16 of start value of buffers number))
<br>
&nbsp;
<br>
-  Example: S,1024,256,128,32
<br>
+  Example: S,1024,256,128,32,32,8
<br>
&nbsp;&nbsp;&nbsp;- 1024 byte buffers
<br>
&nbsp;&nbsp;&nbsp;- 256 buffers to receive incoming MPI messages
<br>
&nbsp;&nbsp;&nbsp;- When the number of available buffers reaches 128, re-post 128 more
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buffers to reach a total of 256
<br>
&nbsp;&nbsp;&nbsp;- A sender will not send to a peer unless it has less than 32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;outstanding sends to that peer.
<br>
+  - 32 receive buffers will be preposted.
<br>
+  - When the number of not used receive buffers will decreased to 8
<br>
+    the IBV_EVENT_SRQ_LIMIT_REACHED event will be signaled and the number
<br>
+    of receive buffers that we can pre-post will be increased.
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;Local host: %s
<br>
&nbsp;&nbsp;&nbsp;Bad queue specification: %s
<br>
@@ -414,6 +427,24 @@
<br>
&nbsp;&nbsp;&nbsp;Local host: %s
<br>
&nbsp;&nbsp;&nbsp;Bad queue specification: %s
<br>
&nbsp;#
<br>
+[rd_num must be &gt;= rd_init]
<br>
+WARNING: The number of buffers for a queue pair specified via the
<br>
+btl_openib_receive_queues MCA parameter (parameter #2) must be
<br>
+greater or equal to the initial SRQ size (parameter #5).
<br>
+The OpenFabrics (openib) BTL will therefore be deactivated for this run.
<br>
+
<br>
+  Local host: %s
<br>
+  Bad queue specification: %s
<br>
+#
<br>
+[srq_limit must be &gt; rd_num]
<br>
+WARNING: The number of buffers for a queue pair specified via the
<br>
+btl_openib_receive_queues MCA parameter (parameter #2) must be greater than the limit
<br>
+buffer count (parameter #6).  The OpenFabrics (openib) BTL will therefore
<br>
+be deactivated for this run.
<br>
+
<br>
+  Local host: %s
<br>
+  Bad queue specification: %s
<br>
+#
<br>
&nbsp;[biggest qp size is too small]
<br>
&nbsp;WARNING: The largest queue pair buffer size specified in the
<br>
&nbsp;btl_openib_receive_queues MCA parameter is smaller than the maximum
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7189.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] Not optimal SRQ resource allocation"</a>
<li><strong>Previous message:</strong> <a href="7187.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Not optimal SRQ resource allocation"</a>
<li><strong>In reply to:</strong> <a href="7187.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Not optimal SRQ resource allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7189.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] Not optimal SRQ resource allocation"</a>
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
