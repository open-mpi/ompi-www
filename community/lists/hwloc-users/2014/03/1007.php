<?
$subject_val = "[hwloc-users] distributing across cores with hwloc-distrib";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 30 01:56:39 2014" -->
<!-- isoreceived="20140330055639" -->
<!-- sent="Sun, 30 Mar 2014 01:56:38 -0400" -->
<!-- isosent="20140330055638" -->
<!-- name="Tim Creech" -->
<!-- email="tcreech_at_[hidden]" -->
<!-- subject="[hwloc-users] distributing across cores with hwloc-distrib" -->
<!-- id="20140330055638.GA40152_at_brio.tcreech.com" -->
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
<strong>Subject:</strong> [hwloc-users] distributing across cores with hwloc-distrib<br>
<strong>From:</strong> Tim Creech (<em>tcreech_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-30 01:56:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1008.php">Brice Goglin: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<li><strong>Previous message:</strong> <a href="1006.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1008.php">Brice Goglin: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<li><strong>Reply:</strong> <a href="1008.php">Brice Goglin: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<li><strong>Maybe reply:</strong> <a href="1009.php">Tim Creech: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
&nbsp;&nbsp;I would like to use hwloc_distrib for a project, but I'm having some
<br>
trouble understanding how it distributes. Specifically, it seems to
<br>
avoid distributing multiple processes across cores, and I'm not sure
<br>
why.
<br>
<p>As an example, consider the actual output of:
<br>
<p>$ hwloc-distrib -i &quot;4 4&quot; 2
<br>
0x0000000f
<br>
0x000000f0
<br>
<p>I'm expecting hwloc-distrib to tell me how to distribute 2 processes
<br>
across the 16 PUs (4 cores by 4 PUs), but the answer only involves 8
<br>
PUs, leaving the other 8 unused. If there were more cores on the
<br>
machine, then potentially the vast majority of them would be unused.
<br>
<p>In other words, I might expect the output to use all of the PUs across
<br>
cores, for example:
<br>
<p>$ hwloc-distrib -i &quot;4 4&quot; 2
<br>
0x000000ff
<br>
0x0000ff00
<br>
<p>Why does hwloc-distrib leave PUs unused? I'm using hwloc-1.9. Any help
<br>
in understanding where I'm going wrong is greatly appreciated!
<br>
<p>Thanks,
<br>
Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1008.php">Brice Goglin: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<li><strong>Previous message:</strong> <a href="1006.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1008.php">Brice Goglin: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<li><strong>Reply:</strong> <a href="1008.php">Brice Goglin: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<li><strong>Maybe reply:</strong> <a href="1009.php">Tim Creech: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
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
