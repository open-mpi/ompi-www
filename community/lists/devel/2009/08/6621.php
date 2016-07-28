<?
$subject_val = "Re: [OMPI devel] trunk borked -- my fault";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 15:31:33 2009" -->
<!-- isoreceived="20090811193133" -->
<!-- sent="Tue, 11 Aug 2009 21:31:26 +0200" -->
<!-- isosent="20090811193126" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk borked -- my fault" -->
<!-- id="20090811193125.GC13270_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FCBC12CB-8208-478F-A838-1A78F8DC49E7_at_cisco.com" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 15:31:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6622.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>Previous message:</strong> <a href="6620.php">George Bosilca: "Re: [OMPI devel] RFC: PML/CM priority"</a>
<li><strong>In reply to:</strong> <a href="6585.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6622.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>Reply:</strong> <a href="6622.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>* Jeff Squyres wrote on Tue, Aug 04, 2009 at 11:38:29PM CEST:
<br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/21759">https://svn.open-mpi.org/trac/ompi/changeset/21759</a> seems to make us
</span><br>
<span class="quotelev1">&gt; play well with AC 2.64.  To be honest, I'm not sure why this change
</span><br>
<span class="quotelev1">&gt; works, but it does.
</span><br>
<p>First off, the warnings 2.64 spit out were about real issues (that could
<br>
have caused unwanted logic with older Autoconf versions, too, but with
<br>
2.64 there are a few more cases with consequences).  The fix in 21759
<br>
avoids the warnings but likely doesn't do what you would like it to do.
<br>
<p>For example, this code in ompi_setup_f77.m4:
<br>
<p>&nbsp;&nbsp;AC_DEFUN([OMPI_PROG_F77],[ 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_PROG_F77([gfortran g77 f77 xlf frt ifort pgf77 fort77 fl32 af77]) 
<br>
&nbsp;&nbsp;]) 
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;AC_DEFUN([OMPI_SETUP_F77],[ 
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;# 
<br>
&nbsp;&nbsp;ompi_fflags_save=&quot;$FFLAGS&quot; 
<br>
&nbsp;&nbsp;# Strangeness in AC2.64 forces us to require a macro that calls 
<br>
&nbsp;&nbsp;# PROG_FC instead of calling it directly.  Weird. 
<br>
&nbsp;&nbsp;AC_REQUIRE([OMPI_PROG_F77]) 
<br>
&nbsp;&nbsp;FFLAGS=&quot;$ompi_fflags_save&quot; 
<br>
<p>will cause the contents of the OMPI_PROG_F77 macro to be expanded
<br>
completely before the expansion of the OMPI_SETUP_F77 macro.
<br>
<p>That means, the lines
<br>
&nbsp;&nbsp;ompi_fflags_save=&quot;$FFLAGS&quot;
<br>
<p>&nbsp;&nbsp;FFLAGS=&quot;$ompi_fflags_save&quot; 
<br>
<p>will not bracket the AC_PROG_F77 call, as they should.  What you should
<br>
do is move these lines to the required macro as well.
<br>
<p>The patch below ought to fix up these issues, as well as the scope push
<br>
macro for C++.  For clarity, you could also put that in another,
<br>
separate macro, and AC_REQUIRE that.
<br>
<p>Hope that helps.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p><p>2009-08-11  Ralf Wildenhues  &lt;Ralf.Wildenhues_at_[hidden]&gt;
<br>
<p>* config/ompi_setup_f90.m4 (OMPI_PROG_FC, OMPI_SETUP_F90):
<br>
Move FCFLAGS save/restore wrap in OMPI_PROG_FC.
<br>
* config/ompi_setup_f77.m4 (OMPI_PROG_F77, OMPI_SETUP_F77):
<br>
Likewise for FFLAGS.
<br>
* config/ompi_setup_cxx.m4 (OMPI_SETUP_CXX)
<br>
(_OMPI_SETUP_CXX_COMPILER_HELPER, _OMPI_SETUP_CXX_COMPILER):
<br>
Fold OMPI_VAR_SCOPE_PUSH and AC_PROG_CXX{,CPP} calls into a
<br>
new helper macro and require that, to fix semantics with respect
<br>
to AC_REQUIRE.
<br>
<p>Index: config/ompi_setup_f90.m4
<br>
===================================================================
<br>
--- config/ompi_setup_f90.m4	(revision 21794)
<br>
+++ config/ompi_setup_f90.m4	(working copy)
<br>
@@ -42,7 +42,9 @@
<br>
&nbsp;# This macro is necessary because PROG_FC is REQUIREd by multiple
<br>
&nbsp;# places in SETUP_F90.
<br>
&nbsp;AC_DEFUN([OMPI_PROG_FC],[
<br>
+    ompi_fcflags_save=&quot;$FCFLAGS&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_PROG_FC([gfortran f95 fort xlf95 ifort ifc efc pgf95 lf95 f90 xlf90 pgf90 epcf90])
<br>
+    FCFLAGS=&quot;$ompi_fcflags_save&quot;
<br>
&nbsp;])dnl
<br>
&nbsp;
<br>
&nbsp;AC_DEFUN([OMPI_SETUP_F90],[
<br>
@@ -86,11 +88,9 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# list of 95 and 90 compilers and use it here.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#
<br>
&nbsp;
<br>
-    ompi_fcflags_save=&quot;$FCFLAGS&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Strangeness in AC2.64 forces us to require a macro that calls
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# PROG_FC instead of calling it directly.  Weird.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_REQUIRE([OMPI_PROG_FC])
<br>
-    FCFLAGS=&quot;$ompi_fcflags_save&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test -z &quot;$FC&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_WARN([*** Fortran 90/95 bindings disabled (could not find compiler)])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_WANT_F90_BINDINGS=0
<br>
Index: config/ompi_setup_cxx.m4
<br>
===================================================================
<br>
--- config/ompi_setup_cxx.m4	(revision 21794)
<br>
+++ config/ompi_setup_cxx.m4	(working copy)
<br>
@@ -47,11 +47,20 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_OMPI_CXX_CHECK_2D_CONST_CAST
<br>
&nbsp;])
<br>
&nbsp;
<br>
+# _OMPI_SETUP_CXX_COMPILER_HELPER
<br>
+# -------------------------------
<br>
+AC_DEFUN([_OMPI_SETUP_CXX_COMPILER_HELPER], [
<br>
+    OMPI_VAR_SCOPE_PUSH(ompi_cxx_compiler_works)
<br>
+    ompi_cxxflags_save=&quot;$CXXFLAGS&quot;
<br>
+    AC_PROG_CXX
<br>
+    AC_PROG_CXXCPP
<br>
+    CXXFLAGS=&quot;$ompi_cxxflags_save&quot;
<br>
+])
<br>
+
<br>
&nbsp;# _OMPI_SETUP_CXX_COMPILER()
<br>
&nbsp;# --------------------------
<br>
&nbsp;# Setup the CXX compiler
<br>
&nbsp;AC_DEFUN([_OMPI_SETUP_CXX_COMPILER],[
<br>
-    OMPI_VAR_SCOPE_PUSH(ompi_cxx_compiler_works)
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# There's a few cases here:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#
<br>
@@ -66,11 +75,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# both found a c++ compiler and want the C++ bindings (i.e., either
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# case #1 or #3)
<br>
&nbsp;
<br>
-    ompi_cxxflags_save=&quot;$CXXFLAGS&quot;
<br>
-    AC_REQUIRE([AC_PROG_CXX])
<br>
-    AC_REQUIRE([AC_PROG_CXXCPP])
<br>
+    AC_REQUIRE([_OMPI_SETUP_CXX_COMPILER_HELPER])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BASECXX=&quot;`basename $CXX`&quot;
<br>
-    CXXFLAGS=&quot;$ompi_cxxflags_save&quot;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test &quot;x$CXX&quot; = &quot;x&quot;], [CXX=none])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;set dummy $CXX
<br>
Index: config/ompi_setup_f77.m4
<br>
===================================================================
<br>
--- config/ompi_setup_f77.m4	(revision 21794)
<br>
+++ config/ompi_setup_f77.m4	(working copy)
<br>
@@ -41,7 +41,9 @@
<br>
&nbsp;# This macro is necessary because PROG_FC is REQUIREd by multiple
<br>
&nbsp;# places in SETUP_F90.
<br>
&nbsp;AC_DEFUN([OMPI_PROG_F77],[
<br>
+    ompi_fflags_save=&quot;$FFLAGS&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_PROG_F77([gfortran g77 f77 xlf frt ifort pgf77 fort77 fl32 af77])
<br>
+    FFLAGS=&quot;$ompi_fflags_save&quot;
<br>
&nbsp;])
<br>
&nbsp;
<br>
&nbsp;AC_DEFUN([OMPI_SETUP_F77],[
<br>
@@ -58,11 +60,9 @@
<br>
&nbsp;# Always run this test, even if fortran isn't wanted so that F77 has
<br>
&nbsp;# value for the Fint tests
<br>
&nbsp;#
<br>
-ompi_fflags_save=&quot;$FFLAGS&quot;
<br>
&nbsp;# Strangeness in AC2.64 forces us to require a macro that calls
<br>
&nbsp;# PROG_FC instead of calling it directly.  Weird.
<br>
&nbsp;AC_REQUIRE([OMPI_PROG_F77])
<br>
-FFLAGS=&quot;$ompi_fflags_save&quot;
<br>
&nbsp;if test -z &quot;$F77&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_WARN([*** Fortran 77 bindings disabled (could not find compiler)])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_WANT_F77_BINDINGS=0
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6622.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>Previous message:</strong> <a href="6620.php">George Bosilca: "Re: [OMPI devel] RFC: PML/CM priority"</a>
<li><strong>In reply to:</strong> <a href="6585.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6622.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>Reply:</strong> <a href="6622.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
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
