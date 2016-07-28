<?
$subject_val = "[OMPI devel] RFC: new btl descriptor flags";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 29 12:42:57 2011" -->
<!-- isoreceived="20111129174257" -->
<!-- sent="Tue, 29 Nov 2011 10:42:53 -0700 (MST)" -->
<!-- isosent="20111129174253" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: new btl descriptor flags" -->
<!-- id="alpine.OSX.2.00.1111291032520.54924_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: new btl descriptor flags<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-29 12:42:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10043.php">George Bosilca: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<li><strong>Previous message:</strong> <a href="10041.php">Ralph Castain: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10043.php">George Bosilca: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<li><strong>Reply:</strong> <a href="10043.php">George Bosilca: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<li><strong>Reply:</strong> <a href="10046.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We need an accurate way to detect if prepare_src/prepare_dst are being called for a get or a put operation. I propose adding two new flags to the btl descriptor (and passing them from ob1/csum/etc):
<br>
<p>#define MCA_BTL_DES_PUT 0x0010
<br>
#define MCA_BTL_DES_GET 0x0020
<br>
<p>Comments? Suggestions? Objections?
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10043.php">George Bosilca: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<li><strong>Previous message:</strong> <a href="10041.php">Ralph Castain: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10043.php">George Bosilca: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<li><strong>Reply:</strong> <a href="10043.php">George Bosilca: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<li><strong>Reply:</strong> <a href="10046.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
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
