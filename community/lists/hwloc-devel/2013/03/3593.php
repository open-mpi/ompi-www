<?
$subject_val = "Re: [hwloc-devel] upcoming hwloc v1.7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 25 19:08:14 2013" -->
<!-- isoreceived="20130325230814" -->
<!-- sent="Tue, 26 Mar 2013 00:08:08 +0100" -->
<!-- isosent="20130325230808" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] upcoming hwloc v1.7" -->
<!-- id="5150D8D8.8090304_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20130322183501.GH6125_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] upcoming hwloc v1.7<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-25 19:08:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3594.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5509)"</a>
<li><strong>Previous message:</strong> <a href="3592.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6.3rc1r5489)"</a>
<li><strong>In reply to:</strong> <a href="3590.php">Samuel Thibault: "Re: [hwloc-devel] upcoming hwloc v1.7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 22/03/2013 19:35, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice Goglin, le Thu 07 Mar 2013 23:59:54 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; We have a specific ABI field in the main component structure
</span><br>
<span class="quotelev2">&gt;&gt; (hwloc_component) to avoid problems in case we break this new ABI.
</span><br>
<span class="quotelev2">&gt;&gt; Breaking it isn't as bad as breaking the main hwloc ABI, but it'd still
</span><br>
<span class="quotelev2">&gt;&gt; be good to not break it in every major release anyway. If you see
</span><br>
<span class="quotelev2">&gt;&gt; anything to change to make things more future-proof, let me know, I'd
</span><br>
<span class="quotelev2">&gt;&gt; rather change it before v1.7.
</span><br>
<span class="quotelev1">&gt; I'm wondering about the hwloc_disc_component_type_e values and excludes.
</span><br>
<span class="quotelev1">&gt; AIUI, GLOBAL is supposed to exclude anything else, while CPU excludes
</span><br>
<span class="quotelev1">&gt; with other CPUs, and ADDITIONAL isn't supposed to exclude with anything
</span><br>
<span class="quotelev1">&gt; except GLOBAL.  I hope I have made it clearer in the documentation.
</span><br>
<span class="quotelev1">&gt; BTW, it seems we're not supposed to set multiple types in the type
</span><br>
<span class="quotelev1">&gt; field; that might be a concern, I'd tend to see the type field as an OR
</span><br>
<span class="quotelev1">&gt; of types.
</span><br>
[...]
<br>
<span class="quotelev1">&gt; I'm wondering whether we should already introduce various types for the
</span><br>
<span class="quotelev1">&gt; various additional plugins we already have: OpenCL, PCI, nvml, gl, cuda.
</span><br>
<span class="quotelev1">&gt; I'd tend to reckon it makes sense to, so that third-party can already
</span><br>
<span class="quotelev1">&gt; exclude them from their plugins, if they ever need to (better provide
</span><br>
<span class="quotelev1">&gt; the feature than wait for people to ask for it next century).
</span><br>
<p>(just replying to this since I applied your other comments).
<br>
<p>I would rather wait and see what happens before adding specific types
<br>
for OPENCL, PCI, ... There won't be many third party plugins, and most
<br>
of them won't need any such conflict anyway (I don't expect
<br>
significantly different implementations of CUDA/NVML; other GL/OpenCL
<br>
implems should add other GPU vendor support instead of conflicting with
<br>
ours).
<br>
<p>PCI is the most likely candidate for such a conflict. A PCI conflict
<br>
means that the platform supports both the &quot;new&quot; PCI discovery and our
<br>
libpci/libpciaccess, and that this new implementation isn't included in
<br>
a platform-specific GLOBAL component (like BGQ). We'll see when that
<br>
happens.
<br>
<p>I'll keep things simple for now and we'll extend the plugin interface
<br>
later if really needed. I improved things a little bit to make it easier
<br>
to override an existing component with a third party plugin (use the
<br>
same name with a higher priority), and we still have the environment
<br>
variable to exclude things too.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3594.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5509)"</a>
<li><strong>Previous message:</strong> <a href="3592.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6.3rc1r5489)"</a>
<li><strong>In reply to:</strong> <a href="3590.php">Samuel Thibault: "Re: [hwloc-devel] upcoming hwloc v1.7"</a>
<!-- nextthread="start" -->
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
