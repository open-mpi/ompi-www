<?
$subject_val = "[OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 27 06:22:27 2014" -->
<!-- isoreceived="20140627102227" -->
<!-- sent="Fri, 27 Jun 2014 12:22:27 +0200" -->
<!-- isosent="20140627102227" -->
<!-- name="Luigi Santangelo" -->
<!-- email="luigi.santangelo_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core" -->
<!-- id="CAFF+N+Y1jDw9mkARGbrmH=GJvRrsO_mosun6AbV3eyxadfF0gA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core<br>
<strong>From:</strong> Luigi Santangelo (<em>luigi.santangelo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-27 06:22:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24713.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<li><strong>Previous message:</strong> <a href="24711.php">Brice Goglin: "Re: [OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24713.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<li><strong>Reply:</strong> <a href="24713.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<li><strong>Reply:</strong> <a href="24714.php">tmishima_at_[hidden]: "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
My system is a 64 core, with Debian 3.2.57 64 bit, GNU gcc 4.7, kernel
<br>
Linux 3.2.0 and OpenMPI 1.8.1.
<br>
I developed an application to matching proteins files using OpenMP+OpenMPI.
<br>
I compiled souce code with -fopenmp flag, I set OMP_NUM_THREADS=4 then I
<br>
ran binary with mpiexec -np 16.
<br>
When the program runs, the top command show me that only 16 core are used.
<br>
If I use the previous of OpenMPI (1.6.5) it works fine. Must I set anything
<br>
in the new version? Where I wrong?
<br>
<p>Thanks in advance
<br>
<p>Luigi
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24712/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24713.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<li><strong>Previous message:</strong> <a href="24711.php">Brice Goglin: "Re: [OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24713.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<li><strong>Reply:</strong> <a href="24713.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
<li><strong>Reply:</strong> <a href="24714.php">tmishima_at_[hidden]: "Re: [OMPI users] OpenMPI 1.8.1 runs more OpenMP Threads on the same core"</a>
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
