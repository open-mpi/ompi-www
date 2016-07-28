<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat May 26 16:56:42 2007" -->
<!-- isoreceived="20070526205642" -->
<!-- sent="Sat, 26 May 2007 16:56:35 -0400" -->
<!-- isosent="20070526205635" -->
<!-- name="Nayden D Kambouchev" -->
<!-- email="nayden_at_[hidden]" -->
<!-- subject="[OMPI users] Cannot run batch jobs with SLURM" -->
<!-- id="20070526165635.nmij7df07u74gcsw_at_webmail.mit.edu" -->
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
<strong>From:</strong> Nayden D Kambouchev (<em>nayden_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-26 16:56:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3325.php">Code Master: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="3323.php">smairal_at_[hidden]: "[OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am unable to run batch jobs with my installation of OpenMPI and SLURM.  Indeed
<br>
I am not sure if this is an OpenMPI issue or a SLURM issue, but here is what is
<br>
happening on my little cluster (3 nodes, one login node and 2 backend nodes
<br>
with 2 dual core CPUs each).  If I run
<br>
<p>salloc -n 8 mpirun -np 8 myprog
<br>
<p>I get both backend nodes allocated (with their total of 8 cores) and myprog runs
<br>
<p>if I run
<br>
<p>sbatch -n 8 zrun.sh
<br>
<p>where zrun.sh contains
<br>
<p>#!/bin/bash
<br>
mpirun -np 8 myprog
<br>
<p>again both backend nodes get allocated, but the job does not run.  In top I see
<br>
one mpirun and two srun processes on the first backend node, but they just seem
<br>
to be sitting there.  On the other backend node I see no mpirun, srun or
<br>
anything else which might have been started as a result of the batch job.
<br>
<p>Is this the correct way to initiate SLURM batch jobs with OpenMPI?
<br>
<p>I also see the following error in the SLURM log of the second backnode
<br>
<p>May 26 16:15:21 localhost slurmd[2665]: launch task 82.0 request from
<br>
1001.1001_at_127.0.0.1 (port 21721)
<br>
May 26 16:15:21 localhost slurmstepd[2747]: jobacct NONE plugin loaded
<br>
May 26 16:15:21 localhost slurmstepd[2747]: error: connect io: Connection
<br>
refused
<br>
May 26 16:15:21 localhost slurmd[node21][2747]: error: IO setup failed:
<br>
Connection refused
<br>
May 26 16:15:21 localhost slurmd[node21][2747]: error: job_manager exiting
<br>
abnormally, rc = 4020
<br>
May 26 16:15:21 localhost slurmd[node21][2747]: done with job
<br>
<p>The job number assigned by SLURM at the submissin was 82.
<br>
<p>What am I doing incorrectly?  Is it possible that something in my environment is
<br>
not set up correctly?
<br>
<p>Thanks,
<br>
Nayden Kambouchev
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3325.php">Code Master: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="3323.php">smairal_at_[hidden]: "[OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
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
