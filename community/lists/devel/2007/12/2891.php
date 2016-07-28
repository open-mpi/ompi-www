<?
$subject_val = "[OMPI devel] inline asm patch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 08:50:46 2007" -->
<!-- isoreceived="20071220135046" -->
<!-- sent="Thu, 20 Dec 2007 08:50:41 -0500" -->
<!-- isosent="20071220135041" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] inline asm patch" -->
<!-- id="F96C7BB4-96BB-4B0A-AF4B-BC35DB68251B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] inline asm patch<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-20 08:50:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2892.php">Jeff Squyres: "Re: [OMPI devel] Making an embeddable libev"</a>
<li><strong>Previous message:</strong> <a href="2890.php">Peter Wong: "[OMPI devel] Peter Wong/Austin/IBM is out of the office."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2895.php">Ethan Mallove: "Re: [OMPI devel] inline asm patch"</a>
<li><strong>Reply:</strong> <a href="2895.php">Ethan Mallove: "Re: [OMPI devel] inline asm patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After Ethan's inline assembly patch (to make the upper-level atomic.h  
<br>
declarations match the lower-level inline definitions -- if they  
<br>
exist), I've had a problem with the PGI compiler on Linux.
<br>
<p>I finally tracked down the issue this morning -- it seems that  
<br>
OMPI_GCC_INLINE_ASSEMBLY is 0 for the PGI compiler.  Hence, none of  
<br>
the assembly routines are inlined.  The logic for the lower layer to  
<br>
say &quot;these functions aren't inlined&quot; didn't take the value of  
<br>
OMPI_GCC_INLINE_ASSEMBLY into account, so the upper layer was still  
<br>
prefixing the declarations with &quot;static inline&quot;, which led to linker  
<br>
problems later.
<br>
<p>The below patch fixes the problem for me, but I wanted to run it by  
<br>
others before committing because it's fairly tangled logic (both  
<br>
inline for easy reading and attached in case my mail client munges the  
<br>
formatting).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
Index: opal/include/opal/sys/ia32/atomic.h
===================================================================
--- opal/include/opal/sys/ia32/atomic.h	(revision 16997)
+++ opal/include/opal/sys/ia32/atomic.h	(working copy)
@@ -10,6 +10,7 @@
   * Copyright (c) 2004-2005 The Regents of the University of  
California.
   *                         All rights reserved.
   * Copyright (c) 2007      Sun Microsystems, Inc.  All rights  
reserverd.
+ * Copyright (c) 2007      Cisco Systems, Inc.  All rights reserverd.
   * $COPYRIGHT$
   *
   * Additional copyrights may follow
@@ -51,6 +52,21 @@
  #undef OPAL_HAVE_INLINE_ATOMIC_CMPSET_64
  #define OPAL_HAVE_INLINE_ATOMIC_CMPSET_64 0
+/* If we don't have GCC inline assembly, then nothing is inline */
+#if !OMPI_GCC_INLINE_ASSEMBLY
+#undef OPAL_HAVE_INLINE_ATOMIC_MEM_BARRIER
+#define OPAL_HAVE_INLINE_ATOMIC_MEM_BARRIER 0
+
+#undef OPAL_HAVE_INLINE_ATOMIC_CMPSET_32
+#define OPAL_HAVE_INLINE_ATOMIC_CMPSET_32 0
+
+#undef OPAL_HAVE_INLINE_ATOMIC_ADD_32
+#define OPAL_HAVE_INLINE_ATOMIC_ADD_32 0
+
+#undef OPAL_HAVE_INLINE_ATOMIC_SUB_32
+#define OPAL_HAVE_INLINE_ATOMIC_SUB_32 0
+#endif
+
  / 
**********************************************************************
   *
   * Memory Barriers
Index: opal/include/opal/sys/amd64/atomic.h
===================================================================
--- opal/include/opal/sys/amd64/atomic.h	(revision 16997)
+++ opal/include/opal/sys/amd64/atomic.h	(working copy)
@@ -10,6 +10,7 @@
   * Copyright (c) 2004-2005 The Regents of the University of  
California.
   *                         All rights reserved.
   * Copyright (c) 2007      Sun Microsystems, Inc.  All rights  
reserverd.
+ * Copyright (c) 2007      Cisco Systems, Inc.  All rights reserverd.
   * $COPYRIGHT$
   *
   * Additional copyrights may follow
@@ -44,7 +45,18 @@
  #define OPAL_HAVE_ATOMIC_CMPSET_64 1
+/* If we don't have GCC inline assembly, then nothing is inline */
+#if !OMPI_GCC_INLINE_ASSEMBLY
+#undef OPAL_HAVE_INLINE_ATOMIC_CMPSET_32
+#define OPAL_HAVE_INLINE_ATOMIC_CMPSET_32 0
+#undef OPAL_HAVE_INLINE_ATOMIC_CMPSET_64
+#define OPAL_HAVE_INLINE_ATOMIC_CMPSET_64 0
+
+#undef OPAL_HAVE_INLINE_ATOMIC_MEM_BARRIER
+#define OPAL_HAVE_INLINE_ATOMIC_MEM_BARRIER 0
+#endif
+
  / 
**********************************************************************
   *
   * Memory Barriers


</pre>
<p>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2891/inline-asm.patch">inline-asm.patch</a>
</ul>
<!-- attachment="inline-asm.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2892.php">Jeff Squyres: "Re: [OMPI devel] Making an embeddable libev"</a>
<li><strong>Previous message:</strong> <a href="2890.php">Peter Wong: "[OMPI devel] Peter Wong/Austin/IBM is out of the office."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2895.php">Ethan Mallove: "Re: [OMPI devel] inline asm patch"</a>
<li><strong>Reply:</strong> <a href="2895.php">Ethan Mallove: "Re: [OMPI devel] inline asm patch"</a>
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
