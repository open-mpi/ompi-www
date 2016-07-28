<?
$subject_val = "Re: [OMPI users] SLURM environment variables at runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 11:11:22 2011" -->
<!-- isoreceived="20110223161122" -->
<!-- sent="Wed, 23 Feb 2011 09:07:05 -0700" -->
<!-- isosent="20110223160705" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SLURM environment variables at runtime" -->
<!-- id="AANLkTikLPoa=z4qQgCpzW_u-Nw1ZU5tyQdCAvv+AdV_x_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="8BC9254C6D66C746B00D00661FAD9AF06E515B6028_at_GVW1341EXA.americas.hpqcorp.net" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-23 11:07:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15696.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Previous message:</strong> <a href="15694.php">Henderson, Brent: "[OMPI users] SLURM environment variables at runtime"</a>
<li><strong>In reply to:</strong> <a href="15694.php">Henderson, Brent: "[OMPI users] SLURM environment variables at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15698.php">Henderson, Brent: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Reply:</strong> <a href="15698.php">Henderson, Brent: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Resource managers generally frown on the idea of any program passing
<br>
RM-managed envars from one node to another, and this is certainly true of
<br>
slurm. The reason is that the RM reserves those values for its own use when
<br>
managing remote nodes. For example, if you got an allocation and then used
<br>
mpirun to launch a job across only a portion of that allocation, and then
<br>
ran another mpirun instance in parallel on the remainder of the nodes, the
<br>
slurm envars for those two mpirun instances -need- to be quite different.
<br>
Having mpirun forward the values it sees would cause the system to become
<br>
very confused.
<br>
<p>We learned the hard way never to cross that line :-(
<br>
<p>You have two options:
<br>
<p>(a) you could get your sys admin to configure slurm correctly to provide
<br>
your desired envars on the remote nodes. This is the recommended (by slurm
<br>
and other RMs) way of getting what you requested. It is a simple
<br>
configuration option - if he needs help, he should contact the slurm mailing
<br>
list
<br>
<p>(b) you can ask mpirun to do so, at your own risk. Specify each parameter
<br>
with a &quot;-x FOO&quot; argument. See &quot;man mpirun&quot; for details. Keep an eye out for
<br>
aberrant behavior.
<br>
<p>Ralph
<br>
<p><p>On Wed, Feb 23, 2011 at 8:38 AM, Henderson, Brent &lt;brent.henderson_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi Everyone, I have an OpenMPI/SLURM specific question,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;m using MPI as a launcher for another application I&#146;m working on and it
</span><br>
<span class="quotelev1">&gt; is dependent on the SLURM environment variables making their way into the
</span><br>
<span class="quotelev1">&gt; a.out&#146;s environment.  This works as I need if I use HP-MPI/PMPI, but when I
</span><br>
<span class="quotelev1">&gt; use OpenMPI, it appears that not all are set as I would like across all of
</span><br>
<span class="quotelev1">&gt; the ranks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have example output below from a simple a.out that just writes out the
</span><br>
<span class="quotelev1">&gt; environment that it sees to a file whose name is based on the node name and
</span><br>
<span class="quotelev1">&gt; rank number.  Note that with OpenMPI, that things like SLURM_NNODES and
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE are not set the same for ranks on the different nodes
</span><br>
<span class="quotelev1">&gt; and things like SLURM_LOCALID are just missing entirely.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the question is, should the environment variables on the remote nodes
</span><br>
<span class="quotelev1">&gt; (from the perspective of where the job is launched) have the full set of
</span><br>
<span class="quotelev1">&gt; SLURM environment variables as seen on the launching node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brent Henderson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$ rm node*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$ mkdir openmpi hpmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$ salloc -N 2 -n 4 mpirun ./printenv.openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; salloc: Granted job allocation 23
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello world! I'm 3 of 4 on node1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello world! I'm 2 of 4 on node1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello world! I'm 1 of 4 on node2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello world! I'm 0 of 4 on node2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; salloc: Relinquishing job allocation 23
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$ mv node* openmpi/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$ egrep
</span><br>
<span class="quotelev1">&gt; 'NODEID|NNODES|LOCALID|NODELIST|NPROCS|PROCID|TASKS_PER'
</span><br>
<span class="quotelev1">&gt; openmpi/node1.3.of.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NODELIST=node[1-2]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_NNODES=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_NODELIST=node[1-2]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_NPROCS=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_STEP_NODELIST=node1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_STEP_TASKS_PER_NODE=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_NODEID=0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_PROCID=0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_LOCALID=0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$ egrep
</span><br>
<span class="quotelev1">&gt; 'NODEID|NNODES|LOCALID|NODELIST|NPROCS|PROCID|TASKS_PER'
</span><br>
<span class="quotelev1">&gt; openmpi/node2.1.of.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NODELIST=node[1-2]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_NNODES=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_NODELIST=node[1-2]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE=2(x2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_NPROCS=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$ /opt/hpmpi/bin/mpirun -srun -N 2 -n 4 ./printenv.hpmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello world! I'm 2 of 4 on node2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello world! I'm 3 of 4 on node2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello world! I'm 0 of 4 on node1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello world! I'm 1 of 4 on node1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$ mv node* hpmpi/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$ egrep
</span><br>
<span class="quotelev1">&gt; 'NODEID|NNODES|LOCALID|NODELIST|NPROCS|PROCID|TASKS_PER' hpmpi/node1.1.of.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_NODELIST=node[1-2]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE=2(x2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_STEP_NODELIST=node[1-2]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_STEP_TASKS_PER_NODE=2(x2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_NNODES=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_NPROCS=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_NODEID=0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_PROCID=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_LOCALID=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$ egrep
</span><br>
<span class="quotelev1">&gt; 'NODEID|NNODES|LOCALID|NODELIST|NPROCS|PROCID|TASKS_PER' hpmpi/node2.3.of.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_NODELIST=node[1-2]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE=2(x2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_STEP_NODELIST=node[1-2]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_STEP_TASKS_PER_NODE=2(x2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_NNODES=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_NPROCS=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_NODEID=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_PROCID=3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_LOCALID=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15695/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15696.php">Prentice Bisbal: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Previous message:</strong> <a href="15694.php">Henderson, Brent: "[OMPI users] SLURM environment variables at runtime"</a>
<li><strong>In reply to:</strong> <a href="15694.php">Henderson, Brent: "[OMPI users] SLURM environment variables at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15698.php">Henderson, Brent: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Reply:</strong> <a href="15698.php">Henderson, Brent: "Re: [OMPI users] SLURM environment variables at runtime"</a>
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
