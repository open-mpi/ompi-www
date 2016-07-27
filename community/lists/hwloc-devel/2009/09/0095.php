<?
$subject_val = "Re: [hwloc-devel] dynamic cpuset_t?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 13:13:35 2009" -->
<!-- isoreceived="20090928171335" -->
<!-- sent="Mon, 28 Sep 2009 19:13:30 +0200" -->
<!-- isosent="20090928171330" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] dynamic cpuset_t?" -->
<!-- id="20090928171330.GO14041_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="8B40E60E-69C6-4611-A7B7-1A93194AB442_at_cisco.com" -->
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
<strong>Date:</strong> 2009-09-28 13:13:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0096.php">MPI Team: "[hwloc-devel] Create success (hwloc r0.9.1a1r1016)"</a>
<li><strong>Previous message:</strong> <a href="0094.php">Fawzi Mohamed: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>In reply to:</strong> <a href="0082.php">Jeff Squyres: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/10/0150.php">Brice Goglin: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Fri 25 Sep 2009 16:02:15 -0400, a &#233;crit :
<br>
<span class="quotelev1">&gt; If we anticipate changing the fixed-size items now, how about adding  
</span><br>
<span class="quotelev1">&gt; some kind of version control in the type name now?  Or -- more  
</span><br>
<span class="quotelev1">&gt; specifically -- what are the exact ABI goals?  I.e., if we change the  
</span><br>
<span class="quotelev1">&gt; size of the type, will we just require a recompile?  Or will we want  
</span><br>
<span class="quotelev1">&gt; to support old binaries and new binaries simultaneously?
</span><br>
<p>I'd tend to just require a recompile. With different sonames, various
<br>
versions of the library can be kept installed at the same time. By
<br>
looking at /usr/lib/*.so on my Debian box, it seems not so rare that
<br>
additional versioning is used in sonames.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0096.php">MPI Team: "[hwloc-devel] Create success (hwloc r0.9.1a1r1016)"</a>
<li><strong>Previous message:</strong> <a href="0094.php">Fawzi Mohamed: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>In reply to:</strong> <a href="0082.php">Jeff Squyres: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/10/0150.php">Brice Goglin: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
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
