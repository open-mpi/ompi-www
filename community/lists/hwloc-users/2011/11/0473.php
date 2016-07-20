<?
$subject_val = "Re: [hwloc-users] GPU/NIC/CPU locality";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 29 03:58:04 2011" -->
<!-- isoreceived="20111129085804" -->
<!-- sent="Tue, 29 Nov 2011 09:57:56 +0100" -->
<!-- isosent="20111129085756" -->
<!-- name="Stefan Eilemann" -->
<!-- email="eilemann_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] GPU/NIC/CPU locality" -->
<!-- id="E6079E48-22C9-4805-8E76-AD08AC41E1AB_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4ED49BAB.3020805_at_inria.fr" -->
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
<strong>Date:</strong> 2011-11-29 03:57:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0474.php">Brice Goglin: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>Previous message:</strong> <a href="0472.php">Brice Goglin: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>In reply to:</strong> <a href="0472.php">Brice Goglin: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0474.php">Brice Goglin: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>Reply:</strong> <a href="0474.php">Brice Goglin: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>Reply:</strong> <a href="0483.php">Guy Streeter: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bonjour Brice,
<br>
<p>On 29. Nov 2011, at 9:45, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; hwloc 1.3 already has support for PCI device detection. These new
</span><br>
<span class="quotelev1">&gt; objects contain a &quot;class&quot; field that can help you know if it's a NIC/GPU/...
</span><br>
<p>Ok, time to upgrade my installation. The cluster has RHEL6.1 which ships with an older version.
<br>
<p><span class="quotelev1">&gt; How are you using GPUs and NICs in your software? Which libraries or
</span><br>
<span class="quotelev1">&gt; ways do you use to access them?
</span><br>
<p>I use them mostly with OpenGL ('XOpenDisplay(&quot;:0.&lt;gpu&gt;&quot;)' and RDMA in Equalizer/Collage (see links in signature). Is there a straight way to associate the GPUs with the corresponding X screen? I guess at least the path through the Xorg PCI ID should work, but it would be nice to have that in hwloc.
<br>
<p>We also use Cuda/OpenMPI here, but I guess this will be easier to support. I'll look into the latest source of lstopo to see how it's done.
<br>
<p><p>BTW, I recently created a library for ZeroConf GPU discovery[1], this might be of interest for you.
<br>
<p><p>Cheers,
<br>
<p>Stefan.
<br>
<p>[1] <a href="http://www.equalizergraphics.com/gpu-sd">http://www.equalizergraphics.com/gpu-sd</a>
<br>
<pre>
-- 
<a href="http://www.eyescale.ch">http://www.eyescale.ch</a>
<a href="http://www.equalizergraphics.com">http://www.equalizergraphics.com</a>
<a href="http://www.linkedin.com/in/eilemann">http://www.linkedin.com/in/eilemann</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0474.php">Brice Goglin: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>Previous message:</strong> <a href="0472.php">Brice Goglin: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>In reply to:</strong> <a href="0472.php">Brice Goglin: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0474.php">Brice Goglin: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>Reply:</strong> <a href="0474.php">Brice Goglin: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>Reply:</strong> <a href="0483.php">Guy Streeter: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
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
