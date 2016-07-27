<?
$subject_val = "Re: [hwloc-devel] dynamic cpuset_t?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 14:57:31 2009" -->
<!-- isoreceived="20090929185731" -->
<!-- sent="Tue, 29 Sep 2009 20:57:24 +0200" -->
<!-- isosent="20090929185724" -->
<!-- name="Fawzi Mohamed" -->
<!-- email="fawzi_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] dynamic cpuset_t?" -->
<!-- id="4E419E7D-D7F1-41AB-9B1C-20AE20D02F10_at_gmx.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4DD5D728-6ACC-475D-86A0-555A7F061D06_at_gmx.ch" -->
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
<strong>Date:</strong> 2009-09-29 14:57:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0113.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Previous message:</strong> <a href="0111.php">Fawzi Mohamed: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>In reply to:</strong> <a href="0111.php">Fawzi Mohamed: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 29-set-09, at 20:51, Fawzi Mohamed wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 29-set-09, at 20:43, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Fawzi Mohamed, le Tue 29 Sep 2009 20:39:02 +0200, a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It comes down to what you want to have, if you think you might  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; want to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; go the sparse full granularity way then indeed alloc/copy/free  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be added
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, that's my point: do we really want it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am more for avoiding it, if needed by using granularity, and  
</span><br>
<span class="quotelev1">&gt; having extracting functions that might build the cpuset on the fly I  
</span><br>
<span class="quotelev1">&gt; think that most of advantages of allocating/freeing/copying can be  
</span><br>
<span class="quotelev1">&gt; achieved without the annoying free/alloc.
</span><br>
<p>mmh thinking more I found a reason to add it: if the conversion to/ 
<br>
buildup of the &quot;native&quot; cpuset costly, and this platform has alloc/ 
<br>
free for its native cpuset...
<br>
then having alloc/free would allow one to use directly the native  
<br>
cpuset on that platform (or embed it in the cpuset).
<br>
So that is probably a good reason to bit the bullet and add it.
<br>
<p>Fawzi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0113.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Previous message:</strong> <a href="0111.php">Fawzi Mohamed: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>In reply to:</strong> <a href="0111.php">Fawzi Mohamed: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
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
