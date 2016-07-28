<?
$subject_val = "[OMPI users] OpenMPI PMI2 with SLURM 14.03 not working";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 15:04:59 2014" -->
<!-- isoreceived="20140411190459" -->
<!-- sent="Sat, 12 Apr 2014 03:04:58 +0800" -->
<!-- isosent="20140411190458" -->
<!-- name="Anthony Alba" -->
<!-- email="ascanio.alba7_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI PMI2 with SLURM 14.03 not working" -->
<!-- id="CADkWibcGvWE9X1+fD61ddz9x=p6bTFwQYzeh198iJ-3Y1J73LQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI PMI2 with SLURM 14.03 not working<br>
<strong>From:</strong> Anthony Alba (<em>ascanio.alba7_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-11 15:04:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24160.php">Frank Wein: "[OMPI users] Question on suspending/resuming MPI processes with SIGSTOP"</a>
<li><strong>Previous message:</strong> <a href="24158.php">Anthony Alba: "Re: [OMPI users] Troubleshooting mpirun with tree spawn hang"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not sure if this is a SLURM or OMPI issue so please bear with the
<br>
cross-posting...
<br>
<p>The OpenMPI FAQ mentions an issue with slurm 2.6.3/pmi2.
<br>
<a href="https://www.open-mpi.org/faq/?category=slurm#slurm-2.6.3-issue">https://www.open-mpi.org/faq/?category=slurm#slurm-2.6.3-issue</a>
<br>
<p>I have built both 1.7.5/1.8 against slurm 14.03/pmi2.
<br>
<p>When I launch openmpi/examples/hello_c on a single node allocation:
<br>
<p>srun --mpi=pmi2 -N 1 hello_c:
<br>
<p>srun -N 1 --mpi=pmi2 hello_c
<br>
srun: error: _server_read: fd 18 got error or unexpected eof reading header
<br>
srun: error: step_launch_notify_io_failure: aborting, io error with
<br>
slurmstepd on node 0
<br>
srun: Job step aborted: Waiting up to 2 seconds for job step to finish.
<br>
srun: error: Timed out waiting for job step to complete
<br>
<p><p>with --slurmd-debug=9: (I'm not sure what is the meaning of &quot;ip
<br>
111.110.61.48 sd 14&quot;
<br>
below, is that ip as in ip address? It is not the ip address of any Nodes
<br>
in my partition)
<br>
<p>slurmstepd: mpi/pmi2: client_resp_send: 26    cmd=kvs-put-response;rc=0;
<br>
slurmstepd: mpi/pmi2: _tree_listen_readable
<br>
slurmstepd: mpi/pmi2: _task_readable
<br>
slurmstepd: mpi/pmi2: got client request: 14     cmd=kvs-fence;
<br>
slurmstepd: mpi/pmi2: _tree_listen_readable
<br>
slurmstepd: mpi/pmi2: _task_readable
<br>
slurmstepd: mpi/pmi2: _tree_listen_read
<br>
slurmstepd: _tree_listen_read: accepted tree connection: ip 111.110.61.48
<br>
sd 14
<br>
slurmstepd: _handle_accept_rank: going to read() client rank
<br>
slurmstepd: _handle_accept_rank: got client rank 1478164480 on fd 14
<br>
srun: error: _server_read: fd 18 got error or unexpected eof reading header
<br>
srun: error: step_launch_notify_io_failure: aborting, io error with
<br>
slurmstepd on node 0
<br>
srun: Job step aborted: Waiting up to 2 seconds for job step to finish.
<br>
srun: error: Timed out waiting for job step to complete
<br>
<p>Launching with salloc/sbatch works.
<br>
<p>- Anthony
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24159/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24160.php">Frank Wein: "[OMPI users] Question on suspending/resuming MPI processes with SIGSTOP"</a>
<li><strong>Previous message:</strong> <a href="24158.php">Anthony Alba: "Re: [OMPI users] Troubleshooting mpirun with tree spawn hang"</a>
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
