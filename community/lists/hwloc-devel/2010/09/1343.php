<?
$subject_val = "Re: [hwloc-devel] roadmap";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 24 07:30:32 2010" -->
<!-- isoreceived="20100924113032" -->
<!-- sent="Fri, 24 Sep 2010 13:30:26 +0200" -->
<!-- isosent="20100924113026" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] roadmap" -->
<!-- id="4C9C8BD2.4020900_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100922145219.GE23167_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] roadmap<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-24 07:30:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1344.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Previous message:</strong> <a href="1342.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2492)"</a>
<li><strong>In reply to:</strong> <a href="1340.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1344.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Reply:</strong> <a href="1344.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's a proposal for the new renamed cpuset API. Non trivial changes
<br>
include:
<br>
hwloc_cpuset_from_string -&gt; hwloc_bitmap_sscanf
<br>
hwloc_cpuset_cpu -&gt; hwloc_bitmap_setonly
<br>
hwloc_bitmap_all_but_cpu -&gt; hwloc_bitmap_allbut
<br>
<p>My plan would be to:
<br>
* commit the attached file as hwloc/bitmap.h
<br>
* drop everything from hwloc/cpuset.h, add a big deprecation warning in
<br>
the header, make it include bitmap.h, and add typedef/#define for API
<br>
backward compat
<br>
* port all the internals to the new API
<br>
* only #include bitmap.h internally
<br>
* add ABI aliases at the end of src/cpuset.c (don't know if it's worth
<br>
renaming this file)
<br>
<p>By the way, what's the proper way to do the latter?
<br>
#pragma weak hwloc_cpuset_foo = hwloc_bitmap_foo ?
<br>
use __hwloc_attribute_alias instead ?
<br>
<p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-chdr attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1343/cpuset.h">cpuset.h</a>
</ul>
<!-- attachment="cpuset.h" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1344.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Previous message:</strong> <a href="1342.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2492)"</a>
<li><strong>In reply to:</strong> <a href="1340.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1344.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Reply:</strong> <a href="1344.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
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
