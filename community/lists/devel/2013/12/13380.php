<?
$subject_val = "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  4 15:07:40 2013" -->
<!-- isoreceived="20131204200740" -->
<!-- sent="Wed, 4 Dec 2013 20:07:39 +0000" -->
<!-- isosent="20131204200739" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)" -->
<!-- id="5F88A8FB-C3C8-4B33-A2EA-44D7BFEB76B2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D92DDA63-A446-4453-9766-09EDA3311164_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-04 15:07:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13381.php">Ralph Castain: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Previous message:</strong> <a href="13379.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: [Bug 1037231] New: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is used"</a>
<li><strong>In reply to:</strong> <a href="13375.php">Ralph Castain: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13381.php">Ralph Castain: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Reply:</strong> <a href="13381.php">Ralph Castain: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Reply:</strong> <a href="13382.php">Paul Hargrove: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Reply:</strong> <a href="13384.php">Adrian Reber: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 4, 2013, at 11:29 AM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff - you are jumping way ahead. I already said this needs further work to resolve blocking. These patches (per Adrian's email) just makes things compile
</span><br>
<p>Fair enough.
<br>
<p>But in some ways, having uncompilable code is a *good* thing, because it tells you exactly where you need to work on the architecture.  Just updating it to *compile* removes that safeguard -- will you remember/re-find all those places where it *used* to block and convert the architecture to workaround the blocking?
<br>
<p>I guess I'm saying: what exactly does updating it to compile get for us, if we know the code still won't work?  It seems like all we'll be doing is removing the grep-able places where we *know* we'll have to do work in the future.
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
<li><strong>Next message:</strong> <a href="13381.php">Ralph Castain: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Previous message:</strong> <a href="13379.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: [Bug 1037231] New: openmpi FTBFS if &quot;-Werror=format-security&quot; flag is used"</a>
<li><strong>In reply to:</strong> <a href="13375.php">Ralph Castain: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13381.php">Ralph Castain: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Reply:</strong> <a href="13381.php">Ralph Castain: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Reply:</strong> <a href="13382.php">Paul Hargrove: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Reply:</strong> <a href="13384.php">Adrian Reber: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile	again. (last)"</a>
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
