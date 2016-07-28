Index: opal/event/kqueue.c
===================================================================
--- opal/event/kqueue.c	(revision 18079)
+++ opal/event/kqueue.c	(working copy)
@@ -52,7 +52,17 @@
 #ifdef HAVE_UTIL_H
 #include <util.h>
 #endif
+#ifdef HAVE_SYS_IOCTL_H
+#include <sys/ioctl.h>
+#endif
+#ifdef HAVE_LIBUTIL_H
+#include <libutil.h>
+#endif
+#ifdef HAVE_TERMIOS_H
+#include <termios.h>
+#endif
 
+
 /* Some platforms apparently define the udata field of struct kevent as
  * intptr_t, whereas others define it as void*.  There doesn't seem to be an
  * easy way to tell them apart via autoconf, so we need to use OS macros. */
