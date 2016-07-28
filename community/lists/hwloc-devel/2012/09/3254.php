<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  5 11:24:56 2012" -->
<!-- isoreceived="20120905152456" -->
<!-- sent="Wed, 5 Sep 2012 11:24:51 -0400" -->
<!-- isosent="20120905152451" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src" -->
<!-- id="48097158-E183-45EE-A9AB-A6441EE7C849_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20120905151947.GC14606_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-05 11:24:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3255.php">Samuel Thibault: "Re: [hwloc-devel] -lhwloc in components."</a>
<li><strong>Previous message:</strong> <a href="3253.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>In reply to:</strong> <a href="3252.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3257.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Reply:</strong> <a href="3257.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 5, 2012, at 11:19 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Undefined symbols at .so-creation time are allowed on all platforms (even OS X).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Even OS X?  I thought I had seen such issue on OS X, precisely.
</span><br>
<p>Yep.
<br>
<p><span class="quotelev2">&gt;&gt; But they must be resolved at load time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or not, when resolving lazily :)
</span><br>
<p><p>Good point.  I don't remember exactly what the rules are here, and they may vary from OS to OS (i.e., some OS's may not support lazy symbol resolution...?).
<br>
<p>But it's easiest/safest to think of it in terms of: the symbols must be able to be resolved when this .so is dlopen'ed.
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
<li><strong>Next message:</strong> <a href="3255.php">Samuel Thibault: "Re: [hwloc-devel] -lhwloc in components."</a>
<li><strong>Previous message:</strong> <a href="3253.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>In reply to:</strong> <a href="3252.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3257.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Reply:</strong> <a href="3257.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
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
