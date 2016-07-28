<?
$subject_val = "Re: [OMPI devel] NP64 _gather_ problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 17 12:02:16 2010" -->
<!-- isoreceived="20100917160216" -->
<!-- sent="Fri, 17 Sep 2010 11:02:22 -0500" -->
<!-- isosent="20100917160222" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] NP64 _gather_ problem" -->
<!-- id="4C93910E.2020700_at_opengridcomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C938C3F.4040909_at_opengridcomputing.com" -->
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
<strong>Date:</strong> 2010-09-17 12:02:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8493.php">Terry Dontje: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<li><strong>Previous message:</strong> <a href="8491.php">Steve Wise: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<li><strong>In reply to:</strong> <a href="8491.php">Steve Wise: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8493.php">Terry Dontje: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Does anyone have a NP64 IB cluster handy?  I'd be interested if IB 
<br>
behaves this way when running with the rdmacm connect method.  IE with:
<br>
<p>&nbsp;&nbsp;--mca btl_openib_cpc_include rdmacm  --mca btl openib,sm,self
<br>
<p>Steve.
<br>
<p><p>On 9/17/2010 10:41 AM, Steve Wise wrote:
<br>
<span class="quotelev1">&gt; Yes it does.  With mpi_preconnect_mpi to 1, NP64 doesn't stall.  So 
</span><br>
<span class="quotelev1">&gt; its not the algorithm in and of itself, but rather some interplay 
</span><br>
<span class="quotelev1">&gt; between the algorithm and connection setup I guess.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/17/2010 5:24 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Does setting mca parameter mpi_preconnect_mpi to 1 help at all.  This 
</span><br>
<span class="quotelev2">&gt;&gt; might be able to help determine if it is the actually connection set 
</span><br>
<span class="quotelev2">&gt;&gt; up between processes that are out of sync as oppose to something in 
</span><br>
<span class="quotelev2">&gt;&gt; the actual gather algorithm.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Steve Wise wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's a clue:  ompi_coll_tuned_gather_intra_dec_fixed() changes its 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; algorithm for job sizes &gt; 60 to some binomial method.  I changed the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; threshold to 100 and my NP64 jobs run fine.  Now to try and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; understand what about ompi_coll_tuned_gather_intra_binomial() is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; causing these connect delays...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 9/16/2010 1:01 PM, Steve Wise wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Oops.  One key typo here:  This is the IMB-MPI1 gather test, not 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; barrier. :(
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 9/16/2010 12:05 PM, Steve Wise wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm debugging a performance problem with running IMB-MP1/barrier 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in an NP64 cluster (8 nodes, 8 cores each).  I'm using 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; openmpi-1.4.1 from the OFED-1.5.1 distribution.  The BTL is 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; openib/iWARP via Chelsio's T3 RNIC.  In short, a NP60 and smaller 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; run completes in a timely manner as expected,  but NP61 and larger 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; runs come to a crawl at the 8KB IO size and take ~5-10min to 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; complete.  It does complete though.  It behaves this way even if I 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; run on &gt; 8 nodes so there are available cores.  IE a NP64 on a 16 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node cluster still behaves the same way even though there are only 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4 ranks on each node.  So its apparently not a thread starvation 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; issue due to lack of cores.  When in the stalled state, I see on 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the order of 100 or so established iwarp connections on each 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node.  And the connection count increases VERY slowly and 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sporadically (at its peak there are around 800 connections for a 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; NP64 gather operation).  In comparison, when I run the &lt;= NP60 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; runs, the connections quickly ramp up to the expected amount.  I 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; added hooks in the openib BTL to track the time it takes to setup 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; each connection.  In all runs, both &lt;= NP60 and &gt; NP60, the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; average connection setup time is around 200ms.  And the max setup 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; time seen is never much above this value.  That tells me that its 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; not individual connection setup that is the issue.   I then added 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; printfs/fflushes in librdmacm to visually see when a connection is 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; attempted and when it is accepted.  When I run with these printfs, 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I see the connections get setup quickly and evently in the &lt;= NP60 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; case.  Initially when the job is started, I see a small flurry of 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; connections getting setup, then the run begins and at around 1KB 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; IO size I see a 2nd large flurry of connection setups.  Then the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; test continues and completes.  With the &gt;NP60 case, this second 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; round of connection setups is very sporadic and slow.  Very slow!  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'll see little bursts of ~10-20 connections setup, then long 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; random pauses.  The net is that full connection setup for the job 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; takes 5-10min.  During this time the ranks are basically spinning 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; idle awaiting the connections to get setup.  So I'm concluding 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that something above the BTL layer isn't issuing the endpoint 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; connect requests in a timely manner.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Attached are 3 padb dumps during the stall.  Anybody see anything 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; interesting in these?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any ideas how I can further debug this?  Once I get above the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; openib  BTL layer my eyes glaze over and I get lost quickly. :)  I 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; would greatly appreciate any ideas from the OpenMPI experts!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Steve.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8492/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-8492/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8493.php">Terry Dontje: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<li><strong>Previous message:</strong> <a href="8491.php">Steve Wise: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<li><strong>In reply to:</strong> <a href="8491.php">Steve Wise: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8493.php">Terry Dontje: "Re: [OMPI devel] NP64 _gather_ problem"</a>
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
