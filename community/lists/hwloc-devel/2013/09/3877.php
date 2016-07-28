<?
$subject_val = "[hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 18 08:42:58 2013" -->
<!-- isoreceived="20130918124258" -->
<!-- sent="Wed, 18 Sep 2013 14:42:54 +0200" -->
<!-- isosent="20130918124254" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="[hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object" -->
<!-- id="CALT_uBSV+GsVWGUWGNzuSjnczUBdjt=orG9nTAdPLcEJE6DCbw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object<br>
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-18 08:42:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3878.php">Brice Goglin: "Re: [hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object"</a>
<li><strong>Previous message:</strong> <a href="3876.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5811)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3878.php">Brice Goglin: "Re: [hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object"</a>
<li><strong>Reply:</strong> <a href="3878.php">Brice Goglin: "Re: [hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/02/4055.php">Brice Goglin: "Re: [hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
hi Samuel,
<br>
<p>hopefully you still remember discussion we had regarding a proposed new
<br>
option
<br>
--reverse_direction
<br>
or perhaps better
<br>
--start_from_last_object
<br>
<p>which would force hwloc-distrib to start assigning PUs from the last object
<br>
(rather than from PU#0 as the default)
<br>
<p>I have now implemented the change on the latest trunk.
<br>
<p>svn co <a href="http://svn.open-mpi.org/svn/hwloc/trunk">http://svn.open-mpi.org/svn/hwloc/trunk</a> hwloc-trunk
<br>
<p>I had to modify only three functions
<br>
<p>&nbsp;&nbsp;&nbsp;- hwloc_distributev in helper.h
<br>
&nbsp;&nbsp;&nbsp;- hwloc_distribute in helper.h
<br>
&nbsp;&nbsp;&nbsp;- hwloc_bitmap_singlify in bitmap.c
<br>
<p>The change is trivial. In helper.h I had to only change the direction of
<br>
loops, ie from
<br>
<p>for(i=0;i&lt;N;++i) {
<br>
&nbsp;&nbsp;anything[i] =
<br>
to
<br>
for(i=N;i&gt;0;--i)
<br>
&nbsp;&nbsp;anything[i-1] =
<br>
<p>(Please be careful here as &quot;i&quot; is unsigned int and it will wrap around when
<br>
doing i-- for i == 0 . Alternative code would be
<br>
<p>for (size_t i = n-1; i &lt; n ; --i) { ... }
<br>
<p>which has the benefit that you don't need to change i to i-1 in the
<br>
loop body but it's for statement is less readable)
<br>
<p>In hwloc_bitmap_singlify I had to
<br>
<p>&nbsp;&nbsp;&nbsp;- again change to loop direction
<br>
&nbsp;&nbsp;&nbsp;- replace
<br>
<p>int _ffs = hwloc_ffsl(w);
<br>
set-&gt;ulongs[i] = HWLOC_SUBBITMAP_CPU(_ffs-1);
<br>
<p><p>with
<br>
<p><p>int _fls = hwloc_flsl(w);
<br>
set-&gt;ulongs[i-1] = HWLOC_SUBBITMAP_CPU(_fls-1);
<br>
<p>The patch file is attached.
<br>
<p>Could you please review it if you agree to add it to the 1.8?
<br>
<p>Other changes would require:
<br>
<p>&nbsp;&nbsp;&nbsp;- add the new command line option to hwloc-distrib
<br>
&nbsp;&nbsp;&nbsp;- clone functions
<br>
&nbsp;&nbsp;&nbsp;hwloc_distributev, hwloc_distribute, hwloc_bitmap_singlify to
<br>
&nbsp;&nbsp;&nbsp;hwloc_distributev_reverse, hwloc_distribute_reverse,
<br>
hwloc_bitmap_singlify_reverseand when a command line option is
<br>
specified, call these new functions
<br>
<p>I have tested the new code on 4 Socket system with 15 cores per socket and
<br>
30 PUs per socket and it works as expected:
<br>
<p>utils/hwloc-distrib --single --taskset 64
<br>
0x800000000000000000000000000000
<br>
0x400000000000000000000000000000
<br>
0x100000000000000000000000000
<br>
0x20000000000000000000000
<br>
0x4000000000000000000
<br>
<p>It will assign the jobs in this order
<br>
<p>&nbsp;&nbsp;&nbsp;1. last PU on the last core on Socket #4
<br>
&nbsp;&nbsp;&nbsp;2. last PU on the last core Socket #3
<br>
&nbsp;&nbsp;&nbsp;3. last PU on the last core Socket #2
<br>
&nbsp;&nbsp;&nbsp;4. last PU on the last core Socket #1
<br>
&nbsp;&nbsp;&nbsp;5. last PU on the second last core on Socket #4
<br>
<p>Please let me know what you think about it. I would really appreciate if
<br>
you can include it into the official code.
<br>
<p>Thanks a lot!
<br>
Jirka
<br>
<p><p><p><p>On Thu, Aug 29, 2013 at 9:58 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Le 28/08/2013 16:20, Jiri Hladky a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I got your point. On the other hand I think that hwloc-distrib is at the
</span><br>
<span class="quotelev1">&gt; moment not flexible enough to handle such case. I believe that the current
</span><br>
<span class="quotelev1">&gt; strategy - start from the first object - is not the best one. From my
</span><br>
<span class="quotelev1">&gt; experience, core 0 is always most used by the system so it seems that
</span><br>
<span class="quotelev1">&gt; better strategy would to allocate the cores from the last one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Most people expect their jobs to be launched in order: process0 on first
</span><br>
<span class="quotelev1">&gt; cores, process1 on next cores, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, you don't want to reverse the output, you want to ignore first
</span><br>
<span class="quotelev1">&gt; core/socket if possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I was looking at the source code of the hwloc-distrib and I believe
</span><br>
<span class="quotelev1">&gt; that only this part of the code would be affected:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        for (i = 0; i &lt; chunks; i++)
</span><br>
<span class="quotelev1">&gt;         roots[i] = hwloc_get_obj_by_depth(topology, from_depth, i);  =&gt;
</span><br>
<span class="quotelev1">&gt; change this to roots[i] = hwloc_get_obj_by_depth(topology, from_depth,
</span><br>
<span class="quotelev1">&gt; MAX_COUNT - i);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        hwloc_distributev(topology, roots, chunks, cpuset, n, to_depth); =&gt;
</span><br>
<span class="quotelev1">&gt; rewrite this to iterate in the reverse direction
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can do the exact same thing by reversing your loop in the caller.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, reversing the loop just move the core you don't want to the end of
</span><br>
<span class="quotelev1">&gt; the list. But if you use the entire list, you end up using the exact same
</span><br>
<span class="quotelev1">&gt; cores. You just reordered the processes among these cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Am I missing something? In case of infinite bitmap hwloc-distrib will
</span><br>
<span class="quotelev1">&gt; error out. This should solve the problems with hwloc_bitmap_singlify.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We need a new singlify() above, one that doesn't use the first bit. That's
</span><br>
<span class="quotelev1">&gt; what will make you use a core that is not the first one in each socket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Problems with infinite bitmaps are unrelated with hwloc-distrib, but they
</span><br>
<span class="quotelev1">&gt; need to be handled in that new bitmap API anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3877/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3877/Hladky_hwloc-distrib_to_retun_PU_starting_from_the_last_one.patch">Hladky_hwloc-distrib_to_retun_PU_starting_from_the_last_one.patch</a>
</ul>
<!-- attachment="Hladky_hwloc-distrib_to_retun_PU_starting_from_the_last_one.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3878.php">Brice Goglin: "Re: [hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object"</a>
<li><strong>Previous message:</strong> <a href="3876.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5811)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3878.php">Brice Goglin: "Re: [hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object"</a>
<li><strong>Reply:</strong> <a href="3878.php">Brice Goglin: "Re: [hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/02/4055.php">Brice Goglin: "Re: [hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object"</a>
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
