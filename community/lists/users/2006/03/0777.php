<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar  3 18:31:53 2006" -->
<!-- isoreceived="20060303233153" -->
<!-- sent="Fri, 3 Mar 2006 18:31:38 -0500" -->
<!-- isosent="20060303233138" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpif90 problem." -->
<!-- id="2B73C4A2-217C-46DA-A6F0-6A3D402DD3B7_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4405C70A.4080002_at_obspm.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-03 18:31:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0778.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>Previous message:</strong> <a href="0776.php">Jeff Squyres: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>In reply to:</strong> <a href="0738.php">Benoit Semelin: "[OMPI users] mpif90 problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0783.php">Benoit Semelin: "Re: [OMPI users] mpif90 problem."</a>
<li><strong>Reply:</strong> <a href="0783.php">Benoit Semelin: "Re: [OMPI users] mpif90 problem."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 1, 2006, at 11:08 AM, Benoit Semelin wrote:
<br>
<p><span class="quotelev1">&gt; call MPI_BCAST(boundary_cond, 
</span><br>
<span class="quotelev1">&gt; 8,MPI_CHARACTER,master,MPI_COMM_WORLD,mpi_err)
</span><br>
<span class="quotelev1">&gt;      1
</span><br>
<span class="quotelev1">&gt; Error: Generic subroutine 'mpi_bcast' at (1) is not an intrinsic  
</span><br>
<span class="quotelev1">&gt; subroutine
</span><br>
<p>It looks like we goofed; we neglected to include F90 routines for the  
<br>
CHARACTER type in the buffer.  :-(
<br>
<p><span class="quotelev1">&gt; If I use include 'mpif.h', it compiles just fine.
</span><br>
<p>This is because that will use the [exactly equivalent] F77 bindings  
<br>
-- you just lose the type safety.  Until we can fix the bindings, if  
<br>
you need to use CHARACTER buffer types, this is probably the best  
<br>
workaround.
<br>
<p><span class="quotelev1">&gt; Second topic:
</span><br>
<span class="quotelev1">&gt; I am using 3 processors
</span><br>
<span class="quotelev1">&gt; I am calling a series of MPI_SCATTER which work when I send  
</span><br>
<span class="quotelev1">&gt; messages of
</span><br>
<span class="quotelev1">&gt; 5 ko to the other processors, fails at the second scatter if I sent
</span><br>
<span class="quotelev1">&gt; messages of ~10 ko, and fails at the first scatter for bigger  
</span><br>
<span class="quotelev1">&gt; messages.
</span><br>
<span class="quotelev1">&gt; The message is:
</span><br>
<p>What is &quot;ko&quot; -- did you mean &quot;kb&quot;?
<br>
<p><span class="quotelev1">&gt; 2 processes killed (possibly by Open MPI)
</span><br>
<p><span class="quotelev1">&gt; Could this be a problem of maximum allowed message size? Or of  
</span><br>
<span class="quotelev1">&gt; buffering
</span><br>
<span class="quotelev1">&gt; space?
</span><br>
<p>No, Open MPI should allow scattering of arbitrary sized messages.   
<br>
Can you verify that your arguments to MPI_SCATTER are correct, such  
<br>
as buffer length, the receive sizes on the clients, etc.?
<br>
<p>Are any corefiles generated?  Do you know which processes die?
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0778.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>Previous message:</strong> <a href="0776.php">Jeff Squyres: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>In reply to:</strong> <a href="0738.php">Benoit Semelin: "[OMPI users] mpif90 problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0783.php">Benoit Semelin: "Re: [OMPI users] mpif90 problem."</a>
<li><strong>Reply:</strong> <a href="0783.php">Benoit Semelin: "Re: [OMPI users] mpif90 problem."</a>
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
