<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-564-g6c468b8";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 16:40:12 2014" -->
<!-- isoreceived="20141217214012" -->
<!-- sent="Wed, 17 Dec 2014 14:40:11 -0700" -->
<!-- isosent="20141217214011" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-564-g6c468b8" -->
<!-- id="CAF1Cqj6ohOjWARHvfb5NeHjw-tOmeCGnngpSWAfWU8EoR_9+kQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20141217213630.98C7A26084E_at_lion.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-564-g6c468b8<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 16:40:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16657.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-564-g6c468b8"</a>
<li><strong>Previous message:</strong> <a href="16655.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16657.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-564-g6c468b8"</a>
<li><strong>Reply:</strong> <a href="16657.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-564-g6c468b8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Why did you delete the il
<br>
<p>libmca_common_alps_so_version
<br>
<p>thats going to break my stuff.
<br>
<p><p>2014-12-17 14:36 GMT-07:00 &lt;gitdub_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev1">&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev1">&gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The branch, master has been updated
</span><br>
<span class="quotelev1">&gt;        via  6c468b8691708fcc7c130a389804d98f26b1e783 (commit)
</span><br>
<span class="quotelev1">&gt;        via  f1a5d3a90df09b4f8749555936d71bae75477a45 (commit)
</span><br>
<span class="quotelev1">&gt;        via  d6f059f53870bae6082ad408d6c0760c795ecb9b (commit)
</span><br>
<span class="quotelev1">&gt;        via  4dcb92ab0b7c8b8a76f0a606d39d3ca529831930 (commit)
</span><br>
<span class="quotelev1">&gt;        via  6edc19d78db25eb31774a42e282abab496550071 (commit)
</span><br>
<span class="quotelev1">&gt;       from  f55de452abdeeaa282205b21f6183e3e09cfdeba (commit)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev1">&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev1">&gt; revisions in full, below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/6c468b8691708fcc7c130a389804d98f26b1e783">https://github.com/open-mpi/ompi/commit/6c468b8691708fcc7c130a389804d98f26b1e783</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; commit 6c468b8691708fcc7c130a389804d98f26b1e783
</span><br>
<span class="quotelev1">&gt; Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Wed Dec 17 13:29:02 2014 -0800
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     configury: remove unused shared library version numbers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     These components do not exist any more, so remove their shared library
</span><br>
<span class="quotelev1">&gt;     version numbers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --git a/VERSION b/VERSION
</span><br>
<span class="quotelev1">&gt; index 526ee11..14043e8 100644
</span><br>
<span class="quotelev1">&gt; --- a/VERSION
</span><br>
<span class="quotelev1">&gt; +++ b/VERSION
</span><br>
<span class="quotelev1">&gt; @@ -100,14 +100,12 @@ liboshmem_java_so_version=0:0:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # OMPI layer
</span><br>
<span class="quotelev1">&gt;  libmca_common_cuda_so_version=0:0:0
</span><br>
<span class="quotelev1">&gt; -libmca_common_mx_so_version=0:0:0
</span><br>
<span class="quotelev1">&gt;  libmca_common_ofacm_so_version=0:0:0
</span><br>
<span class="quotelev1">&gt;  libmca_common_sm_so_version=0:0:0
</span><br>
<span class="quotelev1">&gt;  libmca_common_ugni_so_version=0:0:0
</span><br>
<span class="quotelev1">&gt;  libmca_common_verbs_so_version=0:0:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # OPAL layer
</span><br>
<span class="quotelev1">&gt; -libmca_opal_common_pmi_so_version=0:0:0
</span><br>
<span class="quotelev1">&gt;  libmca_opal_common_libfabric_so_version=0:0:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # ORTE layer
</span><br>
<span class="quotelev1">&gt; diff --git a/configure.ac b/configure.ac
</span><br>
<span class="quotelev1">&gt; index dafde80..a393e2f 100644
</span><br>
<span class="quotelev1">&gt; --- a/configure.ac
</span><br>
<span class="quotelev1">&gt; +++ b/configure.ac
</span><br>
<span class="quotelev1">&gt; @@ -132,13 +132,7 @@ m4_ifdef([project_ompi],
</span><br>
<span class="quotelev1">&gt;            AC_SUBST(libmpi_usempi_tkr_so_version)
</span><br>
<span class="quotelev1">&gt;            AC_SUBST(libmpi_usempi_ignore_tkr_so_version)
</span><br>
<span class="quotelev1">&gt;            AC_SUBST(libmpi_usempif08_so_version)
</span><br>
<span class="quotelev1">&gt; -          AC_SUBST(libmpi_java_so_version)
</span><br>
<span class="quotelev1">&gt; -          # It's icky that we have to hard-code the names of the
</span><br>
<span class="quotelev1">&gt; -          # common components here.  :-( This could probably be done
</span><br>
<span class="quotelev1">&gt; -          # transparently by adding some intelligence in autogen.pl
</span><br>
<span class="quotelev1">&gt; -          # and/or opal_mca.m4, but I don't have the cycles to do this
</span><br>
<span class="quotelev1">&gt; -          # right now.
</span><br>
<span class="quotelev1">&gt; -          AC_SUBST(libmca_common_mx_so_version)])
</span><br>
<span class="quotelev1">&gt; +          AC_SUBST(libmpi_java_so_version)])
</span><br>
<span class="quotelev1">&gt;  m4_ifdef([project_orte],
</span><br>
<span class="quotelev1">&gt;           [AC_SUBST(libopen_rte_so_version)])
</span><br>
<span class="quotelev1">&gt;  m4_ifdef([project_oshmem],
</span><br>
<span class="quotelev1">&gt; @@ -150,15 +144,12 @@ AC_SUBST(libopen_pal_so_version)
</span><br>
<span class="quotelev1">&gt;  # transparently by adding some intelligence in autogen.pl
</span><br>
<span class="quotelev1">&gt;  # and/or opal_mca.m4, but I don't have the cycles to do this
</span><br>
<span class="quotelev1">&gt;  # right now.
</span><br>
<span class="quotelev1">&gt; -AC_SUBST(libmca_opal_common_hwloc_so_version)
</span><br>
<span class="quotelev1">&gt; -AC_SUBST(libmca_opal_common_pmi_so_version)
</span><br>
<span class="quotelev1">&gt;  AC_SUBST(libmca_opal_common_libfabric_so_version)
</span><br>
<span class="quotelev1">&gt;  AC_SUBST(libmca_common_cuda_so_version)
</span><br>
<span class="quotelev1">&gt;  AC_SUBST(libmca_common_ofacm_so_version)
</span><br>
<span class="quotelev1">&gt;  AC_SUBST(libmca_common_sm_so_version)
</span><br>
<span class="quotelev1">&gt;  AC_SUBST(libmca_common_ugni_so_version)
</span><br>
<span class="quotelev1">&gt;  AC_SUBST(libmca_common_verbs_so_version)
</span><br>
<span class="quotelev1">&gt; -AC_SUBST(libmca_common_alps_so_version)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  # Get the versions of the autotools that were used to bootstrap us
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/f1a5d3a90df09b4f8749555936d71bae75477a45">https://github.com/open-mpi/ompi/commit/f1a5d3a90df09b4f8749555936d71bae75477a45</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; commit f1a5d3a90df09b4f8749555936d71bae75477a45
</span><br>
<span class="quotelev1">&gt; Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Wed Dec 17 13:22:51 2014 -0800
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     configury: propagate a libtool shared lib version for libfabric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --git a/VERSION b/VERSION
</span><br>
<span class="quotelev1">&gt; index 232938a..526ee11 100644
</span><br>
<span class="quotelev1">&gt; --- a/VERSION
</span><br>
<span class="quotelev1">&gt; +++ b/VERSION
</span><br>
<span class="quotelev1">&gt; @@ -108,6 +108,7 @@ libmca_common_verbs_so_version=0:0:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # OPAL layer
</span><br>
<span class="quotelev1">&gt;  libmca_opal_common_pmi_so_version=0:0:0
</span><br>
<span class="quotelev1">&gt; +libmca_opal_common_libfabric_so_version=0:0:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # ORTE layer
</span><br>
<span class="quotelev1">&gt;  libmca_common_alps_so_version=0:0:0
</span><br>
<span class="quotelev1">&gt; diff --git a/configure.ac b/configure.ac
</span><br>
<span class="quotelev1">&gt; index 3d8b3a2..dafde80 100644
</span><br>
<span class="quotelev1">&gt; --- a/configure.ac
</span><br>
<span class="quotelev1">&gt; +++ b/configure.ac
</span><br>
<span class="quotelev1">&gt; @@ -152,6 +152,7 @@ AC_SUBST(libopen_pal_so_version)
</span><br>
<span class="quotelev1">&gt;  # right now.
</span><br>
<span class="quotelev1">&gt;  AC_SUBST(libmca_opal_common_hwloc_so_version)
</span><br>
<span class="quotelev1">&gt;  AC_SUBST(libmca_opal_common_pmi_so_version)
</span><br>
<span class="quotelev1">&gt; +AC_SUBST(libmca_opal_common_libfabric_so_version)
</span><br>
<span class="quotelev1">&gt;  AC_SUBST(libmca_common_cuda_so_version)
</span><br>
<span class="quotelev1">&gt;  AC_SUBST(libmca_common_ofacm_so_version)
</span><br>
<span class="quotelev1">&gt;  AC_SUBST(libmca_common_sm_so_version)
</span><br>
<span class="quotelev1">&gt; diff --git a/opal/mca/common/libfabric/Makefile.am
</span><br>
<span class="quotelev1">&gt; b/opal/mca/common/libfabric/Makefile.am
</span><br>
<span class="quotelev1">&gt; index bd5754e..57bc821 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/mca/common/libfabric/Makefile.am
</span><br>
<span class="quotelev1">&gt; +++ b/opal/mca/common/libfabric/Makefile.am
</span><br>
<span class="quotelev1">&gt; @@ -196,7 +196,8 @@ endif OPAL_COMMON_LIBFABRIC_HAVE_PROVIDER_PSM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  lib_at_OPAL_LIB_PREFIX_at_mca_common_libfabric_la_SOURCES = $(headers)
</span><br>
<span class="quotelev1">&gt; $(sources)
</span><br>
<span class="quotelev1">&gt;  lib_at_OPAL_LIB_PREFIX_at_mca_common_libfabric_la_CPPFLAGS = $(cppflags)
</span><br>
<span class="quotelev1">&gt; -lib_at_OPAL_LIB_PREFIX_at_mca_common_libfabric_la_LDFLAGS = -version-info 0:0:0
</span><br>
<span class="quotelev1">&gt; +lib_at_OPAL_LIB_PREFIX_at_mca_common_libfabric_la_LDFLAGS = \
</span><br>
<span class="quotelev1">&gt; +        -version-info $(libmca_opal_common_libfabric_so_version)
</span><br>
<span class="quotelev1">&gt;  lib_at_OPAL_LIB_PREFIX_at_mca_common_libfabric_la_LIBADD = $(libadd)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  lib_at_OPAL_LIB_PREFIX_at_mca_common_libfabric_noinst_la_SOURCES = $(headers)
</span><br>
<span class="quotelev1">&gt; $(sources)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/d6f059f53870bae6082ad408d6c0760c795ecb9b">https://github.com/open-mpi/ompi/commit/d6f059f53870bae6082ad408d6c0760c795ecb9b</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; commit d6f059f53870bae6082ad408d6c0760c795ecb9b
</span><br>
<span class="quotelev1">&gt; Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Wed Dec 17 13:11:10 2014 -0800
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     configury: add some descriptive output messages in configure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Ensure that the ofi MTL and the usnic BTL have good descriptive output
</span><br>
<span class="quotelev1">&gt;     messages in configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mca/mtl/ofi/configure.m4 b/ompi/mca/mtl/ofi/configure.m4
</span><br>
<span class="quotelev1">&gt; index a3e6816..79df62d 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/mtl/ofi/configure.m4
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/mtl/ofi/configure.m4
</span><br>
<span class="quotelev1">&gt; @@ -2,6 +2,7 @@
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  # Copyright (c) 2013-2014 Intel, Inc. All rights reserved
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2014 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  # $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  # Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -22,11 +23,10 @@ AC_DEFUN([MCA_ompi_mtl_ofi_POST_CONFIG], [
</span><br>
<span class="quotelev1">&gt;  AC_DEFUN([MCA_ompi_mtl_ofi_CONFIG],[
</span><br>
<span class="quotelev1">&gt;      AC_CONFIG_FILES([ompi/mca/mtl/ofi/Makefile])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    AC_MSG_CHECKING([for libfabric support])
</span><br>
<span class="quotelev1">&gt;      AS_IF([test $opal_common_libfabric_happy -eq 1],
</span><br>
<span class="quotelev1">&gt; -          [$1],
</span><br>
<span class="quotelev1">&gt; -          [$2])
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    # substitute in the things needed to build ofi
</span><br>
<span class="quotelev1">&gt; -    AC_SUBST([opal_common_libfabric_CPPFLAGS])
</span><br>
<span class="quotelev1">&gt; -    AC_SUBST([opal_common_libfabric_LIBADD])
</span><br>
<span class="quotelev1">&gt; +          [AC_MSG_RESULT([yes])
</span><br>
<span class="quotelev1">&gt; +           $1],
</span><br>
<span class="quotelev1">&gt; +          [AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt; +           $2])
</span><br>
<span class="quotelev1">&gt;  ])dnl
</span><br>
<span class="quotelev1">&gt; diff --git a/opal/mca/btl/usnic/configure.m4
</span><br>
<span class="quotelev1">&gt; b/opal/mca/btl/usnic/configure.m4
</span><br>
<span class="quotelev1">&gt; index d6bf6af..861d89f 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/mca/btl/usnic/configure.m4
</span><br>
<span class="quotelev1">&gt; +++ b/opal/mca/btl/usnic/configure.m4
</span><br>
<span class="quotelev1">&gt; @@ -98,7 +98,7 @@ AC_DEFUN([_OPAL_BTL_USNIC_DO_CONFIG],[
</span><br>
<span class="quotelev1">&gt;      # (the common/ configury is guaranteed to come first).  So we can
</span><br>
<span class="quotelev1">&gt;      # simply check to see if libfabric setup was happy.
</span><br>
<span class="quotelev1">&gt;      AS_IF([test &quot;$btl_usnic_happy&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt; -          [AC_MSG_CHECKING([if building embedded libfabric])
</span><br>
<span class="quotelev1">&gt; +          [AC_MSG_CHECKING([if building embedded libfabric with usnic
</span><br>
<span class="quotelev1">&gt; provider])
</span><br>
<span class="quotelev1">&gt;             AS_IF([test $opal_common_libfabric_happy -eq 1 &amp;&amp; \
</span><br>
<span class="quotelev1">&gt;                    test $opal_common_libfabric_usnic_happy -eq 1 &amp;&amp; \
</span><br>
<span class="quotelev1">&gt;                    test $opal_common_libfabric_build_embedded -eq 1],
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/4dcb92ab0b7c8b8a76f0a606d39d3ca529831930">https://github.com/open-mpi/ompi/commit/4dcb92ab0b7c8b8a76f0a606d39d3ca529831930</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; commit 4dcb92ab0b7c8b8a76f0a606d39d3ca529831930
</span><br>
<span class="quotelev1">&gt; Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Wed Dec 17 13:10:51 2014 -0800
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ofi: remove use of non-existent macros
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mca/mtl/ofi/Makefile.am b/ompi/mca/mtl/ofi/Makefile.am
</span><br>
<span class="quotelev1">&gt; index 4db0fde..5be7079 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/mtl/ofi/Makefile.am
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/mtl/ofi/Makefile.am
</span><br>
<span class="quotelev1">&gt; @@ -1,6 +1,7 @@
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  # Copyright (c) 2013-2014 Intel, Inc. All rights reserved
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2014 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  # $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  # Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -45,9 +46,9 @@ mcacomponentdir = $(ompilibdir)
</span><br>
<span class="quotelev1">&gt;  mcacomponent_LTLIBRARIES = $(component_install)
</span><br>
<span class="quotelev1">&gt;  mca_mtl_ofi_la_SOURCES = $(mtl_ofi_sources)
</span><br>
<span class="quotelev1">&gt;  mca_mtl_ofi_la_LIBADD = $(opal_common_libfabric_LIBADD)
</span><br>
<span class="quotelev1">&gt; -mca_mtl_ofi_la_LDFLAGS = -module -avoid-version $(mtl_ofi_LDFLAGS)
</span><br>
<span class="quotelev1">&gt; +mca_mtl_ofi_la_LDFLAGS = -module -avoid-version
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  noinst_LTLIBRARIES = $(component_noinst)
</span><br>
<span class="quotelev1">&gt;  libmca_mtl_ofi_la_SOURCES = $(mtl_ofi_sources)
</span><br>
<span class="quotelev1">&gt;  libmca_mtl_ofi_la_LIBADD = $(opal_common_libfabric_LIBADD)
</span><br>
<span class="quotelev1">&gt; -libmca_mtl_ofi_la_LDFLAGS = -module -avoid-version $(mtl_ofi_LDFLAGS)
</span><br>
<span class="quotelev1">&gt; +libmca_mtl_ofi_la_LDFLAGS = -module -avoid-version
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/6edc19d78db25eb31774a42e282abab496550071">https://github.com/open-mpi/ompi/commit/6edc19d78db25eb31774a42e282abab496550071</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; commit 6edc19d78db25eb31774a42e282abab496550071
</span><br>
<span class="quotelev1">&gt; Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Wed Dec 17 13:09:44 2014 -0800
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     libfabric: ensure that shell variables are initialized
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Ensure that the &lt;provider&gt;_happy shell variables are initialized to
</span><br>
<span class="quotelev1">&gt;     0.  Without this, the --without-libfabric case would leave them
</span><br>
<span class="quotelev1">&gt;     initialized, resulting in &quot;test: -eq operator expecting a value&quot; kinds
</span><br>
<span class="quotelev1">&gt;     of errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --git a/opal/mca/common/libfabric/configure.m4
</span><br>
<span class="quotelev1">&gt; b/opal/mca/common/libfabric/configure.m4
</span><br>
<span class="quotelev1">&gt; index 28e4b13..e024af2 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/mca/common/libfabric/configure.m4
</span><br>
<span class="quotelev1">&gt; +++ b/opal/mca/common/libfabric/configure.m4
</span><br>
<span class="quotelev1">&gt; @@ -22,6 +22,8 @@ AC_DEFUN([MCA_opal_common_libfabric_CONFIG],[
</span><br>
<span class="quotelev1">&gt;      # Initially state that we're unhappy
</span><br>
<span class="quotelev1">&gt;      opal_common_libfabric_happy=0
</span><br>
<span class="quotelev1">&gt;      opal_common_libfabric_build_embedded=0
</span><br>
<span class="quotelev1">&gt; +    _OPAL_COMMON_LIBFABRIC_EMBEDDED_PROVIDER_USNIC_SETUP
</span><br>
<span class="quotelev1">&gt; +    _OPAL_COMMON_LIBFABRIC_EMBEDDED_PROVIDER_PSM_SETUP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      # Setup the --with switches to allow users to specify where
</span><br>
<span class="quotelev1">&gt;      # libfabric stuff lives.
</span><br>
<span class="quotelev1">&gt; @@ -263,6 +265,13 @@ AC_DEFUN([_OPAL_COMMON_LIBFABRIC_CHECK_INCDIR],[
</span><br>
<span class="quotelev1">&gt;  ])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # --------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; +# Internal helper macro to setup the embedded usnic provider
</span><br>
<span class="quotelev1">&gt; +# --------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; +AC_DEFUN([_OPAL_COMMON_LIBFABRIC_EMBEDDED_PROVIDER_USNIC_SETUP],[
</span><br>
<span class="quotelev1">&gt; +    opal_common_libfabric_usnic_happy=0
</span><br>
<span class="quotelev1">&gt; +])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# --------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  # Internal helper macro to look for the things the usnic provider
</span><br>
<span class="quotelev1">&gt;  # needs
</span><br>
<span class="quotelev1">&gt;  # --------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; @@ -292,6 +301,13 @@
</span><br>
<span class="quotelev1">&gt; AC_DEFUN([_OPAL_COMMON_LIBFABRIC_EMBEDDED_PROVIDER_USNIC_CONDITIONALS],[
</span><br>
<span class="quotelev1">&gt;  ])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # --------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; +# Internal helper macro to setup the embedded PSM provider
</span><br>
<span class="quotelev1">&gt; +# --------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; +AC_DEFUN([_OPAL_COMMON_LIBFABRIC_EMBEDDED_PROVIDER_PSM_SETUP],[
</span><br>
<span class="quotelev1">&gt; +    opal_common_libfabric_psm_happy=0
</span><br>
<span class="quotelev1">&gt; +])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# --------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  # Internal helper macro to look for the things the psm provider
</span><br>
<span class="quotelev1">&gt;  # needs
</span><br>
<span class="quotelev1">&gt;  # --------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Summary of changes:
</span><br>
<span class="quotelev1">&gt;  VERSION                                |  3 +--
</span><br>
<span class="quotelev1">&gt;  configure.ac                           | 12 ++----------
</span><br>
<span class="quotelev1">&gt;  ompi/mca/mtl/ofi/Makefile.am           |  5 +++--
</span><br>
<span class="quotelev1">&gt;  ompi/mca/mtl/ofi/configure.m4          | 12 ++++++------
</span><br>
<span class="quotelev1">&gt;  opal/mca/btl/usnic/configure.m4        |  2 +-
</span><br>
<span class="quotelev1">&gt;  opal/mca/common/libfabric/Makefile.am  |  3 ++-
</span><br>
<span class="quotelev1">&gt;  opal/mca/common/libfabric/configure.m4 | 16 ++++++++++++++++
</span><br>
<span class="quotelev1">&gt;  7 files changed, 31 insertions(+), 22 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hooks/post-receive
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; open-mpi/ompi
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; ompi-commits mailing list
</span><br>
<span class="quotelev1">&gt; ompi-commits_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16656/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16657.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-564-g6c468b8"</a>
<li><strong>Previous message:</strong> <a href="16655.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16657.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-564-g6c468b8"</a>
<li><strong>Reply:</strong> <a href="16657.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-564-g6c468b8"</a>
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
