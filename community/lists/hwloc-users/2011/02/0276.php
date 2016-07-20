<?
$subject_val = "[hwloc-users] hwloc-ps output - how to verify process binding on the core level?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 12 22:54:37 2011" -->
<!-- isoreceived="20110213035437" -->
<!-- sent="Sat, 12 Feb 2011 19:54:30 -0800 (PST)" -->
<!-- isosent="20110213035430" -->
<!-- name="Siew Yin Chan" -->
<!-- email="sychan131_at_[hidden]" -->
<!-- subject="[hwloc-users] hwloc-ps output - how to verify process binding on the core level?" -->
<!-- id="98710.33751.qm_at_web110415.mail.gq1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [hwloc-users] hwloc-ps output - how to verify process binding on the core level?<br>
<strong>From:</strong> Siew Yin Chan (<em>sychan131_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-12 22:54:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0277.php">Brice Goglin: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on	the core level?"</a>
<li><strong>Previous message:</strong> <a href="0275.php">Samuel Thibault: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0277.php">Brice Goglin: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on	the core level?"</a>
<li><strong>Reply:</strong> <a href="0277.php">Brice Goglin: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on	the core level?"</a>
<li><strong>Maybe reply:</strong> <a href="0280.php">Samuel Thibault: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Maybe reply:</strong> <a href="0282.php">Siew Yin Chan: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good day,
<br>
I'm studying the impact of MPI process binding on communication costs in my project, and would like to use hwloc-bind to achieve fine-grained mapping control. I install hwloc 1.1.1 on a 2-socket 4-core machine (with 2 dual-core dies in each socket), and run hwloc-ps to verify the binding:
<br>
$ mpirun -Vmpirun (Open MPI) 1.5.1$ mpirun -np 4 hwloc-bind&#160;socket:0.core:0-3 ./test
<br>
hwloc-ps shows the following output:
<br>
$ hwloc-ps -p1497 &#160; &#160;Socket:0 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;./test1498 &#160; &#160;Socket:0 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;./test1499 &#160; &#160;Socket:0 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;./test1500 &#160; &#160;Socket:0 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;./test$ hwloc-ps -l1497 &#160; &#160;Socket:0 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;./test1498 &#160; &#160;Socket:0 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;./test1499 &#160; &#160;Socket:0 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;./test1500 &#160; &#160;Socket:0 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;./test$ hwloc-ps -c1497 &#160; &#160;0x00000055 &#160; &#160; &#160; &#160; &#160; &#160; &#160;./test1498 &#160; &#160;0x00000055 &#160; &#160; &#160; &#160; &#160; &#160; &#160;./test1499 &#160; &#160;0x00000055 &#160; &#160; &#160; &#160; &#160; &#160; &#160;./test1500 &#160; &#160;0x00000055 &#160; &#160; &#160; &#160; &#160; &#160; &#160;./test
<br>
<p>Questions:&#160;1. Does hwloc-bind map the processes *sequentially* on *successive* cores of the socket?2. How could hwloc-ps help verify this binding, i.e.,
<br>
process 1497 (rank 0) on socket.0:core.0process 1498&#160;(rank 1)&#160;on&#160;socket.0:core.1process 1499&#160;(rank 2)&#160;on&#160;socket.0:core.2process 1500&#160;(rank 3)&#160;on&#160;socket.0:core.3
<br>
<p>Equivalently, does the binding of `socket:0.core:0-1 socket:1.core:0-1' with hwloc-ps showing
<br>
$ hwloc-ps -l1315 &#160; &#160;L2Cache:0 L2Cache:2 &#160; &#160; &#160; &#160; &#160; &#160; ./test1316 &#160; &#160;L2Cache:0 L2Cache:2 &#160; &#160; &#160; &#160; &#160; &#160; ./test1317 &#160; &#160;L2Cache:0 L2Cache:2 &#160; &#160; &#160; &#160; &#160; &#160; ./test1318 &#160; &#160;L2Cache:0 L2Cache:2 &#160; &#160; &#160; &#160; &#160; &#160; ./test
<br>
indicate the the following? I.e.,
<br>
process&#160;1315&#160;(rank 0)&#160;on socket.0:core.0process&#160;1316&#160;(rank 1)&#160;on&#160;socket.0:core.1process&#160;1317&#160;(rank 2)&#160;on&#160;socket.1:core.0process&#160;1318&#160;(rank 3)&#160;on&#160;socket.1:core.1
<br>
<p>The topology of the machine is as follows:
<br>
$ hwloc-info -ldepth 0: &#160; &#160; &#160; &#160;1 Machine (type #1)&#160;depth 1: &#160; &#160; &#160; 2 Sockets (type #3)&#160;&#160;depth 2: &#160; &#160; &#160;4 Caches (type #4)&#160;&#160; depth 3: &#160; &#160; 8 Caches (type #4)&#160;&#160; &#160;depth 4: &#160; &#160;8 Cores (type #5)&#160;&#160; &#160; depth 5: &#160; 8 PUs (type #6)
<br>
$ lstopoMachine (16GB)&#160;&#160;Socket L#0&#160;&#160; &#160;L2 L#0 (4096KB)&#160;&#160; &#160; &#160;L1 L#0 (32KB) + Core L#0 + PU L#0 (P#0)&#160;&#160; &#160; &#160;L1 L#1 (32KB) + Core L#1 + PU L#1 (P#2)&#160;&#160; &#160;L2 L#1 (4096KB)&#160;&#160; &#160; &#160;L1 L#2 (32KB) + Core L#2 + PU L#2 (P#4)&#160;&#160; &#160; &#160;L1 L#3 (32KB) + Core L#3 + PU L#3 (P#6)&#160;&#160;Socket L#1&#160;&#160; &#160;L2 L#2 (4096KB)&#160;&#160; &#160; &#160;L1 L#4 (32KB) + Core L#4 + PU L#4 (P#1)&#160;&#160; &#160; &#160;L1 L#5 (32KB) + Core L#5 + PU L#5 (P#3)&#160;&#160; &#160;L2 L#3 (4096KB)&#160;&#160; &#160; &#160;L1 L#6 (32KB) + Core L#6 + PU L#6 (P#5)&#160;&#160; &#160; &#160;L1 L#7 (32KB) + Core L#7 + PU L#7 (P#7)
<br>
<p>Thanks.Chan


 
____________________________________________________________________________________
Never miss an email again!
Yahoo! Toolbar alerts you the instant new Mail arrives.
<a href="http://tools.search.yahoo.com/toolbar/features/mail/">http://tools.search.yahoo.com/toolbar/features/mail/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0276/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0277.php">Brice Goglin: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on	the core level?"</a>
<li><strong>Previous message:</strong> <a href="0275.php">Samuel Thibault: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0277.php">Brice Goglin: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on	the core level?"</a>
<li><strong>Reply:</strong> <a href="0277.php">Brice Goglin: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on	the core level?"</a>
<li><strong>Maybe reply:</strong> <a href="0280.php">Samuel Thibault: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
<li><strong>Maybe reply:</strong> <a href="0282.php">Siew Yin Chan: "Re: [hwloc-users] hwloc-ps output - how to verify process binding on the core level?"</a>
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
