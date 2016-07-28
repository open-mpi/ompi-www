<?
$subject_val = "[OMPI users] openmpi 1.4 vs. 1.6 internals";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 16 12:18:25 2013" -->
<!-- isoreceived="20130116171825" -->
<!-- sent="Wed, 16 Jan 2013 12:18:19 -0500" -->
<!-- isosent="20130116171819" -->
<!-- name="Divakar Viswanath" -->
<!-- email="divakar_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi 1.4 vs. 1.6 internals" -->
<!-- id="CAD=SAjqG=wjF=FaicGP2CfLHWA6B2eu5LiQtAUJCsu4OijkFLw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] openmpi 1.4 vs. 1.6 internals<br>
<strong>From:</strong> Divakar Viswanath (<em>divakar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-16 12:18:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21139.php">Karos Lotfifar: "[OMPI users] Problem with mpirun for java codes"</a>
<li><strong>Previous message:</strong> <a href="21137.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libmpi_f90 shared lib version number change in 1.6.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a significant improvement in non-blocking MPI calls (over
<br>
Infiniband) from version 1.4 to version 1.6.
<br>
<p>I am comparing two methods to exchange messages between two nodes. The
<br>
message size varies from 1 MB to 1 GB.
<br>
<p>The first method is sends using MPI_Isend()and receives using MPI_Irecv().
<br>
The same buffers are used repeatedly to exchange messages between two
<br>
nodes. The buffers are allocated using malloc(). In the second method, the
<br>
buffers are allocated using MPI_Alloc_mem() and the send and receive are
<br>
initialized using MPI_Send_init() and MPI_Recv_init(). The sends and recvs
<br>
are posted using MPI_Start.
<br>
<p>In version 1.4, the first method has a peak bidirectional bandwidth of 5.3
<br>
GB/s and the second method has a peak of 6.2 GB/s. In version 1.6, both
<br>
methods have peak bandwidth of 6.2 GB/s. The peak bandwidths are pretty
<br>
close to the number reported by ib_read_bw or ib_write_bw commands for
<br>
Infiniband.
<br>
<p>1. The first question is as follows: why does version 1.6 do nonblocking
<br>
Isend/Irecv better than version 1.4? I would assume that in the second
<br>
method, memory is pinned and registered during MPI_Alloc_mem() and the
<br>
transfers use RDMA direct.
<br>
<p>In the first method, where the buffers are allocated using malloc(), I
<br>
would assume that RDMA pipelining is used. I emphasize that the
<br>
mpi_leave_pinned parameter has its default value of  -1 and is turned off
<br>
in all the runs. I would expect some overhead due to registering and
<br>
unregistering memory during each Isend/Irecv, even though pipelining tries
<br>
&nbsp;to amortize the costs.
<br>
<p>The numbers for version 1.4 are in line with this expectation. However, in
<br>
version 1.6 there seems to be no overhead at all due to
<br>
registering/unregistering memory. What is going on? Do large messages still
<br>
use RDMA pipelining? How has the RDMA pipeline been improved?
<br>
<p>2. To send and receive a large message, openmpi may choose between RDMA
<br>
write and RDMA read. If RDMA pipelining  is used, it seems advantageous to
<br>
use RDMA write because some fragments use send/recv semantics. If the
<br>
memory is registered and the send/recv result in a single RDMA operation,
<br>
there seems nothing to choose between the two. Is that correct? If so, does
<br>
openmpi use RDMA write or RDMA read?
<br>
<p>Thanks!
<br>
<p>Divakar Viswanath
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21138/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21139.php">Karos Lotfifar: "[OMPI users] Problem with mpirun for java codes"</a>
<li><strong>Previous message:</strong> <a href="21137.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libmpi_f90 shared lib version number change in 1.6.3"</a>
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
