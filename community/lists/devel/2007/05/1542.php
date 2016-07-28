<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 11 14:53:58 2007" -->
<!-- isoreceived="20070511185358" -->
<!-- sent="Fri, 11 May 2007 12:53:39 -0600" -->
<!-- isosent="20070511185339" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI over ofed udapl over iwarp" -->
<!-- id="9E60FC4A-187D-4D10-B1FD-0BD5A5688D7D_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1178896305.419.36.camel_at_stevo-desktop" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-11 14:53:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1543.php">Paul H. Hargrove: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Previous message:</strong> <a href="1541.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>In reply to:</strong> <a href="1539.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1540.php">Ethan Mallove: "[OMPI devel] MTT for developers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More like trying to work around the race condition that exists:  The
</span><br>
<span class="quotelev1">&gt; server side sends an rdma message first thus violating the iwarp
</span><br>
<span class="quotelev1">&gt; protocol.  For those who want the gory details:  when the server sends
</span><br>
<span class="quotelev1">&gt; first -and- that rdma message arrives at the client _before_ the  
</span><br>
<span class="quotelev1">&gt; client
</span><br>
<span class="quotelev1">&gt; transitions into rdma mode, then that rdma message gets passed up  
</span><br>
<span class="quotelev1">&gt; to the
</span><br>
<span class="quotelev1">&gt; host driver as streaming mode data.  So when I originally ran OMPI/ 
</span><br>
<span class="quotelev1">&gt; udapl
</span><br>
<span class="quotelev1">&gt; on chelsio's rnic, the client actually received the mpa start response
</span><br>
<span class="quotelev1">&gt; -and- the first fpdu from the server while still in streaming mode.
</span><br>
<span class="quotelev1">&gt; This results in a connection abort because it violates the mpa startup
</span><br>
<span class="quotelev1">&gt; protocol...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I would recommend making a state transition diagram of the lazy  
<br>
connection establishment. I did this during implementation of the  
<br>
Open IB BTL. Of course, I threw it out as soon as the code was  
<br>
committed :-).
<br>
This shouldn't take very long and then you can simply modify the  
<br>
state diagram to prevent these race conditions, perhaps identifying  
<br>
an existing state where you can post any buffers that you need. Don't  
<br>
forget to throw away the state diagram as soon as the code is  
<br>
committed ;-).
<br>
<p>- Galen
<br>
<p><p><p><span class="quotelev1">&gt; By causing the server to sleep just after accepting the connection, I
</span><br>
<span class="quotelev1">&gt; give the client time to transition into rdma mode...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It was just a hack to continue testing OMPI/udapl/chelsio.  And it
</span><br>
<span class="quotelev1">&gt; revealed the problem being discussed in this thread:  OMPI udapl btl
</span><br>
<span class="quotelev1">&gt; doesn't pre-post the recvs for the sendrecv exchange.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Neither the client nor the server side of the udapl btl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; connection setup pre-post RECV buffers before connecting.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This can allow a SEND to arrive before a RECV buffer is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available.  I _think_ IB will handle this issue by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; retransmitting the SEND.  Chelsio's iWARP device, however,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; TERMINATEs the connection.  My sleep() makes this condition
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; happen every time.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A compliant DAPL program also ensures that there are adequate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; receive buffers in place before the remote peer Sends. It is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; explicitly noted that failure to follow this real will invoke
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a transport/device dependent penalty. It may be that the sendq
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will be fenced, or it may be that the connection will be terminated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So any RDMA BTL should pre-post recv buffers before initiating or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; accepting a connection.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I know of no udapl restiction saying a recv must be posted before  
</span><br>
<span class="quotelev2">&gt;&gt; a send.
</span><br>
<span class="quotelev2">&gt;&gt; And yes we do pre post recv buffers but since the BTL creates 2
</span><br>
<span class="quotelev2">&gt;&gt; connections per peer, one for eager size messages and one for max  
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; messages the BTL needs to know which connection the current  
</span><br>
<span class="quotelev2">&gt;&gt; endpoint is
</span><br>
<span class="quotelev2">&gt;&gt; to service so that it can post the proper size recv buffer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, I agree in theory the btl could potentially post the recv which
</span><br>
<span class="quotelev2">&gt;&gt; currently occurs in mca_btl_udapl_sendrecv before the connect or  
</span><br>
<span class="quotelev2">&gt;&gt; accept
</span><br>
<span class="quotelev2">&gt;&gt; but I think in practise we had issue doing this and we had to wait  
</span><br>
<span class="quotelev2">&gt;&gt; until
</span><br>
<span class="quotelev2">&gt;&gt; a DAT_CONNECTION_EVENT_ESTABLISHED was received.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well I'm trying it now.  It should work.  If it doesn't, then dapl or
</span><br>
<span class="quotelev1">&gt; the underlying providers are broken.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From what I can tell, the udapl btl exchanges memory info as a  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; first
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; order of business after connection establishment
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (mba_btl_udapl_sendrecv().  The RECV buffer post for this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exchange, however, should really be done _before_ the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dat_ep_connect() on the active side, and _before_ the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dat_cr_accept() on the server side.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Currently its done after the ESTABLISHED event is dequeued,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thus allowing the race condition.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I believe the rules are the ULP must ensure that a RECV is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; posted before the client can post a SEND for that buffer.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And further, the ULP must enforce flow control somehow so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that a SEND never arrives without a RECV buffer being available.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; maybe this is a rule iwarp imposes on its ULPs but not uDAPL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Perhaps this is just a bug and I opened it up with my sleep()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Or is the uDAPL btl assuming the transport will deal with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lack of RECV buffer at the time a SEND arrives?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There may be a race condition here but you really have to try hard to
</span><br>
<span class="quotelev2">&gt;&gt; see it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree its a small race condition that I made very large by my
</span><br>
<span class="quotelev1">&gt; sleep! :-)  But I can kill 2 birds with one stone here:  I'm  
</span><br>
<span class="quotelev1">&gt; testing now
</span><br>
<span class="quotelev1">&gt; a change to the sendrecv exchange to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) prepost the recvs just after dat_ep_create
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) force the side that issues the dat_ep_connect to send its addr-data
</span><br>
<span class="quotelev1">&gt; first
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) force the side that issues the dat_cr_accept to wait for the send
</span><br>
<span class="quotelev1">&gt; from the peer, then post its addr-data send
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will plug both race conditions.  I'll post the patch once I debug
</span><br>
<span class="quotelev1">&gt; it and we can discuss if you thinks a good solution and/or if it work
</span><br>
<span class="quotelev1">&gt; for solaris udapl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  From Steve  previously.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Also: Given there is a message exchange _always_ after connection
</span><br>
<span class="quotelev2">&gt;&gt; setup, then we can change that exchange to support the
</span><br>
<span class="quotelev2">&gt;&gt; client-must-send-first issue...&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I agree I am sure we can do something but if it includes an  
</span><br>
<span class="quotelev2">&gt;&gt; additional
</span><br>
<span class="quotelev2">&gt;&gt; message we should consider a mca parameter to govern this because the
</span><br>
<span class="quotelev2">&gt;&gt; connection wireup is already costly enough.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It won't add an additional message.  Stay tuned for a patch!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Steve.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1543.php">Paul H. Hargrove: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Previous message:</strong> <a href="1541.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>In reply to:</strong> <a href="1539.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1540.php">Ethan Mallove: "[OMPI devel] MTT for developers"</a>
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
