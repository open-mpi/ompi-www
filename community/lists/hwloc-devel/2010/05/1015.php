<?
$subject_val = "Re: [hwloc-devel] Cacheline sizes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 25 15:00:37 2010" -->
<!-- isoreceived="20100525190037" -->
<!-- sent="Tue, 25 May 2010 21:00:31 +0200" -->
<!-- isosent="20100525190031" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Cacheline sizes" -->
<!-- id="4BFC1E4F.60309_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A7C85368-8F26-4148-BECA-5ADB4D5804D5_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Cacheline sizes<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-25 15:00:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1016.php">Wheeler, Kyle Bruce: "Re: [hwloc-devel] Cacheline sizes"</a>
<li><strong>Previous message:</strong> <a href="1014.php">Wheeler, Kyle Bruce: "[hwloc-devel] Cacheline sizes"</a>
<li><strong>In reply to:</strong> <a href="1014.php">Wheeler, Kyle Bruce: "[hwloc-devel] Cacheline sizes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1016.php">Wheeler, Kyle Bruce: "Re: [hwloc-devel] Cacheline sizes"</a>
<li><strong>Reply:</strong> <a href="1016.php">Wheeler, Kyle Bruce: "Re: [hwloc-devel] Cacheline sizes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 25/05/2010 20:45, Wheeler, Kyle Bruce wrote:
<br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I noticed that hwloc doesn't appear to have a way of reporting (minimum) cache line size... which is obviously useful and important for avoiding false-sharing issues. I've been hacking together a way to do it in what passes for a cross-platform method. My code is currently in qthreads (<a href="http://www.cs.sandia.gov/qthreads/">http://www.cs.sandia.gov/qthreads/</a>), in the cacheline.c file. Would this be something that the hwloc developers would be interested in integrating into hwloc?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Numerous ideas like this were proposed and we're not sure where to stop.
<br>
If we start doing this, people will ask for the processor frequency, the
<br>
number of floating point units per core, the associativity of the cache,
<br>
the type of memory, ... lots of things that are not really related to
<br>
topology but may be useful to some applications. Cache line size isn't
<br>
that bad, but it's borderline, so I don't know if we want it. There are
<br>
many other specific tools to gather such random hardware information,
<br>
merging all of them inside hwloc wouldn't be good.
<br>
<p>Talking about caches, one thing we need to think about is Instruction
<br>
caches (we only gather Data and Unified caches on Linux so far).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1016.php">Wheeler, Kyle Bruce: "Re: [hwloc-devel] Cacheline sizes"</a>
<li><strong>Previous message:</strong> <a href="1014.php">Wheeler, Kyle Bruce: "[hwloc-devel] Cacheline sizes"</a>
<li><strong>In reply to:</strong> <a href="1014.php">Wheeler, Kyle Bruce: "[hwloc-devel] Cacheline sizes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1016.php">Wheeler, Kyle Bruce: "Re: [hwloc-devel] Cacheline sizes"</a>
<li><strong>Reply:</strong> <a href="1016.php">Wheeler, Kyle Bruce: "Re: [hwloc-devel] Cacheline sizes"</a>
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
