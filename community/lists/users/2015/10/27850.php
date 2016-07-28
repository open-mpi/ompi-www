<?
$subject_val = "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  8 17:49:41 2015" -->
<!-- isoreceived="20151008214941" -->
<!-- sent="Thu, 8 Oct 2015 14:49:34 -0700" -->
<!-- isosent="20151008214934" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes" -->
<!-- id="498712D0-CFEE-4619-860D-ACAE97AD6F6B_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5616C5AE.5070207_at_gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-08 17:49:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27851.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Previous message:</strong> <a href="27849.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>In reply to:</strong> <a href="27849.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27841.php">Marcin Krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you get a chance, you might test this patch:
<br>
<p><a href="https://github.com/open-mpi/ompi-release/pull/656">https://github.com/open-mpi/ompi-release/pull/656</a>
<br>
<p>I think it will resolve the problem you mentioned, and is small enough to go into 1.10.1
<br>
<p>Ralph
<br>
<p><p><span class="quotelev1">&gt; On Oct 8, 2015, at 12:36 PM, marcin.krotkiewski &lt;marcin.krotkiewski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry, I think I confused one thing:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/08/2015 09:15 PM, marcin.krotkiewski wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For version 1.10.1rc1 and up the situation is a bit different: it seems that in many cases all cores are present in the cpuset, just that the binding does not take place in a lot of cases. Instead, processes are bound to all cores allocated by SLURM. In other scenarios, as discussed before, some cores are over/under-subscribed. Again, this is done quietly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem here was in fact failure to run with an error message, not under/over-subscription. Sorry for this - wanted to cover too much at the same time..
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In all cases what is needed is the --hetero-nodes switch. If I apply the patch that Gilles has posted, it seems to be enough for 1.10.1rc1 and up. The switch is not enough for earlier versions of OpenMPI and one needs --map-by core in addition.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Given all that I think some sort of fix would be in order soon. I agree with Ralph that to address this issue quickly a simplified fix would be a good choice. As Ralph has already pointed out (or at least how I understood it :) this would essentially involve activating --hetero-nodes by default, and using --map-by core in cases where the architecture is not homogeneous. Uncovering the warning so that the failure to bind is not silent is the last piece of puzzle. Maybe adding a sanity check to make sure all allocated resources are in use would be helpful - if not by default, then maybe with some flag.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does all this make sense?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Again, thank you all for your help,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Marcin
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
<span class="quotelev2">&gt;&gt; On 10/07/2015 04:03 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#146;m a little nervous about this one, Gilles. It&#146;s doing a lot more than just addressing the immediate issue, and I&#146;m concerned about any potential side-effects that we don&#146;t fully unocver prior to release.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#146;d suggest a two-pronged approach:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. use my alternative method for 1.10.1 to solve the immediate issue. It only affects this one, rather unusual, corner-case that was reported here. So the impact can be easily contained and won&#146;t impact anything else.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. push your proposed solution to the master where it can soak for awhile and give us a chance to fully discover the secondary effects. Removing the unused and &#147;not-allowed&#148; cpus from the topology means a substantial scrub of the code base in a number of places, and your patch doesn&#146;t really get them all. It&#146;s going to take time to ensure everything is working correctly again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HTH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Oct 7, 2015, at 4:29 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there are quite a lot of changes, I did not update master yet (need extra pairs of eyes to review this...)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so unless you want to make rc2 today and rc3 a week later, it is imho way safer to wait for v1.10.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; any thoughts ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wednesday, October 7, 2015, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is this something that needs to go into v1.10.1?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If so, a PR needs to be filed ASAP.  We were supposed to make the next 1.10.1 RC yesterday, but slipped to today due to some last second patches.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; On Oct 7, 2015, at 4:32 AM, Gilles Gouaillardet &lt;gilles_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Marcin,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; here is a patch for the master, hopefully it fixes all the issues we discussed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; i will make sure it applies fine vs latest 1.10 tarball from tomorrow
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; On 10/6/2015 7:22 PM, marcin.krotkiewski wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; Yes, it seemed that all was fine with binding in the patched 1.10.1rc1 - thank you. Eagerly waiting for the other patches, let me know and I will test them later this week.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; Marcin
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; On 10/06/2015 12:09 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; Marcin,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; my understanding is that in this case, patched v1.10.1rc1 is working just fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; am I right ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; I prepared two patches
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; one to remove the warning when binding on one core if only one core is available,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; an other one to add a warning if the user asks a binding policy that makes no sense with the required mapping policy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; I will finalize them tomorrow hopefully
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; On Tuesday, October 6, 2015, marcin.krotkiewski &lt;marcin.krotkiewski_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; Hi, Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; you mentionned you had one failure with 1.10.1rc1 and -bind-to core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; could you please send the full details (script, allocation and output)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; in your slurm script, you can do
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; srun -N $SLURM_NNODES -n $SLURM_NNODES --cpu_bind=none -l grep Cpus_allowed_list /proc/self/status
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; before invoking mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; It was an interactive job allocated with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; salloc --account=staff --ntasks=32 --mem-per-cpu=2G --time=120:0:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; The slurm environment is the following
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; SLURM_JOBID=12714491
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; SLURM_JOB_CPUS_PER_NODE='4,2,5(x2),4,7,5'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; SLURM_JOB_ID=12714491
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; SLURM_JOB_NODELIST='c1-[2,4,8,13,16,23,26]'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; SLURM_JOB_NUM_NODES=7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; SLURM_JOB_PARTITION=normal
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; SLURM_MEM_PER_CPU=2048
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; SLURM_NNODES=7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; SLURM_NODELIST='c1-[2,4,8,13,16,23,26]'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; SLURM_NODE_ALIASES='(null)'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; SLURM_NPROCS=32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; SLURM_NTASKS=32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; SLURM_SUBMIT_DIR=/cluster/home/marcink
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; SLURM_SUBMIT_HOST=login-0-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; SLURM_TASKS_PER_NODE='4,2,5(x2),4,7,5'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; The output of the command you asked for is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; 0: c1-2.local  Cpus_allowed_list:        1-4,17-20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; 1: c1-4.local  Cpus_allowed_list:        1,15,17,31
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; 2: c1-8.local  Cpus_allowed_list:        0,5,9,13-14,16,21,25,29-30
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; 3: c1-13.local  Cpus_allowed_list:       3-7,19-23
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; 4: c1-16.local  Cpus_allowed_list:       12-15,28-31
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; 5: c1-23.local  Cpus_allowed_list:       2-4,8,13-15,18-20,24,29-31
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; 6: c1-26.local  Cpus_allowed_list:       1,6,11,13,15,17,22,27,29,31
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; Running with command
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; mpirun --mca rmaps_base_verbose 10 --hetero-nodes --bind-to core --report-bindings --map-by socket -np 32 ./affinity
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; I have attached two output files: one for the original 1.10.1rc1, one for the patched version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; When I said 'failed in one case' I was not precise. I got an error on node c1-8, which was the first one to have different number of MPI processes on the two sockets. It would also fail on some later nodes, just                 that because of the error we never got there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; Let me know if you need more.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; Marcin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; On 10/4/2015 11:55 PM, marcin.krotkiewski wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; Hi, all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; I played a bit more and it seems that the problem results from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; trg_obj = opal_hwloc_base_find_min_bound_target_under_obj()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; called in rmaps_base_binding.c / bind_downwards being wrong. I do not know the reason, but I think I know when the problem happens (at least on 1.10.1rc1). It seems that by default openmpi maps by socket. The error happens when for a given compute node there is a different number of cores used on each socket. Consider previously studied case (the debug outputs I sent in last post). c1-8, which was source of error, has 5 mpi processes assigned, and the cpuset is the following:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; 0, 5, 9, 13, 14, 16, 21, 25, 29, 30
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; Cores 0,5 are on socket 0, cores 9, 13, 14 are on socket 1. Binding progresses correctly up to and including core 13 (see end of file out.1.10.1rc2, before the error). That is 2 cores on socket 0, and 2 cores on socket 1. Error is thrown when core 14 should be bound - extra core on socket 1 with no corresponding core on socket 0. At that point the returned trg_obj points to the first core on the node (os_index 0, socket 0).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; I have submitted a few other jobs and I always had an error in such situation. Moreover, if I now use --map-by core instead of socket, the error is gone, and I get my expected binding:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 0 @ compute-1-2.local  1, 17,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 1 @ compute-1-2.local  2, 18,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 2 @ compute-1-2.local  3, 19,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 3 @ compute-1-2.local  4, 20,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 4 @ compute-1-4.local  1, 17,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 5 @ compute-1-4.local  15, 31,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 6 @ compute-1-8.local  0, 16,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 7 @ compute-1-8.local  5, 21,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 8 @ compute-1-8.local  9, 25,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 9 @ compute-1-8.local  13, 29,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 10 @ compute-1-8.local  14, 30,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 11 @ compute-1-13.local  3, 19,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 12 @ compute-1-13.local  4, 20,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 13 @ compute-1-13.local  5, 21,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 14 @ compute-1-13.local  6, 22,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 15 @ compute-1-13.local  7, 23,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 16 @ compute-1-16.local  12, 28,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 17 @ compute-1-16.local  13, 29,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 18 @ compute-1-16.local  14, 30,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 19 @ compute-1-16.local  15, 31,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 20 @ compute-1-23.local  2, 18,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 29 @ compute-1-26.local  11, 27,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 21 @ compute-1-23.local  3, 19,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 30 @ compute-1-26.local  13, 29,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 22 @ compute-1-23.local  4, 20,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 31 @ compute-1-26.local  15, 31,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 23 @ compute-1-23.local  8, 24,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 27 @ compute-1-26.local  1, 17,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 24 @ compute-1-23.local  13, 29,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 28 @ compute-1-26.local  6, 22,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 25 @ compute-1-23.local  14, 30,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; rank 26 @ compute-1-23.local  15, 31,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; Using --map-by core seems to fix the issue on 1.8.8, 1.10.0 and 1.10.1rc1. However, there is still a difference in behavior between 1.10.1rc1 and earlier versions. In the SLURM job described in last post, 1.10.1rc1 fails to bind only in 1 case, while the earlier versions fail in 21 out of 32 cases. You mentioned there was a bug in hwloc. Not sure if it can explain the difference in behavior.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; Hope this helps to nail this down.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; Marcin
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; On 10/04/2015 09:55 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; I suspect ompi tries to bind to threads outside the cpuset.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; this could be pretty similar to a previous issue when ompi tried to bind to cores outside the cpuset.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; /* when a core has more than one thread, would ompi assume all the threads are available if the core is available ? */
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; I will investigate this from tomorrow
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; On Sunday, October 4, 2015, Ralph Castain &lt;rhc_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Thanks - please go ahead and release that allocation as I&#146;m not going to get to this immediately. I&#146;ve got several hot irons in the fire right now, and I&#146;m not sure when I&#146;ll get a chance to track this down.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Gilles or anyone else who might have time - feel free to take a gander and see if something pops out at you.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 3, 2015, at 11:05 AM, marcin.krotkiewski &lt; &lt;javascript:;&gt;marcin.krotkiewski_at_[hidden] &lt;mailto:marcin.krotkiewski_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Done. I have compiled 1.10.0 and 1.10.rc1 with --enable-debug and executed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun --mca rmaps_base_verbose 10 --hetero-nodes --report-bindings --bind-to core -np 32 ./affinity
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; In case of 1.10.rc1 I have also added :overload-allowed - output in a separate file. This option did not make much difference for 1.10.0, so I did not attach it here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; First thing I noted for 1.10.0 are lines like
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [login-0-1.local:03399] [[37945,0],0] GOT 1 CPUS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [login-0-1.local:03399] [[37945,0],0] PROC [[37945,1],27] BITMAP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [login-0-1.local:03399] [[37945,0],0] PROC [[37945,1],27] ON c1-26 IS NOT BOUND
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; with an empty BITMAP.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; The SLURM environment is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; set | grep SLURM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOBID=12714491
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_CPUS_PER_NODE='4,2,5(x2),4,7,5'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_ID=12714491
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_NODELIST='c1-[2,4,8,13,16,23,26]'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_NUM_NODES=7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_PARTITION=normal
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_MEM_PER_CPU=2048
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NNODES=7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NODELIST='c1-[2,4,8,13,16,23,26]'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NODE_ALIASES='(null)'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NPROCS=32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NTASKS=32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_SUBMIT_DIR=/cluster/home/marcink
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_SUBMIT_HOST=login-0-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_TASKS_PER_NODE='4,2,5(x2),4,7,5'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I have submitted an interactive job on screen for 120 hours now to work with one example, and not change it for every post :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; If you need anything else, let me know. I could introduce some patch/printfs and recompile, if you need it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Marcin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; On 10/03/2015 07:17 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Rats - just realized I have no way to test this as none of the machines I can access are setup for cgroup-based multi-tenant. Is this a debug version of OMPI? If not, can you rebuild OMPI with &#151;enable-debug?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Then please run it with &#151;mca rmaps_base_verbose 10 and pass along the output.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 3, 2015, at 10:09 AM, Ralph Castain &lt; &lt;mailto:rhc_at_[hidden]&gt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; What version of slurm is this? I might try to debug it here. I&#146;m not sure where the problem lies just yet.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 3, 2015, at 8:59 AM, marcin.krotkiewski &lt; &lt;mailto:marcin.krotkiewski_at_[hidden]&gt;marcin.krotkiewski_at_[hidden] &lt;mailto:marcin.krotkiewski_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here is the output of lstopo. In short, (0,16) are core 0, (1,17) - core 1 etc.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Machine (64GB)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   NUMANode L#0 (P#0 32GB)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Socket L#0 + L3 L#0 (20MB)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB) + Core L#0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#0 (P#0)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#1 (P#16)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB) + Core L#1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#2 (P#1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#3 (P#17)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       L2 L#2 (256KB) + L1d L#2 (32KB) + L1i L#2 (32KB) + Core L#2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#4 (P#2)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#5 (P#18)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       L2 L#3 (256KB) + L1d L#3 (32KB) + L1i L#3 (32KB) + Core L#3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#6 (P#3)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#7 (P#19)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       L2 L#4 (256KB) + L1d L#4 (32KB) + L1i L#4 (32KB) + Core L#4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#8 (P#4)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#9 (P#20)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       L2 L#5 (256KB) + L1d L#5 (32KB) + L1i L#5 (32KB) + Core L#5
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#10 (P#5)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#11 (P#21)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       L2 L#6 (256KB) + L1d L#6 (32KB) + L1i L#6 (32KB) + Core L#6
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#12 (P#6)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#13 (P#22)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       L2 L#7 (256KB) + L1d L#7 (32KB) + L1i L#7 (32KB) + Core L#7
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#14 (P#7)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#15 (P#23)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     HostBridge L#0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PCI 8086:1521
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;           Net L#0 &quot;eth0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PCI 8086:1521
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;           Net L#1 &quot;eth1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PCI 15b3:1003
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;           Net L#2 &quot;ib0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;           OpenFabrics L#3 &quot;mlx4_0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PCI 102b:0532
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PCI 8086:1d02
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Block L#4 &quot;sda&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   NUMANode L#1 (P#1 32GB) + Socket L#1 + L3 L#1 (20MB)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     L2 L#8 (256KB) + L1d L#8 (32KB) + L1i L#8 (32KB) + Core L#8
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#16 (P#8)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#17 (P#24)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     L2 L#9 (256KB) + L1d L#9 (32KB) + L1i L#9 (32KB) + Core L#9
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#18 (P#9)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#19 (P#25)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     L2 L#10 (256KB) + L1d L#10 (32KB) + L1i L#10 (32KB) + Core L#10
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#20 (P#10)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#21 (P#26)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     L2 L#11 (256KB) + L1d L#11 (32KB) + L1i L#11 (32KB) + Core L#11
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#22 (P#11)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#23 (P#27)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     L2 L#12 (256KB) + L1d L#12 (32KB) + L1i L#12 (32KB) + Core L#12
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#24 (P#12)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#25 (P#28)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     L2 L#13 (256KB) + L1d L#13 (32KB) + L1i L#13 (32KB) + Core L#13
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#26 (P#13)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#27 (P#29)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     L2 L#14 (256KB) + L1d L#14 (32KB) + L1i L#14 (32KB) + Core L#14
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#28 (P#14)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#29 (P#30)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     L2 L#15 (256KB) + L1d L#15 (32KB) + L1i L#15 (32KB) + Core L#15
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#30 (P#15)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#31 (P#31)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 10/03/2015 05:46 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Maybe I&#146;m just misreading your HT map - that slurm nodelist syntax is a new one to me, but they tend to change things around. Could you run lstopo on one of those compute nodes and send the output?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I&#146;m just suspicious because I&#146;m not seeing a clear pairing of HT numbers in your output, but HT numbering is BIOS-specific and I may just not be understanding your particular pattern. Our error message is clearly indicating that we are seeing individual HTs (and not complete cores) assigned, and I don&#146;t know the source of that confusion.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 3, 2015, at 8:28 AM, marcin.krotkiewski &lt; &lt;mailto:marcin.krotkiewski_at_[hidden]&gt;marcin.krotkiewski_at_[hidden] &lt;mailto:marcin.krotkiewski_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 10/03/2015 04:38 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If mpirun isn&#146;t trying to do any binding, then you will of course get the right mapping as we&#146;ll just inherit whatever we received.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Yes. I meant that whatever you received (what SLURM gives) is a correct cpu map and assigns _whole_ CPUs, not a single HT to MPI processes. In the case mentioned earlier openmpi should start 6 tasks on c1-30. If HT would be treated as separate and independent cores, sched_getaffinity of an MPI process started on c1-30 would return a map with 6 entries only. In my case it returns a map                                                           with 12 entries - 2 for each core. So one  process is in fact allocated both HTs, not only one. Is what I'm saying correct?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Looking at your output, it&#146;s pretty clear that you are getting independent HTs assigned and not full cores.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; How do you mean? Is the above understanding wrong? I would expect that on c1-30 with --bind-to core openmpi should bind to logical cores 0 and 16 (rank 0), 1 and 17 (rank 2) and so on. All those logical cores are available in sched_getaffinity map, and there is twice as many logical cores as there are MPI processes started on the node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; My guess is that something in slurm has changed such that it detects that HT has been enabled, and then begins treating the HTs as completely independent cpus.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Try changing &#147;-bind-to core&#148; to &#147;-bind-to hwthread  -use-hwthread-cpus&#148; and see if that works
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have and the binding is wrong. For example, I got this output
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 0 @ compute-1-30.local  0,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 1 @ compute-1-30.local  16,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Which means that two ranks have been bound to the same physical core (logical cores 0 and 16 are two HTs of the same core). If I use --bind-to core, I get the following correct binding
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 0 @ compute-1-30.local  0, 16,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The problem is many other ranks get bad binding with 'rank XXX is not bound (or bound to all available processors)' warning.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; But I think I was not entirely correct saying that 1.10.1rc1 did not fix things. It still might have improved something, but not everything. Consider this job:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_CPUS_PER_NODE='5,4,6,5(x2),7,5,9,5,7,6'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_NODELIST='c8-[31,34],c9-[30-32,35-36],c10-[31-34]'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If I run 32 tasks as follows (with 1.10.1rc1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun --hetero-nodes --report-bindings --bind-to core -np 32 ./affinity
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I get the following error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Bind to:     CORE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    Node:        c9-31
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    #processes:  2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    #cpus:       1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; option to your binding directive.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If I now use --bind-to core:overload-allowed, then openmpi starts and _most_ of the threads are bound correctly (i.e., map contains two logical cores in ALL cases), except this case that required the overload flag:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 15 @ compute-9-31.local   1, 17,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 16 @ compute-9-31.local  11, 27,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 17 @ compute-9-31.local   2, 18,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 18 @ compute-9-31.local  12, 28,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 19 @ compute-9-31.local   1, 17,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Note pair 1,17 is used twice. The original SLURM delivered map (no binding) on this node is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 15 @ compute-9-31.local  1, 2, 11, 12, 13, 17, 18, 27, 28, 29,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 16 @ compute-9-31.local  1, 2, 11, 12, 13, 17, 18, 27, 28, 29,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 17 @ compute-9-31.local  1, 2, 11, 12, 13, 17, 18, 27, 28, 29,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 18 @ compute-9-31.local  1, 2, 11, 12, 13, 17, 18, 27, 28, 29,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 19 @ compute-9-31.local  1, 2, 11, 12, 13, 17, 18, 27, 28, 29,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Why does openmpi use cores (1,17) twice instead of using core (13,29)? Clearly, the original SLURM-delivered map has 5 CPUs included, enough for 5 MPI processes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Marcin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 3, 2015, at 7:12 AM, marcin.krotkiewski &lt; &lt;mailto:marcin.krotkiewski_at_[hidden]&gt;marcin.krotkiewski_at_[hidden] &lt;mailto:marcin.krotkiewski_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 10/03/2015 01:06 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks Marcin. Looking at this, I&#146;m guessing that Slurm may be treating HTs as &#147;cores&#148; - i.e., as independent cpus. Any chance that is true?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Not to the best of my knowledge, and at least not intentionally. SLURM starts as many processes as there are physical cores, not threads. To verify this, consider this test case:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27790.php">http://www.open-mpi.org/community/lists/users/2015/10/27790.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27790.php">http://www.open-mpi.org/community/lists/users/2015/10/27790.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27791.php">http://www.open-mpi.org/community/lists/users/2015/10/27791.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27791.php">http://www.open-mpi.org/community/lists/users/2015/10/27791.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27792.php">http://www.open-mpi.org/community/lists/users/2015/10/27792.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27792.php">http://www.open-mpi.org/community/lists/users/2015/10/27792.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27814.php">http://www.open-mpi.org/community/lists/users/2015/10/27814.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27814.php">http://www.open-mpi.org/community/lists/users/2015/10/27814.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27815.php">http://www.open-mpi.org/community/lists/users/2015/10/27815.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27815.php">http://www.open-mpi.org/community/lists/users/2015/10/27815.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; &lt;heterogeneous_topologies.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27827.php">http://www.open-mpi.org/community/lists/users/2015/10/27827.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27827.php">http://www.open-mpi.org/community/lists/users/2015/10/27827.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to:  &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27828.php">http://www.open-mpi.org/community/lists/users/2015/10/27828.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27828.php">http://www.open-mpi.org/community/lists/users/2015/10/27828.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27830.php">http://www.open-mpi.org/community/lists/users/2015/10/27830.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27830.php">http://www.open-mpi.org/community/lists/users/2015/10/27830.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27834.php">http://www.open-mpi.org/community/lists/users/2015/10/27834.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27834.php">http://www.open-mpi.org/community/lists/users/2015/10/27834.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27849.php">http://www.open-mpi.org/community/lists/users/2015/10/27849.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27850/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27851.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Previous message:</strong> <a href="27849.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>In reply to:</strong> <a href="27849.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27841.php">Marcin Krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
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
