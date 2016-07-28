<?
$subject_val = "[OMPI devel] Fwd: [hwloc-devel] possible membind changes coming in the Linux kernel";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 16 17:16:31 2012" -->
<!-- isoreceived="20120316211631" -->
<!-- sent="Fri, 16 Mar 2012 17:16:26 -0400" -->
<!-- isosent="20120316211626" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [hwloc-devel] possible membind changes coming in the Linux kernel" -->
<!-- id="7B98D441-CC7E-48A1-B15F-90A74F3D8F47_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F635827.7000708_at_inria.fr" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [hwloc-devel] possible membind changes coming in the Linux kernel<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-16 17:16:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10724.php">Alex Margolin: "[OMPI devel] New odls component fails"</a>
<li><strong>Previous message:</strong> <a href="10722.php">Eugene Loh: "Re: [OMPI devel] v1.5 r26132 broken on multiple nodes?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This isn't strictly related to Open MPI, but all of us here care about NUMA, locality, and performance, so I thought I'd pass along something that Brice forwarded to the hwloc-devel list.
<br>
<p>See Brice's note below, and the original mail to the LKML below that.
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [hwloc-devel] possible membind changes coming in the Linux kernel
</span><br>
<span class="quotelev1">&gt; Date: March 16, 2012 11:11:35 AM EDT
</span><br>
<span class="quotelev1">&gt; To: hwloc development &lt;hwloc-devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: Hardware locality development list &lt;hwloc-devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We'll have to check the compatiblity of this thing with the hwloc membind API if/when it gets merged in the Linux kernel.
</span><br>
<span class="quotelev1">&gt; Lee Schermerhorn's Migrate-on-Fault is supposed to be hwloc_membind_nexttouch, that would be a very good news.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------- Message original --------
</span><br>
<span class="quotelev1">&gt; Sujet:	[RFC][PATCH 00/26] sched/numa
</span><br>
<span class="quotelev1">&gt; Date :	Fri, 16 Mar 2012 15:40:28 +0100
</span><br>
<span class="quotelev1">&gt; De :	Peter Zijlstra &lt;a.p.zijlstra_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Pour :	Linus Torvalds &lt;torvalds_at_[hidden]&gt;, Andrew Morton &lt;akpm_at_[hidden]&gt;, Thomas Gleixner &lt;tglx_at_[hidden]&gt;, Ingo Molnar &lt;mingo_at_[hidden]&gt;, Paul Turner &lt;pjt_at_[hidden]&gt;, Suresh Siddha &lt;suresh.b.siddha_at_[hidden]&gt;, Mike Galbraith &lt;efault_at_[hidden]&gt;, &quot;Paul E. McKenney&quot; &lt;paulmck_at_[hidden]&gt;, Lai Jiangshan &lt;laijs_at_[hidden]&gt;, Dan Smith &lt;danms_at_[hidden]&gt;, Bharata B Rao &lt;bharata.rao_at_[hidden]&gt;, Lee Schermerhorn &lt;Lee.Schermerhorn_at_[hidden]&gt;, Andrea Arcangeli &lt;aarcange_at_[hidden]&gt;, Rik van Riel &lt;riel_at_[hidden]&gt;, Johannes Weiner &lt;hannes_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Copie &#224; :	linux-kernel_at_[hidden], linux-mm_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While the current scheduler has knowledge of the machine topology, including
</span><br>
<span class="quotelev1">&gt; NUMA (although there's room for improvement there as well [1]), it is
</span><br>
<span class="quotelev1">&gt; completely insensitive to which nodes a task's memory actually is on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Current upstream task memory allocation prefers to use the node the task is
</span><br>
<span class="quotelev1">&gt; currently running on (unless explicitly told otherwise, see
</span><br>
<span class="quotelev1">&gt; mbind()/set_mempolicy()), and with the scheduler free to move the task about at
</span><br>
<span class="quotelev1">&gt; will, the task's memory can end up being spread all over the machine's nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While the scheduler does a reasonable job of keeping short running tasks on a
</span><br>
<span class="quotelev1">&gt; single node (by means of simply not doing the cross-node migration very often),
</span><br>
<span class="quotelev1">&gt; it completely blows for long-running processes with a large memory footprint.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This patch-set aims at improving this situation. It does so by assigning a
</span><br>
<span class="quotelev1">&gt; preferred, or home, node to every process/thread_group. Memory allocation is
</span><br>
<span class="quotelev1">&gt; then directed by this preference instead of the node the task might actually be
</span><br>
<span class="quotelev1">&gt; running on momentarily. The load-balancer is also modified to prefer running
</span><br>
<span class="quotelev1">&gt; the task on its home-node, although not at the cost of letting CPUs go idle or
</span><br>
<span class="quotelev1">&gt; at the cost of execution fairness.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On top of this a new NUMA balancer is introduced, which can change a process'
</span><br>
<span class="quotelev1">&gt; home-node the hard way. This heavy process migration is driven by two factors:
</span><br>
<span class="quotelev1">&gt; either tasks are running away from their home-node, or memory is being
</span><br>
<span class="quotelev1">&gt; allocated away from the home-node. In either case, it tries to move processes
</span><br>
<span class="quotelev1">&gt; around to make the 'problem' go away.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The home-node migration handles both cpu and memory (anonymous only for now) in
</span><br>
<span class="quotelev1">&gt; an integrated fashion. The memory migration uses migrate-on-fault to avoid
</span><br>
<span class="quotelev1">&gt; doing a lot of work from the actual numa balancer kernl thread and only
</span><br>
<span class="quotelev1">&gt; migrates the active memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For processes that have more tasks than would fit on a node and which want to
</span><br>
<span class="quotelev1">&gt; split their activity in a useful fashion, the patch-set introduces two new
</span><br>
<span class="quotelev1">&gt; syscalls: sys_numa_tbind()/sys_numa_mbind(). These syscalls can be used to
</span><br>
<span class="quotelev1">&gt; create {thread}x{vma} groups which are then scheduled as a unit instead of the
</span><br>
<span class="quotelev1">&gt; entire process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That said, its still early days and there's lots of improvements to make.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On to the actual patches...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The first two are generic cleanups:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   [01/26] mm, mpol: Re-implement check_*_range() using walk_page_range()
</span><br>
<span class="quotelev1">&gt;   [02/26] mm, mpol: Remove NUMA_INTERLEAVE_HIT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The second set is a rework of Lee Schermerhorn's Migrate-on-Fault patches [2]:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   [03/26] mm, mpol: add MPOL_MF_LAZY ...
</span><br>
<span class="quotelev1">&gt;   [04/26] mm, mpol: add MPOL_MF_NOOP
</span><br>
<span class="quotelev1">&gt;   [05/26] mm, mpol: Check for misplaced page
</span><br>
<span class="quotelev1">&gt;   [06/26] mm: Migrate misplaced page
</span><br>
<span class="quotelev1">&gt;   [07/26] mm: Handle misplaced anon pages
</span><br>
<span class="quotelev1">&gt;   [08/26] mm, mpol: Simplify do_mbind()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The third set implements the basic numa balancing:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   [09/26] sched, mm: Introduce tsk_home_node()
</span><br>
<span class="quotelev1">&gt;   [10/26] mm, mpol: Make mempolicy home-node aware
</span><br>
<span class="quotelev1">&gt;   [11/26] mm, mpol: Lazy migrate a process/vma
</span><br>
<span class="quotelev1">&gt;   [12/26] sched, mm: sched_{fork,exec} node assignment
</span><br>
<span class="quotelev1">&gt;   [13/26] sched: Implement home-node awareness
</span><br>
<span class="quotelev1">&gt;   [14/26] sched, numa: Numa balancer
</span><br>
<span class="quotelev1">&gt;   [15/26] sched, numa: Implement hotplug hooks
</span><br>
<span class="quotelev1">&gt;   [16/26] sched, numa: Abstract the numa_entity
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The next three patches are a band-aid, Lai Jiangshan (and Paul McKenney) are
</span><br>
<span class="quotelev1">&gt; doing a proper implementation.. the reverts are me being lazy about fwd porting
</span><br>
<span class="quotelev1">&gt; my call_srcu() implementation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   [17/26] srcu: revert1
</span><br>
<span class="quotelev1">&gt;   [18/26] srcu: revert2
</span><br>
<span class="quotelev1">&gt;   [19/26] srcu: Implement call_srcu()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The last bits implement the new syscalls:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   [20/26] mm, mpol: Introduce vma_dup_policy()
</span><br>
<span class="quotelev1">&gt;   [21/26] mm, mpol: Introduce vma_put_policy()
</span><br>
<span class="quotelev1">&gt;   [22/26] mm, mpol: Split and explose some mempolicy functions
</span><br>
<span class="quotelev1">&gt;   [23/26] sched, numa: Introduce sys_numa_{t,m}bind()
</span><br>
<span class="quotelev1">&gt;   [24/26] mm, mpol: Implement numa_group RSS accounting
</span><br>
<span class="quotelev1">&gt;   [25/26] sched, numa: Only migrate long-running entities
</span><br>
<span class="quotelev1">&gt;   [26/26] sched, numa: A few debug bits
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And a few numbers...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On my WSM-EP (2 nodes, 6 cores/node, 2 thread/core), running 48 stream
</span><br>
<span class="quotelev1">&gt; benchmarks [3] (modified to use ~230MB and run long).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Without these patches it degrades into 50-50 local/remote memory accesses:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Performance counter stats for 'sleep 2':
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        259,668,750 r01b7_at_500b:u 		[100.00%]
</span><br>
<span class="quotelev1">&gt;        262,170,142 r01b7_at_200b:u                                                
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        2.010446121 seconds time elapsed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With the patches there's a significant improvement in locality:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Performance counter stats for 'sleep 2':
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        496,860,345 r01b7_at_500b:u 		[100.00%]
</span><br>
<span class="quotelev1">&gt;         78,292,565 r01b7_at_200b:u                                                
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        2.010707488 seconds time elapsed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (the perf events are a bit magical and not supported in an actual perf
</span><br>
<span class="quotelev1">&gt;  release -- but the first one is L3 misses to local dram, the second is
</span><br>
<span class="quotelev1">&gt;  L3 misses to remote dram)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you look at those numbers you can also see that the sum is greater in the
</span><br>
<span class="quotelev1">&gt; second case, this means that we can service L3 misses at a higher rate, which
</span><br>
<span class="quotelev1">&gt; translates into a performance gain.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These numbers also show that while there's a marked improvement, there's still
</span><br>
<span class="quotelev1">&gt; some gain to be had. The current numa balancer is still somewhat fickle.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ~ Peter
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1] - 
</span><br>
<span class="quotelev1">&gt; <a href="http://marc.info/?l=linux-kernel&amp;m=130218515520540">http://marc.info/?l=linux-kernel&amp;m=130218515520540</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       now that we have SD_OVERLAP it should be fairly easy to do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [2] - 
</span><br>
<span class="quotelev1">&gt; <a href="http://markmail.org/message/mdwbcitql5ka4uws">http://markmail.org/message/mdwbcitql5ka4uws</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [3] - 
</span><br>
<span class="quotelev1">&gt; <a href="https://asc.llnl.gov/computing_resources/purple/archive/benchmarks/memory/stream.tar">https://asc.llnl.gov/computing_resources/purple/archive/benchmarks/memory/stream.tar</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; To unsubscribe from this list: send the line &quot;unsubscribe linux-kernel&quot; in
</span><br>
<span class="quotelev1">&gt; the body of a message to 
</span><br>
<span class="quotelev1">&gt; majordomo_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More majordomo info at  
</span><br>
<span class="quotelev1">&gt; <a href="http://vger.kernel.org/majordomo-info.html">http://vger.kernel.org/majordomo-info.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please read the FAQ at  
</span><br>
<span class="quotelev1">&gt; <a href="http://www.tux.org/lkml/">http://www.tux.org/lkml/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10724.php">Alex Margolin: "[OMPI devel] New odls component fails"</a>
<li><strong>Previous message:</strong> <a href="10722.php">Eugene Loh: "Re: [OMPI devel] v1.5 r26132 broken on multiple nodes?"</a>
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
