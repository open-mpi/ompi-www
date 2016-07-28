<?
$subject_val = "Re: [OMPI devel] RFC: opal_cache_line_size";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 23 17:56:14 2012" -->
<!-- isoreceived="20120423215614" -->
<!-- sent="Mon, 23 Apr 2012 17:56:09 -0400" -->
<!-- isosent="20120423215609" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: opal_cache_line_size" -->
<!-- id="6A2E5D71-9069-49E8-A2A9-B54FAEC0C72B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="995BA59B-115C-4612-B0D4-6FF48BAD3D91_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: opal_cache_line_size<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-23 17:56:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10913.php">Rayson Ho: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>Previous message:</strong> <a href="10911.php">George Bosilca: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>In reply to:</strong> <a href="10911.php">George Bosilca: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10913.php">Rayson Ho: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>Reply:</strong> <a href="10913.php">Rayson Ho: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 23, 2012, at 5:53 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; However, I did a quick grep and most of our headers are larger than a single line of cache (even Itanium L2) so I suppose that making opal_cache_line_size equal to the L2 cache line size will not be a too big waste of memory overall.
</span><br>
<p>Easy to update the patch; done.
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
<li><strong>Next message:</strong> <a href="10913.php">Rayson Ho: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>Previous message:</strong> <a href="10911.php">George Bosilca: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>In reply to:</strong> <a href="10911.php">George Bosilca: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10913.php">Rayson Ho: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>Reply:</strong> <a href="10913.php">Rayson Ho: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
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
