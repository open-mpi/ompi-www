<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 17 13:12:00 2007" -->
<!-- isoreceived="20070817171200" -->
<!-- sent="Fri, 17 Aug 2007 11:11:43 -0600" -->
<!-- isosent="20070817171143" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r15903" -->
<!-- id="620C66C9-1C4E-4891-BE61-3B677BB21125_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="613E3E80-E982-4900-88D1-E7881DE63AF9_at_lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-17 13:11:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2189.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Public tmp branches"</a>
<li><strong>Previous message:</strong> <a href="2187.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15903"</a>
<li><strong>In reply to:</strong> <a href="2187.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15903"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed.  Sorry about the configure change mid-day, but it seemed like  
<br>
the right thing to do.
<br>
<p>Brian
<br>
<p><p>On Aug 17, 2007, at 10:37 AM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; Oh, crud.  I forgot to fix that issue.  Will fix asap.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 17, 2007, at 10:12 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This patch break the trunk. It looks like the LT_PACKAGE_VERSION
</span><br>
<span class="quotelev2">&gt;&gt; wasn't defined before the 2.x version. The autogen fails with the
</span><br>
<span class="quotelev2">&gt;&gt; following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** Running GNU tools
</span><br>
<span class="quotelev2">&gt;&gt; [Running] autom4te --language=m4sh ompi_get_version.m4sh -o
</span><br>
<span class="quotelev2">&gt;&gt; ompi_get_version.sh
</span><br>
<span class="quotelev2">&gt;&gt; [Running] aclocal
</span><br>
<span class="quotelev2">&gt;&gt; configure.ac:998: error: m4_defn: undefined macro: LT_PACKAGE_VERSION
</span><br>
<span class="quotelev2">&gt;&gt; configure.ac:998: the top level
</span><br>
<span class="quotelev2">&gt;&gt; autom4te: /usr/bin/m4 failed with exit status: 1
</span><br>
<span class="quotelev2">&gt;&gt; aclocal: autom4te failed with exit status: 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 17, 2007, at 12:08 AM, brbarret_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: brbarret
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2007-08-17 00:08:23 EDT (Fri, 17 Aug 2007)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 15903
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15903">https://svn.open-mpi.org/trac/ompi/changeset/15903</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Support versions of the Libtool 2.1a snapshots after the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lt_dladvise code
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was brought in.  This supercedes the GLOBL patch that we had been
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with Libtool 2.1a versions prior to the lt_dladvise code.  Autogen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tries to figure out which version you're on, so either will now
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/configure.ac                                  |    18 +++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++++++++++--
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/opal/mca/base/mca_base_component_find.c       |     8 +++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/opal/mca/base/mca_base_component_repository.c |    24 +++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++++++++++++++++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    3 files changed, 48 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/configure.ac
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ========
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/configure.ac	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/configure.ac	2007-08-17 00:08:23 EDT (Fri, 17 Aug 2007)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -995,10 +995,15 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ompi_show_subtitle &quot;Libtool configuration&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +m4_if(m4_version_compare(m4_defn([LT_PACKAGE_VERSION]), 2.0), -1, [
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  AC_LIBLTDL_CONVENIENCE(opal/libltdl)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  AC_LIBTOOL_DLOPEN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  AC_PROG_LIBTOOL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +], [
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +LT_CONFIG_LTDL_DIR([opal/libltdl], [subproject])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +LTDL_CONVENIENCE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +LT_INIT([dlopen win32-dll])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ompi_show_subtitle &quot;GNU libltdl setup&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  # AC_CONFIG_SUBDIRS appears to be broken for non-gcc compilers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (i.e.,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1038,6 +1043,13 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if test &quot;$HAPPY&quot; = &quot;1&quot;; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          LIBLTDL_SUBDIR=libltdl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        CPPFLAGS_save=&quot;$CPPFLAGS&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        CPPFLAGS=&quot;-I.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        AC_EGREP_HEADER([lt_dladvise_init], [opal/libltdl/ltdl.h],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                        [OPAL_HAVE_LTDL_ADVISE=1],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                        [OPAL_HAVE_LTDL_ADVISE=0])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        CPPFLAGS=&quot;$CPPFLAGS&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          # Arrgh.  This is gross.  But I can't think of any other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; way to do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          # it.  :-(
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1057,7 +1069,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      AC_MSG_WARN([libltdl support disabled (by --disable-dlopen)])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      LIBLTDL_SUBDIR=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    LIBLTDL=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    OPAL_HAVE_LTDL_ADVISE=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      # append instead of prepend, since LIBS are going to be system
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      # type things needed by everyone.  Normally, libltdl will push
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1073,6 +1085,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  AC_DEFINE_UNQUOTED(OMPI_WANT_LIBLTDL, $OMPI_ENABLE_DLOPEN_SUPPORT,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [Whether to include support for libltdl or not])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +AC_DEFINE_UNQUOTED(OPAL_HAVE_LTDL_ADVISE, $OPAL_HAVE_LTDL_ADVISE,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    [Whether libltdl appears to have the lt_dladvise interface])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ##################################
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  # visibility
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/opal/mca/base/mca_base_component_find.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ========
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/opal/mca/base/mca_base_component_find.c	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/opal/mca/base/mca_base_component_find.c	2007-08-17
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00:08:23 EDT (Fri, 17 Aug 2007)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -75,6 +75,10 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    char name[MCA_BASE_MAX_COMPONENT_NAME_LEN];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  typedef struct ltfn_data_holder_t ltfn_data_holder_t;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_LTDL_ADVISE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +extern lt_dladvise opal_mca_dladvise;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif /* OMPI_WANT_LIBLTDL */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -387,7 +391,11 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /* Now try to load the component */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_LTDL_ADVISE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +  component_handle = lt_dlopenadvise(target_file-&gt;filename,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_mca_dladvise);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    component_handle = lt_dlopenext(target_file-&gt;filename);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if (NULL == component_handle) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      err = strdup(lt_dlerror());
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (0 != show_errors) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/opal/mca/base/mca_base_component_repository.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ========
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/opal/mca/base/mca_base_component_repository.c	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/opal/mca/base/mca_base_component_repository.c	2007-08-17
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00:08:23 EDT (Fri, 17 Aug 2007)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -85,6 +85,10 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  static repository_item_t *find_component(const char *type, const
</span><br>
<span class="quotelev3">&gt;&gt;&gt; char *name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  static int link_items(repository_item_t *src, repository_item_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *depend);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_LTDL_ADVISE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +lt_dladvise opal_mca_dladvise;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif /* OMPI_WANT_LIBLTDL */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -103,6 +107,20 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        return OPAL_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_LTDL_ADVISE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if (lt_dladvise_init(&amp;opal_mca_dladvise)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        return OPAL_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if (lt_dladvise_ext(&amp;opal_mca_dladvise)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        return OPAL_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if (lt_dladvise_global(&amp;opal_mca_dladvise)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        return OPAL_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OBJ_CONSTRUCT(&amp;repository, opal_list_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      initialized = true;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -255,6 +273,12 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      } while (opal_list_get_size(&amp;repository) &gt; 0);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if OPAL_HAVE_LTDL_ADVISE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if (lt_dladvise_destroy(&amp;opal_mca_dladvise)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        return OPAL_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /* Close down libltdl */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      lt_dlexit();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
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
<li><strong>Next message:</strong> <a href="2189.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Public tmp branches"</a>
<li><strong>Previous message:</strong> <a href="2187.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15903"</a>
<li><strong>In reply to:</strong> <a href="2187.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15903"</a>
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
