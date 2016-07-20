<?
$subject_val = "[hwloc-users] Wrong cache with hwloc 1.0 on windows";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 24 20:02:54 2010" -->
<!-- isoreceived="20100525000254" -->
<!-- sent="Tue, 25 May 2010 02:58:57 +0300" -->
<!-- isosent="20100524235857" -->
<!-- name="&#193;&#235;&#221;&#238;&#225;&#237;&#228;&#241;&#239;&#242; &#208;&#225;&#240;&#225;&#228;&#239;&#227;&#233;&#225;&#237;&#237;&#220;&#234;&#231;&#242;" -->
<!-- email="psxlover_at_[hidden]" -->
<!-- subject="[hwloc-users] Wrong cache with hwloc 1.0 on windows" -->
<!-- id="COL124-W48831466B07CF0ED9E0EBD6E70_at_phx.gbl" -->
<!-- charset="iso-8859-7" -->
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
<strong>Subject:</strong> [hwloc-users] Wrong cache with hwloc 1.0 on windows<br>
<strong>From:</strong> &#193;&#235;&#221;&#238;&#225;&#237;&#228;&#241;&#239;&#242; &#208;&#225;&#240;&#225;&#228;&#239;&#227;&#233;&#225;&#237;&#237;&#220;&#234;&#231;&#242; (<em>psxlover_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-24 19:58:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0087.php">Samuel Thibault: "Re: [hwloc-users] Wrong cache with hwloc 1.0 on windows"</a>
<li><strong>Previous message:</strong> <a href="0085.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0087.php">Samuel Thibault: "Re: [hwloc-users] Wrong cache with hwloc 1.0 on windows"</a>
<li><strong>Reply:</strong> <a href="0087.php">Samuel Thibault: "Re: [hwloc-users] Wrong cache with hwloc 1.0 on windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
lstopo 0.9.3 output:
<br>
System(0KB) + Node#0(1751MB) + Socket + L3(8192KB)
<br>
&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core
<br>
&nbsp;&nbsp;&nbsp;&nbsp;P#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;P#1
<br>
&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core
<br>
&nbsp;&nbsp;&nbsp;&nbsp;P#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;P#3
<br>
&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core
<br>
&nbsp;&nbsp;&nbsp;&nbsp;P#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;P#5
<br>
&nbsp;&nbsp;L2(256KB) + L1(32KB) + Core
<br>
&nbsp;&nbsp;&nbsp;&nbsp;P#6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;P#7
<br>
<p>lstopo 1.0 output
<br>
Machine (1749MB) + NUMANode #0 (phys=0 1749MB) + Socket #0
<br>
&nbsp;&nbsp;L1 #0 (32KB) + Core #0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #1 (phys=1)
<br>
&nbsp;&nbsp;L1 #1 (32KB) + Core #1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #2 (phys=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #3 (phys=3)
<br>
&nbsp;&nbsp;L1 #2 (32KB) + Core #2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #4 (phys=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #5 (phys=5)
<br>
&nbsp;&nbsp;L1 #3 (32KB) + Core #3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #6 (phys=6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #7 (phys=7)
<br>
<p><p>I'm running Win7 on a Intel i860 cpu. 
<br>
As you can see hwloc 1.0 doesn't show my L3 and L2 cache while it 
<br>
worked fine with hwloc 0.9.3. Also both versions fail to show my RAM
<br>
correctly, they both report the currently available instead of the 4GB
<br>
that I have.
<br>
<p>Thanks
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
Hotmail: Free, trusted and rich email service.
<br>
<a href="https://signup.live.com/signup.aspx?id=60969">https://signup.live.com/signup.aspx?id=60969</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0086/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0087.php">Samuel Thibault: "Re: [hwloc-users] Wrong cache with hwloc 1.0 on windows"</a>
<li><strong>Previous message:</strong> <a href="0085.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0087.php">Samuel Thibault: "Re: [hwloc-users] Wrong cache with hwloc 1.0 on windows"</a>
<li><strong>Reply:</strong> <a href="0087.php">Samuel Thibault: "Re: [hwloc-users] Wrong cache with hwloc 1.0 on windows"</a>
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
