<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 11 11:11:49 2007" -->
<!-- isoreceived="20070511151149" -->
<!-- sent="Fri, 11 May 2007 10:11:45 -0500" -->
<!-- isosent="20070511151145" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI over ofed udapl over iwarp" -->
<!-- id="1178896305.419.36.camel_at_stevo-desktop" -->
<!-- inreplyto="4643DEC2.8060905_at_Sun.COM" -->
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
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-11 11:11:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1540.php">Ethan Mallove: "[OMPI devel] MTT for developers"</a>
<li><strong>Previous message:</strong> <a href="1538.php">Peter Kjellstrom: "Re: [OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<li><strong>In reply to:</strong> <a href="1537.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1542.php">Galen Shipman: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Reply:</strong> <a href="1542.php">Galen Shipman: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2007-05-10 at 23:10 -0400, Donald Kerr wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Caitlin Bestler wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;devel-bounces_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;There are two new issues so far:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;1) this has uncovered a connection migration issue in the Chelsio
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;driver/firmware.  We are developing and testing a fix for this now.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Should be ready tomorrow hopefully.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;I have a fix for the above issue and I can continue with OMPI testing.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;To work around the client-must-send issue, I put a nice fat
</span><br>
<span class="quotelev3">&gt; &gt;&gt;sleep in the udapl btl right after it calls dat_cr_accept(),
</span><br>
<span class="quotelev3">&gt; &gt;&gt;in mca_btl_udapl_accept_connect().  This, however, exposes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;another issue with the udapl btl:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; sleeping after accept? What are you trying to do here force a race 
</span><br>
<span class="quotelev1">&gt; condition?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>More like trying to work around the race condition that exists:  The
<br>
server side sends an rdma message first thus violating the iwarp
<br>
protocol.  For those who want the gory details:  when the server sends
<br>
first -and- that rdma message arrives at the client _before_ the client
<br>
transitions into rdma mode, then that rdma message gets passed up to the
<br>
host driver as streaming mode data.  So when I originally ran OMPI/udapl
<br>
on chelsio's rnic, the client actually received the mpa start response
<br>
-and- the first fpdu from the server while still in streaming mode.
<br>
This results in a connection abort because it violates the mpa startup
<br>
protocol...
<br>
<p>By causing the server to sleep just after accepting the connection, I
<br>
give the client time to transition into rdma mode...
<br>
<p>It was just a hack to continue testing OMPI/udapl/chelsio.  And it
<br>
revealed the problem being discussed in this thread:  OMPI udapl btl
<br>
doesn't pre-post the recvs for the sendrecv exchange.
<br>
<p><p><span class="quotelev3">&gt; &gt;&gt;Neither the client nor the server side of the udapl btl
</span><br>
<span class="quotelev3">&gt; &gt;&gt;connection setup pre-post RECV buffers before connecting.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;This can allow a SEND to arrive before a RECV buffer is
</span><br>
<span class="quotelev3">&gt; &gt;&gt;available.  I _think_ IB will handle this issue by
</span><br>
<span class="quotelev3">&gt; &gt;&gt;retransmitting the SEND.  Chelsio's iWARP device, however,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;TERMINATEs the connection.  My sleep() makes this condition
</span><br>
<span class="quotelev3">&gt; &gt;&gt;happen every time.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;A compliant DAPL program also ensures that there are adequate
</span><br>
<span class="quotelev2">&gt; &gt;receive buffers in place before the remote peer Sends. It is
</span><br>
<span class="quotelev2">&gt; &gt;explicitly noted that failure to follow this real will invoke
</span><br>
<span class="quotelev2">&gt; &gt;a transport/device dependent penalty. It may be that the sendq
</span><br>
<span class="quotelev2">&gt; &gt;will be fenced, or it may be that the connection will be terminated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;So any RDMA BTL should pre-post recv buffers before initiating or
</span><br>
<span class="quotelev2">&gt; &gt;accepting a connection.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; I know of no udapl restiction saying a recv must be posted before a send.
</span><br>
<span class="quotelev1">&gt; And yes we do pre post recv buffers but since the BTL creates 2 
</span><br>
<span class="quotelev1">&gt; connections per peer, one for eager size messages and one for max size 
</span><br>
<span class="quotelev1">&gt; messages the BTL needs to know which connection the current endpoint is 
</span><br>
<span class="quotelev1">&gt; to service so that it can post the proper size recv buffer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, I agree in theory the btl could potentially post the recv which 
</span><br>
<span class="quotelev1">&gt; currently occurs in mca_btl_udapl_sendrecv before the connect or accept 
</span><br>
<span class="quotelev1">&gt; but I think in practise we had issue doing this and we had to wait until 
</span><br>
<span class="quotelev1">&gt; a DAT_CONNECTION_EVENT_ESTABLISHED was received.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Well I'm trying it now.  It should work.  If it doesn't, then dapl or
<br>
the underlying providers are broken.
<br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;From what I can tell, the udapl btl exchanges memory info as a first
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;order of business after connection establishment
</span><br>
<span class="quotelev3">&gt; &gt;&gt;(mba_btl_udapl_sendrecv().  The RECV buffer post for this
</span><br>
<span class="quotelev3">&gt; &gt;&gt;exchange, however, should really be done _before_ the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;dat_ep_connect() on the active side, and _before_ the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;dat_cr_accept() on the server side.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Currently its done after the ESTABLISHED event is dequeued,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;thus allowing the race condition.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;I believe the rules are the ULP must ensure that a RECV is
</span><br>
<span class="quotelev3">&gt; &gt;&gt;posted before the client can post a SEND for that buffer.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;And further, the ULP must enforce flow control somehow so
</span><br>
<span class="quotelev3">&gt; &gt;&gt;that a SEND never arrives without a RECV buffer being available.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; maybe this is a rule iwarp imposes on its ULPs but not uDAPL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Perhaps this is just a bug and I opened it up with my sleep()
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Or is the uDAPL btl assuming the transport will deal with
</span><br>
<span class="quotelev3">&gt; &gt;&gt;lack of RECV buffer at the time a SEND arrives?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; There may be a race condition here but you really have to try hard to 
</span><br>
<span class="quotelev1">&gt; see it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I agree its a small race condition that I made very large by my
<br>
sleep! :-)  But I can kill 2 birds with one stone here:  I'm testing now
<br>
a change to the sendrecv exchange to:
<br>
<p>1) prepost the recvs just after dat_ep_create
<br>
<p>2) force the side that issues the dat_ep_connect to send its addr-data
<br>
first
<br>
<p>3) force the side that issues the dat_cr_accept to wait for the send
<br>
from the peer, then post its addr-data send
<br>
<p>This will plug both race conditions.  I'll post the patch once I debug
<br>
it and we can discuss if you thinks a good solution and/or if it work
<br>
for solaris udapl.
<br>
<p><span class="quotelev1">&gt;  From Steve  previously.
</span><br>
<span class="quotelev1">&gt; &quot;Also: Given there is a message exchange _always_ after connection 
</span><br>
<span class="quotelev1">&gt; setup, then we can change that exchange to support the 
</span><br>
<span class="quotelev1">&gt; client-must-send-first issue...&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree I am sure we can do something but if it includes an additional 
</span><br>
<span class="quotelev1">&gt; message we should consider a mca parameter to govern this because the 
</span><br>
<span class="quotelev1">&gt; connection wireup is already costly enough.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>It won't add an additional message.  Stay tuned for a patch!
<br>
<p>Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1540.php">Ethan Mallove: "[OMPI devel] MTT for developers"</a>
<li><strong>Previous message:</strong> <a href="1538.php">Peter Kjellstrom: "Re: [OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<li><strong>In reply to:</strong> <a href="1537.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1542.php">Galen Shipman: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Reply:</strong> <a href="1542.php">Galen Shipman: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
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
