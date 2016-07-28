<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  9 17:56:13 2007" -->
<!-- isoreceived="20070509215613" -->
<!-- sent="Wed, 09 May 2007 17:55:52 -0700" -->
<!-- isosent="20070510005552" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI over ofed udapl - bugs opened" -->
<!-- id="46426D98.1030406_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1178747092.382.125.camel_at_stevo-desktop" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-09 20:55:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1520.php">Steve Wise: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs	opened"</a>
<li><strong>Previous message:</strong> <a href="1518.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>In reply to:</strong> <a href="1516.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1522.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1522.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Steve Wise wrote:
<br>
<span class="quotelev1">&gt; On Wed, 2007-05-09 at 16:15 -0700, Andrew Friedley wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Steve Wise wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There have been a series of discussions on the ofa general list about
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this issue, and the conclusion to date is that it cannot be resolved in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the rdma-cm or iwarp-cm code of the linux rdma stack.  Mainly because
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sending an RDMA message involves the ULP's work queue and completion
</span><br>
<span class="quotelev3">&gt;&gt;&gt; queue, so the CM cannot do this under the covers in a mannor that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't affect the application.  Thus, the applications must deal with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this.
</span><br>
<span class="quotelev2">&gt;&gt; Why can't uDAPL deal with this?  As a uDAPL user, I really don't care 
</span><br>
<span class="quotelev2">&gt;&gt; what API uDAPL is using under the hood to move data from one place to 
</span><br>
<span class="quotelev2">&gt;&gt; another, nor the quirks of that API.  The whole point of uDAPL is to 
</span><br>
<span class="quotelev2">&gt;&gt; form a network-agnostic abstraction layer.  AFAIK, the uDAPL spec 
</span><br>
<span class="quotelev2">&gt;&gt; doesn't enforce any such requirement on RDMA communication either.  In 
</span><br>
<span class="quotelev2">&gt;&gt; my opinion, exposing such behavior above uDAPL is incorrect and is part 
</span><br>
<span class="quotelev2">&gt;&gt; of why uDAPL has seen limited adoption -- every single uDAPL 
</span><br>
<span class="quotelev2">&gt;&gt; implementation behaves in different ways, making it extremely difficult 
</span><br>
<span class="quotelev2">&gt;&gt; to write an application to work on any uDAPL implementation.  Sorry if 
</span><br>
<span class="quotelev2">&gt;&gt; this sounds harsh, but this comes from many hours of banging my head on 
</span><br>
<span class="quotelev2">&gt;&gt; the wall due to working around these sorts of problems :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand your frustration.  I think the MPA protocol is deficient in
</span><br>
<span class="quotelev1">&gt; this respect and should have required the necessary &quot;first FPDU&quot; to be
</span><br>
<span class="quotelev1">&gt; sent under the covers by the RNICs. A RTR packet if you will.  To
</span><br>
<span class="quotelev1">&gt; resolve this issue &quot;properly&quot;, in my opinion, would involve changing the
</span><br>
<span class="quotelev1">&gt; IETF MPA spec and also breaking all the existing iwarp HW.  We can't do
</span><br>
<span class="quotelev1">&gt; that.
</span><br>
<p>Understood.
<br>
<p><span class="quotelev1">&gt; The reason it is hard or impossible to solve this in the DAPL layer is
</span><br>
<span class="quotelev1">&gt; that any rdma operation on the QP affects the state of that QP and the
</span><br>
<span class="quotelev1">&gt; associate CQs.  In addition, if you use an RDMA send to enforce this you
</span><br>
<span class="quotelev1">&gt; impact the other side by consuming a RECV buffer. So its hard if not
</span><br>
<span class="quotelev1">&gt; impossible to do this under the covers without affecting the
</span><br>
<span class="quotelev1">&gt; application's resources.
</span><br>
<p>Is there no way to do this before passing connection established events 
<br>
to the uDAPL consumer?  I need to go read up on the uDAPL API to really 
<br>
understand why this wouldn't work.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, the DAPL specification had a goal to not impose any additional
</span><br>
<span class="quotelev1">&gt; protocol on the wire.  If you add this under the covers, then you add
</span><br>
<span class="quotelev1">&gt; such a &quot;protocol&quot; and break interoperability between a connection
</span><br>
<span class="quotelev1">&gt; accessed via DAPL on one end and some other API on the other end.
</span><br>
<p>So I guess there's no 'right' solution, at least at the uDAPL level. 
<br>
With RDMACM/OFA verbs, there's at least the argument that you can design 
<br>
the API/semantics however you please, while uDAPL is already standardized.
<br>
<p>I hope you guys are documenting this in a way that makes this issue 
<br>
extremely clear to both uDAPL and OFA verbs (is this the right naming?) 
<br>
users.  Maybe it's been done already, but is it possible to emit some 
<br>
sort of loud warning/error when the accept()'ing side tries to send 
<br>
before a receive?
<br>
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1520.php">Steve Wise: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs	opened"</a>
<li><strong>Previous message:</strong> <a href="1518.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>In reply to:</strong> <a href="1516.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1522.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1522.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
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
