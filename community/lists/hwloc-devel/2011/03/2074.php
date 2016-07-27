<?
$subject_val = "[hwloc-devel] upcoming releases";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 30 16:13:42 2011" -->
<!-- isoreceived="20110330201342" -->
<!-- sent="Wed, 30 Mar 2011 15:13:36 -0500" -->
<!-- isosent="20110330201336" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] upcoming releases" -->
<!-- id="4D938EF0.1070505_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] upcoming releases<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-30 16:13:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2075.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3345)"</a>
<li><strong>Previous message:</strong> <a href="2073.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2a1r3329)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2077.php">Christopher Samuel: "Re: [hwloc-devel] upcoming releases"</a>
<li><strong>Reply:</strong> <a href="2077.php">Christopher Samuel: "Re: [hwloc-devel] upcoming releases"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/04/2093.php">Brice Goglin: "Re: [hwloc-devel] upcoming releases"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We talk with Jeff today and came to following proposal:
<br>
<p>We're doing to 1.1.2 now (let's flush out many small fixes that are
<br>
pending since early February).
<br>
<p>I am not confident enough to release the PCI stuff now because it didn't
<br>
get much real testing (it still misses a bit of work in the tools and
<br>
doc). So a new plan could be:
<br>
1) branch 1.2 from current trunk and do a first RC now, so that the
<br>
current changes do not wait any longer
<br>
2) merge libpci into trunk right after branching 1.2, so that it gets
<br>
more actual testing (this branch
<br>
3) once the final 1.2 is released, do a first 1.3 RC if nothing went
<br>
wrong in the meantime
<br>
<p>Current trunk already has a very long changelog, but I think it works
<br>
well. And it shouldn't require many doc updates to do during the RC
<br>
cycles. So the final 1.2 should arrive quickly, and we can seriously
<br>
expect a first PCI-enabled RC before summer.
<br>
<p>Comments?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2075.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3345)"</a>
<li><strong>Previous message:</strong> <a href="2073.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2a1r3329)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2077.php">Christopher Samuel: "Re: [hwloc-devel] upcoming releases"</a>
<li><strong>Reply:</strong> <a href="2077.php">Christopher Samuel: "Re: [hwloc-devel] upcoming releases"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/04/2093.php">Brice Goglin: "Re: [hwloc-devel] upcoming releases"</a>
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
