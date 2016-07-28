<?
$subject_val = "[OMPI users] RDMA question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 28 07:23:00 2013" -->
<!-- isoreceived="20131028112300" -->
<!-- sent="Mon, 28 Oct 2013 12:22:57 +0100" -->
<!-- isosent="20131028112257" -->
<!-- name="Luis Kornblueh" -->
<!-- email="luis.kornblueh_at_[hidden]" -->
<!-- subject="[OMPI users] RDMA question" -->
<!-- id="526E4911.1030400_at_mpimet.mpg.de" -->
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
<strong>Subject:</strong> [OMPI users] RDMA question<br>
<strong>From:</strong> Luis Kornblueh (<em>luis.kornblueh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-28 07:22:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22853.php">Luigi  Cavallo: "[OMPI users] MPI SGE and IB don't work together"</a>
<li><strong>Previous message:</strong> <a href="22851.php">Ralph Castain: "Re: [OMPI users] Odd and long error with OpenMPI and OpenFOAM."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22858.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL]  RDMA question"</a>
<li><strong>Reply:</strong> <a href="22858.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL]  RDMA question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>we do have a problem using one-sided mpi communication with OpenMPI.
<br>
The scenario is the following. We do have a computational model using 
<br>
exclusively p2p mpi commuication calls. This runs fine and fast on an
<br>
rather new cluster with FDR IB and Intel SandyBridge XEONS. We have
<br>
around 15 years of experience in parallelization around and get very 
<br>
nice scaling.
<br>
<p>Now we have started building I/O servers which are getting the data from 
<br>
buffers on the compute PEs via one-sided MPI_Get. and write out
<br>
to a parallel filesystem. This should ensure that we can cleanly overlay
<br>
computation and I/O.
<br>
<p>The 'algorithm' does work very nicely with mvapich2. Hardly any 
<br>
influence is seen in the compute PEs communication. The I/O is
<br>
nicely writing out on the described RDMA approach.
<br>
<p>Using this with OpenMPI-1.6.5 with IB leads to strange behaviour:
<br>
The first step in copying the data to buffer and preparing the windows
<br>
are as fast as with mvapich, but the communication of the compute PEs
<br>
start to slow down and it seems subsequently the MPI_Get. The slowing 
<br>
down is growing over the first couple of I/O steps and finally the whole 
<br>
is much slower than the version with I/O via PE 0 at the end.
<br>
<p>My question would be to all openmpi power users and developers, what
<br>
would be required to get this properly running.
<br>
<p>In case it is required to give more information, please come back to me.
<br>
Maybe the explanation what we do is insufficient.
<br>
<p>Best regards,
<br>
Luis
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22853.php">Luigi  Cavallo: "[OMPI users] MPI SGE and IB don't work together"</a>
<li><strong>Previous message:</strong> <a href="22851.php">Ralph Castain: "Re: [OMPI users] Odd and long error with OpenMPI and OpenFOAM."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22858.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL]  RDMA question"</a>
<li><strong>Reply:</strong> <a href="22858.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL]  RDMA question"</a>
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
