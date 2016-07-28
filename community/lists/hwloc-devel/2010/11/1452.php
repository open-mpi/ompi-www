<?
$subject_val = "Re: [hwloc-devel] 1.1 .so version number";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  9 13:55:54 2010" -->
<!-- isoreceived="20101109185554" -->
<!-- sent="Tue, 9 Nov 2010 13:55:47 -0500" -->
<!-- isosent="20101109185547" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.1 .so version number" -->
<!-- id="AE308FCC-3B37-4A01-BC3C-A183C6E4BA64_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20101109174954.GM5785_at_const.umh.ac.be" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.1 .so version number<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-09 13:55:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1453.php">Samuel Thibault: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>Previous message:</strong> <a href="1451.php">Samuel Thibault: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>In reply to:</strong> <a href="1451.php">Samuel Thibault: "Re: [hwloc-devel] 1.1 .so version number"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1455.php">Brice Goglin: "Re: [hwloc-devel] 1.1 .so version number"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 9, 2010, at 12:49 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt;&gt; But the object structure has been extended, cache attributes were
</span><br>
<span class="quotelev2">&gt;&gt; extended,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Extension is not a problem, provided that offsets are still the same
</span><br>
<span class="quotelev1">&gt; (i.e. the old C structure appears first in the new C structure)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; machine attributes were removed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is not a problem here.  The attr field of hwloc_obj will be NULL,
</span><br>
<span class="quotelev1">&gt; that's all, the application won't ever read it anyway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't see anything else that we removed (that's why you have added
</span><br>
<span class="quotelev1">&gt; cpuset aliases actually).
</span><br>
<p>Could you try it?  I.e.:
<br>
<p>- install 1.0.2 (or, better: 1.0.3rc)
<br>
- compile and run a trivial hwloc app against 1.0.x
<br>
- download and extract 1.1rc2
<br>
- change VERSION to be 1:0:1
<br>
- build and install 1.1rc2 over the 1.0.x install
<br>
- run the same trivial hwloc app against the new library without recompiling/relinking it
<br>
<p>Does it work?
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
<li><strong>Next message:</strong> <a href="1453.php">Samuel Thibault: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>Previous message:</strong> <a href="1451.php">Samuel Thibault: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>In reply to:</strong> <a href="1451.php">Samuel Thibault: "Re: [hwloc-devel] 1.1 .so version number"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1455.php">Brice Goglin: "Re: [hwloc-devel] 1.1 .so version number"</a>
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
