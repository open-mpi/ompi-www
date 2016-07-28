<?
$subject_val = "Re: [OMPI devel] the bug in btl_openib_connect_sl.c";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 14:50:17 2015" -->
<!-- isoreceived="20150629185017" -->
<!-- sent="Mon, 29 Jun 2015 18:50:15 +0000" -->
<!-- isosent="20150629185015" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] the bug in btl_openib_connect_sl.c" -->
<!-- id="EEC781CE-3383-436F-B16F-89931BC567DA_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="cd329e8df99b18ff6d3e6b8cd73a6587_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-29 14:50:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17566.php">Steve Wise: "Re: [OMPI devel] the bug in btl_openib_connect_sl.c"</a>
<li><strong>Previous message:</strong> <a href="17564.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Pruning from the 2.x branch"</a>
<li><strong>In reply to:</strong> <a href="17551.php">&#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#181;&#208;&#185; &#208;&#160;&#209;&#139;&#208;&#182;&#208;&#184;&#209;&#133;: "[OMPI devel] the bug in btl_openib_connect_sl.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17566.php">Steve Wise: "Re: [OMPI devel] the bug in btl_openib_connect_sl.c"</a>
<li><strong>Reply:</strong> <a href="17566.php">Steve Wise: "Re: [OMPI devel] the bug in btl_openib_connect_sl.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan / Steve --
<br>

<br>
Can you comment?
<br>

<br>

<br>
<span class="quotelev1">&gt; On Jun 26, 2015, at 5:13 AM, &#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#181;&#208;&#185; &#208;&#160;&#209;&#139;&#208;&#182;&#208;&#184;&#209;&#133; &lt;avryzhikh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi everybody,
</span><br>
<span class="quotelev1">&gt; I tried the functionality for  3D-torus cluster topology  support  and encountered  the bug with error message like below:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; srvmpisnb02][[9011,1],3][ompi/mca/btl/openib/connect/btl_openib_connect_sl.c:239:get_pathrecord_info] error posting receive on QP [0x4f] errno says: Success [0]
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The reason of this bug is receive queue overflow on UD QP associated with handle cache-&gt;qp
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Attached file is my proposal to fix it based on 1.8 Open MPI branch.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; And I have a question about 3D-Torus toplogy support  for UD QPs.  For example you use UD transport in UDCM connection manger.  Are any changes required to query service level for UD QP?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; May be we need to add the call of btl_openib_connect_get_pathrecord_sl(&#226;&#128;&#166;)  before  ibv_create_ah()   like below:
</span><br>
<span class="quotelev1">&gt; ah_attr.is_global  = 0;
</span><br>
<span class="quotelev1">&gt; ah_attr.dlid            = remote_lid;
</span><br>
<span class="quotelev1">&gt; ah_attr.sl                = btl_openib_connect_get_pathrecord_sl(&#226;&#128;&#166;);
</span><br>
<span class="quotelev1">&gt; ah_attr.src_path_bits   = mca_btl_openib_component.ib_src_path_bits;
</span><br>
<span class="quotelev1">&gt; ah_attr.port_num        = openib_btl-&gt;ib_port_num;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ah =ibv_create_ah)(openib_btl-&gt;ib_pd, &amp;ah_attr);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Alexey Ryzhikh
</span><br>
<span class="quotelev1">&gt; &lt;btl_openib_connect_sl.c.diff&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17551.php">http://www.open-mpi.org/community/lists/devel/2015/06/17551.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17566.php">Steve Wise: "Re: [OMPI devel] the bug in btl_openib_connect_sl.c"</a>
<li><strong>Previous message:</strong> <a href="17564.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Pruning from the 2.x branch"</a>
<li><strong>In reply to:</strong> <a href="17551.php">&#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#181;&#208;&#185; &#208;&#160;&#209;&#139;&#208;&#182;&#208;&#184;&#209;&#133;: "[OMPI devel] the bug in btl_openib_connect_sl.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17566.php">Steve Wise: "Re: [OMPI devel] the bug in btl_openib_connect_sl.c"</a>
<li><strong>Reply:</strong> <a href="17566.php">Steve Wise: "Re: [OMPI devel] the bug in btl_openib_connect_sl.c"</a>
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
