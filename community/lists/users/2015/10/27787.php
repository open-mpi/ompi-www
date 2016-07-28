<?
$subject_val = "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  3 13:17:54 2015" -->
<!-- isoreceived="20151003171754" -->
<!-- sent="Sat, 3 Oct 2015 10:17:37 -0700" -->
<!-- isosent="20151003171737" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes" -->
<!-- id="3A1A0AC6-18DB-4F78-90F9-6018E275E467_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5EAAC7C1-5545-4476-9C28-8D8FFFBDED02_at_open-mpi.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-03 13:17:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27788.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27786.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>In reply to:</strong> <a href="27786.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27788.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Reply:</strong> <a href="27788.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rats - just realized I have no way to test this as none of the machines I can access are setup for cgroup-based multi-tenant. Is this a debug version of OMPI? If not, can you rebuild OMPI with &#151;enable-debug?
<br>
<p>Then please run it with &#151;mca rmaps_base_verbose 10 and pass along the output.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Oct 3, 2015, at 10:09 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What version of slurm is this? I might try to debug it here. I&#146;m not sure where the problem lies just yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 3, 2015, at 8:59 AM, marcin.krotkiewski &lt;marcin.krotkiewski_at_[hidden] &lt;mailto:marcin.krotkiewski_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here is the output of lstopo. In short, (0,16) are core 0, (1,17) - core 1 etc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Machine (64GB)
</span><br>
<span class="quotelev2">&gt;&gt;   NUMANode L#0 (P#0 32GB)
</span><br>
<span class="quotelev2">&gt;&gt;     Socket L#0 + L3 L#0 (20MB)
</span><br>
<span class="quotelev2">&gt;&gt;       L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB) + Core L#0
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#0 (P#0)
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#1 (P#16)
</span><br>
<span class="quotelev2">&gt;&gt;       L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB) + Core L#1
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#2 (P#1)
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#3 (P#17)
</span><br>
<span class="quotelev2">&gt;&gt;       L2 L#2 (256KB) + L1d L#2 (32KB) + L1i L#2 (32KB) + Core L#2
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#4 (P#2)
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#5 (P#18)
</span><br>
<span class="quotelev2">&gt;&gt;       L2 L#3 (256KB) + L1d L#3 (32KB) + L1i L#3 (32KB) + Core L#3
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#6 (P#3)
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#7 (P#19)
</span><br>
<span class="quotelev2">&gt;&gt;       L2 L#4 (256KB) + L1d L#4 (32KB) + L1i L#4 (32KB) + Core L#4
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#8 (P#4)
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#9 (P#20)
</span><br>
<span class="quotelev2">&gt;&gt;       L2 L#5 (256KB) + L1d L#5 (32KB) + L1i L#5 (32KB) + Core L#5
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#10 (P#5)
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#11 (P#21)
</span><br>
<span class="quotelev2">&gt;&gt;       L2 L#6 (256KB) + L1d L#6 (32KB) + L1i L#6 (32KB) + Core L#6
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#12 (P#6)
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#13 (P#22)
</span><br>
<span class="quotelev2">&gt;&gt;       L2 L#7 (256KB) + L1d L#7 (32KB) + L1i L#7 (32KB) + Core L#7
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#14 (P#7)
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#15 (P#23)
</span><br>
<span class="quotelev2">&gt;&gt;     HostBridge L#0
</span><br>
<span class="quotelev2">&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev2">&gt;&gt;         PCI 8086:1521
</span><br>
<span class="quotelev2">&gt;&gt;           Net L#0 &quot;eth0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;         PCI 8086:1521
</span><br>
<span class="quotelev2">&gt;&gt;           Net L#1 &quot;eth1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev2">&gt;&gt;         PCI 15b3:1003
</span><br>
<span class="quotelev2">&gt;&gt;           Net L#2 &quot;ib0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           OpenFabrics L#3 &quot;mlx4_0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev2">&gt;&gt;         PCI 102b:0532
</span><br>
<span class="quotelev2">&gt;&gt;       PCI 8086:1d02
</span><br>
<span class="quotelev2">&gt;&gt;         Block L#4 &quot;sda&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   NUMANode L#1 (P#1 32GB) + Socket L#1 + L3 L#1 (20MB)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#8 (256KB) + L1d L#8 (32KB) + L1i L#8 (32KB) + Core L#8
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#16 (P#8)
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#17 (P#24)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#9 (256KB) + L1d L#9 (32KB) + L1i L#9 (32KB) + Core L#9
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#18 (P#9)
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#19 (P#25)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#10 (256KB) + L1d L#10 (32KB) + L1i L#10 (32KB) + Core L#10
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#20 (P#10)
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#21 (P#26)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#11 (256KB) + L1d L#11 (32KB) + L1i L#11 (32KB) + Core L#11
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#22 (P#11)
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#23 (P#27)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#12 (256KB) + L1d L#12 (32KB) + L1i L#12 (32KB) + Core L#12
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#24 (P#12)
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#25 (P#28)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#13 (256KB) + L1d L#13 (32KB) + L1i L#13 (32KB) + Core L#13
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#26 (P#13)
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#27 (P#29)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#14 (256KB) + L1d L#14 (32KB) + L1i L#14 (32KB) + Core L#14
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#28 (P#14)
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#29 (P#30)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#15 (256KB) + L1d L#15 (32KB) + L1i L#15 (32KB) + Core L#15
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#30 (P#15)
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#31 (P#31)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 10/03/2015 05:46 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe I&#146;m just misreading your HT map - that slurm nodelist syntax is a new one to me, but they tend to change things around. Could you run lstopo on one of those compute nodes and send the output?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#146;m just suspicious because I&#146;m not seeing a clear pairing of HT numbers in your output, but HT numbering is BIOS-specific and I may just not be understanding your particular pattern. Our error message is clearly indicating that we are seeing individual HTs (and not complete cores) assigned, and I don&#146;t know the source of that confusion.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Oct 3, 2015, at 8:28 AM, marcin.krotkiewski &lt;marcin.krotkiewski_at_[hidden] &lt;mailto:marcin.krotkiewski_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 10/03/2015 04:38 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If mpirun isn&#146;t trying to do any binding, then you will of course get the right mapping as we&#146;ll just inherit whatever we received.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes. I meant that whatever you received (what SLURM gives) is a correct cpu map and assigns _whole_ CPUs, not a single HT to MPI processes. In the case mentioned earlier openmpi should start 6 tasks on c1-30. If HT would be treated as separate and independent cores, sched_getaffinity of an MPI process started on c1-30 would return a map with 6 entries only. In my case it returns a map with 12 entries - 2 for each core. So one  process is in fact allocated both HTs, not only one. Is what I'm saying correct?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Looking at your output, it&#146;s pretty clear that you are getting independent HTs assigned and not full cores. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How do you mean? Is the above understanding wrong? I would expect that on c1-30 with --bind-to core openmpi should bind to logical cores 0 and 16 (rank 0), 1 and 17 (rank 2) and so on. All those logical cores are available in sched_getaffinity map, and there is twice as many logical cores as there are MPI processes started on the node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; My guess is that something in slurm has changed such that it detects that HT has been enabled, and then begins treating the HTs as completely independent cpus.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Try changing &#147;-bind-to core&#148; to &#147;-bind-to hwthread  -use-hwthread-cpus&#148; and see if that works
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have and the binding is wrong. For example, I got this output
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 0 @ compute-1-30.local  0,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 1 @ compute-1-30.local  16,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Which means that two ranks have been bound to the same physical core (logical cores 0 and 16 are two HTs of the same core). If I use --bind-to core, I get the following correct binding
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 0 @ compute-1-30.local  0, 16,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The problem is many other ranks get bad binding with 'rank XXX is not bound (or bound to all available processors)' warning.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But I think I was not entirely correct saying that 1.10.1rc1 did not fix things. It still might have improved something, but not everything. Consider this job:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_JOB_CPUS_PER_NODE='5,4,6,5(x2),7,5,9,5,7,6'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_JOB_NODELIST='c8-[31,34],c9-[30-32,35-36],c10-[31-34]'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I run 32 tasks as follows (with 1.10.1rc1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun --hetero-nodes --report-bindings --bind-to core -np 32 ./affinity
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I get the following error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Bind to:     CORE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Node:        c9-31
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    #processes:  2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    #cpus:       1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; option to your binding directive.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I now use --bind-to core:overload-allowed, then openmpi starts and _most_ of the threads are bound correctly (i.e., map contains two logical cores in ALL cases), except this case that required the overload flag:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 15 @ compute-9-31.local   1, 17,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 16 @ compute-9-31.local  11, 27,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 17 @ compute-9-31.local   2, 18, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 18 @ compute-9-31.local  12, 28,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 19 @ compute-9-31.local   1, 17,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Note pair 1,17 is used twice. The original SLURM delivered map (no binding) on this node is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 15 @ compute-9-31.local  1, 2, 11, 12, 13, 17, 18, 27, 28, 29, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 16 @ compute-9-31.local  1, 2, 11, 12, 13, 17, 18, 27, 28, 29,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 17 @ compute-9-31.local  1, 2, 11, 12, 13, 17, 18, 27, 28, 29,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 18 @ compute-9-31.local  1, 2, 11, 12, 13, 17, 18, 27, 28, 29,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 19 @ compute-9-31.local  1, 2, 11, 12, 13, 17, 18, 27, 28, 29,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Why does openmpi use cores (1,17) twice instead of using core (13,29)? Clearly, the original SLURM-delivered map has 5 CPUs included, enough for 5 MPI processes. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Marcin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Oct 3, 2015, at 7:12 AM, marcin.krotkiewski &lt;marcin.krotkiewski_at_[hidden] &lt;mailto:marcin.krotkiewski_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 10/03/2015 01:06 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks Marcin. Looking at this, I&#146;m guessing that Slurm may be treating HTs as &#147;cores&#148; - i.e., as independent cpus. Any chance that is true?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Not to the best of my knowledge, and at least not intentionally. SLURM starts as many processes as there are physical cores, not threads. To verify this, consider this test case:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_CPUS_PER_NODE='6,8(x2),10'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_NODELIST='c1-[30-31],c2-[32,34]'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If I now execute only one mpi process WITH NO BINDING, it will go onto c1-30 and should have a map with 6 CPUs (12 hw threads). I run
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun --bind-to none -np 1 ./affinity
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 0 @ compute-1-30.local  0, 1, 3, 4, 5, 6, 16, 17, 19, 20, 21, 22,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have attached the affinity.c program FYI. Clearly, sched_getaffinity in my test code returns the correct map.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Now if I try to start all 32 processes in this example (still no binding):
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 0 @ compute-1-30.local  0, 1, 3, 4, 5, 6, 16, 17, 19, 20, 21, 22,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 1 @ compute-1-30.local  0, 1, 3, 4, 5, 6, 16, 17, 19, 20, 21, 22,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 10 @ compute-1-31.local  2, 3, 7, 11, 12, 13, 14, 15, 18, 19, 23, 27, 28, 29, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 11 @ compute-1-31.local  2, 3, 7, 11, 12, 13, 14, 15, 18, 19, 23, 27, 28, 29, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 12 @ compute-1-31.local  2, 3, 7, 11, 12, 13, 14, 15, 18, 19, 23, 27, 28, 29, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 13 @ compute-1-31.local  2, 3, 7, 11, 12, 13, 14, 15, 18, 19, 23, 27, 28, 29, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 6 @ compute-1-31.local  2, 3, 7, 11, 12, 13, 14, 15, 18, 19, 23, 27, 28, 29, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 2 @ compute-1-30.local  0, 1, 3, 4, 5, 6, 16, 17, 19, 20, 21, 22,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 7 @ compute-1-31.local  2, 3, 7, 11, 12, 13, 14, 15, 18, 19, 23, 27, 28, 29, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 8 @ compute-1-31.local  2, 3, 7, 11, 12, 13, 14, 15, 18, 19, 23, 27, 28, 29, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 3 @ compute-1-30.local  0, 1, 3, 4, 5, 6, 16, 17, 19, 20, 21, 22,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 14 @ compute-2-32.local  7, 8, 9, 10, 11, 12, 13, 14, 23, 24, 25, 26, 27, 28, 29, 30,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 4 @ compute-1-30.local  0, 1, 3, 4, 5, 6, 16, 17, 19, 20, 21, 22,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 15 @ compute-2-32.local  7, 8, 9, 10, 11, 12, 13, 14, 23, 24, 25, 26, 27, 28, 29, 30,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 9 @ compute-1-31.local  2, 3, 7, 11, 12, 13, 14, 15, 18, 19, 23, 27, 28, 29, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 5 @ compute-1-30.local  0, 1, 3, 4, 5, 6, 16, 17, 19, 20, 21, 22,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 16 @ compute-2-32.local  7, 8, 9, 10, 11, 12, 13, 14, 23, 24, 25, 26, 27, 28, 29, 30,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 17 @ compute-2-32.local  7, 8, 9, 10, 11, 12, 13, 14, 23, 24, 25, 26, 27, 28, 29, 30,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 29 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 30 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 18 @ compute-2-32.local  7, 8, 9, 10, 11, 12, 13, 14, 23, 24, 25, 26, 27, 28, 29, 30,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 19 @ compute-2-32.local  7, 8, 9, 10, 11, 12, 13, 14, 23, 24, 25, 26, 27, 28, 29, 30,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 31 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 20 @ compute-2-32.local  7, 8, 9, 10, 11, 12, 13, 14, 23, 24, 25, 26, 27, 28, 29, 30,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 22 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 21 @ compute-2-32.local  7, 8, 9, 10, 11, 12, 13, 14, 23, 24, 25, 26, 27, 28, 29, 30,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 23 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 24 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 25 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 26 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 27 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rank 28 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Still looks ok to me. If I now turn the binding on, openmpi fails:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Bind to:     CORE
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Node:        c1-31
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   #processes:  2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   #cpus:       1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; option to your binding directive.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The above tests were done with 1.10.1rc1, so it does not fix the problem.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Marcin
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I&#146;m wondering because bind-to core will attempt to bind your proc to both HTs on the core. For some reason, we thought that 8.24 were HTs on the same core, which is why we tried to bind to that pair of HTs. We got an error because HT #24 was not allocated to us on node c6, but HT #8 was.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 3, 2015, at 2:43 AM, marcin.krotkiewski &lt; &lt;mailto:marcin.krotkiewski_at_[hidden]&gt;marcin.krotkiewski_at_[hidden] &lt;mailto:marcin.krotkiewski_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi, Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I submit my slurm job as follows
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; salloc --ntasks=64 --mem-per-cpu=2G --time=1:0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Effectively, the allocated CPU cores are spread amount many cluster nodes. SLURM uses cgroups to limit the CPU cores available for mpi processes running on a given cluster node. Compute nodes are 2-socket, 8-core E5-2670 systems with HyperThreading on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; node 0 cpus: 0 1 2 3 4 5 6 7 16 17 18 19 20 21 22 23
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; node 1 cpus: 8 9 10 11 12 13 14 15 24 25 26 27 28 29 30 31
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; node distances:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; node   0   1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  0:  10  21
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  1:  21  10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I run MPI program with command
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun  --report-bindings --bind-to core -np 64 ./affinity
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The program simply runs sched_getaffinity for each process and prints out the result.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -----------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; TEST RUN 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -----------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; For this particular job the problem is more severe: openmpi fails to run at all with error
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Open MPI tried to bind a new process, but something went wrong.  The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; process was killed without launching the target application.  Your job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; will now abort.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Local host:        c6-6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Application name:  ./affinity
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Error message:     hwloc_set_cpubind returned &quot;Error&quot; for bitmap &quot;8,24&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Location:          odls_default_module.c:551
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is SLURM environment variables:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOBID=12712225
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_CPUS_PER_NODE='3(x2),2,1(x3),2(x2),1,3(x3),5,1,4,1,3,2,3,7,1,5,6,1'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_ID=12712225
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_NODELIST='c6-[3,6-8,12,14,17,22-23],c8-[4,7,9,17,20,28],c15-[5,10,18,20,22-24,28],c16-11'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_NUM_NODES=24
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_PARTITION=normal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_MEM_PER_CPU=2048
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NNODES=24
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NODELIST='c6-[3,6-8,12,14,17,22-23],c8-[4,7,9,17,20,28],c15-[5,10,18,20,22-24,28],c16-11'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NODE_ALIASES='(null)'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NPROCS=64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NTASKS=64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_SUBMIT_DIR=/cluster/home/marcink
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_SUBMIT_HOST=login-0-2.local
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_TASKS_PER_NODE='3(x2),2,1(x3),2(x2),1,3(x3),5,1,4,1,3,2,3,7,1,5,6,1'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; There is also a lot of warnings like
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-6-6.local:20158] MCW rank 4 is not bound (or bound to all available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -----------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; TEST RUN 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -----------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; In another allocation I got a different error
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Bind to:     CORE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Node:        c6-19
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   #processes:  2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   #cpus:       1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; option to your binding directive.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and the allocation was the following
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOBID=12712250
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_CPUS_PER_NODE='3(x2),2,1,15,1,3,16,2,1,3(x2),2,5,4'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_ID=12712250
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_NODELIST='c6-[3,6-8,12,14,17,19,22-23],c8-[4,7,9,17,28]'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_NUM_NODES=15
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_PARTITION=normal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_MEM_PER_CPU=2048
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NNODES=15
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NODELIST='c6-[3,6-8,12,14,17,19,22-23],c8-[4,7,9,17,28]'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NODE_ALIASES='(null)'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NPROCS=64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NTASKS=64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_SUBMIT_DIR=/cluster/home/marcink
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_SUBMIT_HOST=login-0-2.local
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_TASKS_PER_NODE='3(x2),2,1,15,1,3,16,2,1,3(x2),2,5,4'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If in this case I run on only 32 cores
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun  --report-bindings --bind-to core -np 32 ./affinity
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the process starts, but I get the original binding problem:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-6-8.local:31414] MCW rank 8 is not bound (or bound to all available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Running with --hetero-nodes yields exactly the same results
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hope the above is useful. The problem with binding under SLURM with CPU cores spread over nodes seems to be very reproducible. It is actually very often that OpenMPI dies with some error like above. These tests were run with openmpi-1.8.8 and 1.10.0, both giving same results.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; One more suggestion. The warning message (MCW rank 8 is not bound...) is ONLY displayed when I use --report-bindings. It is never shown if I leave out this option, and although the binding is wrong the user is not notified. I think it would be better to show this warning in all cases binding fails.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Let me know if you need more information. I can help to debug this - it is a rather crucial issue.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Marcin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 10/02/2015 11:49 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Can you please send me the allocation request you made (so I can see what you specified on the cmd line), and the mpirun cmd line?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 2, 2015, at 8:25 AM, Marcin Krotkiewski &lt;marcin.krotkiewski_at_[hidden] &lt;mailto:marcin.krotkiewski_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I fail to make OpenMPI bind to cores correctly when running from within SLURM-allocated CPU resources spread over a range of compute nodes in an otherwise homogeneous cluster. I have found this thread
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/06/24682.php">http://www.open-mpi.org/community/lists/users/2014/06/24682.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/06/24682.php">http://www.open-mpi.org/community/lists/users/2014/06/24682.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and did try to use what Ralph suggested there (--hetero-nodes), but it does not work (v. 1.10.0). When running with --report-bindings I get messages like
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-9-11.local:27571] MCW rank 10 is not bound (or bound to all available processors)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; for all ranks outside of my first physical compute node. Moreover, everything works as expected if I ask SLURM to assign entire compute nodes. So it does look like Ralph's diagnose presented in that thread is correct, just the --hetero-nodes switch does not work for me.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have written a short code that uses sched_getaffinity to print the effective bindings: all MPI ranks except of those on the first node are bound to all CPU cores allocated by SLURM.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Do I have to do something except of --hetero-nodes, or is this a problem that needs further investigation?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks a lot!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Marcin
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription:  &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:  &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27770.php">http://www.open-mpi.org/community/lists/users/2015/10/27770.php</a>&gt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27770.php">http://www.open-mpi.org/community/lists/users/2015/10/27770.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27770.php">http://www.open-mpi.org/community/lists/users/2015/10/27770.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription:  &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:  &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27774.php">http://www.open-mpi.org/community/lists/users/2015/10/27774.php</a>&gt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27774.php">http://www.open-mpi.org/community/lists/users/2015/10/27774.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27774.php">http://www.open-mpi.org/community/lists/users/2015/10/27774.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription:  &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:  &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27776.php">http://www.open-mpi.org/community/lists/users/2015/10/27776.php</a>&gt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27776.php">http://www.open-mpi.org/community/lists/users/2015/10/27776.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27776.php">http://www.open-mpi.org/community/lists/users/2015/10/27776.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription:  &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:  &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27778.php">http://www.open-mpi.org/community/lists/users/2015/10/27778.php</a>&gt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27778.php">http://www.open-mpi.org/community/lists/users/2015/10/27778.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27778.php">http://www.open-mpi.org/community/lists/users/2015/10/27778.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;affinity.c&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription:  &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:  &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27781.php">http://www.open-mpi.org/community/lists/users/2015/10/27781.php</a>&gt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27781.php">http://www.open-mpi.org/community/lists/users/2015/10/27781.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27781.php">http://www.open-mpi.org/community/lists/users/2015/10/27781.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27782.php">http://www.open-mpi.org/community/lists/users/2015/10/27782.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27782.php">http://www.open-mpi.org/community/lists/users/2015/10/27782.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription:  &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:  &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27783.php">http://www.open-mpi.org/community/lists/users/2015/10/27783.php</a>&gt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27783.php">http://www.open-mpi.org/community/lists/users/2015/10/27783.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27783.php">http://www.open-mpi.org/community/lists/users/2015/10/27783.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27784.php">http://www.open-mpi.org/community/lists/users/2015/10/27784.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27784.php">http://www.open-mpi.org/community/lists/users/2015/10/27784.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27785.php">http://www.open-mpi.org/community/lists/users/2015/10/27785.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27787/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27788.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27786.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>In reply to:</strong> <a href="27786.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27788.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Reply:</strong> <a href="27788.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
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
