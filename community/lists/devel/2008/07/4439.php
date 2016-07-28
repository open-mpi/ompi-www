<?
$subject_val = "Re: [OMPI devel] some configury nits";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 26 08:34:11 2008" -->
<!-- isoreceived="20080726123411" -->
<!-- sent="Sat, 26 Jul 2008 08:34:03 -0400" -->
<!-- isosent="20080726123403" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] some configury nits" -->
<!-- id="6F692032-E373-4D54-B1C8-9C46AEDECE2A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080726103522.GA6895_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] some configury nits<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-26 08:34:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4440.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="4438.php">Ralf Wildenhues: "[OMPI devel] some configury nits"</a>
<li><strong>In reply to:</strong> <a href="4438.php">Ralf Wildenhues: "[OMPI devel] some configury nits"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralf!
<br>
<p>Dresden/VT guys: can you apply the VT-related patches, and look into  
<br>
the AX_OPENMP issue?  I'll apply the ptmalloc2 patch.
<br>
<p><p><p>On Jul 26, 2008, at 6:35 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to build OpenMPI trunk on my Debian stable/testing mix,
</span><br>
<span class="quotelev1">&gt; and to make things more interesting, today my /bin/sh is dash,
</span><br>
<span class="quotelev1">&gt; and while gcc is version 4.3.1, g++ remained at 4.1.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I needed the following patch in order to get configure to finish
</span><br>
<span class="quotelev1">&gt; (&quot;test ... == ...&quot; is a bash extension).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then, the build failed with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; | make[6]: Entering directory `/tmp/OpenMPI/build/ompi/contrib/vt/vt/ 
</span><br>
<span class="quotelev1">&gt; tools/vtfilter'
</span><br>
<span class="quotelev1">&gt; | g++ -DHAVE_CONFIG_H -I. -I../../../../../../../ompi-trunk/ompi/ 
</span><br>
<span class="quotelev1">&gt; contrib/vt/vt/tools/vtfilter -I../.. -I../../../../../../../ompi- 
</span><br>
<span class="quotelev1">&gt; trunk/ompi/contrib/vt/vt/extlib/otf/otflib -I../../extlib/otf/otflib  
</span><br>
<span class="quotelev1">&gt; -I../../../../../../../ompi-trunk/ompi/contrib/vt/vt/vtlib/ -I../../ 
</span><br>
<span class="quotelev1">&gt; vtlib   -fopenmp -DVT_OMP -O3 -DNDEBUG -finline-functions -pthread - 
</span><br>
<span class="quotelev1">&gt; MT vtfilter-vt_filter.o -MD -MP -MF .deps/vtfilter-vt_filter.Tpo -c - 
</span><br>
<span class="quotelev1">&gt; o vtfilter-vt_filter.o `test -f 'vt_filter.cc' || echo  
</span><br>
<span class="quotelev1">&gt; '../../../../../../../ompi-trunk/ompi/contrib/vt/vt/tools/ 
</span><br>
<span class="quotelev1">&gt; vtfilter/'`vt_filter.cc
</span><br>
<span class="quotelev1">&gt; | g++ -DHAVE_CONFIG_H -I. -I../../../../../../../ompi-trunk/ompi/ 
</span><br>
<span class="quotelev1">&gt; contrib/vt/vt/tools/vtfilter -I../.. -I../../../../../../../ompi- 
</span><br>
<span class="quotelev1">&gt; trunk/ompi/contrib/vt/vt/extlib/otf/otflib -I../../extlib/otf/otflib  
</span><br>
<span class="quotelev1">&gt; -I../../../../../../../ompi-trunk/ompi/contrib/vt/vt/vtlib/ -I../../ 
</span><br>
<span class="quotelev1">&gt; vtlib   -fopenmp -DVT_OMP -O3 -DNDEBUG -finline-functions -pthread - 
</span><br>
<span class="quotelev1">&gt; MT vtfilter-vt_filthandler.o -MD -MP -MF .deps/vtfilter- 
</span><br>
<span class="quotelev1">&gt; vt_filthandler.Tpo -c -o vtfilter-vt_filthandler.o `test -f  
</span><br>
<span class="quotelev1">&gt; 'vt_filthandler.cc' || echo '../../../../../../../ompi-trunk/ompi/ 
</span><br>
<span class="quotelev1">&gt; contrib/vt/vt/tools/vtfilter/'`vt_filthandler.cc
</span><br>
<span class="quotelev1">&gt; | cc1plus: error: unrecognized command line option &quot;-fopenmp&quot;
</span><br>
<span class="quotelev1">&gt; | cc1plus: error: unrecognized command line option &quot;-fopenmp&quot;
</span><br>
<span class="quotelev1">&gt; | make[6]: *** [vtfilter-vt_filter.o] Fehler 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is because GCC 4.1.3 doesn't know about -fopenmp.  The  
</span><br>
<span class="quotelev1">&gt; AX_OPENMP is
</span><br>
<span class="quotelev1">&gt; called in ACVT_OMP (in ompi/contrib/vt/vt/acinclude.m4) only for the C
</span><br>
<span class="quotelev1">&gt; compiler, not the C++ one.  Note that the AX_OPENMP is suited to be
</span><br>
<span class="quotelev1">&gt; called for multiple languages (e.g., wrapped in AC_LANG_PUSH(...) ...
</span><br>
<span class="quotelev1">&gt; AC_LANG_POP(...)).  However, OpenMPI may decide to not allow for
</span><br>
<span class="quotelev1">&gt; different compiler settings here, or at least require that all  
</span><br>
<span class="quotelev1">&gt; compilers
</span><br>
<span class="quotelev1">&gt; used do OpenMP.  As I don't know what's desirable, no proposed patch
</span><br>
<span class="quotelev1">&gt; here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fix unportable test statements in configure fragments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: opal/mca/memory/ptmalloc2/configure.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/mca/memory/ptmalloc2/configure.m4	(Revision 19044)
</span><br>
<span class="quotelev1">&gt; +++ opal/mca/memory/ptmalloc2/configure.m4	(Arbeitskopie)
</span><br>
<span class="quotelev1">&gt; @@ -37,7 +37,7 @@
</span><br>
<span class="quotelev1">&gt;     AM_CONDITIONAL([OMPI_WANT_EXTERNAL_PTMALLOC2],
</span><br>
<span class="quotelev1">&gt;        [test &quot;$enable_ptmalloc2_internal&quot; != &quot;yes&quot;])
</span><br>
<span class="quotelev1">&gt;     AC_MSG_CHECKING([if ptmalloc2 should be part of libopen-pal])
</span><br>
<span class="quotelev1">&gt; -    AS_IF([test &quot;$enable_ptmalloc2_internal&quot; == &quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt; +    AS_IF([test &quot;$enable_ptmalloc2_internal&quot; = &quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt;           [AC_MSG_RESULT([yes])], [AC_MSG_RESULT([no])])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ompi/contrib/vt/vt/extlib/otf/acinclude.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/contrib/vt/vt/extlib/otf/acinclude.m4	(Revision 19044)
</span><br>
<span class="quotelev1">&gt; +++ ompi/contrib/vt/vt/extlib/otf/acinclude.m4	(Arbeitskopie)
</span><br>
<span class="quotelev1">&gt; @@ -306,7 +306,7 @@
</span><br>
<span class="quotelev1">&gt; 			py_version=`$PYTHON -c &quot;from distutils.sysconfig import *; \
</span><br>
<span class="quotelev1">&gt; 				from string import join; \
</span><br>
<span class="quotelev1">&gt; 				print join(get_config_vars('VERSION'))&quot; 2&gt; /dev/null`
</span><br>
<span class="quotelev1">&gt; -			if test &quot;$py_version&quot; == &quot;[None]&quot; -o -z &quot;$py_version&quot;; then
</span><br>
<span class="quotelev1">&gt; +			if test &quot;$py_version&quot; = &quot;[None]&quot; -o -z &quot;$py_version&quot;; then
</span><br>
<span class="quotelev1">&gt; 				if test -n &quot;$PYTHON_VERSION&quot;; then
</span><br>
<span class="quotelev1">&gt; 					py_version=$PYTHON_VERSION
</span><br>
<span class="quotelev1">&gt; 				else
</span><br>
<span class="quotelev1">&gt; @@ -320,7 +320,7 @@
</span><br>
<span class="quotelev1">&gt; 				print '-L' + get_python_lib(0,1), \
</span><br>
<span class="quotelev1">&gt; 					'-lpython';&quot; 2&gt; /dev/null`$py_version
</span><br>
<span class="quotelev1">&gt; 		fi
</span><br>
<span class="quotelev1">&gt; -		if test ! &quot;$PYTHON_LDFLAGS&quot; == &quot;$py_version&quot;; then
</span><br>
<span class="quotelev1">&gt; +		if test ! &quot;$PYTHON_LDFLAGS&quot; = &quot;$py_version&quot;; then
</span><br>
<span class="quotelev1">&gt; 			AC_MSG_RESULT([$PYTHON_LDFLAGS])
</span><br>
<span class="quotelev1">&gt; 		else
</span><br>
<span class="quotelev1">&gt; 			AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt; Index: ompi/contrib/vt/vt/acinclude.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/contrib/vt/vt/acinclude.m4	(Revision 19044)
</span><br>
<span class="quotelev1">&gt; +++ ompi/contrib/vt/vt/acinclude.m4	(Arbeitskopie)
</span><br>
<span class="quotelev1">&gt; @@ -312,7 +312,7 @@
</span><br>
<span class="quotelev1">&gt; 	while :
</span><br>
<span class="quotelev1">&gt; 	do
</span><br>
<span class="quotelev1">&gt; 		$2=`eval echo $var`
</span><br>
<span class="quotelev1">&gt; -		AS_IF([test $$2 == $var], [break], [var=$$2])
</span><br>
<span class="quotelev1">&gt; +		AS_IF([test $$2 = $var], [break], [var=$$2])
</span><br>
<span class="quotelev1">&gt; 	done
</span><br>
<span class="quotelev1">&gt; ])
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4440.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="4438.php">Ralf Wildenhues: "[OMPI devel] some configury nits"</a>
<li><strong>In reply to:</strong> <a href="4438.php">Ralf Wildenhues: "[OMPI devel] some configury nits"</a>
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
