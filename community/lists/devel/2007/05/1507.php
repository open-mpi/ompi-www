<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  9 16:20:32 2007" -->
<!-- isoreceived="20070509202032" -->
<!-- sent="Wed, 09 May 2007 16:20:23 -0400" -->
<!-- isosent="20070509202023" -->
<!-- name="Donald Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI over ofed udapl - bugs opened" -->
<!-- id="46422D07.3050600_at_Sun.COM" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Donald Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-09 16:20:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1508.php">Steve Wise: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs	opened"</a>
<li><strong>Previous message:</strong> <a href="1506.php">Andrew Friedley: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>In reply to:</strong> <a href="1504.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1508.php">Steve Wise: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs	opened"</a>
<li><strong>Reply:</strong> <a href="1508.php">Steve Wise: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs	opened"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I missing some context here. Where are you plugging iwarp and OMPI 
<br>
together?
<br>
<p>Steve Wise wrote:
<br>
<p><span class="quotelev1">&gt;On Wed, 2007-05-09 at 11:42 -0400, Donald Kerr wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I agree OMPI trac ticket #890 should cover this. I will test the 
</span><br>
<span class="quotelev2">&gt;&gt;suggested fix, just removing that one line from btl_udapl.c, on Solaris. 
</span><br>
<span class="quotelev2">&gt;&gt;I am still not set up on Linux so hopefully Steve can confirm there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;First, I haven't tested Arlins dat_ep_query() fix yet as we have
</span><br>
<span class="quotelev1">&gt;determined its not needed.  The OMPI udapl btl never calls
</span><br>
<span class="quotelev1">&gt;dat_ep_query()... 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;So running OMPI with the suggested fix (removing the overwriting of the
</span><br>
<span class="quotelev1">&gt;hca_addr port field in btl_udapl.c) over ofed udapl on chelsio's iwarp
</span><br>
<span class="quotelev1">&gt;rnic still doesn't work.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;There are two new issues so far:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;1) this has uncovered a connection migration issue in the Chelsio
</span><br>
<span class="quotelev1">&gt;driver/firmware.  We are developing and testing a fix for this now.
</span><br>
<span class="quotelev1">&gt;Should be ready tomorrow hopefully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2) OMPI is not adhering to the iwarp protocol requirement that the ULP,
</span><br>
<span class="quotelev1">&gt;in this case OMPI, initiating the iwarp connection (the side issuing the
</span><br>
<span class="quotelev1">&gt;dat_ep_connect() or rdma_connect()) _MUST_ be the first to send an RDMA
</span><br>
<span class="quotelev1">&gt;message.  So if a OMPI process _accepts_ an rdma connection, then it
</span><br>
<span class="quotelev1">&gt;cannot send on that connection until it receives some sort of rdma
</span><br>
<span class="quotelev1">&gt;operation from the client process.  It appears the current OMPI
</span><br>
<span class="quotelev1">&gt;connection setup model doesn't enforce this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This combined with the bug above causes an immediate connection failure
</span><br>
<span class="quotelev1">&gt;on chelsio's rnic.  After I fix #1 above, things might get slightly
</span><br>
<span class="quotelev1">&gt;better but my guess is we will still have connection setup problems if
</span><br>
<span class="quotelev1">&gt;the server side sends before the client side finishes streaming-&gt;rdma
</span><br>
<span class="quotelev1">&gt;mode transition.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;There have been a series of discussions on the ofa general list about
</span><br>
<span class="quotelev1">&gt;this issue, and the conclusion to date is that it cannot be resolved in
</span><br>
<span class="quotelev1">&gt;the rdma-cm or iwarp-cm code of the linux rdma stack.  Mainly because
</span><br>
<span class="quotelev1">&gt;sending an RDMA message involves the ULP's work queue and completion
</span><br>
<span class="quotelev1">&gt;queue, so the CM cannot do this under the covers in a mannor that
</span><br>
<span class="quotelev1">&gt;doesn't affect the application.  Thus, the applications must deal with
</span><br>
<span class="quotelev1">&gt;this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Here is a possible solution: 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I assume in OMPI that connections are only initiated when the mpi
</span><br>
<span class="quotelev1">&gt;application does a send operation.   Given that, then udapl btl must
</span><br>
<span class="quotelev1">&gt;ensure that if a given rank accepts a connection, it cannot not send
</span><br>
<span class="quotelev1">&gt;anything until the rank at the other end of the connection sends first.
</span><br>
<span class="quotelev1">&gt;Since the other side initiated the connection, it will have pending data
</span><br>
<span class="quotelev1">&gt;to send...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I haven't looked into how painful this will be to implement.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thoughts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;FYI:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;IETF Draft requiring this behavior:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;<a href="http://www.ietf.org/internet-drafts/draft-ietf-rddp-mpa-08.txt">http://www.ietf.org/internet-drafts/draft-ietf-rddp-mpa-08.txt</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;See section 7 for specifics.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Steve.
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="1508.php">Steve Wise: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs	opened"</a>
<li><strong>Previous message:</strong> <a href="1506.php">Andrew Friedley: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>In reply to:</strong> <a href="1504.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1508.php">Steve Wise: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs	opened"</a>
<li><strong>Reply:</strong> <a href="1508.php">Steve Wise: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs	opened"</a>
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
