<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 21 20:39:30 2006" -->
<!-- isoreceived="20061122013930" -->
<!-- sent="Tue, 21 Nov 2006 19:39:22 -0600" -->
<!-- isosent="20061122013922" -->
<!-- name="Iannetti, Anthony C. \(GRC-RTB0\)" -->
<!-- email="anthony.c.iannetti_at_[hidden]" -->
<!-- subject="[OMPI users] MX performance problem on two processor nodes" -->
<!-- id="B8983A9DF4CA054D8F9FFC97903B449441DD26_at_NDJSEVS13.ndc.nasa.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Iannetti, Anthony C. \(GRC-RTB0\) (<em>anthony.c.iannetti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-21 20:39:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2209.php">Iannetti, Anthony C. \(GRC-RTB0\): "Re: [OMPI users] MX performance problem on two processor nodes"</a>
<li><strong>Previous message:</strong> <a href="2207.php">Tim Prins: "Re: [OMPI users] Build OpenMPI for SHM only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2209.php">Iannetti, Anthony C. \(GRC-RTB0\): "Re: [OMPI users] MX performance problem on two processor nodes"</a>
<li><strong>Maybe reply:</strong> <a href="2209.php">Iannetti, Anthony C. \(GRC-RTB0\): "Re: [OMPI users] MX performance problem on two processor nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI List:
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am running the Myrinet MX btl with OpenMPI on MacOSX 10.4.
<br>
I am running into a problem.  When I run on one processor per node,
<br>
OpenMPI runs just fine.   When I run on two processors per node
<br>
(slots=2), it seems to take forever (something is hanging).
<br>
<p>&nbsp;
<br>
<p>Here is the command:
<br>
<p>mpirun -mca btl mx,self -np 2 pi3f90.x
<br>
<p>&nbsp;
<br>
<p>However, if I give the command:
<br>
<p>mpirun -np 2 pi3f90.x
<br>
<p>&nbsp;
<br>
<p>The process runs normally. But, I do not know if it is using the Myrinet
<br>
network.  Is there a way to diagnose this problem.  mpirun -v and -d do
<br>
not seem to indicate which mca is actually being used.
<br>
<p>&nbsp;
<br>
<p>Thanks,
<br>
<p>Tony
<br>
<p>&nbsp;
<br>
<p>Anthony C. Iannetti, P.E.
<br>
<p>NASA Glenn Research Center
<br>
<p>Propulsion Systems Division, Combustion Branch
<br>
<p>21000 Brookpark Road, MS 5-10
<br>
<p>Cleveland, OH 44135
<br>
<p>phone: (216)433-5586
<br>
<p>email: Anthony.C.Iannetti_at_[hidden]
<br>
<p>&nbsp;
<br>
<p>Please note:  All opinions expressed in this message are my own and NOT
<br>
of NASA.  Only the NASA Administrator can speak on behalf of NASA.
<br>
<p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2208/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2209.php">Iannetti, Anthony C. \(GRC-RTB0\): "Re: [OMPI users] MX performance problem on two processor nodes"</a>
<li><strong>Previous message:</strong> <a href="2207.php">Tim Prins: "Re: [OMPI users] Build OpenMPI for SHM only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2209.php">Iannetti, Anthony C. \(GRC-RTB0\): "Re: [OMPI users] MX performance problem on two processor nodes"</a>
<li><strong>Maybe reply:</strong> <a href="2209.php">Iannetti, Anthony C. \(GRC-RTB0\): "Re: [OMPI users] MX performance problem on two processor nodes"</a>
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
