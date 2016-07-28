<?
$subject_val = "[hwloc-devel] set_synthetic documentation error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  1 15:56:01 2011" -->
<!-- isoreceived="20110401195601" -->
<!-- sent="Fri, 01 Apr 2011 14:55:55 -0500" -->
<!-- isosent="20110401195555" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="[hwloc-devel] set_synthetic documentation error" -->
<!-- id="4D962DCB.8040503_at_redhat.com" -->
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
<strong>Subject:</strong> [hwloc-devel] set_synthetic documentation error<br>
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-01 15:55:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2086.php">Brice Goglin: "Re: [hwloc-devel] set_synthetic documentation error"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/03/2084.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2rc1r3348)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2086.php">Brice Goglin: "Re: [hwloc-devel] set_synthetic documentation error"</a>
<li><strong>Reply:</strong> <a href="2086.php">Brice Goglin: "Re: [hwloc-devel] set_synthetic documentation error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The man page and the online documentation for hwloc_topology_set_synthetic() 
<br>
both say that it takes a comma-separated list as input. It appears to take a 
<br>
space-separated list instead.
<br>
Also, the documentation does not indicate what the return value means. When 
<br>
the input description cannot be parsed, the routine returns -1 and does not 
<br>
set errno.
<br>
<p>thanks,
<br>
--Guy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2086.php">Brice Goglin: "Re: [hwloc-devel] set_synthetic documentation error"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/03/2084.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2rc1r3348)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2086.php">Brice Goglin: "Re: [hwloc-devel] set_synthetic documentation error"</a>
<li><strong>Reply:</strong> <a href="2086.php">Brice Goglin: "Re: [hwloc-devel] set_synthetic documentation error"</a>
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
