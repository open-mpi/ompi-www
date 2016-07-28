<?
$subject_val = "[OMPI devel] External loopback";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 15 12:38:38 2014" -->
<!-- isoreceived="20140915163838" -->
<!-- sent="Mon, 15 Sep 2014 18:38:30 +0200" -->
<!-- isosent="20140915163830" -->
<!-- name="H&#229;kon Bugge" -->
<!-- email="Hakon.Bugge_at_[hidden]" -->
<!-- subject="[OMPI devel] External loopback" -->
<!-- id="3BB7CA45-D2FB-4EA8-88EB-21962B22EDDF_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] External loopback<br>
<strong>From:</strong> H&#229;kon Bugge (<em>Hakon.Bugge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-15 12:38:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15830.php">Pritchard Jr., Howard: "Re: [OMPI devel] coll ml error with some nonblocking collectives"</a>
<li><strong>Previous message:</strong> <a href="15828.php">Rolf vandeVaart: "[OMPI devel] coll ml error with some nonblocking collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15868.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] External loopback"</a>
<li><strong>Reply:</strong> <a href="15868.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] External loopback"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
From time-to-time, and have a need for running Open MPI apps using the openib btl on a single node, where port 1 on the HCA is connected to port 2 on the same HCA.
<br>
<p>Using a vintage 1.5.4, my command line would read:
<br>
<p>mpiexec --mca btl self,openib --mca btl_openib_cpc_include oob \
<br>
&nbsp;&nbsp;&nbsp;-np 1 /usr/bin/env OMPI_MCA_btl_openib_if_include=mlx4_0:1 ./a.out  : \
<br>
&nbsp;&nbsp;&nbsp;-np 1 /usr/bin/env OMPI_MCA_btl_openib_if_include=mlx4_0:2 ./a.out
<br>
<p><p>Now, I had a need for a newer Open MPI, and compiled and installed version 1.8.2. Now the problems began ;-) Apparently, the old (and in my opinion nice)&quot;oob&quot; connection management method has disappeared. However, by modifying the command line to:
<br>
<p>mpiexec --mca btl self,openib --mca btl_openib_cpc_include udcm \
<br>
&nbsp;&nbsp;&nbsp;-np 1 /usr/bin/env OMPI_MCA_btl_openib_if_include=mlx4_0:1 ./a.out : \
<br>
&nbsp;&nbsp;&nbsp;-np 1 /usr/bin/env OMPI_MCA_btl_openib_if_include=mlx4_0:2 ./a.out
<br>
<p><p>I get tons of:
<br>
<p>connect/btl_openib_connect_udcm.c:1390:udcm_find_endpoint] could not find endpoint with port: 1, lid: 4608, msg_type: 100
<br>
<p>Interestingly, the lid here is the lid for Port 2 (when port numbers start at 1). I do suspect that the printout above counts ports from zero.
<br>
<p>Anyway, must I get back to an older Open MPI supporting &quot;oob&quot;, or do I have a flaw in my command line?
<br>
<p><p>Thanks, H&#229;kon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15830.php">Pritchard Jr., Howard: "Re: [OMPI devel] coll ml error with some nonblocking collectives"</a>
<li><strong>Previous message:</strong> <a href="15828.php">Rolf vandeVaart: "[OMPI devel] coll ml error with some nonblocking collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15868.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] External loopback"</a>
<li><strong>Reply:</strong> <a href="15868.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] External loopback"</a>
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
