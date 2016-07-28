<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  4 05:56:27 2011" -->
<!-- isoreceived="20110204105627" -->
<!-- sent="Fri, 4 Feb 2011 11:56:22 +0100" -->
<!-- isosent="20110204105622" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157" -->
<!-- id="20110204105622.GD5539_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1400794867.1763995.1296815815339.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-04 05:56:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1905.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157"</a>
<li><strong>Previous message:</strong> <a href="1903.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2a1r3149)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1905.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157"</a>
<li><strong>Reply:</strong> <a href="1905.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157"</a>
<li><strong>Maybe reply:</strong> <a href="1906.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
bgoglin_at_[hidden], le Fri 04 Feb 2011 11:36:55 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; +  HWLOC_TOPOLOGY_FLAG_RESTRICT_TO_BINDING = (1&lt;&lt;2),
</span><br>
<span class="quotelev1">&gt; + /**&lt; \brief Restrict the discovered topology to only objects included
</span><br>
<span class="quotelev1">&gt; +  * in the current thread CPU binding.
</span><br>
<span class="quotelev1">&gt; +  * \hideinitialize
</span><br>
<span class="quotelev1">&gt; +  *
</span><br>
<span class="quotelev1">&gt; +  * This is similar to loading the topology, running hwloc_get_cpubind
</span><br>
<span class="quotelev1">&gt; +  * and passing the resulting cpuset to hwloc_topology_restrict.
</span><br>
<span class="quotelev1">&gt; +  */
</span><br>
<span class="quotelev1">&gt;  };
</span><br>
<p><p><span class="quotelev1">&gt; +  if (topology-&gt;flags &amp; HWLOC_TOPOLOGY_FLAG_RESTRICT_TO_BINDING) {
</span><br>
<span class="quotelev1">&gt; +    hwloc_cpuset_t cpuset = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev1">&gt; +    int err = hwloc_get_cpubind(topology, cpuset, HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev1">&gt; +    if (!err)
</span><br>
<span class="quotelev1">&gt; +      hwloc_topology_restrict(topology, cpuset);
</span><br>
<span class="quotelev1">&gt; +    hwloc_bitmap_free(cpuset);
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<p>Mmm, I then wonder whether we should really provide a flag, then, if
<br>
it's a matter of calling restrict() afterwards. What would be more
<br>
generic and useful is a topology configuration option which restricts
<br>
detection to a given cpuset: the core filters out objects outside from
<br>
that cpuset, and OS backends can also avoid trying to detect them,
<br>
making detection faster.
<br>
<p>The restrict() operation itself still makes sense.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1905.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157"</a>
<li><strong>Previous message:</strong> <a href="1903.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2a1r3149)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1905.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157"</a>
<li><strong>Reply:</strong> <a href="1905.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157"</a>
<li><strong>Maybe reply:</strong> <a href="1906.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157"</a>
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
