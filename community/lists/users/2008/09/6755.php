<?
$subject_val = "[OMPI users] MPI_THREAD_INIT";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 07:01:21 2008" -->
<!-- isoreceived="20080929110121" -->
<!-- sent="Mon, 29 Sep 2008 13:01:17 +0200" -->
<!-- isosent="20080929110117" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_THREAD_INIT" -->
<!-- id="3a37617f0809290401j6d1a155dwc09e190466c0f66b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_THREAD_INIT<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-29 07:01:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6756.php">Gabriele Fatigati: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<li><strong>Previous message:</strong> <a href="6754.php">Ralph Castain: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6756.php">Gabriele Fatigati: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<li><strong>Reply:</strong> <a href="6756.php">Gabriele Fatigati: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPi developers,
<br>
i've noted that OpenMPI 1.25 and 1.2.6 version doesn't supports  thread
<br>
initialization function shows below:
<br>
<p>int MPI_Init_thread(int *argc, char *((*argv)[]), int required, int
<br>
*provided)
<br>
<p>used in hybrid programming MPI+OpenMP.  Returned vales provided is 0, so the
<br>
unique thread level supported is MPI_THREAD_SINGLE.
<br>
<p>Whitch is the newest OpenMPI version that has full support for
<br>
MPI_THREAD_SINGLE,
<br>
MPI_THREAD_FUNNELED, MPI_THREAD_SERIALIZED and MPI_THREAD_MULTIPLE?
<br>
<p>Thanks in advance.
<br>
<p><pre>
-- 
Ing. Gabriele Fatigati
CINECA Systems &amp; Tecnologies Department
Supercomputing  Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6755/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6756.php">Gabriele Fatigati: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<li><strong>Previous message:</strong> <a href="6754.php">Ralph Castain: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6756.php">Gabriele Fatigati: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<li><strong>Reply:</strong> <a href="6756.php">Gabriele Fatigati: "Re: [OMPI users] MPI_THREAD_INIT"</a>
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
