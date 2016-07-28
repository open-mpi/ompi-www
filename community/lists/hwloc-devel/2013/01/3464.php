<?
$subject_val = "Re: [hwloc-devel] v1.7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  7 13:09:58 2013" -->
<!-- isoreceived="20130107180958" -->
<!-- sent="Mon, 07 Jan 2013 19:09:52 +0100" -->
<!-- isosent="20130107180952" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] v1.7" -->
<!-- id="50EB0F70.8060209_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC3808974F_at_xmb-aln-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-01-07 13:09:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3465.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<li><strong>Previous message:</strong> <a href="3463.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>In reply to:</strong> <a href="3461.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3466.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3466.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3469.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 07/01/2013 17:59, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; On Jan 7, 2013, at 9:05 AM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HWLOC_COMPONENTS=^cuda,opencl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; disables cuda *and* opencl, while intuition would have told me that it
</span><br>
<span class="quotelev2">&gt;&gt; disables cuda but enables opencl.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, one would for instance want to be able to do this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HWLOC_COMPONENTS=x86,^cuda,^opencl,nvml
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (Sorry -- am just returning today from winter vacation...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: in OMPI, way back when we implemented this, we considered supporting what you describe.  But then we thought -- wait, why would I ever do that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More specifically: you only ever want to specify exactly what you *do* or *do not* want to be loaded.  Why would you ever list both?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Taking your example: HWLOC_COMPONENTS=foo,^bar,^baz,^yow
</span><br>
<span class="quotelev1">&gt; Is the same as:      HWLOC_COMPONENTS=foo,yow
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So why bother listing ^bar and ^baz?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Generalizing that, why would you ever specify *some* components to exclude and *some* components to exclude?  It seems much cleaner to either exclude some (and therefore include the rest), or include some (and exclude the rest).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Your argument works for selecting among I/O components like
<br>
cuda/nvml/opencl that are all independent (like several components in
<br>
the same framework in OMPI). But it doesn't work when the order matters
<br>
between components that discover the same things. Like &quot;I want x86 first
<br>
because it works better than the solaris component on my machine, and
<br>
then the other usual components for to discover everything else&quot;.
<br>
<p>Remember that HWLOC_COMPONENTS=&quot;foo&quot; means &quot;foo first and then all the
<br>
usual ones that do not conflict&quot;. It's not &quot;only foo&quot;, which should be
<br>
written as &quot;foo,stop&quot; (should be rare since the core excludes all
<br>
conflicting components automatically).
<br>
<p>BTW, if we change the hwloc syntax, we may want to not use ^ to avoid
<br>
confusion with OMPI. ~ and ! could work but some shells may not like them?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3465.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<li><strong>Previous message:</strong> <a href="3463.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>In reply to:</strong> <a href="3461.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3466.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3466.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3469.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
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
