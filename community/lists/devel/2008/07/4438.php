<?
$subject_val = "[OMPI devel] some configury nits";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 26 06:35:29 2008" -->
<!-- isoreceived="20080726103529" -->
<!-- sent="Sat, 26 Jul 2008 12:35:23 +0200" -->
<!-- isosent="20080726103523" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="[OMPI devel] some configury nits" -->
<!-- id="20080726103522.GA6895_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] some configury nits<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-26 06:35:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4439.php">Jeff Squyres: "Re: [OMPI devel] some configury nits"</a>
<li><strong>Previous message:</strong> <a href="4437.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4439.php">Jeff Squyres: "Re: [OMPI devel] some configury nits"</a>
<li><strong>Reply:</strong> <a href="4439.php">Jeff Squyres: "Re: [OMPI devel] some configury nits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I tried to build OpenMPI trunk on my Debian stable/testing mix,
<br>
and to make things more interesting, today my /bin/sh is dash,
<br>
and while gcc is version 4.3.1, g++ remained at 4.1.3.
<br>
<p>I needed the following patch in order to get configure to finish
<br>
(&quot;test ... == ...&quot; is a bash extension).
<br>
<p>Then, the build failed with:
<br>
<p>| make[6]: Entering directory `/tmp/OpenMPI/build/ompi/contrib/vt/vt/tools/vtfilter'
<br>
| g++ -DHAVE_CONFIG_H -I. -I../../../../../../../ompi-trunk/ompi/contrib/vt/vt/tools/vtfilter -I../.. -I../../../../../../../ompi-trunk/ompi/contrib/vt/vt/extlib/otf/otflib -I../../extlib/otf/otflib -I../../../../../../../ompi-trunk/ompi/contrib/vt/vt/vtlib/ -I../../vtlib   -fopenmp -DVT_OMP -O3 -DNDEBUG -finline-functions -pthread -MT vtfilter-vt_filter.o -MD -MP -MF .deps/vtfilter-vt_filter.Tpo -c -o vtfilter-vt_filter.o `test -f 'vt_filter.cc' || echo '../../../../../../../ompi-trunk/ompi/contrib/vt/vt/tools/vtfilter/'`vt_filter.cc
<br>
| g++ -DHAVE_CONFIG_H -I. -I../../../../../../../ompi-trunk/ompi/contrib/vt/vt/tools/vtfilter -I../.. -I../../../../../../../ompi-trunk/ompi/contrib/vt/vt/extlib/otf/otflib -I../../extlib/otf/otflib -I../../../../../../../ompi-trunk/ompi/contrib/vt/vt/vtlib/ -I../../vtlib   -fopenmp -DVT_OMP -O3 -DNDEBUG -finline-functions -pthread -MT vtfilter-vt_filthandler.o -MD -MP -MF .deps/vtfilter-vt_filthandler.Tpo -c -o vtfilter-vt_filthandler.o `test -f 'vt_filthandler.cc' || echo '../../../../../../../ompi-trunk/ompi/contrib/vt/vt/tools/vtfilter/'`vt_filthandler.cc
<br>
| cc1plus: error: unrecognized command line option &quot;-fopenmp&quot;
<br>
| cc1plus: error: unrecognized command line option &quot;-fopenmp&quot;
<br>
| make[6]: *** [vtfilter-vt_filter.o] Fehler 1
<br>
<p>This is because GCC 4.1.3 doesn't know about -fopenmp.  The AX_OPENMP is
<br>
called in ACVT_OMP (in ompi/contrib/vt/vt/acinclude.m4) only for the C
<br>
compiler, not the C++ one.  Note that the AX_OPENMP is suited to be
<br>
called for multiple languages (e.g., wrapped in AC_LANG_PUSH(...) ...
<br>
AC_LANG_POP(...)).  However, OpenMPI may decide to not allow for
<br>
different compiler settings here, or at least require that all compilers
<br>
used do OpenMP.  As I don't know what's desirable, no proposed patch
<br>
here.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>Fix unportable test statements in configure fragments.
<br>
<p>Index: opal/mca/memory/ptmalloc2/configure.m4
<br>
===================================================================
<br>
--- opal/mca/memory/ptmalloc2/configure.m4	(Revision 19044)
<br>
+++ opal/mca/memory/ptmalloc2/configure.m4	(Arbeitskopie)
<br>
@@ -37,7 +37,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AM_CONDITIONAL([OMPI_WANT_EXTERNAL_PTMALLOC2],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[test &quot;$enable_ptmalloc2_internal&quot; != &quot;yes&quot;])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING([if ptmalloc2 should be part of libopen-pal])
<br>
-    AS_IF([test &quot;$enable_ptmalloc2_internal&quot; == &quot;yes&quot;],
<br>
+    AS_IF([test &quot;$enable_ptmalloc2_internal&quot; = &quot;yes&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_RESULT([yes])], [AC_MSG_RESULT([no])])
<br>
&nbsp;
<br>
&nbsp;
<br>
Index: ompi/contrib/vt/vt/extlib/otf/acinclude.m4
<br>
===================================================================
<br>
--- ompi/contrib/vt/vt/extlib/otf/acinclude.m4	(Revision 19044)
<br>
+++ ompi/contrib/vt/vt/extlib/otf/acinclude.m4	(Arbeitskopie)
<br>
@@ -306,7 +306,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;py_version=`$PYTHON -c &quot;from distutils.sysconfig import *; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from string import join; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print join(get_config_vars('VERSION'))&quot; 2&gt; /dev/null`
<br>
-			if test &quot;$py_version&quot; == &quot;[None]&quot; -o -z &quot;$py_version&quot;; then
<br>
+			if test &quot;$py_version&quot; = &quot;[None]&quot; -o -z &quot;$py_version&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test -n &quot;$PYTHON_VERSION&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;py_version=$PYTHON_VERSION
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
@@ -320,7 +320,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print '-L' + get_python_lib(0,1), \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'-lpython';&quot; 2&gt; /dev/null`$py_version
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
-		if test ! &quot;$PYTHON_LDFLAGS&quot; == &quot;$py_version&quot;; then
<br>
+		if test ! &quot;$PYTHON_LDFLAGS&quot; = &quot;$py_version&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_RESULT([$PYTHON_LDFLAGS])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_RESULT([no])
<br>
Index: ompi/contrib/vt/vt/acinclude.m4
<br>
===================================================================
<br>
--- ompi/contrib/vt/vt/acinclude.m4	(Revision 19044)
<br>
+++ ompi/contrib/vt/vt/acinclude.m4	(Arbeitskopie)
<br>
@@ -312,7 +312,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$2=`eval echo $var`
<br>
-		AS_IF([test $$2 == $var], [break], [var=$$2])
<br>
+		AS_IF([test $$2 = $var], [break], [var=$$2])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;done
<br>
&nbsp;])
<br>
&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4439.php">Jeff Squyres: "Re: [OMPI devel] some configury nits"</a>
<li><strong>Previous message:</strong> <a href="4437.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4439.php">Jeff Squyres: "Re: [OMPI devel] some configury nits"</a>
<li><strong>Reply:</strong> <a href="4439.php">Jeff Squyres: "Re: [OMPI devel] some configury nits"</a>
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
