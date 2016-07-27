<?
$subject_val = "Re: [hwloc-devel] hwloc embedding vs libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  9 09:02:15 2013" -->
<!-- isoreceived="20130509130215" -->
<!-- sent="Thu, 9 May 2013 13:02:10 +0000" -->
<!-- isosent="20130509130210" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc embedding vs libltdl" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F612274_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="518B9CA4.9010900_at_inria.fr" -->
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
<strong>Date:</strong> 2013-05-09 09:02:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3735.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk"</a>
<li><strong>Previous message:</strong> <a href="3733.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk"</a>
<li><strong>In reply to:</strong> <a href="3732.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3741.php">Brice Goglin: "[hwloc-devel] stop embedding libltdl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 9, 2013, at 8:55 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; +Although hwloc plugins may be used in embedded mode, the embedder
</span><br>
<span class="quotelev1">&gt; +project will have to manually setup libltdl in its build system so
</span><br>
<span class="quotelev1">&gt; +that hwloc can load its plugins.
</span><br>
<span class="quotelev1">&gt; +Also, embedders should avoid using their own plugins and hwloc plugins
</span><br>
<span class="quotelev1">&gt; +simultaneously because of possible issues with public and private
</span><br>
<span class="quotelev1">&gt; +namespaces when using libltdl.
</span><br>
<span class="quotelev1">&gt; +The embedder project is strongly advised not to use libltdl.
</span><br>
<p>Tweaked:
<br>
<p>Although hwloc dynamic shared object plugins may be used in embedded mode, the embedder project will have to manually setup libltdl in its build system so
<br>
that hwloc can load its plugins at run time.  Also, embedders should be aware of complications that can arise due to public and private linker namespaces (e.g., if the embedded project is loaded into a private namespace and then hwloc tries to dynamically load its plugins, such loading may fail since the hwloc plugins can't find the hwloc symbols they need).  The embedder project is *strongly* advised not to use hwloc's dynamically loading plugins / libltdl capability.
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
<li><strong>Next message:</strong> <a href="3735.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk"</a>
<li><strong>Previous message:</strong> <a href="3733.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk"</a>
<li><strong>In reply to:</strong> <a href="3732.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3741.php">Brice Goglin: "[hwloc-devel] stop embedding libltdl"</a>
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
