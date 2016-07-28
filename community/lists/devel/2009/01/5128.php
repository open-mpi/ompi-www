<?
$subject_val = "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 09:39:34 2009" -->
<!-- isoreceived="20090113143934" -->
<!-- sent="Tue, 13 Jan 2009 09:39:28 -0500" -->
<!-- isosent="20090113143928" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled" -->
<!-- id="20D58E65-2F32-4A71-B117-9900A9F6B716_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1231840452.16220.14.camel_at_ce170155.zmb.uni-essen.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 09:39:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5129.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>Previous message:</strong> <a href="5127.php">Jeff Squyres: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<li><strong>In reply to:</strong> <a href="5122.php">Manuel Prinz: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath	disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5133.php">Ralf Wildenhues: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath	disabled"</a>
<li><strong>Reply:</strong> <a href="5133.php">Ralf Wildenhues: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath	disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just for the web archives: per some off-list discussion, we decided  
<br>
not to take the patch because the Debian guys have a simpler  
<br>
workaround for what they want.
<br>
<p><p>On Jan 13, 2009, at 4:54 AM, Manuel Prinz wrote:
<br>
<p><span class="quotelev1">&gt; Am Montag, den 12.01.2009, 18:04 -0500 schrieb Jeff Squyres:
</span><br>
<span class="quotelev2">&gt;&gt; I don't see much harm in including this as long as rpath builds are
</span><br>
<span class="quotelev2">&gt;&gt; still the default.  If there's a non-default option to disable rpath
</span><br>
<span class="quotelev2">&gt;&gt; builds, that would be fine with me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does this patch disable rpath by default, or do you have to  
</span><br>
<span class="quotelev2">&gt;&gt; explicitly
</span><br>
<span class="quotelev2">&gt;&gt; use the --disable-rpath flag to configure?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You have to pass --disable-rpath explicitely. Building with rpath is
</span><br>
<span class="quotelev1">&gt; still the default. I verified by building without passing any option  
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; configure and the resulting libs contained an rpath.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Manuel
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5129.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>Previous message:</strong> <a href="5127.php">Jeff Squyres: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<li><strong>In reply to:</strong> <a href="5122.php">Manuel Prinz: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath	disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5133.php">Ralf Wildenhues: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath	disabled"</a>
<li><strong>Reply:</strong> <a href="5133.php">Ralf Wildenhues: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath	disabled"</a>
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
