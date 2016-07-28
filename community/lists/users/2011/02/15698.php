<?
$subject_val = "Re: [OMPI users] SLURM environment variables at runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 12:07:07 2011" -->
<!-- isoreceived="20110223170707" -->
<!-- sent="Wed, 23 Feb 2011 17:05:46 +0000" -->
<!-- isosent="20110223170546" -->
<!-- name="Henderson, Brent" -->
<!-- email="brent.henderson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SLURM environment variables at runtime" -->
<!-- id="8BC9254C6D66C746B00D00661FAD9AF06E515B60DA_at_GVW1341EXA.americas.hpqcorp.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikLPoa=z4qQgCpzW_u-Nw1ZU5tyQdCAvv+AdV_x_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SLURM environment variables at runtime<br>
<strong>From:</strong> Henderson, Brent (<em>brent.henderson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-23 12:05:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15699.php">Jeff Squyres: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Previous message:</strong> <a href="15697.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>In reply to:</strong> <a href="15695.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15700.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Reply:</strong> <a href="15700.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Reply:</strong> <a href="15727.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
SLURM seems to be doing this in the case of a regular srun:
<br>
<p>[brent_at_node1 mpi]$ srun -N 2 -n 4 env | egrep SLURM_NODEID\|SLURM_PROCID\|SLURM_LOCALID | sort
<br>
SLURM_LOCALID=0
<br>
SLURM_LOCALID=0
<br>
SLURM_LOCALID=1
<br>
SLURM_LOCALID=1
<br>
SLURM_NODEID=0
<br>
SLURM_NODEID=0
<br>
SLURM_NODEID=1
<br>
SLURM_NODEID=1
<br>
SLURM_PROCID=0
<br>
SLURM_PROCID=1
<br>
SLURM_PROCID=2
<br>
SLURM_PROCID=3
<br>
[brent_at_node1 mpi]$
<br>
<p>Since srun is not supported currently by OpenMPI, I have to use salloc - right?  In this case, it is up to OpenMPI to interpret the SLURM environment variables it sees in the one process that is launched and 'do the right thing' - whatever that means in this case.  How does OpenMPI start the processes on the remote nodes under the covers?  (use srun, generate a hostfile and launch as you would outside SLURM, ...)  This may be the difference between HP-MPI and OpenMPI.
<br>
<p>Thanks,
<br>
<p>Brent
<br>
<p><p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Wednesday, February 23, 2011 10:07 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] SLURM environment variables at runtime
<br>
<p>Resource managers generally frown on the idea of any program passing RM-managed envars from one node to another, and this is certainly true of slurm. The reason is that the RM reserves those values for its own use when managing remote nodes. For example, if you got an allocation and then used mpirun to launch a job across only a portion of that allocation, and then ran another mpirun instance in parallel on the remainder of the nodes, the slurm envars for those two mpirun instances -need- to be quite different. Having mpirun forward the values it sees would cause the system to become very confused.
<br>
<p>We learned the hard way never to cross that line :-(
<br>
<p>You have two options:
<br>
<p>(a) you could get your sys admin to configure slurm correctly to provide your desired envars on the remote nodes. This is the recommended (by slurm and other RMs) way of getting what you requested. It is a simple configuration option - if he needs help, he should contact the slurm mailing list
<br>
<p>(b) you can ask mpirun to do so, at your own risk. Specify each parameter with a &quot;-x FOO&quot; argument. See &quot;man mpirun&quot; for details. Keep an eye out for aberrant behavior.
<br>
<p>Ralph
<br>
<p>On Wed, Feb 23, 2011 at 8:38 AM, Henderson, Brent &lt;brent.henderson_at_[hidden]&lt;mailto:brent.henderson_at_[hidden]&gt;&gt; wrote:
<br>
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15698/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15699.php">Jeff Squyres: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Previous message:</strong> <a href="15697.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>In reply to:</strong> <a href="15695.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15700.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Reply:</strong> <a href="15700.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Reply:</strong> <a href="15727.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
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
