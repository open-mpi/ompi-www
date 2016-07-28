<?
$subject_val = "[OMPI devel] New warning in btl_openib_endpoint.h";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 11 10:01:31 2013" -->
<!-- isoreceived="20130111150131" -->
<!-- sent="Fri, 11 Jan 2013 15:01:20 +0000" -->
<!-- isosent="20130111150120" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] New warning in btl_openib_endpoint.h" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC380B2FE2_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] New warning in btl_openib_endpoint.h<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-11 10:01:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11923.php">Gutierrez, Samuel K: "Re: [OMPI devel] New SM BTL Initialization Take 2"</a>
<li><strong>Previous message:</strong> <a href="11921.php">Kawashima, Takahiro: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like a recent change to btl_openib_endpoint.h is resulting in warnings -- the code is a bit ambiguous:
<br>
<p>-----
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (ep-&gt;qps[qp].qp-&gt;sd_wqe &lt;= 0  ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size + sizeof(mca_btl_openib_header_t) + (rdma ? sizeof(mca_btl_openib_footer_t) : 0) &gt; ep-&gt;qps[qp].ib_inline_max ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!BTL_OPENIB_QP_TYPE_PP(qp) &amp;&amp; ep-&gt;endpoint_btl-&gt;qps[qp].u.srq_qp.sd_credits &lt;= 0) {
<br>
-----
<br>
<p>Results in the following warning:
<br>
<p>./btl_openib_endpoint.h:307: warning: suggest parentheses around '&amp;&amp;' within '||'
<br>
<p>*** Mellanox: did you mean to put parentheses around the || or the &amp;&amp; ?
<br>
<p>I think the fix for this will need to go to v1.6 and v1.7, because this new code has already been pushed to those branches (bad reviewing! :-( :-( :-( ).
<br>
<p>(this code is already in v1.7; there's a CMR waiting for the gk to apply it to v1.6)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11923.php">Gutierrez, Samuel K: "Re: [OMPI devel] New SM BTL Initialization Take 2"</a>
<li><strong>Previous message:</strong> <a href="11921.php">Kawashima, Takahiro: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
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
