<?
$subject_val = "[OMPI devel] r18481";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 17:18:08 2008" -->
<!-- isoreceived="20080522211808" -->
<!-- sent="Thu, 22 May 2008 17:17:28 -0400" -->
<!-- isosent="20080522211728" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] r18481" -->
<!-- id="0F1A320D-A847-4078-A599-BE8EE596A393_at_eecs.utk.edu" -->
<!-- charset="WINDOWS-1252" -->
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
<strong>Subject:</strong> [OMPI devel] r18481<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-22 17:17:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4004.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="4002.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Commit r18481 seems to confuse gcc 4.2 ...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>../../../../latency_recv/ompi/mpi/c/scatter.c: In function  
<br>
&#145;MPI_Scatter&#146;:
<br>
../../../../latency_recv/ompi/mpi/c/scatter.c:128: warning: suggest  
<br>
parentheses around &amp;&amp; within ||
<br>
../../../../latency_recv/ompi/mpi/c/gather.c: In function &#145;MPI_Gather&#146;:
<br>
../../../../latency_recv/ompi/mpi/c/gather.c:133: warning: suggest  
<br>
parentheses around &amp;&amp; within ||
<br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4003/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4004.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="4002.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
