<?
$subject_val = "Re: [hwloc-users] Thread binding problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  6 05:03:01 2012" -->
<!-- isoreceived="20120906090301" -->
<!-- sent="Thu, 06 Sep 2012 11:02:54 +0200" -->
<!-- isosent="20120906090254" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread binding problem" -->
<!-- id="504866BE.5030901_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120906084457.GB3555_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Thread binding problem<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-06 05:02:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0701.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="0699.php">Samuel Thibault: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0698.php">Samuel Thibault: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0701.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0701.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 06/09/2012 10:44, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Gabriele Fatigati, le Thu 06 Sep 2012 10:12:38 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; mbind hwloc_linux_set_area_membind()  fails:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Error from HWLOC mbind: Cannot allocate memory 
</span><br>
<span class="quotelev1">&gt; Ok. mbind is not really supposed to allocate much memory, but it still
</span><br>
<span class="quotelev1">&gt; does allocate some, to record the policy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; //        hwloc_obj_t obj = hwloc_get_obj_by_type(topology, HWLOC_OBJ_NODE, tid);
</span><br>
<span class="quotelev2">&gt;&gt;         hwloc_obj_t obj = hwloc_get_obj_by_type(topology, HWLOC_OBJ_PU, tid);
</span><br>
<span class="quotelev2">&gt;&gt;         hwloc_cpuset_t cpuset = hwloc_bitmap_dup(obj-&gt;cpuset);
</span><br>
<span class="quotelev2">&gt;&gt;         hwloc_bitmap_singlify(cpuset);
</span><br>
<span class="quotelev2">&gt;&gt;         hwloc_set_cpubind(topology, cpuset, HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;         for( i = chunk*tid; i &lt; len; i+=PAGE_SIZE) {
</span><br>
<span class="quotelev2">&gt;&gt; //           res = hwloc_set_area_membind_nodeset(topology, &amp;array[i], PAGE_SIZE, obj-&gt;nodeset, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_THREAD);
</span><br>
<span class="quotelev2">&gt;&gt;              res = hwloc_set_area_membind(topology, &amp;array[i], PAGE_SIZE, cpuset, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_THREAD);
</span><br>
<span class="quotelev1">&gt; and I'm afraid that calling set_area_membind for each page might be too
</span><br>
<span class="quotelev1">&gt; dense: the kernel is probably allocating a memory policy record for each
</span><br>
<span class="quotelev1">&gt; page, not being able to merge adjacent equal policies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It's supposed to merge VMA with same policies (from what I understand in
<br>
the code), but I don't know if that actually works.
<br>
Maybe Gabriele found a kernel bug :)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0701.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="0699.php">Samuel Thibault: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0698.php">Samuel Thibault: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0701.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0701.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
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
