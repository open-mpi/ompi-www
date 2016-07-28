<?
$subject_val = "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 19 17:01:52 2013" -->
<!-- isoreceived="20130819210152" -->
<!-- sent="Mon, 19 Aug 2013 16:01:54 -0500" -->
<!-- isosent="20130819210154" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC" -->
<!-- id="015301ce9d1f$55972980$00c57c80$_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2013-08-19 17:01:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12749.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12747.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12749.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess HAVE_IBV_LINK_LAYER_ETHERNET is guarding against a libibverbs that doesn't have
<br>
IBV_LINK_LAYER_ETHERNET defined.  So the proper fix, I think, is to enhance configure to check this
<br>
and #define HAVE_IBV_LINK_LAYER_ETHERNET  if it exists.  Or have it check existence of a link_layer
<br>
field in the ibv_port_attr structure.
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Steve Wise [mailto:swise_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Monday, August 19, 2013 3:53 PM
</span><br>
<span class="quotelev1">&gt; To: 'Open MPI Developers'; 'Jeff Squyres (jsquyres)'
</span><br>
<span class="quotelev1">&gt; Cc: 'Indranil Choudhury'
</span><br>
<span class="quotelev1">&gt; Subject: RE: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This patch fixes iwarp.  dunno if it breaks RoCE though  :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_r9 ompi-trunk]# svn diff
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/connect/btl_openib_connect_oob.c        (revision 29048)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/connect/btl_openib_connect_oob.c        (working copy)
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
<span class="quotelev1">&gt; +#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE)
</span><br>
<span class="quotelev1">&gt;      if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
</span><br>
<span class="quotelev1">&gt;          opal_output_verbose(5, ompi_btl_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt;                              &quot;openib BTL: oob CPC only supported on InfiniBand; skipped on
</span><br>
%s:%d&quot;,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12749.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12747.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12749.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
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
