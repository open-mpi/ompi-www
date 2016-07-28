<?
$subject_val = "Re: [OMPI devel] NP64 _gather_ problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 20 13:12:45 2010" -->
<!-- isoreceived="20100920171245" -->
<!-- sent="Mon, 20 Sep 2010 12:12:23 -0500" -->
<!-- isosent="20100920171223" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] NP64 _gather_ problem" -->
<!-- id="4C9795F7.8070100_at_opengridcomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C93D3AD.8060605_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] NP64 _gather_ problem<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-20 13:12:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8512.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<li><strong>Previous message:</strong> <a href="8510.php">Samuel K. Gutierrez: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<li><strong>In reply to:</strong> <a href="8494.php">Steve Wise: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just an update for folks:  The connection setup latency was a bug in my 
<br>
iw_cxgb3 rdma driver.  It wasn't turning off RX coalescing for the iwarp 
<br>
connections.  This resulted in 100-200ms added latency since the iwarp 
<br>
connection setup uses TCP streaming mode messages to negotiate the iwarp 
<br>
connection mode.  Once I fixed this, the gather operation for &gt; NP60 
<br>
behaves much much better...
<br>
<p>Thanks Terry for helping.
<br>
<p>Steve.
<br>
<p><p>On 09/17/2010 03:46 PM, Steve Wise wrote:
<br>
<span class="quotelev1">&gt; I'll look into Solaris Studio.  I think somehow the connections are 
</span><br>
<span class="quotelev1">&gt; getting single threaded or somehow funneled due to the gather 
</span><br>
<span class="quotelev1">&gt; algorithm.  And since they are taking ~160ms to setup each one, and 
</span><br>
<span class="quotelev1">&gt; there are ~3600 connections getting setup, we end up with a 7 minute 
</span><br>
<span class="quotelev1">&gt; run time.   Now, 160ms seems way too high for setting up even an iWARP 
</span><br>
<span class="quotelev1">&gt; connection which has some streaming mode TCP exchanges as part of 
</span><br>
<span class="quotelev1">&gt; connection setup.  I would think it should be around a few hundred 
</span><br>
<span class="quotelev1">&gt; _usecs_.   So I'm pursuing the connect latency too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Steve.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/17/2010 12:13 PM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Right, by default all connections will be handled on the fly.  So as 
</span><br>
<span class="quotelev2">&gt;&gt; an MPI_Send is executed to a process that there is not a connection 
</span><br>
<span class="quotelev2">&gt;&gt; to then a dance happens between the sender and the receiver.  So why 
</span><br>
<span class="quotelev2">&gt;&gt; this happens with np &gt; 60 may have to do with how many connections 
</span><br>
<span class="quotelev2">&gt;&gt; are happening at the same time or if the destination of one 
</span><br>
<span class="quotelev2">&gt;&gt; connection request is not in the MPI library.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It would be interesting to figure out when in the timeline of the job 
</span><br>
<span class="quotelev2">&gt;&gt; that such requests are are being delayed.  You can get such a 
</span><br>
<span class="quotelev2">&gt;&gt; timeline by using a tool like Solaris Studio collector/analyzer 
</span><br>
<span class="quotelev2">&gt;&gt; (which actually has a Linux version).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Steve Wise wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes it does.  With mpi_preconnect_mpi to 1, NP64 doesn't stall.  So 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; its not the algorithm in and of itself, but rather some interplay 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between the algorithm and connection setup I guess.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 9/17/2010 5:24 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does setting mca parameter mpi_preconnect_mpi to 1 help at all.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This might be able to help determine if it is the actually 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; connection set up between processes that are out of sync as oppose 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to something in the actual gather algorithm.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Steve Wise wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here's a clue:  ompi_coll_tuned_gather_intra_dec_fixed() changes 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; its algorithm for job sizes &gt; 60 to some binomial method.  I 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; changed the threshold to 100 and my NP64 jobs run fine.  Now to 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; try and understand what about 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_coll_tuned_gather_intra_binomial() is causing these connect 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; delays...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 9/16/2010 1:01 PM, Steve Wise wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Oops.  One key typo here:  This is the IMB-MPI1 gather test, not 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; barrier. :(
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 9/16/2010 12:05 PM, Steve Wise wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm debugging a performance problem with running IMB-MP1/barrier 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; in an NP64 cluster (8 nodes, 8 cores each).  I'm using 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.4.1 from the OFED-1.5.1 distribution.  The BTL is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; openib/iWARP via Chelsio's T3 RNIC.  In short, a NP60 and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; smaller run completes in a timely manner as expected,  but NP61 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; and larger runs come to a crawl at the 8KB IO size and take 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ~5-10min to complete.  It does complete though.  It behaves this 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; way even if I run on &gt; 8 nodes so there are available cores.  IE 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; a NP64 on a 16 node cluster still behaves the same way even 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; though there are only 4 ranks on each node.  So its apparently 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; not a thread starvation issue due to lack of cores.  When in the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; stalled state, I see on the order of 100 or so established iwarp 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; connections on each node.  And the connection count increases 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; VERY slowly and sporadically (at its peak there are around 800 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; connections for a NP64 gather operation).  In comparison, when I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; run the &lt;= NP60 runs, the connections quickly ramp up to the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; expected amount.  I added hooks in the openib BTL to track the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; time it takes to setup each connection.  In all runs, both &lt;= 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; NP60 and &gt; NP60, the average connection setup time is around 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 200ms.  And the max setup time seen is never much above this 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; value.  That tells me that its not individual connection setup 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; that is the issue.   I then added printfs/fflushes in librdmacm 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; to visually see when a connection is attempted and when it is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; accepted.  When I run with these printfs, I see the connections 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; get setup quickly and evently in the &lt;= NP60 case.  Initially 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; when the job is started, I see a small flurry of connections 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; getting setup, then the run begins and at around 1KB IO size I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; see a 2nd large flurry of connection setups.  Then the test 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; continues and completes.  With the &gt;NP60 case, this second round 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; of connection setups is very sporadic and slow.  Very slow!  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'll see little bursts of ~10-20 connections setup, then long 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; random pauses.  The net is that full connection setup for the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; job takes 5-10min.  During this time the ranks are basically 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; spinning idle awaiting the connections to get setup.  So I'm 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; concluding that something above the BTL layer isn't issuing the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; endpoint connect requests in a timely manner.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Attached are 3 padb dumps during the stall.  Anybody see 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; anything interesting in these?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any ideas how I can further debug this?  Once I get above the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; openib  BTL layer my eyes glaze over and I get lost quickly. :)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I would greatly appreciate any ideas from the OpenMPI experts!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Steve.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Oracle
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Oracle * - Performance Technologies*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Oracle
</span><br>
<span class="quotelev2">&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev2">&gt;&gt; Oracle * - Performance Technologies*
</span><br>
<span class="quotelev2">&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt;&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8511/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-8511/02-part" alt="picture">
<!-- attachment="02-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-8511/03-part" alt="picture">
<!-- attachment="03-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8512.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<li><strong>Previous message:</strong> <a href="8510.php">Samuel K. Gutierrez: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<li><strong>In reply to:</strong> <a href="8494.php">Steve Wise: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<!-- nextthread="start" -->
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
