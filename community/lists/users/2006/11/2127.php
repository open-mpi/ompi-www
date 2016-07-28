<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  2 22:31:03 2006" -->
<!-- isoreceived="20061103033103" -->
<!-- sent="Thu, 2 Nov 2006 19:30:59 -0800" -->
<!-- isosent="20061103033059" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dma using infiniband protocol" -->
<!-- id="5b7094580611021930lf065499u5311509f048d1355_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D695BFEA-2C44-4C38-856A-41C4735544E2_at_cisco.com" -->
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
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-02 22:30:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2128.php">Tony Ladd: "[OMPI users] OMPI collectives"</a>
<li><strong>Previous message:</strong> <a href="2126.php">Jeff Squyres: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<li><strong>In reply to:</strong> <a href="2125.php">Jeff Squyres: "Re: [OMPI users] dma using infiniband protocol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2131.php">Jeff Squyres: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>Reply:</strong> <a href="2131.php">Jeff Squyres: "Re: [OMPI users] dma using infiniband protocol"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ha, yeah, I should have been more clear there.  I'm simply writing an MPI
<br>
application.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;Brian
<br>
<p>On 11/2/06, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It depends on what you're trying to do.  Are you writing new
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
<span class="quotelev2">&gt; &gt; On 11/2/06, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote: This paper
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2127/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2128.php">Tony Ladd: "[OMPI users] OMPI collectives"</a>
<li><strong>Previous message:</strong> <a href="2126.php">Jeff Squyres: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<li><strong>In reply to:</strong> <a href="2125.php">Jeff Squyres: "Re: [OMPI users] dma using infiniband protocol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2131.php">Jeff Squyres: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>Reply:</strong> <a href="2131.php">Jeff Squyres: "Re: [OMPI users] dma using infiniband protocol"</a>
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
