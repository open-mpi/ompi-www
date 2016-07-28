<?
$subject_val = "Re: [hwloc-devel] structure assumptions, duplication";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 07:24:22 2009" -->
<!-- isoreceived="20090930112422" -->
<!-- sent="Wed, 30 Sep 2009 13:24:17 +0200" -->
<!-- isosent="20090930112417" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] structure assumptions, duplication" -->
<!-- id="20090930112417.GA29318_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4EA63EC8-C1F9-406E-98AD-181B71304943_at_gmx.ch" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] structure assumptions, duplication<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-30 07:24:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0124.php">MPI Team: "[hwloc-devel] Create success (hwloc r0.9.1a1r1050)"</a>
<li><strong>Previous message:</strong> <a href="0122.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>In reply to:</strong> <a href="0120.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/10/0125.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/10/0125.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fawzi Mohamed, le Wed 30 Sep 2009 10:10:47 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; If you look at the example described in the document that I had linked
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://opensolaris.org/os/community/performance/mpo_overview.pdf">http://opensolaris.org/os/community/performance/mpo_overview.pdf</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; you see the that for a ring topology some level (that you always get adding the
</span><br>
<p>Ah, right.
<br>
<p>Yes, we could also provide this as an additional structure.
<br>
<p><span class="quotelev1">&gt; For a the ring topology a-b-c-d-a is difficult to find a good partition... and
</span><br>
<span class="quotelev1">&gt; having both partition and non partition views (one used for resource allocation
</span><br>
<span class="quotelev1">&gt; /distribution, the other for resource finding/stealing), is quite clean imho.
</span><br>
<p>Yes, heuristics would partition it into ((a,b),(c,d)), while
<br>
non-partition could usefully provide all the related triplets. We can
<br>
provide both.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0124.php">MPI Team: "[hwloc-devel] Create success (hwloc r0.9.1a1r1050)"</a>
<li><strong>Previous message:</strong> <a href="0122.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>In reply to:</strong> <a href="0120.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/10/0125.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/10/0125.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
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
