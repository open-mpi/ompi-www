<?
$subject_val = "[OMPI users] Question about checkpoint tools on OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  6 09:09:07 2015" -->
<!-- isoreceived="20151006130907" -->
<!-- sent="Tue, 6 Oct 2015 15:09:03 +0200" -->
<!-- isosent="20151006130903" -->
<!-- name="Edson Tavares de Camargo" -->
<!-- email="etcamargo10_at_[hidden]" -->
<!-- subject="[OMPI users] Question about checkpoint tools on OpenMPI" -->
<!-- id="CAM29HPVd=hp+NKSGaoxCZDE6kirKqkgqHVkGhOF1eHqf5t4SBA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Question about checkpoint tools on OpenMPI<br>
<strong>From:</strong> Edson Tavares de Camargo (<em>etcamargo10_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-06 09:09:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27817.php">marcin.krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Previous message:</strong> <a href="27815.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Everyone!
<br>
<p>I would like to understand how the checkpoint tools work on OpenMPI, like
<br>
BLCR and DMTCP. I would be glad if you could me answer the following
<br>
questions:
<br>
<p>1) BLCR and DMTCP take checkpoints on the parallel processes. The
<br>
checkpoints are taken on a coordinated way? I mean, there is a
<br>
synchronization among the processes in order to reach a consistent global
<br>
state?
<br>
<p>2) If there is a coordinated checkpoint, is the OpenMPI responsible to do
<br>
that?
<br>
<p>3) There is a way to tell to OpenMPI just to take uncoordinated
<br>
checkpoints, not in a coordinated way?
<br>
<p>4) Where can I find a documentation about how to configure these tools on
<br>
OpenMPI.
<br>
<p>Thank you very much!
<br>
<p>Edson
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27816/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27817.php">marcin.krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Previous message:</strong> <a href="27815.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
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
