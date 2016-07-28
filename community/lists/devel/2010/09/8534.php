<?
$subject_val = "Re: [OMPI devel] update configury for Autoconf 2.68";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 09:31:38 2010" -->
<!-- isoreceived="20100923133138" -->
<!-- sent="Thu, 23 Sep 2010 09:31:32 -0400" -->
<!-- isosent="20100923133132" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] update configury for Autoconf 2.68" -->
<!-- id="BEB76CD2-EEC3-4C3F-8662-36653AFA963F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100923051227.GB13922_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] update configury for Autoconf 2.68<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-23 09:31:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8535.php">Barrett, Brian W: "Re: [OMPI devel] RFC: make hwloc first-class data"</a>
<li><strong>Previous message:</strong> <a href="8533.php">Ralf Wildenhues: "[OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>In reply to:</strong> <a href="8533.php">Ralf Wildenhues: "[OMPI devel] update configury for Autoconf 2.68"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8538.php">Ralf Wildenhues: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>Reply:</strong> <a href="8538.php">Ralf Wildenhues: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excellent -- many thanks Ralf!
<br>
<p>One very minor question: I notice you added silent-rules to AM_INIT_AUTOMAKE (and bumped the required version, too), but still left in the call to AM_SILENT_RULES:
<br>
<p>-AM_INIT_AUTOMAKE([foreign dist-bzip2 subdir-objects no-define 1.10 tar-ustar])
<br>
+AM_INIT_AUTOMAKE([foreign dist-bzip2 subdir-objects no-define 1.10c silent-rules tar-ustar])
<br>
<p># If Automake supports silent rules, enable them.
<br>
m4_ifdef([AM_SILENT_RULES], [AM_SILENT_RULES([yes])])
<br>
<p>Is the call to AM_SILENT_RULES now moot because it's listed in AM_INIT_AUTOMAKE?
<br>
<p><p>On Sep 23, 2010, at 1:12 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hello OpenMPI developers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; just-released Autoconf 2.68 contains more stringent checks and warnings
</span><br>
<span class="quotelev1">&gt; about stuff passed to AC_{COMPILE,LINK,RUN}_IFELSE and AC_TRY_* macros.
</span><br>
<span class="quotelev1">&gt; Specifically, it will warn if C or C++ programs are not generated with
</span><br>
<span class="quotelev1">&gt; AC_LANG_SOURCE or AC_LANG_PROGRAM, in order to avoid accidentally
</span><br>
<span class="quotelev1">&gt; omitting needed headers, or mess up arguments in some way.  This has
</span><br>
<span class="quotelev1">&gt; happened a few times to Autoconf users.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These checks make more stringent assumptions on correct m4 quoting of
</span><br>
<span class="quotelev1">&gt; macros; IOW, there are mis-quotings which will cause false warnings to
</span><br>
<span class="quotelev1">&gt; be emitted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In cases where generating sources without AC_LANG_SOURCE or
</span><br>
<span class="quotelev1">&gt; AC_LANG_PROGRAM is done intentionally, the macro
</span><br>
<span class="quotelev1">&gt; AC_LANG_DEFINES_PROVIDED should be expanded inside the source.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The patch below silences all warnings.  I've used
</span><br>
<span class="quotelev1">&gt; AC_LANG_DEFINES_PROVIDED a couple of times in
</span><br>
<span class="quotelev1">&gt; config/ompi_check_vendor.m4, assuming that the tests are really meant
</span><br>
<span class="quotelev1">&gt; to not include any headers.  In a couple of other cases, esp in
</span><br>
<span class="quotelev1">&gt; opal/mca/if/windows/configure.m4 and
</span><br>
<span class="quotelev1">&gt; opal/mca/installdirs/windows/configure.m4, I've added the default
</span><br>
<span class="quotelev1">&gt; include headers, assuming that they should not hurt.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've tested the patch with Autoconf 2.68 as well as Autoconf 2.67 on
</span><br>
<span class="quotelev1">&gt; GNU/Linux, but done no other testing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For complete absence of warnings from Autoconf 2.68 you will also need
</span><br>
<span class="quotelev1">&gt; to update the Libtool macros from upcoming 2.4.0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index: opal/mca/installdirs/windows/configure.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/mca/installdirs/windows/configure.m4	(revision 23790)
</span><br>
<span class="quotelev1">&gt; +++ opal/mca/installdirs/windows/configure.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -27,18 +27,20 @@
</span><br>
<span class="quotelev1">&gt;     # registry. We should first check that the function is defined,
</span><br>
<span class="quotelev1">&gt;     # and then check for it's presence in the kernel32 library.
</span><br>
<span class="quotelev1">&gt;     AC_MSG_CHECKING(for working RegOpenKeyEx)
</span><br>
<span class="quotelev1">&gt; -    AC_TRY_RUN( [#include &lt;windows.h&gt;
</span><br>
<span class="quotelev1">&gt; +    AC_RUN_IFELSE([AC_LANG_PROGRAM([AC_INCLUDES_DEFAULT
</span><br>
<span class="quotelev1">&gt; +#include &lt;windows.h&gt;], [
</span><br>
<span class="quotelev1">&gt; int main( int argc, char** argv ) {
</span><br>
<span class="quotelev1">&gt;     RegOpenKeyEx( HKEY_CURRENT_USER, &quot;Software\\Open MPI&quot;, 0, KEY_READ, NULL);
</span><br>
<span class="quotelev1">&gt; -    return 0; }],
</span><br>
<span class="quotelev1">&gt; +    return 0; }])],
</span><br>
<span class="quotelev1">&gt;         [AC_MSG_RESULT([yes])
</span><br>
<span class="quotelev1">&gt;          $1],
</span><br>
<span class="quotelev1">&gt;         [AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt;          $2],
</span><br>
<span class="quotelev1">&gt; -        [AC_COMPILE_IFELSE([#include &lt;windows.h&gt;
</span><br>
<span class="quotelev1">&gt; +        [AC_COMPILE_IFELSE([AC_LANG_PROGRAM([AC_INCLUDES_DEFAULT
</span><br>
<span class="quotelev1">&gt; +#include &lt;windows.h&gt;], [
</span><br>
<span class="quotelev1">&gt; int main( int argc, char** argv ) {
</span><br>
<span class="quotelev1">&gt;     RegOpenKeyEx( HKEY_CURRENT_USER, &quot;Software\\Open MPI&quot;, 0, KEY_READ, NULL);
</span><br>
<span class="quotelev1">&gt; -    return 0; }],
</span><br>
<span class="quotelev1">&gt; +    return 0; }])],
</span><br>
<span class="quotelev1">&gt;         [AC_MSG_RESULT([yes])
</span><br>
<span class="quotelev1">&gt;          $1],
</span><br>
<span class="quotelev1">&gt;         [AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt; Index: opal/mca/paffinity/hwloc/hwloc/config/hwloc.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/mca/paffinity/hwloc/hwloc/config/hwloc.m4	(revision 23790)
</span><br>
<span class="quotelev1">&gt; +++ opal/mca/paffinity/hwloc/hwloc/config/hwloc.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -430,13 +430,13 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     _HWLOC_CHECK_DECL([sched_setaffinity], [
</span><br>
<span class="quotelev1">&gt;       AC_MSG_CHECKING([for old prototype of sched_setaffinity])
</span><br>
<span class="quotelev1">&gt; -      AC_COMPILE_IFELSE(
</span><br>
<span class="quotelev1">&gt; +      AC_COMPILE_IFELSE([
</span><br>
<span class="quotelev1">&gt;         AC_LANG_PROGRAM([[
</span><br>
<span class="quotelev1">&gt;           #define _GNU_SOURCE
</span><br>
<span class="quotelev1">&gt;           #include &lt;sched.h&gt;
</span><br>
<span class="quotelev1">&gt;           static unsigned long mask;
</span><br>
<span class="quotelev1">&gt;           ]], [[ sched_setaffinity(0, (void*) &amp;mask);
</span><br>
<span class="quotelev1">&gt; -          ]]),
</span><br>
<span class="quotelev1">&gt; +          ]])],
</span><br>
<span class="quotelev1">&gt;         AC_DEFINE([HWLOC_HAVE_OLD_SCHED_SETAFFINITY], [1], [Define to 1 if glibc provides the old prototype of sched_setaffinity()])
</span><br>
<span class="quotelev1">&gt;         AC_MSG_RESULT([yes]),
</span><br>
<span class="quotelev1">&gt;         AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt; @@ -447,19 +447,19 @@
</span><br>
<span class="quotelev1">&gt; ]])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     AC_MSG_CHECKING([for working CPU_SET])
</span><br>
<span class="quotelev1">&gt; -    AC_LINK_IFELSE(
</span><br>
<span class="quotelev1">&gt; +    AC_LINK_IFELSE([
</span><br>
<span class="quotelev1">&gt;       AC_LANG_PROGRAM([[
</span><br>
<span class="quotelev1">&gt;         #include &lt;sched.h&gt;
</span><br>
<span class="quotelev1">&gt;         cpu_set_t set;
</span><br>
<span class="quotelev1">&gt;         ]], [[ CPU_ZERO(&amp;set); CPU_SET(0, &amp;set);
</span><br>
<span class="quotelev1">&gt; -        ]]),
</span><br>
<span class="quotelev1">&gt; +        ]])],
</span><br>
<span class="quotelev1">&gt;         AC_DEFINE([HWLOC_HAVE_CPU_SET], [1], [Define to 1 if the CPU_SET macro works])
</span><br>
<span class="quotelev1">&gt;         AC_MSG_RESULT([yes]),
</span><br>
<span class="quotelev1">&gt;         AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt;     )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     AC_MSG_CHECKING([for working CPU_SET_S])
</span><br>
<span class="quotelev1">&gt; -    AC_LINK_IFELSE(
</span><br>
<span class="quotelev1">&gt; +    AC_LINK_IFELSE([
</span><br>
<span class="quotelev1">&gt;       AC_LANG_PROGRAM([[
</span><br>
<span class="quotelev1">&gt;           #include &lt;sched.h&gt;
</span><br>
<span class="quotelev1">&gt;           cpu_set_t *set;
</span><br>
<span class="quotelev1">&gt; @@ -468,7 +468,7 @@
</span><br>
<span class="quotelev1">&gt;           CPU_ZERO_S(CPU_ALLOC_SIZE(1024), set);
</span><br>
<span class="quotelev1">&gt;           CPU_SET_S(CPU_ALLOC_SIZE(1024), 0, set);
</span><br>
<span class="quotelev1">&gt;           CPU_FREE(set);
</span><br>
<span class="quotelev1">&gt; -        ]]),
</span><br>
<span class="quotelev1">&gt; +        ]])],
</span><br>
<span class="quotelev1">&gt;         AC_DEFINE([HWLOC_HAVE_CPU_SET_S], [1], [Define to 1 if the CPU_SET_S macro works])
</span><br>
<span class="quotelev1">&gt;         AC_MSG_RESULT([yes]),
</span><br>
<span class="quotelev1">&gt;         AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt; @@ -570,7 +570,7 @@
</span><br>
<span class="quotelev1">&gt;     AC_MSG_CHECKING([for cpuid])
</span><br>
<span class="quotelev1">&gt;     old_CPPFLAGS=&quot;$CPPFLAGS&quot;
</span><br>
<span class="quotelev1">&gt;     CFLAGS=&quot;$CFLAGS -I$HWLOC_top_srcdir/include&quot;
</span><br>
<span class="quotelev1">&gt; -    AC_COMPILE_IFELSE(AC_LANG_PROGRAM([[
</span><br>
<span class="quotelev1">&gt; +    AC_COMPILE_IFELSE([AC_LANG_PROGRAM([[
</span><br>
<span class="quotelev1">&gt;         #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;         #include &lt;private/cpuid.h&gt;
</span><br>
<span class="quotelev1">&gt;       ]], [[
</span><br>
<span class="quotelev1">&gt; @@ -580,7 +580,7 @@
</span><br>
<span class="quotelev1">&gt;           printf(&quot;highest cpuid %x\n&quot;, eax);
</span><br>
<span class="quotelev1">&gt;           return 0;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; -      ]]), [
</span><br>
<span class="quotelev1">&gt; +      ]])], [
</span><br>
<span class="quotelev1">&gt;       AC_MSG_RESULT([yes])
</span><br>
<span class="quotelev1">&gt;       AC_DEFINE(HWLOC_HAVE_CPUID, 1, [Define to 1 if you have cpuid])
</span><br>
<span class="quotelev1">&gt;       hwloc_have_cpuid=yes
</span><br>
<span class="quotelev1">&gt; Index: opal/mca/if/windows/configure.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/mca/if/windows/configure.m4	(revision 23790)
</span><br>
<span class="quotelev1">&gt; +++ opal/mca/if/windows/configure.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -27,21 +27,23 @@
</span><br>
<span class="quotelev1">&gt;     # registry. We should first check that the function is defined,
</span><br>
<span class="quotelev1">&gt;     # and then check for it's presence in the kernel32 library.
</span><br>
<span class="quotelev1">&gt;     AC_MSG_CHECKING([for working RegOpenKeyEx])
</span><br>
<span class="quotelev1">&gt; -    AC_TRY_RUN( [#include &lt;windows.h&gt;
</span><br>
<span class="quotelev1">&gt; +    AC_RUN_IFELSE([AC_LANG_PROGRAM([AC_INCLUDES_DEFAULT
</span><br>
<span class="quotelev1">&gt; +#include &lt;windows.h&gt;], [
</span><br>
<span class="quotelev1">&gt; int main( int argc, char** argv ) {
</span><br>
<span class="quotelev1">&gt;     RegOpenKeyEx( HKEY_CURRENT_USER, &quot;Software\\Open MPI&quot;, 0, KEY_READ, NULL);
</span><br>
<span class="quotelev1">&gt; -    return 0; }],
</span><br>
<span class="quotelev1">&gt; +    return 0; }])],
</span><br>
<span class="quotelev1">&gt;         [AC_MSG_RESULT([yes])
</span><br>
<span class="quotelev1">&gt;          $1],
</span><br>
<span class="quotelev1">&gt;         [AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt;          $2],
</span><br>
<span class="quotelev1">&gt; -        [AC_COMPILE_IFELSE([#include &lt;windows.h&gt;
</span><br>
<span class="quotelev1">&gt; +        [AC_COMPILE_IFELSE([AC_LANG_PROGRAM([AC_INCLUDES_DEFAULT
</span><br>
<span class="quotelev1">&gt; +#include &lt;windows.h&gt;], [
</span><br>
<span class="quotelev1">&gt; int main( int argc, char** argv ) {
</span><br>
<span class="quotelev1">&gt;     RegOpenKeyEx( HKEY_CURRENT_USER, &quot;Software\\Open MPI&quot;, 0, KEY_READ, NULL);
</span><br>
<span class="quotelev1">&gt; -    return 0; }],
</span><br>
<span class="quotelev1">&gt; +    return 0; }])],
</span><br>
<span class="quotelev1">&gt;         [AC_MSG_RESULT([yes])
</span><br>
<span class="quotelev1">&gt;          $1],
</span><br>
<span class="quotelev1">&gt;         [AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt;          $2])])
</span><br>
<span class="quotelev1">&gt; -])dnl
</span><br>
<span class="quotelev1">&gt; +])])dnl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index: opal/mca/memchecker/valgrind/configure.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/mca/memchecker/valgrind/configure.m4	(revision 23790)
</span><br>
<span class="quotelev1">&gt; +++ opal/mca/memchecker/valgrind/configure.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -42,11 +42,11 @@
</span><br>
<span class="quotelev1">&gt;                   opal_memchecker_valgrind_save_CPPFLAGS=$CPPFLAGS])
</span><br>
<span class="quotelev1">&gt;            AC_CHECK_HEADERS([valgrind/valgrind.h], 
</span><br>
<span class="quotelev1">&gt;                  [AC_MSG_CHECKING([for VALGRIND_CHECK_MEM_IS_ADDRESSABLE])
</span><br>
<span class="quotelev1">&gt; -                  AC_COMPILE_IFELSE(AC_LANG_PROGRAM([[
</span><br>
<span class="quotelev1">&gt; +                  AC_COMPILE_IFELSE([AC_LANG_PROGRAM([[
</span><br>
<span class="quotelev1">&gt; #include &quot;valgrind/memcheck.h&quot;
</span><br>
<span class="quotelev1">&gt; ]],
</span><br>
<span class="quotelev1">&gt;                      [[char buffer = 0xff;
</span><br>
<span class="quotelev1">&gt; -                       VALGRIND_CHECK_MEM_IS_ADDRESSABLE(&amp;buffer, sizeof(buffer));]]),
</span><br>
<span class="quotelev1">&gt; +                       VALGRIND_CHECK_MEM_IS_ADDRESSABLE(&amp;buffer, sizeof(buffer));]])],
</span><br>
<span class="quotelev1">&gt;                      [AC_MSG_RESULT([yes])
</span><br>
<span class="quotelev1">&gt;                       opal_memchecker_valgrind_happy=yes],
</span><br>
<span class="quotelev1">&gt;                      [AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt; Index: opal/config/opal_setup_libevent.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/config/opal_setup_libevent.m4	(revision 23790)
</span><br>
<span class="quotelev1">&gt; +++ opal/config/opal_setup_libevent.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -198,26 +198,26 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         haveepoll=no
</span><br>
<span class="quotelev1">&gt;         AC_MSG_CHECKING([for working epoll library interface])
</span><br>
<span class="quotelev1">&gt; -        AC_RUN_IFELSE(AC_LANG_PROGRAM([[
</span><br>
<span class="quotelev1">&gt; -AC_INCLUDES_DEFAULT
</span><br>
<span class="quotelev1">&gt; +        AC_RUN_IFELSE([AC_LANG_PROGRAM([
</span><br>
<span class="quotelev1">&gt; +AC_INCLUDES_DEFAULT[
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/epoll.h&gt;]],
</span><br>
<span class="quotelev1">&gt; [[
</span><br>
<span class="quotelev1">&gt;     struct epoll_event epevin;
</span><br>
<span class="quotelev1">&gt;     struct epoll_event epevout;
</span><br>
<span class="quotelev1">&gt;     int res;
</span><br>
<span class="quotelev1">&gt;     int epfd;
</span><br>
<span class="quotelev1">&gt; -    int fildes[[2]];
</span><br>
<span class="quotelev1">&gt; +    int fildes[2];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if ((epfd = epoll_create(1)) == -1)
</span><br>
<span class="quotelev1">&gt;         exit(1);
</span><br>
<span class="quotelev1">&gt; -    if (pipe(&amp;fildes[[0]]) &lt; 0)
</span><br>
<span class="quotelev1">&gt; +    if (pipe(&amp;fildes[0]) &lt; 0)
</span><br>
<span class="quotelev1">&gt;         exit(1);
</span><br>
<span class="quotelev1">&gt;     memset(&amp;epevin, 0, sizeof(epevin));
</span><br>
<span class="quotelev1">&gt;     memset(&amp;epevout, 0, sizeof(epevout));
</span><br>
<span class="quotelev1">&gt;     memset(&amp;epevin.data.ptr, 5, sizeof(epevin.data.ptr));
</span><br>
<span class="quotelev1">&gt;     epevin.events = EPOLLIN | EPOLLOUT;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    if (epoll_ctl(epfd, EPOLL_CTL_ADD, fildes[[1]], &amp;epevin) == -1)
</span><br>
<span class="quotelev1">&gt; +    if (epoll_ctl(epfd, EPOLL_CTL_ADD, fildes[1], &amp;epevin) == -1)
</span><br>
<span class="quotelev1">&gt;         exit(1);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     res = epoll_wait(epfd, &amp;epevout, 1, 0);
</span><br>
<span class="quotelev1">&gt; @@ -229,7 +229,7 @@
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     /* SUCCESS */
</span><br>
<span class="quotelev1">&gt; -]]),
</span><br>
<span class="quotelev1">&gt; +]])],
</span><br>
<span class="quotelev1">&gt;         [haveepoll=yes
</span><br>
<span class="quotelev1">&gt;         AC_DEFINE(HAVE_EPOLL, 1,
</span><br>
<span class="quotelev1">&gt;                  [Define if your system supports the epoll interface])
</span><br>
<span class="quotelev1">&gt; @@ -244,8 +244,8 @@
</span><br>
<span class="quotelev1">&gt;         # OMPI: See comment above.  This test uses the epoll system call
</span><br>
<span class="quotelev1">&gt;         # interface instead of the library interface.
</span><br>
<span class="quotelev1">&gt;         AC_MSG_CHECKING(for working epoll system call)
</span><br>
<span class="quotelev1">&gt; -        AC_RUN_IFELSE(AC_LANG_PROGRAM([[
</span><br>
<span class="quotelev1">&gt; -AC_INCLUDES_DEFAULT
</span><br>
<span class="quotelev1">&gt; +        AC_RUN_IFELSE([AC_LANG_PROGRAM([
</span><br>
<span class="quotelev1">&gt; +AC_INCLUDES_DEFAULT[
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/syscall.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/epoll.h&gt;]],
</span><br>
<span class="quotelev1">&gt; [[  
</span><br>
<span class="quotelev1">&gt; @@ -253,11 +253,11 @@
</span><br>
<span class="quotelev1">&gt;     struct epoll_event epevout;
</span><br>
<span class="quotelev1">&gt;     int res;
</span><br>
<span class="quotelev1">&gt;     int epfd;
</span><br>
<span class="quotelev1">&gt; -    int fildes[[2]];
</span><br>
<span class="quotelev1">&gt; +    int fildes[2];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if ((epfd = syscall(__NR_epoll_create, 1)) == -1)
</span><br>
<span class="quotelev1">&gt;         exit(1);
</span><br>
<span class="quotelev1">&gt; -    if (pipe(&amp;fildes[[0]]) &lt; 0)
</span><br>
<span class="quotelev1">&gt; +    if (pipe(&amp;fildes[0]) &lt; 0)
</span><br>
<span class="quotelev1">&gt;         exit(1);
</span><br>
<span class="quotelev1">&gt;     memset(&amp;epevin, 0, sizeof(epevin));
</span><br>
<span class="quotelev1">&gt;     memset(&amp;epevout, 0, sizeof(epevout));
</span><br>
<span class="quotelev1">&gt; @@ -265,7 +265,7 @@
</span><br>
<span class="quotelev1">&gt;     epevin.events = EPOLLIN | EPOLLOUT;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if (syscall(__NR_epoll_ctl, epfd, 
</span><br>
<span class="quotelev1">&gt; -        EPOLL_CTL_ADD, fildes[[1]], &amp;epevin) == -1)
</span><br>
<span class="quotelev1">&gt; +        EPOLL_CTL_ADD, fildes[1], &amp;epevin) == -1)
</span><br>
<span class="quotelev1">&gt;         exit(1);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     res = syscall(__NR_epoll_wait, epfd, &amp;epevout, 1, 0);
</span><br>
<span class="quotelev1">&gt; @@ -277,7 +277,7 @@
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     /* SUCCESS */
</span><br>
<span class="quotelev1">&gt; -]]),
</span><br>
<span class="quotelev1">&gt; +]])],
</span><br>
<span class="quotelev1">&gt;         [haveepollsyscall=yes
</span><br>
<span class="quotelev1">&gt;         AC_DEFINE(HAVE_EPOLL, 1,
</span><br>
<span class="quotelev1">&gt;                  [Define if your system supports the epoll interface])
</span><br>
<span class="quotelev1">&gt; @@ -313,7 +313,7 @@
</span><br>
<span class="quotelev1">&gt;     esac
</span><br>
<span class="quotelev1">&gt; 	if test &quot;x$havekqueue&quot; = &quot;xyes&quot; ; then
</span><br>
<span class="quotelev1">&gt; 		AC_MSG_CHECKING(for working kqueue)
</span><br>
<span class="quotelev1">&gt; -		AC_TRY_RUN(
</span><br>
<span class="quotelev1">&gt; +		AC_TRY_RUN([
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/time.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/event.h&gt;
</span><br>
<span class="quotelev1">&gt; @@ -327,30 +327,30 @@
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 	int kq;
</span><br>
<span class="quotelev1">&gt; 	int n;
</span><br>
<span class="quotelev1">&gt; -	int fd[[2]];
</span><br>
<span class="quotelev1">&gt; +	int fd[2];
</span><br>
<span class="quotelev1">&gt; 	struct kevent ev;
</span><br>
<span class="quotelev1">&gt; 	struct timespec ts;
</span><br>
<span class="quotelev1">&gt; -	char buf[[8000]];
</span><br>
<span class="quotelev1">&gt; +	char buf[8000];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	if (pipe(fd) == -1)
</span><br>
<span class="quotelev1">&gt; 		exit(1);
</span><br>
<span class="quotelev1">&gt; -	if (fcntl(fd[[1]], F_SETFL, O_NONBLOCK) == -1)
</span><br>
<span class="quotelev1">&gt; +	if (fcntl(fd[1], F_SETFL, O_NONBLOCK) == -1)
</span><br>
<span class="quotelev1">&gt; 		exit(1);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -	while ((n = write(fd[[1]], buf, sizeof(buf))) == sizeof(buf))
</span><br>
<span class="quotelev1">&gt; +	while ((n = write(fd[1], buf, sizeof(buf))) == sizeof(buf))
</span><br>
<span class="quotelev1">&gt; 		;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         if ((kq = kqueue()) == -1)
</span><br>
<span class="quotelev1">&gt; 		exit(1);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -	ev.ident = fd[[1]];
</span><br>
<span class="quotelev1">&gt; +	ev.ident = fd[1];
</span><br>
<span class="quotelev1">&gt; 	ev.filter = EVFILT_WRITE;
</span><br>
<span class="quotelev1">&gt; 	ev.flags = EV_ADD | EV_ENABLE;
</span><br>
<span class="quotelev1">&gt; 	n = kevent(kq, &amp;ev, 1, NULL, 0, NULL);
</span><br>
<span class="quotelev1">&gt; 	if (n == -1)
</span><br>
<span class="quotelev1">&gt; 		exit(1);
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; -	read(fd[[0]], buf, sizeof(buf));
</span><br>
<span class="quotelev1">&gt; +	read(fd[0], buf, sizeof(buf));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	ts.tv_sec = 0;
</span><br>
<span class="quotelev1">&gt; 	ts.tv_nsec = 0;
</span><br>
<span class="quotelev1">&gt; @@ -359,7 +359,7 @@
</span><br>
<span class="quotelev1">&gt; 		exit(1);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	exit(0);
</span><br>
<span class="quotelev1">&gt; -}, [AC_MSG_RESULT(yes)
</span><br>
<span class="quotelev1">&gt; +}], [AC_MSG_RESULT(yes)
</span><br>
<span class="quotelev1">&gt;     AC_DEFINE(HAVE_WORKING_KQUEUE, 1,
</span><br>
<span class="quotelev1">&gt; 		[Define if kqueue works correctly with pipes])
</span><br>
<span class="quotelev1">&gt;     sources=&quot;kqueue.c $sources&quot;], [AC_MSG_RESULT(no)], [AC_MSG_RESULT(no)])
</span><br>
<span class="quotelev1">&gt; Index: opal/config/opal_config_asm.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/config/opal_config_asm.m4	(revision 23790)
</span><br>
<span class="quotelev1">&gt; +++ opal/config/opal_config_asm.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -585,11 +585,11 @@
</span><br>
<span class="quotelev1">&gt;                 ;;
</span><br>
<span class="quotelev1">&gt;             *)
</span><br>
<span class="quotelev1">&gt;                 if test ! &quot;$assembly&quot; = &quot;&quot; ; then
</span><br>
<span class="quotelev1">&gt; -                        AC_RUN_IFELSE(AC_LANG_PROGRAM([[
</span><br>
<span class="quotelev1">&gt; -AC_INCLUDES_DEFAULT]],
</span><br>
<span class="quotelev1">&gt; +                        AC_RUN_IFELSE([AC_LANG_PROGRAM([
</span><br>
<span class="quotelev1">&gt; +AC_INCLUDES_DEFAULT],
</span><br>
<span class="quotelev1">&gt; [[int ret = 1;
</span><br>
<span class="quotelev1">&gt; __asm__ __volatile__ ($assembly);
</span><br>
<span class="quotelev1">&gt; -return ret;]]),
</span><br>
<span class="quotelev1">&gt; +return ret;]])],
</span><br>
<span class="quotelev1">&gt;                     [asm_result=&quot;yes&quot;], [asm_result=&quot;no&quot;], 
</span><br>
<span class="quotelev1">&gt;                     [asm_result=&quot;unknown&quot;])
</span><br>
<span class="quotelev1">&gt;                 else
</span><br>
<span class="quotelev1">&gt; @@ -600,11 +600,11 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         # if we're cross compiling, just try to compile and figure good enough
</span><br>
<span class="quotelev1">&gt;         if test &quot;$asm_result&quot; = &quot;unknown&quot; ; then
</span><br>
<span class="quotelev1">&gt; -            AC_LINK_IFELSE(AC_LANG_PROGRAM([[
</span><br>
<span class="quotelev1">&gt; -AC_INCLUDES_DEFAULT]],
</span><br>
<span class="quotelev1">&gt; +            AC_LINK_IFELSE([AC_LANG_PROGRAM([
</span><br>
<span class="quotelev1">&gt; +AC_INCLUDES_DEFAULT],
</span><br>
<span class="quotelev1">&gt; [[int ret = 1;
</span><br>
<span class="quotelev1">&gt; __asm__ __volatile__ ($assembly);
</span><br>
<span class="quotelev1">&gt; -return ret;]]),
</span><br>
<span class="quotelev1">&gt; +return ret;]])],
</span><br>
<span class="quotelev1">&gt;             [asm_result=&quot;yes&quot;], [asm_result=&quot;no&quot;])
</span><br>
<span class="quotelev1">&gt;         fi
</span><br>
<span class="quotelev1">&gt;     fi
</span><br>
<span class="quotelev1">&gt; @@ -639,11 +639,11 @@
</span><br>
<span class="quotelev1">&gt;             ;;
</span><br>
<span class="quotelev1">&gt;         *)
</span><br>
<span class="quotelev1">&gt;             if test ! &quot;$assembly&quot; = &quot;&quot; ; then
</span><br>
<span class="quotelev1">&gt; -            AC_RUN_IFELSE(AC_LANG_PROGRAM([[
</span><br>
<span class="quotelev1">&gt; -AC_INCLUDES_DEFAULT]],
</span><br>
<span class="quotelev1">&gt; +            AC_RUN_IFELSE([AC_LANG_PROGRAM([
</span><br>
<span class="quotelev1">&gt; +AC_INCLUDES_DEFAULT],
</span><br>
<span class="quotelev1">&gt; [[int ret = 1;
</span><br>
<span class="quotelev1">&gt; __asm__ __volatile__ ($assembly);
</span><br>
<span class="quotelev1">&gt; -return ret;]]),
</span><br>
<span class="quotelev1">&gt; +return ret;]])],
</span><br>
<span class="quotelev1">&gt;                     [asm_result=&quot;yes&quot;], [asm_result=&quot;no&quot;], 
</span><br>
<span class="quotelev1">&gt;                     [asm_result=&quot;unknown&quot;])
</span><br>
<span class="quotelev1">&gt;             else
</span><br>
<span class="quotelev1">&gt; @@ -653,11 +653,11 @@
</span><br>
<span class="quotelev1">&gt;     esac
</span><br>
<span class="quotelev1">&gt;     # if we're cross compiling, just try to compile and figure good enough
</span><br>
<span class="quotelev1">&gt;     if test &quot;$asm_result&quot; = &quot;unknown&quot; ; then
</span><br>
<span class="quotelev1">&gt; -        AC_LINK_IFELSE(AC_LANG_PROGRAM([[
</span><br>
<span class="quotelev1">&gt; -AC_INCLUDES_DEFAULT]],
</span><br>
<span class="quotelev1">&gt; +        AC_LINK_IFELSE([AC_LANG_PROGRAM([
</span><br>
<span class="quotelev1">&gt; +AC_INCLUDES_DEFAULT],
</span><br>
<span class="quotelev1">&gt; [[int ret = 1;
</span><br>
<span class="quotelev1">&gt; __asm__ __volatile__ ($assembly);
</span><br>
<span class="quotelev1">&gt; -return ret;]]),
</span><br>
<span class="quotelev1">&gt; +return ret;]])],
</span><br>
<span class="quotelev1">&gt;             [asm_result=&quot;yes&quot;], [asm_result=&quot;no&quot;])
</span><br>
<span class="quotelev1">&gt;     fi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -690,11 +690,11 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     AC_MSG_CHECKING([if $CC supports DEC inline assembly])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    AC_LINK_IFELSE(AC_LANG_PROGRAM([[
</span><br>
<span class="quotelev1">&gt; +    AC_LINK_IFELSE([AC_LANG_PROGRAM([
</span><br>
<span class="quotelev1">&gt; AC_INCLUDES_DEFAULT
</span><br>
<span class="quotelev1">&gt; -#include &lt;c_asm.h&gt;]],
</span><br>
<span class="quotelev1">&gt; +#include &lt;c_asm.h&gt;],
</span><br>
<span class="quotelev1">&gt; [[asm(&quot;&quot;);
</span><br>
<span class="quotelev1">&gt; -return 0;]]),
</span><br>
<span class="quotelev1">&gt; +return 0;]])],
</span><br>
<span class="quotelev1">&gt;         [asm_result=&quot;yes&quot;], [asm_result=&quot;no&quot;])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     AC_MSG_RESULT([$asm_result])
</span><br>
<span class="quotelev1">&gt; @@ -717,11 +717,11 @@
</span><br>
<span class="quotelev1">&gt;     AC_LANG_PUSH([C++])
</span><br>
<span class="quotelev1">&gt;     AC_MSG_CHECKING([if $CXX supports DEC inline assembly])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    AC_LINK_IFELSE(AC_LANG_PROGRAM([[
</span><br>
<span class="quotelev1">&gt; +    AC_LINK_IFELSE([AC_LANG_PROGRAM([
</span><br>
<span class="quotelev1">&gt; AC_INCLUDES_DEFAULT
</span><br>
<span class="quotelev1">&gt; -#include &lt;c_asm.h&gt;]],
</span><br>
<span class="quotelev1">&gt; +#include &lt;c_asm.h&gt;],
</span><br>
<span class="quotelev1">&gt; [[asm(&quot;&quot;);
</span><br>
<span class="quotelev1">&gt; -return 0;]]),
</span><br>
<span class="quotelev1">&gt; +return 0;]])],
</span><br>
<span class="quotelev1">&gt;         [asm_result=&quot;yes&quot;], [asm_result=&quot;no&quot;])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     AC_MSG_RESULT([$asm_result])
</span><br>
<span class="quotelev1">&gt; Index: opal/config/opal_check_offsetof.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/config/opal_check_offsetof.m4	(revision 23790)
</span><br>
<span class="quotelev1">&gt; +++ opal/config/opal_check_offsetof.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -21,13 +21,13 @@
</span><br>
<span class="quotelev1">&gt;     OMPI_VAR_SCOPE_PUSH([have_offsetof_msg])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     AC_MSG_CHECKING(for functional offsetof macro)
</span><br>
<span class="quotelev1">&gt; -    AC_COMPILE_IFELSE(AC_LANG_PROGRAM([[#include&lt;stddef.h&gt;]],
</span><br>
<span class="quotelev1">&gt; -                                      [[struct foo {int a, b;}; size_t offset = offsetof(struct foo, b); ]]),
</span><br>
<span class="quotelev1">&gt; +    AC_COMPILE_IFELSE([AC_LANG_PROGRAM([[#include&lt;stddef.h&gt;]],
</span><br>
<span class="quotelev1">&gt; +                                      [[struct foo {int a, b;}; size_t offset = offsetof(struct foo, b); ]])],
</span><br>
<span class="quotelev1">&gt;                       [have_offsetof_msg=&quot;yes&quot;], [have_offsetof_msg=&quot;no&quot;])
</span><br>
<span class="quotelev1">&gt;     if test &quot;$have_offsetof_msg&quot; = &quot;no&quot;; then
</span><br>
<span class="quotelev1">&gt;         CPPFLAGS=&quot;$CPPFLAGS -DNO_PGI_OFFSET&quot;
</span><br>
<span class="quotelev1">&gt; -        AC_COMPILE_IFELSE(AC_LANG_PROGRAM([[#include&lt;stddef.h&gt;]],
</span><br>
<span class="quotelev1">&gt; -                                          [[struct foo {int a, b;}; size_t offset = offsetof(struct foo, b); ]]),
</span><br>
<span class="quotelev1">&gt; +        AC_COMPILE_IFELSE([AC_LANG_PROGRAM([[#include&lt;stddef.h&gt;]],
</span><br>
<span class="quotelev1">&gt; +                                          [[struct foo {int a, b;}; size_t offset = offsetof(struct foo, b); ]])],
</span><br>
<span class="quotelev1">&gt;                           [have_offsetof_msg=&quot;yes&quot;], [have_offsetof_msg=&quot;no&quot;])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         if test &quot;$have_offsetof_msg&quot; = &quot;no&quot;; then
</span><br>
<span class="quotelev1">&gt; Index: configure.ac
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- configure.ac	(revision 23790)
</span><br>
<span class="quotelev1">&gt; +++ configure.ac	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -82,7 +82,7 @@
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Init automake
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; -AM_INIT_AUTOMAKE([foreign dist-bzip2 subdir-objects no-define 1.10 tar-ustar])
</span><br>
<span class="quotelev1">&gt; +AM_INIT_AUTOMAKE([foreign dist-bzip2 subdir-objects no-define 1.10c silent-rules tar-ustar])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # If Automake supports silent rules, enable them.
</span><br>
<span class="quotelev1">&gt; m4_ifdef([AM_SILENT_RULES], [AM_SILENT_RULES([yes])])
</span><br>
<span class="quotelev1">&gt; @@ -409,9 +409,9 @@
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AC_MSG_CHECKING(for C bool type)
</span><br>
<span class="quotelev1">&gt; -AC_COMPILE_IFELSE(AC_LANG_PROGRAM([[
</span><br>
<span class="quotelev1">&gt; -AC_INCLUDES_DEFAULT]],
</span><br>
<span class="quotelev1">&gt; -[[bool bar, foo = true; bar = foo;]]),
</span><br>
<span class="quotelev1">&gt; +AC_COMPILE_IFELSE([AC_LANG_PROGRAM([
</span><br>
<span class="quotelev1">&gt; +AC_INCLUDES_DEFAULT],
</span><br>
<span class="quotelev1">&gt; +[[bool bar, foo = true; bar = foo;]])],
</span><br>
<span class="quotelev1">&gt; [OPAL_NEED_C_BOOL=0 MSG=yes],[OPAL_NEED_C_BOOL=1 MSG=no])
</span><br>
<span class="quotelev1">&gt; AC_DEFINE_UNQUOTED(OPAL_NEED_C_BOOL, $OPAL_NEED_C_BOOL,
</span><br>
<span class="quotelev1">&gt;     [Whether the C compiler supports &quot;bool&quot; without any other help (such as &lt;stdbool.h&gt;)])
</span><br>
<span class="quotelev1">&gt; @@ -594,12 +594,12 @@
</span><br>
<span class="quotelev1">&gt; AC_CHECK_HEADERS([stdbool.h], [have_stdbool_h=1], [have_stdbool_h=0])
</span><br>
<span class="quotelev1">&gt; AC_MSG_CHECKING([if &lt;stdbool.h&gt; works])
</span><br>
<span class="quotelev1">&gt; if test &quot;$have_stdbool_h&quot; = &quot;1&quot;; then
</span><br>
<span class="quotelev1">&gt; -    AC_COMPILE_IFELSE(AC_LANG_PROGRAM([[
</span><br>
<span class="quotelev1">&gt; -AC_INCLUDES_DEFAULT
</span><br>
<span class="quotelev1">&gt; +    AC_COMPILE_IFELSE([AC_LANG_PROGRAM([
</span><br>
<span class="quotelev1">&gt; +AC_INCLUDES_DEFAULT[
</span><br>
<span class="quotelev1">&gt; #if HAVE_STDBOOL_H
</span><br>
<span class="quotelev1">&gt; #include &lt;stdbool.h&gt;
</span><br>
<span class="quotelev1">&gt; #endif]],
</span><br>
<span class="quotelev1">&gt; -[[bool bar, foo = true; bar = foo;]]),
</span><br>
<span class="quotelev1">&gt; +[[bool bar, foo = true; bar = foo;]])],
</span><br>
<span class="quotelev1">&gt; [OPAL_USE_STDBOOL_H=1 MSG=yes],[OPAL_USE_STDBOOL_H=0 MSG=no])
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt;     OPAL_USE_STDBOOL_H=0
</span><br>
<span class="quotelev1">&gt; Index: ompi/config/ompi_setup_f90.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/config/ompi_setup_f90.m4	(revision 23790)
</span><br>
<span class="quotelev1">&gt; +++ ompi/config/ompi_setup_f90.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -197,8 +197,8 @@
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt;     FCFLAGS=&quot;$FFLAGS $OMPI_CXX_EXCEPTIONS_CXXFLAGS&quot;
</span><br>
<span class="quotelev1">&gt;     AC_LANG_PUSH(Fortran)
</span><br>
<span class="quotelev1">&gt; -    AC_COMPILE_IFELSE(AC_LANG_PROGRAM([], [[ INTEGER I
</span><br>
<span class="quotelev1">&gt; - I = 3]]),
</span><br>
<span class="quotelev1">&gt; +    AC_COMPILE_IFELSE([AC_LANG_PROGRAM([], [[ INTEGER I
</span><br>
<span class="quotelev1">&gt; + I = 3]])],
</span><br>
<span class="quotelev1">&gt;                       [AC_MSG_RESULT([yes])],
</span><br>
<span class="quotelev1">&gt;                       [AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt;                        AC_MSG_WARN([C++ exception flags are different between the C and C++ compilers; this configure script cannot currently handle this scenario.  Either disable C++ exception support or send mail to the Open MPI users list.])
</span><br>
<span class="quotelev1">&gt; Index: ompi/config/cxx_have_exceptions.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/config/cxx_have_exceptions.m4	(revision 23790)
</span><br>
<span class="quotelev1">&gt; +++ ompi/config/cxx_have_exceptions.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -32,7 +32,7 @@
</span><br>
<span class="quotelev1">&gt; AC_MSG_CHECKING([for throw/catch])
</span><br>
<span class="quotelev1">&gt; AC_LANG_SAVE
</span><br>
<span class="quotelev1">&gt; AC_LANG_CPLUSPLUS
</span><br>
<span class="quotelev1">&gt; -AC_COMPILE_IFELSE(AC_LANG_PROGRAM([[]], [[int i=1; throw(i);]]), 
</span><br>
<span class="quotelev1">&gt; +AC_COMPILE_IFELSE([AC_LANG_PROGRAM([[]], [[int i=1; throw(i);]])], 
</span><br>
<span class="quotelev1">&gt;     OMPI_CXX_EXCEPTIONS=1, OMPI_CXX_EXCPTIONS=0)
</span><br>
<span class="quotelev1">&gt; if test &quot;$OMPI_CXX_EXCEPTIONS&quot; = &quot;1&quot;; then
</span><br>
<span class="quotelev1">&gt;     AC_MSG_RESULT([yes])
</span><br>
<span class="quotelev1">&gt; Index: ompi/config/ompi_setup_cxx.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/config/ompi_setup_cxx.m4	(revision 23790)
</span><br>
<span class="quotelev1">&gt; +++ ompi/config/ompi_setup_cxx.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -329,7 +329,7 @@
</span><br>
<span class="quotelev1">&gt;             CFLAGS=&quot;$CFLAGS $OMPI_CXX_EXCEPTIONS_CXXFLAGS&quot;
</span><br>
<span class="quotelev1">&gt;             AC_LANG_SAVE
</span><br>
<span class="quotelev1">&gt;             AC_LANG_C
</span><br>
<span class="quotelev1">&gt; -            AC_COMPILE_IFELSE(AC_LANG_PROGRAM([[]], [[int i = 0;]]),
</span><br>
<span class="quotelev1">&gt; +            AC_COMPILE_IFELSE([AC_LANG_PROGRAM([[]], [[int i = 0;]])],
</span><br>
<span class="quotelev1">&gt;                               [AC_MSG_RESULT([yes])],
</span><br>
<span class="quotelev1">&gt;                               [AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt;                                AC_MSG_WARN([C++ exception flags are different between the C and C++ compilers; this configure script cannot currently handle this scenario.  Either disable C++ exception support or send mail to the Open MPI users list.])
</span><br>
<span class="quotelev1">&gt; Index: ompi/config/ompi_setup_f77.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/config/ompi_setup_f77.m4	(revision 23790)
</span><br>
<span class="quotelev1">&gt; +++ ompi/config/ompi_setup_f77.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -134,8 +134,8 @@
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt;     FFLAGS=&quot;$FFLAGS $OMPI_CXX_EXCEPTIONS_CXXFLAGS&quot;
</span><br>
<span class="quotelev1">&gt;     AC_LANG_PUSH(Fortran 77)
</span><br>
<span class="quotelev1">&gt; -    AC_COMPILE_IFELSE(AC_LANG_PROGRAM([], [[        INTEGER I
</span><br>
<span class="quotelev1">&gt; -        I = 3]]),
</span><br>
<span class="quotelev1">&gt; +    AC_COMPILE_IFELSE([AC_LANG_PROGRAM([], [[        INTEGER I
</span><br>
<span class="quotelev1">&gt; +        I = 3]])],
</span><br>
<span class="quotelev1">&gt;                       [AC_MSG_RESULT([yes])],
</span><br>
<span class="quotelev1">&gt;                       [AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt;                        AC_MSG_WARN([C++ exception flags are different between the C and C++ compilers; this configure script cannot currently handle this scenario.  Either disable C++ exception support or send mail to the Open MPI users list.])
</span><br>
<span class="quotelev1">&gt; Index: ompi/config/f77_get_fortran_handle_max.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/config/f77_get_fortran_handle_max.m4	(revision 23790)
</span><br>
<span class="quotelev1">&gt; +++ ompi/config/f77_get_fortran_handle_max.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -44,13 +44,13 @@
</span><br>
<span class="quotelev1">&gt;          # Get INT_MAX.  Compute a SWAG if we are cross compiling or something
</span><br>
<span class="quotelev1">&gt;          # goes wrong.
</span><br>
<span class="quotelev1">&gt;          rm -f conftest.out &gt;/dev/null 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; -         AC_RUN_IFELSE(AC_LANG_PROGRAM([[
</span><br>
<span class="quotelev1">&gt; +         AC_RUN_IFELSE([AC_LANG_PROGRAM([[
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;limits.h&gt;
</span><br>
<span class="quotelev1">&gt; ]],[[FILE *fp = fopen(&quot;conftest.out&quot;, &quot;w&quot;);
</span><br>
<span class="quotelev1">&gt; long cint = INT_MAX;
</span><br>
<span class="quotelev1">&gt; fprintf(fp, &quot;%ld&quot;, cint);
</span><br>
<span class="quotelev1">&gt; -fclose(fp);]]), 
</span><br>
<span class="quotelev1">&gt; +fclose(fp);]])], 
</span><br>
<span class="quotelev1">&gt;              [ompi_cint_max=`cat conftest.out`], 
</span><br>
<span class="quotelev1">&gt;              [ompi_cint_max=0],
</span><br>
<span class="quotelev1">&gt;              [ #cross compiling is fun.  compute INT_MAX same as INTEGER max
</span><br>
<span class="quotelev1">&gt; Index: ompi/config/cxx_find_exception_flags.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/config/cxx_find_exception_flags.m4	(revision 23790)
</span><br>
<span class="quotelev1">&gt; +++ ompi/config/cxx_find_exception_flags.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -58,13 +58,13 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     AC_LANG_SAVE
</span><br>
<span class="quotelev1">&gt;     AC_LANG_CPLUSPLUS
</span><br>
<span class="quotelev1">&gt; -    AC_COMPILE_IFELSE(AC_LANG_PROGRAM([[]], [[try { int i = 0; } catch(...) { int j = 2; }]]), ompi_happy=1, ompi_happy=0)
</span><br>
<span class="quotelev1">&gt; +    AC_COMPILE_IFELSE([AC_LANG_PROGRAM([[]], [[try { int i = 0; } catch(...) { int j = 2; }]])], ompi_happy=1, ompi_happy=0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if test &quot;$ompi_happy&quot; = &quot;1&quot;; then
</span><br>
<span class="quotelev1">&gt; 	ompi_exflags=&quot;-fexceptions&quot;;
</span><br>
<span class="quotelev1">&gt;     else
</span><br>
<span class="quotelev1">&gt; 	CXXFLAGS=&quot;$CXXFLAGS_SAVE -fhandle-exceptions&quot;
</span><br>
<span class="quotelev1">&gt; -	AC_COMPILE_IFELSE(AC_LANG_PROGRAM([[]], [[try { int i = 0; } catch(...) { int j = 2; }]]), ompi_happy=1, ompi_happy=0)
</span><br>
<span class="quotelev1">&gt; +	AC_COMPILE_IFELSE([AC_LANG_PROGRAM([[]], [[try { int i = 0; } catch(...) { int j = 2; }]])], ompi_happy=1, ompi_happy=0)
</span><br>
<span class="quotelev1">&gt; 	if test &quot;$ompi_happy&quot; = &quot;1&quot;; then
</span><br>
<span class="quotelev1">&gt; 	    ompi_exflags=&quot;-fhandle-exceptions&quot;;
</span><br>
<span class="quotelev1">&gt; 	fi
</span><br>
<span class="quotelev1">&gt; Index: config/ompi_check_vendor.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- config/ompi_check_vendor.m4	(revision 23790)
</span><br>
<span class="quotelev1">&gt; +++ config/ompi_check_vendor.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -57,6 +57,9 @@
</span><br>
<span class="quotelev1">&gt;     $1=&quot;$ompi_cv_c_compiler_vendor&quot;
</span><br>
<span class="quotelev1">&gt; ])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +# workaround to avoid syntax error with Autoconf &lt; 2.68:
</span><br>
<span class="quotelev1">&gt; +m4_ifndef([AC_LANG_DEFINES_PROVIDED],
</span><br>
<span class="quotelev1">&gt; +	  [m4_define([AC_LANG_DEFINES_PROVIDED])])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # OMPI_IFDEF_IFELSE(symbol, [action-if-defined], 
</span><br>
<span class="quotelev1">&gt; #                   [action-if-not-defined])
</span><br>
<span class="quotelev1">&gt; @@ -64,7 +67,8 @@
</span><br>
<span class="quotelev1">&gt; # Run compiler to determine if preprocessor symbol &quot;symbol&quot; is
</span><br>
<span class="quotelev1">&gt; # defined by the compiler.
</span><br>
<span class="quotelev1">&gt; AC_DEFUN([OMPI_IFDEF_IFELSE], [
</span><br>
<span class="quotelev1">&gt; -    AC_COMPILE_IFELSE([#ifndef $1
</span><br>
<span class="quotelev1">&gt; +    AC_COMPILE_IFELSE([AC_LANG_DEFINES_PROVIDED
</span><br>
<span class="quotelev1">&gt; +#ifndef $1
</span><br>
<span class="quotelev1">&gt; #error &quot;symbol $1 not defined&quot;
</span><br>
<span class="quotelev1">&gt; choke me
</span><br>
<span class="quotelev1">&gt; #endif], [$2], [$3])])
</span><br>
<span class="quotelev1">&gt; @@ -76,7 +80,8 @@
</span><br>
<span class="quotelev1">&gt; # Run compiler to determine if preprocessor symbol &quot;symbol&quot; is
</span><br>
<span class="quotelev1">&gt; # defined by the compiler.
</span><br>
<span class="quotelev1">&gt; AC_DEFUN([OMPI_IF_IFELSE], [
</span><br>
<span class="quotelev1">&gt; -    AC_COMPILE_IFELSE([#if !( $1 )
</span><br>
<span class="quotelev1">&gt; +    AC_COMPILE_IFELSE([AC_LANG_DEFINES_PROVIDED
</span><br>
<span class="quotelev1">&gt; +#if !( $1 )
</span><br>
<span class="quotelev1">&gt; #error &quot;condition $1 not met&quot;
</span><br>
<span class="quotelev1">&gt; choke me
</span><br>
<span class="quotelev1">&gt; #endif], [$2], [$3])])
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8535.php">Barrett, Brian W: "Re: [OMPI devel] RFC: make hwloc first-class data"</a>
<li><strong>Previous message:</strong> <a href="8533.php">Ralf Wildenhues: "[OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>In reply to:</strong> <a href="8533.php">Ralf Wildenhues: "[OMPI devel] update configury for Autoconf 2.68"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8538.php">Ralf Wildenhues: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>Reply:</strong> <a href="8538.php">Ralf Wildenhues: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
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
