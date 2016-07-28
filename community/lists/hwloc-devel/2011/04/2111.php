<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3401";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  7 07:57:48 2011" -->
<!-- isoreceived="20110407115748" -->
<!-- sent="Thu, 7 Apr 2011 07:57:42 -0400" -->
<!-- isosent="20110407115742" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3401" -->
<!-- id="17105FC9-42CD-4548-B7D0-D220727058F5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201104071142.p37BgTDX021798_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3401<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-07 07:57:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2112.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="2110.php">Brice Goglin: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 7, 2011, at 7:42 AM, bgoglin_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; libpci doesn't always need zlib, split the configure stuff in 3 parts:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * pkg-config case (recent libpci) was already ok
</span><br>
<span class="quotelev1">&gt; * non-pkg-config case now does
</span><br>
<span class="quotelev1">&gt;  + check without -lz first (ok for RHEL5 and Etch)
</span><br>
<span class="quotelev1">&gt;  + if failed, try again with -lz (needed for FC7)
</span><br>
<span class="quotelev1">&gt;    - this second check looks for a different symbol to ignore
</span><br>
<span class="quotelev1">&gt;      the cached results of the first check
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not sure if this double-check is the right way to handle
</span><br>
<span class="quotelev1">&gt; libraries with variable dependencies.
</span><br>
<p>I think it's fine, but you should probably check for libz (if/when needed) before adding -lz.
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
<li><strong>Next message:</strong> <a href="2112.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="2110.php">Brice Goglin: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
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
