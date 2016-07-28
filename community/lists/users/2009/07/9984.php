<?
$subject_val = "[OMPI users] experiencing hangs with inter-communicator collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 16:32:21 2009" -->
<!-- isoreceived="20090715203221" -->
<!-- sent="Wed, 15 Jul 2009 16:32:17 -0400" -->
<!-- isosent="20090715203217" -->
<!-- name="sreeram potluri" -->
<!-- email="potluri_at_[hidden]" -->
<!-- subject="[OMPI users] experiencing hangs with inter-communicator collectives" -->
<!-- id="23b6b0910907151332x63326b1docad696d24c45e1c4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] experiencing hangs with inter-communicator collectives<br>
<strong>From:</strong> sreeram potluri (<em>potluri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-15 16:32:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9985.php">Jim Kress: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<li><strong>Previous message:</strong> <a href="9983.php">Ralph Castain: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi OpenMPI Team,
<br>
<p>I am trying to run a simple application that does an alltoall over an
<br>
intercommunicator and I experience hangs when I run more than 3 processes
<br>
per node. A similar program that uses intra-communicator completes fine with
<br>
upto 8 processes per node.
<br>
<p>This is the error message I see in case of inter-communicator:
<br>
<p>[node20-oib][[61039,1],2][btl_openib.c:201:adjust_cq] cannot resize
<br>
completion queue, error: 22
<br>
[node20-oib][[61039,1],3][btl_openib.c:201:adjust_cq] cannot resize
<br>
completion queue, error: 22
<br>
[node20-oib][[61039,1],0][btl_openib.c:201:adjust_cq] cannot resize
<br>
completion queue, error: 22
<br>
[node21-oib][[61039,1],7][btl_openib.c:201:adjust_cq] cannot resize
<br>
completion queue, error: 22
<br>
<p>I am using OpenMPI 1.3.3
<br>
<p>This is how I run the applicaiton: ../bin/mpiexec --prefix
<br>
/home/potluri/openmpi-gcc/ --hostfile hostfile2 -np 8 ./alltoall_inter
<br>
<p>The nodes i am using are Intel Clovertowns with 8 cores and they have
<br>
ConnectX cards.
<br>
<p>Any insights into why this could be happening will be very helpful.
<br>
<p>Thanks
<br>
Sreeram Potluri
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9984/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9985.php">Jim Kress: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<li><strong>Previous message:</strong> <a href="9983.php">Ralph Castain: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
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
