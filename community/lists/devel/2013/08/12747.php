<?
$subject_val = "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 19 16:52:54 2013" -->
<!-- isoreceived="20130819205254" -->
<!-- sent="Mon, 19 Aug 2013 15:52:55 -0500" -->
<!-- isosent="20130819205255" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC" -->
<!-- id="015101ce9d1e$148a9810$3d9fc830$_at_opengridcomputing.com" -->
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
<strong>Date:</strong> 2013-08-19 16:52:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12748.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12746.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12748.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This patch fixes iwarp.  dunno if it breaks RoCE though  :)
<br>
<p><p>[root_at_r9 ompi-trunk]# svn diff
<br>
Index: ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/connect/btl_openib_connect_oob.c        (revision 29048)
<br>
+++ ompi/mca/btl/openib/connect/btl_openib_connect_oob.c        (working copy)
<br>
@@ -127,7 +127,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IB (this CPC will not work with iWarp).  If we do not have the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transport_type member, then we must be &lt; OFED v1.2, and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;therefore we must be IB. */
<br>
-#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE) &amp;&amp; defined(HAVE_IBV_LINK_LAYER_ETHERNET)
<br>
+#if defined(HAVE_STRUCT_IBV_DEVICE_TRANSPORT_TYPE)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (BTL_OPENIB_CONNECT_BASE_CHECK_IF_NOT_IB(btl)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output_verbose(5, ompi_btl_base_framework.framework_output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;openib BTL: oob CPC only supported on InfiniBand; skipped on  %s:%d&quot;,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12748.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12746.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12748.php">Steve Wise: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
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
