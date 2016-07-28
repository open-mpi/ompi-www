<?
$subject_val = "Re: [OMPI devel] inquiring about data structure in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  8 00:15:15 2010" -->
<!-- isoreceived="20100408041515" -->
<!-- sent="Wed, 7 Apr 2010 22:15:01 -0600" -->
<!-- isosent="20100408041501" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] inquiring about data structure in openmpi" -->
<!-- id="7AEA1899-DAF6-46F7-9F3F-42E7A2539128_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="852125.18304.qm_at_web15302.mail.cnb.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] inquiring about data structure in openmpi<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-08 00:15:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7714.php">Ralph Castain: "Re: [OMPI devel] inquiring about data structure in openmpi"</a>
<li><strong>Previous message:</strong> <a href="7712.php">luyang dong: "[OMPI devel] inquiring about data structure in openmpi"</a>
<li><strong>In reply to:</strong> <a href="7712.php">luyang dong: "[OMPI devel] inquiring about data structure in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7714.php">Ralph Castain: "Re: [OMPI devel] inquiring about data structure in openmpi"</a>
<li><strong>Reply:</strong> <a href="7714.php">Ralph Castain: "Re: [OMPI devel] inquiring about data structure in openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The local rank of a process is computed by looking at all processes on a node from that job. The lowest MPI rank process on that node from that job is given local-rank=0. All processes on the node are given local-ranks in ascending order according to their MPI rank.
<br>
<p>The node rank is computed the same way, except that we look at all processes on the node, spanning all MPI jobs.
<br>
<p>Consider this example. Suppose we have an MPI application that launches 3 processes on each of two nodes, with ranks assigned on a bynode round-robin basis. Thus, the MPI rank mapping looks like this:
<br>
<p>node0:  rank 0, 2, 4
<br>
node1: rank 1, 3, 5
<br>
<p>The local ranks would look like this:
<br>
<p>Node             MPI Rank               Local Rank
<br>
node0                   0                                 0
<br>
node0                   2                                 1
<br>
node0                   4                                 2
<br>
<p>node1                   1                                 0
<br>
node1                   3                                 1
<br>
node1                   5                                 2
<br>
<p>Since we only have one job, the node rank of each process would be identical to its local rank.  Now suppose that application does a comm_spawn that launches two processes on node0. The local ranks of the new processes would be 0,1 reflecting their relative position within that job. However, their node ranks would be 3,4 because of the processes already on the node.
<br>
<p>We use these values when assigning static ports and processor affinity. Other than that, they have no meaning.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><p>On Apr 7, 2010, at 7:16 PM, luyang dong wrote:
<br>
<p><span class="quotelev1">&gt; dear teachers:
</span><br>
<span class="quotelev1">&gt;          In orte_globals.h, there is a data structure.
</span><br>
<span class="quotelev1">&gt; typedef struct {
</span><br>
<span class="quotelev1">&gt;     /* index to node */
</span><br>
<span class="quotelev1">&gt;     int32_t node;
</span><br>
<span class="quotelev1">&gt;     /* local rank */
</span><br>
<span class="quotelev1">&gt;     orte_local_rank_t local_rank;
</span><br>
<span class="quotelev1">&gt;     /* node rank */
</span><br>
<span class="quotelev1">&gt;     orte_node_rank_t node_rank;
</span><br>
<span class="quotelev1">&gt; } orte_pmap_t;
</span><br>
<span class="quotelev1">&gt; And I do not understand what both local_rank and node_rank exactly mean. Is local_rank similar to the rank of MPI Specification. Can you help me? My motivation is to achieve process migration in openmpi, I urgently want to the procedure of launching process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7713/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7714.php">Ralph Castain: "Re: [OMPI devel] inquiring about data structure in openmpi"</a>
<li><strong>Previous message:</strong> <a href="7712.php">luyang dong: "[OMPI devel] inquiring about data structure in openmpi"</a>
<li><strong>In reply to:</strong> <a href="7712.php">luyang dong: "[OMPI devel] inquiring about data structure in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7714.php">Ralph Castain: "Re: [OMPI devel] inquiring about data structure in openmpi"</a>
<li><strong>Reply:</strong> <a href="7714.php">Ralph Castain: "Re: [OMPI devel] inquiring about data structure in openmpi"</a>
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
