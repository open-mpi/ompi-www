<?
$subject_val = "Re: [hwloc-users] BGQ question.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 10:34:20 2014" -->
<!-- isoreceived="20140325143420" -->
<!-- sent="Tue, 25 Mar 2014 14:34:18 +0000" -->
<!-- isosent="20140325143418" -->
<!-- name="Biddiscombe, John A." -->
<!-- email="biddisco_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] BGQ question." -->
<!-- id="50320452A334BD42A5EC72BAD2145099102D9283_at_MBX110.d.ethz.ch" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50320452A334BD42A5EC72BAD2145099102D9225_at_MBX110.d.ethz.ch" -->
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
<strong>Subject:</strong> Re: [hwloc-users] BGQ question.<br>
<strong>From:</strong> Biddiscombe, John A. (<em>biddisco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-25 10:34:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1000.php">Christopher Samuel: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Previous message:</strong> <a href="0998.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<li><strong>In reply to:</strong> <a href="0998.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1000.php">Christopher Samuel: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Reply:</strong> <a href="1000.php">Christopher Samuel: "Re: [hwloc-users] BGQ question."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just an update to confim I'm doing it all wrong
<br>
<p>If I compile on the login node, but run lstopo on the ION, I get this (wrong, below)
<br>
<p>if I set export HWLOC_FORCE_BGQ=1 and run on the ION, I get the old message ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Topology became empty, aborting!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aborted (core dumped)
<br>
<p>JB
<br>
<p>*** Found unexpected uname sysname `Linux' machine `ppc64', disabling BGQ backend.
<br>
*** Set HWLOC_FORCE_BGQ=1 in the environment to enforce the BGQ backend.
<br>
Machine
<br>
&nbsp;&nbsp;PU L#0 (P#0)
<br>
&nbsp;&nbsp;PU L#1 (P#1)
<br>
&nbsp;&nbsp;PU L#2 (P#2)
<br>
&nbsp;&nbsp;PU L#3 (P#3)
<br>
&nbsp;&nbsp;PU L#4 (P#4)
<br>
&nbsp;&nbsp;PU L#5 (P#5)
<br>
&nbsp;&nbsp;PU L#6 (P#6)
<br>
&nbsp;&nbsp;PU L#7 (P#7)
<br>
&nbsp;&nbsp;PU L#8 (P#8)
<br>
&nbsp;&nbsp;PU L#9 (P#9)
<br>
&nbsp;&nbsp;PU L#10 (P#10)
<br>
&nbsp;&nbsp;PU L#11 (P#11)
<br>
&nbsp;&nbsp;PU L#12 (P#12)
<br>
&nbsp;&nbsp;PU L#13 (P#13)
<br>
&nbsp;&nbsp;PU L#14 (P#14)
<br>
&nbsp;&nbsp;PU L#15 (P#15)
<br>
&nbsp;&nbsp;PU L#16 (P#16)
<br>
&nbsp;&nbsp;PU L#17 (P#17)
<br>
&nbsp;&nbsp;PU L#18 (P#18)
<br>
&nbsp;&nbsp;PU L#19 (P#19)
<br>
&nbsp;&nbsp;PU L#20 (P#20)
<br>
&nbsp;&nbsp;PU L#21 (P#21)
<br>
&nbsp;&nbsp;PU L#22 (P#22)
<br>
&nbsp;&nbsp;PU L#23 (P#23)
<br>
&nbsp;&nbsp;PU L#24 (P#24)
<br>
&nbsp;&nbsp;PU L#25 (P#25)
<br>
&nbsp;&nbsp;PU L#26 (P#26)
<br>
&nbsp;&nbsp;PU L#27 (P#27)
<br>
&nbsp;&nbsp;PU L#28 (P#28)
<br>
&nbsp;&nbsp;PU L#29 (P#29)
<br>
&nbsp;&nbsp;PU L#30 (P#30)
<br>
&nbsp;&nbsp;PU L#31 (P#31)
<br>
&nbsp;&nbsp;PU L#32 (P#32)
<br>
&nbsp;&nbsp;PU L#33 (P#33)
<br>
&nbsp;&nbsp;PU L#34 (P#34)
<br>
&nbsp;&nbsp;PU L#35 (P#35)
<br>
&nbsp;&nbsp;PU L#36 (P#36)
<br>
&nbsp;&nbsp;PU L#37 (P#37)
<br>
&nbsp;&nbsp;PU L#38 (P#38)
<br>
&nbsp;&nbsp;PU L#39 (P#39)
<br>
&nbsp;&nbsp;PU L#40 (P#40)
<br>
&nbsp;&nbsp;PU L#41 (P#41)
<br>
&nbsp;&nbsp;PU L#42 (P#42)
<br>
&nbsp;&nbsp;PU L#43 (P#43)
<br>
&nbsp;&nbsp;PU L#44 (P#44)
<br>
&nbsp;&nbsp;PU L#45 (P#45)
<br>
&nbsp;&nbsp;PU L#46 (P#46)
<br>
&nbsp;&nbsp;PU L#47 (P#47)
<br>
&nbsp;&nbsp;PU L#48 (P#48)
<br>
&nbsp;&nbsp;PU L#49 (P#49)
<br>
&nbsp;&nbsp;PU L#50 (P#50)
<br>
&nbsp;&nbsp;PU L#51 (P#51)
<br>
&nbsp;&nbsp;PU L#52 (P#52)
<br>
&nbsp;&nbsp;PU L#53 (P#53)
<br>
&nbsp;&nbsp;PU L#54 (P#54)
<br>
&nbsp;&nbsp;PU L#55 (P#55)
<br>
&nbsp;&nbsp;PU L#56 (P#56)
<br>
&nbsp;&nbsp;PU L#57 (P#57)
<br>
&nbsp;&nbsp;PU L#58 (P#58)
<br>
&nbsp;&nbsp;PU L#59 (P#59)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1000.php">Christopher Samuel: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Previous message:</strong> <a href="0998.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<li><strong>In reply to:</strong> <a href="0998.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1000.php">Christopher Samuel: "Re: [hwloc-users] BGQ question."</a>
<li><strong>Reply:</strong> <a href="1000.php">Christopher Samuel: "Re: [hwloc-users] BGQ question."</a>
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
