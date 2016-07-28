<?
$subject_val = "[hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 23 13:51:16 2010" -->
<!-- isoreceived="20100123185116" -->
<!-- sent="Sat, 23 Jan 2010 13:51:09 -0500" -->
<!-- isosent="20100123185109" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?" -->
<!-- id="54A93C83-FF28-436A-9782-7E650F7D5D4F_at_umich.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-23 13:51:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0006.php">Samuel Thibault: "Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2009/12/0004.php">Jeff Squyres: "[hwloc-users] Hardware Locality (hwloc) v0.9.3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0006.php">Samuel Thibault: "Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<li><strong>Reply:</strong> <a href="0006.php">Samuel Thibault: "Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
lstopo on our opteron 275  login node gives the following output
<br>
<p><p>System(7870MB)
<br>
&nbsp;&nbsp;&nbsp;Node#0(3906MB) + Socket#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(1024KB) + L1(1024KB) + Core#0 + P#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(1024KB) + L1(1024KB) + Core#1 + P#1
<br>
&nbsp;&nbsp;&nbsp;Node#1(4040MB) + Socket#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(1024KB) + L1(1024KB) + Core#0 + P#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(1024KB) + L1(1024KB) + Core#1 + P#3
<br>
<p>If I am reading the AMD docs right, the L1 cache for each core should  
<br>
be smaller, and in two parts, (data and instruction cache)
<br>
Also appears that L2 should be shared, as far as I can tell, it is not  
<br>
shared in this case.
<br>
<p>Am I looking at this wrong?
<br>
<p><p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0006.php">Samuel Thibault: "Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2009/12/0004.php">Jeff Squyres: "[hwloc-users] Hardware Locality (hwloc) v0.9.3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0006.php">Samuel Thibault: "Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
<li><strong>Reply:</strong> <a href="0006.php">Samuel Thibault: "Re: [hwloc-users] hwloc 0.9.3 not showing opt275 caches correctly?"</a>
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
