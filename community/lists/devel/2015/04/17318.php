<?
$subject_val = "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 15:29:04 2015" -->
<!-- isoreceived="20150422192904" -->
<!-- sent="Wed, 22 Apr 2015 13:29:02 -0600" -->
<!-- isosent="20150422192902" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low" -->
<!-- id="20150422192902.GE68930_at_pn1246003.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5537B67D.1070701_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-22 15:29:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17319.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Incorrect timer frequency [w/ patch]"</a>
<li><strong>Previous message:</strong> <a href="17317.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="17305.php">Rapha&#195;&#171;l Fouassier: "[OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17325.php">Tom Wurgler: "[OMPI devel] Compile &quot;remark&quot; for Openmpi 1.8.4"</a>
<li><strong>Reply:</strong> <a href="17325.php">Tom Wurgler: "[OMPI devel] Compile &quot;remark&quot; for Openmpi 1.8.4"</a>
<li><strong>Reply:</strong> <a href="17342.php">Raphaël Fouassier: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
PR <a href="https://github.com/open-mpi/ompi-release/pull/250">https://github.com/open-mpi/ompi-release/pull/250</a>. Rapha&#235;l, can you
<br>
please confirm this fixes your issue.
<br>
<p>-Nathan
<br>
<p>On Wed, Apr 22, 2015 at 04:55:57PM +0200, Rapha&#235;l Fouassier wrote:
<br>
<span class="quotelev1">&gt; We are experiencing a bug in OpenMPI in 1.8.4 which happens also on
</span><br>
<span class="quotelev1">&gt; master: if locked memory limits are too low, a segfault happens
</span><br>
<span class="quotelev1">&gt; in openib/udcm because some memory is not correctly deallocated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To reproduce it, modify /etc/security/limits.conf with:
</span><br>
<span class="quotelev1">&gt; * soft memlock 64
</span><br>
<span class="quotelev1">&gt; * hard memlock 64
</span><br>
<span class="quotelev1">&gt; and launch with mpirun (not in a slurm allocation).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I propose 2 patches for 1.8.4 and master (because of the btl move to
</span><br>
<span class="quotelev1">&gt; opal) which:
</span><br>
<span class="quotelev1">&gt; - free all allocated ressources
</span><br>
<span class="quotelev1">&gt; - print the limits error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; diff --git a/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c b/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c
</span><br>
<span class="quotelev1">&gt; index 19753a9..b222274 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c
</span><br>
<span class="quotelev1">&gt; @@ -5,6 +5,7 @@
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2009      IBM Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2011-2014 Los Alamos National Security, LLC.  All rights
</span><br>
<span class="quotelev1">&gt;   *                         reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2015      Bull SAS. All rights reserved.
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   * 
</span><br>
<span class="quotelev1">&gt; @@ -460,6 +461,8 @@ static int udcm_component_query(mca_btl_openib_module_t *btl,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;          rc = udcm_module_init (m, btl);
</span><br>
<span class="quotelev1">&gt;          if (OMPI_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; +            free(m);
</span><br>
<span class="quotelev1">&gt; +            m = NULL;
</span><br>
<span class="quotelev1">&gt;              break;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; @@ -536,9 +539,19 @@ static int udcm_endpoint_finalize(struct mca_btl_base_endpoint_t *lcl_ep)
</span><br>
<span class="quotelev1">&gt;      return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +static void *udcm_unmonitor(int fd, int flags, void *context)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    volatile int *barrier = (volatile int *)context;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    *barrier = 1;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return NULL;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  static int udcm_module_init (udcm_module_t *m, mca_btl_openib_module_t *btl)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      int rc = OMPI_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt; +    volatile int barrier = 0;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      BTL_VERBOSE((&quot;created cpc module %p for btl %p&quot;,
</span><br>
<span class="quotelev1">&gt;                   (void*)m, (void*)btl));
</span><br>
<span class="quotelev1">&gt; @@ -549,7 +562,7 @@ static int udcm_module_init (udcm_module_t *m, mca_btl_openib_module_t *btl)
</span><br>
<span class="quotelev1">&gt;      m-&gt;cm_channel = ibv_create_comp_channel (btl-&gt;device-&gt;ib_dev_context);
</span><br>
<span class="quotelev1">&gt;      if (NULL == m-&gt;cm_channel) {
</span><br>
<span class="quotelev1">&gt;          BTL_VERBOSE((&quot;error creating ud completion channel&quot;));
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt; +        goto out;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      /* Create completion queues */
</span><br>
<span class="quotelev1">&gt; @@ -558,29 +571,33 @@ static int udcm_module_init (udcm_module_t *m, mca_btl_openib_module_t *btl)
</span><br>
<span class="quotelev1">&gt;                                     m-&gt;cm_channel, 0);
</span><br>
<span class="quotelev1">&gt;      if (NULL == m-&gt;cm_recv_cq) {
</span><br>
<span class="quotelev1">&gt;          BTL_VERBOSE((&quot;error creating ud recv completion queue&quot;));
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt; +        mca_btl_openib_show_init_error(__FILE__, __LINE__, &quot;ibv_create_cq&quot;,
</span><br>
<span class="quotelev1">&gt; +                                       ibv_get_device_name(btl-&gt;device-&gt;ib_dev));
</span><br>
<span class="quotelev1">&gt; +        goto out1;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      m-&gt;cm_send_cq = ibv_create_cq (btl-&gt;device-&gt;ib_dev_context,
</span><br>
<span class="quotelev1">&gt;                                     UDCM_SEND_CQ_SIZE, NULL, NULL, 0);
</span><br>
<span class="quotelev1">&gt;      if (NULL == m-&gt;cm_send_cq) {
</span><br>
<span class="quotelev1">&gt;          BTL_VERBOSE((&quot;error creating ud send completion queue&quot;));
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt; +        mca_btl_openib_show_init_error(__FILE__, __LINE__, &quot;ibv_create_cq&quot;,
</span><br>
<span class="quotelev1">&gt; +                                       ibv_get_device_name(btl-&gt;device-&gt;ib_dev));
</span><br>
<span class="quotelev1">&gt; +        goto out2;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      if (0 != (rc = udcm_module_allocate_buffers (m))) {
</span><br>
<span class="quotelev1">&gt;          BTL_VERBOSE((&quot;error allocating cm buffers&quot;));
</span><br>
<span class="quotelev1">&gt; -        return rc;
</span><br>
<span class="quotelev1">&gt; +        goto out3;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      if (0 != (rc = udcm_module_create_listen_qp (m))) {
</span><br>
<span class="quotelev1">&gt;          BTL_VERBOSE((&quot;error creating UD QP&quot;));
</span><br>
<span class="quotelev1">&gt; -        return rc;
</span><br>
<span class="quotelev1">&gt; +        goto out4;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      if (0 != (rc = udcm_module_post_all_recvs (m))) {
</span><br>
<span class="quotelev1">&gt;          BTL_VERBOSE((&quot;error posting receives&quot;));
</span><br>
<span class="quotelev1">&gt; -        return rc;
</span><br>
<span class="quotelev1">&gt; +        goto out5;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      /* UD CM initialized properly.  So fill in the rest of the CPC
</span><br>
<span class="quotelev1">&gt; @@ -633,12 +650,41 @@ static int udcm_module_init (udcm_module_t *m, mca_btl_openib_module_t *btl)
</span><br>
<span class="quotelev1">&gt;      /* Finally, request CQ notification */
</span><br>
<span class="quotelev1">&gt;      if (0 != ibv_req_notify_cq (m-&gt;cm_recv_cq, 0)) {
</span><br>
<span class="quotelev1">&gt;          BTL_VERBOSE((&quot;error requesting recv completions&quot;));
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; +        rc = OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; +        goto out6;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      /* Ready to use */
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    out6:
</span><br>
<span class="quotelev1">&gt; +        OBJ_DESTRUCT(&amp;m-&gt;cm_timeout_lock);
</span><br>
<span class="quotelev1">&gt; +        OBJ_DESTRUCT(&amp;m-&gt;flying_messages);
</span><br>
<span class="quotelev1">&gt; +        OBJ_DESTRUCT(&amp;m-&gt;cm_recv_msg_queue_lock);
</span><br>
<span class="quotelev1">&gt; +        OBJ_DESTRUCT(&amp;m-&gt;cm_recv_msg_queue);
</span><br>
<span class="quotelev1">&gt; +        OBJ_DESTRUCT(&amp;m-&gt;cm_send_lock);
</span><br>
<span class="quotelev1">&gt; +        OBJ_DESTRUCT(&amp;m-&gt;cm_lock);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        m-&gt;channel_monitored = false;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        ompi_btl_openib_fd_unmonitor(m-&gt;cm_channel-&gt;fd,
</span><br>
<span class="quotelev1">&gt; +                                     udcm_unmonitor, (void *)&amp;barrier);
</span><br>
<span class="quotelev1">&gt; +        while (0 == barrier) {
</span><br>
<span class="quotelev1">&gt; +            sched_yield();
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    out5:
</span><br>
<span class="quotelev1">&gt; +        udcm_module_destroy_listen_qp (m);
</span><br>
<span class="quotelev1">&gt; +    out4:
</span><br>
<span class="quotelev1">&gt; +        udcm_module_destroy_buffers (m);
</span><br>
<span class="quotelev1">&gt; +    out3:
</span><br>
<span class="quotelev1">&gt; +        ibv_destroy_cq (m-&gt;cm_send_cq);
</span><br>
<span class="quotelev1">&gt; +    out2:
</span><br>
<span class="quotelev1">&gt; +        ibv_destroy_cq (m-&gt;cm_recv_cq);
</span><br>
<span class="quotelev1">&gt; +    out1:
</span><br>
<span class="quotelev1">&gt; +        ibv_destroy_comp_channel (m-&gt;cm_channel);
</span><br>
<span class="quotelev1">&gt; +    out:
</span><br>
<span class="quotelev1">&gt; +        return rc;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  static int
</span><br>
<span class="quotelev1">&gt; @@ -691,15 +737,6 @@ udcm_module_start_connect(ompi_btl_openib_connect_base_module_t *cpc,
</span><br>
<span class="quotelev1">&gt;      return rc;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -static void *udcm_unmonitor(int fd, int flags, void *context)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    volatile int *barrier = (volatile int *)context;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    *barrier = 1;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    return NULL;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  static int udcm_module_finalize(mca_btl_openib_module_t *btl,
</span><br>
<span class="quotelev1">&gt;                                  ompi_btl_openib_connect_base_module_t *cpc)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<p><span class="quotelev1">&gt; diff --git a/opal/mca/btl/openib/connect/btl_openib_connect_udcm.c b/opal/mca/btl/openib/connect/btl_openib_connect_udcm.c
</span><br>
<span class="quotelev1">&gt; index e0b8e80..eb4785a 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/mca/btl/openib/connect/btl_openib_connect_udcm.c
</span><br>
<span class="quotelev1">&gt; +++ b/opal/mca/btl/openib/connect/btl_openib_connect_udcm.c
</span><br>
<span class="quotelev1">&gt; @@ -8,7 +8,7 @@
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2014-2015 Research Organization for Information Science
</span><br>
<span class="quotelev1">&gt;   *                         and Technology (RIST). All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2014      Intel, Inc. All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2014      Bull SAS.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2014-2015 Bull SAS.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   * 
</span><br>
<span class="quotelev1">&gt; @@ -470,6 +470,8 @@ static int udcm_component_query(mca_btl_openib_module_t *btl,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;          rc = udcm_module_init (m, btl);
</span><br>
<span class="quotelev1">&gt;          if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt; +            free(m);
</span><br>
<span class="quotelev1">&gt; +            m = NULL;
</span><br>
<span class="quotelev1">&gt;              break;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; @@ -646,9 +648,19 @@ static int udcm_endpoint_finalize(struct mca_btl_base_endpoint_t *lcl_ep)
</span><br>
<span class="quotelev1">&gt;      return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +static void *udcm_unmonitor(int fd, int flags, void *context)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    volatile int *barrier = (volatile int *)context;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    *barrier = 1;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return NULL;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  static int udcm_module_init (udcm_module_t *m, mca_btl_openib_module_t *btl)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      int rc = OPAL_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt; +    volatile int barrier = 0;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      BTL_VERBOSE((&quot;created cpc module %p for btl %p&quot;,
</span><br>
<span class="quotelev1">&gt;                   (void*)m, (void*)btl));
</span><br>
<span class="quotelev1">&gt; @@ -659,7 +671,7 @@ static int udcm_module_init (udcm_module_t *m, mca_btl_openib_module_t *btl)
</span><br>
<span class="quotelev1">&gt;      m-&gt;cm_channel = ibv_create_comp_channel (btl-&gt;device-&gt;ib_dev_context);
</span><br>
<span class="quotelev1">&gt;      if (NULL == m-&gt;cm_channel) {
</span><br>
<span class="quotelev1">&gt;          BTL_VERBOSE((&quot;error creating ud completion channel&quot;));
</span><br>
<span class="quotelev1">&gt; -        return OPAL_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt; +        goto out;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      /* Create completion queues */
</span><br>
<span class="quotelev1">&gt; @@ -668,29 +680,33 @@ static int udcm_module_init (udcm_module_t *m, mca_btl_openib_module_t *btl)
</span><br>
<span class="quotelev1">&gt;                                     m-&gt;cm_channel, 0);
</span><br>
<span class="quotelev1">&gt;      if (NULL == m-&gt;cm_recv_cq) {
</span><br>
<span class="quotelev1">&gt;          BTL_VERBOSE((&quot;error creating ud recv completion queue&quot;));
</span><br>
<span class="quotelev1">&gt; -        return OPAL_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt; +        mca_btl_openib_show_init_error(__FILE__, __LINE__, &quot;ibv_create_cq&quot;,
</span><br>
<span class="quotelev1">&gt; +                                       ibv_get_device_name(btl-&gt;device-&gt;ib_dev));
</span><br>
<span class="quotelev1">&gt; +        goto out1;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      m-&gt;cm_send_cq = ibv_create_cq (btl-&gt;device-&gt;ib_dev_context,
</span><br>
<span class="quotelev1">&gt;                                     UDCM_SEND_CQ_SIZE, NULL, NULL, 0);
</span><br>
<span class="quotelev1">&gt;      if (NULL == m-&gt;cm_send_cq) {
</span><br>
<span class="quotelev1">&gt;          BTL_VERBOSE((&quot;error creating ud send completion queue&quot;));
</span><br>
<span class="quotelev1">&gt; -        return OPAL_ERR_NOT_SUPPORTED;
</span><br>
<span class="quotelev1">&gt; +        mca_btl_openib_show_init_error(__FILE__, __LINE__, &quot;ibv_create_cq&quot;,
</span><br>
<span class="quotelev1">&gt; +                                       ibv_get_device_name(btl-&gt;device-&gt;ib_dev));
</span><br>
<span class="quotelev1">&gt; +        goto out2;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      if (0 != (rc = udcm_module_allocate_buffers (m))) {
</span><br>
<span class="quotelev1">&gt;          BTL_VERBOSE((&quot;error allocating cm buffers&quot;));
</span><br>
<span class="quotelev1">&gt; -        return rc;
</span><br>
<span class="quotelev1">&gt; +        goto out3;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      if (0 != (rc = udcm_module_create_listen_qp (m))) {
</span><br>
<span class="quotelev1">&gt;          BTL_VERBOSE((&quot;error creating UD QP&quot;));
</span><br>
<span class="quotelev1">&gt; -        return rc;
</span><br>
<span class="quotelev1">&gt; +        goto out4;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      if (0 != (rc = udcm_module_post_all_recvs (m))) {
</span><br>
<span class="quotelev1">&gt;          BTL_VERBOSE((&quot;error posting receives&quot;));
</span><br>
<span class="quotelev1">&gt; -        return rc;
</span><br>
<span class="quotelev1">&gt; +        goto out5;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      /* UD CM initialized properly.  So fill in the rest of the CPC
</span><br>
<span class="quotelev1">&gt; @@ -743,12 +759,40 @@ static int udcm_module_init (udcm_module_t *m, mca_btl_openib_module_t *btl)
</span><br>
<span class="quotelev1">&gt;      /* Finally, request CQ notification */
</span><br>
<span class="quotelev1">&gt;      if (0 != ibv_req_notify_cq (m-&gt;cm_recv_cq, 0)) {
</span><br>
<span class="quotelev1">&gt;          BTL_VERBOSE((&quot;error requesting recv completions&quot;));
</span><br>
<span class="quotelev1">&gt; -        return OPAL_ERROR;
</span><br>
<span class="quotelev1">&gt; +        rc = OPAL_ERROR;
</span><br>
<span class="quotelev1">&gt; +        goto out6;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      /* Ready to use */
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    out6:
</span><br>
<span class="quotelev1">&gt; +        OBJ_DESTRUCT(&amp;m-&gt;cm_timeout_lock);
</span><br>
<span class="quotelev1">&gt; +        OBJ_DESTRUCT(&amp;m-&gt;flying_messages);
</span><br>
<span class="quotelev1">&gt; +        OBJ_DESTRUCT(&amp;m-&gt;cm_recv_msg_queue_lock);
</span><br>
<span class="quotelev1">&gt; +        OBJ_DESTRUCT(&amp;m-&gt;cm_recv_msg_queue);
</span><br>
<span class="quotelev1">&gt; +        OBJ_DESTRUCT(&amp;m-&gt;cm_send_lock);
</span><br>
<span class="quotelev1">&gt; +        OBJ_DESTRUCT(&amp;m-&gt;cm_lock);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        m-&gt;channel_monitored = false;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        opal_btl_openib_fd_unmonitor(m-&gt;cm_channel-&gt;fd, udcm_unmonitor, (void *)&amp;barrier);
</span><br>
<span class="quotelev1">&gt; +        while (0 == barrier) {
</span><br>
<span class="quotelev1">&gt; +            sched_yield();
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    out5:
</span><br>
<span class="quotelev1">&gt; +        udcm_module_destroy_listen_qp (m);
</span><br>
<span class="quotelev1">&gt; +    out4:
</span><br>
<span class="quotelev1">&gt; +        udcm_module_destroy_buffers (m);
</span><br>
<span class="quotelev1">&gt; +    out3:
</span><br>
<span class="quotelev1">&gt; +        ibv_destroy_cq (m-&gt;cm_send_cq);
</span><br>
<span class="quotelev1">&gt; +    out2:
</span><br>
<span class="quotelev1">&gt; +        ibv_destroy_cq (m-&gt;cm_recv_cq);
</span><br>
<span class="quotelev1">&gt; +    out1:
</span><br>
<span class="quotelev1">&gt; +        ibv_destroy_comp_channel (m-&gt;cm_channel);
</span><br>
<span class="quotelev1">&gt; +    out:
</span><br>
<span class="quotelev1">&gt; +        return rc;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  static int
</span><br>
<span class="quotelev1">&gt; @@ -801,15 +845,6 @@ udcm_module_start_connect(opal_btl_openib_connect_base_module_t *cpc,
</span><br>
<span class="quotelev1">&gt;      return rc;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -static void *udcm_unmonitor(int fd, int flags, void *context)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    volatile int *barrier = (volatile int *)context;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    *barrier = 1;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    return NULL;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  static int udcm_module_finalize(mca_btl_openib_module_t *btl,
</span><br>
<span class="quotelev1">&gt;                                  opal_btl_openib_connect_base_module_t *cpc)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17305.php">http://www.open-mpi.org/community/lists/devel/2015/04/17305.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17318/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17319.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Incorrect timer frequency [w/ patch]"</a>
<li><strong>Previous message:</strong> <a href="17317.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="17305.php">Rapha&#195;&#171;l Fouassier: "[OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17325.php">Tom Wurgler: "[OMPI devel] Compile &quot;remark&quot; for Openmpi 1.8.4"</a>
<li><strong>Reply:</strong> <a href="17325.php">Tom Wurgler: "[OMPI devel] Compile &quot;remark&quot; for Openmpi 1.8.4"</a>
<li><strong>Reply:</strong> <a href="17342.php">Raphaël Fouassier: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
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
