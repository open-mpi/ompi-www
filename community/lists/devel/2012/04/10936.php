<?
$subject_val = "Re: [OMPI devel] Time to unify OpenFabrics configury?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 27 10:31:54 2012" -->
<!-- isoreceived="20120427143154" -->
<!-- sent="Fri, 27 Apr 2012 10:31:49 -0400" -->
<!-- isosent="20120427143149" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Time to unify OpenFabrics configury?" -->
<!-- id="244DA7BC-48E0-4A58-8944-5676C554739F_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E2796636-7764-41B8-9DE8-6835815002D1_at_cisco.com" -->
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
<strong>Date:</strong> 2012-04-27 10:31:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10937.php">Jeff Squyres: "Re: [OMPI devel] Time to unify OpenFabrics configury?"</a>
<li><strong>Previous message:</strong> <a href="10935.php">Jeff Squyres: "[OMPI devel] Time to unify OpenFabrics configury?"</a>
<li><strong>In reply to:</strong> <a href="10935.php">Jeff Squyres: "[OMPI devel] Time to unify OpenFabrics configury?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10937.php">Jeff Squyres: "Re: [OMPI devel] Time to unify OpenFabrics configury?"</a>
<li><strong>Reply:</strong> <a href="10937.php">Jeff Squyres: "Re: [OMPI devel] Time to unify OpenFabrics configury?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is a good idea to unify the OFED configure scripts. BUT, I would prefer to do this rework after merge with the new collectives component, since we are going to bring totally new IB components based on extended verbs interface and it obviously adds new configure logic.
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Apr 27, 2012, at 7:48 AM, Jeff Squyres wrote:
&gt; OpenFabrics vendors --
&gt; 
&gt; Now that there's a verbs-based component in orte, it really suggests that we should update / reform the configure options and behavior w.r.t. OpenFabrics-based components.
&gt; 
&gt; For example:
&gt; 
&gt; - is it finally time to rename --with-openib to --with-ofa?
&gt; 
&gt;  - should we also allow --with-openib as a deprecated synonym for the 1.7/1.8 series, and then kill it in 1.9?
&gt; 
&gt; - should we hack up ompi/config/ompi_check_openib.m4:
&gt; 
&gt;  1. split it up to check for smaller things (e.g., one macro to check for basic OpenFabrics, another to check for the RDMACM, another to check for XRC, ...etc.).  The rationale here is that oob/ud requires very little from OFA -- it does not need RDMACM, XRC, ...etc.
&gt; 
&gt;  2. move the resulting OFA-based .m4 out to the top-level config/ directory (vs. ompi/config)?
&gt; 
&gt; ==&gt; Jeff's $0.02 on all of this is &quot;yes&quot;.  :-)
&gt; 
&gt; 
&gt; 
&gt; Begin forwarded message:
&gt; 
&gt;&gt; From: jsquyres_at_[hidden]
&gt;&gt; Subject: [OMPI svn-full] svn:open-mpi r26350
&gt;&gt; Date: April 27, 2012 7:32:56 AM EDT
&gt;&gt; To: svn-full_at_[hidden]
&gt;&gt; Reply-To: devel_at_[hidden]
&gt;&gt; 
&gt;&gt; Author: jsquyres
&gt;&gt; Date: 2012-04-27 07:32:56 EDT (Fri, 27 Apr 2012)
&gt;&gt; New Revision: 26350
&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26350">https://svn.open-mpi.org/trac/ompi/changeset/26350</a>
&gt;&gt; 
&gt;&gt; Log:
&gt;&gt; Update configury in the new oob ud component: actually check to see if
&gt;&gt; it succeeds and run $1 or $2, accordingly.  This allows &quot;make dist&quot; to
&gt;&gt; run properly on machines that do not have OpenFabrics stuff installed
&gt;&gt; (e.g., the nightly tarball build machine).
&gt;&gt; 
&gt;&gt; There's still more to be done here -- it doesn't check for non-uniform
&gt;&gt; directories where the OpenFabrics headers/libraries might be
&gt;&gt; installed.  We might need to re-tool/combine
&gt;&gt; ompi/config/ompi_check_openib.m4 (which checks for way more than
&gt;&gt; oob/ud needs) and move it up to config/ompi_check_ofa.m4, or
&gt;&gt; something...?
&gt;&gt; 
&gt;&gt; Properties modified: 
&gt;&gt;  trunk/orte/mca/oob/ud/   (props changed)
&gt;&gt; Text files modified: 
&gt;&gt;  trunk/orte/mca/oob/ud/Makefile.am  |     8 ++++++--                                
&gt;&gt;  trunk/orte/mca/oob/ud/configure.m4 |    32 ++++++++++++++++++++++++++++++--        
&gt;&gt;  2 files changed, 36 insertions(+), 4 deletions(-)
&gt;&gt; 
&gt;&gt; Modified: trunk/orte/mca/oob/ud/Makefile.am
&gt;&gt; ==============================================================================
&gt;&gt; --- trunk/orte/mca/oob/ud/Makefile.am	(original)
&gt;&gt; +++ trunk/orte/mca/oob/ud/Makefile.am	2012-04-27 07:32:56 EDT (Fri, 27 Apr 2012)
&gt;&gt; @@ -17,6 +17,8 @@
&gt;&gt; # $HEADER$
&gt;&gt; #
&gt;&gt; 
&gt;&gt; +AM_CPPFLAGS = $(orte_oob_ud_CPPFLAGS)
&gt;&gt; +
&gt;&gt; dist_pkgdata_DATA = help-oob-ud.txt
&gt;&gt; 
&gt;&gt; sources = \
&gt;&gt; @@ -49,9 +51,11 @@
&gt;&gt; mcacomponentdir = $(pkglibdir)
&gt;&gt; mcacomponent_LTLIBRARIES = $(component_install)
&gt;&gt; mca_oob_ud_la_SOURCES = $(sources)
&gt;&gt; -mca_oob_ud_la_LDFLAGS = -module -avoid-version -libverbs
&gt;&gt; +mca_oob_ud_la_LDFLAGS = -module -avoid-version $(orte_oob_ud_LDFLAGS)
&gt;&gt; +mca_oob_ud_la_LIBADD = $(orte_oob_ud_LIBS)
&gt;&gt; 
&gt;&gt; noinst_LTLIBRARIES = $(component_noinst)
&gt;&gt; libmca_oob_ud_la_SOURCES = $(sources)
&gt;&gt; -libmca_oob_ud_la_LDFLAGS = -module -avoid-version
&gt;&gt; +libmca_oob_ud_la_LDFLAGS = -module -avoid-version $(orte_oob_ud_LDFLAGS)
&gt;&gt; +libmca_oob_ud_la_LIBADD = $(orte_oob_ud_LIBS)
&gt;&gt; 
&gt;&gt; 
&gt;&gt; Modified: trunk/orte/mca/oob/ud/configure.m4
&gt;&gt; ==============================================================================
&gt;&gt; --- trunk/orte/mca/oob/ud/configure.m4	(original)
&gt;&gt; +++ trunk/orte/mca/oob/ud/configure.m4	2012-04-27 07:32:56 EDT (Fri, 27 Apr 2012)
&gt;&gt; @@ -22,6 +22,34 @@
&gt;&gt; AC_DEFUN([MCA_orte_oob_ud_CONFIG],[
&gt;&gt;    AC_CONFIG_FILES([orte/mca/oob/ud/Makefile])
&gt;&gt; 
&gt;&gt; -    AC_CHECK_HEADER([infiniband/verbs.h])
&gt;&gt; -    AC_CHECK_LIB([ibverbs], [ibv_create_qp])
&gt;&gt; +    # JMS Still have problems with AC_ARG ENABLE not yet having been
&gt;&gt; +    # called or CHECK_WITHDIR'ed.
&gt;&gt; +
&gt;&gt; +    orte_oob_ud_check_save_CPPFLAGS=$CPPFLAGS
&gt;&gt; +    orte_oob_ud_check_save_LDFLAGS=$LDFLAGS
&gt;&gt; +    orte_oob_ud_check_save_LIBS=$LIBS
&gt;&gt; +
&gt;&gt; +    OMPI_CHECK_PACKAGE([orte_oob_ud],
&gt;&gt; +                       [infiniband/verbs.h],
&gt;&gt; +                       [ibverbs],
&gt;&gt; +                       [ibv_open_device],
&gt;&gt; +                       [],
&gt;&gt; +                       [$ompi_check_openib_dir],
&gt;&gt; +                       [$ompi_check_openib_libdir],
&gt;&gt; +                       [orte_oob_ud_check_happy=yes],
&gt;&gt; +                       [orte_oob_ud_check_happy=no])])
&gt;&gt; +
&gt;&gt; +    CPPFLAGS=$orte_oob_ud_check_save_CPPFLAGS
&gt;&gt; +    LDFLAGS=$orte_oob_ud_check_save_LDFLAGS
&gt;&gt; +    LIBS=$orte_oob_ud_check_save_LIBS
&gt;&gt; +
&gt;&gt; +    AS_IF([test &quot;$orte_oob_ud_check_happy&quot; = &quot;yes&quot;],
&gt;&gt; +          [$1],
&gt;&gt; +          [$2])
&gt;&gt; +
&gt;&gt; +    # substitute in the things needed to build this component
&gt;&gt; +    AC_SUBST([orte_oob_ud_CFLAGS])
&gt;&gt; +    AC_SUBST([orte_oob_ud_CPPFLAGS])
&gt;&gt; +    AC_SUBST([orte_oob_ud_LDFLAGS])
&gt;&gt; +    AC_SUBST([orte_oob_ud_LIBS])
&gt;&gt; ])dnl
&gt;&gt; _______________________________________________
&gt;&gt; svn-full mailing list
&gt;&gt; svn-full_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
&gt; 
&gt; 
&gt; -- 
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10937.php">Jeff Squyres: "Re: [OMPI devel] Time to unify OpenFabrics configury?"</a>
<li><strong>Previous message:</strong> <a href="10935.php">Jeff Squyres: "[OMPI devel] Time to unify OpenFabrics configury?"</a>
<li><strong>In reply to:</strong> <a href="10935.php">Jeff Squyres: "[OMPI devel] Time to unify OpenFabrics configury?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10937.php">Jeff Squyres: "Re: [OMPI devel] Time to unify OpenFabrics configury?"</a>
<li><strong>Reply:</strong> <a href="10937.php">Jeff Squyres: "Re: [OMPI devel] Time to unify OpenFabrics configury?"</a>
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
