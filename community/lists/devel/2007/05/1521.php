<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  9 18:04:24 2007" -->
<!-- isoreceived="20070509220424" -->
<!-- sent="Wed, 9 May 2007 15:03:08 -0700" -->
<!-- isosent="20070509220308" -->
<!-- name="Caitlin Bestler" -->
<!-- email="caitlinb_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI over ofed udapl - bugs opened" -->
<!-- id="1EF1E44200D82B47BD5BA61171E8CE9D03C33203_at_NT-IRVA-0750.brcm.ad.broadcom.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="46425627.8000903_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-05-09 18:03:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1522.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1520.php">Steve Wise: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs	opened"</a>
<li><strong>In reply to:</strong> <a href="1506.php">Andrew Friedley: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1507.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
devel-bounces_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Steve Wise wrote:
</span><br>
<span class="quotelev2">&gt;&gt; There have been a series of discussions on the ofa general list about
</span><br>
<span class="quotelev2">&gt;&gt; this issue, and the conclusion to date is that it cannot be resolved
</span><br>
<span class="quotelev2">&gt;&gt; in the rdma-cm or iwarp-cm code of the linux rdma stack.  Mainly
</span><br>
<span class="quotelev2">&gt;&gt; because sending an RDMA message involves the ULP's work queue and
</span><br>
<span class="quotelev2">&gt;&gt; completion queue, so the CM cannot do this under the covers in a
</span><br>
<span class="quotelev2">&gt;&gt; mannor that doesn't affect the application.  Thus, the applications
</span><br>
<span class="quotelev2">&gt;&gt; must deal with this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why can't uDAPL deal with this?  As a uDAPL user, I really
</span><br>
<span class="quotelev1">&gt; don't care what API uDAPL is using under the hood to move
</span><br>
<span class="quotelev1">&gt; data from one place to another, nor the quirks of that API.
</span><br>
<span class="quotelev1">&gt; The whole point of uDAPL is to form a network-agnostic
</span><br>
<span class="quotelev1">&gt; abstraction layer.  AFAIK, the uDAPL spec doesn't enforce any
</span><br>
<span class="quotelev1">&gt; such requirement on RDMA communication either.  In my
</span><br>
<span class="quotelev1">&gt; opinion, exposing such behavior above uDAPL is incorrect and
</span><br>
<span class="quotelev1">&gt; is part of why uDAPL has seen limited adoption -- every
</span><br>
<span class="quotelev1">&gt; single uDAPL implementation behaves in different ways, making
</span><br>
<span class="quotelev1">&gt; it extremely difficult to write an application to work on any
</span><br>
<span class="quotelev1">&gt; uDAPL implementation.  Sorry if this sounds harsh, but this
</span><br>
<span class="quotelev1">&gt; comes from many hours of banging my head on the wall due to
</span><br>
<span class="quotelev1">&gt; working around these sorts of problems :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>The simple answer is that uDAPL cannot deal with this.
<br>
<p>The RDMAC verbs specification was overly focused on client/server
<br>
and therefore did not realize that there was any harm in requiring
<br>
that the active side did the first send. But given that DAPL could
<br>
not rewrite either the RDMAC or InfiniBand verbs it had to come up
<br>
with the best solution that matched the verbs as they were. One of
<br>
the explicit ground rules was that DAPL MUST support all RDMA devices
<br>
that were IBTA or RDMAC compliant. Given those rules, if the active
<br>
side does not send a message the passive side might be held off
<br>
indefinitely, and sending a message cause consumption of a receive
<br>
buffer and therefore cannot be transparent to the uDAPL consumer.
<br>
<p>Given those constraints there is literally nothing that can be
<br>
done to work around this problem by either DAPL or OFA.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1522.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1520.php">Steve Wise: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs	opened"</a>
<li><strong>In reply to:</strong> <a href="1506.php">Andrew Friedley: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1507.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
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
