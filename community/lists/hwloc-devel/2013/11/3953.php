<?
$subject_val = "Re: [hwloc-devel] Relationship between Cario and X11";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  1 11:01:38 2013" -->
<!-- isoreceived="20131101150138" -->
<!-- sent="Fri, 1 Nov 2013 15:01:24 +0000" -->
<!-- isosent="20131101150124" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Relationship between Cario and X11" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F9A33C9_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20131101145342.GW7325_at_type.youpi.perso.aquilenet.fr" -->
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
<strong>Date:</strong> 2013-11-01 11:01:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3954.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Previous message:</strong> <a href="3952.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>In reply to:</strong> <a href="3952.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3954.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Reply:</strong> <a href="3954.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Reply:</strong> <a href="3955.php">Brice Goglin: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Reply:</strong> <a href="3960.php">Brice Goglin: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah; I missed that because we have the X11 checking stuff done in hwloc.m4 already -- I thought the ones in the Cairo were actually redundant.
<br>
<p>It looks like this logic isn't quite correct, anyway -- the X11 checks are embedded in the Cairo and GL sections.  Should they moved out to be independent of Cairo and GL (and therefore only once, and include the AC_DEFINE for HWLOC_HAVE_X11)?
<br>
<p><p><p><p><p>On Nov 1, 2013, at 10:53 AM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres (jsquyres), le Fri 01 Nov 2013 15:12:31 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Cool.  Does the following patch look ok?  If so, I'll commit to master and v1.7:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Err, no, we really need to have HWLOC_HAVE_X11 defined when X11 is
</span><br>
<span class="quotelev1">&gt; available, otherwise we won't get the graphical lstopo.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
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
<li><strong>Next message:</strong> <a href="3954.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Previous message:</strong> <a href="3952.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>In reply to:</strong> <a href="3952.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3954.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Reply:</strong> <a href="3954.php">Samuel Thibault: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Reply:</strong> <a href="3955.php">Brice Goglin: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Reply:</strong> <a href="3960.php">Brice Goglin: "Re: [hwloc-devel] Relationship between Cario and X11"</a>
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
