<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 11 13:44:26 2007" -->
<!-- isoreceived="20070511174426" -->
<!-- sent="Fri, 11 May 2007 10:43:46 -0700" -->
<!-- isosent="20070511174346" -->
<!-- name="Caitlin Bestler" -->
<!-- email="caitlinb_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI over ofed udapl over iwarp" -->
<!-- id="1EF1E44200D82B47BD5BA61171E8CE9D03C338D5_at_NT-IRVA-0750.brcm.ad.broadcom.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Caitlin Bestler (<em>caitlinb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-11 13:43:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1542.php">Galen Shipman: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Previous message:</strong> <a href="1540.php">Ethan Mallove: "[OMPI devel] MTT for developers"</a>
<li><strong>In reply to:</strong> <a href="1537.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1543.php">Paul H. Hargrove: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Reply:</strong> <a href="1543.php">Paul H. Hargrove: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Reply:</strong> <a href="1546.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Donal Kerr wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; order of business after connection establishment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (mba_btl_udapl_sendrecv().  The RECV buffer post for this exchange,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; however, should really be done _before_ the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dat_ep_connect() on the active side, and _before_ the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dat_cr_accept() on the server side.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Currently its done after the ESTABLISHED event is dequeued, thus
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allowing the race condition. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe the rules are the ULP must ensure that a RECV is posted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before the client can post a SEND for that buffer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And further, the ULP must enforce flow control somehow so that a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SEND never arrives without a RECV buffer being available.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; maybe this is a rule iwarp imposes on its ULPs but not uDAPL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>It is most assuredly a rule for uDAPL. And it is not a matter
<br>
of iWARP &quot;imposing&quot; on uDAPL. uDAPL was explicitly designed
<br>
to support IB, iWARP and VI. To do that DAPL documents its
<br>
model of what RDMA is.
<br>
<p>This issue is in fact one that is truly fundamental to the
<br>
efficiency of RDMA -- the transport layer DOES NOT provide
<br>
buffering. That's the application's job. It is precisely
<br>
because the application layer does a better job that RDMA
<br>
can achieve better performance at high bandwidth.
<br>
<p>For reasons that have been discussed in more depth in the
<br>
RDMA applicability statement and in RDDP/IPS discussions
<br>
on iSER, the absence of transport layer buffer throttling
<br>
places the onus for end-to-end pacing on the application.
<br>
It is a situation somewhat akin to a car with a broken
<br>
spedometer that had previously only driven during rush
<br>
hour bumper-to-bumper traffic. The fact that the spedometer
<br>
was broken was irrelevant. But if that same car hits the
<br>
open road the driver will need to come up with some method
<br>
of regulating their speed.
<br>
<p>The DAPL semantics are very clear that send/recv operations must
<br>
be matched one to one, that the receive buffer must be large
<br>
enough for the received message and that there must be a receive
<br>
buffer for each incoming send/recv message. That means that
<br>
the sender needs to have some basis for believing that the
<br>
RECV has been posted. Usually this is an explicit credit
<br>
that is decremented per message and incremented per response.
<br>
<p>What DAPL does not state is if the transport does explicit flow
<br>
control so that the sending application's work request is simply
<br>
not processed (and the sending application continues to provide
<br>
the buffer, as with InfiniBand) or whether the sender simply
<br>
transmits and leaves error detection to the receiver (iWARP).
<br>
There are theoretical advantages to both, but more importantly
<br>
neither of them is going to change. So the Consumer of RDMA
<br>
applications needs to use ULP/application layer flow control
<br>
to pace the transmitter. At the application layer that means
<br>
that the RECV must be posted *before* the Send/accept that
<br>
grants ULP credits to the far side.
<br>
<p>All of that should be clear in the IOV ownership rules and
<br>
discussion of the semantics of send/recv. If you thought you
<br>
saw something that implied any guarantees to the contrary
<br>
then could you point them out in a posting to the DAT reflector?
<br>
(or just send them to me or Arkady Kanevsky).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1542.php">Galen Shipman: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Previous message:</strong> <a href="1540.php">Ethan Mallove: "[OMPI devel] MTT for developers"</a>
<li><strong>In reply to:</strong> <a href="1537.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1543.php">Paul H. Hargrove: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Reply:</strong> <a href="1543.php">Paul H. Hargrove: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Reply:</strong> <a href="1546.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
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
