<?
$subject_val = "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct  4 03:55:24 2015" -->
<!-- isoreceived="20151004075524" -->
<!-- sent="Sun, 4 Oct 2015 16:55:22 +0900" -->
<!-- isosent="20151004075522" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes" -->
<!-- id="CAAkFZ5voA7Xpn9-QwLH+7E3eB_Bp4VfJYxZUh2DuyP_Aj4Epbw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CF16A5B1-1409-463F-B644-4D40C94E524A_at_open-mpi.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-04 03:55:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27791.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27789.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>In reply to:</strong> <a href="27789.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27791.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Reply:</strong> <a href="27791.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I suspect ompi tries to bind to threads outside the cpuset.
<br>
this could be pretty similar to a previous issue when ompi tried to bind to
<br>
cores outside the cpuset.
<br>
/* when a core has more than one thread, would ompi assume all the threads
<br>
are available if the core is available ? */
<br>
I will investigate this from tomorrow
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Sunday, October 4, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks - please go ahead and release that allocation as I&#226;&#128;&#153;m not going to
</span><br>
<span class="quotelev1">&gt; get to this immediately. I&#226;&#128;&#153;ve got several hot irons in the fire right now,
</span><br>
<span class="quotelev1">&gt; and I&#226;&#128;&#153;m not sure when I&#226;&#128;&#153;ll get a chance to track this down.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles or anyone else who might have time - feel free to take a gander and
</span><br>
<span class="quotelev1">&gt; see if something pops out at you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 3, 2015, at 11:05 AM, marcin.krotkiewski &lt;
</span><br>
<span class="quotelev1">&gt; marcin.krotkiewski_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','marcin.krotkiewski_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Done. I have compiled 1.10.0 and 1.10.rc1 with --enable-debug and executed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca rmaps_base_verbose 10 --hetero-nodes --report-bindings
</span><br>
<span class="quotelev1">&gt; --bind-to core -np 32 ./affinity
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In case of 1.10.rc1 I have also added :overload-allowed - output in a
</span><br>
<span class="quotelev1">&gt; separate file. This option did not make much difference for 1.10.0, so I
</span><br>
<span class="quotelev1">&gt; did not attach it here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First thing I noted for 1.10.0 are lines like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:03399] [[37945,0],0] GOT 1 CPUS
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:03399] [[37945,0],0] PROC [[37945,1],27] BITMAP
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:03399] [[37945,0],0] PROC [[37945,1],27] ON c1-26 IS NOT
</span><br>
<span class="quotelev1">&gt; BOUND
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with an empty BITMAP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The SLURM environment is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; set | grep SLURM
</span><br>
<span class="quotelev1">&gt; SLURM_JOBID=12714491
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_CPUS_PER_NODE='4,2,5(x2),4,7,5'
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_ID=12714491
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NODELIST='c1-[2,4,8,13,16,23,26]'
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NUM_NODES=7
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_PARTITION=normal
</span><br>
<span class="quotelev1">&gt; SLURM_MEM_PER_CPU=2048
</span><br>
<span class="quotelev1">&gt; SLURM_NNODES=7
</span><br>
<span class="quotelev1">&gt; SLURM_NODELIST='c1-[2,4,8,13,16,23,26]'
</span><br>
<span class="quotelev1">&gt; SLURM_NODE_ALIASES='(null)'
</span><br>
<span class="quotelev1">&gt; SLURM_NPROCS=32
</span><br>
<span class="quotelev1">&gt; SLURM_NTASKS=32
</span><br>
<span class="quotelev1">&gt; SLURM_SUBMIT_DIR=/cluster/home/marcink
</span><br>
<span class="quotelev1">&gt; SLURM_SUBMIT_HOST=login-0-1.local
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE='4,2,5(x2),4,7,5'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have submitted an interactive job on screen for 120 hours now to work
</span><br>
<span class="quotelev1">&gt; with one example, and not change it for every post :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you need anything else, let me know. I could introduce some
</span><br>
<span class="quotelev1">&gt; patch/printfs and recompile, if you need it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Marcin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/03/2015 07:17 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rats - just realized I have no way to test this as none of the machines I
</span><br>
<span class="quotelev1">&gt; can access are setup for cgroup-based multi-tenant. Is this a debug version
</span><br>
<span class="quotelev1">&gt; of OMPI? If not, can you rebuild OMPI with &#226;&#128;&#148;enable-debug?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then please run it with &#226;&#128;&#148;mca rmaps_base_verbose 10 and pass along the
</span><br>
<span class="quotelev1">&gt; output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 3, 2015, at 10:09 AM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What version of slurm is this? I might try to debug it here. I&#226;&#128;&#153;m not sure
</span><br>
<span class="quotelev1">&gt; where the problem lies just yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 3, 2015, at 8:59 AM, marcin.krotkiewski &lt;
</span><br>
<span class="quotelev1">&gt; marcin.krotkiewski_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','marcin.krotkiewski_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the output of lstopo. In short, (0,16) are core 0, (1,17) - core 1
</span><br>
<span class="quotelev1">&gt; etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Machine (64GB)
</span><br>
<span class="quotelev1">&gt;   NUMANode L#0 (P#0 32GB)
</span><br>
<span class="quotelev1">&gt;     Socket L#0 + L3 L#0 (20MB)
</span><br>
<span class="quotelev1">&gt;       L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB) + Core L#0
</span><br>
<span class="quotelev1">&gt;         PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;         PU L#1 (P#16)
</span><br>
<span class="quotelev1">&gt;       L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB) + Core L#1
</span><br>
<span class="quotelev1">&gt;         PU L#2 (P#1)
</span><br>
<span class="quotelev1">&gt;         PU L#3 (P#17)
</span><br>
<span class="quotelev1">&gt;       L2 L#2 (256KB) + L1d L#2 (32KB) + L1i L#2 (32KB) + Core L#2
</span><br>
<span class="quotelev1">&gt;         PU L#4 (P#2)
</span><br>
<span class="quotelev1">&gt;         PU L#5 (P#18)
</span><br>
<span class="quotelev1">&gt;       L2 L#3 (256KB) + L1d L#3 (32KB) + L1i L#3 (32KB) + Core L#3
</span><br>
<span class="quotelev1">&gt;         PU L#6 (P#3)
</span><br>
<span class="quotelev1">&gt;         PU L#7 (P#19)
</span><br>
<span class="quotelev1">&gt;       L2 L#4 (256KB) + L1d L#4 (32KB) + L1i L#4 (32KB) + Core L#4
</span><br>
<span class="quotelev1">&gt;         PU L#8 (P#4)
</span><br>
<span class="quotelev1">&gt;         PU L#9 (P#20)
</span><br>
<span class="quotelev1">&gt;       L2 L#5 (256KB) + L1d L#5 (32KB) + L1i L#5 (32KB) + Core L#5
</span><br>
<span class="quotelev1">&gt;         PU L#10 (P#5)
</span><br>
<span class="quotelev1">&gt;         PU L#11 (P#21)
</span><br>
<span class="quotelev1">&gt;       L2 L#6 (256KB) + L1d L#6 (32KB) + L1i L#6 (32KB) + Core L#6
</span><br>
<span class="quotelev1">&gt;         PU L#12 (P#6)
</span><br>
<span class="quotelev1">&gt;         PU L#13 (P#22)
</span><br>
<span class="quotelev1">&gt;       L2 L#7 (256KB) + L1d L#7 (32KB) + L1i L#7 (32KB) + Core L#7
</span><br>
<span class="quotelev1">&gt;         PU L#14 (P#7)
</span><br>
<span class="quotelev1">&gt;         PU L#15 (P#23)
</span><br>
<span class="quotelev1">&gt;     HostBridge L#0
</span><br>
<span class="quotelev1">&gt;       PCIBridge
</span><br>
<span class="quotelev1">&gt;         PCI 8086:1521
</span><br>
<span class="quotelev1">&gt;           Net L#0 &quot;eth0&quot;
</span><br>
<span class="quotelev1">&gt;         PCI 8086:1521
</span><br>
<span class="quotelev1">&gt;           Net L#1 &quot;eth1&quot;
</span><br>
<span class="quotelev1">&gt;       PCIBridge
</span><br>
<span class="quotelev1">&gt;         PCI 15b3:1003
</span><br>
<span class="quotelev1">&gt;           Net L#2 &quot;ib0&quot;
</span><br>
<span class="quotelev1">&gt;           OpenFabrics L#3 &quot;mlx4_0&quot;
</span><br>
<span class="quotelev1">&gt;       PCIBridge
</span><br>
<span class="quotelev1">&gt;         PCI 102b:0532
</span><br>
<span class="quotelev1">&gt;       PCI 8086:1d02
</span><br>
<span class="quotelev1">&gt;         Block L#4 &quot;sda&quot;
</span><br>
<span class="quotelev1">&gt;   NUMANode L#1 (P#1 32GB) + Socket L#1 + L3 L#1 (20MB)
</span><br>
<span class="quotelev1">&gt;     L2 L#8 (256KB) + L1d L#8 (32KB) + L1i L#8 (32KB) + Core L#8
</span><br>
<span class="quotelev1">&gt;       PU L#16 (P#8)
</span><br>
<span class="quotelev1">&gt;       PU L#17 (P#24)
</span><br>
<span class="quotelev1">&gt;     L2 L#9 (256KB) + L1d L#9 (32KB) + L1i L#9 (32KB) + Core L#9
</span><br>
<span class="quotelev1">&gt;       PU L#18 (P#9)
</span><br>
<span class="quotelev1">&gt;       PU L#19 (P#25)
</span><br>
<span class="quotelev1">&gt;     L2 L#10 (256KB) + L1d L#10 (32KB) + L1i L#10 (32KB) + Core L#10
</span><br>
<span class="quotelev1">&gt;       PU L#20 (P#10)
</span><br>
<span class="quotelev1">&gt;       PU L#21 (P#26)
</span><br>
<span class="quotelev1">&gt;     L2 L#11 (256KB) + L1d L#11 (32KB) + L1i L#11 (32KB) + Core L#11
</span><br>
<span class="quotelev1">&gt;       PU L#22 (P#11)
</span><br>
<span class="quotelev1">&gt;       PU L#23 (P#27)
</span><br>
<span class="quotelev1">&gt;     L2 L#12 (256KB) + L1d L#12 (32KB) + L1i L#12 (32KB) + Core L#12
</span><br>
<span class="quotelev1">&gt;       PU L#24 (P#12)
</span><br>
<span class="quotelev1">&gt;       PU L#25 (P#28)
</span><br>
<span class="quotelev1">&gt;     L2 L#13 (256KB) + L1d L#13 (32KB) + L1i L#13 (32KB) + Core L#13
</span><br>
<span class="quotelev1">&gt;       PU L#26 (P#13)
</span><br>
<span class="quotelev1">&gt;       PU L#27 (P#29)
</span><br>
<span class="quotelev1">&gt;     L2 L#14 (256KB) + L1d L#14 (32KB) + L1i L#14 (32KB) + Core L#14
</span><br>
<span class="quotelev1">&gt;       PU L#28 (P#14)
</span><br>
<span class="quotelev1">&gt;       PU L#29 (P#30)
</span><br>
<span class="quotelev1">&gt;     L2 L#15 (256KB) + L1d L#15 (32KB) + L1i L#15 (32KB) + Core L#15
</span><br>
<span class="quotelev1">&gt;       PU L#30 (P#15)
</span><br>
<span class="quotelev1">&gt;       PU L#31 (P#31)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/03/2015 05:46 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe I&#226;&#128;&#153;m just misreading your HT map - that slurm nodelist syntax is a
</span><br>
<span class="quotelev1">&gt; new one to me, but they tend to change things around. Could you run lstopo
</span><br>
<span class="quotelev1">&gt; on one of those compute nodes and send the output?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m just suspicious because I&#226;&#128;&#153;m not seeing a clear pairing of HT numbers
</span><br>
<span class="quotelev1">&gt; in your output, but HT numbering is BIOS-specific and I may just not be
</span><br>
<span class="quotelev1">&gt; understanding your particular pattern. Our error message is clearly
</span><br>
<span class="quotelev1">&gt; indicating that we are seeing individual HTs (and not complete cores)
</span><br>
<span class="quotelev1">&gt; assigned, and I don&#226;&#128;&#153;t know the source of that confusion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 3, 2015, at 8:28 AM, marcin.krotkiewski &lt;
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','marcin.krotkiewski_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; marcin.krotkiewski_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','marcin.krotkiewski_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/03/2015 04:38 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If mpirun isn&#226;&#128;&#153;t trying to do any binding, then you will of course get the
</span><br>
<span class="quotelev1">&gt; right mapping as we&#226;&#128;&#153;ll just inherit whatever we received.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes. I meant that whatever you received (what SLURM gives) is a correct
</span><br>
<span class="quotelev1">&gt; cpu map and assigns _whole_ CPUs, not a single HT to MPI processes. In the
</span><br>
<span class="quotelev1">&gt; case mentioned earlier openmpi should start 6 tasks on c1-30. If HT would
</span><br>
<span class="quotelev1">&gt; be treated as separate and independent cores, sched_getaffinity of an MPI
</span><br>
<span class="quotelev1">&gt; process started on c1-30 would return a map with 6 entries only. In my case
</span><br>
<span class="quotelev1">&gt; it returns a map with 12 entries - 2 for each core. So one  process is in
</span><br>
<span class="quotelev1">&gt; fact allocated both HTs, not only one. Is what I'm saying correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at your output, it&#226;&#128;&#153;s pretty clear that you are getting independent
</span><br>
<span class="quotelev1">&gt; HTs assigned and not full cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How do you mean? Is the above understanding wrong? I would expect that on
</span><br>
<span class="quotelev1">&gt; c1-30 with --bind-to core openmpi should bind to logical cores 0 and 16
</span><br>
<span class="quotelev1">&gt; (rank 0), 1 and 17 (rank 2) and so on. All those logical cores are
</span><br>
<span class="quotelev1">&gt; available in sched_getaffinity map, and there is twice as many logical
</span><br>
<span class="quotelev1">&gt; cores as there are MPI processes started on the node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My guess is that something in slurm has changed such that it detects that
</span><br>
<span class="quotelev1">&gt; HT has been enabled, and then begins treating the HTs as completely
</span><br>
<span class="quotelev1">&gt; independent cpus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try changing &#226;&#128;&#156;-bind-to core&#226;&#128;&#157; to &#226;&#128;&#156;-bind-to hwthread  -use-hwthread-cpus&#226;&#128;&#157;
</span><br>
<span class="quotelev1">&gt; and see if that works
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have and the binding is wrong. For example, I got this output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rank 0 @ compute-1-30.local  0,
</span><br>
<span class="quotelev1">&gt; rank 1 @ compute-1-30.local  16,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which means that two ranks have been bound to the same physical core
</span><br>
<span class="quotelev1">&gt; (logical cores 0 and 16 are two HTs of the same core). If I use --bind-to
</span><br>
<span class="quotelev1">&gt; core, I get the following correct binding
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rank 0 @ compute-1-30.local  0, 16,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is many other ranks get bad binding with 'rank XXX is not
</span><br>
<span class="quotelev1">&gt; bound (or bound to all available processors)' warning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I think I was not entirely correct saying that 1.10.1rc1 did not fix
</span><br>
<span class="quotelev1">&gt; things. It still might have improved something, but not everything.
</span><br>
<span class="quotelev1">&gt; Consider this job:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_CPUS_PER_NODE='5,4,6,5(x2),7,5,9,5,7,6'
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NODELIST='c8-[31,34],c9-[30-32,35-36],c10-[31-34]'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I run 32 tasks as follows (with 1.10.1rc1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --hetero-nodes --report-bindings --bind-to core -np 32 ./affinity
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev1">&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Bind to:     CORE
</span><br>
<span class="quotelev1">&gt;    Node:        c9-31
</span><br>
<span class="quotelev1">&gt;    #processes:  2
</span><br>
<span class="quotelev1">&gt;    #cpus:       1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev1">&gt; option to your binding directive.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I now use --bind-to core:overload-allowed, then openmpi starts and
</span><br>
<span class="quotelev1">&gt; _most_ of the threads are bound correctly (i.e., map contains two logical
</span><br>
<span class="quotelev1">&gt; cores in ALL cases), except this case that required the overload flag:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rank 15 @ compute-9-31.local   1, 17,
</span><br>
<span class="quotelev1">&gt; rank 16 @ compute-9-31.local  11, 27,
</span><br>
<span class="quotelev1">&gt; rank 17 @ compute-9-31.local   2, 18,
</span><br>
<span class="quotelev1">&gt; rank 18 @ compute-9-31.local  12, 28,
</span><br>
<span class="quotelev1">&gt; rank 19 @ compute-9-31.local   1, 17,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note pair 1,17 is used twice. The original SLURM delivered map (no
</span><br>
<span class="quotelev1">&gt; binding) on this node is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rank 15 @ compute-9-31.local  1, 2, 11, 12, 13, 17, 18, 27, 28, 29,
</span><br>
<span class="quotelev1">&gt; rank 16 @ compute-9-31.local  1, 2, 11, 12, 13, 17, 18, 27, 28, 29,
</span><br>
<span class="quotelev1">&gt; rank 17 @ compute-9-31.local  1, 2, 11, 12, 13, 17, 18, 27, 28, 29,
</span><br>
<span class="quotelev1">&gt; rank 18 @ compute-9-31.local  1, 2, 11, 12, 13, 17, 18, 27, 28, 29,
</span><br>
<span class="quotelev1">&gt; rank 19 @ compute-9-31.local  1, 2, 11, 12, 13, 17, 18, 27, 28, 29,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why does openmpi use cores (1,17) twice instead of using core (13,29)?
</span><br>
<span class="quotelev1">&gt; Clearly, the original SLURM-delivered map has 5 CPUs included, enough for 5
</span><br>
<span class="quotelev1">&gt; MPI processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Marcin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 3, 2015, at 7:12 AM, marcin.krotkiewski &lt;
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','marcin.krotkiewski_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; marcin.krotkiewski_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','marcin.krotkiewski_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/03/2015 01:06 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks Marcin. Looking at this, I&#226;&#128;&#153;m guessing that Slurm may be treating
</span><br>
<span class="quotelev1">&gt; HTs as &#226;&#128;&#156;cores&#226;&#128;&#157; - i.e., as independent cpus. Any chance that is true?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not to the best of my knowledge, and at least not intentionally. SLURM
</span><br>
<span class="quotelev1">&gt; starts as many processes as there are physical cores, not threads. To
</span><br>
<span class="quotelev1">&gt; verify this, consider this test case:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27790/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27791.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27789.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>In reply to:</strong> <a href="27789.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27791.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Reply:</strong> <a href="27791.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
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
