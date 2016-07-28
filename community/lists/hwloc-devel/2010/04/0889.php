<?
$subject_val = "Re: [hwloc-devel] rc1?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 10:57:29 2010" -->
<!-- isoreceived="20100406145729" -->
<!-- sent="Tue, 6 Apr 2010 10:57:24 -0400" -->
<!-- isosent="20100406145724" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] rc1?" -->
<!-- id="984B42FB-A149-4BE0-9867-7A7B5217378D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BBB4B1C.8010002_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] rc1?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 10:57:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0890.php">Bert Wesarg: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1940"</a>
<li><strong>Previous message:</strong> <a href="0888.php">Brice Goglin: "Re: [hwloc-devel] rc1?"</a>
<li><strong>In reply to:</strong> <a href="0888.php">Brice Goglin: "Re: [hwloc-devel] rc1?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 6, 2010, at 10:54 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Is everything else set, ABI-wise?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just a very minor question: should cpuset_first/last/next/weight return
</span><br>
<span class="quotelev1">&gt; unsigned instead of int ? They may return -1 in some corner cases, and
</span><br>
<span class="quotelev1">&gt; even more often in the dynamic-cpuset branch. It would be (unsigned) -1
</span><br>
<span class="quotelev1">&gt; then, which isn't so bad when we mean &quot;infinite&quot;.
</span><br>
<p>My minor preference would be to avoid the cast.  But it's a minor preference at best.
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
<li><strong>Next message:</strong> <a href="0890.php">Bert Wesarg: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1940"</a>
<li><strong>Previous message:</strong> <a href="0888.php">Brice Goglin: "Re: [hwloc-devel] rc1?"</a>
<li><strong>In reply to:</strong> <a href="0888.php">Brice Goglin: "Re: [hwloc-devel] rc1?"</a>
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
