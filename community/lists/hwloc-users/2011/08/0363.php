<?
$subject_val = "Re: [hwloc-users] Thread core affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 05:55:43 2011" -->
<!-- isoreceived="20110804095543" -->
<!-- sent="Thu, 4 Aug 2011 11:55:37 +0200" -->
<!-- isosent="20110804095537" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread core affinity" -->
<!-- id="20110804095537.GE4985_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1242069843.1912825.1312194764881.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Thread core affinity<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-04 05:55:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0364.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0362.php">Samuel Thibault: "Re: [hwloc-users] Return value hwloc functions"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0334.php">Gabriele Fatigati: "[hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0364.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Reply:</strong> <a href="0364.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Gabriele Fatigati, le Mon 01 Aug 2011 12:32:44 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; So, are not physically near. I aspect that with Hyperthreading, and 2 hardware
</span><br>
<span class="quotelev1">&gt; threads each core, PU P#0 and PU P#1 are on the same core.
</span><br>
<p>Since these are P#0 and 1, they may not be indeed (physical indexes).
<br>
That's the whole problem of the indexes provided by operating systems.
<br>
<p>Fortunately,
<br>
<p><span class="quotelev1">&gt; If is it not true,
</span><br>
<span class="quotelev1">&gt; using in a OMP PARALLEL region with 2 software threads:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ pragma omp paralle num_threads(2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tid= omp_get_thread_num();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc_obj_t core = hwloc_get_obj_by_type(topology, HWLOC_OBJ_PU, tid);
</span><br>
<span class="quotelev1">&gt; hwloc_cpuset_t set = hwloc_bitmap_dup(core-&gt;cpuset);
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_singlify(set);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind(topology, set, &#160;HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i would bind thread 0 on PU P#0 and thread 1 on PU P#1, supposing are
</span><br>
<span class="quotelev1">&gt; physically near.
</span><br>
<p>No, because hwloc functions do not use physical, but logical indexes,
<br>
which it computes according to the topology. Use lstopo --top to check
<br>
the actual binding being used.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0364.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0362.php">Samuel Thibault: "Re: [hwloc-users] Return value hwloc functions"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0334.php">Gabriele Fatigati: "[hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0364.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Reply:</strong> <a href="0364.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
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
