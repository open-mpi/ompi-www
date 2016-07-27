<?
$subject_val = "Re: [hwloc-devel] v1.7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  7 13:18:10 2013" -->
<!-- isoreceived="20130107181810" -->
<!-- sent="Mon, 7 Jan 2013 18:18:05 +0000" -->
<!-- isosent="20130107181805" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] v1.7" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC3808B2B1_at_xmb-aln-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20130107175948.GC18346_at_type.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2013-01-07 13:18:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3466.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<li><strong>Previous message:</strong> <a href="3464.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
<li><strong>In reply to:</strong> <a href="3462.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3467.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3467.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3468.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3470.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 7, 2013, at 12:59 PM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; Because I may not know *everything* that I want. Who knows what
</span><br>
<span class="quotelev1">&gt; proprietary plugin I need to use to discover CPUs, while I know that for
</span><br>
<span class="quotelev1">&gt; GPUs I can use cuda, but I don't want to use nvml.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Taking your example: HWLOC_COMPONENTS=foo,^bar,^baz,yow
</span><br>
<span class="quotelev2">&gt;&gt; Is the same as:      HWLOC_COMPONENTS=foo,yow
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, because there is also the implicit &quot;and the default plugins&quot; after
</span><br>
<span class="quotelev1">&gt; that.
</span><br>
<p>So you're really saying &quot;not bar and baz, but I do want everything else.&quot;
<br>
<p>OMPI's intent was to be simple: specify what you want to *exclude* or what you want to *include*, but you'd never do *both*.
<br>
<p>But maybe you're looking for some additional semantic meaning to your specification, above...?
<br>
<p>COMPONENTS=foo,^bar,^baz,yow
<br>
<p>Could mean:
<br>
<p>- if foo doesn't load / isn't used, it's an error
<br>
- don't load bar
<br>
- don't load baz
<br>
- if yow doesn't load / isn't used, it's an error
<br>
- try to load all other components, but don't warn/error if they don't load / aren't used
<br>
<p>which is more of a tri-state philosophy (yes/no/maybe), rather than a binary philosophy like OMPI's (yes/no).  And that would be fine, if that's what you want (or perhaps you want something different than that).  My point is that the OMPI include/exclude philosophy is quite simple to explain, and it was enough for us.  If something more than that is desired here, then go for it -- but you might want to use something other than ^ so that it's not confused with OMPI's syntax.
<br>
<p>(BTW, we chose to use ^ instead of ! because with !, you'd have to escape it on the command line, e.g., &quot;COMPONENTS=\!foo&quot;, which seemed like a pain, and everyone would get it wrong -- so we went with ^, instead)
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
<li><strong>Next message:</strong> <a href="3466.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<li><strong>Previous message:</strong> <a href="3464.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
<li><strong>In reply to:</strong> <a href="3462.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3467.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3467.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3468.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3470.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
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
