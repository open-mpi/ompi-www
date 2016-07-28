<?
$subject_val = "Re: [OMPI devel] Suggested README changes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 18:25:10 2015" -->
<!-- isoreceived="20150423222510" -->
<!-- sent="Thu, 23 Apr 2015 15:25:03 -0700" -->
<!-- isosent="20150423222503" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Suggested README changes" -->
<!-- id="CAAvDA17jT0U90-TqRtM0fuTYeMVE0BiHMJhQtdS-BnSKoaY6mQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0F217D40-9D7D-48F9-BEE8-D21C483B1BB4_at_cisco.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-23 18:25:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17351.php">Paul Hargrove: "[OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]"</a>
<li><strong>Previous message:</strong> <a href="17349.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Suggested README changes"</a>
<li><strong>In reply to:</strong> <a href="17349.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Suggested README changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17361.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Suggested README changes"</a>
<li><strong>Reply:</strong> <a href="17361.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Suggested README changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
More suggestions for README:
<br>
<p>On master I suggest  s/openib/verbs/  to catch two lingering instances of
<br>
the old BTL name.
<br>
Only the first of those two can optionally be updated in v1.8 too.
<br>
<p>As for Portals4, here is a suggested replacement stolen directly from
<br>
portals4's google code site:
<br>
<p>-  Portals4 is the support library for Cray interconnects, but is also
<br>
-  available on other platforms (e.g., there is a Portals4 library
<br>
-  implemented over regular TCP).
<br>
+  Portals is a low-level network API for high-performance networking
<br>
+  on high-performance computing systems developed by Sandia National
<br>
+  Laboratories, Intel Corporation, and the University of New Mexico.
<br>
+  The Portals 4 Reference Implementation is a complete implementation
<br>
+  of Portals 4, with transport over InfiniBand VERBS and UDP.
<br>
<p>-Paul
<br>
<p><p>On Thu, Apr 23, 2015 at 2:01 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Applied -- thank you!
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
<span class="quotelev2">&gt; &gt; I have attached a patch (against master) that fixes some typos and makes
</span><br>
<span class="quotelev1">&gt; an update.
</span><br>
<span class="quotelev2">&gt; &gt; It applies almost cleanly to v1.8, requiring &quot;-C2&quot; if applying with &quot;git
</span><br>
<span class="quotelev1">&gt; apply&quot; due to context changes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I also noted the following which I believe is just plain false, but
</span><br>
<span class="quotelev1">&gt; don't have an alternative for.
</span><br>
<span class="quotelev2">&gt; &gt;   Portals4 is the support library for Cray interconnects, but is also
</span><br>
<span class="quotelev2">&gt; &gt;   available on other platforms (e.g., there is a Portals4 library
</span><br>
<span class="quotelev2">&gt; &gt;   implemented over regular TCP).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It seems to be based on a dated description of Portals3.3.  Cray does
</span><br>
<span class="quotelev1">&gt; not (to the best of my knowledge) have an implementation of Portals4, and
</span><br>
<span class="quotelev1">&gt; the reference implementation of Portals4 is over IB rather than over TCP.
</span><br>
<span class="quotelev1">&gt; Perhaps @regrant can offer a re-write?
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
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17346.php">http://www.open-mpi.org/community/lists/devel/2015/04/17346.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17349.php">http://www.open-mpi.org/community/lists/devel/2015/04/17349.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17350/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17351.php">Paul Hargrove: "[OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]"</a>
<li><strong>Previous message:</strong> <a href="17349.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Suggested README changes"</a>
<li><strong>In reply to:</strong> <a href="17349.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Suggested README changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17361.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Suggested README changes"</a>
<li><strong>Reply:</strong> <a href="17361.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Suggested README changes"</a>
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
