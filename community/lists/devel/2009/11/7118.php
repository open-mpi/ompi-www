<?
$subject_val = "Re: [OMPI devel] Adding support for RDMAoE devices.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 15 08:13:27 2009" -->
<!-- isoreceived="20091115131327" -->
<!-- sent="Sun, 15 Nov 2009 15:10:49 +0200" -->
<!-- isosent="20091115131049" -->
<!-- name="Vasily Philipov" -->
<!-- email="vasily_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Adding support for RDMAoE devices." -->
<!-- id="4AFFFDD9.40008_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="25E07AC9-F82C-42A4-8989-B5E835E0F613_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Adding support for RDMAoE devices.<br>
<strong>From:</strong> Vasily Philipov (<em>vasily_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-15 08:10:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7119.php">Vasily Philipov: "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
<li><strong>Previous message:</strong> <a href="7117.php">Terry Dontje: "Re: [OMPI devel] [Fwd: strong ordering for data registered memory]"</a>
<li><strong>In reply to:</strong> <a href="7069.php">Jeff Squyres: "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7119.php">Vasily Philipov: "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Perhaps since we now have 2 levels of m4 checking that is necessary 
</span><br>
<span class="quotelev1">&gt; (1) check to see if we have transport_type, and 2) check to see if 
</span><br>
<span class="quotelev1">&gt; have RDMA_TRANSPORT_RDMAOE), perhaps it would be better to put all 
</span><br>
<span class="quotelev1">&gt; these checks into a single place somewhere to avoid proliferating the 
</span><br>
<span class="quotelev1">&gt; #if's for these 2 things all over the place...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, we can have 3 openib BTL enums for the transport types 
</span><br>
<span class="quotelev1">&gt; and use those everywhere without #if's.  The #if's could only need to 
</span><br>
<span class="quotelev1">&gt; be in a single test function that effectively convert from the 
</span><br>
<span class="quotelev1">&gt; #if-necessary IBV enum to the no-#if-necessary openib BTL enum.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or perhaps assign one of the openib BTL enums on the openib BTL device 
</span><br>
<span class="quotelev1">&gt; struct right when it is created (i.e., use the #if's the convert the 
</span><br>
<span class="quotelev1">&gt; &quot;native&quot; type to assign to the openib struct).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...or something like this.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 2, 2009, at 10:46 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I see you remove support for #if
</span><br>
<span class="quotelev2">&gt;&gt; defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) -- that doesn't seem
</span><br>
<span class="quotelev2">&gt;&gt; like a good idea.  We still have users on older OFED's without that
</span><br>
<span class="quotelev2">&gt;&gt; field.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you create a 1.5 ticket for this item?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 1, 2009, at 6:44 AM, Vasily Philipov wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The attached patch adds support for RDMAoE (RDMA over Ethernet)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devices
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to Openib BTL. The code changes are very minimal, actually we only
</span><br>
<span class="quotelev3">&gt;&gt; &gt; modified the RDMACM code to provide better support for IB and RDMAoE
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devices. Please let me know if you have any comments.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Regards,Vasily.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; diff -r 9aad663adc9f ompi/config/ompi_check_openib.m4
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --- a/ompi/config/ompi_check_openib.m4        Sun Oct 25 08:29:01 
</span><br>
<span class="quotelev2">&gt;&gt; 2009 -0700
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +++ b/ompi/config/ompi_check_openib.m4        Sun Nov 01 12:17:03 
</span><br>
<span class="quotelev2">&gt;&gt; 2009 +0200
</span><br>
<span class="quotelev3">&gt;&gt; &gt; @@ -13,7 +13,7 @@
</span><br>
<span class="quotelev3">&gt;&gt; &gt; # Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; # Copyright (c) 2006-2007 Los Alamos National Security, LLC.  All
</span><br>
<span class="quotelev3">&gt;&gt; &gt; rights
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #                         reserved.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -# Copyright (c) 2006-2008 Mellanox Technologies. All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +# Copyright (c) 2006-2009 Mellanox Technologies. All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; # $COPYRIGHT$
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #
</span><br>
<span class="quotelev3">&gt;&gt; &gt; # Additional copyrights may follow
</span><br>
<span class="quotelev3">&gt;&gt; &gt; @@ -204,6 +204,21 @@
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                        [$1_have_ibcm=1
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                        $1_LIBS=&quot;-libcm $$1_LIBS&quot;])])
</span><br>
<span class="quotelev3">&gt;&gt; &gt;            fi
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +           # Check support for RDMAoE devices
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +           $1_have_rdmaoe=0
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +           AC_CHECK_DECLS([RDMA_TRANSPORT_RDMAOE],
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                          [$1_have_rdmaoe=1], [],
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                          [#include &lt;infiniband/verbs.h&gt;])
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +           AC_MSG_CHECKING([if RDMAoE support is enabled])
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +           if test &quot;1&quot; = &quot;$$1_have_rdmaoe&quot;; then
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                AC_DEFINE_UNQUOTED([OMPI_HAVE_RDMAOE], [$
</span><br>
<span class="quotelev3">&gt;&gt; &gt; $1_have_rdmaoe], [Enable RDMAoE support])
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                AC_MSG_RESULT([yes])
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +           else
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                AC_MSG_RESULT([no])
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +           fi
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +
</span><br>
<span class="quotelev3">&gt;&gt; &gt;           ])
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     # Check to see if &lt;infiniband/driver.h&gt; works.  It is known to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; diff -r 9aad663adc9f ompi/mca/btl/openib/btl_openib.c
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --- a/ompi/mca/btl/openib/btl_openib.c        Sun Oct 25 08:29:01 
</span><br>
<span class="quotelev2">&gt;&gt; 2009 -0700
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +++ b/ompi/mca/btl/openib/btl_openib.c        Sun Nov 01 12:17:03 
</span><br>
<span class="quotelev2">&gt;&gt; 2009 +0200
</span><br>
<span class="quotelev3">&gt;&gt; &gt; @@ -354,6 +354,13 @@
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         }
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +#ifdef OMPI_HAVE_RDMAOE
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +        if(RDMA_TRANSPORT_RDMAOE == (openib_btl-
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;ib_port_attr.transport) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                OPAL_PROC_ON_LOCAL_NODE(ompi_proc-&gt;proc_flags)) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +            continue;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +        }
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +#endif
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         if(NULL == (ib_proc =
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mca_btl_openib_proc_create(ompi_proc))) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         }
</span><br>
<span class="quotelev3">&gt;&gt; &gt; diff -r 9aad663adc9f ompi/mca/btl/openib/btl_openib_endpoint.c
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --- a/ompi/mca/btl/openib/btl_openib_endpoint.c       Sun Oct 25 
</span><br>
<span class="quotelev2">&gt;&gt; 08:29:01
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2009 -0700
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +++ b/ompi/mca/btl/openib/btl_openib_endpoint.c       Sun Nov 01 
</span><br>
<span class="quotelev2">&gt;&gt; 12:17:03
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2009 +0200
</span><br>
<span class="quotelev3">&gt;&gt; &gt; @@ -556,7 +556,6 @@
</span><br>
<span class="quotelev3">&gt;&gt; &gt; {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     /* If the CPC uses the CTS protocol, then start it up */
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     if (endpoint-&gt;endpoint_local_cpc-&gt;cbm_uses_cts) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -        int transport_type_ib_p = 0;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         /* Post our receives, which will make credit management happy
</span><br>
<span class="quotelev3">&gt;&gt; &gt;            (i.e., rd_credits will be 0) */
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         if (OMPI_SUCCESS !=
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mca_btl_openib_endpoint_post_recvs(endpoint)) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; @@ -572,16 +571,13 @@
</span><br>
<span class="quotelev3">&gt;&gt; &gt;            receives this side's CTS).  Also send the CTS if we already
</span><br>
<span class="quotelev3">&gt;&gt; &gt;            received the peer's CTS (e.g., if this process was slow to
</span><br>
<span class="quotelev3">&gt;&gt; &gt;            call cpc_complete(). */
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -        transport_type_ib_p = (IBV_TRANSPORT_IB == endpoint-
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;endpoint_btl-&gt;device-&gt;ib_dev-&gt;transport_type);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -#endif
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         OPAL_OUTPUT((-1, &quot;cpc_complete to peer %s: is IB %d,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; initiatior %d, cts received: %d&quot;,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                      endpoint-&gt;endpoint_proc-&gt;proc_ompi-
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;proc_hostname,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                      transport_type_ib_p,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                      endpoint-&gt;endpoint_initiator,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                      endpoint-&gt;endpoint_cts_received));
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -        if (transport_type_ib_p ||
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -            endpoint-&gt;endpoint_initiator ||
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +        if (endpoint-&gt;endpoint_initiator ||
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             endpoint-&gt;endpoint_cts_received) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             mca_btl_openib_endpoint_send_cts(endpoint);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; diff -r 9aad663adc9f ompi/mca/btl/openib/connect/base.h
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --- a/ompi/mca/btl/openib/connect/base.h      Sun Oct 25 08:29:01 2009
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -0700
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +++ b/ompi/mca/btl/openib/connect/base.h      Sun Nov 01 12:17:03 2009
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +0200
</span><br>
<span class="quotelev3">&gt;&gt; &gt; @@ -1,6 +1,6 @@
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /*
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  * Copyright (c) 2007-2008 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; - *
</span><br>
<span class="quotelev3">&gt;&gt; &gt; + * Copyright (c) 2009      Mellanox Technologies.  All rights
</span><br>
<span class="quotelev3">&gt;&gt; &gt; reserved.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  *
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev3">&gt;&gt; &gt; @@ -13,6 +13,17 @@
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #include &quot;connect/connect.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +#ifdef OMPI_HAVE_RDMAOE
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +#define
</span><br>
<span class="quotelev3">&gt;&gt; &gt; BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)                       \
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +        (((IBV_TRANSPORT_IB != ((btl)-&gt;device-&gt;ib_dev-
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;transport_type)) || \
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +        (RDMA_TRANSPORT_RDMAOE == ((btl)-
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;ib_port_attr.transport))) ?      \
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +        true : false)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +#else
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +#define
</span><br>
<span class="quotelev3">&gt;&gt; &gt; BTL_OPENIB_CONNECT_BASE_CHECK_TRANSPORT_TYPE(btl)                  \
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +        ((IBV_TRANSPORT_IB != ((btl)-&gt;device-&gt;ib_dev-
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;transport_type)) ?   \
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +        true : false)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +#endif
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +
</span><br>
<span class="quotelev3">&gt;&gt; &gt; BEGIN_C_DECLS
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /*
</span><br>
<span class="quotelev3">&gt;&gt; &gt; diff -r 9aad663adc9f ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt; &gt; btl_openib_connect_ibcm.c
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --- a/ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c   Sun Oct
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 25 08:29:01 2009 -0700
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +++ b/ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c   Sun Nov
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 01 12:17:03 2009 +0200
</span><br>
<span class="quotelev3">&gt;&gt; &gt; @@ -1,6 +1,6 @@
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /*
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  * Copyright (c) 2007-2009 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; - * Copyright (c) 2008      Mellanox Technologies. All rights
</span><br>
<span class="quotelev3">&gt;&gt; &gt; reserved.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; + * Copyright (c) 2008-2009 Mellanox Technologies. All rights
</span><br>
<span class="quotelev3">&gt;&gt; &gt; reserved.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  *
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  *
</span><br>
<span class="quotelev3">&gt;&gt; &gt; @@ -653,7 +653,7 @@
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        we're in an old version of OFED that is IB only (i.e., no
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        iWarp), so we can safely assume that we can use this CPC. */
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -    if (IBV_TRANSPORT_IB != btl-&gt;device-&gt;ib_dev-&gt;transport_type) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +    if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         BTL_VERBOSE((&quot;ibcm CPC only supported on InfiniBand; skipped
</span><br>
<span class="quotelev3">&gt;&gt; &gt; on %s:%d&quot;,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                      ibv_get_device_name(btl-&gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                      openib_btl-&gt;port_num));
</span><br>
<span class="quotelev3">&gt;&gt; &gt; diff -r 9aad663adc9f ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt; &gt; btl_openib_connect_oob.c
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --- a/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c    Sun Oct
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 25 08:29:01 2009 -0700
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +++ b/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c    Sun Nov
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 01 12:17:03 2009 +0200
</span><br>
<span class="quotelev3">&gt;&gt; &gt; @@ -12,7 +12,7 @@
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  * Copyright (c) 2006-2009 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  * Copyright (c) 2006      Los Alamos National Security, LLC.  All
</span><br>
<span class="quotelev3">&gt;&gt; &gt; rights
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  *                         reserved.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; - * Copyright (c) 2008      Mellanox Technologies.  All rights
</span><br>
<span class="quotelev3">&gt;&gt; &gt; reserved.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; + * Copyright (c) 2008-2009 Mellanox Technologies.  All rights
</span><br>
<span class="quotelev3">&gt;&gt; &gt; reserved.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  *
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  *
</span><br>
<span class="quotelev3">&gt;&gt; &gt; @@ -120,7 +120,7 @@
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        transport_type member, then we must be &lt; OFED v1.2, and
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        therefore we must be IB. */
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -    if (IBV_TRANSPORT_IB != btl-&gt;device-&gt;ib_dev-&gt;transport_type) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +    if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         opal_output_verbose(5, mca_btl_base_output,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                             &quot;openib BTL: oob CPC only supported on
</span><br>
<span class="quotelev3">&gt;&gt; &gt; InfiniBand; skipped on  %s:%d&quot;,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                             ibv_get_device_name(btl-&gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev3">&gt;&gt; &gt; diff -r 9aad663adc9f ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev3">&gt;&gt; &gt; btl_openib_connect_rdmacm.c
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --- a/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c Sun
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Oct 25 08:29:01 2009 -0700
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +++ b/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c Sun
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Nov 01 12:17:03 2009 +0200
</span><br>
<span class="quotelev3">&gt;&gt; &gt; @@ -1,7 +1,7 @@
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /*
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  * Copyright (c) 2007-2009 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  * Copyright (c) 2007-2008 Chelsio, Inc. All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; - * Copyright (c) 2008      Mellanox Technologies. All rights
</span><br>
<span class="quotelev3">&gt;&gt; &gt; reserved.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; + * Copyright (c) 2008-2009 Mellanox Technologies. All rights
</span><br>
<span class="quotelev3">&gt;&gt; &gt; reserved.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  * Copyright (c) 2009      Sandia National Laboratories. All rights
</span><br>
<span class="quotelev3">&gt;&gt; &gt; reserved.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  *
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev3">&gt;&gt; &gt; @@ -857,34 +857,38 @@
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         goto out;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -    /* Post a single receive buffer on the smallest QP for the CTS
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -       protocol */
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -    if (mca_btl_openib_component.credits_qp == qpnum) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -        struct ibv_recv_wr *bad_wr, *wr;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +    if(endpoint-&gt;endpoint_local_cpc-&gt;cbm_uses_cts) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +        /* Post a single receive buffer on the smallest QP for the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; CTS
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +           protocol */
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +        if (mca_btl_openib_component.credits_qp == qpnum) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +            struct ibv_recv_wr *bad_wr, *wr;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -        if (OMPI_SUCCESS !=
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -            ompi_btl_openib_connect_base_alloc_cts(endpoint)) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -            BTL_ERROR((&quot;Failed to alloc CTS frag&quot;));
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -            goto out1;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +            if (OMPI_SUCCESS !=
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ompi_btl_openib_connect_base_alloc_cts(endpoint)) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                BTL_ERROR((&quot;Failed to alloc CTS frag&quot;));
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                goto out1;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +            }
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +            wr = &amp;(endpoint-&gt;endpoint_cts_frag.rd_desc);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +            assert(NULL != wr);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +            wr-&gt;next = NULL;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +            if (0 != ibv_post_recv(endpoint-&gt;qps[qpnum].qp-&gt;lcl_qp,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                        wr, &amp;bad_wr)) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                BTL_ERROR((&quot;failed to post CTS recv buffer&quot;));
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                goto out1;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +            }
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +            OPAL_OUTPUT((-1, &quot;Posted CTS receiver buffer (%p) for
</span><br>
<span class="quotelev3">&gt;&gt; &gt; peer %s, qp index %d (QP num %d), WR ID %p, SG addr %p, len %d, lkey
</span><br>
<span class="quotelev3">&gt;&gt; &gt; %d&quot;,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                        (void*) wr-&gt;sg_list[0].addr,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                        endpoint-&gt;endpoint_proc-&gt;proc_ompi-
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;proc_hostname,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                        qpnum,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                        endpoint-&gt;qps[qpnum].qp-&gt;lcl_qp-&gt;qp_num,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                        (void*) wr-&gt;wr_id,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                        (void*) wr-&gt;sg_list[0].addr,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                        wr-&gt;sg_list[0].length,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                        wr-&gt;sg_list[0].lkey));
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         }
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -        wr = &amp;(endpoint-&gt;endpoint_cts_frag.rd_desc);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -        assert(NULL != wr);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -        wr-&gt;next = NULL;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -        if (0 != ibv_post_recv(endpoint-&gt;qps[qpnum].qp-&gt;lcl_qp,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -                               wr, &amp;bad_wr)) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -            BTL_ERROR((&quot;failed to post CTS recv buffer&quot;));
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -            goto out1;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -        }
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -        OPAL_OUTPUT((-1, &quot;Posted CTS receiver buffer (%p) for peer
</span><br>
<span class="quotelev3">&gt;&gt; &gt; %s, qp index %d (QP num %d), WR ID %p, SG addr %p, len %d, lkey %d&quot;,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -                     (void*) wr-&gt;sg_list[0].addr,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -                     endpoint-&gt;endpoint_proc-&gt;proc_ompi-
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;proc_hostname,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -                     qpnum,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -                     endpoint-&gt;qps[qpnum].qp-&gt;lcl_qp-&gt;qp_num,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -                     (void*) wr-&gt;wr_id,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -                     (void*) wr-&gt;sg_list[0].addr,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -                     wr-&gt;sg_list[0].length,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -                     wr-&gt;sg_list[0].lkey));
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +    } else { /* NOT IWARP */
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +        mca_btl_openib_endpoint_post_recvs(endpoint);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     /* Since the event id is already created (since we're the server),
</span><br>
<span class="quotelev3">&gt;&gt; &gt; @@ -1327,27 +1331,31 @@
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             goto out;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -        if (mca_btl_openib_component.credits_qp == context-&gt;qpnum) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -            /* Post a single receive buffer on the smallest QP for
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the CTS
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -               protocol */
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -            struct ibv_recv_wr *bad_wr, *wr;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -            assert(NULL != contents-&gt;endpoint-
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;endpoint_cts_frag.super.super.base.super.ptr);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -            wr = &amp;(contents-&gt;endpoint-&gt;endpoint_cts_frag.rd_desc);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -            assert(NULL != wr);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -            wr-&gt;next = NULL;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -            if (0 != ibv_post_recv(contents-&gt;endpoint-&gt;qps[context-
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;qpnum].qp-&gt;lcl_qp,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -                                   wr, &amp;bad_wr)) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -                BTL_ERROR((&quot;failed to post CTS recv buffer&quot;));
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -                goto out1;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +        if (contents-&gt;endpoint-&gt;endpoint_local_cpc-&gt;cbm_uses_cts) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +            if (mca_btl_openib_component.credits_qp == context-
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;qpnum) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                /* Post a single receive buffer on the smallest QP
</span><br>
<span class="quotelev3">&gt;&gt; &gt; for the CTS
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                   protocol */
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                struct ibv_recv_wr *bad_wr, *wr;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                assert(NULL != contents-&gt;endpoint-
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;endpoint_cts_frag.super.super.base.super.ptr);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                wr = &amp;(contents-&gt;endpoint-
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;endpoint_cts_frag.rd_desc);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                assert(NULL != wr);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                wr-&gt;next = NULL;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                if (0 != ibv_post_recv(contents-&gt;endpoint-
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;qps[context-&gt;qpnum].qp-&gt;lcl_qp,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                            wr, &amp;bad_wr)) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                    BTL_ERROR((&quot;failed to post CTS recv buffer&quot;));
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                    goto out1;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                }
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                OPAL_OUTPUT((-1, &quot;Posted initiator CTS buffer (%p,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; length %d) for peer %s, qp index %d (QP num %d)&quot;,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                            (void*) wr-&gt;sg_list[0].addr,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                            wr-&gt;sg_list[0].length,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                            contents-&gt;endpoint-&gt;endpoint_proc-
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;proc_ompi-&gt;proc_hostname,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                            context-&gt;qpnum,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +                            contents-&gt;endpoint-&gt;qps[context-
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;qpnum].qp-&gt;lcl_qp-&gt;qp_num));
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             }
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -            OPAL_OUTPUT((-1, &quot;Posted initiator CTS buffer (%p,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; length %d) for peer %s, qp index %d (QP num %d)&quot;,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -                         (void*) wr-&gt;sg_list[0].addr,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -                         wr-&gt;sg_list[0].length,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -                         contents-&gt;endpoint-&gt;endpoint_proc-
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;proc_ompi-&gt;proc_hostname,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -                         context-&gt;qpnum,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -                         contents-&gt;endpoint-&gt;qps[context-&gt;qpnum].qp-
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;lcl_qp-&gt;qp_num));
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +        } else { /* NOT IWARP */
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +            mca_btl_openib_endpoint_post_recvs(contents-&gt;endpoint);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     } else {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         /* If we are establishing a connection in the &quot;wrong&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; direction,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; @@ -1809,7 +1817,12 @@
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     (*cpc)-&gt;cbm_finalize = NULL;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     /* Setting uses_cts=true also guarantees that we'll only be
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        selected if QP 0 is PP */
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -    (*cpc)-&gt;cbm_uses_cts = true;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +    if(IBV_TRANSPORT_IWARP == (openib_btl-&gt;device-&gt;ib_dev-
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;transport_type)) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +        (*cpc)-&gt;cbm_uses_cts = true;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +    } else {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +        (*cpc)-&gt;cbm_uses_cts = false;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +    }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     server = OBJ_NEW(rdmacm_contents_t);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     if (NULL == server) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &lt;ATT1758013.txt&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Hello Jeff.
<br>
The most code of the patch was removed.
<br>
Please see below the new patch.
<br>
Thank you for your time.
<br>
<p><p>
<p>
diff -r 16b0d6d73529 ompi/config/ompi_check_openib.m4
<br>
--- a/ompi/config/ompi_check_openib.m4	Tue Nov 03 20:00:16 2009 -0800
<br>
+++ b/ompi/config/ompi_check_openib.m4	Sun Nov 15 14:58:37 2009 +0200
<br>
@@ -13,7 +13,7 @@
<br>
&nbsp;# Copyright (c) 2006-2008 Cisco Systems, Inc.  All rights reserved.
<br>
&nbsp;# Copyright (c) 2006-2007 Los Alamos National Security, LLC.  All rights
<br>
&nbsp;#                         reserved.
<br>
-# Copyright (c) 2006-2008 Mellanox Technologies. All rights reserved.
<br>
+# Copyright (c) 2006-2009 Mellanox Technologies. All rights reserved.
<br>
&nbsp;# $COPYRIGHT$
<br>
&nbsp;# 
<br>
&nbsp;# Additional copyrights may follow
<br>
@@ -204,6 +204,21 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[$1_have_ibcm=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$1_LIBS=&quot;-libcm $$1_LIBS&quot;])])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
+		   
<br>
+           # Check support for RDMAoE devices
<br>
+           $1_have_rdmaoe=0
<br>
+           AC_CHECK_DECLS([RDMA_TRANSPORT_RDMAOE],
<br>
+                          [$1_have_rdmaoe=1], [],
<br>
+                          [#include &lt;infiniband/verbs.h&gt;])
<br>
+
<br>
+           AC_MSG_CHECKING([if RDMAoE support is enabled])
<br>
+           if test &quot;1&quot; = &quot;$$1_have_rdmaoe&quot;; then
<br>
+                AC_DEFINE_UNQUOTED([OMPI_HAVE_RDMAOE], [$$1_have_rdmaoe], [Enable RDMAoE support])
<br>
+                AC_MSG_RESULT([yes])
<br>
+           else
<br>
+                AC_MSG_RESULT([no])
<br>
+           fi
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;])
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Check to see if &lt;infiniband/driver.h&gt; works.  It is known to
<br>
diff -r 16b0d6d73529 ompi/mca/btl/openib/btl_openib.c
<br>
--- a/ompi/mca/btl/openib/btl_openib.c	Tue Nov 03 20:00:16 2009 -0800
<br>
+++ b/ompi/mca/btl/openib/btl_openib.c	Sun Nov 15 14:58:37 2009 +0200
<br>
@@ -354,6 +354,13 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;#endif
<br>
&nbsp;
<br>
+#ifdef OMPI_HAVE_RDMAOE
<br>
+        if(RDMA_TRANSPORT_RDMAOE == (openib_btl-&gt;ib_port_attr.transport) &amp;&amp;
<br>
+                OPAL_PROC_ON_LOCAL_NODE(ompi_proc-&gt;proc_flags)) {
<br>
+            continue;
<br>
+        }
<br>
+#endif
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(NULL == (ib_proc = mca_btl_openib_proc_create(ompi_proc))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERR_OUT_OF_RESOURCE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
diff -r 16b0d6d73529 ompi/mca/btl/openib/connect/base.h
<br>
--- a/ompi/mca/btl/openib/connect/base.h	Tue Nov 03 20:00:16 2009 -0800
<br>
+++ b/ompi/mca/btl/openib/connect/base.h	Sun Nov 15 14:58:37 2009 +0200
<br>
@@ -1,6 +1,7 @@
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* Copyright (c) 2007-2008 Cisco Systems, Inc.  All rights reserved.
<br>
&nbsp;&nbsp;*
<br>
+ * Copyright (c) 2009      Mellanox Technologies.  All rights reserved.
<br>
&nbsp;&nbsp;* $COPYRIGHT$
<br>
&nbsp;&nbsp;* 
<br>
&nbsp;&nbsp;* Additional copyrights may follow
<br>
@@ -13,6 +14,17 @@
<br>
&nbsp;
<br>
&nbsp;#include &quot;connect/connect.h&quot;
<br>
&nbsp;
<br>
+#ifdef OMPI_HAVE_RDMAOE
<br>
+#define BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)                       \
<br>
+        (((IBV_TRANSPORT_IB != ((btl)-&gt;device-&gt;ib_dev-&gt;transport_type)) || \
<br>
+        (RDMA_TRANSPORT_RDMAOE == ((btl)-&gt;ib_port_attr.transport))) ?      \
<br>
+        true : false)
<br>
+#else
<br>
+#define BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)                       \
<br>
+        ((IBV_TRANSPORT_IB != ((btl)-&gt;device-&gt;ib_dev-&gt;transport_type)) ?   \
<br>
+        true : false)
<br>
+#endif
<br>
+
<br>
&nbsp;BEGIN_C_DECLS
<br>
&nbsp;
<br>
&nbsp;/*
<br>
diff -r 16b0d6d73529 ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c
<br>
--- a/ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c	Tue Nov 03 20:00:16 2009 -0800
<br>
+++ b/ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c	Sun Nov 15 14:58:37 2009 +0200
<br>
@@ -1,6 +1,6 @@
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* Copyright (c) 2007-2009 Cisco Systems, Inc.  All rights reserved.
<br>
- * Copyright (c) 2008      Mellanox Technologies. All rights reserved.
<br>
+ * Copyright (c) 2008-2009 Mellanox Technologies. All rights reserved.
<br>
&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;* $COPYRIGHT$
<br>
&nbsp;&nbsp;* 
<br>
@@ -653,7 +653,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;we're in an old version of OFED that is IB only (i.e., no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iWarp), so we can safely assume that we can use this CPC. */
<br>
&nbsp;#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE)
<br>
-    if (IBV_TRANSPORT_IB != btl-&gt;device-&gt;ib_dev-&gt;transport_type) {
<br>
+    if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BTL_VERBOSE((&quot;ibcm CPC only supported on InfiniBand; skipped on %s:%d&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibv_get_device_name(btl-&gt;device-&gt;ib_dev),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;openib_btl-&gt;port_num));
<br>
diff -r 16b0d6d73529 ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
<br>
--- a/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	Tue Nov 03 20:00:16 2009 -0800
<br>
+++ b/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	Sun Nov 15 14:58:37 2009 +0200
<br>
@@ -12,7 +12,7 @@
<br>
&nbsp;&nbsp;* Copyright (c) 2006-2009 Cisco Systems, Inc.  All rights reserved.
<br>
&nbsp;&nbsp;* Copyright (c) 2006      Los Alamos National Security, LLC.  All rights
<br>
&nbsp;&nbsp;*                         reserved. 
<br>
- * Copyright (c) 2008      Mellanox Technologies.  All rights reserved.
<br>
+ * Copyright (c) 2008-2009 Mellanox Technologies.  All rights reserved.
<br>
&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;* $COPYRIGHT$
<br>
&nbsp;&nbsp;* 
<br>
@@ -120,7 +120,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transport_type member, then we must be &lt; OFED v1.2, and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;therefore we must be IB. */   
<br>
&nbsp;#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE)
<br>
-    if (IBV_TRANSPORT_IB != btl-&gt;device-&gt;ib_dev-&gt;transport_type) {
<br>
+    if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output_verbose(5, mca_btl_base_output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;openib BTL: oob CPC only supported on InfiniBand; skipped on  %s:%d&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibv_get_device_name(btl-&gt;device-&gt;ib_dev),
<br>
diff -r 16b0d6d73529 ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c
<br>
--- a/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c	Tue Nov 03 20:00:16 2009 -0800
<br>
+++ b/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c	Sun Nov 15 14:58:37 2009 +0200
<br>
@@ -1,7 +1,7 @@
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* Copyright (c) 2007-2009 Cisco Systems, Inc.  All rights reserved.
<br>
&nbsp;&nbsp;* Copyright (c) 2007-2008 Chelsio, Inc. All rights reserved.
<br>
- * Copyright (c) 2008      Mellanox Technologies. All rights reserved.
<br>
+ * Copyright (c) 2008-2009 Mellanox Technologies. All rights reserved.
<br>
&nbsp;&nbsp;* Copyright (c) 2009      Sandia National Laboratories. All rights reserved.
<br>
&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;* $COPYRIGHT$
<br>
@@ -1158,10 +1158,15 @@
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;static int rdmacm_destroy_dummy_qp(id_context_t *context)
<br>
&nbsp;{
<br>
-    if (NULL != context-&gt;id-&gt;qp) {
<br>
-        ibv_destroy_qp(context-&gt;id-&gt;qp);
<br>
-        context-&gt;id-&gt;qp = NULL;
<br>
+    /* We need to check id pointer because of retransmitions.
<br>
+                                 Maybe the reject was already done. */
<br>
+    if (NULL != context-&gt;id) {
<br>
+	    if (NULL != context-&gt;id-&gt;qp) {
<br>
+            ibv_destroy_qp(context-&gt;id-&gt;qp);
<br>
+            context-&gt;id-&gt;qp = NULL;
<br>
+        }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != context-&gt;contents-&gt;dummy_cq) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibv_destroy_cq(context-&gt;contents-&gt;dummy_cq);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7119.php">Vasily Philipov: "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
<li><strong>Previous message:</strong> <a href="7117.php">Terry Dontje: "Re: [OMPI devel] [Fwd: strong ordering for data registered memory]"</a>
<li><strong>In reply to:</strong> <a href="7069.php">Jeff Squyres: "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7119.php">Vasily Philipov: "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
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
