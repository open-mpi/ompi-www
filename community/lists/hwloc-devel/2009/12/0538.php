<?
$subject_val = "Re: [hwloc-devel] signed / unsigned";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 21:51:43 2009" -->
<!-- isoreceived="20091217025143" -->
<!-- sent="Wed, 16 Dec 2009 21:51:38 -0500" -->
<!-- isosent="20091217025138" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] signed / unsigned" -->
<!-- id="A2DE007F-3AB4-4499-9581-B354CEA010C1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5DB38BA6-D83A-4146-B64E-FBB00E744B75_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] signed / unsigned<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-16 21:51:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0539.php">Samuel Thibault: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Previous message:</strong> <a href="0537.php">Jeff Squyres: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>In reply to:</strong> <a href="0537.php">Jeff Squyres: "Re: [hwloc-devel] signed / unsigned"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0539.php">Samuel Thibault: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Reply:</strong> <a href="0539.php">Samuel Thibault: "Re: [hwloc-devel] signed / unsigned"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 16, 2009, at 9:03 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Ok, done.  Please review:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/hwloc/changeset/1475">https://svn.open-mpi.org/trac/hwloc/changeset/1475</a>
</span><br>
<p>I definitely broke something.  :-(
<br>
<p><span class="quotelev1">&gt;From my embedding test, I make a trivial app that does the following:
</span><br>
<p><pre>
----
    mytest_hwloc_topology_init(&amp;topology);
    mytest_hwloc_topology_load(topology);
    depth = mytest_hwloc_topology_get_depth(topology);
    printf(&quot;Max depth: %u\n&quot;, depth);
-----
When I run it, it produces an assertion failure:
----
Assertion failed: (i = (unsigned) hwloc_get_type_depth(topology, obj-&gt;type) || HWLOC_TYPE_DEPTH_MULTIPLE == hwloc_get_type_depth(topology, obj-&gt;type)), function mytest_hwloc_topology_check, file topology.c, line 1764.
Abort
-----
Here's the full output:
-----
[21:47] beezle:~/svn/hwloc/tests/embedded % ./main 
2 procs
1 packages
2 threads per package
package 0 has cpuset 0x00000003
2 cores per package
core 0 has cpuset 0x00000001
core 1 has cpuset 0x00000002
caches 2(3932160kB) 1(32kB) 2(3072kB)
2 cache levels
node 0 has cpuset 0x00000003
L1cache 0 has cpuset 0x00000001
L1cache 1 has cpuset 0x00000002
L2cache 0 has cpuset 0x00000003
 * CPU cpusets *
cpu 0 (os 0) has cpuset 0x00000001
cpu 1 (os 1) has cpuset 0x00000002
System(0KB HP=0*0kB  ) 0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff
  NUMANode#0(3840MB) 0x00000003
    Socket#0 0x00000003
      L2Cache#0(3072KB) 0x00000003
        L1Cache#0(32KB) 0x00000001
          Core#0 0x00000001
            P#0 0x00000001
        L1Cache#1(32KB) 0x00000002
          Core#1 0x00000002
            P#1 0x00000002
Computing the system cpuset by ORing all Proc objects
-&gt; 0x00000003
Adding it to the complete cpuset
0x0 -&gt; 0x00000003
Limiting online cpuset to the complete cpuset
0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff -&gt; 0x00000003
Limiting allowed cpuset to the complete cpuset
0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff -&gt; 0x00000003
Removing unauthorized cpuset from system cpuset
0x00000003 -&gt; 0x00000003
Removing offline cpuset from system cpuset
0x00000003 -&gt; 0x00000003
Removing disallowed memory according to nodeset 0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff
Applying the system cpuset to all objects
System(0KB HP=0*0kB  ) 0x00000003
  NUMANode#0(3840MB) 0x00000003
    Socket#0 0x00000003
      L2Cache#0(3072KB) 0x00000003
        L1Cache#0(32KB) 0x00000001
          Core#0 0x00000001
            P#0 0x00000001
        L1Cache#1(32KB) 0x00000002
          Core#1 0x00000002
            P#1 0x00000002
Removing ignored objects
System(0KB HP=0*0kB  ) 0x00000003
  NUMANode#0(3840MB) 0x00000003
    Socket#0 0x00000003
      L2Cache#0(3072KB) 0x00000003
        L1Cache#0(32KB) 0x00000001
          Core#0 0x00000001
            P#0 0x00000001
        L1Cache#1(32KB) 0x00000002
          Core#1 0x00000002
            P#1 0x00000002
Removing empty objects except numa nodes and PCI devices
System(0KB HP=0*0kB  ) 0x00000003
  NUMANode#0(3840MB) 0x00000003
    Socket#0 0x00000003
      L2Cache#0(3072KB) 0x00000003
        L1Cache#0(32KB) 0x00000001
          Core#0 0x00000001
            P#0 0x00000001
        L1Cache#1(32KB) 0x00000002
          Core#1 0x00000002
            P#1 0x00000002
Removing objects whose type has HWLOC_IGNORE_TYPE_KEEP_STRUCTURE and have only one child or are the only child
System(0KB HP=0*0kB  ) 0x00000003
  NUMANode#0(3840MB) 0x00000003
    Socket#0 0x00000003
      L2Cache#0(3072KB) 0x00000003
        L1Cache#0(32KB) 0x00000001
          Core#0 0x00000001
            P#0 0x00000001
        L1Cache#1(32KB) 0x00000002
          Core#1 0x00000002
            P#1 0x00000002
Ok, finished tweaking, now connect
System(0KB HP=0*0kB  ) 0x00000003 arity 1
  NUMANode#0(3840MB) 0x00000003 arity 1
    Socket#0 0x00000003 arity 1
      L2Cache#0(3072KB) 0x00000003 arity 2
        L1Cache#0(32KB) 0x00000001 arity 1
          Core#0 0x00000001 arity 1
            P#0 0x00000001
        L1Cache#1(32KB) 0x00000002 arity 1
          Core#1 0x00000002 arity 1
            P#1 0x00000002
--- NUMANode level has number 1
--- Socket level has number 2
--- Cache level depth 2 has number 3
--- Cache level depth 1 has number 4
--- Core level has number 5
--- Proc level has number 6
Assertion failed: (i = (unsigned) hwloc_get_type_depth(topology, obj-&gt;type) || HWLOC_TYPE_DEPTH_MULTIPLE == hwloc_get_type_depth(topology, obj-&gt;type)), function mytest_hwloc_topology_check, file topology.c, line 1764.
Abort
------
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0539.php">Samuel Thibault: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Previous message:</strong> <a href="0537.php">Jeff Squyres: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>In reply to:</strong> <a href="0537.php">Jeff Squyres: "Re: [hwloc-devel] signed / unsigned"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0539.php">Samuel Thibault: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Reply:</strong> <a href="0539.php">Samuel Thibault: "Re: [hwloc-devel] signed / unsigned"</a>
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
