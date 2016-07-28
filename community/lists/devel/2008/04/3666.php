<?
$subject_val = "[OMPI devel] Build failure on FreeBSD 7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  4 19:34:45 2008" -->
<!-- isoreceived="20080404233445" -->
<!-- sent="Fri, 04 Apr 2008 16:34:47 -0700" -->
<!-- isosent="20080404233447" -->
<!-- name="Karol Mroz" -->
<!-- email="mroz.karol_at_[hidden]" -->
<!-- subject="[OMPI devel] Build failure on FreeBSD 7" -->
<!-- id="47F6BB17.8030808_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Build failure on FreeBSD 7<br>
<strong>From:</strong> Karol Mroz (<em>mroz.karol_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-04 19:34:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3667.php">Karol Mroz: "[OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Previous message:</strong> <a href="3665.php">Ralph H Castain: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone... it's been some time since I posted here. I pulled the 
<br>
latest svn revision (18079) and had some trouble building Open MPI on a 
<br>
FreeBSD 7 machine (i386).
<br>
<p>Make failed when compiling opal/event/kqueue.c. It appears that freebsd 
<br>
needs sys/types.h, sys/ioctl.h, termios.h and libutil.h included in 
<br>
order to reference openpty(). I added ifdef/includes for these header 
<br>
files into kqueue.c and managed to build. Note that I also tried the 
<br>
latest nightly tarball. The tarball build actually succeeded without any 
<br>
changes. Curious if anyone has experienced this type of behavior? A 
<br>
colleague of mine mentioned it could be a FreeBSD autotools issue?
<br>
<p>Although builds were successful (with modification for the svn build, 
<br>
and without modification for the nightly tarball), I tried running a 
<br>
simple app locally with 2 processes using the TCP BTL that does a 
<br>
non-blocking send/recv. The app simply hung. After attaching gdb to one 
<br>
of the 2 processes, the console output (not gdb) reported the following 
<br>
output:
<br>
<p>[warn] kq_init: detected broken kqueue (failed add); not using error 4 
<br>
(Interrupted system call)
<br>
: Interrupted system call
<br>
<p>I'm including the diff of kqueue.c here for completeness. If anyone 
<br>
requires any further information, please let me know.
<br>
<p>Thanks.
<br>
<pre>
-- 
Karol

</pre>
<p>
Index: opal/event/kqueue.c
<br>
===================================================================
<br>
--- opal/event/kqueue.c	(revision 18079)
<br>
+++ opal/event/kqueue.c	(working copy)
<br>
@@ -52,7 +52,17 @@
<br>
&nbsp;#ifdef HAVE_UTIL_H
<br>
&nbsp;#include &lt;util.h&gt;
<br>
&nbsp;#endif
<br>
+#ifdef HAVE_SYS_IOCTL_H
<br>
+#include &lt;sys/ioctl.h&gt;
<br>
+#endif
<br>
+#ifdef HAVE_LIBUTIL_H
<br>
+#include &lt;libutil.h&gt;
<br>
+#endif
<br>
+#ifdef HAVE_TERMIOS_H
<br>
+#include &lt;termios.h&gt;
<br>
+#endif
<br>
&nbsp;
<br>
+
<br>
&nbsp;/* Some platforms apparently define the udata field of struct kevent as
<br>
&nbsp;&nbsp;* intptr_t, whereas others define it as void*.  There doesn't seem to be an
<br>
&nbsp;&nbsp;* easy way to tell them apart via autoconf, so we need to use OS macros. */
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3667.php">Karol Mroz: "[OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Previous message:</strong> <a href="3665.php">Ralph H Castain: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
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
