<?
$subject_val = "[hwloc-users] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 09:25:54 2015" -->
<!-- isoreceived="20150709132554" -->
<!-- sent="Thu, 09 Jul 2015 15:25:50 +0200" -->
<!-- isosent="20150709132550" -->
<!-- name="&#195;&#133;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="[hwloc-users] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer" -->
<!-- id="559E765E.40108_at_hpc2n.umu.se" -->
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
<strong>Subject:</strong> [hwloc-users] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer<br>
<strong>From:</strong> &#195;&#133;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-09 09:25:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1186.php">Brice Goglin: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<li><strong>Previous message:</strong> <a href="1184.php">D'Alessandro, Luke K: "Re: [hwloc-users] Difficulty embedding hwloc 1.11.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1186.php">Brice Goglin: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<li><strong>Reply:</strong> <a href="1186.php">Brice Goglin: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>On a 48 core AMD bulldozer node with Ubuntu kernel 3.13.0-57-generic i 
<br>
get this with hwloc 1.11.0
<br>
****************************************************************************
<br>
* hwloc 1.11.0 has encountered what looks like an error from the 
<br>
operating system.
<br>
*
<br>
* L3 (cpuset 0x000003f0) intersects with NUMANode (P#0 cpuset 
<br>
0x0000003f) without inclusion!
<br>
* Error occurred in topology.c line 983
<br>
...
<br>
<p>An identical node with kernel 3.2.0-87-generic and hwloc 1.11.0 shows no 
<br>
problem.
<br>
<p>(The hwloc version in openmpi 1.8.6 also shows the same type of problem 
<br>
but with a slightly shorter message)
<br>
<p>Attached tar file from hwloc-gather-topology
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90-580 14
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>

</pre>
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1185/hwloc-gat-top.tar.bz2">hwloc-gat-top.tar.bz2</a>
</ul>
<!-- attachment="hwloc-gat-top.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1186.php">Brice Goglin: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<li><strong>Previous message:</strong> <a href="1184.php">D'Alessandro, Luke K: "Re: [hwloc-users] Difficulty embedding hwloc 1.11.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1186.php">Brice Goglin: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<li><strong>Reply:</strong> <a href="1186.php">Brice Goglin: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
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
