<?
$subject_val = "[hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 16 08:02:58 2012" -->
<!-- isoreceived="20120116130258" -->
<!-- sent="Mon, 16 Jan 2012 14:02:42 +0100" -->
<!-- isosent="20120116130242" -->
<!-- name="Marc-Andr&#233; Hermanns" -->
<!-- email="m.a.hermanns_at_[hidden]" -->
<!-- subject="[hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind" -->
<!-- id="EE74A229-C058-470C-B14F-FFC17BFA1969_at_grs-sim.de" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind<br>
<strong>From:</strong> Marc-Andr&#233; Hermanns (<em>m.a.hermanns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-16 08:02:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0519.php">Samuel Thibault: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<li><strong>Previous message:</strong> <a href="0517.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0519.php">Samuel Thibault: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<li><strong>Maybe reply:</strong> <a href="0519.php">Samuel Thibault: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<li><strong>Maybe reply:</strong> <a href="0521.php">Samuel Thibault: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<li><strong>Maybe reply:</strong> <a href="0522.php">Samuel Thibault: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I want to use hwloc to determine the location of a process or thread 
<br>
on a node in an HPC environment. There I'd usually assume that 
<br>
processes/threads are already bound to specific PUs and I also assume 
<br>
the runtime is handling this part. 
<br>
<p>I just want to record the location, and use this location data in 
<br>
further analysis. 
<br>
<p>Now, I am having difficulties in trying to figure out how to employ  
<br>
hwloc correctly to get the information I want and I would appreciate 
<br>
it greatly if you could shed some light into this.  
<br>
<p>First, I am currently testing not on an HPC platform but on my local 
<br>
MacBookPro with Mac OS X 10.6.8. There the processes are not bound, so
<br>
I have to use last_location, right?
<br>
<p>I wrote a small program to just dump my location to stdout. 
<br>
<p>In my current understanding I would have to:
<br>
1) Initialize and load topology
<br>
2) Get CPU location/binding
<br>
3) Evaluate CPU set, which should hold the location (right?)
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
<p>#include &quot;hwloc.h&quot;
<br>
<p>int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_topology_t topology;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_cpuset_t   cpuset;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char             name[50];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unsigned int     depth;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;hwloc_topology_init(&amp;topology);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_topology_load(topology);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;This system has %i levels\n&quot;, hwloc_topology_get_depth(topology));
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;cpuset = hwloc_bitmap_alloc();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_get_last_cpu_location(topology, cpuset, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_bitmap_snprintf(name, 49, cpuset);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Cpuset: %s\n&quot;, name);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (depth = 0; depth &lt; hwloc_topology_get_depth(topology); depth++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Number of objects at depth %i: %i\n&quot;, depth, hwloc_get_nbobjs_inside_cpuset_by_depth(topology, cpuset, depth));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return EXIT_SUCCESS;
<br>
}
<br>
<p>This yields the following output:
<br>
<p>This system has 7 levels
<br>
Cpuset: 0x0
<br>
Number of objects at depth 0: 0
<br>
Number of objects at depth 1: 0
<br>
Number of objects at depth 2: 0
<br>
Number of objects at depth 3: 0
<br>
Number of objects at depth 4: 0
<br>
Number of objects at depth 5: 0
<br>
Number of objects at depth 6: 0
<br>
<p>and I am at a total loss on what I should make of this. It seems I am  
<br>
doing something fundamentally wrong, but what and where? Do processes 
<br>
need to be bound somewhere for me to get any data out of hwloc? 
<br>
<p>Cheers,
<br>
Marc-Andre
<br>
<pre>
--
Marc-Andre Hermanns
German Research School for
Simulation Sciences GmbH
c/o Laboratory for Parallel Programming
52056 Aachen | Germany
Tel +49 241 80 99753
Fax +49 241 80 6 99753
Web www.grs-sim.de
Members: Forschungszentrum J&#252;lich GmbH | RWTH Aachen University
Registered in the commercial register of the local court of
D&#252;ren (Amtsgericht D&#252;ren) under registration number HRB 5268
Registered office: J&#252;lich
Executive board: Prof. Marek Behr Ph.D. | Dr. Norbert Drewes

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0518/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0519.php">Samuel Thibault: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<li><strong>Previous message:</strong> <a href="0517.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0519.php">Samuel Thibault: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<li><strong>Maybe reply:</strong> <a href="0519.php">Samuel Thibault: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<li><strong>Maybe reply:</strong> <a href="0521.php">Samuel Thibault: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<li><strong>Maybe reply:</strong> <a href="0522.php">Samuel Thibault: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
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
