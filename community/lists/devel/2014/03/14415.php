<?
$subject_val = "[OMPI devel] system call failed during shared memory initialization with openmpi-1.8a1r31254";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 28 05:46:25 2014" -->
<!-- isoreceived="20140328094625" -->
<!-- sent="Fri, 28 Mar 2014 18:45:31 +0900" -->
<!-- isosent="20140328094531" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI devel] system call failed during shared memory initialization with openmpi-1.8a1r31254" -->
<!-- id="OF191F9548.9E587B6E-ON49257CA9.00332658-49257CA9.0035AF26_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> [OMPI devel] system call failed during shared memory initialization with openmpi-1.8a1r31254<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20system%20call%20failed%20during%20shared%20memory%20initialization%20with%20openmpi-1.8a1r31254"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-03-28 05:45:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14416.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] system call failed during shared memory initialization	with openmpi-1.8a1r31254"</a>
<li><strong>Previous message:</strong> <a href="14414.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14416.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] system call failed during shared memory initialization	with openmpi-1.8a1r31254"</a>
<li><strong>Reply:</strong> <a href="14416.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] system call failed during shared memory initialization	with openmpi-1.8a1r31254"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I saw this error as shown below with openmpi-1.8a1r31254.
<br>
I've never seen it before with openmpi-1.7.5.
<br>
<p>The message implies it's related to vader and I can stop
<br>
it by excluding vader from btl, -mca btl ^vader.
<br>
<p>Could someone fix this problem?
<br>
<p>Tetsuya
<br>
<p>[mishima_at_manage openmpi]$ mpirun -np 16 -host node03,node04 -map-by
<br>
numa:pe=4 -display-map -report-bindings -bind-to cor
<br>
e ./demos/myprog
<br>
&nbsp;Data for JOB [17579,1] offset 0
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: node03  Num slots: 1    Max slots: 0    Num procs: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [17579,1] App: 0 Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [17579,1] App: 0 Process rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [17579,1] App: 0 Process rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [17579,1] App: 0 Process rank: 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [17579,1] App: 0 Process rank: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [17579,1] App: 0 Process rank: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [17579,1] App: 0 Process rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [17579,1] App: 0 Process rank: 7
<br>
<p>&nbsp;Data for node: node04  Num slots: 1    Max slots: 0    Num procs: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [17579,1] App: 0 Process rank: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [17579,1] App: 0 Process rank: 9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [17579,1] App: 0 Process rank: 10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [17579,1] App: 0 Process rank: 11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [17579,1] App: 0 Process rank: 12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [17579,1] App: 0 Process rank: 13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [17579,1] App: 0 Process rank: 14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [17579,1] App: 0 Process rank: 15
<br>
<p>&nbsp;=============================================================
<br>
[node03.cluster:23025] MCW rank 4 bound to socket 2[core 16[hwt 0]], socket
<br>
2[core 17[hwt 0]], socket 2[core 18[hwt 0]],
<br>
&nbsp;socket 2[core 19[hwt 0]]:
<br>
[./././././././.][./././././././.][B/B/B/B/./././.][./././././././.]
<br>
[node03.cluster:23025] MCW rank 5 bound to socket 2[core 20[hwt 0]], socket
<br>
2[core 21[hwt 0]], socket 2[core 22[hwt 0]],
<br>
&nbsp;socket 2[core 23[hwt 0]]:
<br>
[./././././././.][./././././././.][././././B/B/B/B][./././././././.]
<br>
[node03.cluster:23025] MCW rank 6 bound to socket 3[core 24[hwt 0]], socket
<br>
3[core 25[hwt 0]], socket 3[core 26[hwt 0]],
<br>
&nbsp;socket 3[core 27[hwt 0]]:
<br>
[./././././././.][./././././././.][./././././././.][B/B/B/B/./././.]
<br>
[node03.cluster:23025] MCW rank 7 bound to socket 3[core 28[hwt 0]], socket
<br>
3[core 29[hwt 0]], socket 3[core 30[hwt 0]],
<br>
&nbsp;socket 3[core 31[hwt 0]]:
<br>
[./././././././.][./././././././.][./././././././.][././././B/B/B/B]
<br>
[node03.cluster:23025] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket
<br>
0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
<br>
cket 0[core 3[hwt 0]]:
<br>
[B/B/B/B/./././.][./././././././.][./././././././.][./././././././.]
<br>
[node04.cluster:29332] MCW rank 10 bound to socket 1[core 8[hwt 0]], socket
<br>
1[core 9[hwt 0]], socket 1[core 10[hwt 0]],
<br>
socket 1[core 11[hwt 0]]:
<br>
[./././././././.][B/B/B/B/./././.][./././././././.][./././././././.]
<br>
[node04.cluster:29332] MCW rank 11 bound to socket 1[core 12[hwt 0]],
<br>
socket 1[core 13[hwt 0]], socket 1[core 14[hwt 0]]
<br>
, socket 1[core 15[hwt 0]]:
<br>
[./././././././.][././././B/B/B/B][./././././././.][./././././././.]
<br>
[node04.cluster:29332] MCW rank 12 bound to socket 2[core 16[hwt 0]],
<br>
socket 2[core 17[hwt 0]], socket 2[core 18[hwt 0]]
<br>
, socket 2[core 19[hwt 0]]:
<br>
[./././././././.][./././././././.][B/B/B/B/./././.][./././././././.]
<br>
[node04.cluster:29332] MCW rank 13 bound to socket 2[core 20[hwt 0]],
<br>
socket 2[core 21[hwt 0]], socket 2[core 22[hwt 0]]
<br>
, socket 2[core 23[hwt 0]]:
<br>
[./././././././.][./././././././.][././././B/B/B/B][./././././././.]
<br>
[node04.cluster:29332] MCW rank 14 bound to socket 3[core 24[hwt 0]],
<br>
socket 3[core 25[hwt 0]], socket 3[core 26[hwt 0]]
<br>
, socket 3[core 27[hwt 0]]:
<br>
[./././././././.][./././././././.][./././././././.][B/B/B/B/./././.]
<br>
[node04.cluster:29332] MCW rank 15 bound to socket 3[core 28[hwt 0]],
<br>
socket 3[core 29[hwt 0]], socket 3[core 30[hwt 0]]
<br>
, socket 3[core 31[hwt 0]]:
<br>
[./././././././.][./././././././.][./././././././.][././././B/B/B/B]
<br>
[node04.cluster:29332] MCW rank 8 bound to socket 0[core 0[hwt 0]], socket
<br>
0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
<br>
cket 0[core 3[hwt 0]]:
<br>
[B/B/B/B/./././.][./././././././.][./././././././.][./././././././.]
<br>
[node04.cluster:29332] MCW rank 9 bound to socket 0[core 4[hwt 0]], socket
<br>
0[core 5[hwt 0]], socket 0[core 6[hwt 0]], so
<br>
cket 0[core 7[hwt 0]]:
<br>
[././././B/B/B/B][./././././././.][./././././././.][./././././././.]
<br>
[node03.cluster:23025] MCW rank 1 bound to socket 0[core 4[hwt 0]], socket
<br>
0[core 5[hwt 0]], socket 0[core 6[hwt 0]], so
<br>
cket 0[core 7[hwt 0]]:
<br>
[././././B/B/B/B][./././././././.][./././././././.][./././././././.]
<br>
[node03.cluster:23025] MCW rank 2 bound to socket 1[core 8[hwt 0]], socket
<br>
1[core 9[hwt 0]], socket 1[core 10[hwt 0]], s
<br>
ocket 1[core 11[hwt 0]]:
<br>
[./././././././.][B/B/B/B/./././.][./././././././.][./././././././.]
<br>
[node03.cluster:23025] MCW rank 3 bound to socket 1[core 12[hwt 0]], socket
<br>
1[core 13[hwt 0]], socket 1[core 14[hwt 0]],
<br>
&nbsp;socket 1[core 15[hwt 0]]:
<br>
[./././././././.][././././B/B/B/B][./././././././.][./././././././.]
<br>
Hello world from process 0 of 16
<br>
Hello world from process 5 of 16
<br>
Hello world from process 2 of 16
<br>
Hello world from process 4 of 16
<br>
Hello world from process 1 of 16
<br>
Hello world from process 7 of 16
<br>
Hello world from process 3 of 16
<br>
Hello world from process 6 of 16
<br>
Hello world from process 10 of 16
<br>
Hello world from process 9 of 16
<br>
Hello world from process 8 of 16
<br>
Hello world from process 13 of 16
<br>
Hello world from process 12 of 16
<br>
Hello world from process 11 of 16
<br>
Hello world from process 14 of 16
<br>
Hello world from process 15 of 16
<br>
--------------------------------------------------------------------------
<br>
A system call failed during shared memory initialization that should
<br>
not have.  It is likely that your MPI job will now either abort or
<br>
experience performance degradation.
<br>
<p>&nbsp;&nbsp;Local host:  node03.cluster
<br>
&nbsp;&nbsp;System call: unlink
<br>
(2) /tmp/openmpi-sessions-mishima_at_node03_0/17579/1/vader_segment.node03.0
<br>
&nbsp;&nbsp;Error:       No such file or directory (errno 2)
<br>
--------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14416.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] system call failed during shared memory initialization	with openmpi-1.8a1r31254"</a>
<li><strong>Previous message:</strong> <a href="14414.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14416.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] system call failed during shared memory initialization	with openmpi-1.8a1r31254"</a>
<li><strong>Reply:</strong> <a href="14416.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] system call failed during shared memory initialization	with openmpi-1.8a1r31254"</a>
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
