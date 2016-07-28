<?
$subject_val = "[hwloc-devel] Servet and hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 25 11:42:49 2010" -->
<!-- isoreceived="20100625154249" -->
<!-- sent="Fri, 25 Jun 2010 17:42:42 +0200" -->
<!-- isosent="20100625154242" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="[hwloc-devel] Servet and hwloc" -->
<!-- id="20100625154242.GA16839_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] Servet and hwloc<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-25 11:42:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1099.php">Jeff Squyres: "[hwloc-devel] new version of docs"</a>
<li><strong>Previous message:</strong> <a href="1097.php">Samuel Thibault: "Re: [hwloc-devel] xml sample output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/07/1122.php">Samuel Thibault: "Re: [hwloc-devel] Servet and hwloc"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/07/1122.php">Samuel Thibault: "Re: [hwloc-devel] Servet and hwloc"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/06/2181.php">Samuel Thibault: "Re: [hwloc-devel] Servet and hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jorge,
<br>
<p>I've just noticed Servet in the ipdps 2010 proceedings.  There
<br>
are probably interesting things to do between Servet and hwloc
<br>
<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>On one hand, servet could use hwloc to get binding implementations
<br>
on various OSes.  Indeed, Servet version 1.0 actually doesn't even
<br>
build on Debian Linux systems: you need to #define _GNU_SOURCE
<br>
before including &lt;sched.h&gt;, and then use CPU_ZERO/CPU_SET instead of
<br>
__CPU_ZERO/__CPU_SET, and these are specific to Linux of course.  Just
<br>
using hwloc for that part will provide you wide OS support.
<br>
<p>On the other hand hwloc has the following TODO item: on OSes or systems
<br>
which don't know the cache size and sharing from the hardware itself,
<br>
just find out from measures, which is exactly what Servet just does :)
<br>
<p>Ideally, Servet would be using the BSD licence but it's currently GPL.
<br>
Maybe a compromise would be to make Servet a library which some BSD
<br>
plugin of hwloc could be compiled against if the user already has Servet
<br>
installed.  That would need Servet made a library.
<br>
<p>What do you think?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1099.php">Jeff Squyres: "[hwloc-devel] new version of docs"</a>
<li><strong>Previous message:</strong> <a href="1097.php">Samuel Thibault: "Re: [hwloc-devel] xml sample output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/07/1122.php">Samuel Thibault: "Re: [hwloc-devel] Servet and hwloc"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/07/1122.php">Samuel Thibault: "Re: [hwloc-devel] Servet and hwloc"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/06/2181.php">Samuel Thibault: "Re: [hwloc-devel] Servet and hwloc"</a>
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
