<?
$subject_val = "[OMPI users] MPI symbols invoked from PMPI calls?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 05:40:23 2015" -->
<!-- isoreceived="20151106104023" -->
<!-- sent="Fri, 6 Nov 2015 11:40:17 +0100" -->
<!-- isosent="20151106104017" -->
<!-- name="Harald Servat" -->
<!-- email="harald.servat_at_[hidden]" -->
<!-- subject="[OMPI users] MPI symbols invoked from PMPI calls?" -->
<!-- id="563C8391.2090104_at_bsc.es" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI symbols invoked from PMPI calls?<br>
<strong>From:</strong> Harald Servat (<em>harald.servat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-06 05:40:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28011.php">Gilles Gouaillardet: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
<li><strong>Previous message:</strong> <a href="28009.php">Sasso, John (GE Power &amp; Water, Non-GE): "Re: [OMPI users] btl_openib_receive_queues	&amp;	mca-btl-openib-device-params.ini"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28011.php">Gilles Gouaillardet: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
<li><strong>Reply:</strong> <a href="28011.php">Gilles Gouaillardet: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>&nbsp;&nbsp;&nbsp;we develop an instrumentation package based on PMPI and we've 
<br>
observed that PMPI_Ibarrier and PMPI_Ibcast invoke regular MPI_Comm_size 
<br>
and MPI_Comm_rank instead to the PMPI symbols (i.e. PMPI_Comm_size and 
<br>
PMPI_Comm_rank) in OpenMPI 1.10.0.
<br>
<p>&nbsp;&nbsp;&nbsp;I have attached simple example that demonstrates it when using 
<br>
OpenMPI 1.10.0. The example creates a library (libinstrument) that hooks 
<br>
MPI_Comm_size, MPI_Comm_rank and MPI_Ibarrier. Then, there's a single 
<br>
MPI application that executes MPI_Ibarrier and waits for it. The result 
<br>
when combining this binary with the instrumentation library is the 
<br>
following:
<br>
<p># ~/aplic/openmpi/1.10.0/bin/mpirun -np 1 ./main
<br>
entering MPI_Ibarrier
<br>
entering MPI_Comm_rank
<br>
leaving MPI_Comm_rank
<br>
entering MPI_Comm_size
<br>
leaving MPI_Comm_size
<br>
leaving MPI_Ibarrier
<br>
<p>&nbsp;&nbsp;&nbsp;which shows that MPI_Comm_rank and MPI_Comm_size are invoked within 
<br>
MPI_Ibarrier.
<br>
<p>&nbsp;&nbsp;&nbsp;I looked into ompi/mpi/ibarrier.c and 
<br>
./ompi/mpi/c/profile/pibarrier.c but it wasn't evident to me what might 
<br>
be wrong.
<br>
<p>&nbsp;&nbsp;&nbsp;Can anyone check this? And if this could also occur to other MPI3 
<br>
immediate collectives (MPI_Ireduce, MPI_Iallreduce, MPI_Igather, ...).
<br>
<p>Thank you!
<br>
<p><p><p>WARNING / LEGAL TEXT: This message is intended only for the use of the
<br>
individual or entity to which it is addressed and may contain
<br>
information which is privileged, confidential, proprietary, or exempt
<br>
from disclosure under applicable law. If you are not the intended
<br>
recipient or the person responsible for delivering the message to the
<br>
intended recipient, you are strictly prohibited from disclosing,
<br>
distributing, copying, or in any way using this message. If you have
<br>
received this communication in error, please notify the sender and
<br>
destroy and delete any copies you may have received.
<br>
<p><a href="http://www.bsc.es/disclaimer">http://www.bsc.es/disclaimer</a>
<br>

<br><hr>
<ul>
<li>application/x-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28010/mpi-ibarrier.tar">mpi-ibarrier.tar</a>
</ul>
<!-- attachment="mpi-ibarrier.tar" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28011.php">Gilles Gouaillardet: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
<li><strong>Previous message:</strong> <a href="28009.php">Sasso, John (GE Power &amp; Water, Non-GE): "Re: [OMPI users] btl_openib_receive_queues	&amp;	mca-btl-openib-device-params.ini"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28011.php">Gilles Gouaillardet: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
<li><strong>Reply:</strong> <a href="28011.php">Gilles Gouaillardet: "Re: [OMPI users] MPI symbols invoked from PMPI calls?"</a>
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
