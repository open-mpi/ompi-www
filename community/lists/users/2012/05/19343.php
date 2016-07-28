<?
$subject_val = "Re: [OMPI users] Shared Memory - Eager VS Rendezvous";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 11:27:39 2012" -->
<!-- isoreceived="20120523152739" -->
<!-- sent="Wed, 23 May 2012 17:29:27 +0200" -->
<!-- isosent="20120523152927" -->
<!-- name="Simone Pellegrini" -->
<!-- email="spellegrini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared Memory - Eager VS Rendezvous" -->
<!-- id="4FBD0257.50501_at_dps.uibk.ac.at" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Simone Pellegrini (<em>spellegrini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 11:29:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19344.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Previous message:</strong> <a href="19342.php">Gutierrez, Samuel K: "Re: [OMPI users] Shared Memory - Eager VS Rendezvous"</a>
<li><strong>In reply to:</strong> <a href="19338.php">Jeff Squyres: "Re: [OMPI users] Shared Memory - Eager VS Rendezvous"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/23/2012 03:05 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 23, 2012, at 6:05 AM, Simone Pellegrini wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If process A sends a message to process B and the eager protocol is used then I assume that the message is written into a shared memory area and picked up by the receiver when the receive operation is posted.
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
<span class="quotelev1">&gt; Just to clarify: RDMA = Remote Direct Memory Access, and the &quot;remote&quot; usually refers to a different physical address space (e.g., a different server).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In Open MPI's case, knem can use a direct memory copy between two processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Therefore you need to buffer this message somehow, however I       assume that you don't buffer the whole thing but use some type of pipelined protocol so that you reduce the size of the buffer you need to keep in the shared memory.
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
<span class="quotelev1">&gt; You need the Linux knem module.  See the OMPI README and do a text search for &quot;knem&quot;.
</span><br>
<p>Thanks a lot for the clarification.
<br>
however I still have hard time to explain the following phenomena.
<br>
<p>I have a very simple code performing a ping/pong between 2 processes 
<br>
which are allocated on the same computing node. Each process is bound to 
<br>
a different CPU via affinity settings.
<br>
<p>I perform this operation with 3 cache scenarios
<br>
1) Cache is completely invalidate before the send/recv (both at the 
<br>
sender and receiver side)
<br>
2) Cache is preloaded before the send/recv operation and it's in 
<br>
&quot;exclusive&quot; state.
<br>
3) Cache is preloaded before the send/recv operation but this time cache 
<br>
lines are in a &quot;modified&quot; state
<br>
<p>Now scenario 2 has a speedup over scenario 1 as expected. However 
<br>
scenario 3 is much slower then 1. I observed this for both knem and xpmem.
<br>
I assume someone is forcing the modified cache lines to be written into 
<br>
the memory before the copy is performed. Probably because the segment is 
<br>
assigned to a volatile pointer so somehow the stuff in cache has to be 
<br>
written into main memory.
<br>
<p>Instead when the OpenMPI CICO protocol is used 2 and 3 have the exact 
<br>
same speedup over 1. Therefore I assume that in this way no-one forces 
<br>
the write-through of dirty cache lines. I am questioning my self on this 
<br>
issue since yesterday and it's quite difficult to understand without 
<br>
knowing all the internal details.
<br>
<p>Is this an expected behaviour also for you or you find it surprising? :)
<br>
<p>cheers, Simone
<br>
<p><span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19344.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Previous message:</strong> <a href="19342.php">Gutierrez, Samuel K: "Re: [OMPI users] Shared Memory - Eager VS Rendezvous"</a>
<li><strong>In reply to:</strong> <a href="19338.php">Jeff Squyres: "Re: [OMPI users] Shared Memory - Eager VS Rendezvous"</a>
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
