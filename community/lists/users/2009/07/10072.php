<?
$subject_val = "[OMPI users] Open MPI:Problem with 64-bit openMPI and intel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 17:00:49 2009" -->
<!-- isoreceived="20090723210049" -->
<!-- sent="Thu, 23 Jul 2009 17:00:35 -0400" -->
<!-- isosent="20090723210035" -->
<!-- name="Sims, James S. Dr." -->
<!-- email="james.sims_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI:Problem with 64-bit openMPI and intel compiler" -->
<!-- id="D7A0423E5E193F40BE6E94126930C49307852451A8_at_MBCLUSTER.xchange.nist.gov" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI:Problem with 64-bit openMPI and intel compiler<br>
<strong>From:</strong> Sims, James S. Dr. (<em>james.sims_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 17:00:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10073.php">Shaun Jackman: "[OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<li><strong>Previous message:</strong> <a href="10071.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10077.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel compiler"</a>
<li><strong>Reply:</strong> <a href="10077.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have an OpenMPI  program compiled with a version of OpenMPI built using the ifort 10.1
<br>
compiler. I can compile and run this code with no problem, using the 32 bit
<br>
version of ifort. And I can also submit batch jobs using torque with this 32-bit code.
<br>
However, compiling the same code to produce a 64 bit executable produces a code
<br>
that runs correctly only in the simplest cases. It does not run correctly when run
<br>
under the torque batch queuing system, running for awhile and then giving a 
<br>
segmentation violation in s section of code that is fine in the 32 bit version.
<br>
<p>I have to run the mpi multinode jobs using our torque batch queuing system,
<br>
but we do have the capability of running the jobs in an interactive batch environment.
<br>
<p>If I do a qsub -I -l nodes=1:x4gb
<br>
I get an interactive session on the remote node assigned to my job. I can run the
<br>
job using either 
<br>
./MPI_li_64 or
<br>
mpirun -np 1 ./MPI_li_64
<br>
and the job runs successfully to completion. I can also
<br>
start an interactive shell using
<br>
qsub -I -l nodes=1:ppn=2:x4gb
<br>
and I will get a single dual processor (or greater node). On this single node,
<br>
mpirun -np 2 ./MPI_li_64 works.
<br>
However, if instead I ask for two nodes in my interactive batch node,
<br>
qsub -I -l nodes=2:x4gb,
<br>
Two nodes will be assigned to me but when I enter
<br>
mpirun -np 2 ./MPI_li_64
<br>
the job runs awhile, then fails with a 
<br>
mpirun noticed that process rank 1 with PID 23104 on node n339 exited on signal 11 (Segmentation fault).
<br>
<p>I can trace this in the intel debugger and see that the segmentation fault is occuring in what should
<br>
be good code, and in code that executes with no problem when everything is compiled 32-bit. I am
<br>
at a loss for what could be preventing this code to run within the batch queuing environment in the
<br>
64-bit version.
<br>
<p>Jim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10073.php">Shaun Jackman: "[OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<li><strong>Previous message:</strong> <a href="10071.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10077.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel compiler"</a>
<li><strong>Reply:</strong> <a href="10077.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel compiler"</a>
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
