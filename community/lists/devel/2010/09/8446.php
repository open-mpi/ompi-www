<?
$subject_val = "[OMPI devel] [PATCH] fix mx btl_bandwidth";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  3 03:53:35 2010" -->
<!-- isoreceived="20100903075335" -->
<!-- sent="Fri, 03 Sep 2010 09:53:29 +0200" -->
<!-- isosent="20100903075329" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH] fix mx btl_bandwidth" -->
<!-- id="4C80A979.6060801_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH] fix mx btl_bandwidth<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-03 03:53:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8447.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Previous message:</strong> <a href="8445.php">Jeff Squyres: "Re: [OMPI devel] New interface code refactor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8447.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Reply:</strong> <a href="8447.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For some reason, the MX btl sets btl_bandwidth in megabits/s instead of
<br>
megabytes/s. So we get crazy btl_weights in case of heterogeneous
<br>
multirail. And --mca btl_mx_bandwidth &lt;width&gt; cannot work around the
<br>
problem (it probably doesn't help because it's overriden by the runtime
<br>
link width detection anyway?).
<br>
<p>Signed-off-by: Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
<br>
<p>Index: ompi/mca/btl/mx/btl_mx_component.c
<br>
===================================================================
<br>
--- ompi/mca/btl/mx/btl_mx_component.c	(r&#233;vision 23711)
<br>
+++ ompi/mca/btl/mx/btl_mx_component.c	(copie de travail)
<br>
@@ -159,7 +159,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BTL_FLAGS_PUT |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BTL_FLAGS_SEND |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BTL_FLAGS_RDMA_MATCHED);
<br>
-    mca_btl_mx_module.super.btl_bandwidth = 2000;
<br>
+    mca_btl_mx_module.super.btl_bandwidth = 250;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_mx_module.super.btl_latency = 5;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_base_param_register(&amp;mca_btl_mx_component.super.btl_version,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;mca_btl_mx_module.super);
<br>
@@ -357,7 +357,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mx_btl-&gt;mx_endpoint = mx_endpoint;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mx_btl-&gt;mx_endpoint_addr = mx_endpoint_addr;
<br>
&nbsp;
<br>
-    mx_btl-&gt;super.btl_bandwidth = 2000;  /* whatever */
<br>
+    mx_btl-&gt;super.btl_bandwidth = 250;  /* whatever */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mx_btl-&gt;super.btl_latency = 10;
<br>
&nbsp;#if defined(MX_HAS_NET_TYPE)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
@@ -370,11 +370,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( MX_SPEED_2G == value ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mx_unique_network_id |= 0xaa000000;
<br>
-                mx_btl-&gt;super.btl_bandwidth = 2000;
<br>
+                mx_btl-&gt;super.btl_bandwidth = 250;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mx_btl-&gt;super.btl_latency = 5;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if( MX_SPEED_10G == value ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mx_unique_network_id |= 0xbb000000;
<br>
-                mx_btl-&gt;super.btl_bandwidth = 10000;
<br>
+                mx_btl-&gt;super.btl_bandwidth = 1250;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mx_btl-&gt;super.btl_latency = 3;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mx_unique_network_id |= 0xcc000000;
<br>
<p><p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8446/fix_btl_bandwidths.patch">fix_btl_bandwidths.patch</a>
</ul>
<!-- attachment="fix_btl_bandwidths.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8447.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Previous message:</strong> <a href="8445.php">Jeff Squyres: "Re: [OMPI devel] New interface code refactor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8447.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Reply:</strong> <a href="8447.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
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
