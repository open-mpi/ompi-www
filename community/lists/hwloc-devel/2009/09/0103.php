<?
$subject_val = "Re: [hwloc-devel] structure assumptions, duplication";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 12:14:26 2009" -->
<!-- isoreceived="20090929161426" -->
<!-- sent="Tue, 29 Sep 2009 18:14:21 +0200" -->
<!-- isosent="20090929161421" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] structure assumptions, duplication" -->
<!-- id="20090929161421.GA25109_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="88A6CE6F-676F-4497-8DDE-A493481B6AEE_at_gmx.ch" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] structure assumptions, duplication<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-29 12:14:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0104.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Previous message:</strong> <a href="0102.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>In reply to:</strong> <a href="0102.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0104.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0104.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fawzi Mohamed, le Tue 29 Sep 2009 17:39:17 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; so that in the future one could avoid storing it at least in the
</span><br>
<span class="quotelev1">&gt; deepest levels where it is easy and relatively cheap to generate (and
</span><br>
<span class="quotelev1">&gt; where one would have the largest savings).
</span><br>
<p>Even the deepest levels would have a L1 cache level on top of maybe just
<br>
at most 4 threads.  Here we only save the &quot;children&quot; pointers, which is
<br>
not so many, compared to the siblings &amp; cousins pointers, I'm not sure
<br>
it is really worth the pain of defining a long series of functions.
<br>
<p><span class="quotelev1">&gt; I would say that for most operations (cpuset, next_sibling,...) using  
</span><br>
<span class="quotelev1">&gt; functions that get a hwloc_obj_t (and if needed also a topology) and  
</span><br>
<span class="quotelev1">&gt; return what requested is the way to go.
</span><br>
<p>That means a long series of functions, I'm not sure it's really clearer
<br>
for the user. obj-&gt;father looks to me easier to read than
<br>
hwloc_obj_father(obj), particularly in complex expressions.
<br>
<p><span class="quotelev1">&gt; I suppose that most of these operations are not performance critical.
</span><br>
<p>I wouldn't suppose this actually. Detection time is probably not
<br>
performance critical, but it could be useful to make browsing the
<br>
topology very efficient.
<br>
<p><span class="quotelev1">&gt; ok, I was thinking that maybe you did/would like to provide in the  
</span><br>
<span class="quotelev1">&gt; future something akin to what opensolaris does with locality groups
</span><br>
<span class="quotelev1">&gt; <a href="http://opensolaris.org/os/community/performance/mpo_overview.pdf">http://opensolaris.org/os/community/performance/mpo_overview.pdf</a>
</span><br>
<p>Yes, we intend to provide something similar.
<br>
<p><span class="quotelev1">&gt; In fact what I &quot;need&quot; (or at least I think I need ;) is just the next  
</span><br>
<span class="quotelev1">&gt; neighbors, basically I go up the hierarchy, and look which new  
</span><br>
<span class="quotelev1">&gt; neighbors I have, so some hierarchy like the lgroups is close to what  
</span><br>
<span class="quotelev1">&gt; I need, and simpler to handle than the full graph.
</span><br>
<p>That's what future heuristics would build for you, yes.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0104.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Previous message:</strong> <a href="0102.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>In reply to:</strong> <a href="0102.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0104.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0104.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
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
