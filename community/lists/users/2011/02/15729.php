<?
$subject_val = "Re: [OMPI users] SLURM environment variables at runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 24 10:30:59 2011" -->
<!-- isoreceived="20110224153059" -->
<!-- sent="Thu, 24 Feb 2011 10:30:46 -0500" -->
<!-- isosent="20110224153046" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SLURM environment variables at runtime" -->
<!-- id="7556B114-B02A-470D-96AA-A4EA5E011B71_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="AANLkTinmkqPqXrD=xyU5y0mLM1Z-Wc3581-1C9_sggu=_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-24 10:30:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15730.php">Ralph Castain: "Re: [OMPI users] multicast not available"</a>
<li><strong>Previous message:</strong> <a href="15728.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>In reply to:</strong> <a href="15728.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15731.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Reply:</strong> <a href="15731.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Reply:</strong> <a href="15732.php">Henderson, Brent: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The weird thing is that when running his test, he saw different results with HP MPI vs. Open MPI.
<br>
<p>What his test didn't say was whether those were the same exact nodes or not.  It would be good to repeat my experiment with the same exact nodes (e.g., inside one SLURM salloc job, or use the -w param to specify the same nodes for salloc for OMPI and srun for HP MPI).
<br>
<p><p>On Feb 24, 2011, at 10:02 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Like I said, this isn't an OMPI problem. You have your slurm configured to pass certain envars to the remote nodes, and Brent doesn't. It truly is just that simple.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've seen this before with other slurm installations. Which envars get set on the backend is configurable, that's all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has nothing to do with OMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Feb 24, 2011 at 7:18 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I'm afraid I don't see the problem.  Let's get 4 nodes from slurm:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ salloc -N 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now let's run env and see what SLURM_ env variables we see:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ srun env | egrep ^SLURM_ | head
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_ID=95523
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NUM_NODES=4
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NODELIST=svbu-mpi[001-004]
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_CPUS_PER_NODE=4(x4)
</span><br>
<span class="quotelev1">&gt; SLURM_JOBID=95523
</span><br>
<span class="quotelev1">&gt; SLURM_NNODES=4
</span><br>
<span class="quotelev1">&gt; SLURM_NODELIST=svbu-mpi[001-004]
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE=1(x4)
</span><br>
<span class="quotelev1">&gt; SLURM_PRIO_PROCESS=0
</span><br>
<span class="quotelev1">&gt; SLURM_UMASK=0002
</span><br>
<span class="quotelev1">&gt; $ srun env | egrep ^SLURM_ | wc -l
</span><br>
<span class="quotelev1">&gt; 144
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good -- there's 144 of them.  Let's save them to a file for comparison, later.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ srun env | egrep ^SLURM_ | sort &gt; srun.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now let's repeat the process with mpirun.  Note that mpirun defaults to running one process per core (vs. srun's default of running one per node).  So let's tone mpirun down to use one process per node and look for the SLURM_ env variables.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 4 --bynode env | egrep ^SLURM_ | head
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_ID=95523
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NUM_NODES=4
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NODELIST=svbu-mpi[001-004]
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_ID=95523
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NUM_NODES=4
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_CPUS_PER_NODE=4(x4)
</span><br>
<span class="quotelev1">&gt; SLURM_JOBID=95523
</span><br>
<span class="quotelev1">&gt; SLURM_NNODES=4
</span><br>
<span class="quotelev1">&gt; SLURM_NODELIST=svbu-mpi[001-004]
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE=1(x4)
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 4 --bynode env | egrep ^SLURM_ | wc -l
</span><br>
<span class="quotelev1">&gt; 144
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good -- we also got 144.  Save them to a file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 4 --bynode env | egrep ^SLURM_ | sort &gt; mpirun.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now let's compare what we got from srun and from mpirun:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ diff srun.out mpirun.out
</span><br>
<span class="quotelev1">&gt; 93,108c93,108
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_SRUN_COMM_PORT=33571
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_SRUN_COMM_PORT=33571
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_SRUN_COMM_PORT=33571
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_SRUN_COMM_PORT=33571
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEP_ID=15
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEP_ID=15
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEP_ID=15
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEP_ID=15
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEPID=15
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEPID=15
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEPID=15
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEPID=15
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEP_LAUNCHER_PORT=33571
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEP_LAUNCHER_PORT=33571
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEP_LAUNCHER_PORT=33571
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEP_LAUNCHER_PORT=33571
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_SRUN_COMM_PORT=54184
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_SRUN_COMM_PORT=54184
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_SRUN_COMM_PORT=54184
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_SRUN_COMM_PORT=54184
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEP_ID=18
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEP_ID=18
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEP_ID=18
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEP_ID=18
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEPID=18
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEPID=18
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEPID=18
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEPID=18
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEP_LAUNCHER_PORT=54184
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEP_LAUNCHER_PORT=54184
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEP_LAUNCHER_PORT=54184
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEP_LAUNCHER_PORT=54184
</span><br>
<span class="quotelev1">&gt; 125,128c125,128
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_TASK_PID=3899
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_TASK_PID=3907
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_TASK_PID=3908
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_TASK_PID=3997
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_TASK_PID=3924
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_TASK_PID=3933
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_TASK_PID=3934
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_TASK_PID=4039
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They're identical except for per-step values (ports, PIDs, etc.) -- these differences are expected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What version of OMPI are you running?  What happens if you repeat this experiment?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would find it very strange if Open MPI's mpirun is filtering some SLURM env variables to some processes and not to all -- your output shows disparate output between the different processes.  That's just plain weird.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 23, 2011, at 12:05 PM, Henderson, Brent wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; SLURM seems to be doing this in the case of a regular srun:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [brent_at_node1 mpi]$ srun -N 2 -n 4 env | egrep SLURM_NODEID\|SLURM_PROCID\|SLURM_LOCALID | sort
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_LOCALID=0
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_LOCALID=0
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_LOCALID=1
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_LOCALID=1
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NODEID=0
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NODEID=0
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NODEID=1
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NODEID=1
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_PROCID=0
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_PROCID=1
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_PROCID=2
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_PROCID=3
</span><br>
<span class="quotelev2">&gt; &gt; [brent_at_node1 mpi]$
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Since srun is not supported currently by OpenMPI, I have to use salloc &#150; right?  In this case, it is up to OpenMPI to interpret the SLURM environment variables it sees in the one process that is launched and &#145;do the right thing&#146; &#150; whatever that means in this case.  How does OpenMPI start the processes on the remote nodes under the covers?  (use srun, generate a hostfile and launch as you would outside SLURM, &#133;)  This may be the difference between HP-MPI and OpenMPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brent
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Wednesday, February 23, 2011 10:07 AM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] SLURM environment variables at runtime
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Resource managers generally frown on the idea of any program passing RM-managed envars from one node to another, and this is certainly true of slurm. The reason is that the RM reserves those values for its own use when managing remote nodes. For example, if you got an allocation and then used mpirun to launch a job across only a portion of that allocation, and then ran another mpirun instance in parallel on the remainder of the nodes, the slurm envars for those two mpirun instances -need- to be quite different. Having mpirun forward the values it sees would cause the system to become very confused.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We learned the hard way never to cross that line :-(
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You have two options:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (a) you could get your sys admin to configure slurm correctly to provide your desired envars on the remote nodes. This is the recommended (by slurm and other RMs) way of getting what you requested. It is a simple configuration option - if he needs help, he should contact the slurm mailing list
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (b) you can ask mpirun to do so, at your own risk. Specify each parameter with a &quot;-x FOO&quot; argument. See &quot;man mpirun&quot; for details. Keep an eye out for aberrant behavior.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Feb 23, 2011 at 8:38 AM, Henderson, Brent &lt;brent.henderson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Everyone, I have an OpenMPI/SLURM specific question,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I&#146;m using MPI as a launcher for another application I&#146;m working on and it is dependent on the SLURM environment variables making their way into the a.out&#146;s environment.  This works as I need if I use HP-MPI/PMPI, but when I use OpenMPI, it appears that not all are set as I would like across all of the ranks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have example output below from a simple a.out that just writes out the environment that it sees to a file whose name is based on the node name and rank number.  Note that with OpenMPI, that things like SLURM_NNODES and SLURM_TASKS_PER_NODE are not set the same for ranks on the different nodes and things like SLURM_LOCALID are just missing entirely.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So the question is, should the environment variables on the remote nodes (from the perspective of where the job is launched) have the full set of SLURM environment variables as seen on the launching node?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brent Henderson
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [brent_at_node2 mpi]$ rm node*
</span><br>
<span class="quotelev2">&gt; &gt; [brent_at_node2 mpi]$ mkdir openmpi hpmpi
</span><br>
<span class="quotelev2">&gt; &gt; [brent_at_node2 mpi]$ salloc -N 2 -n 4 mpirun ./printenv.openmpi
</span><br>
<span class="quotelev2">&gt; &gt; salloc: Granted job allocation 23
</span><br>
<span class="quotelev2">&gt; &gt; Hello world! I'm 3 of 4 on node1
</span><br>
<span class="quotelev2">&gt; &gt; Hello world! I'm 2 of 4 on node1
</span><br>
<span class="quotelev2">&gt; &gt; Hello world! I'm 1 of 4 on node2
</span><br>
<span class="quotelev2">&gt; &gt; Hello world! I'm 0 of 4 on node2
</span><br>
<span class="quotelev2">&gt; &gt; salloc: Relinquishing job allocation 23
</span><br>
<span class="quotelev2">&gt; &gt; [brent_at_node2 mpi]$ mv node* openmpi/
</span><br>
<span class="quotelev2">&gt; &gt; [brent_at_node2 mpi]$ egrep 'NODEID|NNODES|LOCALID|NODELIST|NPROCS|PROCID|TASKS_PER' openmpi/node1.3.of.4
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_JOB_NODELIST=node[1-2]
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NNODES=1
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NODELIST=node[1-2]
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_TASKS_PER_NODE=1
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NPROCS=1
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEP_NODELIST=node1
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEP_TASKS_PER_NODE=1
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NODEID=0
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_PROCID=0
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_LOCALID=0
</span><br>
<span class="quotelev2">&gt; &gt; [brent_at_node2 mpi]$ egrep 'NODEID|NNODES|LOCALID|NODELIST|NPROCS|PROCID|TASKS_PER' openmpi/node2.1.of.4
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_JOB_NODELIST=node[1-2]
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NNODES=2
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NODELIST=node[1-2]
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_TASKS_PER_NODE=2(x2)
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NPROCS=4
</span><br>
<span class="quotelev2">&gt; &gt; [brent_at_node2 mpi]$
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [brent_at_node2 mpi]$ /opt/hpmpi/bin/mpirun -srun -N 2 -n 4 ./printenv.hpmpi
</span><br>
<span class="quotelev2">&gt; &gt; Hello world! I'm 2 of 4 on node2
</span><br>
<span class="quotelev2">&gt; &gt; Hello world! I'm 3 of 4 on node2
</span><br>
<span class="quotelev2">&gt; &gt; Hello world! I'm 0 of 4 on node1
</span><br>
<span class="quotelev2">&gt; &gt; Hello world! I'm 1 of 4 on node1
</span><br>
<span class="quotelev2">&gt; &gt; [brent_at_node2 mpi]$ mv node* hpmpi/
</span><br>
<span class="quotelev2">&gt; &gt; [brent_at_node2 mpi]$ egrep 'NODEID|NNODES|LOCALID|NODELIST|NPROCS|PROCID|TASKS_PER' hpmpi/node1.1.of.4
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NODELIST=node[1-2]
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_TASKS_PER_NODE=2(x2)
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEP_NODELIST=node[1-2]
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEP_TASKS_PER_NODE=2(x2)
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NNODES=2
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NPROCS=4
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NODEID=0
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_PROCID=1
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_LOCALID=1
</span><br>
<span class="quotelev2">&gt; &gt; [brent_at_node2 mpi]$ egrep 'NODEID|NNODES|LOCALID|NODELIST|NPROCS|PROCID|TASKS_PER' hpmpi/node2.3.of.4
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NODELIST=node[1-2]
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_TASKS_PER_NODE=2(x2)
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEP_NODELIST=node[1-2]
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEP_TASKS_PER_NODE=2(x2)
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NNODES=2
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NPROCS=4
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NODEID=1
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_PROCID=3
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_LOCALID=1
</span><br>
<span class="quotelev2">&gt; &gt; [brent_at_node2 mpi]$
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15730.php">Ralph Castain: "Re: [OMPI users] multicast not available"</a>
<li><strong>Previous message:</strong> <a href="15728.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>In reply to:</strong> <a href="15728.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15731.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Reply:</strong> <a href="15731.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Reply:</strong> <a href="15732.php">Henderson, Brent: "Re: [OMPI users] SLURM environment variables at runtime"</a>
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
