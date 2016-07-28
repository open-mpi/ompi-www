<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov  3 07:50:06 2006" -->
<!-- isoreceived="20061103125006" -->
<!-- sent="Fri, 3 Nov 2006 07:49:49 -0500" -->
<!-- isosent="20061103124949" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dma using infiniband protocol" -->
<!-- id="3A8FF073-852B-4B6F-8BD8-63169DBF31AB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5b7094580611021930lf065499u5311509f048d1355_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-03 07:49:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2132.php">Durga Choudhury: "Re: [OMPI users] openmpi problem"</a>
<li><strong>Previous message:</strong> <a href="2130.php">Jeff Squyres: "Re: [OMPI users] openmpi problem"</a>
<li><strong>In reply to:</strong> <a href="2127.php">Brian Budge: "Re: [OMPI users] dma using infiniband protocol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2120.php">Gleb Natapov: "Re: [OMPI users] dma using infiniband protocol"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You shouldn't have to do anything special; just write normal MPI  
<br>
programs.  There are a variety of MPI tutorials available on the web;  
<br>
a particularly good one is available here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://webct.ncsa.uiuc.edu:8900/public/MPI/">http://webct.ncsa.uiuc.edu:8900/public/MPI/</a>
<br>
<p>I think someone mentioned that you can use MPI_ALLOC_MEM to get pre- 
<br>
registered memory (also as pointed out on this thread, &quot;registered&quot;  
<br>
is typically more than just &quot;pinning&quot; -- it frequently also means  
<br>
notifying the NIC of the pinned memory).  You can also experiment  
<br>
with using the MCA parameter mpi_leave_pinned (e.g., set it to 1) if  
<br>
you are unable to use MPI_ALLOC_MEM to get pre-registered memory in  
<br>
conjunction with your DMA-able PCIx devices.
<br>
<p><p><p>On Nov 2, 2006, at 10:30 PM, Brian Budge wrote:
<br>
<p><span class="quotelev1">&gt; Ha, yeah, I should have been more clear there.  I'm simply writing  
</span><br>
<span class="quotelev1">&gt; an MPI application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;   Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/2/06, Jeff Squyres &lt; jsquyres_at_[hidden]&gt; wrote:It depends on  
</span><br>
<span class="quotelev1">&gt; what you're trying to do.  Are you writing new
</span><br>
<span class="quotelev1">&gt; components internal to Open MPI, or are you just trying to leverage
</span><br>
<span class="quotelev1">&gt; OMPI's PML for some other project?  Or are you writing MPI
</span><br>
<span class="quotelev1">&gt; applications?  Or ...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 2, 2006, at 2:22 PM, Brian Budge wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the pointer, it was a very interesting read.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  It seems that by default OpenMPI uses the nifty pipelining trick
</span><br>
<span class="quotelev2">&gt; &gt; with pinning pages while transfer is happening.  Also the pinning
</span><br>
<span class="quotelev2">&gt; &gt; can be (somewhat) perminant and the state is cached so that next
</span><br>
<span class="quotelev2">&gt; &gt; usage requires no registration.  I guess it is possible to use pre-
</span><br>
<span class="quotelev2">&gt; &gt; pinned memory, but do I need to do anything special to do so?  I
</span><br>
<span class="quotelev2">&gt; &gt; will already have some buffers pinned to allow DMAs to devices
</span><br>
<span class="quotelev2">&gt; &gt; across PCI-Express, so it makes sense to use one pinned buffer so
</span><br>
<span class="quotelev2">&gt; &gt; that I can avoid memcpys.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Are there any HOWTO tutorials or anything?  I've searched around,
</span><br>
<span class="quotelev2">&gt; &gt; but it's possible I just used the wrong search terms.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;   Brian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 11/2/06, Jeff Squyres &lt;jsquyres_at_[hidden] &gt; wrote: This paper
</span><br>
<span class="quotelev2">&gt; &gt; explains it pretty well:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      <a href="http://www.open-mpi.org/papers/euro-pvmmpi-2006-hpc-protocols/">http://www.open-mpi.org/papers/euro-pvmmpi-2006-hpc-protocols/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 2, 2006, at 1:37 PM, Brian Budge wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi all -
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm wondering how DMA is handled in OpenMPI when using the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; infiniband protocol.  In particular, will I get a speed gain if my
</span><br>
<span class="quotelev3">&gt; &gt; &gt; read/write buffers are already pinned via mlock?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Brian
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2132.php">Durga Choudhury: "Re: [OMPI users] openmpi problem"</a>
<li><strong>Previous message:</strong> <a href="2130.php">Jeff Squyres: "Re: [OMPI users] openmpi problem"</a>
<li><strong>In reply to:</strong> <a href="2127.php">Brian Budge: "Re: [OMPI users] dma using infiniband protocol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2120.php">Gleb Natapov: "Re: [OMPI users] dma using infiniband protocol"</a>
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
