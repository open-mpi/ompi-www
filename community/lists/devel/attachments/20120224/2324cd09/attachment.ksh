--- openmpi-1.5.5rc3r26035/opal/include/opal/sys/powerpc/atomic.h~	2012-02-25 01:15:24.550922758 +0000
+++ openmpi-1.5.5rc3r26035/opal/include/opal/sys/powerpc/atomic.h	2012-02-25 02:37:39.229857857 +0000
@@ -117,6 +117,14 @@
  *********************************************************************/
 #if OMPI_GCC_INLINE_ASSEMBLY
 
+#ifdef __xlC__
+/* work-around bizzare xlc bug in which it sign-extends
+   a pointer to a 32-bit signed integer */
+#define OPAL_ASM_ADDR(a) ((uintptr_t)a)
+#else
+#define OPAL_ASM_ADDR(a) (a)
+#endif
+
 static inline int opal_atomic_cmpset_32(volatile int32_t *addr,
                                         int32_t oldval, int32_t newval)
 {
@@ -130,7 +138,7 @@
                          "   bne-    1b         \n\t"
                          "2:"
                          : "=&r" (ret), "=m" (*addr)
-                         : "r" (addr), "r" (oldval), "r" (newval), "m" (*addr)
+                         : "r" OPAL_ASM_ADDR(addr), "r" (oldval), "r" (newval), "m" (*addr)
                          : "cc", "memory");
 
    return (ret == oldval);
@@ -249,7 +257,7 @@
                          "subfic r9,r5,0        \n\t"
                          "adde %0,r9,r5         \n\t"
                          : "=&r" (ret)
-                         : "r"(addr), 
+                         : "r"OPAL_ASM_ADDR(addr), 
                            "m"(oldval), "m"(newval)
                          : "r4", "r5", "r9", "cc", "memory");
     
@@ -297,7 +305,7 @@
                         "     stwcx.  %0, 0, %3    \n\t"
                         "     bne-    1b           \n\t"
                         : "=&r" (t), "=m" (*v)
-                        : "r" (inc), "r" (v), "m" (*v)
+                        : "r" (inc), "r" OPAL_ASM_ADDR(v), "m" (*v)
                         : "cc");
 
    return t;
@@ -314,7 +322,7 @@
                         "     stwcx.  %0,0,%3      \n\t"
                         "     bne-    1b           \n\t"
                         : "=&r" (t), "=m" (*v)
-                        : "r" (dec), "r" (v), "m" (*v)
+                        : "r" (dec), "r" OPAL_ASM_ADDR(v), "m" (*v)
                         : "cc");
 
    return t;
