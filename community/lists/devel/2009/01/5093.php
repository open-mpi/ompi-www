<?
$subject_val = "Re: [OMPI devel] RFC: Component-izing MPI_Op";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  5 10:21:20 2009" -->
<!-- isoreceived="20090105152120" -->
<!-- sent="Mon, 5 Jan 2009 10:21:14 -0500" -->
<!-- isosent="20090105152114" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Component-izing MPI_Op" -->
<!-- id="84B0C67E-CD7F-4AEC-A7D9-53F47905ECD5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.1.10.0901051006140.28240_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Component-izing MPI_Op<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-05 10:21:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5094.php">Thomas Ropars: "[OMPI devel] problem compiling r20196"</a>
<li><strong>Previous message:</strong> <a href="5092.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
<li><strong>In reply to:</strong> <a href="5092.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5111.php">Jeff Squyres: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
<li><strong>Reply:</strong> <a href="5111.php">Jeff Squyres: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 5, 2009, at 10:09 AM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; I think this sounds reasonable, if (and only if) MPI_Accumulate is  
</span><br>
<span class="quotelev1">&gt; properly handled.  The interface for calling the op functions was  
</span><br>
<span class="quotelev1">&gt; broken in some fairly obvious way for accumulate when I was writing  
</span><br>
<span class="quotelev1">&gt; the one-sided code.  I think I had to call some supposedly internal  
</span><br>
<span class="quotelev1">&gt; bits of the interface to make accumulate work.  I can't remember  
</span><br>
<span class="quotelev1">&gt; what they are now, but I do remember it being a problem.
</span><br>
<p>Coolio; I'll look into it.
<br>
<p><span class="quotelev1">&gt; Of course, unless it makes mpi_allreduce on one double-sized  
</span><br>
<span class="quotelev1">&gt; floating point number using sum go faster, I'm not entirely sure a  
</span><br>
<span class="quotelev1">&gt; change is helpful ;).
</span><br>
<p>&nbsp;From my (admittedly limited) understanding, since there are memory  
<br>
registration and/or copy in/out issues with GPUs, the operation has to  
<br>
be &quot;big enough&quot; and/or already located in GPU memory for the GPU to  
<br>
outperform the CPU.  It is my assumption that the component-ized CUDA/ 
<br>
OpenCL/whatever code will need to make a decision whether it should  
<br>
perform the operation at run-time or pass it back to a fallback  
<br>
[probably CPU-based] implementation, analogous to how &quot;tuned&quot; picks  
<br>
the right coll algorithm.
<br>
<p>I'm told that there's some researchy middleware working on exactly  
<br>
this kind of problem (determining if a given operation is suitable to  
<br>
run on the GPU or the main CPU).  So in a best-case scenario, OMPI can  
<br>
just link against and use that middleware rather than implementing all  
<br>
the logic in the component itself.  We'll see how it plays out.
<br>
<p>My goal is to give these guys the infrastructure that they need in  
<br>
OMPI to play with these kind of concepts and see what they can  
<br>
accomplish in terms of real performance.  FWIW: a few SC08 attendees  
<br>
thought that they could avoid writing much CUDA/CL/whatever code if  
<br>
MPI_REDUCE did the work for them (particularly if paired with the  
<br>
proposed MPI_REDUCE_LOCAL function, <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/24">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/24</a>) 
<br>
.  [shrug]  We'll see!
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
<li><strong>Next message:</strong> <a href="5094.php">Thomas Ropars: "[OMPI devel] problem compiling r20196"</a>
<li><strong>Previous message:</strong> <a href="5092.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
<li><strong>In reply to:</strong> <a href="5092.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5111.php">Jeff Squyres: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
<li><strong>Reply:</strong> <a href="5111.php">Jeff Squyres: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
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
