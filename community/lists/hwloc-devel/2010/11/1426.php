<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2730";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  5 12:39:56 2010" -->
<!-- isoreceived="20101105163956" -->
<!-- sent="Fri, 5 Nov 2010 12:39:51 -0400" -->
<!-- isosent="20101105163951" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2730" -->
<!-- id="E4E1F28D-8DB5-47EF-8EEB-2E115591A792_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201011051633.oA5GXxAT001287_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2730<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-05 12:39:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1427.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2730"</a>
<li><strong>Previous message:</strong> <a href="1425.php">Samuel Thibault: "Re: [hwloc-devel] Final 1.0.x release?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1427.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2730"</a>
<li><strong>Reply:</strong> <a href="1427.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2730"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you do this, you must have a separate DIST_SUBDIRS.
<br>
<p>This might still be problematic for running &quot;make dist&quot; on non-Linux platforms, though...
<br>
<p>(I don't have time to look into this today)
<br>
<p><p><p>On Nov 5, 2010, at 12:33 PM, sthibaul_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: sthibaul
</span><br>
<span class="quotelev1">&gt; Date: 2010-11-05 12:33:59 EDT (Fri, 05 Nov 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 2730
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2730">https://svn.open-mpi.org/trac/hwloc/changeset/2730</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Add tests/linux to SUBDIRS only on Linux, to allow linux-specific commands there (like sed -i)
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/tests/Makefile.am       |     6 +++++-                                  
</span><br>
<span class="quotelev1">&gt;   trunk/tests/linux/Makefile.am |     2 --                                      
</span><br>
<span class="quotelev1">&gt;   2 files changed, 5 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/tests/Makefile.am
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/tests/Makefile.am	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/tests/Makefile.am	2010-11-05 12:33:59 EDT (Fri, 05 Nov 2010)
</span><br>
<span class="quotelev1">&gt; @@ -6,7 +6,11 @@
</span><br>
<span class="quotelev1">&gt; AM_CPPFLAGS = $(HWLOC_CPPFLAGS)
</span><br>
<span class="quotelev1">&gt; AM_LDFLAGS = $(HWLOC_LDFLAGS)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -SUBDIRS = linux ports xml
</span><br>
<span class="quotelev1">&gt; +SUBDIRS = ports xml
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +if HWLOC_HAVE_LINUX
</span><br>
<span class="quotelev1">&gt; +SUBDIRS += linux
</span><br>
<span class="quotelev1">&gt; +endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; LDADD =
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/tests/linux/Makefile.am
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/tests/linux/Makefile.am	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/tests/linux/Makefile.am	2010-11-05 12:33:59 EDT (Fri, 05 Nov 2010)
</span><br>
<span class="quotelev1">&gt; @@ -101,13 +101,11 @@
</span><br>
<span class="quotelev1">&gt; 		16em64t-4s2c2t.xml.options
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if HWLOC_BUILD_TESTS
</span><br>
<span class="quotelev1">&gt; -if HWLOC_HAVE_LINUX
</span><br>
<span class="quotelev1">&gt; if HWLOC_HAVE_OPENAT
</span><br>
<span class="quotelev1">&gt; if HWLOC_HAVE_BUNZIPP
</span><br>
<span class="quotelev1">&gt; TESTS = $(sysfs_outputs)
</span><br>
<span class="quotelev1">&gt; endif HWLOC_HAVE_BUNZIPP
</span><br>
<span class="quotelev1">&gt; endif HWLOC_HAVE_OPENAT
</span><br>
<span class="quotelev1">&gt; -endif HWLOC_HAVE_LINUX
</span><br>
<span class="quotelev1">&gt; endif HWLOC_BUILD_TESTS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; EXTRA_DIST = $(sysfs_outputs) $(sysfs_tarballs) $(sysfs_excludes) $(sysfs_options)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="1427.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2730"</a>
<li><strong>Previous message:</strong> <a href="1425.php">Samuel Thibault: "Re: [hwloc-devel] Final 1.0.x release?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1427.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2730"</a>
<li><strong>Reply:</strong> <a href="1427.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2730"</a>
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
