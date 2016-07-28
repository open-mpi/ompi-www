<?
$subject_val = "[OMPI users] Interaction of MPI_Send and MPI_Barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 17:04:03 2009" -->
<!-- isoreceived="20090723210403" -->
<!-- sent="Thu, 23 Jul 2009 14:02:51 -0700" -->
<!-- isosent="20090723210251" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="[OMPI users] Interaction of MPI_Send and MPI_Barrier" -->
<!-- id="4A68CFFB.7060102_at_bcgsc.ca" -->
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
<strong>Subject:</strong> [OMPI users] Interaction of MPI_Send and MPI_Barrier<br>
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 17:02:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10074.php">Eugene Loh: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>Previous message:</strong> <a href="10072.php">Sims, James S. Dr.: "[OMPI users] Open MPI:Problem with 64-bit openMPI and intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10075.php">Richard Treumann: "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<li><strong>Reply:</strong> <a href="10075.php">Richard Treumann: "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Two processes run the following program:
<br>
<p>request = MPI_Irecv
<br>
MPI_Send (to the other process)
<br>
MPI_Barrier
<br>
flag = MPI_Test(request)
<br>
<p>Without the barrier, there's a race and MPI_Test may or may not return 
<br>
true, indicating whether the message has been received. With the 
<br>
barrier, is it guaranteed that the message will have been received, 
<br>
and MPI_Test will return true?
<br>
<p>Cheers,
<br>
Shaun
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10074.php">Eugene Loh: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>Previous message:</strong> <a href="10072.php">Sims, James S. Dr.: "[OMPI users] Open MPI:Problem with 64-bit openMPI and intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10075.php">Richard Treumann: "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<li><strong>Reply:</strong> <a href="10075.php">Richard Treumann: "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
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
