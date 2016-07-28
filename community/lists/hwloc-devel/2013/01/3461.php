<?
$subject_val = "Re: [hwloc-devel] v1.7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  7 12:00:04 2013" -->
<!-- isoreceived="20130107170004" -->
<!-- sent="Mon, 7 Jan 2013 16:59:58 +0000" -->
<!-- isosent="20130107165958" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] v1.7" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC3808974F_at_xmb-aln-x01.cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-07 11:59:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3462.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Previous message:</strong> <a href="3460.php">Ralph Castain: "Re: [hwloc-devel] v1.7"</a>
<li><strong>In reply to:</strong> <a href="3457.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3462.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3462.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3464.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 7, 2013, at 9:05 AM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; HWLOC_COMPONENTS=^cuda,opencl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; disables cuda *and* opencl, while intuition would have told me that it
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
<p><p>(Sorry -- am just returning today from winter vacation...)
<br>
<p>FWIW: in OMPI, way back when we implemented this, we considered supporting what you describe.  But then we thought -- wait, why would I ever do that?
<br>
<p>More specifically: you only ever want to specify exactly what you *do* or *do not* want to be loaded.  Why would you ever list both?
<br>
<p>Taking your example: HWLOC_COMPONENTS=foo,^bar,^baz,^yow
<br>
Is the same as:      HWLOC_COMPONENTS=foo,yow
<br>
<p>So why bother listing ^bar and ^baz?
<br>
<p>Generalizing that, why would you ever specify *some* components to exclude and *some* components to exclude?  It seems much cleaner to either exclude some (and therefore include the rest), or include some (and exclude the rest).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3462.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Previous message:</strong> <a href="3460.php">Ralph Castain: "Re: [hwloc-devel] v1.7"</a>
<li><strong>In reply to:</strong> <a href="3457.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3462.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3462.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3464.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
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
