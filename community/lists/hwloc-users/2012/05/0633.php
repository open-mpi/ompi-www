<?
$subject_val = "[hwloc-users] Understanding hwloc-ps output";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 30 09:49:08 2012" -->
<!-- isoreceived="20120530134908" -->
<!-- sent="Wed, 30 May 2012 15:47:39 +0200" -->
<!-- isosent="20120530134739" -->
<!-- name="Youri LACAN-BARTLEY" -->
<!-- email="youri.lacan-bartley_at_[hidden]" -->
<!-- subject="[hwloc-users] Understanding hwloc-ps output" -->
<!-- id="9113A52E1096EB41B1F88DD94C4369D5F74851_at_EXCHSRV.transvalor.com" -->
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
<strong>Subject:</strong> [hwloc-users] Understanding hwloc-ps output<br>
<strong>From:</strong> Youri LACAN-BARTLEY (<em>youri.lacan-bartley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-30 09:47:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0634.php">Brice Goglin: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>Previous message:</strong> <a href="0632.php">Brice Goglin: "Re: [hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0634.php">Brice Goglin: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>Reply:</strong> <a href="0634.php">Brice Goglin: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;
<br>
<p>I'm just trying to make sure that the output of hwloc-ps is consistent
<br>
with openmpi's binding report.
<br>
<p>&nbsp;
<br>
<p>For starters here is the output of hwloc-ps:
<br>
<p>&nbsp;
<br>
<p>Machine (48GB)
<br>
<p>&nbsp;&nbsp;NUMANode L#0 (P#0 24GB) + Socket L#0 + L3 L#0 (12MB)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;L2 L#0 (256KB) + L1 L#0 (32KB) + Core L#0 + PU L#0 (P#0)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;L2 L#1 (256KB) + L1 L#1 (32KB) + Core L#1 + PU L#1 (P#2)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;L2 L#2 (256KB) + L1 L#2 (32KB) + Core L#2 + PU L#2 (P#4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;L2 L#3 (256KB) + L1 L#3 (32KB) + Core L#3 + PU L#3 (P#6)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;L2 L#4 (256KB) + L1 L#4 (32KB) + Core L#4 + PU L#4 (P#8)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;L2 L#5 (256KB) + L1 L#5 (32KB) + Core L#5 + PU L#5 (P#10)
<br>
<p>&nbsp;&nbsp;NUMANode L#1 (P#1 24GB) + Socket L#1 + L3 L#1 (12MB)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;L2 L#6 (256KB) + L1 L#6 (32KB) + Core L#6 + PU L#6 (P#1)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;L2 L#7 (256KB) + L1 L#7 (32KB) + Core L#7 + PU L#7 (P#3)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;L2 L#8 (256KB) + L1 L#8 (32KB) + Core L#8 + PU L#8 (P#5)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;L2 L#9 (256KB) + L1 L#9 (32KB) + Core L#9 + PU L#9 (P#7)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;L2 L#10 (256KB) + L1 L#10 (32KB) + Core L#10 + PU L#10 (P#9)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;L2 L#11 (256KB) + L1 L#11 (32KB) + Core L#11 + PU L#11 (P#11)
<br>
<p>&nbsp;
<br>
<p>When using openmpi 1.4.4 with --np 2 --bind-to-core --bycore&quot; it reports
<br>
the following:
<br>
<p>[hostname:03339] [[17125,0],0] odls:default:fork binding child
<br>
[[17125,1],0] to cpus 0001
<br>
<p>[hostname:03339] [[17125,0],0] odls:default:fork binding child
<br>
[[17125,1],1] to cpus 0002
<br>
<p>&nbsp;
<br>
<p>However hwloc-ps returns:
<br>
<p>3340    L2Cache:0               ./binary
<br>
<p>3341    L2Cache:6               ./binary
<br>
<p>&nbsp;
<br>
<p>Somehow this seems contradictory since bycore should assign processes
<br>
following adjacent cores.
<br>
<p>Am I misunderstanding something?
<br>
<p>&nbsp;
<br>
<p>Kind regards,
<br>
<p>&nbsp;
<br>
<p>Youri
<br>
<p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0633/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0634.php">Brice Goglin: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>Previous message:</strong> <a href="0632.php">Brice Goglin: "Re: [hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0634.php">Brice Goglin: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
<li><strong>Reply:</strong> <a href="0634.php">Brice Goglin: "Re: [hwloc-users] Understanding hwloc-ps output"</a>
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
