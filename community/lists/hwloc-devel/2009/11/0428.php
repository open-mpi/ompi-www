<?
$subject_val = "Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 12:25:18 2009" -->
<!-- isoreceived="20091124172518" -->
<!-- sent="Tue, 24 Nov 2009 17:25:18 +0000" -->
<!-- isosent="20091124172518" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]" -->
<!-- id="1259083518.3358.447.camel_at_alpha" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20091124162716.GC5154_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-24 12:25:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0429.php">Samuel Thibault: "Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
<li><strong>Previous message:</strong> <a href="0427.php">Samuel Thibault: "Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
<li><strong>In reply to:</strong> <a href="0427.php">Samuel Thibault: "Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0429.php">Samuel Thibault: "Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
<li><strong>Reply:</strong> <a href="0429.php">Samuel Thibault: "Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
<li><strong>Reply:</strong> <a href="0430.php">Samuel Thibault: "Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to be absolutely clear, head SVN works but the error is running
<br>
from a version from two weeks ago.
<br>
<p>On Tue, 2009-11-24 at 17:27 +0100, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Ashley Pittman, le Tue 24 Nov 2009 16:18:36 +0000, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt;  * Topology extraction from /proc/cpuinfo *
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 0 online processors found, with id max 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That was it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Removing empty objects except numa nodes and PCI devices
</span><br>
<span class="quotelev2">&gt; &gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not so fine, then :) Could you post a backtrace and the output of
</span><br>
<span class="quotelev1">&gt; gather-topology.sh ?
</span><br>
<p>Do you mean the attached file?  gather-topology.sh failed 
<br>
<p>(gdb) where full
<br>
#0  hwloc_obj_snprintf (string=0xbe913b40 &quot;&quot;, size=256, topology=&lt;value
<br>
optimized out&gt;, l=0x0, _indexprefix=0x4009d670 &quot;#&quot;, verbose=1) at
<br>
traversal.c:177
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type = &lt;value optimized out&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;indexprefix = &lt;value optimized out&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;os_index = &quot;\000\000\000\000\001\000\000\000xx\n@&quot;
<br>
#1  0x400959ac in print_objects (topology=0x19050, indent=0, obj=0x0) at
<br>
topology.c:373
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;line = &quot;\000\000\000\000\001\000\000\000&#239;&#191;&#189;u\000_at_L\000\000\000\002\000
<br>
\000\000&#239;&#191;&#189;]\001@(\\\001@\000\000\000\000\000\000\000\000'C\t_at_L\000\000
<br>
\000\000&#239;&#191;&#189;\001@&#239;&#191;&#189;]\001@(\\\001@&quot;, '\0' &lt;repeats 12 times&gt;, &quot;\001\000\000
<br>
\000\000\000\000\000\001\000\000\000\000\000\000\000L\000\000\000X&#239;&#191;&#189;
<br>
\001_at_D:\t@(\\\001@\001\000\000\000D:\t_at_U\000\000\000$&gt;\t@\0000\t@&lt;I\001
<br>
\000\000&#239;&#191;&#189;\001@\000\000\000\000&#239;&#191;&#189;;\221&#239;&#191;&#189;P&#239;&#191;&#189;\000@&#239;&#191;&#189;t\000@\000\000\000\000\001
<br>
\000\000\000\001\000\000\000\000\000\000\000D:\t@`\235\001\000P\220\001
<br>
\000$U\t@$U\t@`\235\001\000`\235\001\000P\220\001\000\000\000\000\000$U
<br>
\t@\000\000&quot;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cpuset = 0x1 &lt;Address 0x1 out of bounds&gt;
<br>
#2  0x400979c8 in hwloc_topology_load (topology=0x4001ce14) at
<br>
topology.c:1009
<br>
No locals.
<br>
#3  0x000093e4 in main (argc=1, argv=0x1) at lstopo.c:206
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;err = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;verbose_mode = 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;topology = (hwloc_topology_t) 0x401b8000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;filename = 0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;flags = 1073860116
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;merge = -1097777932
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ignorecache = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;callname = 0xfbd0 &quot;pD-&#239;&#191;&#189;&lt;&#239;&#191;&#189;\237&#239;&#191;&#189;\n&#239;&#191;&#189;\217&#239;&#191;&#189;;&#239;&#191;&#189;&#239;&#191;&#189;&#239;&#191;&#189;4 \237&#239;&#191;&#189;40\237&#239;&#191;&#189;\0030b&#239;&#191;&#189;Ca&#239;&#191;&#189;&#239;&#191;&#189;
<br>
\0020\212&#239;&#191;&#189;p\204&#239;&#191;&#189;\b\003P&#239;&#191;&#189;&#239;&#191;&#189;&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;synthetic = 0x1 &lt;Address 0x1 out of bounds&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fsysroot = 0x9270 &quot;&#239;&#191;&#189;O-&#239;&#191;&#189;\001`&#239;&#191;&#189;&#239;&#191;&#189;&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opt = &lt;value optimized out&gt;
<br>
<p><p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>

</pre>
<p>
<p><hr>
<ul>
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0428/arm.tar.gz">arm.tar.gz</a>
</ul>
<!-- attachment="arm.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0429.php">Samuel Thibault: "Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
<li><strong>Previous message:</strong> <a href="0427.php">Samuel Thibault: "Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
<li><strong>In reply to:</strong> <a href="0427.php">Samuel Thibault: "Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0429.php">Samuel Thibault: "Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
<li><strong>Reply:</strong> <a href="0429.php">Samuel Thibault: "Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
<li><strong>Reply:</strong> <a href="0430.php">Samuel Thibault: "Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
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
