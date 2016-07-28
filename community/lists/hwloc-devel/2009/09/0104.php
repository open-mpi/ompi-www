<?
$subject_val = "Re: [hwloc-devel] structure assumptions, duplication";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 12:55:33 2009" -->
<!-- isoreceived="20090929165533" -->
<!-- sent="Tue, 29 Sep 2009 18:55:27 +0200" -->
<!-- isosent="20090929165527" -->
<!-- name="Fawzi Mohamed" -->
<!-- email="fawzi_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] structure assumptions, duplication" -->
<!-- id="8473166B-5E68-4294-9491-82CDD7475600_at_gmx.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20090929161421.GA25109_at_const.bordeaux.inria.fr" -->
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
<strong>From:</strong> Fawzi Mohamed (<em>fawzi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-29 12:55:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0105.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Previous message:</strong> <a href="0103.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>In reply to:</strong> <a href="0103.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0105.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0105.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0106.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0116.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Samuel,
<br>
<p>On 29-set-09, at 18:14, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Fawzi Mohamed, le Tue 29 Sep 2009 17:39:17 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; so that in the future one could avoid storing it at least in the
</span><br>
<span class="quotelev2">&gt;&gt; deepest levels where it is easy and relatively cheap to generate (and
</span><br>
<span class="quotelev2">&gt;&gt; where one would have the largest savings).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Even the deepest levels would have a L1 cache level on top of maybe  
</span><br>
<span class="quotelev1">&gt; just
</span><br>
<span class="quotelev1">&gt; at most 4 threads.  Here we only save the &quot;children&quot; pointers, which  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; not so many, compared to the siblings &amp; cousins pointers, I'm not sure
</span><br>
<span class="quotelev1">&gt; it is really worth the pain of defining a long series of functions.
</span><br>
<p>ok those were two separate things, I was thinking
<br>
<p>cpuset -&gt; cpuset_ptr (or just a flag that says if the structure has  
<br>
it, and thus two structures, a long one with it and a short one  
<br>
without, differing only in the tail if you really want to be hacky).
<br>
Then cpuset is generated on the fly for the deepest level (like less  
<br>
than 4-8 proc -&gt;  lots of memory savings on large machines).
<br>
(cost 1 function, and copying or building the cpuset)
<br>
<p>sibling/cousin -&gt; only cousins (you can make them loop first on  
<br>
siblings, then to the others if it really is a partition)
<br>
children -&gt; only one representation (arity/childrens or first/last)
<br>
(cost many functions)
<br>
<p>the main point is that these changes/optimizations can be done even  
<br>
later without breaking anything if you use functions.
<br>
<p><span class="quotelev2">&gt;&gt; I would say that for most operations (cpuset, next_sibling,...) using
</span><br>
<span class="quotelev2">&gt;&gt; functions that get a hwloc_obj_t (and if needed also a topology) and
</span><br>
<span class="quotelev2">&gt;&gt; return what requested is the way to go.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That means a long series of functions, I'm not sure it's really  
</span><br>
<span class="quotelev1">&gt; clearer
</span><br>
<span class="quotelev1">&gt; for the user. obj-&gt;father looks to me easier to read than
</span><br>
<span class="quotelev1">&gt; hwloc_obj_father(obj), particularly in complex expressions.
</span><br>
<p>ok I can see that, so I guess you will have to evaluate if the  
<br>
abstraction cost is worth the potential savings, maybe for cpuset it  
<br>
is; for sibling,... you might be right that it isn't, for father it  
<br>
sure isn't.
<br>
<p><span class="quotelev2">&gt;&gt; I suppose that most of these operations are not performance critical.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wouldn't suppose this actually. Detection time is probably not
</span><br>
<span class="quotelev1">&gt; performance critical, but it could be useful to make browsing the
</span><br>
<span class="quotelev1">&gt; topology very efficient.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ok, I was thinking that maybe you did/would like to provide in the
</span><br>
<span class="quotelev2">&gt;&gt; future something akin to what opensolaris does with locality groups
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://opensolaris.org/os/community/performance/mpo_overview.pdf">http://opensolaris.org/os/community/performance/mpo_overview.pdf</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, we intend to provide something similar.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In fact what I &quot;need&quot; (or at least I think I need ;) is just the next
</span><br>
<span class="quotelev2">&gt;&gt; neighbors, basically I go up the hierarchy, and look which new
</span><br>
<span class="quotelev2">&gt;&gt; neighbors I have, so some hierarchy like the lgroups is close to what
</span><br>
<span class="quotelev2">&gt;&gt; I need, and simpler to handle than the full graph.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's what future heuristics would build for you, yes.
</span><br>
<p>tha's great, I am really looking forward to it.
<br>
<p>and sorry if I seem to be criticizing a lot, as I am mainly a user,  
<br>
not a developer of hwloc, but I hope it is constructive, and maybe  
<br>
helps making hwloc better...
<br>
<p>ciao
<br>
Fawzi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0105.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Previous message:</strong> <a href="0103.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>In reply to:</strong> <a href="0103.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0105.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0105.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0106.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0116.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
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
