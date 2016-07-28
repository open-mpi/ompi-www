<?
$subject_val = "[OMPI devel] openib btl thread safety warning";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 27 16:50:53 2010" -->
<!-- isoreceived="20100427205053" -->
<!-- sent="Tue, 27 Apr 2010 16:50:49 -0400" -->
<!-- isosent="20100427205049" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] openib btl thread safety warning" -->
<!-- id="D3DBBF45-A931-44C3-B26E-2C55B7FE737F_at_cisco.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] openib btl thread safety warning<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-27 16:50:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7827.php">Jeff Squyres: "[OMPI devel] 1.4.2rc2"</a>
<li><strong>Previous message:</strong> <a href="7825.php">Samuel K. Gutierrez: "[OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7868.php">Christopher Yeoh: "Re: [OMPI devel] openib btl thread safety warning"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7868.php">Christopher Yeoh: "Re: [OMPI devel] openib btl thread safety warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The following code was recently modified in btl_openib_endpoint.h (trunk):
<br>
<p>-----
<br>
#if OPAL_ENABLE_DEBUG
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ftr-&gt;seq = ep-&gt;eager_rdma_remote.seq;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} while (!OPAL_ATOMIC_CMPSET_32(&amp;ep-&gt;eager_rdma_remote.seq, ftr-&gt;seq, ftr-&gt;seq+1));
<br>
#endif
<br>
-----
<br>
<p>This line produces the following compiler warning:
<br>
<p>-----
<br>
./btl_openib_endpoint.h:505: warning: pointer targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness
<br>
-----
<br>
<p>Line 505 is the ATOMIC_CMPSET line.  Chris -- you last touched this line.  Can you fix?
<br>
<p>Thanks!
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="7827.php">Jeff Squyres: "[OMPI devel] 1.4.2rc2"</a>
<li><strong>Previous message:</strong> <a href="7825.php">Samuel K. Gutierrez: "[OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7868.php">Christopher Yeoh: "Re: [OMPI devel] openib btl thread safety warning"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7868.php">Christopher Yeoh: "Re: [OMPI devel] openib btl thread safety warning"</a>
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
