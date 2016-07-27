<?
$subject_val = "[hwloc-devel] HWLOC_FSROOT in libnuma";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 21 00:50:26 2012" -->
<!-- isoreceived="20120221055026" -->
<!-- sent="Tue, 21 Feb 2012 06:50:19 +0100" -->
<!-- isosent="20120221055019" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] HWLOC_FSROOT in libnuma" -->
<!-- id="4F43309B.2040007_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] HWLOC_FSROOT in libnuma<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-21 00:50:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2894.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4333)"</a>
<li><strong>Previous message:</strong> <a href="2892.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.3a1r4332)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While debugging libnuma helpers, I needed a way to emulate remote
<br>
topologies in libnuma as hwloc does so that we can do
<br>
&nbsp;&nbsp;HWLOC_FSROOT=/foo/bar tests/linux-libnuma
<br>
on any of my existing remote topologies. I modified 2.0.8-rc3 with the
<br>
attached patch so that it honors HWLOC_FSROOT when reading /sys and
<br>
/proc files.
<br>
<p>It's not perfect:
<br>
* We need to retrieve the distant /proc/self/status and manually add it
<br>
to $FSROOT/proc/self/ (libnuma needs it, hwloc doesn't gather it)
<br>
* The remote topology cannot use cpumaps that are larger than the local
<br>
kernel cpumap. Basically, you need to remove starting zeros in
<br>
$FSROOT/sys/devices/system/node/node*/cpumap until it's not longer than
<br>
your local /sys/devices/system/node/node0/cpumap
<br>
* Some corner cases don't case such as highly sparse node ids don't
<br>
work, maybe because CONFIG_NODES_SHIFT=6 in my kernel
<br>
<p>The patch also brings back the old &quot;numa_all_nodes&quot; behavior (before
<br>
libnuma 2.0.6) wrt nodes with no memory if HWLOC_OLD_LIBNUMA=1. But this
<br>
shouldn't matter anyway because I removed nodemask_t helpers from trunk.
<br>
Still no reply to my bug report on numa-devel about this
<br>
<a href="http://thread.gmane.org/gmane.linux.kernel.numa/716">http://thread.gmane.org/gmane.linux.kernel.numa/716</a>
<br>
<p>I am sharing this so that it doesn't get lost, in case somebody ever has
<br>
to debug this again.
<br>
<p>Brice
<br>
<p><p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2893/fsroot-libnuma.patch">fsroot-libnuma.patch</a>
</ul>
<!-- attachment="fsroot-libnuma.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2894.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4333)"</a>
<li><strong>Previous message:</strong> <a href="2892.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.3a1r4332)"</a>
<!-- nextthread="start" -->
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
