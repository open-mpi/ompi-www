<?
$subject_val = "[hwloc-devel] Cpuset problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 22 08:53:52 2010" -->
<!-- isoreceived="20100722125352" -->
<!-- sent="Thu, 22 Jul 2010 07:53:47 -0500" -->
<!-- isosent="20100722125347" -->
<!-- name="Michael Raymond" -->
<!-- email="mraymond_at_[hidden]" -->
<!-- subject="[hwloc-devel] Cpuset problem" -->
<!-- id="4C483F5B.2080802_at_sgi.com" -->
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
<strong>Subject:</strong> [hwloc-devel] Cpuset problem<br>
<strong>From:</strong> Michael Raymond (<em>mraymond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-22 08:53:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1209.php">Brice Goglin: "Re: [hwloc-devel] Cpuset problem"</a>
<li><strong>Previous message:</strong> <a href="1207.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0.3a1r2349)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1209.php">Brice Goglin: "Re: [hwloc-devel] Cpuset problem"</a>
<li><strong>Reply:</strong> <a href="1209.php">Brice Goglin: "Re: [hwloc-devel] Cpuset problem"</a>
<li><strong>Maybe reply:</strong> <a href="1214.php">Brice Goglin: "Re: [hwloc-devel] Cpuset problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;I was doing some testing on what's in SVN and I found that the
<br>
topology discovery code has a problem when running within a cpuset.  On
<br>
my 2.6.32 SLES11SP1 box the code calls hwloc_read_linux_cpuset_mask()
<br>
with a cgroup mount point and tries to read
<br>
/dev/cpuset/&lt;blah&gt;/cpuset.[cpus|mems].  Those files don't exist but
<br>
&lt;blah&gt;/[cpus|mems] do.  If I change the code to use those files instead
<br>
then everything else works.
<br>
<p>&nbsp;&nbsp;It seems that either the formatting for cgroup files is wrong, or the
<br>
code thinks it's dealing with cgroups when it's really using cpusets.
<br>
<p><pre>
-- 
Michael A. Raymond
Message Passing Toolkit Team
Silicon Graphics Inc
(651) 683-3434
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1209.php">Brice Goglin: "Re: [hwloc-devel] Cpuset problem"</a>
<li><strong>Previous message:</strong> <a href="1207.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0.3a1r2349)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1209.php">Brice Goglin: "Re: [hwloc-devel] Cpuset problem"</a>
<li><strong>Reply:</strong> <a href="1209.php">Brice Goglin: "Re: [hwloc-devel] Cpuset problem"</a>
<li><strong>Maybe reply:</strong> <a href="1214.php">Brice Goglin: "Re: [hwloc-devel] Cpuset problem"</a>
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
