<?
$subject_val = "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  5 18:27:23 2008" -->
<!-- isoreceived="20080505222723" -->
<!-- sent="Mon, 05 May 2008 17:27:14 -0500" -->
<!-- isosent="20080505222714" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown" -->
<!-- id="481F89C2.2010308_at_opengridcomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200805051513.04283.jon_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-05 18:27:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3836.php">Lenny Verkhovsky: "[OMPI devel] NO IP address found"</a>
<li><strong>Previous message:</strong> <a href="3834.php">Jon Mason: "[OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<li><strong>In reply to:</strong> <a href="3834.php">Jon Mason: "[OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3838.php">Jeff Squyres: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<li><strong>Reply:</strong> <a href="3838.php">Jeff Squyres: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jon Mason wrote:
<br>
<span class="quotelev1">&gt; I am seeing some unusual behavior during the shutdown phase of ompi at the end of my testcase.  While running a IMB pingpong test over the rdmacm on openib, I get cq flush errors on my iWARP adapters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This error is happening because the remote node is still polling the endpoint while the other one shutdown.  This occurs because iWARP puts the qps in error state when the channel is disconnected (IB does not do this).  Since the cq is still being polled when the event is received on the remote node, ompi thinks it hit an error and kills the run.  Since this is expected behavior on iWARP, this is not really an error case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>The key here, I think is that when an iWARP QP moves out of RTS, all the 
<br>
RECVs and any pending SQ WRs get flushed.  Further, disconnecting the 
<br>
iwarp connection forces the QP out of RTS.  This is probably different 
<br>
than they way IB works.  IE &quot;disconnecting&quot; in IB is an out-of-band 
<br>
exchange done by the IBCM.  For iWARP, &quot;disconnecting&quot; is an in-band 
<br>
operation (a TCP close or abort) so the QP cannot remain in RTS during 
<br>
this process.
<br>
<p><span class="quotelev1">&gt; There is a larger question regarding why the remote node is still polling the hca and not shutting down, but my immediate question is if it is an acceptable fix to simply disregard this &quot;error&quot; if it is an iWARP adapter.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Opinions?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>If the openib btl (or the layers above) assume the &quot;disconnect&quot; will 
<br>
notify the remote rank that the connection should be finalized, then we 
<br>
must deal with FLUSHED WRs for the iwarp case.  If some sort of 
<br>
&quot;finalizing&quot; is done by OMPI and then the connections disconnected, then 
<br>
that &quot;finalizing&quot; should include not polling the CQ anymore.  But that's 
<br>
not what we observe.
<br>
<p><span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jon
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The patch would look something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/btl_openib_component.c  (revision 18362)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/btl_openib_component.c  (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -2062,6 +2062,11 @@
</span><br>
<span class="quotelev1">&gt;      if(endpoint &amp;&amp; endpoint-&gt;endpoint_proc &amp;&amp; endpoint-&gt;endpoint_proc-&gt;proc_ompi)
</span><br>
<span class="quotelev1">&gt;          remote_proc = endpoint-&gt;endpoint_proc-&gt;proc_ompi;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    if (wc-&gt;status == IBV_WC_WR_FLUSH_ERR &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +        IBV_TRANSPORT_IWARP == hca-&gt;ib_dev-&gt;transport_type) {
</span><br>
<span class="quotelev1">&gt; +        return;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      if(wc-&gt;status != IBV_WC_WR_FLUSH_ERR || !flush_err_printed[cq]++) {
</span><br>
<span class="quotelev1">&gt;          BTL_PEER_ERROR(remote_proc, (&quot;error polling %s with status %s &quot;
</span><br>
<span class="quotelev1">&gt;                      &quot;status number %d for wr_id %llu opcode %d qp_idx %d&quot;,
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
<li><strong>Next message:</strong> <a href="3836.php">Lenny Verkhovsky: "[OMPI devel] NO IP address found"</a>
<li><strong>Previous message:</strong> <a href="3834.php">Jon Mason: "[OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<li><strong>In reply to:</strong> <a href="3834.php">Jon Mason: "[OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3838.php">Jeff Squyres: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<li><strong>Reply:</strong> <a href="3838.php">Jeff Squyres: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
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
