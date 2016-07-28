<?
$subject_val = "Re: [OMPI users] Running a hybrid MPI+openMP program";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 20 17:17:08 2014" -->
<!-- isoreceived="20140820211708" -->
<!-- sent="Wed, 20 Aug 2014 14:16:51 -0700" -->
<!-- isosent="20140820211651" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running a hybrid MPI+openMP program" -->
<!-- id="49609BDC-58E6-4128-82EE-16DF3B18BA25_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="68F255E4-9AA6-4330-A12B-1D123A25D028_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running a hybrid MPI+openMP program<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-20 17:16:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25099.php">Filippo Spiga: "[OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>Previous message:</strong> <a href="25097.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>In reply to:</strong> <a href="25097.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25106.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25106.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 20, 2014, at 11:16 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Am 20.08.2014 um 19:05 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Aha, this is quite interesting - how do you do this: scanning the /proc/&lt;pid&gt;/status or alike? What happens if you don't find enough free cores as they are used up by other applications already?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Remember, when you use mpirun to launch, we launch our own daemons using the native launcher (e.g., qsub). So the external RM will bind our daemons to the specified cores on each node. We use hwloc to determine what cores our daemons are bound to, and then bind our own child processes to cores within that range.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thx for reminding me of this. Indeed, I mixed up two different aspects in this discussion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a) What will happen in case no binding was done by the RM (hence Open MPI could use all cores) and two Open MPI jobs (or something completely different besides one Open MPI job) are running on the same node (due to the Tight Integration with two different Open MPI directories in /tmp and two `orted`, unique for each job)? Will the second Open MPI job know what the first Open MPI job used up already? Or will both use the same set of cores as &quot;-bind-to none&quot; can't be set in the given `mpiexec` command because of &quot;-map-by slot:pe=$OMP_NUM_THREADS&quot; was used - which triggers &quot;-bind-to core&quot; indispensable and can't be switched off? I see the same cores being used for both jobs.
</span><br>
<p>Yeah, each mpirun executes completely independently of the other, so they have no idea what the other is doing. So the cores will be overloaded. Multi-pe's requires bind-to-core otherwise there is no way to implement the request
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Altering the machinefile instead: the processes are not bound to any core, and the OS takes care of a proper assignment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If the cores we are bound to are the same on each node, then we will do this with no further instruction. However, if the cores are different on the individual nodes, then you need to add --hetero-nodes to your command line (as the nodes appear to be heterogeneous to us).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; b) Aha, it's not about different type CPU types, but also same CPU type but different allocations between the nodes? It's not in the `mpiexec` man-page of 1.8.1 though. I'll have a look at it.
</span><br>
<p>The man page is probably a little out-of-date in this area - but yes, --hetero-nodes is required for *any* difference in the way the nodes appear to us (cpus, slot assignments, etc.). The 1.9 series may remove that requirement - still looking at it.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So it is up to the RM to set the constraint - we just live within it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25097.php">http://www.open-mpi.org/community/lists/users/2014/08/25097.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25099.php">Filippo Spiga: "[OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>Previous message:</strong> <a href="25097.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>In reply to:</strong> <a href="25097.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25106.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25106.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
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
