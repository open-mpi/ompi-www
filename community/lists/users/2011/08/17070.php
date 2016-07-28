<?
$subject_val = "[OMPI users] MPIIO and EXT3 file systems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 18 11:47:16 2011" -->
<!-- isoreceived="20110818154716" -->
<!-- sent="Thu, 18 Aug 2011 08:46:46 -0700" -->
<!-- isosent="20110818154646" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="[OMPI users] MPIIO and EXT3 file systems" -->
<!-- id="1313682406.4699.19.camel_at_cedar.reachone.com" -->
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
<strong>Subject:</strong> [OMPI users] MPIIO and EXT3 file systems<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-18 11:46:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17071.php">BRADLEY, PETER C          PW: "Re: [OMPI users] max entries in procgroup file for OpenMPI 1.5?"</a>
<li><strong>Previous message:</strong> <a href="17069.php">Ralph Castain: "Re: [OMPI users] Bindings not detected with slurm (srun)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17078.php">Rob Latham: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<li><strong>Reply:</strong> <a href="17078.php">Rob Latham: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have a large fortran application designed to run doing IO with either
<br>
mpi_io or fortran direct access.  On a linux workstation (16 AMD cores)
<br>
running openmpi 1.5.3 and Intel fortran 12.0 we are having trouble with
<br>
random failures with the mpi_io option which do not occur with
<br>
conventional fortran direct access.  We are using ext3 file systems, and
<br>
I have seen some references hinting of similar problems with the
<br>
ext3/mpiio combination.  The application with the mpi_io option runs
<br>
flawlessly on Cray architectures with Lustre file systems, so we are
<br>
also suspicious of the ext3/mpiio combination.  Does anyone else have
<br>
experience with this combination that could shed some light on the
<br>
problem, and hopefully some suggested solutions?
<br>
<p>T. Rosmond
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17071.php">BRADLEY, PETER C          PW: "Re: [OMPI users] max entries in procgroup file for OpenMPI 1.5?"</a>
<li><strong>Previous message:</strong> <a href="17069.php">Ralph Castain: "Re: [OMPI users] Bindings not detected with slurm (srun)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17078.php">Rob Latham: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
<li><strong>Reply:</strong> <a href="17078.php">Rob Latham: "Re: [OMPI users] MPIIO and EXT3 file systems"</a>
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
