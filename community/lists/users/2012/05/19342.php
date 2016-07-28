<?
$subject_val = "Re: [OMPI users] Shared Memory - Eager VS Rendezvous";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 10:49:14 2012" -->
<!-- isoreceived="20120523144914" -->
<!-- sent="Wed, 23 May 2012 14:49:08 +0000" -->
<!-- isosent="20120523144908" -->
<!-- name="Gutierrez, Samuel K" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared Memory - Eager VS Rendezvous" -->
<!-- id="5B35790B-E96E-453B-834E-1F3DEA53296B_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A214E818-C79C-4B9C-8494-D3A01CA9B528_at_cisco.com" -->
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
<strong>From:</strong> Gutierrez, Samuel K (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 10:49:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19343.php">Simone Pellegrini: "Re: [OMPI users] Shared Memory - Eager VS Rendezvous"</a>
<li><strong>Previous message:</strong> <a href="19341.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>In reply to:</strong> <a href="19338.php">Jeff Squyres: "Re: [OMPI users] Shared Memory - Eager VS Rendezvous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19343.php">Simone Pellegrini: "Re: [OMPI users] Shared Memory - Eager VS Rendezvous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 23, 2012, at 7:05 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 23, 2012, at 6:05 AM, Simone Pellegrini wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If process A sends a message to process B and the eager protocol is used then I assume that the message is written into a shared memory area and picked up by the receiver when the receive operation is posted. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI has a few different shared memory protocols.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For short messages, they always follow what you mention above: CICO.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For large messages, we either use a pipelined CICO (as you surmised below) or use direct memory mapping if you have the Linux knem kernel module installed.  More below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When the rendezvous is utilized however the message still need to end up in the shared memory area somehow. I don't think any RDMA-like transfer exists for shared memory communications. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to clarify: RDMA = Remote Direct Memory Access, and the &quot;remote&quot; usually refers to a different physical address space (e.g., a different server).  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In Open MPI's case, knem can use a direct memory copy between two processes.
</span><br>
<p>In addition, the vader BTL (XPMEM BTL) also provides similar functionality - provided the XPMEM kernel module and user library are available on the system.
<br>
<p>Based on my limited experience with the two, I've noticed that knem is well-suited for Intel architectures, while XPMEM is best for AMD architectures.
<br>
<p>Samuel K. Gutierrez
<br>
Los Alamos National Laboratory
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Therefore you need to buffer this message somehow, however I       assume that you don't buffer the whole thing but use some type of pipelined protocol so that you reduce the size of the buffer you need to keep in the shared memory. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Correct.  For large messages, when using CICO, we copy the first fragment and the necessary meta data to the shmem block.  When the receiver ACKs the first fragment, we pipeline CICO the rest of the large message through the shmem block.  With the sender and receiver (more or less) simultaneously writing and reading to the circular shmem block, we probably won't fill it up -- meaning that the sender hypothetically won't need to block.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm skipping a bunch of details, but that's the general idea.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it completely wrong? It would be nice if someone could point me somewhere I can find more details about this. In the OpenMPI tuning page there are several details regarding the protocol utilized for IB but very little for SM. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good point.  I'll see if we can get some more info up there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think I found the answer to my question on Jeff Squyres  blog:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://blogs.cisco.com/performance/shared-memory-as-an-mpi-transport-part-2/">http://blogs.cisco.com/performance/shared-memory-as-an-mpi-transport-part-2/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However now I have a new question, how do I know if my machine uses the copyin/copyout mechanism or the direct mapping? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You need the Linux knem module.  See the OMPI README and do a text search for &quot;knem&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19343.php">Simone Pellegrini: "Re: [OMPI users] Shared Memory - Eager VS Rendezvous"</a>
<li><strong>Previous message:</strong> <a href="19341.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>In reply to:</strong> <a href="19338.php">Jeff Squyres: "Re: [OMPI users] Shared Memory - Eager VS Rendezvous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19343.php">Simone Pellegrini: "Re: [OMPI users] Shared Memory - Eager VS Rendezvous"</a>
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
