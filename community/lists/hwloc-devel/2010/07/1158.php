<?
$subject_val = "[hwloc-devel] Bug report: hwloc topology broken when restricted to cpusets";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 13 05:22:51 2010" -->
<!-- isoreceived="20100713092251" -->
<!-- sent="Tue, 13 Jul 2010 11:22:35 +0200" -->
<!-- isosent="20100713092235" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="[hwloc-devel] Bug report: hwloc topology broken when restricted to cpusets" -->
<!-- id="1279012955.2239.64.camel_at_kallies.zib.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [hwloc-devel] Bug report: hwloc topology broken when restricted to cpusets<br>
<strong>From:</strong> Bernd Kallies (<em>kallies_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-13 05:22:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1159.php">Brice Goglin: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<li><strong>Previous message:</strong> <a href="1157.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2302)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1159.php">Brice Goglin: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<li><strong>Reply:</strong> <a href="1159.php">Brice Goglin: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd like to report the following bug with hwloc-1.0.1:
<br>
<p>When creating a Linux cpuset (see cpuset(7)) with a subset of resources
<br>
of the current machine, and binding a hwloc application to this cpuset,
<br>
then the hwloc API may return a broken topology when restricting the
<br>
topology to objects that have children.
<br>
<p>Working example on a machine running Linux kernel 2.6.16.60-0.42.5-smp
<br>
and containing two quad-core Nehalem Sockets X5570 with hyperthreading
<br>
enabled (shell prompt is &gt;).
<br>
<p>We start with the cpuset named / that contains all 16 logical processing
<br>
units and all two memory nodes). We run the lstopo command.
<br>
Then we create a cpuset containing the first 5 logical processing units,
<br>
and bind the current shell to it. We again run the lstopo command. With
<br>
option --merge the output looks strange /does not contain the second
<br>
NUMA node with L3 cache, PU #4 is left alone. To the end we compile a
<br>
small executable that tries to fetch the common parents of all processor
<br>
pairs of the topology. This application crashes with SIGSEGV.
<br>
<p><span class="quotelev1">&gt; cat /proc/self/cpuset
</span><br>
/
<br>
<span class="quotelev1">&gt; /sw/local/packages/hwloc-1.0.1/bin/lstopo 
</span><br>
Machine (142GB)
<br>
&nbsp;&nbsp;NUMANode #0 (phys=0 71GB) + Socket #0 + L3 #0 (8192KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #0 (256KB) + L1 #0 (32KB) + Core #0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #1 (phys=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #1 (256KB) + L1 #1 (32KB) + Core #1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #2 (phys=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #3 (phys=9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #2 (256KB) + L1 #2 (32KB) + Core #2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #4 (phys=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #5 (phys=10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #3 (256KB) + L1 #3 (32KB) + Core #3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #6 (phys=3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #7 (phys=11)
<br>
&nbsp;&nbsp;NUMANode #1 (phys=1 71GB) + Socket #1 + L3 #1 (8192KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #4 (256KB) + L1 #4 (32KB) + Core #4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #8 (phys=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #9 (phys=12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #5 (256KB) + L1 #5 (32KB) + Core #5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #10 (phys=5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #11 (phys=13)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #6 (256KB) + L1 #6 (32KB) + Core #6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #12 (phys=6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #13 (phys=14)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #7 (256KB) + L1 #7 (32KB) + Core #7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #14 (phys=7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #15 (phys=15)
<br>
<span class="quotelev1">&gt; /sw/local/packages/hwloc-1.0.1/bin/lstopo --merge
</span><br>
Machine
<br>
&nbsp;&nbsp;L3 #0 (8192KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core #0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #1 (phys=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core #1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #2 (phys=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #3 (phys=9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core #2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #4 (phys=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #5 (phys=10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core #3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #6 (phys=3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #7 (phys=11)
<br>
&nbsp;&nbsp;L3 #1 (8192KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core #4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #8 (phys=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #9 (phys=12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core #5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #10 (phys=5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #11 (phys=13)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core #6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #12 (phys=6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #13 (phys=14)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core #7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #14 (phys=7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #15 (phys=15)
<br>
<span class="quotelev1">&gt; /bin/echo 0-4 &gt; /dev/cpuset/mycpuset/cpus
</span><br>
<span class="quotelev1">&gt; /bin/echo 0-1 &gt; /dev/cpuset/mycpuset/mems
</span><br>
<span class="quotelev1">&gt; /bin/echo $$ &gt; /dev/cpuset/mycpuset/tasks
</span><br>
<span class="quotelev1">&gt; /sw/local/packages/hwloc-1.0.1/bin/lstopo 
</span><br>
Machine (142GB)
<br>
&nbsp;&nbsp;NUMANode #0 (phys=0 71GB) + Socket #0 + L3 #0 (8192KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #0 (256KB) + L1 #0 (32KB) + Core #0 + PU #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #1 (256KB) + L1 #1 (32KB) + Core #1 + PU #1 (phys=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #2 (256KB) + L1 #2 (32KB) + Core #2 + PU #2 (phys=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #3 (256KB) + L1 #3 (32KB) + Core #3 + PU #3 (phys=3)
<br>
&nbsp;&nbsp;NUMANode #1 (phys=1 71GB) + Socket #1 + L3 #1 (8192KB) + L2 #4 (256KB)
<br>
+ L1 #4 (32KB) + Core #4 + PU #4 (phys=4)
<br>
<span class="quotelev1">&gt; /sw/local/packages/hwloc-1.0.1/bin/lstopo --merge
</span><br>
Machine
<br>
&nbsp;&nbsp;L3 #0 (8192KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #1 (phys=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #2 (phys=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU #3 (phys=3)
<br>
&nbsp;&nbsp;PU #4 (phys=4)
<br>
<span class="quotelev1">&gt; cat test.c
</span><br>
#include &lt;hwloc.h&gt;
<br>
int main(void) {
<br>
&nbsp;&nbsp;int              npu, i, j;
<br>
&nbsp;&nbsp;hwloc_topology_t topology;
<br>
&nbsp;&nbsp;hwloc_obj_t      *pu, parent;
<br>
<p>&nbsp;&nbsp;/* Allocate and initialize topology object. */
<br>
&nbsp;&nbsp;hwloc_topology_init(&amp;topology);
<br>
&nbsp;&nbsp;/* Perform the topology detection. */
<br>
&nbsp;&nbsp;hwloc_topology_ignore_all_keep_structure(topology);
<br>
&nbsp;&nbsp;hwloc_topology_load(topology);
<br>
&nbsp;&nbsp;/* Collect all HWLOC_OBJ_PU */
<br>
&nbsp;&nbsp;npu   = hwloc_get_nbobjs_by_type(topology, HWLOC_OBJ_PU);
<br>
&nbsp;&nbsp;pu    = (hwloc_obj_t *)malloc(npu * sizeof(hwloc_obj_t *));
<br>
&nbsp;&nbsp;pu[0] = hwloc_get_next_obj_by_type(topology, HWLOC_OBJ_PU, NULL);
<br>
&nbsp;&nbsp;hwloc_get_closest_objs(topology, pu[0], &amp;pu[1], npu - 1);
<br>
&nbsp;&nbsp;/* Determine common parent */
<br>
&nbsp;&nbsp;for(i = 0; i &lt; npu - 1; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for(j = i + 1; j &lt; npu; j++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parent = hwloc_get_common_ancestor_obj(topology, pu[i], pu[j]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%2d %2d common parent type %d\n&quot;, i, j, parent-&gt;type);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
}
<br>
<span class="quotelev1">&gt; gcc -I/sw/local/packages/hwloc-1.0.1/include
</span><br>
-L/sw/local/packages/hwloc-1.0.1/lib
<br>
-Wl,-rpath,/sw/local/packages/hwloc-1.0.1/lib -lhwloc test.c
<br>
<span class="quotelev1">&gt; ./a.out
</span><br>
&nbsp;0  1 common parent type 4
<br>
&nbsp;0  2 common parent type 4
<br>
&nbsp;0  3 common parent type 4
<br>
Segmentation fault
<br>
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
<li><strong>Next message:</strong> <a href="1159.php">Brice Goglin: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<li><strong>Previous message:</strong> <a href="1157.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2302)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1159.php">Brice Goglin: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
<li><strong>Reply:</strong> <a href="1159.php">Brice Goglin: "Re: [hwloc-devel] Bug report: hwloc topology broken when restricted to	cpusets"</a>
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
