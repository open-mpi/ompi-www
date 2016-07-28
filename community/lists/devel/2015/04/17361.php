<?
$subject_val = "Re: [OMPI devel] Suggested README changes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 24 15:39:33 2015" -->
<!-- isoreceived="20150424193933" -->
<!-- sent="Fri, 24 Apr 2015 19:39:30 +0000" -->
<!-- isosent="20150424193930" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Suggested README changes" -->
<!-- id="8B56AC07-13D6-4E15-A7E6-4FB97110FDF7_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17jT0U90-TqRtM0fuTYeMVE0BiHMJhQtdS-BnSKoaY6mQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Suggested README changes<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-24 15:39:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17362.php">Paul Hargrove: "[OMPI devel] My 1.8.5rc3 testing report"</a>
<li><strong>Previous message:</strong> <a href="17360.php">Jeff Squyres (jsquyres): "[OMPI devel] Next developer face-to-face meeting: Doodle"</a>
<li><strong>In reply to:</strong> <a href="17350.php">Paul Hargrove: "Re: [OMPI devel] Suggested README changes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sandia --
<br>
<p>Are you ok with this change?  If so, please change it on master and file a PR...
<br>
<p>(one quibble: it's &quot;verbs&quot;, not &quot;VERBS&quot;)
<br>
<p><p><span class="quotelev1">&gt; On Apr 23, 2015, at 6:25 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More suggestions for README:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On master I suggest  s/openib/verbs/  to catch two lingering instances of the old BTL name.
</span><br>
<span class="quotelev1">&gt; Only the first of those two can optionally be updated in v1.8 too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As for Portals4, here is a suggested replacement stolen directly from portals4's google code site:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -  Portals4 is the support library for Cray interconnects, but is also
</span><br>
<span class="quotelev1">&gt; -  available on other platforms (e.g., there is a Portals4 library
</span><br>
<span class="quotelev1">&gt; -  implemented over regular TCP).
</span><br>
<span class="quotelev1">&gt; +  Portals is a low-level network API for high-performance networking
</span><br>
<span class="quotelev1">&gt; +  on high-performance computing systems developed by Sandia National
</span><br>
<span class="quotelev1">&gt; +  Laboratories, Intel Corporation, and the University of New Mexico.
</span><br>
<span class="quotelev1">&gt; +  The Portals 4 Reference Implementation is a complete implementation
</span><br>
<span class="quotelev1">&gt; +  of Portals 4, with transport over InfiniBand VERBS and UDP.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Apr 23, 2015 at 2:01 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Applied -- thank you!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Jeff [accepting patches from Paul since 2002]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ;-p
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 23, 2015, at 2:29 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have attached a patch (against master) that fixes some typos and makes an update.
</span><br>
<span class="quotelev2">&gt; &gt; It applies almost cleanly to v1.8, requiring &quot;-C2&quot; if applying with &quot;git apply&quot; due to context changes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I also noted the following which I believe is just plain false, but don't have an alternative for.
</span><br>
<span class="quotelev2">&gt; &gt;   Portals4 is the support library for Cray interconnects, but is also
</span><br>
<span class="quotelev2">&gt; &gt;   available on other platforms (e.g., there is a Portals4 library
</span><br>
<span class="quotelev2">&gt; &gt;   implemented over regular TCP).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It seems to be based on a dated description of Portals3.3.  Cray does not (to the best of my knowledge) have an implementation of Portals4, and the reference implementation of Portals4 is over IB rather than over TCP.  Perhaps @regrant can offer a re-write?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul [generating more work for @jsquyres since 1999]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt; &lt;README-fixes.patch&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17346.php">http://www.open-mpi.org/community/lists/devel/2015/04/17346.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17349.php">http://www.open-mpi.org/community/lists/devel/2015/04/17349.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17350.php">http://www.open-mpi.org/community/lists/devel/2015/04/17350.php</a>
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
<li><strong>Next message:</strong> <a href="17362.php">Paul Hargrove: "[OMPI devel] My 1.8.5rc3 testing report"</a>
<li><strong>Previous message:</strong> <a href="17360.php">Jeff Squyres (jsquyres): "[OMPI devel] Next developer face-to-face meeting: Doodle"</a>
<li><strong>In reply to:</strong> <a href="17350.php">Paul Hargrove: "Re: [OMPI devel] Suggested README changes"</a>
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
