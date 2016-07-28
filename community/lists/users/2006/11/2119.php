<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  2 14:43:52 2006" -->
<!-- isoreceived="20061102194352" -->
<!-- sent="Thu, 2 Nov 2006 12:43:49 -0700" -->
<!-- isosent="20061102194349" -->
<!-- name="Brian W Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dma using infiniband protocol" -->
<!-- id="4DF430F5-6F81-4A0C-BA8C-97437F2BEE64_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5b7094580611021122l11aeb4a3i6a9766aefee57adb_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian W Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-02 14:43:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2120.php">Gleb Natapov: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>Previous message:</strong> <a href="2118.php">Brian Budge: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>In reply to:</strong> <a href="2118.php">Brian Budge: "Re: [OMPI users] dma using infiniband protocol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2121.php">Brian Budge: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>Reply:</strong> <a href="2121.php">Brian Budge: "Re: [OMPI users] dma using infiniband protocol"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Locking a page with mlock() is not all that is required for RDMA  
<br>
using InfiniBand (or Myrinet, for that matter).  You have to call  
<br>
that device's registration function first.  In Open MPI, that can be  
<br>
done implicitly with the mpi_leave_pinned option, which will pin  
<br>
memory as needed and then leave it pinned for the life of the  
<br>
buffer.  Or it can be done ahead of time by calling MPI_ALLOC_MEM.
<br>
<p>Because the amount of memory a NIC can have pinned at any time may  
<br>
not directly match the total amount of memory that can be mlock()ed  
<br>
at any given time, it's also not a safe assumption that a buffer  
<br>
allocated with MPI_ALLOC_MEM or used with an RDMA transfer from MPI  
<br>
is going to be mlock()ed as a side effect of NIC registration.  Open  
<br>
MPI internally might unregister that memory with the NIC in order to  
<br>
register a different memory segment for another memory transfer.
<br>
<p>Brian
<br>
<p><p>On Nov 2, 2006, at 12:22 PM, Brian Budge wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the pointer, it was a very interesting read.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  It seems that by default OpenMPI uses the nifty pipelining trick  
</span><br>
<span class="quotelev1">&gt; with pinning pages while transfer is happening.  Also the pinning  
</span><br>
<span class="quotelev1">&gt; can be (somewhat) perminant and the state is cached so that next  
</span><br>
<span class="quotelev1">&gt; usage requires no registration.  I guess it is possible to use pre- 
</span><br>
<span class="quotelev1">&gt; pinned memory, but do I need to do anything special to do so?  I  
</span><br>
<span class="quotelev1">&gt; will already have some buffers pinned to allow DMAs to devices  
</span><br>
<span class="quotelev1">&gt; across PCI-Express, so it makes sense to use one pinned buffer so  
</span><br>
<span class="quotelev1">&gt; that I can avoid memcpys.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there any HOWTO tutorials or anything?  I've searched around,  
</span><br>
<span class="quotelev1">&gt; but it's possible I just used the wrong search terms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;   Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/2/06, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote: This paper  
</span><br>
<span class="quotelev1">&gt; explains it pretty well:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/papers/euro-pvmmpi-2006-hpc-protocols/">http://www.open-mpi.org/papers/euro-pvmmpi-2006-hpc-protocols/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 2, 2006, at 1:37 PM, Brian Budge wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all -
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm wondering how DMA is handled in OpenMPI when using the
</span><br>
<span class="quotelev2">&gt; &gt; infiniband protocol.  In particular, will I get a speed gain if my
</span><br>
<span class="quotelev2">&gt; &gt; read/write buffers are already pinned via mlock?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;   Brian
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="2120.php">Gleb Natapov: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>Previous message:</strong> <a href="2118.php">Brian Budge: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>In reply to:</strong> <a href="2118.php">Brian Budge: "Re: [OMPI users] dma using infiniband protocol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2121.php">Brian Budge: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>Reply:</strong> <a href="2121.php">Brian Budge: "Re: [OMPI users] dma using infiniband protocol"</a>
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
