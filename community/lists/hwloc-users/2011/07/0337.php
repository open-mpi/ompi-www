<?
$subject_val = "Re: [hwloc-users] Thread core affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 29 07:27:16 2011" -->
<!-- isoreceived="20110729112716" -->
<!-- sent="Fri, 29 Jul 2011 13:27:10 +0200" -->
<!-- isosent="20110729112710" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread core affinity" -->
<!-- id="20110729112710.GM3091_at_const" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="617736238.1896876.1311938657802.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2011-07-29 07:27:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0338.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0336.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Maybe in reply to:</strong> <a href="0334.php">Gabriele Fatigati: "[hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0338.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Reply:</strong> <a href="0338.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gabriele Fatigati, le Fri 29 Jul 2011 13:24:17 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; yhanks for yout quick reply!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But i have a litte doubt. in a non SMT machine, Is it better use this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc_obj_t core = hwloc_get_obj_by_type(topology, HWLOC_OBJ_CORE, tid);
</span><br>
<span class="quotelev1">&gt; hwloc_cpuset_t set = hwloc_bitmap_dup(core-&gt;cpuset);
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_singlify(set);
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind(topology, set, &#160;HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; or:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc_obj_t core = hwloc_get_obj_by_type(topology,&#160;HWLOC_OBJ_PU, tid);
</span><br>
<span class="quotelev1">&gt; hwloc_cpuset_t set = hwloc_bitmap_dup(core-&gt;cpuset);
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_singlify(set);
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind(topology, set, &#160;HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; because work in the same way( i suppose).
</span><br>
<p>They'll both work about the same way on SMT too, since in the end it'll
<br>
pick up only one thread. Whether you want to assign threads to cores or
<br>
threads then depends on your application: do you want to let its threads
<br>
share a core or not.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0338.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0336.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Maybe in reply to:</strong> <a href="0334.php">Gabriele Fatigati: "[hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0338.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Reply:</strong> <a href="0338.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
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
