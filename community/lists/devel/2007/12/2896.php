<?
$subject_val = "Re: [OMPI devel] inline asm patch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 12:50:37 2007" -->
<!-- isoreceived="20071220175037" -->
<!-- sent="Thu, 20 Dec 2007 12:50:25 -0500" -->
<!-- isosent="20071220175025" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] inline asm patch" -->
<!-- id="087E5E6F-8E49-42DD-BDA5-F31164D41ABC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071220174152.GA35710_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-20 12:50:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2897.php">George Bosilca: "Re: [OMPI devel] inline asm patch"</a>
<li><strong>Previous message:</strong> <a href="2895.php">Ethan Mallove: "Re: [OMPI devel] inline asm patch"</a>
<li><strong>In reply to:</strong> <a href="2895.php">Ethan Mallove: "Re: [OMPI devel] inline asm patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2897.php">George Bosilca: "Re: [OMPI devel] inline asm patch"</a>
<li><strong>Reply:</strong> <a href="2897.php">George Bosilca: "Re: [OMPI devel] inline asm patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I agree -- Ethan's is better.
<br>
<p>George?
<br>
<p><p>On Dec 20, 2007, at 12:41 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Can this logic be up-leveled into sys/atomic.h (see below)
</span><br>
<span class="quotelev1">&gt; such that we have it in one atomic.h file instead of nine
</span><br>
<span class="quotelev1">&gt; atomic.h files? This would mean that if a given lower-level
</span><br>
<span class="quotelev1">&gt; &lt;arch&gt;/atomic.h file defines a non-GCC-style inline atomic,
</span><br>
<span class="quotelev1">&gt; that file would have to set an OPAL_HAVE_INLINE_* macro, but
</span><br>
<span class="quotelev1">&gt; I don't see any cases like this currently (there is only
</span><br>
<span class="quotelev1">&gt; XLC-style inline assembly in powerpc/atomic.h).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: opal/include/opal/sys/atomic.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/include/opal/sys/atomic.h	(revision 17003)
</span><br>
<span class="quotelev1">&gt; +++ opal/include/opal/sys/atomic.h	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -111,19 +111,27 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; / 
</span><br>
<span class="quotelev1">&gt; **********************************************************************
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt; - * Zero these macros in the architecture-specific atomic.h files if  
</span><br>
<span class="quotelev1">&gt; we
</span><br>
<span class="quotelev1">&gt; - * need to define their corresponding functions as non-inline (e.g.,
</span><br>
<span class="quotelev1">&gt; - * in an opal/asm/base/&lt;arch&gt;.asm file). These macros allow us to  
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; - * the signatures of the prototype and definition identical.
</span><br>
<span class="quotelev1">&gt; - *
</span><br>
<span class="quotelev1">&gt; + * Set or unset these macros in the architecture-specific atomic.h
</span><br>
<span class="quotelev1">&gt; + * files if we need to specify them as inline or non-inline
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; *********************************************************************/
</span><br>
<span class="quotelev1">&gt; +#if !OMPI_GCC_INLINE_ASSEMBLY
</span><br>
<span class="quotelev1">&gt; +#define OPAL_HAVE_INLINE_ATOMIC_MEM_BARRIER 0
</span><br>
<span class="quotelev1">&gt; +#define OPAL_HAVE_INLINE_ATOMIC_CMPSET_32 0
</span><br>
<span class="quotelev1">&gt; +#define OPAL_HAVE_INLINE_ATOMIC_ADD_32 0
</span><br>
<span class="quotelev1">&gt; +#define OPAL_HAVE_INLINE_ATOMIC_SUB_32 0
</span><br>
<span class="quotelev1">&gt; +#define OPAL_HAVE_INLINE_ATOMIC_CMPSET_64 0
</span><br>
<span class="quotelev1">&gt; +#define OPAL_HAVE_INLINE_ATOMIC_ADD_64 0
</span><br>
<span class="quotelev1">&gt; +#define OPAL_HAVE_INLINE_ATOMIC_SUB_64 0
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt; #define OPAL_HAVE_INLINE_ATOMIC_MEM_BARRIER 1
</span><br>
<span class="quotelev1">&gt; #define OPAL_HAVE_INLINE_ATOMIC_CMPSET_32 1
</span><br>
<span class="quotelev1">&gt; -#define OPAL_HAVE_INLINE_ATOMIC_CMPSET_64 1
</span><br>
<span class="quotelev1">&gt; #define OPAL_HAVE_INLINE_ATOMIC_ADD_32 1
</span><br>
<span class="quotelev1">&gt; #define OPAL_HAVE_INLINE_ATOMIC_SUB_32 1
</span><br>
<span class="quotelev1">&gt; +#define OPAL_HAVE_INLINE_ATOMIC_CMPSET_64 1
</span><br>
<span class="quotelev1">&gt; #define OPAL_HAVE_INLINE_ATOMIC_ADD_64 1
</span><br>
<span class="quotelev1">&gt; #define OPAL_HAVE_INLINE_ATOMIC_SUB_64 1
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; / 
</span><br>
<span class="quotelev1">&gt; **********************************************************************
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2897.php">George Bosilca: "Re: [OMPI devel] inline asm patch"</a>
<li><strong>Previous message:</strong> <a href="2895.php">Ethan Mallove: "Re: [OMPI devel] inline asm patch"</a>
<li><strong>In reply to:</strong> <a href="2895.php">Ethan Mallove: "Re: [OMPI devel] inline asm patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2897.php">George Bosilca: "Re: [OMPI devel] inline asm patch"</a>
<li><strong>Reply:</strong> <a href="2897.php">George Bosilca: "Re: [OMPI devel] inline asm patch"</a>
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
