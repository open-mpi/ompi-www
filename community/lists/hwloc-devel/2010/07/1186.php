<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 17 06:36:30 2010" -->
<!-- isoreceived="20100717103630" -->
<!-- sent="Sat, 17 Jul 2010 12:34:02 +0200" -->
<!-- isosent="20100717103402" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339" -->
<!-- id="4C41871A.9050202_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100717094734.GI23103_at_const" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-17 06:34:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1187.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2336"</a>
<li><strong>Previous message:</strong> <a href="1185.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339"</a>
<li><strong>In reply to:</strong> <a href="1185.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/08/1265.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/08/1265.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 17/07/2010 11:47, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; bgoglin_at_[hidden], le Sat 17 Jul 2010 05:05:46 -0400, a &#233;crit :
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; +/** \brief Bind current process memory on memory nodes near the given cpuset \p set
</span><br>
<span class="quotelev2">&gt;&gt; + *
</span><br>
<span class="quotelev2">&gt;&gt; + * \return ENOSYS if the action is not supported
</span><br>
<span class="quotelev2">&gt;&gt; + * \return EXDEV if the binding cannot be enforced
</span><br>
<span class="quotelev2">&gt;&gt; + */
</span><br>
<span class="quotelev2">&gt;&gt; +HWLOC_DECLSPEC int hwloc_set_membind(hwloc_topology_t topology, hwloc_const_cpuset_t set, int policy);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +/** \brief Get current process memory binding
</span><br>
<span class="quotelev2">&gt;&gt; + */
</span><br>
<span class="quotelev2">&gt;&gt; +HWLOC_DECLSPEC int hwloc_get_membind(hwloc_topology_t topology, hwloc_cpuset_t set, int * policy);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Mmm, I wouldn't have thought of providing the places by giving a cpuset.
</span><br>
<span class="quotelev1">&gt; Why not using nodesets?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>If we really start using nodesets intensively, we shouldn't use
<br>
hwloc_cpuset_t for their type, it's confusing. Maybe #define
<br>
hwloc_nodeset_t hwloc_cpuset_t and add a big comment saying that
<br>
nodesets may be manipulated with cpuset functions? Not very satisfying
<br>
but better than duplicating the whole API for nodesets? Or replace
<br>
hwloc_cpuset_t with hwloc_set_t everywhere and add many #define in
<br>
hwloc/cpuset.h for backward API compatibility?
<br>
<p>Then, we'd need some conversion routines such as
<br>
hwloc_cpuset_from/to_nodeset(topology, cpuset, nodeset). And a big
<br>
comment saying that we don't duplicate all helpers from nodesets and
<br>
that people should convert to cpusets before using helpers.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1187.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2336"</a>
<li><strong>Previous message:</strong> <a href="1185.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339"</a>
<li><strong>In reply to:</strong> <a href="1185.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/08/1265.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/08/1265.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339"</a>
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
