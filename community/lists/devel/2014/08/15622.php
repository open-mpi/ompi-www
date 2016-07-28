<?
$subject_val = "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 16:31:01 2014" -->
<!-- isoreceived="20140811203101" -->
<!-- sent="Mon, 11 Aug 2014 13:30:33 -0700" -->
<!-- isosent="20140811203033" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value" -->
<!-- id="CAAvDA16h0dMgc-10pNH8VZq0JRWCD6wsix0spb9PZkqm+c=KJg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FA0BA1B9-C59A-4668-B4FE-A3C9EF59675A_at_cisco.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-11 16:30:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15623.php">Gilles Gouaillardet: "[OMPI devel] trunk hang when nodes have similar but private network"</a>
<li><strong>Previous message:</strong> <a href="15621.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>In reply to:</strong> <a href="15621.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, the contents of opal/asm/asm-data.txt and the arch-specific subdirs
<br>
below opal/include/opal/sys have served me as a list of the atomics
<br>
implementations.  If those include architectures no longer officially
<br>
supported, then some cleanup may be in order (as SPARC_v8 was recently
<br>
removed from asm-data.txt).
<br>
<p>-Paul
<br>
<p><p>On Mon, Aug 11, 2014 at 11:44 AM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I think the closest thing we have to a supported architecture list is in
</span><br>
<span class="quotelev1">&gt; the README.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 11, 2014, at 2:42 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Which brings us back to Dave's question. Is there a list of supported
</span><br>
<span class="quotelev2">&gt; &gt; architectures? I don't want to bother with DEC Alpha if we no longer
</span><br>
<span class="quotelev2">&gt; &gt; support it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; BTW, so far I have converted: AMD64, IA32, ARM. Working on IA64 now.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Aug 11, 2014 at 01:57:21PM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Dave,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   We all understand your concerns. However, the current issue has
</span><br>
<span class="quotelev1">&gt; nothing to
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   do with Nathan, the code for supporting ARMv5 is already in the patch
</span><br>
<span class="quotelev1">&gt; I
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   submitted and that Paul validated.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   What Nathan said he might take a look at is a different method for
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   generating assembly code, one that only supports ARMv7 and later.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     George.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   On Mon, Aug 11, 2014 at 1:51 PM, Dave Goodell (dgoodell)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   &lt;dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     On Aug 11, 2014, at 11:54 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I am on the same page with George here - if it's on the list then
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     support it until its been removed.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I happen to have systems to test, I believe, every supported atomics
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     implementation except for DEC Alpha, and so I did test them all.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     My comment was not intended to indicate that I don't value your
</span><br>
<span class="quotelev1">&gt; testing
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     contributions, Paul.  I am more concerned that Nathan is wasting
</span><br>
<span class="quotelev1">&gt; time
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     fixing support for an effectively useless platform.  It's not like
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     is a case where making the more portable change improves our general
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     correctness on other platforms; it's a very (&lt;= ARMv5)-specific
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     situation.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     If there's actually an official list of supported platforms
</span><br>
<span class="quotelev1">&gt; somewhere,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     then I'll let Nathan decide whether he wants to submit an RFC to
</span><br>
<span class="quotelev1">&gt; drop
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     ARMv5 support.  I know I'd support it, but I don't care enough to
</span><br>
<span class="quotelev1">&gt; write
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     an RFC of my own right now.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     -Dave
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15618.php">http://www.open-mpi.org/community/lists/devel/2014/08/15618.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15619.php">http://www.open-mpi.org/community/lists/devel/2014/08/15619.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15620.php">http://www.open-mpi.org/community/lists/devel/2014/08/15620.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15621.php">http://www.open-mpi.org/community/lists/devel/2014/08/15621.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15622/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15623.php">Gilles Gouaillardet: "[OMPI devel] trunk hang when nodes have similar but private network"</a>
<li><strong>Previous message:</strong> <a href="15621.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>In reply to:</strong> <a href="15621.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
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
