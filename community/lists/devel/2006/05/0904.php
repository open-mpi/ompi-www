<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 30 23:45:21 2006" -->
<!-- isoreceived="20060531034521" -->
<!-- sent="Tue, 30 May 2006 21:44:49 -0600" -->
<!-- isosent="20060531034449" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] some configury update" -->
<!-- id="FAC9FB1D-5CF9-44E9-B377-2FA2228234F5_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060530155134.GA15479_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-30 23:44:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0905.php">Pak Lui: "[OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Previous message:</strong> <a href="0903.php">Brian W. Barrett: "Re: [OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
<li><strong>In reply to:</strong> <a href="0902.php">Ralf Wildenhues: "[OMPI devel] some configury update"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As always, Thanks!  Committed and hopefully moving to 1.1, as I'd  
<br>
like to eventually bootstap that branch with 2.60.
<br>
<p>Brian
<br>
<p>On May 30, 2006, at 9:51 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; The following patches fix two rather nasty issues with configury, and
</span><br>
<span class="quotelev1">&gt; one missing bit of GCS update.  All changes should be backwards
</span><br>
<span class="quotelev1">&gt; compatible (in the sense that they will work with older Autoconf
</span><br>
<span class="quotelev1">&gt; versions), the first two are necessary for correct functioning with
</span><br>
<span class="quotelev1">&gt; Autoconf-2.59 already, but the first will really bite you when you
</span><br>
<span class="quotelev1">&gt; eventually use 2.60, as it will cause a configure script with syntax
</span><br>
<span class="quotelev1">&gt; errors.  The third is to support the directory names change  
</span><br>
<span class="quotelev1">&gt; mandated by
</span><br>
<span class="quotelev1">&gt; a GNU Coding Standards change (this change was actually found by a
</span><br>
<span class="quotelev1">&gt; warning measure Autoconf applies to configure scripts during the  
</span><br>
<span class="quotelev1">&gt; move).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The patches are against the trunk, but I guess similar ones apply to
</span><br>
<span class="quotelev1">&gt; whatever OpenMPI branch runs danger of being bootstrapped with 2.60
</span><br>
<span class="quotelev1">&gt; eventually.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	* config/ompi_config_asm.m4 (OMPI_CHECK_POWERPC_REG): Fix M4
</span><br>
<span class="quotelev1">&gt; 	quoting.
</span><br>
<span class="quotelev1">&gt; 	* ompi/mca/io/romio/romio/configure.in: Fix some more M4
</span><br>
<span class="quotelev1">&gt; 	quoting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	* config/ompi_config_subdir.m4 (OMPI_CONFIG_SUBDIR):
</span><br>
<span class="quotelev1">&gt; 	More consistent quoting, a la CVS Autoconf.
</span><br>
<span class="quotelev1">&gt; 	* config/ompi_config_subdir_args.m4 (OMPI_CONFIG_SUBDIR_ARGS):
</span><br>
<span class="quotelev1">&gt; 	The (undocumented!) Autoconf variable $ac_configure_args needs
</span><br>
<span class="quotelev1">&gt; 	to be evaluated, to account for the quoting done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	* ompi/mca/io/romio/romio/util/romioinstall.in: Set datarootdir,
</span><br>
<span class="quotelev1">&gt; 	necessary for Autoconf-2.60 which will define some variables
</span><br>
<span class="quotelev1">&gt; 	based upon this value (e.g., datadir, docdir).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: config/ompi_config_asm.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- config/ompi_config_asm.m4	(revision 10115)
</span><br>
<span class="quotelev1">&gt; +++ config/ompi_config_asm.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -424,10 +424,10 @@
</span><br>
<span class="quotelev1">&gt;      OMPI_TRY_ASSEMBLE([$ompi_cv_asm_text
</span><br>
<span class="quotelev1">&gt;          addi 1,1,0],
</span><br>
<span class="quotelev1">&gt;          [ompi_cv_asm_powerpc_r_reg=0],
</span><br>
<span class="quotelev1">&gt; -        OMPI_TRY_ASSEMBLE([$ompi_cv_asm_text
</span><br>
<span class="quotelev1">&gt; +        [OMPI_TRY_ASSEMBLE([$ompi_cv_asm_text
</span><br>
<span class="quotelev1">&gt;          addi r1,r1,0],
</span><br>
<span class="quotelev1">&gt;              [ompi_cv_asm_powerpc_r_reg=1],
</span><br>
<span class="quotelev1">&gt; -            AC_MSG_ERROR([Can not determine how to use PPC  
</span><br>
<span class="quotelev1">&gt; registers])))
</span><br>
<span class="quotelev1">&gt; +            [AC_MSG_ERROR([Can not determine how to use PPC  
</span><br>
<span class="quotelev1">&gt; registers])])])
</span><br>
<span class="quotelev1">&gt;      if test &quot;$ompi_cv_asm_powerpc_r_reg&quot; = &quot;1&quot; ; then
</span><br>
<span class="quotelev1">&gt;          AC_MSG_RESULT([yes])
</span><br>
<span class="quotelev1">&gt;      else
</span><br>
<span class="quotelev1">&gt; Index: config/ompi_config_subdir.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- config/ompi_config_subdir.m4	(revision 10115)
</span><br>
<span class="quotelev1">&gt; +++ config/ompi_config_subdir.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -131,8 +131,8 @@
</span><br>
<span class="quotelev1">&gt;      export LDFLAGS LIBS
</span><br>
<span class="quotelev1">&gt;      sub_configure=&quot;$SHELL '$subdir_srcdir/configure'&quot;
</span><br>
<span class="quotelev1">&gt;      AC_MSG_NOTICE([running $sub_configure $subdir_args --cache- 
</span><br>
<span class="quotelev1">&gt; file=$subdir_cache_file --srcdir=$subdir_srcdir])
</span><br>
<span class="quotelev1">&gt; -    eval $sub_configure $subdir_args \
</span><br>
<span class="quotelev1">&gt; -	--cache-file=$subdir_cache_file --srcdir=$subdir_srcdir
</span><br>
<span class="quotelev1">&gt; +    eval &quot;$sub_configure $subdir_args \
</span><br>
<span class="quotelev1">&gt; +	--cache-file=\&quot;\$subdir_cache_file\&quot; --srcdir=\&quot;$subdir_srcdir\&quot;&quot;
</span><br>
<span class="quotelev1">&gt;      if test &quot;$?&quot; = &quot;0&quot;; then
</span><br>
<span class="quotelev1">&gt;  	eval $subdir_success
</span><br>
<span class="quotelev1">&gt;  	AC_MSG_NOTICE([$sub_configure succeeded for $subdir_dir])
</span><br>
<span class="quotelev1">&gt; Index: config/ompi_config_subdir_args.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- config/ompi_config_subdir_args.m4	(revision 10115)
</span><br>
<span class="quotelev1">&gt; +++ config/ompi_config_subdir_args.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -33,7 +33,10 @@
</span><br>
<span class="quotelev1">&gt;  subdirs_args=
</span><br>
<span class="quotelev1">&gt;  subdirs_skip=no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -for subdirs_arg in $ac_configure_args; do
</span><br>
<span class="quotelev1">&gt; +eval &quot;set x $ac_configure_args&quot;
</span><br>
<span class="quotelev1">&gt; +shift
</span><br>
<span class="quotelev1">&gt; +for subdirs_arg
</span><br>
<span class="quotelev1">&gt; +do
</span><br>
<span class="quotelev1">&gt;      if test &quot;$subdirs_skip&quot; = &quot;yes&quot;; then
</span><br>
<span class="quotelev1">&gt;  	subdirs_skip=no
</span><br>
<span class="quotelev1">&gt;      else
</span><br>
<span class="quotelev1">&gt; @@ -51,7 +54,10 @@
</span><br>
<span class="quotelev1">&gt;  	-srcdir=* | --srcdir=*)
</span><br>
<span class="quotelev1">&gt;  	    ;;
</span><br>
<span class="quotelev1">&gt;  	*)
</span><br>
<span class="quotelev1">&gt; -	    subdirs_args=&quot;$subdirs_args $subdirs_arg&quot;
</span><br>
<span class="quotelev1">&gt; +	    case $subdir_arg in
</span><br>
<span class="quotelev1">&gt; +	    *\'*) subdir_arg=`echo &quot;$subdir_arg | sed &quot;s/'/'\\\\\\\\''/ 
</span><br>
<span class="quotelev1">&gt; g&quot;` ;;
</span><br>
<span class="quotelev1">&gt; +	    esac
</span><br>
<span class="quotelev1">&gt; +	    subdirs_args=&quot;$subdirs_args '$subdirs_arg'&quot;
</span><br>
<span class="quotelev1">&gt;  	    ;;
</span><br>
<span class="quotelev1">&gt;  	esac
</span><br>
<span class="quotelev1">&gt;      fi
</span><br>
<span class="quotelev1">&gt; @@ -61,8 +67,8 @@
</span><br>
<span class="quotelev1">&gt;  # Assign the output
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -subdirs_str=&quot;$1=&quot;'&quot;'&quot;$subdirs_args&quot;'&quot;'
</span><br>
<span class="quotelev1">&gt; -eval $subdirs_str
</span><br>
<span class="quotelev1">&gt; +subdirs_str=$1=\&quot;$subdirs_args\&quot;
</span><br>
<span class="quotelev1">&gt; +eval &quot;$subdirs_str&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  # Clean up
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/io/romio/romio/configure.in
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/io/romio/romio/configure.in	(revision 10118)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/io/romio/romio/configure.in	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -1475,7 +1475,7 @@
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  AC_CHECK_HEADERS(sys/stat.h sys/types.h unistd.h)
</span><br>
<span class="quotelev1">&gt;  AC_CHECK_FUNCS(stat,
</span><br>
<span class="quotelev1">&gt; -    AC_DEFINE(HAVE_STAT, 1, Define if stat function is present)
</span><br>
<span class="quotelev1">&gt; +    [AC_DEFINE(HAVE_STAT, 1, Define if stat function is present)
</span><br>
<span class="quotelev1">&gt;      AC_MSG_CHECKING([for st_fstype member of stat structure])
</span><br>
<span class="quotelev1">&gt;      AC_TRY_COMPILE([
</span><br>
<span class="quotelev1">&gt;  	#ifdef HAVE_SYS_TYPES_H
</span><br>
<span class="quotelev1">&gt; @@ -1496,14 +1496,14 @@
</span><br>
<span class="quotelev1">&gt;  	AC_DEFINE(ROMIO_HAVE_STRUCT_STAT_WITH_ST_FSTYPE, 1, Define if  
</span><br>
<span class="quotelev1">&gt; struct stat has a st_fstype member),
</span><br>
<span class="quotelev1">&gt;  	AC_MSG_RESULT(no)
</span><br>
<span class="quotelev1">&gt;      )
</span><br>
<span class="quotelev1">&gt; -)
</span><br>
<span class="quotelev1">&gt; +])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  # Check for statvfs and f_basetype field (Solaris, Irix, AIX, etc.)
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  AC_CHECK_HEADERS(sys/types.h sys/statvfs.h sys/vfs.h)
</span><br>
<span class="quotelev1">&gt;  AC_CHECK_FUNCS(statvfs,
</span><br>
<span class="quotelev1">&gt; -    AC_DEFINE(HAVE_STATVFS, 1, Define if statvfs function is present)
</span><br>
<span class="quotelev1">&gt; +    [AC_DEFINE(HAVE_STATVFS, 1, Define if statvfs function is  
</span><br>
<span class="quotelev1">&gt; present)
</span><br>
<span class="quotelev1">&gt;      AC_MSG_CHECKING([for f_basetype member of statvfs structure])
</span><br>
<span class="quotelev1">&gt;      AC_TRY_COMPILE([
</span><br>
<span class="quotelev1">&gt;  	#ifdef HAVE_SYS_TYPES_H
</span><br>
<span class="quotelev1">&gt; @@ -1524,7 +1524,7 @@
</span><br>
<span class="quotelev1">&gt;  	AC_DEFINE(ROMIO_HAVE_STRUCT_STATVFS_WITH_F_BASETYPE, 1, defined  
</span><br>
<span class="quotelev1">&gt; if struct statvfs has a f_basetype member),
</span><br>
<span class="quotelev1">&gt;  	AC_MSG_RESULT(no)
</span><br>
<span class="quotelev1">&gt;      )
</span><br>
<span class="quotelev1">&gt; -)
</span><br>
<span class="quotelev1">&gt; +])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  # Check for large file support.  Make sure that we can use the  
</span><br>
<span class="quotelev1">&gt; off64_t
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/io/romio/romio/util/romioinstall.in
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/io/romio/romio/util/romioinstall.in	(revision 10118)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/io/romio/romio/util/romioinstall.in	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -28,6 +28,7 @@
</span><br>
<span class="quotelev1">&gt;  #sysconfdir=@sysconfdir@
</span><br>
<span class="quotelev1">&gt;  libdir=@libdir@
</span><br>
<span class="quotelev1">&gt;  #sharedlib_dir=@sharedlib_dir@
</span><br>
<span class="quotelev1">&gt; +datarootdir=@datarootdir@
</span><br>
<span class="quotelev1">&gt;  mandir=@mandir@
</span><br>
<span class="quotelev1">&gt;  htmldir=@htmldir@
</span><br>
<span class="quotelev1">&gt;  #datadir=@datadir@
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0905.php">Pak Lui: "[OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Previous message:</strong> <a href="0903.php">Brian W. Barrett: "Re: [OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
<li><strong>In reply to:</strong> <a href="0902.php">Ralf Wildenhues: "[OMPI devel] some configury update"</a>
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
