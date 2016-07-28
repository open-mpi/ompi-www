<?
$subject_val = "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 15:48:15 2014" -->
<!-- isoreceived="20140606194815" -->
<!-- sent="Fri, 6 Jun 2014 15:48:13 -0400" -->
<!-- isosent="20140606194813" -->
<!-- name="Dan Dietz" -->
<!-- email="ddietz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1" -->
<!-- id="CABy+9wGmNGvuB=wxWBvW6wcd6_xvfEGE4Uhkd-ED+rg0iPZ+CQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F59BD2DA-0BF4-4B07-B5C4-6931A3EE3A2E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1<br>
<strong>From:</strong> Dan Dietz (<em>ddietz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-06 15:48:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24586.php">Ralph Castain: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24584.php">Reuti: "Re: [OMPI users] --preload-binary does not work"</a>
<li><strong>In reply to:</strong> <a href="24578.php">Ralph Castain: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24586.php">Ralph Castain: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24586.php">Ralph Castain: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24588.php">tmishima_at_[hidden]: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24597.php">Ralph Castain: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No problem -
<br>
<p>These are model name : Intel(R) Xeon(R) CPU E5-2670 0 @ 2.60GHz chips.
<br>
2 per node, 8 cores each. No threading enabled.
<br>
<p>$ lstopo
<br>
Machine (64GB)
<br>
&nbsp;&nbsp;NUMANode L#0 (P#0 32GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Socket L#0 + L3 L#0 (20MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB) + Core L#0 + PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB) + Core L#1 + PU L#1 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#2 (256KB) + L1d L#2 (32KB) + L1i L#2 (32KB) + Core L#2 + PU L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#3 (256KB) + L1d L#3 (32KB) + L1i L#3 (32KB) + Core L#3 + PU L#3 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#4 (256KB) + L1d L#4 (32KB) + L1i L#4 (32KB) + Core L#4 + PU L#4 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#5 (256KB) + L1d L#5 (32KB) + L1i L#5 (32KB) + Core L#5 + PU L#5 (P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#6 (256KB) + L1d L#6 (32KB) + L1i L#6 (32KB) + Core L#6 + PU L#6 (P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#7 (256KB) + L1d L#7 (32KB) + L1i L#7 (32KB) + Core L#7 + PU L#7 (P#7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;HostBridge L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 1000:0087
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#0 &quot;sda&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:2250
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:1521
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#1 &quot;eth0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:1521
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#2 &quot;eth1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 102b:0533
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:1d02
<br>
&nbsp;&nbsp;NUMANode L#1 (P#1 32GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Socket L#1 + L3 L#1 (20MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#8 (256KB) + L1d L#8 (32KB) + L1i L#8 (32KB) + Core L#8 + PU L#8 (P#8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#9 (256KB) + L1d L#9 (32KB) + L1i L#9 (32KB) + Core L#9 + PU L#9 (P#9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#10 (256KB) + L1d L#10 (32KB) + L1i L#10 (32KB) + Core L#10
<br>
+ PU L#10 (P#10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#11 (256KB) + L1d L#11 (32KB) + L1i L#11 (32KB) + Core L#11
<br>
+ PU L#11 (P#11)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#12 (256KB) + L1d L#12 (32KB) + L1i L#12 (32KB) + Core L#12
<br>
+ PU L#12 (P#12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#13 (256KB) + L1d L#13 (32KB) + L1i L#13 (32KB) + Core L#13
<br>
+ PU L#13 (P#13)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#14 (256KB) + L1d L#14 (32KB) + L1i L#14 (32KB) + Core L#14
<br>
+ PU L#14 (P#14)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#15 (256KB) + L1d L#15 (32KB) + L1i L#15 (32KB) + Core L#15
<br>
+ PU L#15 (P#15)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;HostBridge L#5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 15b3:1011
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#3 &quot;ib0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OpenFabrics L#4 &quot;mlx5_0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:2250
<br>
<p><span class="quotelev1">&gt;From the segfault below. I tried reproducing the crash on less than an
</span><br>
4 node allocation but wasn't able to.
<br>
<p>ddietz_at_conte-a009:/scratch/conte/d/ddietz/hello$ mpirun -np 2
<br>
-machinefile ./nodes -mca plm_base_verbose 10 ./hello
<br>
[conte-a009.rcac.purdue.edu:55685] mca: base: components_register:
<br>
registering plm components
<br>
[conte-a009.rcac.purdue.edu:55685] mca: base: components_register:
<br>
found loaded component isolated
<br>
[conte-a009.rcac.purdue.edu:55685] mca: base: components_register:
<br>
component isolated has no register or open function
<br>
[conte-a009.rcac.purdue.edu:55685] mca: base: components_register:
<br>
found loaded component slurm
<br>
[conte-a009.rcac.purdue.edu:55685] mca: base: components_register:
<br>
component slurm register function successful
<br>
[conte-a009.rcac.purdue.edu:55685] mca: base: components_register:
<br>
found loaded component rsh
<br>
[conte-a009.rcac.purdue.edu:55685] mca: base: components_register:
<br>
component rsh register function successful
<br>
[conte-a009.rcac.purdue.edu:55685] mca: base: components_register:
<br>
found loaded component tm
<br>
[conte-a009.rcac.purdue.edu:55685] mca: base: components_register:
<br>
component tm register function successful
<br>
[conte-a009.rcac.purdue.edu:55685] mca: base: components_open: opening
<br>
plm components
<br>
[conte-a009.rcac.purdue.edu:55685] mca: base: components_open: found
<br>
loaded component isolated
<br>
[conte-a009.rcac.purdue.edu:55685] mca: base: components_open:
<br>
component isolated open function successful
<br>
[conte-a009.rcac.purdue.edu:55685] mca: base: components_open: found
<br>
loaded component slurm
<br>
[conte-a009.rcac.purdue.edu:55685] mca: base: components_open:
<br>
component slurm open function successful
<br>
[conte-a009.rcac.purdue.edu:55685] mca: base: components_open: found
<br>
loaded component rsh
<br>
[conte-a009.rcac.purdue.edu:55685] mca: base: components_open:
<br>
component rsh open function successful
<br>
[conte-a009.rcac.purdue.edu:55685] mca: base: components_open: found
<br>
loaded component tm
<br>
[conte-a009.rcac.purdue.edu:55685] mca: base: components_open:
<br>
component tm open function successful
<br>
[conte-a009.rcac.purdue.edu:55685] mca:base:select: Auto-selecting plm
<br>
components
<br>
[conte-a009.rcac.purdue.edu:55685] mca:base:select:(  plm) Querying
<br>
component [isolated]
<br>
[conte-a009.rcac.purdue.edu:55685] mca:base:select:(  plm) Query of
<br>
component [isolated] set priority to 0
<br>
[conte-a009.rcac.purdue.edu:55685] mca:base:select:(  plm) Querying
<br>
component [slurm]
<br>
[conte-a009.rcac.purdue.edu:55685] mca:base:select:(  plm) Skipping
<br>
component [slurm]. Query failed to return a module
<br>
[conte-a009.rcac.purdue.edu:55685] mca:base:select:(  plm) Querying
<br>
component [rsh]
<br>
[conte-a009.rcac.purdue.edu:55685] [[INVALID],INVALID] plm:rsh_lookup
<br>
on agent ssh : rsh path NULL
<br>
[conte-a009.rcac.purdue.edu:55685] mca:base:select:(  plm) Query of
<br>
component [rsh] set priority to 10
<br>
[conte-a009.rcac.purdue.edu:55685] mca:base:select:(  plm) Querying
<br>
component [tm]
<br>
[conte-a009.rcac.purdue.edu:55685] mca:base:select:(  plm) Query of
<br>
component [tm] set priority to 75
<br>
[conte-a009.rcac.purdue.edu:55685] mca:base:select:(  plm) Selected
<br>
component [tm]
<br>
[conte-a009.rcac.purdue.edu:55685] mca: base: close: component isolated closed
<br>
[conte-a009.rcac.purdue.edu:55685] mca: base: close: unloading
<br>
component isolated
<br>
[conte-a009.rcac.purdue.edu:55685] mca: base: close: component slurm closed
<br>
[conte-a009.rcac.purdue.edu:55685] mca: base: close: unloading component slurm
<br>
[conte-a009.rcac.purdue.edu:55685] mca: base: close: component rsh closed
<br>
[conte-a009.rcac.purdue.edu:55685] mca: base: close: unloading component rsh
<br>
[conte-a009.rcac.purdue.edu:55685] plm:base:set_hnp_name: initial bias
<br>
55685 nodename hash 3965217721
<br>
[conte-a009.rcac.purdue.edu:55685] plm:base:set_hnp_name: final jobfam 24164
<br>
[conte-a009.rcac.purdue.edu:55685] [[24164,0],0] plm:base:receive start comm
<br>
[conte-a009.rcac.purdue.edu:55685] [[24164,0],0] plm:base:setup_job
<br>
[conte-a009.rcac.purdue.edu:55685] [[24164,0],0] plm:base:setup_vm
<br>
[conte-a009.rcac.purdue.edu:55685] [[24164,0],0] plm:base:setup_vm creating map
<br>
[conte-a009.rcac.purdue.edu:55685] [[24164,0],0] plm:base:setup_vm add
<br>
new daemon [[24164,0],1]
<br>
[conte-a009.rcac.purdue.edu:55685] [[24164,0],0] plm:base:setup_vm
<br>
assigning new daemon [[24164,0],1] to node conte-a055
<br>
[conte-a009.rcac.purdue.edu:55685] [[24164,0],0] plm:tm: launching vm
<br>
[conte-a009.rcac.purdue.edu:55685] [[24164,0],0] plm:tm: final top-level argv:
<br>
orted -mca ess tm -mca orte_ess_jobid 1583611904 -mca orte_ess_vpid
<br>
&lt;template&gt; -mca orte_ess_num_procs 2 -mca orte_hnp_uri
<br>
&quot;1583611904.0;tcp://172.18.96.49,172.31.1.254,172.31.2.254,172.18.112.49:37380&quot;
<br>
-mca plm_base_verbose 10
<br>
[conte-a009.rcac.purdue.edu:55685] [[24164,0],0] plm:tm: resetting
<br>
LD_LIBRARY_PATH:
<br>
/scratch/conte/d/ddietz/openmpi-1.8.1-debug/intel-14.0.2.144/lib:/scratch/conte/d/ddietz/openmpi-1.8.1-debug/intel-14.0.2.144/lib:/scratch/conte/d/ddietz/openmpi-1.8.1-debug/intel-14.0.2.144/lib:/usr/pbs/lib:/apps/rhel6/intel/composer_xe_2013_sp1.2.144/compiler/lib/intel64:/apps/rhel6/intel/composer_xe_2013_sp1.2.144/mpirt/lib/intel64:/apps/rhel6/intel/composer_xe_2013_sp1.2.144/ipp/lib/intel64:/apps/rhel6/intel/composer_xe_2013_sp1.2.144/mkl/lib/intel64:/apps/rhel6/intel/composer_xe_2013_sp1.2.144/tbb/lib/intel64:/opt/intel/mic/coi/host-linux-release/lib:/opt/intel/mic/myo/lib:/apps/rhel6/intel/opencl-1.2-3.2.1.16712/lib64
<br>
[conte-a009.rcac.purdue.edu:55685] [[24164,0],0] plm:tm: resetting
<br>
PATH: /scratch/conte/d/ddietz/openmpi-1.8.1-debug/intel-14.0.2.144/bin:/scratch/conte/d/ddietz/openmpi-1.8.1-debug/intel-14.0.2.144/bin:/scratch/conte/d/ddietz/openmpi-1.8.1-debug/intel-14.0.2.144/bin:/apps/rhel6/intel/composer_xe_2013_sp1.2.144/bin/intel64:/opt/intel/mic/bin:/apps/rhel6/intel/inspector_xe_2013/bin64:/apps/rhel6/intel/advisor_xe_2013/bin64:/apps/rhel6/intel/vtune_amplifier_xe_2013/bin64:/apps/rhel6/intel/opencl-1.2-3.2.1.16712/bin:/usr/lib64/qt-3.3/bin:/opt/moab/bin:/bin:/usr/bin:/usr/local/sbin:/usr/sbin:/sbin:/opt/hpss/bin:/opt/hsi/bin:/opt/ibutils/bin:/usr/pbs/bin:/opt/moab/bin:/usr/site/rcac/scripts:/usr/site/rcac/support_scripts:/usr/site/rcac/bin:/usr/site/rcac/sbin:/usr/sbin
<br>
[conte-a009.rcac.purdue.edu:55685] [[24164,0],0] plm:tm: launching on
<br>
node conte-a055
<br>
[conte-a009.rcac.purdue.edu:55685] [[24164,0],0] plm:tm: executing:
<br>
orted -mca ess tm -mca orte_ess_jobid 1583611904 -mca orte_ess_vpid 1
<br>
-mca orte_ess_num_procs 2 -mca orte_hnp_uri
<br>
&quot;1583611904.0;tcp://172.18.96.49,172.31.1.254,172.31.2.254,172.18.112.49:37380&quot;
<br>
-mca plm_base_verbose 10
<br>
[conte-a009.rcac.purdue.edu:55685] [[24164,0],0] plm:tm:launch:
<br>
finished spawning orteds
<br>
[conte-a055.rcac.purdue.edu:32094] mca: base: components_register:
<br>
registering plm components
<br>
[conte-a055.rcac.purdue.edu:32094] mca: base: components_register:
<br>
found loaded component rsh
<br>
[conte-a055.rcac.purdue.edu:32094] mca: base: components_register:
<br>
component rsh register function successful
<br>
[conte-a055.rcac.purdue.edu:32094] mca: base: components_open: opening
<br>
plm components
<br>
[conte-a055.rcac.purdue.edu:32094] mca: base: components_open: found
<br>
loaded component rsh
<br>
[conte-a055.rcac.purdue.edu:32094] mca: base: components_open:
<br>
component rsh open function successful
<br>
[conte-a055.rcac.purdue.edu:32094] mca:base:select: Auto-selecting plm
<br>
components
<br>
[conte-a055.rcac.purdue.edu:32094] mca:base:select:(  plm) Querying
<br>
component [rsh]
<br>
[conte-a055.rcac.purdue.edu:32094] [[24164,0],1] plm:rsh_lookup on
<br>
agent ssh : rsh path NULL
<br>
[conte-a055.rcac.purdue.edu:32094] mca:base:select:(  plm) Query of
<br>
component [rsh] set priority to 10
<br>
[conte-a055.rcac.purdue.edu:32094] mca:base:select:(  plm) Selected
<br>
component [rsh]
<br>
[conte-a055.rcac.purdue.edu:32094] [[24164,0],1] plm:rsh_setup on
<br>
agent ssh : rsh path NULL
<br>
[conte-a055.rcac.purdue.edu:32094] [[24164,0],1] plm:base:receive start comm
<br>
[conte-a009.rcac.purdue.edu:55685] [[24164,0],0]
<br>
plm:base:orted_report_launch from daemon [[24164,0],1]
<br>
[conte-a009.rcac.purdue.edu:55685] [[24164,0],0]
<br>
plm:base:orted_report_launch from daemon [[24164,0],1] on node
<br>
conte-a055
<br>
[conte-a009.rcac.purdue.edu:55685] [[24164,0],0] RECEIVED TOPOLOGY
<br>
FROM NODE conte-a055
<br>
[conte-a009.rcac.purdue.edu:55685] [[24164,0],0] NEW TOPOLOGY - ADDING
<br>
[conte-a009.rcac.purdue.edu:55685] [[24164,0],0]
<br>
plm:base:orted_report_launch completed for daemon [[24164,0],1] at
<br>
contact 1583611904.1;tcp://172.18.96.95,172.31.1.254,172.31.2.254,172.18.112.95:58312
<br>
[conte-a009:55685] *** Process received signal ***
<br>
[conte-a009:55685] Signal: Segmentation fault (11)
<br>
[conte-a009:55685] Signal code: Address not mapped (1)
<br>
[conte-a009:55685] Failing at address: 0x4c
<br>
[conte-a009:55685] [ 0] /lib64/libpthread.so.0[0x327f80f500]
<br>
[conte-a009:55685] [ 1]
<br>
/scratch/conte/d/ddietz/openmpi-1.8.1-debug/intel-14.0.2.144/lib/libopen-rte.so.7(orte_plm_base_complete_setup+0x951)[0x2b5b069a50e1]
<br>
[conte-a009:55685] [ 2]
<br>
/scratch/conte/d/ddietz/openmpi-1.8.1-debug/intel-14.0.2.144/lib/libopen-pal.so.6(opal_libevent2021_event_base_loop+0xa05)[0x2b5b075ff145]
<br>
[conte-a009:55685] [ 3] mpirun(orterun+0x1ffd)[0x4073b5]
<br>
[conte-a009:55685] [ 4] mpirun(main+0x20)[0x4048f4]
<br>
[conte-a009:55685] [ 5] /lib64/libc.so.6(__libc_start_main+0xfd)[0x327f41ecdd]
<br>
[conte-a009:55685] [ 6] mpirun[0x404819]
<br>
[conte-a009:55685] *** End of error message ***
<br>
Segmentation fault (core dumped)
<br>
ddietz_at_conte-a009:/scratch/conte/d/ddietz/hello$
<br>
[conte-a055.rcac.purdue.edu:32094] [[24164,0],1] plm:base:receive stop
<br>
comm
<br>
<p>On Fri, Jun 6, 2014 at 3:00 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Sorry to pester with questions, but I'm trying to narrow down the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * What kind of chips are on these machines?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * If they have h/w threads, are they enabled?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * you might have lstopo on one of those machines - could you pass along its output? Otherwise, you can run a simple &quot;mpirun -n 1 -mca ess_base_verbose 20 hostname&quot; and it will print out. Only need one node in your allocation as we don't need a fountain of output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll look into the segfault - hard to understand offhand, but could be an uninitialized variable. If you have a chance, could you rerun that test with &quot;-mca plm_base_verbose 10&quot; on the cmd line?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 6, 2014, at 10:31 AM, Dan Dietz &lt;ddietz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the reply. I tried out the --display-allocation option with
</span><br>
<span class="quotelev2">&gt;&gt; several different combinations and have attached the output. I see
</span><br>
<span class="quotelev2">&gt;&gt; this behavior on both RHEL6.4, RHEL6.5, and RHEL5.10 clusters.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's debugging info on the segfault. Does that help? FWIW this does
</span><br>
<span class="quotelev2">&gt;&gt; not seem to crash on the RHEL5 cluster or RHEL6.5 cluster. Just
</span><br>
<span class="quotelev2">&gt;&gt; crashes on RHEL6.4.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ddietz_at_conte-a009:/scratch/conte/d/ddietz/hello$ gdb -c core.22623
</span><br>
<span class="quotelev2">&gt;&gt; `which mpirun`
</span><br>
<span class="quotelev2">&gt;&gt; No symbol table is loaded.  Use the &quot;file&quot; command.
</span><br>
<span class="quotelev2">&gt;&gt; GNU gdb (GDB) 7.5-1.3.187
</span><br>
<span class="quotelev2">&gt;&gt; Copyright (C) 2012 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt;&gt; License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev2">&gt;&gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
</span><br>
<span class="quotelev2">&gt;&gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev2">&gt;&gt; This GDB was configured as &quot;x86_64-unknown-linux-gnu&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
</span><br>
<span class="quotelev2">&gt;&gt; Reading symbols from
</span><br>
<span class="quotelev2">&gt;&gt; /scratch/conte/d/ddietz/openmpi-1.8.1-debug/intel-14.0.2.144/bin/mpirun...done.
</span><br>
<span class="quotelev2">&gt;&gt; [New LWP 22623]
</span><br>
<span class="quotelev2">&gt;&gt; [New LWP 22624]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; warning: Can't read pathname for load map: Input/output error.
</span><br>
<span class="quotelev2">&gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev2">&gt;&gt; Using host libthread_db library &quot;/lib64/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; Core was generated by `mpirun -np 2 -machinefile ./nodes ./hello'.
</span><br>
<span class="quotelev2">&gt;&gt; Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00002acc602920e1 in orte_plm_base_complete_setup (fd=-1,
</span><br>
<span class="quotelev2">&gt;&gt; args=-1, cbdata=0x20c0840) at base/plm_base_launch_support.c:422
</span><br>
<span class="quotelev2">&gt;&gt; 422                    node-&gt;hostid = node-&gt;daemon-&gt;name.vpid;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00002acc602920e1 in orte_plm_base_complete_setup (fd=-1,
</span><br>
<span class="quotelev2">&gt;&gt; args=-1, cbdata=0x20c0840) at base/plm_base_launch_support.c:422
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00002acc60eec145 in opal_libevent2021_event_base_loop () from
</span><br>
<span class="quotelev2">&gt;&gt; /scratch/conte/d/ddietz/openmpi-1.8.1-debug/intel-14.0.2.144/lib/libopen-pal.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00000000004073b5 in orterun (argc=6, argv=0x7fff5bb2a3a8) at
</span><br>
<span class="quotelev2">&gt;&gt; orterun.c:1077
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00000000004048f4 in main (argc=6, argv=0x7fff5bb2a3a8) at main.c:13
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ddietz_at_conte-a009:/scratch/conte/d/ddietz/hello$ cat nodes
</span><br>
<span class="quotelev2">&gt;&gt; conte-a009
</span><br>
<span class="quotelev2">&gt;&gt; conte-a009
</span><br>
<span class="quotelev2">&gt;&gt; conte-a055
</span><br>
<span class="quotelev2">&gt;&gt; conte-a055
</span><br>
<span class="quotelev2">&gt;&gt; ddietz_at_conte-a009:/scratch/conte/d/ddietz/hello$ uname -r
</span><br>
<span class="quotelev2">&gt;&gt; 2.6.32-358.14.1.el6.x86_64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jun 5, 2014 at 7:54 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 5, 2014, at 2:13 PM, Dan Dietz &lt;ddietz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'd like to bind 8 cores to a single MPI rank for hybrid MPI/OpenMP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; codes. In OMPI 1.6.3, I can do:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpirun -np 2 -cpus-per-rank 8  -machinefile ./nodes ./hello
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I get one rank bound to procs 0-7 and the other bound to 8-15. Great!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But I'm having some difficulties doing this with openmpi 1.8.1:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpirun -np 2 -cpus-per-rank 8  -machinefile ./nodes ./hello
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The following command line options and corresponding MCA parameter have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; been deprecated and replaced as follows:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Command line options:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Deprecated:  --cpus-per-proc, -cpus-per-proc, --cpus-per-rank,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -cpus-per-rank
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Replacement: --map-by &lt;obj&gt;:PE=N
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Equivalent MCA parameter:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Deprecated:  rmaps_base_cpus_per_proc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Replacement: rmaps_base_mapping_policy=&lt;obj&gt;:PE=N
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The deprecated forms *will* disappear in a future version of Open MPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please update to the new syntax.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There are not enough slots available in the system to satisfy the 2 slots
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that were requested by the application:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./hello
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Either request fewer slots for your application, or make more slots available
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for use.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OK, let me try the new syntax...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpirun -np 2 --map-by core:pe=8 -machinefile ./nodes ./hello
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There are not enough slots available in the system to satisfy the 2 slots
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that were requested by the application:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./hello
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Either request fewer slots for your application, or make more slots available
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for use.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What am I doing wrong? The documentation on these new options is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; somewhat poor and confusing so I'm probably doing something wrong. If
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; anyone could provide some pointers here it'd be much appreciated! If
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it's not something simple and you need config logs and such please let
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; me know.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looks like we think there are less than 16 slots allocated on that node. What is in this &quot;nodes&quot; file? Without it, OMPI should read the Torque allocation directly. You might check what we think the allocation is by adding --display-allocation to the cmd line
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As a side note -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I try this using the PBS nodefile with the above, I get a confusing message:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A request for multiple cpus-per-proc was given, but a directive
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; was also give to map to an object level that has less cpus than
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; requested ones:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #cpus-per-proc:  8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; number of cpus:  1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; map-by:          BYCORE:NOOVERSUBSCRIBE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please specify a mapping level that has more cpus, or else let us
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; define a default mapping that will allow multiple cpus-per-proc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From what I've gathered this is because I have a node listed 16 times
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in my PBS nodefile so it's assuming then I have 1 core per node?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No - if listed 16 times, it should compute 16 slots. Try adding --display-allocation to your cmd line and it should tell you how many slots are present.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, it doesn't assume there is a core for each slot. Instead, it detects the cores directly on the node. It sounds like it isn't seeing them for some reason. What OS are you running on that node?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW: the 1.6 series has a different detection system for cores. Could be something is causing problems for the new one.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; better documentation here would be helpful. I haven't been able to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; figure out how to use the &quot;oversubscribe&quot; option listed in the docs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Not that I really want to oversubscribe, of course, I need to modify
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the nodefile, but this just stumped me for a while as 1.6.3 didn't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have this behavior.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As a extra bonus, I get a segfault in this situation:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpirun -np 2 -machinefile ./nodes ./hello
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [conte-a497:13255] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [conte-a497:13255] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [conte-a497:13255] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [conte-a497:13255] Failing at address: 0x2c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [conte-a497:13255] [ 0] /lib64/libpthread.so.0[0x3c9460f500]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [conte-a497:13255] [ 1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /apps/rhel6/openmpi/1.8.1/intel-14.0.2.144/lib/libopen-rte.so.7(orte_plm_base_complete_setup+0x615)[0x2ba960a59015]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [conte-a497:13255] [ 2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /apps/rhel6/openmpi/1.8.1/intel-14.0.2.144/lib/libopen-pal.so.6(opal_libevent2021_event_base_loop+0xa05)[0x2ba961666715]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [conte-a497:13255] [ 3] mpirun(orterun+0x1b45)[0x40684f]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [conte-a497:13255] [ 4] mpirun(main+0x20)[0x4047f4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [conte-a497:13255] [ 5] /lib64/libc.so.6(__libc_start_main+0xfd)[0x3a1bc1ecdd]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [conte-a497:13255] [ 6] mpirun[0x404719]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [conte-a497:13255] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Huh - that's odd. Could you perhaps configure OMPI with --enable-debug and gdb the core file to tell us the line numbers involved?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My &quot;nodes&quot; file simply contains the first two lines of my original
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $PBS_NODEFILE provided by Torque. See above why I modified. Works fine
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if use the full file.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks in advance for any pointers you all may have!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dan Dietz
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Scientific Applications Analyst
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ITaP Research Computing, Purdue University
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Dan Dietz
</span><br>
<span class="quotelev2">&gt;&gt; Scientific Applications Analyst
</span><br>
<span class="quotelev2">&gt;&gt; ITaP Research Computing, Purdue University
</span><br>
<span class="quotelev2">&gt;&gt; &lt;slots&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><p><pre>
-- 
Dan Dietz
Scientific Applications Analyst
ITaP Research Computing, Purdue University
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24586.php">Ralph Castain: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24584.php">Reuti: "Re: [OMPI users] --preload-binary does not work"</a>
<li><strong>In reply to:</strong> <a href="24578.php">Ralph Castain: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24586.php">Ralph Castain: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24586.php">Ralph Castain: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24588.php">tmishima_at_[hidden]: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24597.php">Ralph Castain: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
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
