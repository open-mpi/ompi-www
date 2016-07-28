<?
$subject_val = "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 19 18:08:48 2012" -->
<!-- isoreceived="20121119230848" -->
<!-- sent="Mon, 19 Nov 2012 23:36:09 +0100" -->
<!-- isosent="20121119223609" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Windows api threading functions equivalent to hwloc?" -->
<!-- id="20121119223609.GC8916_at_type.youpi.perso.aquilenet.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="50AA91CB.50500_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Windows api threading functions equivalent to hwloc?<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-19 17:36:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0772.php">Andrew Somorjai: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Previous message:</strong> <a href="0770.php">Brice Goglin: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>In reply to:</strong> <a href="0770.php">Brice Goglin: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0772.php">Andrew Somorjai: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Mon 19 Nov 2012 21:09:33 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; hwloc_bitmap_t bitmap = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_set_only(bitmap, i);
</span><br>
<span class="quotelev1">&gt; hwloc_set_thread_cpubind(topology, m_threads[i], bitmap, 0);
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_free(bitmap);
</span><br>
<p>Or perhaps 
<br>
<p>hwloc_set_thread_cpubind(topology, m_threads[i],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_get_obj_by_type(topology, HWLOC_OBJ_CORE, i),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0);
<br>
<p>if you want to get core number in logical order rather than physical
<br>
order (or use HWLOC_OBJ_PU if that's the hardware threads you want to
<br>
get).
<br>
<p><span class="quotelev1">&gt; To get the number of processors with hwloc, use something like:
</span><br>
<span class="quotelev1">&gt;   hwloc_get_nbobjs_by_type(topology, HWLOC_OBJ_CORE);
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt;   hwloc_get_nbobjs_by_type(topology, HWLOC_OBJ_PU);
</span><br>
<span class="quotelev1">&gt; Then it depends if you want real cores (the former or hardware threads (the
</span><br>
<span class="quotelev1">&gt; latter).
</span><br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0772.php">Andrew Somorjai: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>Previous message:</strong> <a href="0770.php">Brice Goglin: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<li><strong>In reply to:</strong> <a href="0770.php">Brice Goglin: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0772.php">Andrew Somorjai: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
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
