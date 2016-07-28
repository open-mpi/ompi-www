<?
$subject_val = "[OMPI devel] Checkpoint/restart + migration";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 06:15:27 2015" -->
<!-- isoreceived="20151022101527" -->
<!-- sent="Thu, 22 Oct 2015 12:15:22 +0200" -->
<!-- isosent="20151022101522" -->
<!-- name="Gianmario Pozzi" -->
<!-- email="pozzigmario_at_[hidden]" -->
<!-- subject="[OMPI devel] Checkpoint/restart + migration" -->
<!-- id="CAP1=D+yObBLd_o=ZfjWKVFf4Z=R-3S0bYM6oR4r+bVBmw6NU8w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Checkpoint/restart + migration<br>
<strong>From:</strong> Gianmario Pozzi (<em>pozzigmario_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-22 06:15:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18241.php">Adrian Reber: "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Previous message:</strong> <a href="18239.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI	(was:	topic	for	agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18241.php">Adrian Reber: "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Reply:</strong> <a href="18241.php">Adrian Reber: "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Reply:</strong> <a href="18242.php">Gilles Gouaillardet: "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone!
<br>
<p>My team and I are working on the possibility to checkpoint a process and
<br>
restarting it on another node. We are using CRIU framework for the
<br>
checkpoint/restart part, but we are facing some issues related to migration.
<br>
<p>First of all: we found out that some attempts to C/R an OMPI process have
<br>
been already made in the past. Is anything related to that still
<br>
supported/available/working?
<br>
<p>Then, we need to know which network communications are used at any time, in
<br>
order to &quot;pause&quot; them during migrations (at least the ones involving the
<br>
migrating node). Our code analysis makes us think that:
<br>
-OpenMPI runtime (HNP&lt;-&gt;orteds) uses orte/OOB
<br>
-Running applications exchange data via ompi/BTL
<br>
<p>Is that correct? If not, can someone give us a hint?
<br>
<p>Questions on how to update topology info may be yet to come.
<br>
<p>Thank you guys!
<br>
<p>Gianmario
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18240/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18241.php">Adrian Reber: "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Previous message:</strong> <a href="18239.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI	(was:	topic	for	agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18241.php">Adrian Reber: "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Reply:</strong> <a href="18241.php">Adrian Reber: "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Reply:</strong> <a href="18242.php">Gilles Gouaillardet: "Re: [OMPI devel] Checkpoint/restart + migration"</a>
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
