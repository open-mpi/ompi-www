<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  8 02:28:23 2013" -->
<!-- isoreceived="20130508062823" -->
<!-- sent="Wed, 08 May 2013 08:28:15 +0200" -->
<!-- isosent="20130508062815" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk" -->
<!-- id="5189F07F.2070902_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20130508002726.0624415FEDD_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-08 02:28:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3725.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Previous message:</strong> <a href="3723.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3733.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk"</a>
<li><strong>Reply:</strong> <a href="3733.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We actually used C++ during make check (we test the C++ build of
<br>
doc/hwloc-hello.c)
<br>
(got a build failure report from <a href="https://ci.inria.fr/hwloc/">https://ci.inria.fr/hwloc/</a>)
<br>
<p>Brice
<br>
<p><p><p>Le 08/05/2013 02:27, svn-commit-mailer_at_[hidden] a &#233;crit :
<br>
<span class="quotelev1">&gt; Author: jsquyres (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt; Date: 2013-05-07 20:27:25 EDT (Tue, 07 May 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 5606
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/5606">https://svn.open-mpi.org/trac/hwloc/changeset/5606</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Revert r5604 -- it's redundant with LT_LANG([C]).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/configure.ac |     4 ----                                    
</span><br>
<span class="quotelev1">&gt;    1 files changed, 0 insertions(+), 4 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/configure.ac
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/configure.ac	Tue May  7 20:18:05 2013	(r5605)
</span><br>
<span class="quotelev1">&gt; +++ trunk/configure.ac	2013-05-07 20:27:25 EDT (Tue, 07 May 2013)	(r5606)
</span><br>
<span class="quotelev1">&gt; @@ -166,10 +166,6 @@
</span><br>
<span class="quotelev1">&gt;  # Compiler support -- we don't need that stuff.
</span><br>
<span class="quotelev1">&gt;  AM_ENABLE_SHARED
</span><br>
<span class="quotelev1">&gt;  AM_DISABLE_STATIC
</span><br>
<span class="quotelev1">&gt; -# Tell libtool that we don't need Fortran or C++ support.
</span><br>
<span class="quotelev1">&gt; -FC=no
</span><br>
<span class="quotelev1">&gt; -F77=no
</span><br>
<span class="quotelev1">&gt; -CXX=no
</span><br>
<span class="quotelev1">&gt;  AM_PROG_LIBTOOL([dlopen win32-dll])
</span><br>
<span class="quotelev1">&gt;  LT_LANG([C])
</span><br>
<span class="quotelev1">&gt;  LT_CONFIG_LTDL_DIR([src/libltdl])
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3725.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Previous message:</strong> <a href="3723.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3733.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk"</a>
<li><strong>Reply:</strong> <a href="3733.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk"</a>
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
