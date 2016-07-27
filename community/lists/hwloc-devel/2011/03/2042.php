<?
$subject_val = "[hwloc-devel] restrict branch";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  7 11:56:42 2011" -->
<!-- isoreceived="20110307165642" -->
<!-- sent="Mon, 07 Mar 2011 17:56:40 +0100" -->
<!-- isosent="20110307165640" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] restrict branch" -->
<!-- id="4D750E48.4040905_at_inria.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="4D6CC3A2.6050206_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] restrict branch<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-07 11:56:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2043.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3250)"</a>
<li><strong>Previous message:</strong> <a href="2041.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3246"</a>
<li><strong>In reply to:</strong> <a href="2027.php">Brice Goglin: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2055.php">Brice Goglin: "Re: [hwloc-devel] restrict branch"</a>
<li><strong>Reply:</strong> <a href="2055.php">Brice Goglin: "Re: [hwloc-devel] restrict branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 01/03/2011 11:00, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Also, in 1.2, we'll have a hwloc_topology_restrict() function which will
</span><br>
<span class="quotelev1">&gt; let you load the whole machine topology and then restrict it to whatever
</span><br>
<span class="quotelev1">&gt; part of it (a part is defined by a hwloc_cpuset_t).
</span><br>
<p>The restrict may be ready for merging in the near future. The interface
<br>
looks like this:
<br>
<p>diff --git a/include/hwloc.h b/include/hwloc.h
<br>
index b4ac277..245a780 100644
<br>
--- a/include/hwloc.h
<br>
+++ b/include/hwloc.h
<br>
@@ -783,6 +783,23 @@ HWLOC_DECLSPEC hwloc_obj_t hwloc_topology_insert_misc_object_by_cpuset(hwloc_top
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;HWLOC_DECLSPEC hwloc_obj_t hwloc_topology_insert_misc_object_by_parent(hwloc_topology_t topology, hwloc_obj_t parent, const char *name);
<br>
&nbsp;
<br>
+/** \brief Flags to be given to hwloc_topology_restrict(). */
<br>
+enum hwloc_restrict_flags_e {
<br>
+  HWLOC_RESTRICT_FLAG_ADAPT_DISTANCES = (1&lt;&lt;0)
<br>
+ /**&lt; \brief Adapt distance matrices according to objects being removed during restriction.
<br>
+  * If this flag is not set, distance matrices are removed.
<br>
+  */
<br>
+};
<br>
+
<br>
+/** \brief Restrict the topology to the current thread binding.
<br>
+ *
<br>
+ * Topology \p topology is modified so as to remove all objects that
<br>
+ * are not included (or partially included) in the CPU set \p cpuset.
<br>
+ *
<br>
+ * \p flags is a OR'ed set of hwloc_restrict_flags_e.
<br>
+ */
<br>
+HWLOC_DECLSPEC int hwloc_topology_restrict(hwloc_topology_t __hwloc_restrict topology, hwloc_const_cpuset_t cpuset, unsigned long flags);
<br>
+
<br>
&nbsp;/** @} */
<br>
<p><p>Other examples of restrict flags include:
<br>
* restricting memory and/or cpus only (we do both right now)
<br>
* dropping PCI devices or not
<br>
* dropping misc devices or not
<br>
<p><span class="quotelev1">&gt;  We'll need to make
</span><br>
<span class="quotelev1">&gt; sure that you'll have everything you need to get your cpuset's
</span><br>
<span class="quotelev1">&gt; hwloc_cpuset_t.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>For the record, Bernd may use hwloc_topology_restrict() to load the
<br>
entire machine topology from XML and restrict it to the Linux cpuset
<br>
that was allocated to the current process.
<br>
<p>Ideally, any process that runs in the Linux cpuset could:
<br>
* load the entire topology from XML (with HWLOC_THISSYSTEM=1 so that
<br>
binding still works)
<br>
* get the current process binding (should be the entire Linux cpuset
<br>
unless the process was bound to something else)
<br>
* pass it to hwloc_topology_restrict()
<br>
* export the resulting topology to XML if you want to pass the topology
<br>
to other processes
<br>
(I need to think about adding an option to lstopo to do something like this)
<br>
<p>If the process (for instance a MPI job) is bound to a single process
<br>
within the cpuset, the above would restrict the topology to a single
<br>
CPU. So my feeling is that the batch scheduler should do the above
<br>
manually, right after creating the Linux cpuset, and before the actual
<br>
programs are launched (and possibly bounded to some processors).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2043.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3250)"</a>
<li><strong>Previous message:</strong> <a href="2041.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3246"</a>
<li><strong>In reply to:</strong> <a href="2027.php">Brice Goglin: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2055.php">Brice Goglin: "Re: [hwloc-devel] restrict branch"</a>
<li><strong>Reply:</strong> <a href="2055.php">Brice Goglin: "Re: [hwloc-devel] restrict branch"</a>
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
