<?
$subject_val = "[OMPI users] MPI_Allgather(): Which algorithm is used?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 22 12:05:10 2009" -->
<!-- isoreceived="20090822160510" -->
<!-- sent="Sun, 23 Aug 2009 01:05:00 +0900" -->
<!-- isosent="20090822160500" -->
<!-- name="Dr. Hans Ekkehard Plesser" -->
<!-- email="hans.ekkehard.plesser_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Allgather(): Which algorithm is used?" -->
<!-- id="4A90172C.7040200_at_umb.no" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Allgather(): Which algorithm is used?<br>
<strong>From:</strong> Dr. Hans Ekkehard Plesser (<em>hans.ekkehard.plesser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-22 12:05:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10458.php">Rainer Keller: "Re: [OMPI users] MPI_Allgather(): Which algorithm is used?"</a>
<li><strong>Previous message:</strong> <a href="10456.php">Shao-Ching Huang: "[OMPI users] MPI_Alltoall problem: error creating qp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10458.php">Rainer Keller: "Re: [OMPI users] MPI_Allgather(): Which algorithm is used?"</a>
<li><strong>Reply:</strong> <a href="10458.php">Rainer Keller: "Re: [OMPI users] MPI_Allgather(): Which algorithm is used?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>OpenMPI 1.3.3 comes with a range of algorithms for MPI_Allgather(), but I have not been able to
<br>
find out how to check which algorithms is actually used.
<br>
<p><span class="quotelev1">&gt;From the following message on the list I got an idea about how to select the algoritm by hand
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2008/10/6847.php">http://www.open-mpi.org/community/lists/users/2008/10/6847.php</a>,
<br>
<p>but I should like to be able to find out at runtime which algorithm Open MPI has chosen.
<br>
<p>BTW, is one algorithm chosen the first time MPI_Allgather() is called, or is a new algorithm
<br>
chosen for every call based on message properties?
<br>
<p>Best regards,
<br>
Hans
<br>
<p><p><pre>
-- 
Dr. Hans Ekkehard Plesser
Associate Professor
Dept. of Mathematical Sciences and Technology
Norwegian University of Life Sciences
Phone +47 6496 5467
Fax   +47 6496 5401
Email hans.ekkehard.plesser_at_[hidden]
Home  <a href="http://arken.umb.no/~plesser">http://arken.umb.no/~plesser</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10458.php">Rainer Keller: "Re: [OMPI users] MPI_Allgather(): Which algorithm is used?"</a>
<li><strong>Previous message:</strong> <a href="10456.php">Shao-Ching Huang: "[OMPI users] MPI_Alltoall problem: error creating qp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10458.php">Rainer Keller: "Re: [OMPI users] MPI_Allgather(): Which algorithm is used?"</a>
<li><strong>Reply:</strong> <a href="10458.php">Rainer Keller: "Re: [OMPI users] MPI_Allgather(): Which algorithm is used?"</a>
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
