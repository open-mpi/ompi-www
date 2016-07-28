<?
$subject_val = "[OMPI devel] NP64 barrier problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 16 13:05:28 2010" -->
<!-- isoreceived="20100916170528" -->
<!-- sent="Thu, 16 Sep 2010 12:05:33 -0500" -->
<!-- isosent="20100916170533" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="[OMPI devel] NP64 barrier problem" -->
<!-- id="4C924E5D.1050507_at_opengridcomputing.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] NP64 barrier problem<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-16 13:05:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8486.php">Steve Wise: "Re: [OMPI devel] NP64 barrier problem"</a>
<li><strong>Previous message:</strong> <a href="8484.php">Jeff Squyres: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8486.php">Steve Wise: "Re: [OMPI devel] NP64 barrier problem"</a>
<li><strong>Reply:</strong> <a href="8486.php">Steve Wise: "Re: [OMPI devel] NP64 barrier problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Hi,
<br>
<p>I'm debugging a performance problem with running IMB-MP1/barrier in an 
<br>
NP64 cluster (8 nodes, 8 cores each).  I'm using openmpi-1.4.1 from the 
<br>
OFED-1.5.1 distribution.  The BTL is openib/iWARP via Chelsio's T3 
<br>
RNIC.  In short, a NP60 and smaller run completes in a timely manner as 
<br>
expected,  but NP61 and larger runs come to a crawl at the 8KB IO size 
<br>
and take ~5-10min to complete.  It does complete though.  It behaves 
<br>
this way even if I run on &gt; 8 nodes so there are available cores.  IE a 
<br>
NP64 on a 16 node cluster still behaves the same way even though there 
<br>
are only 4 ranks on each node.  So its apparently not a thread 
<br>
starvation issue due to lack of cores.  When in the stalled state, I see 
<br>
on the order of 100 or so established iwarp connections on each node.  
<br>
And the connection count increases VERY slowly and sporadically (at its 
<br>
peak there are around 800 connections for a NP64 gather operation).  In 
<br>
comparison, when I run the &lt;= NP60 runs, the connections quickly ramp up 
<br>
to the expected amount.  I added hooks in the openib BTL to track the 
<br>
time it takes to setup each connection.  In all runs, both &lt;= NP60 and &gt; 
<br>
NP60, the average connection setup time is around 200ms.  And the max 
<br>
setup time seen is never much above this value.  That tells me that its 
<br>
not individual connection setup that is the issue.   I then added 
<br>
printfs/fflushes in librdmacm to visually see when a connection is 
<br>
attempted and when it is accepted.  When I run with these printfs, I see 
<br>
the connections get setup quickly and evently in the &lt;= NP60 case.  
<br>
Initially when the job is started, I see a small flurry of connections 
<br>
getting setup, then the run begins and at around 1KB IO size I see a 2nd 
<br>
large flurry of connection setups.  Then the test continues and 
<br>
completes.  With the &gt;NP60 case, this second round of connection setups 
<br>
is very sporadic and slow.  Very slow!  I'll see little bursts of ~10-20 
<br>
connections setup, then long random pauses.  The net is that full 
<br>
connection setup for the job takes 5-10min.  During this time the ranks 
<br>
are basically spinning idle awaiting the connections to get setup.  So 
<br>
I'm concluding that something above the BTL layer isn't issuing the 
<br>
endpoint connect requests in a timely manner.
<br>
<p>Attached are 3 padb dumps during the stall.  Anybody see anything 
<br>
interesting in these?
<br>
<p>Any ideas how I can further debug this?  Once I get above the openib  
<br>
BTL layer my eyes glaze over and I get lost quickly. :)  I would greatly 
<br>
appreciate any ideas from the OpenMPI experts!
<br>
<p><p>Thanks in advance,
<br>
<p>Steve.
<br>
<p><p>


<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8485/padb.txt">padb.txt</a>
</ul>
<!-- attachment="padb.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8485/padb2.txt">padb2.txt</a>
</ul>
<!-- attachment="padb2.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8485/padb3.txt">padb3.txt</a>
</ul>
<!-- attachment="padb3.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8486.php">Steve Wise: "Re: [OMPI devel] NP64 barrier problem"</a>
<li><strong>Previous message:</strong> <a href="8484.php">Jeff Squyres: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8486.php">Steve Wise: "Re: [OMPI devel] NP64 barrier problem"</a>
<li><strong>Reply:</strong> <a href="8486.php">Steve Wise: "Re: [OMPI devel] NP64 barrier problem"</a>
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
