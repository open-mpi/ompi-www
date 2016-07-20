<?
$subject_val = "Re: [hwloc-users] OpenGL GPU detection code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 08:57:58 2013" -->
<!-- isoreceived="20130201135758" -->
<!-- sent="Fri, 01 Feb 2013 14:57:53 +0100" -->
<!-- isosent="20130201135753" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] OpenGL GPU detection code" -->
<!-- id="510BC9E1.7090607_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="69340C55-37FB-413B-A631-BC62E1E3409E_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] OpenGL GPU detection code<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-01 08:57:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0849.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2013/01/0847.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2013/01/0846.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0849.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0849.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0861.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just committed big changes to the display branch (and I also merged
<br>
latest trunk changes).
<br>
<p>lstopo will now report things like this:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 10de:06d1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GPU L#0 &quot;:0.0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GPU L#1 &quot;cuda0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GPU L#2 &quot;nvml0&quot;
<br>
<p><p>The changes include:
<br>
<p>1) We don't have a &quot;display&quot; specific OS device anymore, it's just
<br>
another kind of GPU among cuda, opencl and nvml. The name is the X
<br>
server display name. There are string attributes in these new GL GPU OS
<br>
devices (lstopo -v):
<br>
&nbsp;&nbsp;GPU L#9 (Backend=GL GPUVendor=&quot;NVIDIA Corporation&quot; GPUModel=&quot;Tesla
<br>
C2050&quot;) &quot;:0.2&quot;
<br>
<p>2) The gl component is now buildable as a plugin
<br>
<p>3) Given (2), we can't expose internal GL routines in the public API. So
<br>
hwloc/gl.h is just made of inline helpers as any other hwloc/foo.h. It
<br>
now contains functions to convert between displays (name or port/device)
<br>
and hwloc OS devices:
<br>
<p>hwloc_obj_t hwloc_gl_get_display_osdev_by_port_device(hwloc_topology_t
<br>
topology, unsigned port, unsigned device)
<br>
hwloc_obj_t hwloc_gl_get_display_osdev_by_name(hwloc_topology_t
<br>
topology, const char *name)
<br>
int hwloc_gl_get_display_by_osdev(hwloc_topology_t topology, hwloc_obj_t
<br>
osdev,unsigned *port, unsigned *device)
<br>
<p>If you really need the PCI device, just use osdev-&gt;parent as documented.
<br>
If you need the locality, use hwloc_get_non_io_ancestor(topology,
<br>
osdev)-&gt;cpuset
<br>
See tests/gl.c for examples.
<br>
<p>Please review hwloc/gl.h and let me know if that works for you. I hope I
<br>
used the words port/device/server/screen as expected.
<br>
<p>The last thing on my TODO list is to decide is whether we keep the &quot;GL&quot;
<br>
name or switch to something among display/X11/X/... for filenames and
<br>
function names.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0849.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2013/01/0847.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2013/01/0846.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0849.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0849.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0861.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
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
