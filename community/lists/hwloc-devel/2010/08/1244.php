<?
$subject_val = "[hwloc-devel] hwloc on power7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  4 18:19:49 2010" -->
<!-- isoreceived="20100804221949" -->
<!-- sent="Thu, 5 Aug 2010 00:19:41 +0200" -->
<!-- isosent="20100804221941" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc on power7" -->
<!-- id="201008050019.42270.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc on power7<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-04 18:19:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1245.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on power7"</a>
<li><strong>Previous message:</strong> <a href="1243.php">Jirka Hladky: "Re: [hwloc-devel] hwloc is now available as package for Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1245.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on power7"</a>
<li><strong>Reply:</strong> <a href="1245.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on power7"</a>
<li><strong>Reply:</strong> <a href="1247.php">Brice Goglin: "Re: [hwloc-devel] hwloc on power7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I just got access to one POWER7 box. Both hwloc 1.0.2 and latest hwloc 1.1 
<br>
seem to have problems to detect the sockets correctly.
<br>
<p>It's IBM 8406-71Y server equipped with only one socket. On the chip there are 
<br>
8 cores. lstopo seems to be wrong here, reporting 8 sockets.
<br>
<p>I'm not sure if this problem arose in linux kernel or it's bug in lstopo code. 
<br>
Does anybody else tried to run hwloc on POWER7?
<br>
<p>Thanks
<br>
Jirka
<br>
<p><p>Kernel: 2.6.32-54.el6.ppc64
<br>
<p>root_at_[hidden]: /tmp/hwloc-1.1a1r2387/utils
<br>
$ ./lstopo 
<br>
Machine (7616MB)
<br>
&nbsp;&nbsp;Socket #0 + L3 #0 (4096KB) + L2 #0 (256KB) + L1 #0 (32KB) + Core #0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #1 (phys=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #2 (phys=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #3 (phys=3)
<br>
&nbsp;&nbsp;Socket #1 + L3 #1 (4096KB) + L2 #1 (256KB) + L1 #1 (32KB) + Core #1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #4 (phys=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #5 (phys=5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #6 (phys=6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #7 (phys=7)
<br>
&nbsp;&nbsp;Socket #2 + L3 #2 (4096KB) + L2 #2 (256KB) + L1 #2 (32KB) + Core #2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #8 (phys=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #9 (phys=9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #10 (phys=10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #11 (phys=11)
<br>
&nbsp;&nbsp;Socket #3 + L3 #3 (4096KB) + L2 #3 (256KB) + L1 #3 (32KB) + Core #3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #12 (phys=12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #13 (phys=13)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #14 (phys=14)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #15 (phys=15)
<br>
&nbsp;&nbsp;Socket #4 + L3 #4 (4096KB) + L2 #4 (256KB) + L1 #4 (32KB) + Core #4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #16 (phys=16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #17 (phys=17)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #18 (phys=18)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #19 (phys=19)
<br>
&nbsp;&nbsp;Socket #5 + L3 #5 (4096KB) + L2 #5 (256KB) + L1 #5 (32KB) + Core #5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #20 (phys=20)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #21 (phys=21)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #22 (phys=22)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #23 (phys=23)
<br>
&nbsp;&nbsp;Socket #6 + L3 #6 (4096KB) + L2 #6 (256KB) + L1 #6 (32KB) + Core #6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #24 (phys=24)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #25 (phys=25)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #26 (phys=26)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #27 (phys=27)
<br>
&nbsp;&nbsp;Socket #7 + L3 #7 (4096KB) + L2 #7 (256KB) + L1 #7 (32KB) + Core #7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #28 (phys=28)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #29 (phys=29)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #30 (phys=30)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #31 (phys=31)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1245.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on power7"</a>
<li><strong>Previous message:</strong> <a href="1243.php">Jirka Hladky: "Re: [hwloc-devel] hwloc is now available as package for Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1245.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on power7"</a>
<li><strong>Reply:</strong> <a href="1245.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on power7"</a>
<li><strong>Reply:</strong> <a href="1247.php">Brice Goglin: "Re: [hwloc-devel] hwloc on power7"</a>
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
