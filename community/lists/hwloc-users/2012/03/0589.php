<?
$subject_val = "Re: [hwloc-users] Problems on SMP with 48 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 13:55:01 2012" -->
<!-- isoreceived="20120313175501" -->
<!-- sent="Tue, 13 Mar 2012 18:54:42 +0100" -->
<!-- isosent="20120313175442" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Problems on SMP with 48 cores" -->
<!-- id="4F5F89E2.3000603_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="02b101cd0133$0335a6a0$09a0f3e0$_at_gmail.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-13 13:54:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0590.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0588.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>In reply to:</strong> <a href="0580.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0592.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0592.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 13/03/2012 17:04, Hartmut Kaiser a &#233;crit :
<br>
<span class="quotelev3">&gt;&gt;&gt; But the problems I was seeing were not MSVC specific. It's a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proliferation of arcane (non-POSIX) function use (like strcasecmp,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; etc.) missing use of HAVE_UNISTD_H, HAVE_STRINGS_H to wrap
</span><br>
<span class="quotelev3">&gt;&gt;&gt; non-standard headers, unsafe mixing of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int32&lt;-&gt;int64 data types, reliance on int (and other types) having a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; certain bit-size, totally unsafe shift operations, wide use of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (non-C-standard) gcc extensions, etc. Should I go on?
</span><br>
<span class="quotelev1">&gt; More investigation shows that the code currently assumes group (and
</span><br>
<span class="quotelev1">&gt; processor) masks to be 32 bit, which is not true on 64 bit systems. For
</span><br>
<span class="quotelev1">&gt; instance this (topology-windows.c: line 643):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     hwloc_bitmap_from_ith_ulong(obj-&gt;cpuset, GroupMask[i].Group,
</span><br>
<span class="quotelev1">&gt; GroupMask[i].Mask);
</span><br>
<p>Try applying something like the patch below. Totally untested obviously,
<br>
but we'll see if that starts improving lstopo.
<br>
<p>Brice
<br>
<p><p>diff --git a/src/topology-windows.c b/src/topology-windows.c
<br>
index 55821a4..94e5073 100644
<br>
--- a/src/topology-windows.c
<br>
+++ b/src/topology-windows.c
<br>
@@ -520,7 +520,8 @@ hwloc_look_windows(struct hwloc_topology *topology)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;obj = hwloc_alloc_setup_object(type, id);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;obj-&gt;cpuset = hwloc_bitmap_alloc();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_debug(&quot;%s#%u mask %lx\n&quot;, hwloc_obj_type_string(type), id, procInfo[i].ProcessorMask);
<br>
-	hwloc_bitmap_from_ulong(obj-&gt;cpuset, procInfo[i].ProcessorMask);
<br>
+	hwloc_bitmap_from_ulong(obj-&gt;cpuset, procInfo[i].ProcessorMask &amp; 0xffffffff);
<br>
+	hwloc_bitmap_from_ith_ulong(obj-&gt;cpuset, 1, procInfo[i].ProcessorMask &gt;&gt; 32);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch (type) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case HWLOC_OBJ_NODE:
<br>
@@ -622,7 +623,8 @@ hwloc_look_windows(struct hwloc_topology *topology)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mask = procInfo-&gt;Group.GroupInfo[id].ActiveProcessorMask;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_debug(&quot;group %u %d cpus mask %lx\n&quot;, id,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;procInfo-&gt;Group.GroupInfo[id].ActiveProcessorCount, mask);
<br>
-	      hwloc_bitmap_from_ith_ulong(obj-&gt;cpuset, id, mask);
<br>
+	      hwloc_bitmap_from_ith_ulong(obj-&gt;cpuset, 2*id, mask &amp; 0xffffffff);
<br>
+	      hwloc_bitmap_from_ith_ulong(obj-&gt;cpuset, 2*id+1, mask &gt;&gt; 32);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_insert_object_by_cpuset(topology, obj);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
@@ -636,7 +638,8 @@ hwloc_look_windows(struct hwloc_topology *topology)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;obj-&gt;cpuset = hwloc_bitmap_alloc();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; num; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_debug(&quot;%s#%u %d: mask %d:%lx\n&quot;, hwloc_obj_type_string(type), id, i, GroupMask[i].Group, GroupMask[i].Mask);
<br>
-          hwloc_bitmap_from_ith_ulong(obj-&gt;cpuset, GroupMask[i].Group, GroupMask[i].Mask);
<br>
+          hwloc_bitmap_from_ith_ulong(obj-&gt;cpuset, 2*GroupMask[i].Group, GroupMask[i].Mask &amp; 0xfffffff);
<br>
+          hwloc_bitmap_from_ith_ulong(obj-&gt;cpuset, 2*GroupMask[i].Group+1, GroupMask[i].Mask &gt;&gt; 32);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch (type) {
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0590.php">Samuel Thibault: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0588.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>In reply to:</strong> <a href="0580.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0592.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Reply:</strong> <a href="0592.php">Hartmut Kaiser: "Re: [hwloc-users] Problems on SMP with 48 cores"</a>
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
