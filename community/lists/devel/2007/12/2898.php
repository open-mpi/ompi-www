<?
$subject_val = "Re: [OMPI devel] inline asm patch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 17:16:42 2007" -->
<!-- isoreceived="20071220221642" -->
<!-- sent="Thu, 20 Dec 2007 17:16:35 -0500" -->
<!-- isosent="20071220221635" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] inline asm patch" -->
<!-- id="17643370-5581-44B7-A170-6A0623107E98_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9627D45A-DD58-4CE7-AD5A-84B4A2A6F27F_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2007-12-20 17:16:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2899.php">Jeff Squyres: "[OMPI devel] openib xrc CPC minor nit"</a>
<li><strong>Previous message:</strong> <a href="2897.php">George Bosilca: "Re: [OMPI devel] inline asm patch"</a>
<li><strong>In reply to:</strong> <a href="2897.php">George Bosilca: "Re: [OMPI devel] inline asm patch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It turned out to be a little more than that, actually -- the  
<br>
GCC_INLINE_ASSEMBLY was a red-herring:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/17005">https://svn.open-mpi.org/trac/ompi/changeset/17005</a>
<br>
<p>The real problem was that for platforms that fall back to the inline C  
<br>
for opal_atomic_[add|sub]_[32|64], the prototypes were still wrong.   
<br>
The PGI compile picked up on this because it's the only compiler on my  
<br>
platform (EM64T) that falls back to the amd64/atomic.h implementation  
<br>
(which doesn't have inline assembly for these functions) -- all the  
<br>
other compilers use ia32/atomic.h (which *does* have inline assembly  
<br>
for these functions).
<br>
<p><p>On Dec 20, 2007, at 3:33 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I like Ethan's patch. If sometime in the future an enthusiastic  
</span><br>
<span class="quotelev1">&gt; contributor have the time and willingness to write some assembly for  
</span><br>
<span class="quotelev1">&gt; non-GCC compilers, at least we should give him/her the opportunity  
</span><br>
<span class="quotelev1">&gt; to do it in the simplest way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 20, 2007, at 12:50 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I agree -- Ethan's is better.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 20, 2007, at 12:41 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can this logic be up-leveled into sys/atomic.h (see below)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; such that we have it in one atomic.h file instead of nine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; atomic.h files? This would mean that if a given lower-level
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;arch&gt;/atomic.h file defines a non-GCC-style inline atomic,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that file would have to set an OPAL_HAVE_INLINE_* macro, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't see any cases like this currently (there is only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; XLC-style inline assembly in powerpc/atomic.h).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Index: opal/include/opal/sys/atomic.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- opal/include/opal/sys/atomic.h	(revision 17003)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ opal/include/opal/sys/atomic.h	(working copy)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -111,19 +111,27 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **********************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - * Zero these macros in the architecture-specific atomic.h files if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - * need to define their corresponding functions as non-inline  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (e.g.,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - * in an opal/asm/base/&lt;arch&gt;.asm file). These macros allow us to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - * the signatures of the prototype and definition identical.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + * Set or unset these macros in the architecture-specific atomic.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + * files if we need to specify them as inline or non-inline
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *********************************************************************/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#if !OMPI_GCC_INLINE_ASSEMBLY
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_INLINE_ATOMIC_MEM_BARRIER 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_INLINE_ATOMIC_CMPSET_32 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_INLINE_ATOMIC_ADD_32 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_INLINE_ATOMIC_SUB_32 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_INLINE_ATOMIC_CMPSET_64 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_INLINE_ATOMIC_ADD_64 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_INLINE_ATOMIC_SUB_64 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#else
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define OPAL_HAVE_INLINE_ATOMIC_MEM_BARRIER 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define OPAL_HAVE_INLINE_ATOMIC_CMPSET_32 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#define OPAL_HAVE_INLINE_ATOMIC_CMPSET_64 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define OPAL_HAVE_INLINE_ATOMIC_ADD_32 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define OPAL_HAVE_INLINE_ATOMIC_SUB_32 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OPAL_HAVE_INLINE_ATOMIC_CMPSET_64 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define OPAL_HAVE_INLINE_ATOMIC_ADD_64 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define OPAL_HAVE_INLINE_ATOMIC_SUB_64 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **********************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2899.php">Jeff Squyres: "[OMPI devel] openib xrc CPC minor nit"</a>
<li><strong>Previous message:</strong> <a href="2897.php">George Bosilca: "Re: [OMPI devel] inline asm patch"</a>
<li><strong>In reply to:</strong> <a href="2897.php">George Bosilca: "Re: [OMPI devel] inline asm patch"</a>
<!-- nextthread="start" -->
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
