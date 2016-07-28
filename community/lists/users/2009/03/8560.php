<?
$subject_val = "Re: [OMPI users] Collective operations and synchronization";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 19:37:13 2009" -->
<!-- isoreceived="20090323233713" -->
<!-- sent="Mon, 23 Mar 2009 16:36:41 -0700" -->
<!-- isosent="20090323233641" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Collective operations and synchronization" -->
<!-- id="49C81D09.5090703_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="3484F8E1-96BF-4836-AC2F-F74666A4C051_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Collective operations and synchronization<br>
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 19:36:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8561.php">Jerome BENOIT: "[OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<li><strong>Previous message:</strong> <a href="8559.php">Ralph Castain: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>In reply to:</strong> <a href="8559.php">Ralph Castain: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8563.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Reply:</strong> <a href="8563.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thanks for your response. My problem is removing all leaf nodes from a 
<br>
directed graph, which is distributed among a number of processes. Each 
<br>
process iterates over its portion of the graph, and if a node is a 
<br>
leaf (indegree(n) == 0 || outdegree(n) == 0), it removes the node 
<br>
(which is a local operation) and notifies each of its neighbours 
<br>
(using MPI_Ibsend) to remove any edges incident to the removed node. 
<br>
If that node becomes a leaf, it is also removed and the process 
<br>
cascades. I use the following algorithm to check if this cascade 
<br>
process is complete:
<br>
<p>loop {
<br>
MPI_Ibsend (for every edge of every leaf node)
<br>
MPI_barrier
<br>
MPI_Iprobe/MPI_Recv (until no messages pending)
<br>
MPI_Allreduce (number of nodes removed)
<br>
} until (no nodes removed by any node)
<br>
<p>Previously, I attempted to use a single MPI_Allreduce without the 
<br>
MPI_Barrier:
<br>
<p>loop {
<br>
MPI_Iprobe/MPI_Recv (until no messages pending)
<br>
MPI_Ibsend (for every edge of every leaf node)
<br>
MPI_Allreduce (number of nodes removed)
<br>
} until (no nodes removed by any node)
<br>
<p>This latter algorithm did not complete correctly. Now that I've 
<br>
written out the algorithm in pseudo-code, it looks a little clearer. 
<br>
There must be a race condition between the MPI_Iprobe and MPI_Recv. I 
<br>
wonder if using MPI_Irecv would clear it up.
<br>
<p>Cheers,
<br>
Shaun
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I think perhaps you folks are all caught up a tad too much in the  
</span><br>
<span class="quotelev1">&gt; standard and not reading the intent of someone's question... :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe the original question was concerned with ensuring that all  
</span><br>
<span class="quotelev1">&gt; procs had completed MPI_Allreduce before his algorithm attempted other  
</span><br>
<span class="quotelev1">&gt; operations. As you folks know, procs can leave MPI_Allreduce at  
</span><br>
<span class="quotelev1">&gt; significantly different times. Using an MPI_Barrier after  
</span><br>
<span class="quotelev1">&gt; MPI_Allreduce would accomplish the questioner's objective.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Whether or not the questioner's particular program really -needs- to  
</span><br>
<span class="quotelev1">&gt; do that is another matter - one I personally wouldn't attempt to  
</span><br>
<span class="quotelev1">&gt; answer without knowing a lot more about what that next step after  
</span><br>
<span class="quotelev1">&gt; MPI_Allreduce does.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8561.php">Jerome BENOIT: "[OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<li><strong>Previous message:</strong> <a href="8559.php">Ralph Castain: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>In reply to:</strong> <a href="8559.php">Ralph Castain: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8563.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Reply:</strong> <a href="8563.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
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
