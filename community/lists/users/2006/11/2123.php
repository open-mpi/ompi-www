<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  2 15:40:07 2006" -->
<!-- isoreceived="20061102204007" -->
<!-- sent="Thu, 2 Nov 2006 22:39:59 +0200" -->
<!-- isosent="20061102203959" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dma using infiniband protocol" -->
<!-- id="20061102203959.GB3825_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5b7094580611021157p1d2ddfc4g17757c4e14b7d616_at_mail.gmail.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-02 15:39:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2124.php">Pierre Valiron: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<li><strong>Previous message:</strong> <a href="2122.php">Michael Kluskens: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<li><strong>In reply to:</strong> <a href="2121.php">Brian Budge: "Re: [OMPI users] dma using infiniband protocol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2125.php">Jeff Squyres: "Re: [OMPI users] dma using infiniband protocol"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Nov 02, 2006 at 11:57:16AM -0800, Brian Budge wrote:
<br>
<span class="quotelev1">&gt; Thanks for the help guys.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my case the memory will be allocated and pinned by my other device
</span><br>
<span class="quotelev1">&gt; driver.  Is it safe to simply use that memory?  My pages won't be unpinned
</span><br>
<span class="quotelev1">&gt; as a result?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
If your driver plays nicely with openib driver everything should be OK.
<br>
If by pinned you mean mlcok() then your are save since openib doesn't
<br>
use mlock().
<br>
<p><span class="quotelev1">&gt; As far as registration, I am sure that OpenMPI will do a better job of that
</span><br>
<span class="quotelev1">&gt; than I could, so I won't even attempt to futz with that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/2/06, Brian W Barrett &lt;bbarrett_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Locking a page with mlock() is not all that is required for RDMA
</span><br>
<span class="quotelev2">&gt; &gt;using InfiniBand (or Myrinet, for that matter).  You have to call
</span><br>
<span class="quotelev2">&gt; &gt;that device's registration function first.  In Open MPI, that can be
</span><br>
<span class="quotelev2">&gt; &gt;done implicitly with the mpi_leave_pinned option, which will pin
</span><br>
<span class="quotelev2">&gt; &gt;memory as needed and then leave it pinned for the life of the
</span><br>
<span class="quotelev2">&gt; &gt;buffer.  Or it can be done ahead of time by calling MPI_ALLOC_MEM.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Because the amount of memory a NIC can have pinned at any time may
</span><br>
<span class="quotelev2">&gt; &gt;not directly match the total amount of memory that can be mlock()ed
</span><br>
<span class="quotelev2">&gt; &gt;at any given time, it's also not a safe assumption that a buffer
</span><br>
<span class="quotelev2">&gt; &gt;allocated with MPI_ALLOC_MEM or used with an RDMA transfer from MPI
</span><br>
<span class="quotelev2">&gt; &gt;is going to be mlock()ed as a side effect of NIC registration.  Open
</span><br>
<span class="quotelev2">&gt; &gt;MPI internally might unregister that memory with the NIC in order to
</span><br>
<span class="quotelev2">&gt; &gt;register a different memory segment for another memory transfer.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Brian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;On Nov 2, 2006, at 12:22 PM, Brian Budge wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks for the pointer, it was a very interesting read.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  It seems that by default OpenMPI uses the nifty pipelining trick
</span><br>
<span class="quotelev3">&gt; &gt;&gt; with pinning pages while transfer is happening.  Also the pinning
</span><br>
<span class="quotelev3">&gt; &gt;&gt; can be (somewhat) perminant and the state is cached so that next
</span><br>
<span class="quotelev3">&gt; &gt;&gt; usage requires no registration.  I guess it is possible to use pre-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; pinned memory, but do I need to do anything special to do so?  I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; will already have some buffers pinned to allow DMAs to devices
</span><br>
<span class="quotelev3">&gt; &gt;&gt; across PCI-Express, so it makes sense to use one pinned buffer so
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that I can avoid memcpys.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Are there any HOWTO tutorials or anything?  I've searched around,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; but it's possible I just used the wrong search terms.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Brian
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 11/2/06, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote: This paper
</span><br>
<span class="quotelev3">&gt; &gt;&gt; explains it pretty well:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      <a href="http://www.open-mpi.org/papers/euro-pvmmpi-2006-hpc-protocols/">http://www.open-mpi.org/papers/euro-pvmmpi-2006-hpc-protocols/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Nov 2, 2006, at 1:37 PM, Brian Budge wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Hi all -
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I'm wondering how DMA is handled in OpenMPI when using the
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; infiniband protocol.  In particular, will I get a speed gain if my
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; read/write buffers are already pinned via mlock?
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;   Brian
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2124.php">Pierre Valiron: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<li><strong>Previous message:</strong> <a href="2122.php">Michael Kluskens: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<li><strong>In reply to:</strong> <a href="2121.php">Brian Budge: "Re: [OMPI users] dma using infiniband protocol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2125.php">Jeff Squyres: "Re: [OMPI users] dma using infiniband protocol"</a>
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
