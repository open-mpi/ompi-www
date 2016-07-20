<?
$subject_val = "Re: [hwloc-users] OpenGL GPU detection code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 15 02:54:49 2013" -->
<!-- isoreceived="20130215075449" -->
<!-- sent="Fri, 15 Feb 2013 08:54:42 +0100" -->
<!-- isosent="20130215075442" -->
<!-- name="Stefan Eilemann" -->
<!-- email="eilemann_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] OpenGL GPU detection code" -->
<!-- id="D7222E36-FBC6-405A-BF10-DEE7B7165A93_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="511D6192.1020200_at_inria.fr" -->
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
<strong>Date:</strong> 2013-02-15 02:54:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0872.php">Erik Schnetter: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Previous message:</strong> <a href="0870.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>In reply to:</strong> <a href="0870.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0873.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0873.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 14. Feb 2013, at 23:13, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; if (!XNVCTRLIsNvScreen(display, screen))
</span><br>
<span class="quotelev1">&gt;  continue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (and this also works if the vesa screen isn't the last one).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I think we're good here? I am going to commit things tomorrow.
</span><br>
<p>Yes, with this addition it looks watertight. Thanks for your effort and support.
<br>
<p><span class="quotelev1">&gt; By the way, did you check hwloc/gl.h to see if it offers what you need?
</span><br>
<p>Yes, we've integrated it into Equalizer and things look peachy.
<br>
<p><span class="quotelev1">&gt; Still no idea if we should call all this &quot;gl&quot; or &quot;display&quot; or &quot;X11&quot; or
</span><br>
<span class="quotelev1">&gt; something else?
</span><br>
<p>I would still vote for GL, with possible extensions for WGL_NV_gpu_affinity and WGL_AMD_gpu_association devices on Windows, as well as CGL renderer IDs on OS X.
<br>
<p><p>My 2c,
<br>
<p>Stefan.
<br>
<pre>
-- 
<a href="http://www.eyescale.ch">http://www.eyescale.ch</a>
<a href="https://github.com/Eyescale/">https://github.com/Eyescale/</a>
<a href="http://www.linkedin.com/in/eilemann">http://www.linkedin.com/in/eilemann</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0872.php">Erik Schnetter: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>Previous message:</strong> <a href="0870.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>In reply to:</strong> <a href="0870.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0873.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0873.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
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
