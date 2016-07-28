<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 10 23:11:09 2007" -->
<!-- isoreceived="20070511031109" -->
<!-- sent="Thu, 10 May 2007 23:10:58 -0400" -->
<!-- isosent="20070511031058" -->
<!-- name="Donald Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI over ofed udapl over iwarp" -->
<!-- id="4643DEC2.8060905_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1EF1E44200D82B47BD5BA61171E8CE9D03C33686_at_NT-IRVA-0750.brcm.ad.broadcom.com" -->
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
<strong>From:</strong> Donald Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-10 23:10:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1538.php">Peter Kjellstrom: "Re: [OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<li><strong>Previous message:</strong> <a href="1536.php">Jeff Squyres: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>In reply to:</strong> <a href="1535.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1539.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Reply:</strong> <a href="1539.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Reply:</strong> <a href="1540.php">Ethan Mallove: "[OMPI devel] MTT for developers"</a>
<li><strong>Reply:</strong> <a href="1541.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Caitlin Bestler wrote:
<br>
<p><span class="quotelev1">&gt;devel-bounces_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;There are two new issues so far:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;1) this has uncovered a connection migration issue in the Chelsio
</span><br>
<span class="quotelev3">&gt;&gt;&gt;driver/firmware.  We are developing and testing a fix for this now.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Should be ready tomorrow hopefully.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I have a fix for the above issue and I can continue with OMPI testing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;To work around the client-must-send issue, I put a nice fat
</span><br>
<span class="quotelev2">&gt;&gt;sleep in the udapl btl right after it calls dat_cr_accept(),
</span><br>
<span class="quotelev2">&gt;&gt;in mca_btl_udapl_accept_connect().  This, however, exposes
</span><br>
<span class="quotelev2">&gt;&gt;another issue with the udapl btl:
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
sleeping after accept? What are you trying to do here force a race 
<br>
condition?
<br>
<p><span class="quotelev2">&gt;&gt;Neither the client nor the server side of the udapl btl
</span><br>
<span class="quotelev2">&gt;&gt;connection setup pre-post RECV buffers before connecting.
</span><br>
<span class="quotelev2">&gt;&gt;This can allow a SEND to arrive before a RECV buffer is
</span><br>
<span class="quotelev2">&gt;&gt;available.  I _think_ IB will handle this issue by
</span><br>
<span class="quotelev2">&gt;&gt;retransmitting the SEND.  Chelsio's iWARP device, however,
</span><br>
<span class="quotelev2">&gt;&gt;TERMINATEs the connection.  My sleep() makes this condition
</span><br>
<span class="quotelev2">&gt;&gt;happen every time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;A compliant DAPL program also ensures that there are adequate
</span><br>
<span class="quotelev1">&gt;receive buffers in place before the remote peer Sends. It is
</span><br>
<span class="quotelev1">&gt;explicitly noted that failure to follow this real will invoke
</span><br>
<span class="quotelev1">&gt;a transport/device dependent penalty. It may be that the sendq
</span><br>
<span class="quotelev1">&gt;will be fenced, or it may be that the connection will be terminated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;So any RDMA BTL should pre-post recv buffers before initiating or
</span><br>
<span class="quotelev1">&gt;accepting a connection.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
I know of no udapl restiction saying a recv must be posted before a send.
<br>
And yes we do pre post recv buffers but since the BTL creates 2 
<br>
connections per peer, one for eager size messages and one for max size 
<br>
messages the BTL needs to know which connection the current endpoint is 
<br>
to service so that it can post the proper size recv buffer.
<br>
<p>Also, I agree in theory the btl could potentially post the recv which 
<br>
currently occurs in mca_btl_udapl_sendrecv before the connect or accept 
<br>
but I think in practise we had issue doing this and we had to wait until 
<br>
a DAT_CONNECTION_EVENT_ESTABLISHED was received.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;From what I can tell, the udapl btl exchanges memory info as a first
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;order of business after connection establishment
</span><br>
<span class="quotelev2">&gt;&gt;(mba_btl_udapl_sendrecv().  The RECV buffer post for this
</span><br>
<span class="quotelev2">&gt;&gt;exchange, however, should really be done _before_ the
</span><br>
<span class="quotelev2">&gt;&gt;dat_ep_connect() on the active side, and _before_ the
</span><br>
<span class="quotelev2">&gt;&gt;dat_cr_accept() on the server side.
</span><br>
<span class="quotelev2">&gt;&gt;Currently its done after the ESTABLISHED event is dequeued,
</span><br>
<span class="quotelev2">&gt;&gt;thus allowing the race condition.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I believe the rules are the ULP must ensure that a RECV is
</span><br>
<span class="quotelev2">&gt;&gt;posted before the client can post a SEND for that buffer.
</span><br>
<span class="quotelev2">&gt;&gt;And further, the ULP must enforce flow control somehow so
</span><br>
<span class="quotelev2">&gt;&gt;that a SEND never arrives without a RECV buffer being available.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
maybe this is a rule iwarp imposes on its ULPs but not uDAPL.
<br>
<p><span class="quotelev2">&gt;&gt;Perhaps this is just a bug and I opened it up with my sleep()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Or is the uDAPL btl assuming the transport will deal with
</span><br>
<span class="quotelev2">&gt;&gt;lack of RECV buffer at the time a SEND arrives?
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
There may be a race condition here but you really have to try hard to 
<br>
see it.
<br>
<p>&nbsp;From Steve  previously.
<br>
&quot;Also: Given there is a message exchange _always_ after connection 
<br>
setup, then we can change that exchange to support the 
<br>
client-must-send-first issue...&quot;
<br>
<p>I agree I am sure we can do something but if it includes an additional 
<br>
message we should consider a mca parameter to govern this because the 
<br>
connection wireup is already costly enough.
<br>
<p>-DON
<br>
<p><p><span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;No. uDAPL *allows* a provider to compensate for this through
</span><br>
<span class="quotelev1">&gt;unspecified means, but the application MUST NOT rely on it
</span><br>
<span class="quotelev1">&gt;(on the flip side the application MUST NOT rely on any
</span><br>
<span class="quotelev1">&gt;mistake generating a fault. That's akin to relying on
</span><br>
<span class="quotelev1">&gt;a state trooper pulling you over when you exceed the
</span><br>
<span class="quotelev1">&gt;speed limit. It is always possible that your application
</span><br>
<span class="quotelev1">&gt;has too many buffers in flight but this is never detected
</span><br>
<span class="quotelev1">&gt;because the new buffers are posted before the messages
</span><br>
<span class="quotelev1">&gt;actually arrive. Your not supposed to do that, but you
</span><br>
<span class="quotelev1">&gt;have a good chance of getting away with it).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;As a general rule DAPL *never* requires a provider to
</span><br>
<span class="quotelev1">&gt;check anything that the provider does not need to check
</span><br>
<span class="quotelev1">&gt;on its own (other than memory access rights). So typically
</span><br>
<span class="quotelev1">&gt;the provider will complain about too many buffers when it
</span><br>
<span class="quotelev1">&gt;actually runs out of buffers, not when the application's
</span><br>
<span class="quotelev1">&gt;end-to-end credits are theoretically negative. A &quot;fast
</span><br>
<span class="quotelev1">&gt;path&quot; interface becomes a lot less so if every work 
</span><br>
<span class="quotelev1">&gt;request is validated dynamically against every relevant
</span><br>
<span class="quotelev1">&gt;restriction.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1538.php">Peter Kjellstrom: "Re: [OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<li><strong>Previous message:</strong> <a href="1536.php">Jeff Squyres: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>In reply to:</strong> <a href="1535.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1539.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Reply:</strong> <a href="1539.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Reply:</strong> <a href="1540.php">Ethan Mallove: "[OMPI devel] MTT for developers"</a>
<li><strong>Reply:</strong> <a href="1541.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
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
