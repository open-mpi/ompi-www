<?
$subject_val = "Re: [hwloc-devel] questions about memory binding flags";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  5 09:05:49 2011" -->
<!-- isoreceived="20110105140549" -->
<!-- sent="Wed, 5 Jan 2011 09:05:44 -0500" -->
<!-- isosent="20110105140544" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] questions about memory binding flags" -->
<!-- id="8A346B35-19B7-461A-9888-A685783C7E65_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D196F719-CB7F-4E2F-B1C5-E8106A20C8D9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] questions about memory binding flags<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-05 09:05:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1783.php">Jeff Squyres: "[hwloc-devel] Current memory binding policy"</a>
<li><strong>Previous message:</strong> <a href="1781.php">Jeff Squyres: "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<li><strong>In reply to:</strong> <a href="1780.php">Jeff Squyres: "Re: [hwloc-devel] questions about memory binding flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1785.php">Samuel Thibault: "Re: [hwloc-devel] questions about memory binding flags"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 5, 2011, at 8:58 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Actually, it's usually only supported for read-only data.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure what you mean -- if this policy is used to allocate memory, how do I write meaningful data in there that can then be read by multiple memory localities later?
</span><br>
<p>Ahh... the light clicks on: can you only use REPLICATE with the hwlo_set_*membind* functions (i.e., not the hwloc_alloc* functions)?
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
<li><strong>Next message:</strong> <a href="1783.php">Jeff Squyres: "[hwloc-devel] Current memory binding policy"</a>
<li><strong>Previous message:</strong> <a href="1781.php">Jeff Squyres: "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<li><strong>In reply to:</strong> <a href="1780.php">Jeff Squyres: "Re: [hwloc-devel] questions about memory binding flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1785.php">Samuel Thibault: "Re: [hwloc-devel] questions about memory binding flags"</a>
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
