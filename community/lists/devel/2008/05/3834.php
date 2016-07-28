<?
$subject_val = "[OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  5 16:13:12 2008" -->
<!-- isoreceived="20080505201312" -->
<!-- sent="Mon, 5 May 2008 15:13:04 -0500" -->
<!-- isosent="20080505201304" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="[OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown" -->
<!-- id="200805051513.04283.jon_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown<br>
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-05 16:13:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3835.php">Steve Wise: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<li><strong>Previous message:</strong> <a href="3833.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3835.php">Steve Wise: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<li><strong>Reply:</strong> <a href="3835.php">Steve Wise: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am seeing some unusual behavior during the shutdown phase of ompi at the end of my testcase.  While running a IMB pingpong test over the rdmacm on openib, I get cq flush errors on my iWARP adapters.
<br>
<p>This error is happening because the remote node is still polling the endpoint while the other one shutdown.  This occurs because iWARP puts the qps in error state when the channel is disconnected (IB does not do this).  Since the cq is still being polled when the event is received on the remote node, ompi thinks it hit an error and kills the run.  Since this is expected behavior on iWARP, this is not really an error case.
<br>
<p>There is a larger question regarding why the remote node is still polling the hca and not shutting down, but my immediate question is if it is an acceptable fix to simply disregard this &quot;error&quot; if it is an iWARP adapter.  
<br>
<p>Opinions?
<br>
<p>Thanks,
<br>
Jon
<br>
<p>The patch would look something like this:
<br>
<p>===================================================================
<br>
--- ompi/mca/btl/openib/btl_openib_component.c  (revision 18362)
<br>
+++ ompi/mca/btl/openib/btl_openib_component.c  (working copy)
<br>
@@ -2062,6 +2062,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(endpoint &amp;&amp; endpoint-&gt;endpoint_proc &amp;&amp; endpoint-&gt;endpoint_proc-&gt;proc_ompi)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;remote_proc = endpoint-&gt;endpoint_proc-&gt;proc_ompi;
<br>
<p>+    if (wc-&gt;status == IBV_WC_WR_FLUSH_ERR &amp;&amp;
<br>
+        IBV_TRANSPORT_IWARP == hca-&gt;ib_dev-&gt;transport_type) {
<br>
+        return;
<br>
+    }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(wc-&gt;status != IBV_WC_WR_FLUSH_ERR || !flush_err_printed[cq]++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BTL_PEER_ERROR(remote_proc, (&quot;error polling %s with status %s &quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;status number %d for wr_id %llu opcode %d qp_idx %d&quot;,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3835.php">Steve Wise: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<li><strong>Previous message:</strong> <a href="3833.php">Josh Hursey: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3835.php">Steve Wise: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<li><strong>Reply:</strong> <a href="3835.php">Steve Wise: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
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
