<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  2 14:22:26 2006" -->
<!-- isoreceived="20061102192226" -->
<!-- sent="Thu, 2 Nov 2006 11:22:18 -0800" -->
<!-- isosent="20061102192218" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dma using infiniband protocol" -->
<!-- id="5b7094580611021122l11aeb4a3i6a9766aefee57adb_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9E6A11A6-A0B6-44C8-8AD8-78ED914F7DD0_at_cisco.com" -->
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
<strong>Date:</strong> 2006-11-02 14:22:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2119.php">Brian W Barrett: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>Previous message:</strong> <a href="2117.php">Jeff Squyres: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>In reply to:</strong> <a href="2117.php">Jeff Squyres: "Re: [OMPI users] dma using infiniband protocol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2119.php">Brian W Barrett: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>Reply:</strong> <a href="2119.php">Brian W Barrett: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>Reply:</strong> <a href="2125.php">Jeff Squyres: "Re: [OMPI users] dma using infiniband protocol"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the pointer, it was a very interesting read.
<br>
<p>&nbsp;It seems that by default OpenMPI uses the nifty pipelining trick with
<br>
pinning pages while transfer is happening.  Also the pinning can be
<br>
(somewhat) perminant and the state is cached so that next usage requires no
<br>
registration.  I guess it is possible to use pre-pinned memory, but do I
<br>
need to do anything special to do so?  I will already have some buffers
<br>
pinned to allow DMAs to devices across PCI-Express, so it makes sense to use
<br>
one pinned buffer so that I can avoid memcpys.
<br>
<p>Are there any HOWTO tutorials or anything?  I've searched around, but it's
<br>
possible I just used the wrong search terms.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;Brian
<br>
<p><p><p>On 11/2/06, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This paper explains it pretty well:
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2118/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2119.php">Brian W Barrett: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>Previous message:</strong> <a href="2117.php">Jeff Squyres: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>In reply to:</strong> <a href="2117.php">Jeff Squyres: "Re: [OMPI users] dma using infiniband protocol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2119.php">Brian W Barrett: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>Reply:</strong> <a href="2119.php">Brian W Barrett: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>Reply:</strong> <a href="2125.php">Jeff Squyres: "Re: [OMPI users] dma using infiniband protocol"</a>
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
