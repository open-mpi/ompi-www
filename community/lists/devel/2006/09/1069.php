<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 14 02:33:22 2006" -->
<!-- isoreceived="20060914063322" -->
<!-- sent="Thu, 14 Sep 2006 09:33:16 +0300" -->
<!-- isosent="20060914063316" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA" -->
<!-- id="20060914063316.GA9730_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4fb5e0640609130719n60bdd2dbie54eeb949f522745_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-09-14 02:33:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1070.php">Gil Bloch: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA"</a>
<li><strong>Previous message:</strong> <a href="1068.php">Sunil Patil: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA"</a>
<li><strong>In reply to:</strong> <a href="1068.php">Sunil Patil: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1070.php">Gil Bloch: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA"</a>
<li><strong>Reply:</strong> <a href="1070.php">Gil Bloch: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Sep 13, 2006 at 07:50:02PM +0530, Sunil Patil wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is somewhat irrelevant question. It was said that in order delivery is
</span><br>
<span class="quotelev1">&gt; a feature of Mellanox HCA and not part of IB spec. Is this true for UD type
</span><br>
<span class="quotelev1">&gt; QPs also for which IB spec says that &quot;in order delivery&quot; is not guaranteed ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
UD is unreliable datagram, Nothing is guaranteed about it. The Mellanox HCA 
<br>
guarantees inorder delivery of RDMAed data.
<br>
<p><span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Sunil
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 9/13/06, Open MPI &lt;bugs_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;#366: OpenIB on IA64: we should disable small message RDMA
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;-------------------------+--------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;Reporter:  jsquyres      |        Owner:  gleb
</span><br>
<span class="quotelev2">&gt; &gt;   Type:  defect        |       Status:  new
</span><br>
<span class="quotelev2">&gt; &gt;Priority:  major         |    Milestone:  Open MPI 1.1.2
</span><br>
<span class="quotelev2">&gt; &gt;Version:  trunk         |   Resolution:
</span><br>
<span class="quotelev2">&gt; &gt;Keywords:  openib, ia64  |
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;-------------------------+--------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;Comment (by gleb):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Actually in order delivery is a feature of Mellanox HCA and not part of
</span><br>
<span class="quotelev2">&gt; &gt;the IB/iWarp spec.[[BR]]
</span><br>
<span class="quotelev2">&gt; &gt;See [<a href="http://openib.org/pipermail/openib-general/2006-August/025305.html">http://openib.org/pipermail/openib-general/2006-August/025305.html</a>]
</span><br>
<span class="quotelev2">&gt; &gt;for discussion about this. So use_eager_rdma flag is a good candidate to
</span><br>
<span class="quotelev2">&gt; &gt;be put in mca-btl-openib-hca-params.ini file.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;--
</span><br>
<span class="quotelev2">&gt; &gt;Ticket URL: &lt;<a href="http://svn.open-mpi.org/trac/ompi/ticket/366">http://svn.open-mpi.org/trac/ompi/ticket/366</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;Open MPI &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;bugs mailing list
</span><br>
<span class="quotelev2">&gt; &gt;bugs_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/bugs">http://www.open-mpi.org/mailman/listinfo.cgi/bugs</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1070.php">Gil Bloch: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA"</a>
<li><strong>Previous message:</strong> <a href="1068.php">Sunil Patil: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA"</a>
<li><strong>In reply to:</strong> <a href="1068.php">Sunil Patil: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1070.php">Gil Bloch: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA"</a>
<li><strong>Reply:</strong> <a href="1070.php">Gil Bloch: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA"</a>
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
