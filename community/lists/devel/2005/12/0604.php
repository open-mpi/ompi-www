<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec  8 11:16:30 2005" -->
<!-- isoreceived="20051208161630" -->
<!-- sent="Thu, 8 Dec 2005 11:16:24 -0500" -->
<!-- isosent="20051208161624" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  [PATH] ompi_info doesn't show use_mem_hooks flag" -->
<!-- id="31D2A16B-9901-47E7-B4FA-3D488349572E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20051208160319.GC25651_at_minantech.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-08 11:16:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0605.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0603.php">Galen M. Shipman: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>In reply to:</strong> <a href="0602.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0603.php">Galen M. Shipman: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for catching that.  I'll take a look and commit a fix real  
<br>
soon now.
<br>
<p>Brian
<br>
<p>On Dec 8, 2005, at 11:03 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Dec 08, 2005 at 09:59:46AM -0500, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 8, 2005, at 9:27 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Dec 07, 2005 at 10:40:51AM -0500, Brian Barrett wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hopefully this made some sense.  If not, on to the next round of e-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mails :).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This made allot of sense. What is compiled by default now is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; malloc_hooks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll compile ptmalloc and play with it and may be then will be the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; next
</span><br>
<span class="quotelev3">&gt;&gt;&gt; round :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Further clarification...  All this work was done on the trunk and
</span><br>
<span class="quotelev2">&gt;&gt; probably won't come over to the v1.0 branch in the short term
</span><br>
<span class="quotelev2">&gt;&gt; (definitely not for v1.0.1).  The v1.0 series still defaults to using
</span><br>
<span class="quotelev2">&gt;&gt; the malloc_hooks and all that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I work with trunk here, and I have a problem to run openib with
</span><br>
<span class="quotelev1">&gt; ptmalloc2. It seems ptmalloc2 doesn't define posix_memalign() function
</span><br>
<span class="quotelev1">&gt; and openib uses it, so libc version is called and this doens't work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Included patch solves the problem but perhaps there is other solution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: opal/mca/memory/ptmalloc2/malloc.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/mca/memory/ptmalloc2/malloc.c	(revision 8398)
</span><br>
<span class="quotelev1">&gt; +++ opal/mca/memory/ptmalloc2/malloc.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -5431,12 +5431,11 @@
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -#ifdef _LIBC
</span><br>
<span class="quotelev1">&gt; -# include &lt;sys/param.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;sys/param.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /* We need a wrapper function for one of the additions of POSIX.  */
</span><br>
<span class="quotelev1">&gt;  int
</span><br>
<span class="quotelev1">&gt; -__posix_memalign (void **memptr, size_t alignment, size_t size)
</span><br>
<span class="quotelev1">&gt; +posix_memalign (void **memptr, size_t alignment, size_t size)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    void *mem;
</span><br>
<span class="quotelev1">&gt;    __malloc_ptr_t (*hook) __MALLOC_PMT ((size_t, size_t,
</span><br>
<span class="quotelev1">&gt; @@ -5464,6 +5463,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    return ENOMEM;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; +#ifdef _LIBC
</span><br>
<span class="quotelev1">&gt;  weak_alias (__posix_memalign, posix_memalign)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  strong_alias (__libc_calloc, __calloc) weak_alias (__libc_calloc,  
</span><br>
<span class="quotelev1">&gt; calloc)
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
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
<li><strong>Next message:</strong> <a href="0605.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0603.php">Galen M. Shipman: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>In reply to:</strong> <a href="0602.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0603.php">Galen M. Shipman: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
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
