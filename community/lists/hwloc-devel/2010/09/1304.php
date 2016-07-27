<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2257";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 17 03:53:27 2010" -->
<!-- isoreceived="20100917075327" -->
<!-- sent="Fri, 17 Sep 2010 09:53:29 +0200" -->
<!-- isosent="20100917075329" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2257" -->
<!-- id="4C931E79.6010704_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C29BC5C.1080502_at_inria.fr" -->
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
<strong>Date:</strong> 2010-09-17 03:53:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1305.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Previous message:</strong> <a href="1303.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2440)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/06/1110.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2257"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 29/06/2010 11:26, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 29/06/2010 11:15, bgoglin_at_[hidden] a &#233;crit :
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Author: bgoglin
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2010-06-29 05:15:57 EDT (Tue, 29 Jun 2010)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 2257
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2257">https://svn.open-mpi.org/trac/hwloc/changeset/2257</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Add hwloc_get_distances() which returns a matrix of distances
</span><br>
<span class="quotelev2">&gt;&gt; for the given type.
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Some notes about all this:
</span><br>
<span class="quotelev1">&gt; * The matrix that I keep inside the topology is ordered by os_indexes
</span><br>
<span class="quotelev1">&gt; since logical indexes may change later in the discovery (depending on
</span><br>
<span class="quotelev1">&gt; the matrix itself, when we group according to distances)
</span><br>
<span class="quotelev1">&gt; * I am recomputing the logically-ordered matrix on demand, but we could
</span><br>
<span class="quotelev1">&gt; also recompute it once at the end of the discovery
</span><br>
<span class="quotelev1">&gt; * I wonder if the current code works if the NUMA physical indexes are
</span><br>
<span class="quotelev1">&gt; non-contigous
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>These are fixed now, the code looks much better. The main topology only
<br>
contains a logically-ordered matrix that is computed at the end of the
<br>
discovery. Linux keeps its custom nonsparse-physically-ordered matrix in
<br>
its backend-specific params and converts it at the end of the discovery
<br>
once logical indexes are ready.
<br>
<p>Brice
<br>
<p><span class="quotelev1">&gt; * The matrix is manipulated as a mix of unsigned[nbobjs*nbobjs] and
</span><br>
<span class="quotelev1">&gt; unsigned[nbobjs][nbobjs]. I don't know the rules well enough to be sure it's
</span><br>
<span class="quotelev1">&gt; safe :)
</span><br>
<span class="quotelev1">&gt; * I only handle NUMA distances so far. No other type is supported while
</span><br>
<span class="quotelev1">&gt; the grouping code also computes the distance between groups of NUMA
</span><br>
<span class="quotelev1">&gt; nodes (or groups of groups). It's difficult to store matrices for random
</span><br>
<span class="quotelev1">&gt; types of objects since there could be multiple matrices for a single
</span><br>
<span class="quotelev1">&gt; type (different levels of NUMA groups, ...) and the depth of these might
</span><br>
<span class="quotelev1">&gt; vary later in the discovery (if we insert another level of group above
</span><br>
<span class="quotelev1">&gt; the current one, or some misc objects?). A good solution might be to
</span><br>
<span class="quotelev1">&gt; attach matrices to the topology using an identifier such as Type +
</span><br>
<span class="quotelev1">&gt; Type-specific depth (NUMANode, or Group#0, Group#1, L2Cache, ...). Needs
</span><br>
<span class="quotelev1">&gt; some work... Having such a unique level identifier might be good for
</span><br>
<span class="quotelev1">&gt; other reasons.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1305.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Previous message:</strong> <a href="1303.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2440)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/06/1110.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2257"</a>
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
