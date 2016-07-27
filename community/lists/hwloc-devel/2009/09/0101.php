<?
$subject_val = "Re: [hwloc-devel] structure assumptions, duplication";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 10:59:38 2009" -->
<!-- isoreceived="20090929145938" -->
<!-- sent="Tue, 29 Sep 2009 16:59:33 +0200" -->
<!-- isosent="20090929145933" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] structure assumptions, duplication" -->
<!-- id="20090929145933.GT5665_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="664E49FD-A3DE-440E-B2FE-1F981EFC17E3_at_gmx.ch" -->
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
<strong>Date:</strong> 2009-09-29 10:59:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0102.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Previous message:</strong> <a href="0100.php">Fawzi Mohamed: "[hwloc-devel] structure assumptions, duplication"</a>
<li><strong>In reply to:</strong> <a href="0100.php">Fawzi Mohamed: "[hwloc-devel] structure assumptions, duplication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0102.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0102.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fawzi Mohamed, le Tue 29 Sep 2009 16:39:47 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; Maybe I worry too much, but with machines with 1'000 of processor  
</span><br>
<span class="quotelev1">&gt; coming, and maybe wanting local restricted copies to know the topology  
</span><br>
<span class="quotelev1">&gt; of the whole machine (to communicate with others) I worry also about  
</span><br>
<span class="quotelev1">&gt; few pointers here an there.
</span><br>
<p>Actually the size of all the pointers is not so much compared to the
<br>
size of the cpuset (by default 1024/8 = 128 bytes, worth 16 pointers).
<br>
<p><span class="quotelev1">&gt; 2) assumption on the structure
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also a ring like topology cannot be cleanly represented with a  
</span><br>
<span class="quotelev1">&gt; partition if one wants to have objects for groups with uniform latency.
</span><br>
<p>Our plan was to not only provide a hierarcical view but also the precise
<br>
graph.  For instance, that means that for an Altix machine with a
<br>
2D-mesh of 3*4 NUMA nodes, the hierarchy would be system containing
<br>
12 nodes, themselves containing a socket etc. And the fact that the
<br>
12 nodes are organized as a 2D-mesh would be expressed by a graph
<br>
structure, independently of the hierarchy.
<br>
<p><span class="quotelev1">&gt; At least the Misc object would seem to not fit in this clean
</span><br>
<span class="quotelev1">&gt; hierarchical picture.
</span><br>
<p>The Misc object is meant to not be interpreted any other way than
<br>
just grouping, so it is still hierarchical. For instance AIX provides
<br>
a hierarchical view of the machine, and for some levels I don't
<br>
know what they correspond to (new levels, not documented or unclear
<br>
documentation), but hwloc still expose them. Windows has a particular
<br>
notion of processor groups due to bad design and it's a good idea to
<br>
take that into account.
<br>
<p>The idea is that some programmers will only want to cope with a
<br>
hierarchical machine, while others will want to fine-tune according to
<br>
the precise topology (much harder, not polynomial at least). And thus we
<br>
should provide both. For the first kind of programmers, to tackle the
<br>
3*4 2D-mesh case above, we could provide a flag &quot;make it hierarchical&quot;,
<br>
which would heuristically group nodes recursively according to locality.
<br>
For now we only do such grouping from the NUMA distances when there are
<br>
clear NUMA subgroups.
<br>
<p><span class="quotelev1">&gt; So I wanted to know how you cope with those things, and also if  
</span><br>
<span class="quotelev1">&gt; something will probably change in the future, as some assumptions will  
</span><br>
<span class="quotelev1">&gt; inevitably creep in my code... and I would prefer to make the good  
</span><br>
<span class="quotelev1">&gt; ones :)
</span><br>
<p>We should probably (agree on and) state what we want to always provide
<br>
indeed.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0102.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Previous message:</strong> <a href="0100.php">Fawzi Mohamed: "[hwloc-devel] structure assumptions, duplication"</a>
<li><strong>In reply to:</strong> <a href="0100.php">Fawzi Mohamed: "[hwloc-devel] structure assumptions, duplication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0102.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0102.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
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
