<?
$subject_val = "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 26 03:04:36 2015" -->
<!-- isoreceived="20151026070436" -->
<!-- sent="Mon, 26 Oct 2015 16:04:27 +0900" -->
<!-- isosent="20151026070427" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration" -->
<!-- id="562DD07B.6060808_at_rist.or.jp" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CADf4hJ+gATZHUNCvKQr3Ds1F6Zywh6ML5XeyesX-v2zm07jcKQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-26 03:04:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18269.php">Howard Pritchard: "[OMPI devel] master build fails"</a>
<li><strong>Previous message:</strong> <a href="18267.php">Federico Reghenzani: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>In reply to:</strong> <a href="18267.php">Federico Reghenzani: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18369.php">Federico Reghenzani: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18369.php">Federico Reghenzani: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Federico,
<br>
<p>that looks good to me.
<br>
the image does not show the channel between orded and its children.
<br>
this is a currently a TCP socket (v1.10) and we are moving to Unix 
<br>
socket (already in master)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 10/26/2015 3:28 PM, Federico Reghenzani wrote:
<br>
<span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt; t&#226;&#128;&#139;&#226;&#128;&#139;hank you again for your great answer. Our idea is to migrate tasks 
</span><br>
<span class="quotelev1">&gt; between nodes, possibly individually, and other tasks still run 
</span><br>
<span class="quotelev1">&gt; (obviously, if they want to communicate with &quot;migrating&quot; node, we 
</span><br>
<span class="quotelev1">&gt; should pause them).
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
<span class="quotelev1">&gt; 2015-10-23 11:45 GMT+02:00 Gilles Gouaillardet 
</span><br>
<span class="quotelev1">&gt; &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gianmario,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Iirc, there is one pipe between orted and each children stderr.
</span><br>
<span class="quotelev1">&gt;     stdout is a pty, and stdin is /dev/null, but it might be a pipe on
</span><br>
<span class="quotelev1">&gt;     task 0
</span><br>
<span class="quotelev1">&gt;     This is the way stdout/stderr from tasks end up being printed by
</span><br>
<span class="quotelev1">&gt;     mpirun : orted does i/o forwarding (aka IOF)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     are you trying to migrate only one task (and other tasks still
</span><br>
<span class="quotelev1">&gt;     run) or are you trying to checkpoint and restart on a different
</span><br>
<span class="quotelev1">&gt;     set of nodes ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Typically, a task uses shared memory for intra node
</span><br>
<span class="quotelev1">&gt;     communications, and infiniband or tcp for inter node communications.
</span><br>
<span class="quotelev1">&gt;     So if you migrate only one task, and i assume you have no virtual
</span><br>
<span class="quotelev1">&gt;     shared memory, then you need to notify its neighbors they have to
</span><br>
<span class="quotelev1">&gt;     switch from shm to ib/tcp.
</span><br>
<span class="quotelev1">&gt;     At first glance, that is much harder than moving orted and its
</span><br>
<span class="quotelev1">&gt;     children :
</span><br>
<span class="quotelev1">&gt;     You would &quot;only&quot; have to re-establish all connections and migrate
</span><br>
<span class="quotelev1">&gt;     the shm.
</span><br>
<span class="quotelev1">&gt;     Also, orted assumes/need its children are running on the same
</span><br>
<span class="quotelev1">&gt;     node, (they use a session dir in /tmp, orted waits SIGCHLD when
</span><br>
<span class="quotelev1">&gt;     its child dies,...) so if you migrate everything, you do not have
</span><br>
<span class="quotelev1">&gt;     to worry about that part.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     You might also want to consider some virtualization :
</span><br>
<span class="quotelev1">&gt;     If a node is running in its own vm, or its own container with a
</span><br>
<span class="quotelev1">&gt;     virtual ip, you could reuse existing infrastructure at least to
</span><br>
<span class="quotelev1">&gt;     migrate orted and its tcp/ip connections
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Federico Reghenzani &lt;federico1.reghenzani_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:federico1.reghenzani_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;     Hi Adrian and Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     first of all thank you for your responses. I'm working with
</span><br>
<span class="quotelev1">&gt;     Gianmario on this ambitious project.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     2015-10-22 13:17 GMT+02:00 Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt;     &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Gianmario,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         there was c/r support in the v1.6 series but it has been removed.
</span><br>
<span class="quotelev1">&gt;         the current trend is to do application level checkpointing
</span><br>
<span class="quotelev1">&gt;         (much more efficient and much smaller checkpoint file size)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         iirc, ompi took care of closing/restoring all communication,
</span><br>
<span class="quotelev1">&gt;         and a third party checkpoint was required to
</span><br>
<span class="quotelev1">&gt;         checkpoint/restart *standalone* processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         generally speaking, mpirun and orted communicate via tcp
</span><br>
<span class="quotelev1">&gt;         orted and MPI (intra node comms) currently use tcp but we are
</span><br>
<span class="quotelev1">&gt;         moving to unix sockets
</span><br>
<span class="quotelev1">&gt;         MPI tasks communicate via btl (infiniband, tcp, shared memory,
</span><br>
<span class="quotelev1">&gt;         ...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     We have also seen that orted opens 2 pipe to each child, is it
</span><br>
<span class="quotelev1">&gt;     correct? Does orted use them to communicate with children?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         imho, moving only one MPI task to an other node is much
</span><br>
<span class="quotelev1">&gt;         harder, not to say impossible, than moving orted and its
</span><br>
<span class="quotelev1">&gt;         children MPI tasks to an other node
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Mmm, I can ask you why? I mean, if we migrate the entire orted we
</span><br>
<span class="quotelev1">&gt;     need to close/reopen /mpirun-orted/ and /task-task/ (btl) sockets,
</span><br>
<span class="quotelev1">&gt;     and if we migrate the single task we need to close/reopen
</span><br>
<span class="quotelev1">&gt;     /orte-task/ and /task-task /sockets. In both cases we have to
</span><br>
<span class="quotelev1">&gt;     broadcast the information of &quot;changing location&quot; of the task or orted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On Thursday, October 22, 2015, Gianmario Pozzi
</span><br>
<span class="quotelev1">&gt;         &lt;pozzigmario_at_[hidden] &lt;mailto:pozzigmario_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Hi everyone!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             My team and I are working on the possibility to checkpoint
</span><br>
<span class="quotelev1">&gt;             a process and restarting it on another node. We are using
</span><br>
<span class="quotelev1">&gt;             CRIU framework for the checkpoint/restart part, but we are
</span><br>
<span class="quotelev1">&gt;             facing some issues related to migration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             First of all: we found out that some attempts to C/R an
</span><br>
<span class="quotelev1">&gt;             OMPI process have been already made in the past. Is
</span><br>
<span class="quotelev1">&gt;             anything related to that still supported/available/working?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Then, we need to know which network communications are
</span><br>
<span class="quotelev1">&gt;             used at any time, in order to &quot;pause&quot; them during
</span><br>
<span class="quotelev1">&gt;             migrations (at least the ones involving the migrating
</span><br>
<span class="quotelev1">&gt;             node). Our code analysis makes us think that:
</span><br>
<span class="quotelev1">&gt;             -OpenMPI runtime (HNP&lt;-&gt;orteds) uses orte/OOB
</span><br>
<span class="quotelev1">&gt;             -Running applications exchange data via ompi/BTL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Is that correct? If not, can someone give us a hint?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Questions on how to update topology info may be yet to come.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Thank you guys!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Gianmario
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         devel mailing list
</span><br>
<span class="quotelev1">&gt;         devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;         Link to this post:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18242.php">http://www.open-mpi.org/community/lists/devel/2015/10/18242.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;     Federico
</span><br>
<span class="quotelev1">&gt;     __
</span><br>
<span class="quotelev1">&gt;     Federico Reghenzani
</span><br>
<span class="quotelev1">&gt;     M.Eng. Student @ Politecnico di Milano
</span><br>
<span class="quotelev1">&gt;     Computer Science and Engineering
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18253.php">http://www.open-mpi.org/community/lists/devel/2015/10/18253.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18267.php">http://www.open-mpi.org/community/lists/devel/2015/10/18267.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18268/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18269.php">Howard Pritchard: "[OMPI devel] master build fails"</a>
<li><strong>Previous message:</strong> <a href="18267.php">Federico Reghenzani: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>In reply to:</strong> <a href="18267.php">Federico Reghenzani: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18369.php">Federico Reghenzani: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18369.php">Federico Reghenzani: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
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
