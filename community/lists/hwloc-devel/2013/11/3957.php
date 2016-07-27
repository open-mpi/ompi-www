<?
$subject_val = "Re: [hwloc-devel] Relationship between Cario and X11";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  1 11:33:35 2013" -->
<!-- isoreceived="20131101153335" -->
<!-- sent="Fri, 1 Nov 2013 15:33:33 +0000" -->
<!-- isosent="20131101153333" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Relationship between Cario and X11" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F9A35DA_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F9A354A_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Relationship between Cario and X11<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-01 11:33:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3958.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Previous message:</strong> <a href="3956.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>In reply to:</strong> <a href="3956.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3958.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Reply:</strong> <a href="3958.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There's some funny m4 logic in the CHECK_HEADERS for X11.  Let me make sure I understand the intent:
<br>
<p>- X11/Xlib.h: this file is required for X11 support
<br>
- X11/Xutil.h X11/keysym.h: these files are optional for X11 support (i.e., we can still build X11 support without them, but if we have them, there's extra X11 goodies that can be used)
<br>
<p>Is that correct?  Or do we *require* all 3 header files for X11 support?
<br>
<p><p><p>On Nov 1, 2013, at 11:20 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ya -- working on a new patch, too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 1, 2013, at 11:10 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you first find out which header and library contains XOpenDisplay()
</span><br>
<span class="quotelev2">&gt;&gt; on your Mac?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Le 01/11/2013 16:01, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ah; I missed that because we have the X11 checking stuff done in hwloc.m4 already -- I thought the ones in the Cairo were actually redundant.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like this logic isn't quite correct, anyway -- the X11 checks are embedded in the Cairo and GL sections.  Should they moved out to be independent of Cairo and GL (and therefore only once, and include the AC_DEFINE for HWLOC_HAVE_X11)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 1, 2013, at 10:53 AM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres (jsquyres), le Fri 01 Nov 2013 15:12:31 +0100, a &#233;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cool.  Does the following patch look ok?  If so, I'll commit to master and v1.7:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Err, no, we really need to have HWLOC_HAVE_X11 defined when X11 is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available, otherwise we won't get the graphical lstopo.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Samuel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
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
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
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
<li><strong>Next message:</strong> <a href="3958.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Previous message:</strong> <a href="3956.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>In reply to:</strong> <a href="3956.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3958.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Reply:</strong> <a href="3958.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
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
