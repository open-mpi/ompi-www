<?
$subject_val = "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  3 11:28:48 2015" -->
<!-- isoreceived="20151003152848" -->
<!-- sent="Sat, 3 Oct 2015 17:28:42 +0200" -->
<!-- isosent="20151003152842" -->
<!-- name="marcin.krotkiewski" -->
<!-- email="marcin.krotkiewski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes" -->
<!-- id="560FF42A.1070908_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="B6B48354-EAED-4592-838E-D3ADB8F78BA7_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-10-03 11:28:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27784.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27782.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>In reply to:</strong> <a href="27782.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27784.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Reply:</strong> <a href="27784.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/03/2015 04:38 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; If mpirun isn&#146;t trying to do any binding, then you will of course get 
</span><br>
<span class="quotelev1">&gt; the right mapping as we&#146;ll just inherit whatever we received. 
</span><br>
Yes. I meant that whatever you received (what SLURM gives) is a correct 
<br>
cpu map and assigns _whole_ CPUs, not a single HT to MPI processes. In 
<br>
the case mentioned earlier openmpi should start 6 tasks on c1-30. If HT 
<br>
would be treated as separate and independent cores, sched_getaffinity of 
<br>
an MPI process started on c1-30 would return a map with 6 entries only. 
<br>
In my case it returns a map with 12 entries - 2 for each core. So one  
<br>
process is in fact allocated both HTs, not only one. Is what I'm saying 
<br>
correct?
<br>
<p><span class="quotelev1">&gt; Looking at your output, it&#146;s pretty clear that you are getting 
</span><br>
<span class="quotelev1">&gt; independent HTs assigned and not full cores. 
</span><br>
How do you mean? Is the above understanding wrong? I would expect that 
<br>
on c1-30 with --bind-to core openmpi should bind to logical cores 0 and 
<br>
16 (rank 0), 1 and 17 (rank 2) and so on. All those logical cores are 
<br>
available in sched_getaffinity map, and there is twice as many logical 
<br>
cores as there are MPI processes started on the node.
<br>
<p><span class="quotelev1">&gt; My guess is that something in slurm has changed such that it detects 
</span><br>
<span class="quotelev1">&gt; that HT has been enabled, and then begins treating the HTs as 
</span><br>
<span class="quotelev1">&gt; completely independent cpus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try changing &#147;-bind-to core&#148; to &#147;-bind-to hwthread 
</span><br>
<span class="quotelev1">&gt;  -use-hwthread-cpus&#148; and see if that works
</span><br>
<span class="quotelev1">&gt;
</span><br>
I have and the binding is wrong. For example, I got this output
<br>
<p>rank 0 @ compute-1-30.local  0,
<br>
rank 1 @ compute-1-30.local  16,
<br>
<p>Which means that two ranks have been bound to the same physical core 
<br>
(logical cores 0 and 16 are two HTs of the same core). If I use 
<br>
--bind-to core, I get the following correct binding
<br>
<p>rank 0 @ compute-1-30.local  0, 16,
<br>
<p>The problem is many other ranks get bad binding with 'rank XXX is not 
<br>
bound (or bound to all available processors)' warning.
<br>
<p>But I think I was not entirely correct saying that 1.10.1rc1 did not fix 
<br>
things. It still might have improved something, but not everything. 
<br>
Consider this job:
<br>
<p>SLURM_JOB_CPUS_PER_NODE='5,4,6,5(x2),7,5,9,5,7,6'
<br>
SLURM_JOB_NODELIST='c8-[31,34],c9-[30-32,35-36],c10-[31-34]'
<br>
<p>If I run 32 tasks as follows (with 1.10.1rc1)
<br>
<p>mpirun --hetero-nodes --report-bindings --bind-to core -np 32 ./affinity
<br>
<p>I get the following error:
<br>
<p>--------------------------------------------------------------------------
<br>
A request was made to bind to that would result in binding more
<br>
processes than cpus on a resource:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Bind to:     CORE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Node:        c9-31
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#processes:  2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#cpus:       1
<br>
<p>You can override this protection by adding the &quot;overload-allowed&quot;
<br>
option to your binding directive.
<br>
--------------------------------------------------------------------------
<br>
<p><p>If I now use --bind-to core:overload-allowed, then openmpi starts and 
<br>
_most_ of the threads are bound correctly (i.e., map contains two 
<br>
logical cores in ALL cases), except this case that required the overload 
<br>
flag:
<br>
<p>rank 15 @ compute-9-31.local   1, 17,
<br>
rank 16 @ compute-9-31.local  11, 27,
<br>
rank 17 @ compute-9-31.local   2, 18,
<br>
rank 18 @ compute-9-31.local  12, 28,
<br>
rank 19 @ compute-9-31.local   1, 17,
<br>
<p>Note pair 1,17 is used twice. The original SLURM delivered map (no 
<br>
binding) on this node is
<br>
<p>rank 15 @ compute-9-31.local  1, 2, 11, 12, 13, 17, 18, 27, 28, 29,
<br>
rank 16 @ compute-9-31.local  1, 2, 11, 12, 13, 17, 18, 27, 28, 29,
<br>
rank 17 @ compute-9-31.local  1, 2, 11, 12, 13, 17, 18, 27, 28, 29,
<br>
rank 18 @ compute-9-31.local  1, 2, 11, 12, 13, 17, 18, 27, 28, 29,
<br>
rank 19 @ compute-9-31.local  1, 2, 11, 12, 13, 17, 18, 27, 28, 29,
<br>
<p>Why does openmpi use cores (1,17) twice instead of using core (13,29)? 
<br>
Clearly, the original SLURM-delivered map has 5 CPUs included, enough 
<br>
for 5 MPI processes.
<br>
<p>Cheers,
<br>
<p>Marcin
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 3, 2015, at 7:12 AM, marcin.krotkiewski 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;marcin.krotkiewski_at_[hidden] &lt;mailto:marcin.krotkiewski_at_[hidden]&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/03/2015 01:06 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks Marcin. Looking at this, I&#146;m guessing that Slurm may be 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; treating HTs as &#147;cores&#148; - i.e., as independent cpus. Any chance that 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is true?
</span><br>
<span class="quotelev2">&gt;&gt; Not to the best of my knowledge, and at least not intentionally. 
</span><br>
<span class="quotelev2">&gt;&gt; SLURM starts as many processes as there are physical cores, not 
</span><br>
<span class="quotelev2">&gt;&gt; threads. To verify this, consider this test case:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_JOB_CPUS_PER_NODE='6,8(x2),10'
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_JOB_NODELIST='c1-[30-31],c2-[32,34]'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I now execute only one mpi process WITH NO BINDING, it will go 
</span><br>
<span class="quotelev2">&gt;&gt; onto c1-30 and should have a map with 6 CPUs (12 hw threads). I run
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --bind-to none -np 1 ./affinity
</span><br>
<span class="quotelev2">&gt;&gt; rank 0 @ compute-1-30.local  0, 1, 3, 4, 5, 6, 16, 17, 19, 20, 21, 22,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have attached the affinity.c program FYI. Clearly, 
</span><br>
<span class="quotelev2">&gt;&gt; sched_getaffinity in my test code returns the correct map.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now if I try to start all 32 processes in this example (still no 
</span><br>
<span class="quotelev2">&gt;&gt; binding):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rank 0 @ compute-1-30.local  0, 1, 3, 4, 5, 6, 16, 17, 19, 20, 21, 22,
</span><br>
<span class="quotelev2">&gt;&gt; rank 1 @ compute-1-30.local  0, 1, 3, 4, 5, 6, 16, 17, 19, 20, 21, 22,
</span><br>
<span class="quotelev2">&gt;&gt; rank 10 @ compute-1-31.local  2, 3, 7, 11, 12, 13, 14, 15, 18, 19, 
</span><br>
<span class="quotelev2">&gt;&gt; 23, 27, 28, 29, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt; rank 11 @ compute-1-31.local  2, 3, 7, 11, 12, 13, 14, 15, 18, 19, 
</span><br>
<span class="quotelev2">&gt;&gt; 23, 27, 28, 29, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt; rank 12 @ compute-1-31.local  2, 3, 7, 11, 12, 13, 14, 15, 18, 19, 
</span><br>
<span class="quotelev2">&gt;&gt; 23, 27, 28, 29, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt; rank 13 @ compute-1-31.local  2, 3, 7, 11, 12, 13, 14, 15, 18, 19, 
</span><br>
<span class="quotelev2">&gt;&gt; 23, 27, 28, 29, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt; rank 6 @ compute-1-31.local  2, 3, 7, 11, 12, 13, 14, 15, 18, 19, 23, 
</span><br>
<span class="quotelev2">&gt;&gt; 27, 28, 29, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt; rank 2 @ compute-1-30.local  0, 1, 3, 4, 5, 6, 16, 17, 19, 20, 21, 22,
</span><br>
<span class="quotelev2">&gt;&gt; rank 7 @ compute-1-31.local  2, 3, 7, 11, 12, 13, 14, 15, 18, 19, 23, 
</span><br>
<span class="quotelev2">&gt;&gt; 27, 28, 29, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt; rank 8 @ compute-1-31.local  2, 3, 7, 11, 12, 13, 14, 15, 18, 19, 23, 
</span><br>
<span class="quotelev2">&gt;&gt; 27, 28, 29, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt; rank 3 @ compute-1-30.local  0, 1, 3, 4, 5, 6, 16, 17, 19, 20, 21, 22,
</span><br>
<span class="quotelev2">&gt;&gt; rank 14 @ compute-2-32.local  7, 8, 9, 10, 11, 12, 13, 14, 23, 24, 
</span><br>
<span class="quotelev2">&gt;&gt; 25, 26, 27, 28, 29, 30,
</span><br>
<span class="quotelev2">&gt;&gt; rank 4 @ compute-1-30.local  0, 1, 3, 4, 5, 6, 16, 17, 19, 20, 21, 22,
</span><br>
<span class="quotelev2">&gt;&gt; rank 15 @ compute-2-32.local  7, 8, 9, 10, 11, 12, 13, 14, 23, 24, 
</span><br>
<span class="quotelev2">&gt;&gt; 25, 26, 27, 28, 29, 30,
</span><br>
<span class="quotelev2">&gt;&gt; rank 9 @ compute-1-31.local  2, 3, 7, 11, 12, 13, 14, 15, 18, 19, 23, 
</span><br>
<span class="quotelev2">&gt;&gt; 27, 28, 29, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt; rank 5 @ compute-1-30.local  0, 1, 3, 4, 5, 6, 16, 17, 19, 20, 21, 22,
</span><br>
<span class="quotelev2">&gt;&gt; rank 16 @ compute-2-32.local  7, 8, 9, 10, 11, 12, 13, 14, 23, 24, 
</span><br>
<span class="quotelev2">&gt;&gt; 25, 26, 27, 28, 29, 30,
</span><br>
<span class="quotelev2">&gt;&gt; rank 17 @ compute-2-32.local  7, 8, 9, 10, 11, 12, 13, 14, 23, 24, 
</span><br>
<span class="quotelev2">&gt;&gt; 25, 26, 27, 28, 29, 30,
</span><br>
<span class="quotelev2">&gt;&gt; rank 29 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 17, 
</span><br>
<span class="quotelev2">&gt;&gt; 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt; rank 30 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 17, 
</span><br>
<span class="quotelev2">&gt;&gt; 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt; rank 18 @ compute-2-32.local  7, 8, 9, 10, 11, 12, 13, 14, 23, 24, 
</span><br>
<span class="quotelev2">&gt;&gt; 25, 26, 27, 28, 29, 30,
</span><br>
<span class="quotelev2">&gt;&gt; rank 19 @ compute-2-32.local  7, 8, 9, 10, 11, 12, 13, 14, 23, 24, 
</span><br>
<span class="quotelev2">&gt;&gt; 25, 26, 27, 28, 29, 30,
</span><br>
<span class="quotelev2">&gt;&gt; rank 31 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 17, 
</span><br>
<span class="quotelev2">&gt;&gt; 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt; rank 20 @ compute-2-32.local  7, 8, 9, 10, 11, 12, 13, 14, 23, 24, 
</span><br>
<span class="quotelev2">&gt;&gt; 25, 26, 27, 28, 29, 30,
</span><br>
<span class="quotelev2">&gt;&gt; rank 22 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 17, 
</span><br>
<span class="quotelev2">&gt;&gt; 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt; rank 21 @ compute-2-32.local  7, 8, 9, 10, 11, 12, 13, 14, 23, 24, 
</span><br>
<span class="quotelev2">&gt;&gt; 25, 26, 27, 28, 29, 30,
</span><br>
<span class="quotelev2">&gt;&gt; rank 23 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 17, 
</span><br>
<span class="quotelev2">&gt;&gt; 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt; rank 24 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 17, 
</span><br>
<span class="quotelev2">&gt;&gt; 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt; rank 25 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 17, 
</span><br>
<span class="quotelev2">&gt;&gt; 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt; rank 26 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 17, 
</span><br>
<span class="quotelev2">&gt;&gt; 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt; rank 27 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 17, 
</span><br>
<span class="quotelev2">&gt;&gt; 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt; rank 28 @ compute-2-34.local  0, 1, 2, 3, 4, 5, 6, 7, 14, 15, 16, 17, 
</span><br>
<span class="quotelev2">&gt;&gt; 18, 19, 20, 21, 22, 23, 30, 31,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Still looks ok to me. If I now turn the binding on, openmpi fails:
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;   Bind to:     CORE
</span><br>
<span class="quotelev2">&gt;&gt;   Node:        c1-31
</span><br>
<span class="quotelev2">&gt;&gt;   #processes:  2
</span><br>
<span class="quotelev2">&gt;&gt;   #cpus:       1
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
<span class="quotelev2">&gt;&gt; The above tests were done with 1.10.1rc1, so it does not fix the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Marcin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#146;m wondering because bind-to core will attempt to bind your proc to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; both HTs on the core. For some reason, we thought that 8.24 were HTs 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the same core, which is why we tried to bind to that pair of HTs. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We got an error because HT #24 was not allocated to us on node c6, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but HT #8 was.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Oct 3, 2015, at 2:43 AM, marcin.krotkiewski 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;marcin.krotkiewski_at_[hidden] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mailto:marcin.krotkiewski_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi, Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I submit my slurm job as follows
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; salloc --ntasks=64 --mem-per-cpu=2G --time=1:0:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Effectively, the allocated CPU cores are spread amount many cluster 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes. SLURM uses cgroups to limit the CPU cores available for mpi 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processes running on a given cluster node. Compute nodes are 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2-socket, 8-core E5-2670 systems with HyperThreading on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node 0 cpus: 0 1 2 3 4 5 6 7 16 17 18 19 20 21 22 23
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node 1 cpus: 8 9 10 11 12 13 14 15 24 25 26 27 28 29 30 31
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node distances:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node   0   1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  0:  10  21
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  1:  21  10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I run MPI program with command
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun  --report-bindings --bind-to core -np 64 ./affinity
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The program simply runs sched_getaffinity for each process and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; prints out the result.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; TEST RUN 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For this particular job the problem is more severe: openmpi fails 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to run at all with error
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI tried to bind a new process, but something went wrong.  The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process was killed without launching the target application.  Your job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will now abort.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Local host:        c6-6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Application name:  ./affinity
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Error message:     hwloc_set_cpubind returned &quot;Error&quot; for bitmap 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;8,24&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Location:          odls_default_module.c:551
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is SLURM environment variables:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_JOBID=12712225
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_JOB_CPUS_PER_NODE='3(x2),2,1(x3),2(x2),1,3(x3),5,1,4,1,3,2,3,7,1,5,6,1'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_JOB_ID=12712225
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_JOB_NODELIST='c6-[3,6-8,12,14,17,22-23],c8-[4,7,9,17,20,28],c15-[5,10,18,20,22-24,28],c16-11'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_JOB_NUM_NODES=24
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_JOB_PARTITION=normal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_MEM_PER_CPU=2048
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_NNODES=24
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_NODELIST='c6-[3,6-8,12,14,17,22-23],c8-[4,7,9,17,20,28],c15-[5,10,18,20,22-24,28],c16-11'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_NODE_ALIASES='(null)'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_NPROCS=64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_NTASKS=64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_SUBMIT_DIR=/cluster/home/marcink
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_SUBMIT_HOST=login-0-2.local
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_TASKS_PER_NODE='3(x2),2,1(x3),2(x2),1,3(x3),5,1,4,1,3,2,3,7,1,5,6,1'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There is also a lot of warnings like
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compute-6-6.local:20158] MCW rank 4 is not bound (or bound to all 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; TEST RUN 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In another allocation I got a different error
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
<span class="quotelev4">&gt;&gt;&gt;&gt;   Node:        c6-19
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
<span class="quotelev4">&gt;&gt;&gt;&gt; and the allocation was the following
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_JOBID=12712250
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_JOB_CPUS_PER_NODE='3(x2),2,1,15,1,3,16,2,1,3(x2),2,5,4'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_JOB_ID=12712250
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_JOB_NODELIST='c6-[3,6-8,12,14,17,19,22-23],c8-[4,7,9,17,28]'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_JOB_NUM_NODES=15
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_JOB_PARTITION=normal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_MEM_PER_CPU=2048
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_NNODES=15
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_NODELIST='c6-[3,6-8,12,14,17,19,22-23],c8-[4,7,9,17,28]'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_NODE_ALIASES='(null)'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_NPROCS=64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_NTASKS=64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_SUBMIT_DIR=/cluster/home/marcink
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_SUBMIT_HOST=login-0-2.local
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM_TASKS_PER_NODE='3(x2),2,1,15,1,3,16,2,1,3(x2),2,5,4'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If in this case I run on only 32 cores
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun  --report-bindings --bind-to core -np 32 ./affinity
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the process starts, but I get the original binding problem:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compute-6-8.local:31414] MCW rank 8 is not bound (or bound to all 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available processors)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Running with --hetero-nodes yields exactly the same results
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hope the above is useful. The problem with binding under SLURM with 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CPU cores spread over nodes seems to be very reproducible. It is 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; actually very often that OpenMPI dies with some error like above. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; These tests were run with openmpi-1.8.8 and 1.10.0, both giving 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; same results.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; One more suggestion. The warning message (MCW rank 8 is not 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bound...) is ONLY displayed when I use --report-bindings. It is 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; never shown if I leave out this option, and although the binding is 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrong the user is not notified. I think it would be better to show 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this warning in all cases binding fails.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Let me know if you need more information. I can help to debug this 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - it is a rather crucial issue.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Marcin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 10/02/2015 11:49 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can you please send me the allocation request you made (so I can 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; see what you specified on the cmd line), and the mpirun cmd line?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Oct 2, 2015, at 8:25 AM, Marcin Krotkiewski 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;marcin.krotkiewski_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:marcin.krotkiewski_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I fail to make OpenMPI bind to cores correctly when running from 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; within SLURM-allocated CPU resources spread over a range of 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; compute nodes in an otherwise homogeneous cluster. I have found 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; this thread
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/06/24682.php">http://www.open-mpi.org/community/lists/users/2014/06/24682.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and did try to use what Ralph suggested there (--hetero-nodes), 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; but it does not work (v. 1.10.0). When running with 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --report-bindings I get messages like
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-9-11.local:27571] MCW rank 10 is not bound (or bound to 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; all available processors)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; for all ranks outside of my first physical compute node. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Moreover, everything works as expected if I ask SLURM to assign 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; entire compute nodes. So it does look like Ralph's diagnose 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; presented in that thread is correct, just the --hetero-nodes 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; switch does not work for me.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have written a short code that uses sched_getaffinity to print 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the effective bindings: all MPI ranks except of those on the 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; first node are bound to all CPU cores allocated by SLURM.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Do I have to do something except of --hetero-nodes, or is this a 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; problem that needs further investigation?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks a lot!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Marcin
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27770.php">http://www.open-mpi.org/community/lists/users/2015/10/27770.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27774.php">http://www.open-mpi.org/community/lists/users/2015/10/27774.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27776.php">http://www.open-mpi.org/community/lists/users/2015/10/27776.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2015/10/27778.php">http://www.open-mpi.org/community/lists/users/2015/10/27778.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;affinity.c&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this 
</span><br>
<span class="quotelev2">&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2015/10/27781.php">http://www.open-mpi.org/community/lists/users/2015/10/27781.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27782.php">http://www.open-mpi.org/community/lists/users/2015/10/27782.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27783/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27784.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27782.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>In reply to:</strong> <a href="27782.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27784.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Reply:</strong> <a href="27784.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
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
