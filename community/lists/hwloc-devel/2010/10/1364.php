<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2553";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  6 03:03:38 2010" -->
<!-- isoreceived="20101006070338" -->
<!-- sent="Wed, 06 Oct 2010 09:03:33 +0200" -->
<!-- isosent="20101006070333" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2553" -->
<!-- id="4CAC1F45.7050205_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CAAE0B8.1020504_at_inria.fr" -->
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
<strong>Date:</strong> 2010-10-06 03:03:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1365.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2559)"</a>
<li><strong>Previous message:</strong> <a href="1363.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2555)"</a>
<li><strong>In reply to:</strong> <a href="1362.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2553"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 05/10/2010 10:24, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Thinking more about it, I don't know if it's a good idea. The
</span><br>
<span class="quotelev1">&gt; alternatives for the value of a nodeset containing the whole memory when
</span><br>
<span class="quotelev1">&gt; there are no NUMA nodes are:
</span><br>
<span class="quotelev1">&gt; 1) full nodeset (current behavior). The behavior is thus different in
</span><br>
<span class="quotelev1">&gt; non-NUMA and NUMA cases. It makes make check a bit more tricky, but this
</span><br>
<span class="quotelev1">&gt; may not matter in real applications unless they really play a lot with
</span><br>
<span class="quotelev1">&gt; nodesets (compare them, ...).
</span><br>
<span class="quotelev1">&gt; 2) Only mark first bit of the nodeset. That's what libnuma does.
</span><br>
<span class="quotelev1">&gt; Convenient in some cases, maybe not in others.
</span><br>
<span class="quotelev1">&gt; 3) Mark nothing since there are actually no NUMA nodes in the machine.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>4) Keep the nodeset pointer NULL. That's what we use for obj-&gt;nodeset
<br>
and friends, and I think that's actually the best semantics.
<br>
<p>I think we should change the cpuset/nodeset conversion routines to
<br>
follow this behavior (any cpuset is converted into a NULL nodeset when
<br>
there are no NUMA node). Then we'd add an inline helper that handles the
<br>
non-NUMA case (restore the current cpuset/nodeset conversion routine
<br>
behavior by returning a full nodeset if the input cpuset isn't empty).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1365.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2559)"</a>
<li><strong>Previous message:</strong> <a href="1363.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2555)"</a>
<li><strong>In reply to:</strong> <a href="1362.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2553"</a>
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
