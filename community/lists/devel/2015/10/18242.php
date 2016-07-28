<?
$subject_val = "Re: [OMPI devel] Checkpoint/restart + migration";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 07:17:56 2015" -->
<!-- isoreceived="20151022111756" -->
<!-- sent="Thu, 22 Oct 2015 20:17:53 +0900" -->
<!-- isosent="20151022111753" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Checkpoint/restart + migration" -->
<!-- id="CAAkFZ5sMZL9DWmSY07dPJ2o0mFb-0yxveEsG2Fe71s8ogL5smw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAP1=D+yObBLd_o=ZfjWKVFf4Z=R-3S0bYM6oR4r+bVBmw6NU8w_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-22 07:17:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18243.php">Ralph Castain: "[OMPI devel] 1.10.1 overnight failures - Fortran"</a>
<li><strong>Previous message:</strong> <a href="18241.php">Adrian Reber: "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>In reply to:</strong> <a href="18240.php">Gianmario Pozzi: "[OMPI devel] Checkpoint/restart + migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18252.php">Federico Reghenzani: "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Reply:</strong> <a href="18252.php">Federico Reghenzani: "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Reply:</strong> <a href="18256.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gianmario,
<br>
<p>there was c/r support in the v1.6 series but it has been removed.
<br>
the current trend is to do application level checkpointing
<br>
(much more efficient and much smaller checkpoint file size)
<br>
<p>iirc, ompi took care of closing/restoring all communication, and a third
<br>
party checkpoint was required to checkpoint/restart *standalone* processes.
<br>
<p>generally speaking, mpirun and orted communicate via tcp
<br>
orted and MPI (intra node comms) currently use tcp but we are moving to
<br>
unix sockets
<br>
MPI tasks communicate via btl (infiniband, tcp, shared memory, ...)
<br>
<p>imho, moving only one MPI task to an other node is much harder, not to say
<br>
impossible, than moving orted and its children MPI tasks to an other node
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, October 22, 2015, Gianmario Pozzi &lt;pozzigmario_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My team and I are working on the possibility to checkpoint a process and
</span><br>
<span class="quotelev1">&gt; restarting it on another node. We are using CRIU framework for the
</span><br>
<span class="quotelev1">&gt; checkpoint/restart part, but we are facing some issues related to migration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First of all: we found out that some attempts to C/R an OMPI process have
</span><br>
<span class="quotelev1">&gt; been already made in the past. Is anything related to that still
</span><br>
<span class="quotelev1">&gt; supported/available/working?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then, we need to know which network communications are used at any time,
</span><br>
<span class="quotelev1">&gt; in order to &quot;pause&quot; them during migrations (at least the ones involving the
</span><br>
<span class="quotelev1">&gt; migrating node). Our code analysis makes us think that:
</span><br>
<span class="quotelev1">&gt; -OpenMPI runtime (HNP&lt;-&gt;orteds) uses orte/OOB
</span><br>
<span class="quotelev1">&gt; -Running applications exchange data via ompi/BTL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that correct? If not, can someone give us a hint?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Questions on how to update topology info may be yet to come.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you guys!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gianmario
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18242/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18243.php">Ralph Castain: "[OMPI devel] 1.10.1 overnight failures - Fortran"</a>
<li><strong>Previous message:</strong> <a href="18241.php">Adrian Reber: "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>In reply to:</strong> <a href="18240.php">Gianmario Pozzi: "[OMPI devel] Checkpoint/restart + migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18252.php">Federico Reghenzani: "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Reply:</strong> <a href="18252.php">Federico Reghenzani: "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Reply:</strong> <a href="18256.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Checkpoint/restart + migration"</a>
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
