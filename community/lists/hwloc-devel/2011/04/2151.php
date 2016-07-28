<?
$subject_val = "Re: [hwloc-devel] asymmetric trees";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 21:16:53 2011" -->
<!-- isoreceived="20110415011653" -->
<!-- sent="Thu, 14 Apr 2011 21:16:34 -0400" -->
<!-- isosent="20110415011634" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] asymmetric trees" -->
<!-- id="08C650B6-335C-4E4B-B763-E660B708F894_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="169ACF91-1666-4A5A-BE2D-E6F9853C4694_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] asymmetric trees<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 21:16:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2152.php">Brice Goglin: "Re: [hwloc-devel] asymmetric trees"</a>
<li><strong>Previous message:</strong> <a href="2150.php">Jeff Squyres: "[hwloc-devel] asymmetric trees"</a>
<li><strong>In reply to:</strong> <a href="2150.php">Jeff Squyres: "[hwloc-devel] asymmetric trees"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2152.php">Brice Goglin: "Re: [hwloc-devel] asymmetric trees"</a>
<li><strong>Reply:</strong> <a href="2152.php">Brice Goglin: "Re: [hwloc-devel] asymmetric trees"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I get it now -- cache is probably about the only object where this could occur, right?
<br>
<p><p>On Apr 14, 2011, at 9:08 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On the subject of asymmetric trees, I see the description of hwloc_type_get_depth() in hwloc.h:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /** \brief Returns the depth of objects of type \p type.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * ...snipped...
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * If some objects of the given type exist in different levels, for instance
</span><br>
<span class="quotelev1">&gt; * L1 and L2 caches, the function returns HWLOC_TYPE_DEPTH_MULTIPLE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am I reading the FAQ wrong?  I thought the figure on page 21 (US letter) indicated that, for example, the depth of CORE objects would always be the same, even though one of them doesn't have the same caches as its siblings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="2152.php">Brice Goglin: "Re: [hwloc-devel] asymmetric trees"</a>
<li><strong>Previous message:</strong> <a href="2150.php">Jeff Squyres: "[hwloc-devel] asymmetric trees"</a>
<li><strong>In reply to:</strong> <a href="2150.php">Jeff Squyres: "[hwloc-devel] asymmetric trees"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2152.php">Brice Goglin: "Re: [hwloc-devel] asymmetric trees"</a>
<li><strong>Reply:</strong> <a href="2152.php">Brice Goglin: "Re: [hwloc-devel] asymmetric trees"</a>
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
