<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  9 08:57:35 2013" -->
<!-- isoreceived="20130509125735" -->
<!-- sent="Thu, 9 May 2013 12:57:29 +0000" -->
<!-- isosent="20130509125729" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F612202_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5189F07F.2070902_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-09 08:57:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3734.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Previous message:</strong> <a href="3732.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>In reply to:</strong> <a href="3724.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3735.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk"</a>
<li><strong>Reply:</strong> <a href="3735.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does this patch fix it?  It's not clear to me from the LT docs whether you're supposed to call LT_LANG multiple times or LT_LANG with multiple languages, but this patch below seems to run the libtool C++ configury:
<br>
<p>Index: configure.ac
<br>
===================================================================
<br>
--- configure.ac	(revision 5609)
<br>
+++ configure.ac	(working copy)
<br>
@@ -168,6 +168,7 @@
<br>
&nbsp;AM_DISABLE_STATIC
<br>
&nbsp;AM_PROG_LIBTOOL([dlopen win32-dll])
<br>
&nbsp;LT_LANG([C])
<br>
+LT_LANG([C++])
<br>
&nbsp;LT_CONFIG_LTDL_DIR([src/libltdl])
<br>
&nbsp;LTDL_INIT([recursive convenience])
<br>
&nbsp;AC_CONFIG_FILES([src/libltdl/Makefile])
<br>
<p>(I couldn't generate the make check failure on my Mac with or without the additional LT_LANG, so I can't confirm if this is the correct fix or not)
<br>
<p><p>On May 8, 2013, at 2:28 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We actually used C++ during make check (we test the C++ build of
</span><br>
<span class="quotelev1">&gt; doc/hwloc-hello.c)
</span><br>
<span class="quotelev1">&gt; (got a build failure report from <a href="https://ci.inria.fr/hwloc/">https://ci.inria.fr/hwloc/</a>)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 08/05/2013 02:27, svn-commit-mailer_at_[hidden] a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Author: jsquyres (Jeff Squyres)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2013-05-07 20:27:25 EDT (Tue, 07 May 2013)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 5606
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/5606">https://svn.open-mpi.org/trac/hwloc/changeset/5606</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Revert r5604 -- it's redundant with LT_LANG([C]).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/configure.ac |     4 ----                                    
</span><br>
<span class="quotelev2">&gt;&gt;   1 files changed, 0 insertions(+), 4 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/configure.ac
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/configure.ac	Tue May  7 20:18:05 2013	(r5605)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/configure.ac	2013-05-07 20:27:25 EDT (Tue, 07 May 2013)	(r5606)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -166,10 +166,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; # Compiler support -- we don't need that stuff.
</span><br>
<span class="quotelev2">&gt;&gt; AM_ENABLE_SHARED
</span><br>
<span class="quotelev2">&gt;&gt; AM_DISABLE_STATIC
</span><br>
<span class="quotelev2">&gt;&gt; -# Tell libtool that we don't need Fortran or C++ support.
</span><br>
<span class="quotelev2">&gt;&gt; -FC=no
</span><br>
<span class="quotelev2">&gt;&gt; -F77=no
</span><br>
<span class="quotelev2">&gt;&gt; -CXX=no
</span><br>
<span class="quotelev2">&gt;&gt; AM_PROG_LIBTOOL([dlopen win32-dll])
</span><br>
<span class="quotelev2">&gt;&gt; LT_LANG([C])
</span><br>
<span class="quotelev2">&gt;&gt; LT_CONFIG_LTDL_DIR([src/libltdl])
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
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
<li><strong>Next message:</strong> <a href="3734.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Previous message:</strong> <a href="3732.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>In reply to:</strong> <a href="3724.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3735.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk"</a>
<li><strong>Reply:</strong> <a href="3735.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk"</a>
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
