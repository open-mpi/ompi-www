<?
$subject_val = "[OMPI devel] update configury for Autoconf 2.68";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 01:12:35 2010" -->
<!-- isoreceived="20100923051235" -->
<!-- sent="Thu, 23 Sep 2010 07:12:28 +0200" -->
<!-- isosent="20100923051228" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="[OMPI devel] update configury for Autoconf 2.68" -->
<!-- id="20100923051227.GB13922_at_gmx.de" -->
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
<strong>Subject:</strong> [OMPI devel] update configury for Autoconf 2.68<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-23 01:12:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8534.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>Previous message:</strong> <a href="8532.php">Jeff Squyres: "[OMPI devel] RFC: make hwloc first-class data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8534.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>Reply:</strong> <a href="8534.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello OpenMPI developers,
<br>
<p>just-released Autoconf 2.68 contains more stringent checks and warnings
<br>
about stuff passed to AC_{COMPILE,LINK,RUN}_IFELSE and AC_TRY_* macros.
<br>
Specifically, it will warn if C or C++ programs are not generated with
<br>
AC_LANG_SOURCE or AC_LANG_PROGRAM, in order to avoid accidentally
<br>
omitting needed headers, or mess up arguments in some way.  This has
<br>
happened a few times to Autoconf users.
<br>
<p>These checks make more stringent assumptions on correct m4 quoting of
<br>
macros; IOW, there are mis-quotings which will cause false warnings to
<br>
be emitted.
<br>
<p>In cases where generating sources without AC_LANG_SOURCE or
<br>
AC_LANG_PROGRAM is done intentionally, the macro
<br>
AC_LANG_DEFINES_PROVIDED should be expanded inside the source.
<br>
<p>The patch below silences all warnings.  I've used
<br>
AC_LANG_DEFINES_PROVIDED a couple of times in
<br>
config/ompi_check_vendor.m4, assuming that the tests are really meant
<br>
to not include any headers.  In a couple of other cases, esp in
<br>
opal/mca/if/windows/configure.m4 and
<br>
opal/mca/installdirs/windows/configure.m4, I've added the default
<br>
include headers, assuming that they should not hurt.
<br>
<p>I've tested the patch with Autoconf 2.68 as well as Autoconf 2.67 on
<br>
GNU/Linux, but done no other testing.
<br>
<p>For complete absence of warnings from Autoconf 2.68 you will also need
<br>
to update the Libtool macros from upcoming 2.4.0.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>Index: opal/mca/installdirs/windows/configure.m4
<br>
===================================================================
<br>
--- opal/mca/installdirs/windows/configure.m4	(revision 23790)
<br>
+++ opal/mca/installdirs/windows/configure.m4	(working copy)
<br>
@@ -27,18 +27,20 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# registry. We should first check that the function is defined,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# and then check for it's presence in the kernel32 library.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING(for working RegOpenKeyEx)
<br>
-    AC_TRY_RUN( [#include &lt;windows.h&gt;
<br>
+    AC_RUN_IFELSE([AC_LANG_PROGRAM([AC_INCLUDES_DEFAULT
<br>
+#include &lt;windows.h&gt;], [
<br>
&nbsp;int main( int argc, char** argv ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RegOpenKeyEx( HKEY_CURRENT_USER, &quot;Software\\Open MPI&quot;, 0, KEY_READ, NULL);
<br>
-    return 0; }],
<br>
+    return 0; }])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_RESULT([yes])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$1],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_RESULT([no])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$2],
<br>
-        [AC_COMPILE_IFELSE([#include &lt;windows.h&gt;
<br>
+        [AC_COMPILE_IFELSE([AC_LANG_PROGRAM([AC_INCLUDES_DEFAULT
<br>
+#include &lt;windows.h&gt;], [
<br>
&nbsp;int main( int argc, char** argv ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RegOpenKeyEx( HKEY_CURRENT_USER, &quot;Software\\Open MPI&quot;, 0, KEY_READ, NULL);
<br>
-    return 0; }],
<br>
+    return 0; }])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_RESULT([yes])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$1],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_RESULT([no])
<br>
Index: opal/mca/paffinity/hwloc/hwloc/config/hwloc.m4
<br>
===================================================================
<br>
--- opal/mca/paffinity/hwloc/hwloc/config/hwloc.m4	(revision 23790)
<br>
+++ opal/mca/paffinity/hwloc/hwloc/config/hwloc.m4	(working copy)
<br>
@@ -430,13 +430,13 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_HWLOC_CHECK_DECL([sched_setaffinity], [
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING([for old prototype of sched_setaffinity])
<br>
-      AC_COMPILE_IFELSE(
<br>
+      AC_COMPILE_IFELSE([
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_LANG_PROGRAM([[
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#define _GNU_SOURCE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;sched.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;static unsigned long mask;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]], [[ sched_setaffinity(0, (void*) &amp;mask);
<br>
-          ]]),
<br>
+          ]])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_DEFINE([HWLOC_HAVE_OLD_SCHED_SETAFFINITY], [1], [Define to 1 if glibc provides the old prototype of sched_setaffinity()])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_RESULT([yes]),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_RESULT([no])
<br>
@@ -447,19 +447,19 @@
<br>
&nbsp;]])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING([for working CPU_SET])
<br>
-    AC_LINK_IFELSE(
<br>
+    AC_LINK_IFELSE([
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_LANG_PROGRAM([[
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;sched.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cpu_set_t set;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]], [[ CPU_ZERO(&amp;set); CPU_SET(0, &amp;set);
<br>
-        ]]),
<br>
+        ]])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_DEFINE([HWLOC_HAVE_CPU_SET], [1], [Define to 1 if the CPU_SET macro works])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_RESULT([yes]),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_RESULT([no])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING([for working CPU_SET_S])
<br>
-    AC_LINK_IFELSE(
<br>
+    AC_LINK_IFELSE([
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_LANG_PROGRAM([[
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;sched.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cpu_set_t *set;
<br>
@@ -468,7 +468,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPU_ZERO_S(CPU_ALLOC_SIZE(1024), set);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPU_SET_S(CPU_ALLOC_SIZE(1024), 0, set);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPU_FREE(set);
<br>
-        ]]),
<br>
+        ]])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_DEFINE([HWLOC_HAVE_CPU_SET_S], [1], [Define to 1 if the CPU_SET_S macro works])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_RESULT([yes]),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_RESULT([no])
<br>
@@ -570,7 +570,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING([for cpuid])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;old_CPPFLAGS=&quot;$CPPFLAGS&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CFLAGS=&quot;$CFLAGS -I$HWLOC_top_srcdir/include&quot;
<br>
-    AC_COMPILE_IFELSE(AC_LANG_PROGRAM([[
<br>
+    AC_COMPILE_IFELSE([AC_LANG_PROGRAM([[
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;stdio.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;private/cpuid.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]], [[
<br>
@@ -580,7 +580,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;highest cpuid %x\n&quot;, eax);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-      ]]), [
<br>
+      ]])], [
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_RESULT([yes])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_DEFINE(HWLOC_HAVE_CPUID, 1, [Define to 1 if you have cpuid])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_have_cpuid=yes
<br>
Index: opal/mca/if/windows/configure.m4
<br>
===================================================================
<br>
--- opal/mca/if/windows/configure.m4	(revision 23790)
<br>
+++ opal/mca/if/windows/configure.m4	(working copy)
<br>
@@ -27,21 +27,23 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# registry. We should first check that the function is defined,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# and then check for it's presence in the kernel32 library.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING([for working RegOpenKeyEx])
<br>
-    AC_TRY_RUN( [#include &lt;windows.h&gt;
<br>
+    AC_RUN_IFELSE([AC_LANG_PROGRAM([AC_INCLUDES_DEFAULT
<br>
+#include &lt;windows.h&gt;], [
<br>
&nbsp;int main( int argc, char** argv ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RegOpenKeyEx( HKEY_CURRENT_USER, &quot;Software\\Open MPI&quot;, 0, KEY_READ, NULL);
<br>
-    return 0; }],
<br>
+    return 0; }])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_RESULT([yes])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$1],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_RESULT([no])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$2],
<br>
-        [AC_COMPILE_IFELSE([#include &lt;windows.h&gt;
<br>
+        [AC_COMPILE_IFELSE([AC_LANG_PROGRAM([AC_INCLUDES_DEFAULT
<br>
+#include &lt;windows.h&gt;], [
<br>
&nbsp;int main( int argc, char** argv ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RegOpenKeyEx( HKEY_CURRENT_USER, &quot;Software\\Open MPI&quot;, 0, KEY_READ, NULL);
<br>
-    return 0; }],
<br>
+    return 0; }])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_RESULT([yes])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$1],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_RESULT([no])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$2])])
<br>
-])dnl
<br>
+])])dnl
<br>
&nbsp;
<br>
Index: opal/mca/memchecker/valgrind/configure.m4
<br>
===================================================================
<br>
--- opal/mca/memchecker/valgrind/configure.m4	(revision 23790)
<br>
+++ opal/mca/memchecker/valgrind/configure.m4	(working copy)
<br>
@@ -42,11 +42,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_memchecker_valgrind_save_CPPFLAGS=$CPPFLAGS])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_CHECK_HEADERS([valgrind/valgrind.h], 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_CHECKING([for VALGRIND_CHECK_MEM_IS_ADDRESSABLE])
<br>
-                  AC_COMPILE_IFELSE(AC_LANG_PROGRAM([[
<br>
+                  AC_COMPILE_IFELSE([AC_LANG_PROGRAM([[
<br>
&nbsp;#include &quot;valgrind/memcheck.h&quot;
<br>
&nbsp;]],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[[char buffer = 0xff;
<br>
-                       VALGRIND_CHECK_MEM_IS_ADDRESSABLE(&amp;buffer, sizeof(buffer));]]),
<br>
+                       VALGRIND_CHECK_MEM_IS_ADDRESSABLE(&amp;buffer, sizeof(buffer));]])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_RESULT([yes])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_memchecker_valgrind_happy=yes],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_RESULT([no])
<br>
Index: opal/config/opal_setup_libevent.m4
<br>
===================================================================
<br>
--- opal/config/opal_setup_libevent.m4	(revision 23790)
<br>
+++ opal/config/opal_setup_libevent.m4	(working copy)
<br>
@@ -198,26 +198,26 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;haveepoll=no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING([for working epoll library interface])
<br>
-        AC_RUN_IFELSE(AC_LANG_PROGRAM([[
<br>
-AC_INCLUDES_DEFAULT
<br>
+        AC_RUN_IFELSE([AC_LANG_PROGRAM([
<br>
+AC_INCLUDES_DEFAULT[
<br>
&nbsp;#include &lt;sys/epoll.h&gt;]],
<br>
&nbsp;[[
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct epoll_event epevin;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct epoll_event epevout;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int res;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int epfd;
<br>
-    int fildes[[2]];
<br>
+    int fildes[2];
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ((epfd = epoll_create(1)) == -1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
-    if (pipe(&amp;fildes[[0]]) &lt; 0)
<br>
+    if (pipe(&amp;fildes[0]) &lt; 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memset(&amp;epevin, 0, sizeof(epevin));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memset(&amp;epevout, 0, sizeof(epevout));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memset(&amp;epevin.data.ptr, 5, sizeof(epevin.data.ptr));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;epevin.events = EPOLLIN | EPOLLOUT;
<br>
&nbsp;
<br>
-    if (epoll_ctl(epfd, EPOLL_CTL_ADD, fildes[[1]], &amp;epevin) == -1)
<br>
+    if (epoll_ctl(epfd, EPOLL_CTL_ADD, fildes[1], &amp;epevin) == -1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;res = epoll_wait(epfd, &amp;epevout, 1, 0);
<br>
@@ -229,7 +229,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* SUCCESS */
<br>
-]]),
<br>
+]])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[haveepoll=yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_DEFINE(HAVE_EPOLL, 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Define if your system supports the epoll interface])
<br>
@@ -244,8 +244,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# OMPI: See comment above.  This test uses the epoll system call
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# interface instead of the library interface.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING(for working epoll system call)
<br>
-        AC_RUN_IFELSE(AC_LANG_PROGRAM([[
<br>
-AC_INCLUDES_DEFAULT
<br>
+        AC_RUN_IFELSE([AC_LANG_PROGRAM([
<br>
+AC_INCLUDES_DEFAULT[
<br>
&nbsp;#include &lt;sys/syscall.h&gt;
<br>
&nbsp;#include &lt;sys/epoll.h&gt;]],
<br>
&nbsp;[[  
<br>
@@ -253,11 +253,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct epoll_event epevout;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int res;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int epfd;
<br>
-    int fildes[[2]];
<br>
+    int fildes[2];
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ((epfd = syscall(__NR_epoll_create, 1)) == -1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
-    if (pipe(&amp;fildes[[0]]) &lt; 0)
<br>
+    if (pipe(&amp;fildes[0]) &lt; 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memset(&amp;epevin, 0, sizeof(epevin));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memset(&amp;epevout, 0, sizeof(epevout));
<br>
@@ -265,7 +265,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;epevin.events = EPOLLIN | EPOLLOUT;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (syscall(__NR_epoll_ctl, epfd, 
<br>
-        EPOLL_CTL_ADD, fildes[[1]], &amp;epevin) == -1)
<br>
+        EPOLL_CTL_ADD, fildes[1], &amp;epevin) == -1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;res = syscall(__NR_epoll_wait, epfd, &amp;epevout, 1, 0);
<br>
@@ -277,7 +277,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* SUCCESS */
<br>
-]]),
<br>
+]])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[haveepollsyscall=yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_DEFINE(HAVE_EPOLL, 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Define if your system supports the epoll interface])
<br>
@@ -313,7 +313,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;x$havekqueue&quot; = &quot;xyes&quot; ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING(for working kqueue)
<br>
-		AC_TRY_RUN(
<br>
+		AC_TRY_RUN([
<br>
&nbsp;#include &lt;sys/types.h&gt;
<br>
&nbsp;#include &lt;sys/time.h&gt;
<br>
&nbsp;#include &lt;sys/event.h&gt;
<br>
@@ -327,30 +327,30 @@
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int kq;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int n;
<br>
-	int fd[[2]];
<br>
+	int fd[2];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct kevent ev;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct timespec ts;
<br>
-	char buf[[8000]];
<br>
+	char buf[8000];
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (pipe(fd) == -1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
-	if (fcntl(fd[[1]], F_SETFL, O_NONBLOCK) == -1)
<br>
+	if (fcntl(fd[1], F_SETFL, O_NONBLOCK) == -1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;
<br>
-	while ((n = write(fd[[1]], buf, sizeof(buf))) == sizeof(buf))
<br>
+	while ((n = write(fd[1], buf, sizeof(buf))) == sizeof(buf))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ((kq = kqueue()) == -1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;
<br>
-	ev.ident = fd[[1]];
<br>
+	ev.ident = fd[1];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ev.filter = EVFILT_WRITE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ev.flags = EV_ADD | EV_ENABLE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n = kevent(kq, &amp;ev, 1, NULL, 0, NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (n == -1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
-	read(fd[[0]], buf, sizeof(buf));
<br>
+	read(fd[0], buf, sizeof(buf));
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ts.tv_sec = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ts.tv_nsec = 0;
<br>
@@ -359,7 +359,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(0);
<br>
-}, [AC_MSG_RESULT(yes)
<br>
+}], [AC_MSG_RESULT(yes)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_DEFINE(HAVE_WORKING_KQUEUE, 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Define if kqueue works correctly with pipes])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sources=&quot;kqueue.c $sources&quot;], [AC_MSG_RESULT(no)], [AC_MSG_RESULT(no)])
<br>
Index: opal/config/opal_config_asm.m4
<br>
===================================================================
<br>
--- opal/config/opal_config_asm.m4	(revision 23790)
<br>
+++ opal/config/opal_config_asm.m4	(working copy)
<br>
@@ -585,11 +585,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test ! &quot;$assembly&quot; = &quot;&quot; ; then
<br>
-                        AC_RUN_IFELSE(AC_LANG_PROGRAM([[
<br>
-AC_INCLUDES_DEFAULT]],
<br>
+                        AC_RUN_IFELSE([AC_LANG_PROGRAM([
<br>
+AC_INCLUDES_DEFAULT],
<br>
&nbsp;[[int ret = 1;
<br>
&nbsp;__asm__ __volatile__ ($assembly);
<br>
-return ret;]]),
<br>
+return ret;]])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[asm_result=&quot;yes&quot;], [asm_result=&quot;no&quot;], 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[asm_result=&quot;unknown&quot;])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
@@ -600,11 +600,11 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# if we're cross compiling, just try to compile and figure good enough
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$asm_result&quot; = &quot;unknown&quot; ; then
<br>
-            AC_LINK_IFELSE(AC_LANG_PROGRAM([[
<br>
-AC_INCLUDES_DEFAULT]],
<br>
+            AC_LINK_IFELSE([AC_LANG_PROGRAM([
<br>
+AC_INCLUDES_DEFAULT],
<br>
&nbsp;[[int ret = 1;
<br>
&nbsp;__asm__ __volatile__ ($assembly);
<br>
-return ret;]]),
<br>
+return ret;]])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[asm_result=&quot;yes&quot;], [asm_result=&quot;no&quot;])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
@@ -639,11 +639,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test ! &quot;$assembly&quot; = &quot;&quot; ; then
<br>
-            AC_RUN_IFELSE(AC_LANG_PROGRAM([[
<br>
-AC_INCLUDES_DEFAULT]],
<br>
+            AC_RUN_IFELSE([AC_LANG_PROGRAM([
<br>
+AC_INCLUDES_DEFAULT],
<br>
&nbsp;[[int ret = 1;
<br>
&nbsp;__asm__ __volatile__ ($assembly);
<br>
-return ret;]]),
<br>
+return ret;]])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[asm_result=&quot;yes&quot;], [asm_result=&quot;no&quot;], 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[asm_result=&quot;unknown&quot;])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
@@ -653,11 +653,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# if we're cross compiling, just try to compile and figure good enough
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$asm_result&quot; = &quot;unknown&quot; ; then
<br>
-        AC_LINK_IFELSE(AC_LANG_PROGRAM([[
<br>
-AC_INCLUDES_DEFAULT]],
<br>
+        AC_LINK_IFELSE([AC_LANG_PROGRAM([
<br>
+AC_INCLUDES_DEFAULT],
<br>
&nbsp;[[int ret = 1;
<br>
&nbsp;__asm__ __volatile__ ($assembly);
<br>
-return ret;]]),
<br>
+return ret;]])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[asm_result=&quot;yes&quot;], [asm_result=&quot;no&quot;])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;
<br>
@@ -690,11 +690,11 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING([if $CC supports DEC inline assembly])
<br>
&nbsp;
<br>
-    AC_LINK_IFELSE(AC_LANG_PROGRAM([[
<br>
+    AC_LINK_IFELSE([AC_LANG_PROGRAM([
<br>
&nbsp;AC_INCLUDES_DEFAULT
<br>
-#include &lt;c_asm.h&gt;]],
<br>
+#include &lt;c_asm.h&gt;],
<br>
&nbsp;[[asm(&quot;&quot;);
<br>
-return 0;]]),
<br>
+return 0;]])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[asm_result=&quot;yes&quot;], [asm_result=&quot;no&quot;])
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_RESULT([$asm_result])
<br>
@@ -717,11 +717,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_LANG_PUSH([C++])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING([if $CXX supports DEC inline assembly])
<br>
&nbsp;
<br>
-    AC_LINK_IFELSE(AC_LANG_PROGRAM([[
<br>
+    AC_LINK_IFELSE([AC_LANG_PROGRAM([
<br>
&nbsp;AC_INCLUDES_DEFAULT
<br>
-#include &lt;c_asm.h&gt;]],
<br>
+#include &lt;c_asm.h&gt;],
<br>
&nbsp;[[asm(&quot;&quot;);
<br>
-return 0;]]),
<br>
+return 0;]])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[asm_result=&quot;yes&quot;], [asm_result=&quot;no&quot;])
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_RESULT([$asm_result])
<br>
Index: opal/config/opal_check_offsetof.m4
<br>
===================================================================
<br>
--- opal/config/opal_check_offsetof.m4	(revision 23790)
<br>
+++ opal/config/opal_check_offsetof.m4	(working copy)
<br>
@@ -21,13 +21,13 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_VAR_SCOPE_PUSH([have_offsetof_msg])
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING(for functional offsetof macro)
<br>
-    AC_COMPILE_IFELSE(AC_LANG_PROGRAM([[#include&lt;stddef.h&gt;]],
<br>
-                                      [[struct foo {int a, b;}; size_t offset = offsetof(struct foo, b); ]]),
<br>
+    AC_COMPILE_IFELSE([AC_LANG_PROGRAM([[#include&lt;stddef.h&gt;]],
<br>
+                                      [[struct foo {int a, b;}; size_t offset = offsetof(struct foo, b); ]])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[have_offsetof_msg=&quot;yes&quot;], [have_offsetof_msg=&quot;no&quot;])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$have_offsetof_msg&quot; = &quot;no&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPPFLAGS=&quot;$CPPFLAGS -DNO_PGI_OFFSET&quot;
<br>
-        AC_COMPILE_IFELSE(AC_LANG_PROGRAM([[#include&lt;stddef.h&gt;]],
<br>
-                                          [[struct foo {int a, b;}; size_t offset = offsetof(struct foo, b); ]]),
<br>
+        AC_COMPILE_IFELSE([AC_LANG_PROGRAM([[#include&lt;stddef.h&gt;]],
<br>
+                                          [[struct foo {int a, b;}; size_t offset = offsetof(struct foo, b); ]])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[have_offsetof_msg=&quot;yes&quot;], [have_offsetof_msg=&quot;no&quot;])
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$have_offsetof_msg&quot; = &quot;no&quot;; then
<br>
Index: configure.ac
<br>
===================================================================
<br>
--- configure.ac	(revision 23790)
<br>
+++ configure.ac	(working copy)
<br>
@@ -82,7 +82,7 @@
<br>
&nbsp;#
<br>
&nbsp;# Init automake
<br>
&nbsp;#
<br>
-AM_INIT_AUTOMAKE([foreign dist-bzip2 subdir-objects no-define 1.10 tar-ustar])
<br>
+AM_INIT_AUTOMAKE([foreign dist-bzip2 subdir-objects no-define 1.10c silent-rules tar-ustar])
<br>
&nbsp;
<br>
&nbsp;# If Automake supports silent rules, enable them.
<br>
&nbsp;m4_ifdef([AM_SILENT_RULES], [AM_SILENT_RULES([yes])])
<br>
@@ -409,9 +409,9 @@
<br>
&nbsp;#
<br>
&nbsp;
<br>
&nbsp;AC_MSG_CHECKING(for C bool type)
<br>
-AC_COMPILE_IFELSE(AC_LANG_PROGRAM([[
<br>
-AC_INCLUDES_DEFAULT]],
<br>
-[[bool bar, foo = true; bar = foo;]]),
<br>
+AC_COMPILE_IFELSE([AC_LANG_PROGRAM([
<br>
+AC_INCLUDES_DEFAULT],
<br>
+[[bool bar, foo = true; bar = foo;]])],
<br>
&nbsp;[OPAL_NEED_C_BOOL=0 MSG=yes],[OPAL_NEED_C_BOOL=1 MSG=no])
<br>
&nbsp;AC_DEFINE_UNQUOTED(OPAL_NEED_C_BOOL, $OPAL_NEED_C_BOOL,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Whether the C compiler supports &quot;bool&quot; without any other help (such as &lt;stdbool.h&gt;)])
<br>
@@ -594,12 +594,12 @@
<br>
&nbsp;AC_CHECK_HEADERS([stdbool.h], [have_stdbool_h=1], [have_stdbool_h=0])
<br>
&nbsp;AC_MSG_CHECKING([if &lt;stdbool.h&gt; works])
<br>
&nbsp;if test &quot;$have_stdbool_h&quot; = &quot;1&quot;; then
<br>
-    AC_COMPILE_IFELSE(AC_LANG_PROGRAM([[
<br>
-AC_INCLUDES_DEFAULT
<br>
+    AC_COMPILE_IFELSE([AC_LANG_PROGRAM([
<br>
+AC_INCLUDES_DEFAULT[
<br>
&nbsp;#if HAVE_STDBOOL_H
<br>
&nbsp;#include &lt;stdbool.h&gt;
<br>
&nbsp;#endif]],
<br>
-[[bool bar, foo = true; bar = foo;]]),
<br>
+[[bool bar, foo = true; bar = foo;]])],
<br>
&nbsp;[OPAL_USE_STDBOOL_H=1 MSG=yes],[OPAL_USE_STDBOOL_H=0 MSG=no])
<br>
&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_USE_STDBOOL_H=0
<br>
Index: ompi/config/ompi_setup_f90.m4
<br>
===================================================================
<br>
--- ompi/config/ompi_setup_f90.m4	(revision 23790)
<br>
+++ ompi/config/ompi_setup_f90.m4	(working copy)
<br>
@@ -197,8 +197,8 @@
<br>
&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FCFLAGS=&quot;$FFLAGS $OMPI_CXX_EXCEPTIONS_CXXFLAGS&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_LANG_PUSH(Fortran)
<br>
-    AC_COMPILE_IFELSE(AC_LANG_PROGRAM([], [[ INTEGER I
<br>
- I = 3]]),
<br>
+    AC_COMPILE_IFELSE([AC_LANG_PROGRAM([], [[ INTEGER I
<br>
+ I = 3]])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_RESULT([yes])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_RESULT([no])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_WARN([C++ exception flags are different between the C and C++ compilers; this configure script cannot currently handle this scenario.  Either disable C++ exception support or send mail to the Open MPI users list.])
<br>
Index: ompi/config/cxx_have_exceptions.m4
<br>
===================================================================
<br>
--- ompi/config/cxx_have_exceptions.m4	(revision 23790)
<br>
+++ ompi/config/cxx_have_exceptions.m4	(working copy)
<br>
@@ -32,7 +32,7 @@
<br>
&nbsp;AC_MSG_CHECKING([for throw/catch])
<br>
&nbsp;AC_LANG_SAVE
<br>
&nbsp;AC_LANG_CPLUSPLUS
<br>
-AC_COMPILE_IFELSE(AC_LANG_PROGRAM([[]], [[int i=1; throw(i);]]), 
<br>
+AC_COMPILE_IFELSE([AC_LANG_PROGRAM([[]], [[int i=1; throw(i);]])], 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_CXX_EXCEPTIONS=1, OMPI_CXX_EXCPTIONS=0)
<br>
&nbsp;if test &quot;$OMPI_CXX_EXCEPTIONS&quot; = &quot;1&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_RESULT([yes])
<br>
Index: ompi/config/ompi_setup_cxx.m4
<br>
===================================================================
<br>
--- ompi/config/ompi_setup_cxx.m4	(revision 23790)
<br>
+++ ompi/config/ompi_setup_cxx.m4	(working copy)
<br>
@@ -329,7 +329,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CFLAGS=&quot;$CFLAGS $OMPI_CXX_EXCEPTIONS_CXXFLAGS&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_LANG_SAVE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_LANG_C
<br>
-            AC_COMPILE_IFELSE(AC_LANG_PROGRAM([[]], [[int i = 0;]]),
<br>
+            AC_COMPILE_IFELSE([AC_LANG_PROGRAM([[]], [[int i = 0;]])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_RESULT([yes])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_RESULT([no])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_WARN([C++ exception flags are different between the C and C++ compilers; this configure script cannot currently handle this scenario.  Either disable C++ exception support or send mail to the Open MPI users list.])
<br>
Index: ompi/config/ompi_setup_f77.m4
<br>
===================================================================
<br>
--- ompi/config/ompi_setup_f77.m4	(revision 23790)
<br>
+++ ompi/config/ompi_setup_f77.m4	(working copy)
<br>
@@ -134,8 +134,8 @@
<br>
&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FFLAGS=&quot;$FFLAGS $OMPI_CXX_EXCEPTIONS_CXXFLAGS&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_LANG_PUSH(Fortran 77)
<br>
-    AC_COMPILE_IFELSE(AC_LANG_PROGRAM([], [[        INTEGER I
<br>
-        I = 3]]),
<br>
+    AC_COMPILE_IFELSE([AC_LANG_PROGRAM([], [[        INTEGER I
<br>
+        I = 3]])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_RESULT([yes])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_RESULT([no])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_WARN([C++ exception flags are different between the C and C++ compilers; this configure script cannot currently handle this scenario.  Either disable C++ exception support or send mail to the Open MPI users list.])
<br>
Index: ompi/config/f77_get_fortran_handle_max.m4
<br>
===================================================================
<br>
--- ompi/config/f77_get_fortran_handle_max.m4	(revision 23790)
<br>
+++ ompi/config/f77_get_fortran_handle_max.m4	(working copy)
<br>
@@ -44,13 +44,13 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Get INT_MAX.  Compute a SWAG if we are cross compiling or something
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# goes wrong.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm -f conftest.out &gt;/dev/null 2&gt;&amp;1
<br>
-         AC_RUN_IFELSE(AC_LANG_PROGRAM([[
<br>
+         AC_RUN_IFELSE([AC_LANG_PROGRAM([[
<br>
&nbsp;#include &lt;stdio.h&gt;
<br>
&nbsp;#include &lt;limits.h&gt;
<br>
&nbsp;]],[[FILE *fp = fopen(&quot;conftest.out&quot;, &quot;w&quot;);
<br>
&nbsp;long cint = INT_MAX;
<br>
&nbsp;fprintf(fp, &quot;%ld&quot;, cint);
<br>
-fclose(fp);]]), 
<br>
+fclose(fp);]])], 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ompi_cint_max=`cat conftest.out`], 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ompi_cint_max=0],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ #cross compiling is fun.  compute INT_MAX same as INTEGER max
<br>
Index: ompi/config/cxx_find_exception_flags.m4
<br>
===================================================================
<br>
--- ompi/config/cxx_find_exception_flags.m4	(revision 23790)
<br>
+++ ompi/config/cxx_find_exception_flags.m4	(working copy)
<br>
@@ -58,13 +58,13 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_LANG_SAVE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_LANG_CPLUSPLUS
<br>
-    AC_COMPILE_IFELSE(AC_LANG_PROGRAM([[]], [[try { int i = 0; } catch(...) { int j = 2; }]]), ompi_happy=1, ompi_happy=0)
<br>
+    AC_COMPILE_IFELSE([AC_LANG_PROGRAM([[]], [[try { int i = 0; } catch(...) { int j = 2; }]])], ompi_happy=1, ompi_happy=0)
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$ompi_happy&quot; = &quot;1&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_exflags=&quot;-fexceptions&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CXXFLAGS=&quot;$CXXFLAGS_SAVE -fhandle-exceptions&quot;
<br>
-	AC_COMPILE_IFELSE(AC_LANG_PROGRAM([[]], [[try { int i = 0; } catch(...) { int j = 2; }]]), ompi_happy=1, ompi_happy=0)
<br>
+	AC_COMPILE_IFELSE([AC_LANG_PROGRAM([[]], [[try { int i = 0; } catch(...) { int j = 2; }]])], ompi_happy=1, ompi_happy=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$ompi_happy&quot; = &quot;1&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_exflags=&quot;-fhandle-exceptions&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
Index: config/ompi_check_vendor.m4
<br>
===================================================================
<br>
--- config/ompi_check_vendor.m4	(revision 23790)
<br>
+++ config/ompi_check_vendor.m4	(working copy)
<br>
@@ -57,6 +57,9 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$1=&quot;$ompi_cv_c_compiler_vendor&quot;
<br>
&nbsp;])
<br>
&nbsp;
<br>
+# workaround to avoid syntax error with Autoconf &lt; 2.68:
<br>
+m4_ifndef([AC_LANG_DEFINES_PROVIDED],
<br>
+	  [m4_define([AC_LANG_DEFINES_PROVIDED])])
<br>
&nbsp;
<br>
&nbsp;# OMPI_IFDEF_IFELSE(symbol, [action-if-defined], 
<br>
&nbsp;#                   [action-if-not-defined])
<br>
@@ -64,7 +67,8 @@
<br>
&nbsp;# Run compiler to determine if preprocessor symbol &quot;symbol&quot; is
<br>
&nbsp;# defined by the compiler.
<br>
&nbsp;AC_DEFUN([OMPI_IFDEF_IFELSE], [
<br>
-    AC_COMPILE_IFELSE([#ifndef $1
<br>
+    AC_COMPILE_IFELSE([AC_LANG_DEFINES_PROVIDED
<br>
+#ifndef $1
<br>
&nbsp;#error &quot;symbol $1 not defined&quot;
<br>
&nbsp;choke me
<br>
&nbsp;#endif], [$2], [$3])])
<br>
@@ -76,7 +80,8 @@
<br>
&nbsp;# Run compiler to determine if preprocessor symbol &quot;symbol&quot; is
<br>
&nbsp;# defined by the compiler.
<br>
&nbsp;AC_DEFUN([OMPI_IF_IFELSE], [
<br>
-    AC_COMPILE_IFELSE([#if !( $1 )
<br>
+    AC_COMPILE_IFELSE([AC_LANG_DEFINES_PROVIDED
<br>
+#if !( $1 )
<br>
&nbsp;#error &quot;condition $1 not met&quot;
<br>
&nbsp;choke me
<br>
&nbsp;#endif], [$2], [$3])])
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8534.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>Previous message:</strong> <a href="8532.php">Jeff Squyres: "[OMPI devel] RFC: make hwloc first-class data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8534.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>Reply:</strong> <a href="8534.php">Jeff Squyres: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
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
