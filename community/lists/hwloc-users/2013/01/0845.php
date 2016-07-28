<?
$subject_val = "Re: [hwloc-users] OpenGL GPU detection code";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 08:53:01 2013" -->
<!-- isoreceived="20130130135301" -->
<!-- sent="Wed, 30 Jan 2013 08:05:40 +0100" -->
<!-- isosent="20130130070540" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] OpenGL GPU detection code" -->
<!-- id="5108C644.6090904_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8694BD3C-62DE-43F3-8BF8-5D2E64D13482_at_gmail.com" -->
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
<strong>Date:</strong> 2013-01-30 02:05:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0846.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Previous message:</strong> <a href="0844.php">Samuel Thibault: "Re: [hwloc-users] Hwloc and Electric Fence (libefence)."</a>
<li><strong>In reply to:</strong> <a href="0840.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0847.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0847.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 29/01/2013 17:15, Stefan Eilemann a &#233;crit :
<br>
<span class="quotelev1">&gt; On 29. Jan 2013, at 17:07, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The current plan is to have some OpenCL device info and some OpenGL
</span><br>
<span class="quotelev2">&gt;&gt; device info appear inside GPU PCI devices. That said, I am still not
</span><br>
<span class="quotelev2">&gt;&gt; confident about the current OpenGL thing. The current branch manipulates
</span><br>
<span class="quotelev2">&gt;&gt; what I usually call a display (&quot;:0.0&quot;) which seem rather X than OpenGL
</span><br>
<span class="quotelev2">&gt;&gt; related, but I am not familiar with all this at all anyway.
</span><br>
<span class="quotelev1">&gt; For OpenGL applications on Linux this is the only way how they can identify a single GPU device. Typically the X server is set up such that a screen maps to a device, and the NVCTRL extension provides us with the mapping from X screen to PCI id -- and glX is the GL / X11 glue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One can access multiple GPU devices through a single X Display* connection (&quot;:0&quot;) by selecting different screens (with &quot;1&quot; being the DefaultScreen( display ) for &quot;:0.1&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One might also configure a separate X server for each device with a single screen, or any combination of server (port) / device (screen) mapping.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Windows it's even more complicated, see <a href="http://www.equalizergraphics.com/documentation/parallelOpenGLFAQ.html">http://www.equalizergraphics.com/documentation/parallelOpenGLFAQ.html</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>If there's nothing like :0.0 on windows, is there something equivalent
<br>
to a screen/device couple (0/0 in :0.0)?
<br>
<p>We've been carrying this &quot;gl&quot; name since the beginning of this code, but
<br>
I still feel like all functions in hwloc/gl.h should rather be in
<br>
hwloc/X.h or X11.h or display.h or Xdisplay.h (and functions renamed
<br>
accordingly).
<br>
<p>I am in the process of cleaning the branch code. One thing that will
<br>
change is that instead of having a new software object of type
<br>
&quot;display&quot;, I will just reuse the existing GPU type. Inside a single GPU
<br>
PCI device, we may have a &quot;cuda2&quot; software object, a &quot;nvml1&quot; one, and a
<br>
new one called &quot;:0.3&quot;.
<br>
<p>I am also reducing the number of functions in hwloc/gl.h. We can't call
<br>
internal GL functions from there, because the GL code may be built as a
<br>
plugin. So we'll only have some inlines that basically traverse the list
<br>
of software devices, find the one corresponding to :0.3 and return it.
<br>
Once you have this, implementing the other functions is easy.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0846.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Previous message:</strong> <a href="0844.php">Samuel Thibault: "Re: [hwloc-users] Hwloc and Electric Fence (libefence)."</a>
<li><strong>In reply to:</strong> <a href="0840.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0847.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0847.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
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
