<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 31 16:58:02 2007" -->
<!-- isoreceived="20070831205802" -->
<!-- sent="Fri, 31 Aug 2007 16:57:57 -0400" -->
<!-- isosent="20070831205757" -->
<!-- name="Mauricio Vacas" -->
<!-- email="madcow53_at_[hidden]" -->
<!-- subject="[OMPI users] MPI Migration" -->
<!-- id="1188593877.11021.7.camel_at_vacas-desktop" -->
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
<strong>From:</strong> Mauricio Vacas (<em>madcow53_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-31 16:57:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3970.php">Bernd Schubert: "Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
<li><strong>Previous message:</strong> <a href="3968.php">Marco Sbrighi: "[OMPI users] Bug in MPI_Reduce/MPI_Comm_split?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>I am doing research on the different migration mechanisms available for
<br>
MPI processes. I had a couple of questions I was hoping you guys you
<br>
clarify for me concerning this:
<br>
<p>1. Are there other approaches to MPI migration that do not involve
<br>
checkpoint/restart mechanisms (e.g. LAM/MPI with BLCR, MPICH-V with BLCR
<br>
and Condor)?
<br>
2. MPI-2 allows for dynamic process spawning, is it possible to spawn an
<br>
MPI process on a different node and transfer the process state to the
<br>
newly created process as long as you keep account of the new location
<br>
for the other MPI processes?
<br>
3. MOSIX and Charm++ perform process migration with MPI processes, are
<br>
there any problems associated with using these systems for MPI process
<br>
migration?
<br>
<p>Thanks!
<br>
Mauricio
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3970.php">Bernd Schubert: "Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
<li><strong>Previous message:</strong> <a href="3968.php">Marco Sbrighi: "[OMPI users] Bug in MPI_Reduce/MPI_Comm_split?"</a>
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
