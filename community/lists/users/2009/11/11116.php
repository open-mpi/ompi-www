<?
$subject_val = "[OMPI users] mpi_yield_when_idle effects";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 10:24:06 2009" -->
<!-- isoreceived="20091110152406" -->
<!-- sent="Tue, 10 Nov 2009 16:24:00 +0100" -->
<!-- isosent="20091110152400" -->
<!-- name="Simone Pellegrini" -->
<!-- email="spellegrini_at_[hidden]" -->
<!-- subject="[OMPI users] mpi_yield_when_idle effects" -->
<!-- id="4AF98590.1080209_at_dps.uibk.ac.at" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] mpi_yield_when_idle effects<br>
<strong>From:</strong> Simone Pellegrini (<em>spellegrini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 10:24:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11117.php">Eloi Gaudry: "[OMPI users] [sge] tight-integration openmpi and sge: opal_os_dirpath_create failure"</a>
<li><strong>Previous message:</strong> <a href="11115.php">vasilis gkanis: "[OMPI users] ipo: warning #11009: file format not recognized for /Libraries_intel/openmpi/lib/libmpi.so"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I am getting some strange results when I enable the MCA parameters: 
<br>
mpi_yield_when_idle.
<br>
<p>What happen is that for MPI programs which do lots of synchronization, 
<br>
MPI_Barrier and MPI_Wait I get very good speedup (2.x) by turning on the 
<br>
parameter (e.g. the CG benchmark of the NAS parallel benchmarks suite).
<br>
I am not oversubscribing nodes, I am running 8 processes in a SMP system 
<br>
with exactly 8 physical cores (cache is shared on every 2 cores).
<br>
<p>The only way I was explaining this result is because of temperature 
<br>
issues that scale down the clock speed of the entire chip if all the 
<br>
cores are getting too hot (because of the busy waiting). Anyway I tried 
<br>
to replicate the behavior with a trivial (non MPI) code where one core 
<br>
is doing some work while the others (belonging to the same chip) are 
<br>
busy waiting but I didn't get the same speedup when I switch from the 
<br>
busy wait to idle implementation.
<br>
<p>Someone of you has any idea why is this happening?
<br>
<p>regards, Simone
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11117.php">Eloi Gaudry: "[OMPI users] [sge] tight-integration openmpi and sge: opal_os_dirpath_create failure"</a>
<li><strong>Previous message:</strong> <a href="11115.php">vasilis gkanis: "[OMPI users] ipo: warning #11009: file format not recognized for /Libraries_intel/openmpi/lib/libmpi.so"</a>
<!-- nextthread="start" -->
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
