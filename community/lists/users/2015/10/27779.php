<?
$subject_val = "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  3 08:48:49 2015" -->
<!-- isoreceived="20151003124849" -->
<!-- sent="Sat, 3 Oct 2015 21:48:48 +0900" -->
<!-- isosent="20151003124848" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes" -->
<!-- id="CAAkFZ5uHhciHz2Jmk3WFK0+43+5Lc9Gpc7JVAKfaJcoZzbyzCA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="09DFD749-3A34-44FD-9795-DFC236ADB645_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-03 08:48:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27780.php">Dimitar Pashov: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.10.1rc1 release"</a>
<li><strong>Previous message:</strong> <a href="27778.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>In reply to:</strong> <a href="27778.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27781.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Marcin,
<br>
<p>could you give a try at v1.10.1rc1 that was released today ?
<br>
it fixes a bug when hwloc was trying to bind outside the cpuset.
<br>
<p>Ralph and all,
<br>
<p>imho, there are several issues here
<br>
- if slurm allocates threads instead of core, then the --oversubscribe
<br>
mpirun option could be mandatory
<br>
- with --oversubscribe --hetero-nodes, mpirun should not fail, and if it
<br>
still fails with v1.10.1rc1, I will ask some more details in order to fix
<br>
ompi
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Saturday, October 3, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Marcin. Looking at this, I&#226;&#128;&#153;m guessing that Slurm may be treating
</span><br>
<span class="quotelev1">&gt; HTs as &#226;&#128;&#156;cores&#226;&#128;&#157; - i.e., as independent cpus. Any chance that is true?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m wondering because bind-to core will attempt to bind your proc to both
</span><br>
<span class="quotelev1">&gt; HTs on the core. For some reason, we thought that 8.24 were HTs on the same
</span><br>
<span class="quotelev1">&gt; core, which is why we tried to bind to that pair of HTs. We got an error
</span><br>
<span class="quotelev1">&gt; because HT #24 was not allocated to us on node c6, but HT #8 was.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 3, 2015, at 2:43 AM, marcin.krotkiewski &lt;
</span><br>
<span class="quotelev1">&gt; marcin.krotkiewski_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi, Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I submit my slurm job as follows
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; salloc --ntasks=64 --mem-per-cpu=2G --time=1:0:0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Effectively, the allocated CPU cores are spread amount many cluster
</span><br>
<span class="quotelev1">&gt; nodes. SLURM uses cgroups to limit the CPU cores available for mpi
</span><br>
<span class="quotelev1">&gt; processes running on a given cluster node. Compute nodes are 2-socket,
</span><br>
<span class="quotelev1">&gt; 8-core E5-2670 systems with HyperThreading on
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; node 0 cpus: 0 1 2 3 4 5 6 7 16 17 18 19 20 21 22 23
</span><br>
<span class="quotelev2">&gt; &gt; node 1 cpus: 8 9 10 11 12 13 14 15 24 25 26 27 28 29 30 31
</span><br>
<span class="quotelev2">&gt; &gt; node distances:
</span><br>
<span class="quotelev2">&gt; &gt; node   0   1
</span><br>
<span class="quotelev2">&gt; &gt;  0:  10  21
</span><br>
<span class="quotelev2">&gt; &gt;  1:  21  10
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I run MPI program with command
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun  --report-bindings --bind-to core -np 64 ./affinity
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The program simply runs sched_getaffinity for each process and prints
</span><br>
<span class="quotelev1">&gt; out the result.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----------
</span><br>
<span class="quotelev2">&gt; &gt; TEST RUN 1
</span><br>
<span class="quotelev2">&gt; &gt; -----------
</span><br>
<span class="quotelev2">&gt; &gt; For this particular job the problem is more severe: openmpi fails to run
</span><br>
<span class="quotelev1">&gt; at all with error
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI tried to bind a new process, but something went wrong.  The
</span><br>
<span class="quotelev2">&gt; &gt; process was killed without launching the target application.  Your job
</span><br>
<span class="quotelev2">&gt; &gt; will now abort.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Local host:        c6-6
</span><br>
<span class="quotelev2">&gt; &gt;  Application name:  ./affinity
</span><br>
<span class="quotelev2">&gt; &gt;  Error message:     hwloc_set_cpubind returned &quot;Error&quot; for bitmap &quot;8,24&quot;
</span><br>
<span class="quotelev2">&gt; &gt;  Location:          odls_default_module.c:551
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is SLURM environment variables:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_JOBID=12712225
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_CPUS_PER_NODE='3(x2),2,1(x3),2(x2),1,3(x3),5,1,4,1,3,2,3,7,1,5,6,1'
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_JOB_ID=12712225
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NODELIST='c6-[3,6-8,12,14,17,22-23],c8-[4,7,9,17,20,28],c15-[5,10,18,20,22-24,28],c16-11'
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_JOB_NUM_NODES=24
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_JOB_PARTITION=normal
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_MEM_PER_CPU=2048
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NNODES=24
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; SLURM_NODELIST='c6-[3,6-8,12,14,17,22-23],c8-[4,7,9,17,20,28],c15-[5,10,18,20,22-24,28],c16-11'
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NODE_ALIASES='(null)'
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NPROCS=64
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NTASKS=64
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_SUBMIT_DIR=/cluster/home/marcink
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_SUBMIT_HOST=login-0-2.local
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE='3(x2),2,1(x3),2(x2),1,3(x3),5,1,4,1,3,2,3,7,1,5,6,1'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There is also a lot of warnings like
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [compute-6-6.local:20158] MCW rank 4 is not bound (or bound to all
</span><br>
<span class="quotelev1">&gt; available processors)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----------
</span><br>
<span class="quotelev2">&gt; &gt; TEST RUN 2
</span><br>
<span class="quotelev2">&gt; &gt; -----------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In another allocation I got a different error
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev2">&gt; &gt; processes than cpus on a resource:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Bind to:     CORE
</span><br>
<span class="quotelev2">&gt; &gt;   Node:        c6-19
</span><br>
<span class="quotelev2">&gt; &gt;   #processes:  2
</span><br>
<span class="quotelev2">&gt; &gt;   #cpus:       1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev2">&gt; &gt; option to your binding directive.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and the allocation was the following
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_JOBID=12712250
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_JOB_CPUS_PER_NODE='3(x2),2,1,15,1,3,16,2,1,3(x2),2,5,4'
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_JOB_ID=12712250
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_JOB_NODELIST='c6-[3,6-8,12,14,17,19,22-23],c8-[4,7,9,17,28]'
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_JOB_NUM_NODES=15
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_JOB_PARTITION=normal
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_MEM_PER_CPU=2048
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NNODES=15
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NODELIST='c6-[3,6-8,12,14,17,19,22-23],c8-[4,7,9,17,28]'
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NODE_ALIASES='(null)'
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NPROCS=64
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NTASKS=64
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_SUBMIT_DIR=/cluster/home/marcink
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_SUBMIT_HOST=login-0-2.local
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_TASKS_PER_NODE='3(x2),2,1,15,1,3,16,2,1,3(x2),2,5,4'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If in this case I run on only 32 cores
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun  --report-bindings --bind-to core -np 32 ./affinity
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; the process starts, but I get the original binding problem:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [compute-6-8.local:31414] MCW rank 8 is not bound (or bound to all
</span><br>
<span class="quotelev1">&gt; available processors)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Running with --hetero-nodes yields exactly the same results
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hope the above is useful. The problem with binding under SLURM with CPU
</span><br>
<span class="quotelev1">&gt; cores spread over nodes seems to be very reproducible. It is actually very
</span><br>
<span class="quotelev1">&gt; often that OpenMPI dies with some error like above. These tests were run
</span><br>
<span class="quotelev1">&gt; with openmpi-1.8.8 and 1.10.0, both giving same results.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; One more suggestion. The warning message (MCW rank 8 is not bound...) is
</span><br>
<span class="quotelev1">&gt; ONLY displayed when I use --report-bindings. It is never shown if I leave
</span><br>
<span class="quotelev1">&gt; out this option, and although the binding is wrong the user is not
</span><br>
<span class="quotelev1">&gt; notified. I think it would be better to show this warning in all cases
</span><br>
<span class="quotelev1">&gt; binding fails.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Let me know if you need more information. I can help to debug this - it
</span><br>
<span class="quotelev1">&gt; is a rather crucial issue.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Marcin
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 10/02/2015 11:49 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can you please send me the allocation request you made (so I can see
</span><br>
<span class="quotelev1">&gt; what you specified on the cmd line), and the mpirun cmd line?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Oct 2, 2015, at 8:25 AM, Marcin Krotkiewski &lt;
</span><br>
<span class="quotelev1">&gt; marcin.krotkiewski_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I fail to make OpenMPI bind to cores correctly when running from
</span><br>
<span class="quotelev1">&gt; within SLURM-allocated CPU resources spread over a range of compute nodes
</span><br>
<span class="quotelev1">&gt; in an otherwise homogeneous cluster. I have found this thread
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/06/24682.php">http://www.open-mpi.org/community/lists/users/2014/06/24682.php</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; and did try to use what Ralph suggested there (--hetero-nodes), but it
</span><br>
<span class="quotelev1">&gt; does not work (v. 1.10.0). When running with --report-bindings I get
</span><br>
<span class="quotelev1">&gt; messages like
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [compute-9-11.local:27571] MCW rank 10 is not bound (or bound to all
</span><br>
<span class="quotelev1">&gt; available processors)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; for all ranks outside of my first physical compute node. Moreover,
</span><br>
<span class="quotelev1">&gt; everything works as expected if I ask SLURM to assign entire compute nodes.
</span><br>
<span class="quotelev1">&gt; So it does look like Ralph's diagnose presented in that thread is correct,
</span><br>
<span class="quotelev1">&gt; just the --hetero-nodes switch does not work for me.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have written a short code that uses sched_getaffinity to print the
</span><br>
<span class="quotelev1">&gt; effective bindings: all MPI ranks except of those on the first node are
</span><br>
<span class="quotelev1">&gt; bound to all CPU cores allocated by SLURM.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Do I have to do something except of --hetero-nodes, or is this a
</span><br>
<span class="quotelev1">&gt; problem that needs further investigation?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks a lot!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Marcin
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27770.php">http://www.open-mpi.org/community/lists/users/2015/10/27770.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27774.php">http://www.open-mpi.org/community/lists/users/2015/10/27774.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27776.php">http://www.open-mpi.org/community/lists/users/2015/10/27776.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27778.php">http://www.open-mpi.org/community/lists/users/2015/10/27778.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27779/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27780.php">Dimitar Pashov: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.10.1rc1 release"</a>
<li><strong>Previous message:</strong> <a href="27778.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>In reply to:</strong> <a href="27778.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27781.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
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
