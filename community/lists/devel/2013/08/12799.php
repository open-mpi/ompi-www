<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29060 - in branches/v1.7:	. ompi/mca/btl	ompi/mca/btl/openib	ompi/mca/btl/openib/connect	ompi/mca/common/verbs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 26 09:54:06 2013" -->
<!-- isoreceived="20130826135406" -->
<!-- sent="Mon, 26 Aug 2013 08:54:07 -0500" -->
<!-- isosent="20130826135407" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r29060 - in branches/v1.7:	. ompi/mca/btl	ompi/mca/btl/openib	ompi/mca/btl/openib/connect	ompi/mca/common/verbs" -->
<!-- id="002101cea263$bb776870$32663950$_at_opengridcomputing.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BF3D9E27-DA9C-44DB-BDBB-EB7F90E13413_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r29060 - in branches/v1.7:	. ompi/mca/btl	ompi/mca/btl/openib	ompi/mca/btl/openib/connect	ompi/mca/common/verbs<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-26 09:54:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12800.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Detailed documentation on OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="12798.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<li><strong>In reply to:</strong> <a href="12797.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29060 - in branches/v1.7: . ompi/mca/btl	ompi/mca/btl/openib ompi/mca/btl/openib/connect	ompi/mca/common/verbs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks.  I didn't see 29059.
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Friday, August 23, 2013 10:26 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] [OMPI svn] svn:open-mpi r29060 - in branches/v1.7: . ompi/mca/btl
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/common/verbs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As Jeff said in his commit message for r29059:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Turns out that AC_CHECK_DECLS is one of the &quot;new style&quot; Autoconf
</span><br>
<span class="quotelev3">&gt; &gt;&gt; macros that #defines the output to be 0 or 1 (vs. #define'ing or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #undef'ing it).  So don't check for &quot;#if defined(...&quot;; just check for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;#if ...&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 23, 2013, at 8:10 AM, &quot;Steve Wise&quot; &lt;swise_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Why is the 1.7 changeset different from the trunk changeset?  Specifically,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #if defined(HAVE_IBV_LINK_LAYER_ETHERENET)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is changed to
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #if HAVE_DECL_IBV_LINK_LAYER_ETHERNET
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Instead of
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #if defined(HAVE_DECL_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: svn [mailto:svn-bounces_at_[hidden]] On Behalf Of svn-commit-mailer_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: Thursday, August 22, 2013 1:25 PM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: [OMPI svn] svn:open-mpi r29060 - in branches/v1.7: . ompi/mca/btl ompi/mca/btl/openib
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ompi/mca/btl/openib/connect ompi/mca/common/verbs
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Date: 2013-08-22 14:24:55 EDT (Thu, 22 Aug 2013)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; New Revision: 29060
</span><br>
<span class="quotelev3">&gt; &gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29060">https://svn.open-mpi.org/trac/ompi/changeset/29060</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fixes #3730: Move r29053 to v1.7 branch (Use the HAVE_DECL_IBV_LINK_LAYER_ETHERNET macro.)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ---svn-pre-commit-ignore-below---
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; r29053 [[BR]]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Use the HAVE_DECL_IBV_LINK_LAYER_ETHERNET macro.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Commit r27211 added ifdef checks for #define
</span><br>
<span class="quotelev3">&gt; &gt;&gt; HAVE_IBV_LINK_LAYER_ETHERNET, which is incorrect.  The correct #define
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is HAVE_DECL_IBV_LINK_LAYER_ETHERNET.  This broke OMPI over iWARP.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This fixes #3726 and should be added to cmr:v1.7.3:reviewer=jsquyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; r29059 [[BR]]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Refs #3730
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Turns out that AC_CHECK_DECLS is one of the &quot;new style&quot; Autoconf
</span><br>
<span class="quotelev3">&gt; &gt;&gt; macros that #defines the output to be 0 or 1 (vs. #define'ing or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #undef'ing it).  So don't check for &quot;#if defined(...&quot;; just check for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;#if ...&quot;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Properties modified:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   branches/v1.7/   (props changed)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   branches/v1.7/ompi/mca/btl/   (props changed)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   branches/v1.7/ompi/mca/btl/openib/btl_openib.c                      |     2 +-
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   branches/v1.7/ompi/mca/btl/openib/btl_openib_component.c            |     2 +-
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   branches/v1.7/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c  |     2 +-
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   branches/v1.7/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c |     2 +-
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   branches/v1.7/ompi/mca/common/verbs/common_verbs_find_ports.c       |     4 ++--
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   5 files changed, 6 insertions(+), 6 deletions(-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Modified: branches/v1.7/ompi/mca/btl/openib/btl_openib.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --- branches/v1.7/ompi/mca/btl/openib/btl_openib.c	Thu Aug 22 13:44:20 2013	(r29059)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +++ branches/v1.7/ompi/mca/btl/openib/btl_openib.c	2013-08-22 14:24:55 EDT (Thu, 22 Aug
</span><br>
<span class="quotelev1">&gt; 2013)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	(r29060)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -447,7 +447,7 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #ifdef HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     switch(openib_btl-&gt;device-&gt;ib_dev-&gt;transport_type) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         case IBV_TRANSPORT_IB:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -#if defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +#if HAVE_DECL_IBV_LINK_LAYER_ETHERNET
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             switch(openib_btl-&gt;ib_port_attr.link_layer) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 case IBV_LINK_LAYER_ETHERNET:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                     return MCA_BTL_OPENIB_TRANSPORT_RDMAOE;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Modified: branches/v1.7/ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --- branches/v1.7/ompi/mca/btl/openib/btl_openib_component.c	Thu Aug 22 13:44:20 2013
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	(r29059)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +++ branches/v1.7/ompi/mca/btl/openib/btl_openib_component.c	2013-08-22 14:24:55 EDT
</span><br>
(Thu,
<br>
<span class="quotelev3">&gt; &gt;&gt; 22 Aug 2013)	(r29060)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -719,7 +719,7 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             return OMPI_ERR_NOT_FOUND;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -#if defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +#if HAVE_DECL_IBV_LINK_LAYER_ETHERNET
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         if (IBV_LINK_LAYER_ETHERNET == ib_port_attr-&gt;link_layer) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             subnet_id = mca_btl_openib_get_ip_subnet_id(device-&gt;ib_dev,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                                                            port_num);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Modified: branches/v1.7/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --- branches/v1.7/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	Thu Aug 22 13:44:20
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2013	(r29059)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +++ branches/v1.7/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	2013-08-22 14:24:55
</span><br>
<span class="quotelev3">&gt; &gt;&gt; EDT (Thu, 22 Aug 2013)	(r29060)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -127,7 +127,7 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        IB (this CPC will not work with iWarp).  If we do not have the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        transport_type member, then we must be &lt; OFED v1.2, and
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        therefore we must be IB. */
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; HAVE_DECL_IBV_LINK_LAYER_ETHERNET
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         opal_output_verbose(5, ompi_btl_base_framework.framework_output,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                             &quot;openib BTL: oob CPC only supported on InfiniBand; skipped on
</span><br>
<span class="quotelev2">&gt; &gt; %s:%d&quot;,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Modified: branches/v1.7/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --- branches/v1.7/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c	Thu Aug 22 13:44:20
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2013	(r29059)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +++ branches/v1.7/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c	2013-08-22
</span><br>
<span class="quotelev1">&gt; 14:24:55
</span><br>
<span class="quotelev3">&gt; &gt;&gt; EDT (Thu, 22 Aug 2013)	(r29060)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -405,7 +405,7 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	/* If we do not have struct ibv_device.transport_device, then
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	   we're in an old version of OFED that is IB only (i.e., no
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	   iWarp), so we can safely assume that we can use this CPC. */
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; HAVE_DECL_IBV_LINK_LAYER_ETHERNET
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	    BTL_VERBOSE((&quot;UD CPC only supported on InfiniBand; skipped on %s:%d&quot;,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 			 ibv_get_device_name(btl-&gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Modified: branches/v1.7/ompi/mca/common/verbs/common_verbs_find_ports.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --- branches/v1.7/ompi/mca/common/verbs/common_verbs_find_ports.c	Thu Aug 22 13:44:20
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2013	(r29059)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +++ branches/v1.7/ompi/mca/common/verbs/common_verbs_find_ports.c	2013-08-22 14:24:55
</span><br>
<span class="quotelev3">&gt; &gt;&gt; EDT (Thu, 22 Aug 2013)	(r29060)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -170,7 +170,7 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     }
</span><br>
<span class="quotelev3">&gt; &gt;&gt; }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -#if defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +#if HAVE_DECL_IBV_LINK_LAYER_ETHERNET
</span><br>
<span class="quotelev3">&gt; &gt;&gt; static const char *link_layer_to_str(int link_type)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     switch(link_type) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -416,7 +416,7 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 /* If they specified neither link layer, then we want this port */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 want = true;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             }
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -#if defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +#if HAVE_DECL_IBV_LINK_LAYER_ETHERNET
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             else if (flags &amp; OMPI_COMMON_VERBS_FLAGS_LINK_LAYER_IB) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 if (IBV_LINK_LAYER_INFINIBAND == port_attr.link_layer) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                     want = true;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12800.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Detailed documentation on OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="12798.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<li><strong>In reply to:</strong> <a href="12797.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29060 - in branches/v1.7: . ompi/mca/btl	ompi/mca/btl/openib ompi/mca/btl/openib/connect	ompi/mca/common/verbs"</a>
<!-- nextthread="start" -->
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
