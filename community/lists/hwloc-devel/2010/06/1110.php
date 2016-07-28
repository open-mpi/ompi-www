<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2257";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 29 05:27:57 2010" -->
<!-- isoreceived="20100629092757" -->
<!-- sent="Tue, 29 Jun 2010 11:26:52 +0200" -->
<!-- isosent="20100629092652" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2257" -->
<!-- id="4C29BC5C.1080502_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201006290915.o5T9FvmP014652_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2257<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-29 05:26:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1111.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2257"</a>
<li><strong>Previous message:</strong> <a href="1109.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2252)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1111.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2257"</a>
<li><strong>Reply:</strong> <a href="1111.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2257"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/09/1304.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2257"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 29/06/2010 11:15, bgoglin_at_[hidden] a &#233;crit :
<br>
<span class="quotelev1">&gt; Author: bgoglin
</span><br>
<span class="quotelev1">&gt; Date: 2010-06-29 05:15:57 EDT (Tue, 29 Jun 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 2257
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2257">https://svn.open-mpi.org/trac/hwloc/changeset/2257</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Add hwloc_get_distances() which returns a matrix of distances
</span><br>
<span class="quotelev1">&gt; for the given type.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Some notes about all this:
<br>
* The matrix that I keep inside the topology is ordered by os_indexes
<br>
since logical indexes may change later in the discovery (depending on
<br>
the matrix itself, when we group according to distances)
<br>
* I am recomputing the logically-ordered matrix on demand, but we could
<br>
also recompute it once at the end of the discovery
<br>
* The matrix is manipulated as a mix of unsigned[nbobjs*nbobjs] and
<br>
unsigned[nbobjs][nbobjs]. I don't the rules well enough to be sure it's
<br>
safe :)
<br>
* I only handle NUMA distances so far. No other type is supported while
<br>
the grouping code also computes the distance between groups of NUMA
<br>
nodes (or groups of groups). It's difficult to store matrices for random
<br>
types of objects since there could be multiple matrices for a single
<br>
type (different levels of NUMA groups, ...) and the depth of these might
<br>
vary later in the discovery (if we insert another level of group above
<br>
the current one, or some misc objects?). A good solution might be to
<br>
attach matrices to the topology using an identifier such as Type +
<br>
Type-specific depth (NUMANode, or Group#0, Group#1, L2Cache, ...). Needs
<br>
some work... Having such a unique level identifier might be good for
<br>
other reasons.
<br>
* I wonder if the current code works if the NUMA physical indexes are
<br>
non-contigous
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1111.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2257"</a>
<li><strong>Previous message:</strong> <a href="1109.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2252)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1111.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2257"</a>
<li><strong>Reply:</strong> <a href="1111.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2257"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/09/1304.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2257"</a>
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
