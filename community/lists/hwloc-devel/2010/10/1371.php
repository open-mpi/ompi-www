<?
$subject_val = "Re: [hwloc-devel] roadmap";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 19 14:06:26 2010" -->
<!-- isoreceived="20101019180626" -->
<!-- sent="Tue, 19 Oct 2010 20:06:21 +0200" -->
<!-- isosent="20101019180621" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] roadmap" -->
<!-- id="4CBDDE1D.3090700_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100922145014.GD23167_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] roadmap<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-19 14:06:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1372.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2608)"</a>
<li><strong>Previous message:</strong> <a href="1370.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2580)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/09/1339.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/09/1340.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's been 3 weeks since we discussed the membind interface. How far are
<br>
we from an acceptable API? Is there anything missing apart from
<br>
documentation updates? Should I revert the cpumembind stuff?
<br>
<p>I'd like some feedback about the distance API too. The internal
<br>
implementation isn't perfect yet, but we need to know what if the API is
<br>
ok. I know some people want this so please have a look at:
<br>
&nbsp;
<br>
<a href="http://svn.open-mpi.org/trac/hwloc/browser/branches/distances/include/hwloc.h#L363">http://svn.open-mpi.org/trac/hwloc/browser/branches/distances/include/hwloc.h#L363</a>
<br>
and some helpers at:
<br>
&nbsp;
<br>
<a href="http://svn.open-mpi.org/trac/hwloc/browser/branches/distances/include/hwloc/helper.h#L629">http://svn.open-mpi.org/trac/hwloc/browser/branches/distances/include/hwloc/helper.h#L629</a>
<br>
Usually the topology root object will contain a matrix of distances
<br>
between all NUMA nodes, but the interface also support distances between
<br>
only children of a non-root object. Right now, we only have latencies in
<br>
these distance structures, but we might add distances in terms of &quot;how
<br>
many links/routers between us&quot; in the future.
<br>
<p>We need to start doing 1.1rc very soon, let's settle the 1.1 API.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1372.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2608)"</a>
<li><strong>Previous message:</strong> <a href="1370.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2580)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/09/1339.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/09/1340.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
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
