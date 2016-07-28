<?
$subject_val = "[OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 10 16:23:07 2015" -->
<!-- isoreceived="20150410202307" -->
<!-- sent="Fri, 10 Apr 2015 15:22:26 -0500" -->
<!-- isosent="20150410202226" -->
<!-- name="namu patel" -->
<!-- email="namu.patel7_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%" -->
<!-- id="CACV7Auw3XE86wjJkXAySPNr1erXH034dqgARV9t9yrcyTPn0eQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%<br>
<strong>From:</strong> namu patel (<em>namu.patel7_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-10 16:22:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26672.php">namu patel: "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<li><strong>Previous message:</strong> <a href="26670.php">Andy Riebs: "[OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26672.php">namu patel: "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<li><strong>Reply:</strong> <a href="26672.php">namu patel: "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<li><strong>Reply:</strong> <a href="26673.php">Damien: "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All,
<br>
<p>I am using OpenMPI 1.8.4 on my workstation with 2 CPUs, each with 12
<br>
processors (6 with hyper-threading). When I run simulations using mpiexec,
<br>
I'm noticing a strange performance issue. If I run two simulations, each
<br>
with 6 processors, then everything is fine and 12 processors are under 100%
<br>
load. When I start a 3rd simulation with 6 processors, I notice throttling
<br>
in all 3 simulations and only 12 processors are at 100%, the rest are below
<br>
10%. My guess is that somehow the processes from the 3rd simulations are
<br>
doubling onto the already busy processors. How can I be certain that this
<br>
is the case?
<br>
<p>Thanks,
<br>
namu
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26671/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26672.php">namu patel: "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<li><strong>Previous message:</strong> <a href="26670.php">Andy Riebs: "[OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26672.php">namu patel: "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<li><strong>Reply:</strong> <a href="26672.php">namu patel: "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<li><strong>Reply:</strong> <a href="26673.php">Damien: "Re: [OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
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
