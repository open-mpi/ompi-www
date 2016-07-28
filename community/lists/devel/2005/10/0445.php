<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 12 15:21:00 2005" -->
<!-- isoreceived="20051012202100" -->
<!-- sent="Wed, 12 Oct 2005 13:20:57 -0700" -->
<!-- isosent="20051012202057" -->
<!-- name="Brooks Davis" -->
<!-- email="brooks_at_[hidden]" -->
<!-- subject="Re:  porting guide?" -->
<!-- id="20051012202057.GA2312_at_odin.ac.hmc.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20051012180751.GA2573_at_odin.ac.hmc.edu" -->
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
<strong>From:</strong> Brooks Davis (<em>brooks_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-12 15:20:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0446.php">Jeff Squyres: "Re:  porting guide?"</a>
<li><strong>Previous message:</strong> <a href="0444.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>In reply to:</strong> <a href="0444.php">Brooks Davis: "Re:  porting guide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0446.php">Jeff Squyres: "Re:  porting guide?"</a>
<li><strong>Reply:</strong> <a href="0446.php">Jeff Squyres: "Re:  porting guide?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct 12, 2005 at 11:07:51AM -0700, Brooks Davis wrote:
<br>
<span class="quotelev1">&gt; On Wed, Oct 12, 2005 at 08:58:30AM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 12, 2005, at 12:54 AM, Brooks Davis wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Can you elaborate on why you needed that?  If there's a problem with
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; the stacktrace stuff on BSD, I'd like to make it either disable by
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; default or fix whatever is required to work properly on BSD.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; There were a bunch of undefined symbols that I didn't track down.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hopefully there's just a missing header file.  I need to dig into it
</span><br>
<span class="quotelev3">&gt; &gt; &gt; more.  I just disabled it because I was hoping that would be the only
</span><br>
<span class="quotelev3">&gt; &gt; &gt; issue.  It wasn't but, I had stop working before I could try again
</span><br>
<span class="quotelev3">&gt; &gt; &gt; with stack traces enabled.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ok.  Right now, that section is only protected with #ifdef __GLIBC__, 
</span><br>
<span class="quotelev2">&gt; &gt; so let us know what you find.  The sooner, the better.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After some investigation I've discovered there are two parts to this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First, the failure to compile is due to FreeBSD not defining a large
</span><br>
<span class="quotelev1">&gt; portion of the si_code values in the decoding table.  Overall the state
</span><br>
<span class="quotelev1">&gt; of documentation of the FreeBSD si_code values is rather crappy so I've
</span><br>
<span class="quotelev1">&gt; added #ifdef's around the ones that fail, but not attempted to add more
</span><br>
<span class="quotelev1">&gt; values except SI_UNDEFINED.  I've attached this bit (with this the
</span><br>
<span class="quotelev1">&gt; system compiles with ./configure).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Second, is actually supporting backtraces.  It turns out there's a
</span><br>
<span class="quotelev1">&gt; library to provide the glibc backtrace* API on BSD systems.  I don't
</span><br>
<span class="quotelev1">&gt; know which ones it works on or how good it is, but it's probably worth a
</span><br>
<span class="quotelev1">&gt; short.  The big change will be switching from __GLIBC__ to probing for
</span><br>
<span class="quotelev1">&gt; libexecinfo, and the necessicary symbols.  I'm taking a look at this
</span><br>
<span class="quotelev1">&gt; now.
</span><br>
<p>No testing yet, but I've modified configure.am and
<br>
opal/util/stacktrace.c to work by probing for backtrace() and
<br>
libexecinfo.  The configure code is cribbed from the sched_yeild and -lrt
<br>
code for Solaris.  The diff below includes that, some changes to
<br>
detect libutil.h and it include as needed and the added ifdef from my
<br>
last message in stacktrace.c.
<br>
<p>Now to see if it runs. :)
<br>
<p>-- Brooks
<br>
<p><p>Index: opal/util/stacktrace.c
<br>
===================================================================
<br>
--- opal/util/stacktrace.c	(revision 7735)
<br>
+++ opal/util/stacktrace.c	(working copy)
<br>
@@ -46,6 +46,8 @@
<br>
&nbsp;&nbsp;* to a user-specified signal (e.g. SIGFPE or SIGSEGV).
<br>
&nbsp;&nbsp;* For Linux/Glibc, it then uses backtrace and backtrace_symbols
<br>
&nbsp;&nbsp;* to figure the current stack and then prints that out to stdout.
<br>
+ * Where available, the BSD libexecinfo is used to provide Linux/Glibc
<br>
+ * compatable backtrace and backtrace_symbols functions.
<br>
&nbsp;&nbsp;* Yes, printf and malloc are not signal-safe per se, but should be 
<br>
&nbsp;&nbsp;* on Linux?
<br>
&nbsp;&nbsp;*
<br>
@@ -58,7 +60,7 @@
<br>
&nbsp;#if OMPI_WANT_PRETTY_PRINT_STACKTRACE &amp;&amp; ! defined(WIN32)
<br>
&nbsp;static void opal_show_stackframe (int signo, siginfo_t * info, void * p)
<br>
&nbsp;{   
<br>
-#ifdef __GLIBC__
<br>
+#if HAVE_BACKTRACE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int trace_size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void * trace[32];
<br>
@@ -87,15 +89,21 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case SIGILL:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch (info-&gt;si_code)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
+#ifdef ILL_ILLOPC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case ILL_ILLOPC: str = &quot;ILL_ILLOPC&quot;; break;
<br>
+#endif
<br>
&nbsp;#ifdef ILL_ILLOPN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case ILL_ILLOPN: str = &quot;ILL_ILLOPN&quot;; break;
<br>
&nbsp;#endif
<br>
&nbsp;#ifdef ILL_ILLADR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case ILL_ILLADR: str = &quot;ILL_ILLADR&quot;; break;
<br>
&nbsp;#endif
<br>
+#ifdef ILL_ILLTRP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case ILL_ILLTRP: str = &quot;ILL_ILLTRP&quot;; break;
<br>
+#endif
<br>
+#ifdef ILL_PRVOPC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case ILL_PRVOPC: str = &quot;ILL_PRVOPC&quot;; break;
<br>
+#endif
<br>
&nbsp;#ifdef ILL_PRVREG
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case ILL_PRVREG: str = &quot;ILL_PRVREG&quot;; break;
<br>
&nbsp;#endif
<br>
@@ -129,14 +137,20 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case SIGSEGV:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch (info-&gt;si_code)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
+#ifdef SEGV_MAPERR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case SEGV_MAPERR: str = &quot;SEGV_MAPERR&quot;; break;
<br>
+#endif
<br>
+#ifdef SEGV_ACCERR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case SEGV_ACCERR: str = &quot;SEGV_ACCERR&quot;; break;
<br>
+#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case SIGBUS:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch (info-&gt;si_code)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
+#ifdef BUS_ADRALN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case BUS_ADRALN: str = &quot;BUS_ADRALN&quot;; break;
<br>
+#endif
<br>
&nbsp;#ifdef BUSADRERR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case BUS_ADRERR: str = &quot;BUS_ADRERR&quot;; break;
<br>
&nbsp;#endif
<br>
@@ -159,12 +173,24 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case SIGCHLD:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch (info-&gt;si_code)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
+#ifdef CLD_EXITED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case CLD_EXITED: str = &quot;CLD_EXITED&quot;; break;
<br>
+#endif
<br>
+#ifdef CLD_KILLED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case CLD_KILLED: str = &quot;CLD_KILLED&quot;; break;
<br>
+#endif
<br>
+#ifdef CLD_DUMPED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case CLD_DUMPED: str = &quot;CLD_DUMPED&quot;; break;
<br>
+#endif
<br>
+#ifdef CLD_WTRAPPED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case CLD_TRAPPED: str = &quot;CLD_TRAPPED&quot;; break;
<br>
+#endif
<br>
+#ifdef CLD_STOPPED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case CLD_STOPPED: str = &quot;CLD_STOPPED&quot;; break;
<br>
+#endif
<br>
+#ifdef CLD_CONTINUED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case CLD_CONTINUED: str = &quot;CLD_CONTINUED&quot;; break;
<br>
+#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;#ifdef SIGPOLL
<br>
@@ -197,6 +223,9 @@
<br>
&nbsp;#ifdef SI_KERNEL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case SI_KERNEL: str = &quot;SI_KERNEL&quot;; break;
<br>
&nbsp;#endif
<br>
+#ifdef SI_UNDEFINED
<br>
+            case SI_UNDEFINED: str = &quot;SI_UNDEFINED&quot;; break;
<br>
+#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
@@ -245,7 +274,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(1, print_buffer, size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fflush(stderr);
<br>
&nbsp;
<br>
-#ifdef __GLIBC__
<br>
+#ifdef HAVE_BACKTRACE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;trace_size = backtrace (trace, 32);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;messages = backtrace_symbols (trace, trace_size);
<br>
&nbsp;
<br>
Index: configure.ac
<br>
===================================================================
<br>
--- configure.ac	(revision 7735)
<br>
+++ configure.ac	(working copy)
<br>
@@ -1043,7 +1043,7 @@
<br>
&nbsp;ompi_show_title &quot;Header file tests&quot;
<br>
&nbsp;
<br>
&nbsp;AC_CHECK_HEADERS([alloca.h aio.h arpa/inet.h dirent.h \
<br>
-    dlfcn.h execinfo.h err.h fcntl.h inttypes.h libgen.h \
<br>
+    dlfcn.h execinfo.h err.h fcntl.h inttypes.h libgen.h libutil.h \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;net/if.h netdb.h netinet/in.h netinet/tcp.h \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;poll.h pthread.h pty.h pwd.h sched.h stdint.h \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;string.h strings.h stropts.h sys/fcntl.h sys/ipc.h \
<br>
@@ -1202,6 +1202,35 @@
<br>
&nbsp;AC_CHECK_FUNCS([sched_yield])
<br>
&nbsp;
<br>
&nbsp;#
<br>
+# FreeBSD has backtrace in -lexecinfo.  Can't use a simple AC_CHECK_LIB,
<br>
+# though, because Linux has backtrace in glic (so linking in libexecinfo
<br>
+# will &quot;find&quot; backtrace, even though it would have been found anyway
<br>
+# -- so -lexecinfo would be useless [and potentially harmful?] in this
<br>
+# case).
<br>
+# 
<br>
+
<br>
+AC_MSG_CHECKING([if we need -lexecinfo for backtrace])
<br>
+AC_LINK_IFELSE(AC_LANG_PROGRAM([[extern char *backtrace;]],
<br>
+[[char *bar = backtrace;]]),
<br>
+[MSG=no],[MSG=not_found])
<br>
+if test &quot;$MSG&quot; = &quot;not_found&quot;; then
<br>
+    LIBS_save=&quot;$LIBS&quot;
<br>
+    LIBS=&quot;$LIBS -lexecinfo&quot;
<br>
+    AC_LINK_IFELSE(AC_LANG_PROGRAM([[extern char *backtrace;]],
<br>
+[[char *bar = backtrace;]]),
<br>
+[MSG=yes],[MSG=not_found])
<br>
+    if test &quot;$MSG&quot; = &quot;not_found&quot;; then
<br>
+        LIBS=&quot;$LIBS_save&quot;
<br>
+    fi
<br>
+fi
<br>
+AC_MSG_RESULT([$MSG])
<br>
+
<br>
+# see if we actually have backtrace.  Use AC_CHECK_FUNCS so that it
<br>
+# does the glibs &quot;not implemented&quot; check.  Will use the current LIBS,
<br>
+# so will check in -lexecinfo if we decided we needed it above
<br>
+AC_CHECK_FUNCS([backtrace])
<br>
+
<br>
+#
<br>
&nbsp;# See if we need the math library explicitly linked in
<br>
&nbsp;#
<br>
&nbsp;
<br>
Index: orte/mca/iof/base/iof_base_setup.c
<br>
===================================================================
<br>
--- orte/mca/iof/base/iof_base_setup.c	(revision 7735)
<br>
+++ orte/mca/iof/base/iof_base_setup.c	(working copy)
<br>
@@ -47,6 +47,9 @@
<br>
&nbsp;#  include &lt;termio.h&gt;
<br>
&nbsp;# endif
<br>
&nbsp;#endif
<br>
+#ifdef HAVE_LIBUTIL_H
<br>
+#include &lt;libutil.h&gt;
<br>
+#endif
<br>
&nbsp;
<br>
&nbsp;#include &quot;mca/iof/base/iof_base_setup.h&quot;
<br>
&nbsp;
<br>
<p><pre>
-- 
Any statement of the form &quot;X is the one, true Y&quot; is FALSE.
PGP fingerprint 655D 519C 26A7 82E7 2529  9BF0 5D8E 8BE9 F238 1AD4

</pre>
<p>
<p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="../../att-0445/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0446.php">Jeff Squyres: "Re:  porting guide?"</a>
<li><strong>Previous message:</strong> <a href="0444.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>In reply to:</strong> <a href="0444.php">Brooks Davis: "Re:  porting guide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0446.php">Jeff Squyres: "Re:  porting guide?"</a>
<li><strong>Reply:</strong> <a href="0446.php">Jeff Squyres: "Re:  porting guide?"</a>
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
