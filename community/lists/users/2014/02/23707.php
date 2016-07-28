<?
$subject_val = "Re: [OMPI users] new map-by-obj has a problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 21:11:36 2014" -->
<!-- isoreceived="20140228021136" -->
<!-- sent="Fri, 28 Feb 2014 11:11:22 +0900" -->
<!-- isosent="20140228021122" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] new map-by-obj has a problem" -->
<!-- id="OF4F088128.819DEA46-ON49257C8D.000AE380-49257C8D.000C0CE7_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AF9A6E0A-CEA4-4F98-9165-9F22605F62B4_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-02-27 21:11:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23708.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Previous message:</strong> <a href="23706.php">Ralph Castain: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="23705.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23708.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Reply:</strong> <a href="23708.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just checking the difference, not so significant meaning...
<br>
<p>Anyway, I guess it's due to the behavior when slot counts is missing
<br>
(regarded as slots=1) and it's oversubscribed unintentionally.
<br>
<p>I'm going out now, so I can't verify it quickly. If I provide the
<br>
correct slot counts, it wll work, I guess. How do you think?
<br>
<p>Tetsuya
<br>
<p><span class="quotelev1">&gt; &quot;restore&quot; in what sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 27, 2014, at 4:10 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph, this is just for your information.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tried to restore previous orte_rmaps_rr_byobj. Then I gets the result
</span><br>
<span class="quotelev2">&gt; &gt; below with this command line:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 8 -host node05,node06 -report-bindings -map-by socket:pe=2
</span><br>
<span class="quotelev2">&gt; &gt; -display-map  -bind-to core:overload-allowed ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev2">&gt; &gt; Data for JOB [31184,1] offset 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Data for node: node05  Num slots: 1    Max slots: 0    Num procs: 7
</span><br>
<span class="quotelev2">&gt; &gt;        Process OMPI jobid: [31184,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev2">&gt; &gt;        Process OMPI jobid: [31184,1] App: 0 Process rank: 2
</span><br>
<span class="quotelev2">&gt; &gt;        Process OMPI jobid: [31184,1] App: 0 Process rank: 4
</span><br>
<span class="quotelev2">&gt; &gt;        Process OMPI jobid: [31184,1] App: 0 Process rank: 6
</span><br>
<span class="quotelev2">&gt; &gt;        Process OMPI jobid: [31184,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev2">&gt; &gt;        Process OMPI jobid: [31184,1] App: 0 Process rank: 3
</span><br>
<span class="quotelev2">&gt; &gt;        Process OMPI jobid: [31184,1] App: 0 Process rank: 5
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Data for node: node06  Num slots: 1    Max slots: 0    Num procs: 1
</span><br>
<span class="quotelev2">&gt; &gt;        Process OMPI jobid: [31184,1] App: 0 Process rank: 7
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; =============================================================
</span><br>
<span class="quotelev2">&gt; &gt; [node06.cluster:18857] MCW rank 7 bound to socket 0[core 0[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev2">&gt; &gt; [node05.cluster:21399] MCW rank 3 bound to socket 1[core 6[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 1[core 7[hwt 0]]: [./././.][././B/B]
</span><br>
<span class="quotelev2">&gt; &gt; [node05.cluster:21399] MCW rank 4 bound to socket 0[core 0[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev2">&gt; &gt; [node05.cluster:21399] MCW rank 5 bound to socket 1[core 4[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 1[core 5[hwt 0]]: [./././.][B/B/./.]
</span><br>
<span class="quotelev2">&gt; &gt; [node05.cluster:21399] MCW rank 6 bound to socket 0[core 2[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev2">&gt; &gt; [node05.cluster:21399] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev2">&gt; &gt; [node05.cluster:21399] MCW rank 1 bound to socket 1[core 4[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 1[core 5[hwt 0]]: [./././.][B/B/./.]
</span><br>
<span class="quotelev2">&gt; &gt; [node05.cluster:21399] MCW rank 2 bound to socket 0[core 2[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev2">&gt; &gt; ....
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Then I add &quot;-hostfile pbs_hosts&quot; and the result is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage work]$cat pbs_hosts
</span><br>
<span class="quotelev2">&gt; &gt; node05 slots=8
</span><br>
<span class="quotelev2">&gt; &gt; node06 slots=8
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage work]$ mpirun -np 8 -hostfile ~/work/pbs_hosts
</span><br>
<span class="quotelev2">&gt; &gt; -report-bindings -map-by socket:pe=2 -display-map
</span><br>
<span class="quotelev2">&gt; &gt; ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev2">&gt; &gt; Data for JOB [30254,1] offset 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Data for node: node05  Num slots: 8    Max slots: 0    Num procs: 4
</span><br>
<span class="quotelev2">&gt; &gt;        Process OMPI jobid: [30254,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev2">&gt; &gt;        Process OMPI jobid: [30254,1] App: 0 Process rank: 2
</span><br>
<span class="quotelev2">&gt; &gt;        Process OMPI jobid: [30254,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev2">&gt; &gt;        Process OMPI jobid: [30254,1] App: 0 Process rank: 3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Data for node: node06  Num slots: 8    Max slots: 0    Num procs: 4
</span><br>
<span class="quotelev2">&gt; &gt;        Process OMPI jobid: [30254,1] App: 0 Process rank: 4
</span><br>
<span class="quotelev2">&gt; &gt;        Process OMPI jobid: [30254,1] App: 0 Process rank: 6
</span><br>
<span class="quotelev2">&gt; &gt;        Process OMPI jobid: [30254,1] App: 0 Process rank: 5
</span><br>
<span class="quotelev2">&gt; &gt;        Process OMPI jobid: [30254,1] App: 0 Process rank: 7
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; =============================================================
</span><br>
<span class="quotelev2">&gt; &gt; [node05.cluster:21501] MCW rank 2 bound to socket 0[core 2[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev2">&gt; &gt; [node05.cluster:21501] MCW rank 3 bound to socket 1[core 6[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 1[core 7[hwt 0]]: [./././.][././B/B]
</span><br>
<span class="quotelev2">&gt; &gt; [node05.cluster:21501] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev2">&gt; &gt; [node05.cluster:21501] MCW rank 1 bound to socket 1[core 4[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 1[core 5[hwt 0]]: [./././.][B/B/./.]
</span><br>
<span class="quotelev2">&gt; &gt; [node06.cluster:18935] MCW rank 6 bound to socket 0[core 2[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev2">&gt; &gt; [node06.cluster:18935] MCW rank 7 bound to socket 1[core 6[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 1[core 7[hwt 0]]: [./././.][././B/B]
</span><br>
<span class="quotelev2">&gt; &gt; [node06.cluster:18935] MCW rank 4 bound to socket 0[core 0[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev2">&gt; &gt; [node06.cluster:18935] MCW rank 5 bound to socket 1[core 4[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 1[core 5[hwt 0]]: [./././.][B/B/./.]
</span><br>
<span class="quotelev2">&gt; &gt; ....
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think previous version's behavior would be close to what I expect.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tetusya
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; They have 4 cores/socket and 2 sockets, totally 4 X 2 = 8 cores, each.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Here is the output of lstopo.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mishima_at_manage round_robin]$ rsh node05
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Last login: Tue Feb 18 15:10:15 from manage
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [mishima_at_node05 ~]$ lstopo
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Machine (32GB)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; NUMANode L#0 (P#0 16GB) + Socket L#0 + L3 L#0 (6144KB)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; L2 L#0 (512KB) + L1d L#0 (64KB) + L1i L#0 (64KB) + Core L#0 + PU L#0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (P#0)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; L2 L#1 (512KB) + L1d L#1 (64KB) + L1i L#1 (64KB) + Core L#1 + PU L#1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (P#1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; L2 L#2 (512KB) + L1d L#2 (64KB) + L1i L#2 (64KB) + Core L#2 + PU L#2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (P#2)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; L2 L#3 (512KB) + L1d L#3 (64KB) + L1i L#3 (64KB) + Core L#3 + PU L#3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (P#3)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; NUMANode L#1 (P#1 16GB) + Socket L#1 + L3 L#1 (6144KB)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; L2 L#4 (512KB) + L1d L#4 (64KB) + L1i L#4 (64KB) + Core L#4 + PU L#4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (P#4)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; L2 L#5 (512KB) + L1d L#5 (64KB) + L1i L#5 (64KB) + Core L#5 + PU L#5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (P#5)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; L2 L#6 (512KB) + L1d L#6 (64KB) + L1i L#6 (64KB) + Core L#6 + PU L#6
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (P#6)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; L2 L#7 (512KB) + L1d L#7 (64KB) + L1i L#7 (64KB) + Core L#7 + PU L#7
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (P#7)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ....
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I foucused on byobj_span and bynode. I didn't notice byobj was
</span><br>
modified,
<br>
<span class="quotelev3">&gt; &gt;&gt; sorry.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tetsuya
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hmmm..what does your node look like again (sockets and cores)?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Feb 27, 2014, at 3:19 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi Ralph, I'm afraid to say your new &quot;map-by obj&quot; causes another
</span><br>
<span class="quotelev3">&gt; &gt;&gt; problem.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I have overload message with this command line as shown below:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mpirun -np 8 -host node05,node06 -report-bindings -map-by
</span><br>
socket:pe=2
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -display-map ~/mis/openmpi/d
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; emos/myprog
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  Bind to:         CORE
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  Node:            node05
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  #processes:  2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  #cpus:          1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; option to your binding directive.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Then, I add &quot;-bind-to core:overload-allowed&quot; to see what happenes.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mpirun -np 8 -host node05,node06 -report-bindings -map-by
</span><br>
socket:pe=2
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -display-map -bind-to core:o
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; verload-allowed ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Data for JOB [14398,1] offset 0
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Data for node: node05  Num slots: 1    Max slots: 0    Num procs: 4
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       Process OMPI jobid: [14398,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       Process OMPI jobid: [14398,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       Process OMPI jobid: [14398,1] App: 0 Process rank: 2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       Process OMPI jobid: [14398,1] App: 0 Process rank: 3
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Data for node: node06  Num slots: 1    Max slots: 0    Num procs: 4
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       Process OMPI jobid: [14398,1] App: 0 Process rank: 4
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       Process OMPI jobid: [14398,1] App: 0 Process rank: 5
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       Process OMPI jobid: [14398,1] App: 0 Process rank: 6
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       Process OMPI jobid: [14398,1] App: 0 Process rank: 7
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; =============================================================
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node06.cluster:18443] MCW rank 6 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev3">&gt; &gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node05.cluster:20901] MCW rank 2 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev3">&gt; &gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node06.cluster:18443] MCW rank 7 bound to socket 0[core 2[hwt 0]],
</span><br>
<span class="quotelev3">&gt; &gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node05.cluster:20901] MCW rank 3 bound to socket 0[core 2[hwt 0]],
</span><br>
<span class="quotelev3">&gt; &gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node06.cluster:18443] MCW rank 4 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev3">&gt; &gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node05.cluster:20901] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev3">&gt; &gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node06.cluster:18443] MCW rank 5 bound to socket 0[core 2[hwt 0]],
</span><br>
<span class="quotelev3">&gt; &gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node05.cluster:20901] MCW rank 1 bound to socket 0[core 2[hwt 0]],
</span><br>
<span class="quotelev3">&gt; &gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello world from process 4 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello world from process 2 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello world from process 6 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello world from process 0 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello world from process 5 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello world from process 1 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello world from process 7 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello world from process 3 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; When I add &quot;map-by obj:span&quot;, it works fine:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mpirun -np 8 -host node05,node06 -report-bindings -map-by
</span><br>
<span class="quotelev3">&gt; &gt;&gt; socket:pe=2,span
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -display-map  ~/mis/ope
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; nmpi/demos/myprog
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Data for JOB [14703,1] offset 0
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Data for node: node05  Num slots: 1    Max slots: 0    Num procs: 4
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       Process OMPI jobid: [14703,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       Process OMPI jobid: [14703,1] App: 0 Process rank: 2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       Process OMPI jobid: [14703,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       Process OMPI jobid: [14703,1] App: 0 Process rank: 3
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Data for node: node06  Num slots: 1    Max slots: 0    Num procs: 4
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       Process OMPI jobid: [14703,1] App: 0 Process rank: 4
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       Process OMPI jobid: [14703,1] App: 0 Process rank: 6
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       Process OMPI jobid: [14703,1] App: 0 Process rank: 5
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       Process OMPI jobid: [14703,1] App: 0 Process rank: 7
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; =============================================================
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node06.cluster:18491] MCW rank 6 bound to socket 0[core 2[hwt 0]],
</span><br>
<span class="quotelev3">&gt; &gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node05.cluster:20949] MCW rank 2 bound to socket 0[core 2[hwt 0]],
</span><br>
<span class="quotelev3">&gt; &gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node06.cluster:18491] MCW rank 7 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev3">&gt; &gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 1[core 7[hwt 0]]: [./././.][././B/B]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node05.cluster:20949] MCW rank 3 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev3">&gt; &gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 1[core 7[hwt 0]]: [./././.][././B/B]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node06.cluster:18491] MCW rank 4 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev3">&gt; &gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node05.cluster:20949] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev3">&gt; &gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node06.cluster:18491] MCW rank 5 bound to socket 1[core 4[hwt 0]],
</span><br>
<span class="quotelev3">&gt; &gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 1[core 5[hwt 0]]: [./././.][B/B/./.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node05.cluster:20949] MCW rank 1 bound to socket 1[core 4[hwt 0]],
</span><br>
<span class="quotelev3">&gt; &gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 1[core 5[hwt 0]]: [./././.][B/B/./.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ....
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; So, byobj_span would be okay. Of course, bynode and byslot should be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; okay.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Could you take a look at orte_rmaps_rr_byobj again?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Tetsuya Mishima
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
<li><strong>Next message:</strong> <a href="23708.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Previous message:</strong> <a href="23706.php">Ralph Castain: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="23705.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23708.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Reply:</strong> <a href="23708.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
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
