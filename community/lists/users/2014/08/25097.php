<?
$subject_val = "Re: [OMPI users] Running a hybrid MPI+openMP program";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 20 14:16:55 2014" -->
<!-- isoreceived="20140820181655" -->
<!-- sent="Wed, 20 Aug 2014 20:16:46 +0200" -->
<!-- isosent="20140820181646" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running a hybrid MPI+openMP program" -->
<!-- id="68F255E4-9AA6-4330-A12B-1D123A25D028_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7EAB763B-5161-49A0-A86D-B3D2DBCFDF5D_at_open-mpi.org" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-20 14:16:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25098.php">Ralph Castain: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25096.php">Oscar Mojica: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>In reply to:</strong> <a href="25092.php">Ralph Castain: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25098.php">Ralph Castain: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25098.php">Ralph Castain: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 20.08.2014 um 19:05 schrieb Ralph Castain:
<br>
<p><span class="quotelev2">&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Aha, this is quite interesting - how do you do this: scanning the /proc/&lt;pid&gt;/status or alike? What happens if you don't find enough free cores as they are used up by other applications already?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Remember, when you use mpirun to launch, we launch our own daemons using the native launcher (e.g., qsub). So the external RM will bind our daemons to the specified cores on each node. We use hwloc to determine what cores our daemons are bound to, and then bind our own child processes to cores within that range.
</span><br>
<p>Thx for reminding me of this. Indeed, I mixed up two different aspects in this discussion.
<br>
<p>a) What will happen in case no binding was done by the RM (hence Open MPI could use all cores) and two Open MPI jobs (or something completely different besides one Open MPI job) are running on the same node (due to the Tight Integration with two different Open MPI directories in /tmp and two `orted`, unique for each job)? Will the second Open MPI job know what the first Open MPI job used up already? Or will both use the same set of cores as &quot;-bind-to none&quot; can't be set in the given `mpiexec` command because of &quot;-map-by slot:pe=$OMP_NUM_THREADS&quot; was used - which triggers &quot;-bind-to core&quot; indispensable and can't be switched off? I see the same cores being used for both jobs.
<br>
<p>Altering the machinefile instead: the processes are not bound to any core, and the OS takes care of a proper assignment.
<br>
<p><p><span class="quotelev1">&gt; If the cores we are bound to are the same on each node, then we will do this with no further instruction. However, if the cores are different on the individual nodes, then you need to add --hetero-nodes to your command line (as the nodes appear to be heterogeneous to us).
</span><br>
<p>b) Aha, it's not about different type CPU types, but also same CPU type but different allocations between the nodes? It's not in the `mpiexec` man-page of 1.8.1 though. I'll have a look at it.
<br>
<p><p><span class="quotelev1">&gt; So it is up to the RM to set the constraint - we just live within it.
</span><br>
<p>Fine.
<br>
<p>-- Reuti<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25098.php">Ralph Castain: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25096.php">Oscar Mojica: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>In reply to:</strong> <a href="25092.php">Ralph Castain: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25098.php">Ralph Castain: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25098.php">Ralph Castain: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
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
