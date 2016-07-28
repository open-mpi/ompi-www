<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 10 19:08:57 2007" -->
<!-- isoreceived="20070510230857" -->
<!-- sent="Thu, 10 May 2007 16:08:14 -0700" -->
<!-- isosent="20070510230814" -->
<!-- name="Caitlin Bestler" -->
<!-- email="caitlinb_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI over ofed udapl over iwarp" -->
<!-- id="1EF1E44200D82B47BD5BA61171E8CE9D03C33686_at_NT-IRVA-0750.brcm.ad.broadcom.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1178835323.1519.129.camel_at_stevo-desktop" -->
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
<strong>From:</strong> Caitlin Bestler (<em>caitlinb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-10 19:08:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1536.php">Jeff Squyres: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Previous message:</strong> <a href="1534.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>In reply to:</strong> <a href="1534.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1537.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Reply:</strong> <a href="1537.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
devel-bounces_at_[hidden] wrote:
<br>
<span class="quotelev2">&gt;&gt; There are two new issues so far:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1) this has uncovered a connection migration issue in the Chelsio
</span><br>
<span class="quotelev2">&gt;&gt; driver/firmware.  We are developing and testing a fix for this now.
</span><br>
<span class="quotelev2">&gt;&gt; Should be ready tomorrow hopefully.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a fix for the above issue and I can continue with OMPI testing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To work around the client-must-send issue, I put a nice fat
</span><br>
<span class="quotelev1">&gt; sleep in the udapl btl right after it calls dat_cr_accept(),
</span><br>
<span class="quotelev1">&gt; in mca_btl_udapl_accept_connect().  This, however, exposes
</span><br>
<span class="quotelev1">&gt; another issue with the udapl btl:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Neither the client nor the server side of the udapl btl
</span><br>
<span class="quotelev1">&gt; connection setup pre-post RECV buffers before connecting.
</span><br>
<span class="quotelev1">&gt; This can allow a SEND to arrive before a RECV buffer is
</span><br>
<span class="quotelev1">&gt; available.  I _think_ IB will handle this issue by
</span><br>
<span class="quotelev1">&gt; retransmitting the SEND.  Chelsio's iWARP device, however,
</span><br>
<span class="quotelev1">&gt; TERMINATEs the connection.  My sleep() makes this condition
</span><br>
<span class="quotelev1">&gt; happen every time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>A compliant DAPL program also ensures that there are adequate
<br>
receive buffers in place before the remote peer Sends. It is
<br>
explicitly noted that failure to follow this real will invoke
<br>
a transport/device dependent penalty. It may be that the sendq
<br>
will be fenced, or it may be that the connection will be terminated.
<br>
<p>So any RDMA BTL should pre-post recv buffers before initiating or
<br>
accepting a connection.
<br>
<p><p><p><span class="quotelev2">&gt;&gt; From what I can tell, the udapl btl exchanges memory info as a first
</span><br>
<span class="quotelev1">&gt; order of business after connection establishment
</span><br>
<span class="quotelev1">&gt; (mba_btl_udapl_sendrecv().  The RECV buffer post for this
</span><br>
<span class="quotelev1">&gt; exchange, however, should really be done _before_ the
</span><br>
<span class="quotelev1">&gt; dat_ep_connect() on the active side, and _before_ the
</span><br>
<span class="quotelev1">&gt; dat_cr_accept() on the server side.
</span><br>
<span class="quotelev1">&gt; Currently its done after the ESTABLISHED event is dequeued,
</span><br>
<span class="quotelev1">&gt; thus allowing the race condition.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe the rules are the ULP must ensure that a RECV is
</span><br>
<span class="quotelev1">&gt; posted before the client can post a SEND for that buffer.
</span><br>
<span class="quotelev1">&gt; And further, the ULP must enforce flow control somehow so
</span><br>
<span class="quotelev1">&gt; that a SEND never arrives without a RECV buffer being available.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps this is just a bug and I opened it up with my sleep()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or is the uDAPL btl assuming the transport will deal with
</span><br>
<span class="quotelev1">&gt; lack of RECV buffer at the time a SEND arrives?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>No. uDAPL *allows* a provider to compensate for this through
<br>
unspecified means, but the application MUST NOT rely on it
<br>
(on the flip side the application MUST NOT rely on any
<br>
mistake generating a fault. That's akin to relying on
<br>
a state trooper pulling you over when you exceed the
<br>
speed limit. It is always possible that your application
<br>
has too many buffers in flight but this is never detected
<br>
because the new buffers are posted before the messages
<br>
actually arrive. Your not supposed to do that, but you
<br>
have a good chance of getting away with it).
<br>
<p>As a general rule DAPL *never* requires a provider to
<br>
check anything that the provider does not need to check
<br>
on its own (other than memory access rights). So typically
<br>
the provider will complain about too many buffers when it
<br>
actually runs out of buffers, not when the application's
<br>
end-to-end credits are theoretically negative. A &quot;fast
<br>
path&quot; interface becomes a lot less so if every work 
<br>
request is validated dynamically against every relevant
<br>
restriction.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1536.php">Jeff Squyres: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Previous message:</strong> <a href="1534.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>In reply to:</strong> <a href="1534.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1537.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Reply:</strong> <a href="1537.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
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
