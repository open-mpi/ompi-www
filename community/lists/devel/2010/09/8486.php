<?
$subject_val = "Re: [OMPI devel] NP64 barrier problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 16 14:01:05 2010" -->
<!-- isoreceived="20100916180105" -->
<!-- sent="Thu, 16 Sep 2010 13:01:03 -0500" -->
<!-- isosent="20100916180103" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] NP64 barrier problem" -->
<!-- id="4C925B5F.8080109_at_opengridcomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C924E5D.1050507_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] NP64 barrier problem<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-16 14:01:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8487.php">Steve Wise: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<li><strong>Previous message:</strong> <a href="8485.php">Steve Wise: "[OMPI devel] NP64 barrier problem"</a>
<li><strong>In reply to:</strong> <a href="8485.php">Steve Wise: "[OMPI devel] NP64 barrier problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8487.php">Steve Wise: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<li><strong>Reply:</strong> <a href="8487.php">Steve Wise: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Oops.  One key typo here:  This is the IMB-MPI1 gather test, not 
<br>
barrier. :(
<br>
<p><p>On 9/16/2010 12:05 PM, Steve Wise wrote:
<br>
<span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm debugging a performance problem with running IMB-MP1/barrier in an 
</span><br>
<span class="quotelev1">&gt; NP64 cluster (8 nodes, 8 cores each).  I'm using openmpi-1.4.1 from 
</span><br>
<span class="quotelev1">&gt; the OFED-1.5.1 distribution.  The BTL is openib/iWARP via Chelsio's T3 
</span><br>
<span class="quotelev1">&gt; RNIC.  In short, a NP60 and smaller run completes in a timely manner 
</span><br>
<span class="quotelev1">&gt; as expected,  but NP61 and larger runs come to a crawl at the 8KB IO 
</span><br>
<span class="quotelev1">&gt; size and take ~5-10min to complete.  It does complete though.  It 
</span><br>
<span class="quotelev1">&gt; behaves this way even if I run on &gt; 8 nodes so there are available 
</span><br>
<span class="quotelev1">&gt; cores.  IE a NP64 on a 16 node cluster still behaves the same way even 
</span><br>
<span class="quotelev1">&gt; though there are only 4 ranks on each node.  So its apparently not a 
</span><br>
<span class="quotelev1">&gt; thread starvation issue due to lack of cores.  When in the stalled 
</span><br>
<span class="quotelev1">&gt; state, I see on the order of 100 or so established iwarp connections 
</span><br>
<span class="quotelev1">&gt; on each node.  And the connection count increases VERY slowly and 
</span><br>
<span class="quotelev1">&gt; sporadically (at its peak there are around 800 connections for a NP64 
</span><br>
<span class="quotelev1">&gt; gather operation).  In comparison, when I run the &lt;= NP60 runs, the 
</span><br>
<span class="quotelev1">&gt; connections quickly ramp up to the expected amount.  I added hooks in 
</span><br>
<span class="quotelev1">&gt; the openib BTL to track the time it takes to setup each connection.  
</span><br>
<span class="quotelev1">&gt; In all runs, both &lt;= NP60 and &gt; NP60, the average connection setup 
</span><br>
<span class="quotelev1">&gt; time is around 200ms.  And the max setup time seen is never much above 
</span><br>
<span class="quotelev1">&gt; this value.  That tells me that its not individual connection setup 
</span><br>
<span class="quotelev1">&gt; that is the issue.   I then added printfs/fflushes in librdmacm to 
</span><br>
<span class="quotelev1">&gt; visually see when a connection is attempted and when it is accepted.  
</span><br>
<span class="quotelev1">&gt; When I run with these printfs, I see the connections get setup quickly 
</span><br>
<span class="quotelev1">&gt; and evently in the &lt;= NP60 case.  Initially when the job is started, I 
</span><br>
<span class="quotelev1">&gt; see a small flurry of connections getting setup, then the run begins 
</span><br>
<span class="quotelev1">&gt; and at around 1KB IO size I see a 2nd large flurry of connection 
</span><br>
<span class="quotelev1">&gt; setups.  Then the test continues and completes.  With the &gt;NP60 case, 
</span><br>
<span class="quotelev1">&gt; this second round of connection setups is very sporadic and slow.  
</span><br>
<span class="quotelev1">&gt; Very slow!  I'll see little bursts of ~10-20 connections setup, then 
</span><br>
<span class="quotelev1">&gt; long random pauses.  The net is that full connection setup for the job 
</span><br>
<span class="quotelev1">&gt; takes 5-10min.  During this time the ranks are basically spinning idle 
</span><br>
<span class="quotelev1">&gt; awaiting the connections to get setup.  So I'm concluding that 
</span><br>
<span class="quotelev1">&gt; something above the BTL layer isn't issuing the endpoint connect 
</span><br>
<span class="quotelev1">&gt; requests in a timely manner.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached are 3 padb dumps during the stall.  Anybody see anything 
</span><br>
<span class="quotelev1">&gt; interesting in these?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas how I can further debug this?  Once I get above the openib  
</span><br>
<span class="quotelev1">&gt; BTL layer my eyes glaze over and I get lost quickly. :)  I would 
</span><br>
<span class="quotelev1">&gt; greatly appreciate any ideas from the OpenMPI experts!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Steve.
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8486/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8487.php">Steve Wise: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<li><strong>Previous message:</strong> <a href="8485.php">Steve Wise: "[OMPI devel] NP64 barrier problem"</a>
<li><strong>In reply to:</strong> <a href="8485.php">Steve Wise: "[OMPI devel] NP64 barrier problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8487.php">Steve Wise: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<li><strong>Reply:</strong> <a href="8487.php">Steve Wise: "Re: [OMPI devel] NP64 _gather_ problem"</a>
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
