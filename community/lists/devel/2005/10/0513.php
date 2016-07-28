<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 31 12:24:11 2005" -->
<!-- isoreceived="20051031172411" -->
<!-- sent="Mon, 31 Oct 2005 10:24:05 -0700" -->
<!-- isosent="20051031172405" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re:  [PATCH] casting is bad!" -->
<!-- id="01A71FEB-82BF-420E-AE8C-12EA7F6B54CB_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-31 12:24:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0514.php">Gleb Natapov: "Re:  [PATCH] casting is bad!"</a>
<li><strong>Previous message:</strong> <a href="0512.php">Tim S. Woodall: "Re:  [PATCH] casting is bad!"</a>
<li><strong>In reply to:</strong> <a href="0510.php">Gleb Natapov: "[PATCH] casting is bad!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0514.php">Gleb Natapov: "Re:  [PATCH] casting is bad!"</a>
<li><strong>Reply:</strong> <a href="0514.php">Gleb Natapov: "Re:  [PATCH] casting is bad!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb
<br>
<p>Yes, yes it is.. This was causing RNR NAK problems!
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p><p>On Oct 31, 2005, at 9:57 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/btl_openib_component.c    (revision 7935)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/btl_openib_component.c    (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -165,7 +165,7 @@
</span><br>
<span class="quotelev1">&gt;      mca_btl_openib_param_register_int(&quot;ib_retry_count&quot;, &quot;IB  
</span><br>
<span class="quotelev1">&gt; transmit retry count&quot;,
</span><br>
<span class="quotelev1">&gt;                                        7, (int*)  
</span><br>
<span class="quotelev1">&gt; &amp;mca_btl_openib_component.ib_retry_count);
</span><br>
<span class="quotelev1">&gt;      mca_btl_openib_param_register_int(&quot;ib_rnr_retry&quot;, &quot;IB rnr retry&quot;,
</span><br>
<span class="quotelev1">&gt; -                                      7, (int*)  
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component.ib_rnr_retry);
</span><br>
<span class="quotelev1">&gt; +                                      7, (int*)  
</span><br>
<span class="quotelev1">&gt; &amp;mca_btl_openib_component.ib_rnr_retry);
</span><br>
<span class="quotelev1">&gt;      mca_btl_openib_param_register_int(&quot;ib_max_rdma_dst_ops&quot;, &quot;IB  
</span><br>
<span class="quotelev1">&gt; max rdma destination operations&quot;,
</span><br>
<span class="quotelev1">&gt;                                        16, (int*)  
</span><br>
<span class="quotelev1">&gt; &amp;mca_btl_openib_component.ib_max_rdma_dst_ops);
</span><br>
<span class="quotelev1">&gt;      mca_btl_openib_param_register_int(&quot;ib_service_level&quot;, &quot;IB  
</span><br>
<span class="quotelev1">&gt; service level&quot;,
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;             Gleb.
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
<li><strong>Next message:</strong> <a href="0514.php">Gleb Natapov: "Re:  [PATCH] casting is bad!"</a>
<li><strong>Previous message:</strong> <a href="0512.php">Tim S. Woodall: "Re:  [PATCH] casting is bad!"</a>
<li><strong>In reply to:</strong> <a href="0510.php">Gleb Natapov: "[PATCH] casting is bad!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0514.php">Gleb Natapov: "Re:  [PATCH] casting is bad!"</a>
<li><strong>Reply:</strong> <a href="0514.php">Gleb Natapov: "Re:  [PATCH] casting is bad!"</a>
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
