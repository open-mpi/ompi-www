<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct  3 09:52:10 2007" -->
<!-- isoreceived="20071003135210" -->
<!-- sent="Wed, 3 Oct 2007 14:52:05 +0100" -->
<!-- isosent="20071003135205" -->
<!-- name="Miguel Figueiredo Mascarenhas Sousa Filipe" -->
<!-- email="miguel.filipe_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI binding all tasks to cpu0, leaving cpu1 idle. (2-cpu system)" -->
<!-- id="f058a9c30710030652t30017b66nfb4be57cb7f78513_at_mail.gmail.com" -->
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
<strong>From:</strong> Miguel Figueiredo Mascarenhas Sousa Filipe (<em>miguel.filipe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-03 09:52:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4141.php">jody: "Re: [OMPI users] OpenMPI binding all tasks to cpu0, leaving cpu1 idle. (2-cpu system)"</a>
<li><strong>Previous message:</strong> <a href="4139.php">Amit Kumar Saha: "Re: [OMPI users] Tool communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4141.php">jody: "Re: [OMPI users] OpenMPI binding all tasks to cpu0, leaving cpu1 idle. (2-cpu system)"</a>
<li><strong>Reply:</strong> <a href="4141.php">jody: "Re: [OMPI users] OpenMPI binding all tasks to cpu0, leaving cpu1 idle. (2-cpu system)"</a>
<li><strong>Reply:</strong> <a href="4146.php">Tim Prins: "Re: [OMPI users] OpenMPI binding all tasks to cpu0, leaving cpu1 idle. (2-cpu system)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>I have a 2-cpu system (linux/x86-64), running openmpi-1.1. I do not
<br>
specify a hostfile.
<br>
Lately I'm having performance problems when running my mpi-app this way:
<br>
<p>mpiexec -n 2 ./mpi-app config.ini
<br>
<p>Both mpi-app processes are running on cpu0, leaving cpu1 idle.
<br>
<p>After reading the mpirun manpage, it seems that openmpi bind tasks to
<br>
cpus in a round-robin way, meaning that this should not happen.
<br>
But given my problem, I assume that it's not detecting this is a 2-way
<br>
smp system, (assuming a UP system) and binding both tasks to cpu0..
<br>
<p>Is this correct?
<br>
<p>The openmpi-default-hostfile says I should not specify localhost in
<br>
there.. and let the job dispatcher/rca &quot;detect&quot; the single-node setup.
<br>
<p>Where should I define/configure system wide, that this is a
<br>
single-node, 2-slot system?
<br>
I would like to avoid making the system users be obliged to pass a
<br>
hostfile to mpirun/mpiexec. I simply want mpiexec -n N ./mpi-task to
<br>
do the propper job of _really_ spreading the processes evenly between
<br>
all the system's CPUs.
<br>
<p>Best regards, waiting for your answer.
<br>
<p><p><p>ps.: should I upgrade to latest openMPI to have my problem
<br>
&quot;automagically&quot; solved?
<br>
<p><pre>
-- 
Miguel Sousa Filipe
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4141.php">jody: "Re: [OMPI users] OpenMPI binding all tasks to cpu0, leaving cpu1 idle. (2-cpu system)"</a>
<li><strong>Previous message:</strong> <a href="4139.php">Amit Kumar Saha: "Re: [OMPI users] Tool communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4141.php">jody: "Re: [OMPI users] OpenMPI binding all tasks to cpu0, leaving cpu1 idle. (2-cpu system)"</a>
<li><strong>Reply:</strong> <a href="4141.php">jody: "Re: [OMPI users] OpenMPI binding all tasks to cpu0, leaving cpu1 idle. (2-cpu system)"</a>
<li><strong>Reply:</strong> <a href="4146.php">Tim Prins: "Re: [OMPI users] OpenMPI binding all tasks to cpu0, leaving cpu1 idle. (2-cpu system)"</a>
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
