<?
$subject_val = "[OMPI devel] BTL TCP failures";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  2 17:15:41 2013" -->
<!-- isoreceived="20130502211541" -->
<!-- sent="Thu, 2 May 2013 21:15:35 +0000" -->
<!-- isosent="20130502211535" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] BTL TCP failures" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F5EE2E2_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] BTL TCP failures<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-02 17:15:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12347.php">Christopher Samuel: "Re: [OMPI devel] Choosing an Open-MPI release for a new cluster"</a>
<li><strong>Previous message:</strong> <a href="12345.php">Paul Hargrove: "Re: [OMPI devel] Choosing an Open-MPI release for a new cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On my trunk MTT runs, I'm getting a bunch of timed out tests with this message:
<br>
<p>[node014][[56709,1],31][btl_tcp_endpoint.c:678:mca_btl_tcp_endpoint_complete_connect] connect() to 10.1.0.7 failed: No route to host (113)
<br>
<p>This appeared to be due to a problem with a switch in my cluster, but the larger problem is that all the tests then *hung*.  
<br>
<p>Is this intentional?
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
<li><strong>Next message:</strong> <a href="12347.php">Christopher Samuel: "Re: [OMPI devel] Choosing an Open-MPI release for a new cluster"</a>
<li><strong>Previous message:</strong> <a href="12345.php">Paul Hargrove: "Re: [OMPI devel] Choosing an Open-MPI release for a new cluster"</a>
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
