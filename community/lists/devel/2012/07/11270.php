<?
$subject_val = "[OMPI devel] openib compiler warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 10 12:50:43 2012" -->
<!-- isoreceived="20120710165043" -->
<!-- sent="Tue, 10 Jul 2012 12:50:37 -0400" -->
<!-- isosent="20120710165037" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] openib compiler warnings" -->
<!-- id="BF017A91-B45E-4BEE-B016-60662DBA17A9_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] openib compiler warnings<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-10 12:50:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11271.php">TERRY DONTJE: "Re: [OMPI devel] openib compiler warnings"</a>
<li><strong>Previous message:</strong> <a href="11269.php">Rolf vandeVaart: "[OMPI devel] FW: add asynchronous copies for large GPU buffers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11271.php">TERRY DONTJE: "Re: [OMPI devel] openib compiler warnings"</a>
<li><strong>Reply:</strong> <a href="11271.php">TERRY DONTJE: "Re: [OMPI devel] openib compiler warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm getting these compiler warnings on the SVN trunk HEAD (r26776):
<br>
<p>btl_openib.c: In function 'mca_btl_openib_put':
<br>
btl_openib.c:1652: warning: assignment makes integer from pointer without a cast
<br>
btl_openib.c: In function 'mca_btl_openib_get':
<br>
btl_openib.c:1734: warning: assignment makes integer from pointer without a cast
<br>
<p>connect/btl_openib_connect_udcm.c:948: warning: 'i_initiate' defined but not used
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
<li><strong>Next message:</strong> <a href="11271.php">TERRY DONTJE: "Re: [OMPI devel] openib compiler warnings"</a>
<li><strong>Previous message:</strong> <a href="11269.php">Rolf vandeVaart: "[OMPI devel] FW: add asynchronous copies for large GPU buffers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11271.php">TERRY DONTJE: "Re: [OMPI devel] openib compiler warnings"</a>
<li><strong>Reply:</strong> <a href="11271.php">TERRY DONTJE: "Re: [OMPI devel] openib compiler warnings"</a>
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
