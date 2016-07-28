<?
$subject_val = "[OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 22:54:04 2014" -->
<!-- isoreceived="20140507025404" -->
<!-- sent="Tue, 6 May 2014 19:53:17 -0700" -->
<!-- isosent="20140507025317" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested" -->
<!-- id="496E45F7-E123-4044-9D02-F82065639BA3_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-06 22:53:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14691.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14689.php">George Bosilca: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14691.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14691.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have been seeing a lot of problems with the Slurm PMI-2 support (not in OMPI - it's the code in Slurm that is having problems). At this time, I'm unaware of any advantage in using PMI-2 over PMI-1 in Slurm - the scaling is equally poor, and PMI-2 does not supports any additional functionality.
<br>
<p>I know that Cray PMI-2 has a definite advantage, so I'm proposing that we turn PMI-2 &quot;off&quot; when under Slurm unless the user specifically requests we use it.
<br>
<p>Any opinions?
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14691.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14689.php">George Bosilca: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14691.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14691.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
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
