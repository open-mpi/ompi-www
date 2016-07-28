<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r29043 - in trunk: config ompi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 19 11:06:54 2013" -->
<!-- isoreceived="20130819150654" -->
<!-- sent="Mon, 19 Aug 2013 09:06:53 -0600" -->
<!-- isosent="20130819150653" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r29043 - in trunk: config ompi" -->
<!-- id="20130819150653.GA31350_at_panthera.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F8086B6_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r29043 - in trunk: config ompi<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-19 11:06:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12738.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12736.php">Steve Wise: "[OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>In reply to:</strong> <a href="12735.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r29043 - in trunk: config ompi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Because according to Martin there needed to be profiling versions of all
<br>
the MPI_T_* functions. I used the c bindings profiling as an base for
<br>
implementing the functions for MPI_T. Not sure what went wrong but I never
<br>
tried building without profiling support.
<br>
<p>-Nathan
<br>
<p>On Mon, Aug 19, 2013 at 02:52:21PM +0000, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; @Nathan --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why is the MPIT convenience library related to whether profiling is enabled or not?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; From: &lt;svn-commit-mailer_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [OMPI svn-full] svn:open-mpi r29043 - in trunk: config ompi
</span><br>
<span class="quotelev2">&gt; &gt; Date: August 19, 2013 10:48:24 AM EDT
</span><br>
<span class="quotelev2">&gt; &gt; To: &lt;svn-full_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Reply-To: &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2013-08-19 10:48:23 EDT (Mon, 19 Aug 2013)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 29043
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29043">https://svn.open-mpi.org/trac/ompi/changeset/29043</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; Okay, fix it so it works both --disable-mpi-profile and --enable-mpi-profile. I'm not sure why mpit's library has to be treated differently, but it seems that it needs some special care to work in both scenarios
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Refs #3725
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/config/ompi_configure_options.m4 |     1 +                                       
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/ompi/Makefile.am                 |     7 +++++++                                 
</span><br>
<span class="quotelev2">&gt; &gt;   2 files changed, 8 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/config/ompi_configure_options.m4
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/config/ompi_configure_options.m4	Sun Aug 18 19:40:32 2013	(r29042)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/config/ompi_configure_options.m4	2013-08-19 10:48:23 EDT (Mon, 19 Aug 2013)	(r29043)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -133,6 +133,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;     MPIF_H_PMPI_W_FUNCS=
</span><br>
<span class="quotelev2">&gt; &gt; fi
</span><br>
<span class="quotelev2">&gt; &gt; AC_SUBST(MPIF_H_PMPI_W_FUNCS)
</span><br>
<span class="quotelev2">&gt; &gt; +AM_CONDITIONAL(WANT_MPI_PROFILING, test &quot;$WANT_MPI_PROFILING&quot; = 1)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/Makefile.am
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/Makefile.am	Sun Aug 18 19:40:32 2013	(r29042)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/Makefile.am	2013-08-19 10:48:23 EDT (Mon, 19 Aug 2013)	(r29043)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -140,6 +140,13 @@
</span><br>
<span class="quotelev2">&gt; &gt;         $(MCA_ompi_FRAMEWORK_LIBS) \
</span><br>
<span class="quotelev2">&gt; &gt;         $(OMPI_MPIEXT_C_LIBS) \
</span><br>
<span class="quotelev2">&gt; &gt;         $(OMPI_LIBMPI_EXTRA_LIBS)
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +if WANT_MPI_PROFILING
</span><br>
<span class="quotelev2">&gt; &gt; +libmpi_la_LIBADD += \
</span><br>
<span class="quotelev2">&gt; &gt; +        mpi/tool/libmpi_mpit.la
</span><br>
<span class="quotelev2">&gt; &gt; +endif
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; if OMPI_RTE_ORTE
</span><br>
<span class="quotelev2">&gt; &gt; libmpi_la_LIBADD += \
</span><br>
<span class="quotelev2">&gt; &gt;         $(top_ompi_builddir)/orte/libopen-rte.la
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt; &gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12738.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12736.php">Steve Wise: "[OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>In reply to:</strong> <a href="12735.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r29043 - in trunk: config ompi"</a>
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
