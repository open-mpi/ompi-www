<?
$subject_val = "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 20 12:08:18 2013" -->
<!-- isoreceived="20130820160818" -->
<!-- sent="Tue, 20 Aug 2013 11:08:21 -0500" -->
<!-- isosent="20130820160821" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC" -->
<!-- id="004701ce9dbf$7e022ff0$7a068fd0$_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F80E755_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-20 12:08:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12775.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>In reply to:</strong> <a href="12773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12775.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Reply:</strong> <a href="12775.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres (jsquyres) [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, August 20, 2013 11:07 AM
</span><br>
<span class="quotelev1">&gt; To: Steve Wise
</span><br>
<span class="quotelev1">&gt; Cc: Open MPI Developers; Indranil Choudhury
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think you hit the nail on the head -- we typo'ed the macro name in the C code.  Doh!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you can confirm that this fixes the issue for you, please commit and CMR.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Will do!
<br>
<p><p><span class="quotelev1">&gt; Thank you for tracking this down!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>U R welcome. :)
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 20, 2013, at 11:06 AM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So is this the correct fix?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_r9 ompi-trunk]# svn diff
</span><br>
<span class="quotelev2">&gt; &gt; Index: ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- ompi/mca/btl/openib/btl_openib_component.c  (revision 29050)
</span><br>
<span class="quotelev2">&gt; &gt; +++ ompi/mca/btl/openib/btl_openib_component.c  (working copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -716,7 +716,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;             return OMPI_ERR_NOT_FOUND;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -#if defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev2">&gt; &gt; +#if defined(HAVE_DECL_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev2">&gt; &gt;         if (IBV_LINK_LAYER_ETHERNET == ib_port_attr-&gt;link_layer) {
</span><br>
<span class="quotelev2">&gt; &gt;             subnet_id = mca_btl_openib_get_ip_subnet_id(device-&gt;ib_dev,
</span><br>
<span class="quotelev2">&gt; &gt;                                                            port_num);
</span><br>
<span class="quotelev2">&gt; &gt; Index: ompi/mca/btl/openib/btl_openib.c
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- ompi/mca/btl/openib/btl_openib.c    (revision 29050)
</span><br>
<span class="quotelev2">&gt; &gt; +++ ompi/mca/btl/openib/btl_openib.c    (working copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -444,7 +444,7 @@
</span><br>
<span class="quotelev2">&gt; &gt; #ifdef HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE
</span><br>
<span class="quotelev2">&gt; &gt;     switch(openib_btl-&gt;device-&gt;ib_dev-&gt;transport_type) {
</span><br>
<span class="quotelev2">&gt; &gt;         case IBV_TRANSPORT_IB:
</span><br>
<span class="quotelev2">&gt; &gt; -#if defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev2">&gt; &gt; +#if defined(HAVE_DECL_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev2">&gt; &gt;             switch(openib_btl-&gt;ib_port_attr.link_layer) {
</span><br>
<span class="quotelev2">&gt; &gt;                 case IBV_LINK_LAYER_ETHERNET:
</span><br>
<span class="quotelev2">&gt; &gt;                     return MCA_BTL_OPENIB_TRANSPORT_RDMAOE;
</span><br>
<span class="quotelev2">&gt; &gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c       (revision 29050)
</span><br>
<span class="quotelev2">&gt; &gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c       (working copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -389,7 +389,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;        /* If we do not have struct ibv_device.transport_device, then
</span><br>
<span class="quotelev2">&gt; &gt;           we're in an old version of OFED that is IB only (i.e., no
</span><br>
<span class="quotelev2">&gt; &gt;           iWarp), so we can safely assume that we can use this CPC. */
</span><br>
<span class="quotelev2">&gt; &gt; -#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev2">&gt; &gt; +#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; defined(HAVE_DECL_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev2">&gt; &gt;        if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
</span><br>
<span class="quotelev2">&gt; &gt;            BTL_VERBOSE((&quot;UD CPC only supported on InfiniBand; skipped on %s:%d&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                         ibv_get_device_name(btl-&gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev2">&gt; &gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_oob.c        (revision 29050)
</span><br>
<span class="quotelev2">&gt; &gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_oob.c        (working copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -127,7 +127,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;        IB (this CPC will not work with iWarp).  If we do not have the
</span><br>
<span class="quotelev2">&gt; &gt;        transport_type member, then we must be &lt; OFED v1.2, and
</span><br>
<span class="quotelev2">&gt; &gt;        therefore we must be IB. */
</span><br>
<span class="quotelev2">&gt; &gt; -#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev2">&gt; &gt; +#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; defined(HAVE_DECL_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev2">&gt; &gt;     if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
</span><br>
<span class="quotelev2">&gt; &gt;         opal_output_verbose(5, ompi_btl_base_framework.framework_output,
</span><br>
<span class="quotelev2">&gt; &gt;                             &quot;openib BTL: oob CPC only supported on InfiniBand; skipped on
</span><br>
%s:%d&quot;,
<br>
<span class="quotelev2">&gt; &gt; Index: ompi/mca/common/verbs/common_verbs_find_ports.c
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- ompi/mca/common/verbs/common_verbs_find_ports.c     (revision 29050)
</span><br>
<span class="quotelev2">&gt; &gt; +++ ompi/mca/common/verbs/common_verbs_find_ports.c     (working copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -170,7 +170,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -#if defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev2">&gt; &gt; +#if defined(HAVE_DECL_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev2">&gt; &gt; static const char *link_layer_to_str(int link_type)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;     switch(link_type) {
</span><br>
<span class="quotelev2">&gt; &gt; @@ -417,7 +417,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;                 /* If they specified neither link layer, then we want this port */
</span><br>
<span class="quotelev2">&gt; &gt;                 want = true;
</span><br>
<span class="quotelev2">&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt; -#if defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev2">&gt; &gt; +#if defined(HAVE_DECL_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev2">&gt; &gt;             else if (flags &amp; OMPI_COMMON_VERBS_FLAGS_LINK_LAYER_IB) {
</span><br>
<span class="quotelev2">&gt; &gt;                 if (IBV_LINK_LAYER_INFINIBAND == port_attr.link_layer) {
</span><br>
<span class="quotelev2">&gt; &gt;                     want = true;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Steve Wise
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: Tuesday, August 20, 2013 9:25 AM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: 'Open MPI Developers'; 'Jeff Squyres (jsquyres)'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cc: 'Indranil Choudhury'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ah:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Here's the config.log:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configure:133950: checking whether IBV_LINK_LAYER_ETHERNET is declared
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configure:133950: gcc -std=gnu99 -c -g -Wall -Wundef -Wno-long-long -Wsign-compare
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-implicit-function-
</span><br>
<span class="quotelev1">&gt; declaration
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -I/usr/local/src/ompi-trunk/opal/mca/hwloc/hwloc152/hwloc/include
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -I/usr/local/src/ompi-trunk/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -I/usr/local/src/ompi-trunk/opal/mca/event/libevent2021/libevent/include  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; conftest.c:611: warning: function declaration isn't a prototype
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configure:133950: $? = 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configure:133950: result: yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; And I see it in opal_config.h:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /* Define to 1 if you have the declaration of `IBV_LINK_LAYER_ETHERNET', and
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   to 0 if you don't. */
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #define HAVE_DECL_IBV_LINK_LAYER_ETHERNET 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Note the #define is HAVE_DECL_IBV_LINK_LAYER_ETHERNET but the code is checking for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; HAVE_IBV_LINK_LAYER_ETHERNET!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No _DECL_...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Steve Wise
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sent: Tuesday, August 20, 2013 9:07 AM
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; To: 'Jeff Squyres (jsquyres)'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Cc: 'Open MPI Developers'; 'Indranil Choudhury'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subject: Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; From: Jeff Squyres (jsquyres) [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Sent: Tuesday, August 20, 2013 8:59 AM
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; To: Steve Wise
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cc: Open MPI Developers; Indranil Choudhury
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subject: Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Aug 20, 2013, at 9:51 AM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I checked in the correct fix,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Er, no.  Please re-read my email -- your fix was incorrect (you're overriding the output of
</span><br>
an
<br>
<span class="quotelev3">&gt; &gt;&gt; AC
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; macro).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; :-)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; What is the correct fix then?  I've never worked with any of this AC stuff...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; With the existing code (prior to my broken fix), HAVE_IBV_LINK_LAYER_ETHERNET does not get
</span><br>
<span class="quotelev3">&gt; &gt;&gt; defined.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Yet the enum and the link_type field are in verbs.h...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12775.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>In reply to:</strong> <a href="12773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12775.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Reply:</strong> <a href="12775.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
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
