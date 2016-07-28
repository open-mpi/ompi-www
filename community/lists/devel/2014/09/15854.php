<?
$subject_val = "Re: [OMPI devel] race condition in oob/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 07:07:30 2014" -->
<!-- isoreceived="20140917110730" -->
<!-- sent="Wed, 17 Sep 2014 20:07:40 +0900" -->
<!-- isosent="20140917110740" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] race condition in oob/tcp" -->
<!-- id="54196B7C.7060404_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="83579ED0-06B3-4D5B-BB26-92D5E69442E6_at_open-mpi.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-17 07:07:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15855.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Previous message:</strong> <a href="15853.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi-tests SVN repo has been moved to Github"</a>
<li><strong>In reply to:</strong> <a href="15844.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15855.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Reply:</strong> <a href="15855.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph,
<br>
<p>this is much better but there is still a bug :
<br>
with the very same scenario i described earlier, vpid 2 does not send
<br>
its message to vpid 3 once the connection has been established.
<br>
<p>i tried to debug it but i have been pretty unsuccessful so far ..
<br>
<p>vpid 2 calls tcp_peer_connected and execute the following snippet
<br>
<p>&nbsp;if (NULL != peer-&gt;send_msg &amp;&amp; !peer-&gt;send_ev_active) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_event_add(&amp;peer-&gt;send_event, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;peer-&gt;send_ev_active = true;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>but when evmap_io_active is invoked later, the following part :
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;TAILQ_FOREACH(ev, &amp;ctx-&gt;events, ev_io_next) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ev-&gt;ev_events &amp; events)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;event_active_nolock(ev, ev-&gt;ev_events &amp; events, 1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>finds only one ev (mca_oob_tcp_recv_handler and *no*
<br>
mca_oob_tcp_send_handler)
<br>
<p>i will resume my investigations tomorrow
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/09/17 4:01, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hi Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I took a crack at solving this in r32744 - CMRd it for 1.8.3 and assigned it to you for review. Give it a try and let me know if I (hopefully) got it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The approach we have used in the past is to have both sides close their connections, and then have the higher vpid retry while the lower one waits. The logic for that was still in place, but it looks like you are hitting a different code path, and I found another potential one as well. So I think I plugged the holes, but will wait to hear if you confirm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 16, 2014, at 6:27 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; here is the full description of a race condition in oob/tcp i very briefly mentionned in a previous post :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the race condition can occur when two not connected orted try to send a message to each other for the first time and at the same time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; that can occur when running mpi helloworld on 4 nodes with the grpcomm/rcd module.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; here is a scenario in which the race condition occurs :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; orted vpid 2 and 3 enter the allgather
</span><br>
<span class="quotelev2">&gt;&gt; /* they are not orte yet oob/tcp connected*/
</span><br>
<span class="quotelev2">&gt;&gt; and they call orte.send_buffer_nb each other.
</span><br>
<span class="quotelev2">&gt;&gt; from a libevent point of view, vpid 2 and 3 will call mca_oob_tcp_peer_try_connect
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; vpid 2 calls mca_oob_tcp_send_handler
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; vpid 3 calls connection_event_handler
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; depending on the value returned by random() in libevent, vpid 3 will
</span><br>
<span class="quotelev2">&gt;&gt; either call mca_oob_tcp_send_handler (likely) or recv_handler (unlikely)
</span><br>
<span class="quotelev2">&gt;&gt; if vpid 3 calls recv_handler, it will close the two sockets to vpid 2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; then vpid 2 will call mca_oob_tcp_recv_handler
</span><br>
<span class="quotelev2">&gt;&gt; (peer-&gt;state is MCA_OOB_TCP_CONNECT_ACK)
</span><br>
<span class="quotelev2">&gt;&gt; that will invoke mca_oob_tcp_recv_connect_ack
</span><br>
<span class="quotelev2">&gt;&gt; tcp_peer_recv_blocking will fail 
</span><br>
<span class="quotelev2">&gt;&gt; /* zero bytes are recv'ed since vpid 3 previously closed the socket before writing a header */
</span><br>
<span class="quotelev2">&gt;&gt; and this is handled by mca_oob_tcp_recv_handler as a fatal error
</span><br>
<span class="quotelev2">&gt;&gt; /* ORTE_FORCED_TERMINATE(1) */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; could you please have a look at it ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if you are too busy, could you please advise where this scenario should be handled differently ?
</span><br>
<span class="quotelev2">&gt;&gt; - should vpid 3 keep one socket instead of closing both and retrying ?
</span><br>
<span class="quotelev2">&gt;&gt; - should vpid 2 handle the failure as a non fatal error ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15836.php">http://www.open-mpi.org/community/lists/devel/2014/09/15836.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15844.php">http://www.open-mpi.org/community/lists/devel/2014/09/15844.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15855.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Previous message:</strong> <a href="15853.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi-tests SVN repo has been moved to Github"</a>
<li><strong>In reply to:</strong> <a href="15844.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15855.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Reply:</strong> <a href="15855.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
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
