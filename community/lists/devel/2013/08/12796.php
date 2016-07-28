<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29060 - in branches/v1.7: . ompi/mca/btl	ompi/mca/btl/openib ompi/mca/btl/openib/connect	ompi/mca/common/verbs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 23 11:10:04 2013" -->
<!-- isoreceived="20130823151004" -->
<!-- sent="Fri, 23 Aug 2013 10:10:11 -0500" -->
<!-- isosent="20130823151011" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r29060 - in branches/v1.7: . ompi/mca/btl	ompi/mca/btl/openib ompi/mca/btl/openib/connect	ompi/mca/common/verbs" -->
<!-- id="005901cea012$dca242c0$95e6c840$_at_opengridcomputing.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20130822182455.E22C6160D29_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r29060 - in branches/v1.7: . ompi/mca/btl	ompi/mca/btl/openib ompi/mca/btl/openib/connect	ompi/mca/common/verbs<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-23 11:10:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12797.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29060 - in branches/v1.7: . ompi/mca/btl	ompi/mca/btl/openib ompi/mca/btl/openib/connect	ompi/mca/common/verbs"</a>
<li><strong>Previous message:</strong> <a href="12795.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12797.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29060 - in branches/v1.7: . ompi/mca/btl	ompi/mca/btl/openib ompi/mca/btl/openib/connect	ompi/mca/common/verbs"</a>
<li><strong>Reply:</strong> <a href="12797.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29060 - in branches/v1.7: . ompi/mca/btl	ompi/mca/btl/openib ompi/mca/btl/openib/connect	ompi/mca/common/verbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Why is the 1.7 changeset different from the trunk changeset?  Specifically, 
<br>
<p>#if defined(HAVE_IBV_LINK_LAYER_ETHERENET)
<br>
<p>Is changed to
<br>
<p>#if HAVE_DECL_IBV_LINK_LAYER_ETHERNET
<br>
<p>Instead of 
<br>
<p>#if defined(HAVE_DECL_IBV_LINK_LAYER_ETHERNET)
<br>
<p><p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: svn [mailto:svn-bounces_at_[hidden]] On Behalf Of svn-commit-mailer_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, August 22, 2013 1:25 PM
</span><br>
<span class="quotelev1">&gt; To: svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI svn] svn:open-mpi r29060 - in branches/v1.7: . ompi/mca/btl ompi/mca/btl/openib
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/openib/connect ompi/mca/common/verbs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev1">&gt; Date: 2013-08-22 14:24:55 EDT (Thu, 22 Aug 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 29060
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29060">https://svn.open-mpi.org/trac/ompi/changeset/29060</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fixes #3730: Move r29053 to v1.7 branch (Use the HAVE_DECL_IBV_LINK_LAYER_ETHERNET macro.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---svn-pre-commit-ignore-below---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; r29053 [[BR]]
</span><br>
<span class="quotelev1">&gt; Use the HAVE_DECL_IBV_LINK_LAYER_ETHERNET macro.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Commit r27211 added ifdef checks for #define
</span><br>
<span class="quotelev1">&gt; HAVE_IBV_LINK_LAYER_ETHERNET, which is incorrect.  The correct #define
</span><br>
<span class="quotelev1">&gt; is HAVE_DECL_IBV_LINK_LAYER_ETHERNET.  This broke OMPI over iWARP.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This fixes #3726 and should be added to cmr:v1.7.3:reviewer=jsquyres
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; r29059 [[BR]]
</span><br>
<span class="quotelev1">&gt; Refs #3730
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Turns out that AC_CHECK_DECLS is one of the &quot;new style&quot; Autoconf
</span><br>
<span class="quotelev1">&gt; macros that #defines the output to be 0 or 1 (vs. #define'ing or
</span><br>
<span class="quotelev1">&gt; #undef'ing it).  So don't check for &quot;#if defined(...&quot;; just check for
</span><br>
<span class="quotelev1">&gt; &quot;#if ...&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Properties modified:
</span><br>
<span class="quotelev1">&gt;    branches/v1.7/   (props changed)
</span><br>
<span class="quotelev1">&gt;    branches/v1.7/ompi/mca/btl/   (props changed)
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    branches/v1.7/ompi/mca/btl/openib/btl_openib.c                      |     2 +-
</span><br>
<span class="quotelev1">&gt;    branches/v1.7/ompi/mca/btl/openib/btl_openib_component.c            |     2 +-
</span><br>
<span class="quotelev1">&gt;    branches/v1.7/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c  |     2 +-
</span><br>
<span class="quotelev1">&gt;    branches/v1.7/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c |     2 +-
</span><br>
<span class="quotelev1">&gt;    branches/v1.7/ompi/mca/common/verbs/common_verbs_find_ports.c       |     4 ++--
</span><br>
<span class="quotelev1">&gt;    5 files changed, 6 insertions(+), 6 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.7/ompi/mca/btl/openib/btl_openib.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.7/ompi/mca/btl/openib/btl_openib.c	Thu Aug 22 13:44:20 2013	(r29059)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.7/ompi/mca/btl/openib/btl_openib.c	2013-08-22 14:24:55 EDT (Thu, 22 Aug 2013)
</span><br>
<span class="quotelev1">&gt; 	(r29060)
</span><br>
<span class="quotelev1">&gt; @@ -447,7 +447,7 @@
</span><br>
<span class="quotelev1">&gt;  #ifdef HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE
</span><br>
<span class="quotelev1">&gt;      switch(openib_btl-&gt;device-&gt;ib_dev-&gt;transport_type) {
</span><br>
<span class="quotelev1">&gt;          case IBV_TRANSPORT_IB:
</span><br>
<span class="quotelev1">&gt; -#if defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev1">&gt; +#if HAVE_DECL_IBV_LINK_LAYER_ETHERNET
</span><br>
<span class="quotelev1">&gt;              switch(openib_btl-&gt;ib_port_attr.link_layer) {
</span><br>
<span class="quotelev1">&gt;                  case IBV_LINK_LAYER_ETHERNET:
</span><br>
<span class="quotelev1">&gt;                      return MCA_BTL_OPENIB_TRANSPORT_RDMAOE;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.7/ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.7/ompi/mca/btl/openib/btl_openib_component.c	Thu Aug 22 13:44:20 2013
</span><br>
<span class="quotelev1">&gt; 	(r29059)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.7/ompi/mca/btl/openib/btl_openib_component.c	2013-08-22 14:24:55 EDT (Thu,
</span><br>
<span class="quotelev1">&gt; 22 Aug 2013)	(r29060)
</span><br>
<span class="quotelev1">&gt; @@ -719,7 +719,7 @@
</span><br>
<span class="quotelev1">&gt;              return OMPI_ERR_NOT_FOUND;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#if defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev1">&gt; +#if HAVE_DECL_IBV_LINK_LAYER_ETHERNET
</span><br>
<span class="quotelev1">&gt;          if (IBV_LINK_LAYER_ETHERNET == ib_port_attr-&gt;link_layer) {
</span><br>
<span class="quotelev1">&gt;              subnet_id = mca_btl_openib_get_ip_subnet_id(device-&gt;ib_dev,
</span><br>
<span class="quotelev1">&gt;                                                             port_num);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.7/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.7/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	Thu Aug 22 13:44:20
</span><br>
<span class="quotelev1">&gt; 2013	(r29059)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.7/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	2013-08-22 14:24:55
</span><br>
<span class="quotelev1">&gt; EDT (Thu, 22 Aug 2013)	(r29060)
</span><br>
<span class="quotelev1">&gt; @@ -127,7 +127,7 @@
</span><br>
<span class="quotelev1">&gt;         IB (this CPC will not work with iWarp).  If we do not have the
</span><br>
<span class="quotelev1">&gt;         transport_type member, then we must be &lt; OFED v1.2, and
</span><br>
<span class="quotelev1">&gt;         therefore we must be IB. */
</span><br>
<span class="quotelev1">&gt; -#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev1">&gt; +#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; HAVE_DECL_IBV_LINK_LAYER_ETHERNET
</span><br>
<span class="quotelev1">&gt;      if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
</span><br>
<span class="quotelev1">&gt;          opal_output_verbose(5, ompi_btl_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt;                              &quot;openib BTL: oob CPC only supported on InfiniBand; skipped on
</span><br>
%s:%d&quot;,
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.7/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.7/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c	Thu Aug 22 13:44:20
</span><br>
<span class="quotelev1">&gt; 2013	(r29059)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.7/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c	2013-08-22 14:24:55
</span><br>
<span class="quotelev1">&gt; EDT (Thu, 22 Aug 2013)	(r29060)
</span><br>
<span class="quotelev1">&gt; @@ -405,7 +405,7 @@
</span><br>
<span class="quotelev1">&gt;  	/* If we do not have struct ibv_device.transport_device, then
</span><br>
<span class="quotelev1">&gt;  	   we're in an old version of OFED that is IB only (i.e., no
</span><br>
<span class="quotelev1">&gt;  	   iWarp), so we can safely assume that we can use this CPC. */
</span><br>
<span class="quotelev1">&gt; -#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev1">&gt; +#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; HAVE_DECL_IBV_LINK_LAYER_ETHERNET
</span><br>
<span class="quotelev1">&gt;  	if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
</span><br>
<span class="quotelev1">&gt;  	    BTL_VERBOSE((&quot;UD CPC only supported on InfiniBand; skipped on %s:%d&quot;,
</span><br>
<span class="quotelev1">&gt;  			 ibv_get_device_name(btl-&gt;device-&gt;ib_dev),
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.7/ompi/mca/common/verbs/common_verbs_find_ports.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.7/ompi/mca/common/verbs/common_verbs_find_ports.c	Thu Aug 22 13:44:20
</span><br>
<span class="quotelev1">&gt; 2013	(r29059)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.7/ompi/mca/common/verbs/common_verbs_find_ports.c	2013-08-22 14:24:55
</span><br>
<span class="quotelev1">&gt; EDT (Thu, 22 Aug 2013)	(r29060)
</span><br>
<span class="quotelev1">&gt; @@ -170,7 +170,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#if defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev1">&gt; +#if HAVE_DECL_IBV_LINK_LAYER_ETHERNET
</span><br>
<span class="quotelev1">&gt;  static const char *link_layer_to_str(int link_type)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      switch(link_type) {
</span><br>
<span class="quotelev1">&gt; @@ -416,7 +416,7 @@
</span><br>
<span class="quotelev1">&gt;                  /* If they specified neither link layer, then we want this port */
</span><br>
<span class="quotelev1">&gt;                  want = true;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt; -#if defined(HAVE_IBV_LINK_LAYER_ETHERNET)
</span><br>
<span class="quotelev1">&gt; +#if HAVE_DECL_IBV_LINK_LAYER_ETHERNET
</span><br>
<span class="quotelev1">&gt;              else if (flags &amp; OMPI_COMMON_VERBS_FLAGS_LINK_LAYER_IB) {
</span><br>
<span class="quotelev1">&gt;                  if (IBV_LINK_LAYER_INFINIBAND == port_attr.link_layer) {
</span><br>
<span class="quotelev1">&gt;                      want = true;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12797.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29060 - in branches/v1.7: . ompi/mca/btl	ompi/mca/btl/openib ompi/mca/btl/openib/connect	ompi/mca/common/verbs"</a>
<li><strong>Previous message:</strong> <a href="12795.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12797.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29060 - in branches/v1.7: . ompi/mca/btl	ompi/mca/btl/openib ompi/mca/btl/openib/connect	ompi/mca/common/verbs"</a>
<li><strong>Reply:</strong> <a href="12797.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29060 - in branches/v1.7: . ompi/mca/btl	ompi/mca/btl/openib ompi/mca/btl/openib/connect	ompi/mca/common/verbs"</a>
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
