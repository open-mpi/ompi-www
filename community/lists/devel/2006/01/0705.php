<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jan 21 11:09:55 2006" -->
<!-- isoreceived="20060121160955" -->
<!-- sent="Sat, 21 Jan 2006 17:09:48 +0100" -->
<!-- isosent="20060121160948" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  ompi_get_version" -->
<!-- id="20060121160947.GD7181_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2F79CC62-0516-4612-B99D-D12F467A6163_at_open-mpi.org" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-21 11:09:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0706.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
<li><strong>Previous message:</strong> <a href="0704.php">Jeff Squyres: "Re:  ompi_get_version"</a>
<li><strong>In reply to:</strong> <a href="0704.php">Jeff Squyres: "Re:  ompi_get_version"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>* Jeff Squyres wrote on Sat, Jan 21, 2006 at 12:39:26PM CET:
<br>
<span class="quotelev1">&gt; On Jan 21, 2006, at 3:19 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Should be fixed in patch below.  Also, and I forgot to add this in the
</span><br>
<span class="quotelev2">&gt; &gt; first version of the patch: for configure, produce some output if the
</span><br>
<span class="quotelev2">&gt; &gt; SVN server is contacted.  I kept wondering why the configure script
</span><br>
<span class="quotelev2">&gt; &gt; halted for a while there in what was a seemingly trivial local  
</span><br>
<span class="quotelev2">&gt; &gt; operation until I discovered what took so long there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just FYI: the SVN server is not contacted.  svnversion is a local  
</span><br>
<span class="quotelev1">&gt; operation (although it traverses your entire SVN checkout, which is  
</span><br>
<span class="quotelev1">&gt; why it can be slow).
</span><br>
<p>Oh.  OK.  I didn't know that.  It felt so slow I figured it just had to
<br>
be nonlocal.
<br>
<p><span class="quotelev2">&gt; &gt; +    if test &quot;$gv_want_svn&quot; = 1 &amp;&amp; test &quot;$gv_need_svn&quot; = 1; then
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just curious -- I typically use &quot;-a&quot; for multiple ANDed test  
</span><br>
<span class="quotelev1">&gt; conditions, but you used &quot;&amp;&amp;&quot;.  Is &quot;-a&quot; less portable?
</span><br>
<p>Yes, some old `test's have weird precedence; quoting autoconf.info:
<br>
|
<br>
| If you need to make multiple checks using `test', combine them with
<br>
| the shell operators `&amp;&amp;' and `||' instead of using the `test'
<br>
| operators `-a' and `-o'.  On System V, the precedence of `-a' and
<br>
| `-o' is wrong relative to the unary operators; consequently, Posix
<br>
| does not specify them, so using them is nonportable.  If you
<br>
| combine `&amp;&amp;' and `||' in the same statement, keep in mind that
<br>
| they have equal precedence.
<br>
<p>Not that I believe anyone would use those systems for parallel
<br>
computing..
<br>
<p>But while we're at it, usually I also /do/ compare numbers with `-eq'
<br>
rather than `='.  I did not change all of those in this case because
<br>
I was unsure whether some version components should be allowed to be
<br>
non-numbers (or empty).
<br>
<p><span class="quotelev2">&gt; &gt; +	    m4_ifdef([AC_MSG_CHECKING],
</span><br>
<span class="quotelev2">&gt; &gt; +		     [AC_MSG_CHECKING([Obtaining SVN version])])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Totally minor point here, but will this print:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; checking Obtaining SVN version...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If so, we should probably remove the redundant verb.  :-)
</span><br>
<p>Definitely.  What a hard time I'm having getting this patch right. :-/
<br>
<p>Next try below -- thanks for the reviews!
<br>
Cheers,
<br>
Ralf
<br>
<p>Index: config/ompi_get_version.m4
<br>
===================================================================
<br>
--- config/ompi_get_version.m4	(Revision 8776)
<br>
+++ config/ompi_get_version.m4	(Arbeitskopie)
<br>
@@ -18,33 +18,33 @@
<br>
&nbsp;dnl
<br>
&nbsp;
<br>
&nbsp;dnl
<br>
-dnl This file is almost identical in functionality to
<br>
-dnl ompi_get_version.sh.  It is unfortunate that we have to duplicate code,
<br>
-dnl but it is really the only what that I can think to do it.  :-( Hence,
<br>
-dnl if you change the logic here for determining version numbers, YOU MUST
<br>
-dnl ALSO CHANGE IT IN ompi_get_version.sh!!
<br>
-dnl 
<br>
+dnl This file is also used as input to ompi_get_version.sh.
<br>
+dnl
<br>
&nbsp;
<br>
-AC_DEFUN([OMPI_GET_VERSION],[
<br>
+m4_define([OMPI_GET_VERSION],[
<br>
&nbsp;gv_ver_file=&quot;$1&quot;
<br>
&nbsp;gv_prefix=&quot;$2&quot;
<br>
+: ${gv_need_svn=0}
<br>
+: ${srcdir=.}
<br>
&nbsp;
<br>
&nbsp;dnl quote eval to suppress macro expansion with non-GNU m4
<br>
&nbsp;
<br>
-gv_run() {
<br>
-    str=&quot;${gv_prefix}_${2}=\$gv_${1}&quot;
<br>
-   [eval] $str
<br>
-}
<br>
-
<br>
-if test -n &quot;$gv_ver_file&quot; -a -f &quot;$gv_ver_file&quot;; then
<br>
-    gv_major_version=&quot;`egrep '^major=' $gv_ver_file | cut -d= -f2`&quot;
<br>
-    gv_minor_version=&quot;`egrep '^minor=' $gv_ver_file | cut -d= -f2`&quot;
<br>
-    gv_release_version=&quot;`egrep '^release=' $gv_ver_file | cut -d= -f2`&quot;
<br>
-    gv_greek_version=&quot;`egrep '^greek=' $gv_ver_file | cut -d= -f2`&quot;
<br>
-    gv_want_svn=&quot;`egrep '^want_svn=' $gv_ver_file | cut -d= -f2`&quot;
<br>
-    gv_svn_r=&quot;`egrep '^svn_r=' $gv_ver_file | cut -d= -f2`&quot;
<br>
-
<br>
-    if test -n &quot;$gv_release_version&quot; -a &quot;$gv_release_version&quot; != &quot;0&quot;; then
<br>
+if test -n &quot;$gv_ver_file&quot; &amp;&amp; test -f &quot;$gv_ver_file&quot;; then
<br>
+    [eval] &quot;`sed -n \&quot;\
<br>
+	t clear
<br>
+	: clear
<br>
+	s/^major/gv_&amp;_version/
<br>
+	s/^minor/gv_&amp;_version/
<br>
+	s/^release/gv_&amp;_version/
<br>
+	s/^greek/gv_&amp;_version/
<br>
+	s/^want_svn/gv_&amp;/
<br>
+	s/^svn_r/gv_&amp;/
<br>
+	t print
<br>
+	b
<br>
+	: print
<br>
+	p\&quot; &lt; \&quot;\$gv_ver_file\&quot;`&quot;
<br>
+	
<br>
+    if test -n &quot;$gv_release_version&quot; &amp;&amp; test &quot;$gv_release_version&quot; != 0; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gv_full_version=&quot;$gv_major_version.$gv_minor_version.$gv_release_version&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gv_full_version=&quot;$gv_major_version.$gv_minor_version&quot;
<br>
@@ -52,31 +52,37 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gv_full_version=&quot;${gv_full_version}${gv_greek_version}&quot;
<br>
&nbsp;
<br>
-    if test &quot;$gv_want_svn&quot; = &quot;1&quot;; then
<br>
-        if test &quot;$gv_svn_r&quot; = &quot;-1&quot;; then
<br>
+    gv_base_version=$gv_full_version
<br>
+
<br>
+    if test &quot;$gv_want_svn&quot; = 1 &amp;&amp; test &quot;$gv_need_svn&quot; = 1; then
<br>
+        if test &quot;$gv_svn_r&quot; = -1; then
<br>
+	    m4_ifdef([AC_MSG_CHECKING],
<br>
+		     [AC_MSG_CHECKING([SVN version])])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test -d &quot;$srcdir/.svn&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ver=r`svnversion &quot;$srcdir&quot;`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# make sure svnversion worked
<br>
-                if test &quot;$?&quot; != &quot;0&quot; ; then
<br>
+                if test &quot;$?&quot; -ne 0 ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ver=svn`date '+%m%d%Y'` 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ver=svn`date '+%m%d%Y'`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gv_svn_r=&quot;$ver&quot;
<br>
+	    m4_ifdef([AC_MSG_RESULT],
<br>
+		     [AC_MSG_RESULT([done])])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gv_full_version=&quot;${gv_full_version}$gv_svn_r&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Set the values
<br>
-
<br>
-    gv_run full_version    VERSION
<br>
-    gv_run major_version   MAJOR_VERSION
<br>
-    gv_run minor_version   MINOR_VERSION
<br>
-    gv_run release_version RELEASE_VERSION
<br>
-    gv_run greek_version   GREEK_VERSION
<br>
-    gv_run want_svn        WANT_SVN
<br>
-    gv_run svn_r           SVN_R
<br>
+    [eval] &quot;${gv_prefix}_VERSION=\$gv_full_version
<br>
+	    ${gv_prefix}_BASE_VERSION=\$gv_base_version
<br>
+            ${gv_prefix}_MAJOR_VERSION=\$gv_major_version
<br>
+            ${gv_prefix}_MINOR_VERSION=\$gv_minor_version
<br>
+            ${gv_prefix}_RELEASE_VERSION=\$gv_release_version
<br>
+            ${gv_prefix}_GREEK_VERSION=\$gv_greek_version
<br>
+            ${gv_prefix}_WANT_SVN=\$gv_want_svn
<br>
+            ${gv_prefix}_SVN_R=\$gv_svn_r&quot;
<br>
&nbsp;fi
<br>
&nbsp;
<br>
&nbsp;# Clean up
<br>
Index: config/Makefile.am
<br>
===================================================================
<br>
--- config/Makefile.am	(Revision 8776)
<br>
+++ config/Makefile.am	(Arbeitskopie)
<br>
@@ -49,6 +49,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_configure_options.m4 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_functions.m4 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_get_version.m4 \
<br>
+        ompi_get_version.m4sh \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_get_version.sh \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_make_stripped_flags.m4 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_mca.m4 \
<br>
Index: autogen.sh
<br>
===================================================================
<br>
--- autogen.sh	(Revision 8776)
<br>
+++ autogen.sh	(Arbeitskopie)
<br>
@@ -40,6 +40,10 @@
<br>
&nbsp;if test ! -z &quot;$AUTOCONF&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_autoconf_search=&quot;$AUTOCONF&quot;
<br>
&nbsp;fi
<br>
+ompi_autom4te_search=&quot;autom4te&quot;
<br>
+if test ! -z &quot;$AUTOM4TE&quot;; then
<br>
+    ompi_autom4te_search=&quot;$AUTOM4TE&quot;
<br>
+fi
<br>
&nbsp;ompi_libtoolize_search=&quot;libtoolize;glibtoolize&quot;
<br>
&nbsp;if test ! -z &quot;$LIBTOOLIZE&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_libtoolize_search=&quot;$LIBTOOLIZE&quot;
<br>
@@ -375,6 +379,12 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;*** Running GNU tools&quot;
<br>
&nbsp;
<br>
+    if test -f include/mpi.h.in; then
<br>
+	cd config
<br>
+	run_and_check $ompi_autom4te --language=m4sh ompi_get_version.m4sh -o ompi_get_version.sh
<br>
+	cd ..
<br>
+    fi
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;run_and_check $ompi_aclocal
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;`grep AC_CONFIG_HEADER $file`&quot; != &quot;&quot; -o \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;`grep AM_CONFIG_HEADER $file`&quot; != &quot;&quot;; then
<br>
@@ -1088,6 +1098,7 @@
<br>
&nbsp;fi
<br>
&nbsp;
<br>
&nbsp;# find all the apps we are going to run
<br>
+find_app &quot;autom4te&quot;
<br>
&nbsp;find_app &quot;aclocal&quot;
<br>
&nbsp;find_app &quot;autoheader&quot;
<br>
&nbsp;find_app &quot;autoconf&quot;
<br>
--- /dev/null	2005-03-20 10:56:34.000000000 +0100
<br>
+++ config/ompi_get_version.m4sh	2006-01-21 08:57:03.000000000 +0100
<br>
@@ -0,0 +1,98 @@
<br>
+m4_define([_m4_divert(SCRIPT)], 100)
<br>
+m4_divert_push([SCRIPT])dnl
<br>
+#!/bin/sh
<br>
+#
<br>
+# ompi_get_version is created from ompi_get_version.m4 and ompi_get_version.m4sh.
<br>
+#
<br>
+# Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
<br>
+#                         University Research and Technology
<br>
+#                         Corporation.  All rights reserved.
<br>
+# Copyright (c) 2004-2005 The University of Tennessee and The University
<br>
+#                         of Tennessee Research Foundation.  All rights
<br>
+#                         reserved.
<br>
+# Copyright (c) 2004-2005 High Performance Computing Center Stuttgart, 
<br>
+#                         University of Stuttgart.  All rights reserved.
<br>
+# Copyright (c) 2004-2005 The Regents of the University of California.
<br>
+#                         All rights reserved.
<br>
+# $COPYRIGHT$
<br>
+# 
<br>
+# Additional copyrights may follow
<br>
+# 
<br>
+# $HEADER$
<br>
+#
<br>
+
<br>
+m4_include([ompi_get_version.m4])
<br>
+
<br>
+srcfile=&quot;$1&quot;
<br>
+option=&quot;$2&quot;
<br>
+
<br>
+case &quot;$option&quot; in
<br>
+    # svnversion can take a while to run.  If we don't need it, don't run it.
<br>
+    --major|--minor|--release|--greek|--base|--help)
<br>
+        gv_need_svn=0
<br>
+        ;;
<br>
+    *)
<br>
+        gv_need_svn=1
<br>
+esac
<br>
+
<br>
+
<br>
+if test -z &quot;$srcfile&quot;; then
<br>
+    option=&quot;--help&quot;
<br>
+else
<br>
+    OMPI_GET_VERSION([$srcfile],[OMPI])
<br>
+
<br>
+    if test &quot;$option&quot; = &quot;&quot;; then
<br>
+	option=&quot;--full&quot;
<br>
+    fi
<br>
+fi
<br>
+
<br>
+case &quot;$option&quot; in
<br>
+    --full|-v|--version)
<br>
+	echo $OMPI_VERSION
<br>
+	;;
<br>
+    --major)
<br>
+	echo $OMPI_MAJOR_VERSION
<br>
+	;;
<br>
+    --minor)
<br>
+	echo $OMPI_MINOR_VERSION
<br>
+	;;
<br>
+    --release)
<br>
+	echo $OMPI_RELEASE_VERSION
<br>
+	;;
<br>
+    --greek)
<br>
+	echo $OMPI_GREEK_VERSION
<br>
+	;;
<br>
+    --svn)
<br>
+	echo $OMPI_SVN_R
<br>
+	;;
<br>
+    --base)
<br>
+        echo $OMPI_BASE_VERSION
<br>
+        ;;
<br>
+    --all)
<br>
+        echo ${OMPI_VERSION} ${OMPI_MAJOR_VERSION} ${OMPI_MINOR_VERSION} ${OMPI_RELEASE_VERSION} ${OMPI_GREEK_VERSION} ${OMPI_SVN_R}
<br>
+        ;;
<br>
+    -h|--help)
<br>
+	cat &lt;&lt;EOF
<br>
+$0 &lt;srcfile&gt; [&lt;option&gt;]
<br>
+
<br>
+&lt;srcfile&gt; - Text version file
<br>
+&lt;option&gt;  - One of:
<br>
+    --full    - Full version number
<br>
+    --major   - Major version number
<br>
+    --minor   - Minor version number
<br>
+    --release - Release version number
<br>
+    --greek   - Greek (alpha, beta, etc) version number
<br>
+    --svn     - Subversion repository number
<br>
+    --all     - Show all version numbers, separated by :
<br>
+    --base    - Show base version number (no svn number)
<br>
+    --help    - This message
<br>
+EOF
<br>
+        ;;
<br>
+    *)
<br>
+        echo &quot;Unrecognized option $option.  Run $0 --help for options&quot;
<br>
+        ;;
<br>
+esac
<br>
+
<br>
+# All done
<br>
+
<br>
+exit 0
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0706.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
<li><strong>Previous message:</strong> <a href="0704.php">Jeff Squyres: "Re:  ompi_get_version"</a>
<li><strong>In reply to:</strong> <a href="0704.php">Jeff Squyres: "Re:  ompi_get_version"</a>
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
