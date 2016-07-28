<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  9 17:44:56 2007" -->
<!-- isoreceived="20070509214456" -->
<!-- sent="Wed, 09 May 2007 16:44:52 -0500" -->
<!-- isosent="20070509214452" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI over ofed udapl - bugs opened" -->
<!-- id="1178747092.382.125.camel_at_stevo-desktop" -->
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
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-09 17:44:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1517.php">Andrew Friedley: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1515.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>In reply to:</strong> <a href="1506.php">Andrew Friedley: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1519.php">Andrew Friedley: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1519.php">Andrew Friedley: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2007-05-09 at 16:15 -0700, Andrew Friedley wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Steve Wise wrote:
</span><br>
<span class="quotelev2">&gt; &gt; There have been a series of discussions on the ofa general list about
</span><br>
<span class="quotelev2">&gt; &gt; this issue, and the conclusion to date is that it cannot be resolved in
</span><br>
<span class="quotelev2">&gt; &gt; the rdma-cm or iwarp-cm code of the linux rdma stack.  Mainly because
</span><br>
<span class="quotelev2">&gt; &gt; sending an RDMA message involves the ULP's work queue and completion
</span><br>
<span class="quotelev2">&gt; &gt; queue, so the CM cannot do this under the covers in a mannor that
</span><br>
<span class="quotelev2">&gt; &gt; doesn't affect the application.  Thus, the applications must deal with
</span><br>
<span class="quotelev2">&gt; &gt; this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why can't uDAPL deal with this?  As a uDAPL user, I really don't care 
</span><br>
<span class="quotelev1">&gt; what API uDAPL is using under the hood to move data from one place to 
</span><br>
<span class="quotelev1">&gt; another, nor the quirks of that API.  The whole point of uDAPL is to 
</span><br>
<span class="quotelev1">&gt; form a network-agnostic abstraction layer.  AFAIK, the uDAPL spec 
</span><br>
<span class="quotelev1">&gt; doesn't enforce any such requirement on RDMA communication either.  In 
</span><br>
<span class="quotelev1">&gt; my opinion, exposing such behavior above uDAPL is incorrect and is part 
</span><br>
<span class="quotelev1">&gt; of why uDAPL has seen limited adoption -- every single uDAPL 
</span><br>
<span class="quotelev1">&gt; implementation behaves in different ways, making it extremely difficult 
</span><br>
<span class="quotelev1">&gt; to write an application to work on any uDAPL implementation.  Sorry if 
</span><br>
<span class="quotelev1">&gt; this sounds harsh, but this comes from many hours of banging my head on 
</span><br>
<span class="quotelev1">&gt; the wall due to working around these sorts of problems :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I understand your frustration.  I think the MPA protocol is deficient in
<br>
this respect and should have required the necessary &quot;first FPDU&quot; to be
<br>
sent under the covers by the RNICs. A RTR packet if you will.  To
<br>
resolve this issue &quot;properly&quot;, in my opinion, would involve changing the
<br>
IETF MPA spec and also breaking all the existing iwarp HW.  We can't do
<br>
that.
<br>
<p>The reason it is hard or impossible to solve this in the DAPL layer is
<br>
that any rdma operation on the QP affects the state of that QP and the
<br>
associate CQs.  In addition, if you use an RDMA send to enforce this you
<br>
impact the other side by consuming a RECV buffer. So its hard if not
<br>
impossible to do this under the covers without affecting the
<br>
application's resources.
<br>
<p>Also, the DAPL specification had a goal to not impose any additional
<br>
protocol on the wire.  If you add this under the covers, then you add
<br>
such a &quot;protocol&quot; and break interoperability between a connection
<br>
accessed via DAPL on one end and some other API on the other end.
<br>
<p><span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Here is a possible solution: 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I assume in OMPI that connections are only initiated when the mpi
</span><br>
<span class="quotelev2">&gt; &gt; application does a send operation.   Given that, then udapl btl must
</span><br>
<span class="quotelev2">&gt; &gt; ensure that if a given rank accepts a connection, it cannot not send
</span><br>
<span class="quotelev2">&gt; &gt; anything until the rank at the other end of the connection sends first.
</span><br>
<span class="quotelev2">&gt; &gt; Since the other side initiated the connection, it will have pending data
</span><br>
<span class="quotelev2">&gt; &gt; to send...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I haven't looked into how painful this will be to implement.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thoughts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Following on what I wrote above, I think Open MPI is the wrong place to 
</span><br>
<span class="quotelev1">&gt; be dealing with this.  There's enough of these hacks as it is; I'm not 
</span><br>
<span class="quotelev1">&gt; interested in seeing more get added.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Unfortunately, I haven't been able to come up with a solution that works
<br>
with existing iWARP HW and is interoperable. 
<br>
<p>Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1517.php">Andrew Friedley: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1515.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>In reply to:</strong> <a href="1506.php">Andrew Friedley: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1519.php">Andrew Friedley: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1519.php">Andrew Friedley: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
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
