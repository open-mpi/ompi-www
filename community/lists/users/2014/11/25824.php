<?
$subject_val = "[OMPI users] mpi_wtime implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 17 12:31:33 2014" -->
<!-- isoreceived="20141117173133" -->
<!-- sent="Mon, 17 Nov 2014 17:31:18 +0000" -->
<!-- isosent="20141117173118" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="[OMPI users] mpi_wtime implementation" -->
<!-- id="87ioidg2e1.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] mpi_wtime implementation<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-17 12:31:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25825.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25823.php">John Bray: "[OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25826.php">Daniels, Marcus G: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Reply:</strong> <a href="25826.php">Daniels, Marcus G: "Re: [OMPI users] mpi_wtime implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I discovered from looking at the mpiP profiler that OMPI always uses
<br>
gettimeofday rather than clock_gettime to implement mpi_wtime on
<br>
GNU/Linux, and that looks sub-optimal.  I don't remember what the
<br>
resolution of gettimeofday is in practice, but I did need to write a
<br>
drop-in replacement for benchmarks.  [mpiP expects mpi_wtime to be high
<br>
resolution, and you have to configure if for clock_gettime explicitly.]
<br>
<p>Before I raise an issue:  is there some good reason not to use
<br>
clock_gettime, especially as gettimeofday is obsolete in POSIX?  I guess
<br>
not, especially as the VT component uses clock_gettime.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25825.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25823.php">John Bray: "[OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25826.php">Daniels, Marcus G: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Reply:</strong> <a href="25826.php">Daniels, Marcus G: "Re: [OMPI users] mpi_wtime implementation"</a>
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
