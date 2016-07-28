<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 10 18:15:27 2007" -->
<!-- isoreceived="20070510221527" -->
<!-- sent="Thu, 10 May 2007 17:15:23 -0500" -->
<!-- isosent="20070510221523" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI over ofed udapl over iwarp" -->
<!-- id="1178835323.1519.129.camel_at_stevo-desktop" -->
<!-- inreplyto="1178740498.382.97.camel_at_stevo-desktop" -->
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
<strong>Date:</strong> 2007-05-10 18:15:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1535.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Previous message:</strong> <a href="1533.php">Gleb Natapov: "Re: [OMPI devel] [ofa-general] Re: [ewg] Re: Re: OMPI over ofed	udapl -	bugs	opened"</a>
<li><strong>In reply to:</strong> <a href="1504.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1535.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Reply:</strong> <a href="1535.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Reply:</strong> <a href="1536.php">Jeff Squyres: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are two new issues so far:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) this has uncovered a connection migration issue in the Chelsio
</span><br>
<span class="quotelev1">&gt; driver/firmware.  We are developing and testing a fix for this now.
</span><br>
<span class="quotelev1">&gt; Should be ready tomorrow hopefully.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I have a fix for the above issue and I can continue with OMPI testing.
<br>
<p>To work around the client-must-send issue, I put a nice fat sleep in the
<br>
udapl btl right after it calls dat_cr_accept(), in
<br>
mca_btl_udapl_accept_connect().  This, however, exposes another issue
<br>
with the udapl btl:
<br>
<p>Neither the client nor the server side of the udapl btl connection setup
<br>
pre-post RECV buffers before connecting.  This can allow a SEND to
<br>
arrive before a RECV buffer is available.  I _think_ IB will handle this
<br>
issue by retransmitting the SEND.  Chelsio's iWARP device, however,
<br>
TERMINATEs the connection.  My sleep() makes this condition happen every
<br>
time.  
<br>
<p><span class="quotelev1">&gt;From what I can tell, the udapl btl exchanges memory info as a first
</span><br>
order of business after connection establishment
<br>
(mba_btl_udapl_sendrecv().  The RECV buffer post for this exchange,
<br>
however, should really be done _before_ the dat_ep_connect() on the
<br>
active side, and _before_ the dat_cr_accept() on the server side.
<br>
Currently its done after the ESTABLISHED event is dequeued, thus
<br>
allowing the race condition.
<br>
<p>I believe the rules are the ULP must ensure that a RECV is posted before
<br>
the client can post a SEND for that buffer.  And further, the ULP must
<br>
enforce flow control somehow so that a SEND never arrives without a RECV
<br>
buffer being available.
<br>
<p>Perhaps this is just a bug and I opened it up with my sleep()
<br>
<p>Or is the uDAPL btl assuming the transport will deal with lack of RECV
<br>
buffer at the time a SEND arrives?
<br>
<p>Also: Given there is a message exchange _always_ after connection setup,
<br>
then we can change that exchange to support the client-must-send-first
<br>
issue...
<br>
<p><p>Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1535.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Previous message:</strong> <a href="1533.php">Gleb Natapov: "Re: [OMPI devel] [ofa-general] Re: [ewg] Re: Re: OMPI over ofed	udapl -	bugs	opened"</a>
<li><strong>In reply to:</strong> <a href="1504.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1535.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Reply:</strong> <a href="1535.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Reply:</strong> <a href="1536.php">Jeff Squyres: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
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
