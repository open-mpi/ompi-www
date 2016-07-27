<?
$subject_val = "[hwloc-devel] Missing header";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  8 14:32:07 2014" -->
<!-- isoreceived="20140908183207" -->
<!-- sent="Mon, 8 Sep 2014 11:31:35 -0700" -->
<!-- isosent="20140908183135" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[hwloc-devel] Missing header" -->
<!-- id="72B5FA6A-614A-4EA6-B38E-5E22A065D879_at_open-mpi.org" -->
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
<strong>Subject:</strong> [hwloc-devel] Missing header<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-08 14:31:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4204.php">Brice Goglin: "Re: [hwloc-devel] Missing header"</a>
<li><strong>Previous message:</strong> <a href="4202.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.9.1-3-gb35ced8)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4204.php">Brice Goglin: "Re: [hwloc-devel] Missing header"</a>
<li><strong>Reply:</strong> <a href="4204.php">Brice Goglin: "Re: [hwloc-devel] Missing header"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey guys
<br>
<p>With the Intel compilers, you get an error in 1.9.1 relating to your private/misc.h header:
<br>
<p>In file included from bitmap.c(12):
<br>
/home/common/openmpi/svn-trunk/opal/mca/hwloc/hwloc191/hwloc/include/private/misc.h(364): warning #266: function &quot;tolower&quot; declared implicitly
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char c1 = tolower(*s1), c2 = tolower(*s2);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p><p>It is missing
<br>
<p>#include &lt;ctype.h&gt;
<br>
<p><p>Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4203/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4204.php">Brice Goglin: "Re: [hwloc-devel] Missing header"</a>
<li><strong>Previous message:</strong> <a href="4202.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.9.1-3-gb35ced8)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4204.php">Brice Goglin: "Re: [hwloc-devel] Missing header"</a>
<li><strong>Reply:</strong> <a href="4204.php">Brice Goglin: "Re: [hwloc-devel] Missing header"</a>
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
