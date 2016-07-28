<?
$subject_val = "Re: [hwloc-users] OpenGL GPU detection code";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 11:15:32 2013" -->
<!-- isoreceived="20130129161532" -->
<!-- sent="Tue, 29 Jan 2013 17:15:33 +0100" -->
<!-- isosent="20130129161533" -->
<!-- name="Stefan Eilemann" -->
<!-- email="eilemann_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] OpenGL GPU detection code" -->
<!-- id="8694BD3C-62DE-43F3-8BF8-5D2E64D13482_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5107F3BE.2020704_at_inria.fr" -->
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
<strong>Date:</strong> 2013-01-29 11:15:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0841.php">cessenat_at_[hidden]: "[hwloc-users] Hwloc and Electric Fence (libefence)."</a>
<li><strong>Previous message:</strong> <a href="0839.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>In reply to:</strong> <a href="0839.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0845.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0845.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 29. Jan 2013, at 17:07, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The current plan is to have some OpenCL device info and some OpenGL
</span><br>
<span class="quotelev1">&gt; device info appear inside GPU PCI devices. That said, I am still not
</span><br>
<span class="quotelev1">&gt; confident about the current OpenGL thing. The current branch manipulates
</span><br>
<span class="quotelev1">&gt; what I usually call a display (&quot;:0.0&quot;) which seem rather X than OpenGL
</span><br>
<span class="quotelev1">&gt; related, but I am not familiar with all this at all anyway.
</span><br>
<p>For OpenGL applications on Linux this is the only way how they can identify a single GPU device. Typically the X server is set up such that a screen maps to a device, and the NVCTRL extension provides us with the mapping from X screen to PCI id -- and glX is the GL / X11 glue.
<br>
<p>One can access multiple GPU devices through a single X Display* connection (&quot;:0&quot;) by selecting different screens (with &quot;1&quot; being the DefaultScreen( display ) for &quot;:0.1&quot;).
<br>
<p>One might also configure a separate X server for each device with a single screen, or any combination of server (port) / device (screen) mapping.
<br>
&nbsp;
<br>
On Windows it's even more complicated, see <a href="http://www.equalizergraphics.com/documentation/parallelOpenGLFAQ.html">http://www.equalizergraphics.com/documentation/parallelOpenGLFAQ.html</a>.
<br>
<p><span class="quotelev1">&gt; Since both OpenCL and OpenCL (and maybe CUDA at some point) may end up
</span><br>
<span class="quotelev1">&gt; containing attributes describing the capabilities of the (same) GPU,
</span><br>
<span class="quotelev1">&gt; we'll need to think about displaying them only once in a common place,
</span><br>
<span class="quotelev1">&gt; but we're not there yet.
</span><br>
<p>At least on CUDA, the device number has no direct mapping to the X11/glX entities other than the indirect mapping through the PCI id, where hwloc seems to be heading.
<br>
<p><p>HTH,
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
<li><strong>Next message:</strong> <a href="0841.php">cessenat_at_[hidden]: "[hwloc-users] Hwloc and Electric Fence (libefence)."</a>
<li><strong>Previous message:</strong> <a href="0839.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>In reply to:</strong> <a href="0839.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0845.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0845.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
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
