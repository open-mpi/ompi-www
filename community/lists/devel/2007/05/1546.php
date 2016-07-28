<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun May 13 21:26:27 2007" -->
<!-- isoreceived="20070514012627" -->
<!-- sent="Sun, 13 May 2007 21:26:16 -0400" -->
<!-- isosent="20070514012616" -->
<!-- name="Donald Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI over ofed udapl over iwarp" -->
<!-- id="4647BAB8.90505_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1EF1E44200D82B47BD5BA61171E8CE9D03C338D5_at_NT-IRVA-0750.brcm.ad.broadcom.com" -->
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
<strong>Date:</strong> 2007-05-13 21:26:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1547.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Previous message:</strong> <a href="1545.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.2rc1 has been posted"</a>
<li><strong>In reply to:</strong> <a href="1541.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1547.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Reply:</strong> <a href="1547.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Caitlin Bestler wrote:
<br>
<p><span class="quotelev1">&gt;Donal Kerr wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;order of business after connection establishment
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;(mba_btl_udapl_sendrecv().  The RECV buffer post for this exchange,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;however, should really be done _before_ the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;dat_ep_connect() on the active side, and _before_ the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;dat_cr_accept() on the server side.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Currently its done after the ESTABLISHED event is dequeued, thus
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;allowing the race condition. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I believe the rules are the ULP must ensure that a RECV is posted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;before the client can post a SEND for that buffer.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;And further, the ULP must enforce flow control somehow so that a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;SEND never arrives without a RECV buffer being available.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;maybe this is a rule iwarp imposes on its ULPs but not uDAPL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;It is most assuredly a rule for uDAPL. And it is not a matter
</span><br>
<span class="quotelev1">&gt;of iWARP &quot;imposing&quot; on uDAPL. uDAPL was explicitly designed
</span><br>
<span class="quotelev1">&gt;to support IB, iWARP and VI. To do that DAPL documents its
</span><br>
<span class="quotelev1">&gt;model of what RDMA is.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
(sorry I was off the grid for a couple of days)
<br>
Not to beat a dead horse but you would have to show me where in the Spec 
<br>
it says I must post a recv before a send.  And thinking about it some I 
<br>
don't believe there is a race condition because this is not called out 
<br>
as such. Now if posting the handshake recv before the connect call 
<br>
speeds things up and helps the iwarp scenario I am all for it.
<br>
<p><span class="quotelev1">&gt;This issue is in fact one that is truly fundamental to the
</span><br>
<span class="quotelev1">&gt;efficiency of RDMA -- the transport layer DOES NOT provide
</span><br>
<span class="quotelev1">&gt;buffering. That's the application's job. It is precisely
</span><br>
<span class="quotelev1">&gt;because the application layer does a better job that RDMA
</span><br>
<span class="quotelev1">&gt;can achieve better performance at high bandwidth.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;For reasons that have been discussed in more depth in the
</span><br>
<span class="quotelev1">&gt;RDMA applicability statement and in RDDP/IPS discussions
</span><br>
<span class="quotelev1">&gt;on iSER, the absence of transport layer buffer throttling
</span><br>
<span class="quotelev1">&gt;places the onus for end-to-end pacing on the application.
</span><br>
<span class="quotelev1">&gt;It is a situation somewhat akin to a car with a broken
</span><br>
<span class="quotelev1">&gt;spedometer that had previously only driven during rush
</span><br>
<span class="quotelev1">&gt;hour bumper-to-bumper traffic. The fact that the spedometer
</span><br>
<span class="quotelev1">&gt;was broken was irrelevant. But if that same car hits the
</span><br>
<span class="quotelev1">&gt;open road the driver will need to come up with some method
</span><br>
<span class="quotelev1">&gt;of regulating their speed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The DAPL semantics are very clear that send/recv operations must
</span><br>
<span class="quotelev1">&gt;be matched one to one, that the receive buffer must be large
</span><br>
<span class="quotelev1">&gt;enough for the received message and that there must be a receive
</span><br>
<span class="quotelev1">&gt;buffer for each incoming send/recv message. That means that
</span><br>
<span class="quotelev1">&gt;the sender needs to have some basis for believing that the
</span><br>
<span class="quotelev1">&gt;RECV has been posted. Usually this is an explicit credit
</span><br>
<span class="quotelev1">&gt;that is decremented per message and incremented per response.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Matching one to one sure, still does not say a recv must be posted 
<br>
before a send. Flow control is handled by the BTL.
<br>
<p><span class="quotelev1">&gt;What DAPL does not state is if the transport does explicit flow
</span><br>
<span class="quotelev1">&gt;control so that the sending application's work request is simply
</span><br>
<span class="quotelev1">&gt;not processed (and the sending application continues to provide
</span><br>
<span class="quotelev1">&gt;the buffer, as with InfiniBand) or whether the sender simply
</span><br>
<span class="quotelev1">&gt;transmits and leaves error detection to the receiver (iWARP).
</span><br>
<span class="quotelev1">&gt;There are theoretical advantages to both, but more importantly
</span><br>
<span class="quotelev1">&gt;neither of them is going to change. So the Consumer of RDMA
</span><br>
<span class="quotelev1">&gt;applications needs to use ULP/application layer flow control
</span><br>
<span class="quotelev1">&gt;to pace the transmitter. At the application layer that means
</span><br>
<span class="quotelev1">&gt;that the RECV must be posted *before* the Send/accept that
</span><br>
<span class="quotelev1">&gt;grants ULP credits to the far side.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;All of that should be clear in the IOV ownership rules and
</span><br>
<span class="quotelev1">&gt;discussion of the semantics of send/recv. If you thought you
</span><br>
<span class="quotelev1">&gt;saw something that implied any guarantees to the contrary
</span><br>
<span class="quotelev1">&gt;then could you point them out in a posting to the DAT reflector?
</span><br>
<span class="quotelev1">&gt;(or just send them to me or Arkady Kanevsky).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
I believe it was either your Steve who claimed a recv must be posted 
<br>
before a send thus leading to a race condition. I fail to see this. But 
<br>
again, if Steve's patch makes things better I am all for it.
<br>
<p>-DON
<br>
<p><span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="1547.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Previous message:</strong> <a href="1545.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.2rc1 has been posted"</a>
<li><strong>In reply to:</strong> <a href="1541.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1547.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Reply:</strong> <a href="1547.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
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
