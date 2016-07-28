<?
$subject_val = "Re: [OMPI devel] NP64 _gather_ problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 17 06:25:25 2010" -->
<!-- isoreceived="20100917102525" -->
<!-- sent="Fri, 17 Sep 2010 06:24:45 -0400" -->
<!-- isosent="20100917102445" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] NP64 _gather_ problem" -->
<!-- id="4C9341ED.2080009_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C92868C.50007_at_opengridcomputing.com" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-17 06:24:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8489.php">Pascal Deveze: "[OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<li><strong>Previous message:</strong> <a href="8487.php">Steve Wise: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<li><strong>In reply to:</strong> <a href="8487.php">Steve Wise: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8491.php">Steve Wise: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<li><strong>Reply:</strong> <a href="8491.php">Steve Wise: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does setting mca parameter mpi_preconnect_mpi to 1 help at all.  This 
<br>
might be able to help determine if it is the actually connection set up 
<br>
between processes that are out of sync as oppose to something in the 
<br>
actual gather algorithm.
<br>
<p>--td
<br>
<p>Steve Wise wrote:
<br>
<span class="quotelev1">&gt; Here's a clue:  ompi_coll_tuned_gather_intra_dec_fixed() changes its 
</span><br>
<span class="quotelev1">&gt; algorithm for job sizes &gt; 60 to some binomial method.  I changed the 
</span><br>
<span class="quotelev1">&gt; threshold to 100 and my NP64 jobs run fine.  Now to try and understand 
</span><br>
<span class="quotelev1">&gt; what about ompi_coll_tuned_gather_intra_binomial() is causing these 
</span><br>
<span class="quotelev1">&gt; connect delays...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/16/2010 1:01 PM, Steve Wise wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Oops.  One key typo here:  This is the IMB-MPI1 gather test, not 
</span><br>
<span class="quotelev2">&gt;&gt; barrier. :(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 9/16/2010 12:05 PM, Steve Wise wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm debugging a performance problem with running IMB-MP1/barrier in 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an NP64 cluster (8 nodes, 8 cores each).  I'm using openmpi-1.4.1 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the OFED-1.5.1 distribution.  The BTL is openib/iWARP via 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Chelsio's T3 RNIC.  In short, a NP60 and smaller run completes in a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; timely manner as expected,  but NP61 and larger runs come to a crawl 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at the 8KB IO size and take ~5-10min to complete.  It does complete 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; though.  It behaves this way even if I run on &gt; 8 nodes so there are 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available cores.  IE a NP64 on a 16 node cluster still behaves the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same way even though there are only 4 ranks on each node.  So its 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; apparently not a thread starvation issue due to lack of cores.  When 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the stalled state, I see on the order of 100 or so established 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; iwarp connections on each node.  And the connection count increases 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; VERY slowly and sporadically (at its peak there are around 800 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connections for a NP64 gather operation).  In comparison, when I run 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the &lt;= NP60 runs, the connections quickly ramp up to the expected 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; amount.  I added hooks in the openib BTL to track the time it takes 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to setup each connection.  In all runs, both &lt;= NP60 and &gt; NP60, the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; average connection setup time is around 200ms.  And the max setup 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time seen is never much above this value.  That tells me that its 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not individual connection setup that is the issue.   I then added 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; printfs/fflushes in librdmacm to visually see when a connection is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attempted and when it is accepted.  When I run with these printfs, I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; see the connections get setup quickly and evently in the &lt;= NP60 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; case.  Initially when the job is started, I see a small flurry of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connections getting setup, then the run begins and at around 1KB IO 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; size I see a 2nd large flurry of connection setups.  Then the test 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; continues and completes.  With the &gt;NP60 case, this second round of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connection setups is very sporadic and slow.  Very slow!  I'll see 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; little bursts of ~10-20 connections setup, then long random pauses.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The net is that full connection setup for the job takes 5-10min.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; During this time the ranks are basically spinning idle awaiting the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connections to get setup.  So I'm concluding that something above 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the BTL layer isn't issuing the endpoint connect requests in a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; timely manner.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Attached are 3 padb dumps during the stall.  Anybody see anything 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interesting in these?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any ideas how I can further debug this?  Once I get above the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openib  BTL layer my eyes glaze over and I get lost quickly. :)  I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would greatly appreciate any ideas from the OpenMPI experts!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Steve.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8488/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-8488/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8489.php">Pascal Deveze: "[OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<li><strong>Previous message:</strong> <a href="8487.php">Steve Wise: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<li><strong>In reply to:</strong> <a href="8487.php">Steve Wise: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8491.php">Steve Wise: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<li><strong>Reply:</strong> <a href="8491.php">Steve Wise: "Re: [OMPI devel] NP64 _gather_ problem"</a>
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
