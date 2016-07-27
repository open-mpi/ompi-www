<?
$subject_val = "Re: [hwloc-devel] dynamic cpuset_t?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 11:45:48 2009" -->
<!-- isoreceived="20091007154548" -->
<!-- sent="Wed, 07 Oct 2009 17:44:33 +0200" -->
<!-- isosent="20091007154433" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] dynamic cpuset_t?" -->
<!-- id="4ACCB761.6010002_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20090925132758.GC6973_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] dynamic cpuset_t?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-07 11:44:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0151.php">Fawzi Mohamed: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Previous message:</strong> <a href="0149.php">MPI Team: "[hwloc-devel] Create success (hwloc r0.9.1a1r1101)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/09/0075.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0151.php">Fawzi Mohamed: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Reply:</strong> <a href="0151.php">Fawzi Mohamed: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just pushed a huge commit converting everything to dynamic cpusets.
<br>
<p>The new API is visable at
<br>
&nbsp;&nbsp;&nbsp;
<br>
<a href="https://svn.open-mpi.org/trac/hwloc/browser/trunk/include/hwloc/cpuset.h?rev=1109">https://svn.open-mpi.org/trac/hwloc/browser/trunk/include/hwloc/cpuset.h?rev=1109</a>
<br>
The implementation is pretty much the same than our old inlines, see
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/hwloc/browser/trunk/src/cpuset.c?rev=1109">https://svn.open-mpi.org/trac/hwloc/browser/trunk/src/cpuset.c?rev=1109</a>
<br>
<p>Some examples of conversion to the new API are visible near
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/hwloc/changeset/1109#file26">https://svn.open-mpi.org/trac/hwloc/changeset/1109#file26</a>
<br>
<p>Note that cpuset_alloc() initializes the cpuset to 0. Many old cpusets
<br>
were memset'ed to 0 during the object creation, so I didn't want to
<br>
break this guarantee. If needed, we could have hwloc_cpuset_alloc_zero()
<br>
for this?
<br>
<p>There's still a internal cpuset.h header
<br>
&nbsp;&nbsp;&nbsp;
<br>
<a href="https://svn.open-mpi.org/trac/hwloc/browser/trunk/include/private/cpuset.h?rev=1109">https://svn.open-mpi.org/trac/hwloc/browser/trunk/include/private/cpuset.h?rev=1109</a>
<br>
but only cpuset.c uses it. So if there's no real need for other internal
<br>
files to access the cpuset internals, we could merge cpuset.h into cpuset.c.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0151.php">Fawzi Mohamed: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Previous message:</strong> <a href="0149.php">MPI Team: "[hwloc-devel] Create success (hwloc r0.9.1a1r1101)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/09/0075.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0151.php">Fawzi Mohamed: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Reply:</strong> <a href="0151.php">Fawzi Mohamed: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
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
