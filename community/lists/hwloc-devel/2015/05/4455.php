<?
$subject_val = "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 21 16:51:21 2015" -->
<!-- isoreceived="20150521205121" -->
<!-- sent="Thu, 21 May 2015 20:51:17 +0000" -->
<!-- isosent="20150521205117" -->
<!-- name="Peyton, Jonathan L" -->
<!-- email="jonathan.l.peyton_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Using Hwloc in LLVM OpenMP" -->
<!-- id="E721F964DFCE0143863414635137A1C70E9035CC_at_CRSMSX101.amr.corp.intel.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Peyton, Jonathan L (<em>jonathan.l.peyton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-21 16:51:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4456.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-580-g2e29156)"</a>
<li><strong>Previous message:</strong> <a href="4454.php">Brice Goglin: "[hwloc-devel] v1.11 coming soon"</a>
<li><strong>In reply to:</strong> <a href="4451.php">Brice Goglin: "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is it alright if I can have the current CMake work if you still have it?
<br>
<p>-- Johnny
<br>
<p>From: Brice Goglin [mailto:Brice.Goglin_at_[hidden]]
<br>
Sent: Monday, May 18, 2015 2:04 PM
<br>
To: Peyton, Jonathan L
<br>
Cc: Hardware locality development list; Cownie, James H; Wilmarth, Terry L
<br>
Subject: Re: [hwloc-devel] Using Hwloc in LLVM OpenMP
<br>
<p>Le 18/05/2015 20:49, Peyton, Jonathan L a &#233;crit :
<br>
Hello Everyone,
<br>
<p>We have been developing The LLVM OpenMP runtime library project and were hoping to incorporate the hwloc library as the primary affinity mechanism.  In order for this to happen though,
<br>
a CMake build system would have to be created as it is now the primary build system of both LLVM and the LLVM OpenMP runtime library.  It offers better native Windows support (no config/compile cl hackery), just as much
<br>
configuration capability as the autotools at a fraction of the effort.  It is also easier to maintain by more developers because the CMake language is easier to learn and has superior documentation.
<br>
<p>So a couple of questions:
<br>
1) Is anyone currently working on a CMake build system for hwloc?
<br>
2) Would someone inside hwloc development be interested in building a CMake build system?
<br>
3) If we were to implement a quality CMake build system, would it be accepted?
<br>
<p>Plus, any other comments or questions are absolutely welcome.
<br>
<p>-- Johnny
<br>
<p><p>Hello
<br>
<p>I have spent a bit of time on CMakifing hwloc in the past, mostly for windows support, but I didn't have much knowledge about CMake, so it didn't go far. Somebody offered Windows vcxproj files later, so we integrated those and I forgot about CMake. The main issue is about periodic testing. I basically can't do it manually often enough (nightly testing is done using Mingw only). Our vcxproj are already outdated for this reason.
<br>
<p>So
<br>
(1) not currently as far I as know
<br>
(2) yes
<br>
(3) it won't replace autotools since we have autotools-projects embedding hwloc. if we can have both autotools and cmake without too much trouble, I guess it's ok
<br>
<p>Brice
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4455/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4456.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-580-g2e29156)"</a>
<li><strong>Previous message:</strong> <a href="4454.php">Brice Goglin: "[hwloc-devel] v1.11 coming soon"</a>
<li><strong>In reply to:</strong> <a href="4451.php">Brice Goglin: "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
<!-- nextthread="start" -->
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
