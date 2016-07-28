<?
$subject_val = "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  3 11:59:31 2015" -->
<!-- isoreceived="20151003155931" -->
<!-- sent="Sat, 3 Oct 2015 17:59:25 +0200" -->
<!-- isosent="20151003155925" -->
<!-- name="marcin.krotkiewski" -->
<!-- email="marcin.krotkiewski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes" -->
<!-- id="560FFB5D.203_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="A422F345-2BD9-47B3-9505-011AFF7E52B6_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-10-03 11:59:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27786.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27784.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>In reply to:</strong> <a href="27784.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27786.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Reply:</strong> <a href="27786.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is the output of lstopo. In short, (0,16) are core 0, (1,17) - core 
<br>
1 etc.
<br>
<p>Machine (64GB)
<br>
&nbsp;&nbsp;&nbsp;NUMANode L#0 (P#0 32GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Socket L#0 + L3 L#0 (20MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB) + Core L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#1 (P#16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB) + Core L#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#2 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#3 (P#17)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#2 (256KB) + L1d L#2 (32KB) + L1i L#2 (32KB) + Core L#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#4 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#5 (P#18)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#3 (256KB) + L1d L#3 (32KB) + L1i L#3 (32KB) + Core L#3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#6 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#7 (P#19)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#4 (256KB) + L1d L#4 (32KB) + L1i L#4 (32KB) + Core L#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#8 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#9 (P#20)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#5 (256KB) + L1d L#5 (32KB) + L1i L#5 (32KB) + Core L#5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#10 (P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#11 (P#21)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#6 (256KB) + L1d L#6 (32KB) + L1i L#6 (32KB) + Core L#6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#12 (P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#13 (P#22)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#7 (256KB) + L1d L#7 (32KB) + L1i L#7 (32KB) + Core L#7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#14 (P#7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#15 (P#23)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HostBridge L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:1521
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#0 &quot;eth0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:1521
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#1 &quot;eth1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 15b3:1003
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#2 &quot;ib0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OpenFabrics L#3 &quot;mlx4_0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 102b:0532
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:1d02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#4 &quot;sda&quot;
<br>
&nbsp;&nbsp;&nbsp;NUMANode L#1 (P#1 32GB) + Socket L#1 + L3 L#1 (20MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#8 (256KB) + L1d L#8 (32KB) + L1i L#8 (32KB) + Core L#8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#16 (P#8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#17 (P#24)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#9 (256KB) + L1d L#9 (32KB) + L1i L#9 (32KB) + Core L#9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#18 (P#9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#19 (P#25)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#10 (256KB) + L1d L#10 (32KB) + L1i L#10 (32KB) + Core L#10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#20 (P#10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#21 (P#26)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#11 (256KB) + L1d L#11 (32KB) + L1i L#11 (32KB) + Core L#11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#22 (P#11)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#23 (P#27)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#12 (256KB) + L1d L#12 (32KB) + L1i L#12 (32KB) + Core L#12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#24 (P#12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#25 (P#28)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#13 (256KB) + L1d L#13 (32KB) + L1i L#13 (32KB) + Core L#13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#26 (P#13)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#27 (P#29)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#14 (256KB) + L1d L#14 (32KB) + L1i L#14 (32KB) + Core L#14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#28 (P#14)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#29 (P#30)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#15 (256KB) + L1d L#15 (32KB) + L1i L#15 (32KB) + Core L#15
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#30 (P#15)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#31 (P#31)
<br>
<p><p><p>On 10/03/2015 05:46 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Maybe I&#146;m just misreading your HT map - that slurm nodelist syntax is 
</span><br>
<span class="quotelev1">&gt; a new one to me, but they tend to change things around. Could you run 
</span><br>
<span class="quotelev1">&gt; lstopo on one of those compute nodes and send the output?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;m just suspicious because I&#146;m not seeing a clear pairing of HT 
</span><br>
<span class="quotelev1">&gt; numbers in your output, but HT numbering is BIOS-specific and I may 
</span><br>
<span class="quotelev1">&gt; just not be understanding your particular pattern. Our error message 
</span><br>
<span class="quotelev1">&gt; is clearly indicating that we are seeing individual HTs (and not 
</span><br>
<span class="quotelev1">&gt; complete cores) assigned, and I don&#146;t know the source of that confusion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 3, 2015, at 8:28 AM, marcin.krotkiewski 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;marcin.krotkiewski_at_[hidden] &lt;mailto:marcin.krotkiewski_at_[hidden]&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/03/2015 04:38 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If mpirun isn&#146;t trying to do any binding, then you will of course 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; get the right mapping as we&#146;ll just inherit whatever we received.
</span><br>
<span class="quotelev2">&gt;&gt; Yes. I meant that whatever you received (what SLURM gives) is a 
</span><br>
<span class="quotelev2">&gt;&gt; correct cpu map and assigns _whole_ CPUs, not a single HT to MPI 
</span><br>
<span class="quotelev2">&gt;&gt; processes. In the case mentioned earlier openmpi should start 6 tasks 
</span><br>
<span class="quotelev2">&gt;&gt; on c1-30. If HT would be treated as separate and independent cores, 
</span><br>
<span class="quotelev2">&gt;&gt; sched_getaffinity of an MPI process started on c1-30 would return a 
</span><br>
<span class="quotelev2">&gt;&gt; map with 6 entries only. In my case it returns a map with 12 entries 
</span><br>
<span class="quotelev2">&gt;&gt; - 2 for each core. So one  process is in fact allocated both HTs, not 
</span><br>
<span class="quotelev2">&gt;&gt; only one. Is what I'm saying correct?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looking at your output, it&#146;s pretty clear that you are getting 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; independent HTs assigned and not full cores.
</span><br>
<span class="quotelev2">&gt;&gt; How do you mean? Is the above understanding wrong? I would expect 
</span><br>
<span class="quotelev2">&gt;&gt; that on c1-30 with --bind-to core openmpi should bind to logical 
</span><br>
<span class="quotelev2">&gt;&gt; cores 0 and 16 (rank 0), 1 and 17 (rank 2) and so on. All those 
</span><br>
<span class="quotelev2">&gt;&gt; logical cores are available in sched_getaffinity map, and there is 
</span><br>
<span class="quotelev2">&gt;&gt; twice as many logical cores as there are MPI processes started on the 
</span><br>
<span class="quotelev2">&gt;&gt; node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My guess is that something in slurm has changed such that it detects 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that HT has been enabled, and then begins treating the HTs as 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; completely independent cpus.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try changing &#147;-bind-to core&#148; to &#147;-bind-to hwthread 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -use-hwthread-cpus&#148; and see if that works
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have and the binding is wrong. For example, I got this output
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rank 0 @ compute-1-30.local  0,
</span><br>
<span class="quotelev2">&gt;&gt; rank 1 @ compute-1-30.local  16,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which means that two ranks have been bound to the same physical core 
</span><br>
<span class="quotelev2">&gt;&gt; (logical cores 0 and 16 are two HTs of the same core). If I use 
</span><br>
<span class="quotelev2">&gt;&gt; --bind-to core, I get the following correct binding
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rank 0 @ compute-1-30.local  0, 16,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is many other ranks get bad binding with 'rank XXX is not 
</span><br>
<span class="quotelev2">&gt;&gt; bound (or bound to all available processors)' warning.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But I think I was not entirely correct saying that 1.10.1rc1 did not 
</span><br>
<span class="quotelev2">&gt;&gt; fix things. It still might have improved something, but not 
</span><br>
<span class="quotelev2">&gt;&gt; everything. Consider this job:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_JOB_CPUS_PER_NODE='5,4,6,5(x2),7,5,9,5,7,6'
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_JOB_NODELIST='c8-[31,34],c9-[30-32,35-36],c10-[31-34]'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I run 32 tasks as follows (with 1.10.1rc1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --hetero-nodes --report-bindings --bind-to core -np 32 ./affinity
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get the following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev2">&gt;&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Bind to:     CORE
</span><br>
<span class="quotelev2">&gt;&gt;    Node:        c9-31
</span><br>
<span class="quotelev2">&gt;&gt;    #processes:  2
</span><br>
<span class="quotelev2">&gt;&gt;    #cpus:       1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev2">&gt;&gt; option to your binding directive.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I now use --bind-to core:overload-allowed, then openmpi starts and 
</span><br>
<span class="quotelev2">&gt;&gt; _most_ of the threads are bound correctly (i.e., map contains two 
</span><br>
<span class="quotelev2">&gt;&gt; logical cores in ALL cases), except this case that required the 
</span><br>
<span class="quotelev2">&gt;&gt; overload flag:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rank 15 @ compute-9-31.local   1, 17,
</span><br>
<span class="quotelev2">&gt;&gt; rank 16 @ compute-9-31.local  11, 27,
</span><br>
<span class="quotelev2">&gt;&gt; rank 17 @ compute-9-31.local   2, 18,
</span><br>
<span class="quotelev2">&gt;&gt; rank 18 @ compute-9-31.local  12, 28,
</span><br>
<span class="quotelev2">&gt;&gt; rank 19 @ compute-9-31.local   1, 17,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note pair 1,17 is used twice. The original SLURM delivered map (no 
</span><br>
<span class="quotelev2">&gt;&gt; binding) on this node is
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rank 15 @ compute-9-31.local  1, 2, 11, 12, 13, 17, 18, 27, 28, 29,
</span><br>
<span class="quotelev2">&gt;&gt; rank 16 @ compute-9-31.local  1, 2, 11, 12, 13, 17, 18, 27, 28, 29,
</span><br>
<span class="quotelev2">&gt;&gt; rank 17 @ compute-9-31.local  1, 2, 11, 12, 13, 17, 18, 27, 28, 29,
</span><br>
<span class="quotelev2">&gt;&gt; rank 18 @ compute-9-31.local  1, 2, 11, 12, 13, 17, 18, 27, 28, 29,
</span><br>
<span class="quotelev2">&gt;&gt; rank 19 @ compute-9-31.local  1, 2, 11, 12, 13, 17, 18, 27, 28, 29,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why does openmpi use cores (1,17) twice instead of using core 
</span><br>
<span class="quotelev2">&gt;&gt; (13,29)? Clearly, the original SLURM-delivered map has 5 CPUs 
</span><br>
<span class="quotelev2">&gt;&gt; included, enough for 5 MPI processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Marcin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Oct 3, 2015, at 7:12 AM, marcin.krotkiewski 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;marcin.krotkiewski_at_[hidden] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mailto:marcin.krotkiewski_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 10/03/2015 01:06 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks Marcin. Looking at this, I&#146;m guessing that Slurm may be 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; treating HTs as &#147;cores&#148; - i.e., as independent cpus. Any chance 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that is true?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Not to the best of my knowledge, and at least not intentionally. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM starts as many processes as there are physical cores, not 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; threads. To verify this, consider this test case:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_JOB_CPUS_PER_NODE='6,8(x2),10'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_JOB_NODELIST='c1-[30-31],c2-[32,34]'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I now execute only one mpi process WITH NO BINDING, it will go 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; onto c1-30 and should have a map with 6 CPUs (12 hw threads). I run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun --bind-to none -np 1 ./affinity
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 0 @ compute-1-30.local  0, 1, 3, 4, 5, 6, 16, 17, 19, 20, 21, 22,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have attached the affinity.c program FYI. Clearly, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sched_getaffinity in my test code returns the correct map.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Now if I try to start all 32 processes in this example (still no 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; binding):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 0 @ compute-1-30.local  0, 1, 3, 4, 5, 6, 16, 17, 19, 20, 21, 22,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 1 @ compute-1-30.local  0, 1, 3, 4, 5, 6, 16, 17, 19, 20, 21, 22,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 10 @ compute-1-31.local  2, 3, 7, 11, 12, 13, 14, 15, 18, 19, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 23, 27, 28, 29, 30, 31,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 11 @ compute-1-31.local  2, 3, 7, 11, 12, 13, 14, 15, 18, 19, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 23, 27, 28, 29, 30, 31,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 12 @ compute-1-31.local  2, 3, 7, 11, 12, 13, 14, 15, 18, 19, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 23, 27, 28, 29, 30, 31,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 13 @ compute-1-31.local  2, 3, 7, 11, 12, 13, 14, 15, 18, 19, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 23, 27, 28, 29, 30, 31,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 6 @ compute-1-31.local  2, 3, 7, 11, 12, 13, 14, 15, 18, 19, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 23, 27, 28, 29, 30, 31,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 2 @ compute-1-30.local  0, 1, 3, 4, 5, 6, 16, 17, 19, 20, 21, 22,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 7 @ compute-1-31.local  2, 3, 7, 11, 12, 13, 14, 15, 18, 19, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 23, 27, 28, 29, 30, 31,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 8 @ compute-1-31.local  2, 3, 7, 11, 12, 13, 14, 15, 18, 19, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 23, 27, 28, 29, 30, 31,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 3 @ compute-1-30.local  0, 1, 3, 4, 5, 6, 16, 17, 19, 20, 21, 22,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 14 @ compute-2-32.local  7, 8, 9, 10, 11, 12, 13, 14, 23, 24, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 25, 26, 27, 28, 29, 30,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 4 @ compute-1-30.local  0, 1, 3, 4, 5, 6, 16, 17, 19, 20, 21, 22,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 15 @ compute-2-32.local  7, 8, 9, 10, 11, 12, 13, 14, 23, 24, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 25, 26, 27, 28, 29, 30,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 9 @ compute-1-31.local  2, 3, 7, 11, 12, 13, 14, 15, 18, 19, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 23, 27, 28, 29, 30, 31,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 5 @ compute-1-30.local  0, 1, 3, 4, 5, 6, 16, 17, 19, 20, 21, 22,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 16 @ compute-2-32.local  7, 8, 9, 10, 11, 12, 13, 14, 23, 24, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 25, 26, 27, 28, 29, 30,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 17 @ compute-2-32.local  7, 8, 9, 10, 11, 12, 13, 14, 23, 24, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 25, 26, 27, 28, 29, 30,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 29 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 17, 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 30 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 17, 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 18 @ compute-2-32.local  7, 8, 9, 10, 11, 12, 13, 14, 23, 24, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 25, 26, 27, 28, 29, 30,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 19 @ compute-2-32.local  7, 8, 9, 10, 11, 12, 13, 14, 23, 24, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 25, 26, 27, 28, 29, 30,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 31 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 17, 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 20 @ compute-2-32.local  7, 8, 9, 10, 11, 12, 13, 14, 23, 24, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 25, 26, 27, 28, 29, 30,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 22 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 17, 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 21 @ compute-2-32.local  7, 8, 9, 10, 11, 12, 13, 14, 23, 24, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 25, 26, 27, 28, 29, 30,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 23 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 17, 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 24 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 17, 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 25 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 17, 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 26 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 17, 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 27 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 17, 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 28 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 17, 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Still looks ok to me. If I now turn the binding on, openmpi fails:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt;   Bind to:     CORE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Node:        c1-31
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   #processes:  2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   #cpus:       1
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
<span class="quotelev4">&gt;&gt;&gt;&gt; The above tests were done with 1.10.1rc1, so it does not fix the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Marcin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I&#146;m wondering because bind-to core will attempt to bind your proc 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to both HTs on the core. For some reason, we thought that 8.24 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; were HTs on the same core, which is why we tried to bind to that 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pair of HTs. We got an error because HT #24 was not allocated to 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; us on node c6, but HT #8 was.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Oct 3, 2015, at 2:43 AM, marcin.krotkiewski 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;marcin.krotkiewski_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:marcin.krotkiewski_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi, Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I submit my slurm job as follows
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; salloc --ntasks=64 --mem-per-cpu=2G --time=1:0:0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Effectively, the allocated CPU cores are spread amount many 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cluster nodes. SLURM uses cgroups to limit the CPU cores 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; available for mpi processes running on a given cluster node. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Compute nodes are 2-socket, 8-core E5-2670 systems with 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; HyperThreading on
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; node 0 cpus: 0 1 2 3 4 5 6 7 16 17 18 19 20 21 22 23
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; node 1 cpus: 8 9 10 11 12 13 14 15 24 25 26 27 28 29 30 31
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; node distances:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; node   0   1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  0:  10  21
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  1:  21  10
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I run MPI program with command
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun  --report-bindings --bind-to core -np 64 ./affinity
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The program simply runs sched_getaffinity for each process and 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; prints out the result.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -----------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; TEST RUN 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -----------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; For this particular job the problem is more severe: openmpi fails 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to run at all with error
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Open MPI tried to bind a new process, but something went wrong.  The
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; process was killed without launching the target application. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Your job
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; will now abort.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Local host:        c6-6
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Application name:  ./affinity
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Error message:     hwloc_set_cpubind returned &quot;Error&quot; for bitmap 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;8,24&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Location:          odls_default_module.c:551
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This is SLURM environment variables:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOBID=12712225
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_CPUS_PER_NODE='3(x2),2,1(x3),2(x2),1,3(x3),5,1,4,1,3,2,3,7,1,5,6,1'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_ID=12712225
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_NODELIST='c6-[3,6-8,12,14,17,22-23],c8-[4,7,9,17,20,28],c15-[5,10,18,20,22-24,28],c16-11'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_NUM_NODES=24
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_PARTITION=normal
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_MEM_PER_CPU=2048
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NNODES=24
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NODELIST='c6-[3,6-8,12,14,17,22-23],c8-[4,7,9,17,20,28],c15-[5,10,18,20,22-24,28],c16-11'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NODE_ALIASES='(null)'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NPROCS=64
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NTASKS=64
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_SUBMIT_DIR=/cluster/home/marcink
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_SUBMIT_HOST=login-0-2.local
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_TASKS_PER_NODE='3(x2),2,1(x3),2(x2),1,3(x3),5,1,4,1,3,2,3,7,1,5,6,1'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; There is also a lot of warnings like
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-6-6.local:20158] MCW rank 4 is not bound (or bound to 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; all available processors)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -----------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; TEST RUN 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -----------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; In another allocation I got a different error
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
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Node:        c6-19
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
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and the allocation was the following
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOBID=12712250
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_CPUS_PER_NODE='3(x2),2,1,15,1,3,16,2,1,3(x2),2,5,4'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_ID=12712250
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_NODELIST='c6-[3,6-8,12,14,17,19,22-23],c8-[4,7,9,17,28]'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_NUM_NODES=15
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_PARTITION=normal
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_MEM_PER_CPU=2048
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NNODES=15
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NODELIST='c6-[3,6-8,12,14,17,19,22-23],c8-[4,7,9,17,28]'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NODE_ALIASES='(null)'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NPROCS=64
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NTASKS=64
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_SUBMIT_DIR=/cluster/home/marcink
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_SUBMIT_HOST=login-0-2.local
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SLURM_TASKS_PER_NODE='3(x2),2,1,15,1,3,16,2,1,3(x2),2,5,4'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If in this case I run on only 32 cores
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun  --report-bindings --bind-to core -np 32 ./affinity
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the process starts, but I get the original binding problem:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-6-8.local:31414] MCW rank 8 is not bound (or bound to 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; all available processors)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Running with --hetero-nodes yields exactly the same results
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hope the above is useful. The problem with binding under SLURM 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with CPU cores spread over nodes seems to be very reproducible. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It is actually very often that OpenMPI dies with some error like 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; above. These tests were run with openmpi-1.8.8 and 1.10.0, both 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; giving same results.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; One more suggestion. The warning message (MCW rank 8 is not 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; bound...) is ONLY displayed when I use --report-bindings. It is 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; never shown if I leave out this option, and although the binding 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; is wrong the user is not notified. I think it would be better to 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; show this warning in all cases binding fails.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Let me know if you need more information. I can help to debug 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; this - it is a rather crucial issue.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Marcin
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 10/02/2015 11:49 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Can you please send me the allocation request you made (so I can 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; see what you specified on the cmd line), and the mpirun cmd line?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 2, 2015, at 8:25 AM, Marcin Krotkiewski 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;marcin.krotkiewski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I fail to make OpenMPI bind to cores correctly when running 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; from within SLURM-allocated CPU resources spread over a range 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; of compute nodes in an otherwise homogeneous cluster. I have 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; found this thread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/06/24682.php">http://www.open-mpi.org/community/lists/users/2014/06/24682.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and did try to use what Ralph suggested there (--hetero-nodes), 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; but it does not work (v. 1.10.0). When running with 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --report-bindings I get messages like
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-9-11.local:27571] MCW rank 10 is not bound (or bound 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to all available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; for all ranks outside of my first physical compute node. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Moreover, everything works as expected if I ask SLURM to assign 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; entire compute nodes. So it does look like Ralph's diagnose 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; presented in that thread is correct, just the --hetero-nodes 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; switch does not work for me.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have written a short code that uses sched_getaffinity to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; print the effective bindings: all MPI ranks except of those on 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the first node are bound to all CPU cores allocated by SLURM.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Do I have to do something except of --hetero-nodes, or is this 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a problem that needs further investigation?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks a lot!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Marcin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2015/10/27770.php">http://www.open-mpi.org/community/lists/users/2015/10/27770.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2015/10/27774.php">http://www.open-mpi.org/community/lists/users/2015/10/27774.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2015/10/27776.php">http://www.open-mpi.org/community/lists/users/2015/10/27776.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2015/10/27778.php">http://www.open-mpi.org/community/lists/users/2015/10/27778.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;affinity.c&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2015/10/27781.php">http://www.open-mpi.org/community/lists/users/2015/10/27781.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/10/27782.php">http://www.open-mpi.org/community/lists/users/2015/10/27782.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this 
</span><br>
<span class="quotelev2">&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2015/10/27783.php">http://www.open-mpi.org/community/lists/users/2015/10/27783.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27784.php">http://www.open-mpi.org/community/lists/users/2015/10/27784.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27785/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27786.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27784.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>In reply to:</strong> <a href="27784.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27786.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Reply:</strong> <a href="27786.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
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
