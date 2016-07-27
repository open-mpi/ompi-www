<?
$subject_val = "[hwloc-devel] Cache size/sharing errors on 8x4 Opteron system";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 10:37:12 2009" -->
<!-- isoreceived="20090922143712" -->
<!-- sent="Tue, 22 Sep 2009 16:36:39 +0200" -->
<!-- isosent="20090922143639" -->
<!-- name="Peter Thoman" -->
<!-- email="peter.thoman_at_[hidden]" -->
<!-- subject="[hwloc-devel] Cache size/sharing errors on 8x4 Opteron system" -->
<!-- id="4AB8E0F7.3050509_at_uibk.ac.at" -->
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
<strong>Subject:</strong> [hwloc-devel] Cache size/sharing errors on 8x4 Opteron system<br>
<strong>From:</strong> Peter Thoman (<em>peter.thoman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-22 10:36:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0069.php">Samuel Thibault: "Re: [hwloc-devel] Cache size/sharing errors on 8x4 Opteron system"</a>
<li><strong>Previous message:</strong> <a href="0067.php">Jeff Squyres: "[hwloc-devel] PLPA's future (or lack thereof)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0069.php">Samuel Thibault: "Re: [hwloc-devel] Cache size/sharing errors on 8x4 Opteron system"</a>
<li><strong>Reply:</strong> <a href="0069.php">Samuel Thibault: "Re: [hwloc-devel] Cache size/sharing errors on 8x4 Opteron system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
this is my first post on this mailing list -- I just found hwloc and it
<br>
seems like a useful tool for my research.
<br>
As an initial test I ran hwloc-info on our 8 socket Opteron 8356 system
<br>
(32 cores), the full results are attached below. The node information is
<br>
correct, as is the level 2 cache information. However, the L1 cache size
<br>
is wrong and the L3 cache is in fact shared between each set of 4 cores
<br>
(its size is correct though).
<br>
I couldn't find any in-depth description on how hwloc tries to determine
<br>
this information, so I'm not sure if this behaviour is caused by our
<br>
system lacking some required feature or by a problem in hwloc. If you
<br>
need more information I'll be happy to provide it.
<br>
<p>Best regards,
<br>
&nbsp;&nbsp;Peter
<br>
<p>[petert_at_m01 ~]$ hwloc/inst/bin/hwloc-info --version
<br>
hwloc-info 0.9.1a1
<br>
[petert_at_m01 ~]$ hwloc/inst/bin/hwloc-info -
<br>
System(63GB)
<br>
&nbsp;&nbsp;Node#0(8061MB) + Socket#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#0 + P#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#1 + P#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#2 + P#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#3 + P#3
<br>
&nbsp;&nbsp;Node#1(8080MB) + Socket#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#0 + P#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#1 + P#5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#2 + P#6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#3 + P#7
<br>
&nbsp;&nbsp;Node#2(8080MB) + Socket#3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#0 + P#8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#1 + P#9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#2 + P#10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#3 + P#11
<br>
&nbsp;&nbsp;Node#3(8080MB) + Socket#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#0 + P#12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#1 + P#13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#2 + P#14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#3 + P#15
<br>
&nbsp;&nbsp;Node#4(8080MB) + Socket#5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#0 + P#16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#1 + P#17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#2 + P#18
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#3 + P#19
<br>
&nbsp;&nbsp;Node#5(8080MB) + Socket#6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#0 + P#20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#1 + P#21
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#2 + P#22
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#3 + P#23
<br>
&nbsp;&nbsp;Node#6(8080MB) + Socket#7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#0 + P#24
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#1 + P#25
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#2 + P#26
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#3 + P#27
<br>
&nbsp;&nbsp;Node#7(8080MB) + Socket#8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#0 + P#28
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#1 + P#29
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#2 + P#30
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(2048KB) + L2(512KB) + L1(512KB) + Core#3 + P#31
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0069.php">Samuel Thibault: "Re: [hwloc-devel] Cache size/sharing errors on 8x4 Opteron system"</a>
<li><strong>Previous message:</strong> <a href="0067.php">Jeff Squyres: "[hwloc-devel] PLPA's future (or lack thereof)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0069.php">Samuel Thibault: "Re: [hwloc-devel] Cache size/sharing errors on 8x4 Opteron system"</a>
<li><strong>Reply:</strong> <a href="0069.php">Samuel Thibault: "Re: [hwloc-devel] Cache size/sharing errors on 8x4 Opteron system"</a>
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
