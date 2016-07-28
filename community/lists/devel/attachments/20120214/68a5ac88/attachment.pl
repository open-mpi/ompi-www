--- openmpi-1.7a1r25913/opal/include/opal/sys/mips/atomic.h	2012-02-13 20:00:06.000000000 -0600
+++ openmpi-1.7a1r25913m/opal/include/opal/sys/mips/atomic.h	2012-02-15 00:23:44.648085811 -0600
@@ -119,7 +119,11 @@
                          ".set reorder          \n"
                          : "=&r"(ret), "=m"(*addr)
                          : "m"(*addr), "r"(oldval), "r"(newval)
-                         : "cc", "memory");
+                         : "cc", "memory"
+#ifdef __PATHCC__
+                           , "at"
+#endif
+			 );
    return (ret == oldval);
 }
 
@@ -168,7 +172,11 @@
                          ".set reorder          \n"
                          : "=&r" (ret), "=m" (*addr)
                          : "m" (*addr), "r" (oldval), "r" (newval)
-                         : "cc", "memory");
+                         : "cc", "memory"
+#ifdef __PATHCC__
+                           , "at"
+#endif
+			 );
 
    return (ret == oldval);
 }
