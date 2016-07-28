<?
$subject_val = "[OMPI users] Ability to overlap communication and computation on Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 17:26:46 2016" -->
<!-- isoreceived="20160708212646" -->
<!-- sent="Fri, 8 Jul 2016 17:26:40 -0400" -->
<!-- isosent="20160708212640" -->
<!-- name="Audet, Martin" -->
<!-- email="Martin.Audet_at_[hidden]" -->
<!-- subject="[OMPI users] Ability to overlap communication and computation on Infiniband" -->
<!-- id="0B97558E6915A6419306E91FD1DACA0E5AFF9AFFA1_at_NRCCENMB1.nrc.ca" -->
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
<strong>Subject:</strong> [OMPI users] Ability to overlap communication and computation on Infiniband<br>
<strong>From:</strong> Audet, Martin (<em>Martin.Audet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-08 17:26:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29627.php">Jeff Hammond: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<li><strong>Previous message:</strong> <a href="29625.php">Gang Chen: "Re: [OMPI users] Can OMPI 1.8.8 or later support LSF 9.1.3 or 10.1?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi OMPI_Users and OMPI_Developers,
<br>
<p>I would like someone to verify if my understanding is correct concerning Open MPI ability to overlap communication and computations on Infiniband when using non-blocking MPI_Isend() and MPI_Irecv() functions (i.e. the computation is done between the non-blocking MPI_Isend() on the sender or MPI_Irecv() on the receiver and the corresponding MPI_Wait()).
<br>
<p>After reading the following FAQ entries:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="https://www.open-mpi.org/faq/?category=openfabrics#large-message-tuning-1.2">https://www.open-mpi.org/faq/?category=openfabrics#large-message-tuning-1.2</a>
<br>
&nbsp;&nbsp;&nbsp;<a href="https://www.open-mpi.org/faq/?category=openfabrics#large-message-tuning-1.3">https://www.open-mpi.org/faq/?category=openfabrics#large-message-tuning-1.3</a>
<br>
<p>and the paper:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="https://www.open-mpi.org/papers/euro-pvmmpi-2006-hpc-protocols/">https://www.open-mpi.org/papers/euro-pvmmpi-2006-hpc-protocols/</a>
<br>
<p>about the algorithm used on OpenFabric to send large messages my understanding is that:
<br>
<p>1-      When the &quot;RDMA Direct&quot; message protocol is used, the communication is done by an RDMA read on the receiver side so if the receiver calls MPI_Irecv() after it received a matching message envelope (tag, communicator) from the sender, then the receiver can start the RDMA read and let the Infiniband HCA operate and return from the MPI_Irecv() to let the receiving process compute. Then the next time the MPI library is called on the receiver side (or maybe in the corresponding MPI_Wait() call), the receiver sends a short ACK message to the sender to tell the sender the that the receive is completed and it is now free to do whatever it wants with the send buffer. When things happens this way (e.g. sender envelope received before MPI_Irecv() is called on the receiver side), it offers a great overlap potential on both receiver and sender side (because for the sender MPI_Isend() only have to send the envelope eagerly and its MPI_Wait() wait for the ACK).
<br>
<p>However when the receiver call MPI_Irecv() before the sender envelope is received, the RDMA read transfer cannot start before the envelope is received and the MPI library realize it can start the RDMA read. If the receiver only realize this in the corresponding MPI_Wait(), there will be no overlap on the receiver side. The overlap potential is still good on the sender side for the same reason as the previous case.
<br>
<p>2-      When the &quot;RDMA Pipeline&quot; protocol is used both sender and receiver side have to actively cooperate to transfer data using multiple Infiniband send/receive and RDMA writes. On the receiver side as the article says: &quot;protocol effectively overlaps the cost of registration/deregistration with RDMA writes&quot;. This allows to overlap communication with registration overhead on the receiver side but not with computations. On the sender side I don't see how overlap with computation could be possible either. In practice when using this protocol is used between a pair of MPI_Isend() and MPI_Irecv() I fear that all the communication will happen when the sender and receiver reach their corresponding MPI_Wait() calls (which means no overlap).
<br>
<p>So if someone could tell me if this is correct or not I would appreciate greatly.
<br>
<p>I guess that the two above protocols correspond to the basic BTL/openib framework/component.
<br>
<p>When a more modern MTL/mxm or PML/yall framework/component is used, I hope things are different and result in more communication/computation overlap potential.
<br>
<p>Thanks in advance,
<br>
<p>Martin Audet
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29626/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29627.php">Jeff Hammond: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<li><strong>Previous message:</strong> <a href="29625.php">Gang Chen: "Re: [OMPI users] Can OMPI 1.8.8 or later support LSF 9.1.3 or 10.1?"</a>
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
