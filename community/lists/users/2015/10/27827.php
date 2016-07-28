<?
$subject_val = "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 04:32:45 2015" -->
<!-- isoreceived="20151007083245" -->
<!-- sent="Wed, 7 Oct 2015 17:32:34 +0900" -->
<!-- isosent="20151007083234" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes" -->
<!-- id="5614D8A2.1020704_at_rist.or.jp" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5613A0D1.7010008_at_gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-07 04:32:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27828.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Process binding with SLURM and 'heterogeneous'	nodes"</a>
<li><strong>Previous message:</strong> <a href="27826.php">Siegmar Gross: "[OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
<li><strong>In reply to:</strong> <a href="27815.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27828.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Process binding with SLURM and 'heterogeneous'	nodes"</a>
<li><strong>Reply:</strong> <a href="27828.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Process binding with SLURM and 'heterogeneous'	nodes"</a>
<li><strong>Reply:</strong> <a href="27841.php">Marcin Krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Marcin,
<br>
<p>here is a patch for the master, hopefully it fixes all the issues we 
<br>
discussed
<br>
i will make sure it applies fine vs latest 1.10 tarball from tomorrow
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On 10/6/2015 7:22 PM, marcin.krotkiewski wrote:
<br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, it seemed that all was fine with binding in the patched 1.10.1rc1 
</span><br>
<span class="quotelev1">&gt; - thank you. Eagerly waiting for the other patches, let me know and I 
</span><br>
<span class="quotelev1">&gt; will test them later this week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Marcin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/06/2015 12:09 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Marcin,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; my understanding is that in this case, patched v1.10.1rc1 is working 
</span><br>
<span class="quotelev2">&gt;&gt; just fine.
</span><br>
<span class="quotelev2">&gt;&gt; am I right ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I prepared two patches
</span><br>
<span class="quotelev2">&gt;&gt; one to remove the warning when binding on one core if only one core 
</span><br>
<span class="quotelev2">&gt;&gt; is available,
</span><br>
<span class="quotelev2">&gt;&gt; an other one to add a warning if the user asks a binding policy that 
</span><br>
<span class="quotelev2">&gt;&gt; makes no sense with the required mapping policy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will finalize them tomorrow hopefully
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tuesday, October 6, 2015, marcin.krotkiewski 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;marcin.krotkiewski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Hi, Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     you mentionned you had one failure with 1.10.1rc1 and -bind-to core
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     could you please send the full details (script, allocation and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     output)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     in your slurm script, you can do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     srun -N $SLURM_NNODES -n $SLURM_NNODES --cpu_bind=none -l grep
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Cpus_allowed_list /proc/self/status
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     before invoking mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     It was an interactive job allocated with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     salloc --account=staff --ntasks=32 --mem-per-cpu=2G --time=120:0:0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     The slurm environment is the following
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_JOBID=12714491
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_JOB_CPUS_PER_NODE='4,2,5(x2),4,7,5'
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_JOB_ID=12714491
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_JOB_NODELIST='c1-[2,4,8,13,16,23,26]'
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_JOB_NUM_NODES=7
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_JOB_PARTITION=normal
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_MEM_PER_CPU=2048
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_NNODES=7
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_NODELIST='c1-[2,4,8,13,16,23,26]'
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_NODE_ALIASES='(null)'
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_NPROCS=32
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_NTASKS=32
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_SUBMIT_DIR=/cluster/home/marcink
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_SUBMIT_HOST=login-0-1.local
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_TASKS_PER_NODE='4,2,5(x2),4,7,5'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     The output of the command you asked for is
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     0: c1-2.local  Cpus_allowed_list:        1-4,17-20
</span><br>
<span class="quotelev2">&gt;&gt;     1: c1-4.local  Cpus_allowed_list:        1,15,17,31
</span><br>
<span class="quotelev2">&gt;&gt;     2: c1-8.local  Cpus_allowed_list: 0,5,9,13-14,16,21,25,29-30
</span><br>
<span class="quotelev2">&gt;&gt;     3: c1-13.local  Cpus_allowed_list:       3-7,19-23
</span><br>
<span class="quotelev2">&gt;&gt;     4: c1-16.local  Cpus_allowed_list:       12-15,28-31
</span><br>
<span class="quotelev2">&gt;&gt;     5: c1-23.local  Cpus_allowed_list: 2-4,8,13-15,18-20,24,29-31
</span><br>
<span class="quotelev2">&gt;&gt;     6: c1-26.local  Cpus_allowed_list: 1,6,11,13,15,17,22,27,29,31
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Running with command
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     mpirun --mca rmaps_base_verbose 10 --hetero-nodes --bind-to core
</span><br>
<span class="quotelev2">&gt;&gt;     --report-bindings --map-by socket -np 32 ./affinity
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I have attached two output files: one for the original 1.10.1rc1,
</span><br>
<span class="quotelev2">&gt;&gt;     one for the patched version.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     When I said 'failed in one case' I was not precise. I got an
</span><br>
<span class="quotelev2">&gt;&gt;     error on node c1-8, which was the first one to have different
</span><br>
<span class="quotelev2">&gt;&gt;     number of MPI processes on the two sockets. It would also fail on
</span><br>
<span class="quotelev2">&gt;&gt;     some later nodes, just that because of the error we never got there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Let me know if you need more.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Marcin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On 10/4/2015 11:55 PM, marcin.krotkiewski wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Hi, all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     I played a bit more and it seems that the problem results from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     trg_obj = opal_hwloc_base_find_min_bound_target_under_obj()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     called in rmaps_base_binding.c / bind_downwards being wrong. I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     do not know the reason, but I think I know when the problem
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     happens (at least on 1.10.1rc1). It seems that by default
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     openmpi maps by socket. The error happens when for a given
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     compute node there is a different number of cores used on each
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     socket. Consider previously studied case (the debug outputs I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     sent in last post). c1-8, which was source of error, has 5 mpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     processes assigned, and the cpuset is the following:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     0, 5, 9, 13, 14, 16, 21, 25, 29, 30
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Cores 0,5 are on socket 0, cores 9, 13, 14 are on socket 1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Binding progresses correctly up to and including core 13 (see
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     end of file out.1.10.1rc2, before the error). That is 2 cores
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     on socket 0, and 2 cores on socket 1. Error is thrown when core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     14 should be bound - extra core on socket 1 with no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     corresponding core on socket 0. At that point the returned
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     trg_obj points to the first core on the node (os_index 0,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     socket 0).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     I have submitted a few other jobs and I always had an error in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     such situation. Moreover, if I now use --map-by core instead of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     socket, the error is gone, and I get my expected binding:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 0 @ compute-1-2.local  1, 17,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 1 @ compute-1-2.local  2, 18,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 2 @ compute-1-2.local  3, 19,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 3 @ compute-1-2.local  4, 20,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 4 @ compute-1-4.local  1, 17,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 5 @ compute-1-4.local  15, 31,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 6 @ compute-1-8.local  0, 16,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 7 @ compute-1-8.local  5, 21,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 8 @ compute-1-8.local  9, 25,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 9 @ compute-1-8.local  13, 29,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 10 @ compute-1-8.local  14, 30,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 11 @ compute-1-13.local  3, 19,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 12 @ compute-1-13.local  4, 20,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 13 @ compute-1-13.local  5, 21,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 14 @ compute-1-13.local  6, 22,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 15 @ compute-1-13.local  7, 23,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 16 @ compute-1-16.local  12, 28,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 17 @ compute-1-16.local  13, 29,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 18 @ compute-1-16.local  14, 30,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 19 @ compute-1-16.local  15, 31,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 20 @ compute-1-23.local  2, 18,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 29 @ compute-1-26.local  11, 27,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 21 @ compute-1-23.local  3, 19,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 30 @ compute-1-26.local  13, 29,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 22 @ compute-1-23.local  4, 20,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 31 @ compute-1-26.local  15, 31,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 23 @ compute-1-23.local  8, 24,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 27 @ compute-1-26.local  1, 17,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 24 @ compute-1-23.local  13, 29,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 28 @ compute-1-26.local  6, 22,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 25 @ compute-1-23.local  14, 30,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     rank 26 @ compute-1-23.local  15, 31,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Using --map-by core seems to fix the issue on 1.8.8, 1.10.0 and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     1.10.1rc1. However, there is still a difference in behavior
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     between 1.10.1rc1 and earlier versions. In the SLURM job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     described in last post, 1.10.1rc1 fails to bind only in 1 case,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     while the earlier versions fail in 21 out of 32 cases. You
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     mentioned there was a bug in hwloc. Not sure if it can explain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     the difference in behavior.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Hope this helps to nail this down.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Marcin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     On 10/04/2015 09:55 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Ralph,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     I suspect ompi tries to bind to threads outside the cpuset.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     this could be pretty similar to a previous issue when ompi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     tried to bind to cores outside the cpuset.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     /* when a core has more than one thread, would ompi assume all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     the threads are available if the core is available ? */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     I will investigate this from tomorrow
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     On Sunday, October 4, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Thanks - please go ahead and release that allocation as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         I&#146;m not going to get to this immediately. I&#146;ve got several
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         hot irons in the fire right now, and I&#146;m not sure when
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         I&#146;ll get a chance to track this down.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Gilles or anyone else who might have time - feel free to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         take a gander and see if something pops out at you.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         On Oct 3, 2015, at 11:05 AM, marcin.krotkiewski
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         &lt;marcin.krotkiewski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         Done. I have compiled 1.10.0 and 1.10.rc1 with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         --enable-debug and executed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         mpirun --mca rmaps_base_verbose 10 --hetero-nodes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         --report-bindings --bind-to core -np 32 ./affinity
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         In case of 1.10.rc1 I have also added :overload-allowed -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         output in a separate file. This option did not make much
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         difference for 1.10.0, so I did not attach it here.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         First thing I noted for 1.10.0 are lines like
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         [login-0-1.local:03399] [[37945,0],0] GOT 1 CPUS
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         [login-0-1.local:03399] [[37945,0],0] PROC [[37945,1],27]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         BITMAP
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         [login-0-1.local:03399] [[37945,0],0] PROC [[37945,1],27]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         ON c1-26 IS NOT BOUND
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         with an empty BITMAP.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         The SLURM environment is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         set | grep SLURM
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         SLURM_JOBID=12714491
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         SLURM_JOB_CPUS_PER_NODE='4,2,5(x2),4,7,5'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         SLURM_JOB_ID=12714491
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         SLURM_JOB_NODELIST='c1-[2,4,8,13,16,23,26]'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         SLURM_JOB_NUM_NODES=7
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         SLURM_JOB_PARTITION=normal
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         SLURM_MEM_PER_CPU=2048
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         SLURM_NNODES=7
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         SLURM_NODELIST='c1-[2,4,8,13,16,23,26]'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         SLURM_NODE_ALIASES='(null)'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         SLURM_NPROCS=32
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         SLURM_NTASKS=32
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         SLURM_SUBMIT_DIR=/cluster/home/marcink
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         SLURM_SUBMIT_HOST=login-0-1.local
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         SLURM_TASKS_PER_NODE='4,2,5(x2),4,7,5'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         I have submitted an interactive job on screen for 120
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         hours now to work with one example, and not change it for
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         every post :)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         If you need anything else, let me know. I could introduce
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         some patch/printfs and recompile, if you need it.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         Marcin
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         On 10/03/2015 07:17 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Rats - just realized I have no way to test this as none
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         of the machines I can access are setup for cgroup-based
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         multi-tenant. Is this a debug version of OMPI? If not,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         can you rebuild OMPI with &#151;enable-debug?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Then please run it with &#151;mca rmaps_base_verbose 10 and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         pass along the output.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         On Oct 3, 2015, at 10:09 AM, Ralph Castain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         What version of slurm is this? I might try to debug it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         here. I&#146;m not sure where the problem lies just yet.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         On Oct 3, 2015, at 8:59 AM, marcin.krotkiewski
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         &lt;marcin.krotkiewski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Here is the output of lstopo. In short, (0,16) are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         core 0, (1,17) - core 1 etc.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Machine (64GB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;           NUMANode L#0 (P#0 32GB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;             Socket L#0 + L3 L#0 (20MB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         + Core L#0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 PU L#1 (P#16)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         + Core L#1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 PU L#2 (P#1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 PU L#3 (P#17)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               L2 L#2 (256KB) + L1d L#2 (32KB) + L1i L#2 (32KB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         + Core L#2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 PU L#4 (P#2)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 PU L#5 (P#18)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               L2 L#3 (256KB) + L1d L#3 (32KB) + L1i L#3 (32KB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         + Core L#3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 PU L#6 (P#3)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 PU L#7 (P#19)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               L2 L#4 (256KB) + L1d L#4 (32KB) + L1i L#4 (32KB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         + Core L#4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 PU L#8 (P#4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 PU L#9 (P#20)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               L2 L#5 (256KB) + L1d L#5 (32KB) + L1i L#5 (32KB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         + Core L#5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 PU L#10 (P#5)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 PU L#11 (P#21)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               L2 L#6 (256KB) + L1d L#6 (32KB) + L1i L#6 (32KB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         + Core L#6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 PU L#12 (P#6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 PU L#13 (P#22)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               L2 L#7 (256KB) + L1d L#7 (32KB) + L1i L#7 (32KB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         + Core L#7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 PU L#14 (P#7)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 PU L#15 (P#23)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;             HostBridge L#0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PCIBridge
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 PCI 8086:1521
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   Net L#0 &quot;eth0&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 PCI 8086:1521
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   Net L#1 &quot;eth1&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PCIBridge
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 PCI 15b3:1003
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   Net L#2 &quot;ib0&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         OpenFabrics L#3 &quot;mlx4_0&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PCIBridge
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 PCI 102b:0532
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               PCI 8086:1d02
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 Block L#4 &quot;sda&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;           NUMANode L#1 (P#1 32GB) + Socket L#1 + L3 L#1 (20MB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;             L2 L#8 (256KB) + L1d L#8 (32KB) + L1i L#8 (32KB) +
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Core L#8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               PU L#16 (P#8)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               PU L#17 (P#24)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;             L2 L#9 (256KB) + L1d L#9 (32KB) + L1i L#9 (32KB) +
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Core L#9
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               PU L#18 (P#9)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               PU L#19 (P#25)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;             L2 L#10 (256KB) + L1d L#10 (32KB) + L1i L#10
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         (32KB) + Core L#10
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               PU L#20 (P#10)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               PU L#21 (P#26)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;             L2 L#11 (256KB) + L1d L#11 (32KB) + L1i L#11
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         (32KB) + Core L#11
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               PU L#22 (P#11)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               PU L#23 (P#27)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;             L2 L#12 (256KB) + L1d L#12 (32KB) + L1i L#12
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         (32KB) + Core L#12
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               PU L#24 (P#12)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               PU L#25 (P#28)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;             L2 L#13 (256KB) + L1d L#13 (32KB) + L1i L#13
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         (32KB) + Core L#13
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               PU L#26 (P#13)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               PU L#27 (P#29)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;             L2 L#14 (256KB) + L1d L#14 (32KB) + L1i L#14
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         (32KB) + Core L#14
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               PU L#28 (P#14)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               PU L#29 (P#30)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;             L2 L#15 (256KB) + L1d L#15 (32KB) + L1i L#15
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         (32KB) + Core L#15
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               PU L#30 (P#15)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;               PU L#31 (P#31)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         On 10/03/2015 05:46 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Maybe I&#146;m just misreading your HT map - that slurm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         nodelist syntax is a new one to me, but they tend to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         change things around. Could you run lstopo on one of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         those compute nodes and send the output?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         I&#146;m just suspicious because I&#146;m not seeing a clear
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         pairing of HT numbers in your output, but HT
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         numbering is BIOS-specific and I may just not be
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         understanding your particular pattern. Our error
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         message is clearly indicating that we are seeing
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         individual HTs (and not complete cores) assigned, and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         I don&#146;t know the source of that confusion.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         On Oct 3, 2015, at 8:28 AM, marcin.krotkiewski
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         &lt;marcin.krotkiewski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         On 10/03/2015 04:38 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         If mpirun isn&#146;t trying to do any binding, then you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         will of course get the right mapping as we&#146;ll just
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         inherit whatever we received.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Yes. I meant that whatever you received (what SLURM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         gives) is a correct cpu map and assigns _whole_
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         CPUs, not a single HT to MPI processes. In the case
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         mentioned earlier openmpi should start 6 tasks on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         c1-30. If HT would be treated as separate and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         independent cores, sched_getaffinity of an MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         process started on c1-30 would return a map with 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         entries only. In my case it returns a map with 12
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         entries - 2 for each core. So one process is in fact
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         allocated both HTs, not only one. Is what I'm saying
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         correct?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Looking at your output, it&#146;s pretty clear that you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         are getting independent HTs assigned and not full
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         cores.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         How do you mean? Is the above understanding wrong? I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         would expect that on c1-30 with --bind-to core
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         openmpi should bind to logical cores 0 and 16 (rank
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         0), 1 and 17 (rank 2) and so on. All those logical
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         cores are available in sched_getaffinity map, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         there is twice as many logical cores as there are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         MPI processes started on the node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         My guess is that something in slurm has changed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         such that it detects that HT has been enabled, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         then begins treating the HTs as completely
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         independent cpus.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Try changing &#147;-bind-to core&#148; to &#147;-bind-to hwthread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;          -use-hwthread-cpus&#148; and see if that works
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         I have and the binding is wrong. For example, I got
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         this output
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         rank 0 @ compute-1-30.local 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         rank 1 @ compute-1-30.local 16,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Which means that two ranks have been bound to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         same physical core (logical cores 0 and 16 are two
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         HTs of the same core). If I use --bind-to core, I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         get the following correct binding
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         rank 0 @ compute-1-30.local 0, 16,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         The problem is many other ranks get bad binding with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         'rank XXX is not bound (or bound to all available
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         processors)' warning.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         But I think I was not entirely correct saying that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         1.10.1rc1 did not fix things. It still might have
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         improved something, but not everything. Consider
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         this job:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         SLURM_JOB_CPUS_PER_NODE='5,4,6,5(x2),7,5,9,5,7,6'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         SLURM_JOB_NODELIST='c8-[31,34],c9-[30-32,35-36],c10-[31-34]'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         If I run 32 tasks as follows (with 1.10.1rc1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         mpirun --hetero-nodes --report-bindings --bind-to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         core -np 32 ./affinity
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         I get the following error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         A request was made to bind to that would result in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         binding more
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         processes than cpus on a resource:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;            Bind to:     CORE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Node: c9-31
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         #processes:  2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         #cpus:       1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         You can override this protection by adding the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         &quot;overload-allowed&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         option to your binding directive.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         If I now use --bind-to core:overload-allowed, then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         openmpi starts and _most_ of the threads are bound
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         correctly (i.e., map contains two logical cores in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         ALL cases), except this case that required the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         overload flag:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         rank 15 @ compute-9-31.local 1, 17,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         rank 16 @ compute-9-31.local 11, 27,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         rank 17 @ compute-9-31.local 2, 18,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         rank 18 @ compute-9-31.local 12, 28,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         rank 19 @ compute-9-31.local 1, 17,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Note pair 1,17 is used twice. The original SLURM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         delivered map (no binding) on this node is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         rank 15 @ compute-9-31.local 1, 2, 11, 12, 13, 17,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         18, 27, 28, 29,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         rank 16 @ compute-9-31.local 1, 2, 11, 12, 13, 17,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         18, 27, 28, 29,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         rank 17 @ compute-9-31.local 1, 2, 11, 12, 13, 17,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         18, 27, 28, 29,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         rank 18 @ compute-9-31.local 1, 2, 11, 12, 13, 17,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         18, 27, 28, 29,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         rank 19 @ compute-9-31.local 1, 2, 11, 12, 13, 17,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         18, 27, 28, 29,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Why does openmpi use cores (1,17) twice instead of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         using core (13,29)? Clearly, the original
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         SLURM-delivered map has 5 CPUs included, enough for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         5 MPI processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Marcin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         On Oct 3, 2015, at 7:12 AM, marcin.krotkiewski
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         &lt;marcin.krotkiewski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         On 10/03/2015 01:06 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Thanks Marcin. Looking at this, I&#146;m guessing that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Slurm may be treating HTs as &#147;cores&#148; - i.e., as
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         independent cpus. Any chance that is true?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Not to the best of my knowledge, and at least not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         intentionally. SLURM starts as many processes as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         there are physical cores, not threads. To verify
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         this, consider this test case:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/10/27790.php">http://www.open-mpi.org/community/lists/users/2015/10/27790.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/10/27791.php">http://www.open-mpi.org/community/lists/users/2015/10/27791.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/10/27792.php">http://www.open-mpi.org/community/lists/users/2015/10/27792.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/10/27814.php">http://www.open-mpi.org/community/lists/users/2015/10/27814.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27815.php">http://www.open-mpi.org/community/lists/users/2015/10/27815.php</a>
</span><br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27827/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27827/heterogeneous_topologies.patch">heterogeneous_topologies.patch</a>
</ul>
<!-- attachment="heterogeneous_topologies.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27828.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Process binding with SLURM and 'heterogeneous'	nodes"</a>
<li><strong>Previous message:</strong> <a href="27826.php">Siegmar Gross: "[OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
<li><strong>In reply to:</strong> <a href="27815.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27828.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Process binding with SLURM and 'heterogeneous'	nodes"</a>
<li><strong>Reply:</strong> <a href="27828.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Process binding with SLURM and 'heterogeneous'	nodes"</a>
<li><strong>Reply:</strong> <a href="27841.php">Marcin Krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
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
