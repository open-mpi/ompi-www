<?
$subject_val = "Re: [hwloc-devel] v1.7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  7 13:40:05 2013" -->
<!-- isoreceived="20130107184005" -->
<!-- sent="Mon, 07 Jan 2013 19:40:00 +0100" -->
<!-- isosent="20130107184000" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] v1.7" -->
<!-- id="50EB1680.4000701_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC3808B2B1_at_xmb-aln-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-01-07 13:40:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3471.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Previous message:</strong> <a href="3469.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>In reply to:</strong> <a href="3465.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3464.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 07/01/2013 19:18, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; On Jan 7, 2013, at 12:59 PM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Because I may not know *everything* that I want. Who knows what
</span><br>
<span class="quotelev2">&gt;&gt; proprietary plugin I need to use to discover CPUs, while I know that for
</span><br>
<span class="quotelev2">&gt;&gt; GPUs I can use cuda, but I don't want to use nvml.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Taking your example: HWLOC_COMPONENTS=foo,^bar,^baz,yow
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is the same as:      HWLOC_COMPONENTS=foo,yow
</span><br>
<span class="quotelev2">&gt;&gt; No, because there is also the implicit &quot;and the default plugins&quot; after
</span><br>
<span class="quotelev2">&gt;&gt; that.
</span><br>
<span class="quotelev1">&gt; So you're really saying &quot;not bar and baz, but I do want everything else.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI's intent was to be simple: specify what you want to *exclude* or what you want to *include*, but you'd never do *both*.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Another difference with OMPI is that OMPI has many different frameworks
<br>
with usually few components in each of them. And OMPI can exclude in
<br>
some framework and include in some others.
<br>
<p>hwloc doesn't have multiple frameworks (actually, there's another one
<br>
for libxml/nolibxml2 XML backends). All discovery components are at the
<br>
same level (and I don't think we want to split the list into multiple
<br>
frameworks).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3471.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Previous message:</strong> <a href="3469.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>In reply to:</strong> <a href="3465.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3464.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
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
