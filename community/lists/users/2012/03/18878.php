<?
$subject_val = "[OMPI users] Communication/Computation Overlap with Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 30 05:04:20 2012" -->
<!-- isoreceived="20120330090420" -->
<!-- sent="Fri, 30 Mar 2012 11:04:14 +0200" -->
<!-- isosent="20120330090414" -->
<!-- name="Steffen Christgau" -->
<!-- email="christgau_at_[hidden]" -->
<!-- subject="[OMPI users] Communication/Computation Overlap with Infiniband" -->
<!-- id="4F75770E.4070204_at_cs.uni-potsdam.de" -->
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
<strong>Subject:</strong> [OMPI users] Communication/Computation Overlap with Infiniband<br>
<strong>From:</strong> Steffen Christgau (<em>christgau_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-30 05:04:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18879.php">Ricardo Fonseca: "[OMPI users] Help with multicore AMD machine performance"</a>
<li><strong>Previous message:</strong> <a href="18877.php">Linton, Tom: "Re: [OMPI users] Segmentation fault when checkpointing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody,
<br>
<p>in our group, we are currently working with a 2D CFD application that is
<br>
based on the simple von Neumann neighborhood. The 2D data grid is
<br>
partitioned into horizontal stripes such that each process calculates
<br>
such a stripe. After each iteration, a process exchanges the upper and
<br>
lower boundary with the neighbor processes.
<br>
<p>The application is optimized to calculate the boundary first, exchange
<br>
them with the neighbors and then compute the inner parts of the block.
<br>
We use one-sided communication to transfer the boundary data with. In
<br>
pseudo code:
<br>
<p>for each time step:
<br>
&nbsp;&nbsp;&nbsp;compute boundary
<br>
&nbsp;&nbsp;&nbsp;(A) Use MPI_Win_post, MPI_Win_Start, MPI_Put to transfer/receive
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;boundary to neighbor process
<br>
&nbsp;&nbsp;&nbsp;(B) compute inner parts
<br>
&nbsp;&nbsp;&nbsp;(C) call MPI_Win_Complete and MPI_Win_wait fo finish access/exposure
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;epoch
<br>
<p>We found out that the default way of MPICH2's CH3 channel implementation
<br>
is to enqueue RMA operations until the unlocking synchronization call
<br>
(wait/complete in our case). So theres no opportunity for an overlap of
<br>
communication (A) and (B).
<br>
<p>Now my beginners question is: How can we achieve (if possible) an
<br>
overlap of communication (A) of computation (B) with OpenMPI? Do we need
<br>
to tune any btl or osc parameters of OpenMPI? Or is this overlap
<br>
possible by design/implementation, so we really don't have to care?
<br>
<p>We use OpenMPI 1.4.3, Mellanox MHGH19-XTC ConnectXZ cards and a Mellanox
<br>
MTS3600R-1UNC switch. IPoIB is not activated. The output of &quot;ompi_info
<br>
--param all all&quot; is attached.
<br>
<p>Thanks for replies!
<br>
<p><p>Steffen
<br>
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18878/openmpi_info.tar.gz">openmpi_info.tar.gz</a>
</ul>
<!-- attachment="openmpi_info.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18879.php">Ricardo Fonseca: "[OMPI users] Help with multicore AMD machine performance"</a>
<li><strong>Previous message:</strong> <a href="18877.php">Linton, Tom: "Re: [OMPI users] Segmentation fault when checkpointing"</a>
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
