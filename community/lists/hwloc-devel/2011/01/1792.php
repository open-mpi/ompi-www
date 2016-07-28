<?
$subject_val = "Re: [hwloc-devel] questions about memory binding flags";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  5 17:16:54 2011" -->
<!-- isoreceived="20110105221654" -->
<!-- sent="Wed, 5 Jan 2011 17:16:49 -0500" -->
<!-- isosent="20110105221649" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] questions about memory binding flags" -->
<!-- id="25A15912-EC95-4037-8517-30396D14FE2D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110105162142.GB5728_at_const.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2011-01-05 17:16:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1793.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Previous message:</strong> <a href="1791.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>In reply to:</strong> <a href="1789.php">Samuel Thibault: "Re: [hwloc-devel] questions about memory binding flags"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 5, 2011, at 11:21 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Maybe return EINVAL when passing REPLICATE to alloc_membind?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, if we go that way we should add tests in mostly all the src/bind.c
</span><br>
<span class="quotelev1">&gt; functions, then.
</span><br>
<p>I just said in a prior email that I didn't have much of an opinion here, but this corner case might convince me otherwise: it's definitely *erroneous* to pass REPLICATE to alloc_membind, so it's worth reporting the error.  If that means we report errors in the other functions when non-expected flags are passed for the sake of consistency, then so be it.
<br>
<p>I have a bunch of edits to documentation comments hwloc.h; please don't edit until I commit (still need some further clarification before I can commit...).
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
<li><strong>Next message:</strong> <a href="1793.php">Samuel Thibault: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>Previous message:</strong> <a href="1791.php">Jeff Squyres: "Re: [hwloc-devel] More memory binding questions"</a>
<li><strong>In reply to:</strong> <a href="1789.php">Samuel Thibault: "Re: [hwloc-devel] questions about memory binding flags"</a>
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
