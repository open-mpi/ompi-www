<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 14 12:05:58 2006" -->
<!-- isoreceived="20060314170558" -->
<!-- sent="Tue, 14 Mar 2006 11:05:51 -0600" -->
<!-- isosent="20060314170551" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="[OMPI users] comm_join and singleton init" -->
<!-- id="20060314170551.GN27806_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Robert Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-14 12:05:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0853.php">Robert Latham: "[OMPI users] MPI_Comm_connect and singleton init"</a>
<li><strong>Previous message:</strong> <a href="0851.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0854.php">Edgar Gabriel: "Re: [OMPI users] comm_join and singleton init"</a>
<li><strong>Reply:</strong> <a href="0854.php">Edgar Gabriel: "Re: [OMPI users] comm_join and singleton init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I've got a bit of an odd bug here.  I've been playing around with MPI
<br>
process management routines and I notied the following behavior with
<br>
openmpi-1.0.1:
<br>
<p>Two processes (a and b), linked with ompi, but started independently
<br>
(no mpiexec, just started the programs directly).
<br>
<p>- a and b: call MPI_Init
<br>
- a: open a unix network socket on 'fd'
<br>
- b: connect to a's socket
<br>
- a and b: call MPI_Comm_join over 'fd'
<br>
- a and b: call MPI_Intercomm_merge, get intracommunicator.
<br>
<p>These steps all work fine. 
<br>
<p>Now the odd part: a and b call MPI_Comm_rank and MPI_Comm_size over
<br>
the intracommunicator.  Both (correctly) think Comm_size is two, but
<br>
both also think (incorrectly) that they are rank 1.  
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
Argonne National Labs, IL USA                B29D F333 664A 4280 315B
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0853.php">Robert Latham: "[OMPI users] MPI_Comm_connect and singleton init"</a>
<li><strong>Previous message:</strong> <a href="0851.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0854.php">Edgar Gabriel: "Re: [OMPI users] comm_join and singleton init"</a>
<li><strong>Reply:</strong> <a href="0854.php">Edgar Gabriel: "Re: [OMPI users] comm_join and singleton init"</a>
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
