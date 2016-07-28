<?
$subject_val = "Re: [OMPI users] new map-by-obj has a problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 19:10:55 2014" -->
<!-- isoreceived="20140228001055" -->
<!-- sent="Fri, 28 Feb 2014 09:10:37 +0900" -->
<!-- isosent="20140228001037" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] new map-by-obj has a problem" -->
<!-- id="OFFBECDD29.A81A4D59-ON49257C8D.00003CA1-49257C8D.0000FE9F_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OFDFA5DAF5.361A4815-ON49257C8C.00818583-49257C8C.00820B7C_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] new map-by-obj has a problem<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20new%20map-by-obj%20has%20a%20problem"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-02-27 19:10:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23704.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="23702.php">Ralph Castain: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="23701.php">tmishima_at_[hidden]: "Re: [OMPI users] new map-by-obj has a problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23705.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Reply:</strong> <a href="23705.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, this is just for your information.
<br>
<p>I tried to restore previous orte_rmaps_rr_byobj. Then I gets the result
<br>
below with this command line:
<br>
<p>mpirun -np 8 -host node05,node06 -report-bindings -map-by socket:pe=2
<br>
-display-map  -bind-to core:overload-allowed ~/mis/openmpi/demos/myprog
<br>
&nbsp;Data for JOB [31184,1] offset 0
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: node05  Num slots: 1    Max slots: 0    Num procs: 7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [31184,1] App: 0 Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [31184,1] App: 0 Process rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [31184,1] App: 0 Process rank: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [31184,1] App: 0 Process rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [31184,1] App: 0 Process rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [31184,1] App: 0 Process rank: 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [31184,1] App: 0 Process rank: 5
<br>
<p>&nbsp;Data for node: node06  Num slots: 1    Max slots: 0    Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [31184,1] App: 0 Process rank: 7
<br>
<p>&nbsp;=============================================================
<br>
[node06.cluster:18857] MCW rank 7 bound to socket 0[core 0[hwt 0]], socket
<br>
0[core 1[hwt 0]]: [B/B/./.][./././.]
<br>
[node05.cluster:21399] MCW rank 3 bound to socket 1[core 6[hwt 0]], socket
<br>
1[core 7[hwt 0]]: [./././.][././B/B]
<br>
[node05.cluster:21399] MCW rank 4 bound to socket 0[core 0[hwt 0]], socket
<br>
0[core 1[hwt 0]]: [B/B/./.][./././.]
<br>
[node05.cluster:21399] MCW rank 5 bound to socket 1[core 4[hwt 0]], socket
<br>
1[core 5[hwt 0]]: [./././.][B/B/./.]
<br>
[node05.cluster:21399] MCW rank 6 bound to socket 0[core 2[hwt 0]], socket
<br>
0[core 3[hwt 0]]: [././B/B][./././.]
<br>
[node05.cluster:21399] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket
<br>
0[core 1[hwt 0]]: [B/B/./.][./././.]
<br>
[node05.cluster:21399] MCW rank 1 bound to socket 1[core 4[hwt 0]], socket
<br>
1[core 5[hwt 0]]: [./././.][B/B/./.]
<br>
[node05.cluster:21399] MCW rank 2 bound to socket 0[core 2[hwt 0]], socket
<br>
0[core 3[hwt 0]]: [././B/B][./././.]
<br>
....
<br>
<p><p>Then I add &quot;-hostfile pbs_hosts&quot; and the result is:
<br>
<p>[mishima_at_manage work]$cat pbs_hosts
<br>
node05 slots=8
<br>
node06 slots=8
<br>
[mishima_at_manage work]$ mpirun -np 8 -hostfile ~/work/pbs_hosts
<br>
-report-bindings -map-by socket:pe=2 -display-map
<br>
~/mis/openmpi/demos/myprog
<br>
&nbsp;Data for JOB [30254,1] offset 0
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: node05  Num slots: 8    Max slots: 0    Num procs: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [30254,1] App: 0 Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [30254,1] App: 0 Process rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [30254,1] App: 0 Process rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [30254,1] App: 0 Process rank: 3
<br>
<p>&nbsp;Data for node: node06  Num slots: 8    Max slots: 0    Num procs: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [30254,1] App: 0 Process rank: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [30254,1] App: 0 Process rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [30254,1] App: 0 Process rank: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [30254,1] App: 0 Process rank: 7
<br>
<p>&nbsp;=============================================================
<br>
[node05.cluster:21501] MCW rank 2 bound to socket 0[core 2[hwt 0]], socket
<br>
0[core 3[hwt 0]]: [././B/B][./././.]
<br>
[node05.cluster:21501] MCW rank 3 bound to socket 1[core 6[hwt 0]], socket
<br>
1[core 7[hwt 0]]: [./././.][././B/B]
<br>
[node05.cluster:21501] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket
<br>
0[core 1[hwt 0]]: [B/B/./.][./././.]
<br>
[node05.cluster:21501] MCW rank 1 bound to socket 1[core 4[hwt 0]], socket
<br>
1[core 5[hwt 0]]: [./././.][B/B/./.]
<br>
[node06.cluster:18935] MCW rank 6 bound to socket 0[core 2[hwt 0]], socket
<br>
0[core 3[hwt 0]]: [././B/B][./././.]
<br>
[node06.cluster:18935] MCW rank 7 bound to socket 1[core 6[hwt 0]], socket
<br>
1[core 7[hwt 0]]: [./././.][././B/B]
<br>
[node06.cluster:18935] MCW rank 4 bound to socket 0[core 0[hwt 0]], socket
<br>
0[core 1[hwt 0]]: [B/B/./.][./././.]
<br>
[node06.cluster:18935] MCW rank 5 bound to socket 1[core 4[hwt 0]], socket
<br>
1[core 5[hwt 0]]: [./././.][B/B/./.]
<br>
....
<br>
<p><p>I think previous version's behavior would be close to what I expect.
<br>
<p>Tetusya
<br>
<p><span class="quotelev1">&gt; They have 4 cores/socket and 2 sockets, totally 4 X 2 = 8 cores, each.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the output of lstopo.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mishima_at_manage round_robin]$ rsh node05
</span><br>
<span class="quotelev1">&gt; Last login: Tue Feb 18 15:10:15 from manage
</span><br>
<span class="quotelev1">&gt; [mishima_at_node05 ~]$ lstopo
</span><br>
<span class="quotelev1">&gt; Machine (32GB)
</span><br>
<span class="quotelev1">&gt; NUMANode L#0 (P#0 16GB) + Socket L#0 + L3 L#0 (6144KB)
</span><br>
<span class="quotelev1">&gt; L2 L#0 (512KB) + L1d L#0 (64KB) + L1i L#0 (64KB) + Core L#0 + PU L#0
</span><br>
<span class="quotelev1">&gt; (P#0)
</span><br>
<span class="quotelev1">&gt; L2 L#1 (512KB) + L1d L#1 (64KB) + L1i L#1 (64KB) + Core L#1 + PU L#1
</span><br>
<span class="quotelev1">&gt; (P#1)
</span><br>
<span class="quotelev1">&gt; L2 L#2 (512KB) + L1d L#2 (64KB) + L1i L#2 (64KB) + Core L#2 + PU L#2
</span><br>
<span class="quotelev1">&gt; (P#2)
</span><br>
<span class="quotelev1">&gt; L2 L#3 (512KB) + L1d L#3 (64KB) + L1i L#3 (64KB) + Core L#3 + PU L#3
</span><br>
<span class="quotelev1">&gt; (P#3)
</span><br>
<span class="quotelev1">&gt; NUMANode L#1 (P#1 16GB) + Socket L#1 + L3 L#1 (6144KB)
</span><br>
<span class="quotelev1">&gt; L2 L#4 (512KB) + L1d L#4 (64KB) + L1i L#4 (64KB) + Core L#4 + PU L#4
</span><br>
<span class="quotelev1">&gt; (P#4)
</span><br>
<span class="quotelev1">&gt; L2 L#5 (512KB) + L1d L#5 (64KB) + L1i L#5 (64KB) + Core L#5 + PU L#5
</span><br>
<span class="quotelev1">&gt; (P#5)
</span><br>
<span class="quotelev1">&gt; L2 L#6 (512KB) + L1d L#6 (64KB) + L1i L#6 (64KB) + Core L#6 + PU L#6
</span><br>
<span class="quotelev1">&gt; (P#6)
</span><br>
<span class="quotelev1">&gt; L2 L#7 (512KB) + L1d L#7 (64KB) + L1i L#7 (64KB) + Core L#7 + PU L#7
</span><br>
<span class="quotelev1">&gt; (P#7)
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I foucused on byobj_span and bynode. I didn't notice byobj was modified,
</span><br>
<span class="quotelev1">&gt; sorry.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tetsuya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hmmm..what does your node look like again (sockets and cores)?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 27, 2014, at 3:19 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi Ralph, I'm afraid to say your new &quot;map-by obj&quot; causes another
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have overload message with this command line as shown below:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun -np 8 -host node05,node06 -report-bindings -map-by socket:pe=2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -display-map ~/mis/openmpi/d
</span><br>
<span class="quotelev3">&gt; &gt; &gt; emos/myprog
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev3">&gt; &gt; &gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev3">&gt; &gt; &gt; processes than cpus on a resource:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Bind to:         CORE
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Node:            node05
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   #processes:  2
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   #cpus:          1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; option to your binding directive.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Then, I add &quot;-bind-to core:overload-allowed&quot; to see what happenes.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun -np 8 -host node05,node06 -report-bindings -map-by socket:pe=2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -display-map -bind-to core:o
</span><br>
<span class="quotelev3">&gt; &gt; &gt; verload-allowed ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Data for JOB [14398,1] offset 0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Data for node: node05  Num slots: 1    Max slots: 0    Num procs: 4
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Process OMPI jobid: [14398,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Process OMPI jobid: [14398,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Process OMPI jobid: [14398,1] App: 0 Process rank: 2
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Process OMPI jobid: [14398,1] App: 0 Process rank: 3
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Data for node: node06  Num slots: 1    Max slots: 0    Num procs: 4
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Process OMPI jobid: [14398,1] App: 0 Process rank: 4
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Process OMPI jobid: [14398,1] App: 0 Process rank: 5
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Process OMPI jobid: [14398,1] App: 0 Process rank: 6
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Process OMPI jobid: [14398,1] App: 0 Process rank: 7
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; =============================================================
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [node06.cluster:18443] MCW rank 6 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [node05.cluster:20901] MCW rank 2 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [node06.cluster:18443] MCW rank 7 bound to socket 0[core 2[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [node05.cluster:20901] MCW rank 3 bound to socket 0[core 2[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [node06.cluster:18443] MCW rank 4 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [node05.cluster:20901] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [node06.cluster:18443] MCW rank 5 bound to socket 0[core 2[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [node05.cluster:20901] MCW rank 1 bound to socket 0[core 2[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello world from process 4 of 8
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello world from process 2 of 8
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello world from process 6 of 8
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello world from process 0 of 8
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello world from process 5 of 8
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello world from process 1 of 8
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello world from process 7 of 8
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello world from process 3 of 8
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; When I add &quot;map-by obj:span&quot;, it works fine:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun -np 8 -host node05,node06 -report-bindings -map-by
</span><br>
<span class="quotelev1">&gt; socket:pe=2,span
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -display-map  ~/mis/ope
</span><br>
<span class="quotelev3">&gt; &gt; &gt; nmpi/demos/myprog
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Data for JOB [14703,1] offset 0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Data for node: node05  Num slots: 1    Max slots: 0    Num procs: 4
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Process OMPI jobid: [14703,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Process OMPI jobid: [14703,1] App: 0 Process rank: 2
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Process OMPI jobid: [14703,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Process OMPI jobid: [14703,1] App: 0 Process rank: 3
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Data for node: node06  Num slots: 1    Max slots: 0    Num procs: 4
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Process OMPI jobid: [14703,1] App: 0 Process rank: 4
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Process OMPI jobid: [14703,1] App: 0 Process rank: 6
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Process OMPI jobid: [14703,1] App: 0 Process rank: 5
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Process OMPI jobid: [14703,1] App: 0 Process rank: 7
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; =============================================================
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [node06.cluster:18491] MCW rank 6 bound to socket 0[core 2[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [node05.cluster:20949] MCW rank 2 bound to socket 0[core 2[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [node06.cluster:18491] MCW rank 7 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1[core 7[hwt 0]]: [./././.][././B/B]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [node05.cluster:20949] MCW rank 3 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1[core 7[hwt 0]]: [./././.][././B/B]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [node06.cluster:18491] MCW rank 4 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [node05.cluster:20949] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [node06.cluster:18491] MCW rank 5 bound to socket 1[core 4[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1[core 5[hwt 0]]: [./././.][B/B/./.]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [node05.cluster:20949] MCW rank 1 bound to socket 1[core 4[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1[core 5[hwt 0]]: [./././.][B/B/./.]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ....
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; So, byobj_span would be okay. Of course, bynode and byslot should be
</span><br>
<span class="quotelev1">&gt; okay.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Could you take a look at orte_rmaps_rr_byobj again?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23704.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="23702.php">Ralph Castain: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="23701.php">tmishima_at_[hidden]: "Re: [OMPI users] new map-by-obj has a problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23705.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Reply:</strong> <a href="23705.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
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
