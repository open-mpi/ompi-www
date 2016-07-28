<?
$subject_val = "Re: [OMPI users] new map-by-obj has a problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 23:13:39 2014" -->
<!-- isoreceived="20140228041339" -->
<!-- sent="Fri, 28 Feb 2014 13:13:23 +0900" -->
<!-- isosent="20140228041323" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] new map-by-obj has a problem" -->
<!-- id="OFA8E29365.52B9013F-ON49257C8D.0015783F-49257C8D.001738E1_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="18127939-8E7C-4DD2-8493-8199E4EA21A3_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-02-27 23:13:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23710.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Previous message:</strong> <a href="23708.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>In reply to:</strong> <a href="23708.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23710.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Reply:</strong> <a href="23710.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, I can't operate our cluster for a few days, sorry.
<br>
<p>But now, I'm narrowing down the cause by browsing the source code.
<br>
<p>My best guess is the line 529. The opal_hwloc_base_get_obj_by_type will
<br>
reset the object pointer to the first one when you move on to the next
<br>
node.
<br>
<p>529                    if (NULL == (obj = opal_hwloc_base_get_obj_by_type
<br>
(node-&gt;topology, target, cache_level, i, OPAL_HWLOC_AVAILABLE))) {
<br>
530                        ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
<br>
531                        return ORTE_ERR_NOT_FOUND;
<br>
532                    }
<br>
<p>if node-&gt;slots=1, then nprocs is set as nprocs=1 in the second pass:
<br>
<p>495            nprocs = (node-&gt;slots - node-&gt;slots_inuse) /
<br>
orte_rmaps_base.cpus_per_rank;
<br>
496            if (nprocs &lt; 1) {
<br>
497                if (second_pass) {
<br>
498                    /* already checked for oversubscription permission,
<br>
so at least put
<br>
499                     * one proc on it
<br>
500                     */
<br>
501                    nprocs = 1;
<br>
<p>Therefore, opal_hwloc_base_get_obj_by_type is called one by one at each
<br>
node, which means
<br>
the object we get is always first one.
<br>
<p>It's not elegant but I guess you need dummy calls of
<br>
opal_hwloc_base_get_obj_by_type to
<br>
move the object pointer to the right place or modify
<br>
opal_hwloc_base_get_obj_by_type itself.
<br>
<p>Tetsuya
<br>
<p><span class="quotelev1">&gt; I'm having trouble seeing why it is failing, so I added some more debug
</span><br>
output. Could you run the failure case again with -mca rmaps_base_verbose
<br>
10?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 27, 2014, at 6:11 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just checking the difference, not so significant meaning...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anyway, I guess it's due to the behavior when slot counts is missing
</span><br>
<span class="quotelev2">&gt; &gt; (regarded as slots=1) and it's oversubscribed unintentionally.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm going out now, so I can't verify it quickly. If I provide the
</span><br>
<span class="quotelev2">&gt; &gt; correct slot counts, it wll work, I guess. How do you think?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;restore&quot; in what sense?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Feb 27, 2014, at 4:10 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi Ralph, this is just for your information.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I tried to restore previous orte_rmaps_rr_byobj. Then I gets the
</span><br>
result
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; below with this command line:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpirun -np 8 -host node05,node06 -report-bindings -map-by socket:pe=2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -display-map  -bind-to core:overload-allowed
</span><br>
~/mis/openmpi/demos/myprog
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Data for JOB [31184,1] offset 0
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Data for node: node05  Num slots: 1    Max slots: 0    Num procs: 7
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       Process OMPI jobid: [31184,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       Process OMPI jobid: [31184,1] App: 0 Process rank: 2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       Process OMPI jobid: [31184,1] App: 0 Process rank: 4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       Process OMPI jobid: [31184,1] App: 0 Process rank: 6
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       Process OMPI jobid: [31184,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       Process OMPI jobid: [31184,1] App: 0 Process rank: 3
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       Process OMPI jobid: [31184,1] App: 0 Process rank: 5
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Data for node: node06  Num slots: 1    Max slots: 0    Num procs: 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       Process OMPI jobid: [31184,1] App: 0 Process rank: 7
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; =============================================================
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node06.cluster:18857] MCW rank 7 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node05.cluster:21399] MCW rank 3 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1[core 7[hwt 0]]: [./././.][././B/B]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node05.cluster:21399] MCW rank 4 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node05.cluster:21399] MCW rank 5 bound to socket 1[core 4[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1[core 5[hwt 0]]: [./././.][B/B/./.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node05.cluster:21399] MCW rank 6 bound to socket 0[core 2[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node05.cluster:21399] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node05.cluster:21399] MCW rank 1 bound to socket 1[core 4[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1[core 5[hwt 0]]: [./././.][B/B/./.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node05.cluster:21399] MCW rank 2 bound to socket 0[core 2[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ....
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Then I add &quot;-hostfile pbs_hosts&quot; and the result is:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [mishima_at_manage work]$cat pbs_hosts
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node05 slots=8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node06 slots=8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [mishima_at_manage work]$ mpirun -np 8 -hostfile ~/work/pbs_hosts
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -report-bindings -map-by socket:pe=2 -display-map
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Data for JOB [30254,1] offset 0
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Data for node: node05  Num slots: 8    Max slots: 0    Num procs: 4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       Process OMPI jobid: [30254,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       Process OMPI jobid: [30254,1] App: 0 Process rank: 2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       Process OMPI jobid: [30254,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       Process OMPI jobid: [30254,1] App: 0 Process rank: 3
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Data for node: node06  Num slots: 8    Max slots: 0    Num procs: 4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       Process OMPI jobid: [30254,1] App: 0 Process rank: 4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       Process OMPI jobid: [30254,1] App: 0 Process rank: 6
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       Process OMPI jobid: [30254,1] App: 0 Process rank: 5
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       Process OMPI jobid: [30254,1] App: 0 Process rank: 7
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; =============================================================
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node05.cluster:21501] MCW rank 2 bound to socket 0[core 2[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node05.cluster:21501] MCW rank 3 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1[core 7[hwt 0]]: [./././.][././B/B]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node05.cluster:21501] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node05.cluster:21501] MCW rank 1 bound to socket 1[core 4[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1[core 5[hwt 0]]: [./././.][B/B/./.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node06.cluster:18935] MCW rank 6 bound to socket 0[core 2[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node06.cluster:18935] MCW rank 7 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1[core 7[hwt 0]]: [./././.][././B/B]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node06.cluster:18935] MCW rank 4 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node06.cluster:18935] MCW rank 5 bound to socket 1[core 4[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1[core 5[hwt 0]]: [./././.][B/B/./.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ....
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I think previous version's behavior would be close to what I expect.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Tetusya
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; They have 4 cores/socket and 2 sockets, totally 4 X 2 = 8 cores,
</span><br>
each.
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Here is the output of lstopo.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mishima_at_manage round_robin]$ rsh node05
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Last login: Tue Feb 18 15:10:15 from manage
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [mishima_at_node05 ~]$ lstopo
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Machine (32GB)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode L#0 (P#0 16GB) + Socket L#0 + L3 L#0 (6144KB)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#0 (512KB) + L1d L#0 (64KB) + L1i L#0 (64KB) + Core L#0 + PU L#0
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (P#0)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#1 (512KB) + L1d L#1 (64KB) + L1i L#1 (64KB) + Core L#1 + PU L#1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (P#1)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#2 (512KB) + L1d L#2 (64KB) + L1i L#2 (64KB) + Core L#2 + PU L#2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (P#2)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#3 (512KB) + L1d L#3 (64KB) + L1i L#3 (64KB) + Core L#3 + PU L#3
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (P#3)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode L#1 (P#1 16GB) + Socket L#1 + L3 L#1 (6144KB)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#4 (512KB) + L1d L#4 (64KB) + L1i L#4 (64KB) + Core L#4 + PU L#4
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (P#4)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#5 (512KB) + L1d L#5 (64KB) + L1i L#5 (64KB) + Core L#5 + PU L#5
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (P#5)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#6 (512KB) + L1d L#6 (64KB) + L1i L#6 (64KB) + Core L#6 + PU L#6
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (P#6)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#7 (512KB) + L1d L#7 (64KB) + L1i L#7 (64KB) + Core L#7 + PU L#7
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (P#7)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ....
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I foucused on byobj_span and bynode. I didn't notice byobj was
</span><br>
<span class="quotelev2">&gt; &gt; modified,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; sorry.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Tetsuya
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hmmm..what does your node look like again (sockets and cores)?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Feb 27, 2014, at 3:19 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph, I'm afraid to say your new &quot;map-by obj&quot; causes another
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; problem.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; I have overload message with this command line as shown below:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; mpirun -np 8 -host node05,node06 -report-bindings -map-by
</span><br>
<span class="quotelev2">&gt; &gt; socket:pe=2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; -display-map ~/mis/openmpi/d
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; emos/myprog
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Bind to:         CORE
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Node:            node05
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; #processes:  2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; #cpus:          1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; option to your binding directive.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Then, I add &quot;-bind-to core:overload-allowed&quot; to see what happenes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; mpirun -np 8 -host node05,node06 -report-bindings -map-by
</span><br>
<span class="quotelev2">&gt; &gt; socket:pe=2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; -display-map -bind-to core:o
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; verload-allowed ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Data for JOB [14398,1] offset 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Data for node: node05  Num slots: 1    Max slots: 0    Num procs:
</span><br>
4
<br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;      Process OMPI jobid: [14398,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;      Process OMPI jobid: [14398,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;      Process OMPI jobid: [14398,1] App: 0 Process rank: 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;      Process OMPI jobid: [14398,1] App: 0 Process rank: 3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Data for node: node06  Num slots: 1    Max slots: 0    Num procs:
</span><br>
4
<br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;      Process OMPI jobid: [14398,1] App: 0 Process rank: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;      Process OMPI jobid: [14398,1] App: 0 Process rank: 5
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;      Process OMPI jobid: [14398,1] App: 0 Process rank: 6
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;      Process OMPI jobid: [14398,1] App: 0 Process rank: 7
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; =============================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; [node06.cluster:18443] MCW rank 6 bound to socket 0[core 0[hwt
</span><br>
0]],
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:20901] MCW rank 2 bound to socket 0[core 0[hwt
</span><br>
0]],
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; [node06.cluster:18443] MCW rank 7 bound to socket 0[core 2[hwt
</span><br>
0]],
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:20901] MCW rank 3 bound to socket 0[core 2[hwt
</span><br>
0]],
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; [node06.cluster:18443] MCW rank 4 bound to socket 0[core 0[hwt
</span><br>
0]],
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:20901] MCW rank 0 bound to socket 0[core 0[hwt
</span><br>
0]],
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; [node06.cluster:18443] MCW rank 5 bound to socket 0[core 2[hwt
</span><br>
0]],
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:20901] MCW rank 1 bound to socket 0[core 2[hwt
</span><br>
0]],
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 4 of 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 2 of 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 6 of 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 0 of 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 5 of 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 1 of 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 7 of 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 3 of 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; When I add &quot;map-by obj:span&quot;, it works fine:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; mpirun -np 8 -host node05,node06 -report-bindings -map-by
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; socket:pe=2,span
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; -display-map  ~/mis/ope
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; nmpi/demos/myprog
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Data for JOB [14703,1] offset 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Data for node: node05  Num slots: 1    Max slots: 0    Num procs:
</span><br>
4
<br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;      Process OMPI jobid: [14703,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;      Process OMPI jobid: [14703,1] App: 0 Process rank: 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;      Process OMPI jobid: [14703,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;      Process OMPI jobid: [14703,1] App: 0 Process rank: 3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Data for node: node06  Num slots: 1    Max slots: 0    Num procs:
</span><br>
4
<br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;      Process OMPI jobid: [14703,1] App: 0 Process rank: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;      Process OMPI jobid: [14703,1] App: 0 Process rank: 6
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;      Process OMPI jobid: [14703,1] App: 0 Process rank: 5
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;      Process OMPI jobid: [14703,1] App: 0 Process rank: 7
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; =============================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; [node06.cluster:18491] MCW rank 6 bound to socket 0[core 2[hwt
</span><br>
0]],
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:20949] MCW rank 2 bound to socket 0[core 2[hwt
</span><br>
0]],
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B][./././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; [node06.cluster:18491] MCW rank 7 bound to socket 1[core 6[hwt
</span><br>
0]],
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 1[core 7[hwt 0]]: [./././.][././B/B]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:20949] MCW rank 3 bound to socket 1[core 6[hwt
</span><br>
0]],
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 1[core 7[hwt 0]]: [./././.][././B/B]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; [node06.cluster:18491] MCW rank 4 bound to socket 0[core 0[hwt
</span><br>
0]],
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:20949] MCW rank 0 bound to socket 0[core 0[hwt
</span><br>
0]],
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./.][./././.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; [node06.cluster:18491] MCW rank 5 bound to socket 1[core 4[hwt
</span><br>
0]],
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 1[core 5[hwt 0]]: [./././.][B/B/./.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:20949] MCW rank 1 bound to socket 1[core 4[hwt
</span><br>
0]],
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; 1[core 5[hwt 0]]: [./././.][B/B/./.]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; ....
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; So, byobj_span would be okay. Of course, bynode and byslot should
</span><br>
be
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; okay.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Could you take a look at orte_rmaps_rr_byobj again?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
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
<li><strong>Next message:</strong> <a href="23710.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Previous message:</strong> <a href="23708.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>In reply to:</strong> <a href="23708.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23710.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>Reply:</strong> <a href="23710.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
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
