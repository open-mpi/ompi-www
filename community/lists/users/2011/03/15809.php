<?
$subject_val = "[OMPI users] Two Instances of Same Process Rather Than Two Separate Processes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 04:35:27 2011" -->
<!-- isoreceived="20110308093527" -->
<!-- sent="Tue, 8 Mar 2011 18:34:45 +0900" -->
<!-- isosent="20110308093445" -->
<!-- name="Clark Britan" -->
<!-- email="c.britan.j2_at_[hidden]" -->
<!-- subject="[OMPI users] Two Instances of Same Process Rather Than Two Separate Processes" -->
<!-- id="20110308093522.3E6E6AC058_at_agmls.azbil.com" -->
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
<strong>Subject:</strong> [OMPI users] Two Instances of Same Process Rather Than Two Separate Processes<br>
<strong>From:</strong> Clark Britan (<em>c.britan.j2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-08 04:34:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15810.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="15808.php">arep isa: "[OMPI users] Segmentation faults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15811.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses"</a>
<li><strong>Reply:</strong> <a href="15811.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just installed OpenMPI on my Linux Ubuntu 10.04 LTS 64 bit computer. I
<br>
downloaded the most recent version of OpenMPI and ran the configure and make
<br>
commands. 
<br>
<p>I then tried to run a CFD software called FDS using 2 of the 12 available
<br>
processors (single node) as a test. I split my computational domain into two
<br>
meshes, as explained in the FDS manual and would like to run each mesh on a
<br>
separate core. 
<br>
<p>When I run the command mpirun -np 2 fds5_mpi_linux_64 room_fire.fds I get
<br>
the following error:
<br>
<p>Process 0 of 0 is running on comp1
<br>
Process 0 of 0 is running on comp1
<br>
Mesh 1 is assigned to Process 0
<br>
Error: MPI_PROCESS greater than total number of processes
<br>
<p>Why are two instances of the same process run instead of two separate
<br>
processes? What I expect to see after running the above command is:
<br>
<p>Process 0 of 1 is running on comp1
<br>
Process 1 of 1 is running on comp1
<br>
Mesh 1 is assigned to Process 0
<br>
Mesh 2 is assigned to Process 1
<br>
...
<br>
<p>Any idea what is going on? Thanks for the help.
<br>
<p>Kind Regards,
<br>
<p>Clark
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15810.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="15808.php">arep isa: "[OMPI users] Segmentation faults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15811.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses"</a>
<li><strong>Reply:</strong> <a href="15811.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses"</a>
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
