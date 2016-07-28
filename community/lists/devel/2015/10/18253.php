<?
$subject_val = "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 23 05:46:05 2015" -->
<!-- isoreceived="20151023094605" -->
<!-- sent="Fri, 23 Oct 2015 18:45:27 +0900" -->
<!-- isosent="20151023094527" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration" -->
<!-- id="051j0pa5q1xtjrb6sf9kgqf3.1445593108858_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] OMPI devel] Checkpoint/restart + migration" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-23 05:45:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18254.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] mtt-submit, etc."</a>
<li><strong>Previous message:</strong> <a href="18252.php">Federico Reghenzani: "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18258.php">George Bosilca: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Reply:</strong> <a href="18258.php">George Bosilca: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Reply:</strong> <a href="18267.php">Federico Reghenzani: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gianmario,
<br>
<p>Iirc, there is one pipe between orted and each children stderr.
<br>
stdout is a pty, and stdin is /dev/null, but it might be a pipe on task 0
<br>
This is the way stdout/stderr from tasks end up being printed by mpirun : orted does i/o forwarding (aka IOF)
<br>
<p>are you trying to migrate only one task (and other tasks still run) or are you trying to checkpoint and restart on a different set of nodes ?
<br>
<p>Typically, a task uses shared memory for intra node communications, and infiniband or tcp for inter node communications.
<br>
So if you migrate only one task, and i assume you have no virtual shared memory, then you need to notify its neighbors they have to switch from shm to ib/tcp.
<br>
At first glance, that is much harder than moving orted and its children :
<br>
You would &quot;only&quot; have to re-establish all connections and migrate the shm.
<br>
Also, orted assumes/need its children are running on the same node, (they use a session dir in /tmp, orted waits SIGCHLD when its child dies,...) so if you migrate everything, you do not have to worry about that part.
<br>
<p>You might also want to consider some virtualization :
<br>
If a node is running in its own vm, or its own container with a virtual ip, you could reuse existing infrastructure at least to migrate orted and its tcp/ip connections
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>Federico Reghenzani &lt;federico1.reghenzani_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Hi Adrian and Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;first of all thank you for your responses. I'm working with Gianmario on this ambitious project.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2015-10-22 13:17 GMT+02:00 Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gianmario,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;there was c/r support in the v1.6 series but it has been removed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;the current trend is to do application level checkpointing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(much more efficient and much smaller checkpoint file size)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;iirc, ompi took care of closing/restoring all communication, and a third party checkpoint was required to checkpoint/restart *standalone* processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;generally speaking, mpirun and orted communicate via tcp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;orted and MPI (intra node comms) currently use tcp but we are moving to unix sockets
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;MPI tasks communicate via btl (infiniband, tcp, shared memory, ...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We have also seen that orted opens 2 pipe to each child, is it correct? Does orted use them to communicate with children? &#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;imho, moving only one MPI task to an other node is much harder, not to say impossible, than moving orted and its children MPI tasks to an other node
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Mmm, I can ask you why? I mean, if we migrate the entire orted we need to close/reopen&#194;&#160;mpirun-orted&#194;&#160;and&#194;&#160;task-task&#194;&#160;(btl) sockets, and if we migrate the single task&#194;&#160;we need to close/reopen&#194;&#160;orte-task&#194;&#160;and&#194;&#160;task-task&#194;&#160;sockets. In both cases we have to broadcast the information of &quot;changing location&quot; of the task or orted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Thursday, October 22, 2015, Gianmario Pozzi &lt;pozzigmario_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi everyone!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;My team and I are working on the possibility to checkpoint a process and restarting it on another node. We are using CRIU framework for the checkpoint/restart part, but we are facing some issues related to migration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;First of all: we found out that some attempts to C/R an OMPI process have been already made in the past. Is anything related to that still supported/available/working?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Then, we need to know which network communications are used at any time, in order to &quot;pause&quot; them during migrations (at least the ones involving the migrating node). Our code analysis makes us think that:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-OpenMPI runtime (HNP&lt;-&gt;orteds) uses orte/OOB
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-Running applications exchange data via ompi/BTL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Is that correct? If not, can someone give us a hint?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Questions on how to update topology info may be yet to come.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thank you guys!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gianmario
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18242.php">http://www.open-mpi.org/community/lists/devel/2015/10/18242.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cheers,
</span><br>
<span class="quotelev1">&gt;Federico
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;__
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Federico Reghenzani
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;M.Eng. Student @ Politecnico di Milano
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Computer Science and Engineering
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18253/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18254.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] mtt-submit, etc."</a>
<li><strong>Previous message:</strong> <a href="18252.php">Federico Reghenzani: "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18258.php">George Bosilca: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Reply:</strong> <a href="18258.php">George Bosilca: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Reply:</strong> <a href="18267.php">Federico Reghenzani: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
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
