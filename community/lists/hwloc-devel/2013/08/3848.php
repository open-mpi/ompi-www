<?
$subject_val = "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 28 10:39:37 2013" -->
<!-- isoreceived="20130828143937" -->
<!-- sent="Wed, 28 Aug 2013 16:39:36 +0200" -->
<!-- isosent="20130828143936" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction" -->
<!-- id="CALT_uBTVo3WR3KzkxXV+jKiFJeFPSRmooLL=_2AVrYALYDSieg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-28 10:39:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3849.php">Brice Goglin: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<li><strong>Previous message:</strong> <a href="3847.php">Jiri Hladky: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<li><strong>In reply to:</strong> <a href="3847.php">Jiri Hladky: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3849.php">Brice Goglin: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MAX_COUNT is topology-&gt;level_nbobjects[from_depth] -1
<br>
<p><p>On Wed, Aug 28, 2013 at 4:20 PM, Jiri Hladky &lt;hladky.jiri_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Aug 27, 2013 at 7:57 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You just explained why I don't like weights. Some people will want to
</span><br>
<span class="quotelev2">&gt;&gt; ignore L2, some won't. Specifying all this on the command-line would be
</span><br>
<span class="quotelev2">&gt;&gt; horrible, and implementing it will be horrible too.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; :-) Agreed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I think that --reverse option is much easier for the implementation
</span><br>
<span class="quotelev3">&gt;&gt; &gt; and for the clear requirement and understanding how the output should
</span><br>
<span class="quotelev3">&gt;&gt; &gt; look like.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Implementing reverse bitmap_singlify() isn't so easy.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also &quot;--reverse&quot; would have a semantics that no users ever requested,
</span><br>
<span class="quotelev2">&gt;&gt; it's only a workaround for your actual need (&quot;ignore core0 if
</span><br>
<span class="quotelev2">&gt;&gt; possible&quot;). What if somebody laer comes with a machine where he wants to
</span><br>
<span class="quotelev2">&gt;&gt; preferably ignore core 7 and maybe ignore core 11 too, because some
</span><br>
<span class="quotelev2">&gt;&gt; special daemons are running there? We'd need to add
</span><br>
<span class="quotelev2">&gt;&gt; --dont-reverse-but-ignore-some-cores-if-possible. Or what if somebody
</span><br>
<span class="quotelev2">&gt;&gt; wants to ignore the first core but still get other cores in the normal
</span><br>
<span class="quotelev2">&gt;&gt; order?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got your point. On the other hand I think that hwloc-distrib is at the
</span><br>
<span class="quotelev1">&gt; moment not flexible enough to handle such case. I believe that the current
</span><br>
<span class="quotelev1">&gt; strategy - start from the first object - is not the best one. From my
</span><br>
<span class="quotelev1">&gt; experience, core 0 is always most used by the system so it seems that
</span><br>
<span class="quotelev1">&gt; better strategy would to allocate the cores from the last one. So for
</span><br>
<span class="quotelev1">&gt; example, when I say that I would like to avoid PU#0 then it means I would
</span><br>
<span class="quotelev1">&gt; like in fact avoid Socket#0 as well as long as possible. The same applies
</span><br>
<span class="quotelev1">&gt; to NUMANode#0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was looking at the source code of the hwloc-distrib and I believe that
</span><br>
<span class="quotelev1">&gt; only this part of the code would be affected:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       for (i = 0; i &lt; chunks; i++)
</span><br>
<span class="quotelev1">&gt;         roots[i] = hwloc_get_obj_by_depth(topology, from_depth, i);  =&gt;
</span><br>
<span class="quotelev1">&gt; change this to roots[i] = hwloc_get_obj_by_depth(topology, from_depth,
</span><br>
<span class="quotelev1">&gt; MAX_COUNT - i);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       hwloc_distributev(topology, roots, chunks, cpuset, n, to_depth); =&gt;
</span><br>
<span class="quotelev1">&gt; rewrite this to iterate in the reverse direction
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MAX_COUNT seems to be known and accessible as topology-&gt;nb_levels.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I missing something? In case of infinite bitmap hwloc-distrib will
</span><br>
<span class="quotelev1">&gt; error out. This should solve the problems with hwloc_bitmap_singlify.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tend to think we should let the application handle these specific
</span><br>
<span class="quotelev2">&gt;&gt; cases (finding what can be ignored while still having enough objects,
</span><br>
<span class="quotelev2">&gt;&gt; and then calling distribute accordingly).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually I believe that this change is more easily implemented directly in
</span><br>
<span class="quotelev1">&gt; the C code rather then using some work-around in Bash. And I believe that
</span><br>
<span class="quotelev1">&gt; the use case is not such exotic. As outlined above, sarting from core#0 is
</span><br>
<span class="quotelev1">&gt; not always the best strategy....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know what do you think.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jirka
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3848/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3849.php">Brice Goglin: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<li><strong>Previous message:</strong> <a href="3847.php">Jiri Hladky: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<li><strong>In reply to:</strong> <a href="3847.php">Jiri Hladky: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3849.php">Brice Goglin: "Re: [hwloc-devel] hwloc-distrib - please add the option to distribute the jobs in the reverse direction"</a>
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
