<?
$subject_val = "Re: [OMPI users] Shared Memory - Eager VS Rendezvous";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 08:03:40 2012" -->
<!-- isoreceived="20120523120340" -->
<!-- sent="Wed, 23 May 2012 14:05:28 +0200" -->
<!-- isosent="20120523120528" -->
<!-- name="Simone Pellegrini" -->
<!-- email="spellegrini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared Memory - Eager VS Rendezvous" -->
<!-- id="4FBCD288.2090007_at_dps.uibk.ac.at" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FBBB0E3.30005_at_dps.uibk.ac.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared Memory - Eager VS Rendezvous<br>
<strong>From:</strong> Simone Pellegrini (<em>spellegrini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 08:05:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19336.php">Ralph Castain: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Previous message:</strong> <a href="19334.php">David Singleton: "Re: [OMPI users] MPI_COMPLEX16"</a>
<li><strong>In reply to:</strong> <a href="19329.php">Simone Pellegrini: "[OMPI users] Shared Memory - Eager VS Rendezvous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19338.php">Jeff Squyres: "Re: [OMPI users] Shared Memory - Eager VS Rendezvous"</a>
<li><strong>Reply:</strong> <a href="19338.php">Jeff Squyres: "Re: [OMPI users] Shared Memory - Eager VS Rendezvous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I found the answer to my question on Jeff Squyres  blog:
<br>
<a href="http://blogs.cisco.com/performance/shared-memory-as-an-mpi-transport-part-2/">http://blogs.cisco.com/performance/shared-memory-as-an-mpi-transport-part-2/</a>
<br>
<p>However now I have a new question, how do I know if my machine uses the 
<br>
copyin/copyout mechanism or the direct mapping?
<br>
<p>Assuming that I am running on OpenMPI 1.5.x installed on top of a linux 
<br>
Kernel 2.6.32?
<br>
<p>cheers, Simone
<br>
<p>On 05/22/2012 05:29 PM, Simone Pellegrini wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; I would like to have a confirmation on the assumptions I have on how 
</span><br>
<span class="quotelev1">&gt; OpenMPI implements the rendezvous protocol for shared memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If process A sends a message to process B and the eager protocol is 
</span><br>
<span class="quotelev1">&gt; used then I assume that the message is written into a shared memory 
</span><br>
<span class="quotelev1">&gt; area and picked up by the receiver when the receive operation is posted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When the rendezvous is utilized however the message still need to end 
</span><br>
<span class="quotelev1">&gt; up in the shared memory area somehow. I don't think any RDMA-like 
</span><br>
<span class="quotelev1">&gt; transfer exists for shared memory communications. Therefore you need 
</span><br>
<span class="quotelev1">&gt; to buffer this message somehow, however I assume that you don't buffer 
</span><br>
<span class="quotelev1">&gt; the whole thing but use some type of pipelined protocol so that you 
</span><br>
<span class="quotelev1">&gt; reduce the size of the buffer you need to keep in the shared memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it completely wrong? It would be nice if someone could point me 
</span><br>
<span class="quotelev1">&gt; somewhere I can find more details about this. In the OpenMPI tuning 
</span><br>
<span class="quotelev1">&gt; page there are several details regarding the protocol utilized for IB 
</span><br>
<span class="quotelev1">&gt; but very little for SM.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks in advance,
</span><br>
<span class="quotelev1">&gt; Simone P.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19335/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19336.php">Ralph Castain: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Previous message:</strong> <a href="19334.php">David Singleton: "Re: [OMPI users] MPI_COMPLEX16"</a>
<li><strong>In reply to:</strong> <a href="19329.php">Simone Pellegrini: "[OMPI users] Shared Memory - Eager VS Rendezvous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19338.php">Jeff Squyres: "Re: [OMPI users] Shared Memory - Eager VS Rendezvous"</a>
<li><strong>Reply:</strong> <a href="19338.php">Jeff Squyres: "Re: [OMPI users] Shared Memory - Eager VS Rendezvous"</a>
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
