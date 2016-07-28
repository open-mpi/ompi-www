<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 14 10:39:47 2007" -->
<!-- isoreceived="20070514143947" -->
<!-- sent="Mon, 14 May 2007 09:39:41 -0500" -->
<!-- isosent="20070514143941" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI over ofed udapl over iwarp" -->
<!-- id="1179153581.25841.9.camel_at_stevo-desktop" -->
<!-- inreplyto="4647BAB8.90505_at_Sun.COM" -->
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
<strong>Date:</strong> 2007-05-14 10:39:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1548.php">Brian Barrett: "Re: [OMPI devel] Autotools Upgrade Time"</a>
<li><strong>Previous message:</strong> <a href="1546.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>In reply to:</strong> <a href="1546.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1536.php">Jeff Squyres: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, 2007-05-13 at 21:26 -0400, Donald Kerr wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Caitlin Bestler wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Donal Kerr wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;order of business after connection establishment
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;(mba_btl_udapl_sendrecv().  The RECV buffer post for this exchange,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;however, should really be done _before_ the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;dat_ep_connect() on the active side, and _before_ the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;dat_cr_accept() on the server side.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;Currently its done after the ESTABLISHED event is dequeued, thus
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;allowing the race condition. 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;I believe the rules are the ULP must ensure that a RECV is posted
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;before the client can post a SEND for that buffer.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;And further, the ULP must enforce flow control somehow so that a
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;SEND never arrives without a RECV buffer being available.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;maybe this is a rule iwarp imposes on its ULPs but not uDAPL.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;It is most assuredly a rule for uDAPL. And it is not a matter
</span><br>
<span class="quotelev2">&gt; &gt;of iWARP &quot;imposing&quot; on uDAPL. uDAPL was explicitly designed
</span><br>
<span class="quotelev2">&gt; &gt;to support IB, iWARP and VI. To do that DAPL documents its
</span><br>
<span class="quotelev2">&gt; &gt;model of what RDMA is.
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; (sorry I was off the grid for a couple of days)
</span><br>
<span class="quotelev1">&gt; Not to beat a dead horse but you would have to show me where in the Spec 
</span><br>
<span class="quotelev1">&gt; it says I must post a recv before a send.  And thinking about it some I 
</span><br>
<span class="quotelev1">&gt; don't believe there is a race condition because this is not called out 
</span><br>
<span class="quotelev1">&gt; as such. Now if posting the handshake recv before the connect call 
</span><br>
<span class="quotelev1">&gt; speeds things up and helps the iwarp scenario I am all for it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;This issue is in fact one that is truly fundamental to the
</span><br>
<span class="quotelev2">&gt; &gt;efficiency of RDMA -- the transport layer DOES NOT provide
</span><br>
<span class="quotelev2">&gt; &gt;buffering. That's the application's job. It is precisely
</span><br>
<span class="quotelev2">&gt; &gt;because the application layer does a better job that RDMA
</span><br>
<span class="quotelev2">&gt; &gt;can achieve better performance at high bandwidth.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;For reasons that have been discussed in more depth in the
</span><br>
<span class="quotelev2">&gt; &gt;RDMA applicability statement and in RDDP/IPS discussions
</span><br>
<span class="quotelev2">&gt; &gt;on iSER, the absence of transport layer buffer throttling
</span><br>
<span class="quotelev2">&gt; &gt;places the onus for end-to-end pacing on the application.
</span><br>
<span class="quotelev2">&gt; &gt;It is a situation somewhat akin to a car with a broken
</span><br>
<span class="quotelev2">&gt; &gt;spedometer that had previously only driven during rush
</span><br>
<span class="quotelev2">&gt; &gt;hour bumper-to-bumper traffic. The fact that the spedometer
</span><br>
<span class="quotelev2">&gt; &gt;was broken was irrelevant. But if that same car hits the
</span><br>
<span class="quotelev2">&gt; &gt;open road the driver will need to come up with some method
</span><br>
<span class="quotelev2">&gt; &gt;of regulating their speed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;The DAPL semantics are very clear that send/recv operations must
</span><br>
<span class="quotelev2">&gt; &gt;be matched one to one, that the receive buffer must be large
</span><br>
<span class="quotelev2">&gt; &gt;enough for the received message and that there must be a receive
</span><br>
<span class="quotelev2">&gt; &gt;buffer for each incoming send/recv message. That means that
</span><br>
<span class="quotelev2">&gt; &gt;the sender needs to have some basis for believing that the
</span><br>
<span class="quotelev2">&gt; &gt;RECV has been posted. Usually this is an explicit credit
</span><br>
<span class="quotelev2">&gt; &gt;that is decremented per message and incremented per response.
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Matching one to one sure, still does not say a recv must be posted 
</span><br>
<span class="quotelev1">&gt; before a send. Flow control is handled by the BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;What DAPL does not state is if the transport does explicit flow
</span><br>
<span class="quotelev2">&gt; &gt;control so that the sending application's work request is simply
</span><br>
<span class="quotelev2">&gt; &gt;not processed (and the sending application continues to provide
</span><br>
<span class="quotelev2">&gt; &gt;the buffer, as with InfiniBand) or whether the sender simply
</span><br>
<span class="quotelev2">&gt; &gt;transmits and leaves error detection to the receiver (iWARP).
</span><br>
<span class="quotelev2">&gt; &gt;There are theoretical advantages to both, but more importantly
</span><br>
<span class="quotelev2">&gt; &gt;neither of them is going to change. So the Consumer of RDMA
</span><br>
<span class="quotelev2">&gt; &gt;applications needs to use ULP/application layer flow control
</span><br>
<span class="quotelev2">&gt; &gt;to pace the transmitter. At the application layer that means
</span><br>
<span class="quotelev2">&gt; &gt;that the RECV must be posted *before* the Send/accept that
</span><br>
<span class="quotelev2">&gt; &gt;grants ULP credits to the far side.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;All of that should be clear in the IOV ownership rules and
</span><br>
<span class="quotelev2">&gt; &gt;discussion of the semantics of send/recv. If you thought you
</span><br>
<span class="quotelev2">&gt; &gt;saw something that implied any guarantees to the contrary
</span><br>
<span class="quotelev2">&gt; &gt;then could you point them out in a posting to the DAT reflector?
</span><br>
<span class="quotelev2">&gt; &gt;(or just send them to me or Arkady Kanevsky).
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; I believe it was either your Steve who claimed a recv must be posted 
</span><br>
<span class="quotelev1">&gt; before a send thus leading to a race condition. I fail to see this. But 
</span><br>
<span class="quotelev1">&gt; again, if Steve's patch makes things better I am all for it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>For iWARP, the connection may be TERMINATED if a SEND arrives on a QP
<br>
and no corresponding RECV buffer is posted.
<br>
<p><p>Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1548.php">Brian Barrett: "Re: [OMPI devel] Autotools Upgrade Time"</a>
<li><strong>Previous message:</strong> <a href="1546.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>In reply to:</strong> <a href="1546.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1536.php">Jeff Squyres: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
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
