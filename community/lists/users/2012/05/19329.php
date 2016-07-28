<?
$subject_val = "[OMPI users] Shared Memory - Eager VS Rendezvous";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 22 11:27:51 2012" -->
<!-- isoreceived="20120522152751" -->
<!-- sent="Tue, 22 May 2012 17:29:39 +0200" -->
<!-- isosent="20120522152939" -->
<!-- name="Simone Pellegrini" -->
<!-- email="spellegrini_at_[hidden]" -->
<!-- subject="[OMPI users] Shared Memory - Eager VS Rendezvous" -->
<!-- id="4FBBB0E3.30005_at_dps.uibk.ac.at" -->
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
<strong>Subject:</strong> [OMPI users] Shared Memory - Eager VS Rendezvous<br>
<strong>From:</strong> Simone Pellegrini (<em>spellegrini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-22 11:29:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19330.php">Orion Poplawski: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Previous message:</strong> <a href="19328.php">Thomas Ropars: "[OMPI users] replication in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19335.php">Simone Pellegrini: "Re: [OMPI users] Shared Memory - Eager VS Rendezvous"</a>
<li><strong>Reply:</strong> <a href="19335.php">Simone Pellegrini: "Re: [OMPI users] Shared Memory - Eager VS Rendezvous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
I would like to have a confirmation on the assumptions I have on how 
<br>
OpenMPI implements the rendezvous protocol for shared memory.
<br>
<p>If process A sends a message to process B and the eager protocol is used 
<br>
then I assume that the message is written into a shared memory area and 
<br>
picked up by the receiver when the receive operation is posted.
<br>
<p>When the rendezvous is utilized however the message still need to end up 
<br>
in the shared memory area somehow. I don't think any RDMA-like transfer 
<br>
exists for shared memory communications. Therefore you need to buffer 
<br>
this message somehow, however I assume that you don't buffer the whole 
<br>
thing but use some type of pipelined protocol so that you reduce the 
<br>
size of the buffer you need to keep in the shared memory.
<br>
<p>Is it completely wrong? It would be nice if someone could point me 
<br>
somewhere I can find more details about this. In the OpenMPI tuning page 
<br>
there are several details regarding the protocol utilized for IB but 
<br>
very little for SM.
<br>
<p>thanks in advance,
<br>
Simone P.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19330.php">Orion Poplawski: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Previous message:</strong> <a href="19328.php">Thomas Ropars: "[OMPI users] replication in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19335.php">Simone Pellegrini: "Re: [OMPI users] Shared Memory - Eager VS Rendezvous"</a>
<li><strong>Reply:</strong> <a href="19335.php">Simone Pellegrini: "Re: [OMPI users] Shared Memory - Eager VS Rendezvous"</a>
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
