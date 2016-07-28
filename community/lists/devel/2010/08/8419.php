<?
$subject_val = "Re: [OMPI devel] 1.5rc5 has been posted";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 30 20:26:07 2010" -->
<!-- isoreceived="20100831002607" -->
<!-- sent="Mon, 30 Aug 2010 17:26:02 -0700" -->
<!-- isosent="20100831002602" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5rc5 has been posted" -->
<!-- id="D52E2F02-C748-4563-836F-C87B120B7E0A_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9B2147F7-757D-401B-8593-FAD9A08FC460_at_usgs.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5rc5 has been posted<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-30 20:26:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8420.php">Larry Baker: "[OMPI devel] Fwd:  1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8418.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>In reply to:</strong> <a href="8311.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8312.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The fix I posted in <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8311.php">http://www.open-mpi.org/community/lists/devel/2010/08/8311.php</a> 
<br>
&nbsp;&nbsp;for the Redefinition of symbol assert causes a link failure of  
<br>
opal_wrapper.  This is because there are assert() calls in opal/mca/ 
<br>
memory/ptmalloc2/arena.c, which is included in opal/mca/memory/ 
<br>
ptmalloc2/malloc.c before the conditional on MALLOC_DEBUG, which is  
<br>
where I moved #include &lt;assert.h&gt;.  arena.c does not contain its own  
<br>
#include &lt;assert.h&gt;.  I changed the patch to opal/mca/memory/ptmalloc2/ 
<br>
malloc.c to define assert where it was before, but in such a way that  
<br>
it always uses the system &lt;assert.h&gt; header file to define the assert  
<br>
macro.
<br>
<p>In opal/mca/memory/ptmalloc2/malloc.c, change lines 364-369 from:
<br>
<p><span class="quotelev1">&gt; #if MALLOC_DEBUG
</span><br>
<span class="quotelev1">&gt; #include &lt;assert.h&gt;
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; #undef assert
</span><br>
<span class="quotelev1">&gt; #define assert(x) ((void)0)
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<p>to:
<br>
<p><span class="quotelev1">&gt; #if MALLOC_DEBUG &amp;&amp; defined( NDEBUG )
</span><br>
<span class="quotelev1">&gt; #error -DMALLOC_DEBUG is inconsistent with -DNDEBUG
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;assert.h&gt;
</span><br>
<p>The reason the conditional uses the value of MALLOC_DEBUG, but  
<br>
defined( NDEBUG ), is that the code that depends on MALLOC_DEBUG uses  
<br>
#if MALLOC_DEBUG conditionals, while &lt;assert.h&gt; uses #ifdef NDEBUG to  
<br>
define the assert macro.  I used the same semantics to detect the  
<br>
inconsistency between MALLOC_DEBUG and NDEBUG.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On Aug 23, 2010, at 5:29 PM, Larry Baker wrote:
<br>
<p><span class="quotelev1">&gt; The PGI C compiler complains (issues a warning) for the redefinition  
</span><br>
<span class="quotelev1">&gt; of the assert macro in opal/mca/memory/ptmalloc2/malloc.c:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in mca/memory/ptmalloc2
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/baker/openmpi-1.5rc5/opal/mca/ 
</span><br>
<span class="quotelev1">&gt; memory/ptmalloc2'
</span><br>
<span class="quotelev1">&gt;  CC     opal_ptmalloc2_component.lo
</span><br>
<span class="quotelev1">&gt;  CC     opal_ptmalloc2_munmap.lo
</span><br>
<span class="quotelev1">&gt;  CC     malloc.lo
</span><br>
<span class="quotelev1">&gt; PGC-W-0221-Redefinition of symbol assert (/usr/include/assert.h: 51)
</span><br>
<span class="quotelev1">&gt; PGC-W-0258-Argument 1 in macro assert is not identical to previous  
</span><br>
<span class="quotelev1">&gt; definition (/usr/include/assert.h: 51)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FYI.  assert.h is an unusual include file -- it does not use an  
</span><br>
<span class="quotelev1">&gt; ifdef guard macro in the usual way, but undef's assert if the guard  
</span><br>
<span class="quotelev1">&gt; macro is defined (NOT if assert is defined, which is the root cause  
</span><br>
<span class="quotelev1">&gt; of this warning), define's the guard macro, then (re)define's  
</span><br>
<span class="quotelev1">&gt; assert() based on the current value of NDEBUG.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal/mca/memory/ptmalloc2/malloc.c did not change from OpenMPI  
</span><br>
<span class="quotelev1">&gt; 1.4.2.  malloc.c include's opal/mca/memory/ptmalloc2/hooks.c, which  
</span><br>
<span class="quotelev1">&gt; did change in OpenMPI 1.5rc5.  hooks.c indirectly include's  
</span><br>
<span class="quotelev1">&gt; &lt;assert.h&gt; through opal/mca/base/mca_base_param.h.  This is where  
</span><br>
<span class="quotelev1">&gt; the warning occurs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; malloc.c define's its own assert macro in lines 364-369:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 364 #if MALLOC_DEBUG
</span><br>
<span class="quotelev1">&gt; 365 #include &lt;assert.h&gt;
</span><br>
<span class="quotelev1">&gt; 366 #else
</span><br>
<span class="quotelev1">&gt; 367 #undef assert
</span><br>
<span class="quotelev1">&gt; 368 #define assert(x) ((void)0)
</span><br>
<span class="quotelev1">&gt; 369 #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The warning occurs because the definition of assert in line 368 is  
</span><br>
<span class="quotelev1">&gt; not the same as the definition in &lt;assert.h&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # define assert(expr)           (__ASSERT_VOID_CAST (0))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, there is no reason to define assert here -- the only code  
</span><br>
<span class="quotelev1">&gt; in malloc.c that needs assert is already inside an #if !  
</span><br>
<span class="quotelev1">&gt; MALLOC_DEBUG conditional at line 2450.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The fix is to delete lines 364-396 in opal/mca/memory/ptmalloc2/ 
</span><br>
<span class="quotelev1">&gt; malloc.c and move the #include &lt;assert.h&gt; to be inside the  
</span><br>
<span class="quotelev1">&gt; conditional between lines 2459 and 2461:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2459 #else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     #include &lt;alloc.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2461 #define check_chunk(A,P)              do_check_chunk(A,P)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Larry Baker
</span><br>
<span class="quotelev1">&gt; US Geological Survey
</span><br>
<span class="quotelev1">&gt; 650-329-5608
</span><br>
<span class="quotelev1">&gt; baker_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 17, 2010, at 2:18 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We still have one known possible regression:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/2530">https://svn.open-mpi.org/trac/ompi/ticket/2530</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But we posted rc5 anyway (there's a bunch of stuff that has been  
</span><br>
<span class="quotelev2">&gt;&gt; pending for a while that is now in).  Please test!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/software/ompi/v1.5/">http://www.open-mpi.org/software/ompi/v1.5/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8420.php">Larry Baker: "[OMPI devel] Fwd:  1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8418.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>In reply to:</strong> <a href="8311.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8312.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
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
