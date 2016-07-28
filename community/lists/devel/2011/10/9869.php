<?
$subject_val = "[OMPI devel] Process ranks";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 20 11:59:24 2011" -->
<!-- isoreceived="20111020155924" -->
<!-- sent="Thu, 20 Oct 2011 09:59:16 -0600" -->
<!-- isosent="20111020155916" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Process ranks" -->
<!-- id="B37C815F-94D8-4F8E-8428-E3345DA39463_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Process ranks<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-20 11:59:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9870.php">Ralph Castain: "[OMPI devel] Determining locality"</a>
<li><strong>Previous message:</strong> <a href="9868.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since people may not be fully familiar, and because things have evolved, I thought it might help to provide a brief explanation of the ranks we assign to processes in OMPI.
<br>
<p>Each process has four &quot;ranks&quot; assigned to it at launch:
<br>
<p>1. vpid - equivalent to its MPI rank within the job. You can access the vpid with ORTE_PROC_MY_NAME-&gt;vpid.
<br>
<p>2. local_rank - the relative rank of the process, within its own job, on the local node. For example, if there are three processes from this job on the node, then the lowest vpid process would have local_rank=0, the next highest vpid process would have local_rank=1, etc. The local_rank is typically used by the shared memory subsystem to decide which proc will create the backing file.
<br>
<p>Note that processes from dynamically spawned jobs on the node will have overlapping local_ranks. For example, if a process on the above job were to comm_spawn two more procs on the node, the lowest vpid of those would also have local_rank=0 as it is in a different jobid.
<br>
<p>Every process has full knowledge of the local_rank for every other process executing within that mpirun AND for any proc that connected to it via MPI connect/accept or comm_spawn (the info is included in the modex during the connect/accept procedure). You can obtain the local_rank of any process using
<br>
<p>orte_local_rank_t orte_ess.get_local_rank(proc_name)
<br>
<p>This will return ORTE_LOCAL_RANK_INVALID if the info isn't known.
<br>
<p>3. node_rank - the relative rank of the process, spanning all jobs under this mpirun, on the local node. The node_rank is typically used by the OOB to select a static port from the given range, thus ensuring that each proc on the node - regardless of job - takes a unique port. For example, if there are three processes from this job on the node, then the lowest vpid process would have node_rank=0, the next highest vpid process would have node_rank =1, etc. If a process they comm_spawns another process onto the node, it will have node_rank=3 since the computation spans -all- jobs.
<br>
<p>Every process has full knowledge of the node_rank for every other process executing within that mpirun AND for any proc that connected to it via MPI connect/accept or comm_spawn (the info is included in the modex during the connect/accept procedure). You can obtain the node_rank of any process using
<br>
<p>orte_node_rank_t orte_ess.get_node_rank(proc_name)
<br>
<p>This will return ORTE_NODE_RANK_INVALID if the info isn't known.
<br>
<p>4. app_rank - the relative rank of the process within its app_context. This equates to the vpid for a job that contains only one app_context. However, for jobs with multiple app_contexts, this value provides a way of determining a proc's rank solely within its own app_context. Each process only has access to its own app_rank in orte_process_info - it doesn't have any knowledge of the app_rank for other processes.
<br>
<p>HTH
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9870.php">Ralph Castain: "[OMPI devel] Determining locality"</a>
<li><strong>Previous message:</strong> <a href="9868.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
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
