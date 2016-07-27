<?
$subject_val = "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 15:24:27 2015" -->
<!-- isoreceived="20150518192427" -->
<!-- sent="Mon, 18 May 2015 19:24:25 +0000" -->
<!-- isosent="20150518192425" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Using Hwloc in LLVM OpenMP" -->
<!-- id="E95D5248-3617-4281-9BC4-56ED5342C983_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="555A378C.4060102_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Using Hwloc in LLVM OpenMP<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-18 15:24:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4453.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-574-gc6fa7b7)"</a>
<li><strong>Previous message:</strong> <a href="4451.php">Brice Goglin: "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
<li><strong>In reply to:</strong> <a href="4451.php">Brice Goglin: "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4455.php">Peyton, Jonathan L: "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 18, 2015, at 3:03 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (3) it won't replace autotools since we have autotools-projects embedding hwloc. if we can have both autotools and cmake without too much trouble, I guess it's ok
</span><br>
<p>Since cmake likely won't be the main configure/build system for the core developers, it is going to be a challenge to keep the cmake build system up-to-date as changes are made in the autotools-based build system.
<br>
<p>(I speak from experience: we had a cmake build system in Open MPI for a while for Windows support that was constructed / maintained along side the autotools configure/build system, and it was continually out of date :-( )
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4453.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-574-gc6fa7b7)"</a>
<li><strong>Previous message:</strong> <a href="4451.php">Brice Goglin: "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
<li><strong>In reply to:</strong> <a href="4451.php">Brice Goglin: "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4455.php">Peyton, Jonathan L: "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
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
