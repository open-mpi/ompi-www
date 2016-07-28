<?
$subject_val = "[OMPI devel] Changes to ompi_free_list initialization";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 20:05:20 2007" -->
<!-- isoreceived="20071102000520" -->
<!-- sent="Thu, 01 Nov 2007 20:05:10 -0400" -->
<!-- isosent="20071102000510" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="[OMPI devel] Changes to ompi_free_list initialization" -->
<!-- id="C34FE1F6.103CF%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-01 20:05:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2534.php">Jeff Squyres: "[OMPI devel] openib currently broken"</a>
<li><strong>Previous message:</strong> <a href="2532.php">Gleb Natapov: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have just gone through and re-implemented the changes ompi_free_list_t in
<br>
the trunk, and have changed all instances of ompi_free_list_init() to
<br>
ompi_free_list_init_new() (keeping the old version around for a while).  I
<br>
have tested this with ob1 and dr (the system I use for cm is not available),
<br>
with self, sm, and, tcp.  I know that several people tested on the temp
<br>
branch, but am rather sure not all btl's were tested.  Please let me know if
<br>
you run into any trouble with the changes let me know - the changes are
<br>
simple.  The longer term plan (a week or so) is once there is sufficient
<br>
testing to confirm the changes are ok, I will remove the old
<br>
ompi_free_list_init() routine, and rename ompi_free_list_init_new()
<br>
ompi_free_list_init(), and then change ompi_free_list_init_ex().
<br>
<p>Rich
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2534.php">Jeff Squyres: "[OMPI devel] openib currently broken"</a>
<li><strong>Previous message:</strong> <a href="2532.php">Gleb Natapov: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
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
