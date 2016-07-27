<?
$subject_val = "Re: [hwloc-devel] merging plugins?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 24 19:42:16 2012" -->
<!-- isoreceived="20120924234216" -->
<!-- sent="Tue, 25 Sep 2012 01:42:09 +0200" -->
<!-- isosent="20120924234209" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] merging plugins?" -->
<!-- id="20120924234209.GR10728_at_type.hotspot.internet-for-guests.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5060BC97.3000502_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] merging plugins?<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-24 19:42:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3289.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3287.php">Brice Goglin: "[hwloc-devel] merging plugins?"</a>
<li><strong>In reply to:</strong> <a href="3287.php">Brice Goglin: "[hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3289.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3289.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Brice Goglin, le Mon 24 Sep 2012 22:04:14 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; 1) A rework of the backend infrastructure to make the core much more
</span><br>
<span class="quotelev1">&gt; readable (basically all changes in *.[ch] files).
</span><br>
<p>That looks nicer indeed.
<br>
<p><span class="quotelev1">&gt; 2) Plugin support
</span><br>
<p>One thing that doesn't seem implemented yet is to choose another OS core
<br>
plugin, e.g. to use x86 detection on Linux instead of /proc or /sys
<br>
detection.  This will be the same kind of thing with likwid / servet
<br>
-based OS core plugins.  I have gotten the x86 detection code to get
<br>
enabled with the attached code, which should be reproducable with other
<br>
OSes which support CPU binding.  How does it look like?
<br>
<p>Samuel
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3288/patch">patch</a>
</ul>
<!-- attachment="patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3289.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3287.php">Brice Goglin: "[hwloc-devel] merging plugins?"</a>
<li><strong>In reply to:</strong> <a href="3287.php">Brice Goglin: "[hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3289.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3289.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
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
