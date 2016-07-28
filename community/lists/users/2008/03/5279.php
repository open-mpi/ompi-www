<?
$subject_val = "Re: [OMPI users] SLURM and OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 08:42:09 2008" -->
<!-- isoreceived="20080327124209" -->
<!-- sent="Thu, 27 Mar 2008 13:42:02 +0100" -->
<!-- isosent="20080327124202" -->
<!-- name="Werner Augustin" -->
<!-- email="Werner.Augustin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SLURM and OpenMPI" -->
<!-- id="20080327134202.5072ab5a_at_notebook" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C4084409.4ADE%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] SLURM and OpenMPI<br>
<strong>From:</strong> Werner Augustin (<em>Werner.Augustin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-27 08:42:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5280.php">Matt Hughes: "[OMPI users] ConnectX hang with 1.2.5, crash with 1.3, during gather"</a>
<li><strong>Previous message:</strong> <a href="5278.php">Werner Augustin: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5252.php">Ralph Castain: "Re: [OMPI users] SLURM and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5917.php">Ralph H Castain: "Re: [OMPI users] SLURM and OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 20 Mar 2008 16:40:41 -0600
<br>
Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am no slurm expert. However, it is our understanding that
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE means the number of slots allocated to the job,
</span><br>
<span class="quotelev1">&gt; not the number of tasks to be executed on each node. So the 4(x2)
</span><br>
<span class="quotelev1">&gt; tells us that we have 4 slots on each of two nodes to work with. You
</span><br>
<span class="quotelev1">&gt; got 4 slots on each node because you used the -N option, which told
</span><br>
<span class="quotelev1">&gt; slurm to assign all slots on that node to this job - I assume you
</span><br>
<span class="quotelev1">&gt; have 4 processors on your nodes. OpenMPI parses that string to get
</span><br>
<span class="quotelev1">&gt; the allocation, then maps the number of specified processes against
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<p>That was also my interpretation and I was absolutely sure to have read
<br>
it a couple of days ago in the srun man-page. In the meantime I
<br>
changed my opinion because now it says &quot;Number of tasks to be initiated
<br>
on each node&quot; as Tim has quoted. I've no idea, how Tim managed to change
<br>
the man-page on my computer ;-)
<br>
<p>and there is another variable documented: 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SLURM_CPUS_ON_NODE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Count of processors available to the job on this node.
<br>
Note the select/linear plugin allocates entire  nodes  to  jobs,  so
<br>
the value  indicates  the  total  count  of  CPUs  on the node.  The
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;select/cons_res plugin allocates individual processors
<br>
to  jobs, so  this  number indicates the number of processors on this
<br>
node allocated to the job.
<br>
<p><p>Anyway, back to reality: I made some further tests, and the only way to
<br>
change the values of SLURM_TASKS_PER_NODE was to tell slurm that node x
<br>
has only y cpus in slurm.conf. The variable documented as
<br>
SLURM_CPUS_ON_NODE (in 1.0.15 and 1.2.22) doesn't seem to exist in
<br>
either version. In 1.2.22 there seems to be SLURM_JOB_CPUS_PER_NODE
<br>
which has the same value as SLURM_TASKS_PER_NODE. In a couple of days
<br>
I'll try the other allocator plugin which allocates on a cpu base
<br>
instead of a node base. And after that it probably would be a good
<br>
idea, that somebody (me?) sums up our thread and asks the slurm guys
<br>
for their opinion.
<br>
<p><span class="quotelev1">&gt; It is possible that the interpretation of SLURM_TASKS_PER_NODE is
</span><br>
<span class="quotelev1">&gt; different when used to allocate as opposed to directly launch
</span><br>
<span class="quotelev1">&gt; processes. Our typical usage is for someone to do:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; srun -N 2 -A
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 helloworld
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In other words, we use srun to create an allocation, and then run
</span><br>
<span class="quotelev1">&gt; mpirun separately within it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am therefore unsure what the &quot;-n 2&quot; will do here. If I believe the
</span><br>
<span class="quotelev1">&gt; documentation, it would seem to imply that srun will attempt to
</span><br>
<span class="quotelev1">&gt; launch two copies of &quot;mpirun -np 2 helloworld&quot;, yet your output
</span><br>
<span class="quotelev1">&gt; doesn't seem to support that interpretation. It would appear that the
</span><br>
<span class="quotelev1">&gt; &quot;-n 2&quot; is being ignored and only one copy of mpirun is being
</span><br>
<span class="quotelev1">&gt; launched. I'm no slurm expert, so perhaps that interpretation is
</span><br>
<span class="quotelev1">&gt; incorrect.
</span><br>
<p>That indeed happens when you call &quot;srun -N 2 mpirun -np 2 helloworld&quot;,
<br>
but &quot;srun -N 2 -b mpirun -np 2 helloworld&quot; submits it as a batch-job,
<br>
i.e. &quot;mpirun -np 2 helloworld&quot; is executed only once on one of the
<br>
allocated nodes and environment variables are set appropriately -- or
<br>
at least should be set appropriately -- that a consecutive srun or
<br>
an mpirun inside the command does the right thing.
<br>
<p>Werner 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5280.php">Matt Hughes: "[OMPI users] ConnectX hang with 1.2.5, crash with 1.3, during gather"</a>
<li><strong>Previous message:</strong> <a href="5278.php">Werner Augustin: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5252.php">Ralph Castain: "Re: [OMPI users] SLURM and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5917.php">Ralph H Castain: "Re: [OMPI users] SLURM and OpenMPI"</a>
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
