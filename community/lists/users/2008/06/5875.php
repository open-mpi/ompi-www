<?
$subject_val = "[OMPI users] OpenMPI with bounds checking";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 14 07:58:53 2008" -->
<!-- isoreceived="20080614115853" -->
<!-- sent="Sat, 14 Jun 2008 13:58:49 +0200" -->
<!-- isosent="20080614115849" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI with bounds checking" -->
<!-- id="3a37617f0806140458x16457edav8848f32f633d47b3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI with bounds checking<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-14 07:58:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5876.php">Andreas Klöckner: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="5874.php">Mattijs Janssens: "Re: [OMPI users] weird problem with passing data between nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5904.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>Reply:</strong> <a href="5904.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Open MPI developers,
<br>
<p>I compiled OpenMPI 1.2.6 with xgcc, a gcc version with bounds-checking
<br>
support. But i have a problem with a simply MPI application compiled with
<br>
-fbounds-checking flags.
<br>
<p>The job doesn't works and it is locked to MPI_Init(), doing nothing. It is a
<br>
very strange behaviour. I tried to increase various Infiniband timeout, like
<br>
btl_openib_ib_timeout, orte_abort_timeout and btl_openib_ib_min_rnr_timer
<br>
without results.
<br>
<p>Thanks in advance.
<br>
<p><p><p><pre>
-- 
Gabriele Fatigati
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it Tel: +39 051 6171722
g.fatigati_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5875/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5876.php">Andreas Klöckner: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="5874.php">Mattijs Janssens: "Re: [OMPI users] weird problem with passing data between nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5904.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>Reply:</strong> <a href="5904.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with bounds checking"</a>
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
