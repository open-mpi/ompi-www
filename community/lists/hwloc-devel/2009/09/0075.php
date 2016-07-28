<?
$subject_val = "Re: [hwloc-devel] dynamic cpuset_t?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 25 09:28:03 2009" -->
<!-- isoreceived="20090925132803" -->
<!-- sent="Fri, 25 Sep 2009 15:27:58 +0200" -->
<!-- isosent="20090925132758" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] dynamic cpuset_t?" -->
<!-- id="20090925132758.GC6973_at_const.bordeaux.inria.fr" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20090923215130.GE6376_at_const.famille.thibault.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-25 09:27:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0076.php">Jeff Squyres: "[hwloc-devel] Fwd: [hwloc-svn] svn:hwloc r1000"</a>
<li><strong>Previous message:</strong> <a href="0074.php">Brice Goglin: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>In reply to:</strong> <a href="0073.php">Samuel Thibault: "[hwloc-devel] dynamic cpuset_t?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0082.php">Jeff Squyres: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Reply:</strong> <a href="0082.php">Jeff Squyres: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/10/0150.php">Brice Goglin: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Just to give my personal opinion: having another ABI shouldn't hurt
<br>
if we put the cpuset size in the soname for instance.  In comparison,
<br>
having to use functions that allocate/free cpusets like I've done for
<br>
the AIX and OSF is a bit tedious (those don't have the choice, they have
<br>
to preserve a stable ABI).
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0076.php">Jeff Squyres: "[hwloc-devel] Fwd: [hwloc-svn] svn:hwloc r1000"</a>
<li><strong>Previous message:</strong> <a href="0074.php">Brice Goglin: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>In reply to:</strong> <a href="0073.php">Samuel Thibault: "[hwloc-devel] dynamic cpuset_t?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0082.php">Jeff Squyres: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Reply:</strong> <a href="0082.php">Jeff Squyres: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/10/0150.php">Brice Goglin: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
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
