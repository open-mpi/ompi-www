<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 20:56:51 2009" -->
<!-- isoreceived="20091216015651" -->
<!-- sent="Tue, 15 Dec 2009 20:56:39 -0500" -->
<!-- isosent="20091216015639" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313" -->
<!-- id="2899DAC4-0BB8-43B9-AF94-8A52E924F489_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200912151552.nBFFqBGF026308_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-15 20:56:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7239.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313"</a>
<li><strong>Previous message:</strong> <a href="7237.php">Jeff Squyres: "Re: [OMPI devel] carto vs. hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7239.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313"</a>
<li><strong>Reply:</strong> <a href="7239.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm.  I'm a little disappointed that this was applied without answering my questions first...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2009/12/7187.php">http://www.open-mpi.org/community/lists/devel/2009/12/7187.php</a>
<br>
<p>Can you at least answer my questions after this fact?
<br>
<p><p>On Dec 15, 2009, at 10:52 AM, &lt;vasily_at_[hidden]&gt; &lt;vasily_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: vasily
</span><br>
<span class="quotelev1">&gt; Date: 2009-12-15 10:52:10 EST (Tue, 15 Dec 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 22313
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/22313">https://svn.open-mpi.org/trac/ompi/changeset/22313</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Adding support for on-demand SRQ pre-post (receive wqe allocation)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/btl_openib.c            |    19 +++++++++++                            
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/btl_openib.h            |    18 ++++++++++                             
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/btl_openib_async.c      |    57 ++++++++++++++++++++++++++++++++-      
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/btl_openib_component.c  |    67 +++++++++++++++++++++++++++++++++++----
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/btl_openib_mca.c        |     5 ++                                     
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/help-mpi-btl-openib.txt |    35 +++++++++++++++++++-                   
</span><br>
<span class="quotelev1">&gt;    6 files changed, 189 insertions(+), 12 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib.c      (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib.c      2009-12-15 10:52:10 EST (Tue, 15 Dec 2009)
</span><br>
<span class="quotelev1">&gt; @@ -223,6 +223,7 @@
</span><br>
<span class="quotelev1">&gt;  static int create_srq(mca_btl_openib_module_t *openib_btl)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      int qp;
</span><br>
<span class="quotelev1">&gt; +    int32_t rd_num, rd_curr_num;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      /* create the SRQ's */
</span><br>
<span class="quotelev1">&gt;      for(qp = 0; qp &lt; mca_btl_openib_component.num_qps; qp++) {
</span><br>
<span class="quotelev1">&gt; @@ -251,6 +252,24 @@
</span><br>
<span class="quotelev1">&gt;                                                 ibv_get_device_name(openib_btl-&gt;device-&gt;ib_dev));
</span><br>
<span class="quotelev1">&gt;                  return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            rd_num = mca_btl_openib_component.qp_infos[qp].rd_num;
</span><br>
<span class="quotelev1">&gt; +            rd_curr_num = openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num = mca_btl_openib_component.qp_infos[qp].u.srq_qp.rd_init;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            if(true == mca_btl_openib_component.enable_srq_resize) {
</span><br>
<span class="quotelev1">&gt; +                if(0 == rd_curr_num) {
</span><br>
<span class="quotelev1">&gt; +                    openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num = 1;
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                openib_btl-&gt;qps[qp].u.srq_qp.rd_low_local = rd_curr_num - (rd_curr_num &gt;&gt; 2);
</span><br>
<span class="quotelev1">&gt; +                openib_btl-&gt;qps[qp].u.srq_qp.srq_limit_event_flag = true;
</span><br>
<span class="quotelev1">&gt; +            } else {
</span><br>
<span class="quotelev1">&gt; +                openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num = rd_num;
</span><br>
<span class="quotelev1">&gt; +                openib_btl-&gt;qps[qp].u.srq_qp.rd_low_local = mca_btl_openib_component.qp_infos[qp].rd_low;
</span><br>
<span class="quotelev1">&gt; +                /* Not used in this case, but we don't need a garbage */
</span><br>
<span class="quotelev1">&gt; +                mca_btl_openib_component.qp_infos[qp].u.srq_qp.srq_limit = 0;
</span><br>
<span class="quotelev1">&gt; +                openib_btl-&gt;qps[qp].u.srq_qp.srq_limit_event_flag = false;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib.h      (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib.h      2009-12-15 10:52:10 EST (Tue, 15 Dec 2009)
</span><br>
<span class="quotelev1">&gt; @@ -96,6 +96,12 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  struct mca_btl_openib_srq_qp_info_t {
</span><br>
<span class="quotelev1">&gt;      int32_t sd_max;
</span><br>
<span class="quotelev1">&gt; +    /* The init value for rd_curr_num variables of all SRQs */
</span><br>
<span class="quotelev1">&gt; +    int32_t rd_init;
</span><br>
<span class="quotelev1">&gt; +    /* The watermark, threshold - if the number of WQEs in SRQ is less then this value =&gt;
</span><br>
<span class="quotelev1">&gt; +       the SRQ limit event (IBV_EVENT_SRQ_LIMIT_REACHED) will be generated on corresponding SRQ.
</span><br>
<span class="quotelev1">&gt; +       As result the maximal number of pre-posted WQEs on the SRQ will be increased */
</span><br>
<span class="quotelev1">&gt; +    int32_t srq_limit;
</span><br>
<span class="quotelev1">&gt;  }; typedef struct mca_btl_openib_srq_qp_info_t mca_btl_openib_srq_qp_info_t;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  struct mca_btl_openib_qp_info_t {
</span><br>
<span class="quotelev1">&gt; @@ -263,6 +269,8 @@
</span><br>
<span class="quotelev1">&gt;      ompi_free_list_t send_free_coalesced;
</span><br>
<span class="quotelev1">&gt;      /** Default receive queues */
</span><br>
<span class="quotelev1">&gt;      char* default_recv_qps;
</span><br>
<span class="quotelev1">&gt; +    /** Whether we want a dynamically resizing srq, enabled by default */
</span><br>
<span class="quotelev1">&gt; +    bool enable_srq_resize;
</span><br>
<span class="quotelev1">&gt;  }; typedef struct mca_btl_openib_component_t mca_btl_openib_component_t;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  OMPI_MODULE_DECLSPEC extern mca_btl_openib_component_t mca_btl_openib_component;
</span><br>
<span class="quotelev1">&gt; @@ -363,6 +371,16 @@
</span><br>
<span class="quotelev1">&gt;      int32_t sd_credits;  /* the max number of outstanding sends on a QP when using SRQ */
</span><br>
<span class="quotelev1">&gt;                           /*  i.e. the number of frags that  can be outstanding (down counter) */
</span><br>
<span class="quotelev1">&gt;      opal_list_t pending_frags[2];    /**&lt; list of high/low prio frags */
</span><br>
<span class="quotelev1">&gt; +    /** The number of receive buffers that can be post in the current time.
</span><br>
<span class="quotelev1">&gt; +        The value may be increased in the IBV_EVENT_SRQ_LIMIT_REACHED
</span><br>
<span class="quotelev1">&gt; +        event handler. The value starts from (rd_num / 4) and increased up to rd_num */
</span><br>
<span class="quotelev1">&gt; +    int32_t rd_curr_num;
</span><br>
<span class="quotelev1">&gt; +    /** We post additional WQEs only if a number of WQEs (in specific SRQ) is less of this value.
</span><br>
<span class="quotelev1">&gt; +         The value increased together with rd_curr_num. The value is unique for every SRQ. */
</span><br>
<span class="quotelev1">&gt; +    int32_t rd_low_local;
</span><br>
<span class="quotelev1">&gt; +    /** The flag points if we want to get the
</span><br>
<span class="quotelev1">&gt; +         IBV_EVENT_SRQ_LIMIT_REACHED events for dynamically resizing SRQ */
</span><br>
<span class="quotelev1">&gt; +    bool srq_limit_event_flag;
</span><br>
<span class="quotelev1">&gt;  }; typedef struct mca_btl_openib_module_srq_qp_t mca_btl_openib_module_srq_qp_t;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  struct mca_btl_openib_module_qp_t {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_async.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib_async.c        (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_async.c        2009-12-15 10:52:10 EST (Tue, 15 Dec 2009)
</span><br>
<span class="quotelev1">&gt; @@ -1,5 +1,5 @@
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2008 Mellanox Technologies. All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2008-2009 Mellanox Technologies. All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2007-2009 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2006-2007 Voltaire All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; @@ -226,10 +226,53 @@
</span><br>
<span class="quotelev1">&gt;      return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +/* The main idea of resizing SRQ algorithm -
</span><br>
<span class="quotelev1">&gt; +   We create a SRQ with size = rd_num, but for efficient usage of resources
</span><br>
<span class="quotelev1">&gt; +   the number of WQEs that we post = rd_curr_num &lt; rd_num and this value is
</span><br>
<span class="quotelev1">&gt; +   increased (by needs) in IBV_EVENT_SRQ_LIMIT_REACHED event handler (i.e. in this function),
</span><br>
<span class="quotelev1">&gt; +   the event will thrown by device if number of WQEs in SRQ will be less than srq_limit */
</span><br>
<span class="quotelev1">&gt; +static int btl_openib_async_srq_limit_event(struct ibv_srq* srq,
</span><br>
<span class="quotelev1">&gt; +                                              mca_btl_openib_module_t *openib_btl)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    int qp;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    for(qp = 0; qp &lt; mca_btl_openib_component.num_qps; qp++) {
</span><br>
<span class="quotelev1">&gt; +        if (!BTL_OPENIB_QP_TYPE_PP(qp)) {
</span><br>
<span class="quotelev1">&gt; +            if(openib_btl-&gt;qps[qp].u.srq_qp.srq == srq) {
</span><br>
<span class="quotelev1">&gt; +                break;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if(qp &gt;= mca_btl_openib_component.num_qps) {
</span><br>
<span class="quotelev1">&gt; +        orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;SRQ doesn't found&quot;,
</span><br>
<span class="quotelev1">&gt; +            true,orte_process_info.nodename,
</span><br>
<span class="quotelev1">&gt; +            ibv_get_device_name(openib_btl-&gt;device-&gt;ib_dev));
</span><br>
<span class="quotelev1">&gt; +        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* dynamically re-size the SRQ to be larger */
</span><br>
<span class="quotelev1">&gt; +    openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num &lt;&lt;= 1;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if(openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num &gt;= mca_btl_openib_component.qp_infos[qp].rd_num) {
</span><br>
<span class="quotelev1">&gt; +        openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num = mca_btl_openib_component.qp_infos[qp].rd_num;
</span><br>
<span class="quotelev1">&gt; +        openib_btl-&gt;qps[qp].u.srq_qp.rd_low_local = mca_btl_openib_component.qp_infos[qp].rd_low;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        openib_btl-&gt;qps[qp].u.srq_qp.srq_limit_event_flag = false;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    openib_btl-&gt;qps[qp].u.srq_qp.rd_low_local &lt;&lt;= 1;
</span><br>
<span class="quotelev1">&gt; +    openib_btl-&gt;qps[qp].u.srq_qp.srq_limit_event_flag = true;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  /* Function handle async device events */
</span><br>
<span class="quotelev1">&gt;  static int btl_openib_async_deviceh(struct mca_btl_openib_async_poll *devices_poll, int index)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -    int j;
</span><br>
<span class="quotelev1">&gt; +    int j, btl_index = 0;
</span><br>
<span class="quotelev1">&gt;      mca_btl_openib_device_t *device = NULL;
</span><br>
<span class="quotelev1">&gt;      struct ibv_async_event event;
</span><br>
<span class="quotelev1">&gt;      bool xrc_event = false;
</span><br>
<span class="quotelev1">&gt; @@ -240,6 +283,8 @@
</span><br>
<span class="quotelev1">&gt;          if (mca_btl_openib_component.openib_btls[j]-&gt;device-&gt;ib_dev_context-&gt;async_fd ==
</span><br>
<span class="quotelev1">&gt;                  devices_poll-&gt;async_pollfd[index].fd ) {
</span><br>
<span class="quotelev1">&gt;              device = mca_btl_openib_component.openib_btls[j]-&gt;device;
</span><br>
<span class="quotelev1">&gt; +            btl_index = j;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;              break;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; @@ -306,7 +351,15 @@
</span><br>
<span class="quotelev1">&gt;  #if HAVE_DECL_IBV_EVENT_CLIENT_REREGISTER
</span><br>
<span class="quotelev1">&gt;              case IBV_EVENT_CLIENT_REREGISTER:
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt; +                break;
</span><br>
<span class="quotelev1">&gt; +            /* The event is signaled when number of prepost receive WQEs is going
</span><br>
<span class="quotelev1">&gt; +                                            under predefined threshold - srq_limit */
</span><br>
<span class="quotelev1">&gt;              case IBV_EVENT_SRQ_LIMIT_REACHED:
</span><br>
<span class="quotelev1">&gt; +                if(OMPI_SUCCESS != btl_openib_async_srq_limit_event(event.element.srq,
</span><br>
<span class="quotelev1">&gt; +                                     mca_btl_openib_component.openib_btls[btl_index])) {
</span><br>
<span class="quotelev1">&gt; +                    return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;                  break;
</span><br>
<span class="quotelev1">&gt;              default:
</span><br>
<span class="quotelev1">&gt;                  orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;of unknown event&quot;,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib_component.c    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_component.c    2009-12-15 10:52:10 EST (Tue, 15 Dec 2009)
</span><br>
<span class="quotelev1">&gt; @@ -1376,8 +1376,8 @@
</span><br>
<span class="quotelev1">&gt;                          true, rd_win, rd_num - rd_low);
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;          } else {
</span><br>
<span class="quotelev1">&gt; -            int32_t sd_max;
</span><br>
<span class="quotelev1">&gt; -            if (count &lt; 3 || count &gt; 5) {
</span><br>
<span class="quotelev1">&gt; +            int32_t sd_max, rd_init, srq_limit;
</span><br>
<span class="quotelev1">&gt; +            if (count &lt; 3 || count &gt; 7) {
</span><br>
<span class="quotelev1">&gt;                  orte_show_help(&quot;help-mpi-btl-openib.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                                 &quot;invalid srq specification&quot;, true,
</span><br>
<span class="quotelev1">&gt;                                 orte_process_info.nodename, queues[qp]);
</span><br>
<span class="quotelev1">&gt; @@ -1391,15 +1391,47 @@
</span><br>
<span class="quotelev1">&gt;              /* by default set rd_low to be 3/4 of rd_num */
</span><br>
<span class="quotelev1">&gt;              rd_low = atoi_param(P(3), rd_num - (rd_num / 4));
</span><br>
<span class="quotelev1">&gt;              sd_max = atoi_param(P(4), rd_low / 4);
</span><br>
<span class="quotelev1">&gt; -            BTL_VERBOSE((&quot;srq: rd_num is %d rd_low is %d sd_max is %d&quot;,
</span><br>
<span class="quotelev1">&gt; -                         rd_num, rd_low, sd_max));
</span><br>
<span class="quotelev1">&gt; +            /* rd_init is initial value for rd_curr_num of all SRQs, 1/4 of rd_num by default */
</span><br>
<span class="quotelev1">&gt; +            rd_init = atoi_param(P(5), rd_num / 4);
</span><br>
<span class="quotelev1">&gt; +            /* by default set srq_limit to be 3/16 of rd_init (it's 1/4 of rd_low_local,
</span><br>
<span class="quotelev1">&gt; +               the value of rd_low_local we calculate in create_srq function) */
</span><br>
<span class="quotelev1">&gt; +            srq_limit = atoi_param(P(6), (rd_init - (rd_init / 4)) / 4);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            /* If we set srq_limit less or greater than rd_init
</span><br>
<span class="quotelev1">&gt; +               (init value for rd_curr_num) =&gt; we receive the IBV_EVENT_SRQ_LIMIT_REACHED
</span><br>
<span class="quotelev1">&gt; +               event immediately and the value of rd_curr_num will be increased */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            /* If we set srq_limit to zero, but size of SRQ greater than 1 and
</span><br>
<span class="quotelev1">&gt; +               it is not a user request (param number 6 in --mca btl_openib_receive_queues) =&gt; set it to be 1 */
</span><br>
<span class="quotelev1">&gt; +            if((0 == srq_limit) &amp;&amp; (1 &lt; rd_num) &amp;&amp; (0 != P(6))) {
</span><br>
<span class="quotelev1">&gt; +                srq_limit = 1;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            BTL_VERBOSE((&quot;srq: rd_num is %d rd_low is %d sd_max is %d rd_max is %d srq_limit is %d&quot;,
</span><br>
<span class="quotelev1">&gt; +                         rd_num, rd_low, sd_max, rd_init, srq_limit));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              /* Calculate the smallest freelist size that can be allowed */
</span><br>
<span class="quotelev1">&gt;              if (rd_num &gt; min_freelist_size) {
</span><br>
<span class="quotelev1">&gt;                  min_freelist_size = rd_num;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +            if (rd_num &lt; rd_init) {
</span><br>
<span class="quotelev1">&gt; +                orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;rd_num must be &gt;= rd_init&quot;,
</span><br>
<span class="quotelev1">&gt; +                        true, orte_process_info.nodename, queues[qp]);
</span><br>
<span class="quotelev1">&gt; +                ret = OMPI_ERR_BAD_PARAM;
</span><br>
<span class="quotelev1">&gt; +                goto error;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            if (rd_num &lt; srq_limit) {
</span><br>
<span class="quotelev1">&gt; +                orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;srq_limit must be &gt; rd_num&quot;,
</span><br>
<span class="quotelev1">&gt; +                        true, orte_process_info.nodename, queues[qp]);
</span><br>
<span class="quotelev1">&gt; +                ret = OMPI_ERR_BAD_PARAM;
</span><br>
<span class="quotelev1">&gt; +                goto error;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;              mca_btl_openib_component.qp_infos[qp].u.srq_qp.sd_max = sd_max;
</span><br>
<span class="quotelev1">&gt; +            mca_btl_openib_component.qp_infos[qp].u.srq_qp.rd_init = rd_init;
</span><br>
<span class="quotelev1">&gt; +            mca_btl_openib_component.qp_infos[qp].u.srq_qp.srq_limit = srq_limit;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          if (rd_num &lt;= rd_low) {
</span><br>
<span class="quotelev1">&gt; @@ -3200,19 +3232,19 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  int mca_btl_openib_post_srr(mca_btl_openib_module_t* openib_btl, const int qp)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -    int rd_low = mca_btl_openib_component.qp_infos[qp].rd_low;
</span><br>
<span class="quotelev1">&gt; -    int rd_num = mca_btl_openib_component.qp_infos[qp].rd_num;
</span><br>
<span class="quotelev1">&gt; +    int rd_low_local = openib_btl-&gt;qps[qp].u.srq_qp.rd_low_local;
</span><br>
<span class="quotelev1">&gt; +    int rd_curr_num = openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num;
</span><br>
<span class="quotelev1">&gt;      int num_post, i, rc;
</span><br>
<span class="quotelev1">&gt;      struct ibv_recv_wr *bad_wr, *wr_list = NULL, *wr = NULL;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      assert(!BTL_OPENIB_QP_TYPE_PP(qp));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      OPAL_THREAD_LOCK(&amp;openib_btl-&gt;ib_lock);
</span><br>
<span class="quotelev1">&gt; -    if(openib_btl-&gt;qps[qp].u.srq_qp.rd_posted &gt; rd_low) {
</span><br>
<span class="quotelev1">&gt; +    if(openib_btl-&gt;qps[qp].u.srq_qp.rd_posted &gt; rd_low_local) {
</span><br>
<span class="quotelev1">&gt;          OPAL_THREAD_UNLOCK(&amp;openib_btl-&gt;ib_lock);
</span><br>
<span class="quotelev1">&gt;          return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -    num_post = rd_num - openib_btl-&gt;qps[qp].u.srq_qp.rd_posted;
</span><br>
<span class="quotelev1">&gt; +    num_post = rd_curr_num - openib_btl-&gt;qps[qp].u.srq_qp.rd_posted;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      for(i = 0; i &lt; num_post; i++) {
</span><br>
<span class="quotelev1">&gt;          ompi_free_list_item_t* item;
</span><br>
<span class="quotelev1">&gt; @@ -3229,7 +3261,26 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      rc = ibv_post_srq_recv(openib_btl-&gt;qps[qp].u.srq_qp.srq, wr_list, &amp;bad_wr);
</span><br>
<span class="quotelev1">&gt;      if(OPAL_LIKELY(0 == rc)) {
</span><br>
<span class="quotelev1">&gt; +        struct ibv_srq_attr srq_attr;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;          OPAL_THREAD_ADD32(&amp;openib_btl-&gt;qps[qp].u.srq_qp.rd_posted, num_post);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        if(true == openib_btl-&gt;qps[qp].u.srq_qp.srq_limit_event_flag) {
</span><br>
<span class="quotelev1">&gt; +            srq_attr.max_wr = openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num;
</span><br>
<span class="quotelev1">&gt; +            srq_attr.max_sge = 1;
</span><br>
<span class="quotelev1">&gt; +            srq_attr.srq_limit = mca_btl_openib_component.qp_infos[qp].u.srq_qp.srq_limit;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            openib_btl-&gt;qps[qp].u.srq_qp.srq_limit_event_flag = false;
</span><br>
<span class="quotelev1">&gt; +            if(ibv_modify_srq(openib_btl-&gt;qps[qp].u.srq_qp.srq, &amp;srq_attr, IBV_SRQ_LIMIT)) {
</span><br>
<span class="quotelev1">&gt; +                BTL_ERROR((&quot;Failed to request limit event for srq on  %s.  &quot;
</span><br>
<span class="quotelev1">&gt; +                   &quot;Fatal error, stoping asynch event thread&quot;,
</span><br>
<span class="quotelev1">&gt; +                   ibv_get_device_name(openib_btl-&gt;device-&gt;ib_dev)));
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                OPAL_THREAD_UNLOCK(&amp;openib_btl-&gt;ib_lock);
</span><br>
<span class="quotelev1">&gt; +                return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;          OPAL_THREAD_UNLOCK(&amp;openib_btl-&gt;ib_lock);
</span><br>
<span class="quotelev1">&gt;          return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_mca.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib_mca.c  (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_mca.c  2009-12-15 10:52:10 EST (Tue, 15 Dec 2009)
</span><br>
<span class="quotelev1">&gt; @@ -163,6 +163,11 @@
</span><br>
<span class="quotelev1">&gt;                    1, &amp;ival, 0));
</span><br>
<span class="quotelev1">&gt;      mca_btl_openib_component.warn_nonexistent_if = (0 != ival);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    CHECK(reg_int(&quot;enable_srq_resize&quot;, NULL,
</span><br>
<span class="quotelev1">&gt; +                  &quot;Enable/Disable on demand SRQ resize. &quot;
</span><br>
<span class="quotelev1">&gt; +                  &quot;(0 = without resizing, nonzero = with resizing)&quot;, 1, &amp;ival, 0));
</span><br>
<span class="quotelev1">&gt; +    mca_btl_openib_component.enable_srq_resize = (0 != ival);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      if (OMPI_HAVE_IBV_FORK_INIT) {
</span><br>
<span class="quotelev1">&gt;          ival2 = -1;
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/help-mpi-btl-openib.txt
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/help-mpi-btl-openib.txt   (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/help-mpi-btl-openib.txt   2009-12-15 10:52:10 EST (Tue, 15 Dec 2009)
</span><br>
<span class="quotelev1">&gt; @@ -168,6 +168,13 @@
</span><br>
<span class="quotelev1">&gt;  You may need to consult with your system administrator to get this
</span><br>
<span class="quotelev1">&gt;  problem fixed.
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt; +[SRQ doesn't found]
</span><br>
<span class="quotelev1">&gt; +The srq doesn't found.
</span><br>
<span class="quotelev1">&gt; +Below is some information about the host that raised the error:
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    Local host:   %s
</span><br>
<span class="quotelev1">&gt; +    Local device: %s
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt;  [srq rnr retry exceeded]
</span><br>
<span class="quotelev1">&gt;  The OpenFabrics &quot;receiver not ready&quot; retry count on a shared receive
</span><br>
<span class="quotelev1">&gt;  queue or XRC receive queue has been exceeded.  This error can occur if
</span><br>
<span class="quotelev1">&gt; @@ -386,21 +393,27 @@
</span><br>
<span class="quotelev1">&gt;  part of the btl_openib_receive_queues MCA parameter.  The OpenFabrics
</span><br>
<span class="quotelev1">&gt;  (openib) BTL will therefore be deactivated for this run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Shared receive queues can take between 2 and 4 parameters:
</span><br>
<span class="quotelev1">&gt; +Shared receive queues can take between 2 and 6 parameters:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    1. Buffer size in bytes (mandatory)
</span><br>
<span class="quotelev1">&gt;    2. Number of buffers (mandatory)
</span><br>
<span class="quotelev1">&gt;    3. Low buffer count watermark (optional; defaults to (num_buffers / 2))
</span><br>
<span class="quotelev1">&gt;    4. Maximum number of outstanding sends a sender can have (optional;
</span><br>
<span class="quotelev1">&gt;       defaults to (low_watermark / 4)
</span><br>
<span class="quotelev1">&gt; +  5. Start value of number of receive buffers that will be pre-posted (optional; defaults to (num_buffers / 4))
</span><br>
<span class="quotelev1">&gt; +  6. Event limit buffer count watermark (optional; defaults to (3/16 of start value of buffers number))
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -  Example: S,1024,256,128,32
</span><br>
<span class="quotelev1">&gt; +  Example: S,1024,256,128,32,32,8
</span><br>
<span class="quotelev1">&gt;    - 1024 byte buffers
</span><br>
<span class="quotelev1">&gt;    - 256 buffers to receive incoming MPI messages
</span><br>
<span class="quotelev1">&gt;    - When the number of available buffers reaches 128, re-post 128 more
</span><br>
<span class="quotelev1">&gt;      buffers to reach a total of 256
</span><br>
<span class="quotelev1">&gt;    - A sender will not send to a peer unless it has less than 32
</span><br>
<span class="quotelev1">&gt;      outstanding sends to that peer.
</span><br>
<span class="quotelev1">&gt; +  - 32 receive buffers will be preposted.
</span><br>
<span class="quotelev1">&gt; +  - When the number of not used receive buffers will decreased to 8
</span><br>
<span class="quotelev1">&gt; +    the IBV_EVENT_SRQ_LIMIT_REACHED event will be signaled and the number
</span><br>
<span class="quotelev1">&gt; +    of receive buffers that we can pre-post will be increased.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Local host: %s
</span><br>
<span class="quotelev1">&gt;    Bad queue specification: %s
</span><br>
<span class="quotelev1">&gt; @@ -414,6 +427,24 @@
</span><br>
<span class="quotelev1">&gt;    Local host: %s
</span><br>
<span class="quotelev1">&gt;    Bad queue specification: %s
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt; +[rd_num must be &gt;= rd_init]
</span><br>
<span class="quotelev1">&gt; +WARNING: The number of buffers for a queue pair specified via the
</span><br>
<span class="quotelev1">&gt; +btl_openib_receive_queues MCA parameter (parameter #2) must be
</span><br>
<span class="quotelev1">&gt; +greater or equal to the initial SRQ size (parameter #5).
</span><br>
<span class="quotelev1">&gt; +The OpenFabrics (openib) BTL will therefore be deactivated for this run.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  Local host: %s
</span><br>
<span class="quotelev1">&gt; +  Bad queue specification: %s
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +[srq_limit must be &gt; rd_num]
</span><br>
<span class="quotelev1">&gt; +WARNING: The number of buffers for a queue pair specified via the
</span><br>
<span class="quotelev1">&gt; +btl_openib_receive_queues MCA parameter (parameter #2) must be greater than the limit
</span><br>
<span class="quotelev1">&gt; +buffer count (parameter #6).  The OpenFabrics (openib) BTL will therefore
</span><br>
<span class="quotelev1">&gt; +be deactivated for this run.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  Local host: %s
</span><br>
<span class="quotelev1">&gt; +  Bad queue specification: %s
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt;  [biggest qp size is too small]
</span><br>
<span class="quotelev1">&gt;  WARNING: The largest queue pair buffer size specified in the
</span><br>
<span class="quotelev1">&gt;  btl_openib_receive_queues MCA parameter is smaller than the maximum
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7239.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313"</a>
<li><strong>Previous message:</strong> <a href="7237.php">Jeff Squyres: "Re: [OMPI devel] carto vs. hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7239.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313"</a>
<li><strong>Reply:</strong> <a href="7239.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313"</a>
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
