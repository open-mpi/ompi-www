<?
$subject_val = "Re: [OMPI devel] binding output error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 20 20:04:52 2015" -->
<!-- isoreceived="20150421000452" -->
<!-- sent="Tue, 21 Apr 2015 00:04:37 +0000" -->
<!-- isosent="20150421000437" -->
<!-- name="Devendar Bureddy" -->
<!-- email="devendar_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] binding output error" -->
<!-- id="AM2PR05MB077186B346617B75ECAC4514AEEF0_at_AM2PR05MB0771.eurprd05.prod.outlook.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAMD57ofctERDd3z+fWro41hBomgvuTjJ9=eYjqF+fnzc_-Zuwg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] binding output error<br>
<strong>From:</strong> Devendar Bureddy (<em>devendar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-20 20:04:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17288.php">Gilles Gouaillardet: "Re: [OMPI devel] c_accumulate"</a>
<li><strong>Previous message:</strong> <a href="17286.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] noticing odd message"</a>
<li><strong>In reply to:</strong> <a href="17283.php">Ralph Castain: "Re: [OMPI devel] binding output error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17291.php">tmishima_at_[hidden]: "Re: [OMPI devel] binding output error"</a>
<li><strong>Reply:</strong> <a href="17291.php">tmishima_at_[hidden]: "Re: [OMPI devel] binding output error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HT is not enabled.  All node are same topo . This is reproducible even on single node.
<br>

<br>
I ran osu latency to see if it is really is mapped to other socket or not with &#226;&#128;&#147;map-by socket.  It looks likes mapping is correct as per latency test.
<br>

<br>
$mpirun -np 2 -report-bindings -map-by socket  /hpc/local/benchmarks/hpc-stack-icc/install/ompi-mellanox-v1.8/tests/osu-micro-benchmarks-4.4.1/osu_latency
<br>
[clx-orion-001:10084] MCW rank 0 bound to socket 0[core 0[hwt 0]]: [B/././././././././././././.][./././././././././././././.]
<br>
[clx-orion-001:10084] MCW rank 1 bound to socket 1[core 14[hwt 0]]: [./././././././././././././.][B/././././././././././././.]
<br>
# OSU MPI Latency Test v4.4.1
<br>
# Size          Latency (us)
<br>
0                       0.50
<br>
1                       0.50
<br>
2                       0.50
<br>
4                       0.49
<br>

<br>

<br>
$mpirun -np 2 -report-bindings -cpu-set 1,7 /hpc/local/benchmarks/hpc-stack-icc/install/ompi-mellanox-v1.8/tests/osu-micro-benchmarks-4.4.1/osu_latency
<br>
[clx-orion-001:10155] MCW rank 0 bound to socket 0[core 1[hwt 0]]: [./B/./././././././././././.][./././././././././././././.]
<br>
[clx-orion-001:10155] MCW rank 1 bound to socket 0[core 7[hwt 0]]: [./././././././B/./././././.][./././././././././././././.]
<br>
# OSU MPI Latency Test v4.4.1
<br>
# Size          Latency (us)
<br>
0                       0.23
<br>
1                       0.24
<br>
2                       0.23
<br>
4                       0.22
<br>
8                       0.23
<br>

<br>
Both hwloc and /proc/cpuinfo indicates following cpu numbering
<br>
socket 0 cpus: 0 1 2 3 4 5 6 14 15 16 17 18 19 20
<br>
socket 1 cpus: 7 8 9 10 11 12 13 21 22 23 24 25 26 27
<br>

<br>
$hwloc-info -f
<br>
Machine (256GB)
<br>
&nbsp;&nbsp;NUMANode L#0 (P#0 128GB) + Socket L#0 + L3 L#0 (35MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#0 (256KB) + L1 L#0 (32KB) + Core L#0 + PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#1 (256KB) + L1 L#1 (32KB) + Core L#1 + PU L#1 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#2 (256KB) + L1 L#2 (32KB) + Core L#2 + PU L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#3 (256KB) + L1 L#3 (32KB) + Core L#3 + PU L#3 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#4 (256KB) + L1 L#4 (32KB) + Core L#4 + PU L#4 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#5 (256KB) + L1 L#5 (32KB) + Core L#5 + PU L#5 (P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#6 (256KB) + L1 L#6 (32KB) + Core L#6 + PU L#6 (P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#7 (256KB) + L1 L#7 (32KB) + Core L#7 + PU L#7 (P#14)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#8 (256KB) + L1 L#8 (32KB) + Core L#8 + PU L#8 (P#15)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#9 (256KB) + L1 L#9 (32KB) + Core L#9 + PU L#9 (P#16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#10 (256KB) + L1 L#10 (32KB) + Core L#10 + PU L#10 (P#17)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#11 (256KB) + L1 L#11 (32KB) + Core L#11 + PU L#11 (P#18)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#12 (256KB) + L1 L#12 (32KB) + Core L#12 + PU L#12 (P#19)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#13 (256KB) + L1 L#13 (32KB) + Core L#13 + PU L#13 (P#20)
<br>
&nbsp;&nbsp;NUMANode L#1 (P#1 128GB) + Socket L#1 + L3 L#1 (35MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#14 (256KB) + L1 L#14 (32KB) + Core L#14 + PU L#14 (P#7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#15 (256KB) + L1 L#15 (32KB) + Core L#15 + PU L#15 (P#8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#16 (256KB) + L1 L#16 (32KB) + Core L#16 + PU L#16 (P#9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#17 (256KB) + L1 L#17 (32KB) + Core L#17 + PU L#17 (P#10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#18 (256KB) + L1 L#18 (32KB) + Core L#18 + PU L#18 (P#11)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#19 (256KB) + L1 L#19 (32KB) + Core L#19 + PU L#19 (P#12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#20 (256KB) + L1 L#20 (32KB) + Core L#20 + PU L#20 (P#13)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#21 (256KB) + L1 L#21 (32KB) + Core L#21 + PU L#21 (P#21)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#22 (256KB) + L1 L#22 (32KB) + Core L#22 + PU L#22 (P#22)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#23 (256KB) + L1 L#23 (32KB) + Core L#23 + PU L#23 (P#23)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#24 (256KB) + L1 L#24 (32KB) + Core L#24 + PU L#24 (P#24)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#25 (256KB) + L1 L#25 (32KB) + Core L#25 + PU L#25 (P#25)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#26 (256KB) + L1 L#26 (32KB) + Core L#26 + PU L#26 (P#26)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#27 (256KB) + L1 L#27 (32KB) + Core L#27 + PU L#27 (P#27)
<br>

<br>

<br>
So, Is --reporting-binding shows one more level of logical CPU numbering?
<br>

<br>

<br>
-Devendar
<br>

<br>

<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Monday, April 20, 2015 3:52 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] binding output error
<br>

<br>
Also, was this with HT's enabled? I'm wondering if the print code is incorrectly computing the core because it isn't correctly accounting for HT cpus.
<br>

<br>

<br>
On Mon, Apr 20, 2015 at 3:49 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
<br>
Ralph's the authority on this one, but just to be sure: are all nodes the same topology? E.g., does adding &quot;--hetero-nodes&quot; to the mpirun command line fix the problem?
<br>

<br>

<br>
<span class="quotelev1">&gt; On Apr 20, 2015, at 9:29 AM, Elena Elkina &lt;elena.elkina_at_[hidden]&lt;mailto:elena.elkina_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I faced with an issue on our cluster related to mapping &amp; binding policies on 1.8.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The matter is that --report-bindings output doesn't correspond to the locale. It looks like there is a mistake on the output itself, because it just puts serial core number while that core can be on another socket. For example,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --display-devel-map --report-bindings --map-by socket hostname
</span><br>
<span class="quotelev1">&gt;  Data for JOB [43064,1] offset 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Mapper requested: NULL  Last mapper: round_robin  Mapping policy: BYSOCKET  Ranking policy: SOCKET
</span><br>
<span class="quotelev1">&gt;  Binding policy: CORE  Cpu set: NULL  PPR: NULL  Cpus-per-rank: 1
</span><br>
<span class="quotelev1">&gt;       Num new daemons: 0      New daemon starting vpid INVALID
</span><br>
<span class="quotelev1">&gt;       Num nodes: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Data for node: clx-orion-001         Launch id: -1   State: 2
</span><br>
<span class="quotelev1">&gt;       Daemon: [[43064,0],0]   Daemon launched: True
</span><br>
<span class="quotelev1">&gt;       Num slots: 28   Slots in use: 2 Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;       Num slots allocated: 28 Max slots: 0
</span><br>
<span class="quotelev1">&gt;       Username on node: NULL
</span><br>
<span class="quotelev1">&gt;       Num procs: 2    Next node_rank: 2
</span><br>
<span class="quotelev1">&gt;       Data for proc: [[43064,1],0]
</span><br>
<span class="quotelev1">&gt;               Pid: 0  Local rank: 0   Node rank: 0    App rank: 0
</span><br>
<span class="quotelev1">&gt;               State: INITIALIZED      Restarts: 0     App_context: 0  Locale: 0-6,14-20       Bind location: 0        Binding: 0
</span><br>
<span class="quotelev1">&gt;       Data for proc: [[43064,1],1]
</span><br>
<span class="quotelev1">&gt;               Pid: 0  Local rank: 1   Node rank: 1    App rank: 1
</span><br>
<span class="quotelev1">&gt;               State: INITIALIZED      Restarts: 0     App_context: 0  Locale: 7-13,21-27      Bind location: 7        Binding: 7
</span><br>
<span class="quotelev1">&gt; [clx-orion-001:26951] MCW rank 0 bound to socket 0[core 0[hwt 0]]: [B/././././././././././././.][./././././././././././././.]
</span><br>
<span class="quotelev1">&gt; [clx-orion-001:26951] MCW rank 1 bound to socket 1[core 14[hwt 0]]: [./././././././././././././.][B/././././././././././././.]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The second process should be bound at core 7 (not core 14).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another example:
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 --display-devel-map --report-bindings --map-by core hostname
</span><br>
<span class="quotelev1">&gt;  Data for JOB [43202,1] offset 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Mapper requested: NULL  Last mapper: round_robin  Mapping policy: BYCORE  Ranking policy: CORE
</span><br>
<span class="quotelev1">&gt;  Binding policy: CORE  Cpu set: NULL  PPR: NULL  Cpus-per-rank: 1
</span><br>
<span class="quotelev1">&gt;       Num new daemons: 0      New daemon starting vpid INVALID
</span><br>
<span class="quotelev1">&gt;       Num nodes: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Data for node: clx-orion-001         Launch id: -1   State: 2
</span><br>
<span class="quotelev1">&gt;       Daemon: [[43202,0],0]   Daemon launched: True
</span><br>
<span class="quotelev1">&gt;       Num slots: 28   Slots in use: 8 Oversubscribed: FALSE
</span><br>
<span class="quotelev1">&gt;       Num slots allocated: 28 Max slots: 0
</span><br>
<span class="quotelev1">&gt;       Username on node: NULL
</span><br>
<span class="quotelev1">&gt;       Num procs: 8    Next node_rank: 8
</span><br>
<span class="quotelev1">&gt;       Data for proc: [[43202,1],0]
</span><br>
<span class="quotelev1">&gt;               Pid: 0  Local rank: 0   Node rank: 0    App rank: 0
</span><br>
<span class="quotelev1">&gt;               State: INITIALIZED      Restarts: 0     App_context: 0  Locale: 0       Bind location: 0        Binding: 0
</span><br>
<span class="quotelev1">&gt;       Data for proc: [[43202,1],1]
</span><br>
<span class="quotelev1">&gt;               Pid: 0  Local rank: 1   Node rank: 1    App rank: 1
</span><br>
<span class="quotelev1">&gt;               State: INITIALIZED      Restarts: 0     App_context: 0  Locale: 1       Bind location: 1        Binding: 1
</span><br>
<span class="quotelev1">&gt;       Data for proc: [[43202,1],2]
</span><br>
<span class="quotelev1">&gt;               Pid: 0  Local rank: 2   Node rank: 2    App rank: 2
</span><br>
<span class="quotelev1">&gt;               State: INITIALIZED      Restarts: 0     App_context: 0  Locale: 2       Bind location: 2        Binding: 2
</span><br>
<span class="quotelev1">&gt;       Data for proc: [[43202,1],3]
</span><br>
<span class="quotelev1">&gt;               Pid: 0  Local rank: 3   Node rank: 3    App rank: 3
</span><br>
<span class="quotelev1">&gt;               State: INITIALIZED      Restarts: 0     App_context: 0  Locale: 3       Bind location: 3        Binding: 3
</span><br>
<span class="quotelev1">&gt;       Data for proc: [[43202,1],4]
</span><br>
<span class="quotelev1">&gt;               Pid: 0  Local rank: 4   Node rank: 4    App rank: 4
</span><br>
<span class="quotelev1">&gt;               State: INITIALIZED      Restarts: 0     App_context: 0  Locale: 4       Bind location: 4        Binding: 4
</span><br>
<span class="quotelev1">&gt;       Data for proc: [[43202,1],5]
</span><br>
<span class="quotelev1">&gt;               Pid: 0  Local rank: 5   Node rank: 5    App rank: 5
</span><br>
<span class="quotelev1">&gt;               State: INITIALIZED      Restarts: 0     App_context: 0  Locale: 5       Bind location: 5        Binding: 5
</span><br>
<span class="quotelev1">&gt;       Data for proc: [[43202,1],6]
</span><br>
<span class="quotelev1">&gt;               Pid: 0  Local rank: 6   Node rank: 6    App rank: 6
</span><br>
<span class="quotelev1">&gt;               State: INITIALIZED      Restarts: 0     App_context: 0  Locale: 6       Bind location: 6        Binding: 6
</span><br>
<span class="quotelev1">&gt;       Data for proc: [[43202,1],7]
</span><br>
<span class="quotelev1">&gt;               Pid: 0  Local rank: 7   Node rank: 7    App rank: 7
</span><br>
<span class="quotelev1">&gt;               State: INITIALIZED      Restarts: 0     App_context: 0  Locale: 14      Bind location: 14       Binding: 14
</span><br>
<span class="quotelev1">&gt; [clx-orion-001:27069] MCW rank 0 bound to socket 0[core 0[hwt 0]]: [B/././././././././././././.][./././././././././././././.]
</span><br>
<span class="quotelev1">&gt; [clx-orion-001:27069] MCW rank 1 bound to socket 0[core 1[hwt 0]]: [./B/./././././././././././.][./././././././././././././.]
</span><br>
<span class="quotelev1">&gt; [clx-orion-001:27069] MCW rank 2 bound to socket 0[core 2[hwt 0]]: [././B/././././././././././.][./././././././././././././.]
</span><br>
<span class="quotelev1">&gt; [clx-orion-001:27069] MCW rank 3 bound to socket 0[core 3[hwt 0]]: [./././B/./././././././././.][./././././././././././././.]
</span><br>
<span class="quotelev1">&gt; [clx-orion-001:27069] MCW rank 4 bound to socket 0[core 4[hwt 0]]: [././././B/././././././././.][./././././././././././././.]
</span><br>
<span class="quotelev1">&gt; [clx-orion-001:27069] MCW rank 5 bound to socket 0[core 5[hwt 0]]: [./././././B/./././././././.][./././././././././././././.]
</span><br>
<span class="quotelev1">&gt; [clx-orion-001:27069] MCW rank 6 bound to socket 0[core 6[hwt 0]]: [././././././B/././././././.][./././././././././././././.]
</span><br>
<span class="quotelev1">&gt; [clx-orion-001:27069] MCW rank 7 bound to socket 0[core 7[hwt 0]]: [./././././././B/./././././.][./././././././././././././.]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rank 7 should be bound at core 14 instead of core 7 since core 7 is at another socket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Elena
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17273.php">http://www.open-mpi.org/community/lists/devel/2015/04/17273.php</a>
</span><br>

<br>

<br>
--
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17282.php">http://www.open-mpi.org/community/lists/devel/2015/04/17282.php</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17287/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17288.php">Gilles Gouaillardet: "Re: [OMPI devel] c_accumulate"</a>
<li><strong>Previous message:</strong> <a href="17286.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] noticing odd message"</a>
<li><strong>In reply to:</strong> <a href="17283.php">Ralph Castain: "Re: [OMPI devel] binding output error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17291.php">tmishima_at_[hidden]: "Re: [OMPI devel] binding output error"</a>
<li><strong>Reply:</strong> <a href="17291.php">tmishima_at_[hidden]: "Re: [OMPI devel] binding output error"</a>
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
