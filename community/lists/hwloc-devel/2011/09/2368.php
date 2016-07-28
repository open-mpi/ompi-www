<?
$subject_val = "Re: [hwloc-devel] Something lighter-weight than XML?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  5 09:56:34 2011" -->
<!-- isoreceived="20110905135634" -->
<!-- sent="Mon, 5 Sep 2011 08:56:29 -0500" -->
<!-- isosent="20110905135629" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Something lighter-weight than XML?" -->
<!-- id="9958F1CE-A359-4649-8AF8-01B32D6AB347_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E6478B9.7090305_at_inria.fr" -->
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
<strong>Date:</strong> 2011-09-05 09:56:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2369.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Previous message:</strong> <a href="2367.php">Jeff Squyres: "Re: [hwloc-devel] xmlbuffer and xmlFree()"</a>
<li><strong>In reply to:</strong> <a href="2364.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2369.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2369.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 5, 2011, at 2:22 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Samuel thinks we could stay with XML and reimplement our own
</span><br>
<span class="quotelev1">&gt; parsing/dumping without libxml2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My feeling about this is:
</span><br>
<span class="quotelev1">&gt; + We would have a single file format for import/export.
</span><br>
<span class="quotelev1">&gt; + Saving would likely be easy (copy-paste from the current code and/or
</span><br>
<span class="quotelev1">&gt; from the JSON export)
</span><br>
<span class="quotelev1">&gt; - Parsing would require some work (the libxml2-based parser isn't easy
</span><br>
<span class="quotelev1">&gt; to modify, but we could adapt the JSON parser)
</span><br>
<p>Is there a way to make the parsing easier?  I.e., do we have to accept fully generic XML?  Or can we restrict it somehow such that the parsing becomes much more deterministic / simpler?
<br>
<p><span class="quotelev1">&gt; - Encoding may be annoying. libxml2 does a lot of things to manage
</span><br>
<span class="quotelev1">&gt; strings properly. There's not a lot of special character in a usual XML
</span><br>
<span class="quotelev1">&gt; output, but there can be (because the user can annotate the objects).
</span><br>
<span class="quotelev1">&gt; - I am a bit afraid that we would go from a well-working XML support to
</span><br>
<span class="quotelev1">&gt; something much less reliable (do we need to be fully XML compliant so
</span><br>
<span class="quotelev1">&gt; that external programs can load our XML files and play with them?)
</span><br>
<p>A fair point.
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
<li><strong>Next message:</strong> <a href="2369.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Previous message:</strong> <a href="2367.php">Jeff Squyres: "Re: [hwloc-devel] xmlbuffer and xmlFree()"</a>
<li><strong>In reply to:</strong> <a href="2364.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2369.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2369.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
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
