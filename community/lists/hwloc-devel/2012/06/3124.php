<?
$subject_val = "[hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 19 02:32:57 2012" -->
<!-- isoreceived="20120619063257" -->
<!-- sent="Tue, 19 Jun 2012 02:32:52 -0400" -->
<!-- isosent="20120619063252" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion" -->
<!-- id="CAHwLALMfQ-fekAjhsU6+VdcdKGPRDoWYo3RrhH811cNXtUBaJQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion<br>
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-19 02:32:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3125.php">Brice Goglin: "Re: [hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion"</a>
<li><strong>Previous message:</strong> <a href="3123.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3125.php">Brice Goglin: "Re: [hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion"</a>
<li><strong>Reply:</strong> <a href="3125.php">Brice Goglin: "Re: [hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hwloc already has code (linux-libnuma.h) for hwloc_cpuset_t to libnuma
<br>
data type conversion. Does it make sense to add functions to convert
<br>
hwloc_cpuset_t types to the cpuset string format used by Linux's
<br>
cgroups?
<br>
<p>The cpuset format used by cgroups is not difficult to handle (in fact,
<br>
the user interface is same as/very similar to the older cpuset
<br>
implementation). Eg. create a cpuset that includes CPU 2 &amp; 3 for
<br>
OGS/Grid Engine:
<br>
<p># echo 2-3 &gt; /sys/fs/cgroup/cpuset/gridengine/cpuset.cpus
<br>
<p>Ref: <a href="http://www.kernel.org/doc/Documentation/cgroups/cpusets.txt">http://www.kernel.org/doc/Documentation/cgroups/cpusets.txt</a>
<br>
<p><p>We are pinging the list because we use hwloc for topology binding, and
<br>
we also added cgroups support (for a lot of things) in OGS/Grid
<br>
Engine:
<br>
<p><a href="http://blogs.scalablelogic.com/2012/05/grid-engine-cgroups-integration.html">http://blogs.scalablelogic.com/2012/05/grid-engine-cgroups-integration.html</a>
<br>
<p>We are planning to integrate hwloc &amp; cgroups (and skip libnuma)... And
<br>
we want to choose which method we use at runtime. While hwloc can be
<br>
used by non-root applications, the applications can modify the
<br>
affinity mask themselves and thus they can escape from the &quot;cpuset&quot;
<br>
(as least with the current hwloc implementation that uses
<br>
sched_setaffinity). The cgroups cpuset support is only available to
<br>
root, but once binded, batch jobs running as non-root could not escape
<br>
from the cpuset.
<br>
<p>Rayson
<br>
<p>==================================================
<br>
Open Grid Scheduler - The Official Open Source Grid Engine
<br>
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3125.php">Brice Goglin: "Re: [hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion"</a>
<li><strong>Previous message:</strong> <a href="3123.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3125.php">Brice Goglin: "Re: [hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion"</a>
<li><strong>Reply:</strong> <a href="3125.php">Brice Goglin: "Re: [hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion"</a>
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
