<?
$subject_val = "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 14:44:52 2014" -->
<!-- isoreceived="20140811184452" -->
<!-- sent="Mon, 11 Aug 2014 18:44:35 +0000" -->
<!-- isosent="20140811184435" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value" -->
<!-- id="FA0BA1B9-C59A-4668-B4FE-A3C9EF59675A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140811184203.GB71003_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-11 14:44:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15622.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Previous message:</strong> <a href="15620.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>In reply to:</strong> <a href="15620.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15622.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Reply:</strong> <a href="15622.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the closest thing we have to a supported architecture list is in the README.
<br>
<p><p>On Aug 11, 2014, at 2:42 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which brings us back to Dave's question. Is there a list of supported
</span><br>
<span class="quotelev1">&gt; architectures? I don't want to bother with DEC Alpha if we no longer
</span><br>
<span class="quotelev1">&gt; support it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTW, so far I have converted: AMD64, IA32, ARM. Working on IA64 now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 11, 2014 at 01:57:21PM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   Dave,
</span><br>
<span class="quotelev2">&gt;&gt;   We all understand your concerns. However, the current issue has nothing to
</span><br>
<span class="quotelev2">&gt;&gt;   do with Nathan, the code for supporting ARMv5 is already in the patch I
</span><br>
<span class="quotelev2">&gt;&gt;   submitted and that Paul validated.
</span><br>
<span class="quotelev2">&gt;&gt;   What Nathan said he might take a look at is a different method for
</span><br>
<span class="quotelev2">&gt;&gt;   generating assembly code, one that only supports ARMv7 and later.
</span><br>
<span class="quotelev2">&gt;&gt;     George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   On Mon, Aug 11, 2014 at 1:51 PM, Dave Goodell (dgoodell)
</span><br>
<span class="quotelev2">&gt;&gt;   &lt;dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     On Aug 11, 2014, at 11:54 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am on the same page with George here - if it's on the list then
</span><br>
<span class="quotelev2">&gt;&gt;     support it until its been removed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I happen to have systems to test, I believe, every supported atomics
</span><br>
<span class="quotelev2">&gt;&gt;     implementation except for DEC Alpha, and so I did test them all.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     My comment was not intended to indicate that I don't value your testing
</span><br>
<span class="quotelev2">&gt;&gt;     contributions, Paul.  I am more concerned that Nathan is wasting time
</span><br>
<span class="quotelev2">&gt;&gt;     fixing support for an effectively useless platform.  It's not like this
</span><br>
<span class="quotelev2">&gt;&gt;     is a case where making the more portable change improves our general
</span><br>
<span class="quotelev2">&gt;&gt;     correctness on other platforms; it's a very (&lt;= ARMv5)-specific
</span><br>
<span class="quotelev2">&gt;&gt;     situation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     If there's actually an official list of supported platforms somewhere,
</span><br>
<span class="quotelev2">&gt;&gt;     then I'll let Nathan decide whether he wants to submit an RFC to drop
</span><br>
<span class="quotelev2">&gt;&gt;     ARMv5 support.  I know I'd support it, but I don't care enough to write
</span><br>
<span class="quotelev2">&gt;&gt;     an RFC of my own right now.
</span><br>
<span class="quotelev2">&gt;&gt;     -Dave
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15618.php">http://www.open-mpi.org/community/lists/devel/2014/08/15618.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15619.php">http://www.open-mpi.org/community/lists/devel/2014/08/15619.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15620.php">http://www.open-mpi.org/community/lists/devel/2014/08/15620.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15622.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Previous message:</strong> <a href="15620.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>In reply to:</strong> <a href="15620.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15622.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Reply:</strong> <a href="15622.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
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
