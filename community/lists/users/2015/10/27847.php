<?
$subject_val = "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  8 15:16:04 2015" -->
<!-- isoreceived="20151008191604" -->
<!-- sent="Thu, 8 Oct 2015 21:15:56 +0200" -->
<!-- isosent="20151008191556" -->
<!-- name="marcin.krotkiewski" -->
<!-- email="marcin.krotkiewski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes" -->
<!-- id="5616C0EC.1020403_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="59043101-B4CA-4843-B329-2970AA686078_at_open-mpi.org" -->
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
<strong>From:</strong> marcin.krotkiewski (<em>marcin.krotkiewski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-08 15:15:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27848.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27846.php">Jeff Squyres (jsquyres): "[OMPI users] 1.10.1rc2 available"</a>
<li><strong>In reply to:</strong> <a href="27834.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27848.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Reply:</strong> <a href="27848.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Reply:</strong> <a href="27849.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Ralph, Gilles, and Jeff
<br>
<p>Thanks a lot for your effort.. Understanding this problem has been a 
<br>
very interesting exercise for me that let me understand OpenMPI much 
<br>
better (I think:).
<br>
<p>I have given it all a little more thought, and done some more tests on 
<br>
our production system, and I think that this is not exactly a 
<br>
corner-case. First of all, I suspect all of this holds for other job 
<br>
scheduling systems besides SLURM (to be thought about..). Moreover, on 
<br>
our system a rather common usage scenario involves SLURM job allocation 
<br>
using, e.g.,
<br>
<p>salloc --ntasks=32
<br>
<p>which results in very fragmented allocations - that's specific for the 
<br>
type of problems users use this cluster for, but it's a fact. Users then 
<br>
run the job using
<br>
<p>mpirun ./program
<br>
<p>For versions up to 1.10.0, with uneven resource allocation among compute 
<br>
nodes the default binding options used in OpenMPI in most cases result 
<br>
in some CPU cores not being present in the used cpuset at all, others 
<br>
being over/under-subscribed. This certainly is job-specific and depends 
<br>
on how fragmented the SLURM allocations are, but to give a scary number: 
<br>
in one case I started 512 tasks (1 per core), and OpenMPI binding 
<br>
created a cpuset that used only 271 cores, some of them being 
<br>
over/under-subscribed on top of that. Effectively, user gets 50% of what 
<br>
he asked for. As already discussed, this happens quietly - the user has 
<br>
no idea.
<br>
<p>For version 1.10.1rc1 and up the situation is a bit different: it seems 
<br>
that in many cases all cores are present in the cpuset, just that the 
<br>
binding does not take place in a lot of cases. Instead, processes are 
<br>
bound to all cores allocated by SLURM. In other scenarios, as discussed 
<br>
before, some cores are over/under-subscribed. Again, this is done quietly.
<br>
<p>In all cases what is needed is the --hetero-nodes switch. If I apply the 
<br>
patch that Gilles has posted, it seems to be enough for 1.10.1rc1 and 
<br>
up. The switch is not enough for earlier versions of OpenMPI and one 
<br>
needs --map-by core in addition.
<br>
<p>Given all that I think some sort of fix would be in order soon. I agree 
<br>
with Ralph that to address this issue quickly a simplified fix would be 
<br>
a good choice. As Ralph has already pointed out (or at least how I 
<br>
understood it :) this would essentially involve activating 
<br>
--hetero-nodes by default, and using --map-by core in cases where the 
<br>
architecture is not homogeneous. Uncovering the warning so that the 
<br>
failure to bind is not silent is the last piece of puzzle. Maybe adding 
<br>
a sanity check to make sure all allocated resources are in use would be 
<br>
helpful - if not by default, then maybe with some flag.
<br>
<p>Does all this make sense?
<br>
<p>Again, thank you all for your help,
<br>
<p>Marcin
<br>
<p><p><p><p><p>On 10/07/2015 04:03 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I&#146;m a little nervous about this one, Gilles. It&#146;s doing a lot more 
</span><br>
<span class="quotelev1">&gt; than just addressing the immediate issue, and I&#146;m concerned about any 
</span><br>
<span class="quotelev1">&gt; potential side-effects that we don&#146;t fully unocver prior to release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;d suggest a two-pronged approach:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. use my alternative method for 1.10.1 to solve the immediate issue. 
</span><br>
<span class="quotelev1">&gt; It only affects this one, rather unusual, corner-case that was 
</span><br>
<span class="quotelev1">&gt; reported here. So the impact can be easily contained and won&#146;t impact 
</span><br>
<span class="quotelev1">&gt; anything else.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. push your proposed solution to the master where it can soak for 
</span><br>
<span class="quotelev1">&gt; awhile and give us a chance to fully discover the secondary effects. 
</span><br>
<span class="quotelev1">&gt; Removing the unused and &#147;not-allowed&#148; cpus from the topology means a 
</span><br>
<span class="quotelev1">&gt; substantial scrub of the code base in a number of places, and your 
</span><br>
<span class="quotelev1">&gt; patch doesn&#146;t really get them all. It&#146;s going to take time to ensure 
</span><br>
<span class="quotelev1">&gt; everything is working correctly again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 7, 2015, at 4:29 AM, Gilles Gouaillardet 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;gilles.gouaillardet_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; there are quite a lot of changes, I did not update master yet (need 
</span><br>
<span class="quotelev2">&gt;&gt; extra pairs of eyes to review this...)
</span><br>
<span class="quotelev2">&gt;&gt; so unless you want to make rc2 today and rc3 a week later, it is imho 
</span><br>
<span class="quotelev2">&gt;&gt; way safer to wait for v1.10.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; any thoughts ?
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
<span class="quotelev2">&gt;&gt; On Wednesday, October 7, 2015, Jeff Squyres (jsquyres) 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Is this something that needs to go into v1.10.1?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     If so, a PR needs to be filed ASAP.  We were supposed to make the
</span><br>
<span class="quotelev2">&gt;&gt;     next 1.10.1 RC yesterday, but slipped to today due to some last
</span><br>
<span class="quotelev2">&gt;&gt;     second patches.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; On Oct 7, 2015, at 4:32 AM, Gilles Gouaillardet
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;gilles_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Marcin,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; here is a patch for the master, hopefully it fixes all the
</span><br>
<span class="quotelev2">&gt;&gt;     issues we discussed
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; i will make sure it applies fine vs latest 1.10 tarball from
</span><br>
<span class="quotelev2">&gt;&gt;     tomorrow
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; On 10/6/2015 7:22 PM, marcin.krotkiewski wrote:
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt; Gilles,
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt; Yes, it seemed that all was fine with binding in the patched
</span><br>
<span class="quotelev2">&gt;&gt;     1.10.1rc1 - thank you. Eagerly waiting for the other patches, let
</span><br>
<span class="quotelev2">&gt;&gt;     me know and I will test them later this week.
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt; Marcin
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt; On 10/06/2015 12:09 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; Marcin,
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; my understanding is that in this case, patched v1.10.1rc1 is
</span><br>
<span class="quotelev2">&gt;&gt;     working just fine.
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; am I right ?
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; I prepared two patches
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; one to remove the warning when binding on one core if only
</span><br>
<span class="quotelev2">&gt;&gt;     one core is available,
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; an other one to add a warning if the user asks a binding
</span><br>
<span class="quotelev2">&gt;&gt;     policy that makes no sense with the required mapping policy
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; I will finalize them tomorrow hopefully
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; On Tuesday, October 6, 2015, marcin.krotkiewski
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;marcin.krotkiewski_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; Hi, Gilles
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt; you mentionned you had one failure with 1.10.1rc1 and
</span><br>
<span class="quotelev2">&gt;&gt;     -bind-to core
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt; could you please send the full details (script, allocation
</span><br>
<span class="quotelev2">&gt;&gt;     and output)
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt; in your slurm script, you can do
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt; srun -N $SLURM_NNODES -n $SLURM_NNODES --cpu_bind=none -l
</span><br>
<span class="quotelev2">&gt;&gt;     grep Cpus_allowed_list /proc/self/status
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt; before invoking mpirun
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; It was an interactive job allocated with
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; salloc --account=staff --ntasks=32 --mem-per-cpu=2G
</span><br>
<span class="quotelev2">&gt;&gt;     --time=120:0:0
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; The slurm environment is the following
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; SLURM_JOBID=12714491
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; SLURM_JOB_CPUS_PER_NODE='4,2,5(x2),4,7,5'
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; SLURM_JOB_ID=12714491
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; SLURM_JOB_NODELIST='c1-[2,4,8,13,16,23,26]'
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; SLURM_JOB_NUM_NODES=7
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; SLURM_JOB_PARTITION=normal
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; SLURM_MEM_PER_CPU=2048
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; SLURM_NNODES=7
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; SLURM_NODELIST='c1-[2,4,8,13,16,23,26]'
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; SLURM_NODE_ALIASES='(null)'
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; SLURM_NPROCS=32
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; SLURM_NTASKS=32
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; SLURM_SUBMIT_DIR=/cluster/home/marcink
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; SLURM_SUBMIT_HOST=login-0-1.local
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; SLURM_TASKS_PER_NODE='4,2,5(x2),4,7,5'
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; The output of the command you asked for is
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; 0: c1-2.local  Cpus_allowed_list: 1-4,17-20
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; 1: c1-4.local  Cpus_allowed_list: 1,15,17,31
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; 2: c1-8.local  Cpus_allowed_list: 0,5,9,13-14,16,21,25,29-30
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; 3: c1-13.local  Cpus_allowed_list:  3-7,19-23
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; 4: c1-16.local  Cpus_allowed_list:  12-15,28-31
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; 5: c1-23.local  Cpus_allowed_list:  2-4,8,13-15,18-20,24,29-31
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; 6: c1-26.local  Cpus_allowed_list:  1,6,11,13,15,17,22,27,29,31
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; Running with command
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; mpirun --mca rmaps_base_verbose 10 --hetero-nodes --bind-to
</span><br>
<span class="quotelev2">&gt;&gt;     core --report-bindings --map-by socket -np 32 ./affinity
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; I have attached two output files: one for the original
</span><br>
<span class="quotelev2">&gt;&gt;     1.10.1rc1, one for the patched version.
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; When I said 'failed in one case' I was not precise. I got an
</span><br>
<span class="quotelev2">&gt;&gt;     error on node c1-8, which was the first one to have different
</span><br>
<span class="quotelev2">&gt;&gt;     number of MPI processes on the two sockets. It would also fail on
</span><br>
<span class="quotelev2">&gt;&gt;     some later nodes, just                 that because of the error
</span><br>
<span class="quotelev2">&gt;&gt;     we never got there.
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; Let me know if you need more.
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; Marcin
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt; On 10/4/2015 11:55 PM, marcin.krotkiewski wrote:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; Hi, all,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; I played a bit more and it seems that the problem results from
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; trg_obj = opal_hwloc_base_find_min_bound_target_under_obj()
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; called in rmaps_base_binding.c / bind_downwards being
</span><br>
<span class="quotelev2">&gt;&gt;     wrong. I do not know the reason, but I think I know when the
</span><br>
<span class="quotelev2">&gt;&gt;     problem happens (at least on 1.10.1rc1). It seems that by default
</span><br>
<span class="quotelev2">&gt;&gt;     openmpi maps by socket. The error happens when for a given
</span><br>
<span class="quotelev2">&gt;&gt;     compute node there is a different number of cores used on each
</span><br>
<span class="quotelev2">&gt;&gt;     socket. Consider previously studied case (the debug outputs I
</span><br>
<span class="quotelev2">&gt;&gt;     sent in last post). c1-8, which was source of error, has 5 mpi
</span><br>
<span class="quotelev2">&gt;&gt;     processes assigned, and the cpuset is the following:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; 0, 5, 9, 13, 14, 16, 21, 25, 29, 30
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; Cores 0,5 are on socket 0, cores 9, 13, 14 are on socket 1.
</span><br>
<span class="quotelev2">&gt;&gt;     Binding progresses correctly up to and including core 13 (see end
</span><br>
<span class="quotelev2">&gt;&gt;     of file out.1.10.1rc2, before the error). That is 2 cores on
</span><br>
<span class="quotelev2">&gt;&gt;     socket 0, and 2 cores on socket 1. Error is thrown when core 14
</span><br>
<span class="quotelev2">&gt;&gt;     should be bound - extra core on socket 1 with no corresponding
</span><br>
<span class="quotelev2">&gt;&gt;     core on socket 0. At that point the returned trg_obj points to
</span><br>
<span class="quotelev2">&gt;&gt;     the first core on the node (os_index 0, socket 0).
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; I have submitted a few other jobs and I always had an error
</span><br>
<span class="quotelev2">&gt;&gt;     in such situation. Moreover, if I now use --map-by core instead
</span><br>
<span class="quotelev2">&gt;&gt;     of socket, the error is gone, and I get my expected binding:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 0 @ compute-1-2.local  1, 17,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 1 @ compute-1-2.local  2, 18,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 2 @ compute-1-2.local  3, 19,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 3 @ compute-1-2.local  4, 20,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 4 @ compute-1-4.local  1, 17,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 5 @ compute-1-4.local  15, 31,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 6 @ compute-1-8.local  0, 16,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 7 @ compute-1-8.local  5, 21,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 8 @ compute-1-8.local  9, 25,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 9 @ compute-1-8.local  13, 29,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 10 @ compute-1-8.local  14, 30,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 11 @ compute-1-13.local  3, 19,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 12 @ compute-1-13.local  4, 20,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 13 @ compute-1-13.local  5, 21,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 14 @ compute-1-13.local  6, 22,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 15 @ compute-1-13.local  7, 23,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 16 @ compute-1-16.local  12, 28,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 17 @ compute-1-16.local  13, 29,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 18 @ compute-1-16.local  14, 30,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 19 @ compute-1-16.local  15, 31,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 20 @ compute-1-23.local  2, 18,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 29 @ compute-1-26.local  11, 27,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 21 @ compute-1-23.local  3, 19,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 30 @ compute-1-26.local  13, 29,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 22 @ compute-1-23.local  4, 20,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 31 @ compute-1-26.local  15, 31,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 23 @ compute-1-23.local  8, 24,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 27 @ compute-1-26.local  1, 17,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 24 @ compute-1-23.local  13, 29,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 28 @ compute-1-26.local  6, 22,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 25 @ compute-1-23.local  14, 30,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; rank 26 @ compute-1-23.local  15, 31,
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; Using --map-by core seems to fix the issue on 1.8.8, 1.10.0
</span><br>
<span class="quotelev2">&gt;&gt;     and 1.10.1rc1. However, there is still a difference in behavior
</span><br>
<span class="quotelev2">&gt;&gt;     between 1.10.1rc1 and earlier versions. In the SLURM job
</span><br>
<span class="quotelev2">&gt;&gt;     described in last post, 1.10.1rc1 fails to bind only in 1 case,
</span><br>
<span class="quotelev2">&gt;&gt;     while the earlier versions fail in 21 out of 32 cases. You
</span><br>
<span class="quotelev2">&gt;&gt;     mentioned there was a bug in hwloc. Not sure if it can explain
</span><br>
<span class="quotelev2">&gt;&gt;     the difference in behavior.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; Hope this helps to nail this down.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; Marcin
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; On 10/04/2015 09:55 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt; I suspect ompi tries to bind to threads outside the cpuset.
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt; this could be pretty similar to a previous issue when ompi
</span><br>
<span class="quotelev2">&gt;&gt;     tried to bind to cores outside the cpuset.
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt; /* when a core has more than one thread, would ompi assume
</span><br>
<span class="quotelev2">&gt;&gt;     all the threads are available if the core is available ? */
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt; I will investigate this from tomorrow
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt; On Sunday, October 4, 2015, Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;rhc_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt; Thanks - please go ahead and release that allocation as
</span><br>
<span class="quotelev2">&gt;&gt;     I&#146;m not going to get to this immediately. I&#146;ve got several hot
</span><br>
<span class="quotelev2">&gt;&gt;     irons in the fire right now, and I&#146;m not sure when I&#146;ll get a
</span><br>
<span class="quotelev2">&gt;&gt;     chance to track this down.
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt; Gilles or anyone else who might have time - feel free to
</span><br>
<span class="quotelev2">&gt;&gt;     take a gander and see if something pops out at you.
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 3, 2015, at 11:05 AM, marcin.krotkiewski
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;marcin.krotkiewski_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; Done. I have compiled 1.10.0 and 1.10.rc1 with
</span><br>
<span class="quotelev2">&gt;&gt;     --enable-debug and executed
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun --mca rmaps_base_verbose 10 --hetero-nodes
</span><br>
<span class="quotelev2">&gt;&gt;     --report-bindings --bind-to core -np 32 ./affinity
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; In case of 1.10.rc1 I have also added :overload-allowed -
</span><br>
<span class="quotelev2">&gt;&gt;     output in a separate file. This option did not make much
</span><br>
<span class="quotelev2">&gt;&gt;     difference for 1.10.0, so I did not attach it here.
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; First thing I noted for 1.10.0 are lines like
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; [login-0-1.local:03399] [[37945,0],0] GOT 1 CPUS
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; [login-0-1.local:03399] [[37945,0],0] PROC [[37945,1],27]
</span><br>
<span class="quotelev2">&gt;&gt;     BITMAP
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; [login-0-1.local:03399] [[37945,0],0] PROC [[37945,1],27]
</span><br>
<span class="quotelev2">&gt;&gt;     ON c1-26 IS NOT BOUND
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; with an empty BITMAP.
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; The SLURM environment is
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; set | grep SLURM
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOBID=12714491
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_CPUS_PER_NODE='4,2,5(x2),4,7,5'
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_ID=12714491
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_NODELIST='c1-[2,4,8,13,16,23,26]'
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_NUM_NODES=7
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_PARTITION=normal
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_MEM_PER_CPU=2048
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NNODES=7
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NODELIST='c1-[2,4,8,13,16,23,26]'
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NODE_ALIASES='(null)'
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NPROCS=32
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_NTASKS=32
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_SUBMIT_DIR=/cluster/home/marcink
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_SUBMIT_HOST=login-0-1.local
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_TASKS_PER_NODE='4,2,5(x2),4,7,5'
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; I have submitted an interactive job on screen for 120
</span><br>
<span class="quotelev2">&gt;&gt;     hours now to work with one example, and not change it for every
</span><br>
<span class="quotelev2">&gt;&gt;     post :)
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; If you need anything else, let me know. I could introduce
</span><br>
<span class="quotelev2">&gt;&gt;     some patch/printfs and recompile, if you need it.
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; Marcin
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt; On 10/03/2015 07:17 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Rats - just realized I have no way to test this as none
</span><br>
<span class="quotelev2">&gt;&gt;     of the machines I can access are setup for cgroup-based
</span><br>
<span class="quotelev2">&gt;&gt;     multi-tenant. Is this a debug version of OMPI? If not, can you
</span><br>
<span class="quotelev2">&gt;&gt;     rebuild OMPI with &#151;enable-debug?
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Then please run it with &#151;mca rmaps_base_verbose 10 and
</span><br>
<span class="quotelev2">&gt;&gt;     pass along the output.
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 3, 2015, at 10:09 AM, Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;rhc_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; What version of slurm is this? I might try to debug it
</span><br>
<span class="quotelev2">&gt;&gt;     here. I&#146;m not sure where the problem lies just yet.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 3, 2015, at 8:59 AM, marcin.krotkiewski
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;marcin.krotkiewski_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here is the output of lstopo. In short, (0,16) are
</span><br>
<span class="quotelev2">&gt;&gt;     core 0, (1,17) - core 1 etc.
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Machine (64GB)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   NUMANode L#0 (P#0 32GB)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     Socket L#0 + L3 L#0 (20MB)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB)
</span><br>
<span class="quotelev2">&gt;&gt;     + Core L#0
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#0 (P#0)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#1 (P#16)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB)
</span><br>
<span class="quotelev2">&gt;&gt;     + Core L#1
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#2 (P#1)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#3 (P#17)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       L2 L#2 (256KB) + L1d L#2 (32KB) + L1i L#2 (32KB)
</span><br>
<span class="quotelev2">&gt;&gt;     + Core L#2
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#4 (P#2)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#5 (P#18)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       L2 L#3 (256KB) + L1d L#3 (32KB) + L1i L#3 (32KB)
</span><br>
<span class="quotelev2">&gt;&gt;     + Core L#3
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#6 (P#3)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#7 (P#19)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       L2 L#4 (256KB) + L1d L#4 (32KB) + L1i L#4 (32KB)
</span><br>
<span class="quotelev2">&gt;&gt;     + Core L#4
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#8 (P#4)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#9 (P#20)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       L2 L#5 (256KB) + L1d L#5 (32KB) + L1i L#5 (32KB)
</span><br>
<span class="quotelev2">&gt;&gt;     + Core L#5
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#10 (P#5)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#11 (P#21)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       L2 L#6 (256KB) + L1d L#6 (32KB) + L1i L#6 (32KB)
</span><br>
<span class="quotelev2">&gt;&gt;     + Core L#6
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#12 (P#6)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#13 (P#22)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       L2 L#7 (256KB) + L1d L#7 (32KB) + L1i L#7 (32KB)
</span><br>
<span class="quotelev2">&gt;&gt;     + Core L#7
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#14 (P#7)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PU L#15 (P#23)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  HostBridge L#0
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  PCIBridge
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PCI 8086:1521
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;           Net L#0 &quot;eth0&quot;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PCI 8086:1521
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;           Net L#1 &quot;eth1&quot;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  PCIBridge
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PCI 15b3:1003
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;           Net L#2 &quot;ib0&quot;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  OpenFabrics L#3 &quot;mlx4_0&quot;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  PCIBridge
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         PCI 102b:0532
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PCI 8086:1d02
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Block L#4 &quot;sda&quot;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   NUMANode L#1 (P#1 32GB) + Socket L#1 + L3 L#1 (20MB)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     L2 L#8 (256KB) + L1d L#8 (32KB) + L1i L#8 (32KB) +
</span><br>
<span class="quotelev2">&gt;&gt;     Core L#8
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#16 (P#8)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#17 (P#24)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     L2 L#9 (256KB) + L1d L#9 (32KB) + L1i L#9 (32KB) +
</span><br>
<span class="quotelev2">&gt;&gt;     Core L#9
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#18 (P#9)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#19 (P#25)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     L2 L#10 (256KB) + L1d L#10 (32KB) + L1i L#10
</span><br>
<span class="quotelev2">&gt;&gt;     (32KB) + Core L#10
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#20 (P#10)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#21 (P#26)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     L2 L#11 (256KB) + L1d L#11 (32KB) + L1i L#11
</span><br>
<span class="quotelev2">&gt;&gt;     (32KB) + Core L#11
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#22 (P#11)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#23 (P#27)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     L2 L#12 (256KB) + L1d L#12 (32KB) + L1i L#12
</span><br>
<span class="quotelev2">&gt;&gt;     (32KB) + Core L#12
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#24 (P#12)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#25 (P#28)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     L2 L#13 (256KB) + L1d L#13 (32KB) + L1i L#13
</span><br>
<span class="quotelev2">&gt;&gt;     (32KB) + Core L#13
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#26 (P#13)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#27 (P#29)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     L2 L#14 (256KB) + L1d L#14 (32KB) + L1i L#14
</span><br>
<span class="quotelev2">&gt;&gt;     (32KB) + Core L#14
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#28 (P#14)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#29 (P#30)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     L2 L#15 (256KB) + L1d L#15 (32KB) + L1i L#15
</span><br>
<span class="quotelev2">&gt;&gt;     (32KB) + Core L#15
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#30 (P#15)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;       PU L#31 (P#31)
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 10/03/2015 05:46 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Maybe I&#146;m just misreading your HT map - that slurm
</span><br>
<span class="quotelev2">&gt;&gt;     nodelist syntax is a new one to me, but they tend to change
</span><br>
<span class="quotelev2">&gt;&gt;     things around. Could you run lstopo on one of those compute nodes
</span><br>
<span class="quotelev2">&gt;&gt;     and send the output?
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I&#146;m just suspicious because I&#146;m not seeing a clear
</span><br>
<span class="quotelev2">&gt;&gt;     pairing of HT numbers in your output, but HT numbering is
</span><br>
<span class="quotelev2">&gt;&gt;     BIOS-specific and I may just not be understanding your particular
</span><br>
<span class="quotelev2">&gt;&gt;     pattern. Our error message is clearly indicating that we are
</span><br>
<span class="quotelev2">&gt;&gt;     seeing individual HTs (and not complete cores) assigned, and I
</span><br>
<span class="quotelev2">&gt;&gt;     don&#146;t know the source of that confusion.
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 3, 2015, at 8:28 AM, marcin.krotkiewski
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;marcin.krotkiewski_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 10/03/2015 04:38 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If mpirun isn&#146;t trying to do any binding, then you
</span><br>
<span class="quotelev2">&gt;&gt;     will of course get the right mapping as we&#146;ll just inherit
</span><br>
<span class="quotelev2">&gt;&gt;     whatever we received.
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Yes. I meant that whatever you received (what SLURM
</span><br>
<span class="quotelev2">&gt;&gt;     gives) is a correct cpu map and assigns _whole_ CPUs, not a
</span><br>
<span class="quotelev2">&gt;&gt;     single HT to MPI processes. In the case mentioned earlier openmpi
</span><br>
<span class="quotelev2">&gt;&gt;     should start 6 tasks on c1-30. If HT would be treated as separate
</span><br>
<span class="quotelev2">&gt;&gt;     and independent cores, sched_getaffinity of an MPI process
</span><br>
<span class="quotelev2">&gt;&gt;     started on c1-30 would return a map with 6 entries only. In my
</span><br>
<span class="quotelev2">&gt;&gt;     case it returns a map                  with 12 entries - 2 for
</span><br>
<span class="quotelev2">&gt;&gt;     each core. So one  process is in fact allocated both HTs, not
</span><br>
<span class="quotelev2">&gt;&gt;     only one. Is what I'm saying correct?
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Looking at your output, it&#146;s pretty clear that you
</span><br>
<span class="quotelev2">&gt;&gt;     are getting independent HTs assigned and not full cores.
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; How do you mean? Is the above understanding wrong? I
</span><br>
<span class="quotelev2">&gt;&gt;     would expect that on c1-30 with --bind-to core openmpi should
</span><br>
<span class="quotelev2">&gt;&gt;     bind to logical cores 0 and 16 (rank 0), 1 and 17 (rank 2) and so
</span><br>
<span class="quotelev2">&gt;&gt;     on. All those logical cores are available in sched_getaffinity
</span><br>
<span class="quotelev2">&gt;&gt;     map, and there is twice as many logical cores as there are MPI
</span><br>
<span class="quotelev2">&gt;&gt;     processes started on the node.
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; My guess is that something in slurm has changed
</span><br>
<span class="quotelev2">&gt;&gt;     such that it detects that HT has been enabled, and then begins
</span><br>
<span class="quotelev2">&gt;&gt;     treating the HTs as completely independent cpus.
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Try changing &#147;-bind-to core&#148; to &#147;-bind-to hwthread
</span><br>
<span class="quotelev2">&gt;&gt;     -use-hwthread-cpus&#148; and see if that works
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have and the binding is wrong. For example, I got
</span><br>
<span class="quotelev2">&gt;&gt;     this output
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 0 @ compute-1-30.local  0,
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 1 @ compute-1-30.local  16,
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Which means that two ranks have been bound to the
</span><br>
<span class="quotelev2">&gt;&gt;     same physical core (logical cores 0 and 16 are two HTs of the
</span><br>
<span class="quotelev2">&gt;&gt;     same core). If I use --bind-to core, I get the following correct
</span><br>
<span class="quotelev2">&gt;&gt;     binding
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 0 @ compute-1-30.local  0, 16,
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The problem is many other ranks get bad binding with
</span><br>
<span class="quotelev2">&gt;&gt;     'rank XXX is not bound (or bound to all available processors)'
</span><br>
<span class="quotelev2">&gt;&gt;     warning.
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; But I think I was not entirely correct saying that
</span><br>
<span class="quotelev2">&gt;&gt;     1.10.1rc1 did not fix things. It still might have improved
</span><br>
<span class="quotelev2">&gt;&gt;     something, but not everything. Consider this job:
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_JOB_CPUS_PER_NODE='5,4,6,5(x2),7,5,9,5,7,6'
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     SLURM_JOB_NODELIST='c8-[31,34],c9-[30-32,35-36],c10-[31-34]'
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If I run 32 tasks as follows (with 1.10.1rc1)
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun --hetero-nodes --report-bindings --bind-to
</span><br>
<span class="quotelev2">&gt;&gt;     core -np 32 ./affinity
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I get the following error:
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; A request was made to bind to that would result in
</span><br>
<span class="quotelev2">&gt;&gt;     binding more
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Bind to:     CORE
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Node:        c9-31
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #processes:  2
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #cpus:       1
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You can override this protection by adding the
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;overload-allowed&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; option to your binding directive.
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If I now use --bind-to core:overload-allowed, then
</span><br>
<span class="quotelev2">&gt;&gt;     openmpi starts and _most_ of the threads are bound correctly
</span><br>
<span class="quotelev2">&gt;&gt;     (i.e., map contains two logical cores in ALL cases), except this
</span><br>
<span class="quotelev2">&gt;&gt;     case that required the overload flag:
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 15 @ compute-9-31.local   1, 17,
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 16 @ compute-9-31.local  11, 27,
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 17 @ compute-9-31.local   2, 18,
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 18 @ compute-9-31.local  12, 28,
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 19 @ compute-9-31.local   1, 17,
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Note pair 1,17 is used twice. The original SLURM
</span><br>
<span class="quotelev2">&gt;&gt;     delivered map (no binding) on this node is
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 15 @ compute-9-31.local  1, 2, 11, 12, 13, 17,
</span><br>
<span class="quotelev2">&gt;&gt;     18, 27, 28, 29,
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 16 @ compute-9-31.local  1, 2, 11, 12, 13, 17,
</span><br>
<span class="quotelev2">&gt;&gt;     18, 27, 28, 29,
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 17 @ compute-9-31.local  1, 2, 11, 12, 13, 17,
</span><br>
<span class="quotelev2">&gt;&gt;     18, 27, 28, 29,
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 18 @ compute-9-31.local  1, 2, 11, 12, 13, 17,
</span><br>
<span class="quotelev2">&gt;&gt;     18, 27, 28, 29,
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 19 @ compute-9-31.local  1, 2, 11, 12, 13, 17,
</span><br>
<span class="quotelev2">&gt;&gt;     18, 27, 28, 29,
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Why does openmpi use cores (1,17) twice instead of
</span><br>
<span class="quotelev2">&gt;&gt;     using core (13,29)? Clearly, the original SLURM-delivered map has
</span><br>
<span class="quotelev2">&gt;&gt;     5 CPUs included, enough for 5 MPI processes.
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Marcin
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 3, 2015, at 7:12 AM, marcin.krotkiewski
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;marcin.krotkiewski_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 10/03/2015 01:06 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks Marcin. Looking at this, I&#146;m guessing that
</span><br>
<span class="quotelev2">&gt;&gt;     Slurm may be treating HTs as &#147;cores&#148; - i.e., as independent cpus.
</span><br>
<span class="quotelev2">&gt;&gt;     Any chance that is true?
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Not to the best of my knowledge, and at least not
</span><br>
<span class="quotelev2">&gt;&gt;     intentionally. SLURM starts as many processes as there are
</span><br>
<span class="quotelev2">&gt;&gt;     physical cores, not threads. To verify this, consider this test case:
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/10/27790.php">http://www.open-mpi.org/community/lists/users/2015/10/27790.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27791.php">http://www.open-mpi.org/community/lists/users/2015/10/27791.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;     &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27792.php">http://www.open-mpi.org/community/lists/users/2015/10/27792.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;     &gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27814.php">http://www.open-mpi.org/community/lists/users/2015/10/27814.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt; Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27815.php">http://www.open-mpi.org/community/lists/users/2015/10/27815.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;heterogeneous_topologies.patch&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/10/27827.php">http://www.open-mpi.org/community/lists/users/2015/10/27827.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     --
</span><br>
<span class="quotelev2">&gt;&gt;     Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;     jsquyres_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/10/27828.php">http://www.open-mpi.org/community/lists/users/2015/10/27828.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27830.php">http://www.open-mpi.org/community/lists/users/2015/10/27830.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27834.php">http://www.open-mpi.org/community/lists/users/2015/10/27834.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27847/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27848.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27846.php">Jeff Squyres (jsquyres): "[OMPI users] 1.10.1rc2 available"</a>
<li><strong>In reply to:</strong> <a href="27834.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27848.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Reply:</strong> <a href="27848.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Reply:</strong> <a href="27849.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
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
