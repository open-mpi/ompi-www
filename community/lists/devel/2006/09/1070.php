<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 14 10:38:16 2006" -->
<!-- isoreceived="20060914143816" -->
<!-- sent="Thu, 14 Sep 2006 17:37:01 +0300" -->
<!-- isosent="20060914143701" -->
<!-- name="Gil Bloch" -->
<!-- email="gil_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA" -->
<!-- id="4509690D.2070006_at_mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20060914063316.GA9730_at_minantech.com" -->
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
<strong>From:</strong> Gil Bloch (<em>gil_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-14 10:37:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1071.php">Brian Barrett: "Re: [OMPI devel] portability problem in ompi_info"</a>
<li><strong>Previous message:</strong> <a href="1069.php">Gleb Natapov: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA"</a>
<li><strong>In reply to:</strong> <a href="1069.php">Gleb Natapov: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; On Wed, Sep 13, 2006 at 07:50:02PM +0530, Sunil Patil wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is somewhat irrelevant question. It was said that in order delivery is
</span><br>
<span class="quotelev2">&gt;&gt; a feature of Mellanox HCA and not part of IB spec. Is this true for UD type
</span><br>
<span class="quotelev2">&gt;&gt; QPs also for which IB spec says that &quot;in order delivery&quot; is not guaranteed ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; UD is unreliable datagram, Nothing is guaranteed about it. The Mellanox HCA 
</span><br>
<span class="quotelev1">&gt; guarantees inorder delivery of RDMAed data.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>InfniBand specification guarantees no placement ordering, but delivery 
<br>
ordering (messages are delivered in the order sent) for reliable 
<br>
transport. For un-reliable, since some packets could be lost in the 
<br>
fabric, those packet will not be delivered, thus no ordering guaranteed.
<br>
Mellanox HCAs guarantee in-order placement between packets in reliable 
<br>
transports, as well as in-packet data placement (last byte of the packet 
<br>
payload will be written last to the memory).
<br>
For un-reliable transport, the ordering between packets can not be 
<br>
guaranteed (again, since some packets could be lost in the fabric) but 
<br>
the in-packet placement ordering is guaranteed.
<br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; Sunil
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 9/13/06, Open MPI &lt;bugs_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #366: OpenIB on IA64: we should disable small message RDMA
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------+--------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reporter:  jsquyres      |        Owner:  gleb
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Type:  defect        |       Status:  new
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Priority:  major         |    Milestone:  Open MPI 1.1.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Version:  trunk         |   Resolution:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Keywords:  openib, ia64  |
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------+--------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Comment (by gleb):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Actually in order delivery is a feature of Mellanox HCA and not part of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the IB/iWarp spec.[[BR]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See [<a href="http://openib.org/pipermail/openib-general/2006-August/025305.html">http://openib.org/pipermail/openib-general/2006-August/025305.html</a>]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for discussion about this. So use_eager_rdma flag is a good candidate to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be put in mca-btl-openib-hca-params.ini file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ticket URL: &lt;<a href="http://svn.open-mpi.org/trac/ompi/ticket/366">http://svn.open-mpi.org/trac/ompi/ticket/366</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bugs mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bugs_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/bugs">http://www.open-mpi.org/mailman/listinfo.cgi/bugs</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1071.php">Brian Barrett: "Re: [OMPI devel] portability problem in ompi_info"</a>
<li><strong>Previous message:</strong> <a href="1069.php">Gleb Natapov: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA"</a>
<li><strong>In reply to:</strong> <a href="1069.php">Gleb Natapov: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA"</a>
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
