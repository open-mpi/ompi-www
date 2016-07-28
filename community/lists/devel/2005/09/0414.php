<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 27 08:54:57 2005" -->
<!-- isoreceived="20050927135457" -->
<!-- sent="Tue, 27 Sep 2005 08:54:55 -0500" -->
<!-- isosent="20050927135455" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  [PATCH] Update Open MPI for new libibverbs API" -->
<!-- id="358FA31B-AF4D-4CF1-ACAB-70788AA813CC_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="52fyrrsezv.fsf_at_cisco.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-27 08:54:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0415.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component	--	linux	(solved?)	(fwd)"</a>
<li><strong>Previous message:</strong> <a href="0413.php">Galen M. Shipman: "Re:  p2p linpack ---"</a>
<li><strong>In reply to:</strong> <a href="0412.php">Roland Dreier: "[PATCH] Update Open MPI for new libibverbs API"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0417.php">Roland Dreier: "Re:  [PATCH] Update Open MPI for new libibverbs API"</a>
<li><strong>Reply:</strong> <a href="0417.php">Roland Dreier: "Re:  [PATCH] Update Open MPI for new libibverbs API"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 26, 2005, at 4:20 PM, Roland Dreier wrote:
<br>
<p><span class="quotelev1">&gt; [It's somewhat annoying to have to subscribe to devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; just to be able to send patches, but oh well...]
</span><br>
<p>It's even more annoying to be deluged with SPAM ;).  We (the LAM  
<br>
developers) used to try to keep our mailing lists as open as  
<br>
possible.  In the end, SPAM pushed the signal to noise ratio way too  
<br>
high and something had to be done.  Requiring subscriptions to post  
<br>
was the best we could do.
<br>
<p><span class="quotelev1">&gt; This patch updates Open MPI for the new ibv_create_cq() API.
</span><br>
<span class="quotelev1">&gt; Signed-off-by: Roland Dreier &lt;rolandd_at_[hidden]&gt;
</span><br>
<p>I'll admit my ignorance - is this part of a particular release of  
<br>
OpenIB, or is this something that has happened recently in SVN?  I  
<br>
ask because we already have people using OpenIB and Open MPI  
<br>
together, and it would be bad to suddenly break things for them.   
<br>
Testing for number of arguments in a function is horribly unreliable  
<br>
- is there some version number or other key in the Open IB headers we  
<br>
can use to determine which version of the function to use?
<br>
<p>Brian
<br>
<p><p><span class="quotelev1">&gt; --- ompi/mca/btl/openib/btl_openib.c    (revision 7507)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/btl_openib.c    (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -656,7 +656,8 @@ int mca_btl_openib_module_init(mca_btl_o
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* Create the low and high priority queue pairs */
</span><br>
<span class="quotelev1">&gt; -    openib_btl-&gt;ib_cq_low = ibv_create_cq(ctx,  
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component.ib_cq_size, NULL);
</span><br>
<span class="quotelev1">&gt; +    openib_btl-&gt;ib_cq_low = ibv_create_cq(ctx,  
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component.ib_cq_size,
</span><br>
<span class="quotelev1">&gt; +                                  NULL, NULL, 0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if(NULL == openib_btl-&gt;ib_cq_low) {
</span><br>
<span class="quotelev1">&gt;          BTL_ERROR((&quot;error creating low priority cq for %s errno  
</span><br>
<span class="quotelev1">&gt; says %s\n&quot;,
</span><br>
<span class="quotelev1">&gt; @@ -665,7 +666,8 @@ int mca_btl_openib_module_init(mca_btl_o
</span><br>
<span class="quotelev1">&gt;          return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    openib_btl-&gt;ib_cq_high = ibv_create_cq(ctx,  
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component.ib_cq_size, NULL);
</span><br>
<span class="quotelev1">&gt; +    openib_btl-&gt;ib_cq_high = ibv_create_cq(ctx,  
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component.ib_cq_size,
</span><br>
<span class="quotelev1">&gt; +                                   NULL, NULL, 0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if(NULL == openib_btl-&gt;ib_cq_high) {
</span><br>
<span class="quotelev1">&gt;          BTL_ERROR((&quot;error creating high priority cq for %s errno  
</span><br>
<span class="quotelev1">&gt; says %s\n&quot;,
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
<li><strong>Next message:</strong> <a href="0415.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component	--	linux	(solved?)	(fwd)"</a>
<li><strong>Previous message:</strong> <a href="0413.php">Galen M. Shipman: "Re:  p2p linpack ---"</a>
<li><strong>In reply to:</strong> <a href="0412.php">Roland Dreier: "[PATCH] Update Open MPI for new libibverbs API"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0417.php">Roland Dreier: "Re:  [PATCH] Update Open MPI for new libibverbs API"</a>
<li><strong>Reply:</strong> <a href="0417.php">Roland Dreier: "Re:  [PATCH] Update Open MPI for new libibverbs API"</a>
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
