<?
$subject_val = "[hwloc-devel] Proposal for cpuset API change";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 17 15:00:55 2010" -->
<!-- isoreceived="20100317190055" -->
<!-- sent="Wed, 17 Mar 2010 20:00:50 +0100" -->
<!-- isosent="20100317190050" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="[hwloc-devel] Proposal for cpuset API change" -->
<!-- id="36ca99e91003171200n26754cf8id1b1d3759daec13c_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [hwloc-devel] Proposal for cpuset API change<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-17 15:00:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0766.php">Brice GOGLIN: "Re: [hwloc-devel] Proposal for cpuset API change"</a>
<li><strong>Previous message:</strong> <a href="0764.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1837)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0766.php">Brice GOGLIN: "Re: [hwloc-devel] Proposal for cpuset API change"</a>
<li><strong>Reply:</strong> <a href="0766.php">Brice GOGLIN: "Re: [hwloc-devel] Proposal for cpuset API change"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I think it is necessary to make a small change to the cpuset API. The
<br>
current API was made fit to allow dynamically sized cpusets. I.e. an
<br>
alloc/modify/free style life cycle. The problem I see is, from where
<br>
should hwloc_cpuset_alloc() get the size of the cpuset? The solution I
<br>
see is to pass the hwloc_topology_t into hwloc_cpuset_alloc(), so that
<br>
the information comes from there [1].
<br>
<p>I haven't looked through the whole tree, if a hwloc_topology_t is
<br>
always available at places where hwloc_cpuset_alloc() is called.
<br>
<p>Comments?
<br>
<p>Regards,
<br>
Bert
<br>
<p>[1]: linux exposes this as /sys/devices/system/cpu/kernel_max
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0766.php">Brice GOGLIN: "Re: [hwloc-devel] Proposal for cpuset API change"</a>
<li><strong>Previous message:</strong> <a href="0764.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1837)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0766.php">Brice GOGLIN: "Re: [hwloc-devel] Proposal for cpuset API change"</a>
<li><strong>Reply:</strong> <a href="0766.php">Brice GOGLIN: "Re: [hwloc-devel] Proposal for cpuset API change"</a>
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
