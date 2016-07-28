<?
$subject_val = "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 14:42:05 2014" -->
<!-- isoreceived="20140811184205" -->
<!-- sent="Mon, 11 Aug 2014 12:42:03 -0600" -->
<!-- isosent="20140811184203" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value" -->
<!-- id="20140811184203.GB71003_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkX9a4XasYhrCWL7yGZmT-U_yhXJWqA05vBztqCVfDAKSg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-11 14:42:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15621.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Previous message:</strong> <a href="15619.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>In reply to:</strong> <a href="15619.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15621.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Reply:</strong> <a href="15621.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Which brings us back to Dave's question. Is there a list of supported
<br>
architectures? I don't want to bother with DEC Alpha if we no longer
<br>
support it.
<br>
<p>BTW, so far I have converted: AMD64, IA32, ARM. Working on IA64 now.
<br>
<p>-Nathan
<br>
<p>On Mon, Aug 11, 2014 at 01:57:21PM -0400, George Bosilca wrote:
<br>
<span class="quotelev1">&gt;    Dave,
</span><br>
<span class="quotelev1">&gt;    We all understand your concerns. However, the current issue has nothing to
</span><br>
<span class="quotelev1">&gt;    do with Nathan, the code for supporting ARMv5 is already in the patch I
</span><br>
<span class="quotelev1">&gt;    submitted and that Paul validated.
</span><br>
<span class="quotelev1">&gt;    What Nathan said he might take a look at is a different method for
</span><br>
<span class="quotelev1">&gt;    generating assembly code, one that only supports ARMv7 and later.
</span><br>
<span class="quotelev1">&gt;      George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    On Mon, Aug 11, 2014 at 1:51 PM, Dave Goodell (dgoodell)
</span><br>
<span class="quotelev1">&gt;    &lt;dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      On Aug 11, 2014, at 11:54 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;      &gt; I am on the same page with George here - if it's on the list then
</span><br>
<span class="quotelev1">&gt;      support it until its been removed.
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; I happen to have systems to test, I believe, every supported atomics
</span><br>
<span class="quotelev1">&gt;      implementation except for DEC Alpha, and so I did test them all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      My comment was not intended to indicate that I don't value your testing
</span><br>
<span class="quotelev1">&gt;      contributions, Paul.  I am more concerned that Nathan is wasting time
</span><br>
<span class="quotelev1">&gt;      fixing support for an effectively useless platform.  It's not like this
</span><br>
<span class="quotelev1">&gt;      is a case where making the more portable change improves our general
</span><br>
<span class="quotelev1">&gt;      correctness on other platforms; it's a very (&lt;= ARMv5)-specific
</span><br>
<span class="quotelev1">&gt;      situation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      If there's actually an official list of supported platforms somewhere,
</span><br>
<span class="quotelev1">&gt;      then I'll let Nathan decide whether he wants to submit an RFC to drop
</span><br>
<span class="quotelev1">&gt;      ARMv5 support.  I know I'd support it, but I don't care enough to write
</span><br>
<span class="quotelev1">&gt;      an RFC of my own right now.
</span><br>
<span class="quotelev1">&gt;      -Dave
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      devel mailing list
</span><br>
<span class="quotelev1">&gt;      devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;      Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15618.php">http://www.open-mpi.org/community/lists/devel/2014/08/15618.php</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15619.php">http://www.open-mpi.org/community/lists/devel/2014/08/15619.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15620/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15621.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Previous message:</strong> <a href="15619.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>In reply to:</strong> <a href="15619.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15621.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Reply:</strong> <a href="15621.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
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
