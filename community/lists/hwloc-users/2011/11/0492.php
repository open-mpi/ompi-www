<?
$subject_val = "Re: [hwloc-users] GPU/NIC/CPU locality";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 30 03:33:44 2011" -->
<!-- isoreceived="20111130083344" -->
<!-- sent="Wed, 30 Nov 2011 08:44:33 +0100" -->
<!-- isosent="20111130074433" -->
<!-- name="Stefan Eilemann" -->
<!-- email="eilemann_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] GPU/NIC/CPU locality" -->
<!-- id="2C7BC62D-34DA-41B0-A028-F1F8395B2978_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4ED4B5B8.7010401_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] GPU/NIC/CPU locality<br>
<strong>From:</strong> Stefan Eilemann (<em>eilemann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-30 02:44:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0493.php">Brice Goglin: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>Previous message:</strong> <a href="0491.php">Christopher Samuel: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>In reply to:</strong> <a href="0474.php">Brice Goglin: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0493.php">Brice Goglin: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>Reply:</strong> <a href="0493.php">Brice Goglin: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 29. Nov 2011, at 11:36, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Le 29/11/2011 09:57, Stefan Eilemann a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I use them mostly with OpenGL ('XOpenDisplay(&quot;:0.&lt;gpu&gt;&quot;)' and RDMA in Equalizer/Collage (see links in signature). Is there a straight way to associate the GPUs with the corresponding X screen? I guess at least the path through the Xorg PCI ID should work, but it would be nice to have that in hwloc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I need to think about it, it doesn't look very easy to implement.
</span><br>
<p>Let me know if I can help. We would be quite interested in this feature. 
<br>
<p>Ideally there should be the following fields. I'll use the Equalizer terms, but feel free to use others if you don't like them:
<br>
<p>- port: the X server number or unused (Windows/Mac)
<br>
- GL device: The X screen, affinity device (Windows) or CGL renderer ID (OS X)
<br>
- Cuda/OpenCL device
<br>
<p>The latter is interesting to establish a mapping between GL and Cuda device numbers, which are not necessarily symmetric.
<br>
<p><p>Cheers,
<br>
<p>Stefan.
<br>
<p><pre>
-- 
<a href="http://www.eyescale.ch">http://www.eyescale.ch</a>
<a href="http://www.equalizergraphics.com">http://www.equalizergraphics.com</a>
<a href="http://www.linkedin.com/in/eilemann">http://www.linkedin.com/in/eilemann</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0493.php">Brice Goglin: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>Previous message:</strong> <a href="0491.php">Christopher Samuel: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>In reply to:</strong> <a href="0474.php">Brice Goglin: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0493.php">Brice Goglin: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>Reply:</strong> <a href="0493.php">Brice Goglin: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
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
