<?
$subject_val = "Re: [hwloc-users] Problems on SMP with 48 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 14:08:58 2012" -->
<!-- isoreceived="20120313180858" -->
<!-- sent="Tue, 13 Mar 2012 13:08:47 -0500" -->
<!-- isosent="20120313180847" -->
<!-- name="Hartmut Kaiser" -->
<!-- email="hartmut.kaiser_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Problems on SMP with 48 cores" -->
<!-- id="003c01cd0144$56cf4300$046dc900$_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F5F89E2.3000603_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Problems on SMP with 48 cores<br>
<strong>From:</strong> Hartmut Kaiser (<em>hartmut.kaiser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-13 14:08:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0593.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0591.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>In reply to:</strong> <a href="0589.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0593.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0593.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0595.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Le 13/03/2012 17:04, Hartmut Kaiser a &#233;crit :
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; But the problems I was seeing were not MSVC specific. It's a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; proliferation of arcane (non-POSIX) function use (like strcasecmp,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; etc.) missing use of HAVE_UNISTD_H, HAVE_STRINGS_H to wrap
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; non-standard headers, unsafe mixing of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; int32&lt;-&gt;int64 data types, reliance on int (and other types) having a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; certain bit-size, totally unsafe shift operations, wide use of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (non-C-standard) gcc extensions, etc. Should I go on?
</span><br>
<span class="quotelev2">&gt; &gt; More investigation shows that the code currently assumes group (and
</span><br>
<span class="quotelev2">&gt; &gt; processor) masks to be 32 bit, which is not true on 64 bit systems.
</span><br>
<span class="quotelev2">&gt; &gt; For instance this (topology-windows.c: line 643):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     hwloc_bitmap_from_ith_ulong(obj-&gt;cpuset, GroupMask[i].Group,
</span><br>
<span class="quotelev2">&gt; &gt; GroupMask[i].Mask);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try applying something like the patch below. Totally untested obviously,
</span><br>
<span class="quotelev1">&gt; but we'll see if that starts improving lstopo.
</span><br>
<p>Partially better, but mostly just differently wrong :-P (see attached debug
<br>
output and straight console output of lstopo)
<br>
<p>Regards Hartmut
<br>
---------------
<br>
<a href="http://boost-spirit.com">http://boost-spirit.com</a>
<br>
<a href="http://stellar.cct.lsu.edu">http://stellar.cct.lsu.edu</a>
<br>
<p><p><span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/src/topology-windows.c b/src/topology-windows.c index
</span><br>
<span class="quotelev1">&gt; 55821a4..94e5073 100644
</span><br>
<span class="quotelev1">&gt; --- a/src/topology-windows.c
</span><br>
<span class="quotelev1">&gt; +++ b/src/topology-windows.c
</span><br>
<span class="quotelev1">&gt; @@ -520,7 +520,8 @@ hwloc_look_windows(struct hwloc_topology *topology)
</span><br>
<span class="quotelev1">&gt;  	obj = hwloc_alloc_setup_object(type, id);
</span><br>
<span class="quotelev1">&gt;          obj-&gt;cpuset = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev1">&gt;  	hwloc_debug(&quot;%s#%u mask %lx\n&quot;, hwloc_obj_type_string(type), id,
</span><br>
<span class="quotelev1">&gt; procInfo[i].ProcessorMask);
</span><br>
<span class="quotelev1">&gt; -	hwloc_bitmap_from_ulong(obj-&gt;cpuset, procInfo[i].ProcessorMask);
</span><br>
<span class="quotelev1">&gt; +	hwloc_bitmap_from_ulong(obj-&gt;cpuset, procInfo[i].ProcessorMask &amp;
</span><br>
<span class="quotelev1">&gt; 0xffffffff);
</span><br>
<span class="quotelev1">&gt; +	hwloc_bitmap_from_ith_ulong(obj-&gt;cpuset, 1,
</span><br>
<span class="quotelev1">&gt; procInfo[i].ProcessorMask
</span><br>
<span class="quotelev1">&gt; +&gt;&gt; 32);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	switch (type) {
</span><br>
<span class="quotelev1">&gt;  	  case HWLOC_OBJ_NODE:
</span><br>
<span class="quotelev1">&gt; @@ -622,7 +623,8 @@ hwloc_look_windows(struct hwloc_topology *topology)
</span><br>
<span class="quotelev1">&gt;  	      mask = procInfo-&gt;Group.GroupInfo[id].ActiveProcessorMask;
</span><br>
<span class="quotelev1">&gt;  	      hwloc_debug(&quot;group %u %d cpus mask %lx\n&quot;, id,
</span><br>
<span class="quotelev1">&gt;                    procInfo-&gt;Group.GroupInfo[id].ActiveProcessorCount,
</span><br>
<span class="quotelev1">&gt; mask);
</span><br>
<span class="quotelev1">&gt; -	      hwloc_bitmap_from_ith_ulong(obj-&gt;cpuset, id, mask);
</span><br>
<span class="quotelev1">&gt; +	      hwloc_bitmap_from_ith_ulong(obj-&gt;cpuset, 2*id, mask &amp;
</span><br>
<span class="quotelev1">&gt; 0xffffffff);
</span><br>
<span class="quotelev1">&gt; +	      hwloc_bitmap_from_ith_ulong(obj-&gt;cpuset, 2*id+1, mask &gt;&gt; 32);
</span><br>
<span class="quotelev1">&gt;  	      hwloc_insert_object_by_cpuset(topology, obj);
</span><br>
<span class="quotelev1">&gt;  	    }
</span><br>
<span class="quotelev1">&gt;  	    continue;
</span><br>
<span class="quotelev1">&gt; @@ -636,7 +638,8 @@ hwloc_look_windows(struct hwloc_topology *topology)
</span><br>
<span class="quotelev1">&gt;          obj-&gt;cpuset = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev1">&gt;          for (i = 0; i &lt; num; i++) {
</span><br>
<span class="quotelev1">&gt;            hwloc_debug(&quot;%s#%u %d: mask %d:%lx\n&quot;,
</span><br>
<span class="quotelev1">&gt; hwloc_obj_type_string(type), id, i, GroupMask[i].Group,
</span><br>
<span class="quotelev1">&gt; GroupMask[i].Mask);
</span><br>
<span class="quotelev1">&gt; -          hwloc_bitmap_from_ith_ulong(obj-&gt;cpuset, GroupMask[i].Group,
</span><br>
<span class="quotelev1">&gt; GroupMask[i].Mask);
</span><br>
<span class="quotelev1">&gt; +          hwloc_bitmap_from_ith_ulong(obj-&gt;cpuset, 2*GroupMask[i].Group,
</span><br>
<span class="quotelev1">&gt; GroupMask[i].Mask &amp; 0xfffffff);
</span><br>
<span class="quotelev1">&gt; +          hwloc_bitmap_from_ith_ulong(obj-&gt;cpuset,
</span><br>
<span class="quotelev1">&gt; + 2*GroupMask[i].Group+1, GroupMask[i].Mask &gt;&gt; 32);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  	switch (type) {
</span><br>
<p><p>

<br><p>
<p><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0592/lstopo-smp-48core-winx64.txt">lstopo-smp-48core-winx64.txt</a>
</ul>
<!-- attachment="lstopo-smp-48core-winx64.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0592/lstopo-smp-48core-winx64-output.txt">lstopo-smp-48core-winx64-output.txt</a>
</ul>
<!-- attachment="lstopo-smp-48core-winx64-output.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0593.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0591.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>In reply to:</strong> <a href="0589.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0593.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0593.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0595.php">Brice Goglin: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
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
