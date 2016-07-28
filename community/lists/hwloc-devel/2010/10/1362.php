<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2553";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  5 04:24:29 2010" -->
<!-- isoreceived="20101005082429" -->
<!-- sent="Tue, 05 Oct 2010 10:24:24 +0200" -->
<!-- isosent="20101005082424" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2553" -->
<!-- id="4CAAE0B8.1020504_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201010050803.o95836FM014447_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2553<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-05 04:24:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1363.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2555)"</a>
<li><strong>Previous message:</strong> <a href="1361.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2549)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1364.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2553"</a>
<li><strong>Reply:</strong> <a href="1364.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2553"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thinking more about it, I don't know if it's a good idea. The
<br>
alternatives for the value of a nodeset containing the whole memory when
<br>
there are no NUMA nodes are:
<br>
1) full nodeset (current behavior). The behavior is thus different in
<br>
non-NUMA and NUMA cases. It makes make check a bit more tricky, but this
<br>
may not matter in real applications unless they really play a lot with
<br>
nodesets (compare them, ...).
<br>
2) Only mark first bit of the nodeset. That's what libnuma does.
<br>
Convenient in some cases, maybe not in others.
<br>
3) Mark nothing since there are actually no NUMA nodes in the machine.
<br>
<p>The main difference between 1/2 and 3 is that the latter is really a set
<br>
of existing nodes, while the formers are a set of physical nodes OR the
<br>
whole memory if the machine isn't NUMA.
<br>
<p>Opinions?
<br>
<p>Brice
<br>
<p><p><p><p>Le 05/10/2010 10:03, bgoglin_at_[hidden] a &#233;crit :
<br>
<span class="quotelev1">&gt; Author: bgoglin
</span><br>
<span class="quotelev1">&gt; Date: 2010-10-05 04:03:06 EDT (Tue, 05 Oct 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 2553
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2553">https://svn.open-mpi.org/trac/hwloc/changeset/2553</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Specify in the API that we use a full nodeset when manipulating the whole memory of a machine without any NUMA node
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/include/hwloc.h |     4 ++++                                    
</span><br>
<span class="quotelev1">&gt;    1 files changed, 4 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/include/hwloc.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/include/hwloc.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/include/hwloc.h	2010-10-05 04:03:06 EDT (Tue, 05 Oct 2010)
</span><br>
<span class="quotelev1">&gt; @@ -81,6 +81,10 @@
</span><br>
<span class="quotelev1">&gt;  /** \brief A node set is a bitmap whose bits are set according to NUMA memory node physical OS indexes.
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * It may be consulted and modified with the bitmap API as any ::hwloc_bitmap_t (see hwloc/bitmap.h).
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * If there are no NUMA nodes in the system (when the whole memory is considered
</span><br>
<span class="quotelev1">&gt; + * as a single memory bank), the nodeset may be either empty (no memory selected)
</span><br>
<span class="quotelev1">&gt; + * or full (whole memory selected).
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  typedef hwloc_bitmap_t hwloc_nodeset_t;
</span><br>
<span class="quotelev1">&gt;  /** \brief A non-modifiable ::hwloc_nodeset_t.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1363.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2555)"</a>
<li><strong>Previous message:</strong> <a href="1361.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2549)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1364.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2553"</a>
<li><strong>Reply:</strong> <a href="1364.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2553"</a>
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
