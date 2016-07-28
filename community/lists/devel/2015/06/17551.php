<?
$subject_val = "[OMPI devel] the bug in btl_openib_connect_sl.c";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 26 05:13:22 2015" -->
<!-- isoreceived="20150626091322" -->
<!-- sent="Fri, 26 Jun 2015 12:13:09 +0300" -->
<!-- isosent="20150626091309" -->
<!-- name="&#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#181;&#208;&#185; &#208;&#160;&#209;&#139;&#208;&#182;&#208;&#184;&#209;&#133;" -->
<!-- email="avryzhikh_at_[hidden]" -->
<!-- subject="[OMPI devel] the bug in btl_openib_connect_sl.c" -->
<!-- id="cd329e8df99b18ff6d3e6b8cd73a6587_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] the bug in btl_openib_connect_sl.c<br>
<strong>From:</strong> &#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#181;&#208;&#185; &#208;&#160;&#209;&#139;&#208;&#182;&#208;&#184;&#209;&#133; (<em>avryzhikh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-26 05:13:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17552.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Previous message:</strong> <a href="17550.php">Paul Hargrove: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17565.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] the bug in btl_openib_connect_sl.c"</a>
<li><strong>Reply:</strong> <a href="17565.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] the bug in btl_openib_connect_sl.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody,
<br>
<p>I tried the functionality for  3D-torus cluster topology  support  and
<br>
encountered  the bug with error message like below:
<br>
<p><p><p>srvmpisnb02][[9011,1],3][ompi/mca/btl/openib/connect/btl_openib_connect_sl.c:239:get_pathrecord_info]
<br>
error posting receive on QP [0x4f] errno says: Success [0]
<br>
<p><p><p>The reason of this bug is receive queue overflow on UD QP associated with
<br>
handle cache-&gt;qp
<br>
<p><p><p>Attached file is my proposal to fix it based on 1.8 Open MPI branch.
<br>
<p><p><p>And I have a question about 3D-Torus toplogy support  for UD QPs.  For
<br>
example you use UD transport in UDCM connection manger.  Are any changes
<br>
required to query service level for UD QP?
<br>
<p><p><p>May be we need to add the call of btl_openib_connect_get_pathrecord_sl(&#226;&#128;&#166;)
<br>
before  ibv_create_ah()   like below:
<br>
<p>ah_attr.is_global  = 0;
<br>
<p>ah_attr.dlid            = remote_lid;
<br>
<p>ah_attr.sl                = btl_openib_connect_get_pathrecord_sl(&#226;&#128;&#166;);
<br>
<p>ah_attr.src_path_bits   = mca_btl_openib_component.ib_src_path_bits;
<br>
<p>ah_attr.port_num        = openib_btl-&gt;ib_port_num;
<br>
<p><p><p>ah =ibv_create_ah)(openib_btl-&gt;ib_pd, &amp;ah_attr);
<br>
<p><p><p><p><p>Regards,
<br>
<p>Alexey Ryzhikh
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17551/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17551/btl_openib_connect_sl.c.diff">btl_openib_connect_sl.c.diff</a>
</ul>
<!-- attachment="btl_openib_connect_sl.c.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17552.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Previous message:</strong> <a href="17550.php">Paul Hargrove: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17565.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] the bug in btl_openib_connect_sl.c"</a>
<li><strong>Reply:</strong> <a href="17565.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] the bug in btl_openib_connect_sl.c"</a>
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
