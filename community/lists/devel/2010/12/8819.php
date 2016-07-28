<?
$subject_val = "[OMPI devel] [Patch] Add support for ARMv7-A architecture";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 24 09:23:11 2010" -->
<!-- isoreceived="20101224142311" -->
<!-- sent="Fri, 24 Dec 2010 14:22:56 -0000" -->
<!-- isosent="20101224142256" -->
<!-- name="Leif Lindholm" -->
<!-- email="leif.lindholm_at_[hidden]" -->
<!-- subject="[OMPI devel] [Patch] Add support for ARMv7-A architecture" -->
<!-- id="000001cba376$0f406d20$2dc14760$_at_lindholm@arm.com" -->
<!-- charset="WINDOWS-1252" -->
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
<strong>Subject:</strong> [OMPI devel] [Patch] Add support for ARMv7-A architecture<br>
<strong>From:</strong> Leif Lindholm (<em>leif.lindholm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-24 09:22:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8820.php">Takayuki Seki: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
<li><strong>Previous message:</strong> <a href="8818.php">Shamis, Pavel: "Re: [OMPI devel] async thread in openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8840.php">Jeff Squyres: "Re: [OMPI devel] [Patch] Add support for ARMv7-A architecture"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8840.php">Jeff Squyres: "Re: [OMPI devel] [Patch] Add support for ARMv7-A architecture"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The following patch adds support for the ARMv7-A architecture to opal.
<br>
This includes current processors such as Cortex-A8 and Cortex-A9, as
<br>
well as upcoming Cortex-A5 and Cortex-A15.
<br>
<p>It has been validated on Ubuntu Lucid (10.04) and Maverick (10.10),
<br>
although the former might require some package updates to build from
<br>
checkout.
<br>
<p>The opal/include/opal/sys/arm directory was cloned from powerpc.
<br>
<p>I apologise for what I had to do to generate-asm.pl to get it to build.
<br>
<p>Signed-off-by: leif.lindholm_at_[hidden]
<br>
<p>Index: ompi-trunk/opal/asm/generate-asm.pl
<br>
===================================================================
<br>
--- ompi-trunk/opal/asm/generate-asm.pl	(revision 24191)
<br>
+++ ompi-trunk/opal/asm/generate-asm.pl	(working copy)
<br>
@@ -103,7 +103,11 @@
<br>
&nbsp;}
<br>
&nbsp;
<br>
&nbsp;if ($GNU_STACK == 1) {
<br>
-    print OUTPUT &quot;\n\t.section\t.note.GNU-stack,\&quot;\&quot;,\@progbits\n&quot;;
<br>
+    if ($asmarch eq &quot;ARM&quot;) {
<br>
+        print OUTPUT &quot;\n\t.section\t.note.GNU-stack,\&quot;\&quot;,\%progbits\n&quot;;
<br>
+    } else {
<br>
+        print OUTPUT &quot;\n\t.section\t.note.GNU-stack,\&quot;\&quot;,\@progbits\n&quot;;
<br>
+    }
<br>
&nbsp;}
<br>
&nbsp;
<br>
&nbsp;close(INPUT);
<br>
Index: ompi-trunk/opal/asm/asm-data.txt
<br>
===================================================================
<br>
--- ompi-trunk/opal/asm/asm-data.txt	(revision 24191)
<br>
+++ ompi-trunk/opal/asm/asm-data.txt	(working copy)
<br>
@@ -48,6 +48,15 @@
<br>
&nbsp;
<br>
&nbsp;######################################################################
<br>
&nbsp;#
<br>
+# ARM (ARMv7 and later)
<br>
+#
<br>
+######################################################################
<br>
+
<br>
+ARM	default-.text-.globl-:--.L-#-1-1-1-1-1  arm-linux
<br>
+
<br>
+
<br>
+######################################################################
<br>
+#
<br>
&nbsp;# Intel Pentium Class
<br>
&nbsp;#
<br>
&nbsp;######################################################################
<br>
Index: ompi-trunk/opal/asm/base/ARM.asm
<br>
===================================================================
<br>
--- ompi-trunk/opal/asm/base/ARM.asm	(revision 0)
<br>
+++ ompi-trunk/opal/asm/base/ARM.asm	(revision 0)
<br>
@@ -0,0 +1,150 @@
<br>
+START_FILE
<br>
+	TEXT
<br>
+
<br>
+	ALIGN(4)
<br>
+START_FUNC(opal_atomic_mb)
<br>
+	dmb
<br>
+	bx	lr
<br>
+END_FUNC(opal_atomic_mb)
<br>
+
<br>
+
<br>
+START_FUNC(opal_atomic_rmb)
<br>
+	dmb
<br>
+	bx	lr
<br>
+END_FUNC(opal_atomic_rmb)
<br>
+
<br>
+
<br>
+START_FUNC(opal_atomic_wmb)
<br>
+	dmb
<br>
+	bx	lr
<br>
+END_FUNC(opal_atomic_wmb)
<br>
+
<br>
+
<br>
+START_FUNC(opal_atomic_cmpset_32)
<br>
+	LSYM(1)
<br>
+	ldrex	r3, [r0]
<br>
+	cmp	r1, r3
<br>
+	bne	REFLSYM(2)
<br>
+	strex	r12, r2, [r0]
<br>
+	cmp	r12, #0
<br>
+	bne	REFLSYM(1)
<br>
+	mov	r0, #1
<br>
+	LSYM(2)
<br>
+	movne	r0, #0
<br>
+	bx	lr
<br>
+END_FUNC(opal_atomic_cmpset_32)
<br>
+
<br>
+
<br>
+START_FUNC(opal_atomic_cmpset_acq_32)
<br>
+	LSYM(3)
<br>
+	ldrex	r3, [r0]
<br>
+	cmp	r1, r3
<br>
+	bne	REFLSYM(4)
<br>
+	strex	r12, r2, [r0]
<br>
+	cmp	r12, #0
<br>
+	bne	REFLSYM(3)
<br>
+	dmb
<br>
+	mov	r0, #1
<br>
+	LSYM(4)
<br>
+	movne	r0, #0
<br>
+	bx	lr
<br>
+END_FUNC(opal_atomic_cmpset_acq_32)
<br>
+
<br>
+
<br>
+START_FUNC(opal_atomic_cmpset_rel_32)
<br>
+	LSYM(5)
<br>
+	ldrex	r3, [r0]
<br>
+	cmp	r1, r3
<br>
+	bne	REFLSYM(6)
<br>
+	dmb
<br>
+	strex	r12, r2, [r0]
<br>
+	cmp	r12, #0
<br>
+	bne	REFLSYM(4)
<br>
+	mov	r0, #1
<br>
+	LSYM(6)
<br>
+	movne	r0, #0
<br>
+	bx	lr
<br>
+END_FUNC(opal_atomic_cmpset_rel_32)
<br>
+
<br>
+#START_64BIT
<br>
+START_FUNC(opal_atomic_cmpset_64)
<br>
+	push	{r4-r7}
<br>
+	ldrd	r6, r7, [sp, #16]
<br>
+	LSYM(7)
<br>
+	ldrexd	r4, r5, [r0]
<br>
+	cmp	r4, r2
<br>
+	cmpeq	r5, r3
<br>
+	bne	REFLSYM(8)
<br>
+	strexd	r1, r6, r7, [r0]
<br>
+	cmp	r1, #0
<br>
+	bne	REFLSYM(7)
<br>
+	mov	r0, #1
<br>
+	LSYM(8)
<br>
+	movne	r0, #0
<br>
+	pop	{r4-r7}
<br>
+	bx	lr
<br>
+END_FUNC(opal_atomic_cmpset_64)
<br>
+
<br>
+START_FUNC(opal_atomic_cmpset_acq_64)
<br>
+	push	{r4-r7}
<br>
+	ldrd	r6, r7, [sp, #16]
<br>
+	LSYM(9)
<br>
+	ldrexd	r4, r5, [r0]
<br>
+	cmp	r4, r2
<br>
+	cmpeq	r5, r3
<br>
+	bne	REFLSYM(10)
<br>
+	strexd	r1, r6, r7, [r0]
<br>
+	cmp	r1, #0
<br>
+	bne	REFLSYM(9)
<br>
+	dmb
<br>
+	mov	r0, #1
<br>
+	LSYM(10)
<br>
+	movne	r0, #0
<br>
+	pop	{r4-r7}
<br>
+	bx	lr
<br>
+END_FUNC(opal_atomic_cmpset_acq_64)
<br>
+
<br>
+
<br>
+START_FUNC(opal_atomic_cmpset_rel_64)
<br>
+	push	{r4-r7}
<br>
+	ldrd	r6, r7, [sp, #16]
<br>
+	LSYM(11)
<br>
+	ldrexd	r4, r5, [r0]
<br>
+	cmp	r4, r2
<br>
+	cmpeq	r5, r3
<br>
+	bne	REFLSYM(12)
<br>
+	dmb
<br>
+	strexd	r1, r6, r7, [r0]
<br>
+	cmp	r1, #0
<br>
+	bne	REFLSYM(11)
<br>
+	mov	r0, #1
<br>
+	LSYM(12)
<br>
+	movne	r0, #0
<br>
+	pop	{r4-r7}
<br>
+	bx	lr
<br>
+END_FUNC(opal_atomic_cmpset_rel_64)
<br>
+#END_64BIT
<br>
+
<br>
+
<br>
+START_FUNC(opal_atomic_add_32)
<br>
+	LSYM(13)
<br>
+	ldrex	r2, [r0]
<br>
+	add	r2, r2, r1
<br>
+	strex	r3, r2, [r0]
<br>
+	cmp	r3, #0
<br>
+	bne	REFLSYM(13)
<br>
+	mov	r0, r2
<br>
+	bx	lr
<br>
+END_FUNC(opal_atomic_add_32)
<br>
+
<br>
+
<br>
+START_FUNC(opal_atomic_sub_32)
<br>
+	LSYM(14)
<br>
+	ldrex	r2, [r0]
<br>
+	sub	r2, r2, r1
<br>
+	strex	r3, r2, [r0]
<br>
+	cmp	r3, #0
<br>
+	bne	REFLSYM(14)
<br>
+	mov	r0, r2
<br>
+	bx	lr
<br>
+END_FUNC(opal_atomic_sub_32)
<br>
Index: ompi-trunk/opal/include/opal/sys/arm/atomic.h
<br>
===================================================================
<br>
--- ompi-trunk/opal/include/opal/sys/arm/atomic.h	(revision 0)
<br>
+++ ompi-trunk/opal/include/opal/sys/arm/atomic.h	(revision 0)
<br>
@@ -0,0 +1,227 @@
<br>
+/*
<br>
+ * Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
<br>
+ *                         University Research and Technology
<br>
+ *                         Corporation.  All rights reserved.
<br>
+ * Copyright (c) 2004-2005 The University of Tennessee and The University
<br>
+ *                         of Tennessee Research Foundation.  All rights
<br>
+ *                         reserved.
<br>
+ * Copyright (c) 2004-2005 High Performance Computing Center Stuttgart, 
<br>
+ *                         University of Stuttgart.  All rights reserved.
<br>
+ * Copyright (c) 2004-2005 The Regents of the University of California.
<br>
+ *                         All rights reserved.
<br>
+ * Copyright (c) 2010      IBM Corporation.  All rights reserved.
<br>
+ * Copyright (c) 2010      ARM ltd.  All rights reserved.
<br>
+ * $COPYRIGHT$
<br>
+ * 
<br>
+ * Additional copyrights may follow
<br>
+ * 
<br>
+ * $HEADER$
<br>
+ */
<br>
+
<br>
+#ifndef OMPI_SYS_ARCH_ATOMIC_H
<br>
+#define OMPI_SYS_ARCH_ATOMIC_H 1
<br>
+
<br>
+#if OPAL_WANT_SMP_LOCKS
<br>
+
<br>
+#define MB()  __asm__ __volatile__ (&quot;dmb&quot; : : : &quot;memory&quot;)
<br>
+#define RMB() __asm__ __volatile__ (&quot;dmb&quot; : : : &quot;memory&quot;)
<br>
+#define WMB() __asm__ __volatile__ (&quot;dmb&quot; : : : &quot;memory&quot;)
<br>
+
<br>
+#else
<br>
+
<br>
+#define MB()
<br>
+#define RMB()
<br>
+#define WMB()
<br>
+
<br>
+#endif
<br>
+
<br>
+
<br>
+/**********************************************************************
<br>
+ *
<br>
+ * Define constants for ARMv7
<br>
+ *
<br>
+ *********************************************************************/
<br>
+#define OPAL_HAVE_ATOMIC_MEM_BARRIER 1
<br>
+
<br>
+#define OPAL_HAVE_ATOMIC_CMPSET_32 1
<br>
+
<br>
+#define OPAL_HAVE_ATOMIC_CMPSET_64 1
<br>
+
<br>
+#define OPAL_HAVE_ATOMIC_MATH_32 1
<br>
+#define OPAL_HAVE_ATOMIC_ADD_32 1
<br>
+#define OPAL_HAVE_ATOMIC_SUB_32 1
<br>
+
<br>
+
<br>
+/**********************************************************************
<br>
+ *
<br>
+ * Memory Barriers
<br>
+ *
<br>
+ *********************************************************************/
<br>
+#if OMPI_GCC_INLINE_ASSEMBLY
<br>
+
<br>
+static inline
<br>
+void opal_atomic_mb(void)
<br>
+{
<br>
+    MB();
<br>
+}
<br>
+
<br>
+
<br>
+static inline
<br>
+void opal_atomic_rmb(void)
<br>
+{
<br>
+    RMB();
<br>
+}
<br>
+
<br>
+
<br>
+static inline
<br>
+void opal_atomic_wmb(void)
<br>
+{
<br>
+    WMB();
<br>
+}
<br>
+
<br>
+
<br>
+/**********************************************************************
<br>
+ *
<br>
+ * Atomic math operations
<br>
+ *
<br>
+ *********************************************************************/
<br>
+
<br>
+static inline int opal_atomic_cmpset_32(volatile int32_t *addr,
<br>
+                                        int32_t oldval, int32_t newval)
<br>
+{
<br>
+  int32_t ret, tmp;
<br>
+
<br>
+   __asm__ __volatile__ (
<br>
+                         &quot;1:  ldrex   %0, [%2]        \n&quot;
<br>
+                         &quot;    cmp     %0, %3          \n&quot;
<br>
+                         &quot;    bne     2f              \n&quot;
<br>
+                         &quot;    strex   %1, %4, [%2]    \n&quot;
<br>
+                         &quot;    cmp     %1, #0          \n&quot;
<br>
+                         &quot;    bne     1b              \n&quot;
<br>
+                         &quot;2:                          \n&quot;
<br>
+
<br>
+                         : &quot;=&amp;r&quot; (ret), &quot;=&amp;r&quot; (tmp)
<br>
+                         : &quot;r&quot; (addr), &quot;r&quot; (oldval), &quot;r&quot; (newval)
<br>
+                         : &quot;cc&quot;, &quot;memory&quot;);
<br>
+
<br>
+   return (ret == oldval);
<br>
+}
<br>
+
<br>
+/* these two functions aren't inlined in the non-gcc case because then
<br>
+   there would be two function calls (since neither cmpset_32 nor
<br>
+   atomic_?mb can be inlined).  Instead, we &quot;inline&quot; them by hand in
<br>
+   the assembly, meaning there is one function call overhead instead
<br>
+   of two */
<br>
+static inline int opal_atomic_cmpset_acq_32(volatile int32_t *addr,
<br>
+                                            int32_t oldval, int32_t newval)
<br>
+{
<br>
+    int rc;
<br>
+
<br>
+    rc = opal_atomic_cmpset_32(addr, oldval, newval);
<br>
+    opal_atomic_rmb();
<br>
+
<br>
+    return rc;
<br>
+}
<br>
+
<br>
+
<br>
+static inline int opal_atomic_cmpset_rel_32(volatile int32_t *addr,
<br>
+                                            int32_t oldval, int32_t newval)
<br>
+{
<br>
+    opal_atomic_wmb();
<br>
+    return opal_atomic_cmpset_32(addr, oldval, newval);
<br>
+}
<br>
+
<br>
+
<br>
+static inline int opal_atomic_cmpset_64(volatile int64_t *addr,
<br>
+                                        int64_t oldval, int64_t newval)
<br>
+{
<br>
+  int64_t ret;
<br>
+  int tmp;
<br>
+
<br>
+
<br>
+   __asm__ __volatile__ (
<br>
+                         &quot;1:  ldrexd  %0, %H0, [%2]           \n&quot;
<br>
+                         &quot;    cmp     %0, %3                  \n&quot;
<br>
+                         &quot;    cmpeq   %H0, %H3                \n&quot;
<br>
+                         &quot;    bne     2f                      \n&quot;
<br>
+                         &quot;    strexd  %1, %4, %H4, [%2]       \n&quot;
<br>
+                         &quot;    cmp     %1, #0                  \n&quot;
<br>
+                         &quot;    bne     1b                      \n&quot;
<br>
+                         &quot;2:                                    \n&quot;
<br>
+
<br>
+                         : &quot;=&amp;r&quot; (ret), &quot;=&amp;r&quot; (tmp)
<br>
+                         : &quot;r&quot; (addr), &quot;r&quot; (oldval), &quot;r&quot; (newval)
<br>
+                         : &quot;cc&quot;, &quot;memory&quot;);
<br>
+
<br>
+   return (ret == oldval);
<br>
+}
<br>
+
<br>
+/* these two functions aren't inlined in the non-gcc case because then
<br>
+   there would be two function calls (since neither cmpset_64 nor
<br>
+   atomic_?mb can be inlined).  Instead, we &quot;inline&quot; them by hand in
<br>
+   the assembly, meaning there is one function call overhead instead
<br>
+   of two */
<br>
+static inline int opal_atomic_cmpset_acq_64(volatile int64_t *addr,
<br>
+                                            int64_t oldval, int64_t newval)
<br>
+{
<br>
+    int rc;
<br>
+
<br>
+    rc = opal_atomic_cmpset_64(addr, oldval, newval);
<br>
+    opal_atomic_rmb();
<br>
+
<br>
+    return rc;
<br>
+}
<br>
+
<br>
+
<br>
+static inline int opal_atomic_cmpset_rel_64(volatile int64_t *addr,
<br>
+                                            int64_t oldval, int64_t newval)
<br>
+{
<br>
+    opal_atomic_wmb();
<br>
+    return opal_atomic_cmpset_64(addr, oldval, newval);
<br>
+}
<br>
+
<br>
+
<br>
+static inline int32_t opal_atomic_add_32(volatile int32_t* v, int inc)
<br>
+{
<br>
+   int32_t t;
<br>
+   int tmp;
<br>
+
<br>
+   __asm__ __volatile__(
<br>
+                         &quot;1:  ldrex   %0, [%2]        \n&quot;
<br>
+                         &quot;    add     %0, %0, %3      \n&quot;
<br>
+                         &quot;    strex   %1, %0, [%2]    \n&quot;
<br>
+                         &quot;    cmp     %1, #0          \n&quot;
<br>
+                         &quot;    bne     1b              \n&quot;
<br>
+
<br>
+                         : &quot;=&amp;r&quot; (t), &quot;=&amp;r&quot; (tmp)
<br>
+                         : &quot;r&quot; (v), &quot;r&quot; (inc)
<br>
+                         : &quot;cc&quot;, &quot;memory&quot;);
<br>
+
<br>
+
<br>
+   return t;
<br>
+}
<br>
+
<br>
+
<br>
+static inline int32_t opal_atomic_sub_32(volatile int32_t* v, int dec)
<br>
+{
<br>
+   int32_t t;
<br>
+   int tmp;
<br>
+
<br>
+   __asm__ __volatile__(
<br>
+                         &quot;1:  ldrex   %0, [%2]        \n&quot;
<br>
+                         &quot;    sub     %0, %0, %3      \n&quot;
<br>
+                         &quot;    strex   %1, %0, [%2]    \n&quot;
<br>
+                         &quot;    cmp     %1, #0          \n&quot;
<br>
+                         &quot;    bne     1b              \n&quot;
<br>
+
<br>
+                         : &quot;=&amp;r&quot; (t), &quot;=&amp;r&quot; (tmp)
<br>
+                         : &quot;r&quot; (v), &quot;r&quot; (dec)
<br>
+                         : &quot;cc&quot;, &quot;memory&quot;);
<br>
+
<br>
+   return t;
<br>
+}
<br>
+
<br>
+
<br>
+#endif /* OMPI_GCC_INLINE_ASSEMBLY */
<br>
+
<br>
+#endif /* ! OMPI_SYS_ARCH_ATOMIC_H */
<br>
Index: ompi-trunk/opal/include/opal/sys/arm/timer.h
<br>
===================================================================
<br>
--- ompi-trunk/opal/include/opal/sys/arm/timer.h	(revision 0)
<br>
+++ ompi-trunk/opal/include/opal/sys/arm/timer.h	(revision 0)
<br>
@@ -0,0 +1,33 @@
<br>
+/*
<br>
+ * Copyright (c) 2008      The University of Tennessee and The University
<br>
+ *                         of Tennessee Research Foundation.  All rights
<br>
+ *                         reserved.
<br>
+ * $COPYRIGHT$
<br>
+ * 
<br>
+ * Additional copyrights may follow
<br>
+ * 
<br>
+ * $HEADER$
<br>
+ */
<br>
+
<br>
+#ifndef OMPI_SYS_ARCH_TIMER_H
<br>
+#define OMPI_SYS_ARCH_TIMER_H 1
<br>
+
<br>
+#include &lt;sys/times.h&gt;
<br>
+
<br>
+typedef uint64_t opal_timer_t;
<br>
+
<br>
+static inline opal_timer_t
<br>
+opal_sys_timer_get_cycles(void)
<br>
+{
<br>
+    opal_timer_t ret;
<br>
+    struct tms accurate_clock;
<br>
+
<br>
+    times(&amp;accurate_clock);
<br>
+    ret = accurate_clock.tms_utime + accurate_clock.tms_stime;
<br>
+
<br>
+    return ret;
<br>
+}
<br>
+
<br>
+#define OPAL_HAVE_SYS_TIMER_GET_CYCLES 1
<br>
+
<br>
+#endif /* ! OMPI_SYS_ARCH_TIMER_H */
<br>
Index: ompi-trunk/opal/include/opal/sys/arm/Makefile.am
<br>
===================================================================
<br>
--- ompi-trunk/opal/include/opal/sys/arm/Makefile.am	(revision 0)
<br>
+++ ompi-trunk/opal/include/opal/sys/arm/Makefile.am	(revision 0)
<br>
@@ -0,0 +1,24 @@
<br>
+#
<br>
+# Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
<br>
+#                         University Research and Technology
<br>
+#                         Corporation.  All rights reserved.
<br>
+# Copyright (c) 2004-2008 The University of Tennessee and The University
<br>
+#                         of Tennessee Research Foundation.  All rights
<br>
+#                         reserved.
<br>
+# Copyright (c) 2004-2005 High Performance Computing Center Stuttgart, 
<br>
+#                         University of Stuttgart.  All rights reserved.
<br>
+# Copyright (c) 2004-2005 The Regents of the University of California.
<br>
+#                         All rights reserved.
<br>
+# $COPYRIGHT$
<br>
+# 
<br>
+# Additional copyrights may follow
<br>
+# 
<br>
+# $HEADER$
<br>
+#
<br>
+
<br>
+# This makefile.am does not stand on its own - it is included from
<br>
opal/include/Makefile.am
<br>
+
<br>
+headers += \
<br>
+	opal/sys/arm/atomic.h \
<br>
+	opal/sys/arm/timer.h
<br>
+
<br>
Index: ompi-trunk/opal/include/opal/sys/arm/update.sh
<br>
===================================================================
<br>
--- ompi-trunk/opal/include/opal/sys/arm/update.sh	(revision 0)
<br>
+++ ompi-trunk/opal/include/opal/sys/arm/update.sh	(revision 0)
<br>
@@ -0,0 +1,37 @@
<br>
+#!/bin/sh
<br>
+#
<br>
+# Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
<br>
+#                         University Research and Technology
<br>
+#                         Corporation.  All rights reserved.
<br>
+# Copyright (c) 2004-2005 The University of Tennessee and The University
<br>
+#                         of Tennessee Research Foundation.  All rights
<br>
+#                         reserved.
<br>
+# Copyright (c) 2004-2005 High Performance Computing Center Stuttgart, 
<br>
+#                         University of Stuttgart.  All rights reserved.
<br>
+# Copyright (c) 2004-2005 The Regents of the University of California.
<br>
+#                         All rights reserved.
<br>
+# $COPYRIGHT$
<br>
+# 
<br>
+# Additional copyrights may follow
<br>
+# 
<br>
+# $HEADER$
<br>
+#
<br>
+
<br>
+CFILE=/tmp/opal_atomic_$$.c
<br>
+
<br>
+trap &quot;/bin/rm -f $CFILE; exit 0&quot; 0 1 2 15
<br>
+
<br>
+echo Updating atomic.s from atomic.h using gcc
<br>
+
<br>
+cat &gt; $CFILE&lt;&lt;EOF
<br>
+#include &lt;stdlib.h&gt;
<br>
+#include &lt;inttypes.h&gt;
<br>
+#define static
<br>
+#define inline
<br>
+#define OMPI_GCC_INLINE_ASSEMBLY 1
<br>
+#define OPAL_WANT_SMP_LOCKS 1
<br>
+#include &quot;../architecture.h&quot;
<br>
+#include &quot;atomic.h&quot;
<br>
+EOF
<br>
+
<br>
+gcc -O1 -I. -S $CFILE -o atomic.s
<br>
Index: ompi-trunk/opal/include/opal/sys/atomic.h
<br>
===================================================================
<br>
--- ompi-trunk/opal/include/opal/sys/atomic.h	(revision 24191)
<br>
+++ ompi-trunk/opal/include/opal/sys/atomic.h	(working copy)
<br>
@@ -146,6 +146,8 @@
<br>
&nbsp;#include &quot;opal/sys/alpha/atomic.h&quot;
<br>
&nbsp;#elif OPAL_ASSEMBLY_ARCH == OMPI_AMD64
<br>
&nbsp;#include &quot;opal/sys/amd64/atomic.h&quot;
<br>
+#elif OPAL_ASSEMBLY_ARCH == OMPI_ARM
<br>
+#include &quot;opal/sys/arm/atomic.h&quot;
<br>
&nbsp;#elif OPAL_ASSEMBLY_ARCH == OMPI_IA32
<br>
&nbsp;#include &quot;opal/sys/ia32/atomic.h&quot;
<br>
&nbsp;#elif OPAL_ASSEMBLY_ARCH == OMPI_IA64
<br>
Index: ompi-trunk/opal/include/opal/sys/timer.h
<br>
===================================================================
<br>
--- ompi-trunk/opal/include/opal/sys/timer.h	(revision 24191)
<br>
+++ ompi-trunk/opal/include/opal/sys/timer.h	(working copy)
<br>
@@ -79,6 +79,8 @@
<br>
&nbsp;/* don't include system-level gorp when generating doxygen files */ 
<br>
&nbsp;#elif OPAL_ASSEMBLY_ARCH == OMPI_AMD64
<br>
&nbsp;#include &quot;opal/sys/amd64/timer.h&quot;
<br>
+#elif OPAL_ASSEMBLY_ARCH == OMPI_ARM
<br>
+#include &quot;opal/sys/arm/timer.h&quot;
<br>
&nbsp;#elif OPAL_ASSEMBLY_ARCH == OMPI_IA32
<br>
&nbsp;#include &quot;opal/sys/ia32/timer.h&quot;
<br>
&nbsp;#elif OPAL_ASSEMBLY_ARCH == OMPI_IA64
<br>
Index: ompi-trunk/opal/include/opal/sys/architecture.h
<br>
===================================================================
<br>
--- ompi-trunk/opal/include/opal/sys/architecture.h	(revision 24191)
<br>
+++ ompi-trunk/opal/include/opal/sys/architecture.h	(working copy)
<br>
@@ -36,6 +36,7 @@
<br>
&nbsp;#define OMPI_SPARCV9_32     0061
<br>
&nbsp;#define OMPI_SPARCV9_64     0062
<br>
&nbsp;#define OMPI_MIPS           0070
<br>
+#define OMPI_ARM            0100
<br>
&nbsp;
<br>
&nbsp;/* Formats */
<br>
&nbsp;#define OMPI_DEFAULT        1000  /* standard for given architecture */
<br>
Index: ompi-trunk/opal/config/opal_config_asm.m4
<br>
===================================================================
<br>
--- ompi-trunk/opal/config/opal_config_asm.m4	(revision 24191)
<br>
+++ ompi-trunk/opal/config/opal_config_asm.m4	(working copy)
<br>
@@ -900,6 +900,12 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_GCC_INLINE_ASSIGN='&quot;bis [$]31,[$]31,%0&quot; : &quot;=&amp;r&quot;(ret)'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;
<br>
+        armv7*)
<br>
+            ompi_cv_asm_arch=&quot;ARM&quot;
<br>
+            OPAL_ASM_SUPPORT_64BIT=1
<br>
+            OMPI_GCC_INLINE_ASSIGN='&quot;mov %0, #0&quot; : &quot;=&amp;r&quot;(ret)'
<br>
+            ;;
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mips-*|mips64*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Should really find some way to make sure that we are on
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# a MIPS III machine (r4000 and later)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8820.php">Takayuki Seki: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
<li><strong>Previous message:</strong> <a href="8818.php">Shamis, Pavel: "Re: [OMPI devel] async thread in openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8840.php">Jeff Squyres: "Re: [OMPI devel] [Patch] Add support for ARMv7-A architecture"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8840.php">Jeff Squyres: "Re: [OMPI devel] [Patch] Add support for ARMv7-A architecture"</a>
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
