<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 30 11:51:42 2006" -->
<!-- isoreceived="20060530155142" -->
<!-- sent="Tue, 30 May 2006 17:51:34 +0200" -->
<!-- isosent="20060530155134" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="[OMPI devel] some configury update" -->
<!-- id="20060530155134.GA15479_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-30 11:51:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0903.php">Brian W. Barrett: "Re: [OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
<li><strong>Previous message:</strong> <a href="0901.php">Jeff Squyres \(jsquyres\): "[OMPI devel] FW: [all-osl-users] Fwd: Electrical Outage Saturday, June 3, all day"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0904.php">Brian Barrett: "Re: [OMPI devel] some configury update"</a>
<li><strong>Reply:</strong> <a href="0904.php">Brian Barrett: "Re: [OMPI devel] some configury update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The following patches fix two rather nasty issues with configury, and
<br>
one missing bit of GCS update.  All changes should be backwards
<br>
compatible (in the sense that they will work with older Autoconf
<br>
versions), the first two are necessary for correct functioning with
<br>
Autoconf-2.59 already, but the first will really bite you when you
<br>
eventually use 2.60, as it will cause a configure script with syntax
<br>
errors.  The third is to support the directory names change mandated by
<br>
a GNU Coding Standards change (this change was actually found by a
<br>
warning measure Autoconf applies to configure scripts during the move).
<br>
<p>The patches are against the trunk, but I guess similar ones apply to
<br>
whatever OpenMPI branch runs danger of being bootstrapped with 2.60
<br>
eventually.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* config/ompi_config_asm.m4 (OMPI_CHECK_POWERPC_REG): Fix M4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quoting.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* ompi/mca/io/romio/romio/configure.in: Fix some more M4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quoting.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* config/ompi_config_subdir.m4 (OMPI_CONFIG_SUBDIR):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More consistent quoting, a la CVS Autoconf.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* config/ompi_config_subdir_args.m4 (OMPI_CONFIG_SUBDIR_ARGS):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The (undocumented!) Autoconf variable $ac_configure_args needs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to be evaluated, to account for the quoting done.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* ompi/mca/io/romio/romio/util/romioinstall.in: Set datarootdir,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;necessary for Autoconf-2.60 which will define some variables
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;based upon this value (e.g., datadir, docdir).
<br>
<p>Index: config/ompi_config_asm.m4
<br>
===================================================================
<br>
--- config/ompi_config_asm.m4	(revision 10115)
<br>
+++ config/ompi_config_asm.m4	(working copy)
<br>
@@ -424,10 +424,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_TRY_ASSEMBLE([$ompi_cv_asm_text
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;addi 1,1,0],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ompi_cv_asm_powerpc_r_reg=0],
<br>
-        OMPI_TRY_ASSEMBLE([$ompi_cv_asm_text
<br>
+        [OMPI_TRY_ASSEMBLE([$ompi_cv_asm_text
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;addi r1,r1,0],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ompi_cv_asm_powerpc_r_reg=1],
<br>
-            AC_MSG_ERROR([Can not determine how to use PPC registers])))
<br>
+            [AC_MSG_ERROR([Can not determine how to use PPC registers])])])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$ompi_cv_asm_powerpc_r_reg&quot; = &quot;1&quot; ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_RESULT([yes])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
Index: config/ompi_config_subdir.m4
<br>
===================================================================
<br>
--- config/ompi_config_subdir.m4	(revision 10115)
<br>
+++ config/ompi_config_subdir.m4	(working copy)
<br>
@@ -131,8 +131,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export LDFLAGS LIBS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sub_configure=&quot;$SHELL '$subdir_srcdir/configure'&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_NOTICE([running $sub_configure $subdir_args --cache-file=$subdir_cache_file --srcdir=$subdir_srcdir])
<br>
-    eval $sub_configure $subdir_args \
<br>
-	--cache-file=$subdir_cache_file --srcdir=$subdir_srcdir
<br>
+    eval &quot;$sub_configure $subdir_args \
<br>
+	--cache-file=\&quot;\$subdir_cache_file\&quot; --srcdir=\&quot;$subdir_srcdir\&quot;&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$?&quot; = &quot;0&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;eval $subdir_success
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_NOTICE([$sub_configure succeeded for $subdir_dir])
<br>
Index: config/ompi_config_subdir_args.m4
<br>
===================================================================
<br>
--- config/ompi_config_subdir_args.m4	(revision 10115)
<br>
+++ config/ompi_config_subdir_args.m4	(working copy)
<br>
@@ -33,7 +33,10 @@
<br>
&nbsp;subdirs_args=
<br>
&nbsp;subdirs_skip=no
<br>
&nbsp;
<br>
-for subdirs_arg in $ac_configure_args; do
<br>
+eval &quot;set x $ac_configure_args&quot;
<br>
+shift
<br>
+for subdirs_arg
<br>
+do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$subdirs_skip&quot; = &quot;yes&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subdirs_skip=no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
@@ -51,7 +54,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-srcdir=* | --srcdir=*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*) 
<br>
-	    subdirs_args=&quot;$subdirs_args $subdirs_arg&quot; 
<br>
+	    case $subdir_arg in
<br>
+	    *\'*) subdir_arg=`echo &quot;$subdir_arg | sed &quot;s/'/'\\\\\\\\''/g&quot;` ;;
<br>
+	    esac
<br>
+	    subdirs_args=&quot;$subdirs_args '$subdirs_arg'&quot; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
@@ -61,8 +67,8 @@
<br>
&nbsp;# Assign the output
<br>
&nbsp;#
<br>
&nbsp;
<br>
-subdirs_str=&quot;$1=&quot;'&quot;'&quot;$subdirs_args&quot;'&quot;'
<br>
-eval $subdirs_str
<br>
+subdirs_str=$1=\&quot;$subdirs_args\&quot;
<br>
+eval &quot;$subdirs_str&quot;
<br>
&nbsp;
<br>
&nbsp;#
<br>
&nbsp;# Clean up
<br>
Index: ompi/mca/io/romio/romio/configure.in
<br>
===================================================================
<br>
--- ompi/mca/io/romio/romio/configure.in	(revision 10118)
<br>
+++ ompi/mca/io/romio/romio/configure.in	(working copy)
<br>
@@ -1475,7 +1475,7 @@
<br>
&nbsp;#
<br>
&nbsp;AC_CHECK_HEADERS(sys/stat.h sys/types.h unistd.h)
<br>
&nbsp;AC_CHECK_FUNCS(stat,
<br>
-    AC_DEFINE(HAVE_STAT, 1, Define if stat function is present)
<br>
+    [AC_DEFINE(HAVE_STAT, 1, Define if stat function is present)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING([for st_fstype member of stat structure])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_TRY_COMPILE([
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#ifdef HAVE_SYS_TYPES_H
<br>
@@ -1496,14 +1496,14 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_DEFINE(ROMIO_HAVE_STRUCT_STAT_WITH_ST_FSTYPE, 1, Define if struct stat has a st_fstype member),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_RESULT(no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
<br>
-)
<br>
+])
<br>
&nbsp;
<br>
&nbsp;#
<br>
&nbsp;# Check for statvfs and f_basetype field (Solaris, Irix, AIX, etc.)
<br>
&nbsp;#
<br>
&nbsp;AC_CHECK_HEADERS(sys/types.h sys/statvfs.h sys/vfs.h)
<br>
&nbsp;AC_CHECK_FUNCS(statvfs,
<br>
-    AC_DEFINE(HAVE_STATVFS, 1, Define if statvfs function is present)
<br>
+    [AC_DEFINE(HAVE_STATVFS, 1, Define if statvfs function is present)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING([for f_basetype member of statvfs structure])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_TRY_COMPILE([
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#ifdef HAVE_SYS_TYPES_H
<br>
@@ -1524,7 +1524,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_DEFINE(ROMIO_HAVE_STRUCT_STATVFS_WITH_F_BASETYPE, 1, defined if struct statvfs has a f_basetype member),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_RESULT(no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
<br>
-)
<br>
+])
<br>
&nbsp;
<br>
&nbsp;#
<br>
&nbsp;# Check for large file support.  Make sure that we can use the off64_t 
<br>
Index: ompi/mca/io/romio/romio/util/romioinstall.in
<br>
===================================================================
<br>
--- ompi/mca/io/romio/romio/util/romioinstall.in	(revision 10118)
<br>
+++ ompi/mca/io/romio/romio/util/romioinstall.in	(working copy)
<br>
@@ -28,6 +28,7 @@
<br>
&nbsp;#sysconfdir=@sysconfdir@
<br>
&nbsp;libdir=@libdir@
<br>
&nbsp;#sharedlib_dir=@sharedlib_dir@
<br>
+datarootdir=@datarootdir@
<br>
&nbsp;mandir=@mandir@
<br>
&nbsp;htmldir=@htmldir@
<br>
&nbsp;#datadir=@datadir@
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0903.php">Brian W. Barrett: "Re: [OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
<li><strong>Previous message:</strong> <a href="0901.php">Jeff Squyres \(jsquyres\): "[OMPI devel] FW: [all-osl-users] Fwd: Electrical Outage Saturday, June 3, all day"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0904.php">Brian Barrett: "Re: [OMPI devel] some configury update"</a>
<li><strong>Reply:</strong> <a href="0904.php">Brian Barrett: "Re: [OMPI devel] some configury update"</a>
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
