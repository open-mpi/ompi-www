<?
$subject_val = "Re: [hwloc-devel] dynamic cpuset_t?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 25 16:02:24 2009" -->
<!-- isoreceived="20090925200224" -->
<!-- sent="Fri, 25 Sep 2009 16:02:15 -0400" -->
<!-- isosent="20090925200215" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] dynamic cpuset_t?" -->
<!-- id="8B40E60E-69C6-4611-A7B7-1A93194AB442_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-25 16:02:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0083.php">MPI Team: "[hwloc-devel] Create success (hwloc r0.9.1a1r1008)"</a>
<li><strong>Previous message:</strong> <a href="0081.php">Jeff Squyres: "Re: [hwloc-devel] Create success (hwloc r0.9.1a1r1006)"</a>
<li><strong>In reply to:</strong> <a href="0075.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0095.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Reply:</strong> <a href="0095.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for not replying earlier.
<br>
<p>If we anticipate changing the fixed-size items now, how about adding  
<br>
some kind of version control in the type name now?  Or -- more  
<br>
specifically -- what are the exact ABI goals?  I.e., if we change the  
<br>
size of the type, will we just require a recompile?  Or will we want  
<br>
to support old binaries and new binaries simultaneously?
<br>
<p><p>On Sep 25, 2009, at 9:27 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to give my personal opinion: having another ABI shouldn't hurt
</span><br>
<span class="quotelev1">&gt; if we put the cpuset size in the soname for instance.  In comparison,
</span><br>
<span class="quotelev1">&gt; having to use functions that allocate/free cpusets like I've done for
</span><br>
<span class="quotelev1">&gt; the AIX and OSF is a bit tedious (those don't have the choice, they  
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev1">&gt; to preserve a stable ABI).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0083.php">MPI Team: "[hwloc-devel] Create success (hwloc r0.9.1a1r1008)"</a>
<li><strong>Previous message:</strong> <a href="0081.php">Jeff Squyres: "Re: [hwloc-devel] Create success (hwloc r0.9.1a1r1006)"</a>
<li><strong>In reply to:</strong> <a href="0075.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0095.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Reply:</strong> <a href="0095.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
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
