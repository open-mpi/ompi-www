<?
$subject_val = "[hwloc-devel] How to get information about hwloc objects?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  4 17:34:31 2010" -->
<!-- isoreceived="20100704213431" -->
<!-- sent="Sun, 4 Jul 2010 23:34:23 +0200" -->
<!-- isosent="20100704213423" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="[hwloc-devel] How to get information about hwloc objects?" -->
<!-- id="201007042334.23744.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> [hwloc-devel] How to get information about hwloc objects?<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-04 17:34:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1126.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Previous message:</strong> <a href="1124.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2282)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1126.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Reply:</strong> <a href="1126.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks,
<br>
<p>I need to get information about hwloc objects, particularly processor. I would 
<br>
love to get 
<br>
<p>NUMANode number
<br>
Socket number
<br>
Core number
<br>
<p>for given processor. 
<br>
<p>Currently, I'm parsing lstopo output but it's awkward:
<br>
<p>GREPLINES=$(lstopo --physical --cpuset - | wc -l)
<br>
lstopo --physical --cpuset - | grep -B${GREPLINES} &quot;PU p#1\b&quot; | grep Core | 
<br>
tail -1
<br>
<p>With first grep I will get all lines before the line with processor I'm 
<br>
interested in. 
<br>
<p>With second grep I will get information about Cores and finally I will pick up 
<br>
the last line. (So it's first line with keyword Core before the line with 
<br>
processor.)
<br>
<p>Is there a better way to do it? Something like
<br>
<p>hwloc-info proc:1 ???
<br>
<p>Or perhaps some c-api function to easily accomplish it?
<br>
<p>Thanks a lot!
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1126.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Previous message:</strong> <a href="1124.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2282)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1126.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Reply:</strong> <a href="1126.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
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
