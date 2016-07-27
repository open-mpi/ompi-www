<?
$subject_val = "Re: [hwloc-devel] hwloc at SC09";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 14:57:21 2009" -->
<!-- isoreceived="20091112195721" -->
<!-- sent="Thu, 12 Nov 2009 19:57:11 +0000" -->
<!-- isosent="20091112195711" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc at SC09" -->
<!-- id="1258055831.8456.134.camel_at_alpha" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20091112193054.GD6260_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc at SC09<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-12 14:57:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0395.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1339)"</a>
<li><strong>Previous message:</strong> <a href="0393.php">Brice Goglin: "Re: [hwloc-devel] hwloc at SC09"</a>
<li><strong>In reply to:</strong> <a href="0392.php">Samuel Thibault: "Re: [hwloc-devel] hwloc at SC09"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0396.php">Samuel Thibault: "[hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
<li><strong>Reply:</strong> <a href="0396.php">Samuel Thibault: "[hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2009-11-12 at 20:30 +0100, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Ashley Pittman, le Thu 12 Nov 2009 19:11:11 +0000, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; I just tried to run it on my arm but failed as I only have autoconf
</span><br>
<span class="quotelev2">&gt; &gt; 2.61,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can run ./configure &amp;&amp; make dist on another machine to get an
</span><br>
<span class="quotelev1">&gt; autoconfied tarball ready to unpack/conf/make.
</span><br>
<p>That didn't go so well actually, this is on a NSLU2 arm machine with
<br>
32Mb of ram running debian etch so hardly your target market!  I'm
<br>
leaving for the airport in an hour or two so don't have time to do any
<br>
investigation into the cause today.
<br>
<p>Ashley,
<br>
<p>cam:~/hw&gt; /tmp/bin/lstopo 
<br>
Segmentation fault
<br>
cam:~/hw&gt; gdb /tmp/bin/lstopo
<br>
GNU gdb 6.4.90-debian
<br>
Copyright (C) 2006 Free Software Foundation, Inc.
<br>
GDB is free software, covered by the GNU General Public License, and you
<br>
are
<br>
welcome to change it and/or distribute copies of it under certain
<br>
conditions.
<br>
Type &quot;show copying&quot; to see the conditions.
<br>
There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for
<br>
details.
<br>
This GDB was configured as &quot;arm-linux-gnu&quot;...Using host libthread_db
<br>
library &quot;/lib/libthread_db.so.1&quot;.
<br>
<p>(gdb) run
<br>
Starting program: /tmp/bin/lstopo 
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
hwloc_obj_snprintf (string=0xbedd4b48 &quot;\001&quot;, size=256, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;topology=&lt;value optimized out&gt;, l=0x0, _indexprefix=0x4009bdd8 &quot;#&quot;, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;verbose=1) at traversal.c:177
<br>
177	  hwloc_obj_type_t type = l-&gt;type;
<br>
(gdb) bt
<br>
#0  hwloc_obj_snprintf (string=0xbedd4b48 &quot;\001&quot;, size=256, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;topology=&lt;value optimized out&gt;, l=0x0, _indexprefix=0x4009bdd8 &quot;#&quot;, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;verbose=1) at traversal.c:177
<br>
#1  0x40095924 in print_objects (topology=0x19050, indent=0, obj=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at topology.c:373
<br>
#2  0x40097490 in hwloc_topology_load (topology=0x4001ce14) at
<br>
topology.c:1009
<br>
#3  0x000093e0 in main (argc=1, argv=0x1) at lstopo.c:206
<br>
(gdb)  p l
<br>
$1 = (struct hwloc_obj *) 0x0
<br>
(gdb) 
<br>
<p><p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0395.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1339)"</a>
<li><strong>Previous message:</strong> <a href="0393.php">Brice Goglin: "Re: [hwloc-devel] hwloc at SC09"</a>
<li><strong>In reply to:</strong> <a href="0392.php">Samuel Thibault: "Re: [hwloc-devel] hwloc at SC09"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0396.php">Samuel Thibault: "[hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
<li><strong>Reply:</strong> <a href="0396.php">Samuel Thibault: "[hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
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
