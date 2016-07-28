<?
$subject_val = "Re: [OMPI devel] the bug in btl_openib_connect_sl.c";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 15:14:23 2015" -->
<!-- isoreceived="20150629191423" -->
<!-- sent="Mon, 29 Jun 2015 14:14:24 -0500" -->
<!-- isosent="20150629191424" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] the bug in btl_openib_connect_sl.c" -->
<!-- id="00a101d0b29f$cf7bddd0$6e739970$_at_opengridcomputing.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="EEC781CE-3383-436F-B16F-89931BC567DA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] the bug in btl_openib_connect_sl.c<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-29 15:14:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17567.php">Ralph Castain: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>Previous message:</strong> <a href="17565.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] the bug in btl_openib_connect_sl.c"</a>
<li><strong>In reply to:</strong> <a href="17565.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] the bug in btl_openib_connect_sl.c"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not familiar at all with this IB code, but the supplied patch seems to post the recv wr only once when the UD QP is created.  And get_pathrecord_info() seems to have logic to retry querying path records, and if it does, there won't be a recv posted after the first recv completes. So it seems that if a recv WR is polled from the CQ, and we're going to iterate calling ibv_post_send() again, then we better post another recv wr...
<br>
<p><p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres (jsquyres) [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Monday, June 29, 2015 1:50 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers List
</span><br>
<span class="quotelev1">&gt; Cc: Nathan Hjelm; Steve Wise
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] the bug in btl_openib_connect_sl.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nathan / Steve --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you comment?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 26, 2015, at 5:13 AM, &#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#181;&#208;&#185; &#208;&#160;&#209;&#139;&#208;&#182;&#208;&#184;&#209;&#133; &lt;avryzhikh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi everybody,
</span><br>
<span class="quotelev2">&gt; &gt; I tried the functionality for  3D-torus cluster topology  support  and encountered  the bug with error message like below:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; srvmpisnb02][[9011,1],3][ompi/mca/btl/openib/connect/btl_openib_connect_sl.c:239:get_pathrecord_info] error posting receive on QP
</span><br>
<span class="quotelev1">&gt; [0x4f] errno says: Success [0]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The reason of this bug is receive queue overflow on UD QP associated with handle cache-&gt;qp
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Attached file is my proposal to fix it based on 1.8 Open MPI branch.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And I have a question about 3D-Torus toplogy support  for UD QPs.  For example you use UD transport in UDCM connection manger.
</span><br>
<span class="quotelev1">&gt; Are any changes required to query service level for UD QP?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; May be we need to add the call of btl_openib_connect_get_pathrecord_sl(&#226;&#128;&#166;)  before  ibv_create_ah()   like below:
</span><br>
<span class="quotelev2">&gt; &gt; ah_attr.is_global  = 0;
</span><br>
<span class="quotelev2">&gt; &gt; ah_attr.dlid            = remote_lid;
</span><br>
<span class="quotelev2">&gt; &gt; ah_attr.sl                = btl_openib_connect_get_pathrecord_sl(&#226;&#128;&#166;);
</span><br>
<span class="quotelev2">&gt; &gt; ah_attr.src_path_bits   = mca_btl_openib_component.ib_src_path_bits;
</span><br>
<span class="quotelev2">&gt; &gt; ah_attr.port_num        = openib_btl-&gt;ib_port_num;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ah =ibv_create_ah)(openib_btl-&gt;ib_pd, &amp;ah_attr);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Alexey Ryzhikh
</span><br>
<span class="quotelev2">&gt; &gt; &lt;btl_openib_connect_sl.c.diff&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17551.php">http://www.open-mpi.org/community/lists/devel/2015/06/17551.php</a>
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
<li><strong>Next message:</strong> <a href="17567.php">Ralph Castain: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>Previous message:</strong> <a href="17565.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] the bug in btl_openib_connect_sl.c"</a>
<li><strong>In reply to:</strong> <a href="17565.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] the bug in btl_openib_connect_sl.c"</a>
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
