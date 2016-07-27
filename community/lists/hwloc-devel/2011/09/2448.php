<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 23 15:43:10 2011" -->
<!-- isoreceived="20110923194310" -->
<!-- sent="Fri, 23 Sep 2011 15:43:04 -0400" -->
<!-- isosent="20110923194304" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845" -->
<!-- id="21A4D442-13AF-429E-A559-17AE0D4DEC01_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E7CE091.60606_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-23 15:43:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2449.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Previous message:</strong> <a href="2447.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>In reply to:</strong> <a href="2447.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2449.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Reply:</strong> <a href="2449.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 23, 2011, at 3:40 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Is there a reason to not have it as an .am?  I don't really care other than uniformity, I think -- if there's just *one* Makefile that's different, it's one more thing that has to be remembered, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The easiest way to make it a .am would be to add this directory to
</span><br>
<span class="quotelev1">&gt; SUBDIRS but use rules names that are not recognized by automake (so that
</span><br>
<span class="quotelev1">&gt; &quot;all&quot; does nothing). It's probably already the case (current rules are
</span><br>
<span class="quotelev1">&gt; &quot;missing&quot; and &quot;useless&quot;, with a common dependency called &quot;prepare&quot;). If
</span><br>
<span class="quotelev1">&gt; you're confident that those will never conflict with automake, I can
</span><br>
<span class="quotelev1">&gt; make this a Makefile.am and we're done.
</span><br>
<p>Just because you have a Makefile.am (and therefore generated Makefile.in / Makefile), you don't have to list that dir in SUBDIRS.  So &quot;make all&quot; will never traverse down there, etc.  If you include it in DIST_SUBDIRS, it'll be included in the tarball (which is necessary if you generate the Makefile[.in]), but the other usual &quot;make&quot; targets don't have to go in there.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2449.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Previous message:</strong> <a href="2447.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>In reply to:</strong> <a href="2447.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2449.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Reply:</strong> <a href="2449.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
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
