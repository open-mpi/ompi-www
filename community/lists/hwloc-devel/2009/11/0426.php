<?
$subject_val = "Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 11:18:36 2009" -->
<!-- isoreceived="20091124161836" -->
<!-- sent="Tue, 24 Nov 2009 16:18:36 +0000" -->
<!-- isosent="20091124161836" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]" -->
<!-- id="1259079516.3358.360.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20091114005640.GE4863_at_const.famille.thibault.fr" -->
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
<strong>Date:</strong> 2009-11-24 11:18:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0427.php">Samuel Thibault: "Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
<li><strong>Previous message:</strong> <a href="0425.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>In reply to:</strong> <a href="0396.php">Samuel Thibault: "[hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0427.php">Samuel Thibault: "Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
<li><strong>Reply:</strong> <a href="0427.php">Samuel Thibault: "Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I did a svn update this morning and the code works fine now.
<br>
<p>$ lstopo 
<br>
System(29MB) + P#0
<br>
$
<br>
<p>On Sat, 2009-11-14 at 01:56 +0100, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; So at some point the traversal ends up with a NULL pointer, weird.  What
</span><br>
<span class="quotelev1">&gt; would be useful is output after passing --enable-debug to ./configure .
</span><br>
<p>For reference here is the offending output after building the old
<br>
version with --enable-debug
<br>
<p>$ lstopo
<br>
No cgroup or cpuset found
<br>
No cgroup or cpuset found
<br>
<p><p>&nbsp;* Topology extraction from /proc/cpuinfo *
<br>
<p>0 online processors found, with id max 0
<br>
0
<br>
&nbsp;* Topology summary *
<br>
0 processors (0 max id)
<br>
0 sockets
<br>
0 cores
<br>
<p><p>&nbsp;* CPU cpusets *
<br>
<p>System(29MB HP=0*0kB  )
<br>
ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff,ffffffff
<br>
<p>Computing the system cpuset by ORing all Proc objects
<br>
<p>Applying the system cpuset to all nodes
<br>
<p>Removing empty objects except numa nodes and PCI devices
<br>
Segmentation fault
<br>
$
<br>
<p>/proc/cpuinfo contains:
<br>
<p>Processor	: XScale-IXP42x Family rev 1 (v5l)
<br>
BogoMIPS	: 266.24
<br>
Features	: swp half fastmult edsp 
<br>
CPU implementer	: 0x69
<br>
CPU architecture: 5TE
<br>
CPU variant	: 0x0
<br>
CPU part	: 0x41f
<br>
CPU revision	: 1
<br>
Cache type	: undefined 5
<br>
Cache clean	: undefined 5
<br>
Cache lockdown	: undefined 5
<br>
Cache format	: Harvard
<br>
I size		: 32768
<br>
I assoc		: 32
<br>
I line length	: 32
<br>
I sets		: 32
<br>
D size		: 32768
<br>
D assoc		: 32
<br>
D line length	: 32
<br>
D sets		: 32
<br>
<p>Hardware	: Linksys NSLU2
<br>
Revision	: 0000
<br>
Serial		: 0000000000000000
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0427.php">Samuel Thibault: "Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
<li><strong>Previous message:</strong> <a href="0425.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>In reply to:</strong> <a href="0396.php">Samuel Thibault: "[hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0427.php">Samuel Thibault: "Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
<li><strong>Reply:</strong> <a href="0427.php">Samuel Thibault: "Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
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
