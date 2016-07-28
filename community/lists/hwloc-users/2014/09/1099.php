<?
$subject_val = "Re: [hwloc-users] binding to thread";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 13:43:49 2014" -->
<!-- isoreceived="20140929174349" -->
<!-- sent="Mon, 29 Sep 2014 19:43:47 +0200" -->
<!-- isosent="20140929174347" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] binding to thread" -->
<!-- id="54299A53.70801_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D04EEC95.896F%rta_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-users] binding to thread<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-29 13:43:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1100.php">Vishwanath Venkatesan: "[hwloc-users] Processor numbering in Ivy-bridge"</a>
<li><strong>Previous message:</strong> <a href="1098.php">Aulwes, Rob: "[hwloc-users] binding to thread"</a>
<li><strong>In reply to:</strong> <a href="1098.php">Aulwes, Rob: "[hwloc-users] binding to thread"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 29/09/2014 19:01, Aulwes, Rob a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to allocate and bind memory on the same NUMA domain as the
</span><br>
<span class="quotelev1">&gt; calling thread.  The code I use is as follows.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /* retrieve the single PU where the current thread actually
</span><br>
<span class="quotelev1">&gt; runs within this process binding */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           int err = hwloc_get_last_cpu_location(topo, set,
</span><br>
<span class="quotelev1">&gt; HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           if (err &lt; 0) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             fprintf(stderr, &quot;failed to get last cpu location\n&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             return NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           int idx = hwloc_bitmap_first(set);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           auto obj = hwloc_get_pu_obj_by_os_index(topo, idx);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           // get NUMA node containing PU
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           obj = hwloc_get_ancestor_obj_by_type(topo, HWLOC_OBJ_NODE, obj);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           void * buffer = hwloc_alloc_membind_nodeset(topo, len,
</span><br>
<span class="quotelev1">&gt; obj-&gt;nodeset,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                       HWLOC_MEMBIND_BIND,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                       HWLOC_MEMBIND_THREAD |
</span><br>
<span class="quotelev1">&gt; HWLOC_MEMBIND_STRICT);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           if (!buffer) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               fprintf(stderr, &quot;failed to manually allocate memory on
</span><br>
<span class="quotelev1">&gt; node %u\n&quot;, obj-&gt;os_index);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               return NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, for some allocations, if I print out where the allocation was
</span><br>
<span class="quotelev1">&gt; bound, it doesn't match the node of the thread.  Any ideas about what
</span><br>
<span class="quotelev1">&gt; I'm doing wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hello
<br>
<p>I don't see any problem with your code.
<br>
Are you sure the threads are bound within a single node?
<br>
<p>Random optimization idea: instead of
<br>
bitmap_first()+get_pu_obj_by_os_index()+get_ancestor_by_type(), you can
<br>
directly get the first NUMA node involved in cpuset &quot;set&quot; by calling
<br>
hwloc_get_next_obj_covering_cpuset_by_type(topo, set, HWLOC_OBJ_NODE, NULL)
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1099/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1100.php">Vishwanath Venkatesan: "[hwloc-users] Processor numbering in Ivy-bridge"</a>
<li><strong>Previous message:</strong> <a href="1098.php">Aulwes, Rob: "[hwloc-users] binding to thread"</a>
<li><strong>In reply to:</strong> <a href="1098.php">Aulwes, Rob: "[hwloc-users] binding to thread"</a>
<!-- nextthread="start" -->
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
