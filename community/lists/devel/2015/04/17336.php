<?
$subject_val = "Re: [OMPI devel] binding output error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 23:13:07 2015" -->
<!-- isoreceived="20150423031307" -->
<!-- sent="Wed, 22 Apr 2015 20:13:02 -0700" -->
<!-- isosent="20150423031302" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] binding output error" -->
<!-- id="97E5BA75-4E38-419E-9175-2998EFA5653A_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="AM2PR05MB07718A98A7F0AF44163C31E1AEEF0_at_AM2PR05MB0771.eurprd05.prod.outlook.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-22 23:13:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17337.php">Paul Hargrove: "[OMPI devel] Minor error in distscript.csh"</a>
<li><strong>Previous message:</strong> <a href="17335.php">Ralph Castain: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="17297.php">Devendar Bureddy: "Re: [OMPI devel] binding output error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17339.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] binding output error"</a>
<li><strong>Reply:</strong> <a href="17339.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] binding output error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is what I see on my machine:
<br>
<p>07:59:55  (v1.8) /home/common/openmpi/ompi-release$ mpirun -np 8 --display-devel-map --report-bindings --map-by core -host bend001 --bind-to core hostname
<br>
&nbsp;Data for JOB [45531,1] offset 0
<br>
<p>&nbsp;Mapper requested: NULL  Last mapper: round_robin  Mapping policy: BYCORE  Ranking policy: CORE
<br>
&nbsp;Binding policy: CORE  Cpu set: NULL  PPR: NULL  Cpus-per-rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num new daemons: 0	New daemon starting vpid INVALID
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num nodes: 1
<br>
<p>&nbsp;Data for node: bend001	 	Launch id: -1	State: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daemon: [[45531,0],0]	Daemon launched: True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots: 12	Slots in use: 8	Oversubscribed: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num slots allocated: 12	Max slots: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Num procs: 8	Next node_rank: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[45531,1],0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 0	Node rank: 0	App rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED	Restarts: 0	App_context: 0	Locale: 0,12	Bind location: 0,12	Binding: 0,12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[45531,1],1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 1	Node rank: 1	App rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED	Restarts: 0	App_context: 0	Locale: 2,14	Bind location: 2,14	Binding: 2,14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[45531,1],2]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 2	Node rank: 2	App rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED	Restarts: 0	App_context: 0	Locale: 4,16	Bind location: 4,16	Binding: 4,16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[45531,1],3]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 3	Node rank: 3	App rank: 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED	Restarts: 0	App_context: 0	Locale: 6,18	Bind location: 6,18	Binding: 6,18
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[45531,1],4]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 4	Node rank: 4	App rank: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED	Restarts: 0	App_context: 0	Locale: 8,20	Bind location: 8,20	Binding: 8,20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[45531,1],5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 5	Node rank: 5	App rank: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED	Restarts: 0	App_context: 0	Locale: 10,22	Bind location: 10,22	Binding: 10,22
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[45531,1],6]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 6	Node rank: 6	App rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED	Restarts: 0	App_context: 0	Locale: 1,13	Bind location: 1,13	Binding: 1,13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data for proc: [[45531,1],7]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pid: 0	Local rank: 7	Node rank: 7	App rank: 7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: INITIALIZED	Restarts: 0	App_context: 0	Locale: 3,15	Bind location: 3,15	Binding: 3,15
<br>
[bend001:15493] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../..][../../../../../..]
<br>
[bend001:15493] MCW rank 1 bound to socket 0[core 1[hwt 0-1]]: [../BB/../../../..][../../../../../..]
<br>
[bend001:15493] MCW rank 2 bound to socket 0[core 2[hwt 0-1]]: [../../BB/../../..][../../../../../..]
<br>
[bend001:15493] MCW rank 3 bound to socket 0[core 3[hwt 0-1]]: [../../../BB/../..][../../../../../..]
<br>
[bend001:15493] MCW rank 4 bound to socket 0[core 4[hwt 0-1]]: [../../../../BB/..][../../../../../..]
<br>
[bend001:15493] MCW rank 5 bound to socket 0[core 5[hwt 0-1]]: [../../../../../BB][../../../../../..]
<br>
[bend001:15493] MCW rank 6 bound to socket 1[core 6[hwt 0-1]]: [../../../../../..][BB/../../../../..]
<br>
[bend001:15493] MCW rank 7 bound to socket 1[core 7[hwt 0-1]]: [../../../../../..][../BB/../../../..]
<br>
<p><p>I have HT enabled on my box, so the devel-map is showing Locale, Bind location, and Binding as the logical HT numbers (i.e., the PUs) for that proc. As you can see in the report-bindings output, things are indeed going where they should go.
<br>
<p>The numbering in the devel-map always looks a little funny because it depends on how the bios numbered cpus. Unlike you might expect, they do tend to bounce around. In my case, for example, the bios has assigned the HTs and cores in the first socket with all the even numbered PUs, and the second socket got all the odd numbers. In other words, it assigned PUs round-robin by socket instead of sequentially across each socket.
<br>
<p>&lt;shrug&gt; every bios does it differently, so there is no way to provide a standardized output. This is why we have report-bindings to tell the user where they actually wound up.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Apr 21, 2015, at 7:54 AM, Devendar Bureddy &lt;devendar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree.   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, April 21, 2015 7:17 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers List
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] binding output error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Devendar, you seem to be reporting a different issue than Elena...?  FWIW: Open MPI has always used logical CPU numbering.  As far as I can tell from your output, it looks like Open MPI did the Right Thing with your examples.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Elena's example seemed to show conflicting cpu numbering -- where OMPI said it would bind a process and then where it actually bound it.  Ralph mentioned to me that he would look at this as soon as he could; he thinks it might just be an error in the printf output (and that the binding is actually occurring in the right location).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 20, 2015, at 9:48 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Devendar,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As far as I know, the report-bindings option shows the logical cpu 
</span><br>
<span class="quotelev2">&gt;&gt; order. On the other hand, you are talking about physical one, I guess.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2015/04/21 9:04:37&#227;&#128;&#129;&quot;devel&quot;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#175;&#227;&#128;&#140;Re: [OMPI devel] binding output
</span><br>
<span class="quotelev2">&gt;&gt; error&#227;&#128;&#141;&#227;&#129;&#167;&#230;&#155;&#184;&#227;&#129;&#141;&#227;&#129;&#190;&#227;&#129;&#151;&#227;&#129;&#159;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HT is not enabled.  All node are same topo . This is reproducible 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; even on
</span><br>
<span class="quotelev2">&gt;&gt; single node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I ran osu latency to see if it is really is mapped to other socket or 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not
</span><br>
<span class="quotelev2">&gt;&gt; with &#226;&#128;&#147;map-by socket.  It looks likes mapping is correct as per latency 
</span><br>
<span class="quotelev2">&gt;&gt; test.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $mpirun -np 2 -report-bindings -map-by
</span><br>
<span class="quotelev2">&gt;&gt; socket  
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/local/benchmarks/hpc-stack-icc/install/ompi-mellanox-v1.8/tests/o
</span><br>
<span class="quotelev2">&gt;&gt; su-micro-benchmarks-4.4.1/osu_latency
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [clx-orion-001:10084] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;&gt; [B/././././././././././././.][./././././././././././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [clx-orion-001:10084] MCW rank 1 bound to socket 1[core 14[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;&gt; [./././././././././././././.][B/././././././././././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # OSU MPI Latency Test v4.4.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Size          Latency (us)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0                       0.50
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1                       0.50
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2                       0.50
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4                       0.49
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $mpirun -np 2 -report-bindings -cpu-set
</span><br>
<span class="quotelev2">&gt;&gt; 1,7 
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/local/benchmarks/hpc-stack-icc/install/ompi-mellanox-v1.8/tests/o
</span><br>
<span class="quotelev2">&gt;&gt; su-micro-benchmarks-4.4.1/osu_latency
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [clx-orion-001:10155] MCW rank 0 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;&gt; [./B/./././././././././././.][./././././././././././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [clx-orion-001:10155] MCW rank 1 bound to socket 0[core 7[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;&gt; [./././././././B/./././././.][./././././././././././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # OSU MPI Latency Test v4.4.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Size          Latency (us)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0                       0.23
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1                       0.24
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2                       0.23
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4                       0.22
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8                       0.23
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Both hwloc and /proc/cpuinfo indicates following cpu numbering
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 0 cpus: 0 1 2 3 4 5 6 14 15 16 17 18 19 20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket 1 cpus: 7 8 9 10 11 12 13 21 22 23 24 25 26 27
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $hwloc-info -f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Machine (256GB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  NUMANode L#0 (P#0 128GB) + Socket L#0 + L3 L#0 (35MB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#0 (256KB) + L1 L#0 (32KB) + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#1 (256KB) + L1 L#1 (32KB) + Core L#1 + PU L#1 (P#1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#2 (256KB) + L1 L#2 (32KB) + Core L#2 + PU L#2 (P#2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#3 (256KB) + L1 L#3 (32KB) + Core L#3 + PU L#3 (P#3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#4 (256KB) + L1 L#4 (32KB) + Core L#4 + PU L#4 (P#4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#5 (256KB) + L1 L#5 (32KB) + Core L#5 + PU L#5 (P#5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#6 (256KB) + L1 L#6 (32KB) + Core L#6 + PU L#6 (P#6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#7 (256KB) + L1 L#7 (32KB) + Core L#7 + PU L#7 (P#14)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#8 (256KB) + L1 L#8 (32KB) + Core L#8 + PU L#8 (P#15)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#9 (256KB) + L1 L#9 (32KB) + Core L#9 + PU L#9 (P#16)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#10 (256KB) + L1 L#10 (32KB) + Core L#10 + PU L#10 (P#17)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#11 (256KB) + L1 L#11 (32KB) + Core L#11 + PU L#11 (P#18)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#12 (256KB) + L1 L#12 (32KB) + Core L#12 + PU L#12 (P#19)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#13 (256KB) + L1 L#13 (32KB) + Core L#13 + PU L#13 (P#20)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  NUMANode L#1 (P#1 128GB) + Socket L#1 + L3 L#1 (35MB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#14 (256KB) + L1 L#14 (32KB) + Core L#14 + PU L#14 (P#7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#15 (256KB) + L1 L#15 (32KB) + Core L#15 + PU L#15 (P#8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#16 (256KB) + L1 L#16 (32KB) + Core L#16 + PU L#16 (P#9)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#17 (256KB) + L1 L#17 (32KB) + Core L#17 + PU L#17 (P#10)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#18 (256KB) + L1 L#18 (32KB) + Core L#18 + PU L#18 (P#11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#19 (256KB) + L1 L#19 (32KB) + Core L#19 + PU L#19 (P#12)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#20 (256KB) + L1 L#20 (32KB) + Core L#20 + PU L#20 (P#13)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#21 (256KB) + L1 L#21 (32KB) + Core L#21 + PU L#21 (P#21)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#22 (256KB) + L1 L#22 (32KB) + Core L#22 + PU L#22 (P#22)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#23 (256KB) + L1 L#23 (32KB) + Core L#23 + PU L#23 (P#23)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#24 (256KB) + L1 L#24 (32KB) + Core L#24 + PU L#24 (P#24)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#25 (256KB) + L1 L#25 (32KB) + Core L#25 + PU L#25 (P#25)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#26 (256KB) + L1 L#26 (32KB) + Core L#26 + PU L#26 (P#26)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    L2 L#27 (256KB) + L1 L#27 (32KB) + Core L#27 + PU L#27 (P#27)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, Is --reporting-binding shows one more level of logical CPU numbering?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Devendar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From:devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Monday, April 20, 2015 3:52 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI devel] binding output error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, was this with HT's enabled? I'm wondering if the print code is
</span><br>
<span class="quotelev2">&gt;&gt; incorrectly computing the core because it isn't correctly accounting 
</span><br>
<span class="quotelev2">&gt;&gt; for HT cpus.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Apr 20, 2015 at 3:49 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph's the authority on this one, but just to be sure: are all nodes 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; same topology? E.g., does adding &quot;--hetero-nodes&quot; to the mpirun 
</span><br>
<span class="quotelev2">&gt;&gt; command line fix the problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 20, 2015, at 9:29 AM, Elena Elkina &lt;elena.elkina_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi guys,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I faced with an issue on our cluster related to mapping &amp; binding
</span><br>
<span class="quotelev2">&gt;&gt; policies on 1.8.5.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The matter is that --report-bindings output doesn't correspond to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; locale. It looks like there is a mistake on the output itself, because 
</span><br>
<span class="quotelev2">&gt;&gt; it just puts serial core number while that core can be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on another socket. For example,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 2 --display-devel-map --report-bindings --map-by socket
</span><br>
<span class="quotelev2">&gt;&gt; hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Data for JOB [43064,1] offset 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Mapper requested: NULL  Last mapper: round_robin  Mapping policy:
</span><br>
<span class="quotelev2">&gt;&gt; BYSOCKET  Ranking policy: SOCKET
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Binding policy: CORE  Cpu set: NULL  PPR: NULL  Cpus-per-rank: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Num new daemons: 0      New daemon starting vpid INVALID
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Num nodes: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Data for node: clx-orion-001         Launch id: -1   State: 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Daemon: [[43064,0],0]   Daemon launched: True
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Num slots: 28   Slots in use: 2 Oversubscribed: FALSE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Num slots allocated: 28 Max slots: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Username on node: NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Num procs: 2    Next node_rank: 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Data for proc: [[43064,1],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               Pid: 0  Local rank: 0   Node rank: 0    App rank: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               State: INITIALIZED      Restarts: 0     App_context: 0
</span><br>
<span class="quotelev2">&gt;&gt; Locale: 0-6,14-20       Bind location: 0        Binding: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Data for proc: [[43064,1],1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               Pid: 0  Local rank: 1   Node rank: 1    App rank: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               State: INITIALIZED      Restarts: 0     App_context: 0
</span><br>
<span class="quotelev2">&gt;&gt; Locale: 7-13,21-27      Bind location: 7        Binding: 7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [clx-orion-001:26951] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;&gt; [B/././././././././././././.][./././././././././././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [clx-orion-001:26951] MCW rank 1 bound to socket 1[core 14[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;&gt; [./././././././././././././.][B/././././././././././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The second process should be bound at core 7 (not core 14).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Another example:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 8 --display-devel-map --report-bindings --map-by core
</span><br>
<span class="quotelev2">&gt;&gt; hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Data for JOB [43202,1] offset 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Mapper requested: NULL  Last mapper: round_robin  Mapping policy:
</span><br>
<span class="quotelev2">&gt;&gt; BYCORE  Ranking policy: CORE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Binding policy: CORE  Cpu set: NULL  PPR: NULL  Cpus-per-rank: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Num new daemons: 0      New daemon starting vpid INVALID
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Num nodes: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Data for node: clx-orion-001         Launch id: -1   State: 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Daemon: [[43202,0],0]   Daemon launched: True
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Num slots: 28   Slots in use: 8 Oversubscribed: FALSE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Num slots allocated: 28 Max slots: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Username on node: NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Num procs: 8    Next node_rank: 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Data for proc: [[43202,1],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               Pid: 0  Local rank: 0   Node rank: 0    App rank: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               State: INITIALIZED      Restarts: 0     App_context: 0
</span><br>
<span class="quotelev2">&gt;&gt; Locale: 0       Bind location: 0        Binding: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Data for proc: [[43202,1],1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               Pid: 0  Local rank: 1   Node rank: 1    App rank: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               State: INITIALIZED      Restarts: 0     App_context: 0
</span><br>
<span class="quotelev2">&gt;&gt; Locale: 1       Bind location: 1        Binding: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Data for proc: [[43202,1],2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               Pid: 0  Local rank: 2   Node rank: 2    App rank: 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               State: INITIALIZED      Restarts: 0     App_context: 0
</span><br>
<span class="quotelev2">&gt;&gt; Locale: 2       Bind location: 2        Binding: 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Data for proc: [[43202,1],3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               Pid: 0  Local rank: 3   Node rank: 3    App rank: 3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               State: INITIALIZED      Restarts: 0     App_context: 0
</span><br>
<span class="quotelev2">&gt;&gt; Locale: 3       Bind location: 3        Binding: 3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Data for proc: [[43202,1],4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               Pid: 0  Local rank: 4   Node rank: 4    App rank: 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               State: INITIALIZED      Restarts: 0     App_context: 0
</span><br>
<span class="quotelev2">&gt;&gt; Locale: 4       Bind location: 4        Binding: 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Data for proc: [[43202,1],5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               Pid: 0  Local rank: 5   Node rank: 5    App rank: 5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               State: INITIALIZED      Restarts: 0     App_context: 0
</span><br>
<span class="quotelev2">&gt;&gt; Locale: 5       Bind location: 5        Binding: 5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Data for proc: [[43202,1],6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               Pid: 0  Local rank: 6   Node rank: 6    App rank: 6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               State: INITIALIZED      Restarts: 0     App_context: 0
</span><br>
<span class="quotelev2">&gt;&gt; Locale: 6       Bind location: 6        Binding: 6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Data for proc: [[43202,1],7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               Pid: 0  Local rank: 7   Node rank: 7    App rank: 7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               State: INITIALIZED      Restarts: 0     App_context: 0
</span><br>
<span class="quotelev2">&gt;&gt; Locale: 14      Bind location: 14       Binding: 14
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [clx-orion-001:27069] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;&gt; [B/././././././././././././.][./././././././././././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [clx-orion-001:27069] MCW rank 1 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;&gt; [./B/./././././././././././.][./././././././././././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [clx-orion-001:27069] MCW rank 2 bound to socket 0[core 2[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;&gt; [././B/././././././././././.][./././././././././././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [clx-orion-001:27069] MCW rank 3 bound to socket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;&gt; [./././B/./././././././././.][./././././././././././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [clx-orion-001:27069] MCW rank 4 bound to socket 0[core 4[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;&gt; [././././B/././././././././.][./././././././././././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [clx-orion-001:27069] MCW rank 5 bound to socket 0[core 5[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;&gt; [./././././B/./././././././.][./././././././././././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [clx-orion-001:27069] MCW rank 6 bound to socket 0[core 6[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;&gt; [././././././B/././././././.][./././././././././././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [clx-orion-001:27069] MCW rank 7 bound to socket 0[core 7[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;&gt; [./././././././B/./././././.][./././././././././././././.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rank 7 should be bound at core 14 instead of core 7 since core 7 is 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at
</span><br>
<span class="quotelev2">&gt;&gt; another socket.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Elena
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription:  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17273.php">http://www.open-mpi.org/community/lists/devel/2015/04/17273.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription:  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17282.php">http://www.open-mpi.org/community/lists/devel/2015/04/17282.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/develLink">http://www.open-mpi.org/mailman/listinfo.cgi/develLink</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17287.php">http://www.open-mpi.org/community/lists/devel/2015/04/17287.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17291.php">http://www.open-mpi.org/community/lists/devel/2015/04/17291.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17295.php">http://www.open-mpi.org/community/lists/devel/2015/04/17295.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17297.php">http://www.open-mpi.org/community/lists/devel/2015/04/17297.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17337.php">Paul Hargrove: "[OMPI devel] Minor error in distscript.csh"</a>
<li><strong>Previous message:</strong> <a href="17335.php">Ralph Castain: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="17297.php">Devendar Bureddy: "Re: [OMPI devel] binding output error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17339.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] binding output error"</a>
<li><strong>Reply:</strong> <a href="17339.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] binding output error"</a>
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
