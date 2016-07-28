<?
$subject_val = "[OMPI users] OpenMPI 1.4 nightly";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 10:28:01 2008" -->
<!-- isoreceived="20080731142801" -->
<!-- sent="Thu, 31 Jul 2008 16:27:56 +0200" -->
<!-- isosent="20080731142756" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.4 nightly" -->
<!-- id="3a37617f0807310727j6b3de745t9d3c80cedda24aa3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.4 nightly<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-31 10:27:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6234.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
<li><strong>Previous message:</strong> <a href="6232.php">David Robson: "[OMPI users] MPI_BCast problem on multiple networks."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6234.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
<li><strong>Reply:</strong> <a href="6234.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI users,
<br>
i have installed OpenMPI 1.4 nigthly over IBM BLADE system with Infiniband.
<br>
I have some problem with MPI applications. A simple MPI Hello world, doesn't
<br>
function. After dispatch, every cpu works over 100% but doing nothing. The
<br>
jobs appears locked.
<br>
<p>I compiled with
<br>
<p>&nbsp;--enable-mpi-threads
<br>
&nbsp;--enable-ft-thread
<br>
&nbsp;--with-ft=cr
<br>
-with-blcr=/prod/tools/blcr/0.7.1/gnu--4.1.2
<br>
<p>(and other, but less important).
<br>
<p>Where is the problem? This version is very instable?
<br>
<pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6233/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6234.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
<li><strong>Previous message:</strong> <a href="6232.php">David Robson: "[OMPI users] MPI_BCast problem on multiple networks."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6234.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
<li><strong>Reply:</strong> <a href="6234.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.4 nightly"</a>
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
