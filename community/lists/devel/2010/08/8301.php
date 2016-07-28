<?
$subject_val = "Re: [OMPI devel] 1.5rc5 has been posted";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 19 19:40:54 2010" -->
<!-- isoreceived="20100819234054" -->
<!-- sent="Thu, 19 Aug 2010 16:40:49 -0700" -->
<!-- isosent="20100819234049" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5rc5 has been posted" -->
<!-- id="39B5CF6B-3016-4587-A83B-F5E01F87D08A_at_usgs.gov" -->
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
<strong>Date:</strong> 2010-08-19 19:40:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8302.php">Jeff Squyres: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="8300.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>In reply to:</strong> <a href="8284.php">Jeff Squyres: "[OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8311.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The PGI compiler unnecessarily complains (issues a warning) when 0  
<br>
(which it should be automatically converting to the null pointer  
<br>
constant) is an operand in a conditional expression.  For example,  
<br>
there are two instances (lines 444 and 459) in opal/mca/memory/ 
<br>
ptmalloc2/hooks.c:
<br>
<p>444 and 459:  return victim ? BOUNDED_N(victim, sz) : 0;
<br>
<p>PGC-W-0095-Type cast required for this conversion (./hooks.c: 444)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type  (./ 
<br>
hooks.c: 444)
<br>
PGC-W-0095-Type cast required for this conversion (./hooks.c: 459)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type  (./ 
<br>
hooks.c: 459)
<br>
<p>and three instances (lines 3446, 3664, and 3789) in opal/mca/memory/ 
<br>
ptmalloc2/malloc.c:
<br>
<p>3446 and 3664:      ar_ptr = arena_get2(ar_ptr-&gt;next ? ar_ptr : 0,  
<br>
bytes);
<br>
3789:      av = arena_get2(av-&gt;next ? av : 0, sz);
<br>
<p>PGC-W-0095-Type cast required for this conversion (malloc.c: 3446)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type   
<br>
(malloc.c: 3446)
<br>
PGC-W-0095-Type cast required for this conversion (malloc.c: 3664)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type   
<br>
(malloc.c: 3664)
<br>
PGC-W-0095-Type cast required for this conversion (malloc.c: 3789)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type   
<br>
(malloc.c: 3789)
<br>
<p>Replacing 0 with NULL eliminates these warnings.
<br>
<p>Larry Baker
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
<li><strong>Next message:</strong> <a href="8302.php">Jeff Squyres: "Re: [OMPI devel] Fixes to OpenMPI-1.4.2 for PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="8300.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>In reply to:</strong> <a href="8284.php">Jeff Squyres: "[OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8311.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
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
