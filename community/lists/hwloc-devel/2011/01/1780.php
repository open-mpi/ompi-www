<?
$subject_val = "Re: [hwloc-devel] questions about memory binding flags";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  5 08:58:23 2011" -->
<!-- isoreceived="20110105135823" -->
<!-- sent="Wed, 5 Jan 2011 08:58:19 -0500" -->
<!-- isosent="20110105135819" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] questions about memory binding flags" -->
<!-- id="D196F719-CB7F-4E2F-B1C5-E8106A20C8D9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110105102016.GH5728_at_const.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2011-01-05 08:58:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1781.php">Jeff Squyres: "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<li><strong>Previous message:</strong> <a href="1779.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>In reply to:</strong> <a href="1778.php">Samuel Thibault: "Re: [hwloc-devel] questions about memory binding flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1782.php">Jeff Squyres: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Reply:</strong> <a href="1782.php">Jeff Squyres: "Re: [hwloc-devel] questions about memory binding flags"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 5, 2011, at 5:20 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I.e., is the memory bound like this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; node A: 0, 1, 2, ..., 9
</span><br>
<span class="quotelev2">&gt;&gt; node B: 0, 1, 2, ..., 9
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and that a write to page 0 will physically write to *both* pages?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, it's usually only supported for read-only data.
</span><br>
<p>I'm not sure what you mean -- if this policy is used to allocate memory, how do I write meaningful data in there that can then be read by multiple memory localities later?
<br>
<p>(I updated the docs with all your other answers)
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
<li><strong>Next message:</strong> <a href="1781.php">Jeff Squyres: "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<li><strong>Previous message:</strong> <a href="1779.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>In reply to:</strong> <a href="1778.php">Samuel Thibault: "Re: [hwloc-devel] questions about memory binding flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1782.php">Jeff Squyres: "Re: [hwloc-devel] questions about memory binding flags"</a>
<li><strong>Reply:</strong> <a href="1782.php">Jeff Squyres: "Re: [hwloc-devel] questions about memory binding flags"</a>
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
