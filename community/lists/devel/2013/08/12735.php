<?
$subject_val = "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r29043 - in trunk: config ompi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 19 10:52:32 2013" -->
<!-- isoreceived="20130819145232" -->
<!-- sent="Mon, 19 Aug 2013 14:52:21 +0000" -->
<!-- isosent="20130819145221" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r29043 - in trunk: config ompi" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8086B6_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130819144824.27179160320_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r29043 - in trunk: config ompi<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-19 10:52:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12736.php">Steve Wise: "[OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12734.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk build failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12737.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r29043 - in trunk: config ompi"</a>
<li><strong>Reply:</strong> <a href="12737.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r29043 - in trunk: config ompi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
@Nathan --
<br>
<p>Why is the MPIT convenience library related to whether profiling is enabled or not?
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: &lt;svn-commit-mailer_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI svn-full] svn:open-mpi r29043 - in trunk: config ompi
</span><br>
<span class="quotelev1">&gt; Date: August 19, 2013 10:48:24 AM EDT
</span><br>
<span class="quotelev1">&gt; To: &lt;svn-full_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev1">&gt; Date: 2013-08-19 10:48:23 EDT (Mon, 19 Aug 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 29043
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29043">https://svn.open-mpi.org/trac/ompi/changeset/29043</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Okay, fix it so it works both --disable-mpi-profile and --enable-mpi-profile. I'm not sure why mpit's library has to be treated differently, but it seems that it needs some special care to work in both scenarios
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Refs #3725
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/config/ompi_configure_options.m4 |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/Makefile.am                 |     7 +++++++                                 
</span><br>
<span class="quotelev1">&gt;   2 files changed, 8 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/config/ompi_configure_options.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/config/ompi_configure_options.m4	Sun Aug 18 19:40:32 2013	(r29042)
</span><br>
<span class="quotelev1">&gt; +++ trunk/config/ompi_configure_options.m4	2013-08-19 10:48:23 EDT (Mon, 19 Aug 2013)	(r29043)
</span><br>
<span class="quotelev1">&gt; @@ -133,6 +133,7 @@
</span><br>
<span class="quotelev1">&gt;     MPIF_H_PMPI_W_FUNCS=
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt; AC_SUBST(MPIF_H_PMPI_W_FUNCS)
</span><br>
<span class="quotelev1">&gt; +AM_CONDITIONAL(WANT_MPI_PROFILING, test &quot;$WANT_MPI_PROFILING&quot; = 1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/Makefile.am
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/Makefile.am	Sun Aug 18 19:40:32 2013	(r29042)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/Makefile.am	2013-08-19 10:48:23 EDT (Mon, 19 Aug 2013)	(r29043)
</span><br>
<span class="quotelev1">&gt; @@ -140,6 +140,13 @@
</span><br>
<span class="quotelev1">&gt;         $(MCA_ompi_FRAMEWORK_LIBS) \
</span><br>
<span class="quotelev1">&gt;         $(OMPI_MPIEXT_C_LIBS) \
</span><br>
<span class="quotelev1">&gt;         $(OMPI_LIBMPI_EXTRA_LIBS)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +if WANT_MPI_PROFILING
</span><br>
<span class="quotelev1">&gt; +libmpi_la_LIBADD += \
</span><br>
<span class="quotelev1">&gt; +        mpi/tool/libmpi_mpit.la
</span><br>
<span class="quotelev1">&gt; +endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; if OMPI_RTE_ORTE
</span><br>
<span class="quotelev1">&gt; libmpi_la_LIBADD += \
</span><br>
<span class="quotelev1">&gt;         $(top_ompi_builddir)/orte/libopen-rte.la
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
<li><strong>Next message:</strong> <a href="12736.php">Steve Wise: "[OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12734.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk build failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12737.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r29043 - in trunk: config ompi"</a>
<li><strong>Reply:</strong> <a href="12737.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r29043 - in trunk: config ompi"</a>
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
