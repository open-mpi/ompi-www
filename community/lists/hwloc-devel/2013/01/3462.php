<?
$subject_val = "Re: [hwloc-devel] v1.7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  7 12:59:52 2013" -->
<!-- isoreceived="20130107175952" -->
<!-- sent="Mon, 7 Jan 2013 18:59:48 +0100" -->
<!-- isosent="20130107175948" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] v1.7" -->
<!-- id="20130107175948.GC18346_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-07 12:59:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3463.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Previous message:</strong> <a href="3461.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<li><strong>In reply to:</strong> <a href="3461.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3463.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3463.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3465.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres (jsquyres), le Mon 07 Jan 2013 18:01:53 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; More specifically: you only ever want to specify exactly what you *do* or *do not* want to be loaded.  Why would you ever list both?
</span><br>
<p>Because I may not know *everything* that I want. Who knows what
<br>
proprietary plugin I need to use to discover CPUs, while I know that for
<br>
GPUs I can use cuda, but I don't want to use nvml.
<br>
<p><span class="quotelev1">&gt; Taking your example: HWLOC_COMPONENTS=foo,^bar,^baz,yow
</span><br>
<span class="quotelev1">&gt; Is the same as:      HWLOC_COMPONENTS=foo,yow
</span><br>
<p>No, because there is also the implicit &quot;and the default plugins&quot; after
<br>
that.
<br>
<p><span class="quotelev1">&gt; So why bother listing ^bar and ^baz?
</span><br>
<p>Because I know I want to avoid them. But I don't know which other ones
<br>
are loaded by default and should have.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3463.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Previous message:</strong> <a href="3461.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<li><strong>In reply to:</strong> <a href="3461.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3463.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3463.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3465.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
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
