<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16644";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 14:02:21 2007" -->
<!-- isoreceived="20071105190221" -->
<!-- sent="Mon, 05 Nov 2007 14:02:30 -0500" -->
<!-- isosent="20071105190230" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r16644" -->
<!-- id="472F68C6.7020601_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200711030240.lA32eN1Z013772_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-05 14:02:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2547.php">Tim Prins: "[OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Previous message:</strong> <a href="2545.php">Terry Dontje: "[OMPI devel] accessors to context id and message id's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2548.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16644"</a>
<li><strong>Reply:</strong> <a href="2548.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16644"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>This commit causes a bunch of warnings of the type:
<br>
<p>runtime/opal_init.c:55:2: warning: #ident is a GCC extension
<br>
runtime/orte_init.c:92:2: warning: #ident is a GCC extension
<br>
pinit.c:32:2: warning: #ident is a GCC extension
<br>
pinit_f.c:26:2: warning: #ident is a GCC extension
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p><p><p>emallove_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: emallove
</span><br>
<span class="quotelev1">&gt; Date: 2007-11-02 22:40:22 EDT (Fri, 02 Nov 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 16644
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16644">https://svn.open-mpi.org/trac/ompi/changeset/16644</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; * Embed ident strings into the Open MPI libraries using one of the following
</span><br>
<span class="quotelev1">&gt;   methods (in order of precedence):
</span><br>
<span class="quotelev1">&gt;   1. #pragma ident &lt;ident string&gt; (e.g., Intel and Sun)
</span><br>
<span class="quotelev1">&gt;   1. #ident &lt;ident string&gt; (e.g., GCC)
</span><br>
<span class="quotelev1">&gt;   1. static const char ident[] = &lt;ident string&gt; (all others)
</span><br>
<span class="quotelev1">&gt; By default, the ident string used is the standard Open MPI version string. Only
</span><br>
<span class="quotelev1">&gt; the following libraries will get the embedded version strings (e.g., DSOs will
</span><br>
<span class="quotelev1">&gt; not):
</span><br>
<span class="quotelev1">&gt;   * libmpi.so
</span><br>
<span class="quotelev1">&gt;   * libmpi_cxx.so
</span><br>
<span class="quotelev1">&gt;   * libmpi_f77.so
</span><br>
<span class="quotelev1">&gt;   * libopen-pal.so
</span><br>
<span class="quotelev1">&gt;   * libopen-rte.so
</span><br>
<span class="quotelev1">&gt; * Added two new configure options:
</span><br>
<span class="quotelev1">&gt;   * `--with-package-name=&quot;STRING&quot;` (defaults to &quot;Open MPI username_at_hostname
</span><br>
<span class="quotelev1">&gt;     Distribution&quot;). `STRING` is displayed by `ompi_info` next to the &quot;Package&quot;
</span><br>
<span class="quotelev1">&gt;     heading.
</span><br>
<span class="quotelev1">&gt;   * `--with-ident-string=&quot;STRING&quot;` (defaults to the standard Open MPI version
</span><br>
<span class="quotelev1">&gt;     string - e.g., X.Y.Zr######). `%VERSION%` will expand to the Open MPI
</span><br>
<span class="quotelev1">&gt;     version string if it is supplied to this configure option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;    trunk/config/ompi_check_ident.m4
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/acinclude.m4                     |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    trunk/config/ompi_configure_options.m4 |    33 ++++++++++++++++++++++++++++++++-       
</span><br>
<span class="quotelev1">&gt;    trunk/configure.ac                     |    13 ++++++++++---                           
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/include/ompi_config.h.in    |     3 +++                                     
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/c/init.c                |    10 ++++++++++                              
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/cxx/mpicxx.cc           |    12 ++++++++++--                            
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/f77/init_f.c            |    10 ++++++++++                              
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/tools/ompi_info/version.cc  |     3 +++                                     
</span><br>
<span class="quotelev1">&gt;    trunk/opal/runtime/opal_init.c         |     8 ++++++++                                
</span><br>
<span class="quotelev1">&gt;    trunk/orte/include/orte_config.h.in    |     4 ++++                                    
</span><br>
<span class="quotelev1">&gt;    trunk/orte/runtime/orte_init.c         |     9 +++++++++                               
</span><br>
<span class="quotelev1">&gt;    11 files changed, 101 insertions(+), 7 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/acinclude.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/acinclude.m4	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/acinclude.m4	2007-11-02 22:40:22 EDT (Fri, 02 Nov 2007)
</span><br>
<span class="quotelev1">&gt; @@ -10,7 +10,7 @@
</span><br>
<span class="quotelev1">&gt;  dnl                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  dnl Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;  dnl                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; -dnl Copyright (c) 2006      Cisco Systems, Inc.
</span><br>
<span class="quotelev1">&gt; +dnl Copyright (c) 2006-2007 Cisco Systems, Inc.
</span><br>
<span class="quotelev1">&gt;  dnl Copyright (c) 2006      Los Alamos National Security, LLC.  All rights
</span><br>
<span class="quotelev1">&gt;  dnl                         reserved. 
</span><br>
<span class="quotelev1">&gt;  dnl Copyright (c) 2007      Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; @@ -58,6 +58,7 @@
</span><br>
<span class="quotelev1">&gt;  m4_include(config/ompi_case_sensitive_fs_setup.m4)
</span><br>
<span class="quotelev1">&gt;  m4_include(config/ompi_check_broken_qsort.m4)
</span><br>
<span class="quotelev1">&gt;  m4_include(config/ompi_check_compiler_works.m4)
</span><br>
<span class="quotelev1">&gt; +m4_include(config/ompi_check_ident.m4)
</span><br>
<span class="quotelev1">&gt;  m4_include(config/ompi_check_func_lib.m4)
</span><br>
<span class="quotelev1">&gt;  m4_include(config/ompi_check_optflags.m4)
</span><br>
<span class="quotelev1">&gt;  m4_include(config/ompi_check_attributes.m4)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added: trunk/config/ompi_check_ident.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ trunk/config/ompi_check_ident.m4	2007-11-02 22:40:22 EDT (Fri, 02 Nov 2007)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,88 @@
</span><br>
<span class="quotelev1">&gt; +dnl -*- shell-script -*-
</span><br>
<span class="quotelev1">&gt; +dnl
</span><br>
<span class="quotelev1">&gt; +dnl Copyright (c) 2007 Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +dnl $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; +dnl
</span><br>
<span class="quotelev1">&gt; +dnl Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; +dnl
</span><br>
<span class="quotelev1">&gt; +dnl $HEADER$
</span><br>
<span class="quotelev1">&gt; +dnl
</span><br>
<span class="quotelev1">&gt; +dnl defines:
</span><br>
<span class="quotelev1">&gt; +dnl   OMPI_$1_USE_PRAGMA_IDENT
</span><br>
<span class="quotelev1">&gt; +dnl   OMPI_$1_USE_IDENT
</span><br>
<span class="quotelev1">&gt; +dnl   OMPI_$1_USE_CONST_CHAR_IDENT
</span><br>
<span class="quotelev1">&gt; +dnl
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# OMPI_CHECK_IDENT(compiler-env, compiler-flags,
</span><br>
<span class="quotelev1">&gt; +# file-suffix, lang) Try to compile a source file containing
</span><br>
<span class="quotelev1">&gt; +# a #pragma ident, and determine whether the ident was
</span><br>
<span class="quotelev1">&gt; +# inserted into the resulting object file
</span><br>
<span class="quotelev1">&gt; +# -----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; +AC_DEFUN([OMPI_CHECK_IDENT], [
</span><br>
<span class="quotelev1">&gt; +    AC_MSG_CHECKING([for $4 ident string support])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    ompi_pragma_ident_happy=0
</span><br>
<span class="quotelev1">&gt; +    ompi_ident_happy=0
</span><br>
<span class="quotelev1">&gt; +    ompi_static_const_char_happy=0
</span><br>
<span class="quotelev1">&gt; +    _OMPI_CHECK_IDENT(
</span><br>
<span class="quotelev1">&gt; +        [$1], [$2], [$3],
</span><br>
<span class="quotelev1">&gt; +        [[#]pragma ident],
</span><br>
<span class="quotelev1">&gt; +        [ompi_pragma_ident_happy=1
</span><br>
<span class="quotelev1">&gt; +         ompi_message=&quot;[#]pragma ident&quot;],
</span><br>
<span class="quotelev1">&gt; +        _OMPI_CHECK_IDENT(
</span><br>
<span class="quotelev1">&gt; +            [$1], [$2], [$3],
</span><br>
<span class="quotelev1">&gt; +            [[#]ident],
</span><br>
<span class="quotelev1">&gt; +            [ompi_ident_happy=1
</span><br>
<span class="quotelev1">&gt; +             ompi_message=&quot;[#]ident&quot;],
</span><br>
<span class="quotelev1">&gt; +            [ompi_static_const_char_happy=1
</span><br>
<span class="quotelev1">&gt; +             ompi_message=&quot;static const char[[]]&quot;]))
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    AC_DEFINE_UNQUOTED([OMPI_$1_USE_PRAGMA_IDENT],
</span><br>
<span class="quotelev1">&gt; +        [$ompi_pragma_ident_happy], [Use #pragma ident strings for $4 files])
</span><br>
<span class="quotelev1">&gt; +    AC_DEFINE_UNQUOTED([OMPI_$1_USE_IDENT],
</span><br>
<span class="quotelev1">&gt; +        [$ompi_ident_happy], [Use #ident strings for $4 files])
</span><br>
<span class="quotelev1">&gt; +    AC_DEFINE_UNQUOTED([OMPI_$1_USE_CONST_CHAR_IDENT],
</span><br>
<span class="quotelev1">&gt; +        [$ompi_static_const_char_happy], [Use static const char[] strings for $4 files])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    AC_MSG_RESULT([$ompi_message])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    unset ompi_pragma_ident_happy ompi_ident_happy ompi_static_const_char_happy ompi_message
</span><br>
<span class="quotelev1">&gt; +])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# _OMPI_CHECK_IDENT(compiler-env, compiler-flags,
</span><br>
<span class="quotelev1">&gt; +# file-suffix, header, action-if-success, action-if-fail)
</span><br>
<span class="quotelev1">&gt; +# Try to compile a source file containing a #-style ident,
</span><br>
<span class="quotelev1">&gt; +# and determine whether the ident was inserted into the
</span><br>
<span class="quotelev1">&gt; +# resulting object file
</span><br>
<span class="quotelev1">&gt; +# -----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; +AC_DEFUN([_OMPI_CHECK_IDENT], [
</span><br>
<span class="quotelev1">&gt; +    eval ompi_compiler=&quot;\$$1&quot;
</span><br>
<span class="quotelev1">&gt; +    eval ompi_flags=&quot;\$$2&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    ompi_ident=&quot;string_not_coincidentally_inserted_by_the_compiler&quot;
</span><br>
<span class="quotelev1">&gt; +    cat &gt; conftest.$3 &lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt; +$4 &quot;$ompi_ident&quot;
</span><br>
<span class="quotelev1">&gt; +int main(int argc, char** argv);
</span><br>
<span class="quotelev1">&gt; +int main(int argc, char** argv) { return 0; }
</span><br>
<span class="quotelev1">&gt; +EOF
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    # &quot;strings&quot; won't always return the ident string.  objdump isn't
</span><br>
<span class="quotelev1">&gt; +    # universal (e.g., OS X doesn't have it), and ...other
</span><br>
<span class="quotelev1">&gt; +    # complications.  So just try to &quot;grep&quot; for the string in the
</span><br>
<span class="quotelev1">&gt; +    # resulting object file.  If the ident is found in &quot;strings&quot; or
</span><br>
<span class="quotelev1">&gt; +    # the grep succeeds, rule that we have this flavor of ident.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    OMPI_LOG_COMMAND([$ompi_compiler $ompi_flags -c conftest.$3 -o conftest],
</span><br>
<span class="quotelev1">&gt; +                     [ompi_output=&quot;`strings -a conftest | grep $ompi_ident`&quot;
</span><br>
<span class="quotelev1">&gt; +                      grep $ompi_ident conftest 2&gt;&amp;1 1&gt;/dev/null
</span><br>
<span class="quotelev1">&gt; +                      ompi_status=$?
</span><br>
<span class="quotelev1">&gt; +                      AS_IF([test &quot;$ompi_output&quot; != &quot;&quot; -o &quot;$ompi_status&quot; = &quot;0&quot;],
</span><br>
<span class="quotelev1">&gt; +                            [$5],
</span><br>
<span class="quotelev1">&gt; +                            [$6])],
</span><br>
<span class="quotelev1">&gt; +                     [OMPI_LOG_MSG([the failed program was:])
</span><br>
<span class="quotelev1">&gt; +                      OMPI_LOG_FILE([conftest.$3])
</span><br>
<span class="quotelev1">&gt; +                      $6])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    unset ompi_compiler ompi_flags ompi_output ompi_status
</span><br>
<span class="quotelev1">&gt; +    /bin/rm -f conftest.* conftest
</span><br>
<span class="quotelev1">&gt; +])dnl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/config/ompi_configure_options.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/config/ompi_configure_options.m4	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/config/ompi_configure_options.m4	2007-11-02 22:40:22 EDT (Fri, 02 Nov 2007)
</span><br>
<span class="quotelev1">&gt; @@ -10,7 +10,8 @@
</span><br>
<span class="quotelev1">&gt;  dnl                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  dnl Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;  dnl                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; -dnl Copyright (c) 2006      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +dnl Copyright (c) 2006-2007 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +dnl Copyright (c) 2007      Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  dnl $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  dnl 
</span><br>
<span class="quotelev1">&gt;  dnl Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -704,4 +705,34 @@
</span><br>
<span class="quotelev1">&gt;  AC_DEFINE_UNQUOTED([ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT],
</span><br>
<span class="quotelev1">&gt;                     [$orte_want_orterun_prefix_by_default],
</span><br>
<span class="quotelev1">&gt;                     [Whether we want orterun to effect &quot;--prefix $prefix&quot; by default])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Package/brand string
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +AC_MSG_CHECKING([for package/brand string])
</span><br>
<span class="quotelev1">&gt; +AC_ARG_WITH([package-string],
</span><br>
<span class="quotelev1">&gt; +     [AC_HELP_STRING([--with-package-string=STRING],
</span><br>
<span class="quotelev1">&gt; +                     [Use a branding string throughout Open MPI])])
</span><br>
<span class="quotelev1">&gt; +if test &quot;$with_package_string&quot; = &quot;&quot; -o &quot;$with_package_string&quot; = &quot;no&quot;; then
</span><br>
<span class="quotelev1">&gt; +    with_package_string=&quot;Open MPI $OMPI_CONFIGURE_USER@$OMPI_CONFIGURE_HOST Distribution&quot;
</span><br>
<span class="quotelev1">&gt; +fi
</span><br>
<span class="quotelev1">&gt; +AC_DEFINE_UNQUOTED([OPAL_PACKAGE_STRING], [&quot;$with_package_string&quot;],
</span><br>
<span class="quotelev1">&gt; +     [package/branding string for Open MPI])
</span><br>
<span class="quotelev1">&gt; +AC_MSG_RESULT([$with_package_string])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Ident string
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +AC_MSG_CHECKING([for ident string])
</span><br>
<span class="quotelev1">&gt; +AC_ARG_WITH([ident-string],
</span><br>
<span class="quotelev1">&gt; +     [AC_HELP_STRING([--with-ident-string=STRING],
</span><br>
<span class="quotelev1">&gt; +                     [Embed an ident string into Open MPI object files])])
</span><br>
<span class="quotelev1">&gt; +if test &quot;$with_ident_string&quot; = &quot;&quot; -o &quot;$with_ident_string&quot; = &quot;no&quot;; then
</span><br>
<span class="quotelev1">&gt; +    with_ident_string=&quot;%VERSION%&quot;
</span><br>
<span class="quotelev1">&gt; +fi
</span><br>
<span class="quotelev1">&gt; +with_ident_string=&quot;`echo $with_ident_string | sed -e 's/%VERSION%/'$OMPI_VERSION/`&quot;
</span><br>
<span class="quotelev1">&gt; +AC_DEFINE_UNQUOTED([OPAL_IDENT_STRING], [&quot;$with_ident_string&quot;],
</span><br>
<span class="quotelev1">&gt; +     [ident string for Open MPI])
</span><br>
<span class="quotelev1">&gt; +AC_MSG_RESULT([$with_ident_string])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  ])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/configure.ac
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/configure.ac	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/configure.ac	2007-11-02 22:40:22 EDT (Fri, 02 Nov 2007)
</span><br>
<span class="quotelev1">&gt; @@ -10,7 +10,7 @@
</span><br>
<span class="quotelev1">&gt;  #                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  # Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;  #                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; -# Copyright (c) 2006      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2006-2007 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  # Copyright (c) 2006-2007 Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  # Copyright (c) 2006-2007 Los Alamos National Security, LLC.  All rights
</span><br>
<span class="quotelev1">&gt;  #                         reserved. 
</span><br>
<span class="quotelev1">&gt; @@ -187,6 +187,10 @@
</span><br>
<span class="quotelev1">&gt;  AM_CONDITIONAL(OMPI_NEED_WINDOWS_REPLACEMENTS,
</span><br>
<span class="quotelev1">&gt;                 test &quot;$ompi_cv_c_compiler_vendor&quot; = &quot;microsoft&quot; )
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +# Does the compiler support &quot;ident&quot;-like constructs?
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +OMPI_CHECK_IDENT([CC], [CFLAGS], [c], [C])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  # Check for some types
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt; @@ -359,6 +363,10 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  OMPI_SETUP_CXX
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +# Does the compiler support &quot;ident&quot;-like constructs?
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +OMPI_CHECK_IDENT([CXX], [CXXFLAGS], [cc], [C++])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  # check for type sizes
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  AC_LANG_PUSH(C++)
</span><br>
<span class="quotelev1">&gt; @@ -369,7 +377,7 @@
</span><br>
<span class="quotelev1">&gt;  OMPI_C_GET_ALIGNMENT(bool, OMPI_ALIGNMENT_CXX_BOOL)
</span><br>
<span class="quotelev1">&gt;  AC_LANG_POP(C++)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -# check if we want C++ support                                                  
</span><br>
<span class="quotelev1">&gt; +# check if we want C++ support
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  AM_CONDITIONAL(WANT_MPI_CXX_BINDINGS,
</span><br>
<span class="quotelev1">&gt;      test &quot;$WANT_MPI_CXX_SUPPORT&quot; = 1)
</span><br>
<span class="quotelev1">&gt; @@ -377,7 +385,6 @@
</span><br>
<span class="quotelev1">&gt;      [Whether we want MPI cxx support or not])
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  ##################################
</span><br>
<span class="quotelev1">&gt;  # Only after setting up both
</span><br>
<span class="quotelev1">&gt;  # C and C++ check compiler attributes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/include/ompi_config.h.in
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/include/ompi_config.h.in	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/include/ompi_config.h.in	2007-11-02 22:40:22 EDT (Fri, 02 Nov 2007)
</span><br>
<span class="quotelev1">&gt; @@ -10,6 +10,8 @@
</span><br>
<span class="quotelev1">&gt;   *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2007      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2007      Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -24,6 +26,7 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal_config.h&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +#define OMPI_IDENT_STRING OPAL_IDENT_STRING
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  /***********************************************************************
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mpi/c/init.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mpi/c/init.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mpi/c/init.c	2007-11-02 22:40:22 EDT (Fri, 02 Nov 2007)
</span><br>
<span class="quotelev1">&gt; @@ -9,6 +9,8 @@
</span><br>
<span class="quotelev1">&gt;   *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2007      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2007      Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   * 
</span><br>
<span class="quotelev1">&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -24,6 +26,14 @@
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/mpi/c/bindings.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +#if OMPI_CC_USE_PRAGMA_IDENT
</span><br>
<span class="quotelev1">&gt; +#pragma ident OMPI_IDENT_STRING
</span><br>
<span class="quotelev1">&gt; +#elif OMPI_CC_USE_IDENT
</span><br>
<span class="quotelev1">&gt; +#ident OMPI_IDENT_STRING
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt; +static const char ident[] = OMPI_IDENT_STRING;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  #if OMPI_HAVE_WEAK_SYMBOLS &amp;&amp; OMPI_PROFILING_DEFINES
</span><br>
<span class="quotelev1">&gt;  #pragma weak MPI_Init = PMPI_Init
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mpi/cxx/mpicxx.cc
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mpi/cxx/mpicxx.cc	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mpi/cxx/mpicxx.cc	2007-11-02 22:40:22 EDT (Fri, 02 Nov 2007)
</span><br>
<span class="quotelev1">&gt; @@ -10,14 +10,14 @@
</span><br>
<span class="quotelev1">&gt;  //                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  // Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;  //                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; +// Copyright (c) 2007      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +// Copyright (c) 2007      Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  // $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  // 
</span><br>
<span class="quotelev1">&gt;  // Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt;  // 
</span><br>
<span class="quotelev1">&gt;  // $HEADER$
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -//
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;  static const int ompi_stdio_seek_set = SEEK_SET;
</span><br>
<span class="quotelev1">&gt;  static const int ompi_stdio_seek_cur = SEEK_CUR;
</span><br>
<span class="quotelev1">&gt; @@ -28,6 +28,14 @@
</span><br>
<span class="quotelev1">&gt;  /* Need to include ompi_config.h after mpicxx.h... */
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +#if OMPI_CXX_USE_PRAGMA_IDENT
</span><br>
<span class="quotelev1">&gt; +#pragma ident OMPI_IDENT_STRING
</span><br>
<span class="quotelev1">&gt; +#elif OMPI_CXX_USE_IDENT
</span><br>
<span class="quotelev1">&gt; +#ident OMPI_IDENT_STRING
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt; +static const char ident[] = OMPI_IDENT_STRING;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/errhandler/errhandler.h&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  #if OMPI_PROVIDE_MPI_FILE_INTERFACE &amp;&amp; OMPI_WANT_MPI_CXX_SEEK
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mpi/f77/init_f.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mpi/f77/init_f.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mpi/f77/init_f.c	2007-11-02 22:40:22 EDT (Fri, 02 Nov 2007)
</span><br>
<span class="quotelev1">&gt; @@ -9,6 +9,8 @@
</span><br>
<span class="quotelev1">&gt;   *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2007      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2007      Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   * 
</span><br>
<span class="quotelev1">&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -18,6 +20,14 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +#if OMPI_CC_USE_PRAGMA_IDENT
</span><br>
<span class="quotelev1">&gt; +#pragma ident OMPI_IDENT_STRING
</span><br>
<span class="quotelev1">&gt; +#elif OMPI_CC_USE_IDENT
</span><br>
<span class="quotelev1">&gt; +#ident OMPI_IDENT_STRING
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt; +static const char ident[] = OMPI_IDENT_STRING;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/mpi/f77/bindings.h&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  #if OMPI_HAVE_WEAK_SYMBOLS &amp;&amp; OMPI_PROFILE_LAYER
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/tools/ompi_info/version.cc
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/tools/ompi_info/version.cc	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/tools/ompi_info/version.cc	2007-11-02 22:40:22 EDT (Fri, 02 Nov 2007)
</span><br>
<span class="quotelev1">&gt; @@ -9,6 +9,7 @@
</span><br>
<span class="quotelev1">&gt;  //                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  // Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;  //                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; +// Copyright (c) 2007      Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  // $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  // 
</span><br>
<span class="quotelev1">&gt;  // Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -125,6 +126,7 @@
</span><br>
<span class="quotelev1">&gt;  //
</span><br>
<span class="quotelev1">&gt;  void ompi_info::show_ompi_version(const string&amp; scope)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; +  out(&quot;Package&quot;, &quot;package&quot;, OPAL_PACKAGE_STRING);
</span><br>
<span class="quotelev1">&gt;    out(&quot;Open MPI&quot;, type_ompi + &quot;:version:full&quot;,
</span><br>
<span class="quotelev1">&gt;        make_version_str(scope, 
</span><br>
<span class="quotelev1">&gt;                         OMPI_MAJOR_VERSION, OMPI_MINOR_VERSION, 
</span><br>
<span class="quotelev1">&gt; @@ -151,6 +153,7 @@
</span><br>
<span class="quotelev1">&gt;                         OPAL_WANT_SVN, OPAL_SVN_R));
</span><br>
<span class="quotelev1">&gt;    out(&quot;OPAL SVN revision&quot;, type_opal + &quot;:version:svn&quot;,
</span><br>
<span class="quotelev1">&gt;        OPAL_SVN_R);
</span><br>
<span class="quotelev1">&gt; +  out(&quot;Ident string&quot;, &quot;ident&quot;, OPAL_IDENT_STRING);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/runtime/opal_init.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/runtime/opal_init.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/runtime/opal_init.c	2007-11-02 22:40:22 EDT (Fri, 02 Nov 2007)
</span><br>
<span class="quotelev1">&gt; @@ -10,6 +10,7 @@
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2007      Cisco, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2007      Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -48,6 +49,13 @@
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/util/keyval_parse.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/util/sys_limits.h&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +#if OMPI_CC_USE_PRAGMA_IDENT
</span><br>
<span class="quotelev1">&gt; +#pragma ident OPAL_IDENT_STRING
</span><br>
<span class="quotelev1">&gt; +#elif OMPI_CC_USE_IDENT
</span><br>
<span class="quotelev1">&gt; +#ident OPAL_IDENT_STRING
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt; +static const char ident[] = OPAL_IDENT_STRING;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  int opal_initialized = 0;
</span><br>
<span class="quotelev1">&gt;  int opal_util_initialized = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/include/orte_config.h.in
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/include/orte_config.h.in	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/include/orte_config.h.in	2007-11-02 22:40:22 EDT (Fri, 02 Nov 2007)
</span><br>
<span class="quotelev1">&gt; @@ -10,6 +10,8 @@
</span><br>
<span class="quotelev1">&gt;   *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2007      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2007      Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -24,6 +26,8 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal_config.h&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +#define ORTE_IDENT_STRING OPAL_IDENT_STRING
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  #if defined(__WINDOWS__)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  #  if defined(_USRDLL)    /* building shared libraries (.DLL) */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/runtime/orte_init.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/runtime/orte_init.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/runtime/orte_init.c	2007-11-02 22:40:22 EDT (Fri, 02 Nov 2007)
</span><br>
<span class="quotelev1">&gt; @@ -12,6 +12,7 @@
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2006      Los Alamos National Security, LLC.  All rights
</span><br>
<span class="quotelev1">&gt;   *                         reserved. 
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2007      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2007      Sun Microsystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt; @@ -85,6 +86,14 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  #include &quot;orte/runtime/orte_cr.h&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +#if OMPI_CC_USE_PRAGMA_IDENT
</span><br>
<span class="quotelev1">&gt; +#pragma ident ORTE_IDENT_STRING
</span><br>
<span class="quotelev1">&gt; +#elif OMPI_CC_USE_IDENT
</span><br>
<span class="quotelev1">&gt; +#ident ORTE_IDENT_STRING
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt; +static const char ident[] = ORTE_IDENT_STRING;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  int orte_init(bool infrastructure)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      int ret;
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
<li><strong>Next message:</strong> <a href="2547.php">Tim Prins: "[OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Previous message:</strong> <a href="2545.php">Terry Dontje: "[OMPI devel] accessors to context id and message id's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2548.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16644"</a>
<li><strong>Reply:</strong> <a href="2548.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16644"</a>
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
