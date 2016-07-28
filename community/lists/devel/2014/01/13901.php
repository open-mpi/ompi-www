<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30391 - in trunk: . config oshmem	oshmem/shmem/fortran oshmem/tools/oshmem_info";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 12:13:07 2014" -->
<!-- isoreceived="20140124171307" -->
<!-- sent="Fri, 24 Jan 2014 17:13:04 +0000" -->
<!-- isosent="20140124171304" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30391 - in trunk: . config oshmem	oshmem/shmem/fortran oshmem/tools/oshmem_info" -->
<!-- id="284CE351-123D-4E7A-BD3B-E5875CFED009_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140123074914.1423F160F85_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30391 - in trunk: . config oshmem	oshmem/shmem/fortran oshmem/tools/oshmem_info<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-24 12:13:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13902.php">Kenneth Adam Miller: "[OMPI devel] Specific use case - very very new to MPI"</a>
<li><strong>Previous message:</strong> <a href="13900.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13925.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30391 - in trunk: . config oshmem oshmem/shmem/fortran oshmem/tools/oshmem_info"</a>
<li><strong>Reply:</strong> <a href="13925.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30391 - in trunk: . config oshmem oshmem/shmem/fortran oshmem/tools/oshmem_info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mellanox --
<br>
<p>Some comments on the commit below.
<br>
<p><p>On Jan 23, 2014, at 2:49 AM, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Modified: trunk/config/oshmem_configure_options.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/config/oshmem_configure_options.m4	Thu Jan 23 02:29:23 2014	(r30390)
</span><br>
<span class="quotelev1">&gt; +++ trunk/config/oshmem_configure_options.m4	2014-01-23 02:49:13 EST (Thu, 23 Jan 2014)	(r30391)
</span><br>
<span class="quotelev1">&gt; @@ -95,19 +95,19 @@
</span><br>
<span class="quotelev1">&gt;                [enable OSHMEM Fortran bindings (default: enabled if Fortran compiler found)]))
</span><br>
<span class="quotelev1">&gt; if test &quot;$enable_oshmem_fortran&quot; != &quot;no&quot; -a &quot;$ompi_fortran_happy&quot; = 1; then
</span><br>
<span class="quotelev1">&gt; # If no OMPI FORTRAN, bail
</span><br>
<span class="quotelev1">&gt; -   AS_IF([test $OMPI_WANT_FORTRAN_BINDINGS -eq 0],
</span><br>
<span class="quotelev1">&gt; +   AS_IF([test $OMPI_WANT_FORTRAN_BINDINGS -eq 0 -a &quot;$enable_oshmem&quot; != &quot;no&quot;],
</span><br>
<span class="quotelev1">&gt;                [AC_MSG_RESULT([bad value OMPI_WANT_FORTRAN_BINDINGS: ($OMPI_WANT_FORTRAN_BINDINGS)])
</span><br>
<span class="quotelev1">&gt;                 AC_MSG_WARN([Your explicit request to --enable-oshmem-fortran can only be satisfied if fortran support is enabled in OMPI. You are seeing this message for one of two reasons:
</span><br>
<span class="quotelev1">&gt;                     1. OMPI fortran support has been explicitly disabled via --disable-mpi-fortran, in which case you cannot --enable-oshmem-fortran. Configure will abort because you, a human, have explicitly asked for something that cannot be provided. 
</span><br>
<span class="quotelev1">&gt;                     2. OMPI fortran support is implicitly not being built because no fortran compiler could be found on your system. Configure will abort because you, a human, have explicitly asked for something that cannot be provided.])
</span><br>
<p>As you noted in a comment below, we haven't searched for a Fortran compiler yet.  So the above message isn't correct.  Specifically: you seem to be entering this code path only for case #1.
<br>
<p>Please update the AC_MSG_WARN message.
<br>
<p><span class="quotelev1">&gt;                 AC_MSG_ERROR([Cannot continue])])
</span><br>
<span class="quotelev1">&gt;     AC_MSG_RESULT([yes])
</span><br>
<span class="quotelev1">&gt; -    OSHMEM_FORTRAN_BINDINGS=1
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt;     AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt; -    OSHMEM_FORTRAN_BINDINGS=0
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt; -AM_CONDITIONAL(OSHMEM_WANT_FORTRAN_BINDINGS,
</span><br>
<span class="quotelev1">&gt; -    [test $OSHMEM_FORTRAN_BINDINGS -eq 1])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# We can't set am_conditional here since it's yet unknown if there is valid Fortran compiler avaliable
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; ]) dnl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/configure.ac
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/configure.ac	Thu Jan 23 02:29:23 2014	(r30390)
</span><br>
<span class="quotelev1">&gt; +++ trunk/configure.ac	2014-01-23 02:49:13 EST (Thu, 23 Jan 2014)	(r30391)
</span><br>
<span class="quotelev1">&gt; @@ -1273,6 +1273,11 @@
</span><br>
<span class="quotelev1">&gt; # a C++ compiler.
</span><br>
<span class="quotelev1">&gt; AS_IF([test &quot;$OMPI_WANT_FORTRAN_BINDINGS&quot; != &quot;1&quot;],[F77=no FC=no])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +AM_CONDITIONAL(OSHMEM_BUILD_FORTRAN_BINDINGS,
</span><br>
<span class="quotelev1">&gt; +    [test &quot;$ompi_fortran_happy&quot; == &quot;1&quot; -a \
</span><br>
<span class="quotelev1">&gt; +          &quot;$OMPI_WANT_FORTRAN_BINDINGS&quot; == &quot;1&quot; -a \
</span><br>
<span class="quotelev1">&gt; +          &quot;$oshmem_fortran_enable&quot; != &quot;no&quot;])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; LT_CONFIG_LTDL_DIR([opal/libltdl], [subproject])
</span><br>
<span class="quotelev1">&gt; LTDL_CONVENIENCE
</span><br>
<span class="quotelev1">&gt; LT_INIT([dlopen win32-dll])
</span><br>
<p>This seems like the wrong place in configure.ac to put this check -- you put this OSHMEM check right in the middle of the libtool setup code (the Fortran check here is part of the libtool setup; see the comment right before that in configure.ac that describes what's going on).
<br>
<p>Why not put the OSHMEM check way up near/after the call to setup the Fortran MPI stuff?
<br>
<p><span class="quotelev1">&gt; Modified: trunk/oshmem/Makefile.am
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/oshmem/Makefile.am	Thu Jan 23 02:29:23 2014	(r30390)
</span><br>
<span class="quotelev1">&gt; +++ trunk/oshmem/Makefile.am	2014-01-23 02:49:13 EST (Thu, 23 Jan 2014)	(r30391)
</span><br>
<span class="quotelev1">&gt; @@ -17,7 +17,7 @@
</span><br>
<span class="quotelev1">&gt; endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Do we have the Fortran bindings?
</span><br>
<span class="quotelev1">&gt; -if OSHMEM_WANT_FORTRAN_BINDINGS
</span><br>
<span class="quotelev1">&gt; +if OSHMEM_BUILD_FORTRAN_BINDINGS
</span><br>
<span class="quotelev1">&gt; fortran_oshmem_lib = shmem/fortran/liboshmem_fortran.la
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt; fortran_oshmem_lib =
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/oshmem/shmem/fortran/Makefile.am
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/oshmem/shmem/fortran/Makefile.am	Thu Jan 23 02:29:23 2014	(r30390)
</span><br>
<span class="quotelev1">&gt; +++ trunk/oshmem/shmem/fortran/Makefile.am	2014-01-23 02:49:13 EST (Thu, 23 Jan 2014)	(r30391)
</span><br>
<span class="quotelev1">&gt; @@ -11,7 +11,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AM_CPPFLAGS     = -DOSHMEM_PROFILING_DEFINES=0 -DOSHMEM_HAVE_WEAK_SYMBOLS=0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -if OSHMEM_WANT_FORTRAN_BINDINGS
</span><br>
<span class="quotelev1">&gt; +if OSHMEM_BUILD_FORTRAN_BINDINGS
</span><br>
<span class="quotelev1">&gt; oshmem_fortran_lib       = liboshmem_fortran.la
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt; oshmem_fortran_lib       =
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/oshmem/tools/oshmem_info/Makefile.am
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/oshmem/tools/oshmem_info/Makefile.am	Thu Jan 23 02:29:23 2014	(r30390)
</span><br>
<span class="quotelev1">&gt; +++ trunk/oshmem/tools/oshmem_info/Makefile.am	2014-01-23 02:49:13 EST (Thu, 23 Jan 2014)	(r30391)
</span><br>
<span class="quotelev1">&gt; @@ -31,10 +31,10 @@
</span><br>
<span class="quotelev1">&gt;     AM_CFLAGS += -DOSHMEM_PROFILING=0
</span><br>
<span class="quotelev1">&gt; endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -if OSHMEM_WANT_FORTRAN_BINDINGS
</span><br>
<span class="quotelev1">&gt; -    AM_CFLAGS += -DOSHMEM_WANT_FORTRAN_BINDINGS=1
</span><br>
<span class="quotelev1">&gt; +if OSHMEM_BUILD_FORTRAN_BINDINGS
</span><br>
<span class="quotelev1">&gt; +    AM_CFLAGS += -DOSHMEM_BUILD_FORTRAN_BINDINGS=1
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt; -    AM_CFLAGS += -DOSHMEM_WANT_FORTRAN_BINDINGS=0
</span><br>
<span class="quotelev1">&gt; +    AM_CFLAGS += -DOSHMEM_BUILD_FORTRAN_BINDINGS=0
</span><br>
<p>These should all be AM_CPPFLAGS, not AM_CFLAGS.
<br>
<p><span class="quotelev1">&gt; endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; include $(top_srcdir)/Makefile.man-page-rules
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/oshmem/tools/oshmem_info/param.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/oshmem/tools/oshmem_info/param.c	Thu Jan 23 02:29:23 2014	(r30390)
</span><br>
<span class="quotelev1">&gt; +++ trunk/oshmem/tools/oshmem_info/param.c	2014-01-23 02:49:13 EST (Thu, 23 Jan 2014)	(r30391)
</span><br>
<span class="quotelev1">&gt; @@ -604,7 +604,7 @@
</span><br>
<span class="quotelev1">&gt;     /* This block displays all the options with which the current
</span><br>
<span class="quotelev1">&gt;      * installation of oshmem was configured. */
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt; -        char *oshmem_fortran = OSHMEM_WANT_FORTRAN_BINDINGS ? &quot;yes&quot; : &quot;no&quot;;
</span><br>
<span class="quotelev1">&gt; +        char *oshmem_fortran = OSHMEM_BUILD_FORTRAN_BINDINGS ? &quot;yes&quot; : &quot;no&quot;;
</span><br>
<span class="quotelev1">&gt;         char *oshmem_compat = OSHMEM_SPEC_COMPAT ? &quot;yes&quot; : &quot;no&quot;;
</span><br>
<span class="quotelev1">&gt;         char *oshmem_param_check = OSHMEM_PARAM_CHECK ? &quot;yes&quot; : &quot;no&quot;;
</span><br>
<span class="quotelev1">&gt;         char *oshmem_profiling = OSHMEM_PROFILING ? &quot;yes&quot; : &quot;no&quot;;
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
<li><strong>Next message:</strong> <a href="13902.php">Kenneth Adam Miller: "[OMPI devel] Specific use case - very very new to MPI"</a>
<li><strong>Previous message:</strong> <a href="13900.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13925.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30391 - in trunk: . config oshmem oshmem/shmem/fortran oshmem/tools/oshmem_info"</a>
<li><strong>Reply:</strong> <a href="13925.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30391 - in trunk: . config oshmem oshmem/shmem/fortran oshmem/tools/oshmem_info"</a>
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
