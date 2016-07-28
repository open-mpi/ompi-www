<?
$subject_val = "[OMPI users] SLURM environment variables at runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 10:39:11 2011" -->
<!-- isoreceived="20110223153911" -->
<!-- sent="Wed, 23 Feb 2011 15:38:35 +0000" -->
<!-- isosent="20110223153835" -->
<!-- name="Henderson, Brent" -->
<!-- email="brent.henderson_at_[hidden]" -->
<!-- subject="[OMPI users] SLURM environment variables at runtime" -->
<!-- id="8BC9254C6D66C746B00D00661FAD9AF06E515B6028_at_GVW1341EXA.americas.hpqcorp.net" -->
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
<strong>Subject:</strong> [OMPI users] SLURM environment variables at runtime<br>
<strong>From:</strong> Henderson, Brent (<em>brent.henderson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-23 10:38:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15695.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Previous message:</strong> <a href="15693.php">Jeff Squyres: "Re: [OMPI users] What's wrong with this code?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15695.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Reply:</strong> <a href="15695.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Everyone, I have an OpenMPI/SLURM specific question,
<br>
<p>I'm using MPI as a launcher for another application I'm working on and it is dependent on the SLURM environment variables making their way into the a.out's environment.  This works as I need if I use HP-MPI/PMPI, but when I use OpenMPI, it appears that not all are set as I would like across all of the ranks.
<br>
<p>I have example output below from a simple a.out that just writes out the environment that it sees to a file whose name is based on the node name and rank number.  Note that with OpenMPI, that things like SLURM_NNODES and SLURM_TASKS_PER_NODE are not set the same for ranks on the different nodes and things like SLURM_LOCALID are just missing entirely.
<br>
<p>So the question is, should the environment variables on the remote nodes (from the perspective of where the job is launched) have the full set of SLURM environment variables as seen on the launching node?
<br>
<p>Thanks,
<br>
<p>Brent Henderson
<br>
<p>[brent_at_node2 mpi]$ rm node*
<br>
[brent_at_node2 mpi]$ mkdir openmpi hpmpi
<br>
[brent_at_node2 mpi]$ salloc -N 2 -n 4 mpirun ./printenv.openmpi
<br>
salloc: Granted job allocation 23
<br>
Hello world! I'm 3 of 4 on node1
<br>
Hello world! I'm 2 of 4 on node1
<br>
Hello world! I'm 1 of 4 on node2
<br>
Hello world! I'm 0 of 4 on node2
<br>
salloc: Relinquishing job allocation 23
<br>
[brent_at_node2 mpi]$ mv node* openmpi/
<br>
[brent_at_node2 mpi]$ egrep 'NODEID|NNODES|LOCALID|NODELIST|NPROCS|PROCID|TASKS_PER' openmpi/node1.3.of.4
<br>
SLURM_JOB_NODELIST=node[1-2]
<br>
SLURM_NNODES=1
<br>
SLURM_NODELIST=node[1-2]
<br>
SLURM_TASKS_PER_NODE=1
<br>
SLURM_NPROCS=1
<br>
SLURM_STEP_NODELIST=node1
<br>
SLURM_STEP_TASKS_PER_NODE=1
<br>
SLURM_NODEID=0
<br>
SLURM_PROCID=0
<br>
SLURM_LOCALID=0
<br>
[brent_at_node2 mpi]$ egrep 'NODEID|NNODES|LOCALID|NODELIST|NPROCS|PROCID|TASKS_PER' openmpi/node2.1.of.4
<br>
SLURM_JOB_NODELIST=node[1-2]
<br>
SLURM_NNODES=2
<br>
SLURM_NODELIST=node[1-2]
<br>
SLURM_TASKS_PER_NODE=2(x2)
<br>
SLURM_NPROCS=4
<br>
[brent_at_node2 mpi]$
<br>
<p><p>[brent_at_node2 mpi]$ /opt/hpmpi/bin/mpirun -srun -N 2 -n 4 ./printenv.hpmpi
<br>
Hello world! I'm 2 of 4 on node2
<br>
Hello world! I'm 3 of 4 on node2
<br>
Hello world! I'm 0 of 4 on node1
<br>
Hello world! I'm 1 of 4 on node1
<br>
[brent_at_node2 mpi]$ mv node* hpmpi/
<br>
[brent_at_node2 mpi]$ egrep 'NODEID|NNODES|LOCALID|NODELIST|NPROCS|PROCID|TASKS_PER' hpmpi/node1.1.of.4
<br>
SLURM_NODELIST=node[1-2]
<br>
SLURM_TASKS_PER_NODE=2(x2)
<br>
SLURM_STEP_NODELIST=node[1-2]
<br>
SLURM_STEP_TASKS_PER_NODE=2(x2)
<br>
SLURM_NNODES=2
<br>
SLURM_NPROCS=4
<br>
SLURM_NODEID=0
<br>
SLURM_PROCID=1
<br>
SLURM_LOCALID=1
<br>
[brent_at_node2 mpi]$ egrep 'NODEID|NNODES|LOCALID|NODELIST|NPROCS|PROCID|TASKS_PER' hpmpi/node2.3.of.4
<br>
SLURM_NODELIST=node[1-2]
<br>
SLURM_TASKS_PER_NODE=2(x2)
<br>
SLURM_STEP_NODELIST=node[1-2]
<br>
SLURM_STEP_TASKS_PER_NODE=2(x2)
<br>
SLURM_NNODES=2
<br>
SLURM_NPROCS=4
<br>
SLURM_NODEID=1
<br>
SLURM_PROCID=3
<br>
SLURM_LOCALID=1
<br>
[brent_at_node2 mpi]$
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15694/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15695.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Previous message:</strong> <a href="15693.php">Jeff Squyres: "Re: [OMPI users] What's wrong with this code?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15695.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Reply:</strong> <a href="15695.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
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
