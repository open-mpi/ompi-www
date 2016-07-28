<?
$subject_val = "Re: [OMPI devel] v1.7.5rc1 posted";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 10:34:00 2014" -->
<!-- isoreceived="20140303153400" -->
<!-- sent="Mon, 3 Mar 2014 15:33:59 +0000" -->
<!-- isosent="20140303153359" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.7.5rc1 posted" -->
<!-- id="FC644DD3-B7AC-4823-B174-2D29DF1781A8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53140534.8050106_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.7.5rc1 posted<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-03 10:33:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14274.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>Previous message:</strong> <a href="14272.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>In reply to:</strong> <a href="14263.php">Orion Poplawski: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14287.php">Marco Atzeri: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 2, 2014, at 8:29 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We're not honoring DESTDIR here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make  install-data-hook
</span><br>
<span class="quotelev1">&gt; make[6]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/builddir/build/BUILD/openmpi-1.7.5rc1/ompi/mpi/java/java'
</span><br>
<span class="quotelev1">&gt; /usr/bin/mkdir -p /usr/lib64/openmpi/share/doc/openmpi/javadoc
</span><br>
<span class="quotelev1">&gt; /usr/bin/mkdir: cannot create directory '/usr/lib64/openmpi': Permission
</span><br>
<span class="quotelev1">&gt; denied
</span><br>
<span class="quotelev1">&gt; cp -rp doc/* /usr/lib64/openmpi/share/doc/openmpi/javadoc
</span><br>
<span class="quotelev1">&gt; make[6]: [jdoc-install] Error 1 (ignored)
</span><br>
<p>Ouch!
<br>
<p>My mistake; thanks for catching that -- I'll fix.
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
<li><strong>Next message:</strong> <a href="14274.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>Previous message:</strong> <a href="14272.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>In reply to:</strong> <a href="14263.php">Orion Poplawski: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14287.php">Marco Atzeri: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
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
