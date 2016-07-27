<?
$subject_val = "[hwloc-devel] Using Hwloc in LLVM OpenMP";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 14:50:04 2015" -->
<!-- isoreceived="20150518185004" -->
<!-- sent="Mon, 18 May 2015 18:49:43 +0000" -->
<!-- isosent="20150518184943" -->
<!-- name="Peyton, Jonathan L" -->
<!-- email="jonathan.l.peyton_at_[hidden]" -->
<!-- subject="[hwloc-devel] Using Hwloc in LLVM OpenMP" -->
<!-- id="E721F964DFCE0143863414635137A1C70E8FE895_at_CRSMSX101.amr.corp.intel.com" -->
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
<strong>Subject:</strong> [hwloc-devel] Using Hwloc in LLVM OpenMP<br>
<strong>From:</strong> Peyton, Jonathan L (<em>jonathan.l.peyton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-18 14:49:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4451.php">Brice Goglin: "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
<li><strong>Previous message:</strong> <a href="4449.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.10.1-30-gb3887be)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4451.php">Brice Goglin: "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
<li><strong>Reply:</strong> <a href="4451.php">Brice Goglin: "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4450/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4451.php">Brice Goglin: "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
<li><strong>Previous message:</strong> <a href="4449.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.10.1-30-gb3887be)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4451.php">Brice Goglin: "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
<li><strong>Reply:</strong> <a href="4451.php">Brice Goglin: "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
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
