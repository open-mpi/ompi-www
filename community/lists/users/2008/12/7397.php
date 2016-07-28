<?
$subject_val = "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  4 16:13:23 2008" -->
<!-- isoreceived="20081204211323" -->
<!-- sent="Thu, 4 Dec 2008 14:13:07 -0700" -->
<!-- isosent="20081204211307" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processor/core selection/affinity for large shared memory systems" -->
<!-- id="67CF4912-C704-4660-B689-82C9A9693EB9_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1228424847.23693.1288322547_at_webmail.messagingengine.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-04 16:13:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7398.php">Jeff Squyres: "Re: [OMPI users] Name Mangling"</a>
<li><strong>Previous message:</strong> <a href="7396.php">V. Ram: "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<li><strong>In reply to:</strong> <a href="7396.php">V. Ram: "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7400.php">Terry Frankcombe: "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks - yes, that helps. Can you do add --display-map to you cmd  
<br>
line? That will tell us what mpirun thinks it is doing.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Dec 4, 2008, at 2:07 PM, V. Ram wrote:
<br>
<p><span class="quotelev1">&gt; Ralph H. Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I confess to confusion. OpenMPI will by default map your processes in
</span><br>
<span class="quotelev2">&gt;&gt; a round-robin fashion based on process slot. If you are in a resource
</span><br>
<span class="quotelev2">&gt;&gt; managed environment (e.g., TM or SLURM), then the slots correspond to
</span><br>
<span class="quotelev2">&gt;&gt; cores. If you are in an unmanaged environment, then your hostfile
</span><br>
<span class="quotelev2">&gt;&gt; needs to specify a single hostname, and the slots=x number should
</span><br>
<span class="quotelev2">&gt;&gt; reflect the total number of cores on your machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you then set mpi_paffinity_alone=1, OMPI will bind each rank to  
</span><br>
<span class="quotelev2">&gt;&gt; its
</span><br>
<span class="quotelev2">&gt;&gt; associated core.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is that not what you are trying to do?
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I probably didn't explain myself well.  In this case, the system is  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; running a resource manager like SLURM.  It is running Linux.  If I run
</span><br>
<span class="quotelev1">&gt; numactl --hardware, then I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; available: 8 nodes (0-7)
</span><br>
<span class="quotelev1">&gt; node 0 cpus: 0 1 2 3
</span><br>
<span class="quotelev1">&gt; node 1 cpus: 4 5 6 7
</span><br>
<span class="quotelev1">&gt; node 3 cpus: 12 13 14 15
</span><br>
<span class="quotelev1">&gt; node 4 cpus: 16 17 18 19
</span><br>
<span class="quotelev1">&gt; node 5 cpus: 20 21 22 23
</span><br>
<span class="quotelev1">&gt; node 6 cpus: 24 25 26 27
</span><br>
<span class="quotelev1">&gt; node 7 cpus: 28 29 30 31
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where I've elided the memory-related output as well as the node
</span><br>
<span class="quotelev1">&gt; distances.  Just to reiterate, each node here is an AMD processor,  
</span><br>
<span class="quotelev1">&gt; part
</span><br>
<span class="quotelev1">&gt; of the 8-way system; there is no IP networking going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I'd like is, if start a job with mpirun -np 16 &lt;executablename&gt;,
</span><br>
<span class="quotelev1">&gt; these 16 MPI processes get allocated on continuous &quot;cpus&quot; in numactl
</span><br>
<span class="quotelev1">&gt; parlance, e.g. cpus 0-15, or 12-27, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As it stands, if I check the cpus allocated to the aforementioned - 
</span><br>
<span class="quotelev1">&gt; np 16
</span><br>
<span class="quotelev1">&gt; job, I see various cores active on multiple sockets, but I don't see
</span><br>
<span class="quotelev1">&gt; whole sockets (all 4 cores) active at a time on this job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does this make more sense?
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  V. Ram
</span><br>
<span class="quotelev1">&gt;  v_r_959_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.fastmail.fm">http://www.fastmail.fm</a> - A no graphics, no pop-ups email service
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7398.php">Jeff Squyres: "Re: [OMPI users] Name Mangling"</a>
<li><strong>Previous message:</strong> <a href="7396.php">V. Ram: "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<li><strong>In reply to:</strong> <a href="7396.php">V. Ram: "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7400.php">Terry Frankcombe: "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
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
