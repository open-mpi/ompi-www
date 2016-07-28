<?
$subject_val = "[OMPI devel] btl_openib_iwarp.c : making platform specific calls";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 13 10:56:23 2008" -->
<!-- isoreceived="20080513145623" -->
<!-- sent="Tue, 13 May 2008 10:56:13 -0400" -->
<!-- isosent="20080513145613" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="[OMPI devel] btl_openib_iwarp.c : making platform specific calls" -->
<!-- id="4829AC0D.60103_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] btl_openib_iwarp.c : making platform specific calls<br>
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-13 10:56:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3900.php">Jon Mason: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<li><strong>Previous message:</strong> <a href="3898.php">Pavel Shamis (Pasha): "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3900.php">Jon Mason: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<li><strong>Reply:</strong> <a href="3900.php">Jon Mason: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe btl_open_iwarp.c is making platform specific calls. I don't 
<br>
have jdmason's email and wanted to send this note out before todays con 
<br>
call.
<br>
<p>btl_openib_iwarp.c
<br>
#include &lt;ifaddrs.h&gt;
<br>
getifaddrs()
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3900.php">Jon Mason: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<li><strong>Previous message:</strong> <a href="3898.php">Pavel Shamis (Pasha): "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3900.php">Jon Mason: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<li><strong>Reply:</strong> <a href="3900.php">Jon Mason: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
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
