<?
$subject_val = "Re: [hwloc-devel] &quot;file name is too long&quot; error during make	distwith libpci branch";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  8 11:15:26 2010" -->
<!-- isoreceived="20100108161526" -->
<!-- sent="Fri, 8 Jan 2010 11:15:20 -0500" -->
<!-- isosent="20100108161520" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] &amp;quot;file name is too long&amp;quot; error during make	distwith libpci branch" -->
<!-- id="565C9B57-8428-4C31-9841-19EF874942D4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B475215.2010306_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] &quot;file name is too long&quot; error during make	distwith libpci branch<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-08 11:15:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0568.php">Jeff Squyres: "[hwloc-devel] sometimes unused params"</a>
<li><strong>Previous message:</strong> <a href="0566.php">Brice Goglin: "Re: [hwloc-devel] &quot;file name is too long&quot; error during make	distwith libpci branch"</a>
<li><strong>In reply to:</strong> <a href="0566.php">Brice Goglin: "Re: [hwloc-devel] &quot;file name is too long&quot; error during make	distwith libpci branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0594.php">Brice Goglin: "Re: [hwloc-devel] &quot;file name is too long&quot; error during	make	distwith libpci branch"</a>
<li><strong>Reply:</strong> <a href="0594.php">Brice Goglin: "Re: [hwloc-devel] &quot;file name is too long&quot; error during	make	distwith libpci branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 8, 2010, at 10:41 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt; &gt; If we want to whack the .tex files, we certainly can (and just include the HTML and PDFs).  I don't think I have a strong feeling either way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are these tex files shipped because people might want to rebuild the PDF
</span><br>
<span class="quotelev1">&gt; ? I am ok if we don't ship them.
</span><br>
<p>Yes, and I agree.  I'll work on whacking them in the build process.
<br>
<p><span class="quotelev1">&gt; But we still have to fix the HTML and manpage long filenames. We could:
</span><br>
<span class="quotelev1">&gt; * use shorter type names in the device attributes, but it'll be hard
</span><br>
<span class="quotelev1">&gt; anyway since we it's waaaaaay too long. doxygen didn't actually go the
</span><br>
<span class="quotelev1">&gt; lastest level of nested struct/unions: we have union hwloc_obj_attr_u -&gt;
</span><br>
<span class="quotelev1">&gt; struct hwloc_bridge_attr_u -&gt; union hwloc_bridge_downstream_attr_u -&gt;
</span><br>
<span class="quotelev1">&gt; struct hwloc_bridge_downstream_pci_attr_u
</span><br>
<span class="quotelev1">&gt; * stop doing nested declarations of all these attribute union/structs so
</span><br>
<span class="quotelev1">&gt; that doxygen generates foo and bar instead of foo and foo_bar. but we'll
</span><br>
<span class="quotelev1">&gt; end up having many struct/union declarations and I think it would be
</span><br>
<span class="quotelev1">&gt; hard for people to read them while traversing the unique nested
</span><br>
<span class="quotelev1">&gt; declaration is easy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am looking for a way to tell doxygen to output foo and bar even when
</span><br>
<span class="quotelev1">&gt; bar is declared inside foo but I didn't find anything yet.
</span><br>
<p>I don't think we should let doxygen dictate the code that we write.  I see 3 obvious solutions:
<br>
<p>1. make doxy do what we want
<br>
2. post-process the doxy output to have more friendly filenames
<br>
3. use some other tool
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0568.php">Jeff Squyres: "[hwloc-devel] sometimes unused params"</a>
<li><strong>Previous message:</strong> <a href="0566.php">Brice Goglin: "Re: [hwloc-devel] &quot;file name is too long&quot; error during make	distwith libpci branch"</a>
<li><strong>In reply to:</strong> <a href="0566.php">Brice Goglin: "Re: [hwloc-devel] &quot;file name is too long&quot; error during make	distwith libpci branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0594.php">Brice Goglin: "Re: [hwloc-devel] &quot;file name is too long&quot; error during	make	distwith libpci branch"</a>
<li><strong>Reply:</strong> <a href="0594.php">Brice Goglin: "Re: [hwloc-devel] &quot;file name is too long&quot; error during	make	distwith libpci branch"</a>
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
