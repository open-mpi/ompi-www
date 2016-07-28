<?
$subject_val = "Re: [OMPI devel] race condition in oob/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 11:30:19 2014" -->
<!-- isoreceived="20140919153019" -->
<!-- sent="Sat, 20 Sep 2014 00:30:17 +0900" -->
<!-- isosent="20140919153017" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] race condition in oob/tcp" -->
<!-- id="CAAkFZ5uC_3-GqABa0ymxjZyWkkW9NWwhFxzRF-7bMpeD8mj06A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="541C0E22.9090309_at_iferc.org" -->
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
<strong>Date:</strong> 2014-09-19 11:30:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15883.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Previous message:</strong> <a href="15881.php">Ralph Castain: "Re: [OMPI devel] v1.8 does not compile any more"</a>
<li><strong>In reply to:</strong> <a href="15880.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15883.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Reply:</strong> <a href="15883.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>let me detail the new race condition.
<br>
<p>orted 2 and 3 are not connected to each other and send a message to each
<br>
other
<br>
<p>orted 2 and 3 call send_process (that set peer-&gt;state =
<br>
MCA_OOB_TCP_PEER_CONNECTING)
<br>
they both end up calling mca_oob_tcp_peer_try_connect
<br>
<p>now if orted 3 calls mca_oob_tcp_send_handler.
<br>
peer-&gt;state = MCA_OOB_TCP_CONNECT_ACK
<br>
peer-&gt;fd = 15 /* in my environment */
<br>
<p>now orted 2 accept the connection from orted 3 (fd=17 in my environment)
<br>
and invokes recv_handler
<br>
that will call mca_oob_tcp_peer_recv_connect_ack
<br>
that will in turn call retry because peer-&gt;state is MCA_OOB_TCP_CONNECTING
<br>
retry will close fd 15 and 17
<br>
<p>now orted 3 decides to handle fd 15 (depend on random() of libevent ...)
<br>
mca_oob_tcp_recv_handler will call mca_oob_tcp_peer_recv_connect_ack
<br>
that will call tcp_peer_recv_blocking
<br>
recv(15, ...) will return 0 /* orted 2 did not invoke
<br>
mca_oob_tcp_send_handler yet)
<br>
then mca_oob_tcp_peer_close will set peer-&gt;state = MCA_OOB_TCP_CLOSED
<br>
and mca_oob_tcp_peer_recv_connect_ack will *not* invoke retry()
<br>
<p>now orted 3 accepts the conection from orted 2 (fd=17 in my environment)
<br>
it will successfully read the connection request, and write its ack and set
<br>
peer-&gt;state = MCA_OOB_TCP_CONNECTED
<br>
<p>/* in my previous email, i was surprised the write did not fail.
<br>
on second thought, this is not so surprising : depending on the timing,
<br>
orted 3 might not be aware that orted 2 closed the other end of the socket.
<br>
bottom line, we cannot reliably expect write would fail in all cases */
<br>
<p>the following write to fd=17 will fail and because the state is
<br>
MCA_OOB_TCP_CONNECTED, the result is either a hang (the message from rml is
<br>
never sent) or an abort of orted.
<br>
<p><p>a possible fix is to ensure retry() is invoked on orted 3 by
<br>
mca_oob_tcp_peer_recv_connect_ack when peer-&gt;state is MCA_OOB_TCP_CLOSED
<br>
<p>an other possible fix is to add a new state to the sequence :
<br>
orted 3 move peer-&gt;state to MCA_OOB_TCP_CONNECTED when it receives a ack
<br>
from orted 2 (and not when it sends its ack to orted 2)
<br>
<p>or something i did not think of yet ...
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Fri, Sep 19, 2014 at 8:06 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i found an other race condition.
</span><br>
<span class="quotelev1">&gt; in a very specific scenario, vpid3 is in the MCA_OOB_TCP_CLOSED state,
</span><br>
<span class="quotelev1">&gt; and processes data from the socket received from vpid 2
</span><br>
<span class="quotelev1">&gt; vpid3 is in the MCA_OOB_TCP_CLOSED state because vpid2 called retry()
</span><br>
<span class="quotelev1">&gt; and closed all its both sockets to vpid 3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; vpid3 read the ack data that was send to the socket (ok) and then ends
</span><br>
<span class="quotelev1">&gt; up calling tcp_peer_send_blocking
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Function
</span><br>
<span class="quotelev1">&gt; main (orted.c:62)
</span><br>
<span class="quotelev1">&gt;   orte_daemon (orted_main.c:828)
</span><br>
<span class="quotelev1">&gt;     opal_libevent2021_event_base_loop (event.c:1645)
</span><br>
<span class="quotelev1">&gt;       event_process_active (event.c:1437)
</span><br>
<span class="quotelev1">&gt;         event_process_active_single_queue (event.c:1367)
</span><br>
<span class="quotelev1">&gt;           recv_handler (oob_tcp.c:599)
</span><br>
<span class="quotelev1">&gt;             mca_oob_tcp_peer_accept (oob_tcp_connection.c:1071)
</span><br>
<span class="quotelev1">&gt;               tcp_peer_send_connect_ack (oob_tcp_connection.c:384)
</span><br>
<span class="quotelev1">&gt;                 tcp_peer_send_blocking (oob_tcp_connection.c:525)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; though the socket (fd 17) is my case has been closed by the peer, and is
</span><br>
<span class="quotelev1">&gt; hence reported in the CLOSE_WAIT state by lsof,
</span><br>
<span class="quotelev1">&gt; send(17, ...) is a success (!!!)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i thought the root cause was we previously set the O_NONBLOCK flag to
</span><br>
<span class="quotelev1">&gt; this socket.
</span><br>
<span class="quotelev1">&gt; so i explicitly cleared this flag (that was not set anyway...), before
</span><br>
<span class="quotelev1">&gt; invoking mca_oob_tcp_peer_accept
</span><br>
<span class="quotelev1">&gt; but i got the very same behaviour :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; could you please advise :
</span><br>
<span class="quotelev1">&gt; - should the send fail because the socket is in the CLOSE_WAIT state ?
</span><br>
<span class="quotelev1">&gt; - if a success is not a bad behaviour, does this mean an other step
</span><br>
<span class="quotelev1">&gt; should be added to the oob/tcp &quot;handshake&quot; ?
</span><br>
<span class="quotelev1">&gt; - or could this mean that when the peer state was moved from
</span><br>
<span class="quotelev1">&gt; MCA_OOB_TCP_CONNECT_ACK to MCA_OOB_TCP_CLOSED,
</span><br>
<span class="quotelev1">&gt; retry() should have been invoked ?
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
<span class="quotelev1">&gt; On 2014/09/18 17:02, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; The patch looks fine to me - please go ahead and apply it. Thanks!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 17, 2014, at 11:35 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; yes and no ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpi hello world with four nodes can be used to reproduce the issue,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; you can increase the likelyhood of producing the race condition by
</span><br>
<span class="quotelev1">&gt; hacking
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./opal/mca/event/libevent2021/libevent/poll.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and replace
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        i = random() % nfds;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; with
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       if (nfds &lt; 2) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           i = 0;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       } else {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           i = nfds - 2;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; but since this is really a race condition, all i could do is show you
</span><br>
<span class="quotelev3">&gt; &gt;&gt; how to use a debugger in order to force it
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; here is what really happens :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - thanks to your patch, when vpid 2 cannot read the acknowledge, this is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; no more a fatal error.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - that being said, the peer-&gt;recv_event is not removed from the libevent
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - later, send_event will be added to the libevent
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - and then peer-&gt;recv_event will be added to the libevent
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /* this is clearly not supported, and the interesting behaviour is that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; peer-&gt;send_event will be kicked out of libevent (!) */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The attached patch fixes this race condition, could you please review
</span><br>
<span class="quotelev1">&gt; it ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 2014/09/17 22:17, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Do you have a reproducer you can share for testing this? I'm unable to
</span><br>
<span class="quotelev1">&gt; get it to happen on my machine, but maybe you have a test code that
</span><br>
<span class="quotelev1">&gt; triggers it so I can continue debugging
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Sep 17, 2014, at 4:07 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thanks Ralph,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; this is much better but there is still a bug :
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; with the very same scenario i described earlier, vpid 2 does not send
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; its message to vpid 3 once the connection has been established.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; i tried to debug it but i have been pretty unsuccessful so far ..
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; vpid 2 calls tcp_peer_connected and execute the following snippet
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; if (NULL != peer-&gt;send_msg &amp;&amp; !peer-&gt;send_ev_active) {
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       opal_event_add(&amp;peer-&gt;send_event, 0);
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       peer-&gt;send_ev_active = true;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   }
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; but when evmap_io_active is invoked later, the following part :
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   TAILQ_FOREACH(ev, &amp;ctx-&gt;events, ev_io_next) {
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;       if (ev-&gt;ev_events &amp; events)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;           event_active_nolock(ev, ev-&gt;ev_events &amp; events, 1);
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   }
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; finds only one ev (mca_oob_tcp_recv_handler and *no*
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mca_oob_tcp_send_handler)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; i will resume my investigations tomorrow
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On 2014/09/17 4:01, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hi Gilles
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I took a crack at solving this in r32744 - CMRd it for 1.8.3 and
</span><br>
<span class="quotelev1">&gt; assigned it to you for review. Give it a try and let me know if I
</span><br>
<span class="quotelev1">&gt; (hopefully) got it.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; The approach we have used in the past is to have both sides close
</span><br>
<span class="quotelev1">&gt; their connections, and then have the higher vpid retry while the lower one
</span><br>
<span class="quotelev1">&gt; waits. The logic for that was still in place, but it looks like you are
</span><br>
<span class="quotelev1">&gt; hitting a different code path, and I found another potential one as well.
</span><br>
<span class="quotelev1">&gt; So I think I plugged the holes, but will wait to hear if you confirm.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Sep 16, 2014, at 6:27 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; here is the full description of a race condition in oob/tcp i very
</span><br>
<span class="quotelev1">&gt; briefly mentionned in a previous post :
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; the race condition can occur when two not connected orted try to
</span><br>
<span class="quotelev1">&gt; send a message to each other for the first time and at the same time.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; that can occur when running mpi helloworld on 4 nodes with the
</span><br>
<span class="quotelev1">&gt; grpcomm/rcd module.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; here is a scenario in which the race condition occurs :
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; orted vpid 2 and 3 enter the allgather
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; /* they are not orte yet oob/tcp connected*/
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; and they call orte.send_buffer_nb each other.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; from a libevent point of view, vpid 2 and 3 will call
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_peer_try_connect
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; vpid 2 calls mca_oob_tcp_send_handler
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; vpid 3 calls connection_event_handler
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; depending on the value returned by random() in libevent, vpid 3 will
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; either call mca_oob_tcp_send_handler (likely) or recv_handler
</span><br>
<span class="quotelev1">&gt; (unlikely)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; if vpid 3 calls recv_handler, it will close the two sockets to vpid
</span><br>
<span class="quotelev1">&gt; 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; then vpid 2 will call mca_oob_tcp_recv_handler
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; (peer-&gt;state is MCA_OOB_TCP_CONNECT_ACK)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; that will invoke mca_oob_tcp_recv_connect_ack
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; tcp_peer_recv_blocking will fail
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; /* zero bytes are recv'ed since vpid 3 previously closed the socket
</span><br>
<span class="quotelev1">&gt; before writing a header */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; and this is handled by mca_oob_tcp_recv_handler as a fatal error
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; /* ORTE_FORCED_TERMINATE(1) */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; could you please have a look at it ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; if you are too busy, could you please advise where this scenario
</span><br>
<span class="quotelev1">&gt; should be handled differently ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; - should vpid 3 keep one socket instead of closing both and
</span><br>
<span class="quotelev1">&gt; retrying ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; - should vpid 2 handle the failure as a non fatal error ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15836.php">http://www.open-mpi.org/community/lists/devel/2014/09/15836.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15844.php">http://www.open-mpi.org/community/lists/devel/2014/09/15844.php</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15854.php">http://www.open-mpi.org/community/lists/devel/2014/09/15854.php</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15855.php">http://www.open-mpi.org/community/lists/devel/2014/09/15855.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;oob_tcp.patch&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15862.php">http://www.open-mpi.org/community/lists/devel/2014/09/15862.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15863.php">http://www.open-mpi.org/community/lists/devel/2014/09/15863.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15880.php">http://www.open-mpi.org/community/lists/devel/2014/09/15880.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15882/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15883.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Previous message:</strong> <a href="15881.php">Ralph Castain: "Re: [OMPI devel] v1.8 does not compile any more"</a>
<li><strong>In reply to:</strong> <a href="15880.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15883.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Reply:</strong> <a href="15883.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
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
