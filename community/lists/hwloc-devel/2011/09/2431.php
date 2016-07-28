<?
$subject_val = "Re: [hwloc-devel] Something lighter-weight than XML?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 22 14:48:03 2011" -->
<!-- isoreceived="20110922184803" -->
<!-- sent="Thu, 22 Sep 2011 14:47:55 -0400" -->
<!-- isosent="20110922184755" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Something lighter-weight than XML?" -->
<!-- id="C64DB3A7-83D4-49A6-93F4-F3F25CD9398A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E7B573D.3010603_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Something lighter-weight than XML?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-22 14:47:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2432.php">Jeff Squyres: "[hwloc-devel] Patch for hwloc_obj_attr_snprintf"</a>
<li><strong>Previous message:</strong> <a href="2430.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>In reply to:</strong> <a href="2430.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2464.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 22, 2011, at 11:41 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; This is strange. I just tried building the hwloc tree with prefixing
</span><br>
<span class="quotelev1">&gt; enabled, I could not find any problem (except one missing symbol that
</span><br>
<span class="quotelev1">&gt; doesn't matter here, see next commits).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Basically nothing has changed outside of src/topology-xml.c, the above
</span><br>
<span class="quotelev1">&gt; symbols existed before, they still exist. I don't understand why their
</span><br>
<span class="quotelev1">&gt; renaming would fail now. However, those were in #ifdef HWLOC_HAVE_XML
</span><br>
<span class="quotelev1">&gt; before, but this symbol isn't used anymore. Did you rerun autogen ?
</span><br>
<p>Disregard -- I think this is a problem in how we're slurping OMPI's hwloc into our tree... nothing wrong in hwloc itself...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2432.php">Jeff Squyres: "[hwloc-devel] Patch for hwloc_obj_attr_snprintf"</a>
<li><strong>Previous message:</strong> <a href="2430.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>In reply to:</strong> <a href="2430.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2464.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
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
