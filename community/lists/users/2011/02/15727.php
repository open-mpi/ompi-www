<?
$subject_val = "Re: [OMPI users] SLURM environment variables at runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 24 09:18:43 2011" -->
<!-- isoreceived="20110224141843" -->
<!-- sent="Thu, 24 Feb 2011 09:18:38 -0500" -->
<!-- isosent="20110224141838" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SLURM environment variables at runtime" -->
<!-- id="3D0662CF-DE1F-45BA-979D-0A7E81DA00EA_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="8BC9254C6D66C746B00D00661FAD9AF06E515B60DA_at_GVW1341EXA.americas.hpqcorp.net" -->
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
<strong>Date:</strong> 2011-02-24 09:18:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15728.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Previous message:</strong> <a href="15726.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="15698.php">Henderson, Brent: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15728.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Reply:</strong> <a href="15728.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid I don't see the problem.  Let's get 4 nodes from slurm:
<br>
<p>$ salloc -N 4 
<br>
<p>Now let's run env and see what SLURM_ env variables we see:
<br>
<p>$ srun env | egrep ^SLURM_ | head
<br>
SLURM_JOB_ID=95523
<br>
SLURM_JOB_NUM_NODES=4
<br>
SLURM_JOB_NODELIST=svbu-mpi[001-004]
<br>
SLURM_JOB_CPUS_PER_NODE=4(x4)
<br>
SLURM_JOBID=95523
<br>
SLURM_NNODES=4
<br>
SLURM_NODELIST=svbu-mpi[001-004]
<br>
SLURM_TASKS_PER_NODE=1(x4)
<br>
SLURM_PRIO_PROCESS=0
<br>
SLURM_UMASK=0002
<br>
$ srun env | egrep ^SLURM_ | wc -l
<br>
144
<br>
<p>Good -- there's 144 of them.  Let's save them to a file for comparison, later.
<br>
<p>$ srun env | egrep ^SLURM_ | sort &gt; srun.out
<br>
<p>Now let's repeat the process with mpirun.  Note that mpirun defaults to running one process per core (vs. srun's default of running one per node).  So let's tone mpirun down to use one process per node and look for the SLURM_ env variables.
<br>
<p>$ mpirun -np 4 --bynode env | egrep ^SLURM_ | head
<br>
SLURM_JOB_ID=95523
<br>
SLURM_JOB_NUM_NODES=4
<br>
SLURM_JOB_NODELIST=svbu-mpi[001-004]
<br>
SLURM_JOB_ID=95523
<br>
SLURM_JOB_NUM_NODES=4
<br>
SLURM_JOB_CPUS_PER_NODE=4(x4)
<br>
SLURM_JOBID=95523
<br>
SLURM_NNODES=4
<br>
SLURM_NODELIST=svbu-mpi[001-004]
<br>
SLURM_TASKS_PER_NODE=1(x4)
<br>
$ mpirun -np 4 --bynode env | egrep ^SLURM_ | wc -l
<br>
144
<br>
<p>Good -- we also got 144.  Save them to a file.
<br>
<p>$ mpirun -np 4 --bynode env | egrep ^SLURM_ | sort &gt; mpirun.out
<br>
<p>Now let's compare what we got from srun and from mpirun:
<br>
<p>$ diff srun.out mpirun.out 
<br>
93,108c93,108
<br>
&lt; SLURM_SRUN_COMM_PORT=33571
<br>
&lt; SLURM_SRUN_COMM_PORT=33571
<br>
&lt; SLURM_SRUN_COMM_PORT=33571
<br>
&lt; SLURM_SRUN_COMM_PORT=33571
<br>
&lt; SLURM_STEP_ID=15
<br>
&lt; SLURM_STEP_ID=15
<br>
&lt; SLURM_STEP_ID=15
<br>
&lt; SLURM_STEP_ID=15
<br>
&lt; SLURM_STEPID=15
<br>
&lt; SLURM_STEPID=15
<br>
&lt; SLURM_STEPID=15
<br>
&lt; SLURM_STEPID=15
<br>
&lt; SLURM_STEP_LAUNCHER_PORT=33571
<br>
&lt; SLURM_STEP_LAUNCHER_PORT=33571
<br>
&lt; SLURM_STEP_LAUNCHER_PORT=33571
<br>
&lt; SLURM_STEP_LAUNCHER_PORT=33571
<br>
<pre>
---
&gt; SLURM_SRUN_COMM_PORT=54184
&gt; SLURM_SRUN_COMM_PORT=54184
&gt; SLURM_SRUN_COMM_PORT=54184
&gt; SLURM_SRUN_COMM_PORT=54184
&gt; SLURM_STEP_ID=18
&gt; SLURM_STEP_ID=18
&gt; SLURM_STEP_ID=18
&gt; SLURM_STEP_ID=18
&gt; SLURM_STEPID=18
&gt; SLURM_STEPID=18
&gt; SLURM_STEPID=18
&gt; SLURM_STEPID=18
&gt; SLURM_STEP_LAUNCHER_PORT=54184
&gt; SLURM_STEP_LAUNCHER_PORT=54184
&gt; SLURM_STEP_LAUNCHER_PORT=54184
&gt; SLURM_STEP_LAUNCHER_PORT=54184
125,128c125,128
&lt; SLURM_TASK_PID=3899
&lt; SLURM_TASK_PID=3907
&lt; SLURM_TASK_PID=3908
&lt; SLURM_TASK_PID=3997
---
&gt; SLURM_TASK_PID=3924
&gt; SLURM_TASK_PID=3933
&gt; SLURM_TASK_PID=3934
&gt; SLURM_TASK_PID=4039
$
They're identical except for per-step values (ports, PIDs, etc.) -- these differences are expected.
What version of OMPI are you running?  What happens if you repeat this experiment?
I would find it very strange if Open MPI's mpirun is filtering some SLURM env variables to some processes and not to all -- your output shows disparate output between the different processes.  That's just plain weird.
On Feb 23, 2011, at 12:05 PM, Henderson, Brent wrote:
&gt; SLURM seems to be doing this in the case of a regular srun:
&gt;  
&gt; [brent_at_node1 mpi]$ srun -N 2 -n 4 env | egrep SLURM_NODEID\|SLURM_PROCID\|SLURM_LOCALID | sort
&gt; SLURM_LOCALID=0
&gt; SLURM_LOCALID=0
&gt; SLURM_LOCALID=1
&gt; SLURM_LOCALID=1
&gt; SLURM_NODEID=0
&gt; SLURM_NODEID=0
&gt; SLURM_NODEID=1
&gt; SLURM_NODEID=1
&gt; SLURM_PROCID=0
&gt; SLURM_PROCID=1
&gt; SLURM_PROCID=2
&gt; SLURM_PROCID=3
&gt; [brent_at_node1 mpi]$
&gt;  
&gt; Since srun is not supported currently by OpenMPI, I have to use salloc &#150; right?  In this case, it is up to OpenMPI to interpret the SLURM environment variables it sees in the one process that is launched and &#145;do the right thing&#146; &#150; whatever that means in this case.  How does OpenMPI start the processes on the remote nodes under the covers?  (use srun, generate a hostfile and launch as you would outside SLURM, &#133;)  This may be the difference between HP-MPI and OpenMPI.
&gt;  
&gt; Thanks,
&gt;  
&gt; Brent
&gt;  
&gt;  
&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
&gt; Sent: Wednesday, February 23, 2011 10:07 AM
&gt; To: Open MPI Users
&gt; Subject: Re: [OMPI users] SLURM environment variables at runtime
&gt;  
&gt; Resource managers generally frown on the idea of any program passing RM-managed envars from one node to another, and this is certainly true of slurm. The reason is that the RM reserves those values for its own use when managing remote nodes. For example, if you got an allocation and then used mpirun to launch a job across only a portion of that allocation, and then ran another mpirun instance in parallel on the remainder of the nodes, the slurm envars for those two mpirun instances -need- to be quite different. Having mpirun forward the values it sees would cause the system to become very confused.
&gt;  
&gt; We learned the hard way never to cross that line :-(
&gt;  
&gt; You have two options:
&gt;  
&gt; (a) you could get your sys admin to configure slurm correctly to provide your desired envars on the remote nodes. This is the recommended (by slurm and other RMs) way of getting what you requested. It is a simple configuration option - if he needs help, he should contact the slurm mailing list
&gt;  
&gt; (b) you can ask mpirun to do so, at your own risk. Specify each parameter with a &quot;-x FOO&quot; argument. See &quot;man mpirun&quot; for details. Keep an eye out for aberrant behavior.
&gt;  
&gt; Ralph
&gt;  
&gt; 
&gt; On Wed, Feb 23, 2011 at 8:38 AM, Henderson, Brent &lt;brent.henderson_at_[hidden]&gt; wrote:
&gt; Hi Everyone, I have an OpenMPI/SLURM specific question,
&gt;  
&gt; I&#146;m using MPI as a launcher for another application I&#146;m working on and it is dependent on the SLURM environment variables making their way into the a.out&#146;s environment.  This works as I need if I use HP-MPI/PMPI, but when I use OpenMPI, it appears that not all are set as I would like across all of the ranks.
&gt;  
&gt; I have example output below from a simple a.out that just writes out the environment that it sees to a file whose name is based on the node name and rank number.  Note that with OpenMPI, that things like SLURM_NNODES and SLURM_TASKS_PER_NODE are not set the same for ranks on the different nodes and things like SLURM_LOCALID are just missing entirely.
&gt;  
&gt; So the question is, should the environment variables on the remote nodes (from the perspective of where the job is launched) have the full set of SLURM environment variables as seen on the launching node?
&gt;  
&gt; Thanks,
&gt;  
&gt; Brent Henderson
&gt;  
&gt; [brent_at_node2 mpi]$ rm node*
&gt; [brent_at_node2 mpi]$ mkdir openmpi hpmpi
&gt; [brent_at_node2 mpi]$ salloc -N 2 -n 4 mpirun ./printenv.openmpi
&gt; salloc: Granted job allocation 23
&gt; Hello world! I'm 3 of 4 on node1
&gt; Hello world! I'm 2 of 4 on node1
&gt; Hello world! I'm 1 of 4 on node2
&gt; Hello world! I'm 0 of 4 on node2
&gt; salloc: Relinquishing job allocation 23
&gt; [brent_at_node2 mpi]$ mv node* openmpi/
&gt; [brent_at_node2 mpi]$ egrep 'NODEID|NNODES|LOCALID|NODELIST|NPROCS|PROCID|TASKS_PER' openmpi/node1.3.of.4
&gt; SLURM_JOB_NODELIST=node[1-2]
&gt; SLURM_NNODES=1
&gt; SLURM_NODELIST=node[1-2]
&gt; SLURM_TASKS_PER_NODE=1
&gt; SLURM_NPROCS=1
&gt; SLURM_STEP_NODELIST=node1
&gt; SLURM_STEP_TASKS_PER_NODE=1
&gt; SLURM_NODEID=0
&gt; SLURM_PROCID=0
&gt; SLURM_LOCALID=0
&gt; [brent_at_node2 mpi]$ egrep 'NODEID|NNODES|LOCALID|NODELIST|NPROCS|PROCID|TASKS_PER' openmpi/node2.1.of.4
&gt; SLURM_JOB_NODELIST=node[1-2]
&gt; SLURM_NNODES=2
&gt; SLURM_NODELIST=node[1-2]
&gt; SLURM_TASKS_PER_NODE=2(x2)
&gt; SLURM_NPROCS=4
&gt; [brent_at_node2 mpi]$
&gt;  
&gt;  
&gt; [brent_at_node2 mpi]$ /opt/hpmpi/bin/mpirun -srun -N 2 -n 4 ./printenv.hpmpi
&gt; Hello world! I'm 2 of 4 on node2
&gt; Hello world! I'm 3 of 4 on node2
&gt; Hello world! I'm 0 of 4 on node1
&gt; Hello world! I'm 1 of 4 on node1
&gt; [brent_at_node2 mpi]$ mv node* hpmpi/
&gt; [brent_at_node2 mpi]$ egrep 'NODEID|NNODES|LOCALID|NODELIST|NPROCS|PROCID|TASKS_PER' hpmpi/node1.1.of.4
&gt; SLURM_NODELIST=node[1-2]
&gt; SLURM_TASKS_PER_NODE=2(x2)
&gt; SLURM_STEP_NODELIST=node[1-2]
&gt; SLURM_STEP_TASKS_PER_NODE=2(x2)
&gt; SLURM_NNODES=2
&gt; SLURM_NPROCS=4
&gt; SLURM_NODEID=0
&gt; SLURM_PROCID=1
&gt; SLURM_LOCALID=1
&gt; [brent_at_node2 mpi]$ egrep 'NODEID|NNODES|LOCALID|NODELIST|NPROCS|PROCID|TASKS_PER' hpmpi/node2.3.of.4
&gt; SLURM_NODELIST=node[1-2]
&gt; SLURM_TASKS_PER_NODE=2(x2)
&gt; SLURM_STEP_NODELIST=node[1-2]
&gt; SLURM_STEP_TASKS_PER_NODE=2(x2)
&gt; SLURM_NNODES=2
&gt; SLURM_NPROCS=4
&gt; SLURM_NODEID=1
&gt; SLURM_PROCID=3
&gt; SLURM_LOCALID=1
&gt; [brent_at_node2 mpi]$
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;  
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="15728.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Previous message:</strong> <a href="15726.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="15698.php">Henderson, Brent: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15728.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Reply:</strong> <a href="15728.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
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
