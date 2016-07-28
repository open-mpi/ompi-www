<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 31 14:21:11 2005" -->
<!-- isoreceived="20051031192111" -->
<!-- sent="Mon, 31 Oct 2005 21:20:22 +0200" -->
<!-- isosent="20051031192022" -->
<!-- name="Gleb Natapov" -->
<!-- email="gleb_at_[hidden]" -->
<!-- subject="Re:  [PATCH] casting is bad!" -->
<!-- id="20051031192022.GA7079_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="01A71FEB-82BF-420E-AE8C-12EA7F6B54CB_at_lanl.gov" -->
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
<strong>From:</strong> Gleb Natapov (<em>gleb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-31 14:20:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="../../2005/11/0515.php">Tim S. Woodall: "tcp performance"</a>
<li><strong>Previous message:</strong> <a href="0513.php">Galen M. Shipman: "Re:  [PATCH] casting is bad!"</a>
<li><strong>In reply to:</strong> <a href="0513.php">Galen M. Shipman: "Re:  [PATCH] casting is bad!"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Oct 31, 2005 at 10:24:05AM -0700, Galen M. Shipman wrote:
<br>
<span class="quotelev1">&gt; Gleb
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, yes it is.. This was causing RNR NAK problems!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
RNR problem is exactly how I found this  :)
<br>
<p><span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Galen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2005, at 9:57 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Index: ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- ompi/mca/btl/openib/btl_openib_component.c    (revision 7935)
</span><br>
<span class="quotelev2">&gt; &gt; +++ ompi/mca/btl/openib/btl_openib_component.c    (working copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -165,7 +165,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;      mca_btl_openib_param_register_int(&quot;ib_retry_count&quot;, &quot;IB  
</span><br>
<span class="quotelev2">&gt; &gt; transmit retry count&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                                        7, (int*)  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;mca_btl_openib_component.ib_retry_count);
</span><br>
<span class="quotelev2">&gt; &gt;      mca_btl_openib_param_register_int(&quot;ib_rnr_retry&quot;, &quot;IB rnr retry&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; -                                      7, (int*)  
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_openib_component.ib_rnr_retry);
</span><br>
<span class="quotelev2">&gt; &gt; +                                      7, (int*)  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;mca_btl_openib_component.ib_rnr_retry);
</span><br>
<span class="quotelev2">&gt; &gt;      mca_btl_openib_param_register_int(&quot;ib_max_rdma_dst_ops&quot;, &quot;IB  
</span><br>
<span class="quotelev2">&gt; &gt; max rdma destination operations&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                                        16, (int*)  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;mca_btl_openib_component.ib_max_rdma_dst_ops);
</span><br>
<span class="quotelev2">&gt; &gt;      mca_btl_openib_param_register_int(&quot;ib_service_level&quot;, &quot;IB  
</span><br>
<span class="quotelev2">&gt; &gt; service level&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;             Gleb.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="../../2005/11/0515.php">Tim S. Woodall: "tcp performance"</a>
<li><strong>Previous message:</strong> <a href="0513.php">Galen M. Shipman: "Re:  [PATCH] casting is bad!"</a>
<li><strong>In reply to:</strong> <a href="0513.php">Galen M. Shipman: "Re:  [PATCH] casting is bad!"</a>
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
