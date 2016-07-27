<?
$subject_val = "[hwloc-devel] Warnings in hwloc-1.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 30 22:06:56 2012" -->
<!-- isoreceived="20120331020656" -->
<!-- sent="Fri, 30 Mar 2012 21:06:47 -0500" -->
<!-- isosent="20120331020647" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="[hwloc-devel] Warnings in hwloc-1.4.1" -->
<!-- id="4F7666B7.4010502_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> [hwloc-devel] Warnings in hwloc-1.4.1<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-30 22:06:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3006.php">Brice Goglin: "Re: [hwloc-devel] Warnings in hwloc-1.4.1"</a>
<li><strong>Previous message:</strong> <a href="3004.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.2a1r4423)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3006.php">Brice Goglin: "Re: [hwloc-devel] Warnings in hwloc-1.4.1"</a>
<li><strong>Reply:</strong> <a href="3006.php">Brice Goglin: "Re: [hwloc-devel] Warnings in hwloc-1.4.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>The hwloc code seems to shadow some previously defined variables.  These 
<br>
warnings show up when configured with CFLAGS=-Wshadow with gcc.  Here's 
<br>
a patch to fix these warnings:
<br>
<p><a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/9656">https://trac.mcs.anl.gov/projects/mpich2/changeset/9656</a>
<br>
<p>&nbsp;&nbsp;-- Pavan
<br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3006.php">Brice Goglin: "Re: [hwloc-devel] Warnings in hwloc-1.4.1"</a>
<li><strong>Previous message:</strong> <a href="3004.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.2a1r4423)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3006.php">Brice Goglin: "Re: [hwloc-devel] Warnings in hwloc-1.4.1"</a>
<li><strong>Reply:</strong> <a href="3006.php">Brice Goglin: "Re: [hwloc-devel] Warnings in hwloc-1.4.1"</a>
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
