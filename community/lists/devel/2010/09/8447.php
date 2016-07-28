<?
$subject_val = "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  3 08:03:35 2010" -->
<!-- isoreceived="20100903120335" -->
<!-- sent="Fri, 3 Sep 2010 08:03:31 -0400" -->
<!-- isosent="20100903120331" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] fix mx btl_bandwidth" -->
<!-- id="92562211-AACC-4918-8809-2B4ECA86B0D5_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C80A979.6060801_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] fix mx btl_bandwidth<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-03 08:03:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8448.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH"</a>
<li><strong>Previous message:</strong> <a href="8446.php">Brice Goglin: "[OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>In reply to:</strong> <a href="8446.php">Brice Goglin: "[OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8455.php">George Bosilca: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Reply:</strong> <a href="8455.php">George Bosilca: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks; committed in r23712.
<br>
<p>Can you file CMRs for 1.4 and 1.5?  Thanks.
<br>
<p><p>On Sep 3, 2010, at 3:53 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; For some reason, the MX btl sets btl_bandwidth in megabits/s instead of
</span><br>
<span class="quotelev1">&gt; megabytes/s. So we get crazy btl_weights in case of heterogeneous
</span><br>
<span class="quotelev1">&gt; multirail. And --mca btl_mx_bandwidth &lt;width&gt; cannot work around the
</span><br>
<span class="quotelev1">&gt; problem (it probably doesn't help because it's overriden by the runtime
</span><br>
<span class="quotelev1">&gt; link width detection anyway?).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Signed-off-by: Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/mx/btl_mx_component.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/mx/btl_mx_component.c	(r&#233;vision 23711)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/mx/btl_mx_component.c	(copie de travail)
</span><br>
<span class="quotelev1">&gt; @@ -159,7 +159,7 @@
</span><br>
<span class="quotelev1">&gt;                                          MCA_BTL_FLAGS_PUT |
</span><br>
<span class="quotelev1">&gt;                                          MCA_BTL_FLAGS_SEND |
</span><br>
<span class="quotelev1">&gt;                                          MCA_BTL_FLAGS_RDMA_MATCHED);
</span><br>
<span class="quotelev1">&gt; -    mca_btl_mx_module.super.btl_bandwidth = 2000;
</span><br>
<span class="quotelev1">&gt; +    mca_btl_mx_module.super.btl_bandwidth = 250;
</span><br>
<span class="quotelev1">&gt;     mca_btl_mx_module.super.btl_latency = 5;
</span><br>
<span class="quotelev1">&gt;     mca_btl_base_param_register(&amp;mca_btl_mx_component.super.btl_version,
</span><br>
<span class="quotelev1">&gt;                                 &amp;mca_btl_mx_module.super);
</span><br>
<span class="quotelev1">&gt; @@ -357,7 +357,7 @@
</span><br>
<span class="quotelev1">&gt;     mx_btl-&gt;mx_endpoint = mx_endpoint;
</span><br>
<span class="quotelev1">&gt;     mx_btl-&gt;mx_endpoint_addr = mx_endpoint_addr;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    mx_btl-&gt;super.btl_bandwidth = 2000;  /* whatever */
</span><br>
<span class="quotelev1">&gt; +    mx_btl-&gt;super.btl_bandwidth = 250;  /* whatever */
</span><br>
<span class="quotelev1">&gt;     mx_btl-&gt;super.btl_latency = 10;
</span><br>
<span class="quotelev1">&gt; #if defined(MX_HAS_NET_TYPE)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt; @@ -370,11 +370,11 @@
</span><br>
<span class="quotelev1">&gt;         } else {
</span><br>
<span class="quotelev1">&gt;             if( MX_SPEED_2G == value ) {
</span><br>
<span class="quotelev1">&gt;                 mx_unique_network_id |= 0xaa000000;
</span><br>
<span class="quotelev1">&gt; -                mx_btl-&gt;super.btl_bandwidth = 2000;
</span><br>
<span class="quotelev1">&gt; +                mx_btl-&gt;super.btl_bandwidth = 250;
</span><br>
<span class="quotelev1">&gt;                 mx_btl-&gt;super.btl_latency = 5;
</span><br>
<span class="quotelev1">&gt;             } else if( MX_SPEED_10G == value ) {
</span><br>
<span class="quotelev1">&gt;                 mx_unique_network_id |= 0xbb000000;
</span><br>
<span class="quotelev1">&gt; -                mx_btl-&gt;super.btl_bandwidth = 10000;
</span><br>
<span class="quotelev1">&gt; +                mx_btl-&gt;super.btl_bandwidth = 1250;
</span><br>
<span class="quotelev1">&gt;                 mx_btl-&gt;super.btl_latency = 3;
</span><br>
<span class="quotelev1">&gt;             } else {
</span><br>
<span class="quotelev1">&gt;                 mx_unique_network_id |= 0xcc000000;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;fix_btl_bandwidths.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8448.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH"</a>
<li><strong>Previous message:</strong> <a href="8446.php">Brice Goglin: "[OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>In reply to:</strong> <a href="8446.php">Brice Goglin: "[OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8455.php">George Bosilca: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Reply:</strong> <a href="8455.php">George Bosilca: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
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
