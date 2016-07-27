<?
$subject_val = "Re: [hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 18 09:07:09 2013" -->
<!-- isoreceived="20130918130709" -->
<!-- sent="Wed, 18 Sep 2013 15:07:06 +0200" -->
<!-- isosent="20130918130706" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object" -->
<!-- id="5239A57A.4020503_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CALT_uBSV+GsVWGUWGNzuSjnczUBdjt=orG9nTAdPLcEJE6DCbw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-18 09:07:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3879.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5812)"</a>
<li><strong>Previous message:</strong> <a href="3877.php">Jiri Hladky: "[hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object"</a>
<li><strong>In reply to:</strong> <a href="3877.php">Jiri Hladky: "[hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/02/4055.php">Brice Goglin: "Re: [hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes I still have that in mind, but I am not a big fan of adding yet two
<br>
other distribute functions. It's a pitty that we need 4 of them to get
<br>
everything done. If we multiply by 2 every 2 years, it won't scale :)
<br>
The current interface doesn't well support distributing N objects among
<br>
M child when M &gt; N, that's causing your request (fixing this +
<br>
singlify_last would be enough), and that may cause other requests in the
<br>
future. But that's hard to fix properly.
<br>
I would rather deprecate the existing functions, and make a new single
<br>
one (needs a new name) that won't need yet another fix in two years. At
<br>
least, it'll take a flag argument (reverse would be one of this flag).
<br>
<p>singlify_reverse() (or _last() or whatever good name) is ok (just needs
<br>
some additional tests for make check).
<br>
<p>Brice
<br>
<p><p><p><p>Le 18/09/2013 14:42, Jiri Hladky a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt; hi Samuel,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hopefully you still remember discussion we had regarding a proposed
</span><br>
<span class="quotelev1">&gt; new option 
</span><br>
<span class="quotelev1">&gt; --reverse_direction
</span><br>
<span class="quotelev1">&gt; or perhaps better
</span><br>
<span class="quotelev1">&gt; --start_from_last_object
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which would force hwloc-distrib to start assigning PUs from the last
</span><br>
<span class="quotelev1">&gt; object (rather than from PU#0 as the default)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have now implemented the change on the latest trunk. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; svn co <a href="http://svn.open-mpi.org/svn/hwloc/trunk">http://svn.open-mpi.org/svn/hwloc/trunk</a> hwloc-trunk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had to modify only three functions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * hwloc_distributev in helper.h
</span><br>
<span class="quotelev1">&gt;   * hwloc_distribute in helper.h
</span><br>
<span class="quotelev1">&gt;   * hwloc_bitmap_singlify in bitmap.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The change is trivial. In helper.h I had to only change the direction
</span><br>
<span class="quotelev1">&gt; of loops, ie from
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for(i=0;i&lt;N;++i) {
</span><br>
<span class="quotelev1">&gt;   anything[i] = 
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; for(i=N;i&gt;0;--i)
</span><br>
<span class="quotelev1">&gt;   anything[i-1] = 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (Please be careful here as &quot;i&quot; isunsigned int and it will wrap around
</span><br>
<span class="quotelev1">&gt; when doing i-- for i == 0 . Alternative code would be
</span><br>
<span class="quotelev1">&gt; |for (size_t i = n-1; i &lt; n ; --i) { ... }|
</span><br>
<span class="quotelev1">&gt; |which has the benefit that you don't need to change i to i-1 in the loop body but it's for statement is less readable)|
</span><br>
<span class="quotelev1">&gt; In hwloc_bitmap_singlify I had to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * again change to loop direction
</span><br>
<span class="quotelev1">&gt;   * replace 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int _ffs = hwloc_ffsl(w);
</span><br>
<span class="quotelev1">&gt; set-&gt;ulongs[i] = HWLOC_SUBBITMAP_CPU(_ffs-1);
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; int _fls = hwloc_flsl(w);
</span><br>
<span class="quotelev1">&gt; set-&gt;ulongs[i-1] = HWLOC_SUBBITMAP_CPU(_fls-1);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The patch file is attached. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you please review it if you agree to add it to the 1.8?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other changes would require:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * add the new command line option to hwloc-distrib
</span><br>
<span class="quotelev1">&gt;   * clone
</span><br>
<span class="quotelev1">&gt;     functions hwloc_distributev, hwloc_distribute, hwloc_bitmap_singlify
</span><br>
<span class="quotelev1">&gt;     to hwloc_distributev_reverse, hwloc_distribute_reverse, hwloc_bitmap_singlify_reverse
</span><br>
<span class="quotelev1">&gt;     and when a command line option is specified, call these new functions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tested the new code on 4 Socket system with 15 cores per socket
</span><br>
<span class="quotelev1">&gt; and 30 PUs per socket and it works as expected:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; utils/hwloc-distrib --single --taskset 64
</span><br>
<span class="quotelev1">&gt; 0x800000000000000000000000000000
</span><br>
<span class="quotelev1">&gt; 0x400000000000000000000000000000
</span><br>
<span class="quotelev1">&gt; 0x100000000000000000000000000
</span><br>
<span class="quotelev1">&gt; 0x20000000000000000000000
</span><br>
<span class="quotelev1">&gt; 0x4000000000000000000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It will assign the jobs in this order
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  1. last PU on the last core on Socket #4
</span><br>
<span class="quotelev1">&gt;  2. last PU on the last core Socket #3
</span><br>
<span class="quotelev1">&gt;  3. last PU on the last core Socket #2
</span><br>
<span class="quotelev1">&gt;  4. last PU on the last core Socket #1
</span><br>
<span class="quotelev1">&gt;  5. last PU on the second last core on Socket #4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know what you think about it. I would really appreciate
</span><br>
<span class="quotelev1">&gt; if you can include it into the official code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot!
</span><br>
<span class="quotelev1">&gt; Jirka
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Aug 29, 2013 at 9:58 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Le 28/08/2013 16:20, Jiri Hladky a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     I got your point. On the other hand I think that hwloc-distrib is
</span><br>
<span class="quotelev2">&gt;&gt;     at the moment not flexible enough to handle such case. I believe
</span><br>
<span class="quotelev2">&gt;&gt;     that the current strategy - start from the first object - is not
</span><br>
<span class="quotelev2">&gt;&gt;     the best one. From my experience, core 0 is always most used by
</span><br>
<span class="quotelev2">&gt;&gt;     the system so it seems that better strategy would to allocate the
</span><br>
<span class="quotelev2">&gt;&gt;     cores from the last one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Most people expect their jobs to be launched in order: process0 on
</span><br>
<span class="quotelev1">&gt;     first cores, process1 on next cores, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Again, you don't want to reverse the output, you want to ignore
</span><br>
<span class="quotelev1">&gt;     first core/socket if possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I was looking at the source code of the hwloc-distrib and I
</span><br>
<span class="quotelev2">&gt;&gt;     believe that only this part of the code would be affected:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           for (i = 0; i &lt; chunks; i++)
</span><br>
<span class="quotelev2">&gt;&gt;             roots[i] = hwloc_get_obj_by_depth(topology, from_depth,
</span><br>
<span class="quotelev2">&gt;&gt;     i);  =&gt; change this to roots[i] =
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc_get_obj_by_depth(topology, from_depth, MAX_COUNT - i);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           hwloc_distributev(topology, roots, chunks, cpuset, n,
</span><br>
<span class="quotelev2">&gt;&gt;     to_depth); =&gt; rewrite this to iterate in the reverse direction
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     You can do the exact same thing by reversing your loop in the caller.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Anyway, reversing the loop just move the core you don't want to
</span><br>
<span class="quotelev1">&gt;     the end of the list. But if you use the entire list, you end up
</span><br>
<span class="quotelev1">&gt;     using the exact same cores. You just reordered the processes among
</span><br>
<span class="quotelev1">&gt;     these cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Am I missing something? In case of infinite bitmap hwloc-distrib
</span><br>
<span class="quotelev2">&gt;&gt;     will error out. This should solve the problems
</span><br>
<span class="quotelev2">&gt;&gt;     with hwloc_bitmap_singlify.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     We need a new singlify() above, one that doesn't use the first
</span><br>
<span class="quotelev1">&gt;     bit. That's what will make you use a core that is not the first
</span><br>
<span class="quotelev1">&gt;     one in each socket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Problems with infinite bitmaps are unrelated with hwloc-distrib,
</span><br>
<span class="quotelev1">&gt;     but they need to be handled in that new bitmap API anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt;     hwloc-devel_at_[hidden] &lt;mailto:hwloc-devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3878/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3879.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5812)"</a>
<li><strong>Previous message:</strong> <a href="3877.php">Jiri Hladky: "[hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object"</a>
<li><strong>In reply to:</strong> <a href="3877.php">Jiri Hladky: "[hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/02/4055.php">Brice Goglin: "Re: [hwloc-devel] Patch file to let hwloc-distrib output the PUs starting from the last object"</a>
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
