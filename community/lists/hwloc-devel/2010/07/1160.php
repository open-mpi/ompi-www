<?
$subject_val = "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 13 05:56:52 2010" -->
<!-- isoreceived="20100713095652" -->
<!-- sent="Tue, 13 Jul 2010 11:56:36 +0200" -->
<!-- isosent="20100713095636" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets" -->
<!-- id="1279014996.2239.72.camel_at_kallies.zib.de" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="4C3C35E2.7010707_at_inria.fr" -->
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
<strong>From:</strong> Bernd Kallies (<em>kallies_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-13 05:56:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1161.php">Brice Goglin: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<li><strong>Previous message:</strong> <a href="1159.php">Brice Goglin: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<li><strong>In reply to:</strong> <a href="1159.php">Brice Goglin: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1161.php">Brice Goglin: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<li><strong>Reply:</strong> <a href="1161.php">Brice Goglin: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the quick reply.
<br>
<p>I expect that one can safely use the tree-traversing functions of the
<br>
hwloc API with a topology, that is returned by hwloc_topology_load. When
<br>
they crash, then the topology is broken. This should not happen.
<br>
<p>One has to walk through the topology tree e.g. when trying to figure out
<br>
a good guess for pinning maps based on some distance approach. When
<br>
doing this it becomes important for performance to work with a reduced
<br>
topology that only contains levels that are needed to calculate
<br>
processor distances. Thatswhy I tend to use the
<br>
hwloc_topology_ignore_all_keep_structure approach.
<br>
<p>Sincerely BK
<br>
<p>On Tue, 2010-07-13 at 11:46 +0200, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 13/07/2010 11:22, Bernd Kallies a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /bin/echo 0-4 &gt; /dev/cpuset/mycpuset/cpus
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /bin/echo 0-1 &gt; /dev/cpuset/mycpuset/mems
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /bin/echo $$ &gt; /dev/cpuset/mycpuset/tasks
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /sw/local/packages/hwloc-1.0.1/bin/lstopo 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt; Machine (142GB)
</span><br>
<span class="quotelev2">&gt; &gt;   NUMANode #0 (phys=0 71GB) + Socket #0 + L3 #0 (8192KB)
</span><br>
<span class="quotelev2">&gt; &gt;     L2 #0 (256KB) + L1 #0 (32KB) + Core #0 + PU #0 (phys=0)
</span><br>
<span class="quotelev2">&gt; &gt;     L2 #1 (256KB) + L1 #1 (32KB) + Core #1 + PU #1 (phys=1)
</span><br>
<span class="quotelev2">&gt; &gt;     L2 #2 (256KB) + L1 #2 (32KB) + Core #2 + PU #2 (phys=2)
</span><br>
<span class="quotelev2">&gt; &gt;     L2 #3 (256KB) + L1 #3 (32KB) + Core #3 + PU #3 (phys=3)
</span><br>
<span class="quotelev2">&gt; &gt;   NUMANode #1 (phys=1 71GB) + Socket #1 + L3 #1 (8192KB) + L2 #4 (256KB)
</span><br>
<span class="quotelev2">&gt; &gt; + L1 #4 (32KB) + Core #4 + PU #4 (phys=4)
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /sw/local/packages/hwloc-1.0.1/bin/lstopo --merge
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt; Machine
</span><br>
<span class="quotelev2">&gt; &gt;   L3 #0 (8192KB)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #0 (phys=0)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #1 (phys=1)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #2 (phys=2)
</span><br>
<span class="quotelev2">&gt; &gt;     PU #3 (phys=3)
</span><br>
<span class="quotelev2">&gt; &gt;   PU #4 (phys=4)
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This looks good to me. When --merge is given, we only keep the most
</span><br>
<span class="quotelev1">&gt; important objects to simplify the output. PU is considered the most
</span><br>
<span class="quotelev1">&gt; important object type, since that's where you bind processes in the end.
</span><br>
<span class="quotelev1">&gt; That's why
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   NUMANode #1 (phys=1 71GB) + Socket #1 + L3 #1 (8192KB) + L2 #4 (256KB) + L1 #4 (32KB) + Core #4 + PU #4 (phys=4)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is replaced by
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   PU #4 (phys=4)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What would like instead?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you don't want to loose any information, just don't use --merge.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;hwloc.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(void) {
</span><br>
<span class="quotelev2">&gt; &gt;   int              npu, i, j;
</span><br>
<span class="quotelev2">&gt; &gt;   hwloc_topology_t topology;
</span><br>
<span class="quotelev2">&gt; &gt;   hwloc_obj_t      *pu, parent;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   /* Allocate and initialize topology object. */
</span><br>
<span class="quotelev2">&gt; &gt;   hwloc_topology_init(&amp;topology);
</span><br>
<span class="quotelev2">&gt; &gt;   /* Perform the topology detection. */
</span><br>
<span class="quotelev2">&gt; &gt;   hwloc_topology_ignore_all_keep_structure(topology);
</span><br>
<span class="quotelev2">&gt; &gt;   hwloc_topology_load(topology);
</span><br>
<span class="quotelev2">&gt; &gt;   /* Collect all HWLOC_OBJ_PU */
</span><br>
<span class="quotelev2">&gt; &gt;   npu   = hwloc_get_nbobjs_by_type(topology, HWLOC_OBJ_PU);
</span><br>
<span class="quotelev2">&gt; &gt;   pu    = (hwloc_obj_t *)malloc(npu * sizeof(hwloc_obj_t *));
</span><br>
<span class="quotelev2">&gt; &gt;   pu[0] = hwloc_get_next_obj_by_type(topology, HWLOC_OBJ_PU, NULL);
</span><br>
<span class="quotelev2">&gt; &gt;   hwloc_get_closest_objs(topology, pu[0], &amp;pu[1], npu - 1);
</span><br>
<span class="quotelev2">&gt; &gt;   /* Determine common parent */
</span><br>
<span class="quotelev2">&gt; &gt;   for(i = 0; i &lt; npu - 1; i++) {
</span><br>
<span class="quotelev2">&gt; &gt;     for(j = i + 1; j &lt; npu; j++) {
</span><br>
<span class="quotelev2">&gt; &gt;       parent = hwloc_get_common_ancestor_obj(topology, pu[i], pu[j]);
</span><br>
<span class="quotelev2">&gt; &gt;       printf(&quot;%2d %2d common parent type %d\n&quot;, i, j, parent-&gt;type);
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;   }
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev3">&gt; &gt;&gt; gcc -I/sw/local/packages/hwloc-1.0.1/include
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt; -L/sw/local/packages/hwloc-1.0.1/lib
</span><br>
<span class="quotelev2">&gt; &gt; -Wl,-rpath,/sw/local/packages/hwloc-1.0.1/lib -lhwloc test.c
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./a.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt;  0  1 common parent type 4
</span><br>
<span class="quotelev2">&gt; &gt;  0  2 common parent type 4
</span><br>
<span class="quotelev2">&gt; &gt;  0  3 common parent type 4
</span><br>
<span class="quotelev2">&gt; &gt; Segmentation fault
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll debug this, thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Dr. Bernd Kallies
Konrad-Zuse-Zentrum f&#252;r Informationstechnik Berlin
Takustr. 7
14195 Berlin
Tel: +49-30-84185-270
Fax: +49-30-84185-311
e-mail: kallies_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1161.php">Brice Goglin: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<li><strong>Previous message:</strong> <a href="1159.php">Brice Goglin: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<li><strong>In reply to:</strong> <a href="1159.php">Brice Goglin: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1161.php">Brice Goglin: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<li><strong>Reply:</strong> <a href="1161.php">Brice Goglin: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
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
