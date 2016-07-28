<?
$subject_val = "[OMPI users] Asynchronous behaviour of MPI Collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 06:32:53 2009" -->
<!-- isoreceived="20090123113253" -->
<!-- sent="Fri, 23 Jan 2009 12:32:48 +0100" -->
<!-- isosent="20090123113248" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[OMPI users] Asynchronous behaviour of MPI Collectives" -->
<!-- id="3a37617f0901230332l5ae8020ey50d7a136c8d145bb_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Asynchronous behaviour of MPI Collectives<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 06:32:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7780.php">Jeff Squyres: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<li><strong>Previous message:</strong> <a href="7778.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7782.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Reply:</strong> <a href="7782.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI developers,
<br>
I've noted that OpenMPI has an asynchronous behaviour in the collective calls.
<br>
The processors, doesn't wait that other procs arrives in the call.
<br>
This behaviour sometimes can cause some problems with a lot of
<br>
processors in the jobs.
<br>
<p>Is there an OpenMPI parameter to lock all process in the collective
<br>
call until is finished? Otherwise  i have to insert many MPI_Barrier
<br>
in my code and it is very tedious and strange..
<br>
<p>Thanks in advance.
<br>
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7780.php">Jeff Squyres: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<li><strong>Previous message:</strong> <a href="7778.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7782.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Reply:</strong> <a href="7782.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
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
