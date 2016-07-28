<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 23 16:11:10 2011" -->
<!-- isoreceived="20110923201110" -->
<!-- sent="Fri, 23 Sep 2011 16:11:05 -0400" -->
<!-- isosent="20110923201105" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845" -->
<!-- id="63BA2241-1B5E-4599-A14C-0CE41BB7FE38_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E7CE6D5.9070004_at_inria.fr" -->
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
<strong>Date:</strong> 2011-09-23 16:11:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2453.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3850)"</a>
<li><strong>Previous message:</strong> <a href="2451.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>In reply to:</strong> <a href="2451.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 23, 2011, at 4:06 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt;&gt; tests/embedded/Makefile.am does not generate Makefile.am because it's not listed in an AC_CONFIG_FILES anywhere (e.g., hwloc_internal.m4).  It's a separate subdirectory with its own autogen/etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then I don't remember why we didn't use DIST_SUBDIRS=embedded. I think
</span><br>
<span class="quotelev1">&gt; we talked about it but...
</span><br>
<p>Ya, it's wonky.
<br>
<p>It's a very special case.  IIRC, it needs to have its own configury.  And having 2 configurys in a tarball/AM tree is a Bad Idea.  I don't remember all the details, but I think that was the gist of it.
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
<li><strong>Next message:</strong> <a href="2453.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3850)"</a>
<li><strong>Previous message:</strong> <a href="2451.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>In reply to:</strong> <a href="2451.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
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
