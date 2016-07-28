<?
$subject_val = "Re: [OMPI devel] trunk borked -- my fault";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 15:36:09 2009" -->
<!-- isoreceived="20090811193609" -->
<!-- sent="Tue, 11 Aug 2009 15:36:03 -0400" -->
<!-- isosent="20090811193603" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk borked -- my fault" -->
<!-- id="19F8A1C2-4C2A-4C42-9200-EEF117074953_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090811193125.GC13270_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk borked -- my fault<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 15:36:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6623.php">Scott Atchley: "Re: [OMPI devel] RFC: PML/CM priority"</a>
<li><strong>Previous message:</strong> <a href="6621.php">Ralf Wildenhues: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>In reply to:</strong> <a href="6621.php">Ralf Wildenhues: "Re: [OMPI devel] trunk borked -- my fault"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yep -- we discussed this after I committed that fix, and I read up on  
<br>
the AC docs to see why it worked.  I now grok, and have a pending fix  
<br>
queued up for tonight (just so we don't commit autogen-worthy changes)  
<br>
that fixes exactly what you're talking about.  My patch is almost  
<br>
exactly the same as yours.  :-)
<br>
<p>I was literally just about to attach a new patch for v1.3 with *all*  
<br>
of these fixes on to
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1993">https://svn.open-mpi.org/trac/ompi/ticket/1993</a> (Brian noted exactly  
<br>
the same issues you did :-) ).
<br>
<p>You have taught us well, Obi Wan...
<br>
<p><p>On Aug 11, 2009, at 3:31 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Jeff Squyres wrote on Tue, Aug 04, 2009 at 11:38:29PM CEST:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/21759">https://svn.open-mpi.org/trac/ompi/changeset/21759</a> seems to make us
</span><br>
<span class="quotelev2">&gt; &gt; play well with AC 2.64.  To be honest, I'm not sure why this change
</span><br>
<span class="quotelev2">&gt; &gt; works, but it does.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First off, the warnings 2.64 spit out were about real issues (that  
</span><br>
<span class="quotelev1">&gt; could
</span><br>
<span class="quotelev1">&gt; have caused unwanted logic with older Autoconf versions, too, but with
</span><br>
<span class="quotelev1">&gt; 2.64 there are a few more cases with consequences).  The fix in 21759
</span><br>
<span class="quotelev1">&gt; avoids the warnings but likely doesn't do what you would like it to  
</span><br>
<span class="quotelev1">&gt; do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, this code in ompi_setup_f77.m4:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   AC_DEFUN([OMPI_PROG_F77],[
</span><br>
<span class="quotelev1">&gt;       AC_PROG_F77([gfortran g77 f77 xlf frt ifort pgf77 fort77 fl32  
</span><br>
<span class="quotelev1">&gt; af77])
</span><br>
<span class="quotelev1">&gt;   ])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   AC_DEFUN([OMPI_SETUP_F77],[
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   #
</span><br>
<span class="quotelev1">&gt;   ompi_fflags_save=&quot;$FFLAGS&quot;
</span><br>
<span class="quotelev1">&gt;   # Strangeness in AC2.64 forces us to require a macro that calls
</span><br>
<span class="quotelev1">&gt;   # PROG_FC instead of calling it directly.  Weird.
</span><br>
<span class="quotelev1">&gt;   AC_REQUIRE([OMPI_PROG_F77])
</span><br>
<span class="quotelev1">&gt;   FFLAGS=&quot;$ompi_fflags_save&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; will cause the contents of the OMPI_PROG_F77 macro to be expanded
</span><br>
<span class="quotelev1">&gt; completely before the expansion of the OMPI_SETUP_F77 macro.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That means, the lines
</span><br>
<span class="quotelev1">&gt;   ompi_fflags_save=&quot;$FFLAGS&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   FFLAGS=&quot;$ompi_fflags_save&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; will not bracket the AC_PROG_F77 call, as they should.  What you  
</span><br>
<span class="quotelev1">&gt; should
</span><br>
<span class="quotelev1">&gt; do is move these lines to the required macro as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The patch below ought to fix up these issues, as well as the scope  
</span><br>
<span class="quotelev1">&gt; push
</span><br>
<span class="quotelev1">&gt; macro for C++.  For clarity, you could also put that in another,
</span><br>
<span class="quotelev1">&gt; separate macro, and AC_REQUIRE that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009-08-11  Ralf Wildenhues  &lt;Ralf.Wildenhues_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * config/ompi_setup_f90.m4 (OMPI_PROG_FC, OMPI_SETUP_F90):
</span><br>
<span class="quotelev1">&gt; Move FCFLAGS save/restore wrap in OMPI_PROG_FC.
</span><br>
<span class="quotelev1">&gt; * config/ompi_setup_f77.m4 (OMPI_PROG_F77, OMPI_SETUP_F77):
</span><br>
<span class="quotelev1">&gt; Likewise for FFLAGS.
</span><br>
<span class="quotelev1">&gt; * config/ompi_setup_cxx.m4 (OMPI_SETUP_CXX)
</span><br>
<span class="quotelev1">&gt; (_OMPI_SETUP_CXX_COMPILER_HELPER, _OMPI_SETUP_CXX_COMPILER):
</span><br>
<span class="quotelev1">&gt; Fold OMPI_VAR_SCOPE_PUSH and AC_PROG_CXX{,CPP} calls into a
</span><br>
<span class="quotelev1">&gt; new helper macro and require that, to fix semantics with respect
</span><br>
<span class="quotelev1">&gt; to AC_REQUIRE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: config/ompi_setup_f90.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- config/ompi_setup_f90.m4    (revision 21794)
</span><br>
<span class="quotelev1">&gt; +++ config/ompi_setup_f90.m4    (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -42,7 +42,9 @@
</span><br>
<span class="quotelev1">&gt;  # This macro is necessary because PROG_FC is REQUIREd by multiple
</span><br>
<span class="quotelev1">&gt;  # places in SETUP_F90.
</span><br>
<span class="quotelev1">&gt;  AC_DEFUN([OMPI_PROG_FC],[
</span><br>
<span class="quotelev1">&gt; +    ompi_fcflags_save=&quot;$FCFLAGS&quot;
</span><br>
<span class="quotelev1">&gt;      AC_PROG_FC([gfortran f95 fort xlf95 ifort ifc efc pgf95 lf95  
</span><br>
<span class="quotelev1">&gt; f90 xlf90 pgf90 epcf90])
</span><br>
<span class="quotelev1">&gt; +    FCFLAGS=&quot;$ompi_fcflags_save&quot;
</span><br>
<span class="quotelev1">&gt;  ])dnl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  AC_DEFUN([OMPI_SETUP_F90],[
</span><br>
<span class="quotelev1">&gt; @@ -86,11 +88,9 @@
</span><br>
<span class="quotelev1">&gt;      # list of 95 and 90 compilers and use it here.
</span><br>
<span class="quotelev1">&gt;      #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    ompi_fcflags_save=&quot;$FCFLAGS&quot;
</span><br>
<span class="quotelev1">&gt;      # Strangeness in AC2.64 forces us to require a macro that calls
</span><br>
<span class="quotelev1">&gt;      # PROG_FC instead of calling it directly.  Weird.
</span><br>
<span class="quotelev1">&gt;      AC_REQUIRE([OMPI_PROG_FC])
</span><br>
<span class="quotelev1">&gt; -    FCFLAGS=&quot;$ompi_fcflags_save&quot;
</span><br>
<span class="quotelev1">&gt;      if test -z &quot;$FC&quot;; then
</span><br>
<span class="quotelev1">&gt;          AC_MSG_WARN([*** Fortran 90/95 bindings disabled (could not  
</span><br>
<span class="quotelev1">&gt; find compiler)])
</span><br>
<span class="quotelev1">&gt;          OMPI_WANT_F90_BINDINGS=0
</span><br>
<span class="quotelev1">&gt; Index: config/ompi_setup_cxx.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- config/ompi_setup_cxx.m4    (revision 21794)
</span><br>
<span class="quotelev1">&gt; +++ config/ompi_setup_cxx.m4    (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -47,11 +47,20 @@
</span><br>
<span class="quotelev1">&gt;      _OMPI_CXX_CHECK_2D_CONST_CAST
</span><br>
<span class="quotelev1">&gt;  ])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +# _OMPI_SETUP_CXX_COMPILER_HELPER
</span><br>
<span class="quotelev1">&gt; +# -------------------------------
</span><br>
<span class="quotelev1">&gt; +AC_DEFUN([_OMPI_SETUP_CXX_COMPILER_HELPER], [
</span><br>
<span class="quotelev1">&gt; +    OMPI_VAR_SCOPE_PUSH(ompi_cxx_compiler_works)
</span><br>
<span class="quotelev1">&gt; +    ompi_cxxflags_save=&quot;$CXXFLAGS&quot;
</span><br>
<span class="quotelev1">&gt; +    AC_PROG_CXX
</span><br>
<span class="quotelev1">&gt; +    AC_PROG_CXXCPP
</span><br>
<span class="quotelev1">&gt; +    CXXFLAGS=&quot;$ompi_cxxflags_save&quot;
</span><br>
<span class="quotelev1">&gt; +])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  # _OMPI_SETUP_CXX_COMPILER()
</span><br>
<span class="quotelev1">&gt;  # --------------------------
</span><br>
<span class="quotelev1">&gt;  # Setup the CXX compiler
</span><br>
<span class="quotelev1">&gt;  AC_DEFUN([_OMPI_SETUP_CXX_COMPILER],[
</span><br>
<span class="quotelev1">&gt; -    OMPI_VAR_SCOPE_PUSH(ompi_cxx_compiler_works)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      # There's a few cases here:
</span><br>
<span class="quotelev1">&gt;      #
</span><br>
<span class="quotelev1">&gt; @@ -66,11 +75,8 @@
</span><br>
<span class="quotelev1">&gt;      # both found a c++ compiler and want the C++ bindings (i.e.,  
</span><br>
<span class="quotelev1">&gt; either
</span><br>
<span class="quotelev1">&gt;      # case #1 or #3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    ompi_cxxflags_save=&quot;$CXXFLAGS&quot;
</span><br>
<span class="quotelev1">&gt; -    AC_REQUIRE([AC_PROG_CXX])
</span><br>
<span class="quotelev1">&gt; -    AC_REQUIRE([AC_PROG_CXXCPP])
</span><br>
<span class="quotelev1">&gt; +    AC_REQUIRE([_OMPI_SETUP_CXX_COMPILER_HELPER])
</span><br>
<span class="quotelev1">&gt;      BASECXX=&quot;`basename $CXX`&quot;
</span><br>
<span class="quotelev1">&gt; -    CXXFLAGS=&quot;$ompi_cxxflags_save&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      AS_IF([test &quot;x$CXX&quot; = &quot;x&quot;], [CXX=none])
</span><br>
<span class="quotelev1">&gt;      set dummy $CXX
</span><br>
<span class="quotelev1">&gt; Index: config/ompi_setup_f77.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- config/ompi_setup_f77.m4    (revision 21794)
</span><br>
<span class="quotelev1">&gt; +++ config/ompi_setup_f77.m4    (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -41,7 +41,9 @@
</span><br>
<span class="quotelev1">&gt;  # This macro is necessary because PROG_FC is REQUIREd by multiple
</span><br>
<span class="quotelev1">&gt;  # places in SETUP_F90.
</span><br>
<span class="quotelev1">&gt;  AC_DEFUN([OMPI_PROG_F77],[
</span><br>
<span class="quotelev1">&gt; +    ompi_fflags_save=&quot;$FFLAGS&quot;
</span><br>
<span class="quotelev1">&gt;      AC_PROG_F77([gfortran g77 f77 xlf frt ifort pgf77 fort77 fl32  
</span><br>
<span class="quotelev1">&gt; af77])
</span><br>
<span class="quotelev1">&gt; +    FFLAGS=&quot;$ompi_fflags_save&quot;
</span><br>
<span class="quotelev1">&gt;  ])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  AC_DEFUN([OMPI_SETUP_F77],[
</span><br>
<span class="quotelev1">&gt; @@ -58,11 +60,9 @@
</span><br>
<span class="quotelev1">&gt;  # Always run this test, even if fortran isn't wanted so that F77 has
</span><br>
<span class="quotelev1">&gt;  # value for the Fint tests
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt; -ompi_fflags_save=&quot;$FFLAGS&quot;
</span><br>
<span class="quotelev1">&gt;  # Strangeness in AC2.64 forces us to require a macro that calls
</span><br>
<span class="quotelev1">&gt;  # PROG_FC instead of calling it directly.  Weird.
</span><br>
<span class="quotelev1">&gt;  AC_REQUIRE([OMPI_PROG_F77])
</span><br>
<span class="quotelev1">&gt; -FFLAGS=&quot;$ompi_fflags_save&quot;
</span><br>
<span class="quotelev1">&gt;  if test -z &quot;$F77&quot;; then
</span><br>
<span class="quotelev1">&gt;      AC_MSG_WARN([*** Fortran 77 bindings disabled (could not find  
</span><br>
<span class="quotelev1">&gt; compiler)])
</span><br>
<span class="quotelev1">&gt;      OMPI_WANT_F77_BINDINGS=0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6623.php">Scott Atchley: "Re: [OMPI devel] RFC: PML/CM priority"</a>
<li><strong>Previous message:</strong> <a href="6621.php">Ralf Wildenhues: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>In reply to:</strong> <a href="6621.php">Ralf Wildenhues: "Re: [OMPI devel] trunk borked -- my fault"</a>
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
