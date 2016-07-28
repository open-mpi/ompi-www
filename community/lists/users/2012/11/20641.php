<?
$subject_val = "[OMPI users] gathering problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 12:27:31 2012" -->
<!-- isoreceived="20121105172731" -->
<!-- sent="Mon, 5 Nov 2012 17:27:05 +0000" -->
<!-- isosent="20121105172705" -->
<!-- name="Hodge, Gary C" -->
<!-- email="gary.c.hodge_at_[hidden]" -->
<!-- subject="[OMPI users] gathering problem" -->
<!-- id="3258BBCAE92D924BB7419ABF3554AC0412FBBC_at_HVXDSP24.us.lmco.com" -->
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
<strong>Subject:</strong> [OMPI users] gathering problem<br>
<strong>From:</strong> Hodge, Gary C (<em>gary.c.hodge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-05 12:27:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20642.php">Orion Poplawski: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released"</a>
<li><strong>Previous message:</strong> <a href="20640.php">Matthias Jurenz: "Re: [OMPI users] OpenMPI 1.7rc5 fails to build with CUDA support when CUDA is in a non-standard location"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20688.php">Hodge, Gary C: "Re: [OMPI users] gathering problem"</a>
<li><strong>Maybe reply:</strong> <a href="20688.php">Hodge, Gary C: "Re: [OMPI users] gathering problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I continue to have a problem where 2 processes are sending to the same process and one of the sending processes hangs for 150 to 550 ms in the call to MPI_Send.
<br>
<p>Each process runs on a different node and the receiving process has posted an MPI_Irecv 17 ms before the hanging send.
<br>
The posted receives are for 172K buffers and the sending processes are sending 81K size messages.
<br>
I have set mpi_leave_pinned to 1 and have increased the btl_openib_receive_queues to ...:S,65536,512,256,64
<br>
<p>How do I trace the various phases of message passing to diagnose where the send is hanging up?
<br>
<p><p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20641/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20641/ompi-output.tar.bz2">ompi-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20642.php">Orion Poplawski: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released"</a>
<li><strong>Previous message:</strong> <a href="20640.php">Matthias Jurenz: "Re: [OMPI users] OpenMPI 1.7rc5 fails to build with CUDA support when CUDA is in a non-standard location"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20688.php">Hodge, Gary C: "Re: [OMPI users] gathering problem"</a>
<li><strong>Maybe reply:</strong> <a href="20688.php">Hodge, Gary C: "Re: [OMPI users] gathering problem"</a>
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
