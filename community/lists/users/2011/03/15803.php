<?
$subject_val = "[OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  6 18:12:32 2011" -->
<!-- isoreceived="20110306231232" -->
<!-- sent="Mon, 07 Mar 2011 00:12:27 +0100" -->
<!-- isosent="20110306231227" -->
<!-- name="Dominik Goeddeke" -->
<!-- email="dominik.goeddeke_at_[hidden]" -->
<!-- subject="[OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling" -->
<!-- id="4D7414DB.7080007_at_math.tu-dortmund.de" -->
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
<strong>Subject:</strong> [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling<br>
<strong>From:</strong> Dominik Goeddeke (<em>dominik.goeddeke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-06 18:12:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15804.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="15802.php">Doron Shoham: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15897.php">Jeff Squyres: "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
<li><strong>Reply:</strong> <a href="15897.php">Jeff Squyres: "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The attached example code (stripped down from a bigger app) demonstrates 
<br>
a way to trigger a severe crash in all recent ompi releases but not in a 
<br>
bunch of latest MPICH2 releases. The code is minimalistic and boils down 
<br>
to the call
<br>
<p>MPI_Comm_create(MPI_COMM_WORLD, MPI_GROUP_EMPTY, &amp;dummy_comm);
<br>
<p>which isn't supposed to be illegal. Please refer to the 
<br>
(well-documented) code for details on the high-dimensional cross product 
<br>
I tested (on ubuntu 10.04 LTS), a potential workaround (which isn't 
<br>
supposed to be necessary I think) and an exemplary stack trace.
<br>
<p>Instructions: mpicc test.c -Wall -O0 &amp;&amp; mpirun -np 2 ./a.out
<br>
<p>Thanks!
<br>
<p>dom
<br>
<p><p><p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15803/test.c">test.c</a>
</ul>
<!-- attachment="test.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15804.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="15802.php">Doron Shoham: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15897.php">Jeff Squyres: "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
<li><strong>Reply:</strong> <a href="15897.php">Jeff Squyres: "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
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
