<?
$subject_val = "[hwloc-devel] Strange difference";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 12 14:37:38 2013" -->
<!-- isoreceived="20131012183738" -->
<!-- sent="Sat, 12 Oct 2013 11:37:35 -0700" -->
<!-- isosent="20131012183735" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[hwloc-devel] Strange difference" -->
<!-- id="68AD0255-4ED7-4C2B-8C01-A98D5143B37F_at_open-mpi.org" -->
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
<strong>Subject:</strong> [hwloc-devel] Strange difference<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-12 14:37:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3937.php">Brice Goglin: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Previous message:</strong> <a href="3935.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.7.2-8-g708cc2c)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/03/0842.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/03/0842.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Reply:</strong> <a href="3937.php">Brice Goglin: "Re: [hwloc-devel] Strange difference"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo guys
<br>
<p>I was doing some work that involved traversing the hwloc topo tree, and encountered the following odd discrepancy.
<br>
<p>hwloc_topology_get_depth  =&gt; returns &quot;unsigned&quot;
<br>
<p>hwloc_get_type_depth  =&gt; returns &quot;int&quot;
<br>
<p>Why the difference? Makes it hard sometimes to avoid the &quot;comparison between unsigned and signed&quot; warnings when using these functions.
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3937.php">Brice Goglin: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Previous message:</strong> <a href="3935.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.7.2-8-g708cc2c)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/03/0842.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/03/0842.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Reply:</strong> <a href="3937.php">Brice Goglin: "Re: [hwloc-devel] Strange difference"</a>
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
