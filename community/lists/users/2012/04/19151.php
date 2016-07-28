<?
$subject_val = "[OMPI users] Multithreading applications with OMPI 1.7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 27 19:20:09 2012" -->
<!-- isoreceived="20120427232009" -->
<!-- sent="Fri, 27 Apr 2012 18:20:02 -0500" -->
<!-- isosent="20120427232002" -->
<!-- name="Jens Glaser" -->
<!-- email="jglaser_at_[hidden]" -->
<!-- subject="[OMPI users] Multithreading applications with OMPI 1.7" -->
<!-- id="B4D9EADD-4FC5-4742-9218-A4F40A391E96_at_umn.edu" -->
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
<strong>Subject:</strong> [OMPI users] Multithreading applications with OMPI 1.7<br>
<strong>From:</strong> Jens Glaser (<em>jglaser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-27 19:20:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19152.php">Ralph Castain: "Re: [OMPI users] Multithreading applications with OMPI 1.7"</a>
<li><strong>Previous message:</strong> <a href="19150.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19152.php">Ralph Castain: "Re: [OMPI users] Multithreading applications with OMPI 1.7"</a>
<li><strong>Reply:</strong> <a href="19152.php">Ralph Castain: "Re: [OMPI users] Multithreading applications with OMPI 1.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>we've tried to use a multithreaded application with a more recent trunk version (March 21) of OpenMPI. We need to use this version because of CUDA RDMA support. OpenMPI was binding all the threads to a single core, which is undesirable.
<br>
In OpenMPI 1.5. there was an option --cpus-per-rank, which should have helped in this case, or --bind-to-none.
<br>
<p>Unfortunately, these options are now gone and I couldn't figure out how to make it work with the newest version.
<br>
<p>Can anyone offer any hints on this?
<br>
<p>Thanks,
<br>
Jens.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19152.php">Ralph Castain: "Re: [OMPI users] Multithreading applications with OMPI 1.7"</a>
<li><strong>Previous message:</strong> <a href="19150.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19152.php">Ralph Castain: "Re: [OMPI users] Multithreading applications with OMPI 1.7"</a>
<li><strong>Reply:</strong> <a href="19152.php">Ralph Castain: "Re: [OMPI users] Multithreading applications with OMPI 1.7"</a>
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
