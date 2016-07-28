<?
$subject_val = "[hwloc-users] BGQ question.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 02:51:54 2014" -->
<!-- isoreceived="20140325065154" -->
<!-- sent="Tue, 25 Mar 2014 06:51:49 +0000" -->
<!-- isosent="20140325065149" -->
<!-- name="Biddiscombe, John A." -->
<!-- email="biddisco_at_[hidden]" -->
<!-- subject="[hwloc-users] BGQ question." -->
<!-- id="50320452A334BD42A5EC72BAD2145099102D8A2B_at_MBX110.d.ethz.ch" -->
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
<strong>Subject:</strong> [hwloc-users] BGQ question.<br>
<strong>From:</strong> Biddiscombe, John A. (<em>biddisco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-25 02:51:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0987.php">Brice Goglin: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/02/0985.php">Brock Palen: "Re: [hwloc-users] Using hwloc to map GPU layout on system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0987.php">Brice Goglin: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Reply:</strong> <a href="0987.php">Brice Goglin: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Reply:</strong> <a href="0995.php">Chris Samuel: "Re: [hwloc-users] BGQ question."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm compiling hwloc using clang (bgclang++11 from ANL) to run on IO nodes af a BGQ. It seems to have compiled ok, and when I run lstopo, I get an output like this (below), which looks reasonable, but there are 15 sockets instead of 16. I'm a little worried because the first time I compiled, I had problems where apps would report an error from HWLOC on start and tell me to set HWLOC_FORCE_BGQ=1. when I did set this env var, it would then report that &quot;topology became empty&quot; and the app would segfault due to the unexpected return from hwloc presumably.
<br>
<p>I wiped everything and recompiled (not sure what I did differently), and now it behaves more sensibly, but with 15 instead of 16 sockets.
<br>
<p>Should IO be worried?
<br>
<p>Thanks
<br>
<p>JB
<br>
<p><p>Machine (15GB)
<br>
&nbsp;&nbsp;Socket L#0 + L1d L#0 (16KB) + L1i L#0 (16KB) + Core L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#1 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#3 (P#3)
<br>
&nbsp;&nbsp;Socket L#1 + L1d L#1 (16KB) + L1i L#1 (16KB) + Core L#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#4 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#5 (P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#6 (P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#7 (P#7)
<br>
&nbsp;&nbsp;Socket L#2 + L1d L#2 (16KB) + L1i L#2 (16KB) + Core L#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#8 (P#8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#9 (P#9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#10 (P#10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#11 (P#11)
<br>
&nbsp;&nbsp;Socket L#3 + L1d L#3 (16KB) + L1i L#3 (16KB) + Core L#3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#12 (P#12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#13 (P#13)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#14 (P#14)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#15 (P#15)
<br>
&nbsp;&nbsp;Socket L#4 + L1d L#4 (16KB) + L1i L#4 (16KB) + Core L#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#16 (P#16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#17 (P#17)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#18 (P#18)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#19 (P#19)
<br>
&nbsp;&nbsp;Socket L#5 + L1d L#5 (16KB) + L1i L#5 (16KB) + Core L#5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#20 (P#20)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#21 (P#21)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#22 (P#22)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#23 (P#23)
<br>
&nbsp;&nbsp;Socket L#6 + L1d L#6 (16KB) + L1i L#6 (16KB) + Core L#6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#24 (P#24)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#25 (P#25)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#26 (P#26)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#27 (P#27)
<br>
&nbsp;&nbsp;Socket L#7 + L1d L#7 (16KB) + L1i L#7 (16KB) + Core L#7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#28 (P#28)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#29 (P#29)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#30 (P#30)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#31 (P#31)
<br>
&nbsp;&nbsp;Socket L#8 + L1d L#8 (16KB) + L1i L#8 (16KB) + Core L#8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#32 (P#32)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#33 (P#33)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#34 (P#34)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#35 (P#35)
<br>
&nbsp;&nbsp;Socket L#9 + L1d L#9 (16KB) + L1i L#9 (16KB) + Core L#9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#36 (P#36)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#37 (P#37)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#38 (P#38)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#39 (P#39)
<br>
&nbsp;&nbsp;Socket L#10 + L1d L#10 (16KB) + L1i L#10 (16KB) + Core L#10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#40 (P#40)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#41 (P#41)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#42 (P#42)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#43 (P#43)
<br>
&nbsp;&nbsp;Socket L#11 + L1d L#11 (16KB) + L1i L#11 (16KB) + Core L#11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#44 (P#44)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#45 (P#45)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#46 (P#46)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#47 (P#47)
<br>
&nbsp;&nbsp;Socket L#12 + L1d L#12 (16KB) + L1i L#12 (16KB) + Core L#12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#48 (P#48)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#49 (P#49)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#50 (P#50)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#51 (P#51)
<br>
&nbsp;&nbsp;Socket L#13 + L1d L#13 (16KB) + L1i L#13 (16KB) + Core L#13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#52 (P#52)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#53 (P#53)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#54 (P#54)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#55 (P#55)
<br>
&nbsp;&nbsp;Socket L#14 + L1d L#14 (16KB) + L1i L#14 (16KB) + Core L#14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#56 (P#56)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#57 (P#57)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#58 (P#58)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#59 (P#59)
<br>
&nbsp;&nbsp;HostBridge L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 1014:0023
<br>
<p><pre>
--
John Biddiscombe,                        email:biddisco @.at.@ cscs.ch
<a href="http://www.cscs.ch/">http://www.cscs.ch/</a>
CSCS, Swiss National Supercomputing Centre  | Tel:  +41 (91) 610.82.07
Via Trevano 131, 6900 Lugano, Switzerland   | Fax:  +41 (91) 610.82.82
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0986/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0987.php">Brice Goglin: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/02/0985.php">Brock Palen: "Re: [hwloc-users] Using hwloc to map GPU layout on system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0987.php">Brice Goglin: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Reply:</strong> <a href="0987.php">Brice Goglin: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Reply:</strong> <a href="0995.php">Chris Samuel: "Re: [hwloc-users] BGQ question."</a>
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
