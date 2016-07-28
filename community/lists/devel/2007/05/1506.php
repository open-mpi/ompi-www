<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  9 16:16:46 2007" -->
<!-- isoreceived="20070509201646" -->
<!-- sent="Wed, 09 May 2007 16:15:51 -0700" -->
<!-- isosent="20070509231551" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI over ofed udapl - bugs opened" -->
<!-- id="46425627.8000903_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-09 19:15:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1507.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1505.php">Brian Barrett: "[OMPI devel] Nightly trunk tarball AC/AM change"</a>
<li><strong>In reply to:</strong> <a href="1504.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1516.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1516.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1521.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Steve Wise wrote:
<br>
<span class="quotelev1">&gt; There have been a series of discussions on the ofa general list about
</span><br>
<span class="quotelev1">&gt; this issue, and the conclusion to date is that it cannot be resolved in
</span><br>
<span class="quotelev1">&gt; the rdma-cm or iwarp-cm code of the linux rdma stack.  Mainly because
</span><br>
<span class="quotelev1">&gt; sending an RDMA message involves the ULP's work queue and completion
</span><br>
<span class="quotelev1">&gt; queue, so the CM cannot do this under the covers in a mannor that
</span><br>
<span class="quotelev1">&gt; doesn't affect the application.  Thus, the applications must deal with
</span><br>
<span class="quotelev1">&gt; this.
</span><br>
<p>Why can't uDAPL deal with this?  As a uDAPL user, I really don't care 
<br>
what API uDAPL is using under the hood to move data from one place to 
<br>
another, nor the quirks of that API.  The whole point of uDAPL is to 
<br>
form a network-agnostic abstraction layer.  AFAIK, the uDAPL spec 
<br>
doesn't enforce any such requirement on RDMA communication either.  In 
<br>
my opinion, exposing such behavior above uDAPL is incorrect and is part 
<br>
of why uDAPL has seen limited adoption -- every single uDAPL 
<br>
implementation behaves in different ways, making it extremely difficult 
<br>
to write an application to work on any uDAPL implementation.  Sorry if 
<br>
this sounds harsh, but this comes from many hours of banging my head on 
<br>
the wall due to working around these sorts of problems :)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is a possible solution: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I assume in OMPI that connections are only initiated when the mpi
</span><br>
<span class="quotelev1">&gt; application does a send operation.   Given that, then udapl btl must
</span><br>
<span class="quotelev1">&gt; ensure that if a given rank accepts a connection, it cannot not send
</span><br>
<span class="quotelev1">&gt; anything until the rank at the other end of the connection sends first.
</span><br>
<span class="quotelev1">&gt; Since the other side initiated the connection, it will have pending data
</span><br>
<span class="quotelev1">&gt; to send...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I haven't looked into how painful this will be to implement.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thoughts?
</span><br>
<p>Following on what I wrote above, I think Open MPI is the wrong place to 
<br>
be dealing with this.  There's enough of these hacks as it is; I'm not 
<br>
interested in seeing more get added.
<br>
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1507.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1505.php">Brian Barrett: "[OMPI devel] Nightly trunk tarball AC/AM change"</a>
<li><strong>In reply to:</strong> <a href="1504.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1516.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1516.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1521.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
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
