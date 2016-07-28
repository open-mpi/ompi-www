<?
$subject_val = "[hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  9 17:04:58 2015" -->
<!-- isoreceived="20151009210458" -->
<!-- sent="Fri, 9 Oct 2015 16:04:53 -0500" -->
<!-- isosent="20151009210453" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="[hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace" -->
<!-- id="56182BF5.5020109_at_redhat.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace<br>
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-09 17:04:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4628.php">Brice Goglin: "Re: [hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace"</a>
<li><strong>Previous message:</strong> <a href="4626.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.11.0-88-gcc5b369)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4628.php">Brice Goglin: "Re: [hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace"</a>
<li><strong>Reply:</strong> <a href="4628.php">Brice Goglin: "Re: [hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am not able explain why this doesn't fail everywhere. If
<br>
HWLOC_PLUGINS_VERBOSE is not set, atoi() gets called with a NULL pointer, and
<br>
the behavior in that case is undocumented.
<br>
<p>--Guy
<br>
<p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4627/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4628.php">Brice Goglin: "Re: [hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace"</a>
<li><strong>Previous message:</strong> <a href="4626.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.11.0-88-gcc5b369)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4628.php">Brice Goglin: "Re: [hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace"</a>
<li><strong>Reply:</strong> <a href="4628.php">Brice Goglin: "Re: [hwloc-devel] Check the return value of getenv() in, hwloc_plugin_check_namespace"</a>
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
