<?
$subject_val = "[OMPI devel] Time to unify OpenFabrics configury?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 27 07:48:27 2012" -->
<!-- isoreceived="20120427114827" -->
<!-- sent="Fri, 27 Apr 2012 07:48:21 -0400" -->
<!-- isosent="20120427114821" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Time to unify OpenFabrics configury?" -->
<!-- id="E2796636-7764-41B8-9DE8-6835815002D1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201204271132.q3RBWuj0010982_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Time to unify OpenFabrics configury?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-27 07:48:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10936.php">Shamis, Pavel: "Re: [OMPI devel] Time to unify OpenFabrics configury?"</a>
<li><strong>Previous message:</strong> <a href="10934.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10936.php">Shamis, Pavel: "Re: [OMPI devel] Time to unify OpenFabrics configury?"</a>
<li><strong>Reply:</strong> <a href="10936.php">Shamis, Pavel: "Re: [OMPI devel] Time to unify OpenFabrics configury?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OpenFabrics vendors --
<br>
<p>Now that there's a verbs-based component in orte, it really suggests that we should update / reform the configure options and behavior w.r.t. OpenFabrics-based components.
<br>
<p>For example:
<br>
<p>- is it finally time to rename --with-openib to --with-ofa?
<br>
<p>&nbsp;&nbsp;- should we also allow --with-openib as a deprecated synonym for the 1.7/1.8 series, and then kill it in 1.9?
<br>
<p>- should we hack up ompi/config/ompi_check_openib.m4:
<br>
<p>&nbsp;&nbsp;1. split it up to check for smaller things (e.g., one macro to check for basic OpenFabrics, another to check for the RDMACM, another to check for XRC, ...etc.).  The rationale here is that oob/ud requires very little from OFA -- it does not need RDMACM, XRC, ...etc.
<br>
<p>&nbsp;&nbsp;2. move the resulting OFA-based .m4 out to the top-level config/ directory (vs. ompi/config)?
<br>
<p>==&gt; Jeff's $0.02 on all of this is &quot;yes&quot;.  :-)
<br>
<p><p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI svn-full] svn:open-mpi r26350
</span><br>
<span class="quotelev1">&gt; Date: April 27, 2012 7:32:56 AM EDT
</span><br>
<span class="quotelev1">&gt; To: svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Reply-To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2012-04-27 07:32:56 EDT (Fri, 27 Apr 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 26350
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26350">https://svn.open-mpi.org/trac/ompi/changeset/26350</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Update configury in the new oob ud component: actually check to see if
</span><br>
<span class="quotelev1">&gt; it succeeds and run $1 or $2, accordingly.  This allows &quot;make dist&quot; to
</span><br>
<span class="quotelev1">&gt; run properly on machines that do not have OpenFabrics stuff installed
</span><br>
<span class="quotelev1">&gt; (e.g., the nightly tarball build machine).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's still more to be done here -- it doesn't check for non-uniform
</span><br>
<span class="quotelev1">&gt; directories where the OpenFabrics headers/libraries might be
</span><br>
<span class="quotelev1">&gt; installed.  We might need to re-tool/combine
</span><br>
<span class="quotelev1">&gt; ompi/config/ompi_check_openib.m4 (which checks for way more than
</span><br>
<span class="quotelev1">&gt; oob/ud needs) and move it up to config/ompi_check_ofa.m4, or
</span><br>
<span class="quotelev1">&gt; something...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Properties modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/oob/ud/   (props changed)
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/oob/ud/Makefile.am  |     8 ++++++--                                
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/oob/ud/configure.m4 |    32 ++++++++++++++++++++++++++++++--        
</span><br>
<span class="quotelev1">&gt;   2 files changed, 36 insertions(+), 4 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/oob/ud/Makefile.am
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/oob/ud/Makefile.am	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/oob/ud/Makefile.am	2012-04-27 07:32:56 EDT (Fri, 27 Apr 2012)
</span><br>
<span class="quotelev1">&gt; @@ -17,6 +17,8 @@
</span><br>
<span class="quotelev1">&gt; # $HEADER$
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +AM_CPPFLAGS = $(orte_oob_ud_CPPFLAGS)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; dist_pkgdata_DATA = help-oob-ud.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sources = \
</span><br>
<span class="quotelev1">&gt; @@ -49,9 +51,11 @@
</span><br>
<span class="quotelev1">&gt; mcacomponentdir = $(pkglibdir)
</span><br>
<span class="quotelev1">&gt; mcacomponent_LTLIBRARIES = $(component_install)
</span><br>
<span class="quotelev1">&gt; mca_oob_ud_la_SOURCES = $(sources)
</span><br>
<span class="quotelev1">&gt; -mca_oob_ud_la_LDFLAGS = -module -avoid-version -libverbs
</span><br>
<span class="quotelev1">&gt; +mca_oob_ud_la_LDFLAGS = -module -avoid-version $(orte_oob_ud_LDFLAGS)
</span><br>
<span class="quotelev1">&gt; +mca_oob_ud_la_LIBADD = $(orte_oob_ud_LIBS)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; noinst_LTLIBRARIES = $(component_noinst)
</span><br>
<span class="quotelev1">&gt; libmca_oob_ud_la_SOURCES = $(sources)
</span><br>
<span class="quotelev1">&gt; -libmca_oob_ud_la_LDFLAGS = -module -avoid-version
</span><br>
<span class="quotelev1">&gt; +libmca_oob_ud_la_LDFLAGS = -module -avoid-version $(orte_oob_ud_LDFLAGS)
</span><br>
<span class="quotelev1">&gt; +libmca_oob_ud_la_LIBADD = $(orte_oob_ud_LIBS)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/oob/ud/configure.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/oob/ud/configure.m4	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/oob/ud/configure.m4	2012-04-27 07:32:56 EDT (Fri, 27 Apr 2012)
</span><br>
<span class="quotelev1">&gt; @@ -22,6 +22,34 @@
</span><br>
<span class="quotelev1">&gt; AC_DEFUN([MCA_orte_oob_ud_CONFIG],[
</span><br>
<span class="quotelev1">&gt;     AC_CONFIG_FILES([orte/mca/oob/ud/Makefile])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    AC_CHECK_HEADER([infiniband/verbs.h])
</span><br>
<span class="quotelev1">&gt; -    AC_CHECK_LIB([ibverbs], [ibv_create_qp])
</span><br>
<span class="quotelev1">&gt; +    # JMS Still have problems with AC_ARG ENABLE not yet having been
</span><br>
<span class="quotelev1">&gt; +    # called or CHECK_WITHDIR'ed.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    orte_oob_ud_check_save_CPPFLAGS=$CPPFLAGS
</span><br>
<span class="quotelev1">&gt; +    orte_oob_ud_check_save_LDFLAGS=$LDFLAGS
</span><br>
<span class="quotelev1">&gt; +    orte_oob_ud_check_save_LIBS=$LIBS
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    OMPI_CHECK_PACKAGE([orte_oob_ud],
</span><br>
<span class="quotelev1">&gt; +                       [infiniband/verbs.h],
</span><br>
<span class="quotelev1">&gt; +                       [ibverbs],
</span><br>
<span class="quotelev1">&gt; +                       [ibv_open_device],
</span><br>
<span class="quotelev1">&gt; +                       [],
</span><br>
<span class="quotelev1">&gt; +                       [$ompi_check_openib_dir],
</span><br>
<span class="quotelev1">&gt; +                       [$ompi_check_openib_libdir],
</span><br>
<span class="quotelev1">&gt; +                       [orte_oob_ud_check_happy=yes],
</span><br>
<span class="quotelev1">&gt; +                       [orte_oob_ud_check_happy=no])])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    CPPFLAGS=$orte_oob_ud_check_save_CPPFLAGS
</span><br>
<span class="quotelev1">&gt; +    LDFLAGS=$orte_oob_ud_check_save_LDFLAGS
</span><br>
<span class="quotelev1">&gt; +    LIBS=$orte_oob_ud_check_save_LIBS
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    AS_IF([test &quot;$orte_oob_ud_check_happy&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt; +          [$1],
</span><br>
<span class="quotelev1">&gt; +          [$2])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # substitute in the things needed to build this component
</span><br>
<span class="quotelev1">&gt; +    AC_SUBST([orte_oob_ud_CFLAGS])
</span><br>
<span class="quotelev1">&gt; +    AC_SUBST([orte_oob_ud_CPPFLAGS])
</span><br>
<span class="quotelev1">&gt; +    AC_SUBST([orte_oob_ud_LDFLAGS])
</span><br>
<span class="quotelev1">&gt; +    AC_SUBST([orte_oob_ud_LIBS])
</span><br>
<span class="quotelev1">&gt; ])dnl
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
<li><strong>Next message:</strong> <a href="10936.php">Shamis, Pavel: "Re: [OMPI devel] Time to unify OpenFabrics configury?"</a>
<li><strong>Previous message:</strong> <a href="10934.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10936.php">Shamis, Pavel: "Re: [OMPI devel] Time to unify OpenFabrics configury?"</a>
<li><strong>Reply:</strong> <a href="10936.php">Shamis, Pavel: "Re: [OMPI devel] Time to unify OpenFabrics configury?"</a>
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
