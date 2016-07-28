<?
$subject_val = "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 11:07:24 2011" -->
<!-- isoreceived="20110804150724" -->
<!-- sent="Thu, 4 Aug 2011 11:07:19 -0400" -->
<!-- isosent="20110804150719" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?" -->
<!-- id="A0022410-BEC3-401E-9CCD-18576B64E2D5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E3AB373.1070204_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-04 11:07:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2268.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Previous message:</strong> <a href="2266.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>In reply to:</strong> <a href="2265.php">Brice Goglin: "[hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2268.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 4, 2011, at 10:57 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; While playing with static hwloc libraries and binaries [1], I had to
</span><br>
<span class="quotelev1">&gt; manually add -lpthread to LIBS to get the fully-static binaries to link
</span><br>
<span class="quotelev1">&gt; properly. We use some pthread functions, so is there a good reason not
</span><br>
<span class="quotelev1">&gt; to put -lpthread in LIBS? (and HWLOC_REQUIRES?)
</span><br>
<p>Where do we use the pthread functions -- in the libhwloc core, or just in the utils?
<br>
<p>If in the core:
<br>
- add AC_CHECK_FUNC for pthread_create (or whatever) in the main m4
<br>
- fail configure if AC_CHECK_FUNC fails
<br>
- add -lpthread to LIBS
<br>
<p>If in the utils:
<br>
- add AC_CHECK_FUNC for pthread_create in the utils setup m4
<br>
- might want to fail configure if it fails (because the utils clearly can't be built)
<br>
- add -lpthread in the relevant Makefile.am's -- it shouldn't be added to the overall LIBS
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
<li><strong>Next message:</strong> <a href="2268.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Previous message:</strong> <a href="2266.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>In reply to:</strong> <a href="2265.php">Brice Goglin: "[hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2268.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
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
