<?
$subject_val = "Re: [hwloc-devel] lstopo pdf weirdness";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 30 06:18:21 2010" -->
<!-- isoreceived="20100830101821" -->
<!-- sent="Mon, 30 Aug 2010 06:18:18 -0400" -->
<!-- isosent="20100830101818" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] lstopo pdf weirdness" -->
<!-- id="3A1FD12B-8397-4058-A476-CCEC726969EC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100829213751.GU5158_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] lstopo pdf weirdness<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-30 06:18:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1285.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2429)"</a>
<li><strong>Previous message:</strong> <a href="1283.php">Samuel Thibault: "Re: [hwloc-devel] lstopo pdf weirdness"</a>
<li><strong>In reply to:</strong> <a href="1283.php">Samuel Thibault: "Re: [hwloc-devel] lstopo pdf weirdness"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 29, 2010, at 5:37 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Note that the PDF image is missing some characters here and there.  E.g., &quot;NUMANode&quot; on the PNG shows up as &quot;NU  ANode&quot; on the PDF.  &quot;24MB&quot; on the PNG is &quot;24 B&quot; on the PDF.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any idea what causes this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd tend to think cairo is guilty, like a fault in font processing.
</span><br>
<span class="quotelev1">&gt; That might also be some buffer overrun which ends up right in the middle
</span><br>
<span class="quotelev1">&gt; of the text string that utils/lstopo-cairo.c gives to cairo_show_text.
</span><br>
<p>Actually -- this is even weirder: I think it's a bug in OS X Preview.  If I view the same PDF with Acorbat reader, it all looks fine.
<br>
<p>I submitted a bug to bugreporter.apple.com.
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
<li><strong>Next message:</strong> <a href="1285.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2429)"</a>
<li><strong>Previous message:</strong> <a href="1283.php">Samuel Thibault: "Re: [hwloc-devel] lstopo pdf weirdness"</a>
<li><strong>In reply to:</strong> <a href="1283.php">Samuel Thibault: "Re: [hwloc-devel] lstopo pdf weirdness"</a>
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
