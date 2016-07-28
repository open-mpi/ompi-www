<?
$subject_val = "Re: [hwloc-users] Thread binding problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  6 04:45:02 2012" -->
<!-- isoreceived="20120906084502" -->
<!-- sent="Thu, 6 Sep 2012 10:44:57 +0200" -->
<!-- isosent="20120906084457" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread binding problem" -->
<!-- id="20120906084457.GB3555_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAJNPZUX9ATS29DoW=x2bHd=2DTEHQNw8jZpGZp+FnPpG3NcB+g_at_mail.gmail.com" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-06 04:44:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0699.php">Samuel Thibault: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="0697.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0697.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0699.php">Samuel Thibault: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0699.php">Samuel Thibault: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0700.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gabriele Fatigati, le Thu 06 Sep 2012 10:12:38 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; mbind&#160;hwloc_linux_set_area_membind()&#160;&#160;fails:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error from HWLOC mbind: Cannot allocate memory&#160;
</span><br>
<p>Ok. mbind is not really supposed to allocate much memory, but it still
<br>
does allocate some, to record the policy
<br>
<p><span class="quotelev1">&gt; //        hwloc_obj_t obj = hwloc_get_obj_by_type(topology, HWLOC_OBJ_NODE, tid);
</span><br>
<span class="quotelev1">&gt;         hwloc_obj_t obj = hwloc_get_obj_by_type(topology, HWLOC_OBJ_PU, tid);
</span><br>
<span class="quotelev1">&gt;         hwloc_cpuset_t cpuset = hwloc_bitmap_dup(obj-&gt;cpuset);
</span><br>
<span class="quotelev1">&gt;         hwloc_bitmap_singlify(cpuset);
</span><br>
<span class="quotelev1">&gt;         hwloc_set_cpubind(topology, cpuset, HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;         for( i = chunk*tid; i &lt; len; i+=PAGE_SIZE) {
</span><br>
<span class="quotelev1">&gt; //           res = hwloc_set_area_membind_nodeset(topology, &amp;array[i], PAGE_SIZE, obj-&gt;nodeset, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_THREAD);
</span><br>
<span class="quotelev1">&gt;              res = hwloc_set_area_membind(topology, &amp;array[i], PAGE_SIZE, cpuset, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_THREAD);
</span><br>
<p>and I'm afraid that calling set_area_membind for each page might be too
<br>
dense: the kernel is probably allocating a memory policy record for each
<br>
page, not being able to merge adjacent equal policies.
<br>
<p>You could check in /proc/meminfo which number goes high, it's probably
<br>
in-kernel data, such as the Slab.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0699.php">Samuel Thibault: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="0697.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0697.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0699.php">Samuel Thibault: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0699.php">Samuel Thibault: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0700.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
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
