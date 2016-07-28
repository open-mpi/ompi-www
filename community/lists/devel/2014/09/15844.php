<?
$subject_val = "Re: [OMPI devel] race condition in oob/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 16 15:02:59 2014" -->
<!-- isoreceived="20140916190259" -->
<!-- sent="Tue, 16 Sep 2014 12:01:58 -0700" -->
<!-- isosent="20140916190158" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] race condition in oob/tcp" -->
<!-- id="83579ED0-06B3-4D5B-BB26-92D5E69442E6_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5vwJzCnriHwHt=FQ_ijKUz1DJE6Ai6M+sHRZr=Up7+Ypw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] race condition in oob/tcp<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-16 15:01:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15845.php">Ralph Castain: "Re: [OMPI devel] 1.8.3rc1 - start your engines"</a>
<li><strong>Previous message:</strong> <a href="15843.php">Paul Hargrove: "Re: [OMPI devel] CONVERSION TO GITHUB"</a>
<li><strong>In reply to:</strong> <a href="15836.php">Gilles Gouaillardet: "[OMPI devel] race condition in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15854.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Reply:</strong> <a href="15854.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles
<br>
<p>I took a crack at solving this in r32744 - CMRd it for 1.8.3 and assigned it to you for review. Give it a try and let me know if I (hopefully) got it.
<br>
<p>The approach we have used in the past is to have both sides close their connections, and then have the higher vpid retry while the lower one waits. The logic for that was still in place, but it looks like you are hitting a different code path, and I found another potential one as well. So I think I plugged the holes, but will wait to hear if you confirm.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Sep 16, 2014, at 6:27 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; here is the full description of a race condition in oob/tcp i very briefly mentionned in a previous post :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the race condition can occur when two not connected orted try to send a message to each other for the first time and at the same time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that can occur when running mpi helloworld on 4 nodes with the grpcomm/rcd module.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; here is a scenario in which the race condition occurs :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; orted vpid 2 and 3 enter the allgather
</span><br>
<span class="quotelev1">&gt; /* they are not orte yet oob/tcp connected*/
</span><br>
<span class="quotelev1">&gt; and they call orte.send_buffer_nb each other.
</span><br>
<span class="quotelev1">&gt; from a libevent point of view, vpid 2 and 3 will call mca_oob_tcp_peer_try_connect
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; vpid 2 calls mca_oob_tcp_send_handler
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; vpid 3 calls connection_event_handler
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; depending on the value returned by random() in libevent, vpid 3 will
</span><br>
<span class="quotelev1">&gt; either call mca_oob_tcp_send_handler (likely) or recv_handler (unlikely)
</span><br>
<span class="quotelev1">&gt; if vpid 3 calls recv_handler, it will close the two sockets to vpid 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then vpid 2 will call mca_oob_tcp_recv_handler
</span><br>
<span class="quotelev1">&gt; (peer-&gt;state is MCA_OOB_TCP_CONNECT_ACK)
</span><br>
<span class="quotelev1">&gt; that will invoke mca_oob_tcp_recv_connect_ack
</span><br>
<span class="quotelev1">&gt; tcp_peer_recv_blocking will fail 
</span><br>
<span class="quotelev1">&gt; /* zero bytes are recv'ed since vpid 3 previously closed the socket before writing a header */
</span><br>
<span class="quotelev1">&gt; and this is handled by mca_oob_tcp_recv_handler as a fatal error
</span><br>
<span class="quotelev1">&gt; /* ORTE_FORCED_TERMINATE(1) */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; could you please have a look at it ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if you are too busy, could you please advise where this scenario should be handled differently ?
</span><br>
<span class="quotelev1">&gt; - should vpid 3 keep one socket instead of closing both and retrying ?
</span><br>
<span class="quotelev1">&gt; - should vpid 2 handle the failure as a non fatal error ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15836.php">http://www.open-mpi.org/community/lists/devel/2014/09/15836.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15845.php">Ralph Castain: "Re: [OMPI devel] 1.8.3rc1 - start your engines"</a>
<li><strong>Previous message:</strong> <a href="15843.php">Paul Hargrove: "Re: [OMPI devel] CONVERSION TO GITHUB"</a>
<li><strong>In reply to:</strong> <a href="15836.php">Gilles Gouaillardet: "[OMPI devel] race condition in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15854.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Reply:</strong> <a href="15854.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in oob/tcp"</a>
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
