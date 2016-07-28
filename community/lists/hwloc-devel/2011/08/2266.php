<?
$subject_val = "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 11:03:24 2011" -->
<!-- isoreceived="20110804150324" -->
<!-- sent="Thu, 4 Aug 2011 17:03:19 +0200" -->
<!-- isosent="20110804150319" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?" -->
<!-- id="20110804150319.GH4409_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="945733816.1946175.1312469899254.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2011-08-04 11:03:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2267.php">Jeff Squyres: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Previous message:</strong> <a href="2265.php">Brice Goglin: "[hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Maybe in reply to:</strong> <a href="2265.php">Brice Goglin: "[hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2270.php">Brice Goglin: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Reply:</strong> <a href="2270.php">Brice Goglin: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Thu 04 Aug 2011 16:58:19 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; While playing with static hwloc libraries and binaries [1], I had to
</span><br>
<span class="quotelev1">&gt; manually add -lpthread to LIBS to get the fully-static binaries to link
</span><br>
<span class="quotelev1">&gt; properly.
</span><br>
<p>What was the missing reference?
<br>
<p><span class="quotelev1">&gt; We use some pthread functions, so is there a good reason not
</span><br>
<span class="quotelev1">&gt; to put -lpthread in LIBS? (and HWLOC_REQUIRES?)
</span><br>
<p>We already use weak references to avoid having to do this.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2267.php">Jeff Squyres: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Previous message:</strong> <a href="2265.php">Brice Goglin: "[hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Maybe in reply to:</strong> <a href="2265.php">Brice Goglin: "[hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2270.php">Brice Goglin: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Reply:</strong> <a href="2270.php">Brice Goglin: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
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
