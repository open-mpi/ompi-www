<?
$subject_val = "Re: [OMPI devel] race condition in oob/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 04:03:27 2014" -->
<!-- isoreceived="20140918080327" -->
<!-- sent="Thu, 18 Sep 2014 01:02:19 -0700" -->
<!-- isosent="20140918080219" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] race condition in oob/tcp" -->
<!-- id="F8FF7118-E27D-4D69-838A-431C54291D34_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="541A7D2A.2010805_at_iferc.org" -->
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
<strong>Date:</strong> 2014-09-18 04:02:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15864.php">Alex Margolin: "Re: [OMPI devel] Need to know your Github ID"</a>
<li><strong>Previous message:</strong> <a href="15862.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>In reply to:</strong> <a href="15862.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15880.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Reply:</strong> <a href="15880.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The patch looks fine to me - please go ahead and apply it. Thanks!
<br>
<p>On Sep 17, 2014, at 11:35 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yes and no ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi hello world with four nodes can be used to reproduce the issue,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; you can increase the likelyhood of producing the race condition by hacking
</span><br>
<span class="quotelev1">&gt; ./opal/mca/event/libevent2021/libevent/poll.c
</span><br>
<span class="quotelev1">&gt; and replace
</span><br>
<span class="quotelev1">&gt;        i = random() % nfds;
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt;       if (nfds &lt; 2) {
</span><br>
<span class="quotelev1">&gt;           i = 0;
</span><br>
<span class="quotelev1">&gt;       } else {
</span><br>
<span class="quotelev1">&gt;           i = nfds - 2;
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but since this is really a race condition, all i could do is show you
</span><br>
<span class="quotelev1">&gt; how to use a debugger in order to force it
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; here is what really happens :
</span><br>
<span class="quotelev1">&gt; - thanks to your patch, when vpid 2 cannot read the acknowledge, this is
</span><br>
<span class="quotelev1">&gt; no more a fatal error.
</span><br>
<span class="quotelev1">&gt; - that being said, the peer-&gt;recv_event is not removed from the libevent
</span><br>
<span class="quotelev1">&gt; - later, send_event will be added to the libevent
</span><br>
<span class="quotelev1">&gt; - and then peer-&gt;recv_event will be added to the libevent
</span><br>
<span class="quotelev1">&gt; /* this is clearly not supported, and the interesting behaviour is that
</span><br>
<span class="quotelev1">&gt; peer-&gt;send_event will be kicked out of libevent (!) */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached patch fixes this race condition, could you please review it ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/09/17 22:17, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Do you have a reproducer you can share for testing this? I'm unable to get it to happen on my machine, but maybe you have a test code that triggers it so I can continue debugging
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 17, 2014, at 4:07 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is much better but there is still a bug :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the very same scenario i described earlier, vpid 2 does not send
</span><br>
<span class="quotelev3">&gt;&gt;&gt; its message to vpid 3 once the connection has been established.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i tried to debug it but i have been pretty unsuccessful so far ..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vpid 2 calls tcp_peer_connected and execute the following snippet
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if (NULL != peer-&gt;send_msg &amp;&amp; !peer-&gt;send_ev_active) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       opal_event_add(&amp;peer-&gt;send_event, 0);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       peer-&gt;send_ev_active = true;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but when evmap_io_active is invoked later, the following part :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   TAILQ_FOREACH(ev, &amp;ctx-&gt;events, ev_io_next) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       if (ev-&gt;ev_events &amp; events)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           event_active_nolock(ev, ev-&gt;ev_events &amp; events, 1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; finds only one ev (mca_oob_tcp_recv_handler and *no*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_oob_tcp_send_handler)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i will resume my investigations tomorrow
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2014/09/17 4:01, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I took a crack at solving this in r32744 - CMRd it for 1.8.3 and assigned it to you for review. Give it a try and let me know if I (hopefully) got it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The approach we have used in the past is to have both sides close their connections, and then have the higher vpid retry while the lower one waits. The logic for that was still in place, but it looks like you are hitting a different code path, and I found another potential one as well. So I think I plugged the holes, but will wait to hear if you confirm.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 16, 2014, at 6:27 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; here is the full description of a race condition in oob/tcp i very briefly mentionned in a previous post :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the race condition can occur when two not connected orted try to send a message to each other for the first time and at the same time.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that can occur when running mpi helloworld on 4 nodes with the grpcomm/rcd module.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; here is a scenario in which the race condition occurs :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; orted vpid 2 and 3 enter the allgather
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /* they are not orte yet oob/tcp connected*/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and they call orte.send_buffer_nb each other.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from a libevent point of view, vpid 2 and 3 will call mca_oob_tcp_peer_try_connect
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vpid 2 calls mca_oob_tcp_send_handler
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vpid 3 calls connection_event_handler
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; depending on the value returned by random() in libevent, vpid 3 will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; either call mca_oob_tcp_send_handler (likely) or recv_handler (unlikely)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; if vpid 3 calls recv_handler, it will close the two sockets to vpid 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; then vpid 2 will call mca_oob_tcp_recv_handler
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (peer-&gt;state is MCA_OOB_TCP_CONNECT_ACK)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that will invoke mca_oob_tcp_recv_connect_ack
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tcp_peer_recv_blocking will fail 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /* zero bytes are recv'ed since vpid 3 previously closed the socket before writing a header */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and this is handled by mca_oob_tcp_recv_handler as a fatal error
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /* ORTE_FORCED_TERMINATE(1) */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; could you please have a look at it ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; if you are too busy, could you please advise where this scenario should be handled differently ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - should vpid 3 keep one socket instead of closing both and retrying ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - should vpid 2 handle the failure as a non fatal error ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15836.php">http://www.open-mpi.org/community/lists/devel/2014/09/15836.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15844.php">http://www.open-mpi.org/community/lists/devel/2014/09/15844.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15854.php">http://www.open-mpi.org/community/lists/devel/2014/09/15854.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15855.php">http://www.open-mpi.org/community/lists/devel/2014/09/15855.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;oob_tcp.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15862.php">http://www.open-mpi.org/community/lists/devel/2014/09/15862.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15864.php">Alex Margolin: "Re: [OMPI devel] Need to know your Github ID"</a>
<li><strong>Previous message:</strong> <a href="15862.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>In reply to:</strong> <a href="15862.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15880.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Reply:</strong> <a href="15880.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in oob/tcp"</a>
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
