<?
$subject_val = "Re: [OMPI devel] sm BTL flow management";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 16:17:20 2009" -->
<!-- isoreceived="20090625201720" -->
<!-- sent="Thu, 25 Jun 2009 16:17:16 -0400 (EDT)" -->
<!-- isosent="20090625201716" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sm BTL flow management" -->
<!-- id="alpine.DEB.1.10.0906251514480.2932_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A4321EF.5000400_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] sm BTL flow management<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-25 16:17:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6354.php">Brian W. Barrett: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Previous message:</strong> <a href="6352.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>In reply to:</strong> <a href="6343.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6355.php">Paul H. Hargrove: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Reply:</strong> <a href="6355.php">Paul H. Hargrove: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Reply:</strong> <a href="6358.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All -
<br>
<p>Jeff, Eugene, and I had a long discussion this morning on the sm BTL flow 
<br>
management issues and came to a couple of conclusions.
<br>
<p>* Jeff, Eugene, and I are all convinced that Eugene's addition of polling 
<br>
the receive queue to drain acks when sends start backing up is required 
<br>
for deadlock avoidance.
<br>
<p>* We're also convinced that George's proposal, while a good idea in 
<br>
general, is not sufficient.  The send path doesn't appear to sufficiently 
<br>
progress the btl to avoid the deadlocks we're seeing with the SM btl 
<br>
today.  Therefore, while I still recommend sizing the fifo appropriately 
<br>
and limiting the freelist size, I think it's not sufficient to solve all 
<br>
problems.
<br>
<p>* Finally, it took an hour, but we did determine one of the major 
<br>
differences between 1.2.8 and 1.3.0 in terms of sm is how messages were 
<br>
pulled off the FIFO.  In 1.2.8 (and all earlier versions), we return from 
<br>
btl_progress after a single message is received (ack or message) or the 
<br>
fifo was empty.  In 1.3.0 (pre-srq work Eugene did), we changed to 
<br>
completely draining all queues before returning from btl_progress.  This 
<br>
has led to a situation where a single call to btl_progress can make a 
<br>
large number of callbacks into the PML (900,000 times in one of Eugene's 
<br>
test case).  The change was made to resolve an issue Terry was having with 
<br>
performance of a benchmark.  We've decided that it would be adventageous 
<br>
to try something between the two points and drain X number of messages 
<br>
from the queue, then return, where X is 100 or so at most.  This should 
<br>
cover the performance issues Terry saw, but still not cause the huge 
<br>
number of messages added to the unexpected queue with a single call to 
<br>
MPI_Recv.  Since a recv that is matched on the unexpected queue doesn't 
<br>
result in a call to opal_progress, this should help balance the load a 
<br>
little bit better.  Eugene's going to take a stab at implementing this 
<br>
short term.
<br>
<p>I think the combination of Euegene's deadlock avoidance fix and the 
<br>
careful queue draining should make me comfortable enough to start another 
<br>
round of testing, but at least explains the bottom line issues.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6354.php">Brian W. Barrett: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Previous message:</strong> <a href="6352.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>In reply to:</strong> <a href="6343.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6355.php">Paul H. Hargrove: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Reply:</strong> <a href="6355.php">Paul H. Hargrove: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Reply:</strong> <a href="6358.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
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
