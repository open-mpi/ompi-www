<?
$subject_val = "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 29 03:58:13 2013" -->
<!-- isoreceived="20130829075813" -->
<!-- sent="Thu, 29 Aug 2013 09:58:11 +0200" -->
<!-- isosent="20130829075811" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction" -->
<!-- id="521EFF13.2020703_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CALT_uBSxjquQKnXBpM8ggcog+JnXw3sg-9btYJMKXwR_a7wgqg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-29 03:58:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3850.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<li><strong>Previous message:</strong> <a href="3848.php">Jiri Hladky: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<li><strong>In reply to:</strong> <a href="3847.php">Jiri Hladky: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3850.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<li><strong>Reply:</strong> <a href="3850.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/08/2013 16:20, Jiri Hladky a &#233;crit :
<br>
<span class="quotelev1">&gt; I got your point. On the other hand I think that hwloc-distrib is at
</span><br>
<span class="quotelev1">&gt; the moment not flexible enough to handle such case. I believe that the
</span><br>
<span class="quotelev1">&gt; current strategy - start from the first object - is not the best one.
</span><br>
<span class="quotelev1">&gt; From my experience, core 0 is always most used by the system so it
</span><br>
<span class="quotelev1">&gt; seems that better strategy would to allocate the cores from the last one.
</span><br>
<p>Most people expect their jobs to be launched in order: process0 on first
<br>
cores, process1 on next cores, etc.
<br>
<p>Again, you don't want to reverse the output, you want to ignore first
<br>
core/socket if possible.
<br>
<p><span class="quotelev1">&gt; I was looking at the source code of the hwloc-distrib and I believe
</span><br>
<span class="quotelev1">&gt; that only this part of the code would be affected:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       for (i = 0; i &lt; chunks; i++)
</span><br>
<span class="quotelev1">&gt;         roots[i] = hwloc_get_obj_by_depth(topology, from_depth, i);
</span><br>
<span class="quotelev1">&gt;  =&gt; change this to roots[i] = hwloc_get_obj_by_depth(topology,
</span><br>
<span class="quotelev1">&gt; from_depth, MAX_COUNT - i);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       hwloc_distributev(topology, roots, chunks, cpuset, n, to_depth);
</span><br>
<span class="quotelev1">&gt; =&gt; rewrite this to iterate in the reverse direction
</span><br>
<p>You can do the exact same thing by reversing your loop in the caller.
<br>
<p>Anyway, reversing the loop just move the core you don't want to the end
<br>
of the list. But if you use the entire list, you end up using the exact
<br>
same cores. You just reordered the processes among these cores.
<br>
<p><span class="quotelev1">&gt; Am I missing something? In case of infinite bitmap hwloc-distrib will
</span><br>
<span class="quotelev1">&gt; error out. This should solve the problems with hwloc_bitmap_singlify.
</span><br>
<p>We need a new singlify() above, one that doesn't use the first bit.
<br>
That's what will make you use a core that is not the first one in each
<br>
socket.
<br>
<p>Problems with infinite bitmaps are unrelated with hwloc-distrib, but
<br>
they need to be handled in that new bitmap API anyway.
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3849/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3850.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<li><strong>Previous message:</strong> <a href="3848.php">Jiri Hladky: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<li><strong>In reply to:</strong> <a href="3847.php">Jiri Hladky: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3850.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<li><strong>Reply:</strong> <a href="3850.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
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
