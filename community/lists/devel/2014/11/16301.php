<?
$subject_val = "Re: [OMPI devel] oshmem: put does not work with btl/vader if knem is	enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 08:37:29 2014" -->
<!-- isoreceived="20141112133729" -->
<!-- sent="Wed, 12 Nov 2014 13:33:22 +0000" -->
<!-- isosent="20141112133322" -->
<!-- name="Alexander Mikheev" -->
<!-- email="alexm_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oshmem: put does not work with btl/vader if knem is	enabled" -->
<!-- id="815aeb65d549499fad48ca5a6af448d5_at_DBXPR05MB046.eurprd05.prod.outlook.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="54633CC8.90605_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] oshmem: put does not work with btl/vader if knem is	enabled<br>
<strong>From:</strong> Alexander Mikheev (<em>alexm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-12 08:33:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16302.php">Ralph Castain: "[OMPI devel] 1.8.4 release delayed"</a>
<li><strong>Previous message:</strong> <a href="16300.php">Gilles Gouaillardet: "[OMPI devel] oshmem: put does not work with btl/vader if knem is enabled"</a>
<li><strong>In reply to:</strong> <a href="16300.php">Gilles Gouaillardet: "[OMPI devel] oshmem: put does not work with btl/vader if knem is enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16305.php">Nathan Hjelm: "Re: [OMPI devel] oshmem: put does not work with btl/vader if knem is enabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like we need to use prepare_dst() instead of prepare_src(). 
<br>
I also remember that there was a reason why prepare_src() is used with openib btl. 
<br>
<p>I will be taking another look
<br>
<p>Alex
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16302.php">Ralph Castain: "[OMPI devel] 1.8.4 release delayed"</a>
<li><strong>Previous message:</strong> <a href="16300.php">Gilles Gouaillardet: "[OMPI devel] oshmem: put does not work with btl/vader if knem is enabled"</a>
<li><strong>In reply to:</strong> <a href="16300.php">Gilles Gouaillardet: "[OMPI devel] oshmem: put does not work with btl/vader if knem is enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16305.php">Nathan Hjelm: "Re: [OMPI devel] oshmem: put does not work with btl/vader if knem is enabled"</a>
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
