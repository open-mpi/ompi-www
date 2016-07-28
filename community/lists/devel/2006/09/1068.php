<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 13 10:20:06 2006" -->
<!-- isoreceived="20060913142006" -->
<!-- sent="Wed, 13 Sep 2006 19:50:02 +0530" -->
<!-- isosent="20060913142002" -->
<!-- name="Sunil Patil" -->
<!-- email="sunillp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA" -->
<!-- id="4fb5e0640609130719n60bdd2dbie54eeb949f522745_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="060.8628def321871641d93b79a9dafc1ba2_at_open-mpi.org" -->
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
<strong>From:</strong> Sunil Patil (<em>sunillp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-13 10:20:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1069.php">Gleb Natapov: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA"</a>
<li><strong>Previous message:</strong> <a href="1067.php">Christian Siebert: "[OMPI devel] communication bug in collective module query/init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1069.php">Gleb Natapov: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA"</a>
<li><strong>Reply:</strong> <a href="1069.php">Gleb Natapov: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>This is somewhat irrelevant question. It was said that in order delivery is
<br>
a feature of Mellanox HCA and not part of IB spec. Is this true for UD type
<br>
QPs also for which IB spec says that &quot;in order delivery&quot; is not guaranteed ?
<br>
<p>Regards
<br>
Sunil
<br>
<p><p><p><p>On 9/13/06, Open MPI &lt;bugs_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #366: OpenIB on IA64: we should disable small message RDMA
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------+--------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Reporter:  jsquyres      |        Owner:  gleb
</span><br>
<span class="quotelev1">&gt;    Type:  defect        |       Status:  new
</span><br>
<span class="quotelev1">&gt; Priority:  major         |    Milestone:  Open MPI 1.1.2
</span><br>
<span class="quotelev1">&gt; Version:  trunk         |   Resolution:
</span><br>
<span class="quotelev1">&gt; Keywords:  openib, ia64  |
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------+--------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Comment (by gleb):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually in order delivery is a feature of Mellanox HCA and not part of
</span><br>
<span class="quotelev1">&gt; the IB/iWarp spec.[[BR]]
</span><br>
<span class="quotelev1">&gt; See [<a href="http://openib.org/pipermail/openib-general/2006-August/025305.html">http://openib.org/pipermail/openib-general/2006-August/025305.html</a>]
</span><br>
<span class="quotelev1">&gt; for discussion about this. So use_eager_rdma flag is a good candidate to
</span><br>
<span class="quotelev1">&gt; be put in mca-btl-openib-hca-params.ini file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ticket URL: &lt;<a href="http://svn.open-mpi.org/trac/ompi/ticket/366">http://svn.open-mpi.org/trac/ompi/ticket/366</a>&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; bugs mailing list
</span><br>
<span class="quotelev1">&gt; bugs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/bugs">http://www.open-mpi.org/mailman/listinfo.cgi/bugs</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1068/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1069.php">Gleb Natapov: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA"</a>
<li><strong>Previous message:</strong> <a href="1067.php">Christian Siebert: "[OMPI devel] communication bug in collective module query/init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1069.php">Gleb Natapov: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA"</a>
<li><strong>Reply:</strong> <a href="1069.php">Gleb Natapov: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #366: OpenIB on IA64: we should disable small message RDMA"</a>
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
