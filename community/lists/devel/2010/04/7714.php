<?
$subject_val = "Re: [OMPI devel] inquiring about data structure in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  8 15:46:42 2010" -->
<!-- isoreceived="20100408194642" -->
<!-- sent="Thu, 8 Apr 2010 13:46:29 -0600" -->
<!-- isosent="20100408194629" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] inquiring about data structure in openmpi" -->
<!-- id="9763C5D9-6187-40D6-BE47-116521CF7007_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7AEA1899-DAF6-46F7-9F3F-42E7A2539128_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-04-08 15:46:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7715.php">Nadia Derbey: "[OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>Previous message:</strong> <a href="7713.php">Ralph Castain: "Re: [OMPI devel] inquiring about data structure in openmpi"</a>
<li><strong>In reply to:</strong> <a href="7713.php">Ralph Castain: "Re: [OMPI devel] inquiring about data structure in openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BTW: just to be clear. You don't have to write any code to compute these values, or to reset the job structures prior to restarting a process. This has already been done.
<br>
<p>Recomputing local and node ranks is done in orte/mca/rmaps/base/rmaps_base_support_fns.c in a function called orte_rmaps_base_update_local_ranks.
<br>
<p>Resetting the job and proc structures for restarting a process is done in orte/mca/plm/base/plm_base_rsh_support.c in a function called orte_plm_base_reset_job.
<br>
<p>The restart logic was in the orte/mca/errmgr/orcm module, but I moved that out of the devel trunk recently as we needed to do some orcm-specific things in it. However, I can (and probably should) restore it under a different name if that would help.
<br>
<p>Ralph
<br>
<p><p>On Apr 7, 2010, at 10:15 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; The local rank of a process is computed by looking at all processes on a node from that job. The lowest MPI rank process on that node from that job is given local-rank=0. All processes on the node are given local-ranks in ascending order according to their MPI rank.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The node rank is computed the same way, except that we look at all processes on the node, spanning all MPI jobs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Consider this example. Suppose we have an MPI application that launches 3 processes on each of two nodes, with ranks assigned on a bynode round-robin basis. Thus, the MPI rank mapping looks like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node0:  rank 0, 2, 4
</span><br>
<span class="quotelev1">&gt; node1: rank 1, 3, 5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The local ranks would look like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Node             MPI Rank               Local Rank
</span><br>
<span class="quotelev1">&gt; node0                   0                                 0
</span><br>
<span class="quotelev1">&gt; node0                   2                                 1
</span><br>
<span class="quotelev1">&gt; node0                   4                                 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node1                   1                                 0
</span><br>
<span class="quotelev1">&gt; node1                   3                                 1
</span><br>
<span class="quotelev1">&gt; node1                   5                                 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since we only have one job, the node rank of each process would be identical to its local rank.  Now suppose that application does a comm_spawn that launches two processes on node0. The local ranks of the new processes would be 0,1 reflecting their relative position within that job. However, their node ranks would be 3,4 because of the processes already on the node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We use these values when assigning static ports and processor affinity. Other than that, they have no meaning.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 7, 2010, at 7:16 PM, luyang dong wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; dear teachers:
</span><br>
<span class="quotelev2">&gt;&gt;          In orte_globals.h, there is a data structure.
</span><br>
<span class="quotelev2">&gt;&gt; typedef struct {
</span><br>
<span class="quotelev2">&gt;&gt;     /* index to node */
</span><br>
<span class="quotelev2">&gt;&gt;     int32_t node;
</span><br>
<span class="quotelev2">&gt;&gt;     /* local rank */
</span><br>
<span class="quotelev2">&gt;&gt;     orte_local_rank_t local_rank;
</span><br>
<span class="quotelev2">&gt;&gt;     /* node rank */
</span><br>
<span class="quotelev2">&gt;&gt;     orte_node_rank_t node_rank;
</span><br>
<span class="quotelev2">&gt;&gt; } orte_pmap_t;
</span><br>
<span class="quotelev2">&gt;&gt; And I do not understand what both local_rank and node_rank exactly mean. Is local_rank similar to the rank of MPI Specification. Can you help me? My motivation is to achieve process migration in openmpi, I urgently want to the procedure of launching process.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7714/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7715.php">Nadia Derbey: "[OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>Previous message:</strong> <a href="7713.php">Ralph Castain: "Re: [OMPI devel] inquiring about data structure in openmpi"</a>
<li><strong>In reply to:</strong> <a href="7713.php">Ralph Castain: "Re: [OMPI devel] inquiring about data structure in openmpi"</a>
<!-- nextthread="start" -->
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
