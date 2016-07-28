<?
$subject_val = "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 13 05:48:28 2010" -->
<!-- isoreceived="20100713094828" -->
<!-- sent="Tue, 13 Jul 2010 11:46:10 +0200" -->
<!-- isosent="20100713094610" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets" -->
<!-- id="4C3C35E2.7010707_at_inria.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="1279012955.2239.64.camel_at_kallies.zib.de" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-13 05:46:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1160.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<li><strong>Previous message:</strong> <a href="1158.php">Bernd Kallies: "[hwloc-devel] Bug report: hwloc topology broken when restricted to cpusets"</a>
<li><strong>In reply to:</strong> <a href="1158.php">Bernd Kallies: "[hwloc-devel] Bug report: hwloc topology broken when restricted to cpusets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1160.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<li><strong>Reply:</strong> <a href="1160.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 13/07/2010 11:22, Bernd Kallies a &#233;crit :
<br>
<span class="quotelev2">&gt;&gt; /bin/echo 0-4 &gt; /dev/cpuset/mycpuset/cpus
</span><br>
<span class="quotelev2">&gt;&gt; /bin/echo 0-1 &gt; /dev/cpuset/mycpuset/mems
</span><br>
<span class="quotelev2">&gt;&gt; /bin/echo $$ &gt; /dev/cpuset/mycpuset/tasks
</span><br>
<span class="quotelev2">&gt;&gt; /sw/local/packages/hwloc-1.0.1/bin/lstopo 
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Machine (142GB)
</span><br>
<span class="quotelev1">&gt;   NUMANode #0 (phys=0 71GB) + Socket #0 + L3 #0 (8192KB)
</span><br>
<span class="quotelev1">&gt;     L2 #0 (256KB) + L1 #0 (32KB) + Core #0 + PU #0 (phys=0)
</span><br>
<span class="quotelev1">&gt;     L2 #1 (256KB) + L1 #1 (32KB) + Core #1 + PU #1 (phys=1)
</span><br>
<span class="quotelev1">&gt;     L2 #2 (256KB) + L1 #2 (32KB) + Core #2 + PU #2 (phys=2)
</span><br>
<span class="quotelev1">&gt;     L2 #3 (256KB) + L1 #3 (32KB) + Core #3 + PU #3 (phys=3)
</span><br>
<span class="quotelev1">&gt;   NUMANode #1 (phys=1 71GB) + Socket #1 + L3 #1 (8192KB) + L2 #4 (256KB)
</span><br>
<span class="quotelev1">&gt; + L1 #4 (32KB) + Core #4 + PU #4 (phys=4)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; /sw/local/packages/hwloc-1.0.1/bin/lstopo --merge
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Machine
</span><br>
<span class="quotelev1">&gt;   L3 #0 (8192KB)
</span><br>
<span class="quotelev1">&gt;     PU #0 (phys=0)
</span><br>
<span class="quotelev1">&gt;     PU #1 (phys=1)
</span><br>
<span class="quotelev1">&gt;     PU #2 (phys=2)
</span><br>
<span class="quotelev1">&gt;     PU #3 (phys=3)
</span><br>
<span class="quotelev1">&gt;   PU #4 (phys=4)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>This looks good to me. When --merge is given, we only keep the most
<br>
important objects to simplify the output. PU is considered the most
<br>
important object type, since that's where you bind processes in the end.
<br>
That's why
<br>
<p>&nbsp;&nbsp;NUMANode #1 (phys=1 71GB) + Socket #1 + L3 #1 (8192KB) + L2 #4 (256KB) + L1 #4 (32KB) + Core #4 + PU #4 (phys=4)
<br>
<p>is replaced by
<br>
<p>&nbsp;&nbsp;PU #4 (phys=4)
<br>
<p><p>What would like instead?
<br>
<p>If you don't want to loose any information, just don't use --merge.
<br>
<p><p><span class="quotelev1">&gt; #include &lt;hwloc.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(void) {
</span><br>
<span class="quotelev1">&gt;   int              npu, i, j;
</span><br>
<span class="quotelev1">&gt;   hwloc_topology_t topology;
</span><br>
<span class="quotelev1">&gt;   hwloc_obj_t      *pu, parent;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /* Allocate and initialize topology object. */
</span><br>
<span class="quotelev1">&gt;   hwloc_topology_init(&amp;topology);
</span><br>
<span class="quotelev1">&gt;   /* Perform the topology detection. */
</span><br>
<span class="quotelev1">&gt;   hwloc_topology_ignore_all_keep_structure(topology);
</span><br>
<span class="quotelev1">&gt;   hwloc_topology_load(topology);
</span><br>
<span class="quotelev1">&gt;   /* Collect all HWLOC_OBJ_PU */
</span><br>
<span class="quotelev1">&gt;   npu   = hwloc_get_nbobjs_by_type(topology, HWLOC_OBJ_PU);
</span><br>
<span class="quotelev1">&gt;   pu    = (hwloc_obj_t *)malloc(npu * sizeof(hwloc_obj_t *));
</span><br>
<span class="quotelev1">&gt;   pu[0] = hwloc_get_next_obj_by_type(topology, HWLOC_OBJ_PU, NULL);
</span><br>
<span class="quotelev1">&gt;   hwloc_get_closest_objs(topology, pu[0], &amp;pu[1], npu - 1);
</span><br>
<span class="quotelev1">&gt;   /* Determine common parent */
</span><br>
<span class="quotelev1">&gt;   for(i = 0; i &lt; npu - 1; i++) {
</span><br>
<span class="quotelev1">&gt;     for(j = i + 1; j &lt; npu; j++) {
</span><br>
<span class="quotelev1">&gt;       parent = hwloc_get_common_ancestor_obj(topology, pu[i], pu[j]);
</span><br>
<span class="quotelev1">&gt;       printf(&quot;%2d %2d common parent type %d\n&quot;, i, j, parent-&gt;type);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; gcc -I/sw/local/packages/hwloc-1.0.1/include
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; -L/sw/local/packages/hwloc-1.0.1/lib
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath,/sw/local/packages/hwloc-1.0.1/lib -lhwloc test.c
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; ./a.out
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;  0  1 common parent type 4
</span><br>
<span class="quotelev1">&gt;  0  2 common parent type 4
</span><br>
<span class="quotelev1">&gt;  0  3 common parent type 4
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I'll debug this, thanks.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1160.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<li><strong>Previous message:</strong> <a href="1158.php">Bernd Kallies: "[hwloc-devel] Bug report: hwloc topology broken when restricted to cpusets"</a>
<li><strong>In reply to:</strong> <a href="1158.php">Bernd Kallies: "[hwloc-devel] Bug report: hwloc topology broken when restricted to cpusets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1160.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<li><strong>Reply:</strong> <a href="1160.php">Bernd Kallies: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
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
