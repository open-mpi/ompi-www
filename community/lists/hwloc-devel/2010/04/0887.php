<?
$subject_val = "Re: [hwloc-devel] Embedding: is it worth it?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 09:05:29 2010" -->
<!-- isoreceived="20100406130529" -->
<!-- sent="Tue, 6 Apr 2010 09:05:24 -0400" -->
<!-- isosent="20100406130524" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Embedding: is it worth it?" -->
<!-- id="1B903E62-30D2-4353-9D3E-B8EB038FABE2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100404161537.GE3973_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Embedding: is it worth it?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 09:05:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0888.php">Brice Goglin: "Re: [hwloc-devel] rc1?"</a>
<li><strong>Previous message:</strong> <a href="0886.php">Jeff Squyres: "Re: [hwloc-devel] rc1?"</a>
<li><strong>In reply to:</strong> <a href="0883.php">Samuel Thibault: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0891.php">Samuel Thibault: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<li><strong>Reply:</strong> <a href="0891.php">Samuel Thibault: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 4, 2010, at 12:15 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt; &gt; To be clear, if OMPI is to use the internal/embedded copy, it would just call the $path_to_hwloc/configure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you mean that if OMPI had to be able to use an external copy in some
</span><br>
<span class="quotelev1">&gt; cases, for the internal case it would now just use ./configure?  
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; Why
</span><br>
<span class="quotelev1">&gt; is it so?  Can't the main ./configure call the hwloc m4 stuff or not
</span><br>
<span class="quotelev1">&gt; depending on whether the internal or the external version is used?
</span><br>
<p>No -- we wouldn't want to call the m4 stuff in the external case, because what if it came to different answers vs. how the external one is configured?  (e.g., if OMPI is built using icc and the external copy was built with gcc)
<br>
<p>In the external case, OMPI should just use the external's hwloc.h and whatever decisions were already made there (sizes, types, etc.).
<br>
<p>Make sense?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0888.php">Brice Goglin: "Re: [hwloc-devel] rc1?"</a>
<li><strong>Previous message:</strong> <a href="0886.php">Jeff Squyres: "Re: [hwloc-devel] rc1?"</a>
<li><strong>In reply to:</strong> <a href="0883.php">Samuel Thibault: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0891.php">Samuel Thibault: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<li><strong>Reply:</strong> <a href="0891.php">Samuel Thibault: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
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
