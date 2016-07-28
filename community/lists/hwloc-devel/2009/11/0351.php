<?
$subject_val = "Re: [hwloc-devel] Pgcc issues fixed?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  9 05:12:09 2009" -->
<!-- isoreceived="20091109101209" -->
<!-- sent="Mon, 9 Nov 2009 11:12:03 +0100" -->
<!-- isosent="20091109101203" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Pgcc issues fixed?" -->
<!-- id="20091109101203.GO5728_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4EF22F46-F67E-409D-96F4-9A76136D5837_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Pgcc issues fixed?<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-09 05:12:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0352.php">Jeff Squyres: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Previous message:</strong> <a href="0350.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1317)"</a>
<li><strong>In reply to:</strong> <a href="0337.php">Jeff Squyres: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0352.php">Jeff Squyres: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Reply:</strong> <a href="0352.php">Jeff Squyres: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Thu 05 Nov 2009 07:58:58 -0500, a &#233;crit :
<br>
<span class="quotelev1">&gt; This problem may go away if we adapt PLPA's approach to sched_[set| 
</span><br>
<span class="quotelev1">&gt; get]affinity.
</span><br>
<p>What I dislike in that approach is that it means we'd have to closely
<br>
follow future changes in the kernel ABI, while the API is not supposed
<br>
to change (even if it has in the past).  Also, now that glibc provides
<br>
pthread_setaffinity_np, we should take advantage of it to implement
<br>
hwloc_set_thread_cpubind, and there is no way we can re-implement it
<br>
ourselves (the missing piece is the pthread_t -&gt; tid translation).
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0352.php">Jeff Squyres: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Previous message:</strong> <a href="0350.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1317)"</a>
<li><strong>In reply to:</strong> <a href="0337.php">Jeff Squyres: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0352.php">Jeff Squyres: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Reply:</strong> <a href="0352.php">Jeff Squyres: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
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
