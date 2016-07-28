<?
$subject_val = "Re: [OMPI devel] inline asm patch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 12:41:58 2007" -->
<!-- isoreceived="20071220174158" -->
<!-- sent="Thu, 20 Dec 2007 12:41:52 -0500" -->
<!-- isosent="20071220174152" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] inline asm patch" -->
<!-- id="20071220174152.GA35710_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F96C7BB4-96BB-4B0A-AF4B-BC35DB68251B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] inline asm patch<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-20 12:41:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2896.php">Jeff Squyres: "Re: [OMPI devel] inline asm patch"</a>
<li><strong>Previous message:</strong> <a href="2894.php">Tang, Changqing: "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process"</a>
<li><strong>In reply to:</strong> <a href="2891.php">Jeff Squyres: "[OMPI devel] inline asm patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2896.php">Jeff Squyres: "Re: [OMPI devel] inline asm patch"</a>
<li><strong>Reply:</strong> <a href="2896.php">Jeff Squyres: "Re: [OMPI devel] inline asm patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Dec/20/2007 08:50:41AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; After Ethan's inline assembly patch (to make the
</span><br>
<span class="quotelev1">&gt; upper-level atomic.h declarations match the lower-level
</span><br>
<span class="quotelev1">&gt; inline definitions -- if they exist), I've had a problem
</span><br>
<span class="quotelev1">&gt; with the PGI compiler on Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I finally tracked down the issue this morning -- it seems
</span><br>
<span class="quotelev1">&gt; that OMPI_GCC_INLINE_ASSEMBLY is 0 for the PGI compiler.
</span><br>
<span class="quotelev1">&gt; Hence, none of the assembly routines are inlined.  The
</span><br>
<span class="quotelev1">&gt; logic for the lower layer to say &quot;these functions aren't
</span><br>
<span class="quotelev1">&gt; inlined&quot; didn't take the value of OMPI_GCC_INLINE_ASSEMBLY
</span><br>
<span class="quotelev1">&gt; into account, so the upper layer was still prefixing the
</span><br>
<span class="quotelev1">&gt; declarations with &quot;static inline&quot;, which led to linker
</span><br>
<span class="quotelev1">&gt; problems later.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The below patch fixes the problem for me, but I wanted to
</span><br>
<span class="quotelev1">&gt; run it by others before committing because it's fairly
</span><br>
<span class="quotelev1">&gt; tangled logic (both inline for easy reading and attached
</span><br>
<span class="quotelev1">&gt; in case my mail client munges the formatting).
</span><br>
<p><p>Can this logic be up-leveled into sys/atomic.h (see below)
<br>
such that we have it in one atomic.h file instead of nine
<br>
atomic.h files? This would mean that if a given lower-level
<br>
&lt;arch&gt;/atomic.h file defines a non-GCC-style inline atomic,
<br>
that file would have to set an OPAL_HAVE_INLINE_* macro, but
<br>
I don't see any cases like this currently (there is only
<br>
XLC-style inline assembly in powerpc/atomic.h).
<br>
<p><p>Index: opal/include/opal/sys/atomic.h
<br>
===================================================================
<br>
--- opal/include/opal/sys/atomic.h	(revision 17003)
<br>
+++ opal/include/opal/sys/atomic.h	(working copy)
<br>
@@ -111,19 +111,27 @@
<br>
&nbsp;
<br>
&nbsp;/**********************************************************************
<br>
&nbsp;&nbsp;*
<br>
- * Zero these macros in the architecture-specific atomic.h files if we
<br>
- * need to define their corresponding functions as non-inline (e.g.,
<br>
- * in an opal/asm/base/&lt;arch&gt;.asm file). These macros allow us to make
<br>
- * the signatures of the prototype and definition identical.
<br>
- * 
<br>
+ * Set or unset these macros in the architecture-specific atomic.h
<br>
+ * files if we need to specify them as inline or non-inline 
<br>
+ *
<br>
&nbsp;&nbsp;*********************************************************************/
<br>
+#if !OMPI_GCC_INLINE_ASSEMBLY
<br>
+#define OPAL_HAVE_INLINE_ATOMIC_MEM_BARRIER 0
<br>
+#define OPAL_HAVE_INLINE_ATOMIC_CMPSET_32 0
<br>
+#define OPAL_HAVE_INLINE_ATOMIC_ADD_32 0
<br>
+#define OPAL_HAVE_INLINE_ATOMIC_SUB_32 0
<br>
+#define OPAL_HAVE_INLINE_ATOMIC_CMPSET_64 0
<br>
+#define OPAL_HAVE_INLINE_ATOMIC_ADD_64 0
<br>
+#define OPAL_HAVE_INLINE_ATOMIC_SUB_64 0
<br>
+#else
<br>
&nbsp;#define OPAL_HAVE_INLINE_ATOMIC_MEM_BARRIER 1
<br>
&nbsp;#define OPAL_HAVE_INLINE_ATOMIC_CMPSET_32 1
<br>
-#define OPAL_HAVE_INLINE_ATOMIC_CMPSET_64 1
<br>
&nbsp;#define OPAL_HAVE_INLINE_ATOMIC_ADD_32 1
<br>
&nbsp;#define OPAL_HAVE_INLINE_ATOMIC_SUB_32 1
<br>
+#define OPAL_HAVE_INLINE_ATOMIC_CMPSET_64 1
<br>
&nbsp;#define OPAL_HAVE_INLINE_ATOMIC_ADD_64 1
<br>
&nbsp;#define OPAL_HAVE_INLINE_ATOMIC_SUB_64 1
<br>
+#endif
<br>
&nbsp;
<br>
&nbsp;/**********************************************************************
<br>
&nbsp;&nbsp;*
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: opal/include/opal/sys/ia32/atomic.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/include/opal/sys/ia32/atomic.h	(revision 16997)
</span><br>
<span class="quotelev1">&gt; +++ opal/include/opal/sys/ia32/atomic.h	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -10,6 +10,7 @@
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2007      Sun Microsystems, Inc.  All rights reserverd.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2007      Cisco Systems, Inc.  All rights reserverd.
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -51,6 +52,21 @@
</span><br>
<span class="quotelev1">&gt;  #undef OPAL_HAVE_INLINE_ATOMIC_CMPSET_64
</span><br>
<span class="quotelev1">&gt;  #define OPAL_HAVE_INLINE_ATOMIC_CMPSET_64 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +/* If we don't have GCC inline assembly, then nothing is inline */
</span><br>
<span class="quotelev1">&gt; +#if !OMPI_GCC_INLINE_ASSEMBLY
</span><br>
<span class="quotelev1">&gt; +#undef OPAL_HAVE_INLINE_ATOMIC_MEM_BARRIER
</span><br>
<span class="quotelev1">&gt; +#define OPAL_HAVE_INLINE_ATOMIC_MEM_BARRIER 0
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#undef OPAL_HAVE_INLINE_ATOMIC_CMPSET_32
</span><br>
<span class="quotelev1">&gt; +#define OPAL_HAVE_INLINE_ATOMIC_CMPSET_32 0
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#undef OPAL_HAVE_INLINE_ATOMIC_ADD_32
</span><br>
<span class="quotelev1">&gt; +#define OPAL_HAVE_INLINE_ATOMIC_ADD_32 0
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#undef OPAL_HAVE_INLINE_ATOMIC_SUB_32
</span><br>
<span class="quotelev1">&gt; +#define OPAL_HAVE_INLINE_ATOMIC_SUB_32 0
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  /**********************************************************************
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * Memory Barriers
</span><br>
<span class="quotelev1">&gt; Index: opal/include/opal/sys/amd64/atomic.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/include/opal/sys/amd64/atomic.h	(revision 16997)
</span><br>
<span class="quotelev1">&gt; +++ opal/include/opal/sys/amd64/atomic.h	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -10,6 +10,7 @@
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2007      Sun Microsystems, Inc.  All rights reserverd.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2007      Cisco Systems, Inc.  All rights reserverd.
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -44,7 +45,18 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #define OPAL_HAVE_ATOMIC_CMPSET_64 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +/* If we don't have GCC inline assembly, then nothing is inline */
</span><br>
<span class="quotelev1">&gt; +#if !OMPI_GCC_INLINE_ASSEMBLY
</span><br>
<span class="quotelev1">&gt; +#undef OPAL_HAVE_INLINE_ATOMIC_CMPSET_32
</span><br>
<span class="quotelev1">&gt; +#define OPAL_HAVE_INLINE_ATOMIC_CMPSET_32 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#undef OPAL_HAVE_INLINE_ATOMIC_CMPSET_64
</span><br>
<span class="quotelev1">&gt; +#define OPAL_HAVE_INLINE_ATOMIC_CMPSET_64 0
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#undef OPAL_HAVE_INLINE_ATOMIC_MEM_BARRIER
</span><br>
<span class="quotelev1">&gt; +#define OPAL_HAVE_INLINE_ATOMIC_MEM_BARRIER 0
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  /**********************************************************************
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * Memory Barriers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2896.php">Jeff Squyres: "Re: [OMPI devel] inline asm patch"</a>
<li><strong>Previous message:</strong> <a href="2894.php">Tang, Changqing: "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process"</a>
<li><strong>In reply to:</strong> <a href="2891.php">Jeff Squyres: "[OMPI devel] inline asm patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2896.php">Jeff Squyres: "Re: [OMPI devel] inline asm patch"</a>
<li><strong>Reply:</strong> <a href="2896.php">Jeff Squyres: "Re: [OMPI devel] inline asm patch"</a>
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
