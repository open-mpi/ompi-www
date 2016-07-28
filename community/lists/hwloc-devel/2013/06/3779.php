<?
$subject_val = "Re: [hwloc-devel] plugins inside plugin broken, as expected";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  4 06:30:59 2013" -->
<!-- isoreceived="20130604103059" -->
<!-- sent="Tue, 4 Jun 2013 10:30:54 +0000" -->
<!-- isosent="20130604103054" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] plugins inside plugin broken, as expected" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F658FB0_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20130603181106.GF6912_at_type.youpi.perso.aquilenet.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] plugins inside plugin broken, as expected<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-04 06:30:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3780.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Move to git?"</a>
<li><strong>Previous message:</strong> <a href="3778.php">Brice Goglin: "Re: [hwloc-devel] Move to git?"</a>
<li><strong>In reply to:</strong> <a href="3771.php">Samuel Thibault: "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 3, 2013, at 11:11 AM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; If only plugins and the core use these functions, the application does
</span><br>
<span class="quotelev1">&gt; not have to use -lhwloc-helper at all. If the application uses them
</span><br>
<span class="quotelev1">&gt; (e.g. bitmap functions), then it would have to use -lhwloc-helper,
</span><br>
<span class="quotelev1">&gt; but we can probably as well simply provide the symbols in both
</span><br>
<span class="quotelev1">&gt; libhwloc-helper and libhwloc, so the application only needs -lhwloc.
</span><br>
<p>I don't think you want to go that route -- you can end up with duplicate symbols, and there be dragons there.
<br>
<p><span class="quotelev1">&gt; We
</span><br>
<span class="quotelev1">&gt; can probably do that for the helpers we know for sure they have no
</span><br>
<span class="quotelev1">&gt; state, such as bitmap functions.
</span><br>
<p><p>I don't know if all these elaborate workarounds will be a Good Thing.  You'll basically explore the dynamic linker space, in all of its glory/ugliness, and end up coming up with horrid, confusing workarounds.
<br>
<p>The short version is: issues like this are the nature of DSOs.
<br>
<p>Hwloc has a solution for this problem: build without DSO support, and all works fine.  That should be the advertised solution, IMNSHO.
<br>
<p>Until someone comes up with a more general, system-level solution to the problems of plugins loading plugins (e.g., some kind of flexible runtime linker namespace solution), individual user-level software packages cannot hope to sanely work around what is currently defined as the system model.
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
<li><strong>Next message:</strong> <a href="3780.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Move to git?"</a>
<li><strong>Previous message:</strong> <a href="3778.php">Brice Goglin: "Re: [hwloc-devel] Move to git?"</a>
<li><strong>In reply to:</strong> <a href="3771.php">Samuel Thibault: "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
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
