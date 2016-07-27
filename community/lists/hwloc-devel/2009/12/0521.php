<?
$subject_val = "Re: [hwloc-devel] more embedded";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 01:30:11 2009" -->
<!-- isoreceived="20091216063011" -->
<!-- sent="Wed, 16 Dec 2009 07:30:06 +0100" -->
<!-- isosent="20091216063006" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] more embedded" -->
<!-- id="4B287E6E.9000801_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D4D0A202-8B32-4549-A638-FDC8DC2E902B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] more embedded<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-16 01:30:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0522.php">Jeff Squyres: "Re: [hwloc-devel] &quot;compar&quot;"</a>
<li><strong>Previous message:</strong> <a href="0520.php">Brice Goglin: "Re: [hwloc-devel] &quot;compar&quot;"</a>
<li><strong>In reply to:</strong> <a href="0519.php">Jeff Squyres: "[hwloc-devel] more embedded"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0523.php">Samuel Thibault: "Re: [hwloc-devel] more embedded"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I added a truckload more symbol renaming -- please review:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://bitbucket.org/jsquyres/hwloc-embedded/changeset/aa94ec7a1182/">http://bitbucket.org/jsquyres/hwloc-embedded/changeset/aa94ec7a1182/</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Looks ok.
<br>
<p><span class="quotelev1">&gt; However, after adding this stuff, I still see a boatload of public symbols named &quot;hwloc_*&quot;.  I assume that these are actually internal symbols, and are only named &quot;hwloc_&quot; so that they're nicely namespace segregated from the top-level application.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; Would it be desirable to have compiler visibility enabled in hwloc?  This allows private hwloc symbols to be truly private -- they would only be visible within libhwloc.  I think all modern compilers have this kind of feature these days.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would take some configure mojo and some code changes (i.e., put a DECLSPEC in front of public symbol declarations).  Such things can be copied over from the OMPI code base.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Don't know anything about it, but I am ok with it.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0522.php">Jeff Squyres: "Re: [hwloc-devel] &quot;compar&quot;"</a>
<li><strong>Previous message:</strong> <a href="0520.php">Brice Goglin: "Re: [hwloc-devel] &quot;compar&quot;"</a>
<li><strong>In reply to:</strong> <a href="0519.php">Jeff Squyres: "[hwloc-devel] more embedded"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0523.php">Samuel Thibault: "Re: [hwloc-devel] more embedded"</a>
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
