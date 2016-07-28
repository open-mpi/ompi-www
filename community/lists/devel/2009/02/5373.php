<?
$subject_val = "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  4 18:00:57 2009" -->
<!-- isoreceived="20090204230057" -->
<!-- sent="Wed, 04 Feb 2009 15:05:19 -0800" -->
<!-- isosent="20090204230519" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV" -->
<!-- id="498A1F2F.3030009_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-04 18:05:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5374.php">Lenny Verkhovsky: "[OMPI devel] r20436 brakes"</a>
<li><strong>Previous message:</strong> <a href="5372.php">Jeff Squyres: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>In reply to:</strong> <a href="5371.php">Jeff Squyres: "[OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5384.php">Jeff Squyres: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>Reply:</strong> <a href="5384.php">Jeff Squyres: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
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
<span class="quotelev1">&gt; Taking some inspiration from NEC MPI, it might be useful to remove an  
</span><br>
<span class="quotelev1">&gt; extra function call from some common Fortran MPI functions (I'm  
</span><br>
<span class="quotelev1">&gt; specifically proposing MPI_SEND/MPI_RECV, but others could be done as  
</span><br>
<span class="quotelev1">&gt; well).  Specifically, instead of having the Fortran MPI_SEND/MPI_RECV  
</span><br>
<span class="quotelev1">&gt; call the C versions of MPI_Send/MPI_Recv, they could just do [almost]  
</span><br>
<span class="quotelev1">&gt; exactly the same thing as the C versions: error checking on the MPI  
</span><br>
<span class="quotelev1">&gt; parameters and calling the PML back-end functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The net performance win for this is likely very small.  However, this  
</span><br>
<span class="quotelev1">&gt; idea has been on my to-do list for forever, so I thought I'd ask if  
</span><br>
<span class="quotelev1">&gt; people cared/objected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Benefit
</span><br>
<span class="quotelev1">&gt; - Remove a function call from the critical performance path; possibly  
</span><br>
<span class="quotelev1">&gt; save a little latency
</span><br>
<p>The only &quot;benefit&quot; is &quot;possibly a little&quot;?  This is not at all 
<br>
compelling.  Is the hoped-for benefit measurable?  I assume a pingpong 
<br>
latency test over shared memory is the only hope you have of observing 
<br>
any benefit.  Have you attempted to measure this, or is this benefit 
<br>
only conjecture?
<br>
<p><span class="quotelev1">&gt; Drawback
</span><br>
<span class="quotelev1">&gt; - Duplicate some code (but this code rarely/never changes)
</span><br>
<p>It's still code bloat.
<br>
<p><span class="quotelev1">&gt; - May violate MPI profiling libraries that assume that the Fortran 
</span><br>
<span class="quotelev1">&gt; MPI  API functions call the C MPI API functions
</span><br>
<p>I'm not real familiar with the issues here, but this strikes me as a 
<br>
serious drawback.
<br>
<p><span class="quotelev1">&gt; Granted, on the NEC platform, function calls are *VERY* expensive --  
</span><br>
<span class="quotelev1">&gt; so having their Fortran MPI API functions directly call their 
</span><br>
<span class="quotelev1">&gt; back-end  functions makes much more sense than calling the C API 
</span><br>
<span class="quotelev1">&gt; functions.  On  the OS's and platforms that OMPI supports, we'll 
</span><br>
<span class="quotelev1">&gt; likely see a much  smaller benefit (indeed, its effects may only be 
</span><br>
<span class="quotelev1">&gt; visible over shared  memory -- if at all).  But it may be worthwhile 
</span><br>
<span class="quotelev1">&gt; just in the &quot;it's the  right thing to do&quot; category.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thoughts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5374.php">Lenny Verkhovsky: "[OMPI devel] r20436 brakes"</a>
<li><strong>Previous message:</strong> <a href="5372.php">Jeff Squyres: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>In reply to:</strong> <a href="5371.php">Jeff Squyres: "[OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5384.php">Jeff Squyres: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>Reply:</strong> <a href="5384.php">Jeff Squyres: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
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
