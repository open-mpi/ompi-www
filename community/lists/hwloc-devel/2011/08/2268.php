<?
$subject_val = "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 11:13:08 2011" -->
<!-- isoreceived="20110804151308" -->
<!-- sent="Thu, 4 Aug 2011 17:13:03 +0200" -->
<!-- isosent="20110804151303" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?" -->
<!-- id="20110804151303.GI4409_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1255185211.1946297.1312470465582.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-04 11:13:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2269.php">Jeff Squyres: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Previous message:</strong> <a href="2267.php">Jeff Squyres: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Maybe in reply to:</strong> <a href="2265.php">Brice Goglin: "[hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2269.php">Jeff Squyres: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Reply:</strong> <a href="2269.php">Jeff Squyres: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Thu 04 Aug 2011 17:07:45 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Aug 4, 2011, at 10:57 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt; &gt; While playing with static hwloc libraries and binaries [1], I had to
</span><br>
<span class="quotelev2">&gt; &gt; manually add -lpthread to LIBS to get the fully-static binaries to link
</span><br>
<span class="quotelev2">&gt; &gt; properly. We use some pthread functions, so is there a good reason not
</span><br>
<span class="quotelev2">&gt; &gt; to put -lpthread in LIBS? (and HWLOC_REQUIRES?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Where do we use the pthread functions -- in the libhwloc core, or just in the utils?
</span><br>
<p>In the core, but only if they are linked-in, through weak references.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2269.php">Jeff Squyres: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Previous message:</strong> <a href="2267.php">Jeff Squyres: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Maybe in reply to:</strong> <a href="2265.php">Brice Goglin: "[hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2269.php">Jeff Squyres: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Reply:</strong> <a href="2269.php">Jeff Squyres: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
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
