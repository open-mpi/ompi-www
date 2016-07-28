<?
$subject_val = "Re: [hwloc-devel] v1.7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  7 11:52:49 2013" -->
<!-- isoreceived="20130107165249" -->
<!-- sent="Mon, 7 Jan 2013 08:52:41 -0800" -->
<!-- isosent="20130107165241" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] v1.7" -->
<!-- id="0B3BC47E-6EA9-4096-B117-E690BDFC0A15_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20130107140555.GJ12387_at_type.bordeaux.inria.fr" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-07 11:52:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3461.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<li><strong>Previous message:</strong> <a href="3459.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>In reply to:</strong> <a href="3457.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3461.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 7, 2013, at 6:05 AM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice Goglin, le Mon 31 Dec 2012 10:05:41 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; + The HWLOC_COMPONENTS may now start with '^' to only define a list of
</span><br>
<span class="quotelev2">&gt;&gt;   components to exclude.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm finding it not intuitive and not generic enough, I'm wondering how
</span><br>
<span class="quotelev1">&gt; that didn't affect Open-MPI, which as IUI uses this convention.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It means that
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HWLOC_COMPONENTS=^cuda,opencl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; disables cuda *and* opencl,
</span><br>
<p>FWIW: that is the OMPI convention
<br>
<p><p><span class="quotelev1">&gt; while intuition would have told me that it
</span><br>
<span class="quotelev1">&gt; disables cuda but enables opencl.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, one would for instance want to be able to do this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HWLOC_COMPONENTS=x86,^cuda,^opencl,nvml
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To be able to enable x86 before the default linux, but disable cuda and
</span><br>
<span class="quotelev1">&gt; opencl, but enable nvml, as well as all the other usual plugins (without
</span><br>
<span class="quotelev1">&gt; having to know the list, which is important for future extensions).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3461.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<li><strong>Previous message:</strong> <a href="3459.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>In reply to:</strong> <a href="3457.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3461.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
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
