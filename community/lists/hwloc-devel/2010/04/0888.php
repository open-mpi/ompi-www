<?
$subject_val = "Re: [hwloc-devel] rc1?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 10:54:25 2010" -->
<!-- isoreceived="20100406145425" -->
<!-- sent="Tue, 06 Apr 2010 16:54:20 +0200" -->
<!-- isosent="20100406145420" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] rc1?" -->
<!-- id="4BBB4B1C.8010002_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="21A588D7-AD2D-407B-8553-40665B18B2F5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] rc1?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 10:54:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0889.php">Jeff Squyres: "Re: [hwloc-devel] rc1?"</a>
<li><strong>Previous message:</strong> <a href="0887.php">Jeff Squyres: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<li><strong>In reply to:</strong> <a href="0886.php">Jeff Squyres: "Re: [hwloc-devel] rc1?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0889.php">Jeff Squyres: "Re: [hwloc-devel] rc1?"</a>
<li><strong>Reply:</strong> <a href="0889.php">Jeff Squyres: "Re: [hwloc-devel] rc1?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Apr 3, 2010, at 6:32 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; By the way, instead of delaying the release while we discuss this and
</span><br>
<span class="quotelev2">&gt;&gt; wait for your fix, we could mark hwloc_topology_insert_misc*() as
</span><br>
<span class="quotelev2">&gt;&gt; experimental or even undocument it for now, release 1.0-rc1, and bring
</span><br>
<span class="quotelev2">&gt;&gt; it back later if/when it's ready.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, I was out yesterday.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this still your feeling -- want me to roll rc1?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is everything else set, ABI-wise?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p>Just a very minor question: should cpuset_first/last/next/weight return
<br>
unsigned instead of int ? They may return -1 in some corner cases, and
<br>
even more often in the dynamic-cpuset branch. It would be (unsigned) -1
<br>
then, which isn't so bad when we mean &quot;infinite&quot;.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0889.php">Jeff Squyres: "Re: [hwloc-devel] rc1?"</a>
<li><strong>Previous message:</strong> <a href="0887.php">Jeff Squyres: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<li><strong>In reply to:</strong> <a href="0886.php">Jeff Squyres: "Re: [hwloc-devel] rc1?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0889.php">Jeff Squyres: "Re: [hwloc-devel] rc1?"</a>
<li><strong>Reply:</strong> <a href="0889.php">Jeff Squyres: "Re: [hwloc-devel] rc1?"</a>
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
