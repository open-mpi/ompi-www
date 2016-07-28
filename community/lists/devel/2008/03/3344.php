<?
$subject_val = "[OMPI devel] make check failing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 09:39:06 2008" -->
<!-- isoreceived="20080304143906" -->
<!-- sent="Tue, 04 Mar 2008 09:39:06 -0500" -->
<!-- isosent="20080304143906" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="[OMPI devel] make check failing" -->
<!-- id="47CD5F0A.8090409_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> [OMPI devel] make check failing<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-04 09:39:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3345.php">Ralph H Castain: "Re: [OMPI devel] make check failing"</a>
<li><strong>Previous message:</strong> <a href="3343.php">Jeff Squyres: "[OMPI devel] disabling vt by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3345.php">Ralph H Castain: "Re: [OMPI devel] make check failing"</a>
<li><strong>Reply:</strong> <a href="3345.php">Ralph H Castain: "Re: [OMPI devel] make check failing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We have been having a problem lately with our MTT runs where make check 
<br>
would fail when mpi threads were enabled.
<br>
<p>Turns out the problem is that opal_init now calls 
<br>
opal_base_carto_select, which cannot find any carto modules since we 
<br>
have not done an install yet. So it returns a failure. This causes 
<br>
opal_init to abort before initializing the event engine. So when we try 
<br>
to do the threading tests, the event engine is uninitialized and fails.
<br>
<p>So this is why it fails, but I do not know how best to fix it. Any 
<br>
suggestions would be appreciated.
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3345.php">Ralph H Castain: "Re: [OMPI devel] make check failing"</a>
<li><strong>Previous message:</strong> <a href="3343.php">Jeff Squyres: "[OMPI devel] disabling vt by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3345.php">Ralph H Castain: "Re: [OMPI devel] make check failing"</a>
<li><strong>Reply:</strong> <a href="3345.php">Ralph H Castain: "Re: [OMPI devel] make check failing"</a>
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
