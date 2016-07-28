<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec  8 11:04:16 2005" -->
<!-- isoreceived="20051208160416" -->
<!-- sent="Thu, 8 Dec 2005 18:03:19 +0200" -->
<!-- isosent="20051208160319" -->
<!-- name="Gleb Natapov" -->
<!-- email="gleb_at_[hidden]" -->
<!-- subject="Re:  [PATH] ompi_info doesn't show use_mem_hooks flag" -->
<!-- id="20051208160319.GC25651_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BBB5B8B6-C257-49DF-9294-060A1AC3EB3F_at_open-mpi.org" -->
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
<strong>From:</strong> Gleb Natapov (<em>gleb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-08 11:03:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0603.php">Galen M. Shipman: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Previous message:</strong> <a href="0601.php">Brian Barrett: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>In reply to:</strong> <a href="0601.php">Brian Barrett: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0604.php">Brian Barrett: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Reply:</strong> <a href="0604.php">Brian Barrett: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Dec 08, 2005 at 09:59:46AM -0500, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Dec 8, 2005, at 9:27 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Dec 07, 2005 at 10:40:51AM -0500, Brian Barrett wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hopefully this made some sense.  If not, on to the next round of e-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mails :).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; This made allot of sense. What is compiled by default now is  
</span><br>
<span class="quotelev2">&gt; &gt; malloc_hooks
</span><br>
<span class="quotelev2">&gt; &gt; I'll compile ptmalloc and play with it and may be then will be the  
</span><br>
<span class="quotelev2">&gt; &gt; next
</span><br>
<span class="quotelev2">&gt; &gt; round :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Further clarification...  All this work was done on the trunk and  
</span><br>
<span class="quotelev1">&gt; probably won't come over to the v1.0 branch in the short term  
</span><br>
<span class="quotelev1">&gt; (definitely not for v1.0.1).  The v1.0 series still defaults to using  
</span><br>
<span class="quotelev1">&gt; the malloc_hooks and all that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
I work with trunk here, and I have a problem to run openib with
<br>
ptmalloc2. It seems ptmalloc2 doesn't define posix_memalign() function
<br>
and openib uses it, so libc version is called and this doens't work.
<br>
<p>Included patch solves the problem but perhaps there is other solution.
<br>
<p>Index: opal/mca/memory/ptmalloc2/malloc.c
<br>
===================================================================
<br>
--- opal/mca/memory/ptmalloc2/malloc.c	(revision 8398)
<br>
+++ opal/mca/memory/ptmalloc2/malloc.c	(working copy)
<br>
@@ -5431,12 +5431,11 @@
<br>
&nbsp;*/
<br>
&nbsp;
<br>
&nbsp;
<br>
-#ifdef _LIBC
<br>
-# include &lt;sys/param.h&gt;
<br>
+#include &lt;sys/param.h&gt;
<br>
&nbsp;
<br>
&nbsp;/* We need a wrapper function for one of the additions of POSIX.  */
<br>
&nbsp;int
<br>
-__posix_memalign (void **memptr, size_t alignment, size_t size)
<br>
+posix_memalign (void **memptr, size_t alignment, size_t size)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;void *mem;
<br>
&nbsp;&nbsp;&nbsp;__malloc_ptr_t (*hook) __MALLOC_PMT ((size_t, size_t,
<br>
@@ -5464,6 +5463,7 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;return ENOMEM;
<br>
&nbsp;}
<br>
+#ifdef _LIBC
<br>
&nbsp;weak_alias (__posix_memalign, posix_memalign)
<br>
&nbsp;
<br>
&nbsp;strong_alias (__libc_calloc, __calloc) weak_alias (__libc_calloc, calloc)
<br>
<pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0603.php">Galen M. Shipman: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Previous message:</strong> <a href="0601.php">Brian Barrett: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>In reply to:</strong> <a href="0601.php">Brian Barrett: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0604.php">Brian Barrett: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Reply:</strong> <a href="0604.php">Brian Barrett: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
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
