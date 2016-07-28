<?
$subject_val = "Re: [hwloc-devel] hwloc embedding vs libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  7 20:20:13 2013" -->
<!-- isoreceived="20130508002013" -->
<!-- sent="Wed, 8 May 2013 00:19:43 +0000" -->
<!-- isosent="20130508001943" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc embedding vs libltdl" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F60E2F9_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51897F5C.9070106_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc embedding vs libltdl<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-07 20:19:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3717.php">Samuel Thibault: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Previous message:</strong> <a href="3715.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>In reply to:</strong> <a href="3714.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3717.php">Samuel Thibault: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Reply:</strong> <a href="3717.php">Samuel Thibault: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 7, 2013, at 6:25 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I don't have anything against this. What was the reason for not using
</span><br>
<span class="quotelev1">&gt; the default/system libltdl in OMPI? libtool was buggy when you started
</span><br>
<span class="quotelev1">&gt; using it?
</span><br>
<p><p>I neglected to answer this.
<br>
<p>Yes, plus libltdl grew new functionality that we needed (global/local symbol visibility).
<br>
<p>We might be getting to the point soon where we can rely on the installed libltdl to be new enough everywhere, but we haven't had that conversation.
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
<li><strong>Next message:</strong> <a href="3717.php">Samuel Thibault: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Previous message:</strong> <a href="3715.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>In reply to:</strong> <a href="3714.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3717.php">Samuel Thibault: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Reply:</strong> <a href="3717.php">Samuel Thibault: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
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
