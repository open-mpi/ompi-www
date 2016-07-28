<?
$subject_val = "Re: [OMPI users] mpi_wtime implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 17 12:47:39 2014" -->
<!-- isoreceived="20141117174739" -->
<!-- sent="Mon, 17 Nov 2014 17:47:37 +0000" -->
<!-- isosent="20141117174737" -->
<!-- name="Daniels, Marcus G" -->
<!-- email="mdaniels_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_wtime implementation" -->
<!-- id="1416246457.19540.15.camel_at_testbox.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="87ioidg2e1.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_wtime implementation<br>
<strong>From:</strong> Daniels, Marcus G (<em>mdaniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-17 12:47:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25827.php">Tim Prince: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does	nothing silently"</a>
<li><strong>Previous message:</strong> <a href="25825.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>In reply to:</strong> <a href="25824.php">Dave Love: "[OMPI users] mpi_wtime implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25844.php">Dave Love: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Reply:</strong> <a href="25844.php">Dave Love: "Re: [OMPI users] mpi_wtime implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2014-11-17 at 17:31 +0000, Dave Love wrote:
<br>
<span class="quotelev1">&gt; I discovered from looking at the mpiP profiler that OMPI always uses
</span><br>
<span class="quotelev1">&gt; gettimeofday rather than clock_gettime to implement mpi_wtime on
</span><br>
<span class="quotelev1">&gt; GNU/Linux, and that looks sub-optimal. 
</span><br>

<br>
It can be very expensive in practice, especially for codes that have
<br>
fine-grained instrumentation. 
<br>

<br>
Marcus
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25827.php">Tim Prince: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does	nothing silently"</a>
<li><strong>Previous message:</strong> <a href="25825.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>In reply to:</strong> <a href="25824.php">Dave Love: "[OMPI users] mpi_wtime implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25844.php">Dave Love: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Reply:</strong> <a href="25844.php">Dave Love: "Re: [OMPI users] mpi_wtime implementation"</a>
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
