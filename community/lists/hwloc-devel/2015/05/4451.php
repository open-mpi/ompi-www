<?
$subject_val = "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 15:03:44 2015" -->
<!-- isoreceived="20150518190344" -->
<!-- sent="Mon, 18 May 2015 21:03:40 +0200" -->
<!-- isosent="20150518190340" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Using Hwloc in LLVM OpenMP" -->
<!-- id="555A378C.4060102_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E721F964DFCE0143863414635137A1C70E8FE895_at_CRSMSX101.amr.corp.intel.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-18 15:03:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4452.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
<li><strong>Previous message:</strong> <a href="4450.php">Peyton, Jonathan L: "[hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
<li><strong>In reply to:</strong> <a href="4450.php">Peyton, Jonathan L: "[hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4452.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
<li><strong>Reply:</strong> <a href="4452.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
<li><strong>Reply:</strong> <a href="4455.php">Peyton, Jonathan L: "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 18/05/2015 20:49, Peyton, Jonathan L a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have been developing The LLVM OpenMP runtime library project and
</span><br>
<span class="quotelev1">&gt; were hoping to incorporate the hwloc library as the primary affinity
</span><br>
<span class="quotelev1">&gt; mechanism.  In order for this to happen though,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a CMake build system would have to be created as it is now the primary
</span><br>
<span class="quotelev1">&gt; build system of both LLVM and the LLVM OpenMP runtime library.  It
</span><br>
<span class="quotelev1">&gt; offers better native Windows support (no config/compile cl hackery),
</span><br>
<span class="quotelev1">&gt; just as much
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configuration capability as the autotools at a fraction of the
</span><br>
<span class="quotelev1">&gt; effort.  It is also easier to maintain by more developers because the
</span><br>
<span class="quotelev1">&gt; CMake language is easier to learn and has superior documentation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So a couple of questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Is anyone currently working on a CMake build system for hwloc?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Would someone inside hwloc development be interested in building a
</span><br>
<span class="quotelev1">&gt; CMake build system?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) If we were to implement a quality CMake build system, would it be
</span><br>
<span class="quotelev1">&gt; accepted?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Plus, any other comments or questions are absolutely welcome.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Johnny
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hello
<br>
<p>I have spent a bit of time on CMakifing hwloc in the past, mostly for
<br>
windows support, but I didn't have much knowledge about CMake, so it
<br>
didn't go far. Somebody offered Windows vcxproj files later, so we
<br>
integrated those and I forgot about CMake. The main issue is about
<br>
periodic testing. I basically can't do it manually often enough (nightly
<br>
testing is done using Mingw only). Our vcxproj are already outdated for
<br>
this reason.
<br>
<p>So
<br>
(1) not currently as far I as know
<br>
(2) yes
<br>
(3) it won't replace autotools since we have autotools-projects
<br>
embedding hwloc. if we can have both autotools and cmake without too
<br>
much trouble, I guess it's ok
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4451/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4452.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
<li><strong>Previous message:</strong> <a href="4450.php">Peyton, Jonathan L: "[hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
<li><strong>In reply to:</strong> <a href="4450.php">Peyton, Jonathan L: "[hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4452.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
<li><strong>Reply:</strong> <a href="4452.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
<li><strong>Reply:</strong> <a href="4455.php">Peyton, Jonathan L: "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
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
