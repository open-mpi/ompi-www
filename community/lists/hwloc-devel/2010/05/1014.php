<?
$subject_val = "[hwloc-devel] Cacheline sizes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 25 14:45:35 2010" -->
<!-- isoreceived="20100525184535" -->
<!-- sent="Tue, 25 May 2010 12:45:15 -0600" -->
<!-- isosent="20100525184515" -->
<!-- name="Wheeler, Kyle Bruce" -->
<!-- email="kbwheel_at_[hidden]" -->
<!-- subject="[hwloc-devel] Cacheline sizes" -->
<!-- id="A7C85368-8F26-4148-BECA-5ADB4D5804D5_at_sandia.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] Cacheline sizes<br>
<strong>From:</strong> Wheeler, Kyle Bruce (<em>kbwheel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-25 14:45:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1015.php">Brice Goglin: "Re: [hwloc-devel] Cacheline sizes"</a>
<li><strong>Previous message:</strong> <a href="1013.php">Jeff Squyres: "Re: [hwloc-devel] Trac"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1015.php">Brice Goglin: "Re: [hwloc-devel] Cacheline sizes"</a>
<li><strong>Reply:</strong> <a href="1015.php">Brice Goglin: "Re: [hwloc-devel] Cacheline sizes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
<p>I noticed that hwloc doesn't appear to have a way of reporting (minimum) cache line size... which is obviously useful and important for avoiding false-sharing issues. I've been hacking together a way to do it in what passes for a cross-platform method. My code is currently in qthreads (<a href="http://www.cs.sandia.gov/qthreads/">http://www.cs.sandia.gov/qthreads/</a>), in the cacheline.c file. Would this be something that the hwloc developers would be interested in integrating into hwloc?
<br>
<pre>
-- 
Kyle Wheeler, PhD
kbwheel_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1015.php">Brice Goglin: "Re: [hwloc-devel] Cacheline sizes"</a>
<li><strong>Previous message:</strong> <a href="1013.php">Jeff Squyres: "Re: [hwloc-devel] Trac"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1015.php">Brice Goglin: "Re: [hwloc-devel] Cacheline sizes"</a>
<li><strong>Reply:</strong> <a href="1015.php">Brice Goglin: "Re: [hwloc-devel] Cacheline sizes"</a>
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
