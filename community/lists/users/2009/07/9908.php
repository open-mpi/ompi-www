<?
$subject_val = "[OMPI users] How to improve non-blocking point-to-point communication scaling";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 10 15:34:19 2009" -->
<!-- isoreceived="20090710193419" -->
<!-- sent="Fri, 10 Jul 2009 15:34:09 -0400" -->
<!-- isosent="20090710193409" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="[OMPI users] How to improve non-blocking point-to-point communication scaling" -->
<!-- id="4A5797B1.2070706_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] How to improve non-blocking point-to-point communication scaling<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-10 15:34:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9909.php">Yin Feng: "Re: [OMPI users] Problems in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9907.php">Jalel Chergui (LIMSI-CNRS) &lt;Jalel.Chergui_at_[hidden]: "[OMPI users] MPI_Intercomm_create: peer_leader process"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI experts
<br>
<p>We are seeing bad scaling of a certain code that uses OpenMPI
<br>
non-blocking point-to-point routines,
<br>
and would love to hear any suggestions on how to improve the situation.
<br>
<p>Details:
<br>
<p>We have a small 24-node cluster (Monk) with Infiniband, dual AMD Opteron 
<br>
quad-core processors, and we are using OpenMPI 1.3.2.
<br>
<p>One of the codes we run here is the MITgcm.
<br>
The code is written in Fortran 77,
<br>
uses a standard domain decomposition technique, and (Open)MPI.
<br>
<p>Some of the heavy lifting is done by a routine that solves the so-called
<br>
barotropic pressure equation (an elliptic PDE) using a conjugate
<br>
gradient technique, which typically takes 300 iterations at each
<br>
time step.
<br>
<p>The pressure solver conjugate gradient routine uses
<br>
MPI point-to-point non-blocking communication
<br>
to exchange arrays across the subdomain boundaries.
<br>
There are calls to MPI_ISend, MPI_Recv, and MPI_Waitall only.
<br>
(There are a few MPI_Barrier also, but they seem to be inactive,
<br>
knocked out by suitable preprocessor directives.)
<br>
<p>Problem:
<br>
<p>One user noted that when he increases the number of processors,
<br>
the pressure solver takes a progressively larger share of the total
<br>
walltime, and this percentage is much larger than on other (public) 
<br>
clusters.
<br>
<p>Here is a typical result on our cluster (Monk):
<br>
<p>Nodes --- Cores --- percent time taken by pressure solver
<br>
--1---------8---------5%  (Note: IB not used, single node run)
<br>
--2---------16--------14%
<br>
--4---------32--------45%
<br>
--12--------96--------80%
<br>
(Note: fast increase of pressure solver %time with # cores used)
<br>
<p>However, according to the same user, when he runs the same code in the
<br>
TACC Ranger and Lonestar clusters,
<br>
the percent runtime taken by the pressure solver
<br>
is a significantly smaller fraction of the total runtime, even when
<br>
the number of cores used is large.
<br>
<p>Here are his results at TACC:
<br>
<p>On LoneStar (dual Xeon dual core, Infiniband (?), MVAPICH2 (?) )
<br>
Nodes --- Cores --- percent time taken by pressure solver
<br>
--16-------64----------22%
<br>
<p>On Ranger (dual Opteron quad core, Infiniband, MVAPICH2)
<br>
Nodes --- Cores --- percent time taken by pressure solver
<br>
--8--------64----------19%
<br>
--24------192----------35%
<br>
<p>(Note: much smaller % than on our machine for the same number of cores.)
<br>
<p>I wonder if there is any parameter that I can tweak in OpenMPI which
<br>
may reduce the percent time taken by the pressure solver.
<br>
<p>Any suggestions are appreciated.
<br>
<p>Many thanks,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9909.php">Yin Feng: "Re: [OMPI users] Problems in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9907.php">Jalel Chergui (LIMSI-CNRS) &lt;Jalel.Chergui_at_[hidden]: "[OMPI users] MPI_Intercomm_create: peer_leader process"</a>
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
