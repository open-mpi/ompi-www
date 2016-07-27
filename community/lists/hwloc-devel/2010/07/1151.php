<?
$subject_val = "Re: [hwloc-devel] hwloc on PPC64";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 01:33:49 2010" -->
<!-- isoreceived="20100712053349" -->
<!-- sent="Mon, 12 Jul 2010 07:31:43 +0200" -->
<!-- isosent="20100712053143" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc on PPC64" -->
<!-- id="4C3AA8BF.1080002_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201007120008.41114.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc on PPC64<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-12 01:31:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1152.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1150.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1150.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1152.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on PPC64"</a>
<li><strong>Reply:</strong> <a href="1152.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on PPC64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 12/07/2010 00:08, Jirka Hladky a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; $./lstopo --xml /tmp/2010-Jul-10_22h14m_results/2.6.32-44.el6.ppc64_OS-
</span><br>
<span class="quotelev1">&gt; indexing.xml a.txt
</span><br>
<span class="quotelev1">&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>This was a crash in a drawing code (in the merge() function) that Samuel
<br>
fixed in trunk r2234 (and backported in 1.0.x). The log doesn't speak
<br>
about a crash, looks like we were lucky... gdb log says:
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
0x00000000004059a9 in merge (disp=0x61e0c0, x=858993504, y=4, or=6, andnot=0, r=239, g=223, b=222) at ../../trunk/utils/lstopo-text.c:490
<br>
490	  character current = disp-&gt;cells[y][x].c;
<br>
(gdb) where
<br>
#0  0x00000000004059a9 in merge (disp=0x61e0c0, x=858993504, y=4, or=6, andnot=0, r=239, g=223, b=222) at ../../trunk/utils/lstopo-text.c:490
<br>
#1  0x0000000000405b2e in text_box (output=0x61e0c0, r=239, g=223, b=222, depth=98, x1=48, width=858993457, y1=4, height=3) at ../../trunk/utils/lstopo-text.c:511
<br>
#2  0x000000000040ba24 in node_draw (topology=0x616010, methods=0x615620, logical=1, level=0x61ace0, output=0x61e0c0, depth=99, x=230, retwidth=0x7fffffffe1f4, y=30, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;retheight=0x7fffffffe1f0) at ../../trunk/utils/lstopo-draw.c:493
<br>
#3  0x000000000040f0c4 in system_draw (topology=0x616010, methods=0x615620, logical=1, level=0x617000, output=0x61e0c0, depth=100, x=0, retwidth=0x7fffffffe43c, y=0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;retheight=0x7fffffffe438) at ../../trunk/utils/lstopo-draw.c:594
<br>
#4  0x0000000000411117 in fig (topology=0x616010, methods=0x615620, logical=1, level=0x617000, output=0x61e0c0, depth=100, x=0, y=0) at ../../trunk/utils/lstopo-draw.c:661
<br>
#5  0x000000000041150d in output_draw (methods=0x615620, logical=1, topology=0x616010, output=0x61e0c0) at ../../trunk/utils/lstopo-draw.c:756
<br>
#6  0x0000000000406299 in output_text (topology=0x616010, filename=0x7fffffffea12 &quot;-.txt&quot;, logical=1, verbose_mode=1) at ../../trunk/utils/lstopo-text.c:662
<br>
#7  0x0000000000403f13 in main (argc=1, argv=0x7fffffffe6c0) at ../../trunk/utils/lstopo.c:393
<br>
(gdb) list
<br>
485	
<br>
486	/* output bars, merging with existing bars: `andnot' are removed, `or' are added */
<br>
487	static void
<br>
488	merge(struct display *disp, int x, int y, int or, int andnot, int r, int g, int b)
<br>
489	{
<br>
490	  character current = disp-&gt;cells[y][x].c;
<br>
491	  int directions = (to_directions(disp, current) &amp; ~andnot) | or;
<br>
492	  put(disp, x, y, from_directions(disp, directions), -1, -1, -1, r, g, b);
<br>
493	}
<br>
494	
<br>
<p><p><p><span class="quotelev1">&gt; Please notice that hwloc-distrib is 
</span><br>
<span class="quotelev1">&gt; also not working correctly - check CPU_AFFINITY/0008.log for example.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>The problem is that one of the NUMA nodes has an empty cpuset (it could
<br>
be a BIOS bug by the way). hwloc-distrib should probably ignore such
<br>
object and not distribute among them.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1152.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1150.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1150.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1152.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on PPC64"</a>
<li><strong>Reply:</strong> <a href="1152.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on PPC64"</a>
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
