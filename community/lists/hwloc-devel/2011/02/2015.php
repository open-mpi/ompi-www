<?
$subject_val = "Re: [hwloc-devel] multiple simultaneous topology inits?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 16:04:49 2011" -->
<!-- isoreceived="20110228210449" -->
<!-- sent="Mon, 28 Feb 2011 16:04:44 -0500" -->
<!-- isosent="20110228210444" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] multiple simultaneous topology inits?" -->
<!-- id="CAC37212-6BF1-46F8-BC39-3F254FA24AD1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D6C0B0C.3060307_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] multiple simultaneous topology inits?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-28 16:04:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2016.php">Samuel Thibault: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Previous message:</strong> <a href="2014.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="2013.php">Guy Streeter: "[hwloc-devel] multiple simultaneous topology inits?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2017.php">Brice Goglin: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Reply:</strong> <a href="2017.php">Brice Goglin: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 28, 2011, at 3:52 PM, Guy Streeter wrote:
<br>
<p><span class="quotelev1">&gt; I was considering the design of an administration tool in python, and my original idea was to have each module that needs the topology object create its own. This means that different parts of the same program (but possibly in different threads) would call init and load on their own topology structure, and use that structure in their hwloc routines calls.
</span><br>
<p>If you're only doing this a few times, it's probably fine.
<br>
<p>That being said, someone cited on this list a long time ago that running the hwloc detection on very large machines (e.g., SGI machines with 1000+ cores) takes on the order of seconds (because it traverses /sys, etc.).  So if you want your tool to be used on machines like that, then it might be better to do the discovery once and share that data among your threads.
<br>
<p>My own bias is that if all the data is going to be read-only, discover once and share the data among threads.  Depending on your layers of abstraction, this may or may not be easy to do.
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
<li><strong>Next message:</strong> <a href="2016.php">Samuel Thibault: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Previous message:</strong> <a href="2014.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="2013.php">Guy Streeter: "[hwloc-devel] multiple simultaneous topology inits?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2017.php">Brice Goglin: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Reply:</strong> <a href="2017.php">Brice Goglin: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
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
