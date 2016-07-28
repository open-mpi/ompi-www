<?
$subject_val = "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 13 11:53:04 2015" -->
<!-- isoreceived="20151113165304" -->
<!-- sent="Fri, 13 Nov 2015 17:52:54 +0100" -->
<!-- isosent="20151113165254" -->
<!-- name="Federico Reghenzani" -->
<!-- email="federico1.reghenzani_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration" -->
<!-- id="CADf4hJKeBhOmN=H8ESU9k21=SQFOzJwwTTPQE-dYxFLRpWt+FQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="562DD07B.6060808_at_rist.or.jp" -->
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
<strong>From:</strong> Federico Reghenzani (<em>federico1.reghenzani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-13 11:52:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18370.php">Howard: "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
<li><strong>Previous message:</strong> <a href="18368.php">Edgar Gabriel: "Re: [OMPI devel] interfaces gone?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18268.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2015-10-26 8:04 GMT+01:00 Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Federico,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that looks good to me.
</span><br>
<span class="quotelev1">&gt; the image does not show the channel between orded and its children.
</span><br>
<span class="quotelev1">&gt; this is a currently a TCP socket (v1.10) and we are moving to Unix socket
</span><br>
<span class="quotelev1">&gt; (already in master)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Which is the framework involved in this communication? I'm not sure what
<br>
this channel is used for.
<br>
<p><p>Cheers,
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/26/2015 3:28 PM, Federico Reghenzani wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt; t&#226;&#128;&#139;&#226;&#128;&#139;hank you again for your great answer. Our idea is to migrate tasks
</span><br>
<span class="quotelev1">&gt; between nodes, possibly individually, and other tasks still run (obviously,
</span><br>
<span class="quotelev1">&gt; if they want to communicate with &quot;migrating&quot; node, we should pause them).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to be sure if we have understood correctly, is the attached image
</span><br>
<span class="quotelev1">&gt; exact?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Federico
</span><br>
<span class="quotelev1">&gt; __
</span><br>
<span class="quotelev1">&gt; Federico Reghenzani
</span><br>
<span class="quotelev1">&gt; M.Eng. Student @ Politecnico di Milano
</span><br>
<span class="quotelev1">&gt; Computer Science and Engineering
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-10-23 11:45 GMT+02:00 Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; &lt;gilles.gouaillardet_at_[hidden]&gt;gilles.gouaillardet_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gianmario,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Iirc, there is one pipe between orted and each children stderr.
</span><br>
<span class="quotelev2">&gt;&gt; stdout is a pty, and stdin is /dev/null, but it might be a pipe on task 0
</span><br>
<span class="quotelev2">&gt;&gt; This is the way stdout/stderr from tasks end up being printed by mpirun :
</span><br>
<span class="quotelev2">&gt;&gt; orted does i/o forwarding (aka IOF)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; are you trying to migrate only one task (and other tasks still run) or
</span><br>
<span class="quotelev2">&gt;&gt; are you trying to checkpoint and restart on a different set of nodes ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Typically, a task uses shared memory for intra node communications, and
</span><br>
<span class="quotelev2">&gt;&gt; infiniband or tcp for inter node communications.
</span><br>
<span class="quotelev2">&gt;&gt; So if you migrate only one task, and i assume you have no virtual shared
</span><br>
<span class="quotelev2">&gt;&gt; memory, then you need to notify its neighbors they have to switch from shm
</span><br>
<span class="quotelev2">&gt;&gt; to ib/tcp.
</span><br>
<span class="quotelev2">&gt;&gt; At first glance, that is much harder than moving orted and its children :
</span><br>
<span class="quotelev2">&gt;&gt; You would &quot;only&quot; have to re-establish all connections and migrate the shm.
</span><br>
<span class="quotelev2">&gt;&gt; Also, orted assumes/need its children are running on the same node, (they
</span><br>
<span class="quotelev2">&gt;&gt; use a session dir in /tmp, orted waits SIGCHLD when its child dies,...) so
</span><br>
<span class="quotelev2">&gt;&gt; if you migrate everything, you do not have to worry about that part.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You might also want to consider some virtualization :
</span><br>
<span class="quotelev2">&gt;&gt; If a node is running in its own vm, or its own container with a virtual
</span><br>
<span class="quotelev2">&gt;&gt; ip, you could reuse existing infrastructure at least to migrate orted and
</span><br>
<span class="quotelev2">&gt;&gt; its tcp/ip connections
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Federico Reghenzani &lt;federico1.reghenzani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Adrian and Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; first of all thank you for your responses. I'm working with Gianmario on
</span><br>
<span class="quotelev2">&gt;&gt; this ambitious project.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2015-10-22 13:17 GMT+02:00 Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;gilles.gouaillardet_at_[hidden]&gt;gilles.gouaillardet_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gianmario,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there was c/r support in the v1.6 series but it has been removed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the current trend is to do application level checkpointing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (much more efficient and much smaller checkpoint file size)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; iirc, ompi took care of closing/restoring all communication, and a third
</span><br>
<span class="quotelev3">&gt;&gt;&gt; party checkpoint was required to checkpoint/restart *standalone* processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; generally speaking, mpirun and orted communicate via tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orted and MPI (intra node comms) currently use tcp but we are moving to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unix sockets
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI tasks communicate via btl (infiniband, tcp, shared memory, ...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have also seen that orted opens 2 pipe to each child, is it correct?
</span><br>
<span class="quotelev2">&gt;&gt; Does orted use them to communicate with children?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; imho, moving only one MPI task to an other node is much harder, not to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; say impossible, than moving orted and its children MPI tasks to an other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mmm, I can ask you why? I mean, if we migrate the entire orted we need to
</span><br>
<span class="quotelev2">&gt;&gt; close/reopen *mpirun-orted* and *task-task* (btl) sockets, and if we
</span><br>
<span class="quotelev2">&gt;&gt; migrate the single task we need to close/reopen *orte-task* and
</span><br>
<span class="quotelev2">&gt;&gt; *task-task *sockets. In both cases we have to broadcast the information
</span><br>
<span class="quotelev2">&gt;&gt; of &quot;changing location&quot; of the task or orted.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thursday, October 22, 2015, Gianmario Pozzi &lt;pozzigmario_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi everyone!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My team and I are working on the possibility to checkpoint a process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and restarting it on another node. We are using CRIU framework for the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; checkpoint/restart part, but we are facing some issues related to migration.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; First of all: we found out that some attempts to C/R an OMPI process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have been already made in the past. Is anything related to that still
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; supported/available/working?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Then, we need to know which network communications are used at any
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; time, in order to &quot;pause&quot; them during migrations (at least the ones
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; involving the migrating node). Our code analysis makes us think that:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -OpenMPI runtime (HNP&lt;-&gt;orteds) uses orte/OOB
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Running applications exchange data via ompi/BTL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is that correct? If not, can someone give us a hint?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Questions on how to update topology info may be yet to come.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you guys!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gianmario
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18242.php">http://www.open-mpi.org/community/lists/devel/2015/10/18242.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Federico
</span><br>
<span class="quotelev2">&gt;&gt; __
</span><br>
<span class="quotelev2">&gt;&gt; Federico Reghenzani
</span><br>
<span class="quotelev2">&gt;&gt; M.Eng. Student @ Politecnico di Milano
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science and Engineering
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18253.php">http://www.open-mpi.org/community/lists/devel/2015/10/18253.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18267.php">http://www.open-mpi.org/community/lists/devel/2015/10/18267.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18268.php">http://www.open-mpi.org/community/lists/devel/2015/10/18268.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18369/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18370.php">Howard: "Re: [OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
<li><strong>Previous message:</strong> <a href="18368.php">Edgar Gabriel: "Re: [OMPI devel] interfaces gone?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18268.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
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
