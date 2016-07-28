<?
$subject_val = "Re: [hwloc-devel] structure assumptions, duplication";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 11:39:24 2009" -->
<!-- isoreceived="20090929153924" -->
<!-- sent="Tue, 29 Sep 2009 17:39:17 +0200" -->
<!-- isosent="20090929153917" -->
<!-- name="Fawzi Mohamed" -->
<!-- email="fawzi_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] structure assumptions, duplication" -->
<!-- id="88A6CE6F-676F-4497-8DDE-A493481B6AEE_at_gmx.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20090929145933.GT5665_at_const.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2009-09-29 11:39:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0103.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Previous message:</strong> <a href="0101.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>In reply to:</strong> <a href="0101.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0103.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0103.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the quick answers!
<br>
<p>On 29-set-09, at 16:59, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Fawzi Mohamed, le Tue 29 Sep 2009 16:39:47 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Maybe I worry too much, but with machines with 1'000 of processor
</span><br>
<span class="quotelev2">&gt;&gt; coming, and maybe wanting local restricted copies to know the  
</span><br>
<span class="quotelev2">&gt;&gt; topology
</span><br>
<span class="quotelev2">&gt;&gt; of the whole machine (to communicate with others) I worry also about
</span><br>
<span class="quotelev2">&gt;&gt; few pointers here an there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually the size of all the pointers is not so much compared to the
</span><br>
<span class="quotelev1">&gt; size of the cpuset (by default 1024/8 = 128 bytes, worth 16 pointers).
</span><br>
<p>yes and so the question if that should not be returned by a function  
<br>
that initializes its argument (or returned by value), so that in the  
<br>
future one could avoid storing it at least in the deepest levels where  
<br>
it is easy and relatively cheap to generate (and where one would have  
<br>
the largest savings).
<br>
I would say that for most operations (cpuset, next_sibling,...) using  
<br>
functions that get a hwloc_obj_t (and if needed also a topology) and  
<br>
return what requested is the way to go.
<br>
Basically OOP in C, so that the actual implementation is hidden, and  
<br>
if you change the implementation the user has just to recompile.
<br>
If the function is simple and gets inlined the speed hit should be  
<br>
basically zero, and anyway I suppose that most of these operations are  
<br>
not performance critical.
<br>
This way you will be more free in the future to make aggressive changes.
<br>
<p><span class="quotelev2">&gt;&gt; 2) assumption on the structure
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also a ring like topology cannot be cleanly represented with a
</span><br>
<span class="quotelev2">&gt;&gt; partition if one wants to have objects for groups with uniform  
</span><br>
<span class="quotelev2">&gt;&gt; latency.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our plan was to not only provide a hierarcical view but also the  
</span><br>
<span class="quotelev1">&gt; precise
</span><br>
<span class="quotelev1">&gt; graph.  For instance, that means that for an Altix machine with a
</span><br>
<span class="quotelev1">&gt; 2D-mesh of 3*4 NUMA nodes, the hierarchy would be system containing
</span><br>
<span class="quotelev1">&gt; 12 nodes, themselves containing a socket etc. And the fact that the
</span><br>
<span class="quotelev1">&gt; 12 nodes are organized as a 2D-mesh would be expressed by a graph
</span><br>
<span class="quotelev1">&gt; structure, independently of the hierarchy.
</span><br>
<p>ok I see
<br>
<p>[... (thanks for the answers) ...]
<br>
<p><span class="quotelev1">&gt; The idea is that some programmers will only want to cope with a
</span><br>
<span class="quotelev1">&gt; hierarchical machine, while others will want to fine-tune according to
</span><br>
<span class="quotelev1">&gt; the precise topology (much harder, not polynomial at least). And  
</span><br>
<span class="quotelev1">&gt; thus we
</span><br>
<span class="quotelev1">&gt; should provide both. For the first kind of programmers, to tackle the
</span><br>
<span class="quotelev1">&gt; 3*4 2D-mesh case above, we could provide a flag &quot;make it  
</span><br>
<span class="quotelev1">&gt; hierarchical&quot;,
</span><br>
<span class="quotelev1">&gt; which would heuristically group nodes recursively according to  
</span><br>
<span class="quotelev1">&gt; locality.
</span><br>
<span class="quotelev1">&gt; For now we only do such grouping from the NUMA distances when there  
</span><br>
<span class="quotelev1">&gt; are
</span><br>
<span class="quotelev1">&gt; clear NUMA subgroups.
</span><br>
<p>ok, I was thinking that maybe you did/would like to provide in the  
<br>
future something akin to what opensolaris does with locality groups
<br>
<a href="http://opensolaris.org/os/community/performance/mpo_overview.pdf">http://opensolaris.org/os/community/performance/mpo_overview.pdf</a>
<br>
<p>In fact what I &quot;need&quot; (or at least I think I need ;) is just the next  
<br>
neighbors, basically I go up the hierarchy, and look which new  
<br>
neighbors I have, so some hierarchy like the lgroups is close to what  
<br>
I need, and simpler to handle than the full graph.
<br>
<p><span class="quotelev2">&gt;&gt; So I wanted to know how you cope with those things, and also if
</span><br>
<span class="quotelev2">&gt;&gt; something will probably change in the future, as some assumptions  
</span><br>
<span class="quotelev2">&gt;&gt; will
</span><br>
<span class="quotelev2">&gt;&gt; inevitably creep in my code... and I would prefer to make the good
</span><br>
<span class="quotelev2">&gt;&gt; ones :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We should probably (agree on and) state what we want to always provide
</span><br>
<span class="quotelev1">&gt; indeed.
</span><br>
<p>Yes that would be great
<br>
<p>ciao
<br>
Fawzi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0103.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Previous message:</strong> <a href="0101.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>In reply to:</strong> <a href="0101.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0103.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0103.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
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
