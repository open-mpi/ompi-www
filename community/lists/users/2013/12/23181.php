<?
$subject_val = "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 11 00:01:15 2013" -->
<!-- isoreceived="20131211050115" -->
<!-- sent="Wed, 11 Dec 2013 13:07:00 +0900" -->
<!-- isosent="20131211040700" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager" -->
<!-- id="OF8971C8DD.1953598B-ON49257C3E.0016283C-49257C3E.00169FAA_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FB834A80-D60F-4087-AD72-D920DA0417A0_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque%20manager"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-12-10 23:07:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23182.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Previous message:</strong> <a href="23180.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646 with	-hostfile	option	under	Torque manager"</a>
<li><strong>In reply to:</strong> <a href="23180.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646 with	-hostfile	option	under	Torque manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23206.php">tmishima_at_[hidden]: "[OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
<li><strong>Reply:</strong> <a href="23206.php">tmishima_at_[hidden]: "[OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, Ralph.
<br>
<p>I just hope that it helps you to improve the quality of openmpi-1.7 series.
<br>
<p>Tetsuya Mishima
<br>
<p><p><span class="quotelev1">&gt; Hmmm...okay, I understand the scenario. Must be something in the algo
</span><br>
when it only has one node, so it shouldn't be too hard to track down.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm off on travel for a few days, but will return to this when I get
</span><br>
back.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for delay - will try to look at this while I'm gone, but can't
</span><br>
promise anything :-(
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 10, 2013, at 6:58 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph, sorry for confusing.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We usually logon to &quot;manage&quot;, which is our control node.
</span><br>
<span class="quotelev2">&gt; &gt; From manage, we submit job or enter a remote node such as
</span><br>
<span class="quotelev2">&gt; &gt; node03 by torque interactive mode(qsub -I).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; At that time, instead of torque, I just did rsh to node03 from manage
</span><br>
<span class="quotelev2">&gt; &gt; and ran myprog on the node. I hope you could understand what I did.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now, I retried with &quot;-host node03&quot;, which still causes the problem:
</span><br>
<span class="quotelev2">&gt; &gt; (I comfirmed local run on manage caused the same problem too)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage ~]$ rsh node03
</span><br>
<span class="quotelev2">&gt; &gt; Last login: Wed Dec 11 11:38:57 from manage
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_node03 ~]$ cd ~/Desktop/openmpi-1.7/demos/
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_node03 demos]$
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_node03 demos]$ mpirun -np 8 -host node03 -report-bindings
</span><br>
<span class="quotelev2">&gt; &gt; -cpus-per-proc 4 -map-by socket myprog
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev2">&gt; &gt; processes than cpus on a resource:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Bind to:         CORE
</span><br>
<span class="quotelev2">&gt; &gt;   Node:            node03
</span><br>
<span class="quotelev2">&gt; &gt;   #processes:  2
</span><br>
<span class="quotelev2">&gt; &gt;   #cpus:          1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev2">&gt; &gt; option to your binding directive.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It' strange, but I have to report that &quot;-map-by socket:span&quot; worked
</span><br>
well.
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_node03 demos]$ mpirun -np 8 -host node03 -report-bindings
</span><br>
<span class="quotelev2">&gt; &gt; -cpus-per-proc 4 -map-by socket:span myprog
</span><br>
<span class="quotelev2">&gt; &gt; [node03.cluster:11871] MCW rank 2 bound to socket 1[core 8[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 1[core 9[hwt 0]], socket 1[core 10[hwt 0]], s
</span><br>
<span class="quotelev2">&gt; &gt; ocket 1[core 11[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt; [./././././././.][B/B/B/B/./././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev2">&gt; &gt; [node03.cluster:11871] MCW rank 3 bound to socket 1[core 12[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 1[core 13[hwt 0]], socket 1[core 14[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket 1[core 15[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt; [./././././././.][././././B/B/B/B][./././././././.][./././././././.]
</span><br>
<span class="quotelev2">&gt; &gt; [node03.cluster:11871] MCW rank 4 bound to socket 2[core 16[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 2[core 17[hwt 0]], socket 2[core 18[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket 2[core 19[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt; [./././././././.][./././././././.][B/B/B/B/./././.][./././././././.]
</span><br>
<span class="quotelev2">&gt; &gt; [node03.cluster:11871] MCW rank 5 bound to socket 2[core 20[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 2[core 21[hwt 0]], socket 2[core 22[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket 2[core 23[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt; [./././././././.][./././././././.][././././B/B/B/B][./././././././.]
</span><br>
<span class="quotelev2">&gt; &gt; [node03.cluster:11871] MCW rank 6 bound to socket 3[core 24[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 3[core 25[hwt 0]], socket 3[core 26[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket 3[core 27[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt; [./././././././.][./././././././.][./././././././.][B/B/B/B/./././.]
</span><br>
<span class="quotelev2">&gt; &gt; [node03.cluster:11871] MCW rank 7 bound to socket 3[core 28[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 3[core 29[hwt 0]], socket 3[core 30[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket 3[core 31[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt; [./././././././.][./././././././.][./././././././.][././././B/B/B/B]
</span><br>
<span class="quotelev2">&gt; &gt; [node03.cluster:11871] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
</span><br>
<span class="quotelev2">&gt; &gt; cket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt; [B/B/B/B/./././.][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev2">&gt; &gt; [node03.cluster:11871] MCW rank 1 bound to socket 0[core 4[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 0[core 5[hwt 0]], socket 0[core 6[hwt 0]], so
</span><br>
<span class="quotelev2">&gt; &gt; cket 0[core 7[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt; [././././B/B/B/B][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 2 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 6 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 3 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 7 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 1 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 5 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 0 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 4 of 8
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Dec 10, 2013, at 6:05 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I tried again with -cpus-per-proc 2 as shown below.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Here, I found that &quot;-map-by socket:span&quot; worked well.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [mishima_at_node03 demos]$ mpirun -np 8 -report-bindings -cpus-per-proc
</span><br>
2
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -map-by socket:span myprog
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node03.cluster:10879] MCW rank 2 bound to socket 1[core 8[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1[core 9[hwt 0]]: [./././././././.][B/B/././.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node03.cluster:10879] MCW rank 3 bound to socket 1[core 10[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1[core 11[hwt 0]]: [./././././././.][././B/B
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /./././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node03.cluster:10879] MCW rank 4 bound to socket 2[core 16[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 2[core 17[hwt 0]]: [./././././././.][./././.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /./././.][B/B/./././././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node03.cluster:10879] MCW rank 5 bound to socket 2[core 18[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 2[core 19[hwt 0]]: [./././././././.][./././.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /./././.][././B/B/./././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node03.cluster:10879] MCW rank 6 bound to socket 3[core 24[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 3[core 25[hwt 0]]: [./././././././.][./././.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /./././.][./././././././.][B/B/./././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node03.cluster:10879] MCW rank 7 bound to socket 3[core 26[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 3[core 27[hwt 0]]: [./././././././.][./././.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /./././.][./././././././.][././B/B/./././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node03.cluster:10879] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./././././.][././././.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node03.cluster:10879] MCW rank 1 bound to socket 0[core 2[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B/./././.][././././.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 1 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 0 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 4 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 2 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 7 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 6 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 5 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 3 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [mishima_at_node03 demos]$ mpirun -np 8 -report-bindings -cpus-per-proc
</span><br>
2
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -map-by socket myprog
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node03.cluster:10921] MCW rank 2 bound to socket 0[core 4[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0[core 5[hwt 0]]: [././././B/B/./.][././././.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node03.cluster:10921] MCW rank 3 bound to socket 0[core 6[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0[core 7[hwt 0]]: [././././././B/B][././././.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node03.cluster:10921] MCW rank 4 bound to socket 1[core 8[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1[core 9[hwt 0]]: [./././././././.][B/B/././.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node03.cluster:10921] MCW rank 5 bound to socket 1[core 10[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1[core 11[hwt 0]]: [./././././././.][././B/B
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /./././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node03.cluster:10921] MCW rank 6 bound to socket 1[core 12[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1[core 13[hwt 0]]: [./././././././.][./././.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /B/B/./.][./././././././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node03.cluster:10921] MCW rank 7 bound to socket 1[core 14[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1[core 15[hwt 0]]: [./././././././.][./././.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /././B/B][./././././././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node03.cluster:10921] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./././././.][././././.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node03.cluster:10921] MCW rank 1 bound to socket 0[core 2[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B/./././.][././././.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 5 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 1 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 6 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 4 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 2 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 0 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 7 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 3 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &quot;-np 8&quot; and &quot;-cpus-per-proc 4&quot; just filled all sockets.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; In this case, I guess &quot;-map-by socket:span&quot; and &quot;-map-by socket&quot; has
</span><br>
<span class="quotelev2">&gt; &gt; same
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; meaning.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Therefore, there's no problem about that. Sorry for distubing.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No problem - glad you could clear that up :-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; By the way, through this test, I found another problem.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Without torque manager and just using rsh, it causes the same error
</span><br>
<span class="quotelev2">&gt; &gt; like
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; below:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [mishima_at_manage openmpi-1.7]$ rsh node03
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Last login: Wed Dec 11 09:42:02 from manage
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [mishima_at_node03 ~]$ cd ~/Desktop/openmpi-1.7/demos/
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [mishima_at_node03 demos]$ mpirun -np 8 -report-bindings -cpus-per-proc
</span><br>
4
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -map-by socket myprog
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I don't understand the difference here - you are simply starting it
</span><br>
from
<br>
<span class="quotelev2">&gt; &gt; a different node? It looks like everything is expected to run local to
</span><br>
<span class="quotelev2">&gt; &gt; mpirun, yes? So there is no rsh actually involved here.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Are you still running in an allocation?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If you run this with &quot;-host node03&quot; on the cmd line, do you see the
</span><br>
same
<br>
<span class="quotelev2">&gt; &gt; problem?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  Bind to:         CORE
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  Node:            node03
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  #processes:  2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  #cpus:          1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; option to your binding directive.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [mishima_at_node03 demos]$
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [mishima_at_node03 demos]$ mpirun -np 8 -report-bindings -cpus-per-proc
</span><br>
4
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; myprog
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node03.cluster:11036] MCW rank 2 bound to socket 1[core 8[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1[core 9[hwt 0]], socket 1[core 10[hwt 0]], s
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ocket 1[core 11[hwt 0]]:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [./././././././.][B/B/B/B/./././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node03.cluster:11036] MCW rank 3 bound to socket 1[core 12[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1[core 13[hwt 0]], socket 1[core 14[hwt 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; socket 1[core 15[hwt 0]]:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [./././././././.][././././B/B/B/B][./././././././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node03.cluster:11036] MCW rank 4 bound to socket 2[core 16[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 2[core 17[hwt 0]], socket 2[core 18[hwt 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; socket 2[core 19[hwt 0]]:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [./././././././.][./././././././.][B/B/B/B/./././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node03.cluster:11036] MCW rank 5 bound to socket 2[core 20[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 2[core 21[hwt 0]], socket 2[core 22[hwt 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; socket 2[core 23[hwt 0]]:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [./././././././.][./././././././.][././././B/B/B/B][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node03.cluster:11036] MCW rank 6 bound to socket 3[core 24[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 3[core 25[hwt 0]], socket 3[core 26[hwt 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; socket 3[core 27[hwt 0]]:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [./././././././.][./././././././.][./././././././.][B/B/B/B/./././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node03.cluster:11036] MCW rank 7 bound to socket 3[core 28[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 3[core 29[hwt 0]], socket 3[core 30[hwt 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; socket 3[core 31[hwt 0]]:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [./././././././.][./././././././.][./././././././.][././././B/B/B/B]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node03.cluster:11036] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; cket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [B/B/B/B/./././.][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node03.cluster:11036] MCW rank 1 bound to socket 0[core 4[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0[core 5[hwt 0]], socket 0[core 6[hwt 0]], so
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; cket 0[core 7[hwt 0]]:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [././././B/B/B/B][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 4 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 2 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 6 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 5 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 3 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 7 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 0 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello world from process 1 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hmmm...that's strange. I only have 2 sockets on my system, but let
</span><br>
me
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; poke around a bit and see what might be happening.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Dec 10, 2013, at 4:47 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thanks. I didn't know the meaning of &quot;socket:span&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; But it still causes the problem, which seems socket:span doesn't
</span><br>
<span class="quotelev2">&gt; &gt; work.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [mishima_at_manage demos]$ qsub -I -l nodes=node03:ppn=32
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; qsub: waiting for job 8265.manage.cluster to start
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; qsub: job 8265.manage.cluster ready
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [mishima_at_node03 ~]$ cd ~/Desktop/openmpi-1.7/demos/
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [mishima_at_node03 demos]$ mpirun -np 8 -report-bindings
</span><br>
-cpus-per-proc
<br>
<span class="quotelev2">&gt; &gt; 4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -map-by socket:span myprog
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [node03.cluster:10262] MCW rank 2 bound to socket 1[core 8[hwt 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 1[core 9[hwt 0]], socket 1[core 10[hwt 0]], s
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ocket 1[core 11[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
[./././././././.][B/B/B/B/./././.][./././././././.][./././././././.]
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [node03.cluster:10262] MCW rank 3 bound to socket 1[core 12[hwt
</span><br>
0]],
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 1[core 13[hwt 0]], socket 1[core 14[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; socket 1[core 15[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
[./././././././.][././././B/B/B/B][./././././././.][./././././././.]
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [node03.cluster:10262] MCW rank 4 bound to socket 2[core 16[hwt
</span><br>
0]],
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2[core 17[hwt 0]], socket 2[core 18[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; socket 2[core 19[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
[./././././././.][./././././././.][B/B/B/B/./././.][./././././././.]
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [node03.cluster:10262] MCW rank 5 bound to socket 2[core 20[hwt
</span><br>
0]],
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2[core 21[hwt 0]], socket 2[core 22[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; socket 2[core 23[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
[./././././././.][./././././././.][././././B/B/B/B][./././././././.]
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [node03.cluster:10262] MCW rank 6 bound to socket 3[core 24[hwt
</span><br>
0]],
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 3[core 25[hwt 0]], socket 3[core 26[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; socket 3[core 27[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
[./././././././.][./././././././.][./././././././.][B/B/B/B/./././.]
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [node03.cluster:10262] MCW rank 7 bound to socket 3[core 28[hwt
</span><br>
0]],
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 3[core 29[hwt 0]], socket 3[core 30[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; socket 3[core 31[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
[./././././././.][./././././././.][./././././././.][././././B/B/B/B]
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [node03.cluster:10262] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; cket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
[B/B/B/B/./././.][./././././././.][./././././././.][./././././././.]
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [node03.cluster:10262] MCW rank 1 bound to socket 0[core 4[hwt 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 0[core 5[hwt 0]], socket 0[core 6[hwt 0]], so
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; cket 0[core 7[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
[././././B/B/B/B][./././././././.][./././././././.][./././././././.]
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hello world from process 0 of 8
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hello world from process 3 of 8
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hello world from process 1 of 8
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hello world from process 4 of 8
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hello world from process 6 of 8
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hello world from process 5 of 8
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hello world from process 2 of 8
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hello world from process 7 of 8
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; No, that is actually correct. We map a socket until full, then
</span><br>
move
<br>
<span class="quotelev2">&gt; &gt; to
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; the next. What you want is --map-by socket:span
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; On Dec 10, 2013, at 3:42 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I had a time to try your patch yesterday using
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.7.4a1r29646.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; It stopped the error but unfortunately &quot;mapping by
</span><br>
socket&quot; itself
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; didn't
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; work
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; well as shown bellow:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [mishima_at_manage demos]$ qsub -I -l nodes=1:ppn=32
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; qsub: waiting for job 8260.manage.cluster to start
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; qsub: job 8260.manage.cluster ready
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [mishima_at_node04 ~]$ cd ~/Desktop/openmpi-1.7/demos/
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [mishima_at_node04 demos]$ mpirun -np 8 -report-bindings
</span><br>
<span class="quotelev2">&gt; &gt; -cpus-per-proc
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; -map-by socket myprog
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node04.cluster:27489] MCW rank 2 bound to socket 1[core 8[hwt
</span><br>
0]],
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 1[core 9[hwt 0]], socket 1[core 10[hwt 0]], s
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ocket 1[core 11[hwt 0]]:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; [./././././././.][B/B/B/B/./././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node04.cluster:27489] MCW rank 3 bound to socket 1[core 12[hwt
</span><br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 1[core 13[hwt 0]], socket 1[core 14[hwt 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; socket 1[core 15[hwt 0]]:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; [./././././././.][././././B/B/B/B][./././././././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node04.cluster:27489] MCW rank 4 bound to socket 2[core 16[hwt
</span><br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 2[core 17[hwt 0]], socket 2[core 18[hwt 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; socket 2[core 19[hwt 0]]:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; [./././././././.][./././././././.][B/B/B/B/./././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node04.cluster:27489] MCW rank 5 bound to socket 2[core 20[hwt
</span><br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 2[core 21[hwt 0]], socket 2[core 22[hwt 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; socket 2[core 23[hwt 0]]:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; [./././././././.][./././././././.][././././B/B/B/B][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node04.cluster:27489] MCW rank 6 bound to socket 3[core 24[hwt
</span><br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 3[core 25[hwt 0]], socket 3[core 26[hwt 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; socket 3[core 27[hwt 0]]:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; [./././././././.][./././././././.][./././././././.][B/B/B/B/./././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node04.cluster:27489] MCW rank 7 bound to socket 3[core 28[hwt
</span><br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 3[core 29[hwt 0]], socket 3[core 30[hwt 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; socket 3[core 31[hwt 0]]:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; [./././././././.][./././././././.][./././././././.][././././B/B/B/B]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node04.cluster:27489] MCW rank 0 bound to socket 0[core 0[hwt
</span><br>
0]],
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; [B/B/B/B/./././.][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node04.cluster:27489] MCW rank 1 bound to socket 0[core 4[hwt
</span><br>
0]],
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 5[hwt 0]], socket 0[core 6[hwt 0]], so
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cket 0[core 7[hwt 0]]:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; [././././B/B/B/B][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 2 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 1 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 3 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 0 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 6 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 5 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 4 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 7 of 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I think this should be like this:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 00
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; [B/B/B/B/./././.][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 01
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; [./././././././.][B/B/B/B/./././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 02
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; [./././././././.][./././././././.][B/B/B/B/./././.][./././././././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I fixed this under the trunk (was an issue regardless of RM) and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; have
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; scheduled it for 1.7.4.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Nov 25, 2013, at 4:22 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank you very much for your quick response.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm afraid to say that I found one more issuse...
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It's not so serious. Please check it when you have a lot of
</span><br>
time.
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The problem is cpus-per-proc with -map-by option under Torque
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; manager.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It doesn't work as shown below. I guess you can get the same
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; behaviour under Slurm manager.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Of course, if I remove -map-by option, it works quite well.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [mishima_at_manage testbed2]$ qsub -I -l nodes=1:ppn=32
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; qsub: waiting for job 8116.manage.cluster to start
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; qsub: job 8116.manage.cluster ready
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [mishima_at_node03 ~]$ cd ~/Ducom/testbed2
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [mishima_at_node03 testbed2]$ mpirun -np 8 -report-bindings
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -cpus-per-proc
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -map-by socket mPre
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Bind to:         CORE
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Node:            node03&gt;&gt;&gt;&gt;&gt;&gt;&gt; #processes:  2
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #cpus:          1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You can override this protection by adding the
</span><br>
&quot;overload-allowed&quot;
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; option to your binding directive.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [mishima_at_node03 testbed2]$ mpirun -np 8 -report-bindings
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -cpus-per-proc
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mPre
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:18128] MCW rank 2 bound to socket 1[core 8[hwt
</span><br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1[core 9[hwt 0]], socket 1[core 10[hwt 0]], s
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ocket 1[core 11[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [./././././././.][B/B/B/B/./././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:18128] MCW rank 3 bound to socket 1[core 12[hwt
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1[core 13[hwt 0]], socket 1[core 14[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket 1[core 15[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [./././././././.][././././B/B/B/B][./././././././.][./././././././.]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:18128] MCW rank 4 bound to socket 2[core 16[hwt
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2[core 17[hwt 0]], socket 2[core 18[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket 2[core 19[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [./././././././.][./././././././.][B/B/B/B/./././.][./././././././.]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:18128] MCW rank 5 bound to socket 2[core 20[hwt
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2[core 21[hwt 0]], socket 2[core 22[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket 2[core 23[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [./././././././.][./././././././.][././././B/B/B/B][./././././././.]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:18128] MCW rank 6 bound to socket 3[core 24[hwt
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 3[core 25[hwt 0]], socket 3[core 26[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket 3[core 27[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [./././././././.][./././././././.][./././././././.][B/B/B/B/./././.]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:18128] MCW rank 7 bound to socket 3[core 28[hwt
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 3[core 29[hwt 0]], socket 3[core 30[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket 3[core 31[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [./././././././.][./././././././.][./././././././.][././././B/B/B/B]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:18128] MCW rank 0 bound to socket 0[core 0[hwt
</span><br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [B/B/B/B/./././.][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:18128] MCW rank 1 bound to socket 0[core 4[hwt
</span><br>
<span class="quotelev2">&gt; &gt; 0]],
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 5[hwt 0]], socket 0[core 6[hwt 0]], so
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cket 0[core 7[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [././././B/B/B/B][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Fixed and scheduled to move to 1.7.4. Thanks again!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Nov 17, 2013, at 6:11 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks! That's precisely where I was going to look when I had
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; time :-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'll update tomorrow.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sun, Nov 17, 2013 at 7:01 PM,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &lt;tmishima_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is the continuous story of &quot;Segmentation fault in
</span><br>
oob_tcp.c
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; of
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.7.4a1r29646&quot;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I found the cause.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Firstly, I noticed that your hostfile can work and mine can
</span><br>
not.
<br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Your host file:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cat hosts
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bend001 slots=12
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; My host file:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cat hosts
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; node08
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ...(total 8 lines)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I modified my script file to add &quot;slots=1&quot; to each line of my
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; hostfile
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; just before launching mpirun. Then it worked.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; My host file(modified):
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cat hosts
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; node08 slots=1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; node08 slots=1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ...(total 8 lines)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Secondary, I confirmed that there's a slight difference
</span><br>
between
<br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte/util/hostfile/hostfile.c of 1.7.3 and that of
</span><br>
<span class="quotelev2">&gt; &gt; 1.7.4a1r29646.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ diff
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; hostfile.c.org ../../../../openmpi-1.7.3/orte/util/hostfile/hostfile.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 394,401c394,399
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;     if (got_count) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;         node-&gt;slots_given = true;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;     } else if (got_max) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;         node-&gt;slots = node-&gt;slots_max;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;         node-&gt;slots_given = true;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;     } else {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;         /* should be set by obj_new, but just to be clear */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;         node-&gt;slots_given = false;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; if (!got_count) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     if (got_max) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         node-&gt;slots = node-&gt;slots_max;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     } else {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         ++node-&gt;slots;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ....
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Finally, I added the line 402 below just as a tentative trial.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Then, it worked.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cat -n orte/util/hostfile/hostfile.c:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 394      if (got_count) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 395          node-&gt;slots_given = true;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 396      } else if (got_max) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 397          node-&gt;slots = node-&gt;slots_max;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 398          node-&gt;slots_given = true;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 399      } else {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 400          /* should be set by obj_new, but just to be clear
</span><br>
<span class="quotelev2">&gt; &gt; */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 401          node-&gt;slots_given = false;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 402          ++node-&gt;slots; /* added by tmishima */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 403      }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Please fix the problem properly, because it's just based on my
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; random guess. It's related to the treatment of hostfile where
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; slots
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; information is not given.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_______________________________________________
<br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23182.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Previous message:</strong> <a href="23180.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646 with	-hostfile	option	under	Torque manager"</a>
<li><strong>In reply to:</strong> <a href="23180.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646 with	-hostfile	option	under	Torque manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23206.php">tmishima_at_[hidden]: "[OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
<li><strong>Reply:</strong> <a href="23206.php">tmishima_at_[hidden]: "[OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
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
