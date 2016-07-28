<?
$subject_val = "[hwloc-devel] Fwd: [hwloc-svn] svn:hwloc r5588 - trunk/config";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  6 21:22:59 2013" -->
<!-- isoreceived="20130507012259" -->
<!-- sent="Tue, 7 May 2013 01:22:55 +0000" -->
<!-- isosent="20130507012255" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] Fwd: [hwloc-svn] svn:hwloc r5588 - trunk/config" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F609E85_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20130507011645.ADC3B15FF11_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> [hwloc-devel] Fwd: [hwloc-svn] svn:hwloc r5588 - trunk/config<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-06 21:22:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3706.php">Brice Goglin: "Re: [hwloc-devel] Fwd: [hwloc-svn] svn:hwloc r5588 - trunk/config"</a>
<li><strong>Previous message:</strong> <a href="3704.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5587)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3706.php">Brice Goglin: "Re: [hwloc-devel] Fwd: [hwloc-svn] svn:hwloc r5588 - trunk/config"</a>
<li><strong>Reply:</strong> <a href="3706.php">Brice Goglin: "Re: [hwloc-devel] Fwd: [hwloc-svn] svn:hwloc r5588 - trunk/config"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice / Samuel --
<br>
<p>Can you confirm that this is the correct fix?  I need someone to review it so that I can CMR it into OMPI release branches.
<br>
<p>Thanks!
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: &lt;svn-commit-mailer_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [hwloc-svn] svn:hwloc r5588 - trunk/config
</span><br>
<span class="quotelev1">&gt; Date: May 6, 2013 9:16:45 PM EDT
</span><br>
<span class="quotelev1">&gt; To: &lt;hwloc-svn_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: &lt;hwloc-devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Author: jsquyres (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt; Date: 2013-05-06 21:16:45 EDT (Mon, 06 May 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 5588
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/5588">https://svn.open-mpi.org/trac/hwloc/changeset/5588</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Per <a href="http://www.open-mpi.org/community/lists/users/2013/05/21850.php">http://www.open-mpi.org/community/lists/users/2013/05/21850.php</a>,
</span><br>
<span class="quotelev1">&gt; this -L should not be there: it adds an extra -L to the build
</span><br>
<span class="quotelev1">&gt; directory into the dependecy_libs in the generated .la file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks to Stefan Friedel for identifying the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/config/hwloc.m4 |     3 +--                                     
</span><br>
<span class="quotelev1">&gt;   1 files changed, 1 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/config/hwloc.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/config/hwloc.m4	Mon May  6 08:47:19 2013	(r5587)
</span><br>
<span class="quotelev1">&gt; +++ trunk/config/hwloc.m4	2013-05-06 21:16:45 EDT (Mon, 06 May 2013)	(r5588)
</span><br>
<span class="quotelev1">&gt; @@ -9,7 +9,7 @@
</span><br>
<span class="quotelev1">&gt; dnl                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; dnl Copyright (c) 2004-2008 High Performance Computing Center Stuttgart, 
</span><br>
<span class="quotelev1">&gt; dnl                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; -dnl Copyright &#169; 2006-2011  Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +dnl Copyright &#169; 2006-2013 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; dnl Copyright &#169; 2012  Blue Brain Project, BBP/EPFL. All rights reserved.
</span><br>
<span class="quotelev1">&gt; dnl Copyright &#169; 2012       Oracle and/or its affiliates.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; dnl See COPYING in top-level directory.
</span><br>
<span class="quotelev1">&gt; @@ -1078,7 +1078,6 @@
</span><br>
<span class="quotelev1">&gt;     AC_SUBST(HWLOC_CFLAGS)
</span><br>
<span class="quotelev1">&gt;     HWLOC_CPPFLAGS='-I$(HWLOC_top_builddir)/include -I$(HWLOC_top_srcdir)/include'
</span><br>
<span class="quotelev1">&gt;     AC_SUBST(HWLOC_CPPFLAGS)
</span><br>
<span class="quotelev1">&gt; -    HWLOC_LDFLAGS='-L$(HWLOC_top_builddir)/src'
</span><br>
<span class="quotelev1">&gt;     AC_SUBST(HWLOC_LDFLAGS)
</span><br>
<span class="quotelev1">&gt;     AC_SUBST(HWLOC_LIBS)
</span><br>
<span class="quotelev1">&gt;     AC_SUBST(HWLOC_LIBS_PRIVATE)
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3706.php">Brice Goglin: "Re: [hwloc-devel] Fwd: [hwloc-svn] svn:hwloc r5588 - trunk/config"</a>
<li><strong>Previous message:</strong> <a href="3704.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5587)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3706.php">Brice Goglin: "Re: [hwloc-devel] Fwd: [hwloc-svn] svn:hwloc r5588 - trunk/config"</a>
<li><strong>Reply:</strong> <a href="3706.php">Brice Goglin: "Re: [hwloc-devel] Fwd: [hwloc-svn] svn:hwloc r5588 - trunk/config"</a>
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
