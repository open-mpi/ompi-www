<?
$subject_val = "[hwloc-devel] Cgroup resource limits";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  2 17:12:10 2012" -->
<!-- isoreceived="20121102211210" -->
<!-- sent="Fri, 2 Nov 2012 14:12:03 -0700" -->
<!-- isosent="20121102211203" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[hwloc-devel] Cgroup resource limits" -->
<!-- id="2110DBF6-1955-4AA4-A0A4-1E7D5ACB1211_at_open-mpi.org" -->
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
<strong>Subject:</strong> [hwloc-devel] Cgroup resource limits<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-02 17:12:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3356.php">Brice Goglin: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Previous message:</strong> <a href="3354.php">Brice Goglin: "[hwloc-devel] plugins update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3356.php">Brice Goglin: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Reply:</strong> <a href="3356.php">Brice Goglin: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>We (Greenplum) have a need to support resource limits (e.g., memory and cpu usage) on processes running under Open MPI's RTE. OMPI uses hwloc for processor and memory affinity, so this seems a likely place to add the required support. Jeff tells me that it doesn't yet exist in hwloc - I'm wondering if you would welcome and/or be willing to consider contributions from our engineers towards adding this capability?
<br>
<p>Obviously, we'd need to discuss how and where to do the extension. Just wanted to first see if this is an option, or if we should do it directly in OMPI.
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3356.php">Brice Goglin: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Previous message:</strong> <a href="3354.php">Brice Goglin: "[hwloc-devel] plugins update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3356.php">Brice Goglin: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Reply:</strong> <a href="3356.php">Brice Goglin: "Re: [hwloc-devel] Cgroup resource limits"</a>
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
