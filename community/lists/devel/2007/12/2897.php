<?
$subject_val = "Re: [OMPI devel] inline asm patch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 15:33:47 2007" -->
<!-- isoreceived="20071220203347" -->
<!-- sent="Thu, 20 Dec 2007 15:33:38 -0500" -->
<!-- isosent="20071220203338" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] inline asm patch" -->
<!-- id="9627D45A-DD58-4CE7-AD5A-84B4A2A6F27F_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="087E5E6F-8E49-42DD-BDA5-F31164D41ABC_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-20 15:33:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2898.php">Jeff Squyres: "Re: [OMPI devel] inline asm patch"</a>
<li><strong>Previous message:</strong> <a href="2896.php">Jeff Squyres: "Re: [OMPI devel] inline asm patch"</a>
<li><strong>In reply to:</strong> <a href="2896.php">Jeff Squyres: "Re: [OMPI devel] inline asm patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2898.php">Jeff Squyres: "Re: [OMPI devel] inline asm patch"</a>
<li><strong>Reply:</strong> <a href="2898.php">Jeff Squyres: "Re: [OMPI devel] inline asm patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I like Ethan's patch. If sometime in the future an enthusiastic  
<br>
contributor have the time and willingness to write some assembly for  
<br>
non-GCC compilers, at least we should give him/her the opportunity to  
<br>
do it in the simplest way.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 20, 2007, at 12:50 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I agree -- Ethan's is better.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 20, 2007, at 12:41 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can this logic be up-leveled into sys/atomic.h (see below)
</span><br>
<span class="quotelev2">&gt;&gt; such that we have it in one atomic.h file instead of nine
</span><br>
<span class="quotelev2">&gt;&gt; atomic.h files? This would mean that if a given lower-level
</span><br>
<span class="quotelev2">&gt;&gt; &lt;arch&gt;/atomic.h file defines a non-GCC-style inline atomic,
</span><br>
<span class="quotelev2">&gt;&gt; that file would have to set an OPAL_HAVE_INLINE_* macro, but
</span><br>
<span class="quotelev2">&gt;&gt; I don't see any cases like this currently (there is only
</span><br>
<span class="quotelev2">&gt;&gt; XLC-style inline assembly in powerpc/atomic.h).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Index: opal/include/opal/sys/atomic.h
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- opal/include/opal/sys/atomic.h	(revision 17003)
</span><br>
<span class="quotelev2">&gt;&gt; +++ opal/include/opal/sys/atomic.h	(working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -111,19 +111,27 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /
</span><br>
<span class="quotelev2">&gt;&gt; **********************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; - * Zero these macros in the architecture-specific atomic.h files if
</span><br>
<span class="quotelev2">&gt;&gt; we
</span><br>
<span class="quotelev2">&gt;&gt; - * need to define their corresponding functions as non-inline (e.g.,
</span><br>
<span class="quotelev2">&gt;&gt; - * in an opal/asm/base/&lt;arch&gt;.asm file). These macros allow us to
</span><br>
<span class="quotelev2">&gt;&gt; make
</span><br>
<span class="quotelev2">&gt;&gt; - * the signatures of the prototype and definition identical.
</span><br>
<span class="quotelev2">&gt;&gt; - *
</span><br>
<span class="quotelev2">&gt;&gt; + * Set or unset these macros in the architecture-specific atomic.h
</span><br>
<span class="quotelev2">&gt;&gt; + * files if we need to specify them as inline or non-inline
</span><br>
<span class="quotelev2">&gt;&gt; + *
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *********************************************************************/
</span><br>
<span class="quotelev2">&gt;&gt; +#if !OMPI_GCC_INLINE_ASSEMBLY
</span><br>
<span class="quotelev2">&gt;&gt; +#define OPAL_HAVE_INLINE_ATOMIC_MEM_BARRIER 0
</span><br>
<span class="quotelev2">&gt;&gt; +#define OPAL_HAVE_INLINE_ATOMIC_CMPSET_32 0
</span><br>
<span class="quotelev2">&gt;&gt; +#define OPAL_HAVE_INLINE_ATOMIC_ADD_32 0
</span><br>
<span class="quotelev2">&gt;&gt; +#define OPAL_HAVE_INLINE_ATOMIC_SUB_32 0
</span><br>
<span class="quotelev2">&gt;&gt; +#define OPAL_HAVE_INLINE_ATOMIC_CMPSET_64 0
</span><br>
<span class="quotelev2">&gt;&gt; +#define OPAL_HAVE_INLINE_ATOMIC_ADD_64 0
</span><br>
<span class="quotelev2">&gt;&gt; +#define OPAL_HAVE_INLINE_ATOMIC_SUB_64 0
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; #define OPAL_HAVE_INLINE_ATOMIC_MEM_BARRIER 1
</span><br>
<span class="quotelev2">&gt;&gt; #define OPAL_HAVE_INLINE_ATOMIC_CMPSET_32 1
</span><br>
<span class="quotelev2">&gt;&gt; -#define OPAL_HAVE_INLINE_ATOMIC_CMPSET_64 1
</span><br>
<span class="quotelev2">&gt;&gt; #define OPAL_HAVE_INLINE_ATOMIC_ADD_32 1
</span><br>
<span class="quotelev2">&gt;&gt; #define OPAL_HAVE_INLINE_ATOMIC_SUB_32 1
</span><br>
<span class="quotelev2">&gt;&gt; +#define OPAL_HAVE_INLINE_ATOMIC_CMPSET_64 1
</span><br>
<span class="quotelev2">&gt;&gt; #define OPAL_HAVE_INLINE_ATOMIC_ADD_64 1
</span><br>
<span class="quotelev2">&gt;&gt; #define OPAL_HAVE_INLINE_ATOMIC_SUB_64 1
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /
</span><br>
<span class="quotelev2">&gt;&gt; **********************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2897/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2898.php">Jeff Squyres: "Re: [OMPI devel] inline asm patch"</a>
<li><strong>Previous message:</strong> <a href="2896.php">Jeff Squyres: "Re: [OMPI devel] inline asm patch"</a>
<li><strong>In reply to:</strong> <a href="2896.php">Jeff Squyres: "Re: [OMPI devel] inline asm patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2898.php">Jeff Squyres: "Re: [OMPI devel] inline asm patch"</a>
<li><strong>Reply:</strong> <a href="2898.php">Jeff Squyres: "Re: [OMPI devel] inline asm patch"</a>
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
