<?
$subject_val = "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 20 06:25:50 2011" -->
<!-- isoreceived="20111020102550" -->
<!-- sent="Thu, 20 Oct 2011 11:25:44 +0100" -->
<!-- isosent="20111020102544" -->
<!-- name="Pedro Gonnet" -->
<!-- email="gonnet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce" -->
<!-- id="1319106344.1674.26.camel_at_laika" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1319103757.1674.22.camel_at_laika" -->
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
<strong>Subject:</strong> Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce<br>
<strong>From:</strong> Pedro Gonnet (<em>gonnet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-20 06:25:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17584.php">Jeff Squyres: "Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs"</a>
<li><strong>Previous message:</strong> <a href="17582.php">Pedro Gonnet: "[OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>In reply to:</strong> <a href="17582.php">Pedro Gonnet: "[OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17592.php">Pedro Gonnet: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Reply:</strong> <a href="17592.php">Pedro Gonnet: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Short update:
<br>
<p>I just installed version 1.4.4 from source (compiled with
<br>
--enable-mpi-threads), and the problem persists.
<br>
<p>I should also point out that if, in thread (ii), I wait for the
<br>
nonblocking communication in thread (i) to finish, nothing bad happens.
<br>
But this makes the nonblocking communication somewhat pointless.
<br>
<p>Cheers,
<br>
Pedro
<br>
<p><p>On Thu, 2011-10-20 at 10:42 +0100, Pedro Gonnet wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am currently working on a multi-threaded hybrid parallel simulation
</span><br>
<span class="quotelev1">&gt; which uses both pthreads and OpenMPI. The simulation uses several
</span><br>
<span class="quotelev1">&gt; pthreads per MPI node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My code uses the nonblocking routines MPI_Isend/MPI_Irecv/MPI_Waitany
</span><br>
<span class="quotelev1">&gt; quite successfully to implement the node-to-node communication. When I
</span><br>
<span class="quotelev1">&gt; try to interleave other computations during this communication, however,
</span><br>
<span class="quotelev1">&gt; bad things happen.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have two MPI nodes with two threads each: one thread (i) doing the
</span><br>
<span class="quotelev1">&gt; nonblocking communication and the other (ii) doing other computations.
</span><br>
<span class="quotelev1">&gt; At some point, the threads (ii) need to exchange data using
</span><br>
<span class="quotelev1">&gt; MPI_Allreduce, which fails if the first thread (i) has not completed all
</span><br>
<span class="quotelev1">&gt; the communication, i.e. if thread (i) is still in MPI_Waitany.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using the in-place MPI_Allreduce, I get a re-run of this bug:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2011/09/17432.php">http://www.open-mpi.org/community/lists/users/2011/09/17432.php</a>. If I
</span><br>
<span class="quotelev1">&gt; don't use in-place, the call to MPI_Waitany (thread ii) on one of the
</span><br>
<span class="quotelev1">&gt; MPI nodes waits forever. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My guess is that when the thread (ii) calls MPI_Allreduce, it gets
</span><br>
<span class="quotelev1">&gt; whatever the other node sent with MPI_Isend to thread (i), drops
</span><br>
<span class="quotelev1">&gt; whatever it should have been getting from the other node's
</span><br>
<span class="quotelev1">&gt; MPI_Allreduce, and the call to MPI_Waitall hangs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this a known issue? Is MPI_Allreduce not designed to work alongside
</span><br>
<span class="quotelev1">&gt; the nonblocking routines? Is there a &quot;safe&quot; variant of MPI_Allreduce I
</span><br>
<span class="quotelev1">&gt; should be using instead?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI version 1.4.3 (version 1.4.3-1ubuntu3 of the package
</span><br>
<span class="quotelev1">&gt; openmpi-bin in Ubuntu). Both MPI nodes are run on the same dual-core
</span><br>
<span class="quotelev1">&gt; computer (Lenovo x201 laptop).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you need more information, please do let me know! I'll also try to
</span><br>
<span class="quotelev1">&gt; cook-up a small program reproducing this problem...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers and kind regards,
</span><br>
<span class="quotelev1">&gt; Pedro
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17584.php">Jeff Squyres: "Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs"</a>
<li><strong>Previous message:</strong> <a href="17582.php">Pedro Gonnet: "[OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>In reply to:</strong> <a href="17582.php">Pedro Gonnet: "[OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17592.php">Pedro Gonnet: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Reply:</strong> <a href="17592.php">Pedro Gonnet: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
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
