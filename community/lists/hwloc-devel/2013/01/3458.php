<?
$subject_val = "Re: [hwloc-devel] v1.7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  7 11:32:34 2013" -->
<!-- isoreceived="20130107163234" -->
<!-- sent="Mon, 07 Jan 2013 17:32:29 +0100" -->
<!-- isosent="20130107163229" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] v1.7" -->
<!-- id="50EAF89D.9010704_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20130107133531.GH12387_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] v1.7<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-07 11:32:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3459.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Previous message:</strong> <a href="3457.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>In reply to:</strong> <a href="3456.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3459.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3459.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 07/01/2013 14:35, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice Goglin, le Mon 31 Dec 2012 10:05:41 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     - They add OS devices such as opencl0p0,
</span><br>
<span class="quotelev1">&gt; I see that platform 0 device 3 would be called opencl3p0. I find it
</span><br>
<span class="quotelev1">&gt; counterintuitive, and would have rather called it opencl0d3, along the
</span><br>
<span class="quotelev1">&gt; line of sda3, eth0:3, socket:2.core:0, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I don't have any strong opinion here. I wasn't convinced by any of my
<br>
ideas when I committed this.
<br>
<p>It looks like most OpenCL machines will have multiple platforms (one for
<br>
CPU and one for GPU/accelerator) so we have to always keep the platform
<br>
in the name. I'll be ok with whichever of XpY or YdX or pYdX or anything
<br>
better.
<br>
<p>Ideally, we could even have a OS device for each OpenCL platform, each
<br>
containing OS devices for devices of the platform. But I'd rather keep a
<br>
single level to match other OS devices.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3459.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Previous message:</strong> <a href="3457.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>In reply to:</strong> <a href="3456.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3459.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3459.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
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
