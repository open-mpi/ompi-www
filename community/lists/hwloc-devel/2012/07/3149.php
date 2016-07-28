<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4569 - branches/v1.4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  6 16:39:10 2012" -->
<!-- isoreceived="20120706203910" -->
<!-- sent="Fri, 06 Jul 2012 22:39:04 +0200" -->
<!-- isosent="20120706203904" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4569 - branches/v1.4" -->
<!-- id="4FF74CE8.3060603_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120706195638.292ED15FC81_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4569 - branches/v1.4<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-06 16:39:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3150.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4569 - branches/v1.4"</a>
<li><strong>Previous message:</strong> <a href="3148.php">Samuel Thibault: "Re: [hwloc-devel] XML string filtering"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3150.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4569 - branches/v1.4"</a>
<li><strong>Reply:</strong> <a href="3150.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4569 - branches/v1.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This causes this warning during autogen (only in the v1.4 branch, but I
<br>
don't see why):
<br>
<p>configure.ac:141: warning: AC_COMPILE_IFELSE was called before AC_USE_SYSTEM_EXTENSIONS
<br>
config/hwloc.m4:24: HWLOC_SETUP_CORE is expanded from...
<br>
configure.ac:141: the top level
<br>
<p>Moving the line after SETUP_CORE removes the warning.
<br>
<p>By the way, are ifdef and m4_ifdef identical? We used m4_ifdef in other
<br>
similar cases.
<br>
<p>Brice
<br>
<p><p><p><p>Le 06/07/2012 21:56, svn-commit-mailer_at_[hidden] a &#233;crit :
<br>
<span class="quotelev1">&gt; Author: jsquyres (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt; Date: 2012-07-06 15:56:37 EDT (Fri, 06 Jul 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 4569
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/4569">https://svn.open-mpi.org/trac/hwloc/changeset/4569</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Merge r4568 from trunk: accomodate Automake 1.12.x
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Properties modified: 
</span><br>
<span class="quotelev1">&gt;    branches/v1.4/   (props changed)
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    branches/v1.4/configure.ac |     3 +++                                     
</span><br>
<span class="quotelev1">&gt;    1 files changed, 3 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.4/configure.ac
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.4/configure.ac	Fri Jul  6 15:55:31 2012	(r4568)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.4/configure.ac	2012-07-06 15:56:37 EDT (Fri, 06 Jul 2012)	(r4569)
</span><br>
<span class="quotelev1">&gt; @@ -110,6 +110,9 @@
</span><br>
<span class="quotelev1">&gt;  AC_PROG_CC
</span><br>
<span class="quotelev1">&gt;  AM_PROG_CC_C_O
</span><br>
<span class="quotelev1">&gt;  CFLAGS=&quot;$CFLAGS_save&quot;
</span><br>
<span class="quotelev1">&gt; +# This did not exist pre AM 1.11.x (where x is somewhere &gt;0 and &lt;3),
</span><br>
<span class="quotelev1">&gt; +# but it is necessary in AM 1.12.x.
</span><br>
<span class="quotelev1">&gt; +ifdef([AM_PROG_AR], [AM_PROG_AR])
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  # Define hwloc's configure arguments
</span><br>
<span class="quotelev1">&gt;  HWLOC_DEFINE_ARGS
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
<li><strong>Next message:</strong> <a href="3150.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4569 - branches/v1.4"</a>
<li><strong>Previous message:</strong> <a href="3148.php">Samuel Thibault: "Re: [hwloc-devel] XML string filtering"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3150.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4569 - branches/v1.4"</a>
<li><strong>Reply:</strong> <a href="3150.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4569 - branches/v1.4"</a>
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
