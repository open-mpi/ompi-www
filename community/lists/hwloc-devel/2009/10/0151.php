<?
$subject_val = "Re: [hwloc-devel] dynamic cpuset_t?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 12:16:16 2009" -->
<!-- isoreceived="20091007161616" -->
<!-- sent="Wed, 7 Oct 2009 18:16:08 +0200" -->
<!-- isosent="20091007161608" -->
<!-- name="Fawzi Mohamed" -->
<!-- email="fawzi_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] dynamic cpuset_t?" -->
<!-- id="CF816593-DC96-4AE3-A7BD-C67515CD463C_at_gmx.ch" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4ACCB761.6010002_at_inria.fr" -->
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
<strong>From:</strong> Fawzi Mohamed (<em>fawzi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-07 12:16:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0152.php">Brice Goglin: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Previous message:</strong> <a href="0150.php">Brice Goglin: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>In reply to:</strong> <a href="0150.php">Brice Goglin: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0152.php">Brice Goglin: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Reply:</strong> <a href="0152.php">Brice Goglin: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7-ott-09, at 17:44, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; I just pushed a huge commit converting everything to dynamic cpusets.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The new API is visable at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/hwloc/browser/trunk/include/hwloc/cpuset.h?rev=1109">https://svn.open-mpi.org/trac/hwloc/browser/trunk/include/hwloc/cpuset.h?rev=1109</a>
</span><br>
<span class="quotelev1">&gt; The implementation is pretty much the same than our old inlines, see
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/hwloc/browser/trunk/src/cpuset.c?rev=1109">https://svn.open-mpi.org/trac/hwloc/browser/trunk/src/cpuset.c?rev=1109</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Nice, I like it.
<br>
One comment, I see that you have a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_cpuset_copy (which I would have called  duplicate)
<br>
but copy in the sense of assignment is not really possible (i.e.  
<br>
reusing an existing allocated cpuset, and initialize it with the  
<br>
content of another.
<br>
<p>clr and orset is equivalent, but well, it would be nice to have it...
<br>
<p>By the way why you declare a function just before defining it? Does it  
<br>
do something?
<br>
<p>Fawzi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0152.php">Brice Goglin: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Previous message:</strong> <a href="0150.php">Brice Goglin: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>In reply to:</strong> <a href="0150.php">Brice Goglin: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0152.php">Brice Goglin: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Reply:</strong> <a href="0152.php">Brice Goglin: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
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
