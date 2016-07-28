diff -ur hwloc-1.3.2rc1-orig/config/hwloc.m4 hwloc-1.3.2rc1/config/hwloc.m4
--- hwloc-1.3.2rc1-orig/config/hwloc.m4	2012-02-07 18:05:24.000000000 -0600
+++ hwloc-1.3.2rc1/config/hwloc.m4	2012-02-08 19:45:49.000000000 -0600
@@ -269,19 +269,39 @@
 
     # make sure the compiler returns an error code when function arg count is wrong,
     # otherwise sched_setaffinity checks may fail
+    HWLOC_STRICT_ARGS_CFLAGS=
+    hwloc_args_check_ok=yes
+    AC_MSG_CHECKING([whether the C compiler rejects function calls with too many arguments])
     AC_COMPILE_IFELSE([AC_LANG_PROGRAM([[
         extern int one_arg(int x);
+        int foo(void) { return one_arg(1, 2); }
+      ]])],
+      [ AC_MSG_RESULT([no])
+        hwloc_args_check_ok=no],
+      [ AC_MSG_RESULT([yes])])
+    AC_MSG_CHECKING([whether the C compiler rejects function calls with too few arguments])
+    AC_COMPILE_IFELSE([AC_LANG_PROGRAM([[
         extern int two_arg(int x, int y);
-        int foo(void) { return one_arg(1, 2) + two_arg(3); }
-    ]])], [
+        int foo(void) { return two_arg(3); }
+      ]])],
+      [ AC_MSG_RESULT([no])
+        hwloc_args_check_ok=no],
+      [ AC_MSG_RESULT([yes])])
+    AS_IF([test "$hwloc_args_check_ok" != "yes"],[
         AC_MSG_WARN([Your C compiler does not consider incorrect argument counts to be a fatal error.])
-        if test "$hwloc_check_compiler_vendor_result" = "ibm"; then
-            AC_MSG_WARN([For XLC you may try appending '-qhalt=-e' to the value of CFLAGS.])
+        case "$hwloc_c_vendor" in
+            ibm)
+                HWLOC_STRICT_ARGS_CFLAGS="-qhalt=e"
+                ;;
+            *)
+                HWLOC_STRICT_ARGS_CFLAGS="FAIL"
+                AC_MSG_WARN([Please report this warning and configure using a different C compiler if possible.])
+                ;;
+        esac
+        AS_IF([test x"$HWLOC_STRICT_ARGS_CFLAGS" != xFAIL],[
+            AC_MSG_WARN([Configure will append '$HWLOC_STRICT_ARGS_CFLAGS' to the value of CFLAGS when needed.])
             AC_MSG_WARN([Alternatively you may configure with a different compiler.])
-        else
-            AC_MSG_WARN([Please report this failure, and configure using a different C compiler if possible.])
-        fi
-        AC_MSG_ERROR([Cannot continue.])
+        ])
     ])
 
     #
@@ -388,7 +408,14 @@
     
     _HWLOC_CHECK_DECL([sched_setaffinity], [
       AC_DEFINE([HWLOC_HAVE_SCHED_SETAFFINITY], [1], [Define to 1 if glibc provides a prototype of sched_setaffinity()])
+      AS_IF([test x"$HWLOC_STRICT_ARGS_CFLAGS" = xFAIL],[
+        AC_MSG_WARN([Support for sched_setaffinity() requires a C compiler which])
+        AC_MSG_WARN([considers incorrect argument counts to be a fatal error.])
+        AC_MSG_ERROR([Cannot continue.])
+      ])
       AC_MSG_CHECKING([for old prototype of sched_setaffinity])
+      tmp_save_CFLAGS="$CFLAGS"
+      CFLAGS="$CFLAGS $HWLOC_STRICT_ARGS_CFLAGS"
       AC_COMPILE_IFELSE([
         AC_LANG_PROGRAM([[
           #define _GNU_SOURCE
@@ -398,6 +425,7 @@
         [AC_DEFINE([HWLOC_HAVE_OLD_SCHED_SETAFFINITY], [1], [Define to 1 if glibc provides the old prototype (without length) of sched_setaffinity()])
          AC_MSG_RESULT([yes])],
         [AC_MSG_RESULT([no])])
+      CFLAGS="$tmp_save_CFLAGS"
     ], , [[
 #define _GNU_SOURCE
 #include <sched.h>
