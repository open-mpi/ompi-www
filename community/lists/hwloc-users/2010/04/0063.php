<?
$subject_val = "[hwloc-users] Problem: hwloc-1.0rc1 on AMD Barcelona processor";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 28 22:42:55 2010" -->
<!-- isoreceived="20100429024255" -->
<!-- sent="Wed, 28 Apr 2010 22:42:43 -0400" -->
<!-- isosent="20100429024243" -->
<!-- name="Hao Wang" -->
<!-- email="wangh_at_[hidden]" -->
<!-- subject="[hwloc-users] Problem: hwloc-1.0rc1 on AMD Barcelona processor" -->
<!-- id="4BD8F223.6090204_at_cse.ohio-state.edu" -->
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
<strong>Subject:</strong> [hwloc-users] Problem: hwloc-1.0rc1 on AMD Barcelona processor<br>
<strong>From:</strong> Hao Wang (<em>wangh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-28 22:42:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0064.php">Brice Goglin: "Re: [hwloc-users] Problem: hwloc-1.0rc1 on AMD Barcelona processor"</a>
<li><strong>Previous message:</strong> <a href="0062.php">Jeff Squyres: "[hwloc-users] 1.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0064.php">Brice Goglin: "Re: [hwloc-users] Problem: hwloc-1.0rc1 on AMD Barcelona processor"</a>
<li><strong>Reply:</strong> <a href="0064.php">Brice Goglin: "Re: [hwloc-users] Problem: hwloc-1.0rc1 on AMD Barcelona processor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys
<br>
<p>I use hwloc-1.0rc1 on AMD Barcelona machine (AMD Opteron Processor 
<br>
8350). But, it looks like hwloc-1.0rc1 detects my machine with a problem:
<br>
<p>lstopo command output information is below:
<br>
<p>Machine (16GB)
<br>
&nbsp;&nbsp;&nbsp;NUMANode #0 (phys=0 4015MB) + Socket #0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 #0 (2048KB) + L2 #0 (512KB) + L1 #0 (512KB) + Core #0 + PU #0 
<br>
(phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 #1 (2048KB) + L2 #1 (512KB) + L1 #1 (512KB) + Core #1 + PU #1 
<br>
(phys=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 #2 (2048KB) + L2 #2 (512KB) + L1 #2 (512KB) + Core #2 + PU #2 
<br>
(phys=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 #3 (2048KB) + L2 #3 (512KB) + L1 #3 (512KB) + Core #3 + PU #3 
<br>
(phys=3)
<br>
&nbsp;&nbsp;&nbsp;NUMANode #1 (phys=1 4040MB) + Socket #1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 #4 (2048KB) + L2 #4 (512KB) + L1 #4 (512KB) + Core #4 + PU #4 
<br>
(phys=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 #5 (2048KB) + L2 #5 (512KB) + L1 #5 (512KB) + Core #5 + PU #5 
<br>
(phys=5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 #6 (2048KB) + L2 #6 (512KB) + L1 #6 (512KB) + Core #6 + PU #6 
<br>
(phys=6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 #7 (2048KB) + L2 #7 (512KB) + L1 #7 (512KB) + Core #7 + PU #7 
<br>
(phys=7)
<br>
&nbsp;&nbsp;&nbsp;NUMANode #2 (phys=2 4040MB) + Socket #2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 #8 (2048KB) + L2 #8 (512KB) + L1 #8 (512KB) + Core #8 + PU #8 
<br>
(phys=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 #9 (2048KB) + L2 #9 (512KB) + L1 #9 (512KB) + Core #9 + PU #9 
<br>
(phys=9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 #10 (2048KB) + L2 #10 (512KB) + L1 #10 (512KB) + Core #10 + PU 
<br>
#10 (phys=10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 #11 (2048KB) + L2 #11 (512KB) + L1 #11 (512KB) + Core #11 + PU 
<br>
#11 (phys=11)
<br>
&nbsp;&nbsp;&nbsp;NUMANode #3 (phys=3 4040MB) + Socket #3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 #12 (2048KB) + L2 #12 (512KB) + L1 #12 (512KB) + Core #12 + PU 
<br>
#12 (phys=12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 #13 (2048KB) + L2 #13 (512KB) + L1 #13 (512KB) + Core #13 + PU 
<br>
#13 (phys=13)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 #14 (2048KB) + L2 #14 (512KB) + L1 #14 (512KB) + Core #14 + PU 
<br>
#14 (phys=14)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 #15 (2048KB) + L2 #15 (512KB) + L1 #15 (512KB) + Core #15 + PU 
<br>
#15 (phys=15)
<br>
<p>I'm not sure whether hwloc gave out the correct information. From my 
<br>
understanding, L3 cache should be shared by for cores in each socket; 
<br>
and L1 cache size shouldn't be 512KB. Are there somebody to confirm it?
<br>
<p>Thanks
<br>
<p>- Hao
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0064.php">Brice Goglin: "Re: [hwloc-users] Problem: hwloc-1.0rc1 on AMD Barcelona processor"</a>
<li><strong>Previous message:</strong> <a href="0062.php">Jeff Squyres: "[hwloc-users] 1.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0064.php">Brice Goglin: "Re: [hwloc-users] Problem: hwloc-1.0rc1 on AMD Barcelona processor"</a>
<li><strong>Reply:</strong> <a href="0064.php">Brice Goglin: "Re: [hwloc-users] Problem: hwloc-1.0rc1 on AMD Barcelona processor"</a>
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
