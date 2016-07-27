<?
$subject_val = "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 19 19:35:17 2013" -->
<!-- isoreceived="20130419233517" -->
<!-- sent="Sat, 20 Apr 2013 01:35:11 +0200" -->
<!-- isosent="20130419233511" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Compiling hwloc 1.7 with NV support" -->
<!-- id="5171D4AF.6070503_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5171CF36.8010408_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Compiling hwloc 1.7 with NV support<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-19 19:35:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3631.php">Brice Goglin: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<li><strong>Previous message:</strong> <a href="3629.php">Brice Goglin: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<li><strong>In reply to:</strong> <a href="3629.php">Brice Goglin: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3631.php">Brice Goglin: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<li><strong>Reply:</strong> <a href="3631.php">Brice Goglin: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 20/04/2013 01:11, Brice Goglin a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Le 20/04/2013 00:56, Jiri Hladky a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt; topology-gl.c: In function 'hwloc_gl_query_devices':
</span><br>
<span class="quotelev2">&gt;&gt; topology-gl.c:91:41: error: 'NV_CTRL_PCI_DOMAIN' undeclared (first use
</span><br>
<span class="quotelev2">&gt;&gt; in this function)
</span><br>
<span class="quotelev2">&gt;&gt; topology-gl.c:91:41: note: each undeclared identifier is reported only
</span><br>
<span class="quotelev2">&gt;&gt; once for each function it appears in
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [topology-gl.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/tmp/hwloc-1.7/src'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/tmp/hwloc-1.7/src'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Indeed, there is no NV_CTRL_PCI_DOMAIN MACRO defined in NVCtrl header
</span><br>
<span class="quotelev2">&gt;&gt; files:
</span><br>
<span class="quotelev1">&gt; Old CUDA versions didn't have a similar domain macro either, maybe
</span><br>
<span class="quotelev1">&gt; NVIDIA did the same mistake with old nvml.
</span><br>
<p>I meant nvctrl, not nvml.
<br>
<p>Indeed, it was added in release 190.18.5
<br>
This patch should help.
<br>
Brice
<br>
<p><p><p>Index: src/topology-gl.c
<br>
===================================================================
<br>
--- src/topology-gl.c	(r&#195;&#169;vision 5551)
<br>
+++ src/topology-gl.c	(copie de travail)
<br>
@@ -85,12 +85,16 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gpu_number = ptr_binary_data[1];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(ptr_binary_data);
<br>
&nbsp;
<br>
+#ifdef NV_CTRL_PCI_DOMAIN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Gets the ID's of the GPU defined by gpu_number
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* For further details, see the &lt;NVCtrl/NVCtrlLib.h&gt; */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;err = XNVCTRLQueryTargetAttribute(display, NV_CTRL_TARGET_TYPE_GPU, gpu_number, 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NV_CTRL_PCI_DOMAIN, &amp;nv_ctrl_pci_domain);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!err)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
+#else
<br>
+      nv_ctrl_pci_domain = 0;
<br>
+#endif
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;err = XNVCTRLQueryTargetAttribute(display, NV_CTRL_TARGET_TYPE_GPU, gpu_number, 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NV_CTRL_PCI_BUS, &amp;nv_ctrl_pci_bus);
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3631.php">Brice Goglin: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<li><strong>Previous message:</strong> <a href="3629.php">Brice Goglin: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<li><strong>In reply to:</strong> <a href="3629.php">Brice Goglin: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3631.php">Brice Goglin: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<li><strong>Reply:</strong> <a href="3631.php">Brice Goglin: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
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
