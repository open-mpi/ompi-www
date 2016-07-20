<?
$subject_val = "Re: [hwloc-users] OpenGL GPU detection code";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 17:37:56 2013" -->
<!-- isoreceived="20130212223756" -->
<!-- sent="Tue, 12 Feb 2013 23:37:51 +0100" -->
<!-- isosent="20130212223751" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] OpenGL GPU detection code" -->
<!-- id="511AC43F.2020401_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="510BC9E1.7090607_at_inria.fr" -->
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
<strong>Date:</strong> 2013-02-12 17:37:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0862.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Previous message:</strong> <a href="0860.php">Christopher Samuel: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>In reply to:</strong> <a href="0848.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0862.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0862.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0863.php">Kenneth Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0866.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0867.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Stefan (or anybody else interested in hwloc GPU support),
<br>
Did you have any chance to look at this?
<br>
Brice
<br>
<p><p><p>Le 01/02/2013 14:57, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; I just committed big changes to the display branch (and I also merged
</span><br>
<span class="quotelev1">&gt; latest trunk changes).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lstopo will now report things like this:
</span><br>
<span class="quotelev1">&gt;         PCI 10de:06d1
</span><br>
<span class="quotelev1">&gt;           GPU L#0 &quot;:0.0&quot;
</span><br>
<span class="quotelev1">&gt;           GPU L#1 &quot;cuda0&quot;
</span><br>
<span class="quotelev1">&gt;           GPU L#2 &quot;nvml0&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The changes include:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) We don't have a &quot;display&quot; specific OS device anymore, it's just
</span><br>
<span class="quotelev1">&gt; another kind of GPU among cuda, opencl and nvml. The name is the X
</span><br>
<span class="quotelev1">&gt; server display name. There are string attributes in these new GL GPU OS
</span><br>
<span class="quotelev1">&gt; devices (lstopo -v):
</span><br>
<span class="quotelev1">&gt;   GPU L#9 (Backend=GL GPUVendor=&quot;NVIDIA Corporation&quot; GPUModel=&quot;Tesla
</span><br>
<span class="quotelev1">&gt; C2050&quot;) &quot;:0.2&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) The gl component is now buildable as a plugin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) Given (2), we can't expose internal GL routines in the public API. So
</span><br>
<span class="quotelev1">&gt; hwloc/gl.h is just made of inline helpers as any other hwloc/foo.h. It
</span><br>
<span class="quotelev1">&gt; now contains functions to convert between displays (name or port/device)
</span><br>
<span class="quotelev1">&gt; and hwloc OS devices:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_obj_t hwloc_gl_get_display_osdev_by_port_device(hwloc_topology_t
</span><br>
<span class="quotelev1">&gt; topology, unsigned port, unsigned device)
</span><br>
<span class="quotelev1">&gt; hwloc_obj_t hwloc_gl_get_display_osdev_by_name(hwloc_topology_t
</span><br>
<span class="quotelev1">&gt; topology, const char *name)
</span><br>
<span class="quotelev1">&gt; int hwloc_gl_get_display_by_osdev(hwloc_topology_t topology, hwloc_obj_t
</span><br>
<span class="quotelev1">&gt; osdev,unsigned *port, unsigned *device)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you really need the PCI device, just use osdev-&gt;parent as documented.
</span><br>
<span class="quotelev1">&gt; If you need the locality, use hwloc_get_non_io_ancestor(topology,
</span><br>
<span class="quotelev1">&gt; osdev)-&gt;cpuset
</span><br>
<span class="quotelev1">&gt; See tests/gl.c for examples.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please review hwloc/gl.h and let me know if that works for you. I hope I
</span><br>
<span class="quotelev1">&gt; used the words port/device/server/screen as expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The last thing on my TODO list is to decide is whether we keep the &quot;GL&quot;
</span><br>
<span class="quotelev1">&gt; name or switch to something among display/X11/X/... for filenames and
</span><br>
<span class="quotelev1">&gt; function names.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0862.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Previous message:</strong> <a href="0860.php">Christopher Samuel: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>In reply to:</strong> <a href="0848.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0862.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0862.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0863.php">Kenneth Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0866.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0867.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
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
