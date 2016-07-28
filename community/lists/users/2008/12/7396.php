<?
$subject_val = "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  4 16:07:31 2008" -->
<!-- isoreceived="20081204210731" -->
<!-- sent="Thu, 04 Dec 2008 16:07:27 -0500" -->
<!-- isosent="20081204210727" -->
<!-- name="V. Ram" -->
<!-- email="v_r_959_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processor/core selection/affinity for large shared memory systems" -->
<!-- id="1228424847.23693.1288322547_at_webmail.messagingengine.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Processor/core selection/affinity for large shared memory systems" -->
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
<strong>Subject:</strong> Re: [OMPI users] Processor/core selection/affinity for large shared memory systems<br>
<strong>From:</strong> V. Ram (<em>v_r_959_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-04 16:07:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7397.php">Ralph Castain: "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<li><strong>Previous message:</strong> <a href="7395.php">Ralph Castain: "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<li><strong>Maybe in reply to:</strong> <a href="7394.php">V. Ram: "[OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7397.php">Ralph Castain: "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<li><strong>Reply:</strong> <a href="7397.php">Ralph Castain: "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph H. Castain wrote:
<br>
<p><span class="quotelev1">&gt; I confess to confusion. OpenMPI will by default map your processes in
</span><br>
<span class="quotelev1">&gt; a round-robin fashion based on process slot. If you are in a resource
</span><br>
<span class="quotelev1">&gt; managed environment (e.g., TM or SLURM), then the slots correspond to
</span><br>
<span class="quotelev1">&gt; cores. If you are in an unmanaged environment, then your hostfile
</span><br>
<span class="quotelev1">&gt; needs to specify a single hostname, and the slots=x number should
</span><br>
<span class="quotelev1">&gt; reflect the total number of cores on your machine.
</span><br>
<p><span class="quotelev1">&gt; If you then set mpi_paffinity_alone=1, OMPI will bind each rank to its
</span><br>
<span class="quotelev1">&gt; associated core.
</span><br>
<p><span class="quotelev1">&gt; Is that not what you are trying to do?
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<p>I probably didn't explain myself well.  In this case, the system is not
<br>
running a resource manager like SLURM.  It is running Linux.  If I run
<br>
numactl --hardware, then I get:
<br>
<p>available: 8 nodes (0-7)
<br>
node 0 cpus: 0 1 2 3
<br>
node 1 cpus: 4 5 6 7
<br>
node 3 cpus: 12 13 14 15
<br>
node 4 cpus: 16 17 18 19
<br>
node 5 cpus: 20 21 22 23
<br>
node 6 cpus: 24 25 26 27
<br>
node 7 cpus: 28 29 30 31
<br>
<p>where I've elided the memory-related output as well as the node
<br>
distances.  Just to reiterate, each node here is an AMD processor, part
<br>
of the 8-way system; there is no IP networking going on.
<br>
<p>What I'd like is, if start a job with mpirun -np 16 &lt;executablename&gt;,
<br>
these 16 MPI processes get allocated on continuous &quot;cpus&quot; in numactl
<br>
parlance, e.g. cpus 0-15, or 12-27, etc.
<br>
<p>As it stands, if I check the cpus allocated to the aforementioned -np 16
<br>
job, I see various cores active on multiple sockets, but I don't see
<br>
whole sockets (all 4 cores) active at a time on this job.
<br>
<p>Does this make more sense?
<br>
<pre>
-- 
  V. Ram
  v_r_959_at_[hidden]
-- 
<a href="http://www.fastmail.fm">http://www.fastmail.fm</a> - A no graphics, no pop-ups email service
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7397.php">Ralph Castain: "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<li><strong>Previous message:</strong> <a href="7395.php">Ralph Castain: "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<li><strong>Maybe in reply to:</strong> <a href="7394.php">V. Ram: "[OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7397.php">Ralph Castain: "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<li><strong>Reply:</strong> <a href="7397.php">Ralph Castain: "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
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
