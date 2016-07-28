<?
$subject_val = "Re: [hwloc-devel] The de-C99 of hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 18 11:01:16 2011" -->
<!-- isoreceived="20110218160116" -->
<!-- sent="Fri, 18 Feb 2011 11:01:11 -0500" -->
<!-- isosent="20110218160111" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] The de-C99 of hwloc" -->
<!-- id="45E545E3-09B3-4FEA-A912-E94CB1E02957_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3B67442B-A186-4E6E-8C0F-81B38CEDC161_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] The de-C99 of hwloc<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-18 11:01:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1966.php">Jeff Squyres: "[hwloc-devel] de-c99"</a>
<li><strong>Previous message:</strong> <a href="1964.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>In reply to:</strong> <a href="1964.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1968.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 18, 2011, at 10:55 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Let's do pthread_once() -- we don't have any of the infrastructure mojo for memory barriers.
</span><br>
<p>Better yet, let's avoid all the memory barrier issues and pthread_once issues by just hard-coding the order of constants and putting a strongly-worded comment around it not to muck with the ordering.
<br>
<p>I'll push that shortly up to bitbucket.
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
<li><strong>Next message:</strong> <a href="1966.php">Jeff Squyres: "[hwloc-devel] de-c99"</a>
<li><strong>Previous message:</strong> <a href="1964.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>In reply to:</strong> <a href="1964.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1968.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
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
