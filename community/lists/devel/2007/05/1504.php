<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  9 15:55:03 2007" -->
<!-- isoreceived="20070509195503" -->
<!-- sent="Wed, 09 May 2007 14:54:58 -0500" -->
<!-- isosent="20070509195458" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI over ofed udapl - bugs opened" -->
<!-- id="1178740498.382.97.camel_at_stevo-desktop" -->
<!-- inreplyto="4641EBD0.3000600_at_Sun.COM" -->
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
<strong>Date:</strong> 2007-05-09 15:54:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1505.php">Brian Barrett: "[OMPI devel] Nightly trunk tarball AC/AM change"</a>
<li><strong>Previous message:</strong> <a href="1503.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>In reply to:</strong> <a href="1503.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1506.php">Andrew Friedley: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1506.php">Andrew Friedley: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1507.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1512.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1534.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2007-05-09 at 11:42 -0400, Donald Kerr wrote:
<br>
<span class="quotelev1">&gt; I agree OMPI trac ticket #890 should cover this. I will test the 
</span><br>
<span class="quotelev1">&gt; suggested fix, just removing that one line from btl_udapl.c, on Solaris. 
</span><br>
<span class="quotelev1">&gt; I am still not set up on Linux so hopefully Steve can confirm there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>All,
<br>
<p>First, I haven't tested Arlins dat_ep_query() fix yet as we have
<br>
determined its not needed.  The OMPI udapl btl never calls
<br>
dat_ep_query()... 
<br>
<p>So running OMPI with the suggested fix (removing the overwriting of the
<br>
hca_addr port field in btl_udapl.c) over ofed udapl on chelsio's iwarp
<br>
rnic still doesn't work.  
<br>
<p>There are two new issues so far:
<br>
<p>1) this has uncovered a connection migration issue in the Chelsio
<br>
driver/firmware.  We are developing and testing a fix for this now.
<br>
Should be ready tomorrow hopefully.
<br>
<p>2) OMPI is not adhering to the iwarp protocol requirement that the ULP,
<br>
in this case OMPI, initiating the iwarp connection (the side issuing the
<br>
dat_ep_connect() or rdma_connect()) _MUST_ be the first to send an RDMA
<br>
message.  So if a OMPI process _accepts_ an rdma connection, then it
<br>
cannot send on that connection until it receives some sort of rdma
<br>
operation from the client process.  It appears the current OMPI
<br>
connection setup model doesn't enforce this.
<br>
<p>This combined with the bug above causes an immediate connection failure
<br>
on chelsio's rnic.  After I fix #1 above, things might get slightly
<br>
better but my guess is we will still have connection setup problems if
<br>
the server side sends before the client side finishes streaming-&gt;rdma
<br>
mode transition.  
<br>
<p>There have been a series of discussions on the ofa general list about
<br>
this issue, and the conclusion to date is that it cannot be resolved in
<br>
the rdma-cm or iwarp-cm code of the linux rdma stack.  Mainly because
<br>
sending an RDMA message involves the ULP's work queue and completion
<br>
queue, so the CM cannot do this under the covers in a mannor that
<br>
doesn't affect the application.  Thus, the applications must deal with
<br>
this.
<br>
<p><p>Here is a possible solution: 
<br>
<p>I assume in OMPI that connections are only initiated when the mpi
<br>
application does a send operation.   Given that, then udapl btl must
<br>
ensure that if a given rank accepts a connection, it cannot not send
<br>
anything until the rank at the other end of the connection sends first.
<br>
Since the other side initiated the connection, it will have pending data
<br>
to send...
<br>
<p>I haven't looked into how painful this will be to implement.
<br>
<p>Thoughts?
<br>
<p><p>FYI:
<br>
<p>IETF Draft requiring this behavior:
<br>
<p><a href="http://www.ietf.org/internet-drafts/draft-ietf-rddp-mpa-08.txt">http://www.ietf.org/internet-drafts/draft-ietf-rddp-mpa-08.txt</a>
<br>
<p>See section 7 for specifics.
<br>
<p>Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1505.php">Brian Barrett: "[OMPI devel] Nightly trunk tarball AC/AM change"</a>
<li><strong>Previous message:</strong> <a href="1503.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>In reply to:</strong> <a href="1503.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1506.php">Andrew Friedley: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1506.php">Andrew Friedley: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1507.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1512.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1534.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
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
