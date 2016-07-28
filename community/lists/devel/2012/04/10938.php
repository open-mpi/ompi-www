<?
$subject_val = "Re: [OMPI devel] Time to unify OpenFabrics configury?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 27 10:46:20 2012" -->
<!-- isoreceived="20120427144620" -->
<!-- sent="Fri, 27 Apr 2012 10:46:15 -0400" -->
<!-- isosent="20120427144615" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Time to unify OpenFabrics configury?" -->
<!-- id="3E23BAA9-1321-4365-B798-6C0F7CC585C2_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B773754B-EB78-4A01-9040-9FE4CEB0133F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Time to unify OpenFabrics configury?<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-27 10:46:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10939.php">Jeff Squyres: "Re: [OMPI devel] June Developers Meeting"</a>
<li><strong>Previous message:</strong> <a href="10937.php">Jeff Squyres: "Re: [OMPI devel] Time to unify OpenFabrics configury?"</a>
<li><strong>In reply to:</strong> <a href="10937.php">Jeff Squyres: "Re: [OMPI devel] Time to unify OpenFabrics configury?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Apr 27, 2012, at 10:31 AM, Shamis, Pavel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It is a good idea to unify the OFED configure scripts. BUT, I would prefer to do this rework after merge with the new collectives component, since we are going to bring totally new IB components based on extended verbs interface and it obviously adds new configure logic.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you add new stuff to ompi/config/ompi_check_openib.m4?
</span><br>
<p>I think the answer yes. As well we added new configure scripts.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When do you expect to merge the new collective stuff?
</span><br>
<p>Yesterday :-) I would say about 2-3 weeks.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Application Performance Tools Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science and Math Division
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 27, 2012, at 7:48 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenFabrics vendors --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now that there's a verbs-based component in orte, it really suggests that we should update / reform the configure options and behavior w.r.t. OpenFabrics-based components.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For example:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - is it finally time to rename --with-openib to --with-ofa?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - should we also allow --with-openib as a deprecated synonym for the 1.7/1.8 series, and then kill it in 1.9?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - should we hack up ompi/config/ompi_check_openib.m4:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. split it up to check for smaller things (e.g., one macro to check for basic OpenFabrics, another to check for the RDMACM, another to check for XRC, ...etc.).  The rationale here is that oob/ud requires very little from OFA -- it does not need RDMACM, XRC, ...etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. move the resulting OFA-based .m4 out to the top-level config/ directory (vs. ompi/config)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==&gt; Jeff's $0.02 on all of this is &quot;yes&quot;.  :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: [OMPI svn-full] svn:open-mpi r26350
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: April 27, 2012 7:32:56 AM EDT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: svn-full_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Reply-To: devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Author: jsquyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: 2012-04-27 07:32:56 EDT (Fri, 27 Apr 2012)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; New Revision: 26350
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26350">https://svn.open-mpi.org/trac/ompi/changeset/26350</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Update configury in the new oob ud component: actually check to see if
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it succeeds and run $1 or $2, accordingly.  This allows &quot;make dist&quot; to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; run properly on machines that do not have OpenFabrics stuff installed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (e.g., the nightly tarball build machine).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There's still more to be done here -- it doesn't check for non-uniform
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; directories where the OpenFabrics headers/libraries might be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; installed.  We might need to re-tool/combine
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi/config/ompi_check_openib.m4 (which checks for way more than
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; oob/ud needs) and move it up to config/ompi_check_ofa.m4, or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; something...?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Properties modified: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunk/orte/mca/oob/ud/   (props changed)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunk/orte/mca/oob/ud/Makefile.am  |     8 ++++++--                                
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunk/orte/mca/oob/ud/configure.m4 |    32 ++++++++++++++++++++++++++++++--        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2 files changed, 36 insertions(+), 4 deletions(-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/orte/mca/oob/ud/Makefile.am
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/orte/mca/oob/ud/Makefile.am	(original)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/orte/mca/oob/ud/Makefile.am	2012-04-27 07:32:56 EDT (Fri, 27 Apr 2012)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -17,6 +17,8 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # $HEADER$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +AM_CPPFLAGS = $(orte_oob_ud_CPPFLAGS)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dist_pkgdata_DATA = help-oob-ud.txt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sources = \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -49,9 +51,11 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mcacomponentdir = $(pkglibdir)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mcacomponent_LTLIBRARIES = $(component_install)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_oob_ud_la_SOURCES = $(sources)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mca_oob_ud_la_LDFLAGS = -module -avoid-version -libverbs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +mca_oob_ud_la_LDFLAGS = -module -avoid-version $(orte_oob_ud_LDFLAGS)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +mca_oob_ud_la_LIBADD = $(orte_oob_ud_LIBS)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; noinst_LTLIBRARIES = $(component_noinst)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libmca_oob_ud_la_SOURCES = $(sources)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -libmca_oob_ud_la_LDFLAGS = -module -avoid-version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +libmca_oob_ud_la_LDFLAGS = -module -avoid-version $(orte_oob_ud_LDFLAGS)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +libmca_oob_ud_la_LIBADD = $(orte_oob_ud_LIBS)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/orte/mca/oob/ud/configure.m4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/orte/mca/oob/ud/configure.m4	(original)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/orte/mca/oob/ud/configure.m4	2012-04-27 07:32:56 EDT (Fri, 27 Apr 2012)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -22,6 +22,34 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; AC_DEFUN([MCA_orte_oob_ud_CONFIG],[
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  AC_CONFIG_FILES([orte/mca/oob/ud/Makefile])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    AC_CHECK_HEADER([infiniband/verbs.h])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    AC_CHECK_LIB([ibverbs], [ibv_create_qp])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    # JMS Still have problems with AC_ARG ENABLE not yet having been
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    # called or CHECK_WITHDIR'ed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    orte_oob_ud_check_save_CPPFLAGS=$CPPFLAGS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    orte_oob_ud_check_save_LDFLAGS=$LDFLAGS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    orte_oob_ud_check_save_LIBS=$LIBS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    OMPI_CHECK_PACKAGE([orte_oob_ud],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                       [infiniband/verbs.h],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                       [ibverbs],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                       [ibv_open_device],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                       [],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                       [$ompi_check_openib_dir],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                       [$ompi_check_openib_libdir],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                       [orte_oob_ud_check_happy=yes],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                       [orte_oob_ud_check_happy=no])])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    CPPFLAGS=$orte_oob_ud_check_save_CPPFLAGS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    LDFLAGS=$orte_oob_ud_check_save_LDFLAGS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    LIBS=$orte_oob_ud_check_save_LIBS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    AS_IF([test &quot;$orte_oob_ud_check_happy&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +          [$1],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +          [$2])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    # substitute in the things needed to build this component
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    AC_SUBST([orte_oob_ud_CFLAGS])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    AC_SUBST([orte_oob_ud_CPPFLAGS])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    AC_SUBST([orte_oob_ud_LDFLAGS])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    AC_SUBST([orte_oob_ud_LIBS])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ])dnl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="10939.php">Jeff Squyres: "Re: [OMPI devel] June Developers Meeting"</a>
<li><strong>Previous message:</strong> <a href="10937.php">Jeff Squyres: "Re: [OMPI devel] Time to unify OpenFabrics configury?"</a>
<li><strong>In reply to:</strong> <a href="10937.php">Jeff Squyres: "Re: [OMPI devel] Time to unify OpenFabrics configury?"</a>
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
