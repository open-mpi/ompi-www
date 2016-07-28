<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 10 19:12:22 2007" -->
<!-- isoreceived="20070510231222" -->
<!-- sent="Thu, 10 May 2007 19:12:10 -0400" -->
<!-- isosent="20070510231210" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI over ofed udapl over iwarp" -->
<!-- id="54E8E7CD-998A-431A-A9EE-02AE7589D09B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-10 19:12:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1537.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Previous message:</strong> <a href="1535.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>In reply to:</strong> <a href="1534.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Steve --
<br>
<p>Can you file a trac bug about this?
<br>
<p><p>On May 10, 2007, at 6:15 PM, Steve Wise wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
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
<span class="quotelev1">&gt; To work around the client-must-send issue, I put a nice fat sleep  
</span><br>
<span class="quotelev1">&gt; in the
</span><br>
<span class="quotelev1">&gt; udapl btl right after it calls dat_cr_accept(), in
</span><br>
<span class="quotelev1">&gt; mca_btl_udapl_accept_connect().  This, however, exposes another issue
</span><br>
<span class="quotelev1">&gt; with the udapl btl:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Neither the client nor the server side of the udapl btl connection  
</span><br>
<span class="quotelev1">&gt; setup
</span><br>
<span class="quotelev1">&gt; pre-post RECV buffers before connecting.  This can allow a SEND to
</span><br>
<span class="quotelev1">&gt; arrive before a RECV buffer is available.  I _think_ IB will handle  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; issue by retransmitting the SEND.  Chelsio's iWARP device, however,
</span><br>
<span class="quotelev1">&gt; TERMINATEs the connection.  My sleep() makes this condition happen  
</span><br>
<span class="quotelev1">&gt; every
</span><br>
<span class="quotelev1">&gt; time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From what I can tell, the udapl btl exchanges memory info as a first
</span><br>
<span class="quotelev1">&gt; order of business after connection establishment
</span><br>
<span class="quotelev1">&gt; (mba_btl_udapl_sendrecv().  The RECV buffer post for this exchange,
</span><br>
<span class="quotelev1">&gt; however, should really be done _before_ the dat_ep_connect() on the
</span><br>
<span class="quotelev1">&gt; active side, and _before_ the dat_cr_accept() on the server side.
</span><br>
<span class="quotelev1">&gt; Currently its done after the ESTABLISHED event is dequeued, thus
</span><br>
<span class="quotelev1">&gt; allowing the race condition.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe the rules are the ULP must ensure that a RECV is posted  
</span><br>
<span class="quotelev1">&gt; before
</span><br>
<span class="quotelev1">&gt; the client can post a SEND for that buffer.  And further, the ULP must
</span><br>
<span class="quotelev1">&gt; enforce flow control somehow so that a SEND never arrives without a  
</span><br>
<span class="quotelev1">&gt; RECV
</span><br>
<span class="quotelev1">&gt; buffer being available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps this is just a bug and I opened it up with my sleep()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or is the uDAPL btl assuming the transport will deal with lack of RECV
</span><br>
<span class="quotelev1">&gt; buffer at the time a SEND arrives?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also: Given there is a message exchange _always_ after connection  
</span><br>
<span class="quotelev1">&gt; setup,
</span><br>
<span class="quotelev1">&gt; then we can change that exchange to support the client-must-send-first
</span><br>
<span class="quotelev1">&gt; issue...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Steve.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1537.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Previous message:</strong> <a href="1535.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>In reply to:</strong> <a href="1534.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- nextthread="start" -->
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
