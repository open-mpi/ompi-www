<?
$subject_val = "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct  4 10:55:39 2015" -->
<!-- isoreceived="20151004145539" -->
<!-- sent="Sun, 4 Oct 2015 16:55:33 +0200" -->
<!-- isosent="20151004145533" -->
<!-- name="marcin.krotkiewski" -->
<!-- email="marcin.krotkiewski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes" -->
<!-- id="56113DE5.5010207_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5voA7Xpn9-QwLH+7E3eB_Bp4VfJYxZUh2DuyP_Aj4Epbw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes<br>
<strong>From:</strong> marcin.krotkiewski (<em>marcin.krotkiewski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-04 10:55:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27792.php">Gilles Gouaillardet: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27790.php">Gilles Gouaillardet: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>In reply to:</strong> <a href="27790.php">Gilles Gouaillardet: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27792.php">Gilles Gouaillardet: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Reply:</strong> <a href="27792.php">Gilles Gouaillardet: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, all,
<br>
<p>I played a bit more and it seems that the problem results from
<br>
<p>trg_obj = opal_hwloc_base_find_min_bound_target_under_obj()
<br>
<p>called in rmaps_base_binding.c / bind_downwards being wrong. I do not 
<br>
know the reason, but I think I know when the problem happens (at least 
<br>
on 1.10.1rc1). It seems that by default openmpi maps by socket. The 
<br>
error happens when for a given compute node there is a different number 
<br>
of cores used on each socket. Consider previously studied case (the 
<br>
debug outputs I sent in last post). c1-8, which was source of error, has 
<br>
5 mpi processes assigned, and the cpuset is the following:
<br>
<p>0, 5, 9, 13, 14, 16, 21, 25, 29, 30
<br>
<p>Cores 0,5 are on socket 0, cores 9, 13, 14 are on socket 1. Binding 
<br>
progresses correctly up to and including core 13 (see end of file 
<br>
out.1.10.1rc2, before the error). That is 2 cores on socket 0, and 2 
<br>
cores on socket 1. Error is thrown when core 14 should be bound - extra 
<br>
core on socket 1 with no corresponding core on socket 0. At that point 
<br>
the returned trg_obj points to the first core on the node (os_index 0, 
<br>
socket 0).
<br>
<p>I have submitted a few other jobs and I always had an error in such 
<br>
situation. Moreover, if I now use --map-by core instead of socket, the 
<br>
error is gone, and I get my expected binding:
<br>
<p>rank 0 @ compute-1-2.local  1, 17,
<br>
rank 1 @ compute-1-2.local  2, 18,
<br>
rank 2 @ compute-1-2.local  3, 19,
<br>
rank 3 @ compute-1-2.local  4, 20,
<br>
rank 4 @ compute-1-4.local  1, 17,
<br>
rank 5 @ compute-1-4.local  15, 31,
<br>
rank 6 @ compute-1-8.local  0, 16,
<br>
rank 7 @ compute-1-8.local  5, 21,
<br>
rank 8 @ compute-1-8.local  9, 25,
<br>
rank 9 @ compute-1-8.local  13, 29,
<br>
rank 10 @ compute-1-8.local  14, 30,
<br>
rank 11 @ compute-1-13.local  3, 19,
<br>
rank 12 @ compute-1-13.local  4, 20,
<br>
rank 13 @ compute-1-13.local  5, 21,
<br>
rank 14 @ compute-1-13.local  6, 22,
<br>
rank 15 @ compute-1-13.local  7, 23,
<br>
rank 16 @ compute-1-16.local  12, 28,
<br>
rank 17 @ compute-1-16.local  13, 29,
<br>
rank 18 @ compute-1-16.local  14, 30,
<br>
rank 19 @ compute-1-16.local  15, 31,
<br>
rank 20 @ compute-1-23.local  2, 18,
<br>
rank 29 @ compute-1-26.local  11, 27,
<br>
rank 21 @ compute-1-23.local  3, 19,
<br>
rank 30 @ compute-1-26.local  13, 29,
<br>
rank 22 @ compute-1-23.local  4, 20,
<br>
rank 31 @ compute-1-26.local  15, 31,
<br>
rank 23 @ compute-1-23.local  8, 24,
<br>
rank 27 @ compute-1-26.local  1, 17,
<br>
rank 24 @ compute-1-23.local  13, 29,
<br>
rank 28 @ compute-1-26.local  6, 22,
<br>
rank 25 @ compute-1-23.local  14, 30,
<br>
rank 26 @ compute-1-23.local  15, 31,
<br>
<p>Using --map-by core seems to fix the issue on 1.8.8, 1.10.0 and 
<br>
1.10.1rc1. However, there is still a difference in behavior between 
<br>
1.10.1rc1 and earlier versions. In the SLURM job described in last post, 
<br>
1.10.1rc1 fails to bind only in 1 case, while the earlier versions fail 
<br>
in 21 out of 32 cases. You mentioned there was a bug in hwloc. Not sure 
<br>
if it can explain the difference in behavior.
<br>
<p>Hope this helps to nail this down.
<br>
<p>Marcin
<br>
<p><p><p><p>On 10/04/2015 09:55 AM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect ompi tries to bind to threads outside the cpuset.
</span><br>
<span class="quotelev1">&gt; this could be pretty similar to a previous issue when ompi tried to 
</span><br>
<span class="quotelev1">&gt; bind to cores outside the cpuset.
</span><br>
<span class="quotelev1">&gt; /* when a core has more than one thread, would ompi assume all the 
</span><br>
<span class="quotelev1">&gt; threads are available if the core is available ? */
</span><br>
<span class="quotelev1">&gt; I will investigate this from tomorrow
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sunday, October 4, 2015, Ralph Castain &lt;rhc_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks - please go ahead and release that allocation as I&#146;m not
</span><br>
<span class="quotelev1">&gt;     going to get to this immediately. I&#146;ve got several hot irons in
</span><br>
<span class="quotelev1">&gt;     the fire right now, and I&#146;m not sure when I&#146;ll get a chance to
</span><br>
<span class="quotelev1">&gt;     track this down.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles or anyone else who might have time - feel free to take a
</span><br>
<span class="quotelev1">&gt;     gander and see if something pops out at you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Oct 3, 2015, at 11:05 AM, marcin.krotkiewski
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;marcin.krotkiewski_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','marcin.krotkiewski_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Done. I have compiled 1.10.0 and 1.10.rc1 with --enable-debug and
</span><br>
<span class="quotelev2">&gt;&gt;     executed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     mpirun --mca rmaps_base_verbose 10 --hetero-nodes
</span><br>
<span class="quotelev2">&gt;&gt;     --report-bindings --bind-to core -np 32 ./affinity
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     In case of 1.10.rc1 I have also added :overload-allowed - output
</span><br>
<span class="quotelev2">&gt;&gt;     in a separate file. This option did not make much difference for
</span><br>
<span class="quotelev2">&gt;&gt;     1.10.0, so I did not attach it here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     First thing I noted for 1.10.0 are lines like
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     [login-0-1.local:03399] [[37945,0],0] GOT 1 CPUS
</span><br>
<span class="quotelev2">&gt;&gt;     [login-0-1.local:03399] [[37945,0],0] PROC [[37945,1],27] BITMAP
</span><br>
<span class="quotelev2">&gt;&gt;     [login-0-1.local:03399] [[37945,0],0] PROC [[37945,1],27] ON
</span><br>
<span class="quotelev2">&gt;&gt;     c1-26 IS NOT BOUND
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     with an empty BITMAP.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     The SLURM environment is
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     set | grep SLURM
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_JOBID=12714491
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_JOB_CPUS_PER_NODE='4,2,5(x2),4,7,5'
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_JOB_ID=12714491
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_JOB_NODELIST='c1-[2,4,8,13,16,23,26]'
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_JOB_NUM_NODES=7
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_JOB_PARTITION=normal
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_MEM_PER_CPU=2048
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_NNODES=7
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_NODELIST='c1-[2,4,8,13,16,23,26]'
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_NODE_ALIASES='(null)'
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_NPROCS=32
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_NTASKS=32
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_SUBMIT_DIR=/cluster/home/marcink
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_SUBMIT_HOST=login-0-1.local
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_TASKS_PER_NODE='4,2,5(x2),4,7,5'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I have submitted an interactive job on screen for 120 hours now
</span><br>
<span class="quotelev2">&gt;&gt;     to work with one example, and not change it for every post :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     If you need anything else, let me know. I could introduce some
</span><br>
<span class="quotelev2">&gt;&gt;     patch/printfs and recompile, if you need it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Marcin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On 10/03/2015 07:17 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Rats - just realized I have no way to test this as none of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     machines I can access are setup for cgroup-based multi-tenant.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Is this a debug version of OMPI? If not, can you rebuild OMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     with &#151;enable-debug?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Then please run it with &#151;mca rmaps_base_verbose 10 and pass
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     along the output.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     On Oct 3, 2015, at 10:09 AM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     What version of slurm is this? I might try to debug it here.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     I&#146;m not sure where the problem lies just yet.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     On Oct 3, 2015, at 8:59 AM, marcin.krotkiewski
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     &lt;marcin.krotkiewski_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','marcin.krotkiewski_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Here is the output of lstopo. In short, (0,16) are core 0,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     (1,17) - core 1 etc.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Machine (64GB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       NUMANode L#0 (P#0 32GB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Socket L#0 + L3 L#0 (20MB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB) + Core L#0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             PU L#1 (P#16)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB) + Core L#1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             PU L#2 (P#1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             PU L#3 (P#17)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           L2 L#2 (256KB) + L1d L#2 (32KB) + L1i L#2 (32KB) + Core L#2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             PU L#4 (P#2)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             PU L#5 (P#18)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           L2 L#3 (256KB) + L1d L#3 (32KB) + L1i L#3 (32KB) + Core L#3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             PU L#6 (P#3)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             PU L#7 (P#19)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           L2 L#4 (256KB) + L1d L#4 (32KB) + L1i L#4 (32KB) + Core L#4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             PU L#8 (P#4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             PU L#9 (P#20)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           L2 L#5 (256KB) + L1d L#5 (32KB) + L1i L#5 (32KB) + Core L#5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             PU L#10 (P#5)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             PU L#11 (P#21)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           L2 L#6 (256KB) + L1d L#6 (32KB) + L1i L#6 (32KB) + Core L#6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             PU L#12 (P#6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             PU L#13 (P#22)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           L2 L#7 (256KB) + L1d L#7 (32KB) + L1i L#7 (32KB) + Core L#7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             PU L#14 (P#7)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             PU L#15 (P#23)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         HostBridge L#0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           PCIBridge
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             PCI 8086:1521
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               Net L#0 &quot;eth0&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             PCI 8086:1521
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               Net L#1 &quot;eth1&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           PCIBridge
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             PCI 15b3:1003
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               Net L#2 &quot;ib0&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               OpenFabrics L#3 &quot;mlx4_0&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           PCIBridge
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             PCI 102b:0532
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           PCI 8086:1d02
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             Block L#4 &quot;sda&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       NUMANode L#1 (P#1 32GB) + Socket L#1 + L3 L#1 (20MB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         L2 L#8 (256KB) + L1d L#8 (32KB) + L1i L#8 (32KB) + Core L#8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           PU L#16 (P#8)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           PU L#17 (P#24)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         L2 L#9 (256KB) + L1d L#9 (32KB) + L1i L#9 (32KB) + Core L#9
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           PU L#18 (P#9)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           PU L#19 (P#25)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         L2 L#10 (256KB) + L1d L#10 (32KB) + L1i L#10 (32KB) + Core
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     L#10
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           PU L#20 (P#10)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           PU L#21 (P#26)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         L2 L#11 (256KB) + L1d L#11 (32KB) + L1i L#11 (32KB) + Core
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     L#11
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           PU L#22 (P#11)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           PU L#23 (P#27)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         L2 L#12 (256KB) + L1d L#12 (32KB) + L1i L#12 (32KB) + Core
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     L#12
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           PU L#24 (P#12)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           PU L#25 (P#28)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         L2 L#13 (256KB) + L1d L#13 (32KB) + L1i L#13 (32KB) + Core
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     L#13
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           PU L#26 (P#13)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           PU L#27 (P#29)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         L2 L#14 (256KB) + L1d L#14 (32KB) + L1i L#14 (32KB) + Core
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     L#14
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           PU L#28 (P#14)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           PU L#29 (P#30)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         L2 L#15 (256KB) + L1d L#15 (32KB) + L1i L#15 (32KB) + Core
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     L#15
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           PU L#30 (P#15)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           PU L#31 (P#31)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     On 10/03/2015 05:46 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     Maybe I&#146;m just misreading your HT map - that slurm nodelist
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     syntax is a new one to me, but they tend to change things
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     around. Could you run lstopo on one of those compute nodes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     and send the output?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     I&#146;m just suspicious because I&#146;m not seeing a clear pairing of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     HT numbers in your output, but HT numbering is BIOS-specific
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     and I may just not be understanding your particular pattern.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     Our error message is clearly indicating that we are seeing
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     individual HTs (and not complete cores) assigned, and I don&#146;t
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     know the source of that confusion.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     On Oct 3, 2015, at 8:28 AM, marcin.krotkiewski
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     &lt;marcin.krotkiewski_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','marcin.krotkiewski_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     On 10/03/2015 04:38 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     If mpirun isn&#146;t trying to do any binding, then you will of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     course get the right mapping as we&#146;ll just inherit whatever
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     we received.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Yes. I meant that whatever you received (what SLURM gives)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     is a correct cpu map and assigns _whole_ CPUs, not a single
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     HT to MPI processes. In the case mentioned earlier openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     should start 6 tasks on c1-30. If HT would be treated as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     separate and independent cores, sched_getaffinity of an MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     process started on c1-30 would return a map with 6 entries
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     only. In my case it returns a map with 12 entries - 2 for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     each core. So one process is in fact allocated both HTs, not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     only one. Is what I'm saying correct?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Looking at your output, it&#146;s pretty clear that you are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     getting independent HTs assigned and not full cores.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     How do you mean? Is the above understanding wrong? I would
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     expect that on c1-30 with --bind-to core openmpi should bind
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     to logical cores 0 and 16 (rank 0), 1 and 17 (rank 2) and so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     on. All those logical cores are available in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     sched_getaffinity map, and there is twice as many logical
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     cores as there are MPI processes started on the node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     My guess is that something in slurm has changed such that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     it detects that HT has been enabled, and then begins
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     treating the HTs as completely independent cpus.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Try changing &#147;-bind-to core&#148; to &#147;-bind-to hwthread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;      -use-hwthread-cpus&#148; and see if that works
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     I have and the binding is wrong. For example, I got this output
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     rank 0 @ compute-1-30.local 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     rank 1 @ compute-1-30.local 16,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Which means that two ranks have been bound to the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     physical core (logical cores 0 and 16 are two HTs of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     same core). If I use --bind-to core, I get the following
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     correct binding
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     rank 0 @ compute-1-30.local 0, 16,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     The problem is many other ranks get bad binding with 'rank
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     XXX is not bound (or bound to all available processors)'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     warning.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     But I think I was not entirely correct saying that 1.10.1rc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     did not fix things. It still might have improved something,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     but not everything. Consider this job:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     SLURM_JOB_CPUS_PER_NODE='5,4,6,5(x2),7,5,9,5,7,6'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     SLURM_JOB_NODELIST='c8-[31,34],c9-[30-32,35-36],c10-[31-34]'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     If I run 32 tasks as follows (with 1.10.1rc1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     mpirun --hetero-nodes --report-bindings --bind-to core -np
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     32 ./affinity
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     I get the following error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     processes than cpus on a resource:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        Bind to: CORE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        Node: c9-31
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        #processes: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        #cpus: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     You can override this protection by adding the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     &quot;overload-allowed&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     option to your binding directive.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     If I now use --bind-to core:overload-allowed, then openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     starts and _most_ of the threads are bound correctly (i.e.,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     map contains two logical cores in ALL cases), except this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     case that required the overload flag:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     rank 15 @ compute-9-31.local 1, 17,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     rank 16 @ compute-9-31.local 11, 27,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     rank 17 @ compute-9-31.local 2, 18,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     rank 18 @ compute-9-31.local 12, 28,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     rank 19 @ compute-9-31.local 1, 17,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Note pair 1,17 is used twice. The original SLURM delivered
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     map (no binding) on this node is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     rank 15 @ compute-9-31.local 1, 2, 11, 12, 13, 17, 18, 27,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     28, 29,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     rank 16 @ compute-9-31.local 1, 2, 11, 12, 13, 17, 18, 27,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     28, 29,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     rank 17 @ compute-9-31.local 1, 2, 11, 12, 13, 17, 18, 27,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     28, 29,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     rank 18 @ compute-9-31.local 1, 2, 11, 12, 13, 17, 18, 27,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     28, 29,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     rank 19 @ compute-9-31.local 1, 2, 11, 12, 13, 17, 18, 27,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     28, 29,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Why does openmpi use cores (1,17) twice instead of using
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     core (13,29)? Clearly, the original SLURM-delivered map has
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     5 CPUs included, enough for 5 MPI processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Marcin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     On Oct 3, 2015, at 7:12 AM, marcin.krotkiewski
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     &lt;marcin.krotkiewski_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','marcin.krotkiewski_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     On 10/03/2015 01:06 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Thanks Marcin. Looking at this, I&#146;m guessing that Slurm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     may be treating HTs as &#147;cores&#148; - i.e., as independent
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     cpus. Any chance that is true?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Not to the best of my knowledge, and at least not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     intentionally. SLURM starts as many processes as there are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     physical cores, not threads. To verify this, consider this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     test case:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27790.php">http://www.open-mpi.org/community/lists/users/2015/10/27790.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27791/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27792.php">Gilles Gouaillardet: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27790.php">Gilles Gouaillardet: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>In reply to:</strong> <a href="27790.php">Gilles Gouaillardet: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27792.php">Gilles Gouaillardet: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Reply:</strong> <a href="27792.php">Gilles Gouaillardet: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
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
