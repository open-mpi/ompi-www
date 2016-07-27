<?
$subject_val = "Re: [hwloc-devel] dynamic cpuset_t?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 12:22:07 2009" -->
<!-- isoreceived="20091007162207" -->
<!-- sent="Wed, 07 Oct 2009 18:20:52 +0200" -->
<!-- isosent="20091007162052" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] dynamic cpuset_t?" -->
<!-- id="4ACCBFE4.6040804_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CF816593-DC96-4AE3-A7BD-C67515CD463C_at_gmx.ch" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] dynamic cpuset_t?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-07 12:20:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0153.php">Jeff Squyres: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Previous message:</strong> <a href="0151.php">Fawzi Mohamed: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>In reply to:</strong> <a href="0151.php">Fawzi Mohamed: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0153.php">Jeff Squyres: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Reply:</strong> <a href="0153.php">Jeff Squyres: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fawzi Mohamed wrote:
<br>
<span class="quotelev1">&gt; One comment, I see that you have a
</span><br>
<span class="quotelev1">&gt;     hwloc_cpuset_copy (which I would have called  duplicate)
</span><br>
<span class="quotelev1">&gt; but copy in the sense of assignment is not really possible (i.e.
</span><br>
<span class="quotelev1">&gt; reusing an existing allocated cpuset, and initialize it with the
</span><br>
<span class="quotelev1">&gt; content of another.
</span><br>
<p>I need to think about this.
<br>
<p><p><span class="quotelev1">&gt; By the way why you declare a function just before defining it? Does it
</span><br>
<span class="quotelev1">&gt; do something?
</span><br>
<p>I didn't include the public cpuset.h in cpuset.c to simplify things (for
<br>
instance to avoid the conflict between the public typedef and the
<br>
private one). But some compilers (we have -Wmissing-prototypes) complain
<br>
if you don't have a forward declaration (usually in the header file).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0153.php">Jeff Squyres: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Previous message:</strong> <a href="0151.php">Fawzi Mohamed: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>In reply to:</strong> <a href="0151.php">Fawzi Mohamed: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0153.php">Jeff Squyres: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Reply:</strong> <a href="0153.php">Jeff Squyres: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
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
