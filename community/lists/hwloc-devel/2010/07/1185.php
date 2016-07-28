<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 17 05:47:41 2010" -->
<!-- isoreceived="20100717094741" -->
<!-- sent="Sat, 17 Jul 2010 11:47:34 +0200" -->
<!-- isosent="20100717094734" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339" -->
<!-- id="20100717094734.GI23103_at_const" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201007170905.o6H95kla027710_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-17 05:47:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1186.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339"</a>
<li><strong>Previous message:</strong> <a href="1184.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2336"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1186.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339"</a>
<li><strong>Reply:</strong> <a href="1186.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
bgoglin_at_[hidden], le Sat 17 Jul 2010 05:05:46 -0400, a &#233;crit :
<br>
<span class="quotelev1">&gt; +/** \brief Bind current process memory on memory nodes near the given cpuset \p set
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * \return ENOSYS if the action is not supported
</span><br>
<span class="quotelev1">&gt; + * \return EXDEV if the binding cannot be enforced
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +HWLOC_DECLSPEC int hwloc_set_membind(hwloc_topology_t topology, hwloc_const_cpuset_t set, int policy);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/** \brief Get current process memory binding
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +HWLOC_DECLSPEC int hwloc_get_membind(hwloc_topology_t topology, hwloc_cpuset_t set, int * policy);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<p>Mmm, I wouldn't have thought of providing the places by giving a cpuset.
<br>
Why not using nodesets?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1186.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339"</a>
<li><strong>Previous message:</strong> <a href="1184.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2336"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1186.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339"</a>
<li><strong>Reply:</strong> <a href="1186.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339"</a>
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
