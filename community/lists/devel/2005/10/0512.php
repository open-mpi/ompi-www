<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 31 12:15:28 2005" -->
<!-- isoreceived="20051031171528" -->
<!-- sent="Mon, 31 Oct 2005 10:15:24 -0700" -->
<!-- isosent="20051031171524" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re:  [PATCH] casting is bad!" -->
<!-- id="4366512C.1000409_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20051031165759.GA3261_at_minantech.com" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-31 12:15:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0513.php">Galen M. Shipman: "Re:  [PATCH] casting is bad!"</a>
<li><strong>Previous message:</strong> <a href="0511.php">Gleb Natapov: "[PATCH] same for mvapi"</a>
<li><strong>In reply to:</strong> <a href="0510.php">Gleb Natapov: "[PATCH] casting is bad!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0513.php">Galen M. Shipman: "Re:  [PATCH] casting is bad!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Agreed!
<br>
<p>Thanks,
<br>
Tim
<br>
<p><p>Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/btl_openib_component.c	(revision 7935)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/btl_openib_component.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -165,7 +165,7 @@
</span><br>
<span class="quotelev1">&gt;      mca_btl_openib_param_register_int(&quot;ib_retry_count&quot;, &quot;IB transmit retry count&quot;,
</span><br>
<span class="quotelev1">&gt;                                        7, (int*) &amp;mca_btl_openib_component.ib_retry_count); 
</span><br>
<span class="quotelev1">&gt;      mca_btl_openib_param_register_int(&quot;ib_rnr_retry&quot;, &quot;IB rnr retry&quot;, 
</span><br>
<span class="quotelev1">&gt; -                                      7, (int*) mca_btl_openib_component.ib_rnr_retry); 
</span><br>
<span class="quotelev1">&gt; +                                      7, (int*) &amp;mca_btl_openib_component.ib_rnr_retry); 
</span><br>
<span class="quotelev1">&gt;      mca_btl_openib_param_register_int(&quot;ib_max_rdma_dst_ops&quot;, &quot;IB max rdma destination operations&quot;, 
</span><br>
<span class="quotelev1">&gt;                                        16, (int*) &amp;mca_btl_openib_component.ib_max_rdma_dst_ops); 
</span><br>
<span class="quotelev1">&gt;      mca_btl_openib_param_register_int(&quot;ib_service_level&quot;, &quot;IB service level&quot;, 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0513.php">Galen M. Shipman: "Re:  [PATCH] casting is bad!"</a>
<li><strong>Previous message:</strong> <a href="0511.php">Gleb Natapov: "[PATCH] same for mvapi"</a>
<li><strong>In reply to:</strong> <a href="0510.php">Gleb Natapov: "[PATCH] casting is bad!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0513.php">Galen M. Shipman: "Re:  [PATCH] casting is bad!"</a>
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
