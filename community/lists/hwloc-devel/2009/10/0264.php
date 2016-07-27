<?
$subject_val = "[hwloc-devel] Priority of env vars vs. application options";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 18:17:04 2009" -->
<!-- isoreceived="20091027221704" -->
<!-- sent="Tue, 27 Oct 2009 23:16:58 +0100" -->
<!-- isosent="20091027221658" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="[hwloc-devel] Priority of env vars vs. application options" -->
<!-- id="20091027221658.GF4661_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] Priority of env vars vs. application options<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-27 18:16:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0265.php">Brice Goglin: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>Previous message:</strong> <a href="0263.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1248)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0265.php">Brice Goglin: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>Reply:</strong> <a href="0265.php">Brice Goglin: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>At the moment, the HWLOC_FSROOT and HWLOC_XMLFILE environment variables
<br>
override tool options and application configuration.  Is it really the
<br>
behavior we should have?  I'd tend to think that the priority order
<br>
should be:
<br>
<p>- application options/configuration
<br>
- environment variable
<br>
- default OS backend.
<br>
<p>i.e. basically move the HWLOC_FSROOT/HWLOC_XMLFILE interpretation to
<br>
hwloc_topology_init, before the application can override them through
<br>
configuration calls. Similarly, HWLOCK_THISSYSTEM would be overriden by
<br>
HWLOC_TOPOLOGY_FLAG_IS_THISSYSTEM.
<br>
<p>What do people think?
<br>
(At least we should probably settle that clearly in the documentation)
<br>
(and document these environment variables, I didn't know about
<br>
HWLOC_XMLFILE).
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0265.php">Brice Goglin: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>Previous message:</strong> <a href="0263.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1248)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0265.php">Brice Goglin: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>Reply:</strong> <a href="0265.php">Brice Goglin: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
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
