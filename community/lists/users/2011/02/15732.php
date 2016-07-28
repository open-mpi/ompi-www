<?
$subject_val = "Re: [OMPI users] SLURM environment variables at runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 24 10:57:19 2011" -->
<!-- isoreceived="20110224155719" -->
<!-- sent="Thu, 24 Feb 2011 15:55:43 +0000" -->
<!-- isosent="20110224155543" -->
<!-- name="Henderson, Brent" -->
<!-- email="brent.henderson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SLURM environment variables at runtime" -->
<!-- id="8BC9254C6D66C746B00D00661FAD9AF06E515B6416_at_GVW1341EXA.americas.hpqcorp.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7556B114-B02A-470D-96AA-A4EA5E011B71_at_cisco.com" -->
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
<strong>Date:</strong> 2011-02-24 10:55:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15733.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Previous message:</strong> <a href="15731.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>In reply to:</strong> <a href="15729.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15733.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Reply:</strong> <a href="15733.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Reply:</strong> <a href="15736.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm running OpenMPI v1.4.3 and slurm v2.2.1.  I built both with the default configuration except setting the prefix.  The tests were run on the exact same nodes (I only have two).
<br>
<p>When I run the test you outline below, I am still missing a bunch of env variables with OpenMPI.  I ran the extra test of using HP-MPI and they are all present as with the srun invocation.  I don't know if this is my slurm setup or not, but I find this really weird.  If anyone knows the magic to make the fix that Ralph is referring to, I'd appreciate a pointer.
<br>
<p>My guess was that there is a subtle way that the launch differs between the two products.  But, since it works for Jeff, maybe there really is a slurm option that I need to compile in or set to make this work the way I want.  It is not as simple as HP-MPI moving the environment variables itself as some of the numbers will change per process created on the remote nodes.
<br>
<p>Thanks,
<br>
<p>Brent
<br>
<p>[brent_at_node2 mpi]$ salloc -N 2
<br>
salloc: Granted job allocation 29
<br>
[brent_at_node2 mpi]$ srun env | egrep ^SLURM_ | head
<br>
SLURM_NODELIST=node[1-2]
<br>
SLURM_NNODES=2
<br>
SLURM_JOBID=29
<br>
SLURM_TASKS_PER_NODE=1(x2)
<br>
SLURM_JOB_ID=29
<br>
SLURM_NODELIST=node[1-2]
<br>
SLURM_NNODES=2
<br>
SLURM_JOBID=29
<br>
SLURM_TASKS_PER_NODE=1(x2)
<br>
SLURM_JOB_ID=29
<br>
[brent_at_node2 mpi]$ srun env | egrep ^SLURM_ | wc -l
<br>
66
<br>
[brent_at_node2 mpi]$ srun env | egrep ^SLURM_ | sort &gt; srun.out
<br>
[brent_at_node2 mpi]$ which mpirun
<br>
~/bin/openmpi143/bin/mpirun
<br>
[brent_at_node2 mpi]$ mpirun -np 2 --bynode env | egrep ^SLURM_ | head
<br>
SLURM_NODELIST=node[1-2]
<br>
SLURM_NNODES=2
<br>
SLURM_JOBID=29
<br>
SLURM_TASKS_PER_NODE=8(x2)
<br>
SLURM_JOB_ID=29
<br>
SLURM_SUBMIT_DIR=/mnt/node1/home/brent/src/mpi
<br>
SLURM_JOB_NODELIST=node[1-2]
<br>
SLURM_JOB_CPUS_PER_NODE=8(x2)
<br>
SLURM_JOB_NUM_NODES=2
<br>
SLURM_NODELIST=node[1-2]
<br>
[brent_at_node2 mpi]$ which mpirun
<br>
~/bin/openmpi143/bin/mpirun
<br>
[brent_at_node2 mpi]$ mpirun -np 2 --bynode env | egrep ^SLURM_ | wc -l
<br>
42  &lt;-- note, not 66 as above!
<br>
[brent_at_node2 mpi]$ mpirun -np 2 --bynode env | egrep ^SLURM_ | sort &gt; mpirun.out
<br>
[brent_at_node2 mpi]$ diff srun.out mpirun.out
<br>
2d1
<br>
&lt; SLURM_CHECKPOINT_IMAGE_DIR=/mnt/node1/home/brent/src/mpi
<br>
4,5d2
<br>
&lt; SLURM_CPUS_ON_NODE=8
<br>
&lt; SLURM_CPUS_PER_TASK=1
<br>
8d4
<br>
&lt; SLURM_DISTRIBUTION=cyclic
<br>
10d5
<br>
&lt; SLURM_GTIDS=1
<br>
22,23d16
<br>
&lt; SLURM_LAUNCH_NODE_IPADDR=10.0.205.134
<br>
&lt; SLURM_LOCALID=0
<br>
25c18
<br>
&lt; SLURM_NNODES=2
<br>
<pre>
---
&gt; SLURM_NNODES=1
28d20
&lt; SLURM_NODEID=1
31,35c23,24
&lt; SLURM_NPROCS=2
&lt; SLURM_NPROCS=2
&lt; SLURM_NTASKS=2
&lt; SLURM_NTASKS=2
&lt; SLURM_PRIO_PROCESS=0
---
&gt; SLURM_NPROCS=1
&gt; SLURM_NTASKS=1
38d26
&lt; SLURM_PROCID=1
40,56c28,35
&lt; SLURM_SRUN_COMM_HOST=10.0.205.134
&lt; SLURM_SRUN_COMM_PORT=43247
&lt; SLURM_SRUN_COMM_PORT=43247
&lt; SLURM_STEP_ID=2
&lt; SLURM_STEP_ID=2
&lt; SLURM_STEPID=2
&lt; SLURM_STEPID=2
&lt; SLURM_STEP_LAUNCHER_PORT=43247
&lt; SLURM_STEP_LAUNCHER_PORT=43247
&lt; SLURM_STEP_NODELIST=node[1-2]
&lt; SLURM_STEP_NODELIST=node[1-2]
&lt; SLURM_STEP_NUM_NODES=2
&lt; SLURM_STEP_NUM_NODES=2
&lt; SLURM_STEP_NUM_TASKS=2
&lt; SLURM_STEP_NUM_TASKS=2
&lt; SLURM_STEP_TASKS_PER_NODE=1(x2)
&lt; SLURM_STEP_TASKS_PER_NODE=1(x2)
---
&gt; SLURM_SRUN_COMM_PORT=45154
&gt; SLURM_STEP_ID=5
&gt; SLURM_STEPID=5
&gt; SLURM_STEP_LAUNCHER_PORT=45154
&gt; SLURM_STEP_NODELIST=node1
&gt; SLURM_STEP_NUM_NODES=1
&gt; SLURM_STEP_NUM_TASKS=1
&gt; SLURM_STEP_TASKS_PER_NODE=1
59,62c38,40
&lt; SLURM_TASK_PID=1381
&lt; SLURM_TASK_PID=2288
&lt; SLURM_TASKS_PER_NODE=1(x2)
&lt; SLURM_TASKS_PER_NODE=1(x2)
---
&gt; SLURM_TASK_PID=1429
&gt; SLURM_TASKS_PER_NODE=1
&gt; SLURM_TASKS_PER_NODE=8(x2)
64,65d41
&lt; SLURM_TOPOLOGY_ADDR=node2
&lt; SLURM_TOPOLOGY_ADDR_PATTERN=node
[brent_at_node2 mpi]$
[brent_at_node2 mpi]$
[brent_at_node2 mpi]$
[brent_at_node2 mpi]$
[brent_at_node2 mpi]$ /opt/hpmpi/bin/mpirun -srun -n 2 -N 2 env | egrep ^SLURM_ | sort &gt; hpmpi.out
[brent_at_node2 mpi]$ diff srun.out hpmpi.out
20a21,22
&gt; SLURM_KILL_BAD_EXIT=1
&gt; SLURM_KILL_BAD_EXIT=1
41,48c43,50
&lt; SLURM_SRUN_COMM_PORT=43247
&lt; SLURM_SRUN_COMM_PORT=43247
&lt; SLURM_STEP_ID=2
&lt; SLURM_STEP_ID=2
&lt; SLURM_STEPID=2
&lt; SLURM_STEPID=2
&lt; SLURM_STEP_LAUNCHER_PORT=43247
&lt; SLURM_STEP_LAUNCHER_PORT=43247
---
&gt; SLURM_SRUN_COMM_PORT=33347
&gt; SLURM_SRUN_COMM_PORT=33347
&gt; SLURM_STEP_ID=8
&gt; SLURM_STEP_ID=8
&gt; SLURM_STEPID=8
&gt; SLURM_STEPID=8
&gt; SLURM_STEP_LAUNCHER_PORT=33347
&gt; SLURM_STEP_LAUNCHER_PORT=33347
59,60c61,62
&lt; SLURM_TASK_PID=1381
&lt; SLURM_TASK_PID=2288
---
&gt; SLURM_TASK_PID=1592
&gt; SLURM_TASK_PID=2590
[brent_at_node2 mpi]$
[brent_at_node2 mpi]$
[brent_at_node2 mpi]$ grep SLURM_PROCID srun.out
SLURM_PROCID=0
SLURM_PROCID=1
[brent_at_node2 mpi]$ grep SLURM_PROCID mpirun.out
SLURM_PROCID=0
[brent_at_node2 mpi]$ grep SLURM_PROCID hpmpi.out
SLURM_PROCID=0
SLURM_PROCID=1
[brent_at_node2 mpi]$
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
&gt; Behalf Of Jeff Squyres
&gt; Sent: Thursday, February 24, 2011 9:31 AM
&gt; To: Open MPI Users
&gt; Subject: Re: [OMPI users] SLURM environment variables at runtime
&gt;
&gt; The weird thing is that when running his test, he saw different results
&gt; with HP MPI vs. Open MPI.
&gt;
&gt; What his test didn't say was whether those were the same exact nodes or
&gt; not.  It would be good to repeat my experiment with the same exact
&gt; nodes (e.g., inside one SLURM salloc job, or use the -w param to
&gt; specify the same nodes for salloc for OMPI and srun for HP MPI).
&gt;
&gt;
&gt; On Feb 24, 2011, at 10:02 AM, Ralph Castain wrote:
&gt;
&gt; &gt; Like I said, this isn't an OMPI problem. You have your slurm
&gt; configured to pass certain envars to the remote nodes, and Brent
&gt; doesn't. It truly is just that simple.
&gt; &gt;
&gt; &gt; I've seen this before with other slurm installations. Which envars
&gt; get set on the backend is configurable, that's all.
&gt; &gt;
&gt; &gt; Has nothing to do with OMPI.
&gt; &gt;
&gt; &gt;
&gt; &gt; On Thu, Feb 24, 2011 at 7:18 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt; wrote:
&gt; &gt; I'm afraid I don't see the problem.  Let's get 4 nodes from slurm:
&gt; &gt;
&gt; &gt; $ salloc -N 4
&gt; &gt;
&gt; &gt; Now let's run env and see what SLURM_ env variables we see:
&gt; &gt;
&gt; &gt; $ srun env | egrep ^SLURM_ | head
&gt; &gt; SLURM_JOB_ID=95523
&gt; &gt; SLURM_JOB_NUM_NODES=4
&gt; &gt; SLURM_JOB_NODELIST=svbu-mpi[001-004]
&gt; &gt; SLURM_JOB_CPUS_PER_NODE=4(x4)
&gt; &gt; SLURM_JOBID=95523
&gt; &gt; SLURM_NNODES=4
&gt; &gt; SLURM_NODELIST=svbu-mpi[001-004]
&gt; &gt; SLURM_TASKS_PER_NODE=1(x4)
&gt; &gt; SLURM_PRIO_PROCESS=0
&gt; &gt; SLURM_UMASK=0002
&gt; &gt; $ srun env | egrep ^SLURM_ | wc -l
&gt; &gt; 144
&gt; &gt;
&gt; &gt; Good -- there's 144 of them.  Let's save them to a file for
&gt; comparison, later.
&gt; &gt;
&gt; &gt; $ srun env | egrep ^SLURM_ | sort &gt; srun.out
&gt; &gt;
&gt; &gt; Now let's repeat the process with mpirun.  Note that mpirun defaults
&gt; to running one process per core (vs. srun's default of running one per
&gt; node).  So let's tone mpirun down to use one process per node and look
&gt; for the SLURM_ env variables.
&gt; &gt;
&gt; &gt; $ mpirun -np 4 --bynode env | egrep ^SLURM_ | head
&gt; &gt; SLURM_JOB_ID=95523
&gt; &gt; SLURM_JOB_NUM_NODES=4
&gt; &gt; SLURM_JOB_NODELIST=svbu-mpi[001-004]
&gt; &gt; SLURM_JOB_ID=95523
&gt; &gt; SLURM_JOB_NUM_NODES=4
&gt; &gt; SLURM_JOB_CPUS_PER_NODE=4(x4)
&gt; &gt; SLURM_JOBID=95523
&gt; &gt; SLURM_NNODES=4
&gt; &gt; SLURM_NODELIST=svbu-mpi[001-004]
&gt; &gt; SLURM_TASKS_PER_NODE=1(x4)
&gt; &gt; $ mpirun -np 4 --bynode env | egrep ^SLURM_ | wc -l
&gt; &gt; 144
&gt; &gt;
&gt; &gt; Good -- we also got 144.  Save them to a file.
&gt; &gt;
&gt; &gt; $ mpirun -np 4 --bynode env | egrep ^SLURM_ | sort &gt; mpirun.out
&gt; &gt;
&gt; &gt; Now let's compare what we got from srun and from mpirun:
&gt; &gt;
&gt; &gt; $ diff srun.out mpirun.out
&gt; &gt; 93,108c93,108
&gt; &gt; &lt; SLURM_SRUN_COMM_PORT=33571
&gt; &gt; &lt; SLURM_SRUN_COMM_PORT=33571
&gt; &gt; &lt; SLURM_SRUN_COMM_PORT=33571
&gt; &gt; &lt; SLURM_SRUN_COMM_PORT=33571
&gt; &gt; &lt; SLURM_STEP_ID=15
&gt; &gt; &lt; SLURM_STEP_ID=15
&gt; &gt; &lt; SLURM_STEP_ID=15
&gt; &gt; &lt; SLURM_STEP_ID=15
&gt; &gt; &lt; SLURM_STEPID=15
&gt; &gt; &lt; SLURM_STEPID=15
&gt; &gt; &lt; SLURM_STEPID=15
&gt; &gt; &lt; SLURM_STEPID=15
&gt; &gt; &lt; SLURM_STEP_LAUNCHER_PORT=33571
&gt; &gt; &lt; SLURM_STEP_LAUNCHER_PORT=33571
&gt; &gt; &lt; SLURM_STEP_LAUNCHER_PORT=33571
&gt; &gt; &lt; SLURM_STEP_LAUNCHER_PORT=33571
&gt; &gt; ---
&gt; &gt; &gt; SLURM_SRUN_COMM_PORT=54184
&gt; &gt; &gt; SLURM_SRUN_COMM_PORT=54184
&gt; &gt; &gt; SLURM_SRUN_COMM_PORT=54184
&gt; &gt; &gt; SLURM_SRUN_COMM_PORT=54184
&gt; &gt; &gt; SLURM_STEP_ID=18
&gt; &gt; &gt; SLURM_STEP_ID=18
&gt; &gt; &gt; SLURM_STEP_ID=18
&gt; &gt; &gt; SLURM_STEP_ID=18
&gt; &gt; &gt; SLURM_STEPID=18
&gt; &gt; &gt; SLURM_STEPID=18
&gt; &gt; &gt; SLURM_STEPID=18
&gt; &gt; &gt; SLURM_STEPID=18
&gt; &gt; &gt; SLURM_STEP_LAUNCHER_PORT=54184
&gt; &gt; &gt; SLURM_STEP_LAUNCHER_PORT=54184
&gt; &gt; &gt; SLURM_STEP_LAUNCHER_PORT=54184
&gt; &gt; &gt; SLURM_STEP_LAUNCHER_PORT=54184
&gt; &gt; 125,128c125,128
&gt; &gt; &lt; SLURM_TASK_PID=3899
&gt; &gt; &lt; SLURM_TASK_PID=3907
&gt; &gt; &lt; SLURM_TASK_PID=3908
&gt; &gt; &lt; SLURM_TASK_PID=3997
&gt; &gt; ---
&gt; &gt; &gt; SLURM_TASK_PID=3924
&gt; &gt; &gt; SLURM_TASK_PID=3933
&gt; &gt; &gt; SLURM_TASK_PID=3934
&gt; &gt; &gt; SLURM_TASK_PID=4039
&gt; &gt; $
&gt; &gt;
&gt; &gt; They're identical except for per-step values (ports, PIDs, etc.) --
&gt; these differences are expected.
&gt; &gt;
&gt; &gt; What version of OMPI are you running?  What happens if you repeat
&gt; this experiment?
&gt; &gt;
&gt; &gt; I would find it very strange if Open MPI's mpirun is filtering some
&gt; SLURM env variables to some processes and not to all -- your output
&gt; shows disparate output between the different processes.  That's just
&gt; plain weird.
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt; On Feb 23, 2011, at 12:05 PM, Henderson, Brent wrote:
&gt; &gt;
&gt; &gt; &gt; SLURM seems to be doing this in the case of a regular srun:
&gt; &gt; &gt;
&gt; &gt; &gt; [brent_at_node1 mpi]$ srun -N 2 -n 4 env | egrep
&gt; SLURM_NODEID\|SLURM_PROCID\|SLURM_LOCALID | sort
&gt; &gt; &gt; SLURM_LOCALID=0
&gt; &gt; &gt; SLURM_LOCALID=0
&gt; &gt; &gt; SLURM_LOCALID=1
&gt; &gt; &gt; SLURM_LOCALID=1
&gt; &gt; &gt; SLURM_NODEID=0
&gt; &gt; &gt; SLURM_NODEID=0
&gt; &gt; &gt; SLURM_NODEID=1
&gt; &gt; &gt; SLURM_NODEID=1
&gt; &gt; &gt; SLURM_PROCID=0
&gt; &gt; &gt; SLURM_PROCID=1
&gt; &gt; &gt; SLURM_PROCID=2
&gt; &gt; &gt; SLURM_PROCID=3
&gt; &gt; &gt; [brent_at_node1 mpi]$
&gt; &gt; &gt;
&gt; &gt; &gt; Since srun is not supported currently by OpenMPI, I have to use
&gt; salloc - right?  In this case, it is up to OpenMPI to interpret the
&gt; SLURM environment variables it sees in the one process that is launched
&gt; and 'do the right thing' - whatever that means in this case.  How does
&gt; OpenMPI start the processes on the remote nodes under the covers?  (use
&gt; srun, generate a hostfile and launch as you would outside SLURM, ...)
&gt; This may be the difference between HP-MPI and OpenMPI.
&gt; &gt; &gt;
&gt; &gt; &gt; Thanks,
&gt; &gt; &gt;
&gt; &gt; &gt; Brent
&gt; &gt; &gt;
&gt; &gt; &gt;
&gt; &gt; &gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open-
&gt; mpi.org] On Behalf Of Ralph Castain
&gt; &gt; &gt; Sent: Wednesday, February 23, 2011 10:07 AM
&gt; &gt; &gt; To: Open MPI Users
&gt; &gt; &gt; Subject: Re: [OMPI users] SLURM environment variables at runtime
&gt; &gt; &gt;
&gt; &gt; &gt; Resource managers generally frown on the idea of any program
&gt; passing RM-managed envars from one node to another, and this is
&gt; certainly true of slurm. The reason is that the RM reserves those
&gt; values for its own use when managing remote nodes. For example, if you
&gt; got an allocation and then used mpirun to launch a job across only a
&gt; portion of that allocation, and then ran another mpirun instance in
&gt; parallel on the remainder of the nodes, the slurm envars for those two
&gt; mpirun instances -need- to be quite different. Having mpirun forward
&gt; the values it sees would cause the system to become very confused.
&gt; &gt; &gt;
&gt; &gt; &gt; We learned the hard way never to cross that line :-(
&gt; &gt; &gt;
&gt; &gt; &gt; You have two options:
&gt; &gt; &gt;
&gt; &gt; &gt; (a) you could get your sys admin to configure slurm correctly to
&gt; provide your desired envars on the remote nodes. This is the
&gt; recommended (by slurm and other RMs) way of getting what you requested.
&gt; It is a simple configuration option - if he needs help, he should
&gt; contact the slurm mailing list
&gt; &gt; &gt;
&gt; &gt; &gt; (b) you can ask mpirun to do so, at your own risk. Specify each
&gt; parameter with a &quot;-x FOO&quot; argument. See &quot;man mpirun&quot; for details. Keep
&gt; an eye out for aberrant behavior.
&gt; &gt; &gt;
&gt; &gt; &gt; Ralph
&gt; &gt; &gt;
&gt; &gt; &gt;
&gt; &gt; &gt; On Wed, Feb 23, 2011 at 8:38 AM, Henderson, Brent
&gt; &lt;brent.henderson_at_[hidden]&gt; wrote:
&gt; &gt; &gt; Hi Everyone, I have an OpenMPI/SLURM specific question,
&gt; &gt; &gt;
&gt; &gt; &gt; I'm using MPI as a launcher for another application I'm working on
&gt; and it is dependent on the SLURM environment variables making their way
&gt; into the a.out's environment.  This works as I need if I use HP-
&gt; MPI/PMPI, but when I use OpenMPI, it appears that not all are set as I
&gt; would like across all of the ranks.
&gt; &gt; &gt;
&gt; &gt; &gt; I have example output below from a simple a.out that just writes
&gt; out the environment that it sees to a file whose name is based on the
&gt; node name and rank number.  Note that with OpenMPI, that things like
&gt; SLURM_NNODES and SLURM_TASKS_PER_NODE are not set the same for ranks on
&gt; the different nodes and things like SLURM_LOCALID are just missing
&gt; entirely.
&gt; &gt; &gt;
&gt; &gt; &gt; So the question is, should the environment variables on the remote
&gt; nodes (from the perspective of where the job is launched) have the full
&gt; set of SLURM environment variables as seen on the launching node?
&gt; &gt; &gt;
&gt; &gt; &gt; Thanks,
&gt; &gt; &gt;
&gt; &gt; &gt; Brent Henderson
&gt; &gt; &gt;
&gt; &gt; &gt; [brent_at_node2 mpi]$ rm node*
&gt; &gt; &gt; [brent_at_node2 mpi]$ mkdir openmpi hpmpi
&gt; &gt; &gt; [brent_at_node2 mpi]$ salloc -N 2 -n 4 mpirun ./printenv.openmpi
&gt; &gt; &gt; salloc: Granted job allocation 23
&gt; &gt; &gt; Hello world! I'm 3 of 4 on node1
&gt; &gt; &gt; Hello world! I'm 2 of 4 on node1
&gt; &gt; &gt; Hello world! I'm 1 of 4 on node2
&gt; &gt; &gt; Hello world! I'm 0 of 4 on node2
&gt; &gt; &gt; salloc: Relinquishing job allocation 23
&gt; &gt; &gt; [brent_at_node2 mpi]$ mv node* openmpi/
&gt; &gt; &gt; [brent_at_node2 mpi]$ egrep
&gt; 'NODEID|NNODES|LOCALID|NODELIST|NPROCS|PROCID|TASKS_PER'
&gt; openmpi/node1.3.of.4
&gt; &gt; &gt; SLURM_JOB_NODELIST=node[1-2]
&gt; &gt; &gt; SLURM_NNODES=1
&gt; &gt; &gt; SLURM_NODELIST=node[1-2]
&gt; &gt; &gt; SLURM_TASKS_PER_NODE=1
&gt; &gt; &gt; SLURM_NPROCS=1
&gt; &gt; &gt; SLURM_STEP_NODELIST=node1
&gt; &gt; &gt; SLURM_STEP_TASKS_PER_NODE=1
&gt; &gt; &gt; SLURM_NODEID=0
&gt; &gt; &gt; SLURM_PROCID=0
&gt; &gt; &gt; SLURM_LOCALID=0
&gt; &gt; &gt; [brent_at_node2 mpi]$ egrep
&gt; 'NODEID|NNODES|LOCALID|NODELIST|NPROCS|PROCID|TASKS_PER'
&gt; openmpi/node2.1.of.4
&gt; &gt; &gt; SLURM_JOB_NODELIST=node[1-2]
&gt; &gt; &gt; SLURM_NNODES=2
&gt; &gt; &gt; SLURM_NODELIST=node[1-2]
&gt; &gt; &gt; SLURM_TASKS_PER_NODE=2(x2)
&gt; &gt; &gt; SLURM_NPROCS=4
&gt; &gt; &gt; [brent_at_node2 mpi]$
&gt; &gt; &gt;
&gt; &gt; &gt;
&gt; &gt; &gt; [brent_at_node2 mpi]$ /opt/hpmpi/bin/mpirun -srun -N 2 -n 4
&gt; ./printenv.hpmpi
&gt; &gt; &gt; Hello world! I'm 2 of 4 on node2
&gt; &gt; &gt; Hello world! I'm 3 of 4 on node2
&gt; &gt; &gt; Hello world! I'm 0 of 4 on node1
&gt; &gt; &gt; Hello world! I'm 1 of 4 on node1
&gt; &gt; &gt; [brent_at_node2 mpi]$ mv node* hpmpi/
&gt; &gt; &gt; [brent_at_node2 mpi]$ egrep
&gt; 'NODEID|NNODES|LOCALID|NODELIST|NPROCS|PROCID|TASKS_PER'
&gt; hpmpi/node1.1.of.4
&gt; &gt; &gt; SLURM_NODELIST=node[1-2]
&gt; &gt; &gt; SLURM_TASKS_PER_NODE=2(x2)
&gt; &gt; &gt; SLURM_STEP_NODELIST=node[1-2]
&gt; &gt; &gt; SLURM_STEP_TASKS_PER_NODE=2(x2)
&gt; &gt; &gt; SLURM_NNODES=2
&gt; &gt; &gt; SLURM_NPROCS=4
&gt; &gt; &gt; SLURM_NODEID=0
&gt; &gt; &gt; SLURM_PROCID=1
&gt; &gt; &gt; SLURM_LOCALID=1
&gt; &gt; &gt; [brent_at_node2 mpi]$ egrep
&gt; 'NODEID|NNODES|LOCALID|NODELIST|NPROCS|PROCID|TASKS_PER'
&gt; hpmpi/node2.3.of.4
&gt; &gt; &gt; SLURM_NODELIST=node[1-2]
&gt; &gt; &gt; SLURM_TASKS_PER_NODE=2(x2)
&gt; &gt; &gt; SLURM_STEP_NODELIST=node[1-2]
&gt; &gt; &gt; SLURM_STEP_TASKS_PER_NODE=2(x2)
&gt; &gt; &gt; SLURM_NNODES=2
&gt; &gt; &gt; SLURM_NPROCS=4
&gt; &gt; &gt; SLURM_NODEID=1
&gt; &gt; &gt; SLURM_PROCID=3
&gt; &gt; &gt; SLURM_LOCALID=1
&gt; &gt; &gt; [brent_at_node2 mpi]$
&gt; &gt; &gt;
&gt; &gt; &gt; _______________________________________________
&gt; &gt; &gt; users mailing list
&gt; &gt; &gt; users_at_[hidden]
&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt; &gt;
&gt; &gt; &gt; _______________________________________________
&gt; &gt; &gt; users mailing list
&gt; &gt; &gt; users_at_[hidden]
&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;
&gt; &gt;
&gt; &gt; --
&gt; &gt; Jeff Squyres
&gt; &gt; jsquyres_at_[hidden]
&gt; &gt; For corporate legal information go to:
&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; &gt;
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt; --
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15733.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Previous message:</strong> <a href="15731.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>In reply to:</strong> <a href="15729.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15733.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Reply:</strong> <a href="15733.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Reply:</strong> <a href="15736.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
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
