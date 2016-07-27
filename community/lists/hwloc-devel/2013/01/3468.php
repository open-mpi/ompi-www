<?
$subject_val = "Re: [hwloc-devel] v1.7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  7 13:27:11 2013" -->
<!-- isoreceived="20130107182711" -->
<!-- sent="Mon, 7 Jan 2013 19:27:04 +0100" -->
<!-- isosent="20130107182704" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] v1.7" -->
<!-- id="20130107182704.GB5998_at_type.youpi.perso.aquilenet.fr" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-07 13:27:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3469.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Previous message:</strong> <a href="3467.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<li><strong>In reply to:</strong> <a href="3465.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3470.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres (jsquyres), le Mon 07 Jan 2013 19:19:15 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Jan 7, 2013, at 12:59 PM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Because I may not know *everything* that I want. Who knows what
</span><br>
<span class="quotelev2">&gt; &gt; proprietary plugin I need to use to discover CPUs, while I know that for
</span><br>
<span class="quotelev2">&gt; &gt; GPUs I can use cuda, but I don't want to use nvml.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Taking your example: HWLOC_COMPONENTS=foo,^bar,^baz,yow
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is the same as:      HWLOC_COMPONENTS=foo,yow
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; No, because there is also the implicit &quot;and the default plugins&quot; after
</span><br>
<span class="quotelev2">&gt; &gt; that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So you're really saying &quot;not bar and baz, but I do want everything else.&quot;
</span><br>
<p>I'm also saying &quot;foo and yow before everything else&quot;, which as Brice
<br>
mentioned, does matter.
<br>
<p><span class="quotelev1">&gt; - if foo doesn't load / isn't used, it's an error
</span><br>
<span class="quotelev1">&gt; - don't load bar
</span><br>
<span class="quotelev1">&gt; - don't load baz
</span><br>
<span class="quotelev1">&gt; - if yow doesn't load / isn't used, it's an error
</span><br>
<span class="quotelev1">&gt; - try to load all other components, but don't warn/error if they don't load / aren't used
</span><br>
<p>We don't imply erroring out. Components never error out, they just don't
<br>
discover anything :)
<br>
<p>What we however have is the ordering.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3469.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Previous message:</strong> <a href="3467.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<li><strong>In reply to:</strong> <a href="3465.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3470.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
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
