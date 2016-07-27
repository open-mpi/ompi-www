<?
$subject_val = "Re: [hwloc-devel] XML string filtering";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  6 08:55:39 2012" -->
<!-- isoreceived="20120706125539" -->
<!-- sent="Fri, 6 Jul 2012 08:55:34 -0400" -->
<!-- isosent="20120706125534" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] XML string filtering" -->
<!-- id="E489AB6B-C08C-4666-B969-FF4259CAF375_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FF6DEEF.4050706_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] XML string filtering<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-06 08:55:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3148.php">Samuel Thibault: "Re: [hwloc-devel] XML string filtering"</a>
<li><strong>Previous message:</strong> <a href="3146.php">Brice Goglin: "[hwloc-devel] XML string filtering"</a>
<li><strong>In reply to:</strong> <a href="3146.php">Brice Goglin: "[hwloc-devel] XML string filtering"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3148.php">Samuel Thibault: "Re: [hwloc-devel] XML string filtering"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 6, 2012, at 8:49 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; I am looking at filtering special characters out of strings to make XML
</span><br>
<span class="quotelev1">&gt; export/reimport safer when the BIOS contains ugly DMI infos or when the
</span><br>
<span class="quotelev1">&gt; user sets crazy custom object info strings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We don't want to waste time with encoding, supporting ascii is enough in
</span><br>
<span class="quotelev1">&gt; the vast majority of cases. Others invalid chars will be removed from
</span><br>
<span class="quotelev1">&gt; the XML-exported strings. But libxml doesn't like most characters
</span><br>
<span class="quotelev1">&gt; between 0 and 31. I could just use isprint() to check every character
</span><br>
<span class="quotelev1">&gt; before export and only keep those between 32 and 127. But what about \n,
</span><br>
<span class="quotelev1">&gt; \t, \r, \f which are before ? Do we want to allow them?
</span><br>
<p><p>I don't have a strong opinion here.  Does libxml allow them?
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
<li><strong>Next message:</strong> <a href="3148.php">Samuel Thibault: "Re: [hwloc-devel] XML string filtering"</a>
<li><strong>Previous message:</strong> <a href="3146.php">Brice Goglin: "[hwloc-devel] XML string filtering"</a>
<li><strong>In reply to:</strong> <a href="3146.php">Brice Goglin: "[hwloc-devel] XML string filtering"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3148.php">Samuel Thibault: "Re: [hwloc-devel] XML string filtering"</a>
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
