<?
$subject_val = "[hwloc-devel] doing v1.7.1rc1 soon";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 13 10:29:08 2013" -->
<!-- isoreceived="20130513142908" -->
<!-- sent="Mon, 13 May 2013 16:29:02 +0200" -->
<!-- isosent="20130513142902" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] doing v1.7.1rc1 soon" -->
<!-- id="5190F8AE.7050706_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] doing v1.7.1rc1 soon<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-13 10:29:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3739.php">Pankaj Kumar Biswas: "[hwloc-devel] geting hwloc working under Xen Hypervisor as a Linux Driver"</a>
<li><strong>Previous message:</strong> <a href="3737.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7.1rc1r5612)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I will likely release a first release candidate for hwloc 1.7.1 within
<br>
one day or two. We have several non-negligible fixes as listed in the
<br>
NEWS below. Some backports from Pavan are not listed since I am not a
<br>
fan of intrusive configure changes in a stable release.
<br>
If anybody needs anything else in v1.7.1, please let me know.
<br>
Brice
<br>
<p><p>Version 1.7.1
<br>
-------------
<br>
* Fix an failed assertion in the distance grouping code when loading
<br>
&nbsp;&nbsp;a XML that already contains some groups. Thanks to Laercio Lima Pilla
<br>
&nbsp;&nbsp;for reporting the problem.
<br>
* Remove spurious Group objects when loading XML topologies with I/O
<br>
&nbsp;&nbsp;objects and NUMA distances. Thanks to Elena Elkina for reporting the
<br>
&nbsp;&nbsp;problem and testing patches.
<br>
* Fix embedding breakage caused by libltdl and document why enabling
<br>
&nbsp;&nbsp;plugins when embedding hwloc in another project may be dangerous. See
<br>
&nbsp;&nbsp;details in documentation section Embedding hwloc in Other Software.
<br>
&nbsp;&nbsp;Thanks to Pavan Balaji for reporting the problem.
<br>
* Fix GL component build with old NVCtrl releases.
<br>
&nbsp;&nbsp;Thanks to Jirka Hladky for reporting the problem.
<br>
* Add a FAQ entry &quot;How to get useful topology information on NetBSD?&quot;
<br>
&nbsp;&nbsp;in the documentation.
<br>
* Somes fixes in the renaming code for embedding.
<br>
* Miscellaneous minor build fixes.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3739.php">Pankaj Kumar Biswas: "[hwloc-devel] geting hwloc working under Xen Hypervisor as a Linux Driver"</a>
<li><strong>Previous message:</strong> <a href="3737.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7.1rc1r5612)"</a>
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
