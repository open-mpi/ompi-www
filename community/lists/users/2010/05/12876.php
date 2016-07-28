<?
$subject_val = "[OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 16:02:53 2010" -->
<!-- isoreceived="20100504200253" -->
<!-- sent="Tue, 04 May 2010 16:02:44 -0400" -->
<!-- isosent="20100504200244" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="[OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?" -->
<!-- id="4BE07D64.2040006_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-04 16:02:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12877.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12875.php">Vedran Coralic: "[OMPI users] Fortran derived types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12877.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12877.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI experts
<br>
<p>I need your help to get Open MPI right on a standalone
<br>
machine with Nehalem processors.
<br>
<p>How to tweak the mca parameters to avoid problems
<br>
with Nehalem (and perhaps AMD processors also),
<br>
where MPI programs hang, was discussed here before.
<br>
<p>However, I lost track of the details, how to work around the problem,
<br>
and if it was fully fixed already perhaps.
<br>
<p>I am now facing the problem directly on a single Nehalem box.
<br>
<p>I installed OpenMPI 1.4.1 from source,
<br>
and compiled the test hello_c.c with mpicc.
<br>
Then I tried to run it with:
<br>
<p>1) mpirun -np 4 a.out
<br>
It ran OK (but seemed to be slow).
<br>
<p>2) mpirun -np 16 a.out
<br>
It hung, and brought the machine to a halt.
<br>
<p>Any words of wisdom are appreciated.
<br>
<p>More info:
<br>
<p>* OpenMPI 1.4.1 installed from source (tarball from your site).
<br>
* Compilers are gcc/g++/gfortran 4.4.3-4.
<br>
* OS is Fedora Core 12.
<br>
* The machine is a Dell box with Intel Xeon 5540 (quad core)
<br>
processors on a two-way motherboard and 48GB of RAM.
<br>
* /proc/cpuinfo indicates that hyperthreading is turned on.
<br>
(I can see 16 &quot;processors&quot;.)
<br>
<p>**
<br>
<p>What should I do?
<br>
<p>Use -mca btl ^sm  ?
<br>
Use -mca btl -mca btl_sm_num_fifos=some_number ? (Which number?)
<br>
Use Both?
<br>
Do something else?
<br>
<p>Many thanks,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12877.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12875.php">Vedran Coralic: "[OMPI users] Fortran derived types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12877.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12877.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
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
