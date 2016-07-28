<?
$subject_val = "[OMPI devel] pointer_array";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 15 16:01:11 2007" -->
<!-- isoreceived="20071215210111" -->
<!-- sent="Sat, 15 Dec 2007 16:01:02 -0500" -->
<!-- isosent="20071215210102" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] pointer_array" -->
<!-- id="5DD6B56B-CFD2-4FD6-AB3E-DFDE0F21D646_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> [OMPI devel] pointer_array<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-15 16:01:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2862.php">Tim Mattox: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Previous message:</strong> <a href="2860.php">Gleb Natapov: "Re: [OMPI devel] rb rcache component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2862.php">Tim Mattox: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Reply:</strong> <a href="2862.php">Tim Mattox: "Re: [OMPI devel] pointer_array"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a patch that unify the pointer array implementations into just  
<br>
one. Right now, we have 2 pointer array implementations: one for ORTE  
<br>
and one for OMPI. The differences are small and mostly insignificant  
<br>
(there is no way to add more than 2^31 elements in the pointer array  
<br>
anyway). The following patch propose to merge these two pointer array  
<br>
into one, implemented in OPAL (and called opal_pointer_array).
<br>
<p>If nobody has complained before Wednesday noon I'll commit the patch.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>

<br><p>
<p><p><p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2861/pointer_array.patch">pointer_array.patch</a>
</ul>
<!-- attachment="pointer_array.patch" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2861/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2862.php">Tim Mattox: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Previous message:</strong> <a href="2860.php">Gleb Natapov: "Re: [OMPI devel] rb rcache component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2862.php">Tim Mattox: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Reply:</strong> <a href="2862.php">Tim Mattox: "Re: [OMPI devel] pointer_array"</a>
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
