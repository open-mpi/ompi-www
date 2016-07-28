<?
$subject_val = "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  4 17:18:18 2009" -->
<!-- isoreceived="20090204221818" -->
<!-- sent="Wed, 4 Feb 2009 17:18:12 -0500" -->
<!-- isosent="20090204221812" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV" -->
<!-- id="5BD3FD41-E0B1-41D0-9058-50EF0B744577_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="28E36541-9E41-4D7F-AE49-8040E9A7FE06_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-04 17:18:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5373.php">Eugene Loh: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>Previous message:</strong> <a href="5371.php">Jeff Squyres: "[OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>In reply to:</strong> <a href="5371.php">Jeff Squyres: "[OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5373.php">Eugene Loh: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I forgot to mention -- here's a hacked up proof-of-concept that shows  
<br>
exactly what I'm talking about:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/fortran/rev/9880d70927cc">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/fortran/rev/9880d70927cc</a>
<br>
<p><p><p>On Feb 4, 2009, at 5:03 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Have Fortran MPI_SEND/MPI_RECV directly call the corresponding  
</span><br>
<span class="quotelev1">&gt; PML functions instead of the C MPI_Send/MPI_Recv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: Slightly optimize the blocking send/receive in Fortran (i.e.,  
</span><br>
<span class="quotelev1">&gt; remove a function call)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: ompi/mpi/f77/*.c -- possibly add an --enable switch to  
</span><br>
<span class="quotelev1">&gt; configure to enable/disable this behavior
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHEN: For OMPI v1.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Tuesday teleconf, 17 Feb 2009
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Taking some inspiration from NEC MPI, it might be useful to remove  
</span><br>
<span class="quotelev1">&gt; an extra function call from some common Fortran MPI functions (I'm  
</span><br>
<span class="quotelev1">&gt; specifically proposing MPI_SEND/MPI_RECV, but others could be done  
</span><br>
<span class="quotelev1">&gt; as well).  Specifically, instead of having the Fortran MPI_SEND/ 
</span><br>
<span class="quotelev1">&gt; MPI_RECV call the C versions of MPI_Send/MPI_Recv, they could just  
</span><br>
<span class="quotelev1">&gt; do [almost] exactly the same thing as the C versions: error checking  
</span><br>
<span class="quotelev1">&gt; on the MPI parameters and calling the PML back-end functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The net performance win for this is likely very small.  However,  
</span><br>
<span class="quotelev1">&gt; this idea has been on my to-do list for forever, so I thought I'd  
</span><br>
<span class="quotelev1">&gt; ask if people cared/objected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Benefit
</span><br>
<span class="quotelev1">&gt; - Remove a function call from the critical performance path;  
</span><br>
<span class="quotelev1">&gt; possibly save a little latency
</span><br>
<span class="quotelev1">&gt; Drawback
</span><br>
<span class="quotelev1">&gt; - Duplicate some code (but this code rarely/never changes)
</span><br>
<span class="quotelev1">&gt; - May violate MPI profiling libraries that assume that the Fortran  
</span><br>
<span class="quotelev1">&gt; MPI API functions call the C MPI API functions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Granted, on the NEC platform, function calls are *VERY* expensive --  
</span><br>
<span class="quotelev1">&gt; so having their Fortran MPI API functions directly call their back- 
</span><br>
<span class="quotelev1">&gt; end functions makes much more sense than calling the C API  
</span><br>
<span class="quotelev1">&gt; functions.  On the OS's and platforms that OMPI supports, we'll  
</span><br>
<span class="quotelev1">&gt; likely see a much smaller benefit (indeed, its effects may only be  
</span><br>
<span class="quotelev1">&gt; visible over shared memory -- if at all).  But it may be worthwhile  
</span><br>
<span class="quotelev1">&gt; just in the &quot;it's the right thing to do&quot; category.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thoughts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="5373.php">Eugene Loh: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>Previous message:</strong> <a href="5371.php">Jeff Squyres: "[OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>In reply to:</strong> <a href="5371.php">Jeff Squyres: "[OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5373.php">Eugene Loh: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
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
