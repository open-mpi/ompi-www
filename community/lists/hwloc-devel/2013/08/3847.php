<?
$subject_val = "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 28 10:20:44 2013" -->
<!-- isoreceived="20130828142044" -->
<!-- sent="Wed, 28 Aug 2013 16:20:43 +0200" -->
<!-- isosent="20130828142043" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction" -->
<!-- id="CALT_uBSxjquQKnXBpM8ggcog+JnXw3sg-9btYJMKXwR_a7wgqg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="521CE87C.6090807_at_inria.fr" -->
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
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-28 10:20:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3848.php">Jiri Hladky: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<li><strong>Previous message:</strong> <a href="3846.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7.2rc1r5763)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3848.php">Jiri Hladky: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<li><strong>Reply:</strong> <a href="3848.php">Jiri Hladky: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<li><strong>Reply:</strong> <a href="3849.php">Brice Goglin: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Aug 27, 2013 at 7:57 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You just explained why I don't like weights. Some people will want to
</span><br>
<span class="quotelev1">&gt; ignore L2, some won't. Specifying all this on the command-line would be
</span><br>
<span class="quotelev1">&gt; horrible, and implementing it will be horrible too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>:-) Agreed.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think that --reverse option is much easier for the implementation
</span><br>
<span class="quotelev2">&gt; &gt; and for the clear requirement and understanding how the output should
</span><br>
<span class="quotelev2">&gt; &gt; look like.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Implementing reverse bitmap_singlify() isn't so easy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also &quot;--reverse&quot; would have a semantics that no users ever requested,
</span><br>
<span class="quotelev1">&gt; it's only a workaround for your actual need (&quot;ignore core0 if
</span><br>
<span class="quotelev1">&gt; possible&quot;). What if somebody laer comes with a machine where he wants to
</span><br>
<span class="quotelev1">&gt; preferably ignore core 7 and maybe ignore core 11 too, because some
</span><br>
<span class="quotelev1">&gt; special daemons are running there? We'd need to add
</span><br>
<span class="quotelev1">&gt; --dont-reverse-but-ignore-some-cores-if-possible. Or what if somebody
</span><br>
<span class="quotelev1">&gt; wants to ignore the first core but still get other cores in the normal
</span><br>
<span class="quotelev1">&gt; order?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I got your point. On the other hand I think that hwloc-distrib is at the
<br>
moment not flexible enough to handle such case. I believe that the current
<br>
strategy - start from the first object - is not the best one. From my
<br>
experience, core 0 is always most used by the system so it seems that
<br>
better strategy would to allocate the cores from the last one. So for
<br>
example, when I say that I would like to avoid PU#0 then it means I would
<br>
like in fact avoid Socket#0 as well as long as possible. The same applies
<br>
to NUMANode#0.
<br>
<p>I was looking at the source code of the hwloc-distrib and I believe that
<br>
only this part of the code would be affected:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; chunks; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;roots[i] = hwloc_get_obj_by_depth(topology, from_depth, i);  =&gt;
<br>
change this to roots[i] = hwloc_get_obj_by_depth(topology, from_depth,
<br>
MAX_COUNT - i);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_distributev(topology, roots, chunks, cpuset, n, to_depth); =&gt;
<br>
rewrite this to iterate in the reverse direction
<br>
<p>MAX_COUNT seems to be known and accessible as topology-&gt;nb_levels.
<br>
<p>Am I missing something? In case of infinite bitmap hwloc-distrib will error
<br>
out. This should solve the problems with hwloc_bitmap_singlify.
<br>
<p><p>I tend to think we should let the application handle these specific
<br>
<span class="quotelev1">&gt; cases (finding what can be ignored while still having enough objects,
</span><br>
<span class="quotelev1">&gt; and then calling distribute accordingly).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Actually I believe that this change is more easily implemented directly in
<br>
the C code rather then using some work-around in Bash. And I believe that
<br>
the use case is not such exotic. As outlined above, sarting from core#0 is
<br>
not always the best strategy....
<br>
<p>Please let me know what do you think.
<br>
<p>Jirka
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3847/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3848.php">Jiri Hladky: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<li><strong>Previous message:</strong> <a href="3846.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7.2rc1r5763)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3848.php">Jiri Hladky: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<li><strong>Reply:</strong> <a href="3848.php">Jiri Hladky: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<li><strong>Reply:</strong> <a href="3849.php">Brice Goglin: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
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
