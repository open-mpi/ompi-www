<?
$subject_val = "Re: [hwloc-users] OpenGL GPU detection code";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 23:51:35 2013" -->
<!-- isoreceived="20130213045135" -->
<!-- sent="Tue, 12 Feb 2013 21:50:07 -0700" -->
<!-- isosent="20130213045007" -->
<!-- name="Kenneth Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] OpenGL GPU detection code" -->
<!-- id="1360731007.4889.15.camel_at_devhost.localdomain" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Kenneth Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-12 23:50:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0864.php">Kenneth Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Previous message:</strong> <a href="0862.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>In reply to:</strong> <a href="0861.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0864.php">Kenneth Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0864.php">Kenneth Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice,
<br>
<p>I've compiled and run hwloc 1.6.1 on my development machine (Scientific
<br>
Linux 6.2) currently with 1) GTX-480 and everything seems to be working
<br>
perfectly. 
<br>
<p>[kalloyd_at_devhost ~]$ lstopo -v
<br>
&lt;snip&gt;
<br>
Bridge Host-&gt;PCI L#0 (P#0 buses=0000:[00-08])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#48 busid=0000:00:03.0 id=8086:340a
<br>
class=0604(PCI_B) buses=0000:[02-02] PCIVendor=&quot;Intel Corporation&quot;
<br>
PCIDevice=&quot;5520/5500/X58 I/O Hub PCI Express Root Port 3&quot;) &quot;Intel
<br>
Corporation 5520/5500/X58 I/O Hub PCI Express Root Port 3&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 10de:06c0 (P#8192 busid=0000:02:00.0 class=0300(VGA)
<br>
PCIVendor=&quot;nVidia Corporation&quot; PCIDevice=&quot;GF100 [GeForce GTX 480]&quot;)
<br>
&quot;nVidia Corporation GF100 [GeForce GTX 480]&quot;
<br>
&lt;snip&gt;
<br>
<p>lstopo --whole-io shows much more detail, including both sides of the
<br>
GTX-480.
<br>
<p>I haven't yet written an OpenMPI, OpenGL program to see how it works
<br>
across a small cluster, but that will give me something to do in my
<br>
spare time ...
<br>
<p>Ken Lloyd
<br>
<p>On Tue, 2013-02-12 at 23:37 +0100, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Stefan (or anybody else interested in hwloc GPU support),
</span><br>
<span class="quotelev1">&gt; Did you have any chance to look at this?
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 01/02/2013 14:57, Brice Goglin a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; I just committed big changes to the display branch (and I also merged
</span><br>
<span class="quotelev2">&gt; &gt; latest trunk changes).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; lstopo will now report things like this:
</span><br>
<span class="quotelev2">&gt; &gt;         PCI 10de:06d1
</span><br>
<span class="quotelev2">&gt; &gt;           GPU L#0 &quot;:0.0&quot;
</span><br>
<span class="quotelev2">&gt; &gt;           GPU L#1 &quot;cuda0&quot;
</span><br>
<span class="quotelev2">&gt; &gt;           GPU L#2 &quot;nvml0&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The changes include:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1) We don't have a &quot;display&quot; specific OS device anymore, it's just
</span><br>
<span class="quotelev2">&gt; &gt; another kind of GPU among cuda, opencl and nvml. The name is the X
</span><br>
<span class="quotelev2">&gt; &gt; server display name. There are string attributes in these new GL GPU OS
</span><br>
<span class="quotelev2">&gt; &gt; devices (lstopo -v):
</span><br>
<span class="quotelev2">&gt; &gt;   GPU L#9 (Backend=GL GPUVendor=&quot;NVIDIA Corporation&quot; GPUModel=&quot;Tesla
</span><br>
<span class="quotelev2">&gt; &gt; C2050&quot;) &quot;:0.2&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2) The gl component is now buildable as a plugin
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3) Given (2), we can't expose internal GL routines in the public API. So
</span><br>
<span class="quotelev2">&gt; &gt; hwloc/gl.h is just made of inline helpers as any other hwloc/foo.h. It
</span><br>
<span class="quotelev2">&gt; &gt; now contains functions to convert between displays (name or port/device)
</span><br>
<span class="quotelev2">&gt; &gt; and hwloc OS devices:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_obj_t hwloc_gl_get_display_osdev_by_port_device(hwloc_topology_t
</span><br>
<span class="quotelev2">&gt; &gt; topology, unsigned port, unsigned device)
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_obj_t hwloc_gl_get_display_osdev_by_name(hwloc_topology_t
</span><br>
<span class="quotelev2">&gt; &gt; topology, const char *name)
</span><br>
<span class="quotelev2">&gt; &gt; int hwloc_gl_get_display_by_osdev(hwloc_topology_t topology, hwloc_obj_t
</span><br>
<span class="quotelev2">&gt; &gt; osdev,unsigned *port, unsigned *device)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If you really need the PCI device, just use osdev-&gt;parent as documented.
</span><br>
<span class="quotelev2">&gt; &gt; If you need the locality, use hwloc_get_non_io_ancestor(topology,
</span><br>
<span class="quotelev2">&gt; &gt; osdev)-&gt;cpuset
</span><br>
<span class="quotelev2">&gt; &gt; See tests/gl.c for examples.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please review hwloc/gl.h and let me know if that works for you. I hope I
</span><br>
<span class="quotelev2">&gt; &gt; used the words port/device/server/screen as expected.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The last thing on my TODO list is to decide is whether we keep the &quot;GL&quot;
</span><br>
<span class="quotelev2">&gt; &gt; name or switch to something among display/X11/X/... for filenames and
</span><br>
<span class="quotelev2">&gt; &gt; function names.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brice
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p>==============
<br>
Kenneth A. Lloyd, Jr.
<br>
CEO - Director of Systems Science
<br>
Watt Systems Technologies Inc.
<br>
Albuquerque, NM US
<br>
<p>This e-mail is covered by the Electronic Communications Privacy Act, 18
<br>
U.S.C. 2510-2521 and is intended only for the addressee named above. It
<br>
may contain privileged or confidential information. If you are not the
<br>
addressee you must not copy, distribute, disclose or use any of the
<br>
information in it. If you have received it in error please delete it and
<br>
immediately notify the sender.
<br>
<p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0863/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0864.php">Kenneth Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Previous message:</strong> <a href="0862.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>In reply to:</strong> <a href="0861.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0864.php">Kenneth Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0864.php">Kenneth Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
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
