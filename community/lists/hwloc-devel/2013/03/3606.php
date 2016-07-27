<?
$subject_val = "Re: [hwloc-devel] v1.7";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 31 16:09:30 2013" -->
<!-- isoreceived="20130331200930" -->
<!-- sent="Sun, 31 Mar 2013 22:09:23 +0200" -->
<!-- isosent="20130331200923" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] v1.7" -->
<!-- id="20130331200923.GV6229_at_type.youpi.perso.aquilenet.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20130107140555.GJ12387_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] v1.7<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-31 16:09:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/04/3607.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Previous message:</strong> <a href="3605.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7rc2r5521)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/01/3457.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/04/3607.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/04/3607.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm realizing that this was actually not settled on. I've just fixed my
<br>
previous text with the current syntax
<br>
<p>Samuel Thibault, le Mon 07 Jan 2013 15:05:55 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice Goglin, le Mon 31 Dec 2012 10:05:41 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt;   + The HWLOC_COMPONENTS may now start with '-' to only define a list of
</span><br>
<span class="quotelev2">&gt; &gt;     components to exclude.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm finding it not intuitive and not generic enough [...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It means that
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HWLOC_COMPONENTS=-cuda,opencl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; disables cuda *and* opencl, while intuition would have told me that it
</span><br>
<span class="quotelev1">&gt; disables cuda but enables opencl.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, one would for instance want to be able to do this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HWLOC_COMPONENTS=x86,-cuda,-opencl,nvml
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To be able to enable x86 before the default linux, but disable cuda and
</span><br>
<span class="quotelev1">&gt; opencl, but enable nvml, as well as all the other usual plugins (without
</span><br>
<span class="quotelev1">&gt; having to know the list, which is important for future extensions).
</span><br>
<p>I thought we agreed that it would be useful to be able to do it, and
<br>
using '-' instead of '^' was meant to avoid confusion with Open-MPI
<br>
which has the previous behavior.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/04/3607.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Previous message:</strong> <a href="3605.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7rc2r5521)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/01/3457.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/04/3607.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/04/3607.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
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
