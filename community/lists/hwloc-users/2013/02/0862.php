<?
$subject_val = "Re: [hwloc-users] OpenGL GPU detection code";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 18:36:20 2013" -->
<!-- isoreceived="20130212233620" -->
<!-- sent="Tue, 12 Feb 2013 16:34:53 -0700" -->
<!-- isosent="20130212233453" -->
<!-- name="Kenneth A. Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] OpenGL GPU detection code" -->
<!-- id="000601ce0979$8fdad860$af908920$_at_wattsys.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="511AC43F.2020401_at_inria.fr" -->
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
<strong>From:</strong> Kenneth A. Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-12 18:34:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0863.php">Kenneth Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Previous message:</strong> <a href="0861.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>In reply to:</strong> <a href="0861.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0863.php">Kenneth Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, no.  Came down with the flu. (My wife likes to share.)  Hopefully,
<br>
will try it in the next couple of days.
<br>
<p>Ken Lloyd
<br>
<p>-----Original Message-----
<br>
From: hwloc-users-bounces_at_[hidden]
<br>
[mailto:hwloc-users-bounces_at_[hidden]] On Behalf Of Brice Goglin
<br>
Sent: Tuesday, February 12, 2013 3:38 PM
<br>
To: Stefan Eilemann
<br>
Cc: Hardware locality user list
<br>
Subject: Re: [hwloc-users] OpenGL GPU detection code
<br>
<p>Stefan (or anybody else interested in hwloc GPU support), Did you have any
<br>
chance to look at this?
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
<span class="quotelev1">&gt; server display name. There are string attributes in these new GL GPU 
</span><br>
<span class="quotelev1">&gt; OS devices (lstopo -v):
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
<span class="quotelev1">&gt; 3) Given (2), we can't expose internal GL routines in the public API. 
</span><br>
<span class="quotelev1">&gt; So hwloc/gl.h is just made of inline helpers as any other hwloc/foo.h. 
</span><br>
<span class="quotelev1">&gt; It now contains functions to convert between displays (name or 
</span><br>
<span class="quotelev1">&gt; port/device) and hwloc OS devices:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_obj_t hwloc_gl_get_display_osdev_by_port_device(hwloc_topology_t
</span><br>
<span class="quotelev1">&gt; topology, unsigned port, unsigned device) hwloc_obj_t 
</span><br>
<span class="quotelev1">&gt; hwloc_gl_get_display_osdev_by_name(hwloc_topology_t
</span><br>
<span class="quotelev1">&gt; topology, const char *name)
</span><br>
<span class="quotelev1">&gt; int hwloc_gl_get_display_by_osdev(hwloc_topology_t topology, 
</span><br>
<span class="quotelev1">&gt; hwloc_obj_t osdev,unsigned *port, unsigned *device)
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
<span class="quotelev1">&gt; Please review hwloc/gl.h and let me know if that works for you. I hope 
</span><br>
<span class="quotelev1">&gt; I used the words port/device/server/screen as expected.
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
<p>_______________________________________________
<br>
hwloc-users mailing list
<br>
hwloc-users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0863.php">Kenneth Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Previous message:</strong> <a href="0861.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>In reply to:</strong> <a href="0861.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0863.php">Kenneth Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
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
