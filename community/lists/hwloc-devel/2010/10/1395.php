<?
$subject_val = "[hwloc-devel] gather-topology.sh and rpm";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 30 19:44:41 2010" -->
<!-- isoreceived="20101030234441" -->
<!-- sent="Sun, 31 Oct 2010 01:44:30 +0200" -->
<!-- isosent="20101030234430" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="[hwloc-devel] gather-topology.sh and rpm" -->
<!-- id="201010310144.31161.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> [hwloc-devel] gather-topology.sh and rpm<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-30 19:44:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1396.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2670)"</a>
<li><strong>Previous message:</strong> <a href="1394.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2663)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1397.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>Reply:</strong> <a href="1397.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/11/1404.php">Samuel Thibault: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/11/1415.php">Samuel Thibault: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>since gather-topology.sh is nice script to help debug problems I was thinking 
<br>
to add it to the rpm.
<br>
<p>However, path to the lstopo is set to the absolute build path:
<br>
<p>abs_top_builddir=&quot;/home/jhladky/tests/performance/hwloc/hwloc-1.0.2&quot;
<br>
lstopo=&quot;$abs_top_builddir/utils/lstopo&quot;
<br>
<p>so it will no work after installation from rpm package (lstopo is in 
<br>
/usr/bin/lstopo)
<br>
<p>I would propose to modify the script to look first for installed lstopo using 
<br>
&quot;which&quot; command.
<br>
<p>Or perhaps we can have two versions of this script
<br>
-one for testing with hard-wired path to lstopo
<br>
-another general version suitable for rpm where we will take first lstopo in 
<br>
the $PATH (achieved by which command)
<br>
<p>Any comments/ideas on that?
<br>
<p>Thanks!
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1396.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2670)"</a>
<li><strong>Previous message:</strong> <a href="1394.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2663)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1397.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>Reply:</strong> <a href="1397.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/11/1404.php">Samuel Thibault: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/11/1415.php">Samuel Thibault: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
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
