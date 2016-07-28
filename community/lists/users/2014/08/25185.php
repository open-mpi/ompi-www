<?
$subject_val = "[OMPI users] open shmem optimization";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 29 05:26:54 2014" -->
<!-- isoreceived="20140829092654" -->
<!-- sent="Fri, 29 Aug 2014 13:26:52 +0400" -->
<!-- isosent="20140829092652" -->
<!-- name="Timur Ismagilov" -->
<!-- email="tismagilov_at_[hidden]" -->
<!-- subject="[OMPI users] open shmem optimization" -->
<!-- id="1409304412.961347414_at_f351.i.mail.ru" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] open shmem optimization<br>
<strong>From:</strong> Timur Ismagilov (<em>tismagilov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-29 05:26:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25186.php">Reuti: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Previous message:</strong> <a href="25184.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25188.php">Shamis, Pavel: "Re: [OMPI users] open shmem optimization"</a>
<li><strong>Reply:</strong> <a href="25188.php">Shamis, Pavel: "Re: [OMPI users] open shmem optimization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
What param can i tune to increase perfomance(scalability) for my app (all to all pattern with message size = constant/nnodes)?
<br>
I can read&#194;&#160; this faq &#194;&#160;for&#194;&#160;mpi, but is it correct for shmem?
<br>
I have 2 programm doing the same thing(with same input) each node send messages(message size = constant/nnodes) to random set of nodes (but the same set in prg1 and prg2):
<br>
*  with mpi_isend, mpi_irecv and mpi_waitall
<br>
*  with shmem_put and shmem_barrier_all on 1 2 4 8 16 32 nodes thay have same perfomance(scalabilyty)
<br>
on 64 128 256 nodes shmem programm stop scaling but over 512 nodes shmem programm gets much better perfomance than mpi
<br>
&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;1prg &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; 2prg
<br>
&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;perf unit &#194;&#160; &#194;&#160; perf unit &#194;&#160; &#194;&#160; &#194;&#160;
<br>
1 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; 30 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;30
<br>
2 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; 50 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;53
<br>
4 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; 75 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;85
<br>
8 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; 110 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;130
<br>
16 &#194;&#160; &#194;&#160; &#194;&#160; 180 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;200
<br>
32 &#194;&#160; &#194;&#160; &#194;&#160; 310 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;350
<br>
64 &#194;&#160; &#194;&#160; &#194;&#160; 500 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;400 (strange)
<br>
128 &#194;&#160; &#194;&#160; 830 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;400&#194;&#160;(strange)
<br>
256 &#194;&#160; &#194;&#160; 1350 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; 600&#194;&#160;(strange)
<br>
512 &#194;&#160; &#194;&#160; 1770 &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; 2350 (wow!)
<br>
<p>In scalabel shmem(ompi 1.6.5?) I get the same scalability in this programms.
<br>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25185/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25186.php">Reuti: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Previous message:</strong> <a href="25184.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25188.php">Shamis, Pavel: "Re: [OMPI users] open shmem optimization"</a>
<li><strong>Reply:</strong> <a href="25188.php">Shamis, Pavel: "Re: [OMPI users] open shmem optimization"</a>
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
