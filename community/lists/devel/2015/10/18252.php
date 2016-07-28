<?
$subject_val = "Re: [OMPI devel] Checkpoint/restart + migration";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 23 05:01:43 2015" -->
<!-- isoreceived="20151023090143" -->
<!-- sent="Fri, 23 Oct 2015 11:01:35 +0200" -->
<!-- isosent="20151023090135" -->
<!-- name="Federico Reghenzani" -->
<!-- email="federico1.reghenzani_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Checkpoint/restart + migration" -->
<!-- id="CADf4hJJb07FpHZYZC3wzj9b-03OrMc9nUOkJZPEgPcyig85cJA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5sMZL9DWmSY07dPJ2o0mFb-0yxveEsG2Fe71s8ogL5smw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Checkpoint/restart + migration<br>
<strong>From:</strong> Federico Reghenzani (<em>federico1.reghenzani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-23 05:01:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18253.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Previous message:</strong> <a href="18251.php">George Bosilca: "Re: [OMPI devel] mtt-submit, etc."</a>
<li><strong>In reply to:</strong> <a href="18242.php">Gilles Gouaillardet: "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18256.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Adrian and Gilles,
<br>
<p>first of all thank you for your responses. I'm working with Gianmario on
<br>
this ambitious project.
<br>
<p>2015-10-22 13:17 GMT+02:00 Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Gianmario,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; there was c/r support in the v1.6 series but it has been removed.
</span><br>
<span class="quotelev1">&gt; the current trend is to do application level checkpointing
</span><br>
<span class="quotelev1">&gt; (much more efficient and much smaller checkpoint file size)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; iirc, ompi took care of closing/restoring all communication, and a third
</span><br>
<span class="quotelev1">&gt; party checkpoint was required to checkpoint/restart *standalone* processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; generally speaking, mpirun and orted communicate via tcp
</span><br>
<span class="quotelev1">&gt; orted and MPI (intra node comms) currently use tcp but we are moving to
</span><br>
<span class="quotelev1">&gt; unix sockets
</span><br>
<span class="quotelev1">&gt; MPI tasks communicate via btl (infiniband, tcp, shared memory, ...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
We have also seen that orted opens 2 pipe to each child, is it correct?
<br>
Does orted use them to communicate with children?
<br>
<p><p><p><span class="quotelev1">&gt; imho, moving only one MPI task to an other node is much harder, not to say
</span><br>
<span class="quotelev1">&gt; impossible, than moving orted and its children MPI tasks to an other node
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Mmm, I can ask you why? I mean, if we migrate the entire orted we need to
<br>
close/reopen *mpirun-orted* and *task-task* (btl) sockets, and if we
<br>
migrate the single task we need to close/reopen *orte-task* and
<br>
*task-task *sockets.
<br>
In both cases we have to broadcast the information of &quot;changing location&quot;
<br>
of the task or orted.
<br>
<p><p><p><span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thursday, October 22, 2015, Gianmario Pozzi &lt;pozzigmario_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi everyone!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My team and I are working on the possibility to checkpoint a process and
</span><br>
<span class="quotelev2">&gt;&gt; restarting it on another node. We are using CRIU framework for the
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint/restart part, but we are facing some issues related to migration.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First of all: we found out that some attempts to C/R an OMPI process have
</span><br>
<span class="quotelev2">&gt;&gt; been already made in the past. Is anything related to that still
</span><br>
<span class="quotelev2">&gt;&gt; supported/available/working?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then, we need to know which network communications are used at any time,
</span><br>
<span class="quotelev2">&gt;&gt; in order to &quot;pause&quot; them during migrations (at least the ones involving the
</span><br>
<span class="quotelev2">&gt;&gt; migrating node). Our code analysis makes us think that:
</span><br>
<span class="quotelev2">&gt;&gt; -OpenMPI runtime (HNP&lt;-&gt;orteds) uses orte/OOB
</span><br>
<span class="quotelev2">&gt;&gt; -Running applications exchange data via ompi/BTL
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is that correct? If not, can someone give us a hint?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Questions on how to update topology info may be yet to come.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you guys!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gianmario
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18242.php">http://www.open-mpi.org/community/lists/devel/2015/10/18242.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Cheers,
<br>
Federico
<br>
__
<br>
Federico Reghenzani
<br>
M.Eng. Student @ Politecnico di Milano
<br>
Computer Science and Engineering
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18252/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18253.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Previous message:</strong> <a href="18251.php">George Bosilca: "Re: [OMPI devel] mtt-submit, etc."</a>
<li><strong>In reply to:</strong> <a href="18242.php">Gilles Gouaillardet: "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18256.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Checkpoint/restart + migration"</a>
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
