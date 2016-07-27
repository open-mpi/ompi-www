<?
$subject_val = "Re: [hwloc-devel] restrict branch";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 14 06:01:45 2011" -->
<!-- isoreceived="20110314100145" -->
<!-- sent="Mon, 14 Mar 2011 11:01:40 +0100" -->
<!-- isosent="20110314100140" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] restrict branch" -->
<!-- id="4D7DE784.1040905_at_inria.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="4D750E48.4040905_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] restrict branch<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-14 06:01:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2056.php">Samuel Thibault: "Re: [hwloc-devel] restrict and PCI branch"</a>
<li><strong>Previous message:</strong> <a href="2054.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2a1r3265)"</a>
<li><strong>In reply to:</strong> <a href="2042.php">Brice Goglin: "[hwloc-devel] restrict branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2029.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 07/03/2011 17:56, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 01/03/2011 11:00, Brice Goglin a &#233;crit :
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Also, in 1.2, we'll have a hwloc_topology_restrict() function which will
</span><br>
<span class="quotelev2">&gt;&gt; let you load the whole machine topology and then restrict it to whatever
</span><br>
<span class="quotelev2">&gt;&gt; part of it (a part is defined by a hwloc_cpuset_t).
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; The restrict may be ready for merging in the near future. The interface
</span><br>
<span class="quotelev1">&gt; looks like this:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>If nobody complains about this, I will likely merge the branch within a
<br>
couple days.
<br>
<p>Then, we may seriously consider doing a 1.2 beta release.
<br>
<p>Brice
<br>
<p><p><span class="quotelev1">&gt; diff --git a/include/hwloc.h b/include/hwloc.h
</span><br>
<span class="quotelev1">&gt; index b4ac277..245a780 100644
</span><br>
<span class="quotelev1">&gt; --- a/include/hwloc.h
</span><br>
<span class="quotelev1">&gt; +++ b/include/hwloc.h
</span><br>
<span class="quotelev1">&gt; @@ -783,6 +783,23 @@ HWLOC_DECLSPEC hwloc_obj_t hwloc_topology_insert_misc_object_by_cpuset(hwloc_top
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  HWLOC_DECLSPEC hwloc_obj_t hwloc_topology_insert_misc_object_by_parent(hwloc_topology_t topology, hwloc_obj_t parent, const char *name);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +/** \brief Flags to be given to hwloc_topology_restrict(). */
</span><br>
<span class="quotelev1">&gt; +enum hwloc_restrict_flags_e {
</span><br>
<span class="quotelev1">&gt; +  HWLOC_RESTRICT_FLAG_ADAPT_DISTANCES = (1&lt;&lt;0)
</span><br>
<span class="quotelev1">&gt; + /**&lt; \brief Adapt distance matrices according to objects being removed during restriction.
</span><br>
<span class="quotelev1">&gt; +  * If this flag is not set, distance matrices are removed.
</span><br>
<span class="quotelev1">&gt; +  */
</span><br>
<span class="quotelev1">&gt; +};
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/** \brief Restrict the topology to the current thread binding.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * Topology \p topology is modified so as to remove all objects that
</span><br>
<span class="quotelev1">&gt; + * are not included (or partially included) in the CPU set \p cpuset.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * \p flags is a OR'ed set of hwloc_restrict_flags_e.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +HWLOC_DECLSPEC int hwloc_topology_restrict(hwloc_topology_t __hwloc_restrict topology, hwloc_const_cpuset_t cpuset, unsigned long flags);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  /** @} */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other examples of restrict flags include:
</span><br>
<span class="quotelev1">&gt; * restricting memory and/or cpus only (we do both right now)
</span><br>
<span class="quotelev1">&gt; * dropping PCI devices or not
</span><br>
<span class="quotelev1">&gt; * dropping misc devices or not
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2056.php">Samuel Thibault: "Re: [hwloc-devel] restrict and PCI branch"</a>
<li><strong>Previous message:</strong> <a href="2054.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2a1r3265)"</a>
<li><strong>In reply to:</strong> <a href="2042.php">Brice Goglin: "[hwloc-devel] restrict branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2029.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
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
