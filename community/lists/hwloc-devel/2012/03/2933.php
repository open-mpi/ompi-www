<?
$subject_val = "[hwloc-devel] possible membind changes coming in the Linux kernel";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 16 11:11:45 2012" -->
<!-- isoreceived="20120316151145" -->
<!-- sent="Fri, 16 Mar 2012 16:11:35 +0100" -->
<!-- isosent="20120316151135" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] possible membind changes coming in the Linux kernel" -->
<!-- id="4F635827.7000708_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] possible membind changes coming in the Linux kernel<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-16 11:11:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2934.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4405)"</a>
<li><strong>Previous message:</strong> <a href="2932.php">Brice Goglin: "Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We'll have to check the compatiblity of this thing with the hwloc
<br>
membind API if/when it gets merged in the Linux kernel.
<br>
Lee Schermerhorn's Migrate-on-Fault is supposed to be
<br>
hwloc_membind_nexttouch, that would be a very good news.
<br>
<p>Brice
<br>
<p><p>-------- Message original --------
<br>
Sujet: 	[RFC][PATCH 00/26] sched/numa
<br>
Date : 	Fri, 16 Mar 2012 15:40:28 +0100
<br>
De : 	Peter Zijlstra &lt;a.p.zijlstra_at_[hidden]&gt;
<br>
Pour : 	Linus Torvalds &lt;torvalds_at_[hidden]&gt;, Andrew Morton
<br>
&lt;akpm_at_[hidden]&gt;, Thomas Gleixner &lt;tglx_at_[hidden]&gt;, Ingo
<br>
Molnar &lt;mingo_at_[hidden]&gt;, Paul Turner &lt;pjt_at_[hidden]&gt;, Suresh Siddha
<br>
&lt;suresh.b.siddha_at_[hidden]&gt;, Mike Galbraith &lt;efault_at_[hidden]&gt;, &quot;Paul E.
<br>
McKenney&quot; &lt;paulmck_at_[hidden]&gt;, Lai Jiangshan
<br>
&lt;laijs_at_[hidden]&gt;, Dan Smith &lt;danms_at_[hidden]&gt;, Bharata B Rao
<br>
&lt;bharata.rao_at_[hidden]&gt;, Lee Schermerhorn &lt;Lee.Schermerhorn_at_[hidden]&gt;,
<br>
Andrea Arcangeli &lt;aarcange_at_[hidden]&gt;, Rik van Riel &lt;riel_at_[hidden]&gt;,
<br>
Johannes Weiner &lt;hannes_at_[hidden]&gt;
<br>
Copie &#224; : 	linux-kernel_at_[hidden], linux-mm_at_[hidden]
<br>
<p><p><p>Hi All,
<br>
<p>While the current scheduler has knowledge of the machine topology, including
<br>
NUMA (although there's room for improvement there as well [1]), it is
<br>
completely insensitive to which nodes a task's memory actually is on.
<br>
<p>Current upstream task memory allocation prefers to use the node the task is
<br>
currently running on (unless explicitly told otherwise, see
<br>
mbind()/set_mempolicy()), and with the scheduler free to move the task about at
<br>
will, the task's memory can end up being spread all over the machine's nodes.
<br>
<p>While the scheduler does a reasonable job of keeping short running tasks on a
<br>
single node (by means of simply not doing the cross-node migration very often),
<br>
it completely blows for long-running processes with a large memory footprint.
<br>
<p>This patch-set aims at improving this situation. It does so by assigning a
<br>
preferred, or home, node to every process/thread_group. Memory allocation is
<br>
then directed by this preference instead of the node the task might actually be
<br>
running on momentarily. The load-balancer is also modified to prefer running
<br>
the task on its home-node, although not at the cost of letting CPUs go idle or
<br>
at the cost of execution fairness.
<br>
<p>On top of this a new NUMA balancer is introduced, which can change a process'
<br>
home-node the hard way. This heavy process migration is driven by two factors:
<br>
either tasks are running away from their home-node, or memory is being
<br>
allocated away from the home-node. In either case, it tries to move processes
<br>
around to make the 'problem' go away.
<br>
<p>The home-node migration handles both cpu and memory (anonymous only for now) in
<br>
an integrated fashion. The memory migration uses migrate-on-fault to avoid
<br>
doing a lot of work from the actual numa balancer kernl thread and only
<br>
migrates the active memory.
<br>
<p>For processes that have more tasks than would fit on a node and which want to
<br>
split their activity in a useful fashion, the patch-set introduces two new
<br>
syscalls: sys_numa_tbind()/sys_numa_mbind(). These syscalls can be used to
<br>
create {thread}x{vma} groups which are then scheduled as a unit instead of the
<br>
entire process.
<br>
<p>That said, its still early days and there's lots of improvements to make.
<br>
<p>On to the actual patches...
<br>
<p>The first two are generic cleanups:
<br>
<p>&nbsp;&nbsp;[01/26] mm, mpol: Re-implement check_*_range() using walk_page_range()
<br>
&nbsp;&nbsp;[02/26] mm, mpol: Remove NUMA_INTERLEAVE_HIT
<br>
<p>The second set is a rework of Lee Schermerhorn's Migrate-on-Fault patches [2]:
<br>
<p>&nbsp;&nbsp;[03/26] mm, mpol: add MPOL_MF_LAZY ...
<br>
&nbsp;&nbsp;[04/26] mm, mpol: add MPOL_MF_NOOP
<br>
&nbsp;&nbsp;[05/26] mm, mpol: Check for misplaced page
<br>
&nbsp;&nbsp;[06/26] mm: Migrate misplaced page
<br>
&nbsp;&nbsp;[07/26] mm: Handle misplaced anon pages
<br>
&nbsp;&nbsp;[08/26] mm, mpol: Simplify do_mbind()
<br>
<p>The third set implements the basic numa balancing:
<br>
<p>&nbsp;&nbsp;[09/26] sched, mm: Introduce tsk_home_node()
<br>
&nbsp;&nbsp;[10/26] mm, mpol: Make mempolicy home-node aware
<br>
&nbsp;&nbsp;[11/26] mm, mpol: Lazy migrate a process/vma
<br>
&nbsp;&nbsp;[12/26] sched, mm: sched_{fork,exec} node assignment
<br>
&nbsp;&nbsp;[13/26] sched: Implement home-node awareness
<br>
&nbsp;&nbsp;[14/26] sched, numa: Numa balancer
<br>
&nbsp;&nbsp;[15/26] sched, numa: Implement hotplug hooks
<br>
&nbsp;&nbsp;[16/26] sched, numa: Abstract the numa_entity
<br>
<p>The next three patches are a band-aid, Lai Jiangshan (and Paul McKenney) are
<br>
doing a proper implementation.. the reverts are me being lazy about fwd porting
<br>
my call_srcu() implementation.
<br>
<p>&nbsp;&nbsp;[17/26] srcu: revert1
<br>
&nbsp;&nbsp;[18/26] srcu: revert2
<br>
&nbsp;&nbsp;[19/26] srcu: Implement call_srcu()
<br>
<p>The last bits implement the new syscalls:
<br>
<p>&nbsp;&nbsp;[20/26] mm, mpol: Introduce vma_dup_policy()
<br>
&nbsp;&nbsp;[21/26] mm, mpol: Introduce vma_put_policy()
<br>
&nbsp;&nbsp;[22/26] mm, mpol: Split and explose some mempolicy functions
<br>
&nbsp;&nbsp;[23/26] sched, numa: Introduce sys_numa_{t,m}bind()
<br>
&nbsp;&nbsp;[24/26] mm, mpol: Implement numa_group RSS accounting
<br>
&nbsp;&nbsp;[25/26] sched, numa: Only migrate long-running entities
<br>
&nbsp;&nbsp;[26/26] sched, numa: A few debug bits
<br>
<p><p>And a few numbers...
<br>
<p>On my WSM-EP (2 nodes, 6 cores/node, 2 thread/core), running 48 stream
<br>
benchmarks [3] (modified to use ~230MB and run long).
<br>
<p>Without these patches it degrades into 50-50 local/remote memory accesses:
<br>
<p>&nbsp;Performance counter stats for 'sleep 2':
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;259,668,750 r01b7_at_500b:u 		[100.00%]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262,170,142 r01b7_at_200b:u                                                
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.010446121 seconds time elapsed
<br>
<p>With the patches there's a significant improvement in locality:
<br>
<p>&nbsp;Performance counter stats for 'sleep 2':
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;496,860,345 r01b7_at_500b:u 		[100.00%]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;78,292,565 r01b7_at_200b:u                                                
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.010707488 seconds time elapsed
<br>
<p>(the perf events are a bit magical and not supported in an actual perf
<br>
&nbsp;release -- but the first one is L3 misses to local dram, the second is
<br>
&nbsp;L3 misses to remote dram)
<br>
<p>If you look at those numbers you can also see that the sum is greater in the
<br>
second case, this means that we can service L3 misses at a higher rate, which
<br>
translates into a performance gain.
<br>
<p>These numbers also show that while there's a marked improvement, there's still
<br>
some gain to be had. The current numa balancer is still somewhat fickle.
<br>
<p>&nbsp;~ Peter
<br>
<p><p>[1] - <a href="http://marc.info/?l=linux-kernel&amp;m=130218515520540">http://marc.info/?l=linux-kernel&amp;m=130218515520540</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;now that we have SD_OVERLAP it should be fairly easy to do.
<br>
<p>[2] - <a href="http://markmail.org/message/mdwbcitql5ka4uws">http://markmail.org/message/mdwbcitql5ka4uws</a>
<br>
<p>[3] - <a href="https://asc.llnl.gov/computing_resources/purple/archive/benchmarks/memory/stream.tar">https://asc.llnl.gov/computing_resources/purple/archive/benchmarks/memory/stream.tar</a> 
<br>
<p><pre>
--
To unsubscribe from this list: send the line &quot;unsubscribe linux-kernel&quot; in
the body of a message to majordomo_at_[hidden]
More majordomo info at  <a href="http://vger.kernel.org/majordomo-info.html">http://vger.kernel.org/majordomo-info.html</a>
Please read the FAQ at  <a href="http://www.tux.org/lkml/">http://www.tux.org/lkml/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2933/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2934.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4405)"</a>
<li><strong>Previous message:</strong> <a href="2932.php">Brice Goglin: "Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed"</a>
<!-- nextthread="start" -->
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
