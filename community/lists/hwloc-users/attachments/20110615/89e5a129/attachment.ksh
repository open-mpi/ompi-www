diff -ru config/hwloc_internal.m4.orig config/hwloc_internal.m4
--- config/hwloc_internal.m4.orig	2011-06-15 13:13:19.000000000 -0700
+++ config/hwloc_internal.m4	2011-06-15 17:36:45.000000000 -0700
@@ -261,14 +261,24 @@
     ])
     hwloc_old_LIBS="$LIBS"
     LIBS=
-    AC_CHECK_HEADERS([ncurses.h curses.h], [
+    AC_CHECK_HEADERS([curses.h], [
       AC_CHECK_HEADERS([term.h], [
-        AC_SEARCH_LIBS([tparm], [termcap ncursesw ncurses curses], [
+        AC_SEARCH_LIBS([tparm], [termcap curses ncursesw ncurses], [
             AC_SUBST([HWLOC_TERMCAP_LIBS], ["$LIBS"])
             AC_DEFINE([HWLOC_HAVE_LIBTERMCAP], [1],
                       [Define to 1 if you have a library providing the termcap interface])
           ])
       ], [], [[#include <curses.h>]])
+    ], [
+      AC_CHECK_HEADERS([ncurses.h], [
+        AC_CHECK_HEADERS([term.h], [
+          AC_SEARCH_LIBS([tparm], [termcap ncursesw ncurses curses], [
+              AC_SUBST([HWLOC_TERMCAP_LIBS], ["$LIBS"])
+              AC_DEFINE([HWLOC_HAVE_LIBTERMCAP], [1],
+                        [Define to 1 if you have a library providing the termcap interface])
+            ])
+      ], [], [[#include <curses.h>]])
+      ])
     ])
     LIBS="$hwloc_old_LIBS"
     unset hwloc_old_LIBS
