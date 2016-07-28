<?
$subject_val = "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  3 09:38:28 2010" -->
<!-- isoreceived="20100903133828" -->
<!-- sent="Fri, 3 Sep 2010 09:38:23 -0400" -->
<!-- isosent="20100903133823" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] fix mx btl_bandwidth" -->
<!-- id="3E30988A-AAC0-4A16-8E90-C3AC8A4B1592_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="92562211-AACC-4918-8809-2B4ECA86B0D5_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-03 09:38:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8456.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Previous message:</strong> <a href="8454.php">Abhishek Kulkarni: "Re: [OMPI devel] 1/4/3rc1 over MX"</a>
<li><strong>In reply to:</strong> <a href="8447.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8456.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Reply:</strong> <a href="8456.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Reply:</strong> <a href="8457.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Reply:</strong> <a href="8464.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I think you will have to revert this patch as the btl_bandwidth __IS__ supposed to be in Mbs and not MBs. We usually talk about networks in Mbs (there is a pattern in Ethernet 1G/10G, Myricom 10G). In addition the original design of the multi-rail was based on this assumption, and the multi-rail handling code deal with these values (at that level I don't think it really matters, but at least it needs consistent values from all BTLs).
<br>
<p>However, going over the existing BTLs I can see that some BTLs do not correctly set this value:
<br>
<p>BTL     Bandwidth        Auto-detect     Status
<br>
Elan    2000                NO           Correct
<br>
GM      250                 NO           Doubtful
<br>
MX      2000/10000          YES (Mbs)    Correct (before the patch)
<br>
OFUD    800                 NO           Doubtful
<br>
OpenIB  2000/4000/8000      YES (Mbs)    Correct (multiplied by the active_width)
<br>
Portals 1000                NO           Doubtful
<br>
SCTP    100                 NO           Conservative value (correct)
<br>
Self    100                 XXX          Correct (doesn't matter anyway)
<br>
SM      9000                NO           Correct
<br>
TCP     100                 NO           Conservative value (correct)
<br>
UDAPL   225                 NO           Incorrect
<br>
<p>Some of these BTL values do not make sense, neither in Mbs or MBs. Here is a list of such BTLs: OFUD, Portals, UDAPL. If the corresponding developers can provide the default bandwidth (in Mbs) I will update their values.
<br>
<p>For SCTP, TCP I don't know how to detect it reliably in a portable way, so I expect to let them set to this very conservative value. Moreover, the BTL TCP is only used for multi-rail if the available high performance network allows it, so it doesn't really matter.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Sep 3, 2010, at 08:03 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Thanks; committed in r23712.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you file CMRs for 1.4 and 1.5?  Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 3, 2010, at 3:53 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For some reason, the MX btl sets btl_bandwidth in megabits/s instead of
</span><br>
<span class="quotelev2">&gt;&gt; megabytes/s. So we get crazy btl_weights in case of heterogeneous
</span><br>
<span class="quotelev2">&gt;&gt; multirail. And --mca btl_mx_bandwidth &lt;width&gt; cannot work around the
</span><br>
<span class="quotelev2">&gt;&gt; problem (it probably doesn't help because it's overriden by the runtime
</span><br>
<span class="quotelev2">&gt;&gt; link width detection anyway?).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Signed-off-by: Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Index: ompi/mca/btl/mx/btl_mx_component.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- ompi/mca/btl/mx/btl_mx_component.c	(r&#233;vision 23711)
</span><br>
<span class="quotelev2">&gt;&gt; +++ ompi/mca/btl/mx/btl_mx_component.c	(copie de travail)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -159,7 +159,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                                         MCA_BTL_FLAGS_PUT |
</span><br>
<span class="quotelev2">&gt;&gt;                                         MCA_BTL_FLAGS_SEND |
</span><br>
<span class="quotelev2">&gt;&gt;                                         MCA_BTL_FLAGS_RDMA_MATCHED);
</span><br>
<span class="quotelev2">&gt;&gt; -    mca_btl_mx_module.super.btl_bandwidth = 2000;
</span><br>
<span class="quotelev2">&gt;&gt; +    mca_btl_mx_module.super.btl_bandwidth = 250;
</span><br>
<span class="quotelev2">&gt;&gt;    mca_btl_mx_module.super.btl_latency = 5;
</span><br>
<span class="quotelev2">&gt;&gt;    mca_btl_base_param_register(&amp;mca_btl_mx_component.super.btl_version,
</span><br>
<span class="quotelev2">&gt;&gt;                                &amp;mca_btl_mx_module.super);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -357,7 +357,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    mx_btl-&gt;mx_endpoint = mx_endpoint;
</span><br>
<span class="quotelev2">&gt;&gt;    mx_btl-&gt;mx_endpoint_addr = mx_endpoint_addr;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -    mx_btl-&gt;super.btl_bandwidth = 2000;  /* whatever */
</span><br>
<span class="quotelev2">&gt;&gt; +    mx_btl-&gt;super.btl_bandwidth = 250;  /* whatever */
</span><br>
<span class="quotelev2">&gt;&gt;    mx_btl-&gt;super.btl_latency = 10;
</span><br>
<span class="quotelev2">&gt;&gt; #if defined(MX_HAS_NET_TYPE)
</span><br>
<span class="quotelev2">&gt;&gt;    {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -370,11 +370,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;        } else {
</span><br>
<span class="quotelev2">&gt;&gt;            if( MX_SPEED_2G == value ) {
</span><br>
<span class="quotelev2">&gt;&gt;                mx_unique_network_id |= 0xaa000000;
</span><br>
<span class="quotelev2">&gt;&gt; -                mx_btl-&gt;super.btl_bandwidth = 2000;
</span><br>
<span class="quotelev2">&gt;&gt; +                mx_btl-&gt;super.btl_bandwidth = 250;
</span><br>
<span class="quotelev2">&gt;&gt;                mx_btl-&gt;super.btl_latency = 5;
</span><br>
<span class="quotelev2">&gt;&gt;            } else if( MX_SPEED_10G == value ) {
</span><br>
<span class="quotelev2">&gt;&gt;                mx_unique_network_id |= 0xbb000000;
</span><br>
<span class="quotelev2">&gt;&gt; -                mx_btl-&gt;super.btl_bandwidth = 10000;
</span><br>
<span class="quotelev2">&gt;&gt; +                mx_btl-&gt;super.btl_bandwidth = 1250;
</span><br>
<span class="quotelev2">&gt;&gt;                mx_btl-&gt;super.btl_latency = 3;
</span><br>
<span class="quotelev2">&gt;&gt;            } else {
</span><br>
<span class="quotelev2">&gt;&gt;                mx_unique_network_id |= 0xcc000000;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;fix_btl_bandwidths.patch&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="8456.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Previous message:</strong> <a href="8454.php">Abhishek Kulkarni: "Re: [OMPI devel] 1/4/3rc1 over MX"</a>
<li><strong>In reply to:</strong> <a href="8447.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8456.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Reply:</strong> <a href="8456.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Reply:</strong> <a href="8457.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Reply:</strong> <a href="8464.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
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
