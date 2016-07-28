<?
$subject_val = "Re: [OMPI devel] 1.5rc5 has been posted";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 23 20:29:27 2010" -->
<!-- isoreceived="20100824002927" -->
<!-- sent="Mon, 23 Aug 2010 17:29:22 -0700" -->
<!-- isosent="20100824002922" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5rc5 has been posted" -->
<!-- id="9B2147F7-757D-401B-8593-FAD9A08FC460_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E90B71C7-2B75-4613-9F41-E6D0F2939F61_at_cisco.com" -->
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
<strong>Date:</strong> 2010-08-23 20:29:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8312.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8310.php">Joshua Hursey: "Re: [OMPI devel] Question on MCA_BASE_METADATA_PARAM_NONE"</a>
<li><strong>In reply to:</strong> <a href="8284.php">Jeff Squyres: "[OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8419.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Reply:</strong> <a href="8419.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The PGI C compiler complains (issues a warning) for the redefinition  
<br>
of the assert macro in opal/mca/memory/ptmalloc2/malloc.c:
<br>
<p>Making all in mca/memory/ptmalloc2
<br>
make[2]: Entering directory `/home/baker/openmpi-1.5rc5/opal/mca/ 
<br>
memory/ptmalloc2'
<br>
&nbsp;&nbsp;&nbsp;CC     opal_ptmalloc2_component.lo
<br>
&nbsp;&nbsp;&nbsp;CC     opal_ptmalloc2_munmap.lo
<br>
&nbsp;&nbsp;&nbsp;CC     malloc.lo
<br>
PGC-W-0221-Redefinition of symbol assert (/usr/include/assert.h: 51)
<br>
PGC-W-0258-Argument 1 in macro assert is not identical to previous  
<br>
definition (/usr/include/assert.h: 51)
<br>
<p>FYI.  assert.h is an unusual include file -- it does not use an ifdef  
<br>
guard macro in the usual way, but undef's assert if the guard macro is  
<br>
defined (NOT if assert is defined, which is the root cause of this  
<br>
warning), define's the guard macro, then (re)define's assert() based  
<br>
on the current value of NDEBUG.
<br>
<p>opal/mca/memory/ptmalloc2/malloc.c did not change from OpenMPI 1.4.2.   
<br>
malloc.c include's opal/mca/memory/ptmalloc2/hooks.c, which did change  
<br>
in OpenMPI 1.5rc5.  hooks.c indirectly include's &lt;assert.h&gt; through  
<br>
opal/mca/base/mca_base_param.h.  This is where the warning occurs.
<br>
<p>malloc.c define's its own assert macro in lines 364-369:
<br>
<p>364 #if MALLOC_DEBUG
<br>
365 #include &lt;assert.h&gt;
<br>
366 #else
<br>
367 #undef assert
<br>
368 #define assert(x) ((void)0)
<br>
369 #endif
<br>
<p>The warning occurs because the definition of assert in line 368 is not  
<br>
the same as the definition in &lt;assert.h&gt;:
<br>
<p># define assert(expr)           (__ASSERT_VOID_CAST (0))
<br>
<p>However, there is no reason to define assert here -- the only code in  
<br>
malloc.c that needs assert is already inside an #if ! MALLOC_DEBUG  
<br>
conditional at line 2450.
<br>
<p>The fix is to delete lines 364-396 in opal/mca/memory/ptmalloc2/ 
<br>
malloc.c and move the #include &lt;assert.h&gt; to be inside the conditional  
<br>
between lines 2459 and 2461:
<br>
<p>2459 #else
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;alloc.h&gt;
<br>
<p>2461 #define check_chunk(A,P)              do_check_chunk(A,P)
<br>
<p><p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On Aug 17, 2010, at 2:18 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; We still have one known possible regression:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/ticket/2530">https://svn.open-mpi.org/trac/ompi/ticket/2530</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But we posted rc5 anyway (there's a bunch of stuff that has been  
</span><br>
<span class="quotelev1">&gt; pending for a while that is now in).  Please test!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.5/">http://www.open-mpi.org/software/ompi/v1.5/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="8312.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8310.php">Joshua Hursey: "Re: [OMPI devel] Question on MCA_BASE_METADATA_PARAM_NONE"</a>
<li><strong>In reply to:</strong> <a href="8284.php">Jeff Squyres: "[OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8419.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Reply:</strong> <a href="8419.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
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
