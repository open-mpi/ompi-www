<?
$subject_val = "Re: [OMPI users] SLURM environment variables at runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 24 11:08:25 2011" -->
<!-- isoreceived="20110224160825" -->
<!-- sent="Thu, 24 Feb 2011 09:05:17 -0700" -->
<!-- isosent="20110224160517" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SLURM environment variables at runtime" -->
<!-- id="AANLkTinKg-iVzyADa7kEaVeZrOoY0sZ0r4TmyCvGs86Y_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8BC9254C6D66C746B00D00661FAD9AF06E515B6416_at_GVW1341EXA.americas.hpqcorp.net" -->
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
<strong>Date:</strong> 2011-02-24 11:05:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15734.php">Xianglong Kong: "[OMPI users] Setup of a two nodes cluster?"</a>
<li><strong>Previous message:</strong> <a href="15732.php">Henderson, Brent: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>In reply to:</strong> <a href="15732.php">Henderson, Brent: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15735.php">Henderson, Brent: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Reply:</strong> <a href="15735.php">Henderson, Brent: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would talk to the slurm folks about it - I don't know anything about the
<br>
internals of HP-MPI, but I do know the relevant OMPI internals. OMPI doesn't
<br>
do anything with respect to the envars. We just use &quot;srun -hostlist &lt;fff&gt;&quot;
<br>
to launch the daemons. Each daemon subsequently gets a message telling it
<br>
what local procs to run, and then fork/exec's those procs. The environment
<br>
set for those procs is a copy of that given to the daemon, including any and
<br>
all slurm values.
<br>
<p>So whatever slurm sets, your procs get.
<br>
<p>My guess is that HP-MPI is doing something with the envars to create the
<br>
difference.
<br>
<p>As for running OMPI procs directly from srun: the slurm folks put out a faq
<br>
(or its equivalent) on it, I believe. I don't recall the details (even
<br>
though I wrote the integration...). If you google our user and/or devel
<br>
mailing lists, though, you'll see threads discussing it. Look for &quot;slurmd&quot;
<br>
in the text - that's the ORTE integration module for that feature.
<br>
<p><p><p>On Thu, Feb 24, 2011 at 8:55 AM, Henderson, Brent &lt;brent.henderson_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; I'm running OpenMPI v1.4.3 and slurm v2.2.1.  I built both with the default
</span><br>
<span class="quotelev1">&gt; configuration except setting the prefix.  The tests were run on the exact
</span><br>
<span class="quotelev1">&gt; same nodes (I only have two).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run the test you outline below, I am still missing a bunch of env
</span><br>
<span class="quotelev1">&gt; variables with OpenMPI.  I ran the extra test of using HP-MPI and they are
</span><br>
<span class="quotelev1">&gt; all present as with the srun invocation.  I don't know if this is my slurm
</span><br>
<span class="quotelev1">&gt; setup or not, but I find this really weird.  If anyone knows the magic to
</span><br>
<span class="quotelev1">&gt; make the fix that Ralph is referring to, I'd appreciate a pointer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My guess was that there is a subtle way that the launch differs between the
</span><br>
<span class="quotelev1">&gt; two products.  But, since it works for Jeff, maybe there really is a slurm
</span><br>
<span class="quotelev1">&gt; option that I need to compile in or set to make this work the way I want.
</span><br>
<span class="quotelev1">&gt;  It is not as simple as HP-MPI moving the environment variables itself as
</span><br>
<span class="quotelev1">&gt; some of the numbers will change per process created on the remote nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brent
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$ salloc -N 2
</span><br>
<span class="quotelev1">&gt; salloc: Granted job allocation 29
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$ srun env | egrep ^SLURM_ | head
</span><br>
<span class="quotelev1">&gt; SLURM_NODELIST=node[1-2]
</span><br>
<span class="quotelev1">&gt; SLURM_NNODES=2
</span><br>
<span class="quotelev1">&gt; SLURM_JOBID=29
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE=1(x2)
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_ID=29
</span><br>
<span class="quotelev1">&gt; SLURM_NODELIST=node[1-2]
</span><br>
<span class="quotelev1">&gt; SLURM_NNODES=2
</span><br>
<span class="quotelev1">&gt; SLURM_JOBID=29
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE=1(x2)
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_ID=29
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$ srun env | egrep ^SLURM_ | wc -l
</span><br>
<span class="quotelev1">&gt; 66
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$ srun env | egrep ^SLURM_ | sort &gt; srun.out
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$ which mpirun
</span><br>
<span class="quotelev1">&gt; ~/bin/openmpi143/bin/mpirun
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$ mpirun -np 2 --bynode env | egrep ^SLURM_ | head
</span><br>
<span class="quotelev1">&gt; SLURM_NODELIST=node[1-2]
</span><br>
<span class="quotelev1">&gt; SLURM_NNODES=2
</span><br>
<span class="quotelev1">&gt; SLURM_JOBID=29
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE=8(x2)
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_ID=29
</span><br>
<span class="quotelev1">&gt; SLURM_SUBMIT_DIR=/mnt/node1/home/brent/src/mpi
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NODELIST=node[1-2]
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_CPUS_PER_NODE=8(x2)
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NUM_NODES=2
</span><br>
<span class="quotelev1">&gt; SLURM_NODELIST=node[1-2]
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$ which mpirun
</span><br>
<span class="quotelev1">&gt; ~/bin/openmpi143/bin/mpirun
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$ mpirun -np 2 --bynode env | egrep ^SLURM_ | wc -l
</span><br>
<span class="quotelev1">&gt; 42  &lt;-- note, not 66 as above!
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$ mpirun -np 2 --bynode env | egrep ^SLURM_ | sort &gt;
</span><br>
<span class="quotelev1">&gt; mpirun.out
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$ diff srun.out mpirun.out
</span><br>
<span class="quotelev1">&gt; 2d1
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_CHECKPOINT_IMAGE_DIR=/mnt/node1/home/brent/src/mpi
</span><br>
<span class="quotelev1">&gt; 4,5d2
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_CPUS_ON_NODE=8
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_CPUS_PER_TASK=1
</span><br>
<span class="quotelev1">&gt; 8d4
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_DISTRIBUTION=cyclic
</span><br>
<span class="quotelev1">&gt; 10d5
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_GTIDS=1
</span><br>
<span class="quotelev1">&gt; 22,23d16
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_LAUNCH_NODE_IPADDR=10.0.205.134
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_LOCALID=0
</span><br>
<span class="quotelev1">&gt; 25c18
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_NNODES=2
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NNODES=1
</span><br>
<span class="quotelev1">&gt; 28d20
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_NODEID=1
</span><br>
<span class="quotelev1">&gt; 31,35c23,24
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_NPROCS=2
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_NPROCS=2
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_NTASKS=2
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_NTASKS=2
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_PRIO_PROCESS=0
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NPROCS=1
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NTASKS=1
</span><br>
<span class="quotelev1">&gt; 38d26
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_PROCID=1
</span><br>
<span class="quotelev1">&gt; 40,56c28,35
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_SRUN_COMM_HOST=10.0.205.134
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_SRUN_COMM_PORT=43247
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_SRUN_COMM_PORT=43247
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEP_ID=2
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEP_ID=2
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEPID=2
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEPID=2
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEP_LAUNCHER_PORT=43247
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEP_LAUNCHER_PORT=43247
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEP_NODELIST=node[1-2]
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEP_NODELIST=node[1-2]
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEP_NUM_NODES=2
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEP_NUM_NODES=2
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEP_NUM_TASKS=2
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEP_NUM_TASKS=2
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEP_TASKS_PER_NODE=1(x2)
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEP_TASKS_PER_NODE=1(x2)
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_SRUN_COMM_PORT=45154
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEP_ID=5
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEPID=5
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEP_LAUNCHER_PORT=45154
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEP_NODELIST=node1
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEP_NUM_NODES=1
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEP_NUM_TASKS=1
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEP_TASKS_PER_NODE=1
</span><br>
<span class="quotelev1">&gt; 59,62c38,40
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_TASK_PID=1381
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_TASK_PID=2288
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_TASKS_PER_NODE=1(x2)
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_TASKS_PER_NODE=1(x2)
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_TASK_PID=1429
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_TASKS_PER_NODE=1
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_TASKS_PER_NODE=8(x2)
</span><br>
<span class="quotelev1">&gt; 64,65d41
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_TOPOLOGY_ADDR=node2
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_TOPOLOGY_ADDR_PATTERN=node
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$ /opt/hpmpi/bin/mpirun -srun -n 2 -N 2 env | egrep
</span><br>
<span class="quotelev1">&gt; ^SLURM_ | sort &gt; hpmpi.out
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$ diff srun.out hpmpi.out
</span><br>
<span class="quotelev1">&gt; 20a21,22
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_KILL_BAD_EXIT=1
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_KILL_BAD_EXIT=1
</span><br>
<span class="quotelev1">&gt; 41,48c43,50
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_SRUN_COMM_PORT=43247
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_SRUN_COMM_PORT=43247
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEP_ID=2
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEP_ID=2
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEPID=2
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEPID=2
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEP_LAUNCHER_PORT=43247
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_STEP_LAUNCHER_PORT=43247
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_SRUN_COMM_PORT=33347
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_SRUN_COMM_PORT=33347
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEP_ID=8
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEP_ID=8
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEPID=8
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEPID=8
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEP_LAUNCHER_PORT=33347
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_STEP_LAUNCHER_PORT=33347
</span><br>
<span class="quotelev1">&gt; 59,60c61,62
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_TASK_PID=1381
</span><br>
<span class="quotelev1">&gt; &lt; SLURM_TASK_PID=2288
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_TASK_PID=1592
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_TASK_PID=2590
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$ grep SLURM_PROCID srun.out
</span><br>
<span class="quotelev1">&gt; SLURM_PROCID=0
</span><br>
<span class="quotelev1">&gt; SLURM_PROCID=1
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$ grep SLURM_PROCID mpirun.out
</span><br>
<span class="quotelev1">&gt; SLURM_PROCID=0
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$ grep SLURM_PROCID hpmpi.out
</span><br>
<span class="quotelev1">&gt; SLURM_PROCID=0
</span><br>
<span class="quotelev1">&gt; SLURM_PROCID=1
</span><br>
<span class="quotelev1">&gt; [brent_at_node2 mpi]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt; &gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Thursday, February 24, 2011 9:31 AM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] SLURM environment variables at runtime
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The weird thing is that when running his test, he saw different results
</span><br>
<span class="quotelev2">&gt; &gt; with HP MPI vs. Open MPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What his test didn't say was whether those were the same exact nodes or
</span><br>
<span class="quotelev2">&gt; &gt; not.  It would be good to repeat my experiment with the same exact
</span><br>
<span class="quotelev2">&gt; &gt; nodes (e.g., inside one SLURM salloc job, or use the -w param to
</span><br>
<span class="quotelev2">&gt; &gt; specify the same nodes for salloc for OMPI and srun for HP MPI).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 24, 2011, at 10:02 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Like I said, this isn't an OMPI problem. You have your slurm
</span><br>
<span class="quotelev2">&gt; &gt; configured to pass certain envars to the remote nodes, and Brent
</span><br>
<span class="quotelev2">&gt; &gt; doesn't. It truly is just that simple.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I've seen this before with other slurm installations. Which envars
</span><br>
<span class="quotelev2">&gt; &gt; get set on the backend is configurable, that's all.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Has nothing to do with OMPI.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Thu, Feb 24, 2011 at 7:18 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm afraid I don't see the problem.  Let's get 4 nodes from slurm:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ salloc -N 4
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Now let's run env and see what SLURM_ env variables we see:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ srun env | egrep ^SLURM_ | head
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLURM_JOB_ID=95523
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLURM_JOB_NUM_NODES=4
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLURM_JOB_NODELIST=svbu-mpi[001-004]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLURM_JOB_CPUS_PER_NODE=4(x4)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLURM_JOBID=95523
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLURM_NNODES=4
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLURM_NODELIST=svbu-mpi[001-004]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLURM_TASKS_PER_NODE=1(x4)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLURM_PRIO_PROCESS=0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLURM_UMASK=0002
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ srun env | egrep ^SLURM_ | wc -l
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 144
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Good -- there's 144 of them.  Let's save them to a file for
</span><br>
<span class="quotelev2">&gt; &gt; comparison, later.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ srun env | egrep ^SLURM_ | sort &gt; srun.out
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Now let's repeat the process with mpirun.  Note that mpirun defaults
</span><br>
<span class="quotelev2">&gt; &gt; to running one process per core (vs. srun's default of running one per
</span><br>
<span class="quotelev2">&gt; &gt; node).  So let's tone mpirun down to use one process per node and look
</span><br>
<span class="quotelev2">&gt; &gt; for the SLURM_ env variables.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ mpirun -np 4 --bynode env | egrep ^SLURM_ | head
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLURM_JOB_ID=95523
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLURM_JOB_NUM_NODES=4
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLURM_JOB_NODELIST=svbu-mpi[001-004]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLURM_JOB_ID=95523
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLURM_JOB_NUM_NODES=4
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLURM_JOB_CPUS_PER_NODE=4(x4)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLURM_JOBID=95523
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLURM_NNODES=4
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLURM_NODELIST=svbu-mpi[001-004]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLURM_TASKS_PER_NODE=1(x4)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ mpirun -np 4 --bynode env | egrep ^SLURM_ | wc -l
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 144
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Good -- we also got 144.  Save them to a file.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ mpirun -np 4 --bynode env | egrep ^SLURM_ | sort &gt; mpirun.out
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Now let's compare what we got from srun and from mpirun:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ diff srun.out mpirun.out
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 93,108c93,108
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt; SLURM_SRUN_COMM_PORT=33571
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt; SLURM_SRUN_COMM_PORT=33571
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt; SLURM_SRUN_COMM_PORT=33571
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt; SLURM_SRUN_COMM_PORT=33571
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt; SLURM_STEP_ID=15
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt; SLURM_STEP_ID=15
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt; SLURM_STEP_ID=15
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt; SLURM_STEP_ID=15
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt; SLURM_STEPID=15
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt; SLURM_STEPID=15
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt; SLURM_STEPID=15
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt; SLURM_STEPID=15
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt; SLURM_STEP_LAUNCHER_PORT=33571
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt; SLURM_STEP_LAUNCHER_PORT=33571
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt; SLURM_STEP_LAUNCHER_PORT=33571
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt; SLURM_STEP_LAUNCHER_PORT=33571
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ---
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_SRUN_COMM_PORT=54184
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_SRUN_COMM_PORT=54184
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_SRUN_COMM_PORT=54184
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_SRUN_COMM_PORT=54184
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_STEP_ID=18
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_STEP_ID=18
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_STEP_ID=18
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_STEP_ID=18
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_STEPID=18
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_STEPID=18
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_STEPID=18
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_STEPID=18
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_STEP_LAUNCHER_PORT=54184
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_STEP_LAUNCHER_PORT=54184
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_STEP_LAUNCHER_PORT=54184
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_STEP_LAUNCHER_PORT=54184
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 125,128c125,128
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt; SLURM_TASK_PID=3899
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt; SLURM_TASK_PID=3907
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt; SLURM_TASK_PID=3908
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt; SLURM_TASK_PID=3997
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ---
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_TASK_PID=3924
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_TASK_PID=3933
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_TASK_PID=3934
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_TASK_PID=4039
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; They're identical except for per-step values (ports, PIDs, etc.) --
</span><br>
<span class="quotelev2">&gt; &gt; these differences are expected.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; What version of OMPI are you running?  What happens if you repeat
</span><br>
<span class="quotelev2">&gt; &gt; this experiment?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I would find it very strange if Open MPI's mpirun is filtering some
</span><br>
<span class="quotelev2">&gt; &gt; SLURM env variables to some processes and not to all -- your output
</span><br>
<span class="quotelev2">&gt; &gt; shows disparate output between the different processes.  That's just
</span><br>
<span class="quotelev2">&gt; &gt; plain weird.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Feb 23, 2011, at 12:05 PM, Henderson, Brent wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM seems to be doing this in the case of a regular srun:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [brent_at_node1 mpi]$ srun -N 2 -n 4 env | egrep
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NODEID\|SLURM_PROCID\|SLURM_LOCALID | sort
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_LOCALID=0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_LOCALID=0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_LOCALID=1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_LOCALID=1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_NODEID=0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_NODEID=0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_NODEID=1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_NODEID=1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_PROCID=0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_PROCID=1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_PROCID=2
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_PROCID=3
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [brent_at_node1 mpi]$
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Since srun is not supported currently by OpenMPI, I have to use
</span><br>
<span class="quotelev2">&gt; &gt; salloc - right?  In this case, it is up to OpenMPI to interpret the
</span><br>
<span class="quotelev2">&gt; &gt; SLURM environment variables it sees in the one process that is launched
</span><br>
<span class="quotelev2">&gt; &gt; and 'do the right thing' - whatever that means in this case.  How does
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI start the processes on the remote nodes under the covers?  (use
</span><br>
<span class="quotelev2">&gt; &gt; srun, generate a hostfile and launch as you would outside SLURM, ...)
</span><br>
<span class="quotelev2">&gt; &gt; This may be the difference between HP-MPI and OpenMPI.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Brent
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open-
</span><br>
<span class="quotelev2">&gt; &gt; mpi.org] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Sent: Wednesday, February 23, 2011 10:07 AM
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Subject: Re: [OMPI users] SLURM environment variables at runtime
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Resource managers generally frown on the idea of any program
</span><br>
<span class="quotelev2">&gt; &gt; passing RM-managed envars from one node to another, and this is
</span><br>
<span class="quotelev2">&gt; &gt; certainly true of slurm. The reason is that the RM reserves those
</span><br>
<span class="quotelev2">&gt; &gt; values for its own use when managing remote nodes. For example, if you
</span><br>
<span class="quotelev2">&gt; &gt; got an allocation and then used mpirun to launch a job across only a
</span><br>
<span class="quotelev2">&gt; &gt; portion of that allocation, and then ran another mpirun instance in
</span><br>
<span class="quotelev2">&gt; &gt; parallel on the remainder of the nodes, the slurm envars for those two
</span><br>
<span class="quotelev2">&gt; &gt; mpirun instances -need- to be quite different. Having mpirun forward
</span><br>
<span class="quotelev2">&gt; &gt; the values it sees would cause the system to become very confused.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; We learned the hard way never to cross that line :-(
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; You have two options:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (a) you could get your sys admin to configure slurm correctly to
</span><br>
<span class="quotelev2">&gt; &gt; provide your desired envars on the remote nodes. This is the
</span><br>
<span class="quotelev2">&gt; &gt; recommended (by slurm and other RMs) way of getting what you requested.
</span><br>
<span class="quotelev2">&gt; &gt; It is a simple configuration option - if he needs help, he should
</span><br>
<span class="quotelev2">&gt; &gt; contact the slurm mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; (b) you can ask mpirun to do so, at your own risk. Specify each
</span><br>
<span class="quotelev2">&gt; &gt; parameter with a &quot;-x FOO&quot; argument. See &quot;man mpirun&quot; for details. Keep
</span><br>
<span class="quotelev2">&gt; &gt; an eye out for aberrant behavior.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Ralph
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Wed, Feb 23, 2011 at 8:38 AM, Henderson, Brent
</span><br>
<span class="quotelev2">&gt; &gt; &lt;brent.henderson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hi Everyone, I have an OpenMPI/SLURM specific question,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I'm using MPI as a launcher for another application I'm working on
</span><br>
<span class="quotelev2">&gt; &gt; and it is dependent on the SLURM environment variables making their way
</span><br>
<span class="quotelev2">&gt; &gt; into the a.out's environment.  This works as I need if I use HP-
</span><br>
<span class="quotelev2">&gt; &gt; MPI/PMPI, but when I use OpenMPI, it appears that not all are set as I
</span><br>
<span class="quotelev2">&gt; &gt; would like across all of the ranks.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I have example output below from a simple a.out that just writes
</span><br>
<span class="quotelev2">&gt; &gt; out the environment that it sees to a file whose name is based on the
</span><br>
<span class="quotelev2">&gt; &gt; node name and rank number.  Note that with OpenMPI, that things like
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NNODES and SLURM_TASKS_PER_NODE are not set the same for ranks on
</span><br>
<span class="quotelev2">&gt; &gt; the different nodes and things like SLURM_LOCALID are just missing
</span><br>
<span class="quotelev2">&gt; &gt; entirely.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; So the question is, should the environment variables on the remote
</span><br>
<span class="quotelev2">&gt; &gt; nodes (from the perspective of where the job is launched) have the full
</span><br>
<span class="quotelev2">&gt; &gt; set of SLURM environment variables as seen on the launching node?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Brent Henderson
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [brent_at_node2 mpi]$ rm node*
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [brent_at_node2 mpi]$ mkdir openmpi hpmpi
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [brent_at_node2 mpi]$ salloc -N 2 -n 4 mpirun ./printenv.openmpi
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; salloc: Granted job allocation 23
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hello world! I'm 3 of 4 on node1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hello world! I'm 2 of 4 on node1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hello world! I'm 1 of 4 on node2
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hello world! I'm 0 of 4 on node2
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; salloc: Relinquishing job allocation 23
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [brent_at_node2 mpi]$ mv node* openmpi/
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [brent_at_node2 mpi]$ egrep
</span><br>
<span class="quotelev2">&gt; &gt; 'NODEID|NNODES|LOCALID|NODELIST|NPROCS|PROCID|TASKS_PER'
</span><br>
<span class="quotelev2">&gt; &gt; openmpi/node1.3.of.4
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_JOB_NODELIST=node[1-2]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_NNODES=1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_NODELIST=node[1-2]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_TASKS_PER_NODE=1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_NPROCS=1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_STEP_NODELIST=node1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_STEP_TASKS_PER_NODE=1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_NODEID=0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_PROCID=0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_LOCALID=0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [brent_at_node2 mpi]$ egrep
</span><br>
<span class="quotelev2">&gt; &gt; 'NODEID|NNODES|LOCALID|NODELIST|NPROCS|PROCID|TASKS_PER'
</span><br>
<span class="quotelev2">&gt; &gt; openmpi/node2.1.of.4
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_JOB_NODELIST=node[1-2]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_NNODES=2
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_NODELIST=node[1-2]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_TASKS_PER_NODE=2(x2)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_NPROCS=4
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [brent_at_node2 mpi]$
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [brent_at_node2 mpi]$ /opt/hpmpi/bin/mpirun -srun -N 2 -n 4
</span><br>
<span class="quotelev2">&gt; &gt; ./printenv.hpmpi
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hello world! I'm 2 of 4 on node2
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hello world! I'm 3 of 4 on node2
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hello world! I'm 0 of 4 on node1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hello world! I'm 1 of 4 on node1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [brent_at_node2 mpi]$ mv node* hpmpi/
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [brent_at_node2 mpi]$ egrep
</span><br>
<span class="quotelev2">&gt; &gt; 'NODEID|NNODES|LOCALID|NODELIST|NPROCS|PROCID|TASKS_PER'
</span><br>
<span class="quotelev2">&gt; &gt; hpmpi/node1.1.of.4
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_NODELIST=node[1-2]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_TASKS_PER_NODE=2(x2)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_STEP_NODELIST=node[1-2]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_STEP_TASKS_PER_NODE=2(x2)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_NNODES=2
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_NPROCS=4
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_NODEID=0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_PROCID=1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_LOCALID=1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [brent_at_node2 mpi]$ egrep
</span><br>
<span class="quotelev2">&gt; &gt; 'NODEID|NNODES|LOCALID|NODELIST|NPROCS|PROCID|TASKS_PER'
</span><br>
<span class="quotelev2">&gt; &gt; hpmpi/node2.3.of.4
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_NODELIST=node[1-2]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_TASKS_PER_NODE=2(x2)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_STEP_NODELIST=node[1-2]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_STEP_TASKS_PER_NODE=2(x2)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_NNODES=2
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_NPROCS=4
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_NODEID=1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_PROCID=3
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLURM_LOCALID=1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [brent_at_node2 mpi]$
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15733/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15734.php">Xianglong Kong: "[OMPI users] Setup of a two nodes cluster?"</a>
<li><strong>Previous message:</strong> <a href="15732.php">Henderson, Brent: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>In reply to:</strong> <a href="15732.php">Henderson, Brent: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15735.php">Henderson, Brent: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Reply:</strong> <a href="15735.php">Henderson, Brent: "Re: [OMPI users] SLURM environment variables at runtime"</a>
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
