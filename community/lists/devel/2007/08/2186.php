<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 17 12:12:55 2007" -->
<!-- isoreceived="20070817161255" -->
<!-- sent="Fri, 17 Aug 2007 12:12:46 -0400" -->
<!-- isosent="20070817161246" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r15903" -->
<!-- id="41B05A8A-C2F8-483E-9765-FA7C52095EFB_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200708170408.l7H48Ok6008506_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-17 12:12:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2187.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15903"</a>
<li><strong>Previous message:</strong> <a href="2185.php">Brian Barrett: "Re: [OMPI devel] Public tmp branches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2187.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15903"</a>
<li><strong>Reply:</strong> <a href="2187.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15903"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This patch break the trunk. It looks like the LT_PACKAGE_VERSION  
<br>
wasn't defined before the 2.x version. The autogen fails with the  
<br>
following error:
<br>
<p>*** Running GNU tools
<br>
[Running] autom4te --language=m4sh ompi_get_version.m4sh -o  
<br>
ompi_get_version.sh
<br>
[Running] aclocal
<br>
configure.ac:998: error: m4_defn: undefined macro: LT_PACKAGE_VERSION
<br>
configure.ac:998: the top level
<br>
autom4te: /usr/bin/m4 failed with exit status: 1
<br>
aclocal: autom4te failed with exit status: 1
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 17, 2007, at 12:08 AM, brbarret_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: brbarret
</span><br>
<span class="quotelev1">&gt; Date: 2007-08-17 00:08:23 EDT (Fri, 17 Aug 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 15903
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15903">https://svn.open-mpi.org/trac/ompi/changeset/15903</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Support versions of the Libtool 2.1a snapshots after the  
</span><br>
<span class="quotelev1">&gt; lt_dladvise code
</span><br>
<span class="quotelev1">&gt; was brought in.  This supercedes the GLOBL patch that we had been  
</span><br>
<span class="quotelev1">&gt; using
</span><br>
<span class="quotelev1">&gt; with Libtool 2.1a versions prior to the lt_dladvise code.  Autogen
</span><br>
<span class="quotelev1">&gt; tries to figure out which version you're on, so either will now  
</span><br>
<span class="quotelev1">&gt; work with
</span><br>
<span class="quotelev1">&gt; the trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/configure.ac                                  |    18 +++++ 
</span><br>
<span class="quotelev1">&gt; +++++++++++--
</span><br>
<span class="quotelev1">&gt;    trunk/opal/mca/base/mca_base_component_find.c       |     8 +++++ 
</span><br>
<span class="quotelev1">&gt; +++
</span><br>
<span class="quotelev1">&gt;    trunk/opal/mca/base/mca_base_component_repository.c |    24 +++++ 
</span><br>
<span class="quotelev1">&gt; +++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;    3 files changed, 48 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/configure.ac
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/configure.ac	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/configure.ac	2007-08-17 00:08:23 EDT (Fri, 17 Aug 2007)
</span><br>
<span class="quotelev1">&gt; @@ -995,10 +995,15 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ompi_show_subtitle &quot;Libtool configuration&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +m4_if(m4_version_compare(m4_defn([LT_PACKAGE_VERSION]), 2.0), -1, [
</span><br>
<span class="quotelev1">&gt;  AC_LIBLTDL_CONVENIENCE(opal/libltdl)
</span><br>
<span class="quotelev1">&gt;  AC_LIBTOOL_DLOPEN
</span><br>
<span class="quotelev1">&gt;  AC_PROG_LIBTOOL
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +], [
</span><br>
<span class="quotelev1">&gt; +LT_CONFIG_LTDL_DIR([opal/libltdl], [subproject])
</span><br>
<span class="quotelev1">&gt; +LTDL_CONVENIENCE
</span><br>
<span class="quotelev1">&gt; +LT_INIT([dlopen win32-dll])
</span><br>
<span class="quotelev1">&gt; +])
</span><br>
<span class="quotelev1">&gt;  ompi_show_subtitle &quot;GNU libltdl setup&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # AC_CONFIG_SUBDIRS appears to be broken for non-gcc compilers (i.e.,
</span><br>
<span class="quotelev1">&gt; @@ -1038,6 +1043,13 @@
</span><br>
<span class="quotelev1">&gt;      if test &quot;$HAPPY&quot; = &quot;1&quot;; then
</span><br>
<span class="quotelev1">&gt;          LIBLTDL_SUBDIR=libltdl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        CPPFLAGS_save=&quot;$CPPFLAGS&quot;
</span><br>
<span class="quotelev1">&gt; +        CPPFLAGS=&quot;-I.&quot;
</span><br>
<span class="quotelev1">&gt; +        AC_EGREP_HEADER([lt_dladvise_init], [opal/libltdl/ltdl.h],
</span><br>
<span class="quotelev1">&gt; +                        [OPAL_HAVE_LTDL_ADVISE=1],
</span><br>
<span class="quotelev1">&gt; +                        [OPAL_HAVE_LTDL_ADVISE=0])
</span><br>
<span class="quotelev1">&gt; +        CPPFLAGS=&quot;$CPPFLAGS&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;          # Arrgh.  This is gross.  But I can't think of any other  
</span><br>
<span class="quotelev1">&gt; way to do
</span><br>
<span class="quotelev1">&gt;          # it.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -1057,7 +1069,7 @@
</span><br>
<span class="quotelev1">&gt;      AC_MSG_WARN([libltdl support disabled (by --disable-dlopen)])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      LIBLTDL_SUBDIR=
</span><br>
<span class="quotelev1">&gt; -    LIBLTDL=
</span><br>
<span class="quotelev1">&gt; +    OPAL_HAVE_LTDL_ADVISE=0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      # append instead of prepend, since LIBS are going to be system
</span><br>
<span class="quotelev1">&gt;      # type things needed by everyone.  Normally, libltdl will push
</span><br>
<span class="quotelev1">&gt; @@ -1073,6 +1085,8 @@
</span><br>
<span class="quotelev1">&gt;  AC_DEFINE_UNQUOTED(OMPI_WANT_LIBLTDL, $OMPI_ENABLE_DLOPEN_SUPPORT,
</span><br>
<span class="quotelev1">&gt;      [Whether to include support for libltdl or not])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +AC_DEFINE_UNQUOTED(OPAL_HAVE_LTDL_ADVISE, $OPAL_HAVE_LTDL_ADVISE,
</span><br>
<span class="quotelev1">&gt; +    [Whether libltdl appears to have the lt_dladvise interface])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ##################################
</span><br>
<span class="quotelev1">&gt;  # visibility
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/base/mca_base_component_find.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/base/mca_base_component_find.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/base/mca_base_component_find.c	2007-08-17  
</span><br>
<span class="quotelev1">&gt; 00:08:23 EDT (Fri, 17 Aug 2007)
</span><br>
<span class="quotelev1">&gt; @@ -75,6 +75,10 @@
</span><br>
<span class="quotelev1">&gt;    char name[MCA_BASE_MAX_COMPONENT_NAME_LEN];
</span><br>
<span class="quotelev1">&gt;  };
</span><br>
<span class="quotelev1">&gt;  typedef struct ltfn_data_holder_t ltfn_data_holder_t;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#if OPAL_HAVE_LTDL_ADVISE
</span><br>
<span class="quotelev1">&gt; +extern lt_dladvise opal_mca_dladvise;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;  #endif /* OMPI_WANT_LIBLTDL */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -387,7 +391,11 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /* Now try to load the component */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#if OPAL_HAVE_LTDL_ADVISE
</span><br>
<span class="quotelev1">&gt; +  component_handle = lt_dlopenadvise(target_file-&gt;filename,  
</span><br>
<span class="quotelev1">&gt; opal_mca_dladvise);
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt;    component_handle = lt_dlopenext(target_file-&gt;filename);
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;    if (NULL == component_handle) {
</span><br>
<span class="quotelev1">&gt;      err = strdup(lt_dlerror());
</span><br>
<span class="quotelev1">&gt;      if (0 != show_errors) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/base/mca_base_component_repository.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/base/mca_base_component_repository.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/base/mca_base_component_repository.c	2007-08-17  
</span><br>
<span class="quotelev1">&gt; 00:08:23 EDT (Fri, 17 Aug 2007)
</span><br>
<span class="quotelev1">&gt; @@ -85,6 +85,10 @@
</span><br>
<span class="quotelev1">&gt;  static repository_item_t *find_component(const char *type, const  
</span><br>
<span class="quotelev1">&gt; char *name);
</span><br>
<span class="quotelev1">&gt;  static int link_items(repository_item_t *src, repository_item_t  
</span><br>
<span class="quotelev1">&gt; *depend);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#if OPAL_HAVE_LTDL_ADVISE
</span><br>
<span class="quotelev1">&gt; +lt_dladvise opal_mca_dladvise;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  #endif /* OMPI_WANT_LIBLTDL */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -103,6 +107,20 @@
</span><br>
<span class="quotelev1">&gt;        return OPAL_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#if OPAL_HAVE_LTDL_ADVISE
</span><br>
<span class="quotelev1">&gt; +    if (lt_dladvise_init(&amp;opal_mca_dladvise)) {
</span><br>
<span class="quotelev1">&gt; +        return OPAL_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (lt_dladvise_ext(&amp;opal_mca_dladvise)) {
</span><br>
<span class="quotelev1">&gt; +        return OPAL_ERROR;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (lt_dladvise_global(&amp;opal_mca_dladvise)) {
</span><br>
<span class="quotelev1">&gt; +        return OPAL_ERROR;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      OBJ_CONSTRUCT(&amp;repository, opal_list_t);
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;      initialized = true;
</span><br>
<span class="quotelev1">&gt; @@ -255,6 +273,12 @@
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;      } while (opal_list_get_size(&amp;repository) &gt; 0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#if OPAL_HAVE_LTDL_ADVISE
</span><br>
<span class="quotelev1">&gt; +    if (lt_dladvise_destroy(&amp;opal_mca_dladvise)) {
</span><br>
<span class="quotelev1">&gt; +        return OPAL_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      /* Close down libltdl */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      lt_dlexit();
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2187.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15903"</a>
<li><strong>Previous message:</strong> <a href="2185.php">Brian Barrett: "Re: [OMPI devel] Public tmp branches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2187.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15903"</a>
<li><strong>Reply:</strong> <a href="2187.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15903"</a>
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
