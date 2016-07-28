<?
$subject_val = "[OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  4 17:04:03 2009" -->
<!-- isoreceived="20090204220403" -->
<!-- sent="Wed, 4 Feb 2009 17:03:58 -0500" -->
<!-- isosent="20090204220358" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV" -->
<!-- id="28E36541-9E41-4D7F-AE49-8040E9A7FE06_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-04 17:03:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5372.php">Jeff Squyres: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>Previous message:</strong> <a href="5370.php">Rainer Keller: "Re: [OMPI devel] bug in	openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5372.php">Jeff Squyres: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>Reply:</strong> <a href="5372.php">Jeff Squyres: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>Reply:</strong> <a href="5373.php">Eugene Loh: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Have Fortran MPI_SEND/MPI_RECV directly call the corresponding  
<br>
PML functions instead of the C MPI_Send/MPI_Recv
<br>
<p>WHY: Slightly optimize the blocking send/receive in Fortran (i.e.,  
<br>
remove a function call)
<br>
<p>WHERE: ompi/mpi/f77/*.c -- possibly add an --enable switch to  
<br>
configure to enable/disable this behavior
<br>
<p>WHEN: For OMPI v1.4
<br>
<p>TIMEOUT: Tuesday teleconf, 17 Feb 2009
<br>
<p>-----
<br>
<p>Taking some inspiration from NEC MPI, it might be useful to remove an  
<br>
extra function call from some common Fortran MPI functions (I'm  
<br>
specifically proposing MPI_SEND/MPI_RECV, but others could be done as  
<br>
well).  Specifically, instead of having the Fortran MPI_SEND/MPI_RECV  
<br>
call the C versions of MPI_Send/MPI_Recv, they could just do [almost]  
<br>
exactly the same thing as the C versions: error checking on the MPI  
<br>
parameters and calling the PML back-end functions.
<br>
<p>The net performance win for this is likely very small.  However, this  
<br>
idea has been on my to-do list for forever, so I thought I'd ask if  
<br>
people cared/objected.
<br>
<p>Benefit
<br>
- Remove a function call from the critical performance path; possibly  
<br>
save a little latency
<br>
Drawback
<br>
- Duplicate some code (but this code rarely/never changes)
<br>
- May violate MPI profiling libraries that assume that the Fortran MPI  
<br>
API functions call the C MPI API functions
<br>
<p>Granted, on the NEC platform, function calls are *VERY* expensive --  
<br>
so having their Fortran MPI API functions directly call their back-end  
<br>
functions makes much more sense than calling the C API functions.  On  
<br>
the OS's and platforms that OMPI supports, we'll likely see a much  
<br>
smaller benefit (indeed, its effects may only be visible over shared  
<br>
memory -- if at all).  But it may be worthwhile just in the &quot;it's the  
<br>
right thing to do&quot; category.
<br>
<p>Thoughts?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5372.php">Jeff Squyres: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>Previous message:</strong> <a href="5370.php">Rainer Keller: "Re: [OMPI devel] bug in	openmpi-1.3/ompi/mpi/f77/profile/pcart_coords_f.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5372.php">Jeff Squyres: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>Reply:</strong> <a href="5372.php">Jeff Squyres: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>Reply:</strong> <a href="5373.php">Eugene Loh: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
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
