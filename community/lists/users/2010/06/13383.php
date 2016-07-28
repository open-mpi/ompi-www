<?
$subject_val = "Re: [OMPI users] Fortran - MPI_WORLD_COMM";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 22 18:05:43 2010" -->
<!-- isoreceived="20100622220543" -->
<!-- sent="Tue, 22 Jun 2010 18:05:38 -0400" -->
<!-- isosent="20100622220538" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran - MPI_WORLD_COMM" -->
<!-- id="F2F1323C-D21A-481B-A793-4B746CBE90E0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="f64c10a3371e.4c20f914_at_mssm.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran - MPI_WORLD_COMM<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-22 18:05:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13384.php">Jeff Squyres: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>Previous message:</strong> <a href="13382.php">Mihaly Mezei: "[OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>In reply to:</strong> <a href="13381.php">Mihaly Mezei: "[OMPI users] Fortran - MPI_WORLD_COMM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13386.php">chan_at_[hidden]: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 22, 2010, at 5:55 PM, Mihaly Mezei wrote:
<br>
<p><span class="quotelev1">&gt; mpi0.f(2): error #6414: This PARAMETER constant name is invalid in this context.   [MPI_COMM_WORLD]
</span><br>
<span class="quotelev1">&gt;       common /MPI_DM/ MPI_COMM_WORLD,NUMNOD,MYRANK
</span><br>
<span class="quotelev1">&gt; ----------------------^
</span><br>
<span class="quotelev1">&gt; mpi0.f(21): error #6412: A dummy argument name is invalid in this context.   [MPI_COMM_WORLD]
</span><br>
<span class="quotelev1">&gt;       common /MPI_DM/ MPI_COMM_WORLD,NUMNOD,MYRANK
</span><br>
<span class="quotelev1">&gt; ----------------------^
</span><br>
<p>Funky.  I'm not a fortran expert, but I didn't know what you couldn't put a parameter in a common block.  I guess that's a difference between OMPI and MPICH -- sorry!
<br>
<p><span class="quotelev1">&gt; If I try to pass MPI_WORLD_COMM to a subrotine as one of the subroutine argument, it aborts at run time whe it comes to using it in an MPI_Bcast call
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Bcast
</span><br>
<span class="quotelev1">&gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; *** MPI_ERR_TYPE: invalid datatype
</span><br>
<p>That shouldn't be.  But it does seem to imply that your passing a bad datatype, not a bad communicator.  Can you send a small code example that shows the problem?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13384.php">Jeff Squyres: "Re: [OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>Previous message:</strong> <a href="13382.php">Mihaly Mezei: "[OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>In reply to:</strong> <a href="13381.php">Mihaly Mezei: "[OMPI users] Fortran - MPI_WORLD_COMM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13386.php">chan_at_[hidden]: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
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
