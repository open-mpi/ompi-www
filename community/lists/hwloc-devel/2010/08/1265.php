<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 19 09:06:14 2010" -->
<!-- isoreceived="20100819130614" -->
<!-- sent="Thu, 19 Aug 2010 15:06:08 +0200" -->
<!-- isosent="20100819130608" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339" -->
<!-- id="20100819130608.GR5327_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C41871A.9050202_at_inria.fr" -->
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
<strong>Date:</strong> 2010-08-19 09:06:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1266.php">Samuel Thibault: "[hwloc-devel] hwloc membind interface? [Was: svn:hwloc r2339]"</a>
<li><strong>Previous message:</strong> <a href="1264.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2406)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/07/1186.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Sat 17 Jul 2010 12:34:02 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 17/07/2010 11:47, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +HWLOC_DECLSPEC int hwloc_get_membind(hwloc_topology_t topology, hwloc_cpuset_t set, int * policy);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt; Mmm, I wouldn't have thought of providing the places by giving a cpuset.
</span><br>
<span class="quotelev2">&gt; &gt; Why not using nodesets?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If we really start using nodesets intensively, we shouldn't use
</span><br>
<span class="quotelev1">&gt; hwloc_cpuset_t for their type, it's confusing. Maybe #define
</span><br>
<span class="quotelev1">&gt; hwloc_nodeset_t hwloc_cpuset_t and add a big comment saying that
</span><br>
<span class="quotelev1">&gt; nodesets may be manipulated with cpuset functions?
</span><br>
<p>Actually, I'm realizing that I should have realized before with the
<br>
radset interface of various OSes that it may be better to just have a
<br>
hwloc_set_t type, and hwloc_cpuset_t/hwloc_nodeset_t types typedefed to
<br>
it, and tell people to use hwloc_set_* functions with both (but keep
<br>
#defines for hwloc_cpuset_* API compatibility for some time).
<br>
<p><span class="quotelev1">&gt; Then, we'd need some conversion routines such as
</span><br>
<span class="quotelev1">&gt; hwloc_cpuset_from/to_nodeset(topology, cpuset, nodeset).
</span><br>
<p>This is done.
<br>
<p><span class="quotelev1">&gt; And a big comment saying that we don't duplicate all helpers from
</span><br>
<span class="quotelev1">&gt; nodesets and that people should convert to cpusets before using
</span><br>
<span class="quotelev1">&gt; helpers.
</span><br>
<p>Sure.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1266.php">Samuel Thibault: "[hwloc-devel] hwloc membind interface? [Was: svn:hwloc r2339]"</a>
<li><strong>Previous message:</strong> <a href="1264.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2406)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/07/1186.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339"</a>
<!-- nextthread="start" -->
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
