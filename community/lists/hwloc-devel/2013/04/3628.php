<?
$subject_val = "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 19 19:03:39 2013" -->
<!-- isoreceived="20130419230339" -->
<!-- sent="Sat, 20 Apr 2013 01:03:33 +0200" -->
<!-- isosent="20130419230333" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Compiling hwloc 1.7 with NV support" -->
<!-- id="20130419230333.GM6218_at_type.youpi.perso.aquilenet.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CALT_uBQa=7Z07PzL9Q4ekRwZhjJ00h8ZJdbnQrUw8v=Y8XTv2g_at_mail.gmail.com" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-19 19:03:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3629.php">Brice Goglin: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<li><strong>Previous message:</strong> <a href="3627.php">Jiri Hladky: "[hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<li><strong>In reply to:</strong> <a href="3627.php">Jiri Hladky: "[hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3629.php">Brice Goglin: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Jiri Hladky, le Sat 20 Apr 2013 00:57:18 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; topology-gl.c: In function 'hwloc_gl_query_devices':
</span><br>
<span class="quotelev1">&gt; topology-gl.c:91:41: error: 'NV_CTRL_PCI_DOMAIN' undeclared (first use in this
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed, there is no NV_CTRL_PCI_DOMAIN MACRO defined in NVCtrl header files:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; grep NV_CTRL_PCI_DOMAIN /usr/include/NVCtrl/NVCtrl*
</span><br>
<p>Which version of nvctrl do you have? I have it in Debian in version
<br>
304.88-1, at least. I guess older versions don't have it and we should
<br>
check against it.
<br>
<p><span class="quotelev1">&gt; yum whatprovides &quot;*/cuda_runtime_api.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but without any luck. So it seems I can get rpm only with PCI and GL support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What's your opinion on it? Do you know what other Linux&#160; distros are doing?
</span><br>
<p>In debian cuda_runtime_api.h is provided by the non-free nvidia-cuda-dev
<br>
package.  Is cuda really packaged in RedHat?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3629.php">Brice Goglin: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<li><strong>Previous message:</strong> <a href="3627.php">Jiri Hladky: "[hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<li><strong>In reply to:</strong> <a href="3627.php">Jiri Hladky: "[hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3629.php">Brice Goglin: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
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
