<?
$subject_val = "Re: [OMPI users] Help with multicore AMD machine performance";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  2 08:38:36 2012" -->
<!-- isoreceived="20120402123836" -->
<!-- sent="Mon, 02 Apr 2012 14:38:35 +0200" -->
<!-- isosent="20120402123835" -->
<!-- name="Nico Mittenzwey" -->
<!-- email="nico.mittenzwey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with multicore AMD machine performance" -->
<!-- id="4F799DCB.3040507_at_s2001.tu-chemnitz.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DBCE1A19-6AE1-4E64-B034-6C8B64D134DE_at_ist.utl.pt" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help with multicore AMD machine performance<br>
<strong>From:</strong> Nico Mittenzwey (<em>nico.mittenzwey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-02 08:38:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18906.php">Rémi Palancher: "[OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>Previous message:</strong> <a href="18904.php">Reuti: "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18879.php">Ricardo Fonseca: "[OMPI users] Help with multicore AMD machine performance"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; I'm benchmarking our (well tested) parallel code on and AMD based system, featuring 2x AMD Opteron(TM) Processor 6276, with 16 cores each for a total of 32 cores. The system is running Scientific Linux 6.1 and OpenMPI 1.4.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run a single core job the performance is as expected. However, when I run with 32 processes the performance drops to about 60%
</span><br>
<p>Be aware that on AMD CPUs based on Bulldozer/Interlagos technology 2 
<br>
cores share the FPU units of one module. There is also a problem with 
<br>
Cross-Cache-Invalidations [1] in earlier kernel versions - be sure to 
<br>
use an up-to-date kernel (2.6.32-220.7.1)
<br>
<p>Cheers,
<br>
Nico
<br>
<p>[1] <a href="http://developer.amd.com/Assets/SharedL1InstructionCacheonAMD15hCPU.pdf">http://developer.amd.com/Assets/SharedL1InstructionCacheonAMD15hCPU.pdf</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18906.php">Rémi Palancher: "[OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>Previous message:</strong> <a href="18904.php">Reuti: "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18879.php">Ricardo Fonseca: "[OMPI users] Help with multicore AMD machine performance"</a>
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
