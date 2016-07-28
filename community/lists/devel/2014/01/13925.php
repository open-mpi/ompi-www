<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30391 - in trunk: . config oshmem oshmem/shmem/fortran oshmem/tools/oshmem_info";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 27 11:45:23 2014" -->
<!-- isoreceived="20140127164523" -->
<!-- sent="Mon, 27 Jan 2014 18:45:20 +0200" -->
<!-- isosent="20140127164520" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30391 - in trunk: . config oshmem oshmem/shmem/fortran oshmem/tools/oshmem_info" -->
<!-- id="CAAO1KyaNstajVxh7E2-uNTEF9cY4oEazGCqttYrAGo8rCorM9w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="284CE351-123D-4E7A-BD3B-E5875CFED009_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30391 - in trunk: . config oshmem oshmem/shmem/fortran oshmem/tools/oshmem_info<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-27 11:45:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13926.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<li><strong>Previous message:</strong> <a href="13924.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<li><strong>In reply to:</strong> <a href="13901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30391 - in trunk: . config oshmem	oshmem/shmem/fortran oshmem/tools/oshmem_info"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff,
<br>
we will check and address it.
<br>
<p><p>On Fri, Jan 24, 2014 at 7:13 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Mellanox --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some comments on the commit below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 23, 2014, at 2:49 AM, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/config/oshmem_configure_options.m4
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/config/oshmem_configure_options.m4  Thu Jan 23 02:29:23 2014
</span><br>
<span class="quotelev1">&gt;      (r30390)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/config/oshmem_configure_options.m4  2014-01-23 02:49:13 EST
</span><br>
<span class="quotelev1">&gt; (Thu, 23 Jan 2014)      (r30391)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -95,19 +95,19 @@
</span><br>
<span class="quotelev2">&gt; &gt;                [enable OSHMEM Fortran bindings (default: enabled if
</span><br>
<span class="quotelev1">&gt; Fortran compiler found)]))
</span><br>
<span class="quotelev2">&gt; &gt; if test &quot;$enable_oshmem_fortran&quot; != &quot;no&quot; -a &quot;$ompi_fortran_happy&quot; = 1;
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev2">&gt; &gt; # If no OMPI FORTRAN, bail
</span><br>
<span class="quotelev2">&gt; &gt; -   AS_IF([test $OMPI_WANT_FORTRAN_BINDINGS -eq 0],
</span><br>
<span class="quotelev2">&gt; &gt; +   AS_IF([test $OMPI_WANT_FORTRAN_BINDINGS -eq 0 -a &quot;$enable_oshmem&quot; !=
</span><br>
<span class="quotelev1">&gt; &quot;no&quot;],
</span><br>
<span class="quotelev2">&gt; &gt;                [AC_MSG_RESULT([bad value OMPI_WANT_FORTRAN_BINDINGS:
</span><br>
<span class="quotelev1">&gt; ($OMPI_WANT_FORTRAN_BINDINGS)])
</span><br>
<span class="quotelev2">&gt; &gt;                 AC_MSG_WARN([Your explicit request to
</span><br>
<span class="quotelev1">&gt; --enable-oshmem-fortran can only be satisfied if fortran support is enabled
</span><br>
<span class="quotelev1">&gt; in OMPI. You are seeing this message for one of two reasons:
</span><br>
<span class="quotelev2">&gt; &gt;                     1. OMPI fortran support has been explicitly disabled
</span><br>
<span class="quotelev1">&gt; via --disable-mpi-fortran, in which case you cannot
</span><br>
<span class="quotelev1">&gt; --enable-oshmem-fortran. Configure will abort because you, a human, have
</span><br>
<span class="quotelev1">&gt; explicitly asked for something that cannot be provided.
</span><br>
<span class="quotelev2">&gt; &gt;                     2. OMPI fortran support is implicitly not being
</span><br>
<span class="quotelev1">&gt; built because no fortran compiler could be found on your system. Configure
</span><br>
<span class="quotelev1">&gt; will abort because you, a human, have explicitly asked for something that
</span><br>
<span class="quotelev1">&gt; cannot be provided.])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you noted in a comment below, we haven't searched for a Fortran
</span><br>
<span class="quotelev1">&gt; compiler yet.  So the above message isn't correct.  Specifically: you seem
</span><br>
<span class="quotelev1">&gt; to be entering this code path only for case #1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please update the AC_MSG_WARN message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 AC_MSG_ERROR([Cannot continue])])
</span><br>
<span class="quotelev2">&gt; &gt;     AC_MSG_RESULT([yes])
</span><br>
<span class="quotelev2">&gt; &gt; -    OSHMEM_FORTRAN_BINDINGS=1
</span><br>
<span class="quotelev2">&gt; &gt; else
</span><br>
<span class="quotelev2">&gt; &gt;     AC_MSG_RESULT([no])
</span><br>
<span class="quotelev2">&gt; &gt; -    OSHMEM_FORTRAN_BINDINGS=0
</span><br>
<span class="quotelev2">&gt; &gt; fi
</span><br>
<span class="quotelev2">&gt; &gt; -AM_CONDITIONAL(OSHMEM_WANT_FORTRAN_BINDINGS,
</span><br>
<span class="quotelev2">&gt; &gt; -    [test $OSHMEM_FORTRAN_BINDINGS -eq 1])
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# We can't set am_conditional here since it's yet unknown if there is
</span><br>
<span class="quotelev1">&gt; valid Fortran compiler avaliable
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; ]) dnl
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/configure.ac
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/configure.ac        Thu Jan 23 02:29:23 2014        (r30390)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/configure.ac        2014-01-23 02:49:13 EST (Thu, 23 Jan
</span><br>
<span class="quotelev1">&gt; 2014)      (r30391)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -1273,6 +1273,11 @@
</span><br>
<span class="quotelev2">&gt; &gt; # a C++ compiler.
</span><br>
<span class="quotelev2">&gt; &gt; AS_IF([test &quot;$OMPI_WANT_FORTRAN_BINDINGS&quot; != &quot;1&quot;],[F77=no FC=no])
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +AM_CONDITIONAL(OSHMEM_BUILD_FORTRAN_BINDINGS,
</span><br>
<span class="quotelev2">&gt; &gt; +    [test &quot;$ompi_fortran_happy&quot; == &quot;1&quot; -a \
</span><br>
<span class="quotelev2">&gt; &gt; +          &quot;$OMPI_WANT_FORTRAN_BINDINGS&quot; == &quot;1&quot; -a \
</span><br>
<span class="quotelev2">&gt; &gt; +          &quot;$oshmem_fortran_enable&quot; != &quot;no&quot;])
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; LT_CONFIG_LTDL_DIR([opal/libltdl], [subproject])
</span><br>
<span class="quotelev2">&gt; &gt; LTDL_CONVENIENCE
</span><br>
<span class="quotelev2">&gt; &gt; LT_INIT([dlopen win32-dll])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems like the wrong place in configure.ac to put this check -- you
</span><br>
<span class="quotelev1">&gt; put this OSHMEM check right in the middle of the libtool setup code (the
</span><br>
<span class="quotelev1">&gt; Fortran check here is part of the libtool setup; see the comment right
</span><br>
<span class="quotelev1">&gt; before that in configure.ac that describes what's going on).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why not put the OSHMEM check way up near/after the call to setup the
</span><br>
<span class="quotelev1">&gt; Fortran MPI stuff?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/oshmem/Makefile.am
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/oshmem/Makefile.am  Thu Jan 23 02:29:23 2014        (r30390)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/oshmem/Makefile.am  2014-01-23 02:49:13 EST (Thu, 23 Jan 2014)
</span><br>
<span class="quotelev1">&gt;      (r30391)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -17,7 +17,7 @@
</span><br>
<span class="quotelev2">&gt; &gt; endif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # Do we have the Fortran bindings?
</span><br>
<span class="quotelev2">&gt; &gt; -if OSHMEM_WANT_FORTRAN_BINDINGS
</span><br>
<span class="quotelev2">&gt; &gt; +if OSHMEM_BUILD_FORTRAN_BINDINGS
</span><br>
<span class="quotelev2">&gt; &gt; fortran_oshmem_lib = shmem/fortran/liboshmem_fortran.la
</span><br>
<span class="quotelev2">&gt; &gt; else
</span><br>
<span class="quotelev2">&gt; &gt; fortran_oshmem_lib =
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/oshmem/shmem/fortran/Makefile.am
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/oshmem/shmem/fortran/Makefile.am    Thu Jan 23 02:29:23 2014
</span><br>
<span class="quotelev1">&gt;      (r30390)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/oshmem/shmem/fortran/Makefile.am    2014-01-23 02:49:13 EST
</span><br>
<span class="quotelev1">&gt; (Thu, 23 Jan 2014)      (r30391)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -11,7 +11,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; AM_CPPFLAGS     = -DOSHMEM_PROFILING_DEFINES=0
</span><br>
<span class="quotelev1">&gt; -DOSHMEM_HAVE_WEAK_SYMBOLS=0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -if OSHMEM_WANT_FORTRAN_BINDINGS
</span><br>
<span class="quotelev2">&gt; &gt; +if OSHMEM_BUILD_FORTRAN_BINDINGS
</span><br>
<span class="quotelev2">&gt; &gt; oshmem_fortran_lib       = liboshmem_fortran.la
</span><br>
<span class="quotelev2">&gt; &gt; else
</span><br>
<span class="quotelev2">&gt; &gt; oshmem_fortran_lib       =
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/oshmem/tools/oshmem_info/Makefile.am
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/oshmem/tools/oshmem_info/Makefile.am        Thu Jan 23
</span><br>
<span class="quotelev1">&gt; 02:29:23 2014        (r30390)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/oshmem/tools/oshmem_info/Makefile.am        2014-01-23
</span><br>
<span class="quotelev1">&gt; 02:49:13 EST (Thu, 23 Jan 2014)      (r30391)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -31,10 +31,10 @@
</span><br>
<span class="quotelev2">&gt; &gt;     AM_CFLAGS += -DOSHMEM_PROFILING=0
</span><br>
<span class="quotelev2">&gt; &gt; endif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -if OSHMEM_WANT_FORTRAN_BINDINGS
</span><br>
<span class="quotelev2">&gt; &gt; -    AM_CFLAGS += -DOSHMEM_WANT_FORTRAN_BINDINGS=1
</span><br>
<span class="quotelev2">&gt; &gt; +if OSHMEM_BUILD_FORTRAN_BINDINGS
</span><br>
<span class="quotelev2">&gt; &gt; +    AM_CFLAGS += -DOSHMEM_BUILD_FORTRAN_BINDINGS=1
</span><br>
<span class="quotelev2">&gt; &gt; else
</span><br>
<span class="quotelev2">&gt; &gt; -    AM_CFLAGS += -DOSHMEM_WANT_FORTRAN_BINDINGS=0
</span><br>
<span class="quotelev2">&gt; &gt; +    AM_CFLAGS += -DOSHMEM_BUILD_FORTRAN_BINDINGS=0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These should all be AM_CPPFLAGS, not AM_CFLAGS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; endif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; include $(top_srcdir)/Makefile.man-page-rules
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/oshmem/tools/oshmem_info/param.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/oshmem/tools/oshmem_info/param.c    Thu Jan 23 02:29:23 2014
</span><br>
<span class="quotelev1">&gt;      (r30390)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/oshmem/tools/oshmem_info/param.c    2014-01-23 02:49:13 EST
</span><br>
<span class="quotelev1">&gt; (Thu, 23 Jan 2014)      (r30391)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -604,7 +604,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;     /* This block displays all the options with which the current
</span><br>
<span class="quotelev2">&gt; &gt;      * installation of oshmem was configured. */
</span><br>
<span class="quotelev2">&gt; &gt;     {
</span><br>
<span class="quotelev2">&gt; &gt; -        char *oshmem_fortran = OSHMEM_WANT_FORTRAN_BINDINGS ? &quot;yes&quot; :
</span><br>
<span class="quotelev1">&gt; &quot;no&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +        char *oshmem_fortran = OSHMEM_BUILD_FORTRAN_BINDINGS ? &quot;yes&quot; :
</span><br>
<span class="quotelev1">&gt; &quot;no&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;         char *oshmem_compat = OSHMEM_SPEC_COMPAT ? &quot;yes&quot; : &quot;no&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;         char *oshmem_param_check = OSHMEM_PARAM_CHECK ? &quot;yes&quot; : &quot;no&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;         char *oshmem_profiling = OSHMEM_PROFILING ? &quot;yes&quot; : &quot;no&quot;;
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13925/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13926.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<li><strong>Previous message:</strong> <a href="13924.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<li><strong>In reply to:</strong> <a href="13901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30391 - in trunk: . config oshmem	oshmem/shmem/fortran oshmem/tools/oshmem_info"</a>
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
