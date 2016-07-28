<?
$subject_val = "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 12 10:48:01 2014" -->
<!-- isoreceived="20140212154801" -->
<!-- sent="Wed, 12 Feb 2014 07:47:53 -0800" -->
<!-- isosent="20140212154753" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems" -->
<!-- id="E89F1DFE-8519-40AD-8F30-57AC3EAD586B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140212153210.GC31985_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-12 10:47:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14127.php">Adrian Reber: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>Previous message:</strong> <a href="14125.php">Adrian Reber: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>In reply to:</strong> <a href="14125.php">Adrian Reber: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14127.php">Adrian Reber: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>Reply:</strong> <a href="14127.php">Adrian Reber: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>Reply:</strong> <a href="14128.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 12, 2014, at 7:32 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ msub -I -l nodes=3:ppn=8
</span><br>
<span class="quotelev1">&gt; salloc: Job is in held state, pending scheduler release
</span><br>
<span class="quotelev1">&gt; salloc: Pending job allocation 131828
</span><br>
<span class="quotelev1">&gt; salloc: job 131828 queued and waiting for resources
</span><br>
<span class="quotelev1">&gt; salloc: job 131828 has been allocated resources
</span><br>
<span class="quotelev1">&gt; salloc: Granted job allocation 131828
</span><br>
<span class="quotelev1">&gt; sh-4.1$ echo $SLURM_TASKS_PER_NODE 
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; sh-4.1$ rpm -q slurm
</span><br>
<span class="quotelev1">&gt; slurm-2.6.5-1.el6.x86_64
</span><br>
<span class="quotelev1">&gt; sh-4.1$ echo $SLURM_NNODES 
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; sh-4.1$ echo $SLURM_JOB_NODELIST 
</span><br>
<span class="quotelev1">&gt; xxxx[107-108,176]
</span><br>
<span class="quotelev1">&gt; sh-4.1$ echo $SLURM_JOB_CPUS_PER_NODE 
</span><br>
<span class="quotelev1">&gt; 8(x3)
</span><br>
<span class="quotelev1">&gt; sh-4.1$ echo $SLURM_NODELIST 
</span><br>
<span class="quotelev1">&gt; xxxx[107-108,176]
</span><br>
<span class="quotelev1">&gt; sh-4.1$ echo $SLURM_NPROCS  
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; sh-4.1$ echo $SLURM_NTASKS 
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; sh-4.1$ echo $SLURM_TASKS_PER_NODE 
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The information in *_NODELIST seems to make sense, but all the other
</span><br>
<span class="quotelev1">&gt; variables (PROCS, TASKS, NODES) report '1', which seems wrong.
</span><br>
<p>Indeed - and that's the problem. Slurm 2.6.5 is the most recent release, and my guess is that SchedMD once again has changed the @$!#%#@ meaning of their envars. Frankly, it is nearly impossible to track all the variants they have created over the years.
<br>
<p>Please check to see if someone did a little customizing on your end as sometimes people do that to Slurm. Could also be they did something in the Slurm config file that is causing the changed behavior.
<br>
<p>Meantime, I'll try to ponder a potential solution in case this really is the &quot;latest&quot; Slurm screwup.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 12, 2014 at 07:19:54AM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; ...and your version of Slurm?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 12, 2014, at 7:19 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is your SLURM_TASKS_PER_NODE?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 12, 2014, at 6:58 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No, the system has only a few MOAB_* variables and many SLURM_*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; variables:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $BASH                         $IFS                          $SECONDS                      $SLURM_PTY_PORT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $BASHOPTS                     $LINENO                       $SHELL                        $SLURM_PTY_WIN_COL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $BASHPID                      $LINES                        $SHELLOPTS                    $SLURM_PTY_WIN_ROW
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $BASH_ALIASES                 $MACHTYPE                     $SHLVL                        $SLURM_SRUN_COMM_HOST
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $BASH_ARGC                    $MAILCHECK                    $SLURMD_NODENAME              $SLURM_SRUN_COMM_PORT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $BASH_ARGV                    $MOAB_CLASS                   $SLURM_CHECKPOINT_IMAGE_DIR   $SLURM_STEPID
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $BASH_CMDS                    $MOAB_GROUP                   $SLURM_CONF                   $SLURM_STEP_ID
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $BASH_COMMAND                 $MOAB_JOBID                   $SLURM_CPUS_ON_NODE           $SLURM_STEP_LAUNCHER_PORT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $BASH_LINENO                  $MOAB_NODECOUNT               $SLURM_DISTRIBUTION           $SLURM_STEP_NODELIST
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $BASH_SOURCE                  $MOAB_PARTITION               $SLURM_GTIDS                  $SLURM_STEP_NUM_NODES
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $BASH_SUBSHELL                $MOAB_PROCCOUNT               $SLURM_JOBID                  $SLURM_STEP_NUM_TASKS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $BASH_VERSINFO                $MOAB_SUBMITDIR               $SLURM_JOB_CPUS_PER_NODE      $SLURM_STEP_TASKS_PER_NODE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $BASH_VERSION                 $MOAB_USER                    $SLURM_JOB_ID                 $SLURM_SUBMIT_DIR
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $COLUMNS                      $OPTERR                       $SLURM_JOB_NODELIST           $SLURM_SUBMIT_HOST
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $COMP_WORDBREAKS              $OPTIND                       $SLURM_JOB_NUM_NODES          $SLURM_TASKS_PER_NODE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $DIRSTACK                     $OSTYPE                       $SLURM_LAUNCH_NODE_IPADDR     $SLURM_TASK_PID
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $EUID                         $PATH                         $SLURM_LOCALID                $SLURM_TOPOLOGY_ADDR
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $GROUPS                       $POSIXLY_CORRECT              $SLURM_NNODES                 $SLURM_TOPOLOGY_ADDR_PATTERN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $HISTCMD                      $PPID                         $SLURM_NODEID                 $SRUN_DEBUG
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $HISTFILE                     $PS1                          $SLURM_NODELIST               $TERM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $HISTFILESIZE                 $PS2                          $SLURM_NPROCS                 $TMPDIR
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $HISTSIZE                     $PS4                          $SLURM_NTASKS                 $UID
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $HOSTNAME                     $PWD                          $SLURM_PRIO_PROCESS           $_
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $HOSTTYPE                     $RANDOM                       $SLURM_PROCID                 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, Feb 12, 2014 at 06:12:45AM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Seems rather odd - since this is managed by Moab, you shouldn't be seeing SLURM envars at all. What you should see are PBS_* envars, including a PBS_NODEFILE that actually contains the allocation.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Feb 12, 2014, at 4:42 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I tried the nightly snapshot (openmpi-1.7.5a1r30692.tar.gz) on a system
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with slurm and moab. I requested an interactive session using:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; msub -I -l nodes=3:ppn=8
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and started a simple test case which fails:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ mpirun -np 2 ./mpi-test 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; There are not enough slots available in the system to satisfy the 2 slots 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; that were requested by the application:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ./mpi-test
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Either request fewer slots for your application, or make more slots available
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; for use.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; srun: error: xxxx108: task 1: Exited with exit code 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; srun: Terminating job step 131823.4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; srun: error: xxxx107: task 0: Exited with exit code 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; srun: Job step aborted
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; slurmd[xxxx108]: *** STEP 131823.4 KILLED AT 2014-02-12T13:30:32 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; requesting only one core works:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ mpirun  ./mpi-test 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 4.4.7 20120313 (Red Hat 4.4.7-4):Process 0 on xxxx106 out of 1: 0.000000
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 4.4.7 20120313 (Red Hat 4.4.7-4):Process 0 on xxxx106 out of 1: 0.000000
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; using openmpi-1.6.5 works with multiple cores:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ mpirun -np 24 ./mpi-test 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 4.4.7 20120313 (Red Hat 4.4.7-4):Process 0 on xxxx106 out of 24: 0.000000
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 4.4.7 20120313 (Red Hat 4.4.7-4):Process 12 on xxxx106 out of 24: 12.000000
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 4.4.7 20120313 (Red Hat 4.4.7-4):Process 11 on xxxx108 out of 24: 11.000000
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 4.4.7 20120313 (Red Hat 4.4.7-4):Process 18 on xxxx106 out of 24: 18.000000
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ echo $SLURM_JOB_CPUS_PER_NODE 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 8(x3)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I never used slurm before so this could also be a user error on my side.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; But as 1.6.5 works it seems something has changed and wanted to let
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; you know in case it was not intentionally.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 		Adrian
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 		Adrian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Adrian Reber &lt;adrian_at_[hidden]&gt;            <a href="http://lisas.de/~adrian/">http://lisas.de/~adrian/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;Let us all bask in television's warm glowing warming glow.&quot; -- Homer Simpson
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		Adrian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Adrian Reber &lt;adrian_at_[hidden]&gt;            <a href="http://lisas.de/~adrian/">http://lisas.de/~adrian/</a>
</span><br>
<span class="quotelev1">&gt; There's got to be more to life than compile-and-go.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14127.php">Adrian Reber: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>Previous message:</strong> <a href="14125.php">Adrian Reber: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>In reply to:</strong> <a href="14125.php">Adrian Reber: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14127.php">Adrian Reber: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>Reply:</strong> <a href="14127.php">Adrian Reber: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>Reply:</strong> <a href="14128.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
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
