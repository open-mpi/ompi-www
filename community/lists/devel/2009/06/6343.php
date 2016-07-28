<?
$subject_val = "Re: [OMPI devel] sm BTL flow management";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 03:06:17 2009" -->
<!-- isoreceived="20090625070617" -->
<!-- sent="Thu, 25 Jun 2009 00:06:23 -0700" -->
<!-- isosent="20090625070623" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sm BTL flow management" -->
<!-- id="4A4321EF.5000400_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A423758.5030908_at_lanl.gov" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-25 03:06:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6344.php">Ralph Castain: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Previous message:</strong> <a href="6342.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21517"</a>
<li><strong>In reply to:</strong> <a href="6324.php">Bryan Lally: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6344.php">Ralph Castain: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Reply:</strong> <a href="6344.php">Ralph Castain: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Reply:</strong> <a href="6352.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Reply:</strong> <a href="6353.php">Brian W. Barrett: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bryan Lally wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Be happy to put it through the wringer... :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My wringer is available, too.
</span><br>
<p>'kay.  Try
<br>
<p>hg clone ssh://www.open-mpi.org/~eloh/hg/pending_sends
<br>
<p>which is r21498 but with changes to poll one's own FIFO more regularly 
<br>
(e.g., even when just performing sends) and to retry pending sends more 
<br>
aggressively (e.g., whenever about to try a send or whenever one calls 
<br>
sm progress).  I maintain a count of outstanding fragments (sent but not 
<br>
yet returned to free list) and of pending sends (total over all queues) 
<br>
to keep overheads down.
<br>
<p>My various test codes (repeated Bcasts, half-duplex point-to-point 
<br>
sends, etc.) all pass now.  There is no perceptible degradation in 
<br>
0-byte pingpong latency that I can tell.  George's fixed-free-list 
<br>
proposal may be better, but I'm making these bits available for some 
<br>
soak and feedback.
<br>
<p>Life is still not perfect.  If you look in 
<br>
mca_btl_sm_component_progress, when a process receives a message 
<br>
fragment and returns it to the sender, it executes code like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto recheck_peer;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
<p>Okay, the reason I show you that code is because a static code checker 
<br>
should easily identify the break statement as dead code.  It'll never be 
<br>
reached.  Anyhow, in English, what's happening is if you receive a 
<br>
message fragment, you keep polling your FIFO.  So, consider the case of 
<br>
half-duplex point-to-point traffic:  one process only sends and the 
<br>
other process only receives.  Previously, this would eventually hang.  
<br>
Now, it won't.  But (I haven't confirmed 100% yet), I don't think it 
<br>
executes very pleasantly.  E.g., if you have
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for ( i = 0; i &lt; N; i++ ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( me == 0 ) MPI_Send(...);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( me == 1 ) MPI_Recv(...);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>At some point, the receiver falls hopelessly behind.  The sender keeps 
<br>
pumping messages and the receiver keeps polling its FIFO, pulling in 
<br>
messages and returning fragments to the sender so that the sender can 
<br>
keep on going.  Problem is, all that is happening within one MPI_Recv 
<br>
call... which in a test code might be pulling in 100Ks of messages.  The 
<br>
MPI_Recv call won't return until the sender lets up.  Then, the rest of 
<br>
the MPI_Recv calls will execute, all pulling messages out of the local 
<br>
unexpected-message queue.
<br>
<p>Not sure yet how I want to manage this.  The bottom line might be that 
<br>
if the MPI application has no flow control, the underlying MPI 
<br>
implementation is going to have to do something that won't make everyone 
<br>
happy.  Oh well.  At least the program makes progress and completes in 
<br>
reason time.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6344.php">Ralph Castain: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Previous message:</strong> <a href="6342.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21517"</a>
<li><strong>In reply to:</strong> <a href="6324.php">Bryan Lally: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6344.php">Ralph Castain: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Reply:</strong> <a href="6344.php">Ralph Castain: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Reply:</strong> <a href="6352.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Reply:</strong> <a href="6353.php">Brian W. Barrett: "Re: [OMPI devel] sm BTL flow management"</a>
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
