<?
$subject_val = "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 20 12:07:20 2013" -->
<!-- isoreceived="20130820160720" -->
<!-- sent="Tue, 20 Aug 2013 16:07:19 +0000" -->
<!-- isosent="20130820160719" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F80E755_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="002201ce9db6$d02509a0$706f1ce0$_at_opengridcomputing.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-20 12:07:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12774.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12772.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>In reply to:</strong> <a href="12772.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12774.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Reply:</strong> <a href="12774.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think you hit the nail on the head -- we typo'ed the macro name in the C code.  Doh!
<br>
<p>If you can confirm that this fixes the issue for you, please commit and CMR.
<br>
<p>Thank you for tracking this down!
<br>
<p><p>On Aug 20, 2013, at 11:06 AM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; So is this the correct fix?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_r9 ompi-trunk]# svn diff
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/btl_openib_component.c  (revision 29050)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/btl_openib_component.c  (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -716,7 +716,7 @@
</span><br>
<span class="quotelev1">&gt;             return OMPI_ERR_NOT_FOUND;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#if defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev1">&gt; +#if defined(HAVE_DECL_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev1">&gt;         if (IBV_LINK_LAYER_ETHERNET == ib_port_attr-&gt;link_layer) {
</span><br>
<span class="quotelev1">&gt;             subnet_id = mca_btl_openib_get_ip_subnet_id(device-&gt;ib_dev,
</span><br>
<span class="quotelev1">&gt;                                                            port_num);
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/btl_openib.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/btl_openib.c    (revision 29050)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/btl_openib.c    (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -444,7 +444,7 @@
</span><br>
<span class="quotelev1">&gt; #ifdef HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE
</span><br>
<span class="quotelev1">&gt;     switch(openib_btl-&gt;device-&gt;ib_dev-&gt;transport_type) {
</span><br>
<span class="quotelev1">&gt;         case IBV_TRANSPORT_IB:
</span><br>
<span class="quotelev1">&gt; -#if defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev1">&gt; +#if defined(HAVE_DECL_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev1">&gt;             switch(openib_btl-&gt;ib_port_attr.link_layer) {
</span><br>
<span class="quotelev1">&gt;                 case IBV_LINK_LAYER_ETHERNET:
</span><br>
<span class="quotelev1">&gt;                     return MCA_BTL_OPENIB_TRANSPORT_RDMAOE;
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c       (revision 29050)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c       (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -389,7 +389,7 @@
</span><br>
<span class="quotelev1">&gt;        /* If we do not have struct ibv_device.transport_device, then
</span><br>
<span class="quotelev1">&gt;           we're in an old version of OFED that is IB only (i.e., no
</span><br>
<span class="quotelev1">&gt;           iWarp), so we can safely assume that we can use this CPC. */
</span><br>
<span class="quotelev1">&gt; -#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp; defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev1">&gt; +#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp; defined(HAVE_DECL_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev1">&gt;        if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
</span><br>
<span class="quotelev1">&gt;            BTL_VERBOSE((&quot;UD CPC only supported on InfiniBand; skipped on %s:%d&quot;,
</span><br>
<span class="quotelev1">&gt;                         ibv_get_device_name(btl-&gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_oob.c        (revision 29050)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_oob.c        (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -127,7 +127,7 @@
</span><br>
<span class="quotelev1">&gt;        IB (this CPC will not work with iWarp).  If we do not have the
</span><br>
<span class="quotelev1">&gt;        transport_type member, then we must be &lt; OFED v1.2, and
</span><br>
<span class="quotelev1">&gt;        therefore we must be IB. */
</span><br>
<span class="quotelev1">&gt; -#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp; defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev1">&gt; +#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp; defined(HAVE_DECL_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev1">&gt;     if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
</span><br>
<span class="quotelev1">&gt;         opal_output_verbose(5, ompi_btl_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt;                             &quot;openib BTL: oob CPC only supported on InfiniBand; skipped on  %s:%d&quot;,
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/common/verbs/common_verbs_find_ports.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/common/verbs/common_verbs_find_ports.c     (revision 29050)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/common/verbs/common_verbs_find_ports.c     (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -170,7 +170,7 @@
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#if defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev1">&gt; +#if defined(HAVE_DECL_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev1">&gt; static const char *link_layer_to_str(int link_type)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     switch(link_type) {
</span><br>
<span class="quotelev1">&gt; @@ -417,7 +417,7 @@
</span><br>
<span class="quotelev1">&gt;                 /* If they specified neither link layer, then we want this port */
</span><br>
<span class="quotelev1">&gt;                 want = true;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt; -#if defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev1">&gt; +#if defined(HAVE_DECL_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev1">&gt;             else if (flags &amp; OMPI_COMMON_VERBS_FLAGS_LINK_LAYER_IB) {
</span><br>
<span class="quotelev1">&gt;                 if (IBV_LINK_LAYER_INFINIBAND == port_attr.link_layer) {
</span><br>
<span class="quotelev1">&gt;                     want = true;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Steve Wise
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, August 20, 2013 9:25 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: 'Open MPI Developers'; 'Jeff Squyres (jsquyres)'
</span><br>
<span class="quotelev2">&gt;&gt; Cc: 'Indranil Choudhury'
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ah:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here's the config.log:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; configure:133950: checking whether IBV_LINK_LAYER_ETHERNET is declared
</span><br>
<span class="quotelev2">&gt;&gt; configure:133950: gcc -std=gnu99 -c -g -Wall -Wundef -Wno-long-long -Wsign-compare
</span><br>
<span class="quotelev2">&gt;&gt; -Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-implicit-function-declaration
</span><br>
<span class="quotelev2">&gt;&gt; -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev2">&gt;&gt; -I/usr/local/src/ompi-trunk/opal/mca/hwloc/hwloc152/hwloc/include
</span><br>
<span class="quotelev2">&gt;&gt; -I/usr/local/src/ompi-trunk/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev2">&gt;&gt; -I/usr/local/src/ompi-trunk/opal/mca/event/libevent2021/libevent/include  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev2">&gt;&gt; conftest.c:611: warning: function declaration isn't a prototype
</span><br>
<span class="quotelev2">&gt;&gt; configure:133950: $? = 0
</span><br>
<span class="quotelev2">&gt;&gt; configure:133950: result: yes
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And I see it in opal_config.h:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /* Define to 1 if you have the declaration of `IBV_LINK_LAYER_ETHERNET', and
</span><br>
<span class="quotelev2">&gt;&gt;   to 0 if you don't. */
</span><br>
<span class="quotelev2">&gt;&gt; #define HAVE_DECL_IBV_LINK_LAYER_ETHERNET 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Note the #define is HAVE_DECL_IBV_LINK_LAYER_ETHERNET but the code is checking for
</span><br>
<span class="quotelev2">&gt;&gt; HAVE_IBV_LINK_LAYER_ETHERNET!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No _DECL_...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Steve Wise
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Tuesday, August 20, 2013 9:07 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: 'Jeff Squyres (jsquyres)'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cc: 'Open MPI Developers'; 'Indranil Choudhury'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: Jeff Squyres (jsquyres) [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Tuesday, August 20, 2013 8:59 AM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Steve Wise
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cc: Open MPI Developers; Indranil Choudhury
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 20, 2013, at 9:51 AM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I checked in the correct fix,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Er, no.  Please re-read my email -- your fix was incorrect (you're overriding the output of an
</span><br>
<span class="quotelev2">&gt;&gt; AC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; macro).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is the correct fix then?  I've never worked with any of this AC stuff...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With the existing code (prior to my broken fix), HAVE_IBV_LINK_LAYER_ETHERNET does not get
</span><br>
<span class="quotelev2">&gt;&gt; defined.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yet the enum and the link_type field are in verbs.h...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12774.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12772.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>In reply to:</strong> <a href="12772.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12774.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Reply:</strong> <a href="12774.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
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
