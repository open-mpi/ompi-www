<?
$subject_val = "Re: [hwloc-users] OpenGL GPU detection code";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 09:47:17 2013" -->
<!-- isoreceived="20130130144717" -->
<!-- sent="Wed, 30 Jan 2013 15:47:10 +0100" -->
<!-- isosent="20130130144710" -->
<!-- name="Stefan Eilemann" -->
<!-- email="eilemann_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] OpenGL GPU detection code" -->
<!-- id="8D740A39-B297-4FEF-AED6-82EE7CDDC201_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5108C644.6090904_at_inria.fr" -->
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
<strong>From:</strong> Stefan Eilemann (<em>eilemann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-30 09:47:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2013/02/0848.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Previous message:</strong> <a href="0846.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>In reply to:</strong> <a href="0845.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0846.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 30. Jan 2013, at 8:05, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; If there's nothing like :0.0 on windows, is there something equivalent
</span><br>
<span class="quotelev1">&gt; to a screen/device couple (0/0 in :0.0)?
</span><br>
<p>Yes, there is. Since there are no window servers there, having a device is enough. How that maps to a physical device in vendor-dependent. For NVidia, there is WGL_NV_gpu_affinity which enumerates GPUs, which we'll use in Equalizer to allocate a affinity DC for OpenGL.
<br>
<p><p>HTH,
<br>
<p>Stefan.
<br>
D-- 
<br>
<a href="http://www.eyescale.ch">http://www.eyescale.ch</a>
<br>
<a href="https://github.com/Eyescale/">https://github.com/Eyescale/</a>
<br>
<a href="http://www.linkedin.com/in/eilemann">http://www.linkedin.com/in/eilemann</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2013/02/0848.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Previous message:</strong> <a href="0846.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>In reply to:</strong> <a href="0845.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0846.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
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
