<?
$subject_val = "Re: [hwloc-devel] Fwd: [hwloc-svn] svn:hwloc r5588 - trunk/config";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  7 02:48:39 2013" -->
<!-- isoreceived="20130507064839" -->
<!-- sent="Tue, 07 May 2013 08:48:32 +0200" -->
<!-- isosent="20130507064832" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Fwd: [hwloc-svn] svn:hwloc r5588 - trunk/config" -->
<!-- id="5188A3C0.4050900_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F609E85_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Fwd: [hwloc-svn] svn:hwloc r5588 - trunk/config<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-07 02:48:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3707.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Previous message:</strong> <a href="3705.php">Jeff Squyres (jsquyres): "[hwloc-devel] Fwd: [hwloc-svn] svn:hwloc r5588 - trunk/config"</a>
<li><strong>In reply to:</strong> <a href="3705.php">Jeff Squyres (jsquyres): "[hwloc-devel] Fwd: [hwloc-svn] svn:hwloc r5588 - trunk/config"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't be 100% sure but the fix looks sane to me, and it didn't break
<br>
any regression testing build.
<br>
<p>Brice
<br>
<p><p><p>Le 07/05/2013 03:22, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice / Samuel --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you confirm that this is the correct fix?  I need someone to review it so that I can CMR it into OMPI release branches.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: &lt;svn-commit-mailer_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [hwloc-svn] svn:hwloc r5588 - trunk/config
</span><br>
<span class="quotelev2">&gt;&gt; Date: May 6, 2013 9:16:45 PM EDT
</span><br>
<span class="quotelev2">&gt;&gt; To: &lt;hwloc-svn_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: &lt;hwloc-devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: jsquyres (Jeff Squyres)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2013-05-06 21:16:45 EDT (Mon, 06 May 2013)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 5588
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/5588">https://svn.open-mpi.org/trac/hwloc/changeset/5588</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Per <a href="http://www.open-mpi.org/community/lists/users/2013/05/21850.php">http://www.open-mpi.org/community/lists/users/2013/05/21850.php</a>,
</span><br>
<span class="quotelev2">&gt;&gt; this -L should not be there: it adds an extra -L to the build
</span><br>
<span class="quotelev2">&gt;&gt; directory into the dependecy_libs in the generated .la file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks to Stefan Friedel for identifying the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/config/hwloc.m4 |     3 +--                                     
</span><br>
<span class="quotelev2">&gt;&gt;   1 files changed, 1 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/config/hwloc.m4
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/config/hwloc.m4	Mon May  6 08:47:19 2013	(r5587)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/config/hwloc.m4	2013-05-06 21:16:45 EDT (Mon, 06 May 2013)	(r5588)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -9,7 +9,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; dnl                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; dnl Copyright (c) 2004-2008 High Performance Computing Center Stuttgart, 
</span><br>
<span class="quotelev2">&gt;&gt; dnl                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; -dnl Copyright &#169; 2006-2011  Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; +dnl Copyright &#169; 2006-2013 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; dnl Copyright &#169; 2012  Blue Brain Project, BBP/EPFL. All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; dnl Copyright &#169; 2012       Oracle and/or its affiliates.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; dnl See COPYING in top-level directory.
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1078,7 +1078,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;     AC_SUBST(HWLOC_CFLAGS)
</span><br>
<span class="quotelev2">&gt;&gt;     HWLOC_CPPFLAGS='-I$(HWLOC_top_builddir)/include -I$(HWLOC_top_srcdir)/include'
</span><br>
<span class="quotelev2">&gt;&gt;     AC_SUBST(HWLOC_CPPFLAGS)
</span><br>
<span class="quotelev2">&gt;&gt; -    HWLOC_LDFLAGS='-L$(HWLOC_top_builddir)/src'
</span><br>
<span class="quotelev2">&gt;&gt;     AC_SUBST(HWLOC_LDFLAGS)
</span><br>
<span class="quotelev2">&gt;&gt;     AC_SUBST(HWLOC_LIBS)
</span><br>
<span class="quotelev2">&gt;&gt;     AC_SUBST(HWLOC_LIBS_PRIVATE)
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3707.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Previous message:</strong> <a href="3705.php">Jeff Squyres (jsquyres): "[hwloc-devel] Fwd: [hwloc-svn] svn:hwloc r5588 - trunk/config"</a>
<li><strong>In reply to:</strong> <a href="3705.php">Jeff Squyres (jsquyres): "[hwloc-devel] Fwd: [hwloc-svn] svn:hwloc r5588 - trunk/config"</a>
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
