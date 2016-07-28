<?
$subject_val = "[OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 20 05:42:46 2011" -->
<!-- isoreceived="20111020094246" -->
<!-- sent="Thu, 20 Oct 2011 10:42:37 +0100" -->
<!-- isosent="20111020094237" -->
<!-- name="Pedro Gonnet" -->
<!-- email="gonnet_at_[hidden]" -->
<!-- subject="[OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce" -->
<!-- id="1319103757.1674.22.camel_at_laika" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce<br>
<strong>From:</strong> Pedro Gonnet (<em>gonnet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-20 05:42:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17583.php">Pedro Gonnet: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Previous message:</strong> <a href="17581.php">Gus Correa: "Re: [OMPI users] Application in a cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17583.php">Pedro Gonnet: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Reply:</strong> <a href="17583.php">Pedro Gonnet: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17762.php">Pedro Gonnet: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I am currently working on a multi-threaded hybrid parallel simulation
<br>
which uses both pthreads and OpenMPI. The simulation uses several
<br>
pthreads per MPI node.
<br>
<p>My code uses the nonblocking routines MPI_Isend/MPI_Irecv/MPI_Waitany
<br>
quite successfully to implement the node-to-node communication. When I
<br>
try to interleave other computations during this communication, however,
<br>
bad things happen.
<br>
<p>I have two MPI nodes with two threads each: one thread (i) doing the
<br>
nonblocking communication and the other (ii) doing other computations.
<br>
At some point, the threads (ii) need to exchange data using
<br>
MPI_Allreduce, which fails if the first thread (i) has not completed all
<br>
the communication, i.e. if thread (i) is still in MPI_Waitany.
<br>
<p>Using the in-place MPI_Allreduce, I get a re-run of this bug:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2011/09/17432.php">http://www.open-mpi.org/community/lists/users/2011/09/17432.php</a>. If I
<br>
don't use in-place, the call to MPI_Waitany (thread ii) on one of the
<br>
MPI nodes waits forever. 
<br>
<p>My guess is that when the thread (ii) calls MPI_Allreduce, it gets
<br>
whatever the other node sent with MPI_Isend to thread (i), drops
<br>
whatever it should have been getting from the other node's
<br>
MPI_Allreduce, and the call to MPI_Waitall hangs.
<br>
<p>Is this a known issue? Is MPI_Allreduce not designed to work alongside
<br>
the nonblocking routines? Is there a &quot;safe&quot; variant of MPI_Allreduce I
<br>
should be using instead?
<br>
<p>I am using OpenMPI version 1.4.3 (version 1.4.3-1ubuntu3 of the package
<br>
openmpi-bin in Ubuntu). Both MPI nodes are run on the same dual-core
<br>
computer (Lenovo x201 laptop).
<br>
<p>If you need more information, please do let me know! I'll also try to
<br>
cook-up a small program reproducing this problem...
<br>
<p>Cheers and kind regards,
<br>
Pedro
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17583.php">Pedro Gonnet: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Previous message:</strong> <a href="17581.php">Gus Correa: "Re: [OMPI users] Application in a cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17583.php">Pedro Gonnet: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Reply:</strong> <a href="17583.php">Pedro Gonnet: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17762.php">Pedro Gonnet: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
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
