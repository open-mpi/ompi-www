<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  9 18:25:47 2007" -->
<!-- isoreceived="20070509222547" -->
<!-- sent="Wed, 9 May 2007 15:25:06 -0700" -->
<!-- isosent="20070509222506" -->
<!-- name="Caitlin Bestler" -->
<!-- email="caitlinb_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened" -->
<!-- id="1EF1E44200D82B47BD5BA61171E8CE9D03C3322A_at_NT-IRVA-0750.brcm.ad.broadcom.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1178748915.382.145.camel_at_stevo-desktop" -->
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
<strong>Date:</strong> 2007-05-09 18:25:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1525.php">Andrew Friedley: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1523.php">Steve Wise: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs	opened"</a>
<li><strong>In reply to:</strong> <a href="1522.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1525.php">Andrew Friedley: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
general-bounces_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; On Wed, 2007-05-09 at 17:55 -0700, Andrew Friedley wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Steve Wise wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, 2007-05-09 at 16:15 -0700, Andrew Friedley wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Steve Wise wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There have been a series of discussions on the ofa general list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; about this issue, and the conclusion to date is that it cannot be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; resolved in the rdma-cm or iwarp-cm code of the linux rdma stack.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Mainly because sending an RDMA message involves the ULP's work
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; queue and completion queue, so the CM cannot do this under the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; covers in a mannor that doesn't affect the application.
</span><br>
<span class="quotelev1">&gt;  Thus, the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; applications must deal with this.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Why can't uDAPL deal with this?  As a uDAPL user, I really don't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; care what API uDAPL is using under the hood to move data from one
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; place to another, nor the quirks of that API.  The whole point of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; uDAPL is to form a network-agnostic abstraction layer. AFAIK, the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; uDAPL spec doesn't enforce any such requirement on RDMA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; communication either.  In my opinion, exposing such behavior above
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; uDAPL is incorrect and is part of why uDAPL has seen limited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; adoption -- every single uDAPL implementation behaves in different
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ways, making it extremely difficult to write an application to work
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on any uDAPL implementation.  Sorry if this sounds harsh, but this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; comes from many hours of banging my head on the wall due to working
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; around these sorts of problems :)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I understand your frustration.  I think the MPA protocol is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; deficient in this respect and should have required the necessary
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;first FPDU&quot; to be sent under the covers by the RNICs. A RTR packet
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if you will.  To resolve this issue &quot;properly&quot;, in my opinion, would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; involve changing the IETF MPA spec and also breaking all the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; existing iwarp HW.  We can't do that.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Understood.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The reason it is hard or impossible to solve this in the DAPL layer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is that any rdma operation on the QP affects the state of that QP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and the associate CQs.  In addition, if you use an RDMA send to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enforce this you impact the other side by consuming a RECV buffer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So its hard if not impossible to do this under the covers without
</span><br>
<span class="quotelev3">&gt;&gt;&gt; affecting the application's resources.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there no way to do this before passing connection established
</span><br>
<span class="quotelev2">&gt;&gt; events to the uDAPL consumer?  I need to go read up on the uDAPL API
</span><br>
<span class="quotelev2">&gt;&gt; to really understand why this wouldn't work.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps the dapl or maybe even a OFA iWARP CM could defer
</span><br>
<span class="quotelev1">&gt; passing up the &quot;established&quot; event on the passive side until
</span><br>
<span class="quotelev1">&gt; an incoming SEND is detected.  I know we've discussed this
</span><br>
<span class="quotelev1">&gt; before, but I'm not sure why this was not a workable
</span><br>
<span class="quotelev1">&gt; solution.  Perhaps Caitlin or some iwarp folks can recall?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>That was what the RNIC-PI flag would have enabled. DAPL could
<br>
check for that flag in a transport/device independent way, and
<br>
delay the established event until it was safe to post (but no
<br>
longer than required, for IB and iWARP NICs that fenced the first
<br>
transmit the Established Event could be generated immediately).
<br>
<p>So yes, the transport layer (OFA or DAPL) CAN hide this on 
<br>
the passive side.
<br>
<p>But as you point out, that doesn't solve the problem of needing
<br>
the Send from the active side. Since the Consumer posts RECV
<br>
buffers *before* indicating whether the QP/EP will be used 
<br>
on the passive or active end, and there are no standard verbs
<br>
to jam a receive buffer to the head of an RQ, there is no way
<br>
to hide a send/recv exchange from the application layer.
<br>
<p>The fact that it can't be made transparent on the active side
<br>
certainly diminishes the value of making it traansparent on
<br>
the receive side. It's still a good idea, but I don't think 
<br>
it has percolated to the top of anyone's TODO list yet.
<br>
When it does, the RNIC-PI proposed flag is a simple capability
<br>
flag that is quite easy for any provider to statically set.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1525.php">Andrew Friedley: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1523.php">Steve Wise: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs	opened"</a>
<li><strong>In reply to:</strong> <a href="1522.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1525.php">Andrew Friedley: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
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
